<?php
  session_start();
  if(isset($_SESSION['username'])){
    echo '<br>','welcome '.$_SESSION['username'];
  }else{
  	echo 'please Log In';
  }

  //displaying the result of cookie
  echo '<br>',$_COOKIE['username'];

?>