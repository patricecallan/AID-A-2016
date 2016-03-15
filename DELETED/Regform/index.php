<?php

	include ("db.php");	

	$msg = "";
	if(isset($_POST["submit"]))
	{
		$name = $_POST["name"];
		$email = $_POST["email"];
		$password = $_POST["password"];

		$name = mysqli_real_escape_string($db, $name);
		$email = mysqli_real_escape_string($db, $email);
		$password = mysqli_real_escape_string($db, $password);
		$password = md5($password);
		
		
		$sql="SELECT email FROM users WHERE email='$email'";
		$result=mysqli_query($db,$sql);
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		if(mysqli_num_rows($result) == 1)
		{
			$msg = "Sorry...This email already exist...";
		}
		else
		{
			$query = mysqli_query($db, "INSERT INTO users (name, email, password)VALUES ('$name', '$email', '$password')");
			if($query)
			{
				$msg = "Thank You! you are now registered.";
			}
		}
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registration Form by Eggs Lab</title>
<style>
label
{
	font-family:Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
	font-size:20px;
	font-weight:bold;
}
.input
{
	padding:5px;
	font-family:Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
	font-size:18px;
}
input[type=submit]
{
	padding:5px;
	font-family:Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
	font-size:18px;
	font-weight:bold;
	background:#999;
	border:2px solid black;
	color:#FFF;
}
fieldset
{
	width: 500px;
}
fieldset legend
{
	padding:2px;
	font-family:Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
	font-size:14px;
	font-weight:bold;
	background:#999;
	border:2px solid black;
	color:#FFF;
}
.error
{
	color:red;
	font-family:Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
	font-size:16px;
}
</style>
</head>

<body>

<form method="post" action="">
<fieldset>
<legend>Registration Form</legend>
<table width="400" border="0" cellpadding="10" cellspacing="10">
<tr>
<td colspan="2" align="center" class="error"><?php echo $msg;?></td>
</tr>
<tr>
<td style="font-weight: bold"><div align="right"><label for="name">Name</label></div></td>
<td><input name="name" type="text" class="input" size="25" required /></td>
</tr>
<tr>
<td style="font-weight: bold"><div align="right"><label for="email">Email</label></div></td>
<td><input name="email" type="email" class="input" size="25" required /></td>
</tr>
<tr>
<td height="23" style="font-weight: bold"><div align="right"><label for="password">Password</label></div></td>
<td><input name="password" type="password" class="input" size="25" required /></td>
</tr>
<tr>
<td height="23"></td>
<td><div align="right">
  <input type="submit" name="submit" value="Register!" />
</div></td>
</tr>
</table>
</fieldset>
</form>
    
    <h3>try <em>test@test.com</em> as a email.</h3>
    
    <a href="http://www.eggslab.net/creating-registration-form-with-php-and-mysqli">Back to tutorial</a>
</body>
</html>