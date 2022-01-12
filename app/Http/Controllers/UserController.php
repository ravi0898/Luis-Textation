<?php

namespace App\Http\Controllers;

use App\Product;
use App\File;
use App\Ticket;
use App\Message;
use App\Reply;
use App\Chatadmin;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Session;
// use Illuminate\Support\Facades\Redirect;
//use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;
use Session;

class UserController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function login(Request $request)
    {
       
            $this->validate($request, [
                'email'=>'required|email',
            'password' => 'required'
            ],
            [
                'email.required' => 'Please enter email ',
                'password.required' => 'Please enter password '
            
            ]
            );

            // $user_role = DB::table('users')->select('user_type')->get();
            // if($user_role['user_type']=='user') {
        
            $credentials = [
                'email' => $request->email,
                'password' => $request->password
            ];
            if (auth()->attempt($credentials)) {
                $user = Auth::user();
                Session::put('user', $user);
                return redirect()->route('users_dashboard');
            } else {
                return back()->with(['msg' => 'Your credential are Wrong']);
            }
       // }
    }

     public function dashboard() {
        $user=Session::get('user');
        $user_id = $user['id'];
        //print_r($user_id);exit;
        $ticket_result = Ticket::where('user_id', $user_id)->orderBy('status', 'desc')->get();
        // echo "<pre>"; print_r($ticket_result);exit;
        return view('users_dashboard' ,compact('ticket_result'));
       
     }
     
    public function img_upload()
    {
        return view('img_upload');
    }

     public function add_ticket() {
        return view('add-ticket');
     }

     public function users_profile() {
        //$user_id = Auth::user()->id;
         //print_r($user_id); exit;

           $user=Session::get('user');
        $user_id = $user['id'];
        $info = Product::where('data_id', $user_id)->first()->toArray();
        $client_name = $info['client_name'];
        $email = $info['email'];
        $mobile_no = $info['mobile_no'];
          //print_r($ticket_result); exit;
         return view('profile', compact('client_name', 'email', 'mobile_no'));
      }
 
      public function profile_update(Request $request) {
        $user=Session::get('user');
        $user_id = $user['id'];
         $client_name = $request['client_name'];
         $email = $request['email'];
         $mobile_no = $request['mobile_no'];
         $updated = DB::table('products')
         ->where('data_id', $user_id)
         ->update(['client_name' => $client_name,
                   'email' => $email,
                   'mobile_no' => $mobile_no
        ]);
 
        $updated1 = DB::table('users')
        ->where('id', $user_id)
        ->update(['name' => $client_name,
                  'email' => $email
       ]);
 
       // if ($updated && $updated1)
        return redirect()->back();
 
      }

   

     public function logout(Request $request)
    {
    $request->session()->flush();
    Auth::logout();
    return Redirect('login_users');
     }

     public function store(Request $request)
     {
          $request->validate([
            'file' => 'mimes:png,jpg,jpeg,csv,txt,xlx,xls,pdf|max:2048'
            ]);
        $input=$request->all();
        $subject = $input['subject'];
        // $status = $input['status'];
       // echo "<pre>"; print_r($subject);exit;
        $images=array();
        if($files=$request->file('images')){
          //echo "<pre>";  print_r($files); exit;
            foreach($files as $file){
                $name=$file->getClientOriginalName();
              
                $file->move('public/files',$name);
                $images[]=$name;
            }
        }
        $user_id = Auth::user()->id;
        $ticket = new Ticket();
        $ticket->subject =  $subject;
        $ticket->user_id = $user_id;
        // $ticket->status = $status;
        $ticket->save();
        $ticket_id = $ticket->id;
        if($files=$request->file('images')){
            File::insert( [
                // 'images'=>  implode("|",$images),
                'images'=>  json_encode($images),
                'user_id'=>   $ticket_id,
               
                //you can put other insertion here
            ]);
        }
        return redirect('users_dashboard');
     }

     public function chat($user_id, $id) {
         $id_ticket = $id;
         $user = $user_id;
         $sender = $user;
         $logged_user_detail = Product::where('data_id', $sender)->first()->toArray();
         $client_name = ucfirst(strtolower($logged_user_detail["client_name"]));
         $ticket_result = Ticket::where('id', $id)->first()->toArray();
        //  $ticket_images = File::where('user_id', $user_id)->first()->toArray();
        //  print_r($ticket_images);exit;
         //$user_chat_images = Reply::get();
         

         $reciever = 11;
         $messages = Message::where('sender', $sender)->where('receiver', $reciever)->where('ticket_id', $id_ticket)->orWhere('sender',$reciever)->where('receiver', $sender)->where('ticket_id', $id_ticket)->get()->toArray();
         //echo("<pre>");
         //print_r($messages);exit;
        // print_r($messages); exit;
        // return view('chat', compact($messages,$messages));
          return view('chat' ,compact('messages', 'sender', 'reciever', 'client_name', 'ticket_result', 'id_ticket'));
     }

     public function reply($user_id, $id) {
         $t_id = $id;
         $sender = $user_id;
        return view('reply' ,compact('t_id', 'sender'));
     }

     public function msg(Request $request, $user_id, $id) {
           $request->validate([
            'file' => 'mimes:png,jpg,jpeg,csv,txt,xlx,xls,pdf|max:2048'
            ]);
          $id_redirect = $id;
        $input=$request->all();
         // echo "<pre>"; print_r($input);exit;
        $message1 = $input['msg'];
        //$title = $input['title'];
       // echo "<pre>"; print_r($input);exit;
        
         $images=array();
        if($files=$request->file('images')){
          //echo "<pre>";  print_r($files); exit;
            foreach($files as $file){
                $name=$file->getClientOriginalName();
              
                $file->move('public/files',$name);
                $images[]=$name;
            }
        }

         $user = $user_id;
         $sender = $user;
        // print_r($sender); exit;
         $reciever = 11;


          $message = new Message();
          $message->msg =  $message1;
          //$message->title = $title;
            $message->sender = $sender;
              $message->receiver = $reciever;
              $message->ticket_id = $id_redirect;
          $message->save();
          $msg_id = $message->id;

        // Reply::insert( [
        //     'images'=>    json_encode($images),
        //     'user_id'=>   $user_id,
        // ]);
        
        $file= new Chatadmin();
        $file->images=json_encode($images);
        $file->msg_id=$msg_id;
        $file->save();
    
        return redirect()->route('ticket.chat', [
            'user_id' => $sender,  'id' => $id_redirect
        ]);
     }

     public function newchat(Request $request){
        $ticket_id=$request->ticket_id;
        $id_ticket=$ticket_id;
        $ticket_result = Ticket::where('id', $ticket_id)->first()->toArray();
        $sender = $request->id;
        $reciever = 11;
        $messages = Message::where('sender', $sender)->where('receiver', $reciever)->where('ticket_id', $ticket_id)->orWhere('sender',$reciever)->where('receiver', $sender)->where('ticket_id', $ticket_id)->get()->toArray();
       
        $msg = Message::Where('sender',$reciever)->where('receiver', $sender)->where('ticket_id', $ticket_id)->get()->toArray();
        $msg1 = Message::where('sender', $sender)->where('receiver', $reciever)->where('ticket_id', $ticket_id)->get()->toArray();
        
        $count =  count($msg);
        $count1 =  count($msg1);
        
        if($count>0 && $count1>0){
                      $updated1 = DB::table('tickets')
        ->where('id', $ticket_id)
        ->update(['status' => 0]);
        }
        //print_r($messages);exit;
          return response()->json(['messages'=>view('chat_user', compact('sender','id_ticket','ticket_result'))->with('messages',$messages)->render(),'count'=>$count,'count1'=>$count1]);
          //(view('auth.chat_admin', compact('id_user','messages', 'sender', 'reciever','ticket_id')));
   }

}
