
<html>
    <title>Sign Up</title>
    <?php
include'header.php';
?>
 <head>
  
	<link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="index.css">          
 </head><br>
<div class="container">
          <div class="col-xs-offset-4 col-xs-4">
               <div class="panel panel-info">
                   <div class="panel-heading">
                       <h4>Sign Up</h4>
                       <h6>Sign Up to Make a Purchase</h6>
                   </div> 
                   <div class="panel-body">
                       <form method="POST" action="Signup_script.php">
                           <div class="form-group">
                               <input type="text" name="name" placeholder="Enter your Name" class="form-control">
                           </div>
                           <div class="form-group">
                               <input type="email" name="email" placeholder="Enter your E-mail" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                           </div>
                           <div class="form-group">
                               <input type="password" name="password" placeholder="Enter your Password" class="form-control" pattern=".{6,}" required>
                           </div>
                           <div class="form-group">
                               <input type="name" name="contact" placeholder="Enter your Contact Number" class="form-control" pattern=".{6,}" required>
                           </div>
                           <div class="form-group">
                               <input type="text" name="city" class="form-control" placeholder="Enter your City">
                           </div>
                           <div class="form-group">
                               <input type="text" name="address" class="form-control" placeholder="Enter your Address">
                           </div>
                           <div class="form-group">
                                            <button type="submit" value="registration_submit" class="btn-info">Submit</button>
                           </div>
                            </form>
			</div>      
                   </div>
                   </div>
          </div>
<?php
include 'footer.php';
?>
</html>