 <!-- /.navbar-header -->
<ul class="nav navbar-top-links navbar-right">
    @if(count($messages)>0)
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-messages">
            @foreach($messages as $message)
                <li>
                    <a href="{{route("admin.messages.show", $message->id)}}">
                        <div>
                            <strong>{{$message->name}}</strong>
                        <span class="pull-right text-muted">
                            <em>{{date("jS F, Y", strtotime($message->created_at)) }}</em>
                        </span>
                        </div>
                        <div class="message_content" style="max-height:50px; overflow: hidden">{{$message->content}}</div>
                    </a>
                </li>
                <li class="divider"></li>
            @endforeach
        </ul>
        <!-- /.dropdown-messages -->
    </li>
    <!-- /.dropdown -->
    @endif
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-user">
            <li><a href="{{route('admin.users.edit', 1)}}"><i class="fa fa-user fa-fw"></i> Profile</a>
            </li>
            <li class="divider"></li>
            <li><a href="{{route('logout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
            </li>
        </ul>
        <!-- /.dropdown-user -->
    </li>
    <!-- /.dropdown -->
</ul>
<!-- /.navbar-top-links -->