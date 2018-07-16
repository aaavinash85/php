<?php
$match='pass123';                    //predefined password
if(isset($_POST['password'])){      // check for availability
	$password=$_POST['password'];  //fetching the password inside variable
	if($password==$match){        //checking for match
		echo 'correct';
	}
	else{
		echo 'incorrect';
	}
}
//echo $_POST['password'];
?>
<form action="" method="POST">
	password<br>
	<input type="password" name="password"><br>
	<input type="submit" name="submit">
</form>