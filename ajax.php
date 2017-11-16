<?php
require_once('config/config.php');
  $p_url = $_POST['url'];
  $query = "SELECT*FROM maintexts WHERE url ='$p_url'";
  $adr = mysqli_query($db_con, $query);
  $t = mysqli_fetch_array($adr);


  echo '<h2>'.$t['name'].'</h2>';
  echo "<h2>".$t['body']."</h2>";
?>
