<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{  asset('css/main.css') }}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/i.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/i2.png') }}">
     <link rel="image_src" href="{{ asset('img/log.png') }}">
    <!--  <link rel ="icon" href ="{{ asset('img/log.png') }}"  -->
       
    <title>Login - NIRF</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <img src="img/nirf_dash.png"  >
       <!--  <h1>Rajagiri NIRF</h1> -->
      </div>

  
      <div class="login-box">
       <!--  <center><img src="img/log.png"  ></center> -->
      <form class="login-form" action="{{ route('login') }}" method="post">
                 

      <h3 class="login-head"><img src="img/log.png"  ><br>LOGIN</h3>
        
         
          <div class="form-group">
            <label class="control-label">Email</label>
            <input class="form-control" type="email" placeholder="Email" name="email" autofocus>
             <div class="text-danger text-left">
                            {{ $errors->first('email') }}
                        </div>
          </div>
        
          
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" type="password" name="password" placeholder="Password">
            <div class="text-danger text-left">
                            {{ $errors->first('password') }}
                        </div>
          </div>
                  <div class="form-group">

                                        <div class="checkbox checkbox-custom">
                                            <input id="remember" type="checkbox" checked="" name="remember_me">
                                            <label for="remember">
                                                Remember me
                                            </label>
                                        </div>

                                    </div>
    {{ csrf_field() }}
          <div class="form-group btn-container">
         
          <button class="btn btn-primary btn-block"  type="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
          </div>
       
        </form>
        
      </div> 
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
  </body>
</html>