
<html>
     <title>Products</title>
<?php
include 'common.php';
include 'header.php';
include 'check_if_added.php';
?>
         <head>

        <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylsesheet" type="text/css" href="index.css">
        <style>
            //.jumbotron{
//color: ;

//}
            </style>
    </head>
 <div class="container">
<div class="jumbotron">
<h1>Welcome to our Aeon Store!</h1>
<p>We have the best Cameras, Watches, Shirts and Shoes for you. No need to hunt around, We have all in one place."</p>
</div>
<div class="container">
<div class="row">
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
    <img src="1.jpg" alt="camera"  title="Canon EOS 80D" />
<div class="caption">
    <h3>Canon</h3>
    <h6>Price ₹ 73999</h6>
         <?php if (!isset($_SESSION['email']))
               { ?>
            <p><a href="login.php" role="button" class="btn btn-info btn-block">Buy Now</a></p> 
            
              <?php
               } else {
 
              if (check_if_added_to_cart(1)) { 
               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
              } 
              else{
              ?>
              <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-info">Add to cart</a>
             <?php
              }
              }
 ?>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="2.jpg" alt="camera" title="Lumix G95">
<div class="caption">
<h3>Lumix </h3>
<h6>Price ₹ 72990</h6>
         <?php if (!isset($_SESSION['email']))
               { ?>
            <p><a href="login.php" role="button" class="btn btn-info btn-block">Buy Now</a></p>
              <?php
               } else {
              if (check_if_added_to_cart(2)) { 
               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
              } else {
              ?>
              <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-info">Add to cart</a>
             <?php
              }
              }
 ?>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="3.jpg" alt="camera" title="Nikon D3400">
<div class="caption">
<h3>Nikon </h3>
<h6>Price ₹ 35710</h6>
         <?php if (!isset($_SESSION['email']))
               { ?>
            <p><a href="login.php" role="button" class="btn btn-info btn-block">Buy Now</a></p>
              <?php
               } else {

              if (check_if_added_to_cart(3)) { 
               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
              } else {
              ?>
              <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-info">Add to cart</a>
             <?php
              }
              }
 ?>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
    <img src="4.jpg" alt="camera" title="Sony Alpha A7">
<div class="caption">
<h3>Sony </h3>
<h6>Price ₹ 92355</h6>
         <?php if (!isset($_SESSION['email']))
               { ?>
            <p><a href="login.php" role="button" class="btn btn-info btn-block">Buy Now</a></p>
              <?php
               } else {

              if (check_if_added_to_cart(4)) { 
               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
              } else {
              ?>
              <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-info">Add to cart</a>
             <?php
              }
              }
 ?>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
  <img src="5.jpg" alt="Watches" title="Casio">
<div class="caption">
<h3>Casio </h3>
<h6>Price ₹ 5395</h6>
         <?php if (!isset($_SESSION['email']))
               { ?>
            <p><a href="login.php" role="button" class="btn btn-info btn-block">Buy Now</a></p>
              <?php
               } else {

              if (check_if_added_to_cart(5)) { 
               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
              } else {
              ?>
              <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-info">Add to cart</a>
             <?php
              }
              }
 ?>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="6.jpg" alt="Watches" title="Fastrack">
<div class="caption">
<h3>Fastrack </h3>
<h6>Price ₹ 4195</h6>
         <?php if (!isset($_SESSION['email']))
               { ?>
            <p><a href="login.php" role="button" class="btn btn-info btn-block">Buy Now</a></p>
              <?php
               } else {

              if (check_if_added_to_cart(6)) { 
               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
              } else {
              ?>
              <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-info">Add to cart</a>
             <?php
              }
              }
 ?>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="7.jpeg" alt="Watches" title="Rolex">
<div class="caption">
<h3>Rolex</h3>
<h6>Price ₹ 13390</h6>
         <?php if (!isset($_SESSION['email']))
               { ?>
            <p><a href="login.php" role="button" class="btn btn-info btn-block">Buy Now</a></p>
              <?php
               } else {

              if (check_if_added_to_cart(7)) { 
               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
              } else {
              ?>
              <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-info">Add to cart</a>
             <?php
              }
              }
 ?>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="8.jpg" alt="Watches" title="Tissot">
<div class="caption">
<h3>Tissot</h3>
<h6>Price ₹ 27000</h6>
         <?php if (!isset($_SESSION['email']))
               { ?>
            <p><a href="login.php" role="button" class="btn btn-info btn-block">Buy Now</a></p>
              <?php
               } else {

              if (check_if_added_to_cart(8)) { 
               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
              } else {
              ?>
              <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-info">Add to cart</a>
             <?php
              }
              }
 ?>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="9.jpg" alt="Watches" title="Louis Philippe">
<div class="caption">
<h3>Louis Philippe</h3>
<h6>Price ₹ 1839</h6>
         <?php if (!isset($_SESSION['email']))
               { ?>
            <p><a href="login.php" role="button" class="btn btn-info btn-block">Buy Now</a></p>
              <?php
               } else {

              if (check_if_added_to_cart(8)) { 
               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
              } else {
              ?>
              <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-info">Add to cart</a>
             <?php
              }
              }
 ?>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
    <img src="10.jpg" alt="Shirts" title="Peter England">
<div class="caption">
<h3>Peter England</h3>
<h6>Price ₹ 1599</h6>
         <?php if (!isset($_SESSION['email']))
               { ?>
            <p><a href="login.php" role="button" class="btn btn-info btn-block">Buy Now</a></p>
              <?php
               } else {
              if (check_if_added_to_cart(10)) { 
               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
              } else {
              ?>
              <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-info">Add to cart</a>
             <?php
              }
              }
 ?>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="11.jpg" alt="Shirts" title="Raymond">
<div class="caption">
<h3>Raymond</h3>
<h6>Price ₹ 1899</h6>
         <?php if (!isset($_SESSION['email']))
               { ?>
            <p><a href="login.php" role="button" class="btn btn-info btn-block">Buy Now</a></p>
              <?php
               } else {
              if (check_if_added_to_cart(11)) {
               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
              } else {
              ?>
              <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-info">Add to cart</a>
             <?php
              }
              }
 ?>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="12.jpg" alt="Shirts" title="Van Heusan">
<div class="caption">
<h3>Van Heusen</h3>
<h6>Price ₹ 2299</h6>
         <?php if (!isset($_SESSION['email']))
               { ?>
            <p><a href="login.php" role="button" class="btn btn-info btn-block">Buy Now</a></p>
              <?php
               } else {
              if (check_if_added_to_cart(12)) { 
               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
              } else {
              ?>
              <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-info">Add to cart</a>
             <?php
              }
              }
 ?>
</div>
</div>
</div>
    <div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="13.jpg" alt="Shoes" title="Adidas">
<div class="caption">
<h3>Adidas</h3>
<h6>Price ₹ 2800</h6>
         <?php if (!isset($_SESSION['email']))
               { ?>
            <p><a href="login.php" role="button" class="btn btn-info btn-block">Buy Now</a></p>
              <?php
               } else {
              if (check_if_added_to_cart(13)) { 
               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
              } else {
              ?>
              <a href="cart-add.php?id=13" name="add" value="add" class="btn btn-block btn-info">Add to cart</a>
             <?php
              }
              }
 ?>
</div>
</div>
</div>
        <div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="14.jpeg" alt="Shoes" title="Lee Cooper">
<div class="caption">
<h3>Lee Cooper</h3>
<h6>Price ₹ 1047</h6>
         <?php if (!isset($_SESSION['email']))
               { ?>
            <p><a href="login.php" role="button" class="btn btn-info btn-block">Buy Now</a></p>
              <?php
               } else {
              if (check_if_added_to_cart(14)) { 
               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
              } else {
              ?>
              <a href="cart-add.php?id=14" name="add" value="add" class="btn btn-block btn-info">Add to cart</a>
             <?php
              }
              }
 ?>
</div>
</div>
</div>
        <div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="15.jpg" alt="Shoess" title="Nike">
<div class="caption">
<h3>Nike</h3>
<h6>Price ₹ 2299</h6>
         <?php if (!isset($_SESSION['email']))
               { ?>
            <p><a href="login.php" role="button" class="btn btn-info btn-block">Buy Now</a></p>
              <?php
               } else {
              if (check_if_added_to_cart(15)) { 
               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
              } else {
              ?>
              <a href="cart-add.php?id=15" name="add" value="add" class="btn btn-block btn-info">Add to cart</a>
             <?php
              }
              }
 ?>
</div>
</div>
</div>
        <div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="16.jpg" alt="Shoes" title="RedTape">
<div class="caption">
<h3>RedTape</h3>
<h6>Price ₹ 2999</h6>
         <?php if (!isset($_SESSION['email']))
               { ?>
            <p><a href="login.php" role="button" class="btn btn-info btn-block">Buy Now</a></p>
              <?php
               } else {
              if (check_if_added_to_cart(16)) { 
               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
              } else {
              ?>
              <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-block btn-info">Add to cart</a>
             <?php
              }
              }
 ?>
</div>
</div>
</div>
</div>
</div>
</div>
</html>
<?php
require 'footer.php';
?>