<!-- sidebar menu area start -->
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
                    <li @if (Request::is('owner')) class="active" @endif>
                        <a href="{{ route('owner.home') }}" aria-expanded="true">
                            <i class="ti-dashboard"></i>
                            <span>dashboard</span></a>
                    </li>
                    <li @if (Request::is('owner/workspace')) class="active" @endif>
                        <a href="{{ route('workspace.index') }}" aria-expanded="true">
                            <i class="ti-list-ol"></i>
                            <span>WorkSpaces List</span>
                        </a>
                    </li>
                    <li @if (Request::is('owner/workspace/create')) class="active" @endif>
                        <a href="{{ route('workspace.create') }}" aria-expanded="true"><i
                                class="ti-plus"></i><span>add WorkSpace</span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i
                                class="ti-calendar"></i><span>Tenants List</span></a>
                    </li>
                    <li @if (Request::is('livewire/calender')) class="active" @endif>
                        <a href="{{ route('calendar.index') }}" aria-expanded="true"><i
                                class="ti-calendar"></i><span>calender</span></a>
                    </li>
                    <li @if (Request::is('owner/workspace/setting')) class="active" @endif>
                        <a href="{{ route('owner.setting', Auth::guard(session('guardName'))->user()->id) }}" aria-expanded="true"><i
                                class="ti-settings"></i><span>settings</span></a>
                    </li>


                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- sidebar menu area end -->
