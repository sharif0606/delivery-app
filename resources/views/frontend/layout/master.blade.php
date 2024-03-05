<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
</head>

<body>
    <div class="all-content">

        <nav class="navbar navbar-expand-lg navbar-light px-4 border-bottom">
            <div class="container-fluid">
                <a class="navbar-brand fs-2" href="#">Delivery<span class="text-primary">Swift</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">

                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-5 text-center">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{route('home')}}">Home </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link  " href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#service">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('orderTrack')}}">Track</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('signin')}}">Sign In/Up</a>
                        </li>



                    </ul>

                </div>
            </div>
        </nav>

        @yield('content')


        <footer id="footer">
            <div class="social-links text-center">
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-youtube"></i>
                <i class="fa-brands fa-pinterest"></i>

            </div>
            <div class="credits text-center">
                Designed By <a href="#">DeliverySwift</a>
            </div>
            <div class="copyright text-center">
                &copy; Copyright <strong><span>DeliverySwift</span></strong>. All Right Reserved
            </div>
        </footer>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')

</body>

</html>