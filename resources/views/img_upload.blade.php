<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   
    @include('portal.include.css')

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
					<a href="add-ticket.php" class="btn btn-primary btn-rounded btn-lg shadow">
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
					
					<div class="col-xl-12">
						<div id="user-activity" class="card">
							<div class="card-header border-0 pb-0 d-sm-flex d-block">
								<div>
								
								</div>

								<div class="float-right">
								
							    </div>		
								
							</div>
                              <!--code here for upload-->
                              <div class="container lst">


                                @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Sorry!</strong> There were more problems with your HTML input.<br><br>
                                    <ul>
                                      @foreach ($errors->all() as $error)
                                          <li>{{ $error }}</li>
                                      @endforeach
                                    </ul>
                                </div>
                                @endif
                                
                                
                                @if(session('success'))
                                <div class="alert alert-success">
                                  {{ session('success') }}
                                </div> 
                                @endif
                                
                                
                                
                                <form method="post" action="{{url('image')}}" enctype="multipart/form-data">
                                    @csrf
                                
                                <div class="input-group control-group img_div form-group" >
                                    <input type="file" name="image[]" class="form-control">
                                    <div class="input-group-btn"> 
                                      <button class="btn btn-success btn-add-more" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                                    </div>
                                  </div>
                                 
                                  <div class="clone hide " style="display: none;">
                                    <div class="control-group input-group form-group" style="margin-top:10px">
                                      <input type="file" name="image[]" class="form-control">
                                      <div class="input-group-btn"> 
                                        <button class="btn btn-danger btn-remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                      </div>
                                    </div>
                                  </div>
                                
                                  <button type="submit" class="btn btn-success" style="margin-top:10px">Submit</button>
                                  
                                </form>       
                              </div>
                              <!--upload end-->
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
 
 <script type="text/javascript">
    $(document).ready(function() {
      $(".btn-add-more").click(function(){ 
          var html = $(".clone").html();
          $(".img_div").after(html);
      });
      $("body").on("click",".btn-remove",function(){ 
          $(this).parents(".control-group").remove();
      });
    });
</script>
</body>

</html>