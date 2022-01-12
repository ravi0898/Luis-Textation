<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;
use App\Ticket;
use App\Message;
use App\Chatadmin;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Session;
// use Illuminate\Support\Facades\Redirect;
//use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Session;
use DB;

class ProductController extends Controller
{
    // public function index()
    // {
    //     $products = auth()->user()->products;
 
    //     return response()->json([
    //         'success' => true,
    //         'data' => $products
    //     ]);
    // }

     public function listing()
    {
        return redirect()->route('new_users_list');
    }

    public function new_users_form()
    { 
            return view('auth.add_users'); 
    }

    public function new_users_list()
    {
        $add_users_list = DB::table('products')->orderBy('status', 'DESC')->get();
            return view('auth.users_list' ,compact('add_users_list'));
    }

    public function userChangeStatus(Request $request)
    {
    	\Log::info($request->all());
        $user = Product::find($request->user_id);
        $user->status = $request->status;
        $user->save();
  
        return response()->json(['success'=>'Status change successfully.']);
    }

    public function ticketChangeStatus(Request $request)
    {
       
    	\Log::info($request->all());
        $user = Ticket::find($request->user_id);
        $user->status = $request->status;
        $user->save();
  
        return response()->json(['success'=>'Status change successfully.']);
    }
 
    public function show($id)
    {
        $product = auth()->user()->products()->find($id);
 
        if (!$product) {
            return response()->json([
                'success' => false,
                'message' => 'Product with id ' . $id . ' not found'
            ], 400);
        }
 
        return response()->json([
            'success' => true,
            'data' => $product->toArray()
        ], 400);
    }

    public function edit($id)
    {
       // $user = Product::first();
      // $id = $_GET['id'];
       $user = Product::where('id',$id)->first();
      
        //echo "<pre>"; print_r($user); exit;
        //$user = auth()->user()->products()->find($id);
             
        return view('auth.edit_users', compact('user'));
    }
 
    public function store(Request $request)
    {
        
        // https://www.itsolutionstuff.com/post/laravel-53-form-input-validation-rules-example-with-demoexample.html
        $this->validate($request, [
            'client_name' => 'required',
            'company_name' => 'required',
            'email' => 'required|email|unique:products',
            'mobile_no' => 'required|numeric|digits:10',
            'priority' => 'required'
           
           // 'price' => 'required|integer'
        ],
        [
            'client_name.required' => 'Please Enter Client name',
            'company_name.required' => 'Please Enter Company name',
            'email.required' => 'Please Enter Password',
            'mobile_no.required' => 'Please Enter Mobile number'
        ]
        );

        $user = User::create([
            'name' => $request->client_name,
            'user_type' => 'user',
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);  
        $user=$user->toArray();    
 
        $product = new Product();
        $product->client_name = $request->client_name;
        $product->company_name = $request->company_name;
        $product->email = $request->email;
        $product->mobile_no = $request->mobile_no;
        $product->priority = $request->priority;
        $product->status = $request->status;
        $product->password = $request->password;
        $product->data_id =$user['id'];

         // email data
        $email_data = array(
            'client_name' =>  $request->client_name,
             'password' =>  $request->password,
            'email' => $request->email,
        );

        // send email with the template
        Mail::send('welcome_email', $email_data, function ($message) use ($email_data) {
            $message->to($email_data['email'], $email_data['client_name'], $email_data['password'])
            ->subject('Your account details for login')
            ->from('db.rahulpatwari@gmail.com', 'Luis Rendor');
            });

           // return $user;
 
        if (auth()->user()->products()->save($product)){
           return redirect()->route('new_users_list');
        }
        else{
            return back()->with('error', 'Whoops! some error encountered. Please try again.');
        }
    }
 
    public function update(Request $request, $id)
    {
        $product = auth()->user()->products()->find($id);
 
        // if (!$product) {
        //     return response()->json([
        //         'success' => false,
        //         'message' => 'Product with id ' . $id . ' not found'
        //     ], 400);
        // }
 
        $updated = $product->fill($request->all())->save();
 
        if ($updated)
        return redirect()->route('new_users_list');
            // return response()->json([
            //     'success' => true
            // ]);
        // else
        //     return response()->json([
        //         'success' => false,
        //         'message' => 'Product could not be updated'
        //     ], 500);
    }
 
    public function destroy($id)
    {
       // $row = auth()->user()->products()->find($id);
       $row = Product::where('id', $id)->first();
 
        // if (!$product) {
        //     return response()->json([
        //         'success' => false,
        //         'message' => 'Product with id ' . $id . ' not found'
        //     ], 400);
        // }
 
        if ($row->delete()) {
            // return response()->json([
            //     'success' => true
            // ]);
            return Redirect::route('new_users_list');
        } 
    }

    public function admin_chat() {
        $tickets = Ticket::orderBy('id', 'DESC')->get();       
        return view('auth.chat_list', compact('tickets'));
    }

    public function chat($id,$ticket_id) {
         $id_user = $id;
         $ticket_id=$ticket_id;
         $ticket_result = Ticket::where('id', $ticket_id)->first()->toArray();
         
         $sender = 11;
        // $logged_user_detail = Product::where('data_id', $sender)->first()->toArray();
        // $client_name = ucfirst(strtolower($logged_user_detail["client_name"]));
        // $admin_chat_images = Chatadmin::get();
         //echo "<pre>";print_r($admin_chat_images); exit;
         $reciever = $id_user;
         // $messages = Message::where('sender', $sender)->where('receiver', $reciever)->orWhere('sender',$reciever)->where('receiver', $sender)->get()->toArray();

          $messages = Message::where('sender', $sender)->where('receiver', $reciever)->where('ticket_id', $ticket_id)->orWhere('sender',$reciever)->where('receiver', $sender)->where('ticket_id', $ticket_id)->get()->toArray();
        //  return view('chat' ,compact('messages', 'sender', 'reciever', 'client_name', 'ticket_result'));
          return view('auth.chat', compact('id_user','messages', 'sender', 'reciever','ticket_id','ticket_result'));
    }

    public function postchat(Request $request , $id) {
         $request->validate([
            'file' => 'mimes:png,jpg,jpeg,csv,txt,xlx,xls,pdf|max:2048'
            ]);
        //$input=$request->all();
        $id_redirect = $id;
        $input=$request->all();
        $message1 = $input['msg'];
        if($request->images !=''){
            $images1 = $request->images;
        }
        $ticket_id = $request->ticket_id;
        $sender = 11;
        $reciever = $id;



        $images=array();
        if($files=$request->file('images')){
          //echo "<pre>";  print_r($files); exit;
            foreach($files as $file){
                $name=$file->getClientOriginalName();
              
                $file->move('public/files',$name);
                $images[]=$name;
            }
        }


        $message = new Message();
        $message->msg =  $message1;
        //$message->title = $title;
          $message->sender = $sender;
            $message->receiver = $reciever;
            $message->ticket_id = $ticket_id;
        $message->save();
        $msg_id = $message->id;
        $sender_id = $message->sender;

    //   Chatadmin::insert( [
    //     'images'=>  implode("|",$images),
    //       'user_id'=>   $msg_id,
    //   ]);

    $file= new Chatadmin();
    $file->images=json_encode($images);
    $file->msg_id=$msg_id;
    $file->sender=$sender_id;
    $file->save();
  
      return redirect()->route('admin.chat', [
          'id' => $id_redirect, 'ticket_id' => $ticket_id
      ]);
   }
   public function newchat(Request $request){
        $ticket_id=$request->ticket_id;
        $sender = 11;
        $reciever = $request->id;
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
        //print_r($all_msg);exit;
          return response()->json(['messages'=>view('auth.chat_admin')->with('messages',$messages)->render(),'count'=>$count,'count1'=>$count1]);
          //(view('auth.chat_admin', compact('id_user','messages', 'sender', 'reciever','ticket_id')));
   }
}
