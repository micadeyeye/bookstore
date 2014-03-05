<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>ADMINISTRATOR PAGE</title>
<link href="body.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="#d5d5d5"><?php

class searchbook {
function searchbook() {
// Include the MySQL class
require_once('database/MySQL.php');

require('database/connx.php');
require('database/strip_quotes.php');

$category=$_POST['select-category'];

// Connect to MySQL
$db = & new MySQL($host,$dbUser,$dbPass,$dbName);
$sql="select booksnumber,title,publisher,availability,version from catalog where category='$category'";
$result=$db->query($sql);
	echo "<table width=100% border=1 cellspacing=0 cellpadding=0>";
echo "<tr bgcolor=#8E8E8E><td colspan=5 align=center><b>Search Results for $category books</b></td></tr>";
echo "<tr><td>Book Title</td><td>Publisher</td><td>Availability</td><td>Version</td><td>Change</td></tr>";
while ($row = $result->fetch()) {
$booksnumber=$row['booksnumber'];
    echo "<tr><td>".$row['title']."</td>";
    echo "<td>".$row['publisher']."</td>";
    echo "<td>".$row['availability']."</td>";
    echo "<td>".$row['version']."</td>";
	    echo "<td><a href='admin_updatebk.php?booksnumber=$booksnumber' name=delete>Edit</a></td></tr>";
        }
echo "</table>";
}

}//close of class
if(isset($_POST['searchbycat'])){new searchbook();}


?>
</body>
</html>