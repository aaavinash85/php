<?php
mysql_connect('localhost','root','');
mysql_select_db('a_database');
          
      if (isset($_POST['username'])&&isset($_POST['password'])){ //it checks that the username and password 
     
       $username= $_POST['username'];                           //are submitted or not
       $password= $_POST['password'];
            
       if(!empty($username)&&!empty($password)){    //it checks that the username and password are empty or not
       		
    	$query="SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password' "; 
       	$query_run=mysql_query($query);    //running the query
           if(mysql_num_rows($query_run) >=1 ){   // this will return 1 or 0
           	 echo 'success';
           } else{
           	echo 'invalid';
           }
       	}
     }
?>
<form action="sql_1.php" method="POST">
	Username: <input type="text" name="username">
	password: <input type="password" name="password">
	          <input type="submit" name="click here">
	      </form>