<?php
require_once('phpQuery/phpQuery/phpQuery.php');
require_once('config/config.php');

$query = "SELECT * FROM catalogs WHERE picture=''";
$adr = mysqli_query($db_con, $query);
while($prod=mysqli_fetch_array($adr)){
  $str = preg_replace('/ /','+', $prod['name']);
  $url = 'http://www.google.by/search?q='.$str.'&hl=ru&source=lnms&tbm=isch&sa=X&ved=0ahUKEwiH84uazsPXAhVDSRoKHR2fDo8Q_AUICigB&biw=1920&bih=925';
  $hap = file_get_contents($url);
  $document = phpQuery::newDocument($hap);
  $hentry = $document->find('.images_table tr:first-child td:first:child img:firstchild');
  $src = $document->find('.images_table tr:first-child td:first:child img:firstchild')->attr('src');

  $dir = $_SERVDER['DOCUMENT_ROOT'].'uploads/';
  $newfile = date('y_m_d_h_i_s').'.jpg';
  if(copy($src, $dir.$newfile)){
    $img_dir = '/'.'uploads/'.$newfile;
    $query1="UPDATE catalogs SET picture='$img_dir' WHERE id=".$prod['id'];
    $adr1 = mysqli_query($db_con, $query1);
  } else {
    echo 'не удалось записать'.$src;
  };

  echo $hentry;
  echo $src;



  echo "<hr />";
  sleep(1);
}
