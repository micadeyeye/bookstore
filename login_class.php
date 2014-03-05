<?php

require("database/strip_quotes.php");

require("database/strip_quotes_addslash.php");




//login class

class login extends Session{
function login() {
//database connection begins

// Include the MySQL class
require_once('database/MySQL.php');

require('database/connx.php');

// Connect to MySQL
$db = & new MySQL($host,$dbUser,$dbPass,$dbName);

if((isset($_POST['email']))&&(isset($_POST['password']))){
$this->email=safeAddSlashes($_POST['email']);
$this->password=safeAddSlashes($_POST['password']);}

if((isset($this->email))&&(isset($this->password))){
$email=strtolower($this->email);
$password=$this->password;
	$sql_sum=mysql_query("select count(*) from membersaccount where email='$email' and password='$password'") or trigger_error("Couldn't find sum of items");
	$result_sum = mysql_result($sql_sum,0,0);
	$total=$result_sum;
	if($total!=0){
	//set members attributes now
$this->set("membership",TRUE);
$this->set("email","$email");
     //manually set members attributes
	 $_SESSION['membership']=TRUE;
            //redirect back to item chosen to view details
			if($this->get("booksnumber")){
			$booksnumber=$this->get("booksnumber");
			header("location: addtocart.php?booksnumber=$booksnumber");}
			 }
	  else{
	 $this->set("membership",FALSE);
$this->set("email","$email");
     //manually set members attributes
	 $_SESSION['membership']=FALSE;}
	 
	 //for admiminstator only
if(($total!=0)&&($email=="admin")){
$this->set("admin",TRUE);
//manually set admin also
$_SESSION['admin']=TRUE;
//header("location: admin_home.php");
     }

}
        //close of test for availability of email & password
		

}//close of function login

function membersmessage(){
	if($this->get("membership")){	
	return "<strong class='fontstyle1'>You have successfully logged in!!!</strong>";}
	else{return "<strong class='fontstyle1'>Your log in attempt failed!!!</strong>";}
}
	
}//close of class login



 if((isset($_POST['login']))&&(!(empty($_POST['email'])))){$member=new login();}
elseif(isset($_POST['Changepwd'])){new changeacct();}
//log out statement
if((isset($_GET['logout']))&&($_GET['logout']='true')){$member=new login();$member->destroy();header('location: index.php');}

//retrieve password
class pwdrecovery{
function pwdrecovery() {
$email=safeAddSlashes($_POST['myemail']);


//database connection begins

// Include the MySQL class
require_once('database/MySQL.php');

require('database/connx.php');

// Connect to MySQL
$db = & new MySQL($host,$dbUser,$dbPass,$dbName);

	$sql="select password from membersaccount where email='$email'";
	$result = $db->query($sql);
$numrows=$result->size();
//echo $numrows;
if($numrows>0){
while ($row = $result->fetch()) {
$pwd=$row['password'];}
if(mail($email,"IT-Books+:- Lost Password","Dear member,\n You password is $pwd.\nYours,\nwebmaster mike\nwww.ngportal.net","sales@ngportal.net"))
{$this->message="<span class='fontstyle1'>Your Password has been sent to your mailbox:- <strong class='fontstyle1'>$email</strong></span>";
return $this->message;} 
//end number of rows condition
}else{$this->message="<span class='fontstyle1'>Sorry, You have no account with us.</span>";
return $this->message;}
        }//close of function pwdrecovery
    }//end of pwdrecovery class
?>