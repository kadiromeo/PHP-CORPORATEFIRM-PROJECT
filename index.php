<?php
require_once 'header.php';
 ?>

 <?php
 $slider=$db->prepare("SELECT * FROM slider");
 $slider->execute();
 while ($slidercek=$slider->fetch(PDO::FETCH_ASSOC)) { 
 ?>

<section class="banner" style="background-image:url(img/slider/<?php echo $slidercek['resim']; ?>)">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-xl-7">
				<div class="block">
					<div class="divider mb-3"></div>

					<h1 class="mb-3 mt-3"><?php echo $slidercek['baslik']; ?></h1>

					<p class="mb-4 pr-5"><?php echo $slidercek['aciklama'] ?></p>
					<div class="btn-container ">
						<a href="iletisim" target="_blank" class="btn btn-main-2 btn-icon btn-round-full">İletişim <i class="icofont-simple-right ml-2  "></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php } ?>

<section class="features">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="feature-block d-lg-flex">
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-surgeon-alt"></i>
						</div>
						<span>24 Saat Hizmet</span>
						<h4 class="mb-3">Online Randevu</h4>
						<p class="mb-4">7/24 Bizden Destek Alabilirsiniz</p>
						<a href="iletisim" class="btn btn-main btn-round-full">İletişim</a>
					</div>

					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-ui-clock"></i>
						</div>
						<h4 class="mb-3">Çalışma Saatleri</h4>
						<ul class="w-hours list-unstyled">
		           <li class="d-flex justify-content-between">Hafta İçi : <span>8:00 - 17:00</span></li>
		           <li class="d-flex justify-content-between">Cumartesi : <span>9:00 - 17:00</span></li>
		           <li class="d-flex justify-content-between">Pazar     : <span>10:00 - 17:00</span></li>
		        </ul>
					</div>

					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-support"></i>
						</div>
						<span>Telefon No:</span>
						<h4 class="mb-3"><?php echo $ayarcek['telefon']; ?></h4>
						<p>Bizimle İletişime Geçmek İçin Bu Numarayı Kullabilirsiniz.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="cta-section ">
	<div class="container">
		<div class="cta position-relative">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-doctor"></i>
						<span class="h3">58</span>k
						<p>Müşteri</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-flag"></i>
						<span class="h3">700</span>+
						<p>Yorum</p>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-badge"></i>
						<span class="h3">40</span>+
						<p>Ürün</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-globe"></i>
						<span class="h3">20</span>
						<p>Kategori</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section doctors">
  <div class="container">
  	  <div class="row justify-content-center">
             <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2>Fotoğraf Galerisi</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p>Bize ait fotoğrafları alt tarafta bulabilirsiniz </p>
                </div>
            </div>
        </div>
    <div class="row shuffle-wrapper portfolio-gallery">

    <?php  $galeri=$db->prepare("SELECT * FROM galeri LIMIT 12");
      $galeri->execute();
      while ($galericek=$galeri->fetch(PDO::FETCH_ASSOC)) {  ?>

      	<div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;cat1&quot;,&quot;cat2&quot;]">
	      	<div class="position-relative doctor-inner-box">
		        <div class="doctor-profile">
	               <div class="doctor-img">
	               		<img src="img/<?php echo $galericek['resim']; ?>" alt="image" class="img-fluid w-100">
	               </div>
	            </div>
	      	</div>
      	</div>
      <?php } ?>

    </div>
  </div>
</section>

<?php require_once 'footer.php'; ?>
