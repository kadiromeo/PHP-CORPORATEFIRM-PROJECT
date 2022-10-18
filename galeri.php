<?php require_once 'header.php'; ?>
<!-- portfolio -->
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

    <?php  $galeri=$db->prepare("SELECT * FROM galeri");
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
<!-- /portfolio -->
<?php require_once 'footer.php'; ?>
