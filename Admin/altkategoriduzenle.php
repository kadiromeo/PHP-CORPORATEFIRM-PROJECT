<?php require_once 'header.php';
require_once 'sidebar.php';

$altkategori=$db->prepare("SELECT * FROM altkategori where id=?");
$altkategori->execute(array(
$_GET['id']
));
$altkategoricek=$altkategori->fetch(PDO::FETCH_ASSOC);
 ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">

      <div class="row">


        <section class="col-lg-12 connectedSortable">


          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Alt Kategori Düzenle</h3>
            </div>
            <!-- /.box-header -->


            <form action="model.php" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Başlık</label>
                  <input name="baslik" value="<?php echo $altkategoricek['baslik'] ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Başlık Giriniz">
                </div>

         <input type="hidden" name="id" value="<?php echo $altkategoricek['id'] ?>">
                <div class="form-group">
                  <label for="exampleInputEmail1">Sıra</label>
                  <input name="sira" value="<?php echo $altkategoricek['sira'] ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Sıra Giriniz">
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button name="altKtgDznl" type="submit" class="btn btn-primary">Kaydet</button>
              </div>
            </form>
          </div>

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
<?php require_once 'footer.php'; ?>
