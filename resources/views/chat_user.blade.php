
    <div class="card-header border-0 pb-0 d-sm-flex d-block">
        <div>
        <h4> <span class="more">{{ $ticket_result['subject'] }}</span> </h4>
          <ul>
               <li>
                    <?php
                $ticket_images = getTicketImages($ticket_result['id']); 
                 if(count($ticket_images)>0){ 
                      foreach(json_decode($ticket_images['images'])as $t_picture) {
                 //$ext = substr($ticket_images['images'], -3); 
                 ?>
                    <img src="<?php echo asset('/public/files/'.$t_picture);?>" class="img-size" style="width:80px;height:80px;">
                <?php }} ?>  
                 </li>
          </ul>
        </div>
        <div class="float-right position-fixed set-pos">
        <a href="{{ route('ticket.reply', ['id' => $id_ticket, 'user_id' => $sender]) }}" type="button" class="btn btn-primary" id="reply">Reply <i class="fa fa-reply"></i></a>
        </div>      
    </div>
@foreach ($messages as $message)
<div class="card-body">
@if($message["sender"]!= $sender)
<div class="Administrator">
<div class="row">
<div class="col-lg-4">
<div class="row">

<div class="col-md-3">
<img class="w-100" src="/images/avatar/1.png" alt="">
</div>

<div class="col-md-9">
<div class="bdr-l">  
<h5>{{ getAdminName($message["sender"]) }}</h5>
<small class="text-black">Admin</small>
</div>
</div>
</div>
</div>
<div class="col-lg-8">
<div class="row">
<div class="col-xl-12 text-success">
Posted On : {{ $message["created_at"] }}
</div>
<div class="col-xl-12">{{ $message["msg"] }}
</div>
<div class="col-xl-12 footer-chat">
Thanks
<small>  Website </small>
</div>
    <div class="col-xl-12 footer-chat text-black">
     <?php $images = getImageName($message['id']); 
     if(count($images)>0){ ?>
        <a href="#" class="text-danger"> <i class="fa fa-paperclip"></i>{{ count(json_decode($images['images']))}} file attached</a>
        <div class="attachment mt-3">
            <div id="lightgallery" class="attachment">
            <?php 
                foreach(json_decode($images['images'])as $picture) {?>
                        <?php $ext = substr($picture, -3); ?>
                               @if($ext=='pdf')
                               <i class="fa fa-file-pdf-o" style="font-size:48px;color:red"></i>
                               <a download="<?php echo asset('/public/files/'.$picture);?>" href="<?php echo asset('/public/files/'.$picture);?>" target="_blank"><i class="fas fa-download"></i></a>
                               @else
                   
                        <img src="<?php echo asset('/public/files/'.$picture);?>" class="img-size">
                        <a download="<?php echo asset('/public/files/'.$picture);?>" href="<?php echo asset('/public/files/'.$picture);?>" target="_blank"><i class="fas fa-download"></i></a>
                           @endif
            <?php }?>
            </div>
        </div>
    <?php } ?>
    </div>
</div>
</div>      

</div><!---row-->
</div><!---Administrator--->
@endif

@if($sender==$message["sender"])
<div class="userss mt-4">
<div class="row">
<div class="col-lg-8">
<div class="row">
<div class="col-xl-12 text-success">
Posted On : {{ $message["created_at"] }}
</div>
<div class="col-xl-12">{{ $message["msg"] }}

</div>
<div class="col-xl-12 footer-chat">
Thanks
<small>{{ getUserName($message["sender"]) }}</small>
</div>
   <div class="col-xl-12 footer-chat text-black"> 
        <?php $images = getImageName($message['id']); 
            if(count($images)>0){ ?>
        <a href="#" class="text-danger"> <i class="fa fa-paperclip"></i> {{ count(json_decode($images['images']))}} file attached</a>
        <div class="attachment mt-3">
            <div id="lightgallery" class="attachment">
            <?php
                foreach(json_decode($images['images'])as $picture) {?>
                
                       <?php $ext = substr($picture, -3); ?>
                               @if($ext=='pdf')
                               <i class="fa fa-file-pdf-o" style="font-size:48px;color:red"></i>
                               <a download="<?php echo asset('/public/files/'.$picture);?>" href="<?php echo asset('/public/files/'.$picture);?>" target="_blank"><i class="fas fa-download"></i></a>
                               @else
                   
                        <img src="<?php echo asset('/public/files/'.$picture);?>" class="img-size">
                         <a download="<?php echo asset('/public/files/'.$picture);?>" href="<?php echo asset('/public/files/'.$picture);?>" target="_blank"><i class="fas fa-download"></i></a>
                              @endif
        <?php  } ?>
            </div>
        </div>
    <?php } ?>
    </div>
</div>
</div> 
<div class="col-lg-4">
<div class="row">
<div class="col-md-9">
<div class="bdr-r text-right">  
<h5>{{ getUserName($message["sender"]) }}</h5>
<small class="text-black">User</small>
</div>
</div>
<div class="col-md-3">
<img class="w-100" src="images/avatar/1.png" alt="">
</div>
</div>
</div>      
</div><!---row-->
</div><!---userss-->
@endif
</div>
@endforeach



                       


                  



<style type="text/css">
.morecontent span {
display: none;
}
.morelink {
display: block;
color: red;
margin-left: 722px;
margin-top: -22px;
}
</style>


<!--  Read more  -->
<script>
$(document).ready(function() {

// Configure/customize these variables.
var showChar = 80;  // How many characters are shown by default
var ellipsestext = "...";
var moretext = "View more >>";
var lesstext = "<< View less";


$('.more').each(function() {
var content = $(this).html();

if(content.length > showChar) {

var c = content.substr(0, showChar);
var h = content.substr(showChar, content.length - showChar);

var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

$(this).html(html);
}

});

$(".morelink").click(function(){
if($(this).hasClass("less")) {
$(this).removeClass("less");
$(this).html(moretext);
} else {
$(this).addClass("less");
$(this).html(lesstext);
}
$(this).parent().prev().toggle();
$(this).prev().toggle();
return false;
});

});
</script>

