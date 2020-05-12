
<html>
<title>FORM</title>
<head>
<?php
    include_once 'db_connection.php';
?>
</head>
<body>
<?php

	if(isset($_POST['submit']))
	{
		$sql = "INSERT INTO personal_information (Name, Roll, Address,Phone_No,Stream,Email_Id,Gender) 
		VALUES ('".$_POST["name"]."','".$_POST["roll"]."','".$_POST["address"]."','".$_POST["phone"]."',
		'".$_POST["stream"]."','".$_POST["email"]."','".$_POST["rad"]."')";
		$result = mysqli_query($conn,$sql);
		echo '<script>alert("Form Submitted")</script>'; 
	}
?>

<h4>STUDENT'S INFORMATION&emsp;&emsp;&emsp;&emsp;&ensp;<a href="index.php">HOME</a><br></h4>
<form action="Student_info.php" method="POST">
NAME:&emsp;&emsp;&emsp;&ensp;<input type="text" name="name" value="" required>
<br><br>
Roll:&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;<input type="text"  name="roll" required>
<br><br>
<label for="address">Address:&emsp;&emsp;&emsp;</label>
<textarea id="address" rows="4" cols="20" name="address" required></textarea>
<br><br>
Phone Number:&nbsp; <input type="text" name="phone" required>
<br><br>
<label for="stream">STREAM:&emsp;&emsp;&nbsp;</label>
<select id="stream" name="stream">
<option value="CSE">CSE</option>
<br>
<option value="IT">IT</option>
<br>
<option value="ECE">ECE</option>
<br>
<option value="EE">EE</option>
<br>
<option value="MCA">MCA</option>
<br>
<option value="MTech">MTech</option>
</select>
<br><br>
Email ID:&emsp;&emsp;&ensp;&nbsp;&nbsp;<input type="text" name="email" required>
<br><br>

<p class="radiobuttons">
Gender:&emsp;&emsp;&emsp;&ensp;Male:<input type="radio" name="rad" value="M">
Female:<input type="radio" name="rad" value="F">
<br><br><br>
&emsp;&emsp;&emsp;&emsp;
<input type="submit" value="SUBMIT" name="submit">&emsp;&emsp;
<input type="reset" value="RESET" name="reset"></input>
</form>
</body>
</html>
