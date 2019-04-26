<nav class="pcoded-navbar" pcoded-header-position="relative">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">
        <div class="">
            <div class="main-menu-header">
                <img class="img-40" src="{{URL::to('assets/images/user.png')}}" alt="User-Profile-Image">
                <div class="user-details">
                    <span>Administrator</span>
                    <span id="more-details">Super User<i class="ti-angle-down"></i></span>
                </div>
            </div>

            <div class="main-menu-content">
                <ul>
                    <li class="more-details">
                        <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                        <a href="#!"><i class="ti-settings"></i>Settings</a>
                        <a href="#!"><i class="ti-layout-sidebar-left"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation" menu-title-theme="theme5" >Navigation</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="">
                <a href="{{route('home')}}" data-i18n="nav.documentation.main">
                    <span class="pcoded-micon"><i class="ti-file"></i></span>
                    <span class="pcoded-mtext">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.ui-element" menu-title-theme="theme5">Activities</div>
        <ul class="pcoded-item pcoded-left-item">

            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext">Branches</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="{{route('branches.index')}}" data-i18n="nav.basic-components.alert">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">List</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                    <li class=" ">
                        <a href="{{route('branches.create')}}" data-i18n="nav.basic-components.alert">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext"> Add</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext">Stocks Category</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="{{route('stock-category.index')}}" data-i18n="nav.basic-components.alert">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">List</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                    <li class=" ">
                        <a href="{{route('stock-category.create')}}" data-i18n="nav.basic-components.alert">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext"> Add</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext">Stocks</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="{{route('stocks.index')}}" data-i18n="nav.basic-components.alert">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">List</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                    <li class=" ">
                        <a href="{{route('stocks.create')}}" data-i18n="nav.basic-components.alert">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext"> Add</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>



            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext">Sales</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="{{route('account.sales.index')}}" data-i18n="nav.basic-components.alert">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">List</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                    <li class=" ">
                        <a href="{{route('account.sales.create.start')}}" data-i18n="nav.basic-components.alert">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext"> Add</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                    <li class=" ">
                        <a href="{{route('account.sales.create.previous')}}" data-i18n="nav.basic-components.alert">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext"> Add Previous Sales</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext">Purchases</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="{{route('account.purchases.index')}}" data-i18n="nav.basic-components.alert">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">List</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                    <li class=" ">
                        <a href="{{route('account.purchases.create.start')}}" data-i18n="nav.basic-components.alert">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext"> Add</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                    <li class=" ">
                        <a href="{{route('account.purchases.create.start')}}" data-i18n="nav.basic-components.alert">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext"> Add Previous Purchases</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext">Stocks Transfers</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="{{route('account.transfers.index')}}" data-i18n="nav.basic-components.alert">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">List</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                    <li class=" ">
                        <a href="{{route('account.transfers.create.start')}}" data-i18n="nav.basic-components.alert">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext"> Add</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                    <li class=" ">
                        <a href="{{route('account.transfers.create.start')}}" data-i18n="nav.basic-components.alert">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext"> Add Previous Transfers</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>


            

            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext">Sales Return</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="{{route('stocks.create')}}" data-i18n="nav.basic-components.alert">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">List</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                    <li class=" ">
                        <a href="{{route('stocks.create')}}" data-i18n="nav.basic-components.alert">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext"> Add</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext">Purchase Return</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="{{route('purchase-return.index')}}" data-i18n="nav.basic-components.alert">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">List</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                    <li class=" ">
                        <a href="{{route('purchase-return.create')}}" data-i18n="nav.basic-components.alert">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext"> Add</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>

            
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext">Stock Transfers</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="{{route('stocks.index')}}" data-i18n="nav.basic-components.alert">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">List</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                    <li class=" ">
                        <a href="{{route('stocks.create')}}" data-i18n="nav.basic-components.alert">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext"> Add</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext">Customers</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="{{route('customers.index')}}" data-i18n="nav.basic-components.alert">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">List</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                    <li class=" ">
                        <a href="{{route('customers.create')}}" data-i18n="nav.basic-components.alert">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext"> Add</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext">Suppliers</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="{{route('suppliers.index')}}" data-i18n="nav.basic-components.alert">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">List</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                    <li class=" ">
                        <a href="{{route('suppliers.create')}}" data-i18n="nav.basic-components.alert">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext"> Add</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext">Drivers</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="{{route('drivers.index')}}" data-i18n="nav.basic-components.alert">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">List</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                    <li class=" ">
                        <a href="{{route('drivers.create')}}" data-i18n="nav.basic-components.alert">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext"> Add</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext">Staff App Roles</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="{{route('roles.index')}}" data-i18n="nav.basic-components.alert">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">List</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext">Salary & Allowance</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">

                    <li class=" ">
                        <a href="{{route('salary-structure.index')}}" data-i18n="nav.basic-components.alert">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Settings</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                    <li class=" ">
                        <a href="{{route('salary-structure.index')}}" data-i18n="nav.basic-components.alert">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Fixed Feature</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                    <li class=" ">
                        <a href="{{route('salary-structure.index')}}" data-i18n="nav.basic-components.alert">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Wages Features</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                    <li class=" ">
                        <a href="{{route('salary-structure.index')}}" data-i18n="nav.basic-components.alert">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Salary Due</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                    <li class=" ">
                        <a href="{{route('salary-structure.index')}}" data-i18n="nav.basic-components.alert">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Deductions</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext">Expenses</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="{{route('expenses.index')}}" data-i18n="nav.basic-components.alert">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">List</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                    <li class=" ">
                        <a href="{{route('expenses.create')}}" data-i18n="nav.basic-components.alert">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext"> Add</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-settings"></i></span>
                    <span class="pcoded-mtext">Admin & Users Settings</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="{{route('users.index')}}" data-i18n="nav.basic-components.alert">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">View Users</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="{{route('users.create')}}" data-i18n="nav.basic-components.alert">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Create Admin Users</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="{{route('suppliers.index')}}" data-i18n="nav.basic-components.alert">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Users Roles</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>


            <!-- <li class="pcoded-hasmenu">
                <a href="javascript:void(0)" data-i18n="nav.advance-components.main">
                    <span class="pcoded-micon"><i class="ti-crown"></i></span>
                    <span class="pcoded-mtext">Advance Components</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="draggable.html" data-i18n="nav.advance-components.draggable">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Draggable</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="bs-grid.html" data-i18n="nav.advance-components.grid-stack">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Grid Stack</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="light-box.html" data-i18n="nav.advance-components.light-box">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Light Box</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="modal.html" data-i18n="nav.advance-components.modal">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Modal</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="modal-form.html" data-i18n="nav.advance-components.modal-form">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Modal Form</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="notification.html" data-i18n="nav.advance-components.notifications">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Notifications</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="notify.html" data-i18n="nav.advance-components.pnotify">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">PNOTIFY</span>
                            <span class="pcoded-badge label label-info">NEW</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="rating.html" data-i18n="nav.advance-components.rating">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Rating</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="range-slider.html" data-i18n="nav.advance-components.range-slider">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Range Slider</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="slider.html" data-i18n="nav.advance-components.slider">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Slider</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="syntax-highlighter.html" data-i18n="nav.advance-components.syntax-highlighter">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Syntax Highlighter</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="tour.html" data-i18n="nav.advance-components.tour">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Tour</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="treeview.html" data-i18n="nav.advance-components.tree-view">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Tree View</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="nestable.html" data-i18n="nav.advance-components.nestable">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Nestable</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="toolbar.html" data-i18n="nav.advance-components.toolbar">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Toolbar</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="x-editable.html" data-i18n="nav.advance-components.x-editable">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">X-Editable</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)" data-i18n="nav.extra-components.main">
                    <span class="pcoded-micon"><i class="ti-gift"></i></span>
                    <span class="pcoded-mtext">Extra Components</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="session-timeout.html" data-i18n="nav.extra-components.session-timeout">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Session Timeout</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="session-idle-timeout.html" data-i18n="nav.extra-components.session-idle-timeout">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Session Idle Timeout</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="offline.html" data-i18n="nav.extra-components.offline">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Offline</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class=" ">
                <a href="animation.html" data-i18n="nav.animations.main">
                    <span class="pcoded-micon"><i class="ti-reload rotate-refresh"></i></span>
                    <span class="pcoded-mtext">Animations</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="sticky.html" data-i18n="nav.sticky-notes.main">
                    <span class="pcoded-micon"><i class="ti-layers-alt"></i></span>
                    <span class="pcoded-mtext">Sticky Notes</span>
                    <span class="pcoded-badge label label-danger">HOT</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)" data-i18n="nav.icons.main">
                    <span class="pcoded-micon"><i class="ti-star"></i></span>
                    <span class="pcoded-mtext">Icons</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="icon-font-awesome.html" data-i18n="nav.icons.font-awesome">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Font Awesome</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="icon-themify.html" data-i18n="nav.icons.themify">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Themify</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="icon-simple-line.html" data-i18n="nav.icons.simple-line-icon">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Simple Line Icon</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="icon-ion.html" data-i18n="nav.icons.ion-icon">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Ion Icon</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="icon-material-design.html" data-i18n="nav.icons.material-design">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Material Design</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="icon-icofonts.html" data-i18n="nav.icons.ico-fonts">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Ico Fonts</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="icon-weather.html" data-i18n="nav.icons.weather-icon">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Weather Icon</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="icon-typicons.html" data-i18n="nav.icons.typicons">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Typicons</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="icon-flags.html" data-i18n="nav.icons.flags">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Flags</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms" menu-title-theme="theme5" >Forms</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)" data-i18n="nav.form-components.main">
                    <span class="pcoded-micon"><i class="ti-layers"></i></span>
                    <span class="pcoded-mtext">Form Components</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="form-elements-component.html" data-i18n="nav.form-components.form-components">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Form Components</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="form-elements-add-on.html" data-i18n="nav.form-components.form-elements-add-on">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Form-Elements-Add-On</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="form-elements-advance.html" data-i18n="nav.form-components.form-elements-advance">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Form-Elements-Advance</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="form-validation.html" data-i18n="nav.form-components.form-validation">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Form Validation</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class=" ">
                <a href="form-picker.html" data-i18n="nav.form-pickers.main">
                    <span class="pcoded-micon"><i class="ti-pencil-alt"></i></span>
                    <span class="pcoded-mtext">Form Picker</span>
                    <span class="pcoded-badge label label-warning">NEW</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)" data-i18n="nav.json-form.main">
                    <span class="pcoded-micon"><i class="ti-layout-cta-btn-right"></i></span>
                    <span class="pcoded-mtext">JSON Form</span>
                    <span class="pcoded-badge label label-danger">HOT</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="json-forms/simple-form.html" data-i18n="nav.json-form.simple-form">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Simple Form</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="json-forms/clubs.html" data-i18n="nav.json-form.clubs-view">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Clubs(View Selector)</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="json-forms/customer-form.html" data-i18n="nav.json-form.customer-form">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Customer Form</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="json-forms/customer-profile-display-form.html" data-i18n="nav.json-form.profile-display">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Profile Display</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="json-forms/customer-profile-edit-form.html" data-i18n="nav.json-form.profile-edit">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Profile Edit</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="json-forms/customer-profile-read-only.html" data-i18n="nav.json-form.profile-ready-only">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Profile Ready Only</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="json-forms/json-form-fields.html" data-i18n="nav.json-form.form-fields">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Form Fields</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="json-forms/registration-click-validation.html" data-i18n="nav.json-form.registration-validation">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Registration Validation</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="json-forms/registration-automatic-validation.html" data-i18n="nav.json-form.automatic-validation">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Automatic Validation</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="json-forms/localized-login.html" data-i18n="nav.json-form.localized-login">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Localized Login</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" ">
                <a href="form-select.html" data-i18n="nav.form-select.main">
                    <span class="pcoded-micon"><i class="ti-shortcode"></i></span>
                    <span class="pcoded-mtext">Form Select</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="form-masking.html" data-i18n="nav.form-masking.main">
                    <span class="pcoded-micon"><i class="ti-write"></i></span>
                    <span class="pcoded-mtext">Form Masking</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="form-wizard.html" data-i18n="nav.form-wizard.main">
                    <span class="pcoded-micon"><i class="ti-archive"></i></span>
                    <span class="pcoded-mtext">Form Wizard</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)" data-i18n="nav.ready-to-use.main">
                    <span class="pcoded-micon"><i class="ti-receipt"></i></span>
                    <span class="pcoded-mtext">Ready To Use</span>
                    <span class="pcoded-badge label label-danger">HOT</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="ready-cloned-elements-form.html" data-i18n="nav.ready-to-use.cloned-elements-form">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Cloned Elements Form</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="ready-currency-form.html" data-i18n="nav.ready-to-use.currency-form">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Currency Form</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="ready-form-booking.html" data-i18n="nav.ready-to-use.booking-form">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Booking Form</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="ready-form-booking-multi-steps.html" data-i18n="nav.ready-to-use.booking-multi-steps-form">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Booking Multi Steps Form</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="ready-form-comment.html" data-i18n="nav.ready-to-use.comment-form">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Comment Form</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="ready-form-contact.html" data-i18n="nav.ready-to-use.contact-form">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Contact Form</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="ready-job-application-form.html" data-i18n="nav.ready-to-use.job-application-form">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Job Application Form</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="ready-js-addition-form.html" data-i18n="nav.ready-to-use.jS-addition-form">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">JS Addition Form</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="ready-login-form.html" data-i18n="nav.ready-to-use.login-form">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Login Form</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="ready-popup-modal-form.html" target="_blank" data-i18n="nav.ready-to-use.popup-modal-form">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Popup Modal Form</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="ready-registration-form.html" data-i18n="nav.ready-to-use.registration-form">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Registration Form</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="ready-review-form.html" data-i18n="nav.ready-to-use.review-form">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Review Form</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="ready-subscribe-form.html" data-i18n="nav.ready-to-use.subscribe-form">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Subscribe Form</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="ready-suggestion-form.html" data-i18n="nav.ready-to-use.suggestion-form">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Suggestion Form</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="ready-tabs-form.html" data-i18n="nav.ready-to-use.tabs-form">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Tabs Form</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.tables" menu-title-theme="theme5" >Tables</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)" data-i18n="nav.bootstrap-table.main">
                    <span class="pcoded-micon"><i class="ti-receipt"></i></span>
                    <span class="pcoded-mtext">Bootstrap Table</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="bs-basic-table.html" data-i18n="nav.bootstrap-table.basic-table">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Basic Table</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="bs-table-sizing.html" data-i18n="nav.bootstrap-table.sizing-table">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Sizing Table</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="bs-table-border.html" data-i18n="nav.bootstrap-table.border-table">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Border Table</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="bs-table-styling.html" data-i18n="nav.bootstrap-table.styling-table">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Styling Table</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)" data-i18n="nav.data-table.main">
                    <span class="pcoded-micon"><i class="ti-widgetized"></i></span>
                    <span class="pcoded-mtext">Data Table</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="bs-basic-table.html" data-i18n="nav.bootstrap-table.basic-table">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Basic Table</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="dt-basic.html" data-i18n="nav.data-table.basic-initialization">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Basic Initialization</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="dt-advance.html" data-i18n="nav.data-table.advance-initialization">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Advance Initialization</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="dt-styling.html" data-i18n="nav.data-table.styling">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Styling</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="dt-api.html" data-i18n="nav.data-table.api">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">API</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="dt-ajax.html" data-i18n="nav.data-table.ajax">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Ajax</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="dt-server-side.html" data-i18n="nav.data-table.server-side">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Server Side</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="dt-plugin.html" data-i18n="nav.data-table.plug-in">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Plug-In</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="dt-data-sources.html" data-i18n="nav.data-table.data-sources">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Data Sources</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)" data-i18n="nav.data-table-extensions.main">
                    <span class="pcoded-micon"><i class="ti-loop"></i></span>
                    <span class="pcoded-mtext">Data Table Extensions</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="dt-ext-autofill.html" data-i18n="nav.data-table-extensions.autofill">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">AutoFill</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="pcoded-hasmenu">
                        <a href="javascript:void(0)" data-i18n="nav.data-table-extensions.button.main">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Button</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class=" ">
                                <a href="dt-ext-basic-buttons.html" data-i18n="nav.data-table-extensions.button.basic-button">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Basic Button</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="dt-ext-buttons-flash.html" data-i18n="nav.data-table-extensions.button.flash-button">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Flash Button</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="dt-ext-buttons-html-5-data-export.html" data-i18n="nav.data-table-extensions.button.html-data-export">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Html-5 Data Export</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="dt-ext-buttons-print.html" data-i18n="nav.data-table-extensions.button.print-button">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Print Button</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=" ">
                        <a href="dt-ext-col-reorder.html" data-i18n="nav.data-table-extensions.col-reorder">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Col Reorder</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="dt-ext-fixed-columns.html" data-i18n="nav.data-table-extensions.fixed-columns">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Fixed Columns</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="dt-ext-fixed-header.html" data-i18n="nav.data-table-extensions.fixed-header">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Fixed Header</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="dt-ext-key-table.html" data-i18n="nav.data-table-extensions.key-table">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Key Table</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="dt-ext-responsive.html" data-i18n="nav.data-table-extensions.responsive">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Responsive</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="dt-ext-row-reorder.html" data-i18n="nav.data-table-extensions.row-recorder">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Row Recorder</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="dt-ext-scroller.html" data-i18n="nav.data-table-extensions.scroller">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Scroller</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="dt-ext-select.html" data-i18n="nav.data-table-extensions.select-tbl">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Select Table</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" ">
                <a href="foo-table.html" data-i18n="nav.foo-table.main">
                    <span class="pcoded-micon"><i class="ti-view-list-alt"></i></span>
                    <span class="pcoded-mtext">FooTable</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="pcoded-hasmenu ">
                <a href="javascript:void(0)" data-i18n="nav.maintenance.main">
                    <span class="pcoded-micon"><i class="ti-settings"></i></span>
                    <span class="pcoded-mtext">Maintenance</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="error.html" data-i18n="nav.maintenance.error">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Error</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="comming-soon.html" data-i18n="nav.maintenance.comming-soon">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Comming Soon</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="offline-ui.html" data-i18n="nav.maintenance.offline-ui">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Offline UI</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="pcoded-hasmenu ">
                <a href="javascript:void(0)" data-i18n="nav.user-profile.main">
                    <span class="pcoded-micon"><i class="ti-user"></i></span>
                    <span class="pcoded-mtext">User Profile</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="timeline.html" data-i18n="nav.user-profile.timeline">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Timeline</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="timeline-social.html" data-i18n="nav.user-profile.timeline-social">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Timeline Social</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="user-profile.html" data-i18n="nav.user-profile.user-profile">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">User Profile</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="user-card.html" data-i18n="nav.user-profile.user-card">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">User Card</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="pcoded-hasmenu ">
                <a href="javascript:void(0)" data-i18n="nav.blog.main">
                    <span class="pcoded-micon"><i class="ti-comment-alt"></i></span>
                    <span class="pcoded-mtext">Blog</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="blog.html" data-i18n="nav.blog.blog">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Blog</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="blog-detail.html" data-i18n="nav.blog.blog-detail">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Blog Detail</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="blog-detail-left.html" data-i18n="nav.blog.blog-left-side">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Blog With Left Sidebar</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="blog-detail-right.html" data-i18n="nav.blog.blog-right-sidebar">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Blog With Right Sidebar</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="pcoded-hasmenu ">
                <a href="javascript:void(0)" data-i18n="nav.e-commerce.main">
                    <span class="pcoded-micon"><i class="ti-shopping-cart"></i></span>
                    <span class="pcoded-mtext">E-Commerce</span>
                    <span class="pcoded-badge label label-danger">NEW</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="product.html" data-i18n="nav.e-commerce.product">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Product</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="product-list.html" data-i18n="nav.e-commerce.product-list">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Product List</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="product-edit.html" data-i18n="nav.e-commerce.product-edit">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Product Edit</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="product-detail.html" data-i18n="nav.e-commerce.product-detail">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Product Detail</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="product-cart.html" data-i18n="nav.e-commerce.product-card">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Product Card</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="product-payment.html" data-i18n="nav.e-commerce.credit-card-form">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Credit Card Form</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="pcoded-hasmenu ">
                <a href="javascript:void(0)" data-i18n="nav.email.main">
                    <span class="pcoded-micon"><i class="ti-email"></i></span>
                    <span class="pcoded-mtext">E-Email</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="email-compose.html" data-i18n="nav.email.compose-mail">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Compose Email</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="email-inbox.html" data-i18n="nav.email.inbox">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Inbox</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="email-read.html" data-i18n="nav.email.read-read-mail">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Read Mail</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="pcoded-hasmenu ">
                        <a href="javascript:void(0)" data-i18n="nav.email.email-template.main">
                            <span class="pcoded-micon"><i class="ti-email"></i></span>
                            <span class="pcoded-mtext">Email Template</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class="">
                                <a href="email-templates/email-welcome.html" data-i18n="nav.email.email-template.welcome-email">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Welcome Email</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class="">
                                <a href="email-templates/email-password.html" data-i18n="nav.email.email-template.reset-password">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Reset Password</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class="">
                                <a href="email-templates/email-newsletter.html" data-i18n="nav.email.email-template.newsletter-email">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Newsletter Email</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class="">
                                <a href="email-templates/email-launch.html" data-i18n="nav.email.email-template.app-launch">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">App Launch</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class="">
                                <a href="email-templates/email-activation.html" data-i18n="nav.email.email-template.activation-code">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Activation Code</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.app" menu-title-theme="theme5" >App</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class=" ">
                <a href="chat.html" data-i18n="nav.chat.main">
                    <span class="pcoded-micon"><i class="ti-comments"></i></span>
                    <span class="pcoded-mtext">Chat</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" ">
                <a href="crm-contact.html" data-i18n="nav.crm-contact.main">
                    <span class="pcoded-micon"><i class="ti-layout-list-thumb"></i></span>
                    <span class="pcoded-mtext">CRM Contact</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="pcoded-hasmenu ">
                <a href="javascript:void(0)" data-i18n="nav.social.main">
                    <span class="pcoded-micon"><i class="ti-dribbble"></i></span>
                    <span class="pcoded-mtext">Social</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="fb-wall.html" data-i18n="nav.social.fb-wall">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Fb Wall</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="message.html" data-i18n="nav.social.messages">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Messages</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="pcoded-hasmenu ">
                <a href="javascript:void(0)" data-i18n="nav.task.main">
                    <span class="pcoded-micon"><i class="ti-check-box"></i></span>
                    <span class="pcoded-mtext">Task</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="task-list.html" data-i18n="nav.task.task-list">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Task List</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="task-board.html" data-i18n="nav.task.task-board">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Task Board</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="task-detail.html" data-i18n="nav.task.task-detail">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Task Detail</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="issue-list.html" data-i18n="nav.task.issue list">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Issue List</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="pcoded-hasmenu ">
                <a href="javascript:void(0)" data-i18n="nav.to-do.main">
                    <span class="pcoded-micon"><i class="ti-notepad"></i></span>
                    <span class="pcoded-mtext">To-Do</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="todo.html" data-i18n="nav.to-do.todo">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">To-Do</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="notes.html" data-i18n="nav.to-do.notes">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Notes</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="pcoded-hasmenu ">
                <a href="javascript:void(0)" data-i18n="nav.gallery.main">
                    <span class="pcoded-micon"><i class="ti-gallery"></i></span>
                    <span class="pcoded-mtext">Gallery</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="gallery-grid.html" data-i18n="nav.gallery.gallery-grid">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Gallery-Grid</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="gallery-masonry.html" data-i18n="nav.gallery.masonry-gallery">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Masonry Gallery</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="gallery-advance.html" data-i18n="nav.gallery.advance-gallery">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Advance Gallery</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="pcoded-hasmenu ">
                <a href="javascript:void(0)" data-i18n="nav.search.main">
                    <span class="pcoded-micon"><i class="ti-search"></i></span>
                    <span class="pcoded-mtext">Search</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="search-result.html" data-i18n="nav.search.simple-search">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Simple Search</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="search-result2.html" data-i18n="nav.search.grouping-search">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Grouping Search</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="pcoded-hasmenu ">
                <a href="javascript:void(0)" data-i18n="nav.job-search.main">
                    <span class="pcoded-micon"><i class="ti-medall-alt"></i></span>
                    <span class="pcoded-mtext">Job Search</span>
                    <span class="pcoded-badge label label-danger">NEW</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="job-card-view.html" data-i18n="nav.job-search.card-view">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Card View</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="job-details.html" data-i18n="nav.job-search.job-detailed">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Job Detailed</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="job-find.html" data-i18n="nav.job-search.job-find">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Job Find</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="job-panel-view.html" data-i18n="nav.job-search.job-panel-view">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Job Panel View</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.extension" menu-title-theme="theme5" >Extension</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu ">
                <a href="javascript:void(0)" data-i18n="nav.editor.main">
                    <span class="pcoded-micon"><i class="ti-pencil-alt"></i></span>
                    <span class="pcoded-mtext">Editor</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="ck-editor.html" data-i18n="nav.editor.ck-editor">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">CK-Editor</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="wysiwyg-editor.html" data-i18n="nav.editor.wysiwyg-editor">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">WYSIWYG Editor</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="ace-editor.html" data-i18n="nav.editor.ace-editor">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Ace Editor</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="summernote.html" data-i18n="nav.editor.summer-note-editor">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Summer Note Editor</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="long-press-editor.html" data-i18n="nav.editor.long-press-editor">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Long Press Editor</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                </ul>
            </li>
        </ul>>
        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu ">
                <a href="javascript:void(0)" data-i18n="nav.invoice.main">
                    <span class="pcoded-micon"><i class="ti-layout-media-right"></i></span>
                    <span class="pcoded-mtext">Invoice</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="invoice.html" data-i18n="nav.invoice.invoice">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Invoice</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="invoice-summary.html" data-i18n="nav.invoice.invoice-summery">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Invoice Summary</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="invoice-list.html" data-i18n="nav.invoice.invoice-list">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Invoice List</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="pcoded-hasmenu ">
                <a href="javascript:void(0)" data-i18n="nav.event-calendar.main">
                    <span class="pcoded-micon"><i class="ti-calendar"></i></span>
                    <span class="pcoded-mtext">Event Calendar</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="event-full-calender.html" data-i18n="nav.full-calendar.full-calendar">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Full Calendar</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="event-clndr.html" data-i18n="nav.clnder.clnder">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">CLNDER</span>
                            <span class="pcoded-badge label label-info">NEW</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="">
                <a href="image-crop.html" data-i18n="nav.image-cropper.main">
                    <span class="pcoded-micon"><i class="ti-cut"></i></span>
                    <span class="pcoded-mtext">Image Cropper</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="file-upload.html" data-i18n="nav.file-upload.main">
                    <span class="pcoded-micon"><i class="ti-cloud-up"></i></span>
                    <span class="pcoded-mtext">File Upload</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="pcoded-hasmenu ">
                <a href="javascript:void(0)" data-i18n="nav.internationalize.main">
                    <span class="pcoded-micon"><i class="ti-world"></i></span>
                    <span class="pcoded-mtext">Internationalize</span>
                    <span class="pcoded-badge label label-danger">HOT</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="internationalization/internationalization-after-init.html" data-i18n="nav.internationalize.after-init">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">After Init</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="internationalization/internationalization-fallback.html" data-i18n="nav.internationalize.fallback">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Fallback</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="internationalization/internationalization-on-init.html" data-i18n="nav.internationalize.on-int">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">On Init</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="internationalization/internationalization-resources.html" data-i18n="nav.internationalize.resources">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Resources</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="internationalization/internationalization-xhr-backend.html" data-i18n="nav.internationalize.xhr-backend">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">XHR Backend</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="">
                <a href="change-loges.html" data-i18n="nav.change-loges.main">
                    <span class="pcoded-micon"><i class="ti-list"></i></span>
                    <span class="pcoded-mtext">Change Loges</span>
                    <span class="pcoded-badge label label-warning">1.0</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.other" menu-title-theme="theme5" >Other</div>
        
        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.support" menu-title-theme="theme5" >Support</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="">
                <a href="http://flatable.phoenixcoded.net/doc" data-i18n="nav.documentation.main" target="_blank">
                    <span class="pcoded-micon"><i class="ti-file"></i></span>
                    <span class="pcoded-mtext">Documentation</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="https://support.phoenixcoded.net/#/home" target="_blank" data-i18n="nav.submit-issue.main">
                    <span class="pcoded-micon"><i class="ti-layout-list-post"></i></span>
                    <span class="pcoded-mtext">Submit Issue</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul> -->
    </div>
</nav>