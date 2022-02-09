<div class="side-nav">
    <div class="side-nav-inner">
        <ul class="side-nav-menu scrollable">
            <li class="nav-item dropdown message-group">
                <a class="dropdown-toggle message message-href-control" href=" ">
                    <span class="icon-holder">
                        <i class="anticon anticon-mail"></i>
                    </span>
                    <span class="title">Tin nhắn</span>
                    <span class="count-badge-message badge badge-pill badge-geekblue">0</span>
                </a>
            </li>
            <li class="nav-item dropdown manager-group">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-appstore"></i>
                    </span>
                    <span class="title">Quản lí</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu"> 
                    <li class="category"> <a href="{{ route('admin.category.index') }}">Danh mục</a> </li>
                    <li class="product"> <a href="{{ route('admin.product.index') }}">Sản phẩm</a> </li>
                </ul>
            </li>
            <li class="nav-item dropdown language-group">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-setting"></i>
                    </span>
                    <span class="title">Cài đặt</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu"> 
                </ul>
            </li>
        </ul>
    </div>
</div>