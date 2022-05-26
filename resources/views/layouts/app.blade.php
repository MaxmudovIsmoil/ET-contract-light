<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contract</title>
    <link rel="icon" href="{{ asset('/images/etclogo.png') }}" type="image/icon">

    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/icons-css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('/fontawesome-free-6.1/css/all.css') }}">

    <link rel="stylesheet" href="{{ asset('/css/form-validation.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/datatable.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    <style>
        .active {
            color: #fff !important;
            background: #321fdb !important;
        }
    </style>
    @yield('style')
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-118965717-1');
    </script>

</head>
<body class="c-app">
    <div class="c-wrapper c-fixed-components">
        <header class="c-header c-header-light c-header-fixed c-header-with-subheader">

            <a href="{{ route('contract.index') }}" class="c-header-toggler c-class-toggler mfs-3" style="margin-top: 12px; color: black;">Contract</a>
            <ul class="c-header-nav">

                <li class="dropdown c-header-nav-item px-1 px-md-3" data-menu="dropdown">
                    <a class="dropdown-toggle btn" href="#" data-toggle="dropdown" style="color: black;">
                        <i class="far fa-file" style="margin-right: 5px;"></i> <span>Templates</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item d-flex align-items-center @if(Request::segment(1) == 'template1') active @endif" href="{{ route('template1') }}">Contract 1 (ДОГОВОР ЮР. ЛИЦА)</a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center @if(Request::segment(1) == 'template2') active @endif" href="{{ route('template2')  }}">Contract 2 (ДОГОВОР ПОДРЯДА)</a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center @if(Request::segment(1) == 'template3') active @endif" href="{{ route('template3') }}">Contract 3 (ДОГОВОР НА Уступки)</a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center @if(Request::segment(1) == 'template4') active @endif" href="{{ route('template4')  }}">Contract 4 (ДОГОВОР НА АРЕНДУ)</a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center @if(Request::segment(1) == 'template5') active @endif" href="{{ route('template5') }}">Contract 5 (ДОГОВОР БЮДЖЕТ)</a>
                        </li>

                    </ul>
                </li>

                <li class="c-header-nav-item">
                    <a class="c-header-nav-link" href="{{ route('contract.index') }}" style="color: black;">
                        <i class="far fa-file-alt mr-2"></i> <span>Contracts</span>
                    </a>
                </li>
            </ul>

            <ul class="c-header-nav ml-auto mr-4">
                <li class="c-header-nav-item mx-md-5 mx-2">
                    <a class="c-header-nav-link active" href="#">
                        <svg class="c-icon">
                            <use xlink:href="{{ asset('/icons/sprites/free.svg#cil-pencil')  }}"></use>
                        </svg>
                        <div class="c-avatar">edit</div>
                    </a>
                </li>

                <li class="c-header-nav-item dropdown">
                    <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <svg class="c-icon">
                            <use xlink:href="{{ asset('/icons/sprites/free.svg#cil-user') }}"></use>
                        </svg>
                        <div class="c-avatar">User</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right pt-0 pb-0">

                        <a class="dropdown-item" href="#">
                            <svg class="c-icon mr-2">
                                <use xlink:href="{{ asset('/icons/sprites/free.svg#cil-settings') }}"></use>
                            </svg>
                            Password update
                        </a>
                        <a href="{{ route('logout') }}" class="dropdown-item"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <svg class="c-icon mr-2">
                                <use xlink:href="{{ asset('/icons/sprites/free.svg#cil-account-logout') }}"></use>
                            </svg>
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                    </div>
                </li>
            </ul>
        </header>
        <div class="c-body">
            <main class="c-main p-3">
                <div class="container-fluid p-0">

                    @yield('content')

                </div>
            </main>

        </div>
    </div>

@include('layouts.deleteModal')


<script src="{{ asset('/js/jQurey.js') }}"></script>
<script src="{{ asset('/js/coreui.bundle.min.js') }}"></script>
<!--[if IE]><!-->
<script src="{{ asset('/js/svgxuse.min.js') }}"></script>
<!--<![endif]-->

<script src="{{ asset('/js/coreui-chartjs.bundle.js') }}"></script>
<script src="{{ asset('/js/coreui-utils.js') }}"></script>
<script src="{{ asset('/js/main.js') }}"></script>
<script src="{{ asset('/js/datatable.js') }}"></script>

{{-- number format --}}
<script src="{{ asset('/js/numeral.js') }}"></script>
<script src="{{ asset('/js/form-validation.js') }}"></script>

<script src="{{ asset('/js/functionDelete.js') }}"></script>
<script src="{{ asset('/js/functions.js') }}"></script>

@yield('script')

</body>
</html>
