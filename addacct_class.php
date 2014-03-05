<?php

Class addacct {


function addacct() {
//instantiating variables begin

$this->surname=safeAddSlashes($_POST['surname']);
$this->othernames=safeAddSlashes($_POST['othernames']);
$this->email=safeAddSlashes($_POST['email']);
$this->password=safeAddSlashes($_POST['password']);
$this->gsm1=safeAddSlashes($_POST['gsm1']);
$this->gsm2=safeAddSlashes($_POST['gsm2']);
$this->contactaddress=safeAddSlashes($_POST['contactaddress']);
$this->homedescription=safeAddSlashes($_POST['homedescription']);
$this->state=safeAddSlashes($_POST['state']);
$this->paymentmode=safeAddSlashes($_POST['paymentmode']);
//database connection begins

// Include the MySQL class
require_once('database/MySQL.php');

require('database/connx.php');
require('database/strip_quotes.php');

// Connect to MySQL
$db = & new MySQL($host,$dbUser,$dbPass,$dbName);

$sql="INSERT membersaccount SET
surname='$this->surname',
othernames='$this->othernames',
email='$this->email',
password='$this->password',
gsm1='$this->gsm1',
gsm2='$this->gsm2',
contactaddress='$this->contactaddress',
homedescription='$this->homedescription',
state='$this->state',
paymentmode='$this->paymentmode'";
//echo $sql;
if((!empty($this->surname))&&(!empty($this->email))&&(!empty($this->password))){
if($db->query($sql)){$this->response="Your account has been created. <a href='login.php'><strong class='boldlink'>Please, click here to log in</strong></a>";}}
else{$this->response="";}
}//close of function

}//close of class



if(isset($_POST['Submit'])){$addacct=new addacct();}


?>