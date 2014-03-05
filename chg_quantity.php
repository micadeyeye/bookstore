<table width="100%"  border="0" cellpadding="0" cellspacing="0">
  <tr>
       <td colspan="3"><table width="100%" cellpadding="0" cellspacing="0">
      <tr><td width="39%" align="center" valign="top">
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td>&nbsp;&nbsp;Number of units 
          <input type="hidden" name="booksnumber" value="<?php echo $_POST['booksnumber'];?>"></td>
        <td><input name="units" type="text" class="formstyle" id="units" value="<?php echo $_POST['units'];?>" size="5"></td>
      </tr>
	     <tr>
	       <td colspan="2">Good cost:-	         <?PHP if(isset($_POST['calculate'])){$adjustedprice=$membercart->newprice*$_POST['units'];echo "<strong><img src='oth_images/naira_sign.gif'>".$adjustedprice."</strong>";}else{$adjustedprice=$membercart->newprice;echo "<strong><img src='oth_images/naira_sign.gif'>".$adjustedprice."</strong>";}

?>
	         <input type="hidden" name="cost" value="<?php echo $membercart->newprice;?>"><?php if(isset($_POST['calculate'])){
$addmemberitem->updateitem();}?></td></tr>   
    </table>
&nbsp;&nbsp;&nbsp;      
</td>
      <td width="61%" valign="top">
<table width="100%">
  <tr><td valign="top">Title:- <?PHP echo "<strong>".$membercart->title."</strong>";?><input type="hidden" name="title" value="<?PHP echo $membercart->title;?>"><input type="hidden" name="email" value="<?php echo $chkmemberstatus->get('email');?>"></td>

  </tr><tr>
    <td align="left">Delivery Service:-&nbsp;&nbsp;
      <?php if(isset($_POST['delivery'])){if($_POST['delivery']=='DHL'){echo "<strong><img src='oth_images/naira_sign.gif'>".$_POST['dhlcost']."</strong> by DHL (".$_POST['dhldays']." working days max.)";}
	  elseif($_POST['delivery']=='EMS'){echo "<strong><img src='oth_images/naira_sign.gif'>".$_POST['emscost']."</strong> by EMS (".$_POST['emsdays']." working days max.)";}
	  elseif($_POST['delivery']=='XPL'){echo "<strong><img src='oth_images/naira_sign.gif'>0</strong> by XPL (1 working day max.)";}}
	  else{
	  
//database connection begins

// Include the MySQL class
require_once('database/MySQL.php');

require('database/connx.php');
require('database/strip_quotes.php');

// Connect to MySQL
$db = & new MySQL($host,$dbUser,$dbPass,$dbName);
$email=$chkmemberstatus->get('email');
$booksnumber=$_POST['booksnumber'];

$sql="select deliveryservice,deliverycost,deliverydays from chosenitems where email='$email' and booksnumber='$booksnumber'";
$result=$db->query($sql);
$row=$result->fetch();
echo "<strong><img src='oth_images/naira_sign.gif'>".$row['deliverycost']."</strong> by ".$row['deliveryservice']."(".$row['deliverydays']."working days max.)";
} ?></td>
  </tr></table>
</td></tr></table> </td>
   
  </tr>
  <tr><td colspan="3" align="center"><hr class="dashline" width="100%" size="1">
  <table width="70%">
    <tr>
  <td align="center"><input name="calculate" type="submit" class="formstyle" value="Update my cart/Calculate">
  </td></tr></table></td>
  </tr>
</table>