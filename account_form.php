
  <tr>
    <td>Surname</td>
    <td><input name="surname" type="text" class="formstyle" id="surname" size="35"></td>
  </tr>
  <tr>
    <td>Othernames</td>
    <td><input name="othernames" type="text" class="formstyle" id="othernames" size="35"></td>
  </tr>
  <tr>
    <td>E-mail address</td>
    <td><input name="email" type="text" class="formstyle" id="email" size="35"></td>
  </tr>
  <tr>
    <td>Choose Password </td>
    <td><input name="password" type="password" class="formstyle" id="password" size="35"></td>
  </tr>
  <tr>
    <td>Confirm Password </td>
    <td><input name="cpassword" type="password" class="formstyle" id="cpassword" size="35" onBlur="checkpwd();"></td>
  </tr>
  <tr>
    <td>Telephone/GSM 1 </td>
    <td><input name="gsm1" type="text" class="formstyle" id="gsm1" size="35" onBlur="checkpwd();"></td>
  </tr>
  <tr>
    <td>Telephone/GSM 2 </td>
    <td><input name="gsm2" type="text" class="formstyle" id="gsm2" size="35" onBlur="checkpwd();"></td>
  </tr>
  <tr>
    <td>Contact/Delivery address<br>
      (No P.O.Box or P.M.B.) </td>
    <td><textarea name="contactaddress" cols="35" rows="5" class="formstyle" id="contactaddress" onBlur="checkpwd();">
</textarea></td>
  </tr>
  <tr>
    <td>Home Location <br>
      More information if need be</td>
    <td><textarea name="homedescription" cols="35" rows="5" class="formstyle" id="homedescription" onClick="javascript: document.account.homedescription.value='';" onBlur="checkpwd();">
Sample: White house found opposite
 Aunty K Primary Schl, Alhaji Olamide Str,
Sango, Ibadan. Ask of Mr Emmanuel
 or any of his relation in the premises.

</textarea></td>
  </tr>
  <tr>
    <td>State(within Nigeria) </td>
    <td>
	<select name="state" class="formstyle">
	<option value="Abia">Abia</option>
		<option value="Abuja">Abuja</option>
	<option value="Adamawa">Adamawa</option>
	<option value="Akwa Ibom">Akwa Ibom</option>
	<option value="Anambra">Anambra</option>
	<option value="Bauchi">Bauchi</option>
	<option value="Bayelsa">Bayelsa</option>
	<option value="Benue">Benue</option>
	<option value="Borno">Borno</option>
	<option value="Cross River">Cross River</option>
	<option value="Delta">Delta</option>
	<option value="Ebonyi">Ebonyi</option>
	<option value="Edo">Edo</option>
	<option value="Ekiti">Ekiti</option>
	<option value="Enugu">Enugu</option>
	<option value="Gombe">Gombe</option>
	<option value="Imo">Imo</option>
	<option value="Jigawa">Jigawa</option>
	<option value="Kaduna">Kaduna</option>
	<option value="Kano">Kano</option>
	<option value="Katsina">Katsina</option>
	<option value="Kebbi">Kebbi</option>
	<option value="Kogi">Kogi</option>
	<option value="Kwara">Kwara</option>
	<option value="Nassarawa">Nassarawa</option>
	<option value="Niger">Niger</option>
	<option value="Ogun">Ogun</option>
	<option value="Ondo">Ondo</option>
	<option value="Osun">Osun</option>
<option value="Lagos">Lagos</option>
	<option value="Oyo">Oyo</option>
	<option value="Plateau">Plateau</option>
	<option value="Rivers">Rivers</option>
	<option value="Sokoto">Sokoto</option>
<option value="Taraba">Taraba</option>
	<option value="Yobe">Yobe</option>
	<option value="Zamfara">Zamfara</option>
	</select></td>
  </tr>
  <tr>
    <td>Preferred payment mode </td>
    <td><input name="paymentmode" type="radio" value="STB Bank" class="formstyle" checked>
      STB Bank&nbsp;&nbsp;&nbsp;&nbsp;
      <input name="paymentmode" type="radio" value="FlashmeCash" class="formstyle">
First Atlantic Bank/FlashmeCash  </td>
  </tr>
  <tr>
    <td align="right"><input name="Submit" type="reset" class="formstyle" value="Reset">      
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;<input name="Submit" type="submit" class="formstyle" value="Submit"></td>
  </tr>