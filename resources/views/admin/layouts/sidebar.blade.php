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
                                <i class="fas fa-bezier-curve app-menu__icon"></i>
                                <span class="app-menu__label">Departments</span>
                        </a>
                </li>

                <li class="treeview">
                        <a class="app-menu__item" href="#" data-toggle="treeview">
                                <i class="fas fa-bezier-curve app-menu__icon"></i>
                                <span class="app-menu__label">Departments</span>
                                <i class="treeview-indicator fa fa-angle-right"></i>
                        </a>
                        <ul class="treeview-menu">
                                <li><a class="treeview-item" href="bootstrap-components.html"><i
                                                        class="icon fa fa-circle-o"></i> Bootstrap Elements</a></li>
                                <li><a class="treeview-item" href="https://fontawesome.com/v4.7.0/icons/"
                                                target="_blank" rel="noopener"><i class="icon fa fa-circle-o"></i> Font
                                                Icons</a></li>
                                <li><a class="treeview-item" href="ui-cards.html"><i class="icon fa fa-circle-o"></i>
                                                Cards</a></li>
                                <li><a class="treeview-item" href="widgets.html"><i class="icon fa fa-circle-o"></i>
                                                Widgets</a></li>
                        </ul>
                </li>
        </ul>
</aside>