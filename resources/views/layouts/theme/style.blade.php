<link href="{{ asset('assets/css/loader.css')}}" rel="stylesheet" type="text/css" />
<script src="{{asset('assets/js/loader.js')}}"></script>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
<link href="{{asset('bootstrap/css/bootstrap.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/css/structure.css')}}" rel="stylesheet" type="text/css" class="structure" />
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
<link href="{{asset('plugins/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('assets/css/dashboard/dash_2.css')}}" rel="stylesheet" type="text/css" class="dashboard-sales" />
<!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

<link href="{{asset('plugins/font-icons/fontawesome/css/fontawesome.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/fontawesome.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('assets/css/elements/avatar.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('plugins/sweetalerts/sweetalert.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('plugins/notification/snackbar/snackbar.min.css')}}" rel="stylesheet" type="text/css">

<link href="{{asset('css/custom.css')}}" rel="stylesheet" type="text/css">

<link href="{{asset('assets/css/widgets/modules-widgets.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('assets/css/forms/theme-checkbox-radio.css')}}" rel="stylesheet" type="text/css">

<style>
    aside{
        display: none !important;
    }

    .page-item.active .page-link{
        z-index: 3;
        color: #FFFFFF;
        background-color: #3b3f5c;
        border-color: #3b3f5c;
    }

    @media (max-width: 480px) {
        .mtmobile {
            margin-bottom: 20px !important;
        }

        .mbmobile {
            margin-bottom: 10px !important;
        }

        .hideonsm {
            display: none !important;
        }

        .inblock {
            display: block;
        }
    }

    /* sidebar background */
    .sidebar-theme #compactSidebar {
        background: #191e3a !important;
    }

    /* sidebar collapse background */
    .header-container .sidebarCollapse{
        color: #3b3f5c !important;
    }

    .navbar .navbar-item .nav-item form.form-inline input.search-form-control {
        font-size: 15px;
        background-color: #3b3f5c !important;
        padding-right: 40px;
        padding-top: 12px;
        border: none;
        color: #ffffff;
        box-shadow: none;
        border-radius: 30px;
    }
</style>

@livewireStyles
