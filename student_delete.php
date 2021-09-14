<!DOCTYPE html>
<html>
	<head>
		<title> localhost </title>
	</head>
	
	<body>
	<?php
		$hostname = "localhost";
		$username = "root";
		$password = "";
		$dbname = "first_database";
		
		$connect = mysqli_connect($hostname, $username, $password, $dbname) OR DIE ("Connection failed");
					
		$studentid = $_GET["studentID"];

		$sql = "DELETE FROM students WHERE studentID = '$studentid'";
		$sendsql = mysqli_query($connect,$sql);	
							
		if($sendsql){
			echo "<p>Your data has been deleted.</p>";
			echo "<p>To see the list of surveys that was submitted, <a href='students_list.php'>CLICK HERE</a>. </p>";
		}else{
			echo "<p>Failed to delete the data.</p>";
		}		
		?>
		
	</body>

</html>