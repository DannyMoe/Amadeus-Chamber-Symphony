<?php 
  $name = $_GET['name'];
    header("content-dispositon: attachment; filename=minutes-march-30.pdf");
    header("content-type: application/pdf");
    readfile('minutes-march-30.pdf');
?>

