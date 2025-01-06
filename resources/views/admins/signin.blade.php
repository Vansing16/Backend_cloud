<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />
  <meta name="og:type" content="website" />
  <meta name="twitter:card" content="photo" />
  <link rel="stylesheet" type="text/css" href="{{ asset('css/admin-sign-in.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('css/styleguide.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('css/globals.css') }}" />
</head>
<body style="margin: 0;overflow: hidden;background: #f0f2f5">
  <input type="hidden" id="anPageName" name="page" value="admin-sign-in" />
  <div class="container-center-horizontal">
    <div class="admin-sign-in screen">
      <div class="overlap-group2">
        <div class="rectangle-76"></div>
        <div class="sign-in-header sign-in-1">
          <img class="icon18pxfacebook" src="{{ asset('img/icon-18px-facebook@2x.png') }}" alt="icon/18px/facebook" />
        </div>
        <div class="sign-in-form sign-in-1">
          <form method="POST" action="{{ route('admin.signin.post') }}">
            @csrf
            <input class="form-fieldregular-boarder" type="email" name="email" placeholder="Email" required>
            <input class="form-fieldregular-boarder-1" type="password" name="password" placeholder="Current password" required>
            <div class="remember-container">
              <a href="{{ route('admin.signup') }}" class="remember-me roboto-regular-normal-waterloo--14px">Sign Up</a>
            </div>
            <button type="submit" class="sign-in-form-1"><div class="text">SIGN IN</div></button>
          </form>
        </div>
        <h1 class="logo"><span class="span0">Service</span><span class="span1">Sphere</span></h1>
        <div class="sign-in-header-1">
          <div class="sign-in">Sign In</div>
          <p class="enter-your-email-and">Enter your email and password to Sign In</p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
