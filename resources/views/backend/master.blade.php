<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('Admin/style.css')}}">
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="{{route('admin.dashboard')}}">Courierpro</a>
                </div>
            </div>
            <ul class="sidebar-nav">

                <li class="sidebar-item">
                    <a href="{{route(request()->session()->get('roleIdentity').'.type.index')}}" class="sidebar-link">
                        <i class="lni lni-agenda"></i>
                        <span>Document Type</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{route(request()->session()->get('roleIdentity').'.location.index')}}" class="sidebar-link">
                        <i class="lni lni-travel"></i>
                        <span>Locations</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{route(request()->session()->get('roleIdentity').'.cost_settings.index')}}" class="sidebar-link">
<<<<<<< HEAD
                    <i class="lni lni-coin"></i>
=======
                        <i class="lni lni-coin"></i>
>>>>>>> d6b2647d14408694c48781d72f64f47fb103285d
                        <span>Cost Settings</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{route(request()->session()->get('roleIdentity').'.customer.index')}}" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Customer List</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{route(request()->session()->get('roleIdentity').'.deliveryman.index')}}" class="sidebar-link">
<<<<<<< HEAD
                    <i class="lni lni-delivery"></i>
=======
                        <i class="lni lni-delivery"></i>
>>>>>>> d6b2647d14408694c48781d72f64f47fb103285d
                        <span>Deliveryman List</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{route(request()->session()->get('roleIdentity').'.order.index')}}" class="sidebar-link">
<<<<<<< HEAD
                    <i class="lni lni-cart"></i>
                        <span>Order List</span>
=======
                        <i class="lni lni-question-circle"></i>
                        <span>Pending Orders</span>
>>>>>>> d6b2647d14408694c48781d72f64f47fb103285d
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{route(request()->session()->get('roleIdentity').'.order_accepted')}}" class="sidebar-link">
<<<<<<< HEAD
                    <i class="lni lni-thumbs-up"></i>
=======
                        <i class="lni lni-thumbs-up"></i>
>>>>>>> d6b2647d14408694c48781d72f64f47fb103285d
                        <span>Accepted Order</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{route(request()->session()->get('roleIdentity').'.order_processing')}}" class="sidebar-link">
                        <i class="lni lni-reload"></i>
                        <span>Processing Order</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{route(request()->session()->get('roleIdentity').'.order_completed')}}" class="sidebar-link">
                        <i class="lni lni-checkmark-circle"></i>
                        <span>Completed Order</span>
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
            <nav class="navbar navbar-expand px-4 py-3">
                <form action="#" class="d-none d-sm-inline-block">

                </form>
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <img src="{{asset('frontend/images/account.png')}}" class="avatar img-fluid" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end rounded">

                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            
            @yield('content')

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-body-secondary">
                        <div class="col-6 text-start ">
                            <a class="text-body-secondary" href=" #">
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