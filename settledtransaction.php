<?php
  //session begins
require_once("database/session.php");
	
 Class shoppingdetails extends Session{


function showdetails() {



//database connection begins

// Include the MySQL class
require_once('database/MySQL.php');

require('database/connx.php');
require('database/strip_quotes.php');
$email=$this->get('email');
// Connect to MySQL
$db = & new MySQL($host,$dbUser,$dbPass,$dbName);
$sql="select * from chosenitems where email='$email' and itemstatus='settled'";
$result=$db->query($sql);
$allitemsoverallcost=0;
echo "<table align='center' border='0' cellpadding='2'>";
while($row=$result->fetch()){
$overallcost=$row['cost']+$row['deliverycost'];
$allitemsoverallcost+=$overallcost;
echo "<tr bgcolor='#9a9a9a'><td>Book Title</td><td><strong>".$row['title']."</strong></td><td>Delivery Service</td><td><strong>".$row['deliveryservice']."</strong></td></tr>"; 
echo "<tr><td>Number of Units</td><td><strong>".$row['units']."</strong></td><td>Total Cost</td><td><strong><img src='oth_images/naira_sign.gif'>$overallcost</strong></td></tr>"; 
echo "<tr><td>Request Date</td><td>".$row['requestdate']."</td><td>Payment Confirmation Date</td><td>".$row['paymentconfirmationdate']."</td></tr>"; 
echo "<tr><td>Postal Date</td><td>".$row['postaldate']."</td><td>Delivery Confirmation Date</td><td>".$row['deliveryconfirmationdate']."</td></tr>"; 
}
echo "<tr><td colspan='4' align='right'><hr class='dashline' width='100%' size='1'><strong class='fontstyle1'>Total cost of completed transactions=</strong><strong><img src='oth_images/naira_sign.gif'>$allitemsoverallcost</strong></td></tr></table>";

//to determine the payment method
$sql="select paymentmode from membersaccount where email='$email'";
$result=$db->query($sql);
$row=$result->fetch();
$this->paymentmode=$row['paymentmode'];
      }//end of function

	               }//end of class
				   
	  $shoppingdetails=new shoppingdetails;
				if(!($shoppingdetails->get('email'))){header('location: addtocart.php');}
   
				   
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>IT-Books+  .:: We sell programming, certification, plus motivational books within Nigeria ::.</title>
<script language="JavaScript">
<!--
function displayimg(){
imgsrc=document.admin.picture.value;
document.admin.bookpixs.src=eval("imgsrc");
}




function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}
function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
 var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
   var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
   if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
<script language="javascript">
<!--
function jump(xpage){
location=eval('xpage');
}
//--></script>
<link href="body.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#d5d5d5"  onLoad="MM_preloadImages('images/header_r2_c1_f2.gif','images/header_r2_c5_f3.gif','images/header_r2_c9_f4.gif','images/header_r2_c13_f5.gif','images/header_r2_c17_f6.gif','images/header_r2_c18_f6.gif','images/header_r2_c18_f7.gif','images/header_r2_c19_f7.gif');">

<table width="741" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="741" height="114" valign="top"><table border="0" cellpadding="0" cellspacing="0" width="743">
  <!-- fwtable fwsrc="header.png" fwbase="mycart-header.gif" fwstyle="Dreamweaver" fwdocid = "746665149" fwnested="0" -->
  <tr>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="32" height="1" border="0"></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="51" height="1" border="0"></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="54" height="1" border="0"></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="1" height="1" border="0"></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="25" height="1" border="0"></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="85" height="1" border="0"></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="27" height="1" border="0"></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="1" height="1" border="0"></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="38" height="1" border="0"></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="54" height="1" border="0"></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="45" height="1" border="0"></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="1" height="1" border="0"></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="27" height="1" border="0"></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="81" height="1" border="0"></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="29" height="1" border="0"></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="28" height="1" border="0"></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="62" height="1" border="0"></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="10" height="1" border="0"></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="76" height="1" border="0"></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="16" height="1" border="0"></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="1" height="1" border="0"></td>
  </tr>
  <tr>
    <td colspan="20"><img name="mycartheader_r1_c1" src="images/mycart-header_r1_c1.gif" width="743" height="89" border="0" alt=""></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="1" height="89" border="0"></td>
  </tr>
  <tr>
    <td colspan="3"><a href="catalog.php" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('mycartheader_r2_c1','','images/mycart-header_r2_c1_f2.gif',1);"><img name="mycartheader_r2_c1" src="images/mycart-header_r2_c1.gif" width="137" height="26" border="0" alt=""></a></td>
    <td><img name="mycartheader_r2_c4" src="images/mycart-header_r2_c4.gif" width="1" height="26" border="0" alt=""></td>
    <td colspan="3"><a href="arrivals.php" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('mycartheader_r2_c5','','images/mycart-header_r2_c5_f3.gif',1);"><img name="mycartheader_r2_c5" src="images/mycart-header_r2_c5.gif" width="137" height="26" border="0" alt=""></a></td>
    <td><img name="mycartheader_r2_c8" src="images/mycart-header_r2_c8.gif" width="1" height="26" border="0" alt=""></td>
    <td colspan="3"><a href="cart.php" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('mycartheader_r2_c9','','images/mycart-header_r2_c9_f4.gif',1);"><img name="mycartheader_r2_c9" src="images/mycart-header_r2_c9.gif" width="137" height="26" border="0" alt=""></a></td>
    <td><img name="mycartheader_r2_c12" src="images/mycart-header_r2_c12.gif" width="1" height="26" border="0" alt=""></td>
    <td colspan="3"><a href="account.php" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('mycartheader_r2_c13','','images/mycart-header_r2_c13_f5.gif',1);"><img name="mycartheader_r2_c13" src="images/mycart-header_r2_c13.gif" width="137" height="26" border="0" alt=""></a></td>
    <td><img name="mycartheader_r2_c16" src="images/mycart-header_r2_c16.gif" width="28" height="26" border="0" alt=""></td>
    <td><a href="search.php" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('mycartheader_r2_c17','','images/mycart-header_r2_c17_f6.gif','mycartheader_r2_c18','','images/mycart-header_r2_c18_f6.gif',1);"><img name="mycartheader_r2_c17" src="images/mycart-header_r2_c17.gif" width="62" height="26" border="0" alt=""></a></td>
    <td><a href="login.php" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('mycartheader_r2_c17','','images/mycart-header_r2_c17_f6.gif','mycartheader_r2_c18','','images/mycart-header_r2_c18_f6.gif','mycartheader_r2_c18','','images/mycart-header_r2_c18_f7.gif','mycartheader_r2_c19','','images/mycart-header_r2_c19_f7.gif',1);"><img name="mycartheader_r2_c18" src="images/mycart-header_r2_c18.gif" width="10" height="26" border="0" alt=""></a></td>
    <td><a href="login.php" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('mycartheader_r2_c18','','images/mycart-header_r2_c18_f7.gif','mycartheader_r2_c19','','images/mycart-header_r2_c19_f7.gif',1);"><img name="mycartheader_r2_c19" src="images/mycart-header_r2_c19.gif" width="76" height="26" border="0" alt=""></a></td>
    <td><img name="mycartheader_r2_c20" src="images/mycart-header_r2_c20.gif" width="16" height="26" border="0" alt=""></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="1" height="26" border="0"></td>
  </tr>
</table>



</td>
  </tr>
  <tr>
    <td height="444" valign="top" bgcolor="#CCCCCC"><form action="<?php echo $_SERVER['PHP_SELF'];?>" name="admin" method="post" enctype="multipart/form-data">
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
$email=$shoppingdetails->get('email');
$sql="select surname,othernames from membersaccount where email='$email'";
$result=$db->query($sql);
$row=$result->fetch();
echo "Welcome <strong class='fontstyle1'>".$row['surname']." ".$row['othernames']."</strong><p>";
echo "<strong class='fontstyle1'>Your Completed Business Transactions</strong>";
?>

	  <hr class="dashline" width="100%" size="1"></td>
	</tr>
  
</table>
</td>
 
  </tr>
  <tr>
   
    <td>
      <?php
if($shoppingdetails->get('email')){
$shoppingdetails->showdetails();}
	  ?>
	  <hr class="dashline" width="100%" size="1"> 
	    <p align="center"><a href="cart.php">Back to your shopping cart</a></p>
	  <P align="center">To prevent account hijack, you are strongly advised to log out when you are through with this site.<br>
	  <a href='login.php?logout=true'><strong class='boldlink'>Click here to log out</strong></a> </P>
</td>
  </tr>
  <tr>
    <td>&nbsp;	</td>
  </tr>
</table>
	    </form></td>
  </tr>
  <tr>
    <td height="19" valign="top"><table border="0" cellpadding="0" cellspacing="0" width="743">
  <!-- fwtable fwsrc="footer.png" fwbase="footer.gif" fwstyle="Dreamweaver" fwdocid = "770167371" fwnested="0" -->
  <tr>
    <td><img src="images/spacer.gif" width="38" height="1" border="0" alt=""></td>
    <td><img src="images/spacer.gif" width="666" height="1" border="0" alt=""></td>
    <td><img src="images/spacer.gif" width="39" height="1" border="0" alt=""></td>
    <td><img src="images/spacer.gif" width="1" height="1" border="0" alt=""></td>
  </tr>
  <tr>
    <td colspan="3"><img name="footer_r1_c1" src="images/footer_r1_c1.gif" width="743" height="10" border="0" alt=""></td>
    <td><img src="images/spacer.gif" width="1" height="10" border="0" alt=""></td>
  </tr>
  <tr>
    <td rowspan="2"><img name="footer_r2_c1" src="images/footer_r2_c1.gif" width="38" height="26" border="0" alt=""></td>
    <td valign="top" bgcolor="#7B7B9D"><?php
	require 'footer.php';
	?></td>
    <td rowspan="2"><img name="footer_r2_c3" src="images/footer_r2_c3.gif" width="39" height="26" border="0" alt=""></td>
    <td><img src="images/spacer.gif" width="1" height="24" border="0" alt=""></td>
  </tr>
  <tr>
    <td><img name="footer_r3_c2" src="images/footer_r3_c2.gif" width="666" height="2" border="0" alt=""></td>
    <td><img src="images/spacer.gif" width="1" height="2" border="0" alt=""></td>
  </tr>
</table>
&nbsp;</td>
  </tr>
</table>
</body>
</html>