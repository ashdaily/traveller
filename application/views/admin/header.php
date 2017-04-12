<!DOCTYPE html> <html lang="en"> 
    <!-- Mirrored from demo.neontheme.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Mar 2017 19:29:03 GMT -->
    <!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
    <head> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="Neon Admin Panel" />
        <meta name="author" content="Laborator.co" />
        <link rel="icon" href="<?= base_url() ?>assets/images/favicon.ico">
        <title>Admin FunTravel</title>
        <link rel="stylesheet" href="<?= base_url() ?>assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css" id="style-resource-1">
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/font-icons/entypo/css/entypo.css" id="style-resource-2">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic" id="style-resource-3">
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.css" id="style-resource-4">
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/neon-core.css" id="style-resource-5">
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/neon-theme.css" id="style-resource-6">
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/neon-forms.css" id="style-resource-7">
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/custom.css" id="style-resource-8">
        <script src="<?= base_url() ?>assets/js/jquery-1.11.3.min.js"></script>
        <!--[if lt IE 9]><script src="http://demo.neontheme.com/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- TS1490124543: Neon - Responsive Admin Template created by Laborator -->
    </head>
    <body class="page-body page-fade" data-url="http://demo.neontheme.com">
        <!-- TS149012454319631: Xenon - Boostrap Admin Template created by Laborator / Please buy this theme and support the updates -->
        <div class="page-container">
            <!-- TS149012454319397: Xenon - Boostrap Admin Template created by Laborator / Please buy this theme and support the updates -->
            <div class="sidebar-menu">
                <div class="sidebar-menu-inner">
                    <header class="logo-env">
                        <!-- logo -->
                        <div class="logo">
                            <a href="#">
                               <h3 style="color:#fff;">FUN TRAVEL</h3>
                            </a>
                        </div>
                        <!-- logo collapse icon -->
                        <div class="sidebar-collapse">
                            <a href="#" class="sidebar-collapse-icon">
                                <!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                                <i class="entypo-menu"></i>
                            </a>
                        </div>
                        <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
                        <div class="sidebar-mobile-menu visible-xs">
                            <a href="#" class="with-animation">
                                <!-- add class "with-animation" to support animation -->
                                <i class="entypo-menu"></i>
                            </a>
                        </div>
                    </header>
                    <ul id="main-menu" class="main-menu">
                        <li class="<?php if($active == 'dashboard'){echo 'active';} ?>" >
                            <a href="<?= base_url('admin') ?>"><i class="entypo-gauge"></i><span class="title">Dashboard</span></a>
                        </li>
                        <li class="<?php if($active == 'package'){echo 'active';} ?>">
                            <a href="<?= base_url('admin/package') ?>"><i class="entypo-monitor"></i><span class="title">Manage Package</span></a>
                        </li>
                        <li class="<?php if($active == 'foreignExchange'){echo 'active';} ?> has-sub">
                            <a href="<?= base_url('admin/foreignExchange') ?>"><i class="entypo-monitor"></i><span class="title">Foreign Exchange Rates</span></a> 
                            <ul>
                                <li class="<?php if($active == 'foreignExchange'){echo 'active';} ?>">
                                    <a href="<?php echo base_url();?>admin/foreignExchange"><span class="title">Rates, Sell & Buy Profits</span></a>
                                </li>
                                <li class="<?php if($active == 'foreignExchangeOrders'){echo 'active';} ?>">
                                    <a href="<?php echo base_url();?>admin/foreignExchangeOrders"><span class="title">Orders</span></a>
                                </li>
                            </ul>
                        </li>
                         
<!--                        <li class="has-sub">
                            <a href="layouts/layout-api/index.html"><i class="entypo-layout"></i><span class="title">Layouts</span></a>
                            <ul>
                                <li>
                                    <a href="layouts/layout-api/index.html"><span class="title">Layout API</span></a>
                                </li>
                                <li>
                                    <a href="layouts/collapsed-sidebar/index.html"><span class="title">Collapsed Sidebar</span></a>
                                </li>
                                <li>
                                    <a href="layouts/fixed-sidebar/index.html"><span class="title">Fixed Sidebar</span></a>
                                </li>
                                <li>
                                    <a href="layouts/chat-open/index.html"><span class="title">Chat Open</span></a>
                                </li>
                                <li>
                                    <a href="layouts/horizontal-menu-boxed/index.html"><span class="title">Horizontal Menu Boxed</span></a>
                                </li>
                                <li>
                                    <a href="layouts/horizontal-menu-fluid/index.html"><span class="title">Horizontal Menu Fluid</span></a>
                                </li>
                                <li>
                                    <a href="layouts/mixed-menus/index.html"><span class="title">Mixed Menus</span></a>
                                </li>
                                <li>
                                    <a href="layouts/right-sidebar/index.html"><span class="title">Right Sidebar</span></a>
                                </li>
                                <li>
                                    <a href="layouts/both-menus-right-sidebar/index.html"><span class="title">Both Menus (Right Sidebar)</span></a>
                                </li>
                                <li class="has-sub">
                                    <a href="layouts/page-transition-fade/index.html"><span class="title">Page Enter Transitions</span></a>
                                    <ul>
                                        <li>
                                            <a href="layouts/page-transition-fade/index.html"><span class="title">Fade Scale</span></a>
                                        </li>
                                        <li>
                                            <a href="layouts/page-transition-left-in/index.html"><span class="title">Left In</span></a>
                                        </li>
                                        <li>
                                            <a href="layouts/page-transition-right-in/index.html"><span class="title">Right In</span></a>
                                        </li>
                                        <li>
                                            <a href="layouts/page-transition-fade-only/index.html"><span class="title">Fade Only</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="layouts/boxed/index.html"><span class="title">Boxed Layout</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="frontend/main/index.html" target="_blank"><i class="entypo-monitor"></i><span class="title">Frontend</span></a>
                        </li>
                        <li class="has-sub">
                            <a href="ui/panels/index.html"><i class="entypo-newspaper"></i><span class="title">UI Elements</span></a>
                            <ul>
                                <li>
                                    <a href="ui/panels/index.html"><span class="title">Panels</span></a>
                                </li>
                                <li>
                                    <a href="ui/tiles/index.html"><span class="title">Tiles</span></a>
                                </li>
                                <li>
                                    <a href="forms/buttons/index.html"><span class="title">Buttons</span></a>
                                </li>
                                <li>
                                    <a href="ui/typography/index.html"><span class="title">Typography</span></a>
                                </li>
                                <li>
                                    <a href="ui/tabs-accordions/index.html"><span class="title">Tabs &amp; Accordions</span></a>
                                </li>
                                <li>
                                    <a href="ui/tooltips-popovers/index.html"><span class="title">Tooltips &amp; Popovers</span></a>
                                </li>
                                <li>
                                    <a href="ui/navbars/index.html"><span class="title">Navbars</span></a>
                                </li>
                                <li>
                                    <a href="ui/breadcrumbs/index.html"><span class="title">Breadcrumbs</span></a>
                                </li>
                                <li>
                                    <a href="ui/badges-label/s.html"><span class="title">Badges &amp; Labels</span></a>
                                </li>
                                <li>
                                    <a href="ui/progress-bars/index.html"><span class="title">Progress Bars</span></a>
                                </li>
                                <li>
                                    <a href="ui/modals/index.html"><span class="title">Modals</span></a>
                                </li>
                                <li>
                                    <a href="ui/blockquotes/index.html"><span class="title">Blockquotes</span></a>
                                </li>
                                <li>
                                    <a href="ui/alerts/index.html"><span class="title">Alerts</span></a>
                                </li>
                                <li>
                                    <a href="ui/pagination/index.html"><span class="title">Pagination</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a href="mailbox/main/index.html"><i class="entypo-mail"></i><span class="title">Mailbox</span><span class="badge badge-secondary">8</span></a>
                            <ul>
                                <li>
                                    <a href="mailbox/main/index.html"><i class="entypo-inbox"></i><span class="title">Inbox</span></a>
                                </li>
                                <li>
                                    <a href="mailbox/compose/index.html"><i class="entypo-pencil"></i><span class="title">Compose Message</span></a>
                                </li>
                                <li>
                                    <a href="mailbox/message/index.html"><i class="entypo-attach"></i><span class="title">View Message</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a href="forms/main/index.html"><i class="entypo-doc-text"></i><span class="title">Forms</span></a>
                            <ul>
                                <li>
                                    <a href="forms/main/index.html"><span class="title">Basic Elements</span></a>
                                </li>
                                <li>
                                    <a href="forms/advanced/index.html"><span class="title">Advanced Plugins</span></a>
                                </li>
                                <li>
                                    <a href="forms/wizard/index.html"><span class="title">Form Wizard</span></a>
                                </li>
                                <li>
                                    <a href="forms/validation/index.html"><span class="title">Data Validation</span></a>
                                </li>
                                <li>
                                    <a href="forms/masks/index.html"><span class="title">Input Masks</span></a>
                                </li>
                                <li>
                                    <a href="forms/sliders/index.html"><span class="title">Sliders</span></a>
                                </li>
                                <li>
                                    <a href="forms/file-upload/index.html"><span class="title">File Upload</span></a>
                                </li>
                                <li>
                                    <a href="forms/wysiwyg/index.html"><span class="title">Editors</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a href="tables/main/index.html"><i class="entypo-window"></i><span class="title">Tables</span></a>
                            <ul>
                                <li>
                                    <a href="tables/main/index.html"><span class="title">Basic Tables</span></a>
                                </li>
                                <li>
                                    <a href="tables/datatable/index.html"><span class="title">Data Tables</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a href="extra/icons/index.html"><i class="entypo-bag"></i><span class="title">Extra</span><span class="badge badge-info badge-roundless">New Items</span></a>
                            <ul>
                                <li class="has-sub">
                                    <a href="extra/icons/index.html"><span class="title">Icons</span><span class="badge badge-success">3</span></a>
                                    <ul>
                                        <li>
                                            <a href="extra/icons-fontawesome/index.html"><span class="title">Font Awesome</span></a>
                                        </li>
                                        <li>
                                            <a href="extra/icons-entypo/index.html"><span class="title">Entypo</span></a>
                                        </li>
                                        <li>
                                            <a href="extra/icons-glyphicons/index.html"><span class="title">Glyph Icons</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="extra/portlets/index.html"><span class="title">Portlets</span></a>
                                </li>
                                <li class="has-sub">
                                    <a href="extra/google-maps/index.html"><span class="title">Maps</span></a>
                                    <ul>
                                        <li>
                                            <a href="extra/google-maps/index.html"><span class="title">Google Maps</span></a>
                                        </li>
                                        <li>
                                            <a href="extra/vector-maps/index.html"><span class="title">Vector Maps</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="extra/chat-api/index.html"><span class="title">Chat API</span></a>
                                </li>
                                <li>
                                    <a href="extra/calendar/index.html"><span class="title">Calendar</span></a>
                                </li>
                                <li>
                                    <a href="extra/calendar-2/index.html"><span class="title">Calendar 2</span><span class="badge badge-secondary badge-roundless">New</span></a>
                                </li>
                                <li>
                                    <a href="extra/notes/index.html"><span class="title">Notes</span></a>
                                </li>
                                <li>
                                    <a href="extra/lockscreen/index.html"><span class="title">Lockscreen</span></a>
                                </li>
                                <li>
                                    <a href="extra/login/index.html"><span class="title">Login</span></a>
                                </li>
                                <li>
                                    <a href="extra/register/index.html"><span class="title">Register</span></a>
                                </li>
                                <li>
                                    <a href="extra/invoice/index.html"><span class="title">Invoice</span></a>
                                </li>
                                <li class="has-sub">
                                    <a href="extra/gallery/index.html"><span class="title">Gallery</span></a>
                                    <ul>
                                        <li>
                                            <a href="extra/gallery/index.html"><span class="title">Albums</span></a>
                                        </li>
                                        <li>
                                            <a href="extra/gallery-single/index.html"><span class="title">Single Album</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="extra/members/index.html"><span class="title">Members</span></a>
                                </li>
                                <li>
                                    <a href="extra/profile/index.html"><span class="title">Profile</span></a>
                                </li>
                                <li>
                                    <a href="extra/404/index.html"><span class="title">404 Page</span></a>
                                </li>
                                <li>
                                    <a href="extra/blank-page/index.html"><span class="title">Blank Page</span></a>
                                </li>
                                <li>
                                    <a href="extra/timeline/index.html"><span class="title">Timeline</span></a>
                                </li>
                                <li>
                                    <a href="extra/comments/index.html"><span class="title">Comments</span></a>
                                </li>
                                <li>
                                    <a href="extra/timeline-centered/index.html"><span class="title">Timeline Centered</span></a>
                                </li>
                                <li>
                                    <a href="extra/tocify/index.html"><span class="title">Tocify</span></a>
                                </li>
                                <li>
                                    <a href="ui/notifications/index.html"><span class="title">Notifications</span></a>
                                </li>
                                <li>
                                    <a href="extra/new-post/index.html"><span class="title">New Post</span></a>
                                </li>
                                <li>
                                    <a href="extra/settings/index.html"><span class="title">Settings</span></a>
                                </li>
                                <li>
                                    <a href="extra/scrollbox/index.html"><span class="title">Scrollbox</span></a>
                                </li>
                                <li>
                                    <a href="extra/image-crop/index.html"><span class="title">Image Crop</span></a>
                                </li>
                                <li>
                                    <a href="extra/search/index.html"><span class="title">Search Page</span></a>
                                </li>
                                <li>
                                    <a href="extra/language-selector/index.html"><span class="title">Language Selector</span></a>
                                </li>
                                <li>
                                    <a href="extra/nestable/index.html"><span class="title">Nestable Lists</span></a>
                                </li>
                                <li>
                                    <a href="extra/file-tree/index.html"><span class="title">File Tree</span></a>
                                </li>
                                <li>
                                    <a href="extra/load-progress/index.html"><span class="title">Load Progress</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="extra/charts/index.html"><i class="entypo-chart-bar"></i><span class="title">Charts</span></a>
                        </li>
                        <li class="has-sub">
                            <a href="index.html#"><i class="entypo-flow-tree"></i><span class="title">Menu Levels</span></a>
                            <ul>
                                <li>
                                    <a href="index.html#"><i class="entypo-flow-line"></i><span class="title">Menu Level 1.1</span></a>
                                </li>
                                <li>
                                    <a href="index.html#"><i class="entypo-flow-line"></i><span class="title">Menu Level 1.2</span></a>
                                </li>
                                <li class="has-sub">
                                    <a href="index.html#"><i class="entypo-flow-line"></i><span class="title">Menu Level 1.3</span></a>
                                    <ul>
                                        <li>
                                            <a href="index.html#"><i class="entypo-flow-parallel"></i><span class="title">Menu Level 2.1</span></a>
                                        </li>
                                        <li class="has-sub">
                                            <a href="index.html#"><i class="entypo-flow-parallel"></i><span class="title">Menu Level 2.2</span></a>
                                            <ul>
                                                <li class="has-sub">
                                                    <a href="index.html#"><i class="entypo-flow-cascade"></i><span class="title">Menu Level 3.1</span></a>
                                                    <ul>
                                                        <li>
                                                            <a href="index.html#"><i class="entypo-flow-branch"></i><span class="title">Menu Level 4.1</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="index.html#"><i class="entypo-flow-cascade"></i><span class="title">Menu Level 3.2</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="index.html#"><i class="entypo-flow-parallel"></i><span class="title">Menu Level 2.3</span></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>-->
                    </ul>
                </div>
            </div>
            <div class="main-content">
                <!-- TS149012454311757: Xenon - Boostrap Admin Template created by Laborator / Please buy this theme and support the updates -->
                <div class="row">
                    <!-- Profile Info and Notifications -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <ul class="user-info pull-left pull-none-xsm">
                            <!-- Profile Info -->
                            <li class="profile-info dropdown">
                                <!-- add class "pull-right" if you want to place this from right -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?= base_url() ?>assets/images/thumb-1%402x.png" alt="" class="img-circle" width="44" />
                                    Jerry
                                </a>
                               <!--  <ul class="dropdown-menu">
                                     
                                    <li class="caret"></li>
                                    
                                    <li>
                                        <a href="extra/timeline/index.html">
                                            <i class="entypo-user"></i>
                                            Edit Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="mailbox/main/index.html">
                                            <i class="entypo-mail"></i>
                                            Inbox
                                        </a>
                                    </li>
                                    <li>
                                        <a href="extra/calendar/index.html">
                                            <i class="entypo-calendar"></i>
                                            Calendar
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="entypo-clipboard"></i>
                                            Tasks
                                        </a>
                                    </li>
                                </ul> -->
                            </li>
                        </ul>
                       
                    </div>
                    <!-- Raw Links -->
                    <div class="col-md-6 col-sm-4 clearfix hidden-xs">
                        <ul class="list-inline links-list pull-right">
                             
                           
                            <li class="sep"></li>
                            <li>
                                <a href="<?= base_url('admin/logout') ?>">
                                    Log Out
                                    <i class="entypo-logout right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr />


