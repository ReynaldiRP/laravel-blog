<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/ui-forms.html" />


    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    {{--
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js"> --}}
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="index.html">
                    <span class="align-middle">Dashboard</span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Admin
                    </li>
                    @php
                    $active = isset($active) ? $active : '';
                    @endphp
                    <li class="sidebar-item {{$active == 'artikel' ? 'active' : ''}}">
                        <a class="sidebar-link" href="{{ route('homeArtikel.index') }}">
                            <i class="align-middle" data-feather="book"></i> <span class="align-middle">Artikel</span>
                        </a>
                    </li>

                    <li class="sidebar-item {{$active == 'kategori' ? 'active' : ''}}">
                        <a class="sidebar-link" href="{{ route('homeKategori.index') }}">
                            <i class="align-middle" data-feather="book-open"></i> <span
                                class="align-middle">Kategori</span>
                        </a>
                    </li>
                    <li class="sidebar-item {{$active == 'add_Kategori' ? 'active' : ''}}">
                        <a class="sidebar-link" href="{{ route('artikel.index') }}">
                            <i class="align-middle" data-feather="edit"></i> <span class="align-middle">Tambah
                                Artikel</span>
                        </a>
                    </li>
                    <li class="sidebar-item {{$active == 'addKategori' ? 'active' : ''}}">
                        <a class="sidebar-link" href="{{ route('kategori.index') }}">
                            <i class="align-middle" data-feather="edit-2"></i> <span class="align-middle">Tambah
                                Kategori</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#"
                                data-bs-toggle="dropdown">
                                <i class="align-middle" data-feather="settings"></i>
                            </a>

                            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#"
                                data-bs-toggle="dropdown">
                                <span class="text-dark">Charles Hall</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1"
                                        data-feather="user"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="align-middle me-1"
                                        data-feather="pie-chart"></i> Analytics</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index.html"><i class="align-middle me-1"
                                        data-feather="settings"></i> Settings & Privacy</a>
                                <a class="dropdown-item" href="#"><i class="align-middle me-1"
                                        data-feather="help-circle"></i> Help Center</a>
                                <div class="dropdown-divider"></div>
                                {{-- <a class="dropdown-item" href="{{ route('logout') }}">Log out</a> --}}
                                <a class="dropdown-item" href="{{ route('login.logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('login.logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="content">
                <div class="card">
                    {{-- <div class="card-header">
                    </div> --}}
                    <div class="card-body">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>