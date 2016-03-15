<?php
	$msg = "";
	if(isset($_POST["submit"]))
	{
		$name = $_POST["name"];
		$email = $_POST["email"];
		$password = $_POST["password"];

		$name = mysqli_real_escape_string($link, $name);
		$email = mysqli_real_escape_string($link, $email);
		//$password = mysqli_real_escape_string($link, $password);
		$password = md5($password);
		
		
		$sql="SELECT email FROM users WHERE email='$email'";
		$result=mysqli_query($link,$sql);
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		if(mysqli_num_rows($result) == 1)
		{
			$msg = " </br> Sorry, an account with that email address has already been registered on the system.  </br> Please try again with another email address or use the contact form to resolve this. ";
		}
		else
		{
			$query = mysqli_query($link, "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')");
			if($query)
			{
				$msg = "</br>Thank You! </br> You have now been registered on the system! </br> You may now proceed to login. ";
			}
		}
	}
?>
<!doctype html>
<html>

<body>

<form method="post" action="">
<fieldset>

<table width="600" border="0" cellpadding="10" cellspacing="10">
<tr>
<class="error"><?php echo $msg;?></td>
</tr>

<label for="name">Name</label>
<input name="name" type="text" class="input" size="25" required /></td>
<label for="email">Email</label> <input name="email" type="email" class="input" size="25" required /></td>
<label for="password">Password</label> <input name="password" type="password" class="input" size="25" required />


<input class="button-primary" type="submit" name="submit"  value="Register!">
</table>
</fieldset>
</form>
</body>
</html>
