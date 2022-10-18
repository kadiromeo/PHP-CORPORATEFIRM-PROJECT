<?php require_once 'header.php'; ?>

<section class="section service-2">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 text-center">
				<div class="section-title">
					<h2>Ürünler Sayfamız</h2>
					<div class="divider mx-auto my-4"></div>
					<p>Kategoriye Ait Ürünleri Bu Sayfada Bulabilirsiniz...</p>
				</div>
			</div>
		</div>

		<div class="row">

      <?php $urunler=$db->prepare("SELECT * FROM urunler where altkategori_id=?");
      $urunler->execute(array(
        @$_GET['id']
      ));
      while ($urunlercek=$urunler->fetch(PDO::FETCH_ASSOC)) { ?>

			<div class="col-lg-4 col-md-6 ">
				<div class="department-block mb-5">
					<a href="urun-detay-<?=seo($urunlercek['baslik']).'-'.$urunlercek['id']?>">
					<img src="img/prod/<?php echo $urunlercek['resim']; ?>" alt="" class="img-fluid w-100">
					</a>
					<div class="content">
						<h4 class="mt-4 mb-2 title-color"><?php echo $urunlercek['baslik']; ?></h4>
						<p class="mb-4"><?php echo $urunlercek['aciklama']; ?></p>
						<a href="urun-detay-<?=seo($urunlercek['baslik']).'-'.$urunlercek['id']?>" class="read-more">Detay <i class="icofont-simple-right ml-2"></i></a>
					</div>
				</div>
			</div>

    <?php } ?>

		</div>
	</div>
</section>

<?php require_once 'footer.php'; ?>
