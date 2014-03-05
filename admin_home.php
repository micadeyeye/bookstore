<?php
  //session begins
require_once("database/session.php");
  $chkmemberstatus=new Session();
     require 'login_class.php';
	 if(!($chkmemberstatus->get('admin'))){header('location: login.php');}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>ADMINISTRATOR PAGE</title>
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

<link href="body.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#d5d5d5"  onLoad="MM_preloadImages('images/header_r2_c1_f2.gif','images/header_r2_c5_f3.gif','images/header_r2_c9_f4.gif','images/header_r2_c13_f5.gif','images/header_r2_c17_f6.gif','images/header_r2_c18_f6.gif','images/header_r2_c18_f7.gif','images/header_r2_c19_f7.gif');">

<table width="741" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="741" height="114" valign="top"><table border="0" cellpadding="0" cellspacing="0" width="743">
  <!-- fwtable fwsrc="header.png" fwbase="login-header.gif" fwstyle="Dreamweaver" fwdocid = "746665149" fwnested="0" -->
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
    <td colspan="20"><img name="loginheader_r1_c1" src="images/login-header_r1_c1.gif" width="743" height="89" border="0" alt=""></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="1" height="89" border="0"></td>
  </tr>
  <tr>
    <td colspan="3"><a href="catalog.php" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('loginheader_r2_c1','','images/login-header_r2_c1_f2.gif',1);"><img name="loginheader_r2_c1" src="images/login-header_r2_c1.gif" width="137" height="26" border="0" alt=""></a></td>
    <td><img name="loginheader_r2_c4" src="images/login-header_r2_c4.gif" width="1" height="26" border="0" alt=""></td>
    <td colspan="3"><a href="arrivals.php" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('loginheader_r2_c5','','images/login-header_r2_c5_f3.gif',1);"><img name="loginheader_r2_c5" src="images/login-header_r2_c5.gif" width="137" height="26" border="0" alt=""></a></td>
    <td><img name="loginheader_r2_c8" src="images/login-header_r2_c8.gif" width="1" height="26" border="0" alt=""></td>
    <td colspan="3"><a href="cart.php" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('loginheader_r2_c9','','images/login-header_r2_c9_f4.gif',1);"><img name="loginheader_r2_c9" src="images/login-header_r2_c9.gif" width="137" height="26" border="0" alt=""></a></td>
    <td><img name="loginheader_r2_c12" src="images/login-header_r2_c12.gif" width="1" height="26" border="0" alt=""></td>
    <td colspan="3"><a href="account.php" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('loginheader_r2_c13','','images/login-header_r2_c13_f5.gif',1);"><img name="loginheader_r2_c13" src="images/login-header_r2_c13.gif" width="137" height="26" border="0" alt=""></a></td>
    <td><img name="loginheader_r2_c16" src="images/login-header_r2_c16.gif" width="28" height="26" border="0" alt=""></td>
    <td><a href="search.php" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('loginheader_r2_c17','','images/login-header_r2_c17_f6.gif','loginheader_r2_c18','','images/login-header_r2_c18_f6.gif',1);"><img name="loginheader_r2_c17" src="images/login-header_r2_c17.gif" width="62" height="26" border="0" alt=""></a></td>
    <td><a href="login.php" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('loginheader_r2_c17','','images/login-header_r2_c17_f6.gif','loginheader_r2_c18','','images/login-header_r2_c18_f6.gif','loginheader_r2_c18','','images/login-header_r2_c18_f7.gif','loginheader_r2_c19','','images/login-header_r2_c19_f7.gif',1);"><img name="loginheader_r2_c18" src="images/login-header_r2_c18.gif" width="10" height="26" border="0" alt=""></a></td>
    <td><a href="login.php" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('loginheader_r2_c18','','images/login-header_r2_c18_f7.gif','loginheader_r2_c19','','images/login-header_r2_c19_f7.gif',1);"><img name="loginheader_r2_c19" src="images/login-header_r2_c19.gif" width="76" height="26" border="0" alt=""></a></td>
    <td><img name="loginheader_r2_c20" src="images/login-header_r2_c20.gif" width="16" height="26" border="0" alt=""></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="1" height="26" border="0"></td>
  </tr>
</table>



</td>
  </tr>
  <tr>
    <td height="444" valign="top" bgcolor="#CCCCCC"><form action="<?php echo $_SERVER['PHP_SELF'];?>" name="admin" method="post" enctype="multipart/form-data">
      <table width="70%"  border="0" align="center" cellpadding="2" cellspacing="2">
<tr>
  <td colspan="2" align="center"><strong class="fontstyle1">WELCOME ADMINISTRATOR</strong></td>
</tr>
<tr><td colspan="2" height="15"></td></tr>
<tr><td colspan="2" align="center"><a href="addbk.php"><strong>Click here to add or update books</strong></a></td>
  </tr>
  <tr><td colspan="2" height="15"></td></tr>
   <tr>
    <td colspan="2" align="center"><strong class="fontstyle1">Customer's Information</strong></td>
    
  </tr> 
  <tr>
    <td>E-mail address </td>
    <td><?php
	//database connection begins

// Include the MySQL class
require_once('database/MySQL.php');

require('database/connx.php');
require('database/strip_quotes.php');

// Connect to MySQL
$db = & new MySQL($host,$dbUser,$dbPass,$dbName);

$sql="select booksnumber,email from chosenitems where itemstatus='unsettled'";
$result=$db->query($sql);
echo "<select name='booksnumber' class='formstyle'>";
	while($row=$result->fetch()){
	echo "<option value='".$row['booksnumber']."'>".$row['email']."</option>";
	}
echo "</select>";

if(isset($_POST['showdetails'])){
$booksnumber=$_POST['booksnumber'];
$sql="select chosenitems.email,booksnumber,title,postaldate,requestdate,paymentconfirmationdate,deliveryconfirmationdate,membersaccount.surname,membersaccount.othernames,membersaccount.gsm1,membersaccount.gsm2 from chosenitems,membersaccount where (chosenitems.booksnumber='$booksnumber' and chosenitems.itemstatus='unsettled') and chosenitems.email=membersaccount.email";
$result=$db->query($sql);
$row=$result->fetch();
$booksnumber_value=$row['booksnumber'];
$surname=$row['surname'];
$othernames=$row['othernames'];
$gsm1=$row['gsm1'];
$gsm2=$row['gsm2'];
$email=$row['email'];
$title=$row['title'];
$requestdate=$row['requestdate'];
$postaldate=$row['postaldate'];
$paymentconfirmationdate=$row['paymentconfirmationdate'];
$deliveryconfirmationdate=$row['deliveryconfirmationdate'];
//concatenate surname and othernames
$fullnames=$surname." ".$othernames;
//concatenate gsm1 and gsm2
$gsm=$gsm1." / ".$gsm2;}
	
	
//Update customers' tracking details
if(isset($_POST['update'])){
$customer_email=$_POST['customer_email'];
$booksnumber=$_POST['booksnumber_value'];
$title=$_POST['title'];
$requestdate=$_POST['requestdate'];
$postaldate=$_POST['postaldate'];
$paymentconfirmationdate=$_POST['paymentconfirmationdate'];
$deliveryconfirmationdate=$_POST['deliveryconfirmationdate'];
$sql="UPDATE chosenitems SET
paymentconfirmationdate='$paymentconfirmationdate',
postaldate='$postaldate',
deliveryconfirmationdate='$deliveryconfirmationdate'
where (booksnumber='$booksnumber' and title='$title') and email='$customer_email'";
$db->query($sql);
}
	?>
      &nbsp;&nbsp;&nbsp;
      <input name="customer_email" type="hidden" class="formstyle" value="<?php if(isset($email)){echo $email;} ?>"> &nbsp;&nbsp;
	  <input name="booksnumber_value" type="hidden" class="formstyle" value="<?php if(isset($booksnumber_value)){echo $booksnumber_value;} ?>" size="4">
      <input name="showdetails" type="submit" class="formstyle" id="showdetails" value="Show details"></td>
  </tr>
  <tr>
    <td>Full names</td>
    <td><input name="fullnames" type="text" class="formstyle" value="<?php if(isset($fullnames)){echo $fullnames;} ?>" size="35">
	</td>
  </tr>
  <tr><td>GSM 1 & 2</td>
  <td>	<input name="gsm" type="text" class="formstyle" value="<?php if(isset($gsm)){echo $gsm;} ?>" size="45">
</td>
  </tr>
  <tr>
    <td>Book title </td>
    <td><input name="title" type="text" class="formstyle" value="<?php if(isset($title)){echo $title;} ?>" size="55"></td>
  </tr>
  <tr bgcolor="#99BFE6">
    <td>Request date </td>
    <td><input name="requestdate" type="text" class="formstyle" value="<?php if(isset($requestdate)){echo $requestdate;} ?>"> 
    (YYYY-MM-DD) </td>
  </tr>
  <tr bgcolor="#99BFE6">
    <td>Payment Confirmation date </td>
    <td><input name="paymentconfirmationdate" type="text" class="formstyle" value="<?php if(isset($paymentconfirmationdate)){echo $paymentconfirmationdate;} ?>">             (YYYY-MM-DD) </td>
  </tr>
  <tr bgcolor="#99BFE6">
    <td>Postal date </td>
    <td><input name="postaldate" type="text" class="formstyle" value="<?php if(isset($postaldate)){echo $postaldate;} ?>">             (YYYY-MM-DD) </td>
  </tr>
  <tr bgcolor="#99BFE6">
    <td>Delivery Confirmation date </td>
    <td><input name="deliveryconfirmationdate" type="text" class="formstyle" value="<?php if(isset($deliveryconfirmationdate)){echo $deliveryconfirmationdate;} ?>">             (YYYY-MM-DD) </td>
  </tr>
  <tr bgcolor="#99BFE6">
    <td>Status</td>
    <td><select name="itemstatus" class="formstyle">
     <option value="<?php if(isset($itemstatus)){echo $itemstatus;}?></option>
 <option value="unsettled">Unsettled</option>
      <option value="settled">Settled</option>
    </select></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input name="update" type="submit" class="formstyle" id="update" value="Update"></td>
  </tr>
    

  
  
  
  
 <tr><td colspan="2" height="15"></td></tr>
 <tr><td colspan="2" align="center"><strong class="boldlink">Update Delivery Costs/Note</strong><?php
 
$sql="select dhlcost,dhldays,emscost,emsdays,shippingdetails from catalog";
$result=$db->query($sql);
$row=$result->fetch();
 $dhlcost=$row['dhlcost'];
 $dhldays=$row['dhldays'];
 $emscost=$row['emscost'];
 $emsdays=$row['emsdays'];
$shippingdetails=$row['shippingdetails'];
 
 //Update shipping details
if(isset($_POST['update_delivery'])){

require('database/strip_quotes.php');

$dhlcost=$_POST['dhlcost'];
$dhldays=$_POST['dhldays'];
$emscost=$_POST['emscost'];
$emsdays=$_POST['emsdays'];
$shippingdetails=$_POST['shippingdetails'];
$sql="UPDATE catalog SET
dhlcost=$dhlcost,
dhldays=$dhldays,
emscost=$emscost,
emsdays=$emsdays,
shippingdetails='$shippingdetails'";
$db->query($sql);
}
 
 ?></td>
 </tr>
 <tr><td align="right">
   DHL Delivery Cost&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <input name="dhlcost" type="text" class="formstyle" value="<?php if(isset($dhlcost)){echo $dhlcost;} ?>" size="5">
</td>    
    <td>Days&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      <input name="dhldays" type="text" class="formstyle" value="<?php if(isset($dhldays)){echo $dhldays;} ?>" size="5"></td>

</tr>
 <tr>
   <td align="right">EMS Delivery Cost&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     <input name="emscost" type="text" class="formstyle" value="<?php if(isset($emscost)){echo $emscost;} ?>" size="5">   </td>
     <td>Days&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       <input name="emsdays" type="text" class="formstyle" value="<?php if(isset($emsdays)){echo $emsdays;} ?>" size="5"></td>

  </tr>

 <tr><td align="right" valign="top">Shipping Delivery Details:-</td>
 <td>
   <textarea name="shippingdetails" cols="55" rows="2" class="formstyle" id="shippingdetails"><?php if(isset($shippingdetails)){echo $shippingdetails;} ?></textarea>
 </td>    
     
</tr>
 <tr><td colspan="2" align="center"><input name="update_delivery" type="submit" class="formstyle" value="Update Delivery info"></td></tr>
 <tr><td colspan="2" height="15"></td></tr>
<tr><td colspan="2" align="center"><a href='account.php?chgpwd=true'><strong class='boldlink'>Change Password?</strong></a></td>
 </tr>
  <tr><td colspan="2" height="15"></td></tr>
  <tr><td colspan="2" align="center"><a href='login.php?logout=true'><strong class='boldlink'>Click here to log out</strong></a></td>
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