<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="">
    <!-- Twitter meta-->
  
    <title>Luis Rendon</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">Vali</a>
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
    
      <div class="row">
        <div class="col-md-10 mx-auto">
          <div class="tile">
            <h3 class="tile-title">Add User</h3>
             <!--  @if(session()->has('success'))
              <div class="isa_success" style="color: #4F8A10; background-color: #DFF2BF;">
                <i class="fa fa-check"></i>
                  {{ session()->get('success') }}
              </div>
              @endif -->
            <div class="tile-body">
               @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>
        @endif
              <form method="POST" action="{{ url('userspost') }}">
                <input type="hidden" name="password" value="123456">
                 @csrf

                 <div class="row">
                
                <div class="col-lg-6">
                <div class="form-group">
                  <label class="control-label">Client Name:</label>
                  <input class="form-control" type="text" placeholder="Enter client name" name="client_name" id="client_name" value="{{ old('client_name') }}">
                   @if ($errors->has('client_name'))
                    <span class="text-danger">{{ $errors->first('client_name') }}</span>
                   @endif
                </div>
              </div>
                 
                 <div class="col-lg-6">
                 <div class="form-group">
                    <label class="control-label">Company Name:</label>
                    <input class="form-control" type="text" placeholder="Enter company name" name="company_name" id="company_name" value="{{ old('company_name') }}">
                     @if ($errors->has('company_name'))
                    <span class="text-danger">{{ $errors->first('company_name') }}</span>
                     @endif
                </div>
              </div>

               <div class="col-lg-6">
                <div class="form-group">
                  <label class="control-label">Email</label>
                  <input class="form-control" type="text" placeholder="Enter email address" name="email" id="email" value="{{ old('email') }}">
                   @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                     @endif
                </div>
              </div>
                
                <div class="col-lg-6">
                <div class="form-group">
                  <label class="control-label">Mobile No. :</label>
                  <input class="form-control" type="text" placeholder="Enter 10 digit mobile number" name="mobile_no" id="mobile_no" value="{{ old('mobile_no') }}">
                   @if ($errors->has('mobile_no'))
                    <span class="text-danger">{{ $errors->first('mobile_no') }}</span>
                     @endif
                </div>
              </div>
                
                <div class="col-lg-6">
                <div class="form-group">
                  <label class="control-label">Priority :</label>
                  <select name="priority" id="priority" class="form-control">
                    <option value="High">High</option>
                    <option value="Medium">Medium</option>
                    <option value="Low">Low</option>
                </select>
                </div>
              </div>

                <div class="col-lg-6">
                <div class="form-group">
                  <label class="control-label">Status :</label>
                  <select name="status" id="status" class="form-control">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
                </div>
              </div>
                
                <div class="col-lg-4 mx-auto">
                
                  <button class="btn btn-success  mt-2" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button> &nbsp;&nbsp;&nbsp;
                  <a class="btn btn-secondary mt-2" href=""><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
              
              </div>
              </div>
              </form>
            </div>
            
          </div>
        </div>
        <div class="clearix"></div>
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
       

   
  </body>
</html>