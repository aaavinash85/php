<?php
$xml=simplexml_load_file('a.xml');      //this will load the xml file
echo $xml->producer[1]->name.' '.$xml->producer[1]->age;
?>