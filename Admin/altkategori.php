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
                  <h3 class="box-title">Alt Kategori</h3>
              <a href="altkategoriekle.php?id=<?php echo $_GET['id'] ?>">
                <button type="button" class="btn btn-primary" style="float:right" >Alt Kategori Ekle</button>
              </a>
                </div>
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>Kategori Sıra</th>
                      <th>Kategori Başlık</th>
                      <th>Git</th>
                      <th>Düzenle</th>
                      <th>Sil</th>
                    </tr>
                 <?php $altkategori=$db->prepare("SELECT * FROM altkategori where kategori_id=?");
                 $altkategori->execute(array(
                   @$_GET['id']
                 ));
                 while ($altkategoricek=$altkategori->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr style=" height:50px !important">
                      <td><?php echo $altkategoricek['sira']; ?></td>
                      <td><?php echo $altkategoricek['baslik'];?></td>
                      <td ><a href="urunler.php?altid=<?php echo $altkategoricek['id'] ?>">   <span style="width:75px !important; height:35px" class="btn btn-info">Git</span></a></td>
                      <td ><a href="altkategoriduzenle.php?id=<?php echo $altkategoricek['id'] ?>"><span style="width:75px !important; height:35px" class="btn btn-success">Düzenle</span>
                      </a>
                      </td>
                      <td><a href="model.php?altkategorisil&id=<?php echo $altkategoricek['id'] ?>&id=<?php echo $_GET['id'] ?>">
                        <span style="width:75px !important; height:35px" class="btn btn-danger">Sil</span>
                      </a>
                      </td>
                    </tr>
                  <?php } ?>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </section>
  </div>
<?php require_once 'footer.php'; ?>
