<?php 
  if(isset($_POST['upload']) && $_FILES['meetingFile']['size']>0) 
  {
    $fileName = $_FILES['meetingFile']['name'];
    $fileType = $_FILES['meetingFile']['type'];
    $fileSize = $_FILES['meetingFile']['size'];
    $fileTmpName = $_FILES['meetingFile']['tmp_name'];
    $fileError = $_FILES['meetingFile']['error'];


    $content = 'meetings/'.$_FILES['meetingFile']['name'];
    $content = addslashes($content);

    if(!get_magic_quotes_gpc())
    {
      $fileName = addslashes($fileName);
    }

    include 'db.php';
    $query = "INSERT INTO amadeus_files (name, size, type, content)".
    "VALUES ('$fileName', '$fileSize', '$fileType', '$content')";

    mysql_query($query);
    mysql_close();

    $name = $_GET['name'];

    move_uploaded_file($_FILES['meetingFile']['tmp_name'], 'meetings/'.$_FILES['meetingFile']['name']);
  }
  echo "<script type='text/javascript'>window.location='board.php?name=".$name."';</script>";
?>