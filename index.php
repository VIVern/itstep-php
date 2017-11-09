<? require_once('tamplates/top.php') ?>
<? require_once('tamplates/carusel.php') ?>
<? $query = "SELECT*FROM catalogs";
    $adr =mysqli_query($db_con, $query);
?>

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <? foreach ($arr as $key => $value) { ?>
                <? if($key == 'slide1'){?>
                  <div class="carousel-item active">
                    <img class="d-block img-fluid" src="<? echo $value ?>" alt="<? echo $key ?>">
                  </div>
                <?} else {?>
                <div class="carousel-item">
                  <img class="d-block img-fluid" src="<? echo $value ?>" alt="<? echo $key ?>">
                </div>
              <? } ?>
            <?  } ?>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="row">

            <? while($tbl_catalog = mysqli_fetch_array($adr)){ ?>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="<?php echo $tbl_catalog['picture'] ?>" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="product.php?id=<?php echo $tbl_catalog['id'] ?>"><?php echo $tbl_catalog['name'] ?></a>
                  </h4>
                  <h5><?php echo $tbl_catalog['price'] ?></h5>
                  <p class="card-text"><?php echo $tbl_catalog['body'] ?></p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>
          <? } ?>

          </div>
          <!-- /.row -->
<? require_once('tamplates/bottom.php') ?>
