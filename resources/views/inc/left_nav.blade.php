
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-menu hidden-xs"></i><i class="ti-close visible-xs"></i></span> <span class="hide-menu">Navigation</span></h3> </div>
                <ul class="nav" id="side-menu">
                    <li class="user-pro">
                        <a href="#" class="waves-effect"><img src="{{asset('/images/users/varun.jpg')}}" alt="user-img" class="img-circle"> <span class="hide-menu"> Steve Gection<span class="fa arrow"></span></span>
                        </a>
                        <ul class="nav nav-second-level collapse" aria-expanded="false" style="height: 0px;">
                            <li><a href="javascript:void(0)"><i class="ti-user"></i> <span class="hide-menu">My Profile</span></a></li>
                            <li><a href="javascript:void(0)"><i class="ti-wallet"></i> <span class="hide-menu">My Balance</span></a></li>
                            <li><a href="javascript:void(0)"><i class="ti-email"></i> <span class="hide-menu">Inbox</span></a></li>
                            <li><a href="javascript:void(0)"><i class="ti-settings"></i> <span class="hide-menu">Account Setting</span></a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> <span class="hide-menu">Logout</span></a></li>
                        </ul>
                    </li>
                    <li> <a href="index.html" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard <span class="fa arrow"></span> <span class="label label-rouded label-inverse pull-right">4</span></span></a></li>
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="far fa-building fa-fw" data-icon="v"></i> <span class="hide-menu"> Inventory <span class="fa arrow"></span> </span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="products.html"><i class="fa-fw">C</i><span class="hide-menu">Categories</span></a> </li>
                            <li> <a href="product-orders.html"><i class="fa-fw">SC</i><span class="hide-menu">Sub Categories</span></a> </li>
                            <li> <a href="product-details.html"><i class="fa-fw">I</i><span class="hide-menu">Items</span></a> </li>
                        </ul>
                    </li>
                    <li> <a href="{{route('staffs')}}" class="waves-effect"><i class=" icon-people " data-icon="v"></i> <span class="hide-menu"> Manage Staffs </span></a></li>
                    <li> <a href="{{route('customers')}}" class="waves-effect"><i class=" icon-people " data-icon="v"></i> <span class="hide-menu"> Manage Customers </span></a></li>
                    <li> <a href="{{route('sales')}}" class="waves-effect"><i class=" fas fa-dollar-sign" data-icon="v"></i> <span class="hide-menu">Finacial Report </span></a></li>
                    <li> <a href="{{route('debits.credits')}}" class="waves-effect"><i class=" fas fa-dollar-sign" data-icon="v"></i> <span class="hide-menu">Credits/Debit </span></a></li>
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-logout" data-icon="v"></i> <span class="hide-menu"> Logout </span></a></li>
                
                </ul>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->