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
<body style="margin: 0; overflow: hidden; background: #f0f2f5">
  <input type="hidden" id="anPageName" name="page" value="admin-sign-in" />
  <div class="container-center-horizontal">
    <div class="admin-sign-in screen">
      <div class="overlap-group2">
        <div class="rectangle-76"></div>
        <div class="sign-in-header sign-in-1">
          <img class="icon18pxfacebook" src="{{ asset('img/icon-18px-facebook@2x.png') }}" alt="icon/18px/facebook" />
        </div>
        <div class="sign-in-form sign-in-1">
          <form method="POST" action="{{ route('admin.signup.post') }}">
            @csrf
            <input class="form-fieldregular-boarder-1" type="text" name="name" placeholder="Name" value="{{ old('name') }}" required>
            <input class="form-fieldregular-boarder-1" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
            <input class="form-fieldregular-boarder-1" type="password" name="password" placeholder="Current password" required>
            <button type="submit" class="sign-in-form-1"><div class="text">SIGN UP</div></button>
          </form>
          @if ($errors->any())
            <div class="error-messages">
              @foreach ($errors->all() as $error)
                <div class="error">{{ $error }}</div>
              @endforeach
            </div>
          @endif
          @if (session('success'))
            <div class="success-message">{{ session('success') }}</div>
          @endif
        </div>
        <h1 class="logo"><span class="span0">Service</span><span class="span1">Sphere</span></h1>
        <div class="sign-in-header-1">
          <div class="sign-in">Sign Up</div>
          <p class="enter-your-email-and">Enter your email and password to Sign Up</p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
