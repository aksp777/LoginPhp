<?php 

session_start();

if(!isset($_SESSION['username'])){

	$_SESSION['msg']= "you must login first ";
	header("location: login.php");

}
if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['username']);
	header("location: login.php");


}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>

<h1>This is the Home Page</h1>
<?php
if(isset($_SESSION['success'])) : ?>

	<div>		
		<h3>			
			<?php
			
			echo $_SESSION['success'];
			unset($_SESSION['success']);
			
			 ?>
		</h3>
	</div>
<?php endif ?>

<?php if(isset($_SESSION['username'])):  ?>
<h3> welcome <?php echo $_SESSION['username']; ?></h3>
<button><a href="auth.php?logout='1'">logout</a></button>
<?php endif ?>

</body>
</html>