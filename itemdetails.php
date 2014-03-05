<table class="dashline" width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><hr class="dashline" width="100%" size="1">
    <table width="100%"  border="0" cellspacing="2" cellpadding="2">
	<tr>
	  <td colspan="3" align="center" valign="bottom"><?php echo "<strong class='fontstyle1'>".$showitem->title."</strong>";?>
	  <hr class="dashline" width="100%" size="1"></td>
	</tr>
  <tr>
    <td width="45%"><table width="100%"  border="1" cellpadding="0" cellspacing="0" class="dashline">
  <tr>
    <td>Author: <input type="hidden" name="booksnumber" value="<?php echo $_GET['booksnumber'];?>"></td><td><?php echo $showitem->author;?></td>
  </tr>
  <tr>
    <td>Publisher: </td><td><?php echo $showitem->publisher;?></td>
  </tr>
  <tr>
    <td>Year Published: </td><td><?php echo $showitem->yrpublish;?></td>
  </tr>
  <tr>
    <td>Price: </td><td><?php echo $showitem->newprice;?></td>
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
    <td>Version: </td><td><?php echo $showitem->version;?></td>
  </tr>
  <tr>
    <td>Availability: </td><td><?php echo $showitem->availability;?></td>
  </tr>
  <tr>
    <td>DHL Delivery Cost: </td><td><?php echo $showitem->dhlcost." (".$showitem->dhldays."days)";?></td>
  </tr>
    <tr>
    <td>EMS(Nipost) Delivery Cost: </td><td><?php echo $showitem->emscost." (".$showitem->emsdays."days)";?></td>
  </tr>
    <tr>
    <td>Shipping Details: </td><td><?php echo $showitem->shippingdetails;?></td>
  </tr>
</table></td>
    <td><img src="oth_images/vrline.jpg" width="1" height="250"></td>
    <td width="55%"><?php echo "<img align='right' src='books\\".$showitem->category."\\".$showitem->picturecode."' width='150' height='191' alt='the book' border='1'  class='dashline'>".$showitem->backcoverdetails?>
</td>
  </tr>
</table><hr class="dashline" width="100%" size="1">
</td>
 
  </tr>
  <tr>
   
    <td>
      <table width="100%"  border="0" cellpadding="0" cellspacing="0">
  <tr>
       <td colspan="3"><table width="100%" cellpadding="0" cellspacing="0">
      <tr><td width="39%" align="center" valign="top">
	Number of units&nbsp;&nbsp;&nbsp;      
      <input name="units" type="text" class="formstyle" value="1" size="5">
</td><td width="61%" valign="top">
<table width="100%">
  <tr><td width="42%" rowspan="2" valign="top">Preferred Delivery Service</td>
<td width="58%"><input name="delivery" type="radio" value="DHL" checked> DHL Service</td></tr><tr><td><input name="delivery" type="radio" value="EMS"> EMS(Nipost) Service</td></tr></table>
</td></tr></table> </td>
   
  </tr>
  <tr><td colspan="3" align="center"><hr class="dashline" width="100%" size="1">
  <table width="70%"><tr><td><input name="checkout"  onclick="javascript: history.go(-1);" type="button" class="formstyle" value="Cancel/Take a new item"></td>
  <td><input name="additem" type="submit" class="formstyle" id="additem" value="Add item to my cart"></td></tr></table></td>
  </tr>
</table>
</td>
  </tr>
  <tr>
  
    <td>&nbsp;</td>
  </tr>
</table>