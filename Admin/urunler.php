<?php
  require_once 'header.php';
  require_once 'sidebar.php';
 ?>

  <div class="content-wrapper">
    <section class="content">
      <div class="row">

        <section class="col-lg-12 connectedSortable">

          <?php if (@$_GET['status']=="true") { ?>
          <b style="color:green">Yükleme işleminiz başarılı bir şekilde gerçekleşmiştir.</b>
         <?php   } elseif(@$_GET['status']=="false"){ ?>
          <b style="color:red">Yükleme işleminiz başarısız olmuştur.</b>
         <?php } ?>

          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Ürünler</h3>
              <a href="urunlerekle.php?altid=<?php echo $_GET['altid'] ?>">
                <button type="button" class="btn btn-primary" style="float:right" >Ürün Ekle</button>
              </a>

                </div>

                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>Resim</th>
                      <th>Sıra</th>
                      <th>Başlık</th>
                      <th>Fiyat</th>
                      <th>Git</th>
                      <th>Düzenle</th>

                      <th>Sil</th>
                    </tr>

         <?php $urunler=$db->prepare("SELECT * FROM urunler where altkategori_id=?");
         $urunler->execute(array(
           @$_GET['altid']
         ));
         while ($urunlercek=$urunler->fetch(PDO::FETCH_ASSOC)) { ?>

                    <tr style=" height:50px !important">
                      <td> <img src="../img/prod/<?php echo $urunlercek['resim']; ?>" width="150" /> </td>
                      <td><?php echo $urunlercek['sira']; ?></td>
                      <td><?php echo $urunlercek['baslik'];?></td>
                      <td><?php echo $urunlercek['fiyat'];?> (₺)</td>

                      <td ><a href="urunler.php?altid=<?php echo $urunlercek['id'] ?>">   <span style="width:75px !important; height:35px" class="btn btn-info">Git</span></a></td>
                      <td ><a href="urunlerduzenle.php?id=<?php echo $urunlercek['id'] ?>"><span style="width:75px !important; height:35px" class="btn btn-success">Düzenle</span>
           </a>
                      </td>

                      <td>
                          <form class="" action="model.php" method="post">
                              <input type="hidden" name="id" value="<?php echo $urunlercek['id']; ?>">
                              <input type="hidden" name="resim" value="<?php echo $urunlercek['resim']; ?>">
                              <button type="submit" name="urnSl" class="btn btn-danger sm">Sil</button>
                          </form>
                      </td>
                    </tr>

<?php } ?>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
          </div>

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
<?php require_once 'footer.php'; ?>
