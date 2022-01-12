<?php
use App\Product;
use App\Chatadmin;
use App\Reply;
use App\File;
use App\User;

if (! function_exists('getUserName')) {
    function getUserName($id){
       $username = User::where('id', $id)->first();
       $client_name = $username->name;
       // print_r($client_name);exit;
        return $client_name;
    }
}

if (! function_exists('getAdminName')) {
    function getAdminName($id){
       $username = User::where('id', $id)->first();
       $name = $username->name;
        return $name;
    }
}

if (! function_exists('getImageName')) {
    function getImageName($id){
      //$images = Chatadmin::where('user_id', $id)->get();
      $images = Chatadmin::select('images')->where('msg_id', $id)->get()->toArray();
       // echo "<pre>"; 
      // print_r(count($images)); 
      // exit;
      if(count($images)>0){
        return $images[0];
      }else{
        $images = array();
        return $images;
      }     
    }
}


if (! function_exists('getUserImageName')) {
    function getUserImageName($id){
        //$images = Chatadmin::where('user_id', $id)->get();
        $images = Reply::select('images')->where('user_id', $id)->get();
        // echo "<pre>"; print_r($images); exit;
        return $images;
        }
    }
    
    
    if (! function_exists('getTicketImages')) {
    function getTicketImages($id){
        $timages = File::select('images')->where('user_id', $id)->get()->toArray();
        if(count($timages)>0){
            return $timages[0];
          }else{
            $timages = array();
            return $timages;
          }   
        //return $timages[0];
    }
  }




