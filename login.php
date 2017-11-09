<?

require_once('tamplates/top.php');
  if($_POST){
    $p_email = $_POST['email'];
    $p_password = $_POST['password'];
    $errors = array();
    if(!$p_email){
      $errors[] = "Поле email не заполнено";
    }
    if(!$p_password){
      $errors[] = "Поле password не заполнено";
    }
    if(!empty($errors)){
      print_r($errors);
    }
    $query = "SELECT*FROM users WHERE email='$p_email' AND password='$p_password'";
    $adr = mysqli_query($db_con, $query);
    if(!$adr){
      exit($query);
    }
    $user = mysqli_fetch_array($adr);
    if(empty($user)){
      $errors[] = "error log-in";
    }
    if(!empty($errors)){
      exit('error');
    } else {
      $_SESSION['user_id']=$user['id'];
    ?>
    <script type="text/javascript">
      document.location.href="panel.php";
    </script>
    <?
    }
  }
 ?>

<form method="post" action="login.php">
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" name="email" id="email1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>


<? require_once('tamplates/bottom.php') ?>
