<?php
$strform=<<<EOD
<table align="center" cellpadding="1" cellspacing="0">
   <tr>
        <td>Title</td>
        <td><textarea name="title" cols="55" rows="2" class="formstyle" id="author"></textarea></td>
        <td align='center' rowspan="8">      
		  
<hr size="1" width="100%" noshade class="hrstyle1">
<strong>&nbsp;&nbsp;&nbsp;THE FRONT COVER
</strong>
<hr size="1" width="100%" noshade class="hrstyle1">
<br><img name="bookpixs" src="" width='115' height='153' alt="the book" border="1"></td>
      </tr>
      <tr>
        <td>Author</td>
        <td><textarea name="author" cols="55" rows="2" class="formstyle" id="title"></textarea></td>
      </tr>
      <tr>
        <td>Publisher</td>
        <td><textarea name="publisher" cols="55" rows="2" class="formstyle" id="publisher"></textarea></td>
      </tr>
	  <tr>
        <td>Backcover Details</td>
        <td><textarea name="backcoverdetails" cols="55" rows="2" class="formstyle" id="backcoverdetails"></textarea></td>
      </tr>
      <tr>
        <td>Year Published </td>
        <td><input name="yrpublish" type="text" class="formstyle" id="yrpublish" value=""></td>
      </tr>
      <tr>
        <td>Old Price</td>
        <td><input name="oldprice" type="text" class="formstyle" id="oldprice" value="0"></td>
      </tr>
	  <tr>
        <td>New Price</td>
        <td><input name="newprice" type="text" class="formstyle" id="newprice" value="0"></td>
      </tr>
      <tr>
        <td>Pages</td>
        <td><input name="pages" type="text" class="formstyle" id="pages" value=""></td>
      </tr>
      <tr>
        <td>Category</td>
        <td><select name="category" class="formstyle" id="category">
          <option value="Programming">Programming</option>
          <option value="Certification">Certification</option>
          <option value="Literature" selected>Literature</option>
        </select></td>
      </tr>
      <tr>
        <td>ISBN</td>
        <td><input name="isbn" type="text" class="formstyle" id="isbn" value=""></td>
      </tr>
      <tr bgcolor="#999999">
        <td><div align="left">Accessibility</div></td>
        <td><div align="left"></div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Version</td>
        <td><select name="version" class="formstyle" id="version">
          <option value="Old" selected>Old</option>
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
          <option value="YES" selected>YES</option>
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
              <td><input name="dhlcost" type="text" class="formstyle" id="dhlcost" value="2700"></td>
              <td>Delivery Days 
                <input name="dhldays" type="text" class="formstyle" id="dhldays" value="2" size="5"></td>
            </tr>
          </table></td>
        <td>&nbsp;</td>
      </tr>
	  <tr>
        <td>EMS Speedpost(#)</td>
        <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><input name="emscost" type="text" class="formstyle" id="emscost" value="1200"></td>
            <td>Delivery Days 
              <input name="emsdays" type="text" class="formstyle" id="emsdays" value="5" size="5"></td>
          </tr>
        </table></td>
        <td>&nbsp;</td>
      </tr>
	  <tr>
        <td>Shipping Details</td>
        <td><textarea name="shippingdetails" cols="55" rows="2" class="formstyle" id="shippingdetails">While shipping prices vary for different locations likewise by delivery service providers, it is our responsible to deliver to any part of the nation at the prices indicated. Factor  also considered include weight of load(books). In case you request for more than 1 unit of book, you will be charged additional token depending on the total weight(units). The more the number of units, the lesser the token charged.
		</textarea></td>
        <td>&nbsp;</td>
      </tr>
	  <tr>
        <td colspan="3" align="center"><input name="Reset" type="Reset" class="formstyle" value="Reset">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input name="Submit" type="submit" class="formstyle" id="Submit" value="Submit"></td>
      </tr>
    </table>
	<script language='javascript'>
	function defaultpix(){
imgsrc="books/default.gif";
document.admin.bookpixs.src=eval("imgsrc");
}
defaultpix();
</script>
EOD;
echo $strform;
?>