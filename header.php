<html>
    <head>
        <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-wiwidth, initial-scale=1">
    </head>
    <style>
        marquee
        {
           color:white;
        }
    </style>
</html>
<div class="navbar-inverse">
     <div class="container">
         <div class="navbar-header">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myimage">
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class=""icon-bar></span>
             </button>
             <a class="navbar-brand" href="index.php">Aeon Store</a>
         </div>      
         <div class="collapse navbar-collapse" id="myimage">
             <ul class="nav navbar-nav navbar-right">
                 <?php
                  if (isset($_SESSION['email']))
                      {
                 ?>
                 <li><a href ="cart_page.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
 <li><a href ="settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
 <li><a href = "logout.php"><span class = "glyphicon glyphicon-log-in"></span>Logout</a></li>
              <?php
              } else {
 ?>
 <li><a href="Signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
 <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
 <?php
 }
 ?>
 </ul>
 </div>
 </div>
    <marquee behavior="scroll" direction="left" scrollamount="7">Season Sale Flat 50% OFF on Cameras, Watches, Shirts ,Shoes and Many more Products Starting Sale from end of August Stay Tuned With us || Big Million Day September 15, 2019</marquee>
</div>
</html>