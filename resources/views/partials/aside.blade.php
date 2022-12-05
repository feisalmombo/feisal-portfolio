<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    <ul class="sidebar-menu" data-widget="tree">
            <li class="header" style="color: #ffffff">OVERVIEW</li>
        <li class="treeview">
            <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
            <li class="active"><a href="{{url('/home')}}"><i class="fa fa-circle-o"></i> Home</a></li>
            </ul>
        </li>

        @if(Auth::user()->hasRole('developer') || Auth::user()->hasRole('manager'))
        <li class="treeview">
            <a href="#">
                <i class="fa fa-gear"></i>
                <span>Administrator</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ url('admin/user/index') }}"><i class="fa fa-report"></i> Users</a>
                </li>

                <li><a href="{{ url('admin/project/index') }}"><i class="fa fa-report"></i> Projects</a>
                </li>

                <li><a href="{{ url('admin/latestnews/index') }}"><i class="fa fa-report"></i> Latest news</a>
                </li>

                <li><a href="{{ url('admin/skills/index') }}"><i class="fa fa-report"></i> Skills</a>
                </li>

                <li><a href="{{ url('admin/testimonials/index') }}"><i class="fa fa-report"></i> Testimonials</a>
                </li>
            </ul>
        </li>
        @endif

        @if(Auth::user()->hasRole('developer') || Auth::user()->hasRole('manager'))
        <li class="treeview">
            <a href="#">
                <i class="fa fa-gear"></i>
                <span>General Settings</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ url('setting/contact/index') }}"><i class="fa fa-phone"></i> Contacts</a>
                </li>
            </ul>
        </li>
        @endif


        @if(Auth::user()->hasRole('developer') || Auth::user()->hasRole('manager'))
        <li class="treeview">

            <a href="#">
                <i class="fa fa-universal-access"></i> <span>Manage Permissions</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>

            <ul class="treeview-menu">
                <li>
                <a href="{{ url('/settings/manage_users/permissions') }}"><i class="fa fa-circle-o"></i> View Permission</a>
                </li>

                <li>
                <a href="{{ url('/settings/manage_users/permissions/entrust_role') }}"><i class="fa fa-circle-o"></i> Assign Permissions to Role</a>
                </li>

                <li>
                <a href="{{ url('/settings/manage_users/permissions/entrust_user') }}"><i class="fa fa-circle-o"></i> Entrust Permission to User</a>
                </li>
            </ul>
        </li>
        @endif

        @if(Auth::user()->hasRole('developer') || Auth::user()->hasRole('manager'))
        <li class="treeview">
            <a href="#">
                <i class="fa fa-bars"></i> <span>Manage Roles</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li>
                <a href="{{ url('/settings/manage_users/roles') }}"><i class="fa fa-circle-o"></i> View Roles</a>
                </li>

                <li>
                <a href="{{ url('/settings/manage_users/roles/create') }}"><i class="fa fa-circle-o"></i> Entrust Role to User</a>
                </li>
            </ul>
        </li>
        @endif

    </ul>
    </section>
    <!-- /.sidebar -->
    </aside>
