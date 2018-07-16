<!--Embedding PHP inside HTML-->
<?php  #assigning variable in php and use then inside form 
$name="avi";
echo $name;      # this will display the value stored in the variable $name
//  declaring integer values
$number =3;
echo $number;

?>
<input type="text" value="<?php echo $name;  ?>">  <!--this will display the value of $name variable inside the form  -->