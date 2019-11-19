<?php
$conn = mysqli_connect('localhost', 'root', '', 'practice') or die("could not connect to database");
session_start();
    $errors = array();
    if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
        $myusername = mysqli_real_escape_string($conn,$_POST['username']);
        $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 

		        $sql = "SELECT * FROM user WHERE username = '$myusername' and password = '$mypassword'";
		        $result = mysqli_query($conn,$sql);
		        $row = mysqli_fetch_array($result);
		        $uname = $row['username'];
		      
		        $count = mysqli_num_rows($result);
		 
		        if($count == 1) {
		            $_SESSION['username'] = $uname;
		            $_SESSION['success'] = "login succesfull";
		            header("location: dashboard.php");
		        }else {
		            array_push($errors, " Your Username or Password is incorrect");
		            $_SESSION['error'] = $errors;
		        }
	 

   }


   if(isset($_GET['logout'])) {
		session_destroy();
		header("location: index.php");
   }
?>