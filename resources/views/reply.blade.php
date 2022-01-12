<!DOCTYPE html>
<html lang="en">

<head>
   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Portal</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('vendor/chartist/css/chartist.min.css')}}">
    <link href="{{asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">   



   
    <link href="{{asset('vendor/dropzone/dist/dropzone.css')}}" rel="stylesheet">

 <style type="text/css">
 .IMGthumbnail{
    max-width:120px;
    height:100px;
    margin:auto;
  background-color: #ececec;
  padding:2px;
  border:none;
}

.IMGthumbnail img{
   max-width:100%;
max-height:100%;
}

 #pdf img{
      height: 100px;
    }

.imgThumbContainer{

  margin:4px;
  border: solid;
  display: inline-block;
  justify-content: center;
    position: relative;
    border: 1px solid rgba(0,0,0,0.14);
  -webkit-box-shadow: 0 0 4px 0 rgba(0,0,0,0.2);
    box-shadow: 0 0 4px 0 rgba(0,0,0,.2);
}



.imgThumbContainer > .imgName{
  text-align:center;
  padding: 2px 6px;
  margin-top:4px;
  font-size:13px;
  height: 25px;
  overflow: hidden;
}

.imgThumbContainer > .imgRemoveBtn{
    position: absolute;
    color: #e91e63ba;
    right: 2px;
    top: 2px;
    cursor: pointer;
    display: none;
}

.RearangeBox:hover > .imgRemoveBtn{ 
    display: block;
}
</style>
<meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->

          
            <div class="nav-header">
            <a href="index.php" class="brand-logo">
                 <img src="{{asset('images/tlr-white.png')}}" height="55px">

            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
        
    
        
        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <!-- <div class="dashboard_bar">
                                Dashboard
                            </div> -->
                        </div>

                        <ul class="navbar-nav header-right">
                        
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link primary" href="#" role="button" data-toggle="dropdown">
                                    <svg width="22" height="22" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21.75 14.8385V12.0463C21.7471 9.88552 20.9385 7.80353 19.4821 6.20735C18.0258 4.61116 16.0264 3.61555 13.875 3.41516V1.625C13.875 1.39294 13.7828 1.17038 13.6187 1.00628C13.4546 0.842187 13.2321 0.75 13 0.75C12.7679 0.75 12.5454 0.842187 12.3813 1.00628C12.2172 1.17038 12.125 1.39294 12.125 1.625V3.41534C9.97361 3.61572 7.97429 4.61131 6.51794 6.20746C5.06159 7.80361 4.25291 9.88555 4.25 12.0463V14.8383C3.26257 15.0412 2.37529 15.5784 1.73774 16.3593C1.10019 17.1401 0.751339 18.1169 0.75 19.125C0.750764 19.821 1.02757 20.4882 1.51969 20.9803C2.01181 21.4724 2.67904 21.7492 3.375 21.75H8.71346C8.91521 22.738 9.45205 23.6259 10.2331 24.2636C11.0142 24.9013 11.9916 25.2497 13 25.2497C14.0084 25.2497 14.9858 24.9013 15.7669 24.2636C16.548 23.6259 17.0848 22.738 17.2865 21.75H22.625C23.321 21.7492 23.9882 21.4724 24.4803 20.9803C24.9724 20.4882 25.2492 19.821 25.25 19.125C25.2486 18.117 24.8998 17.1402 24.2622 16.3594C23.6247 15.5786 22.7374 15.0414 21.75 14.8385ZM6 12.0463C6.00232 10.2113 6.73226 8.45223 8.02974 7.15474C9.32723 5.85726 11.0863 5.12732 12.9212 5.125H13.0788C14.9137 5.12732 16.6728 5.85726 17.9703 7.15474C19.2677 8.45223 19.9977 10.2113 20 12.0463V14.75H6V12.0463ZM13 23.5C12.4589 23.4983 11.9316 23.3292 11.4905 23.0159C11.0493 22.7026 10.716 22.2604 10.5363 21.75H15.4637C15.284 22.2604 14.9507 22.7026 14.5095 23.0159C14.0684 23.3292 13.5411 23.4983 13 23.5ZM22.625 20H3.375C3.14298 19.9999 2.9205 19.9076 2.75644 19.7436C2.59237 19.5795 2.50014 19.357 2.5 19.125C2.50076 18.429 2.77757 17.7618 3.26969 17.2697C3.76181 16.7776 4.42904 16.5008 5.125 16.5H20.875C21.571 16.5008 22.2382 16.7776 22.7303 17.2697C23.2224 17.7618 23.4992 18.429 23.5 19.125C23.4999 19.357 23.4076 19.5795 23.2436 19.7436C23.0795 19.9076 22.857 19.9999 22.625 20Z" fill="#000"></path></svg>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3" style="height:380px;">
                                        <ul class="timeline">
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media mr-2">
                                                        <img alt="image" width="50" src="images/avatar/1.jpg">
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media mr-2 media-info">
                                                        KG
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Resport created successfully</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media mr-2 media-success">
                                                        <i class="fa fa-home"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                             <li>
                                                <div class="timeline-panel">
                                                    <div class="media mr-2">
                                                        <img alt="image" width="50" src="images/avatar/1.jpg">
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media mr-2 media-danger">
                                                        KG
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Resport created successfully</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media mr-2 media-primary">
                                                        <i class="fa fa-home"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="all-notification" href="#">See all notifications <i class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <img src="{{asset('images/profile/pic1.png')}}" width="20" alt=""/>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{{ url('users_profile') }}" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="{{ url('users_dashboard') }}" class="dropdown-item ai-icon">
                                        <i class="fa fa-ticket text-success"></i>
                                        <span class="ml-2">Ticket </span>
                                    </a>
                                    <a href="{{ url('userlogout') }}" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
                <ul class="metismenu mt-4 pt-5" id="menu">
                    <li><a class="has-arrow ai-icon" href="{{ url('users_dashboard') }}">
                            <i class="fa fa-ticket"></i>
                            <span class="nav-text">Ticket</span>
                        </a>
                      
                    </li>
                    <li><a class="has-arrow ai-icon" href="{{ url('users_profile') }}" aria-expanded="false">
                        <i class="fa fa-user-o"></i>
                            <span class="nav-text">Profile</span>
                        </a>
                        
                    </li>
                   
                    <li><a class="has-arrow ai-icon" href="{{ url('userlogout') }}" aria-expanded="false">
                            <i class="fa fa-sign-out"></i>
                            <span class="nav-text">Log out</span>
                        </a>
                        
                    </li>
                    
                  
                </ul>
                
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->





        
        <!--**********************************
            EventList
        ***********************************-->
        
        <div class="event-sidebar dz-scroll" id="eventSidebar">
            <div class="card shadow-none rounded-0 bg-transparent h-auto mb-0">
                <div class="card-body text-center event-calender pb-2">
                    <input type='text' class="form-control d-none" id='datetimepicker1' />
                </div>
            </div>
            <!-- <div class="card shadow-none rounded-0 bg-transparent h-auto">
                <div class="card-header border-0 pb-0">
                    <h4 class="text-black">Upcoming Events</h4>
                </div>
                <div class="card-body">
                    <div class="media mb-5 align-items-center event-list">
                        <div class="p-3 text-center rounded mr-3 date-bx bgl-primary">
                            <h2 class="mb-0 text-black">3</h2>
                            <h5 class="mb-1 text-black">Wed</h5>
                        </div>
                        <div class="media-body px-0">
                            <h6 class="mt-0 mb-3 fs-14"><a class="text-black" href="events.html">Live Concert Choir Charity Event 2020</a></h6>
                            <ul class="fs-14 list-inline mb-2 d-flex justify-content-between">
                                <li>Ticket Sold</li>
                                <li>561/650</li>
                            </ul>
                            <div class="progress mb-0" style="height:4px; width:100%;">
                                <div class="progress-bar bg-warning progress-animated" style="width:85%; height:8px;" role="progressbar">
                                    <span class="sr-only">60% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="media mb-5 align-items-center event-list">
                        <div class="p-3 text-center rounded mr-3 date-bx bgl-primary">
                            <h2 class="mb-0 text-black">16</h2>
                            <h5 class="mb-1 text-black">Tue</h5>
                        </div>
                        <div class="media-body px-0">
                            <h6 class="mt-0 mb-3 fs-14"><a class="text-black" href="events.html">Beautiful Fireworks Show In The New Year Night</a></h6>
                            <ul class="fs-14 list-inline mb-2 d-flex justify-content-between">
                                <li>Ticket Sold</li>
                                <li>431/650</li>
                            </ul>
                            <div class="progress mb-0" style="height:4px; width:100%;">
                                <div class="progress-bar bg-warning progress-animated" style="width:50%; height:8px;" role="progressbar">
                                    <span class="sr-only">60% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="media mb-0 align-items-center event-list">
                        <div class="p-3 text-center rounded mr-3 date-bx bgl-success">
                            <h2 class="mb-0 text-black">28</h2>
                            <h5 class="mb-1 text-black">Fri</h5>
                        </div>
                        <div class="media-body px-0">
                            <h6 class="mt-0 mb-3 fs-14"><a class="text-black" href="events.html">The Story Of Danau Toba (Musical Drama)</a></h6>
                            <ul class="fs-14 list-inline mb-2 d-flex justify-content-between">
                                <li>Ticket Sold</li>
                                <li>650/650</li>
                            </ul>
                            <div class="progress mb-0" style="height:4px; width:100%;">
                                <div class="progress-bar bg-success progress-animated" style="width:100%; height:8px;" role="progressbar">
                                    <span class="sr-only">60% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer justify-content-between border-0 d-flex fs-14">
                    <span>5 events more</span>
                    <a href="javascript:void(0);" class="text-primary">View more <i class="las la-long-arrow-alt-right scale5 ml-2"></i></a>
                </div>
            </div> -->
            <div class="card shadow-none rounded-0 bg-transparent h-auto mb-0">
                <div class="card-body text-center event-calender">
                    <a href="javascript:void(0);" class="btn btn-primary btn-rounded btn-lg shadow">
                        + Add Ticket
                    </a>
                </div>
            </div>
        </div>
        
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body rightside-event">
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-xl-10 mx-auto">
                        <div id="user-activity" class="card">
                            <div class="card-header border-0 pb-0 d-sm-flex d-block">
                                <div>
                                    <h4 class="card-title mb-1">Replay</h4>
                                </div>
                                
                            </div>

       <!--**********************************
            Content body start
        ***********************************-->
                           
                            <div class="card">
                                <div class="card-body">
                                    <form name="save-multiple-files" method="POST"  action="{{ route('ticket.msg', ['id' => $t_id, 'user_id' => $sender]) }}" accept-charset="utf-8" enctype="multipart/form-data">
                                       @csrf
                                        <div class="ml-0 ml-sm-4 ml-sm-0">
                                            <div class="toolbar mb-4" role="toolbar">

                                                <div class="compose-content">

                                               
                                                    <!-- <div class="form-group">
                                                        <input type="text" class="form-control bg-transparent" placeholder=" Title" name="title">
                                                    </div> -->


                                                    <div class="form-group">
                                                    <textarea id="email-compose-editor" name="msg" class="textarea_editor form-control bg-transparent" rows="5" placeholder="Description"></textarea>
                                                    </div>

                                                    <h5 class="mb-4"><i class="fa fa-paperclip"></i> Upload docx multiple Attatchment</h5>


                                                    <div class="fallback">
                                                     <input type="file" name="images[]" id="files" placeholder="" multiple />     
                                                    </div>
                                                    
                                                     <div id="pdf"></div>

                                                    <div style='padding:14px; margin:auto';>
                                                    <div id="sortableImgThumbnailPreview"></div>
                                                    </div>

                                                    <!--  <div class="form-group">
                                                        <label class="control-label">Status :</label>
                                                        <select name="status" id="status" class="form-control">
                                                        <option value="1">Active</option>
                                                        <option value="0">Inactive</option>
                                                        </select>
                                                    </div> -->

                                                </div>
                                                <div class="text-left mt-4 mb-5">
                                                   <button class="btn btn-primary btn-sl-sm mr-2" type="submit" id="submit"><span class="mr-2"><i class="fa fa-paper-plane"></i></span>Send</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            <!--**********************************
                            Content body end
                            ***********************************-->
                            </div>
                        </div>
                    </div>
                    
                
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright ©  &amp; 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

     <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
  <script src="{{asset('vendor/global/global.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('vendor/chart.js/Chart.bundle.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap-datetimepicker/js/moment.js')}}"></script>
<script src="{{asset('vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')}}"></script>
<!-- Apex Chart -->
<script src="{{asset('vendor/apexchart/apexchart.js')}}"></script>

<!-- Chart piety plugin files -->
<script src="{{asset('vendor/peity/jquery.peity.min.js')}}"></script>    

<!-- Dashboard 1 -->
<script src="{{asset('js/dashboard/dashboard-1.js')}}"></script>
<script src="{{asset('vendor/dropzone/dist/dropzone.js')}}"></script>
<script src="{{asset('js/custom.min.js')}}"></script>
<script src="{{asset('js/deznav-init.js')}}"></script>
<script src="{{asset('js/demo.js')}}"></script>

    







        <!--<script src="vendor/dropzone/dist/dropzone.js"></script>-->

        <script>
            $(document).ready(function() {
   $('#resets').on('click', function() {     
      $('#upload-files').val('');
   });
});

            $(function() {
            $("#sortableImgThumbnailPreview").sortable({
             connectWith: ".RearangeBox",
            
                
              start: function( event, ui ) { 
                   $(ui.item).addClass("dragElemThumbnail");
                   ui.placeholder.height(ui.item.height());
           
               },
                stop:function( event, ui ) { 
                   $(ui.item).removeClass("dragElemThumbnail");
               }
            });
            $("#sortableImgThumbnailPreview").disableSelection();
        });




document.getElementById('files').addEventListener('change', handleFileSelect, false);

  function handleFileSelect(evt) {
    
    var files = evt.target.files; 
    var output = document.getElementById("sortableImgThumbnailPreview");
    
    // Loop through the FileList and render image files as thumbnails.
    for (var i = 0, f; f = files[i]; i++) {

      // Only process image files.
      if (!f.type.match('image.*')) {
        continue;
      }

      var reader = new FileReader();

      // Closure to capture the file information.
      reader.onload = (function(theFile) {
        return function(e) {
          // Render thumbnail.
           var imgThumbnailElem = "<div class='RearangeBox imgThumbContainer'><i class='material-icons imgRemoveBtn' onclick='removeThumbnailIMG(this)'>cancel</i><div class='IMGthumbnail' ><img  src='" + e.target.result + "'" + "title='"+ theFile.name + "'/></div><div class='imgName'>"+ theFile.name +"</div></div>";
                    
                    output.innerHTML = output.innerHTML + imgThumbnailElem; 
          
        };
      })(f);

      // Read in the image file as a data URL.
      reader.readAsDataURL(f);
    }
  }

  function removeThumbnailIMG(elm){
    elm.parentNode.outerHTML='';
  }
        </script>



<script type="text/javascript">
      document.getElementById('files').onchange = function () {
  
      fileName = document.querySelector('#files').value;
      extension = fileName.split('.').pop();
       if(extension=='pdf'){

        var img = document.createElement('img');
       img.src = 'https://www.apkmirror.com/wp-content/uploads/2019/09/5d80e2671f067.png'; 
       document.getElementById('pdf').appendChild(img);

       }
         
  }
  </script>
  
</body>

</html>