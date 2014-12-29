@extends('system.layouts.default')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">All Supported Pages</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table class="table">
                        <thead>
                            <th>Language</th>
                            <th>Default</th>
                            <th>Active</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach($allLanguages as $language)
                                <tr>
                                    <td>{{$language->language}}</td>
                                    <td class="default" data_id="{{$language->id}}">{{$language->default == 1 ? "Default":"-"}}</td>
                                    <td class="status">{{$language->active == 1 ? "Active":"NOT"}}</td>
                                    <td class="actions">
                                        @if($language->active == 1 && $language->default == null)
                                            <button class="btn btn-danger deactivation" data_id="{{$language->id}}">Deactivate</button>
                                        @elseif($language->active == 0 && $language->default == null)
                                            <button class="btn btn-primary activation" data_id="{{$language->id}}">Activate</button>
                                        @endif
                                        @if($language->active == 1 && $language->default == 0)
                                            <button class="btn btn-info set-default" data_id="{{$language->id}}">Set As Default</button>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

@section('script')
    <script>
        $('tbody').on('click','.activation',function(){
            var object = $(this);
            var id = object.attr('data_id');
            var call = ajaxPostCall(id, "{{route('language activation')}}")
            call.done(function(data){
                if(data.response == true)
                {
                    object.removeClass("btn-primary activation").addClass("btn-danger deactivation").html("Deactivate");
                    object.parent('td').append('<button class="btn btn-info set-default" data_id="'+id+'">Set As Default</button>');
                    object.parent('td').prev('.status').html('Active');
                }
                console.log(data.data);
            });
        });

        $('tbody').on('click','.deactivation',function(){
            var object = $(this);
            var id = object.attr('data_id');
            var call = ajaxPostCall(id, "{{route('language deactivation')}}");
            call.done(function(data){
                        if(data.response == true)
                        {
                            object.removeClass("btn-danger deactivation").addClass("btn-primary activation").html("Activate");
                            object.siblings(".set-default").remove();
                            object.parent('td').prev('.status').html('NOT');
                            console.log(data.data);
                        }
                    });
        });

        $('tbody').on('click','.set-default',function(){
            var object = $(this);
            var id = object.attr('data_id');
            var call = ajaxPostCall(id, "{{route('language setdefault')}}");
            call.done(function(data){
                        if(data.response == true)
                        {
                            $.each($('.default'),function(){
                                if($(this).html() == 'Default')
                                {
                                    var target = $(this);
                                    var target_parent = $(this).siblings('td.actions');
                                    var data_id = target.attr('data_id');

                                    target.html('-');
                                    target_parent.append('<button class="btn btn-danger deactivation" data_id="'+data_id+'">Deactivate</button>');
                                    target_parent.append('<button class="btn btn-info set-default" data_id="'+data_id+'">Set As Default</button>');
                                }
                            });
                            object.parent('td').siblings('.default').html('Default');
                            object.parent('td').html("");

                        }
                    });
        });

        function ajaxPostCall(id, url){
            return $.ajax({
                type: 'post',
                data: {id : id},
                url: url,
                beforeSend: function(request) {
                    return request.setRequestHeader('X-CSRF-Token', $("meta[name='token']").attr('content'));
                }
            })
        }

    </script>
@stop