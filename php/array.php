<?php
$food=array('pasta','salad','burger','vegetable');   //keyword array is used to declare array
echo $food[1],'<br>';
print_r($food);          //this will print all the elemants of array
$food[4]='fruit';        // this will add the value fruit to array at Index[4]
print_r($food);

// multidimensional array
$diet=array('healthy'=>
	array('salad','veggie'),
	'unhealthy'=>
	array('pizza','burger'));
echo '<br>',$diet['healthy'][0];

#ForEach statement in array
foreach($diet as $element =>$inner_element);
echo '<br>outer elements are ',$element;
echo '<br> inner elements are ',$inner_element;

?>