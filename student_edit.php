<!DOCTYPE html>
<html>
	<head>
		<title> localhost </title>
		
		<style>
			#button{
				width:15%;
				height:30px;
			}
			
			#textfield{
				width:50%;
			}
		</style>
		
			
	<?php
					
		$hostname = "localhost";
		$user = "root";
		$password = "";
		$dbname = "first_database";
		
		$connect = mysqli_connect($hostname, $user, $password, $dbname) OR DIE ("Connection failed");
		
		$studentid = $_GET["studentID"];

		$sql = "SELECT * FROM students WHERE studentID = '$studentid'";
		$qry = mysqli_query($connect,$sql);	
					
		$data = mysqli_fetch_array($qry); // fetch data
							
			if(isset($_POST["edit"])){
				
				$id = $_POST["id"];
				$fullname = $_POST["fullname"];
				$email = $_POST["email"];
				$phoneno = $_POST["phonenum"];
				$reference = $_POST["reference"];
				$server = $_POST["server"];

				$sql2 = "UPDATE students SET studentID='$id', fullName='$fullname', email='$email', phoneNum='$phoneno', reference='$reference', server='$server' WHERE studentID='$studentid'";
				$sendsql = mysqli_query($connect,$sql2);	

				if ($sendsql) {
				
					mysqli_close($dbname); // Close connection
					header("location:students_list.php"); // redirects to students list page
					exit;
				}
				else
				{
					echo mysqli_error();
				} 
			}
				
			?>
	</head>
	
	<body>

	<h1 style = "text-align:center">Edit Information</h1>

	<form action="" method="post">

	<fieldset style="width:500px;margin:auto">
	<legend style="font-weight:bold">Student Information</legend>
	
		Student ID &emsp; &emsp; : &nbsp;
		<input type="text" id="textfield" name="id" value="<?php echo $data['studentID'] ?>" > <br><br>
		
		Full Name &emsp; &emsp; : &nbsp; 
		<input type="text" id="textfield" name="fullname" value="<?php echo $data['fullName'] ?>" > <br><br>
		
		E-mail &emsp; &emsp; &emsp; &nbsp; :  &nbsp;
		<input type="email" id="textfield" name="email" value="<?php echo $data['email'] ?>" > <br><br>
		
		Phone Number &ensp; : &nbsp;
		<input type="text" id="textfield" name="phonenum" value="<?php echo $data['phoneNum'] ?>" > <br><br>
		
	</fieldset><br>
	<fieldset style="width:500px;margin:auto">
	<legend style="font-weight:bold">Reference</legend>
	
		What kind of reference do you consider the most useful? <br><br>

		<input type="radio" name="reference" value="Text Books">
		Text Books 
		<input type="radio" name="reference" value="Lecture Slides">
		Lecture Slides
		<input type="radio" name="reference" value="Manual">
		Manual 

	</fieldset><br>
	
	<fieldset style="width:500px;margin:auto">
	<legend style="font-weight:bold">Local Server</legend>
		What local server do you enjoy using?<br><br>
		
		<select name="server">
		<option value="XAMPP"> XAMPP Server</option>
		<option value="WAMP">WAMP Server</option>
		</select>
	</fieldset>
	
	<p style="text-align:center">
	<input type="submit" id="button" name="edit" value="Edit"></p>
	
	</form>

	
	</body>

</html>