<?php

Class viewacct extends Session{

function viewacct() {
$email=$this->get('email');

//database connection begins

// Include the MySQL class
require_once('database/MySQL.php');

require('database/connx.php');
require('database/strip_quotes.php');

// Connect to MySQL
$db = & new MySQL($host,$dbUser,$dbPass,$dbName);

$sql="select * from membersaccount where email='$email'";
$result=$db->query($sql);
$row=$result->fetch();
//assign variables their values

$this->surname=$row['surname'];
$this->othernames=$row['othernames'];
$this->email=$row['email'];
$this->gsm1=$row['gsm1'];
$this->gsm2=$row['gsm2'];
$this->contactaddress=$row['contactaddress'];
$this->homedescription=$row['homedescription'];
$this->state=$row['state'];
$this->paymentmode=$row['paymentmode'];
}//close of function

//update account

function updateacct() {
$email=$this->get('email');

//instantiating variables begin

$this->surname=safeAddSlashes($_POST['surname']);
$this->othernames=safeAddSlashes($_POST['othernames']);
$this->email=safeAddSlashes($_POST['email']);
$this->gsm1=safeAddSlashes($_POST['gsm1']);
$this->gsm2=safeAddSlashes($_POST['gsm2']);
$this->contactaddress=safeAddSlashes($_POST['contactaddress']);
$this->homedescription=safeAddSlashes($_POST['homedescription']);
$this->state=safeAddSlashes($_POST['state']);
$this->paymentmode=safeAddSlashes($_POST['paymentmode']);


//database connection begins

// Include the MySQL class
require_once('database/MySQL.php');

require('database/connx.php');
require('database/strip_quotes.php');

// Connect to MySQL
$db = & new MySQL($host,$dbUser,$dbPass,$dbName);

$sql="UPDATE membersaccount SET
surname='$this->surname',
othernames='$this->othernames',
gsm1='$this->gsm1',
gsm2='$this->gsm2',
contactaddress='$this->contactaddress',
homedescription='$this->homedescription',
state='$this->state',
paymentmode='$this->paymentmode' where email='$email'";
//echo $sql;

if($db->query($sql)){$this->response="Update Successful";}


}//close of function update


}//end of class



$memberacct=new viewacct();
if(isset($_POST['Update'])){$memberacct->updateacct();}

//payment method check
$paymode=$memberacct->paymentmode;
	if($paymode=='flashmecash'){
$strpaymode=<<<EOD
<input name="paymentmode" type="radio" value="flashmecash"  checked>
    Flashmecash 
	<input name="paymentmode" type="radio" value="STB Bank">
	STB Bank
EOD;
	}else{
$strpaymode=<<<EOD
<input name="paymentmode" type="radio" value="flashmecash">
    Flashmecash 
	<input name="paymentmode" type="radio" value="STB Bank" checked>
	STB Bank
EOD;
	}

//display the form
//quite long
if(isset($_POST['Update'])){
echo "<tr><td colspan='2' align='center'><strong class='fontstyle1'>$memberacct->response</strong></td></tr>";}
$longform=<<<EOD
<tr>
    <td>Surname</td>
    <td><input name="surname" type="text" class="formstyle" id="surname" value="$memberacct->surname" size="35"></td>
  </tr>
  <tr>
    <td>Othernames</td>
    <td><input name="othernames" type="text" class="formstyle" id="othernames" value="$memberacct->othernames" size="35"></td>
  </tr>
  <tr>
    <td>E-mail address</td>
    <td><input name="email" type="text" class="formstyle" id="email" value="$memberacct->email" size="35" onchange="javascript:alert('For security reasons, your email address\\ncan only be changed by the administrator.');"></td>
  </tr>
   <tr>
    <td>Telephone/GSM 1 </td>
    <td><input name="gsm1" type="text" class="formstyle" id="gsm1" value="$memberacct->gsm1" size="35"></td>
  </tr>
  <tr>
    <td>Telephone/GSM 2 </td>
    <td><input name="gsm2" type="text" class="formstyle" id="gsm2" value="$memberacct->gsm2" size="35"></td>
  </tr>
  <tr>
    <td>Contact/Delivery address<br>
      (No P.O.Box or P.M.B.) </td>
    <td><textarea name="contactaddress" cols="35" rows="5" class="formstyle" id="contactaddress">$memberacct->contactaddress</textarea></td>
  </tr>
  <tr>
    <td>More information if need be</td>
    <td><textarea name="homedescription" cols="35" rows="5" class="formstyle" id="homedescription">$memberacct->homedescription</textarea></td>
  </tr>
  <tr>
    <td>State(within Nigeria) </td>
    <td><select name="state" class="formstyle">
	<option value="$memberacct->state">$memberacct->state</option>
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
    <td>
$strpaymode
	  </td>
  </tr>

    <tr>
    <td align="right"><input name="Submit" type="reset" class="formstyle" value="Reset">      
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;<input name="Update" type="submit" class="formstyle" value="Update"></td>
  </tr>
EOD;
echo $longform;
echo "<tr><td colspan='2' align='center' valign='bottom'>";
  if(($chkmemberstatus->get("membership"))){echo "<hr width='100%' size='1' noshade><a href='login.php?logout=true'><strong class='boldlink'>Click here to log out</strong></a>";}
echo "</td></tr>";
?>