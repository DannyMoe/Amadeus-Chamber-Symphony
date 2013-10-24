<?php

$dbhost = "localhost";
$username = "danielw0_admin";
$password = "2edppmb2";
$dbname = "danielw0_acs";

mysql_connect("$dbhost", "$username", "$password") or die("cannot connect");
mysql_select_db("$dbname") or die ("cannot select DB");


$email = $_POST["emailText"];

$email = stripslashes($email);
$email = mysql_real_escape_string($email);

$sql = "insert into email_list (email) values('$email')";

mysql_query($sql);

mysql_close();
?>