<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
        <div class="app-sidebar__user">
                <a href="{{admin_route('doctors.show', currentUser()->id)}}">
                        <img class="app-sidebar__user-avatar img-fluid img-thumbnail"
                                src="{{currentUser()->getAvatar()}}" width="50" height="50"
                                alt="{{currentUser()->username}}" title="{{currentUser()->username}}">
                </a>
                <div>
                        <p class="app-sidebar__user-name">
                                <a
                                        href="{{admin_route('doctors.show', currentUser()->id)}}">{{ucwords(currentUser()->name)}}</a>
                        </p>
                        <p class="app-sidebar__user-designation">
                                {{currentUser()->email}}
                        </p>
                </div>
        </div>
        <hr>
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
                {{-- Doctors --}}
                <li class="treeview">
                        <a class="app-menu__item {{is_current_route('doctors')? 'active':''}}"
                                href="{{admin_route('doctors.index')}}">
                                <i class="fas fa-user-md app-menu__icon"></i>
                                <span class="app-menu__label">Doctors</span>
                        </a>
                </li>
                {{-- Inventory --}}
                <li class="treeview">
                        <a class="app-menu__item {{is_current_route('inventory')? 'active':''}}" href="javascript:;"
                                data-toggle="treeview">
                                <i class="fas fa-warehouse app-menu__icon"></i>
                                <span class="app-menu__label">Inventory</span>
                                <i class="treeview-indicator fa fa-angle-right"></i>
                        </a>
                        <ul class="treeview-menu">
                                <li class="treeview">
                                        <a class="treeview-item" href="{{admin_route('stocks.index')}}">
                                                <i class="fas fa-dolly-flatbed icon"></i> Stocks
                                        </a>
                                </li>

                        </ul>
                </li>
                {{-- Medicines --}}
                <li>
                        <a class="app-menu__item {{is_current_route('medicines')? 'active':''}}"
                                href="{{admin_route('medicines.index')}}">
                                <i class="fas fa-capsules app-menu__icon"></i>
                                <span class="app-menu__label">Medicines</span>
                        </a>
                </li>
                {{-- Settings --}}
                <li>
                        <a class="app-menu__item {{is_current_route('settings')? 'active':''}}"
                                href="{{admin_route('settings.index')}}">
                                <i class="fas fa-cog app-menu__icon"></i>
                                <span class="app-menu__label">Settings</span>
                        </a>
                </li>
                {{-- Logout --}}
                <li>
                        <a class="app-menu__item" href="javascript:;"
                                onclick="document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt app-menu__icon"></i> Logout
                        </a>
                        <form action="{{route('logout')}}" class="d-none" id="logout-form" method="POST">
                                @csrf
                        </form>
                </li>
        </ul>
</aside>