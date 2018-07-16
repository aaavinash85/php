<?php
$random_number=rand();
$random_number=rand(1,99);
echo 'the random number is ',$random_number;  //this willgenerate the random numbers
?>
<form action="random_number.php" method="POST">  <!--when you click on roll the dice it will refer to the random_number.php page and page gets refreshed and every time the page refreshed a new random number will be generated -->  
	<input type="submit" value="Roll dice">
</form> 