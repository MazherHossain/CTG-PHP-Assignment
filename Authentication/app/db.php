<?php
function connect(){

  return $connection = new mysqli(HOST,USER,PASS,DB);//Data Base Connection
}

?>