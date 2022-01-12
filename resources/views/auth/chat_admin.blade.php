<?php 

$sender = 11;

?>

@foreach ($messages as $message)

    <div class="messages">

    @if($message["sender"]!= $sender)

    <div class="message"><img src="{{asset('images/profile/pic1.png')}}" width="20" alt="">

      <p class="info">{{ $message["msg"] }}</p>

    </div>

    <div class="message me" style="float: left;">

                   <div class="demo-gallery">

                    <ul id="lightgallery">

                    <?php $images = getImageName($message['id']); 

                    if(count($images)>0){

                      foreach(json_decode($images['images'])as $picture) {?>

                        <li data-responsive="<?php echo asset('/public/files/'.$picture);?>" data-src="<?php echo asset('/public/files/'.$picture);?>"

                        data-sub-html="">

                          <a href="">

                           

                              <div class="demo-gallery-poster">
                                  <?php $ext = substr($picture, -3); ?>
                               @if($ext=='pdf')
                               <i class="fa fa-file-pdf-o" style="font-size:48px;color:red"></i>
                               <a download="<?php echo asset('/public/files/'.$picture);?>" href="<?php echo asset('/public/files/'.$picture);?>" target="_blank"><i class="fas fa-download"></i></a>
                               @else
                              <img src="<?php echo asset('/public/files/'.$picture);?>" style="width:100px;height:80px;">
                               <a download="<?php echo asset('/public/files/'.$picture);?>" href="<?php echo asset('/public/files/'.$picture);?>" target="_blank"><i class="fas fa-download"></i></a>  
                               @endif 
                           </div>

                          </a>

                        </li>

                          <?php

                      }

                    }?> 

                  </ul>

                  </div>

                </div>

    @endif



    @if($sender==$message["sender"])

    <div class="message me"><img src="{{asset('images/profile/pic1.png')}}" style="height: 24px;width: 34px;padding-left: 10px!important;">

      <?php if($message["msg"] !=''){ ?>
                    <p class="info">{{ $message["msg"] }}</p>
                   <?php }?>

    

    </div>

    <div class="message me">

                   <div class="demo-gallery">

                    <ul id="lightgallery">

                    <?php $images = getImageName($message['id']); 

                    if(count($images)>0){

                      foreach(json_decode($images['images'])as $picture) {?>

                        <li data-responsive="https://sachinchoolur.github.io/lightGallery/static/img/1-375.jpg 375, https://sachinchoolur.github.io/lightGallery/static/img/1-480.jpg 480, https://sachinchoolur.github.io/lightGallery/static/img/1.jpg 800" data-src="https://sachinchoolur.github.io/lightGallery/static/img/1-1600.jpg"

                        data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>" data-pinterest-text="Pin it" data-tweet-text="share on twitter ">

                                <?php $ext = substr($picture, -3); ?>
                               @if($ext=='pdf')
                               <i class="fa fa-file-pdf-o" style="font-size:48px;color:red"></i>
                               <a download="<?php echo asset('/public/files/'.$picture);?>" href="<?php echo asset('/public/files/'.$picture);?>" target="_blank"><i class="fas fa-download"></i></a>
                               @else
                               <img class="img-responsive" src="<?php echo asset('/public/files/'.$picture);?>" style="width:100px;height:80px;">
                               <a download="<?php echo asset('/public/files/'.$picture);?>" href="<?php echo asset('/public/files/'.$picture);?>" target="_blank"><i class="fas fa-download"></i></a>  
                               @endif

                        </li>

                          <?php

                      }

                    }?> 

                  </ul>

                  </div>

                </div>

    @endif

    </div>

@endforeach







                         