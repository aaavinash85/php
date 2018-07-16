<?php
//$http_client_ip=$_SERVER['HTTP_CLIENT_IP'];             //this checks for actual ip adds
//$http_x_forwarded_for=$_SERVER['HTTP_X_FORWARDED_FOR'];//this checks for proxy
 $remote_addr=$_SERVER['REMOTE_ADDR'];                 //this gives the ip adds

//   if(!empty($http_client_ip)){             //it checks that if $http_client_ip is not empty then this equal to ip
//   	$ip_address=$http_client_ip;
//     }
//     elseif(!empty($http_x_forwarded_for)){
//     	$ip_address=$http_x_forwarded_for;
//     }else{
//     	$ip_address=$remote_addr;
//     }
//     echo $ip_address;
      echo 'your ip address is = ',$remote_addr;
      $browser=get_browser(null, true);
      print_r($browser);

?>