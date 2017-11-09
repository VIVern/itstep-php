<? require_once('tamplates/top.php');
  if($_POST){
    $p_name = $_POST['name'];
    $p_email = $_POST['email'];
    $p_password = $_POST['password'];
    $p_password_a = $_POST['passwordA'];
    $errors = array();
    if(!$p_name){
      $errors[] = "Поле name не заполнено";
    }
    if(!$p_email){
      $errors[] = "Поле email не заполнено";
    }
    if(!$p_password){
      $errors[] = "Поле password не заполнено";
    }
    if(!empty($errors)){
      print_r($errors);
    } else {
      $query = "INSERT INTO users VALUES(
        NULL,
        '$p_name',
        '$p_email',
        '$p_password',
        'unblock',
        NOW(),
        NOW()
      )";
      $adr=mysqli_query($db_con,$query);
      if(!$adr){
        exit($query);
      }
      ?>
      <script type="text/javascript">
        document.location.href="login.php";
      </script>
      <?
    }

  }
 ?>

<form method="post" action="reg.php">
  <div class="form-group">
    <label for="name">Email address</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="passwordA">Password again</label>
    <input type="password" class="form-control" name="passwordA" id="passwordA" placeholder="Password again">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>


<? require_once('tamplates/bottom.php') ?>
