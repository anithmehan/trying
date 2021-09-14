<html>
    <head>
        <title>localhost</title>
    </head>

    <body>
        <?php
            $hostname = "localhost";
            $username = "root";
            $password = "";
            $dbname = "first_database";

            $connect = mysqli_connect($hostname, $username, $password, $dbname) OR DIE ("Connection failed");

            $studentID = $_POST["studentID"];
            $fullname = $_POST["fullName"];
            $email = $_POST["email"];
            $phoneNum = $_POST["phoneNum"];
            $reference = $_POST["reference"];
            $server = $_POST["server"];

            $sql = "INSERT INTO students (studentID, fullName, email, phoneNum, reference, server) VALUES ('$studentID', '$fullname', '$email', '$phoneNum', '$reference', '$server')";
            $sendsql = mysqli_query($connect, $sql);

            if($sendsql) {
                echo "<p>Your form has already been submitted.<br> Thank you for participating!</p>";
                echo "<p>To see the list of surveys that was submitted, <a href='students_list.php'>CLICK HERE</p>";
            }else {
                echo "<p>Failed to submit. Please try again.</p>";
            }
        ?>
    </body>
</html>