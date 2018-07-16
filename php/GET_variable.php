<?php
/*here we need to do three things:
1) Does it exist or hasit been submitted
2) Is it empty
3) Display result backto user
*/
 if (isset($_GET['day'])&&isset($_GET['date'])&&isset($_GET['year'])) {    //this checks that the form contains 
         $day=$_GET['day'];                                               //data or not
         $date=$_GET['date'];
         $year=$_GET['year'];
         if (!empty($day)&&!empty($date)&&!empty($year)){
                echo 'it is ',$day,' ',$date,' ',$year;
         }else {
         	echo 'fill all the fields';
         }
 }
//echo $_GET['day'];
?>
<form action="" method ="GET">
	Day:<input type="text" name="day"><br>
	Date:<input type="text" name="date"><br>
    year:<input type="text" name="year"><br>
           <input type="submit" name="submit">
     </form>