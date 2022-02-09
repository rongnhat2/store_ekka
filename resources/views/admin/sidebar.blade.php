<div class="vertical-menu">
    <div data-simplebar class="h-100">

        <div class="navbar-brand-box">
            <a href="/" class="logo">
                <i class="mdi mdi-alpha-h-circle"></i>
                <span>
                    Ekka
                </span>
            </a>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route("admin.statistic") }}" class="waves-effect">
                        <i class="feather-airplay"></i>
                        <span>Thống kê</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route("admin.category.index") }}" class=" waves-effect">
                        <i class=" feather-list "></i>
                        <span>Danh mục</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route("admin.product.index") }}" class=" waves-effect">
                        <i class=" feather-package "></i>
                        <span>Sản phẩm</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route("admin.order.index") }}" class=" waves-effect">
                        <i class="feather-truck"></i>
                        <span>Đơn hàng</span>
                    </a>
                </li>
                
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>