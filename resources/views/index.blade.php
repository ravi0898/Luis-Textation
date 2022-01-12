<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
   
   @include('portal.include.css')
</head>
 
<body class="h-100 bg-login">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-4">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12 text-center pt-3">
                             
                            <img src="{{ asset('/images/tlr.png') }}" height="60px">
                            
                            </div>    
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Account Login</h4>
                                    <!-- @if(session()->has('error'))
                                    <div class="text text-danger">
                                        {{ session()->get('error') }}
                                    </div>
                                     @endif -->
                                    <form action="{{ url('login_users_panel') }}" method="post">
                                         {{ csrf_field() }}
                                        <!-- <div class="form-group">
                                            <label><strong>Mobile Number</strong></label>
                                            <input type="text" class="form-control bdr" name="number" value="" placeholder="xxxxxxxxx" max="10" maxlength="10" onkeypress="return onlyNumberKey(event)" maxlength="10" size="50%" >
                                            @if ($errors->has('number'))
                                            <span class="text-danger">{{ $errors->first('number') }}</span>
                                            @endif
                                        </div> -->
                                          @if (session('msg'))
                                         <div class="alert alert-danger">
                                           {{ session('msg') }}
                                         </div>
                                         @endif
                                        <div class="form-group">
                                            <label><strong>Email</strong></label>
                                            <input type="text" class="form-control bdr" name="email" value="{{ old('email') }}" placeholder="Enter your email here">
                                            @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" class="form-control bdr" name="password" value="{{ old('password') }}" placeholder="Enter your password here" >
                                            @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
    <!-- Common JS -->
    @include('portal.include.js')
     <script>
    function onlyNumberKey(evt) {
          
        // Only ASCII character in that range allowed
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
            return false;
        return true;
    }
</script>
<script>
    function detailssubmit() {
        alert("Your details were Submitted");
    }
</script>
</body>

</html>