<?php

$dbhost = "127.0.0.1";
$dbusername = "root";
$dbpassword = "fenster";
$dbname = "wordpress";

mysql_connect("$dbhost", "$dbusername", "$dbpassword") or die("cannot connect");
mysql_select_db("$dbname") or die ("cannot select DB");


function user_login() {

  $username = $_GET["loginText"];
  $password = $_GET["password"];

  $username = stripslashes($username);
  $password = stripslashes($password);
  $username = mysql_real_escape_string($username);
  $password = mysql_real_escape_string($password);

  $sql = "select * from wp_users where user_login = '$username'";

  $result = mysql_query($sql);
  mysql_close();
  
  $resultArr = mysql_fetch_array($result);

  $userStatus = $resultArr["user_status"];

  if (mysql_num_rows($result) != 1) {
    echo "User name not found!";
  }
  else {
    if ($password != $resultArr["user_pass"]) {
      echo("Invalid Username or Password.");
    }
    if ($userStatus == 10 || $userStatus == '10') {
        echo "<script type='text/javascript'>window.location = 'base.php?name=".$username."'</script>";
    }
    if ($userStatus == 20 || $userStatus == '20') {
        echo "<script type='text/javascript'>window.location = 'board.php?name=".$username."'</script>";
    }
  }

}

function email_submit() {
  $email = $_POST["emailText"];
  $email = stripslashes($email);
  $email = mysql_real_escape_string($email);
  
  $sql = "insert into email_list (email) values('$email')";
  mysql_query($sql);
  mysql_close();
}

 ?>