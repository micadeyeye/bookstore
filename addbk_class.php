<?php
require("database/strip_quotes.php");

require("database/strip_quotes_addslash.php");

Class addbook {

function addbook() {
//instantiating variables begin

$this->author=safeAddSlashes($_POST['author']);
$this->title=safeAddSlashes($_POST['title']);
$this->publisher=safeAddSlashes($_POST['publisher']);
$this->backcoverdetails=safeAddSlashes($_POST['backcoverdetails']);
$this->yrpublish=safeAddSlashes($_POST['yrpublish']);
$this->oldprice=safeAddSlashes($_POST['oldprice']);
$this->newprice=safeAddSlashes($_POST['newprice']);
$this->pages=safeAddSlashes($_POST['pages']);
$this->category=safeAddSlashes($_POST['category']);
$this->isbn=safeAddSlashes($_POST['isbn']);
$this->version=safeAddSlashes($_POST['version']);
$this->picture=$_FILES['picture'];
$this->availability=safeAddSlashes($_POST['availability']);
$this->dhlcost=safeAddSlashes($_POST['dhlcost']);
$this->dhldays=safeAddSlashes($_POST['dhldays']);
$this->emscost=safeAddSlashes($_POST['emscost']);
$this->emsdays=safeAddSlashes($_POST['emsdays']);
$this->shippingdetails=safeAddSlashes($_POST['shippingdetails']);

//calculating new price based on percentage(35% of old price)
$this->newprice=round($this->oldprice+($this->oldprice*0.35));

if($this->category=='Programming'){$cat='prog';$dirname="programming";}
elseif($this->category=='Certification'){$cat='cert';$dirname="certification";}
elseif($this->category=='Literature'){$cat='lit';$dirname="literature";}


//database connection begins

// Include the MySQL class
require_once('database/MySQL.php');

require('database/connx.php');
require('database/strip_quotes.php');

// Connect to MySQL
$db = & new MySQL($host,$dbUser,$dbPass,$dbName);

$sql="INSERT catalog SET
author='$this->author',
title='$this->title',
publisher='$this->publisher',
backcoverdetails='$this->backcoverdetails',
yrpublish='$this->yrpublish',
oldprice=$this->oldprice,
newprice=$this->newprice,
pages=$this->pages,
category='$this->category',
isbn='$this->isbn',
version='$this->version',
availability='$this->availability',
dhlcost=$this->dhlcost,
dhldays=$this->dhldays,
emscost=$this->emscost,
emsdays=$this->emsdays,
shippingdetails='$this->shippingdetails'";
//echo $sql;

$result=$db->query($sql);
$bookid=$result->insertID();
$pixcodename=$cat.$result->insertID();
$this->pixcodename=$pixcodename;


//transfer of picture file



 if (( $_FILES['picture']['type'] == 'image/gif' )||( $_FILES['picture']['type'] == 'image/jpeg' )||( $_FILES['picture']['type'] == 'image/pjpeg' )) {
//$picture=$_FILES['picture']['name'];
//$this->picture=$picture;
//echo $_FILES['picture']['type'].$picture;
//exit;

        // Copy the file from temporary storage to final destination
				        copy ($_FILES['picture']['tmp_name'], "./books/"."$dirname/".$this->pixcodename.".jpg")
            or die ("Sorry, this file format in not supported. Try using JPEG or GIF.");

           }//CLOSE OF IF jpeg/gif STATEMENT



//end of transfer



$sql="UPDATE catalog SET
picturecode='$this->pixcodename' where booksnumber=$bookid";
$db->query($sql);


}//close of function


}



if(isset($_POST['Submit'])){new addbook();}


?>