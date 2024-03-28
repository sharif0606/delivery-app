<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Panel</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('Admin/styleC.css')}}">
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="{{route(request()->session()->get('roleIdentity').'.dashboard')}}">Courierpro</a>
                </div>
            </div>
            <ul class="sidebar-nav">

                

                
                <li class="sidebar-item">
                    <a href="{{route(request()->session()->get('roleIdentity').'.order.index')}}" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Order List</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{route(request()->session()->get('roleIdentity').'.order.create')}}" class="sidebar-link">
                        <i class="lni lni-cart"></i>
                        <span>New Order</span>
                    </a>
                </li>
            </ul>


            <div class="sidebar-footer">
                <a href="{{route('logout')}}" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
        
        <div class="main">
            <br>
            <br><br><br>
            
            @yield('content')

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-body-secondary">
                        <div class="col-6 text-start ">
                            <a class="text-body-secondary" href="{{route(request()->session()->get('roleIdentity').'.dashboard')}}">
                                <strong>Courierpro</strong>
                            </a>
                        </div>
                        <div class="col-6 text-end text-body-secondary d-none d-md-block">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a class="text-body-secondary" href="#">Contact</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-body-secondary" href="#">About Us</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-body-secondary" href="#">Terms & Conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="{{asset('Admin/script.js')}}"></script>
    @stack('script')
</body>
</html>