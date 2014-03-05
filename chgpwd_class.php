<?php
if((!(empty($_POST['npwd']))&&!(empty($_POST['npwd'])))&&($_POST['npwd']==$_POST['cpwd'])){
$oldpwd=safeAddSlashes($_POST['oldpwd']);
$npwd=safeAddSlashes($_POST['npwd']);
$email=$chkmemberstatus->get('email');
$sql="UPDATE
     membersaccount 
SET
password='$npwd'
where email='$email' and password='$oldpwd'";
//echo $sql;

//database connection begins

// Include the MySQL class
require_once('database/MySQL.php');

require('database/connx.php');
require('database/strip_quotes.php');

// Connect to MySQL
$db = & new MySQL($host,$dbUser,$dbPass,$dbName);


// Perform a query getting back a MySQLResult object
if($db->query($sql)){echo "<center><strong class='fontstyle1'>Password Changed Successfully</strong><br><span class='fontstyle1'>(You must log in again to continue)</span></center>";
$chkmemberstatus->destroy();
}
}
//REPORT ON DIFFERENT PWDS 
else{echo "<center><strong class='fontstyle1'>Sorry, Password Unchanged.</strong></center>";}
?>