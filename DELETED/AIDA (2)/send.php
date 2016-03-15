<?php require 'header.php'; ?>

<body>

	<div class="container">

		<div class ="sixteen columns">

		<?php require 'navbar.php'; ?>

		<hr/>

	</div>  

    <div class="sixteen columns">

<?php

$name = $_POST['name'];
$comment = $_POST['comment'];
$email = $_POST['email'];
$date = $_POST['date'];

$to = $email;
$subject = "Feedback Response";
$body = "\n Recipt of email This is an automated message. Your message has been sent as shown below; \n\n From: $name \n Email Address: $email \n Comment: $comment \n Date Sent: $date";
$headers = 'From: patrice@patricecallan.co.uk' . "\r\n" .
    'Reply-To: patrice@patricecallan.co.uk' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to,$subject,$body,$headers);

echo "<p>Thank you, your message has been sent as shown below; </p>";
echo "<p> Name: $name </p>";
echo "<p> Comment : $comment";
echo "<p> Email : $email </p>";
echo "<p> Date : $date </p>";
echo "<p><a href='form.php'>Click here to return to the previous page</a>";

?>      

		</div>

	

	<div class ="sixteen columns"> 

       <?php require 'footer.php'; ?> 

	</div>

	</div>



</body>

</html>