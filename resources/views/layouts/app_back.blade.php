<!DOCTYPE html>
<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <title>Contract</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon" href="{{ asset('images/etclogo.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/etclogo.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/vendors.min.css') }}">
    <!-- END: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/charts/apexcharts.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/forms/select/select2.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/extensions/toastr.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/tables/datatable/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/tables/datatable/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/tables/datatable/buttons.bootstrap4.min.css') }}">
    <!-- END: Vendor CSS-->
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-extended.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/colors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/components.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/themes/dark-layout.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/themes/bordered-layout.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/themes/semi-dark-layout.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fancybox.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset("css/core/menu/menu-types/horizontal-menu.css") }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/charts/chart-apex.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/pickers/flatpickr/flatpickr.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/forms/pickers/form-flat-pickr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/forms/pickers/form-pickadate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/app-ecommerce.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/extensions/ext-component-toastr.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/extensions/ext-component-sweet-alerts.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('file_uploaded/image-uploader.css') }}">
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <!-- END: Custom CSS-->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    @yield('style')

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="horizontal-layout horizontal-menu  navbar-floating footer-static" data-open="hover" data-menu="horizontal-menu" data-col="">

<!-- BEGIN: Header-->
<nav class="header-navbar navbar-expand-md navbar navbar-fixed navbar-shadow navbar-brand-center" data-nav="brand-center">
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center mr-3">
            <h2 class="brand-text mb-0"><a href="{{ route('contract.index') }}" class="nav-link">Contract</a> </h2>
        </div>

        <div class="nav navbar-nav main-menu-content">

            <!-- menu -->
            <ul class="nav navbar-nav" id="main-menu-navigation">


                <li class="dropdown nav-item" data-menu="dropdown">
                    <a class="dropdown-toggle btn" href="#" data-toggle="dropdown">
                        <i class="fas fa-file" style="margin-right: 5px;"></i> <span data-i18n="Contracts">Contract templates</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item d-flex align-items-center @if(Request::segment(1) == 'template1') active @endif" href="{{ route('template1') }}">Contract 1 (800-11713)</a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center @if(Request::segment(1) == 'template2') active @endif" href="{{ route('template2')  }}">Contract 2</a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center @if(Request::segment(1) == 'template3') active @endif" href="{{ route('template3') }}">Contract 3</a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center @if(Request::segment(1) == 'template4') active @endif" href="{{ route('template4')  }}">Contract 4</a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center @if(Request::segment(1) == 'template5') active @endif" href="{{ route('template5') }}">Contract 5</a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item m-auto @if(Request::segment(1) == 'contract') btn btn-primary @endif" style="padding: 5px;">
                    <a class="nav-link" href="{{ route('contract.index') }}">
                        <i class="fas fa-file-contract" style="margin-right: 3px;"></i> <span data-i18n="Contracts">Contracts</span>
                    </a>
                </li>

            </ul>

        </div>
        @php
            $user = \Auth::user();
            $user->load('section');
        @endphp


        <ul class="nav navbar-nav align-items-center ml-auto">

            @if(Request::segment(1) == 'template1' || Request::segment(1) == 'template2' || Request::segment(1) == 'template3' ||
                Request::segment(1) == 'template4' || Request::segment(1) == 'template5')

                <li class="nav-item d-flex align-content-center" style="height: 39px;">
                    <div class="row js_div_form d-none" style="margin-top: -5px;">
                        @if(Request::segment(1) == 'template3')
                            <div class="col-md-5">
                                <select name="number" class="form-control form-control-sm js_tin_number" style="margin-top: 10px; border: 1px solid #7367f0;">
                                    <option value="1">Принимающая сторона</option>
                                    <option value="2">Дебитор</option>
                                </select>
                            </div>
                            <div class="col-md-7 pl-0">
                                <div class="input-group input-group-sm">
                                    <input type="text" name="tin" class="form-control js_tin_input" placeholder="TIN" aria-describedby="button-addon2" style="border: 1px solid #7367f0;">
                                    <div class="input-group-append js_tin_icon" id="button-addon2">
                                        <button class="btn btn-outline-primary waves-effect js_tin_btn" type="button">Send</button>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="col-md-12 pl-0">
                                <div class="input-group input-group-sm">
                                    <input type="hidden" name="number" value="1" class="js_tin_number"/>
                                    <input type="text" name="tin" class="form-control js_tin_input" placeholder="TIN" aria-describedby="button-addon2" style="border: 1px solid #7367f0;">
                                    <div class="input-group-append js_tin_icon" id="button-addon2">
                                        <button class="btn btn-outline-primary waves-effect js_tin_btn" type="button">Send</button>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </li>

                <li class="nav-item mr-2">
                    <a href="javascript:void(0);" class="btn btn-outline-primary btn-sm js_text_edit_btn"><i class="fas fa-pen"></i> edit</a>
                    <a href="javascript:void(0);" class="btn btn-outline-success btn-sm js_text_save_btn d-none"><i class="fas fa-check"></i> save</a>
                    <a href="javascript:void(0);" class="btn btn-outline-secondary btn-sm js_text_cancel_btn d-none"><i class="fas fa-times"></i> cancel</a>
                </li>

            @endif



            <li class="nav-item dropdown dropdown-user">
                <a class="nav-link dropdown-toggle dropdown-user-link"
                   id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none">
                        <span class="user-name font-weight-bolder">{{ \Auth::user()->full_name }}</span>
                    </div>
                    <span class="avatar">
                        <i class="fas fa-user"></i>
                        <span class="avatar-status-online"></span>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">

                    @if($user->section->rule != 'USER')
                        <a class="dropdown-item @if(Request::segment(1) == 'user') active @endif" href="{{ route('user.index') }}">
                            <i class="mr-50" data-feather="user"></i> Users
                        </a>
                    @endif

                    <a class="dropdown-item @if(Request::segment(1) == 'user-profile-show') active @endif" href="{{ route('user.user_profile_show') }}">
                        <i class="mr-50" data-feather="settings"></i> Profile
                    </a>

                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="mr-50" data-feather="power"></i> {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>

        </ul>
    </div>
</nav>
<!-- END: Header-->

    <!-- BEGIN: Content-->
    <div class="app-content content" style="padding: 80px 15px 15px 0;">

        @yield('content')

    </div>

    <!-- BEGIN: Content-->

<!-- BEGIN: Footer-->
@if(Request::segment(1) == 'user')
    <footer class="footer footer-static footer-light footer-shadow pt-0 pb-0">
        <p class="clearfix mb-0">
        <span class="float-md-left d-block d-md-inline-block mt-25">East telecom &copy; 2022
            <a class="ml-25" href="https://etc.uz" target="_blank">etc.uz</a>
        </span>
        </p>
    </footer>
@endif
<!-- END: Footer-->

@include('layouts.deleteModal')


<script src="{{ asset('js/jquery-3.6.js') }}"></script>
<!-- BEGIN: Vendor JS-->
<script src="{{ asset('vendors/js/vendors.min.js') }}"></script>
<!-- BEGIN Vendor JS-->

<script src="{{ asset('vendors/js/charts/chart.min.js') }}"></script>

<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('vendors/js/forms/select/select2.full.min.js') }}"></script>
<script src="{{ asset('vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
<!-- END: Page Vendor JS-->


<script src="{{ asset('vendors/js/ui/jquery.sticky.js') }}"></script>
<script src="{{ asset('vendors/js/extensions/dropzone.min.js') }}"></script>

<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('vendors/js/pickers/pickadate/picker.js') }}"></script>
<script src="{{ asset('vendors/js/pickers/pickadate/picker.date.js') }}"></script>
<script src="{{ asset('vendors/js/pickers/pickadate/picker.time.js') }}"></script>
<script src="{{ asset('vendors/js/pickers/pickadate/legacy.js') }}"></script>
<script src="{{ asset('vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('vendors/js/forms/cleave/cleave.min.js') }}"></script>
<script src="{{ asset('vendors/js/forms/cleave/addons/cleave-phone.us.js') }}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('vendors/js/extensions/sweetalert2.all.min.js') }}"></script>
<script src="{{ asset('vendors/js/extensions/polyfill.min.js') }}"></script>
<!-- END: Page Vendor JS-->


<!-- BEGIN: Theme JS-->
<script src="{{ asset('js/core/app-menu.min.js') }}"></script>
<script src="{{ asset('js/core/app.min.js') }}"></script>
<script src="{{ asset('js/scripts/customizer.min.js') }}"></script>


<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('vendors/js/charts/apexcharts.min.js') }}"></script>
<!-- END: Page Vendor JS-->

<!-- END: Theme JS-->
<script src="{{ asset('js/scripts/extensions/ext-component-sweet-alerts.js') }}"></script>


<script src="{{ asset('js/scripts/forms/form-validation.js') }}"></script>
<script src="{{ asset('js/scripts/forms/pickers/form-pickers.js') }}"></script>


<script src="{{ asset('js/fancybox.3.7.min.js') }}"></script>

<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('vendors/js/tables/datatable/responsive.bootstrap4.js') }}"></script>
<script src="{{ asset('vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
<script src="{{ asset('vendors/js/tables/datatable/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
<!-- END: Page Vendor JS-->
<!-- BEGIN: Page JS-->


<script src="{{ asset('js/moment.min.js') }}"></script>
<script src="{{ asset('js/scripts/forms/form-validation.js') }}"></script>
<!-- END: Page JS-->
<!-- BEGIN: Page JS-->
<script src="{{ asset('js/scripts/components/components-modals.js') }}"></script>
<!-- END: Page JS-->
<script src="{{ asset('file_uploaded/image-uploader.js') }}"></script>

<script src="{{ asset('js/scripts/forms/form-input-mask.js?'.time()) }}"></script>

<script src="{{ asset('js/function_validate.js') }}"></script>
<script src="{{ asset('js/functionDelete.js') }}"></script>
<script src="{{ asset('js/functions.js') }}"></script>

@yield('script')

<script>
    $(window).on('load',  function(){
        if (feather) {
            feather.replace({ width: 14, height: 14 });
        }
    })
</script>
</body>
<!-- END: Body-->
</html>
