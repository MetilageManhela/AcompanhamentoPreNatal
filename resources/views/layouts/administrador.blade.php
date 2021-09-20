
<!DOCTYPE html>
<html lang="en">

<head>

</head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset ('adminty\libraries\assets\images\favicon.ico') }}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset ('adminty\libraries\bower_components\bootstrap\css\bootstrap.min.css') }}">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset ('adminty\libraries\assets\icon\feather\css\feather.css') }}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset ('adminty\libraries\assets\css\style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('adminty\libraries\assets\css\jquery.mCustomScrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('adminty\libraries\assets\icon\icofont\css\icofont.css') }}">
    <link href="{{ asset ('adminty\libraries\bower_components\font-awesome\css\font-awesome.min.css" rel="stylesheet" type="text/css') }}">



</head>


@section('sidebar')

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu"></i>
                        </a>
                        <a href="index-1.htm">
                            <img class="img-fluid" src="libraries\assets\images\logo.png" alt="Theme-Logo">
                        </a>
                        <a class="mobile-options">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>
                 
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="feather icon-maximize full-screen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="feather icon-bell"></i>
                                        <span class="badge bg-c-pink">5</span>
                                    </div>
                                   
                                </div>
                            </li>
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                                        <i class="feather icon-message-square"></i>
                                        <span class="badge bg-c-green">3</span>
                                    </div>
                                </div>
                            </li>
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="libraries\assets\images\avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                        <span>John Doe</span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <a href="#!">
                                                <i class="feather icon-settings"></i> Settings
                                            </a>
                                        </li>
                                        <li>
                                            <a href="user-profile.htm">
                                                <i class="feather icon-user"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="email-inbox.htm">
                                                <i class="feather icon-mail"></i> My Messages
                                            </a>
                                        </li>
                                        <li>
                                            <a href="auth-lock-screen.htm">
                                                <i class="feather icon-lock"></i> Lock Screen
                                            </a>
                                        </li>
                                        <li>
                                            <a href="auth-normal-sign-in.htm">
                                                <i class="feather icon-log-out"></i> Logout
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="pcoded-navigatio-lavel">Navigation</div>
                            <ul class="pcoded-item pcoded-left-item">
                                
                                <li class="active">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                    </a>
                                   
                                </li>
                                 <li class=" ">
                                    <a href="sticky.htm">
                                        <span class="pcoded-micon"><i class="feather icon-cpu"></i></span>
                                        <span class="pcoded-mtext">Sticky Notes</span>
                                        <span class="pcoded-badge label label-danger">HOT</span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                        <span class="pcoded-mtext">Page layouts</span>
                                        <span class="pcoded-badge label label-warning">NEW</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" pcoded-hasmenu">
                                            <a href="javascript:void(0)">
                                                <span class="pcoded-mtext">Vertical</span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class=" ">
                                                    <a href="menu-static.htm">
                                                        <span class="pcoded-mtext">Static Layout</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="menu-header-fixed.htm">
                                                        <span class="pcoded-mtext">Header Fixed</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="menu-compact.htm">
                                                        <span class="pcoded-mtext">Compact</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="menu-sidebar.htm">
                                                        <span class="pcoded-mtext">Sidebar Fixed</span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li class=" pcoded-hasmenu">
                                            <a href="javascript:void(0)">
                                                <span class="pcoded-mtext">Horizontal</span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class=" ">
                                                    <a href="menu-horizontal-static.htm" target="_blank">
                                                        <span class="pcoded-mtext">Static Layout</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="menu-horizontal-fixed.htm" target="_blank">
                                                        <span class="pcoded-mtext">Fixed layout</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="menu-horizontal-icon.htm" target="_blank">
                                                        <span class="pcoded-mtext">Static With Icon</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="menu-horizontal-icon-fixed.htm" target="_blank">
                                                        <span class="pcoded-mtext">Fixed With Icon</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class=" ">
                                            <a href="menu-bottom.htm">
                                                <span class="pcoded-mtext">Bottom Menu</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="box-layout.htm" target="_blank">
                                                <span class="pcoded-mtext">Box Layout</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="menu-rtl.htm" target="_blank">
                                                <span class="pcoded-mtext">RTL</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="navbar-light.htm">
                                        <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                                        <span class="pcoded-mtext">Navigation</span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                                        <span class="pcoded-mtext">Widget</span>
                                        <span class="pcoded-badge label label-danger">100+</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="widget-statistic.htm">
                                                <span class="pcoded-mtext">Statistic</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="widget-data.htm">
                                                <span class="pcoded-mtext">Data</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="widget-chart.htm">
                                                <span class="pcoded-mtext">Chart Widget</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel">UI Element</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                                        <span class="pcoded-mtext">Basic Components</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="alert.htm">
                                                <span class="pcoded-mtext">Alert</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="breadcrumb.htm">
                                                <span class="pcoded-mtext">Breadcrumbs</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="button.htm">
                                                <span class="pcoded-mtext">Button</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="box-shadow.htm">
                                                <span class="pcoded-mtext">Box-Shadow</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="accordion.htm">
                                                <span class="pcoded-mtext">Accordion</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="generic-class.htm">
                                                <span class="pcoded-mtext">Generic Class</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="tabs.htm">
                                                <span class="pcoded-mtext">Tabs</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="color.htm">
                                                <span class="pcoded-mtext">Color</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="label-badge.htm">
                                                <span class="pcoded-mtext">Label Badge</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="progress-bar.htm">
                                                <span class="pcoded-mtext">Progress Bar</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="preloader.htm">
                                                <span class="pcoded-mtext">Pre-Loader</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="list.htm">
                                                <span class="pcoded-mtext">List</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="tooltip.htm">
                                                <span class="pcoded-mtext">Tooltip And Popover</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="typography.htm">
                                                <span class="pcoded-mtext">Typography</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="other.htm">
                                                <span class="pcoded-mtext">Other</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-gitlab"></i></span>
                                        <span class="pcoded-mtext">Advance Components</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="draggable.htm">
                                                <span class="pcoded-mtext">Draggable</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="bs-grid.htm">
                                                <span class="pcoded-mtext">Grid Stack</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="light-box.htm">
                                                <span class="pcoded-mtext">Light Box</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="modal.htm">
                                                <span class="pcoded-mtext">Modal</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="notification.htm">
                                                <span class="pcoded-mtext">Notifications</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="notify.htm">
                                                <span class="pcoded-mtext">PNOTIFY</span>
                                                <span class="pcoded-badge label label-info">NEW</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="rating.htm">
                                                <span class="pcoded-mtext">Rating</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="range-slider.htm">
                                                <span class="pcoded-mtext">Range Slider</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="slider.htm">
                                                <span class="pcoded-mtext">Slider</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="syntax-highlighter.htm">
                                                <span class="pcoded-mtext">Syntax Highlighter</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="tour.htm">
                                                <span class="pcoded-mtext">Tour</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="treeview.htm">
                                                <span class="pcoded-mtext">Tree View</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="nestable.htm">
                                                <span class="pcoded-mtext">Nestable</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="toolbar.htm">
                                                <span class="pcoded-mtext">Toolbar</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="x-editable.htm">
                                                <span class="pcoded-mtext">X-Editable</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-package"></i></span>
                                        <span class="pcoded-mtext">Extra Components</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="session-timeout.htm">
                                                <span class="pcoded-mtext">Session Timeout</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="session-idle-timeout.htm">
                                                <span class="pcoded-mtext">Session Idle Timeout</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="offline.htm">
                                                <span class="pcoded-mtext">Offline</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class=" ">
                                    <a href="animation.htm">
                                        <span class="pcoded-micon"><i class="feather icon-aperture rotate-refresh"></i><b>A</b></span>
                                        <span class="pcoded-mtext">Animations</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="sticky.htm">
                                        <span class="pcoded-micon"><i class="feather icon-cpu"></i></span>
                                        <span class="pcoded-mtext">Sticky Notes</span>
                                        <span class="pcoded-badge label label-danger">HOT</span>
                                    </a>
                                </li>
                                 <li class=" ">
                                    <a href="sticky.htm">
                                        <span class="pcoded-micon"><i class="feather icon-cpu"></i></span>
                                        <span class="pcoded-mtext">Sticky Notes</span>
                                        <span class="pcoded-badge label label-danger">HOT</span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-command"></i></span>
                                        <span class="pcoded-mtext">Icons</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="icon-font-awesome.htm">
                                                <span class="pcoded-mtext">Font Awesome</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="icon-themify.htm">
                                                <span class="pcoded-mtext">Themify</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="icon-simple-line.htm">
                                                <span class="pcoded-mtext">Simple Line Icon</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="icon-ion.htm">
                                                <span class="pcoded-mtext">Ion Icon</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="icon-material-design.htm">
                                                <span class="pcoded-mtext">Material Design</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="icon-icofonts.htm">
                                                <span class="pcoded-mtext">Ico Fonts</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="icon-weather.htm">
                                                <span class="pcoded-mtext">Weather Icon</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="icon-typicons.htm">
                                                <span class="pcoded-mtext">Typicons</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="icon-flags.htm">
                                                <span class="pcoded-mtext">Flags</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                           
                        </div>
                    </nav>
                  
                    ////
                    
                    @show
                    
                         @yield('content')
                                
            </div>
        </div>
    </div>

    <script data-cfasync="false" src="..\..\..\cdn-cgi\scripts\5c5dd728\cloudflare-static\email-decode.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('adminty\libraries\bower_components\jquery\js\jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('adminty\libraries\bower_components\jquery-ui\js\jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('adminty\libraries\bower_components\popper.js\js\popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('adminty\libraries\bower_components\bootstrap\js\bootstrap.min.js') }}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{ asset('adminty\libraries\bower_components\jquery-slimscroll\js\jquery.slimscroll.js') }}"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{ asset('adminty\libraries\bower_components\modernizr\js\modernizr.js') }}"></script>
    <!-- Chart js -->
    <script type="text/javascript" src="{{ asset('adminty\libraries\bower_components\chart.js\js\Chart.js') }}"></script>
    <!-- amchart js -->
    <script src="{{ asset('adminty\libraries\assets\pages\widget\amchart\amcharts.js') }}"></script>
    <script src="{{ asset('adminty\libraries\assets\pages\widget\amchart\serial.js') }}"></script>
    <script src="{{ asset('adminty\libraries\assets\pages\widget\amchart\light.js') }}"></script>
    <script src="{{ asset('adminty\libraries\assets\js\jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('adminty\libraries\assets\js\SmoothScroll.js') }}"></script>
    <script src="{{ asset('adminty\libraries\assets\js\pcoded.min.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('adminty\libraries\assets\js\vartical-layout.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('adminty\libraries\assets\pages\dashboard\custom-dashboard.js') }}"></script>
    <script type="text/javascript" src="{{ asset('adminty\libraries\assets\js\script.min.js') }}"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>

</html>
