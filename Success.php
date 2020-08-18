
<html>
    <title>Thank you for Shopping with us </title>
    <?php
include 'common.php';
include 'header.php';
include 'footer.php';
$rep=$_SESSION['pid'];
if(!isset($_SESSION['email']))
{
    header("location:index.php");
}
else
{
$score1="update user_items set status=('Confirmed')where user_id=$rep";
$write= mysqli_query($con, $score1) or die(mysqli_error($con));
?>
    <head>
        
	<link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body>
        <?php 
        $got="select name from users where id=$rep";
        $gain=  mysqli_query($con,$got);
        $am=  mysqli_fetch_array($gain);
                ?>
        <div class="container">
            <div class="jumbotron">
                <h1>Thank you for Shopping with us <?php echo $am['name'];?></h1>
                <a href="product.php" class="btn btn-primary">Click here to Purchase any other item</a>
            </div>
        </div>
    </body>
</html>
<?php
}