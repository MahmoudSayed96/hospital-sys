<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
        <div class="app-sidebar__user">
                <img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg"
                        alt="User Image">
                <div>
                        <p class="app-sidebar__user-name">John Doe</p>
                        <p class="app-sidebar__user-designation">Frontend Developer</p>
                </div>
        </div>
        <ul class="app-menu">
                {{-- Dashboard --}}
                <li>
                        <a class="app-menu__item" href="{{admin_route()}}">
                                <i class="fas fa-tachometer-alt app-menu__icon"></i>
                                <span class="app-menu__label">Dashboard</span>
                        </a>
                </li>
                {{-- Departments --}}
                <li>
                        <a class="app-menu__item {{is_current_route('departments')? 'active':''}}"
                                href="{{admin_route('departments.index')}}">
                                <i class="fas fa-hospital-user app-menu__icon"></i>
                                <span class="app-menu__label">Departments</span>
                        </a>
                </li>
                {{-- Specialists --}}
                <li>
                        <a class="app-menu__item {{is_current_route('specialists')? 'active':''}}"
                                href="{{admin_route('specialists.index')}}">
                                <i class="fas fa-stethoscope app-menu__icon"></i>
                                <span class="app-menu__label">Specialists</span>
                        </a>
                </li>

                {{-- Settings --}}
                <li class="treeview">
                        <a class="app-menu__item {{is_current_route('settings')? 'active':''}}"
                                href="{{admin_route('settings.index')}}">
                                <i class="fas fa-cog app-menu__icon"></i>
                                <span class="app-menu__label">Settings</span>
                        </a>
                </li>
                {{-- Tree --}}
                {{-- <li class="treeview">
                        <a class="app-menu__item {{is_current_route('settings')? 'active':''}}" href="javascript:;"
                data-toggle="treeview">
                <i class="fas fa-cog app-menu__icon"></i>
                <span class="app-menu__label">Settings</span>
                <i class="treeview-indicator fa fa-angle-right"></i>
                </a>
                <ul class="treeview-menu">
                        <li>
                                <a class="treeview-item" href="{{admin_route('settings.index')}}">
                                        <i class="far fa-circle icon"></i> Site
                                </a>
                        </li>
                </ul>
                </li> --}}
        </ul>
</aside>