
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="../vendor/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../vendor/css/owl.theme.default.min.css">

    <!-- <link rel="stylesheet" href="resources/css/modal.css"> -->
    <!-- <link rel="stylesheet" href="vendors/css/animate.css"> -->
    <link href="../resource/css/styles.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->

<meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>TWOREPORT Admin</title>
</head>



<body>

    <div class="main__admin--container">

        <div class="row main__admin--wrapper">


            <div class="top__section--wrapper">

                <div>
                <a href="{{url('/')}}" class="login_link">
                <button class="red__top--left">Back to main site</button>
                </a>
                </div>
                
                <div class="two__report--logo"><img src="../resource/images/tworeport__logo.svg" alt="" class="logo__container"></div>
                <div><img src="../resource/images/Star (3).svg" alt="" class="big__star--top-right"></div>
            </div>

            <div class="middle__section--wrapper">

                <div class="text__center--container">
                    <p>WELCOME TO TWOREPORT PORTAL</p>

                </div>
                <div>
                    <img src="../resource/images/Star (2).svg" alt="" class="medium__star--img">

                </div>

            </div>

            <div class="little__star--section">

                <img src="../resource/images/Star (1).svg" alt="" class="little__star--img">

            </div>

            <div class="login__form--container">

                <p class="login__top--text"><a href="" class="login__acct--link">LOGIN</a></p>

                {{-- <form action="" class="center__form--wrapper">

                    <input type="text" class="email__field" placeholder="Email Address">
                    <input type="password" class="password__field" placeholder="password">
                    <input type="button" class="signin__field" value="Sign in">


                </form> --}}
                <form method="POST" id="form-submit" action="{{ route('login') }}" class="center__form--wrapper">
                    @csrf


                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>


                            <input id="email" type="email" class="email__field  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror



                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>


                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror


{{--
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label> --}}

                        <!-- <div class="button__login">
                        <button type="submit" class="signin__field">
                                {{ __('Login') }}
                            </button>
                          
                            <button type="submit" class="register-btn" id="reg-submit">
                            {{ __('Register') }}
                            </button>
                      
                        </div>
                            
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Login Credentials?') }}
                                </a>
                            @endif -->
                            
                </form>
                <div class="button__login">
                        <button type="submit" id="form-submit-button" class="signin__field">
                                {{ __('Login') }}
                            </button>
                          <a href="{{url('/register')}}">
                            <button type="submit" class="register-btn" id="reg-submit">
                            {{ __('Register') }}
                            </button>
</a>
                      
                        </div>
                            
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Login Credentials?') }}
                                </a>
                            @endif

                {{-- <p class="login__top--text"><a href="" class="login__acct--link">Forgot Login Credentials?</a></p> --}}



            </div>


        </div>



    </div>

</body>

<script type="text/javascript">

$('#form-submit-button').on('click', function(){
    $('#form-submit').submit();
     });
    
</script>
</html>
