<? require_once('tamplates/top.php');
  if($_SESSION['user_id']){
    $id=$_GET['id'];
    $query="SELECT*FROM catalogs WHERE id='$id'";
    $adr = mysqli_query($db_con, $query);
    $product =  mysqli_fetch_array($adr);
?>

<form method="post" action="edit_panel.php?id=<?php echo $product['id'] ?>" enctype="multipart/form-data">
  <div class="form-group">
    <label for="picture">Load image</label>
    <input type="file" class="form-control" name="picture" id="picture">
    <img src="<? echo $product['picture'] ?>" alt="">
  </div>
  <div class="form-group">
    <label for="imageURL">image URL</label>
    <input type="text" class="form-control" name="imageURL" id="imageURL" value="<? echo $product['picture'] ?>">
  </div>
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" id="name" value="<? echo $product['name'] ?>">
  </div>
  <div class="form-group">
    <label for="price">Price</label>
    <input type="text" class="form-control" name="price" id="price" value="<? echo $product['price'] ?>">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" name="description" id="description"><? echo $product['body'] ?></textarea>
  </div>
  <button type="submit" class="btn btn-default">Edit</button>
</form>

<?}?>

<?
  if($_POST) {
    if($_FILES){
      $file=$_SERVER['DOCUMENT_ROOT'].$product['picture'];
      if(!file_exists($file)){
        $file_name_tmp = $_FILES['picture']['tmp_name'];
        $dir = '/uploads';
        $file_new_name = $_SERVER['DOCUMENT_ROOT'].$dir."/";
        $picture = $_FILES['picture']['name'];
        if(move_uploaded_file($file_name_tmp,$file_new_name.$picture)){
          $p_name = $_POST['name'];
          $p_price = $_POST['price'];
          $p_description = $_POST['description'];
          $p_img_url = $dir."/".$picture;

          $query = "UPDATE catalogs
            SET name = '$p_name',
                body = '$p_description',
                picture = '$p_img_url',
                price = '$p_price'
            WHERE id = '$id'
          ";
          $adr=mysqli_query($db_con,$query);
          ?>
          <script type="text/javascript">
            document.location.href="index.php";
          </script>
          <?
          }
        } else {
          $file_name_tmp = $_FILES['picture']['tmp_name'];
          if(move_uploaded_file($file_name_tmp,$_SERVER['DOCUMENT_ROOT'].$product['picture'])){
            $p_name = $_POST['name'];
            $p_price = $_POST['price'];
            $p_description = $_POST['description'];
            $p_img_url = $product['picture'];

            $query = "UPDATE catalogs
              SET name = '$p_name',
                  body = '$p_description',
                  picture = '$p_img_url',
                  price = '$p_price'
              WHERE id = '$id'
            ";
            $adr=mysqli_query($db_con,$query);
            ?>
            <script type="text/javascript">
              document.location.href="index.php";
            </script>
            <?
          }
        }
      }
      $p_name = $_POST['name'];
      $p_price = $_POST['price'];
      $p_description = $_POST['description'];
      $p_img_url = $_POST['imageURL'];

      $query = "UPDATE catalogs
        SET name='$p_name',
            body='$p_description',
            picture='$p_img_url',
            price='$p_price'
        WHERE id='$id'
      ";
      $adr=mysqli_query($db_con,$query);
      ?>
      <script type="text/javascript">
        document.location.href="index.php";
      </script>
      <?
  }

?>


<? require_once('tamplates/bottom.php') ?>
