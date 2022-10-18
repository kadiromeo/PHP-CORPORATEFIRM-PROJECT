<?php require_once 'header.php';
$query2=$db->prepare("SELECT * FROM hakkimizda where id=?");
$query2->execute(array(1));
$row2=$query2->fetch(PDO::FETCH_ASSOC);
 ?>

<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Kadir Yolcu By</span>
          <h1 class="text-capitalize mb-5 text-lg">Hakkımızda</h1>

        </div>
      </div>
    </div>
  </div>
</section>

<section class="section about-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h2 class="title-color"><?php echo $row2['baslik']; ?></h2>
			</div>
			<div class="col-lg-8">
				<p><?php echo $row2['aciklama']; ?></p>
			</div>

      <div class="col-lg-4">
				<h2 class="title-color">Vizyon</h2>
			</div>
			<div class="col-lg-8">
				<p><?php echo $row2['vizyon']; ?></p>
			</div>

      <div class="col-lg-4">
        <h2 class="title-color">Misyon</h2>
      </div>
      <div class="col-lg-8">
        <p><?php echo $row2['misyon']; ?></p>
      </div>
		</div>
	</div>
</section>

<?php require_once 'footer.php'; ?>
