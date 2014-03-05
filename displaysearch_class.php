<?php
Class displaysearch {
function displaysearch() {

// Include the MySQL class
require_once('database/MySQL.php');

require('database/connx.php');
require('database/strip_quotes.php');

if(!(isset($_GET['booksnumber']))){$booksnumber=$_POST['booksnumber'];}else{$booksnumber=$_GET['booksnumber'];}

// Connect to MySQL
$db = & new MySQL($host,$dbUser,$dbPass,$dbName);
$sql="select * from catalog where booksnumber=$booksnumber";
$result=$db->query($sql);
$rows=$result->fetch();

//instantiating variables begin
$this->booksnumber=$rows['booksnumber'];
$this->author=$rows['author'];
$this->title=$rows['title'];
$this->publisher=$rows['publisher'];
$this->backcoverdetails=$rows['backcoverdetails'];
$this->yrpublish=$rows['yrpublish'];
$this->oldprice=$rows['oldprice'];
$this->newprice=$rows['newprice'];
$this->pages=$rows['pages'];
$this->category=$rows['category'];
$this->isbn=$rows['isbn'];
$this->version=$rows['version'];
$this->picturecode=$rows['picturecode'];
$this->availability=$rows['availability'];
$this->dhlcost=$rows['dhlcost'];
$this->dhldays=$rows['dhldays'];
$this->emscost=$rows['emscost'];
$this->emsdays=$rows['emsdays'];
$this->shippingdetails=$rows['shippingdetails'];

                        }
               }


?>