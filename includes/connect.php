<?php
$link=mysql_connect('localhost','root','');
if(!$link){
    echo "unable to connect to database";
}

$dbname='g-connect';
$dbtest=mysql_select_db($dbname);
?>