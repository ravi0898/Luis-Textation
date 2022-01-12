<!DOCTYPE html>
<html lang="en">

<head>
   
    @include('portal.include.css')
   
    <link href="vendor/dropzone/dist/dropzone.css" rel="stylesheet">

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

            @include('portal.include.sidebar')
        
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
                                    <form name="save-multiple-files" method="POST"  action="{{ url('msg') }}" accept-charset="utf-8" enctype="multipart/form-data">
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

   @include('portal.include.js')
        <script src="vendor/dropzone/dist/dropzone.js"></script>

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
</body>

</html>