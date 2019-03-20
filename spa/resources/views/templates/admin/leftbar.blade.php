
<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="{{ request()->is('admin') ? 'active' : '' }}"><a href="{{route('admin.index.index')}}"><i class="icon icon-home"></i> <span>Trang chủ</span></a> </li>
    <li class="{{ request()->is('admin/cat*') ? 'active' : '' }}"> <a href="{{route('admin.category.index')}}"><i class="icon icon-signal"></i> <span>Quản lý danh mục</span></a> </li>
    <li class="{{ request()->is('admin/news*') ? 'active' : '' }}"> <a href="{{route('admin.news.index')}}"><i class="icon icon-inbox"></i> <span>Quản lý tin tức</span></a> </li>
    <li class="{{ request()->is('admin/package*') ? 'active' : '' }}"> <a href="{{ route('admin.catpackage.index') }}"><i class="icon icon-inbox"></i> <span>Quản lý danh mục dịch vụ</span></a></li>
    <li class="{{ request()->is('admin/service*') ? 'active' : '' }}"><a href="{{ route('admin.service.index') }}"><i class="icon icon-th"></i> <span>Quản lý dịch vụ</span></a></li>
    <li class="{{ request()->is('admin/user*') ? 'active' : '' }}"><a href="{{ route('admin.user.index') }}"><i class="icon icon-user"></i> <span>Quản lý admin</span></a></li>
    <li class="{{ request()->is('admin/contact*') ? 'active' : '' }}"><a href="{{ route('admin.contact.index') }}"><i class="icon icon-fullscreen"></i> <span>Quản lý liên hệ</span></a></li>
  </ul>
</div>
<!--sidebar-menu-->