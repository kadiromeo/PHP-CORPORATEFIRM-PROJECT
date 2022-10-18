<?php
require_once 'header.php';

$urunler=$db->prepare("SELECT * FROM urunler where id=?");
$urunler->execute(array(
$_GET['id']
));
$urunlercek=$urunler->fetch(PDO::FETCH_ASSOC);
?>

<section class="section department-single">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="department-img">
					<img src="img/prod/<?php echo $urunlercek['resim']; ?>" alt="" class="img-fluid">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="department-content mt-5">
					<h3 class="text-md"><?php echo $urunlercek['baslik']; ?></h3>
					<div class="divider my-4"></div>
					<p class="lead"><?php echo $urunlercek['aciklama']; ?></p>
				</div>
			</div>
		</div>
	</div>
</section>

<?php require_once 'footer.php'; ?>
