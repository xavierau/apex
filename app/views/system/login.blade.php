<!DOCTYPE html>
<html lang="en">
  <head>
    @include('system.partials.head')
  </head>
  <body>
      <div id="wrapper">
        <br/>
        <br/>
        <div class="col-sm-4 col-sm-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Login</h3>
                </div>
                <div class="panel-body">
                @if (count($errors))
                    <div class="alert alert-danger" role="alert">
                      <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                      <span class="sr-only">Error:</span>
                      {{$errors->first()}}
                    </div>
                @endif
                {{Form::open()}}
                     {{-- Email Form Input--}}
                     <div class="form-group">
                         {{Form::label("email","Email:")}}
                         {{Form::email("email",null,["class"=>"form-control", "autofocus"])}}
                     </div>
                     {{-- Password Form Input--}}
                     <div class="form-group">
                         {{Form::label("password","Password:")}}
                         {{Form::password("password",["class"=>"form-control"])}}
                     </div>
                     {{Form::submit('Login',["class"=>"btn btn-primary btn-block", "name"=>"submit"])}}
                {{Form::close()}}
                </div>
            </div>

        </div>
      </div>
  </body>
</html>

