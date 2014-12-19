<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <!-- <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
                </div>
            </li> -->
            <li>
                <a class="active" href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a>
            </li>
            <li>
                <a class="active" href="{{route('admin.pages.index')}}"><i class="fa fa-file-o"></i> Pages</a>
            </li>
            <li>
                <a class="active" href="{{route('admin.menus.index')}}"><i class="fa fa-sitemap"></i> Menus</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-cog"></i> Settings<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('admin.languages.index')}}">Languages</a>
                    </li>
                    <li>
                        <a href="login.html">Login Page</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->