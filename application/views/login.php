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
    <title>Metronic | Login Page - 5</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!--end::Web font -->

    <!--begin::Global Theme Styles -->
    <link href="<?php echo base_url() ?>assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />

    <!--RTL version:<link href="<?php echo base_url() ?>assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->
    <link href="<?php echo base_url() ?>assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />

    <!--RTL version:<link href="<?php echo base_url() ?>assets/demo/default/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

    <!--end::Global Theme Styles -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/demo/default/media/img/logo/alfamart.png" />
</head>

<!-- end::Head -->

<!-- begin::Body -->

<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

    <!-- begin:: Page -->
    <div class="m-grid m-grid--hor m-grid--root m-page">
        <div class="m-login m-login--signin  m-login--5" id="m_login" style="background-image: url(<?php echo base_url() ?>assets/app/media/img/bg/bg-3.jpg);">
            <div class="m-login__wrapper-1 m-portlet-full-height">
                <div class="m-login__wrapper-1-1">
                    <div class="m-login__contanier">
                        <div class="m-login__content">
                            <div class="m-login__logo">
                                <a href="#">
                                    <img src="<?php echo base_url() ?>assets/app/media/img/logos/alfamart.png">
                                </a>
                            </div>
                            <div class="m-login__title">
                                <h3> “Belanja Puas, Harga Pas Ya di Alfamart”</h3>
                            </div>
                            <div class="m-login__desc">
                                Point Of Sale System
                            </div>
                            <div class="m-login__form-action">

                            </div>
                        </div>
                    </div>
                    <div class="m-login__border">
                        <div></div>
                    </div>
                </div>
            </div>
            <div class="m-login__wrapper-2 m-portlet-full-height">
                <div class="m-login__contanier">
                    <div class="m-login__signin">
                        <div class="m-login__head">
                            <h3 class="m-login__title">Masuk ke akun Anda</h3>
                        </div>
                        <form class="m-login__form m-form" action="<?php echo base_url('auth/process') ?>" method="post">
                            <div class="form-group m-form__group">
                                <input class="form-control m-input" type="text" placeholder="Username" name="username" autocomplete="off">
                            </div>
                            <div class="form-group m-form__group">
                                <input class="form-control m-input m-login__form-input--last" type="Password" placeholder="Password" name="password">
                            </div>
                            <div class="row m-login__form-sub">
                                <!-- <div class="col m--align-left">
                                        <label class="m-checkbox m-checkbox--focus">
                                            <input type="checkbox" name="remember"> Remember me
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="col m--align-right">
                                        <a href="javascript:;" id="m_login_forget_password" class="m-link">Forget Password ?</a>
                                    </div> id="m_login_signin_submit" -->
                            </div>
                            <div class="m-login__form-action" style="margin-top: 2px;">
                                <button type="submit" name="login" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">Sign In</button>
                            </div>
                        </form>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- end:: Page -->

    <!--begin::Global Theme Bundle -->
    <script src="<?php echo base_url() ?>assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>

    <!--end::Global Theme Bundle -->

    <!--begin::Page Scripts -->
    <script src="<?php echo base_url() ?>assets/snippets/custom/pages/user/login.js" type="text/javascript"></script>

    <!--end::Page Scripts -->
</body>

<!-- end::Body -->

</html>