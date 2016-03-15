<?php require 'header.php'; ?>

<body>

	<div class="container">

		<div class ="sixteen columns">

		<?php require 'navbar.php'; ?>

		<hr/>

	</div>  

    <div class="sixteen columns">

     <form action="send.php" method="POST">
	Your Name: <input type="text" name="name" required><br>
    Comment: <textarea name="comment" required></textarea><br>
    Your Email: <input type="email" name="email" required>
    <input type="submit" name="submit" value="Send!">    
</form>

		</div>

	

	<div class ="sixteen columns"> 

       <?php require 'footer.php'; ?> 

	</div>

	</div>



</body>

</html>