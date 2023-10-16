<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="">
    <meta name="author" content="Themepixels">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('assets/img/favicon.png') }}">

    <title>DashByte - Premium Dashboard Template</title>

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{url('lib/remixicon/fonts/remixicon.css')}}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ url('css/style.min.css') }}">
  </head>
  <body class="page-sign">

    <div class="card card-sign">
      <div class="card-header">
        <a href="../" class="header-logo mb-4">dashbyte</a>
        <h3 class="card-title">Sign In</h3>
        <p class="card-text">Welcome back! Please signin to continue.</p>
      </div><!-- card-header -->
      <form action="{{ route('login') }}" method="post">
      @csrf
      <div class="card-body">
        <div class="mb-4">
          <label class="form-label">Email address</label>
          <input type="text" name="email" class="form-control" placeholder="Enter your email address">
        </div>
        <div class="mb-4">
          <label class="form-label d-flex justify-content-between">Password <a href="">Forgot password?</a></label>
          <input type="password" name="password" class="form-control" placeholder="Enter your password">
        </div>
        <button class="btn btn-primary btn-sign" type="submit">Sign In</button>
  
        <div class="divider"><span>or sign in with</span></div>
  
        <div class="row gx-2">
          <div class="col"><button class="btn btn-facebook"><i class="ri-facebook-fill"></i> Facebook</button></div>
          <div class="col"><button class="btn btn-google"><i class="ri-google-fill"></i> Google</button></div>
        </div><!-- row -->
      </form>
    </div><!-- card-body -->
      <div class="card-footer">
        Don't have an account? <a href="sign-up.html">Create an Account</a>
      </div><!-- card-footer -->
    </div><!-- card -->

    <script src="{{url('lib/jquery/jquery.min.js') }}"></script>
    <script src="{{url('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script>
      'use script'

      var skinMode = localStorage.getItem('skin-mode');
      if(skinMode) {
        $('html').attr('data-skin', 'dark');
      }
    </script>
  </body>
</html>