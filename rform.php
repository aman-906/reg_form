<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="design.css">
	<title>Form</title>
</head>
<body>
	<div class="container">
		<form action="#" method="POST">
		<div class="title">
			Registration Form
		</div>

		<div class="form">
			<div class="field">
				<label>First Name</label>
				<input type="text" class="input" name="fname">
			</div>
			<div class="field">
				<label>Last Name</label>
				<input type="text" class="input" name="lname">
			</div>
			<div class="field">
			    <label>Password</label>
			    <input type="password" class="input" name="password">
			</div>	
			<div class="field">
				<label>Confirm Password</label>
				<input type="password" class="input" name="conpassword">
			</div>
			<div class="field">
				<label>Gender</label>
				<div class="selectbox">
				<select name="gender">
					<option value="Not Selected">Select</option>
					<option value="male">Male</option>
					<option value="female">Female</option>
					<option value="others">Others</option>
				</select>
			</div>
			</div>
			<div class="field">
				<label>Email</label>
				<input type="email" class="input" name="email">
			</div>
			<div class="field">
				<label>Phone number</label>
				<input type="number" class="input" name="phone">
			</div>
			<div class="field">
				<label>Address</label>
				<textarea class="textarea" name="address"></textarea>
			</div> 
			<div class="field terms">
				<label class="check">
				  <input type="checkbox">
                   <span class="checkmark"></span>
				</label>
				<p>Agree to terms and conditions</p>
			</div>
			<div class="field">
				<input type="submit" value="Register" class="btn" name="register">
			</div>
		</div>
		</form>	
	</div>
</body>
</html>
<?php include("connection.php"); ?>

<?php
	if($_POST['register'])
     {
     	$fname  =$_POST['fname'];
     	$lname  =$_POST['lname'];
     	$pwd    =$_POST['password'];
     	$cpwd   =$_POST['conpassword'];
     	$gender =$_POST['gender'];
     	$email  =$_POST['email'];
     	$phone  =$_POST['phone'];
     	$address=$_POST['address'];

     	$query = "INSERT INTO mydb values('$fname','$lname','$pwd','$cpwd','$gender','$email','$phone','$address')";
     	$data = mysqli_query($conn,$query);

     	if($data)
     	{
     		//echo "Data Inserted";
     	}
     	else
     	{
     		echo "Failed";
     	}
     }
?>