<?php
require_once 'header.php';
require_once 'sidebar.php';

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
              <input type="hidden" name="altid" value="<?php echo $_GET['altid']; ?>">
              <div class="form-group">
                <label for="exampleInputEmail1">Resim</label>
                <input  name="resim" type="file" class="form-control" id="exampleInputEmail1">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Başlık</label>
                <input name="baslik" type="text" class="form-control" id="exampleInputEmail1" placeholder="Başlık">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Açıklama</label>
                <textarea   name="aciklama" type="text" class="form-control" id="editor1" placeholder="Açıklama">
                </textarea>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Sıra</label>
                <input  name="sira" type="text" class="form-control" id="exampleInputEmail1" placeholder="Sıra">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Fiyat</label>
                <input  name="fiyat" type="text" class="form-control" id="exampleInputEmail1" placeholder="Fiyat">
              </div>

            </div>
            <div class="box-footer">
              <button name="urnKyt" type="submit" class="btn btn-primary">Kaydet</button>
            </div>
          </form>
        </div>
      </section>
    </div>
  </section>
</div>

<?php require_once 'footer.php'; ?>
