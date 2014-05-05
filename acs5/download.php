<?php 

  include 'db.php';

  $query = "SELECT id, name FROM amadeus_files";
  $result = mysql_query($query) or die('Error retreiving files');
  mysql_close();
  if(mysql_num_rows($result) == 0) {
    echo "Database empty!";
  }
  else
  {
  while (list($id, $name) = mysql_fetch_array($result)) 
  { ?>
  <div class="listItem full">
    <a href="meetings/<?php echo $name; ?>"><?php echo $name; ?></a>
    <button class="download" href="meetings/<?php echo $name; ?>" download="<?php echo $name; ?>"  data-id="<?php echo $name ?>">Download</button>
  </div>
<?php 
  }
  }
?>