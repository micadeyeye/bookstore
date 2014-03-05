<?php
require("database/strip_quotes.php");

require("database/strip_quotes_addslash.php");

require "database/session.php";
  $chkmemberstatus=new Session();
    
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

//-->
</script>
<script language="javascript">
function checkpwd(){
npwd=document.account.password.value;
cpwd=document.account.cpassword.value;
npwd=npwd.toString();
cpwd=cpwd.toString();
if((npwd!=cpwd)||((npwd=='')&&(cpwd==''))){alert("Your Password doesn't match");
location='account.php';}
}</script>
<link href="body.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#d5d5d5"  onLoad="MM_preloadImages('images/header_r2_c1_f2.gif','images/header_r2_c5_f3.gif','images/header_r2_c9_f4.gif','images/header_r2_c13_f5.gif','images/header_r2_c17_f6.gif','images/header_r2_c18_f6.gif','images/header_r2_c18_f7.gif','images/header_r2_c19_f7.gif');">

<table width="741" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="741" height="114" valign="top"><table border="0" cellpadding="0" cellspacing="0" width="743">
  <!-- fwtable fwsrc="header.png" fwbase="myacct-header.gif" fwstyle="Dreamweaver" fwdocid = "746665149" fwnested="0" -->
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
    <td colspan="20"><img name="myacctheader_r1_c1" src="images/myacct-header_r1_c1.gif" width="743" height="89" border="0" alt=""></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="1" height="89" border="0"></td>
  </tr>
  <tr>
    <td colspan="3"><a href="catalog.php" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('myacctheader_r2_c1','','images/myacct-header_r2_c1_f2.gif',1);"><img name="myacctheader_r2_c1" src="images/myacct-header_r2_c1.gif" width="137" height="26" border="0" alt=""></a></td>
    <td><img name="myacctheader_r2_c4" src="images/myacct-header_r2_c4.gif" width="1" height="26" border="0" alt=""></td>
    <td colspan="3"><a href="arrivals.php" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('myacctheader_r2_c5','','images/myacct-header_r2_c5_f3.gif',1);"><img name="myacctheader_r2_c5" src="images/myacct-header_r2_c5.gif" width="137" height="26" border="0" alt=""></a></td>
    <td><img name="myacctheader_r2_c8" src="images/myacct-header_r2_c8.gif" width="1" height="26" border="0" alt=""></td>
    <td colspan="3"><a href="cart.php" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('myacctheader_r2_c9','','images/myacct-header_r2_c9_f4.gif',1);"><img name="myacctheader_r2_c9" src="images/myacct-header_r2_c9.gif" width="137" height="26" border="0" alt=""></a></td>
    <td><img name="myacctheader_r2_c12" src="images/myacct-header_r2_c12.gif" width="1" height="26" border="0" alt=""></td>
    <td colspan="3"><a href="account.php" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('myacctheader_r2_c13','','images/myacct-header_r2_c13_f5.gif',1);"><img name="myacctheader_r2_c13" src="images/myacct-header_r2_c13.gif" width="137" height="26" border="0" alt=""></a></td>
    <td><img name="myacctheader_r2_c16" src="images/myacct-header_r2_c16.gif" width="28" height="26" border="0" alt=""></td>
    <td><a href="search.php" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('myacctheader_r2_c17','','images/myacct-header_r2_c17_f6.gif','myacctheader_r2_c18','','images/myacct-header_r2_c18_f6.gif',1);"><img name="myacctheader_r2_c17" src="images/myacct-header_r2_c17.gif" width="62" height="26" border="0" alt=""></a></td>
    <td><a href="login.php" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('myacctheader_r2_c17','','images/myacct-header_r2_c17_f6.gif','myacctheader_r2_c18','','images/myacct-header_r2_c18_f6.gif','myacctheader_r2_c18','','images/myacct-header_r2_c18_f7.gif','myacctheader_r2_c19','','images/myacct-header_r2_c19_f7.gif',1);"><img name="myacctheader_r2_c18" src="images/myacct-header_r2_c18.gif" width="10" height="26" border="0" alt=""></a></td>
    <td><a href="login.php" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('myacctheader_r2_c18','','images/myacct-header_r2_c18_f7.gif','myacctheader_r2_c19','','images/myacct-header_r2_c19_f7.gif',1);"><img name="myacctheader_r2_c19" src="images/myacct-header_r2_c19.gif" width="76" height="26" border="0" alt=""></a></td>
    <td><img name="myacctheader_r2_c20" src="images/myacct-header_r2_c20.gif" width="16" height="26" border="0" alt=""></td>
    <td><img src="images/spacer.gif" alt="" name="undefined_2" width="1" height="26" border="0"></td>
  </tr>
</table>



</td>
  </tr>
  <tr>
    <td height="444" valign="top" bgcolor="#CCCCCC"><form action="<?php echo $_SERVER['PHP_SELF'];?>" name="account" method="post" enctype="multipart/form-data">
      <table width="70%"  border="0" align="center" cellpadding="2" cellspacing="0">
  <caption align="top">
  <strong>  My Account Information
  </strong>&nbsp;&nbsp;&nbsp;&nbsp;
  <?php
    if(!(((isset($_GET['chgpwd']))&&($_GET['chgpwd']=='true'))&&(($chkmemberstatus->get("membership"))))){
echo "<a href='account.php?chgpwd=true'>Change Password?</a>";}
    ?>
  </caption>
  <tr>
    <td height="10" colspan="2" align="right" valign="bottom">
	<center><?php
		if(isset($_POST['Submit'])){
require("addacct_class.php");
echo $addacct->response;
}
	if(isset($_POST['chgpwdsubmit'])){
require("chgpwd_class.php");}

	?></center><hr width="100%" size="1" noshade>
	<center><?php
	  if((!($chkmemberstatus->get("membership")))&&(((isset($_GET['chgpwd']))&&($_GET['chgpwd']=='true')))){echo "<strong class='fontstyle1'>Sorry, you must log in first!!!</strong>";}

	?></center>
	</td>
  </tr><?php
  if((isset($_GET['chgpwd']))&&($_GET['chgpwd']=='true')){
  if($chkmemberstatus->get("membership")){require 'chgpwd_form.php';}

 }else{
   if($chkmemberstatus->get("membership")){require 'viewacct_class.php';}
else{require 'account_form.php';}
         }
  ?>
 
  
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