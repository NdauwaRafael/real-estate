<!doctype html>
<html lang="en">
   <head>
   <title>Real-Estate System</title>
     <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.css">
     <link rel="stylesheet" href="<?=base_url()?>assets/css/home-custom.css">
    
    <script type="text/javascript" src="<?=base_url()?>assets/js/jquery.js"></script>
     <script type="text/javascript" src="<?=base_url()?>assets/js/bootstrap.js"></script>
   </head>


   <body>
  <header>
  
<nav class="navbar navbar-default">
<div class="container"> 
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Real-Estate Management</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Home <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Trending</a></li>
        <li><a href="#"><span class="lyphicon glyphicon-envelope"></span> Contact-Us</a></li>
        
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-question-sign"></span> FAQS</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?=site_url('dashboard/logout')?>">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->

</div>  
</nav>  
  
  </header> 
  <div class="home-bg">
  <div class="container">