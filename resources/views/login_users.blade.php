<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                     @if(session()->has('errorlog'))
                    <div class="alert alert-danger">
                        {{ session()->get('errorlog') }}
                    </div>
                    @endif
                    <form class="form-horizontal" method="POST" action="{{ url('login_users_panel') }}">
                        {{ csrf_field() }}
                       
                            <label for="mobile_no" class="col-md-4 control-label">Enter Mobile No.</label>
                            <div class="col-md-6">
                                <input id="mobile_no" type="text" class="form-control" name="mobile_no" value="{{ old('mobile_no') }}" required autofocus>
                            </div>
                       

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>