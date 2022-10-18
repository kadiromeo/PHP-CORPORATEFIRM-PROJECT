<?php
require_once 'header.php';
require_once 'sidebar.php';

$hakkimizda=$db->prepare("SELECT * FROM hakkimizda where id=?");
$hakkimizda->execute(array(1));
$hakkimizdacek=$hakkimizda->fetch(PDO::FETCH_ASSOC);

 ?>
<!-- general form elements -->
<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <section class="col-lg-5 connectedSortable">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Hakkımızda</h3>
          </div>

          <?php if (@$_GET["status"]=="true") { ?>
              <p class="alert alert-success">Güncelleme Başarılı...!</p>
          <?php   }elseif(@$_GET["status"]=="false"){ ?>
            <p class="alert alert-danger">Güncelleme Başarısız...!</p>
          <?php  } ?>

          <form action="model.php" method="post">
            <div class="box-body">

              <div class="form-group">
                <label for="exampleInputEmail1">Başlık</label>
                <input value="<?php echo $hakkimizdacek['baslik']; ?>" name="baslik" type="text" class="form-control" id="exampleInputEmail1" placeholder="Başlık">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Açıklama</label>
                <textarea   name="aciklama" type="text" class="form-control" id="editor1" placeholder="Açıklama">
                    <?php echo $hakkimizdacek['aciklama']; ?>
                </textarea>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Misyon</label>
                <input value="<?php echo $hakkimizdacek['misyon']; ?>" name="misyon" type="text" class="form-control" id="exampleInputEmail1" placeholder="Anahtar Kelime">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Vizyon</label>
                <input value="<?php echo $hakkimizdacek['vizyon']; ?>" name="vizyon" type="text" class="form-control" id="exampleInputEmail1" placeholder="Adres">
              </div>

  </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <button name="hkmzdKyt" type="submit" class="btn btn-primary">Kaydet</button>
            </div>
          </form>
        </div>
      </section>
    </div>
  </section>
</div>

<?php require_once 'footer.php'; ?>
