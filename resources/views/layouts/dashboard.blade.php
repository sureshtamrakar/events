<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="_token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@600&family=Karla&family=Lora&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css" />
    <link rel="stylesheet" href="{{asset('/admin_asset/css/style.css')}}">
    <title>Admin Dashboard</title>
</head>

<body>
    <input type="hidden" value="{{url('/')}}" id="url" name="url">

    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar  d-none d-lg-block">
            <div class="sidebar-content js-simplebar" data-simplebar="init">
                <div class="simplebar-wrapper w-100" style="margin: 0px;">
                    <div class="simplebar-height-auto-observer-wrapper">
                        <div class="simplebar-height-auto-observer"></div>
                    </div>
                    <div class="simplebar-mask">
                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                            <div class="simplebar-content-wrapper w-100" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                                <div class="simplebar-content" style="padding: 0px;">
                                    <a class="sidebar-brand" href="#">
                                        <span class="sidebar-brand-text align-middle">
                                            Admin Dashboard
                                        </span>
                                    </a>
                                    <hr>
                                    <ul class="sidebar-nav">
                                        <li class="sidebar-item">
                                            <a href="#eventMenu" data-toggle="collapse" aria-expanded="false" class="toggle-button collapsed sidebar-link text-light">
                                                <i class="text-light align-middle me-2 fa-solid fa-calendar-days"></i>
                                                <span class="align-middle pl-3">Event</span>
                                            </a>
                                            <ul class="collapse" id="eventMenu" style="">
                                                <li class="sidebar-item">
                                                    <a class="text-light" href="{{route('event.create')}}"> <span class="align-middle pl-3">Create Event</span></a>
                                                </li>
                                                <li class="sidebar-item">
                                                    <a class="text-light" href="{{route('event.index')}}"> <span class="align-middle pl-3">List Event</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Account
                            </a>
                            <div class="dropdown-menu" style="left: auto;right: 0;" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                    Logout
                                </a>
                                <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="d-flex w-100 h-100">
                <div class="container d-flex flex-column">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{asset('/admin_asset/js/script.js')}}"></script>

</body>

</html>