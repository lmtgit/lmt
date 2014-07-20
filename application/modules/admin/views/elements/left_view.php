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
<div id="notif">
    <ul>
        <li><a href="" class="glyphicons envelope"><i></i> 5</a></li>
        <li><a href="" class="glyphicons shopping_cart"><i></i> 1</a></li>
        <li><a href="" class="glyphicons log_book"><i></i> 3</a></li>
        <li><a href="" class="glyphicons user_add"><i></i> 14</a></li>
    </ul>
</div>
<!-- // Sidebar Mini Stats END -->

<!-- Regular Size Menu -->
<ul>


    <!-- Menu Regular Item -->
    <li class="glyphicons display active"><a href="<?=base_url();?>admin/dashboard"><i></i><span>Dashboard</span></a></li>

    <!-- Components Submenu Level 1 -->
    <li class="hasSubmenu glyphicons cogwheels">
        <a data-toggle="collapse" href="#menu_components"><i></i><span>Components</span></a>
        <ul class="collapse" id="menu_components">

            <!-- Components Submenu Level 2 -->
            <li class="hasSubmenu">
                <a data-toggle="collapse" href="#menu_forms"><span>Forms</span></a>
                <ul class="collapse" id="menu_forms">
                    <li class=""><a href="form_wizards.html?lang=en"><span>Form Wizards</span></a></li>
                    <li class=""><a href="form_elements.html?lang=en"><span>Form Elements</span></a></li>
                    <li class=""><a href="form_validator.html?lang=en"><span>Form Validator</span></a></li>
                    <li class=""><a href="file_managers.html?lang=en"><span>File Managers</span></a></li>
                </ul>
                <span class="count">4</span>
            </li>
            <!-- // Components Submenu Level 2 END -->

            <!-- Components Submenu Regular Items -->
            <li class=""><a href="ui.html?lang=en"><span>UI Elements</span></a></li>
            <li class=""><a href="icons.html?lang=en"><span>Icons</span></a></li>
            <li class=""><a href="widgets.html?lang=en"><span>Widgets</span></a></li>
            <li class=""><a href="tabs.html?lang=en"><span>Tabs</span></a></li>
            <li class=""><a href="sliders.html?lang=en"><span>Sliders</span></a></li>
            <li class=""><a href="charts.html?lang=en"><span>Charts</span></a></li>
            <!-- // Components Submenu Regular Items END -->

            <!-- Components Submenu Level 2 -->
            <li class="hasSubmenu">
                <a data-toggle="collapse" href="#menu_tables"><span>Tables</span></a>
                <ul class="collapse" id="menu_tables">
                    <li class=""><a href="tables.html?lang=en"><span>Tables</span></a></li>
                    <li class=""><a href="pricing_tables.html?lang=en"><span>Pricing tables</span></a></li>
                </ul>
                <span class="count">2</span>
            </li>
            <!-- // Components Submenu Level 2 -->

            <!-- Components Submenu Regular Items -->
            <li class=""><a href="grid.html?lang=en"><span>Grid system</span></a></li>
            <li class=""><a href="notifications.html?lang=en"><span>Notifications</span></a></li>
            <li class=""><a href="modals.html?lang=en"><span>Modals</span></a></li>
            <li class=""><a href="thumbnails.html?lang=en"><span>Thumbnails</span></a></li>
            <li class=""><a href="carousels.html?lang=en"><span>Carousels</span></a></li>
            <li class=""><a href="tour.html?lang=en"><span>Page Tour</span></a></li>
            <!-- // Components Submenu Regular Items END -->

        </ul>
        <span class="count">18</span>
    </li>
    <!-- Components Submenu Level 1 END -->

    <!-- Extra Submenu Level 1 -->
    <li class="hasSubmenu glyphicons gift">
        <a data-toggle="collapse" href="#menu_extra"><i></i><span>Extra</span></a>
        <ul class="collapse" id="menu_extra">
            <li class=""><a href="my_account.html?lang=en"><span>My Account</span></a></li>
            <li class=""><a href="bookings.html?lang=en"><span>Bookings</span></a></li>
            <li class=""><a href="finances.html?lang=en"><span>Finances</span></a></li>
            <li class=""><a href="pages.html?lang=en"><span>Site Pages</span></a></li>
            <li><a href="error.html?lang=en"><span>Error page</span></a></li>
            <li><a href="blank.html?lang=en"><span>Blank page</span></a></li>
        </ul>
        <span class="count">6</span>
    </li>
    <!-- // Extra Submenu Level 1 END -->

    <!-- Gallery Submenu Level 1 -->
    <li class="hasSubmenu">
        <a data-toggle="collapse" class="glyphicons picture" href="#menu_gallery"><i></i><span>Photo Gallery</span></a>
        <ul class="collapse" id="menu_gallery">
            <li class=""><a href="gallery_1.html?lang=en"><span>Gallery #1</span></a></li>
            <li class=""><a href="gallery_2.html?lang=en"><span>Gallery #2</span></a></li>
        </ul>
        <span class="count">2</span>
    </li>
    <!-- // Gallery Submenu Level 1 END -->

    <!-- Shop Submenu Level 1 -->
    <li class="hasSubmenu">
        <a data-toggle="collapse" class="glyphicons shopping_cart" href="#menu_ecommerce"><i></i><span>Online Shop</span></a>
        <ul class="collapse" id="menu_ecommerce">
            <li class="hasSubmenu">
                <a data-toggle="collapse" href="#menu_ecommerce_client"><i></i><span>Client interface</span></a>
                <ul class="collapse" id="menu_ecommerce_client">
                    <li class=""><a href="shop_client_products.html?lang=en"><span>Products</span></a></li>
                    <li class=""><a href="shop_client_product.html?lang=en"><span>Product details</span></a></li>
                    <li class=""><a href="shop_client_cart.html?lang=en"><span>Shopping cart</span></a></li>
                </ul>
                <span class="count">3</span>
            </li>
            <li class="hasSubmenu">
                <a data-toggle="collapse" href="#menu_ecommerce_admin"><i></i><span>Management</span></a>
                <ul class="collapse" id="menu_ecommerce_admin">
                    <li class=""><a href="shop_admin_products.html?lang=en"><span>Products</span></a></li>
                    <li class=""><a href="shop_admin_product.html?lang=en"><span>Add product</span></a></li>
                </ul>
                <span class="count">2</span>
            </li>
        </ul>
        <span class="count">5</span>
    </li>
    <!-- // Shop Submenu Level 1 END -->

    <!-- Menu Regular Items -->
    <li class="glyphicons tags"><a href="faq.html?lang=en"><i></i><span>FAQ</span></a></li>
    <li class="glyphicons calendar"><a href="calendar.html?lang=en"><i></i><span>Calendar</span></a></li>
    <li class="glyphicons lock"><a href="login.html?lang=en"><i></i><span>Login</span></a></li>
    <li class="glyphicons user_add"><a href="signup.html?lang=en"><i></i><span>Register</span></a></li>
    <li class="glyphicons credit_card"><a href="invoice.html?lang=en"><i></i><span>Invoice</span></a></li>
    <!-- // Menu Regular Items END -->

    <!-- Maps Submenu Level 1 -->
    <li class="hasSubmenu glyphicons google_maps">
        <a data-toggle="collapse" href="#menu_maps"><i></i><span>Location</span></a>
        <ul class="collapse" id="menu_maps">
            <li class=""><a href="<?=base_url();?>admin/location/province"><span>Province</span></a></li>
            <li class=""><a href="<?=base_url();?>admin/location/district"><span>District</span></a></li>
        </ul>
        <span class="count">2</span>
    </li>
    <!-- // Maps Submenu Level 1 END -->

</ul>
<div class="clearfix"></div>
<div class="separator bottom"></div>
<!-- // Regular Size Menu END -->

<!-- Sidebar Stats Widgets -->
<div class="widget-sidebar-stats">
    <strong>3,540</strong>
    <span>Messages</span>
    <span class="pull-right sparkline"></span>
    <div class="clearfix"></div>
</div>
<div class="widget-sidebar-stats">
    <strong>2,510,402</strong>
    <span>Photos</span>
    <span class="pull-right sparkline"></span>
    <div class="clearfix"></div>
</div>
<div class="separator bottom"></div>
<!-- // Sidebar Stats Widgets END -->

<!-- Stats Widget -->
<a href="" class="widget-stats widget-stats-2 widget-stats-easy-pie widget-sidebar-stats txt-single">
    <div data-percent="90" class="easy-pie primary"><span class="value">90</span>%</div>
    <span class="txt">Completed tasks</span>
    <div class="clearfix"></div>
</a>
<!-- // Stats Widget END -->

<!-- Stats Widget -->
<a href="" class="widget-stats widget-stats-2 widget-stats-3 widget-sidebar-stats black margin-bottom-none">
    <span class="sparkline success"></span>
    <span class="txt"><span class="count">12,566</span> Photos</span>
    <div class="clearfix"></div>
</a>
<div class="separator bottom"></div>
<!-- // Stats Widget END -->

<!-- Larger Menu Style -->
<ul>
    <li class="heading"><span>Larger menu</span></li>
    <li class="large glyphicons group"><a href="error.html?lang=en"><i></i><span>Clients</span></a></li>
    <li class="large hasSubmenu glyphicons log_book">
        <a data-toggle="collapse" href="#menu_tasks"><i></i><span>Task Management</span></a>
        <ul class="collapse" id="menu_tasks">
            <li class=""><a href="tasks.html?lang=en"><span>Tasks Overview</span></a></li>
            <li class=""><a href="error.html?lang=en"><span>Manage Projects</span></a></li>
            <li class=""><a href="error.html?lang=en"><span>Manage Team</span></a></li>
        </ul>
        <span class="count">3</span>
    </li>
</ul>
<div class="clearfix"></div>
<!-- // Larger Menu Style END -->

<!-- Sidebar Stats Widgets -->
<div class="separator bottom"></div>
<div class="widget-sidebar-stats">
    <span>HDD <strong class="pull-right">80% used</strong></span>
    <div class="progress progress-danger">
        <div class="bar" style="width: 80%;"></div>
    </div>
    <div class="clearfix"></div>

</div>
<div class="widget-sidebar-stats">
    <span>Mail <strong class="pull-right">65% used</strong></span>
    <div class="progress progress-success">
        <div class="bar" style="width: 65%;"></div>
    </div>
    <div class="clearfix"></div>
</div>
<div class="widget-sidebar-stats">
    <h5>Generic widget</h5>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
</div>
<!-- // Sidebar Stats Widgets END -->

<!-- Menu Position Change -->
<div class="separator top uniformjs menu_js hidden-phone">
    <div class="innerLR">
        <label for="toggle-menu-position" class="checkbox">
            <input type="checkbox" class="checkbox" id="toggle-menu-position" />
            right menu
        </label>
    </div>
</div>
<!-- // Menu Position Change END -->

<!-- Layout Type Change -->
<div class="uniformjs layout_js hidden-phone">
    <div class="innerLR">
        <label for="toggle-layout" class="checkbox">
            <input type="checkbox" class="checkbox" id="toggle-layout" />
            fixed layout
        </label>
    </div>
</div>
<!-- // Layout Type Change END -->

</div>
<!-- // Scrollable Menu wrapper with Maximum Height END -->

</div>