<!-- Left side column. contains the logo and sidebar -->
<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?=base_url();?>public/admin/img/avatar3.png" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Hello, Jane</p>

                <a href="<?=base_url();?>public/admin/#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="active">
                <a href="<?=base_url();?>admin/welcome">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="treeview">
                <a href="<?=base_url();?>admin/user">
                    <i class="fa fa-bar-chart-o"></i>
                    <span>User</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=base_url();?>admin/user"><i class="fa fa-angle-double-right"></i> List</a></li>
                    <li><a href="<?=base_url();?>admin/user/add"><i class="fa fa-angle-double-right"></i> Add</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="<?=base_url();?>admin/userweb">
                    <i class="fa fa-bar-chart-o"></i>
                    <span>User Web</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=base_url();?>admin/userweb"><i class="fa fa-angle-double-right"></i> List</a></li>
                    <li><a href="<?=base_url();?>admin/userweb/add"><i class="fa fa-angle-double-right"></i> Add</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="<?=base_url();?>admin/location">
                    <i class="fa fa-bar-chart-o"></i>
                    <span>Location</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=base_url();?>admin/location"><i class="fa fa-angle-double-right"></i> List</a></li>
                    <li><a href="<?=base_url();?>admin/location"><i class="fa fa-angle-double-right"></i> List - inActive</a></li>
                    <li><a href="<?=base_url();?>admin/location/add"><i class="fa fa-angle-double-right"></i> Add</a></li>
                </ul>
            </li>


            <li class="treeview">
                <a href="<?=base_url();?>admin/destination">
                    <i class="fa fa-bar-chart-o"></i>
                    <span>Location - Loc</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=base_url();?>admin/destination"><i class="fa fa-angle-double-right"></i> Destination</a></li>
                    <li><a href="<?=base_url();?>admin/tip"><i class="fa fa-angle-double-right"></i> Tip</a></li>
                    <li><a href="<?=base_url();?>admin/comment"><i class="fa fa-angle-double-right"></i> Comment</a></li>
                    <li><a href="<?=base_url();?>admin/gallery"><i class="fa fa-angle-double-right"></i> Gallery</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="<?=base_url();?>admin/user">
                    <i class="fa fa-bar-chart-o"></i>
                    <span>Address - Map</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=base_url();?>admin/province"><i class="fa fa-angle-double-right"></i> Province</a></li>
                    <li><a href="<?=base_url();?>admin/district"><i class="fa fa-angle-double-right"></i> District</a></li>
                </ul>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>