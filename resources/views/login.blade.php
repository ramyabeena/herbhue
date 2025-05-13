<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
    <title>HERBHUE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href=" {{asset('css/style.css')}}">
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{asset('img/favicon.png')}}">
    <style>
.form-check-input:checked {
    background-color: black !important;
    border-color: black !important;
}
    </style>
</head>

<body> 
    <div class="container-fluid pb-0">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4"  >
            <form method="post" action="{{ route('login') }}">
                @csrf
                <div class="form-container">
                    <div class="text-center mb-5">
                          <a href="{{url('/')}}"><img src="{{ asset('img/logo.png') }}" alt=""   style="width: 170px;"></a>  
                        <p class="text-center">Login to your HerbHue account</p>
                    </div>

                    <div class="form-group">
                        <input type="email"   id="email" name="email" required placeholder="Email ID">
                         
                    </div>
                    <div class="form-group">
                        <input type="password"   id="password" name="password" required placeholder="Password">
                         
                    </div>
                    <div class="d-flex justify-content-between mb-4">
                        <div class="form-check ">
                            <input class="form-check-input" type="checkbox" value="" id="showPassword">
                            <label class="form-check-label" for="showPassword">
                                Show Password
                            </label>
                        </div>
                        <p><a href="{{ route('forgotpassword') }}" class="text-green text-decoration-none">Forgot Password ?</a></p>
                    </div>

                    <button class="btn btn-dark btn-lg w-100" type="submit">Log In</button>
                    <p class="text-center mt-4">Have a query?  <a href="{{ route('contact') }}" class="text-black fw-bold text-decoration-none">Contact Us</a> </p>
                    
                    <p class="text-center p-0 m-0">Don't have an account?<a href="{{ route('register') }}" class="text-black fw-bold text-decoration-none"> Register Now</a> </p>
                </div>
            </form>
            </div>
            <div class="col-lg-4"></div>
            <!-- <div class="col-lg-5 text-end pe-0">
                <img src="{{ asset('img/login-img.png') }}" class="w-75 h-75" alt="">
            </div> -->
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
    <script>
        document.getElementById('showPassword').onclick = function () {
            if (this.checked) {
                document.getElementById('password').type = "text";
            } else {
                document.getElementById('password').type = "password";
            }
        };
    </script>
    
</body>

</html>