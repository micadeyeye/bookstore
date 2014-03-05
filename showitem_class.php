<?php
	require 'displaysearch_class.php';
$showitem=new displaysearch;
if(!(isset($_GET['booksnumber']))){$booksnumber=$_POST['booksnumber'];$chkmemberstatus->set("booksnumber","$booksnumber");}else{$booksnumber=$_GET['booksnumber'];$chkmemberstatus->set("booksnumber","$booksnumber");}
?>



	<table class="dashline" width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><hr class="dashline" width="100%" size="1">
    <table width="100%"  border="0" cellspacing="2" cellpadding="2">
	<tr>
	  <td colspan="3" align="center" valign="bottom"><?php echo "<strong class='fontstyle1'>".$showitem->title."</strong>";?><input type="hidden" name="title" value="<?php echo $showitem->title;?>">
	  <hr class="dashline" width="100%" size="1"></td>
	</tr>
  <tr>
    <td width="45%" valign="top"><table width="100%"  border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td>Author: <input type="hidden" name="booksnumber" value="<?php echo $_GET['booksnumber'];?>"><input type="hidden" name="email" value="<?php echo $chkmemberstatus->get('email');?>"></td><td><?php echo $showitem->author;?></td>
  </tr>
  <tr>
    <td>Publisher: </td><td><?php echo $showitem->publisher;?></td>
  </tr>
  <tr>
    <td>Year Published: </td><td><?php echo $showitem->yrpublish;?></td>
  </tr>
  <tr>
    <td>Price: </td><td><strong><?php echo "<img src='oth_images/naira_sign.gif'>".$showitem->newprice;?></strong><input type="hidden" name="cost" value="<?php echo $showitem->newprice;?>"></td>
  </tr>
  <tr>
    <td>Pages: </td><td><?php echo $showitem->pages;?></td>
  </tr>
  <tr>
    <td>Category: </td><td><?php echo $showitem->category;?></td>
  </tr>
  <tr>
    <td>ISBN: </td><td><?php echo $showitem->isbn;?></td>
  </tr>
  <tr>
    <td>New Arrival: </td>
    <td><?php if($showitem->version=='Old'){ echo 'NO';}elseif($showitem->version=='New'){ echo 'YES';}?></td>
  </tr>
  <tr>
    <td>Availability: </td><td><?php echo $showitem->availability;?></td>
  </tr>
  <tr>
    <td>DHL Delivery Cost: </td><td valign="top"><?php echo "<strong><img src='oth_images/naira_sign.gif'>".$showitem->dhlcost."</strong> (in ".$showitem->dhldays." days max.)";?>
      <input type="hidden" name="dhlcost" value="<?php echo $showitem->dhlcost;?>"><input type="hidden" name="dhldays" value="<?php echo $showitem->dhldays;?>"></td>
  </tr>
    <tr>
    <td>EMS(Nipost) Delivery Cost: </td><td valign="top"><?php echo "<strong><img src='oth_images/naira_sign.gif'>".$showitem->emscost."</strong> (in ".$showitem->emsdays." days max.)";?>
      <input type="hidden" name="emscost" value="<?php echo $showitem->emscost;?>"><input type="hidden" name="emsdays" value="<?php echo $showitem->emsdays;?>"></td>
  </tr>
  <tr>
    <td colspan="2" align="right"><strong>Free Delivery with Lagos</strong></td>
  </tr>
    </table></td>
    <td></td>
    <td width="55%" valign="top"><?php
	$imgfile="books\\".$showitem->category."\\".$showitem->picturecode;
$imgfile=$imgfile.".jpg";
//if(!is_file("$imgfile")){$imgfile="books\default.gif";}
 echo "<img align='right' src='".$imgfile."' width='115' height='153' alt='the book' border='1'  class='dashline'>".nl2br($showitem->backcoverdetails);?>
</td>
  </tr>
  <tr><td colspan="3"><hr class="dashline" width="100%" size="1">
  <strong>Shipping details</strong>:- <?php echo $showitem->shippingdetails;?></td>
  </tr>
</table><hr class="dashline" width="100%" size="1">
</td>
 
  </tr>
  <tr>
   
    <td>
      <table width="100%"  border="0" cellpadding="0" cellspacing="0">
  <tr>
       <td colspan="3"><table width="100%" cellpadding="0" cellspacing="0">
      <?php
	  require "delivery_charge.php";
	  ?>
<tr><td colspan="3">
<hr class="dashline" width="100%" size="1">
<strong class="fontstyle1">Please Note:</strong> <br>
  - 
  The online price  of a book is slightly different from the price at our local store. <br>
  - Choose a delivery service/method before adding item to your cart.</td>
</tr>
       </table> </td>
   
  </tr>
  <tr><td colspan="3" align="center"><hr class="dashline" width="100%" size="1">
  <table width="70%"><tr><td><input name="cancel"  onclick="javascript: history.go(-1);" type="button" class="formstyle" value="Cancel/Take a new item"></td>
  <td><input name="additem" type="submit" class="formstyle" id="additem" value="Add item to my cart"></td></tr></table></td>
  </tr>
</table>
</td>
  </tr>
  <tr>
  
    <td>&nbsp;</td>
  </tr>
</table>
