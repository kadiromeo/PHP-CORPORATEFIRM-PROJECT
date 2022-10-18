<?php
require_once 'header.php';
require_once 'sidebar.php';

$kategori=$db->prepare("SELECT * FROM kategori where id=?");
$kategori->execute(array(
  $_GET['id']
));

$kategoricek=$kategori->fetch(PDO::FETCH_ASSOC);
 ?>
<!-- general form elements -->
<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <section class="col-lg-5 connectedSortable">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Kategori Düzenle</h3>
          </div>


          <form action="model.php" method="post">
            <div class="box-body">

              <div class="form-group">
                <label for="exampleInputEmail1">Başlık</label>
                <input value="<?php echo $kategoricek['baslik']; ?>" name="baslik" type="text" class="form-control" id="exampleInputEmail1" placeholder="Başlık">
              </div>

              <input type="hidden" name="id" value="<?php echo $kategoricek['id']; ?>">

              <div class="form-group">
                <label for="exampleInputEmail1">Sıra</label>
                <input value="<?php echo $kategoricek['sira']; ?>"  name="sira" type="text" class="form-control" id="exampleInputEmail1" placeholder="Sıra">
              </div>
            </div>

            <div class="box-footer">
              <button name="ktgDznl" type="submit" class="btn btn-primary">Kaydet</button>
            </div>
          </form>
        </div>
      </section>
    </div>
  </section>
</div>

<?php require_once 'footer.php'; ?>
