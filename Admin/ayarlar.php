<?php
require_once 'header.php';
require_once 'sidebar.php';

$ayar=$db->prepare("SELECT * FROM ayarlar where id=?");
$ayar->execute(array(1));
$ayarcek=$ayar->fetch(PDO::FETCH_ASSOC);

 ?>
<!-- general form elements -->
<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <section class="col-lg-5 connectedSortable">
        <div class="box box-primary" style="padding:15px;">
          <div class="box-header with-border">
            <h3 class="box-title">Ayarlar</h3>
          </div>

          <?php if (@$_GET["status"]=="true") { ?>
              <p class="alert alert-success">Güncelleme Başarılı...!</p>
          <?php   }elseif(@$_GET["status"]=="false"){ ?>
            <p class="alert alert-danger">Güncelleme Başarısız...!</p>
          <?php  } ?>

          <form class="" action="model.php" method="post" enctype="multipart/form-data">

            <div class="form-group">
              <label for="exampleInputEmail1">Mevcut Logo</label>
              <img src="../img/logo/<?php echo $ayarcek['logo']; ?>" alt="">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Yeni Logo</label>
              <input  name="logo" type="file" class="form-control" id="exampleInputEmail1">
            </div>
            <button class="btn btn-primary" type="submit" name="logoKyt">Logo Kaydet</button>
          </form>

          <form action="model.php" method="post">
            <div class="box-body">

              <div class="form-group">
                <label for="exampleInputEmail1">Başlık</label>
                <input value="<?php echo $ayarcek['baslik']; ?>" name="baslik" type="text" class="form-control" id="exampleInputEmail1" placeholder="Başlık">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Açıklama</label>
                <input value="<?php echo $ayarcek['aciklama']; ?>" name="aciklama" type="text" class="form-control" id="exampleInputEmail1" placeholder="Açıklama">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Anahtar Kelime</label>
                <input value="<?php echo $ayarcek['anahtarkelime']; ?>" name="anahtarkelime" type="text" class="form-control" id="exampleInputEmail1" placeholder="Anahtar Kelime">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Adres</label>
                <input value="<?php echo $ayarcek['adres']; ?>" name="adres" type="text" class="form-control" id="exampleInputEmail1" placeholder="Adres">
              </div>
ayarcek
              <div class="form-group">
                <label for="exampleInputEmail1">Telefon</label>
                <input value="<?php echo $ayarcek['telefon']; ?>" name="telefon" type="text" class="form-control" id="exampleInputEmail1" placeholder="Telefon">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Whatsapp</label>
                <input value="<?php echo $ayarcek['whatsapp']; ?>" name="whatsapp" type="text" class="form-control" id="exampleInputEmail1" placeholder="Whatsapp">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Instagram</label>
                <input value="<?php echo $ayarcek['instagram']; ?>" name="instagram" type="text" class="form-control" id="exampleInputEmail1" placeholder="İnstagram">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Twitter</label>
                <input value="<?php echo $ayarcek['twitter']; ?>" name="twitter" type="text" class="form-control" id="exampleInputEmail1" placeholder="Twitter">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Linkedin</label>
                <input value="<?php echo $ayarcek['linkedin'] ;?>" name="linkedin" type="text" class="form-control" id="exampleInputEmail1" placeholder="Linkedin">
              </div>


              <div class="form-group">
                <label for="exampleInputEmail1">Facebook</label>
                <input value="<?php echo $ayarcek['facebook']; ?>" name="facebook" type="text" class="form-control" id="exampleInputEmail1" placeholder="Facebook">
              </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Mail Adres</label>
              <input value="<?php echo $ayarcek['mailadres']; ?>" name="mailadres" type="email" class="form-control" id="exampleInputEmail1" placeholder="Mail Adres">
            </div>
  </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <button name="ayarKyt" type="submit" class="btn btn-primary">Kaydet</button>
            </div>
          </form>
        </div>
      </section>
    </div>
  </section>
</div>

<?php require_once 'footer.php'; ?>
