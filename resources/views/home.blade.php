<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    
    
    /* Remove the jumbotron's default bottom margin */ 
    .jumbotron {
      margin-bottom: 0;
  }

  /* Add a gray background color and some padding to the footer */
    /*footer {
      background-color: #f2f2f2;
      padding: 25px;
  }*/
  <style type='text/css'>
    #parentMenu {
      display: block;
      top: 0;
  }
  /* Helps position submenu */
  .dropdown-submenu {
      position: relative;
  }
  /* Menus under the submenu should show up on the right of the parent */
  .dropdown-submenu>.dropdown-menu {
      top: 0;
      left: 100%;
      margin-top: -6px;
      margin-left: -1px;
      -webkit-border-radius: 0 6px 6px 6px;
      -moz-border-radius: 0 6px 6px 6px;
      border-radius: 0 6px 6px 6px;
  }
  /* Make submenu visible when hovering on link */
  .dropdown-submenu:hover>.dropdown-menu {
      display: block;
  }
  /* Add carot to submenu links */
  .dropdown-submenu>a:after {
      display: block;
      float: right;
      /*simple */
      content: "?";
      color: #cccccc;
      /* looks a little better */
      content: " ";
      width: 0;
      height: 0;
      border-color: transparent;
      border-style: solid;
      border-width: 5px 0 5px 5px;
      border-left-color: #cccccc;
      margin-top: 5px;
      margin-right: -10px;
  }
  /* Change carot color on hover */
  .dropdown-submenu:hover>a:after {
      border-left-color: #ffffff;
  }
</style>

</style>
</head>
<body>
<div>
    <div class="jumbotron">
      <div class="container text-center">
        <h1>Online Store</h1>      
        <p>Mission, Vission & Values</p>
    </div>
</div>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Ecommerce Site</a>
  </div>
  <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Electronics <span class="caret"></span></a>
          <ul class="dropdown-menu">
           <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Televisions</a>

            <ul class="dropdown-menu sub-menu">
                

                <li class="kopie"><a href="#">Full HD Tv</a></li>
                <li><a href="#">Smart TV</a></li>
                <li><a href="#">Aries LED TV</a></li>


            </ul>
        </li>
         <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Mobiles</a>

            <ul class="dropdown-menu sub-menu">
                <li class="kopie"><a href="#">Samsung</a></li>
                <li><a href="#">Motorola</a></li>
                <li><a href="#">Htc</a></li>
                <li><a href="#">Micromax</a></li>


            </ul>

</li>

         <ul class="dropdown-menu">
           <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Televisions</a>

            <ul class="dropdown-menu sub-menu">
                <li class="kopie"><a href="#">Full HD Tv</a></li>
                <li><a href="#">Smart TV</a></li>
                <li><a href="#">Aries LED TV</a></li>


            </ul>
        </li>
         <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Tablets</a></li>        
         <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Cameras</a></li>
    </li>
    
    
  

</ul>           
</li>

<li><a href="#">Women Fashion</a></li> 
<li><a href="#">Men Fashion</a></li> 


<li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Home & Kitchen <span class="caret"></span></a>
  <ul class="dropdown-menu">

      <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Mitesh 1</a>
         <ul class="dropdown-menu sub-menu">
            <li class="kopie"><a href="#">Dropdown Link 4</a></li>
            <li><a href="#">Dropdown Submenu Link 4.1</a></li>
            <li><a href="#">Dropdown Submenu Link 4.2</a></li>
            <li><a href="#">Dropdown Submenu Link 4.3</a></li>
            <li><a href="#">Dropdown Submenu Link 4.4</a></li>

        </ul>
    </li>
    <li class="dropdown dropdown-submenu"><a href="#">Mitesh</a></li>

</ul>           
</li>



</ul>

</div>
</nav>
</div>
</body>
</html>

