<html>
    <head>
        <title>localhost</title>
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
                text-align: center;
                width: 700px;
                height: 30px;
            }
        </style>
    </head>

    <body>
        <h1>Submitted Surveys</h1>

        <?php
            $hostname = "localhost";
            $username = "root";
            $password = "";
            $dbname = "first_database";

            $connect = mysqli_connect($hostname, $username, $password, $dbname) OR DIE ("Connection failed");

            $sql = "SELECT * FROM students";
            $sendsql = mysqli_query($connect, $sql);

            if($sendsql) {
                echo "<table>
                      <tr>
                        <th>Student ID</th>
                        <th>Full Name</th>
                        <th>Preferred References</th>
                        <th>Preferred Local Server</th>
						<th>Action</th>
                      </tr>";

                foreach($sendsql as $row)
                {
                    echo "<tr>";
                        echo "<td>". $row["studentID"] . "</td>";
                        echo "<td>". $row["fullName"] . "</td>";
                        echo "<td>". $row["reference"] . "</td>";
                        echo "<td>". $row["server"] . "</td>";
						echo "<td><a href='student_edit.php?studentID=". $row["studentID"] ."'>Edit</a> &emsp;";
                        echo "<a href='student_delete.php?studentID=". $row["studentID"] ."'>Delete</a></td>";
                    echo "</tr>";
                }

                echo "</table>";

            }else {
                echo "<p>Failed.</p>";
            }
        ?>
    </body>
</html>