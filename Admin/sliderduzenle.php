<?php
require_once 'header.php';
require_once 'sidebar.php';
$slider=$db->prepare("SELECT * FROM slider where id=?");
$slider->execute(array(
  $_GET['id']
));
$slidercek=$slider->fetch(PDO::FETCH_ASSOC);
 ?>
<!-- general form elements -->
<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <section class="col-lg-5 connectedSortable">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Slider Düzenle</h3>
          </div>

          <form action="model.php" method="post" enctype="multipart/form-data">
            <div class="box-body">

              <img width="150" src="../img/slider/<?php echo $slidercek['resim']; ?>" alt="">
              <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
              <input type="hidden" name="oldimg" value="<?php echo $_GET['resim']; ?>">

              <div class="form-group">
                <label for="exampleInputEmail1">Resim</label>
                <input  name="resim" type="file" class="form-control" id="exampleInputEmail1">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Başlık</label>
                <input value="<?php echo $slidercek['baslik']; ?>" name="baslik" type="text" class="form-control" id="exampleInputEmail1" placeholder="Başlık">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Sıra</label>
                <input value="<?php echo $slidercek['sira']; ?>" name="sira" type="text" class="form-control" id="exampleInputEmail1" placeholder="Sıra">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Açıklama</label>
                <textarea name="aciklama" id="editor1" rows="8" cols="80">
                  <?php echo $slidercek['aciklama']; ?>
                </textarea>
              </div>
            </div>

            <div class="box-footer">
              <button name="sldDzn" type="submit" class="btn btn-primary">Kaydet</button>
            </div>
          </form>
        </div>
      </section>
    </div>
  </section>
</div>

<?php require_once 'footer.php'; ?>
