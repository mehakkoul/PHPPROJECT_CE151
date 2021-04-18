<?php
error_reporting(E_ERROR);
$connect=mysql_connect('localhost','root','');
if(!$connect){
echo mysql_error();
}
$database=mysql_select_db("crimejk");
if(!$database)
{
echo mysql_error();
}


?>


                     
