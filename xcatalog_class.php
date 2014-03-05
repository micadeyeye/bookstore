<?php
	  
class rowbyrow{
//number of rows per page
var $n=6;
//the string generated per row
var $str="";
//the string per row with <tr> added
var $str1="";
//counter declared
var $i;
//begin row at --- declared
var $beginrow;
//number of pages that can be formed
var $num_pages;
//present page
var $page;
//declared variable for next and back navigation
var $q;
//total number of rows in table
var $num;

//constructor function
function rowbyrow(){
$p=0;
$this->p=&$p;}
//end of constructor function

function rowcall($p){
//database connection begins

// Include the MySQL class
require_once('database/MySQL.php');

require('database/connx.php');
require('database/strip_quotes.php');

// Connect to MySQL
$db = & new MySQL($host,$dbUser,$dbPass,$dbName);

$this->p=$p;
//what page sends request
 $this->page=floor($this->p/6)+1;
 //what category is selected
 //Nine possible states of category

  
 if(isset($_POST['applycategory'])){
 if((!isset($_POST['Programming']))&&(!isset($_POST['Certification']))&&(!isset($_POST['Literature']))){
$_SESSION['categoryselected']="category='Programming' or category='Certification' or category='Literature'";}
 elseif((!isset($_POST['Programming']))&&(!isset($_POST['Certification']))&&(isset($_POST['Literature']))){
 $_SESSION['categoryselected']="category='Literature'";}
 elseif((!isset($_POST['Programming']))&&(isset($_POST['Certification']))&&(!isset($_POST['Literature']))){
  $_SESSION['categoryselected']="category='Certification'";} 
elseif((!isset($_POST['Programming']))&&(isset($_POST['Certification']))&&(isset($_POST['Literature']))){
  $_SESSION['categoryselected']="category='Certification' or category='Literature'";} 
elseif((isset($_POST['Programming']))&&(!isset($_POST['Certification']))&&(!isset($_POST['Literature']))){
  $_SESSION['categoryselected']="category='Programming'";} 
elseif((isset($_POST['Programming']))&&(!isset($_POST['Certification']))&&(isset($_POST['Literature']))){
 $_SESSION['categoryselected']="category='Programming' or category='Literature'";} 
elseif((isset($_POST['Programming']))&&(isset($_POST['Certification']))&&(!isset($_POST['Literature']))){
  $_SESSION['categoryselected']="category='Programming' or category='Certification'";} 
elseif((isset($_POST['Programming']))&&(isset($_POST['Certification']))&&(isset($_POST['Literature']))){
 $_SESSION['categoryselected']="category='Programming' or category='Certification' or category='Literature'";}}
  else{if(!isset($_SESSION['categoryselected'])){$_SESSION['categoryselected']="category='Programming' or category='Certification' or category='Literature'";}
  elseif((isset($_SESSION['categoryselected']))&&(!(isset($_POST['navigate'])))&&(!(isset($_POST['submit'])))){$_SESSION['categoryselected']="category='Programming' or category='Certification' or category='Literature'";}}
//run the query now


$sql="select booksnumber,category,author,picturecode,title,newprice,yrpublish,backcoverdetails from catalog where ((version='Old') and (".$_SESSION['categoryselected'].")) LIMIT $p,$this->n";
//echo $sql;exit;
$result=$db->query($sql);

while($row=$result->fetch()){
$imgfile="books\\".$row['category']."\\".$row['picturecode'];
$imgfile=$imgfile.".jpg";
//if(!is_file("$imgfile")){$imgfile="books\default.gif";}
$short_str=substr($row['backcoverdetails'],0,350)."..... <a class='fontstyle4x' href='addtocart.php?booksnumber=".$row['booksnumber']."'>more info</a>";
$this->str.="<table border='0' width='100%' class='dashline4table'><tr><td align='center' width='118'><img src='".$imgfile."' width='115' height='153' alt='the book' border='1'  class='dashline'></td><td align='left' width='*'><table border='0' cellpadding='0' cellspacing='0' width='100%'><tr><td><strong>Title:- </strong><strong>".$row['title']."</strong></td><td align='right'> -- <a href='addtocart.php?booksnumber=".$row['booksnumber']."'>Buy now</a></td></tr></table><strong>Price= </strong><img src='oth_images/naira_sign.gif'>".$row['newprice']."<br><strong>Author:- </strong>".$row['author']."<br><strong>Year Published:- </strong>".$row['yrpublish']."<br><strong>Book Summary:- </strong>".nl2br($short_str)."</td></tr></table>";
       }
$this->str1="<tr><td>".$this->str."</td></tr>";
return $this->str1;
   }//close of function
   
   
   //page by page navigation
 function page_navigation(){

 $sql="select count(*) from catalog where ((version='Old') and (".$_SESSION['categoryselected']."))";
$result=mysql_query($sql);
$this->num=mysql_result($result,0,0);
//echo $num;
$this->num_pages=ceil($this->num/6);
if($this->num_pages<=0){$this->num_pages=1;}
//echo $num_pages;
$str2="<tr><td align='center'><input type='submit' name='navigate' value='<<' class='formstyle'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jump to Page <select name='page' class='formstyle'>";
$this->presentrow=($this->page-1)*6;
$str3="<option value='$this->presentrow'>--</option>";
for($i=1;$i<=$this->num_pages;$i++){
$this->beginrow=($i-1)*6;
$str3.="<option value='$this->beginrow'>$i</option>";
}
$str4="</select>&nbsp;&nbsp;&nbsp;<input type='submit' name='submit' value='Go' class='formstyle'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' name='navigate' value='>>' class='formstyle'></td></tr>";
$str5=$str2.$str3.$str4;
 return $str5;
 }
 //what page are we?
 function whatpage(){
 $this->page=floor($this->p/6)+1;
 return "<tr><td align='center'><hr width='100%' size='1' noshade class='hrstyle1'>Page <strong>".$this->page."</strong> of ".$this->num_pages."</td></tr>";
  }
  //next and back navigations
  function navigation(){
  if($_POST['navigate']=='<<'){
  $rpage=$_POST['page'];
  settype($rpage,"integer");
  $this->q=$rpage;
// echo $this->q;
  $this->q=$this->q-6;
  if($this->q<0){$this->q=0;}
// echo "|".$this->q;
 echo $this->rowcall($this->q);
 echo $this->page_navigation();
  echo $this->whatpage();}
  elseif($_POST['navigate']=='>>'){

//database connection begins

// Include the MySQL class
require_once('database/MySQL.php');

  require('database/connx.php');
require('database/strip_quotes.php');

// Connect to MySQL
$db = & new MySQL($host,$dbUser,$dbPass,$dbName);
   $sql="select count(*) from catalog where ((version='Old') and (".$_SESSION['categoryselected']."))";
$result=mysql_query($sql);
$this->num=mysql_result($result,0,0);
  $rpage=$_POST['page'];
  settype($rpage,"integer");
      $this->q=$rpage;
	//  echo $this->q;
$this->q=$this->q+6;
//echo "nav begins=".$this->q."|".$this->num."=end nav";
if($this->q>$this->num){$this->q=$this->q-6;}
//   echo "|".$this->q;
 echo $this->rowcall($this->q);
 echo $this->page_navigation();
  echo $this->whatpage();}
    }//end of function
 function jump_page(){
$this->p=$_POST['page'];
 echo $this->rowcall($this->p);
 echo $this->page_navigation();
  echo $this->whatpage();
 }
  
function displayinfo(){
echo $this->rowcall($this->p);
echo $this->page_navigation();
  echo $this->whatpage();
}



   }//end of rowbyrow class

	  ?>
	 