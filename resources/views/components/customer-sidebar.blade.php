<div class="sidebar-menu">
    <div class="sidebar-header">
        <div>
            <h2 style="color: #ffff">Workspaces</h2>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">
                    <li @if (Request::is('customer/Exploration')) class="active" @endif>
                        <a href="{{ route('customer.home') }}" aria-expanded="true"><i
                                class="ti-dashboard"></i><span>Exploration</span></a>
                    </li>
                    <li @if (Request::is('customer/index')) class="active" @endif>
                        <a href="{{ route('my-workspaces.index') }}" aria-expanded="true">
                            <i class="ti-list-ol"></i>
                            <span>My WorkSpaces</span></a>
                    </li>
                    <li @if (Request::is('my-tainants')) class="active" @endif>
                        <a href="{{ route('my-tainants.index') }}" aria-expanded="true">
                            <i class="ti-list-ol"></i>
                            <span>My Tainants</span></a>
                    </li>
                    <li @if (Request::is('customer/setting')) class="active" @endif>
                        <a href="{{ route('customer.setting', Auth::guard(session('guardName'))->user()->id) }}" aria-expanded="true">
                            <i class="ti-settings"></i>
                            <span>settings</span></a>
                    </li>


                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- sidebar menu area end -->
