<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Luis Rendon</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
    .button.button-small {
      height: 30px;
      line-height: 30px;
      padding: 0px 10px;
    }
    .toggle.btn{
          border-radius: 20px;
          min-width: 125px!important;
    }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"  />
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">Vali</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <!--<ul class="app-nav">-->
      <!--  <li class="app-search">-->
      <!--    <input class="app-search__input" type="search" placeholder="Search">-->
      <!--    <button class="app-search__button"><i class="fa fa-search"></i></button>-->
      <!--  </li>-->
        <!--Notification Menu-->
      <!--  <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>-->
      <!--    <ul class="app-notification dropdown-menu dropdown-menu-right">-->
      <!--      <li class="app-notification__title">You have 4 new notifications.</li>-->
      <!--      <div class="app-notification__content">-->
      <!--        <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>-->
      <!--            <div>-->
      <!--              <p class="app-notification__message">Lisa sent you a mail</p>-->
      <!--              <p class="app-notification__meta">2 min ago</p>-->
      <!--            </div></a></li>-->
      <!--        <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>-->
      <!--            <div>-->
      <!--              <p class="app-notification__message">Mail server not working</p>-->
      <!--              <p class="app-notification__meta">5 min ago</p>-->
      <!--            </div></a></li>-->
      <!--        <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>-->
      <!--            <div>-->
      <!--              <p class="app-notification__message">Transaction complete</p>-->
      <!--              <p class="app-notification__meta">2 days ago</p>-->
      <!--            </div></a></li>-->
      <!--        <div class="app-notification__content">-->
      <!--          <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>-->
      <!--              <div>-->
      <!--                <p class="app-notification__message">Lisa sent you a mail</p>-->
      <!--                <p class="app-notification__meta">2 min ago</p>-->
      <!--              </div></a></li>-->
      <!--          <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>-->
      <!--              <div>-->
      <!--                <p class="app-notification__message">Mail server not working</p>-->
      <!--                <p class="app-notification__meta">5 min ago</p>-->
      <!--              </div></a></li>-->
      <!--          <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>-->
      <!--              <div>-->
      <!--                <p class="app-notification__message">Transaction complete</p>-->
      <!--                <p class="app-notification__meta">2 days ago</p>-->
      <!--              </div></a></li>-->
      <!--        </div>-->
      <!--      </div>-->
      <!--      <li class="app-notification__footer"><a href="#">See all notifications.</a></li>-->
      <!--    </ul>-->
      <!--  </li>-->
        <!-- User Menu-->
      <!--  <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>-->
      <!--    <ul class="dropdown-menu settings-menu dropdown-menu-right">-->
      <!--      <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>-->
      <!--      <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>-->
      <!--      <li><a class="dropdown-item" href="{{ route('logout') }}"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>-->
      <!--    </ul>-->
      <!--  </li>-->
      <!--</ul>-->
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
        <li><a class="app-menu__item" href="{{ url('left_dashboard') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
       

         <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-user-plus"></i><span class="app-menu__label">Users</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ url('new_users') }}"><i class="icon fa fa-circle-o"></i> Add Users</a></li>
            <li><a class="treeview-item" href="{{ url('new_users_list') }}"><i class="icon fa fa-circle-o"></i> Users List</a></li>
          </ul>
        </li>
         <li><a class="app-menu__item " href="{{ url('admin_chat') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Chat</span></a></li>
        <li><a class="app-menu__item " href="{{ route('logout') }}"><i class="app-menu__icon fa fa-sign-out"></i><span class="app-menu__label">Logout</span></a></li>
      </ul>
    </aside>
    <main class="app-content">
      <!--<div class="app-title">-->
      <!--  <div>-->
      <!--    <h1><i class="fa fa-th-list"></i> Data Table</h1>-->
      <!--    <p>Table to display analytical data effectively</p>-->
      <!--  </div>-->
      <!--  <ul class="app-breadcrumb breadcrumb side">-->
      <!--    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>-->
      <!--    <li class="breadcrumb-item">Tables</li>-->
      <!--    <li class="breadcrumb-item active"><a href="#">Data Table</a></li>-->
      <!--  </ul>-->
      <!--</div>-->
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>Client Name</th>
                      <th>Company Name</th>
                      <th>Email</th>
                      <th>Mobile No.</th>
                      <th>priority</th>
                      <th>Status</th>
                     
                      <th>Action</th>
                     
                    </tr>
                  </thead>
                 
                  <tbody>
                   @foreach ($add_users_list as $user)
                   <tr>  
                      <td> {{ $user->client_name }}</td>
                      <td>{{ $user->company_name }}</td>
                      <td>{{ $user->email }}</td>
                      <td>{{ $user->mobile_no }}</td>
                      <td>{{ $user->priority }}</td>
                      <!-- <td>{{ $user->status }}</td> -->
                       <td>
                          <input data-id="{{$user->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $user->status ? 'checked' : '' }}>
                       </td>
                    <!--   <td>
                        <a class="button button-small edit" title="Edit" >
                          <i class="fa fa-pencil"></i>
                        </a> 
                        <a class="button button-small" title="Delete" id="{{ $user->id }}" href="">
                          <i class="fa fa-trash"></i>
                        </a>
                      </td> -->
                      

                       <td>
                        <a href="{{ route('add_users_list.edit', $user->id)}}" class="button button-small edit"><i class="fa fa-pencil"></i></a>
                      
                         <!--  <form action="{{ route('add_users_list.destroy', $user->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                          </form> -->
                          <a class="button button-small" href="{{ route('delete.destroy', ['id' => $user->id]) }}"><i class="fa fa-trash"></i></a>
                        </td>

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
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
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

    <script>
  $(function() {
    $('.toggle-class').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0; 
        var user_id = $(this).data('id'); 
         console.log(status);
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/userChangeStatus',
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