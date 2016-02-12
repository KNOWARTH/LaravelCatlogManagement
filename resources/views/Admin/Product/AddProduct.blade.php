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
    
 
    <script>
  $(document).ready(function () { 
   $('#category').on('change',function(e){
    console.log(e);
    var c_id = e.target.value;
            //console.log(cat_id);
            //ajax
           //

            $.get('/ajaxsubcat1?c_id='+ c_id,function(data){
                //success data
               //console.log(data);
               var subcat =  $('#subcategory').empty();

               //subcat.append('<option value ="0">dfd</option>');
               //var test="mitesh";
               subcat.append('<option value ="0">Select SubCategory</option>');
               $.each(data,function(cid,cat_name){
                //var option = $('<option/>', {id:create, value:subcatObj});
                subcat.append('<option value ="'+cid+'">' + cat_name + '</option>');
               });
           });
        });
  });
 </script>
 <script type="text/javascript">
 function add()
 {





    /* var category = document.getElementById("category");
    var subcategory = document.getElementById("subcategory");
   
    var valuecat = category.options[category.selectedIndex].value;
    var textcat = category.options[category.selectedIndex].text;

    var valuesubcat = subcategory.options[subcategory.selectedIndex].value;
    var textsubcat = subcategory.options[subcategory.selectedIndex].text;

    var multext= textcat +','+ textsubcat;
    var mulvalue= valuecat.append(valuesubcat);
    alert(mulvalue);

    document.getElementById("p_cat_pro").value = multext;

    var tt=document.getElementById('hiddenrop').value = mulvalue;
*/
 }
 

$(function () {
    $('#button').on('click', function () {
     
     var text = $('#category option:selected').text();
     var text1 = $('#subcategory option:selected').text();
     var tt=text+text1;       
      $('#p_cat_pro').val( $('#p_cat_pro').val() + '-' + tt);
       


        
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
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/insertProduct') }}">
                        {!! csrf_field() !!}

                        <div>
                            <label class="col-md-4 control-label">Product Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="p_name">

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
                                <input type="text" class="form-control" name="p_image" >

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
                                <textarea class="field" name="p_desc" class="form-control" cols="50" rows="10"></textarea>

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
                                <input type="text" class="form-control" name="p_price">
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
                               

                                <select name="p_category_id" class="form-control" id="category" >
                                  <option selected="selected">Select Cat</option>
                                  <?php
                                  foreach($results as $name) { ?>
                                  <option value="<?= $name['c_id'] ?>"><?= $name['c_name'] ?></option>
                                  <?php
                              } ?>
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
                                <option selected="selected" value="">Select SubCategory
                                </option>

                                    <option value=""></option>
                                </select>


                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">All Category name</label>

                        <input type="text" class="form-control" name="p_cat_pro" id="p_cat_pro" >
                                   {!! csrf_field() !!}
                        <input type="hidden" name="selected_categories" id="hiddenrop">
                        <button type="button" class="btn btn-primary" id="button">
                           <i class="fa fa-btn fa-user"></i>Add Category
                        </button>

                        
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

 