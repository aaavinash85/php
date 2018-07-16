<!-- sessions are stored on the server and hidden from the user-->
<?php
 session_start();  //this starts the session
 $_SESSION['username']=' Alex';

 //creating cookie
 $time=time();
 setcookie('username','Avi',time()+10);

?>