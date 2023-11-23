<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Digiboard</title>

    <link rel="shortcut icon" href="favicon.png">
    <link rel="stylesheet" href="/backend/assets/vendor/css/all.min.css">
    <link rel="stylesheet" href="/backend/assets/vendor/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="/backend/assets/vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="/backend/assets/css/style.css">
    <link rel="stylesheet" id="primaryColor" href="/backend/assets/css/blue-color.css">
    <link rel="stylesheet" id="rtlStyle" href="#">
</head>

<body class="light-theme">
    <!-- preloader start -->
    <div class="preloader d-none">
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader end -->

    <!-- main content start -->
    <div class="main-content login-panel">
        <div class="login-body">
            <div class="top d-flex justify-content-between align-items-center">
                <div class="logo">
                    <img src="/backend/assets/images/logo-black.png" alt="Logo">
                </div>
                <a href="/"><i class="fa-duotone fa-house-chimney"></i></a>
            </div>
            <div class="bottom">
                <h3 class="panel-title">Login</h3>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="input-group mb-25">
                        <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-group mb-20">
                        <span class="input-group-text"><i class="fa-regular fa-lock"></i></span>
                        <input id="password" type="password"
                            class="form-control rounded-end @error('password') is-invalid @enderror" name="password"
                            required autocomplete="current-password">
                        <a role="button" class="password-show"><i class="fa-duotone fa-eye"></i></a>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="d-flex justify-content-between mb-25">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label text-white" for="loginCheckbox">
                                Remember Me
                            </label>
                        </div>
                        <a href="reset-password.html" class="text-white fs-14">Forgot Password?</a>
                    </div>
                    <button class="btn btn-primary w-100 login-btn">Sign in</button>
                </form>

            </div>
        </div>

        <!-- footer start -->
        <div class="footer">
            <p>Copyright©
                <script>
                    document.write(new Date().getFullYear())
                </script> All Rights Reserved By <span class="text-primary">Digiboard</span>
            </p>
        </div>
        <!-- footer end -->
    </div>
    <!-- main content end -->

    <script src="/backend/assets/vendor/js/jquery-3.6.0.min.js"></script>
    <script src="/backend/assets/vendor/js/jquery.overlayScrollbars.min.js"></script>
    <script src="/backend/assets/vendor/js/bootstrap.bundle.min.js"></script>
    <script src="/backend/assets/js/main.js"></script>
</body>

</html>
