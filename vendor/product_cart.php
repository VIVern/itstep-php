<? require_once('tamplates/top.php');

if(isset($_GET['id'])){
  $id=$_GET['id'];
}
else {
  $id = '0';
}

$query = "SELECT*FROM catalog WHERE id='$id'";
$adr =  mysqli_query($db_con, $query);
if(!$adr){
  exit($query);
}
$tbl_maintext = mysqli_fetch_array($adr);
?>

<div class="col-lg-4 col-md-6 mb-4">
  <div class="card h-100">
    <a href="#"><img class="card-img-top" src="<?php echo $tbl_catalog['picture'] ?>" alt=""></a>
    <div class="card-body">
      <h4 class="card-title">
        <a href="product_cart.php?id=<?php echo $tbl_catalog['id'] ?>"><?php echo $tbl_catalog['name'] ?></a>
      </h4>
      <h5><?php echo $tbl_catalog['price'] ?></h5>
      <p class="card-text"><?php echo $tbl_catalog['body'] ?></p>
    </div>
    <div class="card-footer">
      <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
    </div>
  </div>
</div>

<? require_once('tamplates/bottom.php') ?>
