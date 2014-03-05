<table class="dashline" width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><hr class="dashline" width="100%" size="1">
    <table width="100%"  border="0" cellspacing="2" cellpadding="2">
	<tr>
	  <td colspan="3" align="center" valign="bottom"><?php 
	  
	  
//database connection begins

// Include the MySQL class
require_once('database/MySQL.php');

require('database/connx.php');
require('database/strip_quotes.php');

// Connect to MySQL
$db = & new MySQL($host,$dbUser,$dbPass,$dbName);
$email=$chkmemberstatus->get('email');
$sql="select surname,othernames from membersaccount where email='$email'";
$result=$db->query($sql);
$row=$result->fetch();
echo "<strong class='fontstyle1'>".$row['surname']." ".$row['othernames']."'s Shopping Basket</strong>";?>
<?php
	 if((isset($_POST['additem']))&&($chkmemberstatus->get('email'))){
 require "displaysearch_class.php"; 
	  $membercart=new displaysearch;}
	  elseif((isset($_POST['calculate']))&&($chkmemberstatus->get('email'))){
 require "displaysearch_class.php"; 
	  $membercart=new displaysearch;}
	  

 Class addmemberitem {


function additem() {



//database connection begins

// Include the MySQL class
require_once('database/MySQL.php');

require('database/connx.php');
require('database/strip_quotes.php');

// Connect to MySQL
$db = & new MySQL($host,$dbUser,$dbPass,$dbName);


$this->booksnumber=$_POST['booksnumber'];
$this->email=$_POST['email'];
$this->title=$_POST['title'];
$this->cost=$_POST['cost'];
$this->units=$_POST['units'];
$this->deliveryservice=$_POST['delivery'];
$this->today=date('Y-m-d');

//confirm location of customer

$sql="select state from membersaccount where email='$this->email'";
	$result = $db->query($sql);
	$row=$result->fetch();
	$state=$row['state'];
	
	if($state=='Lagos'){$this->deliverycost=0;$this->deliverydays=1;$this->deliveryservice='XPL';}
elseif($_POST['delivery']=='DHL'){$this->deliverycost=$_POST['dhlcost'];$this->deliverydays=$_POST['dhldays'];}
elseif($_POST['delivery']=='EMS'){$this->deliverycost=$_POST['emscost'];$this->deliverydays=$_POST['emsdays'];}
$sql="insert chosenitems set
booksnumber='$this->booksnumber',
email='$this->email',
title='$this->title',
unitcost='$this->cost',
cost='$this->cost',
units='$this->units',
deliveryservice='$this->deliveryservice',
unitdeliverycost='$this->deliverycost',
deliverycost='$this->deliverycost',
deliverydays='$this->deliverydays',
requestdate='$this->today'";
$result=$db->query($sql);
      }//end of function

//update item function

function updateitem() {



//database connection begins

// Include the MySQL class
require_once('database/MySQL.php');

require('database/connx.php');
require('database/strip_quotes.php');

// Connect to MySQL
$db = & new MySQL($host,$dbUser,$dbPass,$dbName);


$this->booksnumber=$_POST['booksnumber'];
$this->email=$_POST['email'];
$this->units=$_POST['units'];
$this->cost=$_POST['cost'];
$sql="select unitcost,unitdeliverycost,deliverycost from chosenitems where email='$this->email' and booksnumber='$this->booksnumber'";
$result=$db->query($sql);
$row=$result->fetch();
$this->unitdeliverycost=$row['unitdeliverycost'];
$this->adjustedprice=$this->cost*$this->units;
//charge based on number of uints
if($this->units==1){$this->token_charged=$this->unitdeliverycost;}
elseif(($this->units>=2)&&($this->units<=5)){$this->token_charged=($this->unitdeliverycost+500);}
elseif(($this->units>=6)&&($this->units<=10)){$this->token_charged=($this->unitdeliverycost+300);}
elseif(($this->units>=11)&&($this->units<=24)){$this->token_charged=($this->unitdeliverycost+200);}
elseif($this->units>24){$this->token_charged=($this->unitdeliverycost+200); echo "<strong class='fontstyle2'>-Sorry, we can't ship such quantity</strong>";}
$this->newdeliverycost=$this->token_charged;
//echo "|".$this->adjustedprice;

if(!($this->units>24)){$sql="update chosenitems set
cost='$this->adjustedprice',deliverycost='$this->newdeliverycost',units='$this->units' where booksnumber='$this->booksnumber' and email='$this->email'";
$result=$db->query($sql);}
      }//end of updateitem function

	               }//end of class
				   
	$addmemberitem=new addmemberitem; 
if(isset($_POST['additem'])){
$addmemberitem->additem();}

//the delete action
if((isset($_GET['delete']))&&($_GET['delete']=='YES')){
$item=$_GET['bookdelete'];
$email=$chkmemberstatus->get('email');
$sql="DELETE FROM
chosenitems
WHERE
booksnumber='$item' and email='$email'";
// Perform a query getting back a MySQLResult object
$db->query($sql);

}
	  ?>
	  <hr class="dashline" width="100%" size="1"></td>
	</tr>
  
</table>
</td>
 
  </tr>
  <tr>
   
    <td>
      <?php
if((isset($_POST['additem']))&&($chkmemberstatus->get('email'))){require "chg_quantity.php";}
elseif((isset($_POST['calculate']))&&($chkmemberstatus->get('email'))){require "chg_quantity.php";}

	  ?>
</td>
  </tr>
  <tr>
  
    <td><hr class="dashline" width="100%" size="1">
	<?php
	
	
//database connection begins

// Include the MySQL class
require_once('database/MySQL.php');

require('database/connx.php');
require('database/strip_quotes.php');

// Connect to MySQL
$db = & new MySQL($host,$dbUser,$dbPass,$dbName);
$email=$chkmemberstatus->get('email');


$sql="select booksnumber,title,cost,units,deliveryservice,deliverycost,deliverydays from chosenitems where email='$email' and  itemstatus='unsettled'";
$result=$db->query($sql);
echo "<table align='center' border='1' class='dashline' cellpadding='2'>";
echo "<tr><td><strong>Book Title</strong></td><td><strong>Book(s) Price</strong></td><td><strong>Unit(s)</strong></td><td><strong>Delivery Service</strong></td><td><strong>Delivery Cost</strong></td><td></td></tr>";
while($row=$result->fetch()){
echo "<tr><td>".$row['title']."</td><td align='center'>".$row['cost']."</td><td align='center'>".$row['units']."</td><td align='center'>".$row['deliveryservice']."</td><td align='center'>".$row['deliverycost']."</td><td align='center'><a href='addtocart.php?delete=YES&bookdelete=".$row['booksnumber']."' name=delete>Delete</a></td></tr>";
}
echo "</table>";
echo "<table align='center' width='80%'><tr><td><input name='cancel'  onclick=\"javascript:location='catalog.php'\" type='button' class='formstyle' value='Continue shopping'></td><td><input name='checkout'  onclick=\"javascript:location='cart.php'\" type='button' class='formstyle' value='Checkout/Proceed to buy'></td></table>";
 ?></td>
  </tr>
</table>