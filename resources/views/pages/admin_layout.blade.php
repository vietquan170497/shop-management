<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('backend/images/iconcoffee.png')}}" type="image/ico" />

    <title>Quản lý cửa hàng</title>

    <!-- Bootstrap -->
    <link href="{{asset('backend/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('backend/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('backend/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('backend/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{asset('backend/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('backend/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('backend/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('backend/build/css/custom.min.css')}}" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="{{URL::to('/dashboard')}}" class="site_title"><i class="fa fa-coffee"></i> <span> Management</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="{{asset('backend/images/user.png')}}" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2><?php
                            $name = Session::get('admin_name');
                            if($name){
                                echo $name;
                            }
                            ?>
                        </h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>Cửa hàng</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-newspaper-o"></i>Danh mục mặt hàng <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{URL::to('/add-category-product')}}">Thêm loại mặt hàng</a></li>
                                    <li><a href="{{URL::to('/all-category-product')}}">Danh sách loại mặt hàng</a></li>
                                </ul>
                            </li>

                            <li><a><i class="fa fa-book"></i> Mặt hàng <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{URL::to('/add-product')}}">Thêm mặt hàng</a></li>
                                    <li><a href="{{URL::to('/all-product')}}">Danh sách mặt hàng</a></li>
                                </ul>
                            </li>

{{--                            <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>--}}
{{--                                <ul class="nav child_menu">--}}
{{--                                    <li><a href="general_elements.html">General Elements</a></li>--}}
{{--                                    <li><a href="media_gallery.html">Media Gallery</a></li>--}}
{{--                                    <li><a href="typography.html">Typography</a></li>--}}
{{--                                    <li><a href="icons.html">Icons</a></li>--}}
{{--                                    <li><a href="glyphicons.html">Glyphicons</a></li>--}}
{{--                                    <li><a href="widgets.html">Widgets</a></li>--}}
{{--                                    <li><a href="invoice.html">Invoice</a></li>--}}
{{--                                    <li><a href="inbox.html">Inbox</a></li>--}}
{{--                                    <li><a href="calendar.html">Calendar</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}

{{--                            <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>--}}
{{--                                <ul class="nav child_menu">--}}
{{--                                    <li><a href="tables.html">Tables</a></li>--}}
{{--                                    <li><a href="tables_dynamic.html">Table Dynamic</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}

{{--                            <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>--}}
{{--                                <ul class="nav child_menu">--}}
{{--                                    <li><a href="chartjs.html">Chart JS</a></li>--}}
{{--                                    <li><a href="chartjs2.html">Chart JS2</a></li>--}}
{{--                                    <li><a href="morisjs.html">Moris JS</a></li>--}}
{{--                                    <li><a href="echarts.html">ECharts</a></li>--}}
{{--                                    <li><a href="other_charts.html">Other Charts</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}

{{--                            <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>--}}
{{--                                <ul class="nav child_menu">--}}
{{--                                    <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>--}}
{{--                                    <li><a href="fixed_footer.html">Fixed Footer</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}

                        </ul>
                    </div>
                    <div class="menu_section">
                        <h3>Người dùng</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-users"></i> Nhân viên <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="e_commerce.html">Thêm nhân viên</a></li>
                                    <li><a href="projects.html">Danh sách nhân viên</a></li>
                                </ul>
                            </li>

{{--                            <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>--}}
{{--                                <ul class="nav child_menu">--}}
{{--                                    <li><a href="page_403.html">403 Error</a></li>--}}
{{--                                    <li><a href="page_404.html">404 Error</a></li>--}}
{{--                                    <li><a href="page_500.html">500 Error</a></li>--}}
{{--                                    <li><a href="plain_page.html">Plain Page</a></li>--}}
{{--                                    <li><a href="login.html">Login Page</a></li>--}}
{{--                                    <li><a href="pricing_tables.html">Pricing Tables</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}

{{--                            <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>--}}
{{--                                <ul class="nav child_menu">--}}
{{--                                    <li><a href="#level1_1">Level One</a>--}}
{{--                                    <li><a>Level One<span class="fa fa-chevron-down"></span></a>--}}
{{--                                        <ul class="nav child_menu">--}}
{{--                                            <li class="sub_menu"><a href="level2.html">Level Two</a>--}}
{{--                                            </li>--}}
{{--                                            <li><a href="#level2_1">Level Two</a>--}}
{{--                                            </li>--}}
{{--                                            <li><a href="#level2_2">Level Two</a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li><a href="#level1_2">Level One</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}

{{--                            <li><a href="javascript:void(0)">--}}
{{--                                    <i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
                        </ul>
                    </div>

                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-lg">
                    <a data-toggle="tooltip" data-placement="top" title="Cài đặt">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Đăng xuất" href="{{URL::to('/logout')}}">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                    <ul class=" navbar-right">
                        <li class="nav-item dropdown open" style="padding-left: 15px;">
                            <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('backend/images/user.png')}}" alt="">
                                    <?php
                                        $name = Session::get('admin_name');
                                        if($name){
                                            echo $name;
                                        }
                                    ?>
                            </a>
                            <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item"  href="javascript:;"> Profile</a>
                                <a class="dropdown-item"  href="javascript:;">
                                    <span class="badge bg-red pull-right">50%</span>
                                    <span>Settings</span>
                                </a>
                                <a class="dropdown-item"  href="javascript:;">Help</a>
                                <a class="dropdown-item"  href="{{URL::to('/logout')}}"><i class="fa fa-sign-out pull-right"></i> Đăng xuất</a>
                            </div>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            @yield('admin_content')
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="{{asset('backend/vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('backend/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('backend/vendors/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{asset('backend/vendors/nprogress/nprogress.js')}}"></script>
<!-- Chart.js -->
<script src="{{asset('backend/vendors/Chart.js/dist/Chart.min.js')}}"></script>
<!-- gauge.js -->
<script src="{{asset('backend/vendors/gauge.js/dist/gauge.min.js')}}"></script>
<!-- bootstrap-progressbar -->
<script src="{{asset('backend/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('backend/vendors/iCheck/icheck.min.js')}}"></script>
<!-- Skycons -->
<script src="{{asset('backend/vendors/skycons/skycons.js')}}"></script>
<!-- Flot -->
<script src="{{asset('backend/vendors/Flot/jquery.flot.js')}}"></script>
<script src="{{asset('backend/vendors/Flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('backend/vendors/Flot/jquery.flot.time.js')}}"></script>
<script src="{{asset('backend/vendors/Flot/jquery.flot.stack.js')}}"></script>
<script src="{{asset('backend/vendors/Flot/jquery.flot.resize.js')}}"></script>
<!-- Flot plugins -->
<script src="{{asset('backend/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
<script src="{{asset('backend/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
<script src="{{asset('backend/vendors/flot.curvedlines/curvedLines.js')}}"></script>
<!-- DateJS -->
<script src="{{asset('backend/vendors/DateJS/build/date.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('backend/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
<script src="{{asset('backend/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
<script src="{{asset('backend/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{asset('backend/vendors/moment/min/moment.min.js')}}"></script>
<script src="{{asset('backend/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

<!-- Custom Theme Scripts -->
<script src="{{asset('backend/build/js/custom.min.js')}}"></script>

</body>
</html>
