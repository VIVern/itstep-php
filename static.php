<? require_once('tamplates/top.php');

  if(isset($_GET['url'])){
    $url=$_GET['url'];
  }
  else {
    $url = 'index';
  }

  $query = "SELECT*FROM maintexts WHERE url='$url'";
  $adr =  mysqli_query($db_con, $query);
  if(!$adr){
    exit($query);
  }
  $tbl_maintext = mysqli_fetch_array($adr);
?>

<div>
  <h2><? echo $tbl_maintext['name'] ?></h2>
  <p style="width:100%; word-wrap: break-word"><? echo $tbl_maintext['body'] ?></p>
</div>




<? require_once('tamplates/bottom.php') ?>
