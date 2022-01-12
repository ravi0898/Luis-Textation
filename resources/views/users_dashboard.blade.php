<!DOCTYPE html>
<html lang="en">

<head>
   
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
									<h4 class="card-title mb-1"> <i class="fa fa-ticket"></i> Welcome to the Support Center</h4>
								</div>

								<div class="float-right">
									<a href="{{ url('add_ticket') }}" type="button" class="btn btn-primary"> <i class="fa fa-plus-circle"></i>  Add ticket</a>
							    </div>		
								
							</div>
<div class="card-body">
	<div class="table-responsive">
		<table class="table table-responsive-md">
			<thead>
				<tr>
					<th><strong># Ticket ID</strong></th>
					<th><strong>Date</strong></th>
					<th><strong>Subject</strong></th>
					<th><strong>Status</strong></th>
					<th><strong>Chat</strong></th>
					
				</tr>
			</thead>
			<tbody>

				 @foreach ($ticket_result as $result)
				<tr>
					<td><strong>#{{ $result->id }}</strong></td>
					<!-- <td>30 August 2021 04:26 pm</td> -->
					<td>{{ $result->created_at->format('d M Y h:i A') }}</td>
					<td>{{ substr($result->subject,0,30) }}.....</td>

					@if($result->status =='1')         
					<td><span class="badge light badge-success">Open</span></td>        
					@else
					<td><span class="badge light badge-danger">Closed</span></td>            
					@endif
					
						@if($result->status =='1')         
						<td><a href="{{ route('ticket.chat', ['id' => $result->id, 'user_id' => $result->user_id]) }}"><span class="badge light badge-success">
						<i class="fa fa-comments"></i> Chat</span></a></td>    
					@else
					<td><a href="#"><span class="badge light badge-success">
						<i class="fa fa-comments"></i> Chat</span></a></td>        
					@endif
					
				

						
						
			    </tr>

			    @endforeach

			
		
		
	</tr>
</tbody>
</table>
</div>
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
</body>

</html>