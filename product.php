<? require_once('tamplates/top.php');

if(isset($_GET['id'])){
  $id=$_GET['id'];
}
else {
  $id = '0';
}

$query = "SELECT*FROM catalogs WHERE id='$id'";
$adr =  mysqli_query($db_con, $query);
if(!$adr){
  exit($query);
}
$tbl_catalog = mysqli_fetch_array($adr);
?>

<?

  if($_POST){
    if($_POST['delete']){
      $file=$_SERVER['DOCUMENT_ROOT'].$tbl_catalog['picture'];
      if(file_exists($file)){
        unlink($file);
      }
      $query ="DELETE FROM catalogs WHERE id='$id'";
      mysqli_query($db_con, $query);?>
      <script type="text/javascript">
        document.location.href="index.php";
      </script>
      <?
    }
    if($_POST['edit']){?>
      <script type="text/javascript">
        document.location.href="edit_panel.php?id=<?php echo $tbl_catalog['id'] ?>";
      </script>
    <?}
  }
?>

<? if($_SESSION['user_id']){?>
    <div class="col-lg-4 col-md-6 mb-4" style="margin-top: 20px">
      <div class="card h-100">
        <div>
          <form action="product.php?id=<?php echo $tbl_catalog['id'] ?>" method="post">
            <input type="submit" name="delete" value="delete">
            <input type="submit" name="edit" value="edit">
          </form>
        </div>
        <a href="#"><img class="card-img-top" src="<?php echo $tbl_catalog['picture'] ?>" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#"><?php echo $tbl_catalog['name'] ?></a>
          </h4>
          <h5><?php echo $tbl_catalog['price'] ?></h5>
          <p class="card-text"><?php echo $tbl_catalog['body'] ?></p>
        </div>
        <div class="card-footer">
          <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
        </div>
      </div>
    </div>
    <?} else {?>
      <div class="col-lg-4 col-md-6 mb-4" style="margin-top: 20px">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="<?php echo $tbl_catalog['picture'] ?>" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#"><?php echo $tbl_catalog['name'] ?></a>
            </h4>
            <h5><?php echo $tbl_catalog['price'] ?></h5>
            <p class="card-text"><?php echo $tbl_catalog['body'] ?></p>
          </div>
          <div class="card-footer">
            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
          </div>
        </div>
      </div>
      <?}?>

<? require_once('tamplates/bottom.php') ?>
