<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Dashboard | Remark Admin Template</title>

  <link rel="apple-touch-icon" href="{{ asset('assets/images/apple-touch-icon.png')}}">
  <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-extend.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/site.min.css')}}">

  <link rel="stylesheet" href="{{ asset('assets/vendor/animsition/animsition.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/asscrollable/asScrollable.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/switchery/switchery.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/intro-js/introjs.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/slidepanel/slidePanel.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/flag-icon-css/flag-icon.css')}}">

  <!-- Plugin -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/chartist-js/chartist.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/jvectormap/jquery-jvectormap.css')}}">

  <!-- Page -->
  <link rel="stylesheet" href="{{ asset('assets/css/../fonts/weather-icons/weather-icons.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/dashboard/v1.css')}}">

  <!-- Fonts -->
  <link rel="stylesheet" href="{{ asset('assets/fonts/web-icons/web-icons.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/fonts/brand-icons/brand-icons.min.css')}}">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>


  <!--[if lt IE 9]>
    <script src="{{ asset('assets/vendor/html5shiv/html5shiv.min.js')}}"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="{{ asset('assets/vendor/media-match/media.match.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/respond/respond.min.js')}}"></script>
    <![endif]-->

  <!-- Scripts -->
  <script src="{{ asset('assets/vendor/modernizr/modernizr.js')}}"></script>
  <script src="{{ asset('assets/vendor/breakpoints/breakpoints.js')}}"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body class="dashboard">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
      data-toggle="menubar">
        <span class="sr-only">Toggle navigation</span>
        <span class="hamburger-bar"></span>
      </button>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
      data-toggle="collapse">
        <i class="icon wb-more-horizontal" aria-hidden="true"></i>
      </button>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-search"
      data-toggle="collapse">
        <span class="sr-only">Toggle Search</span>
        <i class="icon wb-search" aria-hidden="true"></i>
      </button>
      <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
        <img class="navbar-brand-logo" src="{{ asset('assets/images/logo.png')}}" title="Remark">
        <span class="navbar-brand-text"> Remark</span>
      </div>
    </div>

    <div class="navbar-container container-fluid">
      <!-- Navbar Collapse -->
      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
        <!-- Navbar Toolbar -->
        <ul class="nav navbar-toolbar">
          <li class="hidden-float" id="toggleMenubar">
            <a data-toggle="menubar" href="#" role="button">
              <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
            </a>
          </li>
          <li class="hidden-xs" id="toggleFullscreen">
            <a class="icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
              <span class="sr-only">Toggle fullscreen</span>
            </a>
          </li>
          <li class="hidden-float">
            <a class="icon wb-search" data-toggle="collapse" href="#site-navbar-search" role="button">
              <span class="sr-only">Toggle Search</span>
            </a>
          </li>
          <li class="dropdown dropdown-fw dropdown-mega">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
            data-animation="slide-bottom" role="button">Mega <i class="icon wb-chevron-down-mini" aria-hidden="true"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li role="presentation">
                <div class="mega-content">
                  <div class="row">
                    <div class="col-sm-4">
                      <h5>UI Kit</h5>
                      <ul class="blocks-2">
                        <li class="mega-menu margin-0">
                          <ul class="list-icons">
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="advanced/animation.html">Animation</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="uikit/buttons.html">Buttons</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="uikit/colors.html">Colors</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="uikit/dropdowns.html">Dropdowns</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="uikit/icons.html">Icons</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="advanced/lightbox.html">Lightbox</a>
                            </li>
                          </ul>
                        </li>
                        <li class="mega-menu margin-0">
                          <ul class="list-icons">
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="uikit/modals.html">Modals</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="uikit/panels.html">Panels</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="structure/overlay.html">Overlay</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="uikit/tooltip-popover.html ">Tooltips</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="advanced/scrollable.html">Scrollable</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="uikit/typography.html">Typography</a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                    <div class="col-sm-4">
                      <h5>Media
                        <span class="badge badge-success">4</span>
                      </h5>
                      <ul class="blocks-3">
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="{{ asset('assets/photos/placeholder.png')}}" alt="..." />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="{{ asset('assets/photos/placeholder.png')}}" alt="..." />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="{{ asset('assets/photos/placeholder.png')}}" alt="..." />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="{{ asset('assets/photos/placeholder.png')}}" alt="..." />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="{{ asset('assets/photos/placeholder.png')}}" alt="..." />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="{{ asset('assets/photos/placeholder.png')}}" alt="..." />
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-sm-4">
                      <h5 class="margin-bottom-0">Accordion</h5>
                      <!-- Accordion -->
                      <div class="panel-group panel-group-simple" id="siteMegaAccordion" aria-multiselectable="true"
                      role="tablist">
                        <div class="panel">
                          <div class="panel-heading" id="siteMegaAccordionHeadingOne" role="tab">
                            <a class="panel-title" data-toggle="collapse" href="#siteMegaCollapseOne" data-parent="#siteMegaAccordion"
                            aria-expanded="false" aria-controls="siteMegaCollapseOne">
                                Collapsible Group Item #1
                              </a>
                          </div>
                          <div class="panel-collapse collapse" id="siteMegaCollapseOne" aria-labelledby="siteMegaAccordionHeadingOne"
                          role="tabpanel">
                            <div class="panel-body">
                              De moveat laudatur vestra parum doloribus labitur sentire partes, eripuit praesenti
                              congressus ostendit alienae, voluptati ornateque
                              accusamus clamat reperietur convicia albucius.
                            </div>
                          </div>
                        </div>
                        <div class="panel">
                          <div class="panel-heading" id="siteMegaAccordionHeadingTwo" role="tab">
                            <a class="panel-title collapsed" data-toggle="collapse" href="#siteMegaCollapseTwo"
                            data-parent="#siteMegaAccordion" aria-expanded="false"
                            aria-controls="siteMegaCollapseTwo">
                                Collapsible Group Item #2
                              </a>
                          </div>
                          <div class="panel-collapse collapse" id="siteMegaCollapseTwo" aria-labelledby="siteMegaAccordionHeadingTwo"
                          role="tabpanel">
                            <div class="panel-body">
                              Praestabiliorem. Pellat excruciant legantur ullum leniter vacare foris voluptate
                              loco ignavi, credo videretur multoque choro fatemur
                              mortis animus adoptionem, bello statuat expediunt
                              naturales.
                            </div>
                          </div>
                        </div>

                        <div class="panel">
                          <div class="panel-heading" id="siteMegaAccordionHeadingThree" role="tab">
                            <a class="panel-title collapsed" data-toggle="collapse" href="#siteMegaCollapseThree"
                            data-parent="#siteMegaAccordion" aria-expanded="false"
                            aria-controls="siteMegaCollapseThree">
                                Collapsible Group Item #3
                              </a>
                          </div>
                          <div class="panel-collapse collapse" id="siteMegaCollapseThree" aria-labelledby="siteMegaAccordionHeadingThree"
                          role="tabpanel">
                            <div class="panel-body">
                              Horum, antiquitate perciperet d conspectum locus obruamus animumque perspici probabis
                              suscipere. Desiderat magnum, contenta poena desiderant
                              concederetur menandri damna disputandum corporum.
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End Accordion -->
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </li>
        </ul>
        <!-- End Navbar Toolbar -->

        <!-- Navbar Toolbar Right -->
        <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)" data-animation="slide-bottom"
            aria-expanded="false" role="button">
              <span class="flag-icon flag-icon-us"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem">
                  <span class="flag-icon flag-icon-gb"></span> English</a>
              </li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem">
                  <span class="flag-icon flag-icon-fr"></span> French</a>
              </li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem">
                  <span class="flag-icon flag-icon-cn"></span> Chinese</a>
              </li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem">
                  <span class="flag-icon flag-icon-de"></span> German</a>
              </li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem">
                  <span class="flag-icon flag-icon-nl"></span> Dutch</a>
              </li>
            </ul>
          </li>
          
          <li class="dropdown">
            <a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
            data-animation="slide-bottom" role="button">
              <span class="avatar avatar-online">
                <img src="{{ asset('assets/portraits/5.jpg')}}" alt="...">
                <i></i>
              </span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li role="presentation">
                <a href="{{ url('/user/' . Auth::user()->username .'/profile' ) }}" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Profile</a>
              </li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem"><i class="icon wb-payment" aria-hidden="true"></i> Billing</a>
              </li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i> Settings</a>
              </li>
              <li class="divider" role="presentation"></li>
              <li role="presentation">
                <a href="{{ url('/auth/logout') }}" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
              </li>
            </ul>
          </li>
          
          <li class="dropdown">
            <a data-toggle="dropdown" href="javascript:void(0)" title="Notifications" aria-expanded="false"
            data-animation="slide-bottom" role="button">
              <i class="icon wb-bell" aria-hidden="true"></i>
              <span class="badge badge-danger up">5</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
              <li class="dropdown-menu-header" role="presentation">
                <h5>NOTIFICATIONS</h5>
                <span class="label label-round label-danger">New 5</span>
              </li>

              <li class="list-group" role="presentation">
                <div data-role="container">
                  <div data-role="content">
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <i class="icon wb-order bg-red-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">A new order has been placed</h6>
                          <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">5 hours ago</time>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <i class="icon wb-user bg-green-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Completed the task</h6>
                          <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">2 days ago</time>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <i class="icon wb-settings bg-red-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Settings updated</h6>
                          <time class="media-meta" datetime="2015-06-11T14:05:00+08:00">2 days ago</time>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <i class="icon wb-calendar bg-blue-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Event started</h6>
                          <time class="media-meta" datetime="2015-06-10T13:50:18+08:00">3 days ago</time>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <i class="icon wb-chat bg-orange-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Message received</h6>
                          <time class="media-meta" datetime="2015-06-10T12:34:48+08:00">3 days ago</time>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </li>
              <li class="dropdown-menu-footer" role="presentation">
                <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                  <i class="icon wb-settings" aria-hidden="true"></i>
                </a>
                <a href="javascript:void(0)" role="menuitem">
                    All notifications
                  </a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a data-toggle="dropdown" href="javascript:void(0)" title="Messages" aria-expanded="false"
            data-animation="slide-bottom" role="button">
              <i class="icon wb-envelope" aria-hidden="true"></i>
              <span class="badge badge-info up">3</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
              <li class="dropdown-menu-header" role="presentation">
                <h5>MESSAGES</h5>
                <span class="label label-round label-info">New 3</span>
              </li>

              <li class="list-group" role="presentation">
                <div data-role="container">
                  <div data-role="content">
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <span class="avatar avatar-sm avatar-online">
                            <img src="{{ asset('assets/portraits/2.jpg')}}" alt="..." />
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Mary Adams</h6>
                          <div class="media-meta">
                            <time datetime="2015-06-17T20:22:05+08:00">30 minutes ago</time>
                          </div>
                          <div class="media-detail">Anyways, i would like just do it</div>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <span class="avatar avatar-sm avatar-off">
                            <img src="{{ asset('assets/portraits/3.jpg')}}" alt="..." />
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Caleb Richards</h6>
                          <div class="media-meta">
                            <time datetime="2015-06-17T12:30:30+08:00">12 hours ago</time>
                          </div>
                          <div class="media-detail">I checheck the document. But there seems</div>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <span class="avatar avatar-sm avatar-busy">
                            <img src="{{ asset('assets/portraits/4.jpg')}}" alt="..." />
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">June Lane</h6>
                          <div class="media-meta">
                            <time datetime="2015-06-16T18:38:40+08:00">2 days ago</time>
                          </div>
                          <div class="media-detail">Lorem ipsum Id consectetur et minim</div>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <span class="avatar avatar-sm avatar-away">
                            <img src="{{ asset('assets/portraits/5.jpg')}}" alt="..." />
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Edward Fletcher</h6>
                          <div class="media-meta">
                            <time datetime="2015-06-15T20:34:48+08:00">3 days ago</time>
                          </div>
                          <div class="media-detail">Dolor et irure cupidatat commodo nostrud nostrud.</div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </li>
              <li class="dropdown-menu-footer" role="presentation">
                <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                  <i class="icon wb-settings" aria-hidden="true"></i>
                </a>
                <a href="javascript:void(0)" role="menuitem">
                    See all messages
                  </a>
              </li>
            </ul>
          </li>
          <li id="toggleChat">
            <a data-toggle="site-sidebar" href="javascript:void(0)" title="Chat" data-url="site-sidebar.tpl">
              <i class="icon wb-chat" aria-hidden="true"></i>
            </a>
          </li>
        </ul>
        <!-- End Navbar Toolbar Right -->
      </div>
      <!-- End Navbar Collapse -->

      <!-- Site Navbar Seach -->
      <div class="collapse navbar-search-overlap" id="site-navbar-search">
        <form role="search">
          <div class="form-group">
            <div class="input-search">
              <i class="input-search-icon wb-search" aria-hidden="true"></i>
              <input type="text" class="form-control" name="site-search" placeholder="Search...">
              <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
              data-toggle="collapse" aria-label="Close"></button>
            </div>
          </div>
        </form>
      </div>
      <!-- End Site Navbar Seach -->
    </div>
  </nav>
  <div class="site-menubar">
    <div class="site-menubar-body">
      <div>
        <div>
          <ul class="site-menu">
            <li class="site-menu-category">General</li>
            <li class="site-menu-item has-sub active open">
              <a href="javascript:void(0)" data-slug="dashboard">
                <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                <span class="site-menu-title">CPanel</span>
                <div class="site-menu-badge">
                  <span class="badge badge-success">2</span>
                </div>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item active">
                  <a class="animsition-link" href="index.html" data-slug="dashboard-v1">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Dashboard</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="dashboard/v2.html" data-slug="dashboard-v2">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Settings</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="dashboard/v2.html" data-slug="dashboard-v2">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Server</span>
                  </a>
                </li>
              </ul>
            </li>
            <!-- Products -->
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="layout">
                <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                <span class="site-menu-title">Products</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="layouts/grids.html" data-slug="layout-grids">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Create</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="layouts/headers.html" data-slug="layout-headers">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Trash</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="layouts/bordered-header.html" data-slug="layout-bordered-header">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Bordered Header</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="layouts/two-columns.html" data-slug="layout-two-columns">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Two Columns</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="layouts/boxed.html" data-slug="layout-boxed">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Boxed Layout</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="layouts/blank.html" data-slug="layout-blank">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Blank Page</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="layouts/menu-collapsed.html" data-slug="layout-menu-collapsed">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Menu Collapsed</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="layouts/menu-expended.html" data-slug="layout-menu-expended">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Menu Expended</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="layouts/menubar-flipped.html" data-slug="layout-menubar-flipped">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Menubar Flipped</span>
                  </a>
                </li>
              </ul>
            </li>
            <!-- End Products -->

            <!-- Categories -->
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="page">
                <i class="site-menu-icon wb-file" aria-hidden="true"></i>
                <span class="site-menu-title">Categories</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item has-sub">
                  <a href="javascript:void(0)" data-slug="">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Errors</span>
                    <span class="site-menu-arrow"></span>
                  </a>
                  <ul class="site-menu-sub">
                    <li class="site-menu-item">
                      <a class="animsition-link" href="pages/400.html" data-slug="page-error-400">
                        <i class="site-menu-icon " aria-hidden="true"></i>
                        <span class="site-menu-title">400</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a class="animsition-link" href="pages/403.html" data-slug="page-error-403">
                        <i class="site-menu-icon " aria-hidden="true"></i>
                        <span class="site-menu-title">403</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a class="animsition-link" href="pages/404.html" data-slug="page-error-404">
                        <i class="site-menu-icon " aria-hidden="true"></i>
                        <span class="site-menu-title">404</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a class="animsition-link" href="pages/500.html" data-slug="page-error-500">
                        <i class="site-menu-icon " aria-hidden="true"></i>
                        <span class="site-menu-title">500</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a class="animsition-link" href="pages/503.html" data-slug="page-error-503">
                        <i class="site-menu-icon " aria-hidden="true"></i>
                        <span class="site-menu-title">503</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="pages/faq.html" data-slug="page-faq">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">FAQ</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="pages/register.html" data-slug="page-register">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Register</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="pages/login.html" data-slug="page-login">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Login</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="pages/lockscreen.html" data-slug="page-lockscreen">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Lockscreen</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="pages/forgot-password.html" data-slug="page-forgot-password">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Forgot Password</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="pages/maintenance.html" data-slug="page-maintenance">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Maintenance</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="pages/email.html" data-slug="page-email">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Email</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="pages/invoice.html" data-slug="page-invoice">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Invoice</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="pages/profile.html" data-slug="page-profile">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Profile</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="pages/search-result.html" data-slug="page-search-result">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Search Result</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="pages/user.html" data-slug="page-user">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">User</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="pages/code-editor.html" data-slug="page-code-editor">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Code Editor</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="pages/gallery.html" data-slug="page-gallery">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Gallery</span>
                  </a>
                </li>
                <li class="site-menu-item has-sub">
                  <a href="javascript:void(0)" data-slug="page-map">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Maps</span>
                    <span class="site-menu-arrow"></span>
                  </a>
                  <ul class="site-menu-sub">
                    <li class="site-menu-item">
                      <a class="animsition-link" href="pages/map-google.html" data-slug="page-map-google">
                        <i class="site-menu-icon " aria-hidden="true"></i>
                        <span class="site-menu-title">Google Maps</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a class="animsition-link" href="pages/map-vector.html" data-slug="page-map-vector">
                        <i class="site-menu-icon " aria-hidden="true"></i>
                        <span class="site-menu-title">Vector Maps</span>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
          <!-- End Categories -->

            <li class="site-menu-category">Elements</li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="uikit">
                <i class="site-menu-icon wb-bookmark" aria-hidden="true"></i>
                <span class="site-menu-title">Basic UI</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="uikit/buttons.html" data-slug="uikit-buttons">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Buttons</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="uikit/colors.html" data-slug="uikit-colors">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Colors</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="uikit/dropdowns.html" data-slug="uikit-dropdowns">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Dropdowns</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="uikit/list.html" data-slug="uikit-list">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">List</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="uikit/icons.html" data-slug="uikit-icons">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Icons</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="uikit/images.html" data-slug="uikit-images">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Images</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="uikit/carousel.html" data-slug="uikit-carousel">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Carousel</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="uikit/modals.html" data-slug="uikit-modals">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Modals</span>
                  </a>
                </li>
                <li class="site-menu-item has-sub">
                  <a href="javascript:void(0)" data-slug="uikit-panel">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Panel</span>
                    <span class="site-menu-arrow"></span>
                  </a>
                  <ul class="site-menu-sub">
                    <li class="site-menu-item">
                      <a class="animsition-link" href="uikit/panel-structure.html" data-slug="uikit-panel-structure">
                        <i class="site-menu-icon " aria-hidden="true"></i>
                        <span class="site-menu-title">Panel Structure</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a class="animsition-link" href="uikit/panel-actions.html" data-slug="uikit-panel-actions">
                        <i class="site-menu-icon " aria-hidden="true"></i>
                        <span class="site-menu-title">Panel Actions</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a class="animsition-link" href="uikit/panel-portlets.html" data-slug="uikit-panel-portlets">
                        <i class="site-menu-icon " aria-hidden="true"></i>
                        <span class="site-menu-title">Panel Portlets</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="uikit/progress-bars.html" data-slug="uikit-progress-bars">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Progress Bars</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="uikit/badges-labels.html" data-slug="uikit-badges-labels">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Badges &amp; Labels</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="uikit/tooltip-popover.html" data-slug="uikit-tooltip-popover">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Tooltip &amp; Popover</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="uikit/tabs-accordions.html" data-slug="uikit-tabs-accordions">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Tabs &amp; Accordions</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="uikit/typography.html" data-slug="uikit-typography">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Typography</span>
                    <div class="site-menu-badge">
                      <span class="badge badge-primary">5</span>
                    </div>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="uikit/utilities.html" data-slug="uikit-utilities">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Utilties</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="advanced">
                <i class="site-menu-icon wb-hammer" aria-hidden="true"></i>
                <span class="site-menu-title">Advanced UI</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="advanced/animation.html" data-slug="advanced-animation">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Animation</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="advanced/lightbox.html" data-slug="advanced-lightbox">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Lightbox</span>
                  </a>
                </li>
                <li class="site-menu-item hidden-xs">
                  <a href="javascript:void(0)" data-slug="advanced-tour">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Tour</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="advanced/treeview.html" data-slug="advanced-treeview">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Treeview</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="advanced/rating.html" data-slug="advanced-rating">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Rating</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="advanced/alertify.html" data-slug="advanced-alertify">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Alertify</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="advanced/toastr.html" data-slug="advanced-toastr">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Toastr</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="advanced/context-menu.html" data-slug="advanced-context-menu">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Context Menu</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="advanced/bootbox-sweetalert.html" data-slug="advanced-bootbox-sweetalert">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Bootbox &amp; Sweetalert</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="advanced/sortable-nestable.html" data-slug="advanced-sortable-nestable">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Sortable &amp; Nestable</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="advanced/scrollable.html" data-slug="advanced-scrollable">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Scrollable</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="advanced/highlight.html" data-slug="advanced-highlight">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Highlight</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="advanced/masonry.html" data-slug="advanced-masonry">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Masonry</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="advanced/maps-vector.html" data-slug="advanced-maps-vector">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Vector Maps</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="advanced/maps-google.html" data-slug="advanced-maps-google">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Google Maps</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="structure">
                <i class="site-menu-icon wb-plugin" aria-hidden="true"></i>
                <span class="site-menu-title">Structure</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="structure/alerts.html" data-slug="structure-alerts">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Alerts</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="structure/blockquotes.html" data-slug="structure-blockquotes">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Blockquotes</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="structure/breadcrumbs.html" data-slug="structure-breadcrumbs">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Breadcrumbs</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="structure/cover.html" data-slug="structure-cover">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Cover</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="structure/overlay.html" data-slug="structure-overlay">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Overlay</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="structure/comments.html" data-slug="structure-comments">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Comments</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="structure/media.html" data-slug="structure-media">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Media</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="structure/nav.html" data-slug="structure-nav">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Nav</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="structure/navbars.html" data-slug="structure-navbars">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Navbars</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="structure/pagination.html" data-slug="structure-pagination">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Pagination</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="structure/pricing-tables.html" data-slug="structure-pricing-tables">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Pricing Tables</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="structure/testimonials.html" data-slug="structure-testimonials">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Testimonials</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="structure/ribbon.html" data-slug="structure-ribbon">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Ribbon</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="structure/step.html" data-slug="structure-step">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Step</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="structure/chat.html" data-slug="structure-chat">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Chat</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="structure/timeline.html" data-slug="structure-timeline">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Timeline</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="structure/timeline-simple.html" data-slug="structure-timeline-simple">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Simple Timeline</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="widgets">
                <i class="site-menu-icon wb-extension" aria-hidden="true"></i>
                <span class="site-menu-title">Widgets</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="widgets/blog.html" data-slug="widgets-blog">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Blog Widgets</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="widgets/data.html" data-slug="widgets-data">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Data Widgets</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="widgets/chart.html" data-slug="widgets-chart">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Chart Widgets</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="widgets/social.html" data-slug="widgets-social">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Social Widgets</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="widgets/statistics.html" data-slug="widgets-statistics">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Statistics Widgets</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="widgets/weather.html" data-slug="widgets-weather">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Weather Widgets</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="forms">
                <i class="site-menu-icon wb-library" aria-hidden="true"></i>
                <span class="site-menu-title">Forms</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="forms/general.html" data-slug="forms-general">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">General Elements</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="forms/material.html" data-slug="forms-material">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Material Elements</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="forms/advanced.html" data-slug="forms-advanced">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Advanced Elements</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="forms/layouts.html" data-slug="forms-layouts">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Form Layouts</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="forms/wizard.html" data-slug="forms-wizard">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Form Wizard</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="forms/validation.html" data-slug="forms-validation">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Form Validation</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="forms/masks.html" data-slug="forms-masks">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Form Masks</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="forms/editable.html" data-slug="forms-editable">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Form Editable</span>
                  </a>
                </li>
                <li class="site-menu-item has-sub">
                  <a href="javascript:void(0)" data-slug="forms-editor">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Editors</span>
                    <span class="site-menu-arrow"></span>
                  </a>
                  <ul class="site-menu-sub">
                    <li class="site-menu-item">
                      <a class="animsition-link" href="forms/editor-summernote.html" data-slug="forms-editor-summernote">
                        <i class="site-menu-icon " aria-hidden="true"></i>
                        <span class="site-menu-title">Summernote</span>
                      </a>
                    </li>                    
                  </ul>
                </li>              
              </ul>
            </li>
          </ul>

          <div class="site-menubar-section">
            <h5>
              Milestone
              <span class="pull-right">30%</span>
            </h5>
            <div class="progress progress-xs">
              <div class="progress-bar active" style="width: 30%;" role="progressbar"></div>
            </div>
            <h5>
              Release
              <span class="pull-right">60%</span>
            </h5>
            <div class="progress progress-xs">
              <div class="progress-bar progress-bar-warning" style="width: 60%;" role="progressbar"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-menubar-footer">
      <a href="javascript: void(0);" class="fold-show" data-placement="top" data-toggle="tooltip"
      data-original-title="Settings">
        <span class="icon wb-settings" aria-hidden="true"></span>
      </a>
      <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock">
        <span class="icon wb-eye-close" aria-hidden="true"></span>
      </a>
      <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
        <span class="icon wb-power" aria-hidden="true"></span>
      </a>
    </div>
  </div>
  <div class="site-gridmenu">
    <ul>
      <li>
        <a href="apps/mailbox/mailbox.html">
          <i class="icon wb-envelope"></i>
          <span>Mailbox</span>
        </a>
      </li>
      <li>
        <a href="apps/calendar/calendar.html">
          <i class="icon wb-calendar"></i>
          <span>Calendar</span>
        </a>
      </li>
      <li>
        <a href="apps/contacts/contacts.html">
          <i class="icon wb-user"></i>
          <span>Contacts</span>
        </a>
      </li>
      <li>
        <a href="apps/media/overview.html">
          <i class="icon wb-camera"></i>
          <span>Media</span>
        </a>
      </li>
      <li>
        <a href="apps/documents/categories.html">
          <i class="icon wb-order"></i>
          <span>Documents</span>
        </a>
      </li>
      <li>
        <a href="apps/projects/projects.html">
          <i class="icon wb-image"></i>
          <span>Project</span>
        </a>
      </li>
      <li>
        <a href="apps/forum/forum.html">
          <i class="icon wb-chat-group"></i>
          <span>Forum</span>
        </a>
      </li>
      <li>
        <a href="index.html">
          <i class="icon wb-dashboard"></i>
          <span>Dashboard</span>
        </a>
      </li>
    </ul>
  </div>


  <!-- Page -->
  @yield('content')  
  <!-- End Page -->


  <!-- Footer -->
  <footer class="site-footer">
    <span class="site-footer-legal">© 2015 Remark</span>
    <div class="site-footer-right">
      Crafted with <i class="red-600 wb wb-heart"></i> by <a href="http://themeforest.net/user/amazingSurge">amazingSurge</a>
    </div>
  </footer>

  <!-- Core  -->
  <script src="{{ asset('assets/vendor/jquery/jquery.js')}}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/bootstrap.js')}}"></script>
  <script src="{{ asset('assets/vendor/animsition/jquery.animsition.js')}}"></script>
  <script src="{{ asset('assets/vendor/asscroll/jquery-asScroll.js')}}"></script>
  <script src="{{ asset('assets/vendor/mousewheel/jquery.mousewheel.js')}}"></script>
  <script src="{{ asset('assets/vendor/asscrollable/jquery.asScrollable.all.js')}}"></script>
  <script src="{{ asset('assets/vendor/ashoverscroll/jquery-asHoverScroll.js')}}"></script>

  <!-- Plugins -->
  <script src="{{ asset('assets/vendor/switchery/switchery.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/intro-js/intro.js')}}"></script>
  <script src="{{ asset('assets/vendor/screenfull/screenfull.js')}}"></script>
  <script src="{{ asset('assets/vendor/slidepanel/jquery-slidePanel.js')}}"></script>

  <script src="{{ asset('assets/vendor/skycons/skycons.js')}}"></script>
  <script src="{{ asset('assets/vendor/chartist-js/chartist.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/aspieprogress/jquery-asPieProgress.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/jvectormap/jquery-jvectormap.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/jvectormap/maps/jquery-jvectormap-ca-lcc-en.js')}}"></script>
  <script src="{{ asset('assets/vendor/matchheight/jquery.matchHeight-min.js')}}"></script>

  <!-- Scripts -->
  <script src="{{ asset('assets/js/core.js')}}"></script>
  <script src="{{ asset('assets/js/site.js')}}"></script>

  <script src="{{ asset('assets/js/sections/menu.js')}}"></script>
  <script src="{{ asset('assets/js/sections/menubar.js')}}"></script>
  <script src="{{ asset('assets/js/sections/sidebar.js')}}"></script>

  <script src="{{ asset('assets/js/configs/config-colors.js')}}"></script>
  <script src="{{ asset('assets/js/configs/config-tour.js')}}"></script>

  <script src="{{ asset('assets/js/components/asscrollable.js')}}"></script>
  <script src="{{ asset('assets/js/components/animsition.js')}}"></script>
  <script src="{{ asset('assets/js/components/slidepanel.js')}}"></script>
  <script src="{{ asset('assets/js/components/switchery.js')}}"></script>
  <script src="{{ asset('assets/js/components/matchheight.js')}}"></script>
  <script src="{{ asset('assets/js/components/jvectormap.js')}}"></script>

  <script>
    $(document).ready(function($) {
      Site.run();

      (function() {
        var snow = new Skycons({
          "color": $.colors("blue-grey", 500)
        });
        snow.set(document.getElementById("widgetSnow"), "snow");
        snow.play();

        var sunny = new Skycons({
          "color": $.colors("blue-grey", 700)
        });
        sunny.set(document.getElementById("widgetSunny"), "clear-day");
        sunny.play();
      })();

      (function() {
        var lineareaColor = new Chartist.Line(
          '#widgetLineareaColor .ct-chart', {
            labels: ['SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT'],
            series: [
              [4, 4.5, 4.3, 4, 5, 6, 5.5],
              [3, 2.5, 3, 3.5, 4.2, 4, 5],
              [1, 2, 2.5, 2, 3, 2.8, 4]
            ]
          }, {
            low: 0,
            showArea: true,
            showPoint: false,
            showLine: false,
            fullWidth: true,
            chartPadding: {
              top: 0,
              right: 0,
              bottom: 0,
              left: 0
            },
            axisX: {
              showLabel: false,
              showGrid: false,
              offset: 0
            },
            axisY: {
              showLabel: false,
              showGrid: false,
              offset: 0
            }
          });
      })();

      (function() {
        var stacked_bar = new Chartist.Bar(
          '#widgetStackedBar .ct-chart', {
            labels: ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J',
              'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U',
              'V', 'W', 'X', 'Y', 'Z'
            ],
            series: [
              [50, 90, 100, 90, 110, 100, 120, 130, 115, 95, 80, 85,
                100, 140, 130, 120, 135, 110, 120, 105, 100, 105,
                90, 110, 100, 60
              ],
              [150, 190, 200, 190, 210, 200, 220, 230, 215, 195,
                180, 185, 200, 240, 230, 220, 235, 210, 220, 205,
                200, 205, 190, 210, 200, 160
              ]
            ]
          }, {
            stackBars: true,
            fullWidth: true,
            seriesBarDistance: 0,
            chartPadding: {
              top: 0,
              right: 30,
              bottom: 30,
              left: 20
            },
            axisX: {
              showLabel: false,
              showGrid: false,
              offset: 0
            },
            axisY: {
              showLabel: false,
              showGrid: false,
              offset: 0
            }
          });
      })();

      // timeline
      // --------
      (function() {
        var timeline_labels = [];
        var timeline_data1 = [];
        var timeline_data2 = [];
        var totalPoints = 20;
        var updateInterval = 1000;
        var now = new Date().getTime();

        function GetData() {
          timeline_labels.shift();
          timeline_data1.shift();
          timeline_data2.shift();

          while (timeline_data1.length < totalPoints) {
            var x = Math.random() * 100 + 800;
            var y = Math.random() * 100 + 400;
            timeline_labels.push(now += updateInterval);
            timeline_data1.push(x);
            timeline_data2.push(y);
          }
        }

        var timlelineData = {
          labels: timeline_labels,
          series: [
            timeline_data1,
            timeline_data2
          ]
        };

        var timelineOptions = {
          low: 0,
          showArea: true,
          showPoint: false,
          showLine: false,
          fullWidth: true,
          chartPadding: {
            top: 0,
            right: 0,
            bottom: 0,
            left: 0
          },
          axisX: {
            showLabel: false,
            showGrid: false,
            offset: 0
          },
          axisY: {
            showLabel: false,
            showGrid: false,
            offset: 0
          }
        };
        new Chartist.Line("#widgetTimeline .ct-chart", timlelineData,
          timelineOptions);

        function update() {
          GetData();

          new Chartist.Line("#widgetTimeline .ct-chart", timlelineData,
            timelineOptions);
          setTimeout(update, updateInterval);
        }

        update();

      })();

      (function() {
        new Chartist.Line("#widgetLinepoint .ct-chart", {
          labels: ['1', '2', '3', '4', '5', '6'],
          series: [
            [1, 1.5, 0.5, 2, 2.5, 1.5]
          ]
        }, {
          low: 0,
          showArea: false,
          showPoint: true,
          showLine: true,
          fullWidth: true,
          lineSmooth: false,
          chartPadding: {
            top: -10,
            right: -4,
            bottom: 10,
            left: -4
          },
          axisX: {
            showLabel: false,
            showGrid: false,
            offset: 0
          },
          axisY: {
            showLabel: false,
            showGrid: false,
            offset: 0
          }
        });
      })();

      (function() {
        new Chartist.Bar("#widgetSaleBar .ct-chart", {
          labels: ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'K',
            'L', 'M', 'N', 'O', 'P', 'Q'
          ],
          series: [
            [50, 90, 100, 90, 110, 100, 120, 130, 115, 95, 80, 85,
              100, 140, 130, 120
            ]
          ]
        }, {
          low: 0,
          fullWidth: true,
          chartPadding: {
            top: -10,
            right: 20,
            bottom: 30,
            left: 20
          },
          axisX: {
            showLabel: false,
            showGrid: false,
            offset: 0
          },
          axisY: {
            showLabel: false,
            showGrid: false,
            offset: 0
          }
        });
      })();

      (function() {
        new Chartist.Bar("#widgetWatchList .small-bar-one", {
          labels: ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'],
          series: [
            [50, 90, 100, 90, 110, 100, 120, 130]
          ]
        }, {
          low: 0,
          fullWidth: true,
          chartPadding: {
            top: -10,
            right: 0,
            bottom: 0,
            left: 20
          },
          axisX: {
            showLabel: false,
            showGrid: false,
            offset: 0
          },
          axisY: {
            showLabel: false,
            showGrid: false,
            offset: 0
          }
        });

        new Chartist.Bar("#widgetWatchList .small-bar-two", {
          labels: ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'],
          series: [
            [50, 90, 100, 90, 110, 100, 120, 120]
          ]
        }, {
          low: 0,
          fullWidth: true,
          chartPadding: {
            top: -10,
            right: 0,
            bottom: 0,
            left: 20
          },
          axisX: {
            showLabel: false,
            showGrid: false,
            offset: 0
          },
          axisY: {
            showLabel: false,
            showGrid: false,
            offset: 0
          }
        });

        new Chartist.Line("#widgetWatchList .line-chart", {
          labels: ['SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT'],
          series: [
            [20, 50, 70, 110, 100, 200, 230],
            [50, 80, 140, 130, 150, 110, 160]
          ]
        }, {
          low: 0,
          showArea: false,
          showPoint: false,
          showLine: true,
          lineSmooth: false,
          fullWidth: true,
          chartPadding: {
            top: 0,
            right: 10,
            bottom: 0,
            left: 10
          },
          axisX: {
            showLabel: true,
            showGrid: false,
            offset: 30
          },
          axisY: {
            showLabel: true,
            showGrid: true,
            offset: 30
          }
        });
      })();

      (function() {
        new Chartist.Line("#widgetLinepointDate .ct-chart", {
          labels: ['1', '2', '3', '4', '5', '6'],
          series: [
            [1, 1.5, 0.5, 2, 2.5, 1.5]
          ]
        }, {
          low: 0,
          showArea: false,
          showPoint: true,
          showLine: true,
          fullWidth: true,
          lineSmooth: false,
          chartPadding: {
            top: 0,
            right: -4,
            bottom: 10,
            left: -4
          },
          axisX: {
            showLabel: false,
            showGrid: false,
            offset: 0
          },
          axisY: {
            showLabel: false,
            showGrid: false,
            offset: 0
          }
        });

      })();

    });
  </script>

</body>

</html>