<? require_once('tamplates/top.php');
  if($_SESSION['user_id']){
?>
    <form method="post" action="panel.php" enctype="multipart/form-data">
      <div class="form-group">
        <label for="picture">Load image</label>
        <input type="file" class="form-control" name="picture" id="picture">
      </div>
      <div class="form-group">
        <label for="imageURL">image URL</label>
        <input type="text" class="form-control" name="imageURL" id="imageURL">
      </div>
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" id="name">
      </div>
      <div class="form-group">
        <label for="price">Price</label>
        <input type="text" class="form-control" name="price" id="price">
      </div>
      <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" id="description"></textarea>
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  <? } else {?>
    <script type="text/javascript">
      document.location.href="login.php";
    </script>
    <?}?>
<?
  if($_POST) {
    if($_FILES){
      $file_name_tmp = $_FILES['picture']['tmp_name'];
      $dir = '/uploads';
      $file_new_name = $_SERVER['DOCUMENT_ROOT'].$dir."/";
      $picture = $_FILES['picture']['name'];
      if(move_uploaded_file($file_name_tmp,$file_new_name.$picture)){
        $p_name = $_POST['name'];
        $p_price = $_POST['price'];
        $p_description = $_POST['description'];
        $p_img_url = $dir."/".$picture;

        $query = "INSERT INTO catalogs VALUES(
          NULL,
          '$p_name',
          '$p_description',
          '$p_img_url',
          '$p_price'
        )";
        $adr=mysqli_query($db_con,$query);
        ?>
        <script type="text/javascript">
          document.location.href="panel.php";
        </script>
        <?
      } else {
        $p_name = $_POST['name'];
        $p_price = $_POST['price'];
        $p_description = $_POST['description'];
        $p_img_url = $_POST['imageURL'];

        $query = "INSERT INTO catalogs VALUES(
          NULL,
          '$p_name',
          '$p_description',
          '$p_img_url',
          '$p_price'
        )";
        $adr=mysqli_query($db_con,$query);
        ?>
        <script type="text/javascript">
          document.location.href="panel.php";
        </script>
        <?
      }
    }
  }
?>


<? require_once('tamplates/bottom.php') ?>
