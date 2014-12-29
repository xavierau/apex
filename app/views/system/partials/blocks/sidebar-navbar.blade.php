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
            {{--<li>--}}
                {{--<a href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a>--}}
            {{--</li>--}}
            <li>
                <a href="{{route('admin.pages.index')}}"><i class="fa fa-file-o"></i> Pages</a>
            </li>
            <li>
                <a href="{{route('admin.pageContent.index')}}"><i class="fa fa-file-text-o"></i> Contents <span class="fa arrow"></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('admin.pageContent.index',['page'=>'immigration'])}}">Immigration </a>
                    </li>
                    <li>
                        <a href="{{route('admin.pageContent.index',['page'=>'news'])}}, 'news">News </a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="{{route('admin.messages.index')}}"><i class="fa fa-comment-o"></i> Messages</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-cog"></i> Settings <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('admin.languages.index')}}">Languages</a>
                    </li>
                    {{--<li>--}}
                        {{--<a href="{{route('admin.translations.index')}}">Translation</a>--}}
                    {{--</li>--}}
                </ul>
                <!-- /.nav-second-level -->
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->