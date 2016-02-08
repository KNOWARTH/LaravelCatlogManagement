<!DOCTYPE html>
<html>
<head>
  <title></title>
  @include('Admin/AdminHeader')
</head>
<body>
		
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Category</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/insert_category') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Category Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="c_name" value="{{ old('name') }}">

                               
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Category Image</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="c_image" value="{{ old('email') }}">

                               
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Category Description</label>

                            <div class="col-md-6">
                                <textarea class="field" name="c_desc" class="form-control" cols="50" rows="10"></textarea>

                               
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Category Is Parent</label>

                            <div class="col-md-6">
                                <input name="c_is_parent" type="checkbox" >

                               
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Category Parent</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="c_parent">

                               
                            </div>
                        </div>

                       

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>