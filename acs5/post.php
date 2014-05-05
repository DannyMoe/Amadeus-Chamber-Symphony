<?php

$dbhost = "localhost";
$dbusername = "danielw0_admin";
$dbpassword = "2edppmb2";
$dbname = "danielw0_acs";

mysql_connect("$dbhost", "$dbusername", "$dbpassword") or die("cannot connect");
mysql_select_db("$dbname") or die ("cannot select DB");


$date = $_POST["date"];
$title = $_POST["title"];
$agenda = $_POST["agenda"];
$minutes = $_POST["minutes"];
$notes = $_POST["notes"];
$entered = $_POST["entered_by"];

$date = stripslashes($date);
$title = stripslashes($title);
$agenda = stripslashes($agenda);
$minutes = stripslashes($minutes);
$notes = stripslashes($notes);
$entered = stripslashes($entered);

$date = mysql_real_escape_string($date);
$title = mysql_real_escape_string($title);
$agenda = mysql_real_escape_string($agenda);
$minutes = mysql_real_escape_string($minutes);
$notes = mysql_real_escape_string($notes);
$entered = mysql_real_escape_string($entered);

$sql = "insert into meeting_posts (date, title, agenda, minutes, notes, entered_by)
		values('$date', '$title', '$agenda', '$minutes', '$notes', '$entered_by')";

mysql_query($sql);

mysql_close();

 ?>