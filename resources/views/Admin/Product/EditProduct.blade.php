 <!DOCTYPE html>
<html>
<head>

  <title></title>
 

  @include('Admin/AdminHeader')
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/css/bootstrap.min.css"
        rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <link href="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/css/bootstrap-multiselect.css"
        rel="stylesheet" type="text/css" />
    <script src="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/js/bootstrap-multiselect.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        $(function () {
            $('#lstFruits').multiselect({
                includeSelectAllOption: true
            });
            $('#btnSelected').click(function () {
                var selected = $("#lstFruits option:selected");
                var message = "";
                selected.each(function () {
                    message += $(this).text() + " " + $(this).val() + "\n";
                });
                alert(message);
            });
        });
    </script>
 
    <script>
  $(document).ready(function () { 
   $('#category').on('change',function(e){
    console.log(e);
    var c_id = e.target.value;
            //console.log(cat_id);
            //ajax
           //

            $.get('/ajaxsubcat?c_id='+ c_id,function(data){
                //success data
               //console.log(data);
               var subcat =  $('#subcategory').empty();

               //subcat.append('<option value ="0">dfd</option>');
               //var test="mitesh";
               subcat.append('<option value ="'+c_id+'">Select SubCategory</option>');
               $.each(data,function(create,subcatObj){
                //var option = $('<option/>', {id:create, value:subcatObj});

                subcat.append('<option value ="'+subcatObj+'">'+subcatObj+'</option>');
               });
           });
        });
  });
 </script>
</head>
<body>
  
    
    
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Category</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/ShowProduct') }}">
                        {!! csrf_field() !!}

                        <div>
                            <label class="col-md-4 control-label">Product Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="p_name" value="{{ $row->p_name }}">

                               <!--  @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Product Image</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="p_image" value="{{ $row->p_image }}">

                                <!-- @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                             --></div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Product Description</label>

                            <div class="col-md-6">

                                <textarea class="field" value="{{ $row->p_desc }}" name="p_desc" class="form-control" cols="50" rows="10" ><?php echo "$row->p_desc"?></textarea>

                               <!--  @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Product Price</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="p_price" value="{{ $row->p_price }}">
<!-- 
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Category</label>

                            <div class="col-md-6">
                               
                                <?php $tt=$row->p_category_id;
                                    //echo $tt;
                                 ?>
                                <select name="p_category_id" class="form-control" id="category" value="{{ $row->p_category_id }}" >
                                  <option selected="selected">Select Cat</option>

                                  <?php
                                        foreach($results as $name) { 
                                             
                                            if($name['c_id'] == $tt)
                                            {
                                                $selected='';
                                                $selected = "selected='selected'";
                                                echo "<option value='".$name['c_id']."'".$selected.">".$name['c_name']."</option>";
                                            }?>
                                             <option value="<?= $name['c_id'] ?>"><?= $name['c_name'] ?>
                                             </option> 
                                                <?php } ?>
                                      
                              
                          </select>


                             
<!-- 
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Sub Parent</label>

                            <div class="col-md-6">
                                <select name="p_category_id" id="subcategory" class="form-control" >
                                <option selected="selected" value="{{ $row->p_category_id }}">Select SubCategory
                                </option>

                                    <option value=""></option>
                                </select>


                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Add Product
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


 