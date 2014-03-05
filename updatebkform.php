<table align="center" cellpadding="1" cellspacing="0">
   <tr>
        <td>Author</td>
        <td><textarea name="author" cols="55" rows="2" class="formstyle" id="author">
		<?php 
		//instiantiate the class
		$bookdetails=new displaysearch();
		echo $bookdetails->author;
		?>
				</textarea>
				<input type="hidden" name="booksnumber" value="<?php echo $booksnumber; ?>">
				</td>
        <td rowspan="8">      
		  
<hr size="1" width="100%" noshade class="hrstyle1">
<strong>&nbsp;&nbsp;&nbsp;THE FRONT COVER
</strong>
<hr size="1" width="100%" noshade class="hrstyle1">
<br><img name="bookpixs" src="<?php 
		echo "books\\$bookdetails->category\\$bookdetails->picturecode.jpg";
		?>" width="150" height="191" alt="the book" border="1"><br>
Book Number:- <?php 
		echo $bookdetails->booksnumber;
		?></td>
      </tr>
      <tr>
        <td>Title</td>
        <td><textarea name="title" cols="55" rows="2" class="formstyle" id="title"><?php 
		echo $bookdetails->title;
		?></textarea></td>
      </tr>
      <tr>
        <td>Publisher</td>
        <td><textarea name="publisher" cols="55" rows="2" class="formstyle" id="publisher"><?php 
		echo $bookdetails->publisher;
		?></textarea></td>
      </tr>
	  <tr>
        <td>Backcover Details</td>
        <td><textarea name="backcoverdetails" cols="55" rows="2" class="formstyle" id="backcoverdetails"><?php 
		echo $bookdetails->backcoverdetails;
		?></textarea></td>
      </tr>
      <tr>
        <td>Year Published </td>
        <td><input name="yrpublish" type="text" class="formstyle" id="yrpublish" value="<?php 
		echo $bookdetails->yrpublish;
		?>"></td>
      </tr>
      <tr>
        <td>Old Price</td>
        <td><input name="oldprice" type="text" class="formstyle" id="oldprice" value="<?php 
		echo $bookdetails->oldprice;
		?>"></td>
      </tr>
	  <tr>
        <td>New Price</td>
        <td><input name="newprice" type="text" class="formstyle" id="newprice" value="<?php 
		echo $bookdetails->newprice;
		?>"></td>
      </tr>
      <tr>
        <td>Pages</td>
        <td><input name="pages" type="text" class="formstyle" id="pages" value="<?php 
		echo $bookdetails->pages;
		?>"></td>
      </tr>
      <tr>
        <td>Category</td>
        <td><select name="category" class="formstyle" id="category">
		<option value="<?php echo $bookdetails->category;?>"><?php echo $bookdetails->category;?></option>
          <option value="Programming">Programming</option>
          <option value="Certification">Certification</option>
          <option value="Literature">Literature</option>
        </select></td>
      </tr>
      <tr>
        <td>ISBN</td>
        <td><input name="isbn" type="text" class="formstyle" id="isbn" value="<?php 
		echo $bookdetails->isbn;
		?>"></td>
      </tr>
      <tr bgcolor="#999999">
        <td><div align="left">Accessibility</div></td>
        <td><div align="left"></div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Version</td>
        <td><select name="version" class="formstyle" id="version">
<option value="<?php echo $bookdetails->version;?>"><?php echo $bookdetails->version;?></option>
<option value="Old">Old</option>
          <option value="New">New</option>
        </select></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Picture</td>
        <td><input onChange="displayimg()" name="picture" type="file" class="formstyle" id="picture"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Availability</td>
        <td><select name="availability" class="formstyle" id="availability">
<option value="<?php echo $bookdetails->availability;?>"><?php echo $bookdetails->availability;?></option>
          <option value="YES">YES</option>
          <option value="NO">NO</option>
        </select></td>
        <td>&nbsp;</td>
      </tr>
	   <tr bgcolor="#999999">
        <td><div align="left">Shipping Information </div></td>
        <td><div align="left"></div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>DHL(#)</td>
        <td>          <table width="100%"  border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><input name="dhlcost" type="text" class="formstyle" id="dhlcost" value="<?php 
		echo $bookdetails->dhlcost;
		?>"></td>
              <td>Delivery Days 
                <input name="dhldays" type="text" class="formstyle" id="dhldays" value="<?php 
		echo $bookdetails->dhldays;
		?>" size="5"></td>
            </tr>
          </table></td>
        <td>&nbsp;</td>
      </tr>
	  <tr>
        <td>EMS Speedpost(#)</td>
        <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><input name="emscost" type="text" class="formstyle" id="emscost" value="<?php 
		echo $bookdetails->emscost;
		?>"></td>
            <td>Delivery Days 
              <input name="emsdays" type="text" class="formstyle" id="emsdays" value="<?php 
		echo $bookdetails->emsdays;
		?>" size="5"></td>
          </tr>
        </table></td>
        <td>&nbsp;</td>
      </tr>
	  <tr>
        <td>Shipping Details</td>
        <td><textarea name="shippingdetails" cols="55" rows="2" class="formstyle" id="shippingdetails"><?php 
		echo $bookdetails->shippingdetails;
		?></textarea></td>
        <td>&nbsp;</td>
      </tr>
	  <tr>
        <td colspan="3" align="center"><input name="Reset" type="Reset" class="formstyle" value="Reset">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input name="Update" type="submit" class="formstyle" id="Update" value="Update"></td>
      </tr>
    </table>