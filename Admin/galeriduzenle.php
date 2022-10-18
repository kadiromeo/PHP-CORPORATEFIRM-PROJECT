<?php
require_once 'header.php';
require_once 'sidebar.php';

$galeri=$db->prepare("SELECT * FROM galeri where id=?");
$galeri->execute(array(
  $_GET['id']
));
$galericek=$galeri->fetch(PDO::FETCH_ASSOC);

 ?>
<!-- general form elements -->
<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <section class="col-lg-5 connectedSortable">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Galeri Ekle</h3>
          </div>

          <form action="model.php" method="post" enctype="multipart/form-data">
            <div class="box-body">
              <img width="150" src="../img/<?php echo $galericek['resim']; ?>" alt="">
              <div class="form-group">
                <label for="exampleInputEmail1">Sıra</label>
                <input name="sira" type="text" class="form-control" id="exampleInputEmail1" placeholder="Başlık">
              </div>
              <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
              <input type="hidden" name="oldimg" value="<?php echo $_GET['resim']; ?>">

              <div class="form-group">
                <label for="exampleInputEmail1">Resim</label>
                <input value="<?php echo $galericek['sira']; ?>"  name="resim" type="file" class="form-control" id="exampleInputEmail1">
              </div>
            </div>

            <div class="box-footer">
              <button name="glrDznl" type="submit" class="btn btn-primary">Kaydet</button>
            </div>
          </form>
        </div>
      </section>
    </div>
  </section>
</div>

<?php require_once 'footer.php'; ?>
