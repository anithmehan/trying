<html>
    <head>
        <title>localhost</title>

        <style>
            #button {
                width: 10%;
                height: 30px;
            }
            #textfield {
                width: 50%;
				float: right;
				clear: both;
            }
			
			form {
				overflow: hidden;
			}
			
			fieldset{
				width: 500px; 
				margin: auto;
			}
        </style>
    </head>

    <body>
        <h1 style="text-align: center;">CSC264 Survey</h1>
        <br>

        <form action="student_info.php" method="POST">
            <fieldset style="width: 500px; margin: auto;">
                <legend style="font-weight: bold;">Student Information</legend>
                Student ID:
                <input type="text" id="textfield" name="studentID" placeholder="Enter your Student ID"><br><br>
                Full Name:
                <input type="text" id="textfield" name="fullName" placeholder="Enter your full name"><br><br>
                Email:
                <input type="text" id="textfield" name="email" placeholder="Enter your email"><br><br>
                Phone Number:
                <input type="text" id="textfield" name="phoneNum" placeholder="Enter your phone number"><br><br>
            </fieldset><br>

            <fieldset style="width: 500px; margin: auto;">
                <legend style="font-weight: bold;">References</legend>
                What kind of references do you consider the most useful? <br><br>
                <input type="radio" name="reference" value="Text Books">Text Books
                <input type="radio" name="reference" value="Lecture Slides">Lecture Slides
                <input type="radio" name="reference" value="Manual">Manual
            </fieldset><br>

            <fieldset style="width: 500px; margin: auto;">
                <legend style="font-weight: bold;">Local Server</legend>
                What local server do you enjoy using? <br><br>
                <select name="server">
                    <option value="XAMPP">XAMPP Server</option>
                    <option value="WAMPP">WAMPP Server</option>
                </select>
            </fieldset><br>

            <p style="text-align: center;">
                <input type="submit" id="button" value="Submit">
				<input type="button" id="button" value="Survey List" onClick="document.location.href='students_list.php'">
            </p>
           </form>
        
    </body>
</html>