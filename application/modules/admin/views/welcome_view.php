<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html class="ie gt-ie8"> <![endif]-->
<!--[if !IE]><!--><html><!-- <![endif]-->
<head>
    <title>AdminKIT - Premium Admin Template (v1.3)</title>

    <!-- Meta -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />

    <!-- Bootstrap -->
    <link href="<?=base_url();?>publics/admin/bootstrap/css/bootstrap.css" rel="stylesheet" />
    <link href="<?=base_url();?>publics/admin/bootstrap/css/responsive.css" rel="stylesheet" />

    <!-- Glyphicons Font Icons -->
    <link href="<?=base_url();?>publics/admin/theme/css/glyphicons.css" rel="stylesheet" />

    <!-- Uniform Pretty Checkboxes -->
    <link href="<?=base_url();?>publics/admin/theme/scripts/plugins/forms/pixelmatrix-uniform/css/uniform.default.css" rel="stylesheet" />

    <!--[if IE]><!--><script src="<?=base_url();?>publics/admin/theme/scripts/plugins/other/excanvas/excanvas.js"></script><!--<![endif]-->
    <!--[if lt IE 8]><script src="<?=base_url();?>publics/admin/theme/scripts/plugins/other/json2.js"></script><![endif]-->

    <!-- Bootstrap Extended -->
    <link href="<?=base_url();?>publics/admin/bootstrap/extend/jasny-bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url();?>publics/admin/bootstrap/extend/jasny-bootstrap/css/jasny-bootstrap-responsive.min.css" rel="stylesheet">
    <link href="<?=base_url();?>publics/admin/bootstrap/extend/bootstrap-wysihtml5/css/bootstrap-wysihtml5-0.0.2.css" rel="stylesheet">
    <link href="<?=base_url();?>publics/admin/bootstrap/extend/bootstrap-select/bootstrap-select.css" rel="stylesheet" />
    <link href="<?=base_url();?>publics/admin/bootstrap/extend/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" rel="stylesheet" />

    <!-- Select2 Plugin -->
    <link href="<?=base_url();?>publics/admin/theme/scripts/plugins/forms/select2/select2.css" rel="stylesheet" />

    <!-- DateTimePicker Plugin -->
    <link href="<?=base_url();?>publics/admin/theme/scripts/plugins/forms/bootstrap-datetimepicker/css/datetimepicker.css" rel="stylesheet" />

    <!-- JQueryUI -->
    <link href="<?=base_url();?>publics/admin/theme/scripts/plugins/system/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" />

    <!-- MiniColors ColorPicker Plugin -->
    <link href="<?=base_url();?>publics/admin/theme/scripts/plugins/color/jquery-miniColors/jquery.miniColors.css" rel="stylesheet" />

    <!-- Notyfy Notifications Plugin -->
    <link href="<?=base_url();?>publics/admin/theme/scripts/plugins/notifications/notyfy/jquery.notyfy.css" rel="stylesheet" />
    <link href="<?=base_url();?>publics/admin/theme/scripts/plugins/notifications/notyfy/themes/default.css" rel="stylesheet" />

    <!-- Gritter Notifications Plugin -->
    <link href="<?=base_url();?>publics/admin/theme/scripts/plugins/notifications/Gritter/css/jquery.gritter.css" rel="stylesheet" />

    <!-- Easy-pie Plugin -->
    <link href="<?=base_url();?>publics/admin/theme/scripts/plugins/charts/easy-pie/jquery.easy-pie-chart.css" rel="stylesheet" />

    <!-- Google Code Prettify Plugin -->
    <link href="<?=base_url();?>publics/admin/theme/scripts/plugins/other/google-code-prettify/prettify.css" rel="stylesheet" />

    <!-- Pageguide Guided Tour Plugin -->
    <!--[if gt IE 8]><!--><link media="screen" href="<?=base_url();?>publics/admin/theme/scripts/plugins/other/pageguide/css/pageguide.css" rel="stylesheet" /><!--<![endif]-->

    <!-- Bootstrap Image Gallery -->
    <link href="<?=base_url();?>publics/admin/bootstrap/extend/bootstrap-image-gallery/css/bootstrap-image-gallery.min.css" rel="stylesheet" />

    <!-- Main Theme Stylesheet :: CSS -->
    <link href="<?=base_url();?>publics/admin/theme/css/style.min.css?1365754760" rel="stylesheet" />


    <!-- Google Analytics -->
    <script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-36057737-1']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>

    <!-- LESS.js Library -->
    <script src="<?=base_url();?>publics/admin/theme/scripts/plugins/system/less.min.js"></script>
</head>
<body class="">

<!-- Main Container Fluid -->
<div class="container-fluid fluid menu-left">

<!-- Top navbar -->
<div class="navbar main hidden-print">

    <!-- Brand -->
    <a href="index.html?lang=en" class="appbrand"><span>Lovemetrip <span>vBeta</span></span></a>

    <!-- Menu Toggle Button -->
    <button type="button" class="btn btn-navbar">
        <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
    </button>
    <!-- // Menu Toggle Button END -->

    <!-- Top Menu -->
    <ul class="topnav pull-left tn1">

        <!-- Themer -->
        <li class="hidden-phone">
            <a href="#themer" data-toggle="collapse" class="glyphicons eyedropper"><i></i><span>Themer</span></a>
            <div id="themer" class="collapse">
                <div class="wrapper">
                    <span class="close2">&times; close</span>
                    <h4>Themer <span>color options</span></h4>
                    <ul>
                        <li>Theme: <select id="themer-theme" class="pull-right"></select><div class="clearfix"></div></li>
                        <li>Primary Color: <input type="text" data-type="minicolors" data-default="#ffffff" data-slider="hue" data-textfield="false" data-position="left" id="themer-primary-cp" /><div class="clearfix"></div></li>
                        <li>
                            <span class="link" id="themer-custom-reset">reset theme</span>
                            <span class="pull-right"><label>advanced <input type="checkbox" value="1" id="themer-advanced-toggle" /></label></span>
                        </li>
                    </ul>
                    <div id="themer-getcode" class="hide">
                        <hr class="separator" />
                        <button class="btn btn-primary btn-small pull-right btn-icon glyphicons download" id="themer-getcode-less"><i></i>Get LESS</button>
                        <button class="btn btn-inverse btn-small pull-right btn-icon glyphicons download" id="themer-getcode-css"><i></i>Get CSS</button>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </li>
        <!-- // Themer END -->

    </ul>
    <!-- // Top Menu END -->

    <!-- Top Menu Right -->
    <ul class="topnav pull-right">

        <!-- Language menu -->
        <li class="hidden-phone" id="lang_nav">
            <a href="#" data-toggle="dropdown"><img src="<?=base_url();?>publics/admin/theme/images/lang/en.png" alt="en" /></a>
            <ul class="dropdown-menu pull-left">
                <li class="active"><a href="?page=index&amp;lang=en" title="English"><img src="<?=base_url();?>publics/admin/theme/images/lang/en.png" alt="English"> English</a></li>
                <li><a href="?page=index&amp;lang=ro" title="Romanian"><img src="<?=base_url();?>publics/admin/theme/images/lang/ro.png" alt="Romanian"> Romanian</a></li>
                <li><a href="?page=index&amp;lang=it" title="Italian"><img src="<?=base_url();?>publics/admin/theme/images/lang/it.png" alt="Italian"> Italian</a></li>
                <li><a href="?page=index&amp;lang=fr" title="French"><img src="<?=base_url();?>publics/admin/theme/images/lang/fr.png" alt="French"> French</a></li>
                <li><a href="?page=index&amp;lang=pl" title="Polish"><img src="<?=base_url();?>publics/admin/theme/images/lang/pl.png" alt="Polish"> Polish</a></li>
            </ul>
        </li>
        <!-- // Language menu END -->

        <!-- Dropdown -->
        <li class="dropdown visible-abc">
            <a href="" data-toggle="dropdown" class="glyphicons cogwheel"><i></i>Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu pull-right">

                <li class="dropdown submenu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Level 2</a>
                    <ul class="dropdown-menu submenu-show submenu-hide pull-left">
                        <li class="dropdown submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Level 2.1</a>
                            <ul class="dropdown-menu submenu-show submenu-hide pull-left">
                                <li><a href="#">Level 2.1.1</a></li>
                                <li><a href="#">Level 2.1.2</a></li>
                                <li><a href="#">Level 2.1.3</a></li>
                                <li><a href="#">Level 2.1.4</a></li>
                            </ul>
                        </li>
                        <li class="dropdown submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Level 2.2</a>
                            <ul class="dropdown-menu submenu-show submenu-hide pull-left">
                                <li><a href="#">Level 2.2.1</a></li>
                                <li><a href="#">Level 2.2.2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li><a href="">Some option</a></li>
                <li><a href="">Some other option</a></li>
                <li><a href="">Other option</a></li>

            </ul>
        </li>
        <!-- // Dropdown END -->

        <!-- Profile / Logout menu -->
        <li class="account">
            <a data-toggle="dropdown" href="my_account.html?lang=en" class="glyphicons logout lock"><span class="hidden-phone text">mosaicpro</span><i></i></a>
            <ul class="dropdown-menu pull-right">
                <li><a href="my_account.html?lang=en" class="glyphicons cogwheel">Settings<i></i></a></li>
                <li><a href="my_account.html?lang=en" class="glyphicons camera">My Photos<i></i></a></li>
                <li class="highlight profile">
							<span>
								<span class="heading">Profile <a href="my_account.html?lang=en" class="pull-right">edit</a></span>
								<span class="img"></span>
								<span class="details">
									<a href="my_account.html?lang=en">Mosaic Pro</a>
									contact@mosaicpro.biz
								</span>
								<span class="clearfix"></span>
							</span>
                </li>
                <li>
							<span>
								<a class="btn btn-default btn-mini pull-right" href="login.html?lang=en">Sign Out</a>
							</span>
                </li>
            </ul>
        </li>
        <!-- // Profile / Logout menu END -->

    </ul>
    <!-- // Top Menu Right END -->

</div>
<!-- Top navbar END -->

<!-- Sidebar menu & content wrapper -->
<div id="wrapper">

<!-- Sidebar Menu -->
<div id="menu" class="hidden-phone hidden-print">

<!-- Scrollable menu wrapper with Maximum height -->
<div class="slim-scroll" data-scroll-height="800px">

<!-- Sidebar Profile -->
			<span class="profile">
				<a class="img" href="my_account.html?lang=en"><img src="<?=base_url();?>publics/admin/theme/images/mrawesome.jpg" alt="Mr. Awesome" /></a>
				<span>
					<strong>Welcome</strong>
					<a href="my_account.html?lang=en" class="glyphicons right_arrow">mosaicpro <i></i></a>
				</span>
			</span>
<!-- // Sidebar Profile END -->

<!-- Sidebar Mini Stats -->
<!--
<div id="notif">
    <ul>
        <li><a href="" class="glyphicons envelope"><i></i> 5</a></li>
        <li><a href="" class="glyphicons shopping_cart"><i></i> 1</a></li>
        <li><a href="" class="glyphicons log_book"><i></i> 3</a></li>
        <li><a href="" class="glyphicons user_add"><i></i> 14</a></li>
    </ul>
</div>
-->
<!-- // Sidebar Mini Stats END -->

<!-- Regular Size Menu -->
<ul>


    <!-- Menu Regular Item -->
    <li class="glyphicons display active"><a href="<?=base_url();?>admin/dashboard"><i></i><span>Dashboard</span></a></li>

    <!-- Components Submenu Level 1 -->
    <li class="hasSubmenu glyphicons cogwheels">
        <a data-toggle="collapse" href="#users"><i></i><span>Users</span></a>
        <ul class="collapse" id="users">

            <!-- Components Submenu Regular Items -->
            <li class=""><a href="<?=base_url();?>admin/users"><span>List</span></a></li>
            <li class=""><a href="<?=base_url();?>admin/users"><span>Add</span></a></li>
            <li class=""><a href="<?=base_url();?>admin/users"><span>inActive</span></a></li>
            <li class=""><a href="<?=base_url();?>admin/users"><span>Active</span></a></li>
            <!-- // Components Submenu Regular Items END -->
        </ul>
    </li>
    <!-- Components Submenu Level 1 END -->

    <!-- Components Submenu Level 1 -->
    <li class="hasSubmenu glyphicons cogwheels">
        <a data-toggle="collapse" href="#users_web"><i></i><span>Users Web</span></a>
        <ul class="collapse" id="users_web">

            <!-- Components Submenu Regular Items -->
            <li class=""><a href="<?=base_url();?>admin/users"><span>List</span></a></li>
            <li class=""><a href="<?=base_url();?>admin/users"><span>Add</span></a></li>
            <li class=""><a href="<?=base_url();?>admin/users"><span>inActive</span></a></li>
            <li class=""><a href="<?=base_url();?>admin/users"><span>Active</span></a></li>
            <!-- // Components Submenu Regular Items END -->
        </ul>
    </li>
    <!-- Components Submenu Level 1 END -->

    <!-- Maps Submenu Level 1 -->
    <li class="hasSubmenu glyphicons google_maps">
        <a data-toggle="collapse" href="#localtion"><i></i><span>Location</span></a>
        <ul class="collapse" id="localtion">
            <li class=""><a href="<?=base_url();?>admin/location"><span>List</span></a></li>
            <li class=""><a href="<?=base_url();?>admin/location"><span>Add</span></a></li>
            <li class=""><a href="<?=base_url();?>admin/location"><span>New</span></a></li>
        </ul>
        <span class="count">2</span>
    </li>
    <!-- // Maps Submenu Level 1 END -->

    <!-- Maps Submenu Level 1 -->
    <li class="hasSubmenu glyphicons google_maps">
        <a data-toggle="collapse" href="#localtion_loc"><i></i><span>Location - Loc</span></a>
        <ul class="collapse" id="localtion_loc">
            <li class=""><a href="<?=base_url();?>admin/tip"><span>Tip</span></a></li>
            <li class=""><a href="<?=base_url();?>admin/comment"><span>Comment</span></a></li>
            <li class=""><a href="<?=base_url();?>admin/gallery"><span>Gallery</span></a></li>
        </ul>
        <span class="count">2</span>
    </li>
    <!-- // Maps Submenu Level 1 END -->

    <!-- Maps Submenu Level 1 -->
    <li class="hasSubmenu glyphicons google_maps">
        <a data-toggle="collapse" href="#destination"><i></i><span>Destination</span></a>
        <ul class="collapse" id="destination">
            <li class=""><a href="<?=base_url();?>admin/location"><span>List</span></a></li>
            <li class=""><a href="<?=base_url();?>admin/location"><span>Add</span></a></li>
            <li class=""><a href="<?=base_url();?>admin/location"><span>New</span></a></li>
        </ul>
        <span class="count">2</span>
    </li>
    <!-- // Maps Submenu Level 1 END -->

    <!-- Maps Submenu Level 1 -->
    <li class="hasSubmenu glyphicons google_maps">
        <a data-toggle="collapse" href="#address"><i></i><span>Address Setting</span></a>
        <ul class="collapse" id="address">
            <li class=""><a href="<?=base_url();?>admin/address/province"><span>Province</span></a></li>
            <li class=""><a href="<?=base_url();?>admin/address/district"><span>District</span></a></li>
        </ul>
        <span class="count">2</span>
    </li>
    <!-- // Maps Submenu Level 1 END -->

</ul>
<div class="clearfix"></div>
<div class="separator bottom"></div>
<!-- // Regular Size Menu END -->

</div>
<!-- // Scrollable Menu wrapper with Maximum Height END -->

</div>
<!-- // Sidebar Menu END -->

<!-- Content -->
<div id="content">
<!-- Filters -->
<div class="filter-bar dark margin-bottom-none border-none">
    <form>

        <!-- Search -->
        <div class="pull-left">
            <div class="input-append">
                <input type="text" name="from" class="input-mini" style="width: 100px;" placeholder="Quick search .." />
                <button type="submit" class="add-on glyphicons search"><i></i></button>
            </div>
        </div>
        <!-- // Search END -->

        <!-- Filters Visible on Desktop only -->
        <div class="helper visible-desktop pull-right">
            <div class="helper pull-right">

                <!-- From Filter -->
                <div class="pull-left">
                    <label>From:</label>
                    <div class="input-append">
                        <input type="text" name="from" id="dateRangeFrom" class="input-mini" value="08/05/13" style="width: 53px;" />
                        <span class="add-on glyphicons calendar"><i></i></span>
                    </div>
                </div>
                <!-- // From Filter END -->

                <!-- To Filter -->
                <div class="pull-left">
                    <label>To:</label>
                    <div class="input-append">
                        <input type="text" name="to" id="dateRangeTo" class="input-mini" value="08/18/13" style="width: 53px;" />
                        <span class="add-on glyphicons calendar"><i></i></span>
                    </div>
                </div>
                <!-- // To Filter END -->

            </div>
            <div class="clearfix"></div>
        </div>
        <!-- // Filters Visible on Desktop only END -->

    </form>
</div>
<!-- // Filters END -->

<h3 class="heading-mosaic">Overview</h3>

<!-- Row -->
<div class="row-fluid row-merge border-top">

<!-- Column -->
<div class="span7">

<!-- Spacing -->
<div class="innerAll">

<!-- Recent Activity -->
<div class="widget widget-4 widget-tabs-icons-only widget-timeline margin-bottom-none">


<div class="widget-body">
<div class="tab-content">


<!-- Filter Users Tab -->
<div class="tab-pane" id="filterUsersTab">
    <ul class="list-timeline">

        <!-- Activity item -->
        <li>
            <span class="date">21/03</span>
            <span class="glyphicons activity-icon user_add"><i></i></span>
            <span class="ellipsis"><a href="">Jane Doe</a> registered at <a href="">Darius Jackson's</a> suggestion.</span>
            <div class="clearfix"></div>
        </li>
        <!-- // Activity item END -->
        <!-- Activity item -->
        <li>
            <span class="date">21/03</span>
            <span class="glyphicons activity-icon user_add"><i></i></span>
            <span class="ellipsis"><a href="">Martin Glades</a> registered at <a href="">Darius Jackson's</a> suggestion.</span>
            <div class="clearfix"></div>
        </li>
        <!-- // Activity item END -->
        <!-- Activity item -->
        <li>
            <span class="date">21/03</span>
            <span class="glyphicons activity-icon user_add"><i></i></span>
            <span class="ellipsis"><a href="">John Doe</a> registered at <a href="">Melisa Ragae's</a> suggestion.</span>
            <div class="clearfix"></div>
        </li>
        <!-- // Activity item END -->
        <!-- Activity item -->
        <li>
            <span class="date">21/03</span>
            <span class="glyphicons activity-icon user_add"><i></i></span>
            <span class="ellipsis"><a href="">John Doe</a> registered at <a href="">Darius Jackson's</a> suggestion.</span>
            <div class="clearfix"></div>
        </li>
        <!-- // Activity item END -->
        <!-- Activity item -->
        <li>
            <span class="date">21/03</span>
            <span class="glyphicons activity-icon user_add"><i></i></span>
            <span class="ellipsis"><a href="">Jane Doe</a> registered at <a href="">Darius Jackson's</a> suggestion.</span>
            <div class="clearfix"></div>
        </li>
        <!-- // Activity item END -->
        <!-- Activity item -->
        <li>
            <span class="date">21/03</span>
            <span class="glyphicons activity-icon user_add"><i></i></span>
            <span class="ellipsis"><a href="">Darius Jackson</a> registered at <a href="">Darius Jackson's</a> suggestion.</span>
            <div class="clearfix"></div>
        </li>
        <!-- // Activity item END -->
        <!-- Activity item -->
        <li>
            <span class="date">21/03</span>
            <span class="glyphicons activity-icon user_add"><i></i></span>
            <span class="ellipsis"><a href="">Melisa Ragae</a> registered at <a href="">Melisa Ragae's</a> suggestion.</span>
            <div class="clearfix"></div>
        </li>
        <!-- // Activity item END -->

    </ul>
    <a href="" class="btn btn-primary view-all">View all</a>
</div>
<!-- // Filter Users Tab END -->

<!-- Filter Orders Tab -->
<div class="tab-pane active" id="filterOrdersTab">
    <ul class="list-timeline">

        <!-- Activity item -->
        <li>
            <span class="date">21/03</span>
            <span class="glyphicons activity-icon shopping_cart"><i></i></span>
            <span class="ellipsis"><a href="">Jane Doe</a> bought 10 items worth of &euro;50 (<a href="">order #2301</a>)</span>
            <div class="clearfix"></div>
        </li>
        <!-- // Activity item END -->
        <!-- Activity item -->
        <li>
            <span class="date">21/03</span>
            <span class="glyphicons activity-icon shopping_cart"><i></i></span>
            <span class="ellipsis"><a href="">Darius Jackson</a> bought 10 items worth of &euro;50 (<a href="">order #2302</a>)</span>
            <div class="clearfix"></div>
        </li>
        <!-- // Activity item END -->
        <!-- Activity item -->
        <li>
            <span class="date">21/03</span>
            <span class="glyphicons activity-icon shopping_cart"><i></i></span>
            <span class="ellipsis"><a href="">Melisa Ragae</a> bought 10 items worth of &euro;50 (<a href="">order #2303</a>)</span>
            <div class="clearfix"></div>
        </li>
        <!-- // Activity item END -->
        <!-- Activity item -->
        <li>
            <span class="date">21/03</span>
            <span class="glyphicons activity-icon shopping_cart"><i></i></span>
            <span class="ellipsis"><a href="">Melisa Ragae</a> bought 10 items worth of &euro;50 (<a href="">order #2304</a>)</span>
            <div class="clearfix"></div>
        </li>
        <!-- // Activity item END -->
        <!-- Activity item -->
        <li>
            <span class="date">21/03</span>
            <span class="glyphicons activity-icon shopping_cart"><i></i></span>
            <span class="ellipsis"><a href="">Jane Doe</a> bought 10 items worth of &euro;50 (<a href="">order #2305</a>)</span>
            <div class="clearfix"></div>
        </li>
        <!-- // Activity item END -->
        <!-- Activity item -->
        <li>
            <span class="date">21/03</span>
            <span class="glyphicons activity-icon shopping_cart"><i></i></span>
            <span class="ellipsis"><a href="">Darius Jackson</a> bought 10 items worth of &euro;50 (<a href="">order #2306</a>)</span>
            <div class="clearfix"></div>
        </li>
        <!-- // Activity item END -->
        <!-- Activity item -->
        <li>
            <span class="date">21/03</span>
            <span class="glyphicons activity-icon shopping_cart"><i></i></span>
            <span class="ellipsis"><a href="">Jane Doe</a> bought 10 items worth of &euro;50 (<a href="">order #2307</a>)</span>
            <div class="clearfix"></div>
        </li>
        <!-- // Activity item END -->

    </ul>
    <a href="" class="btn btn-primary view-all">View all</a>
</div>
<!-- // Filter Orders Tab END -->


<!-- Filter Links Tab -->
<div class="tab-pane" id="filterLinksTab">
    <ul class="list-timeline">

        <!-- Activity item -->
        <li>
            <span class="date">21/03</span>
            <span class="glyphicons activity-icon link"><i></i></span>
            <span class="ellipsis"><a href="">Martin Glades</a> bought 10 items worth of &euro;50 (<a href="">order #2301</a>)</span>
            <div class="clearfix"></div>
        </li>
        <!-- // Activity item END -->
        <!-- Activity item -->
        <li>
            <span class="date">21/03</span>
            <span class="glyphicons activity-icon link"><i></i></span>
            <span class="ellipsis"><a href="">Martin Glades</a> bought 10 items worth of &euro;50 (<a href="">order #2302</a>)</span>
            <div class="clearfix"></div>
        </li>
        <!-- // Activity item END -->
        <!-- Activity item -->
        <li>
            <span class="date">21/03</span>
            <span class="glyphicons activity-icon link"><i></i></span>
            <span class="ellipsis"><a href="">Jane Doe</a> bought 10 items worth of &euro;50 (<a href="">order #2303</a>)</span>
            <div class="clearfix"></div>
        </li>
        <!-- // Activity item END -->
        <!-- Activity item -->
        <li>
            <span class="date">21/03</span>
            <span class="glyphicons activity-icon link"><i></i></span>
            <span class="ellipsis"><a href="">John Doe</a> bought 10 items worth of &euro;50 (<a href="">order #2304</a>)</span>
            <div class="clearfix"></div>
        </li>
        <!-- // Activity item END -->
        <!-- Activity item -->
        <li>
            <span class="date">21/03</span>
            <span class="glyphicons activity-icon link"><i></i></span>
            <span class="ellipsis"><a href="">John Doe</a> bought 10 items worth of &euro;50 (<a href="">order #2305</a>)</span>
            <div class="clearfix"></div>
        </li>
        <!-- // Activity item END -->
        <!-- Activity item -->
        <li>
            <span class="date">21/03</span>
            <span class="glyphicons activity-icon link"><i></i></span>
            <span class="ellipsis"><a href="">Martin Glades</a> bought 10 items worth of &euro;50 (<a href="">order #2306</a>)</span>
            <div class="clearfix"></div>
        </li>
        <!-- // Activity item END -->
        <!-- Activity item -->
        <li>
            <span class="date">21/03</span>
            <span class="glyphicons activity-icon link"><i></i></span>
            <span class="ellipsis"><a href="">John Doe</a> bought 10 items worth of &euro;50 (<a href="">order #2307</a>)</span>
            <div class="clearfix"></div>
        </li>
        <!-- // Activity item END -->

    </ul>
    <a href="" class="btn btn-primary view-all">View all</a>
</div>
<!-- // Filter Links Tab END -->

<!-- Filter Photos Tab -->
<div class="tab-pane" id="filterPhotosTab">
    <ul class="list-timeline">

        <!-- Activity item -->
        <li>
            <span class="date">21/03</span>
            <span class="glyphicons activity-icon camera"><i></i></span>
            <span class="ellipsis"><a href="">Melisa Ragae</a> bought 10 items worth of &euro;50 (<a href="">order #2301</a>)</span>
            <div class="clearfix"></div>
        </li>
        <!-- // Activity item END -->
        <!-- Activity item -->
        <li>
            <span class="date">21/03</span>
            <span class="glyphicons activity-icon camera"><i></i></span>
            <span class="ellipsis"><a href="">John Doe</a> bought 10 items worth of &euro;50 (<a href="">order #2302</a>)</span>
            <div class="clearfix"></div>
        </li>
        <!-- // Activity item END -->
        <!-- Activity item -->
        <li>
            <span class="date">21/03</span>
            <span class="glyphicons activity-icon camera"><i></i></span>
            <span class="ellipsis"><a href="">Jane Doe</a> bought 10 items worth of &euro;50 (<a href="">order #2303</a>)</span>
            <div class="clearfix"></div>
        </li>
        <!-- // Activity item END -->
        <!-- Activity item -->
        <li>
            <span class="date">21/03</span>
            <span class="glyphicons activity-icon camera"><i></i></span>
            <span class="ellipsis"><a href="">John Doe</a> bought 10 items worth of &euro;50 (<a href="">order #2304</a>)</span>
            <div class="clearfix"></div>
        </li>
        <!-- // Activity item END -->
        <!-- Activity item -->
        <li>
            <span class="date">21/03</span>
            <span class="glyphicons activity-icon camera"><i></i></span>
            <span class="ellipsis"><a href="">Martin Glades</a> bought 10 items worth of &euro;50 (<a href="">order #2305</a>)</span>
            <div class="clearfix"></div>
        </li>
        <!-- // Activity item END -->
        <!-- Activity item -->
        <li>
            <span class="date">21/03</span>
            <span class="glyphicons activity-icon camera"><i></i></span>
            <span class="ellipsis"><a href="">Darius Jackson</a> bought 10 items worth of &euro;50 (<a href="">order #2306</a>)</span>
            <div class="clearfix"></div>
        </li>
        <!-- // Activity item END -->
        <!-- Activity item -->
        <li>
            <span class="date">21/03</span>
            <span class="glyphicons activity-icon camera"><i></i></span>
            <span class="ellipsis"><a href="">Martin Glades</a> bought 10 items worth of &euro;50 (<a href="">order #2307</a>)</span>
            <div class="clearfix"></div>
        </li>
        <!-- // Activity item END -->

    </ul>
    <a href="" class="btn btn-primary view-all">View all</a>
</div>
<!-- // Filter Photos Tab END -->

</div>
</div>
</div>
<!-- // Recent Activity END -->

</div>
<!-- // spacing END -->

</div>
<!-- // Column END -->


</div>
<!-- // Row END -->

<div class="row-fluid row-merge">
    <div class="span6">

        <!-- Inner -->
        <div class="innerAll">

            <!-- Row -->
            <div class="row-fluid">
                <div class="span4">

                    <!-- Stats Widget -->
                    <a href="" class="widget-stats widget-stats-2">
                        <span class="sparkline"></span>
                        <span class="txt"><span class="count">2,566</span> Sales</span>
                        <div class="clearfix"></div>
                    </a>
                    <!-- // Stats Widget END -->

                </div>
                <div class="span4">

                    <!-- Stats Widget -->
                    <a href="" class="widget-stats widget-stats-2 widget-stats-3">
                        <span class="sparkline success"></span>
                        <span class="txt"><span class="count">12,566</span> Photos</span>
                        <div class="clearfix"></div>
                    </a>
                    <!-- // Stats Widget END -->

                </div>
                <div class="span4">

                    <!-- Stats Widget -->
                    <a href="" class="widget-stats widget-stats-2 widget-stats-3">
                        <span class="sparkline danger"></span>
                        <span class="txt"><span class="count">12,566</span> Photos</span>
                        <div class="clearfix"></div>
                    </a>
                    <!-- // Stats Widget END -->

                </div>
            </div>
            <!-- // Row END -->

        </div>
        <!-- // Inner END -->

    </div>
    <div class="span6">

        <!-- Inner -->
        <div class="innerAll">

            <!-- Row -->
            <div class="row-fluid">
                <div class="span3">

                    <!-- Stats Widget -->
                    <a href="" class="widget-stats widget-stats-2 widget-stats-easy-pie">
                        <div data-percent="75" class="easy-pie"><span class="value">75</span>%</div>
                        <span class="txt"><span class="count">2,566</span> Sales</span>
                        <div class="clearfix"></div>
                    </a>
                    <!-- // Stats Widget END -->

                </div>
                <div class="span3">

                    <!-- Stats Widget -->
                    <a href="" class="widget-stats widget-stats-2 widget-stats-easy-pie txt-single">
                        <div data-percent="85" class="easy-pie danger"><span class="value">85</span>%</div>
                        <span class="txt">Server workload</span>
                        <div class="clearfix"></div>
                    </a>
                    <!-- // Stats Widget END -->

                </div>
                <div class="span3">

                    <!-- Stats Widget -->
                    <a href="" class="widget-stats widget-stats-2 widget-stats-easy-pie txt-single">
                        <div data-percent="90" class="easy-pie success"><span class="value">90</span>%</div>
                        <span class="txt">Completed tasks</span>
                        <div class="clearfix"></div>
                    </a>
                    <!-- // Stats Widget END -->

                </div>
                <div class="span3">

                    <!-- Stats Widget -->
                    <a href="" class="widget-stats widget-stats-2 widget-stats-easy-pie">
                        <div data-percent="23" class="easy-pie inverse"><span class="value">23</span>%</div>
                        <span class="txt"><span class="count">1,244</span> Emails</span>
                        <div class="clearfix"></div>
                    </a>
                    <!-- // Stats Widget END -->

                </div>
            </div>
            <!-- // Row END -->

        </div>
        <!-- // Inner END -->

    </div>
</div>


<!-- Button Widget -->
<div class="menubar">
    <ul>
        <li>Button widget:</li>
        <li><a href="">Button 1</a></li>
        <li class="divider"></li>
        <li><a href="">Button 2</a></li>
        <li class="divider"></li>
        <li><a href="">Export</a></li>
    </ul>
</div>
<div class="separator"></div>
<!-- // Button Widget END -->

<div class="innerLR">

<!-- Stats Widgets -->
<div class="row-fluid">
    <div class="span2">

        <!-- Stats Widget -->
        <a href="" class="widget-stats margin-bottom-none">
            <span class="glyphicons shopping_cart"><i></i></span>
            <span class="txt">Sales</span>
            <div class="clearfix"></div>
            <span class="count label label-important">20</span>
        </a>
        <!-- // Stats Widget END -->

    </div>
    <div class="span2">

        <!-- Stats Widget -->
        <a href="" class="widget-stats margin-bottom-none">
            <span class="glyphicons shield"><i></i></span>
            <span class="txt">Alerts</span>
            <div class="clearfix"></div>
            <span class="count label">25</span>
        </a>
        <!-- // Stats Widget END -->

    </div>
    <div class="span2">

        <!-- Stats Widget -->
        <a href="" class="widget-stats margin-bottom-none">
            <span class="glyphicons user_add"><i></i></span>
            <span class="txt">Clients</span>
            <div class="clearfix"></div>
            <span class="count label label-warning">33</span>
        </a>
        <!-- // Stats Widget END -->

    </div>
    <div class="span2">

        <!-- Stats Widget -->
        <a href="" class="widget-stats margin-bottom-none">
            <span class="glyphicons envelope"><i></i></span>
            <span class="txt">Messages</span>
            <div class="clearfix"></div>
            <span class="count label label-primary">265</span>
        </a>
        <!-- // Stats Widget END -->

    </div>
    <div class="span2">

        <!-- Stats Widget -->
        <a href="" class="widget-stats margin-bottom-none">
            <span class="glyphicons fishes"><i></i></span>
            <span class="txt">Fishes</span>
            <div class="clearfix"></div>
            <span class="count label label-important">13</span>
        </a>
        <!-- // Stats Widget END -->

    </div>
    <div class="span2">

        <!-- Stats Widget -->
        <a href="" class="widget-stats margin-bottom-none">
            <span class="glyphicons coins"><i></i></span>
            <span class="txt">Earnings</span>
            <div class="clearfix"></div>
            <span class="count label label-success">&euro;292,039.02</span>
        </a>
        <!-- // Stats Widget END -->

    </div>
</div>
<div class="separator bottom"></div>
<!-- // Stats Widgets END -->


<div class="separator bottom"></div>



</div>

</div>
<!-- // Content END -->

</div>
<div class="clearfix"></div>
<!-- // Sidebar menu & content wrapper END -->

<div id="footer" class="hidden-print">
    <!--  Copyright Line -->
    <div class="copy">&copy; 2012 - 2013 - MosaicPro - All Rights Reserved. <a href="http://themeforest.net/item/adminkit-premium-admin-template/4437902?ref=mosaicpro" target="_blank">Purchase this template on ThemeForest</a> - Current version: v1.3 / <a target="_blank" href="http://mosaicpro.biz/adminkit/CHANGELOG">changelog</a></div>
    <!--  End Copyright Line -->
</div>
<!-- // Footer END -->

</div>
<!-- // Main Container Fluid END -->


<!-- JQuery -->
<script src="<?=base_url();?>publics/admin/theme/scripts/plugins/system/jquery.min.js"></script>

<!-- Modernizr -->
<script src="<?=base_url();?>publics/admin/theme/scripts/plugins/system/modernizr.js"></script>

<!-- Bootstrap -->
<script src="<?=base_url();?>publics/admin/bootstrap/js/bootstrap.min.js"></script>

<!-- SlimScroll Plugin -->
<script src="<?=base_url();?>publics/admin/theme/scripts/plugins/other/jquery-slimScroll/jquery.slimscroll.min.js"></script>

<!-- Common Demo Script -->
<script src="<?=base_url();?>publics/admin/theme/scripts/demo/common.js?1365754760"></script>

<!-- Holder Plugin -->
<script src="<?=base_url();?>publics/admin/theme/scripts/plugins/other/holder/holder.js"></script>

<!-- Uniform Forms Plugin -->
<script src="<?=base_url();?>publics/admin/theme/scripts/plugins/forms/pixelmatrix-uniform/jquery.uniform.min.js"></script>

<!-- Global -->
<script>
	var basePath = '';
	</script>

<!-- Bootstrap Extended -->
<script src="<?=base_url();?>publics/admin/bootstrap/extend/bootstrap-select/bootstrap-select.js"></script>
<script src="<?=base_url();?>publics/admin/bootstrap/extend/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
<script src="<?=base_url();?>publics/admin/bootstrap/extend/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js"></script>
<script src="<?=base_url();?>publics/admin/bootstrap/extend/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
<script src="<?=base_url();?>publics/admin/bootstrap/extend/jasny-bootstrap/js/bootstrap-fileupload.js"></script>
<script src="<?=base_url();?>publics/admin/bootstrap/extend/bootbox.js"></script>
<script src="<?=base_url();?>publics/admin/bootstrap/extend/bootstrap-wysihtml5/js/wysihtml5-0.3.0_rc2.min.js"></script>
<script src="<?=base_url();?>publics/admin/bootstrap/extend/bootstrap-wysihtml5/js/bootstrap-wysihtml5-0.0.2.js"></script>

<!-- Google Code Prettify -->
<script src="<?=base_url();?>publics/admin/theme/scripts/plugins/other/google-code-prettify/prettify.js"></script>

<!-- JQueryUI -->
<script src="<?=base_url();?>publics/admin/theme/scripts/plugins/system/jquery-ui/js/jquery-ui-1.9.2.custom.min.js"></script>

<!-- JQueryUI Touch Punch -->
<!-- small hack that enables the use of touch events on sites using the jQuery UI user interface library -->
<script src="<?=base_url();?>publics/admin/theme/scripts/plugins/system/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<!-- Gritter Notifications Plugin -->
<script src="<?=base_url();?>publics/admin/theme/scripts/plugins/notifications/Gritter/js/jquery.gritter.min.js"></script>

<!-- Notyfy Notifications Plugin -->
<script src="<?=base_url();?>publics/admin/theme/scripts/plugins/notifications/notyfy/jquery.notyfy.js"></script>

<!-- MiniColors Plugin -->
<script src="<?=base_url();?>publics/admin/theme/scripts/plugins/color/jquery-miniColors/jquery.miniColors.js"></script>

<!-- DateTimePicker Plugin -->
<script src="<?=base_url();?>publics/admin/theme/scripts/plugins/forms/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

<!-- Cookie Plugin -->
<script src="<?=base_url();?>publics/admin/theme/scripts/plugins/system/jquery.cookie.js"></script>

<!-- Colors -->
<script>
	var primaryColor = '#e25f39',
		dangerColor = '#bd362f',
		successColor = '#609450',
		warningColor = '#ab7a4b',
		inverseColor = '#45484d';
	</script>

<!-- Themer -->
<script>
	var themerPrimaryColor = primaryColor;
	</script>
<script src="<?=base_url();?>publics/admin/theme/scripts/demo/themer.js"></script>

<!-- Twitter Feed -->
<script src="<?=base_url();?>publics/admin/theme/scripts/demo/twitter.js"></script>

<!-- Easy-pie Plugin -->
<script src="<?=base_url();?>publics/admin/theme/scripts/plugins/charts/easy-pie/jquery.easy-pie-chart.js"></script>

<!-- Sparkline Charts Plugin -->
<script src="<?=base_url();?>publics/admin/theme/scripts/plugins/charts/sparkline/jquery.sparkline.min.js"></script>

<!-- Ba-Resize Plugin -->
<script src="<?=base_url();?>publics/admin/theme/scripts/plugins/other/jquery.ba-resize.js"></script>

<!-- Dashboard Demo Script -->
<script src="<?=base_url();?>publics/admin/theme/scripts/demo/index.js?1365754760"></script>


<!-- Pageguide Plugin -->
<!--[if gt IE 8]><!--><script src="<?=base_url();?>publics/admin/theme/scripts/plugins/other/pageguide/js/pageguide.js"></script><!--<![endif]-->

<!-- Guided Tour Demo Script -->
<!--[if gt IE 8]><!--><script src="<?=base_url();?>publics/admin/theme/scripts/demo/guidedtour.js"></script><!--<![endif]-->


<!-- Google JSAPI -->
<script type="text/javascript" src="https://www.google.com/jsapi"></script>

<!--  Flot Charts Plugin -->
<script src="<?=base_url();?>publics/admin/theme/scripts/plugins/charts/flot/jquery.flot.js"></script>
<script src="<?=base_url();?>publics/admin/theme/scripts/plugins/charts/flot/jquery.flot.pie.js"></script>
<script src="<?=base_url();?>publics/admin/theme/scripts/plugins/charts/flot/jquery.flot.tooltip.js"></script>
<script src="<?=base_url();?>publics/admin/theme/scripts/plugins/charts/flot/jquery.flot.selection.js"></script>
<script src="<?=base_url();?>publics/admin/theme/scripts/plugins/charts/flot/jquery.flot.resize.js"></script>
<script src="<?=base_url();?>publics/admin/theme/scripts/plugins/charts/flot/jquery.flot.orderBars.js"></script>

<!-- Charts Helper Demo Script -->
<script src="<?=base_url();?>publics/admin/theme/scripts/demo/charts.helper.js?1365754760"></script>


<!-- Optional Resizable Sidebars -->
<!--[if gt IE 8]><!--><script src="<?=base_url();?>publics/admin/theme/scripts/demo/resizable.js?1365754760"></script><!--<![endif]-->

<!-- Bootstrap Image Gallery -->
<script src="<?=base_url();?>publics/admin/bootstrap/extend/bootstrap-image-gallery/js/bootstrap-image-gallery.min.js" type="text/javascript"></script>

<script>
	//Load the Visualization API and the table/core chart package.
	google.load('visualization', '1.0', {'packages':['table', 'corechart']});
	
	// Set a callback to run when the Google Visualization API is loaded.
	google.setOnLoadCallback(charts.traffic_sources_dataTables.init);
	</script>

</body>
</html>
