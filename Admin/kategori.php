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
                  <h3 class="box-title">Kategori</h3>
                  <a href="kategoriekle.php" style="float:right;">
                     <button type="submit" class="btn btn-primary" >Ekle</button>
                  </a>

                </div>
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>Sıra</th>
                      <th>Başlık</th>
                      <th></th>
                    </tr>
                    <?php if (@$_GET["status"]=="true") { ?>
                        <p class="alert alert-success">Güncelleme Başarılı...!</p>
                    <?php   }elseif(@$_GET["status"]=="false"){ ?>
                      <p class="alert alert-danger">Güncelleme Başarısız...!</p>
                    <?php  } ?>

                    <?php
                    $kategori=$db->prepare("SELECT * FROM kategori");
                    $kategori->execute();
                    while ($kategoricek=$kategori->fetch(PDO::FETCH_ASSOC)) {    ?>
                    <tr>
                      <td><?php echo $kategoricek['sira']; ?></td>
                      <td><?php echo $kategoricek['baslik']; ?></td>
                      <td>
                        <a href="altkategori.php?id=<?php echo $kategoricek['id']; ?>" class="btn btn-info sm">Git</a>
                        <a href="kategoriduzenle.php?id=<?php echo $kategoricek['id'];?>" class="btn btn-success sm">Düzenle</a>
                        <a href="model.php?kategorisil&id=<?php echo $kategoricek['id'];?>" class="btn btn-danger sm">Sil</a>
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
