<?php

class countbook {
function countbook() {
// Include the MySQL class
require_once('database/MySQL.php');

require('database/connx.php');
require('database/strip_quotes.php');


// Connect to MySQL
$db = & new MySQL($host,$dbUser,$dbPass,$dbName);

$sql="select * from catalog";
$result=$db->query($sql);
$this->allbks=$result->size();

$sql1="select * from catalog where category='Programming'";
$result=$db->query($sql1);
$this->progbks=$result->size();

$sql2="select * from catalog where category='Certification'";
$result=$db->query($sql2);
$this->certbks=$result->size();

$sql3="select * from catalog where category='Literature'";
$result=$db->query($sql3);
$this->litbks=$result->size();

}

}//close of class
$display=new countbook();


?>
