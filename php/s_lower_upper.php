<?php
$stirng='This Is The Text';
$upper=strtoupper($stirng);      //this will uppercase all the words of the string
echo 'the uppered string is = ',$upper;
$lower=strtolower($stirng);     // this will lowercase all the words of the string
echo '<br>the lowered string is = ',$lower;

?>
<!--  creating a from-->
<br>
<form action ="index.php" method="GET">
   Name:<input type="text" name="user_name" value="">
   <input type="submit" value="click here">
   </form>