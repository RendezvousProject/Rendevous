<!-- sidebar menu area start -->
<div class="sidebar-menu">
    <div class="sidebar-header">
        <div>
            <h2 style="color: #ffff">ًWorkspaces</h2>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">

                    <li  @if (Request::is('admin')) class="active" @endif>
                        <a href="{{ route('admin.home') }}" aria-expanded="true">
                            <i class="ti-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li @if (Request::is('admin/company') || Request::is('admin/company/create') )   class="active"  @endif >
                        <a href="{{route('company.index')}}" aria-expanded="true">
                            <i class="ti-list-ol"></i>
                            <span>Companies</span>
                        </a>
                    </li>

                    <li @if (Request::is('admin/customer') || Request::is('admin/customer/create')
                    || Request::is('admin/customer/*/edit')
                     ) class="active"  @endif>
                        <a href="{{route('customer.index')}}" aria-expanded="true">
                            <i class="ti-list-ol"></i>
                            <span>Customers</span>
                        </a>
                    </li>
                    <li @if (Request::is('admin/workspace')) class="active"  @endif>
                        <a href="{{route('admin.workspace.index')}}" aria-expanded="true">
                            <i class="ti-list-ol"></i></i>
                            <span>Workspaces</span>
                        </a>
                    </li>
                    <li @if (Request::is('admin/settings')) class="active"  @endif>
                        <a href="{{route('admin.setting.index')}}" aria-expanded="true">
                            <i class="ti-settings"></i>
                            <span>Setting</span>
                        </a>
                    </li>


                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- sidebar menu area end -->
