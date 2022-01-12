<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title>Luis Rendon</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"  />
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  </head>
  <body class="app sidebar-mini" id="chstlist-page">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">Admin</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://www.trinidadrealtor.com/assets/front_end/images/avatar-person.svg" width="20%"  alt="User Image">
        <div>
          <p class="app-sidebar__user-name">Luis Rendon</p>
          <p class="app-sidebar__user-designation">Admin</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item " href="{{ url('left_dashboard') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li class="treeview "><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-user-plus"></i><span class="app-menu__label">Users</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu ">
            <li><a class="treeview-item" href="{{ url('new_users') }}"><i class="icon fa fa-circle-o"></i> Add Users</a></li>
            <li><a class="treeview-item" href="{{ url('new_users_list') }}"><i class="icon fa fa-circle-o"></i> Users List</a></li>
          </ul>
        </li>

       <li><a class="app-menu__item " href="{{ url('admin_chat') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Chat</span></a></li>

        <li><a class="app-menu__item " href="{{ route('logout') }}"><i class="app-menu__icon fa fa-sign-out"></i><span class="app-menu__label">Logout</span></a></li>
      </ul>
    </aside>
    <main class="app-content">
      
    

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">

            <div class="pb-4 pt-3">
            <h2 class="card-title mb-1"> <i class="fa fa-ticket"></i> Welcome to the Support Center</h2>
          </div>
          <hr>

              <div class="table-responsive">
                  <table class="table table-responsive-md">
      <thead>
        <tr>
          <th><strong># Ticket ID</strong></th>
          <th><strong>Date</strong></th>
          <th><strong>Subject</strong></th>
          <th><strong>User</strong></th>
          <th><strong>Status</strong></th>
          <th><strong>Chat</strong></th>
          
        </tr>
      </thead>
      <tbody>

        @foreach($tickets as $ticket)
          <tr>
            <td><strong>#{{$ticket->id}}</strong></td>
            <td>{{$ticket->created_at->format('d M Y h:i A') }}</td>
           
            <td>{{ substr($ticket->subject,0,30) }}.....</td>
            <td><?php echo ucfirst(getUserName($ticket->user_id)); ?></td>
            <!-- @if($ticket->status =='1')         
            <td><span class="badge light badge-success">Open</span></td>        
            @else
            <td><span class="badge light badge-danger">Closed</span></td>            
            @endif -->

           <td> <input data-id="{{$ticket->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Open" data-off="Closed" {{ $ticket->status ? 'checked' : '' }}> </td>
                        <!--   <span class="badge light badge-info">open</span>
            </td> -->
            <!-- <td><a href="chat.php"><span class="badge light badge-success">
              <i class="fa fa-comments"></i> Chat</span></a></td> -->
            
					@if($ticket->status =='1')         
					<td><a href="{{ route('admin.chat', ['id' => $ticket->user_id, 'ticket_id' => $ticket->id]) }}"><span class="badge light badge-success">
              <i class="fa fa-comments"></i> Chat</span></a></td>     
					@else
				<td><a href="#"><span class="badge light badge-success">
              <i class="fa fa-comments"></i> Chat</span></a></td>           
					@endif
            
              
          </tr>
        @endforeach
</tbody>
</table>
                </div>
              </div>
            </div>
          </div>
      </div>
    </main>

   
 
    <!-- Essential javascripts for application to work-->
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="/js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="/js/plugins/chart.js"></script>
    <script type="text/javascript">
      var data = {
        labels: ["January", "February", "March", "April", "May"],
        datasets: [
          {
            label: "My First dataset",
            fillColor: "rgba(220,220,220,0.2)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: [65, 59, 80, 81, 56]
          },
          {
            label: "My Second dataset",
            fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [28, 48, 40, 19, 86]
          }
        ]
      };
      var pdata = [
        {
          value: 300,
          color: "#46BFBD",
          highlight: "#5AD3D1",
          label: "Complete"
        },
        {
          value: 50,
          color:"#F7464A",
          highlight: "#FF5A5E",
          label: "In-Progress"
        }
      ]
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
    </script>
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-72504830-1', 'auto');
        ga('send', 'pageview');
      }
    </script>

<script type="text/javascript">
          for (var nk = window.location,
      o = $(".app-menu a").filter(function() {
        return this.href == nk;
      })
      .addClass("active")
      .parent()
      .addClass("active");;) {
    // console.log(o)
    if (!o.is("li")) break;
    o = o.parent()
      .addClass("mm-show")
      .parent()
      .addClass("active");
    }
    </script>
       <!------>



  <script>
  $(function() {
    $('.toggle-class').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0; 
        var user_id = $(this).data('id'); 
         console.log(status);
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/ticketChangeStatus',
            data: {'status': status, 'user_id': user_id},
            success: function(data){
              console.log(data.success)
            }
        });
    })
  })
</script>
       
  </body>
</html>