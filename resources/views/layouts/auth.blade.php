<!DOCTYPE html>

<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8" />
    <title>Login | {{ config('app.name') }}</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!--end::Web font -->



    <link href=" {{ mix('css/vendors.css') }}" rel="stylesheet">
    <link href=" {{ mix('css/styles.css') }}" rel="stylesheet">

</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--desktop m-grid--ver-desktop m-grid--hor-tablet-and-mobile m-login m-login--6" id="m_login">
        <div class="m-grid__item   m-grid__item--order-tablet-and-mobile-2  m-grid m-grid--hor m-login__aside " style="background-color: #33338B;">
            <div class="m-grid__item">
                <div class="m-login__logo m--img-centered">
                    <a href="#">
                        <img src="assets/img/ethekwini-logo.jpg" width="250px">
                    </a>
                </div>
            </div>
            <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver m-stack__item--center">
                <div class="m-grid__item m-grid__item--middle" style="width: 100%;">
                    <h1 class="text-center text-white-50">{{ config('app.name')  }}</h1>
                    <h2 class="text-center text-white-50">{{ __('Web Portal') }}</h2>
                </div>
            </div>
            <div class="m-grid__item">
                <div class="m-login__info">
                    <div class="m-login__section">
                        <a href="#" class="m-link">&copy {{ \Carbon\Carbon::now()->year }} {{ config('app.name') }}</a>
                    </div>
                    <div class="m-login__section">
                        <a href="#" class="m-link">Privacy</a>
                        <a href="#" class="m-link">Legal</a>
                        <a href="#" class="m-link">Contact</a>
                    </div>
                </div>
            </div>
        </div>

        {{--Begin:: Page Content--}}
        <div class="m-grid__item m-grid__item--fluid  m-grid__item--order-tablet-and-mobile-1  m-login__wrapper">
            @yield('content')
        </div>
        {{--End:: Page Content--}}
    </div>
</div>

<!-- end:: Page -->

<script type="text/javascript" src="/js/mandatory.js"></script>
<script type="text/javascript" src="/js/vendors.js"></script>
<script type="text/javascript" src="/js/scripts.bundle.js"></script>

<!--begin::Page Scripts -->
{{--<script src="../../../assets/snippets/custom/pages/user/login6.js" type="text/javascript"></script>--}}

<!--end::Page Scripts -->
</body>

<!-- end::Body -->
</html>