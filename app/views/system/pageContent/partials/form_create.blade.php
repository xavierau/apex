<div class="form-group">
    {{Form::label('identifier')}}
    {{Form::text('identifier',$pageContent->first()->identifier,['class'=>'form-control','readonly' ])}}
</div>

<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
    @foreach($languages as $language)
        @if(Cache::get('setting_default_language') == $language->id)
            <li class="active"><a href="#{{$language->iso_code}}" data-toggle="tab">{{$language->language}}</a></li>
        @else
            <li><a href="#{{$language->iso_code}}" data-toggle="tab">{{$language->language}}</a></li>
        @endif
    @endforeach
</ul>



<div class="tab-content" id="my-tab-content">
    @foreach($languages as $language)
        <?php $i = 0 ?>
        @foreach($pageContent as $content)
            @if(!isset($content->lang_id))
                @if($i==0)
                    @if(Cache::get('setting_default_language') == $language->id)
                        <div class="active tab-pane" id="{{$language->iso_code}}">
                            @else
                                <div class="tab-pane" id="{{$language->iso_code}}">
                                    @endif
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4>Content</h4>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="form-group">
                                                        {{Form::label("title[$language->id]", "Title ".$language->language)}}
                                                        {{Form::text("title[$language->id]",null,['class'=>'form-control'])}}
                                                    </div>
                                                    <div class="form-group">
                                                        {{Form::label("content[$language->id]", "Content ".$language->language)}}
                                                        {{Form::textarea("content[$language->id]",null,['class'=>'form-control'])}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4>Page Properties</h4>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="form-group">
                                                        {{Form::label("status[$language->id]", "Status ".$language->language)}}
                                                        {{Form::select("status[$language->id]",["published"=>"Published", "draft"=>"Draft"],null,['class'=>'form-control'])}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <?php $i = 1 ?>
                            @endif
                            @elseif($language->id == $content->lang_id)
                                @if(Cache::get('setting_default_language') == $language->id)
                                    <div class="active tab-pane" id="{{$language->iso_code}}">
                                        @else
                                            <div class="tab-pane" id="{{$language->iso_code}}">
                                                @endif
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4>Content</h4>
                                                            </div>
                                                            <div class="panel-body">
                                                                <div class="form-group">
                                                                    {{Form::label("title[$language->id]", "Title ".$language->language)}}
                                                                    {{Form::text("title[$language->id]",$content->title,['class'=>'form-control'])}}
                                                                </div>
                                                                <div class="form-group">
                                                                    {{Form::label("content[$language->id]", "Content ".$language->language)}}
                                                                    {{Form::textarea("content[$language->id]",$content->content,['class'=>'form-control'])}}
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4>Page Properties</h4>
                                                            </div>
                                                            <div class="panel-body">
                                                                <div class="form-group">
                                                                    {{Form::label("status[$language->id]", "Status ".$language->language)}}
                                                                    {{Form::select("status[$language->id]",["published"=>"Published", "draft"=>"Draft"],$content->status,['class'=>'form-control'])}}
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>


                                            </div>
                                            <?php $i = 1 ?>
                                        @endif
                                        @endforeach
                                        @endforeach

                                    </div>


                                    {{Form::submit('Update',['class'=>'btn btn-success btn-block'])}}
                                    <a href="{{route($routePrefix.".index")}}?page={{$pageContent[0]->page->url}}" class="btn-primary btn btn-block">Back</a>