<?php
$host='localhost';
$user='root';
$pass='';
$db='crud';
function connect(){
  global $host,$user, $pass,$db;
  return $connection = new mysqli($host,$user,$pass,$db);//Data Base Connection
}

?>