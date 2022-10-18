<?php
require_once 'header.php';
require_once 'sidebar.php';
 ?>
  <div class="content-wrapper">
    <section class="content">
      <div class="row">
        <section class="col-lg-12 connectedSortable">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Slider</h3>
                  <a href="sliderekle.php" style="float:right;">
                     <button type="submit" class="btn btn-primary">Ekle</button>
                  </a>

                </div>
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>Sıra</th>
                      <th>Resim</th>
                      <th>Başlık</th>
                      <th></th>
                      <th></th>
                    </tr>
                    <?php if (@$_GET["status"]=="true") { ?>
                        <p class="alert alert-success">Güncelleme Başarılı...!</p>
                    <?php   }elseif(@$_GET["status"]=="false"){ ?>
                      <p class="alert alert-danger">Güncelleme Başarısız...!</p>
                    <?php  } ?>

                    <?php
                    $slider=$db->prepare("SELECT * FROM slider");
                    $slider->execute();
                    while ($slidercek=$slider->fetch(PDO::FETCH_ASSOC)) {    ?>
                    <tr>
                      <td><?php echo $slidercek['sira']; ?></td>
                      <td> <img src="../img/slider/<?php echo $slidercek['resim'] ?>" width="150"/></td>
                      <td><?php echo $slidercek['baslik']; ?></td>

                      <td>
                        <a href="sliderduzenle.php?id=<?php echo $slidercek['id'];?>" class="btn btn-success sm">Düzenle</a>
                      </td>
                      <td>
                          <form class="" action="model.php" method="post">
                              <input type="hidden" name="id" value="<?php echo $slidercek['id']; ?>">
                              <input type="hidden" name="resim" value="<?php echo $slidercek['id']; ?>">
                              <button type="submit" name="sldSl" class="btn btn-danger sm">Sil</button>
                          </form>
                      </td>
                    </tr>
                    <?php   } ?>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
          </div>
        </section>
      </div>
    </section>
  </div>
  <?php require_once 'footer.php'; ?>
