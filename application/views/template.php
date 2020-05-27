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
    <title> Dashboard Point of Sale Application</title>
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
    <link href="<?= site_url() ?>assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />

    <!--RTL version:<link href="<?= site_url() ?>assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->
    <link href="<?= site_url() ?>assets/demo/demo11/base/style.bundle.css" rel="stylesheet" type="text/css" />

    <!--RTL version:<link href="<?= site_url() ?>assets/demo/demo11/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

    <!--end::Global Theme Styles -->

    <!--begin::Page Vendors Styles -->
    <link href="<?= site_url() ?>assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />

    <!--RTL version:<link href="<?= site_url() ?>assets/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

    <!--end::Page Vendors Styles -->
    <link rel="shortcut icon" href="<?= site_url() ?>assets/demo/default/media/img/logo/alfamart.png" />

    <!-- perintah untuk menampilkan datatable -->
    <link href="<?php echo base_url() ?>assets/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
</head>
<!-- begin::Body -->

<body class="m-content--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-light m-aside--offcanvas-default">
    <!-- begin:: Page -->
    <div class="m-grid m-grid--hor m-grid--root m-page">
        <!-- BEGIN: Header -->
        <header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
            <div class="m-container m-container--fluid m-container--full-height">
                <div class="m-stack m-stack--ver m-stack--desktop">
                    <!-- BEGIN: Brand -->
                    <div class="m-stack__item m-brand  m-brand--skin-light ">
                        <div class="m-stack m-stack--ver m-stack--general m-stack--fluid">
                            <div class="m-stack__item m-stack__item--middle m-brand__logo">
                                <a href="<a href=" <?php echo base_url('dashboard') ?>" class="m-brand__logo-wrapper">
                                    <img alt="" src="<?= site_url() ?>assets/demo/demo11/media/img/logo/alfamart.png" />
                                </a>
                            </div>
                            <div class="m-stack__item m-stack__item--middle m-brand__tools">
                                <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-left m-dropdown--align-push" m-dropdown-toggle="click" aria-expanded="true">
                                </div>
                                <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                                <a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                                    <span></span>
                                </a>
                                <!-- END -->
                                <!-- BEGIN: Topbar Toggler -->
                                <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                                    <i class="flaticon-more"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END: Brand -->
                    <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">

                        <!-- BEGIN: Topbar -->
                        <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
                            <div class="m-stack__item m-topbar__nav-wrapper">
                                <ul class="m-topbar__nav m-nav m-nav--inline">
                                    <li class="m-nav__item " style=" display: block; padding-top: 20px; ">
                                        <a href="<?php echo base_url('auth/logout') ?>" class="btn btn-outline-brand m-btn btn-sm">
                                            <B>Sign Out</B>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </header>

        <!-- begin::Body -->
        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

            <!-- BEGIN: Left Aside -->
            <button class="m-aside-left-close  m-aside-left-close--skin-light " id="m_aside_left_close_btn"><i class="la la-close"></i></button>
            <div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-light ">

                <!-- BEGIN: Aside Menu -->
                <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-light m-aside-menu--submenu-skin-light " m-menu-vertical="1" m-menu-scrollable="0" m-menu-dropdown-timeout="500">
                    <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
                        <li class="m-menu__section m-menu__section--first">
                            <h4 class="m-menu__section-text">Main Navigation</h4>
                            <i class="m-menu__section-icon flaticon-more-v2"></i>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="<?php echo base_url('dashboard') ?>" class="m-menu__link "><i class="m-menu__link-icon flaticon-layers"></i><span class="m-menu__link-text">Dashboard</span></a></li>
                        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="<?= site_url('supplier') ?>" class="m-menu__link "><i class="m-menu__link-icon flaticon-truck"></i><span class="m-menu__link-text">Suppliers</span></a></li>
                        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="<?= site_url('customer') ?>" class="m-menu__link "><i class="m-menu__link-icon flaticon-customer"></i><span class="m-menu__link-text">Customers</span></a></li>
                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover" m-menu-link-redirect="1"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-open-box"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Products</span> <span class="m-menu__link-badge"></span> </span></span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                <ul class="m-menu__subnav">
                                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" m-menu-link-redirect="1"><span class="m-menu__link"><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Products</span> <span class="m-menu__link-badge"></span> </span></span></span></li>
                                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Categories</span></a></li>
                                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Units</span></a></li>
                                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Items</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover" m-menu-link-redirect="1"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-cart"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Transaction</span> <span class="m-menu__link-badge"></span> </span></span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                <ul class="m-menu__subnav">
                                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" m-menu-link-redirect="1"><span class="m-menu__link"><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Transaction</span> <span class="m-menu__link-badge"></span> </span></span></span></li>
                                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Sales</span></a></li>
                                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Stock In</span></a></li>
                                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Stock Out</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover" m-menu-link-redirect="1"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-graphic-1"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Reports</span> <span class="m-menu__link-badge"></span> </span></span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                <ul class="m-menu__subnav">
                                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" m-menu-link-redirect="1"><span class="m-menu__link"><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Reports</span> <span class="m-menu__link-badge"><span class="m-badge m-badge--accent">3</span></span> </span></span></span></li>
                                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Sales</span></a></li>
                                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Stock</span></a></li>
                                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text"></span></a></li>
                                </ul>
                            </div>
                        </li>
                        <?php if ($this->fungsi->user_login()->level == 1) { ?>
                            <li class="m-menu__section ">
                                <h4 class="m-menu__section-text">System</h4>
                                <i class="m-menu__section-icon flaticon-more-v2"></i>
                            </li>
                            <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="<?php echo base_url('user') ?>" class="m-menu__link "><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">Users</span></a></li>
                        <?php } ?>
                    </ul>
                </div>

                <!-- END: Aside Menu -->
            </div>

            <!-- END: Left Aside -->
            <div class="m-grid__item m-grid__item--fluid m-wrapper">
                <?php echo $contents ?>

                <!-- begin::Footer -->
                <footer class="m-grid__item		m-footer ">
                    <div class="m-container m-container--fluid m-container--full-height m-page__container">
                        <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
                            <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
                                <span class="m-footer__copyright">
                                    2020 &copy; Metronic theme by <a href="https://keenthemes.com" class="m-link">Keenthemes</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end::Footer -->
            </div>

            <!-- begin::Scroll Top -->
            <div id="m_scroll_top" class="m-scroll-top">
                <i class="la la-arrow-up"></i>
            </div>
            <!--begin::Global Theme Bundle -->
            <script src="<?= site_url() ?>assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
            <script src="<?= site_url() ?>assets/demo/demo11/base/scripts.bundle.js" type="text/javascript"></script>

            <!--end::Global Theme Bundle -->

            <!--begin::Page Vendors -->
            <script src="<?= site_url() ?>assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>

            <!--end::Page Vendors -->

            <!--begin::Page Scripts -->
            <script src="<?= site_url() ?>assets/app/js/dashboard.js" type="text/javascript"></script>

            <!-- perintah untuk menampilkan datatable -->
            <script src="<?php echo base_url() ?>assets/datatables/datatables.bundle.js" type="text/javascript"></script>
            <script src="<?php echo base_url() ?>assets/js/demo11/pages/crud/datatables/basic/scrollable.js" type="text/javascript"></script>
            <script>
                $(document).ready(function() {
                    $('#m_table_2').DataTable();
                });
            </script>
        </div>
    </div>
    </div>
    <!--end::Page Scripts -->
</body>
<!-- end::Body -->

</html>

<!-- Perintah untuk menampilkan data user yang login -->
<!-- <?php echo $this->fungsi->user_login()->username ?> -->