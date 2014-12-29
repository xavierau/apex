
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Contents</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table class="table">
                        <thead>
                        <th>Title</th>
                        <th>Action</th>
                        </thead>
                        <tbody>
                        @foreach($structurals as $structural)
                            <tr>
                                <td>
                                    {{$structural->title}}
                                </td>
                                <td>
                                    <a href="{{route('admin.pageContent.edit',$structural->id)}}" class="btn btn-info"> Edit</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
