<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="_token" content="{!! csrf_token() !!}"/>

    <title>Katakata Admin</title>

    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet">

    <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}} " rel="stylesheet">

</head>

<body id="page-top">

<div id="wrapper">

    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <a class="sidebar-brand d-flex align-items-center justify-content-center h-25" href="{{ url('admin') }}">
            <div class="sidebar-brand-icon">
                {{-- <img src="{{ asset('images/adminLogo.png') }}" alt="not found"> --}}
                {{-- <i class="fas fa-laugh-wink"></i> --}}
            </div>
            {{-- <div class="sidebar-brand-text mx-3">Katakata <sup>Admin</sup></div> --}}
        </a>

        <hr class="sidebar-divider my-0">

        <li class="nav-item {{ (request()->is('admin')) ? 'active' : '' }}">
            <a class="nav-link" href="{{route('admin.index')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Панель управления</span></a>
        </li>

        <hr class="sidebar-divider">

        <div class="sidebar-heading">
           Интерфейс
        </div>

        <x-admin-sidebar-users-links></x-admin-sidebar-users-links>

        <x-admin-sidebar-category-links></x-admin-sidebar-category-links>

        <x-admin-sidebar-posts-links></x-admin-sidebar-posts-links>





        <x-admin-sidebar-comments-links></x-admin-sidebar-comments-links>

        <hr class="sidebar-divider">


        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>

    <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">

            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>


                <ul class="navbar-nav ml-auto">

                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                   
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <x-admin-top-navbar-user-information></x-admin-top-navbar-user-information>

                </ul>

            </nav>

            <div class="container-fluid">

                @yield('content')

            </div>

        </div>

        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Blog 2022</span>
                </div>
            </div>
        </footer>

    </div>

</div>

<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>


<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<script src="{{asset('js/sb-admin-2.js')}}"></script>

@yield('scripts')

</body>

</html>
