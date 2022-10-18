<?php
require_once 'header.php';
require_once 'sidebar.php';

$urunler=$db->prepare("SELECT * FROM urunler where id=?");
$urunler->execute(array(
$_GET['id']
));
$urunlercek=$urunler->fetch(PDO::FETCH_ASSOC);

 ?>
<!-- general form elements -->
<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <section class="col-lg-5 connectedSortable">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Ürün Ekle</h3>
          </div>

          <form action="model.php" method="post" enctype="multipart/form-data">
            <div class="box-body">
              <input type="hidden" name="altid" value="<?php echo $urunlercek['altkategori_id']; ?>">
              <input type="hidden" name="id" value="<?php echo $urunlercek['id']; ?>">
              <input type="hidden" name="oldimg" value="<?php echo $urunlercek['resim']; ?>">
              <div class="form-group">
                <label for="exampleInputEmail1">Mevcut Resim</label> <br>
                <img src="../img/prod/<?php echo $urunlercek['resim']; ?>"  width="150"/>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Resim</label>
                <input  name="resim" type="file" class="form-control" id="exampleInputEmail1">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Başlık</label>
                <input value="<?php echo $urunlercek['baslik']; ?>" name="baslik" type="text" class="form-control" id="exampleInputEmail1">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Açıklama</label>
                <textarea  name="aciklama" type="text" class="form-control" id="editor1">
                  <?php echo $urunlercek['aciklama']; ?>
                </textarea>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Sıra</label>
                <input value="<?php echo $urunlercek['sira']; ?>" name="sira" type="text" class="form-control" id="exampleInputEmail1">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Fiyat</label>
                <input value="<?php echo $urunlercek['fiyat']; ?>"  name="fiyat" type="text" class="form-control" id="exampleInputEmail1">
              </div>

            </div>
            <div class="box-footer">
              <button name="urnDznl" type="submit" class="btn btn-primary">Kaydet</button>
            </div>
          </form>
        </div>
      </section>
    </div>
  </section>
</div>

<?php require_once 'footer.php'; ?>
