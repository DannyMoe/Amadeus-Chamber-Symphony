<?php

$dbhost = "localhost";
$dbusername = "danielw0_admin";
$dbpassword = "2edppmb2";
$dbname = "danielw0_acs";

mysql_connect("$dbhost", "$dbusername", "$dbpassword") or die("cannot connect");
mysql_select_db("$dbname") or die ("cannot select DB");


$BODusername = $_POST["loginText"];
$BODpassword = $_POST["password"];

$BODusername = stripslashes($BODusername);
$BODpassword = stripslashes($BODpassword);
$BODusername = mysql_real_escape_string($BODusername);
$BODpassword = mysql_real_escape_string($BODpassword);

$sql = "select * from users where username = '$BODusername'";

$result = mysql_query($sql);

$resultArr = mysql_fetch_array($result);
mysql_close();
if (mysql_num_rows($result) != 1) {
	echo "Username not found!";
}
else {
	if ($BODpassword != $resultArr["password"]) {
		echo("Invalid Username or Password.");
	}
	else {
		header("location: login_success.php");
	}
}


 ?>