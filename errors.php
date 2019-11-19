<?php 
		if(isset($_SESSION['error'])) {
			foreach ($_SESSION['error'] as  $value) {
				echo "<font color='red'>".$value."</font><br>";
			}
			unset($_SESSION['error']);
		}
	?>