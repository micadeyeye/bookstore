<?php
$string1=<<<EOD
<tr><td width="39%" align="center" valign="top">
  <input name="units" type="hidden" class="formstyle" value="1" size="5">
</td><td width="61%" valign="top">
<table width="100%">
  <tr><td width="42%" rowspan="2" valign="top">Preferred Delivery Service</td>
<td width="58%"><input name="delivery" type="radio" value="DHL"> 
DHL Service</td></tr><tr><td><input name="delivery" type="radio" value="EMS" checked> 
EMS(Nipost) Service</td></tr></table>
</td></tr>
EOD;
$string2=<<<EOD
<tr><td width="39%" align="center" valign="top">
  <input name="units" type="hidden" class="formstyle" value="1" size="5">
</td><td width="61%" valign="top">
<table width="100%">
  <tr><td width="42%" rowspan="2" valign="top"><strong>Your Delivery Service : - </strong></td>
<td width="58%">XPRESS PARTNERS LIMITED(XPL)
<input name="delivery" type="hidden" value="XPL" checked>
</td></tr><tr><td><strong>Cost</strong> = <img src="oth_images/naira_sign.gif">0 (Free Delivery)</td></tr></table>
</td></tr>
EOD;
if($chkmemberstatus->get('membership')){
$email=$chkmemberstatus->get('email');
//database connection begins

// Include the MySQL class
require_once('database/MySQL.php');

require('database/connx.php');

// Connect to MySQL
$db = & new MySQL($host,$dbUser,$dbPass,$dbName);

$sql="select state from membersaccount where email='$email'";
	$result = $db->query($sql);
	$row=$result->fetch();
	$state=$row['state'];
	if($state=='Lagos'){echo $string2;}
	else{echo $string1;}
	}
else{echo $string1;}?>