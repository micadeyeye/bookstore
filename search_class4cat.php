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
$category=$_POST['category'];
$this->category=$category;
$this->p=$p;
//what page sends request
 $this->page=floor($this->p/6)+1;
  //echo $this->page;exit;
//  echo $this->booktitle;exit;

	  $sql= "select booksnumber,title,author,publisher,backcoverdetails,isbn from catalog where category='$category' LIMIT $p,$this->n";
$result=$db->query($sql);


echo "<span class='fontstyle1'><strong>Search Result: $category Category</strong></span><hr class='dashline' width='100%' size='1'>";
	 echo "<table width='100%'>";
	  while($row=$result->fetch()){
	$short_str=substr($row['backcoverdetails'],0,250)."..... <a class='fontstyle4x' href='addtocart.php?booksnumber=".$row['booksnumber']."'>details here</a>";
echo "<tr><td><a href='addtocart.php?booksnumber=".$row['booksnumber']."'><strong>".$row['title']."</strong></a></td><td>".$row['isbn']."</td></tr>";
	  echo "<tr><td>".$row['author']."</td><td>".$row['publisher']."</td></tr>";
	echo "<tr><td colspan='2'>".$short_str."</td></tr>";
	echo "<tr><td colspan='2'><hr class='dashline' width='100%' size='1'></td></tr>";
}
echo "</table>";
   }//close of function
   
   
   //page by page navigation
 function page_navigation(){
$category=$_POST['category'];
$this->category=$category;
	  $sql= "select title,author,publisher,backcoverdetails,isbn from catalog where category='$category'";
$result=mysql_query($sql);
$this->num=mysql_num_rows($result);
//echo $num;
$this->num_pages=ceil($this->num/6);
if($this->num_pages<=0){$this->num_pages=1;}
//echo $this->num_pages;
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
$category=$_POST['category'];
$this->category=$category;
	  $sql= "select title,author,publisher,backcoverdetails,isbn from catalog where category='$category'";
$result=mysql_query($sql);
$this->num=mysql_num_rows($result);
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
 $this->rowcall($this->p);
echo $this->page_navigation();
  echo $this->whatpage();
}



   }//end of rowbyrow class
   
   
 	  
	
	  ?>
	 