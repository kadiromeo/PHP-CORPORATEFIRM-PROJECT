<!-- footer Start -->
<footer class="footer section gray-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 mr-auto col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<div class="logo mb-4">
						<img src="img/logo/<?php echo $ayarcek['logo']; ?>" alt="" class="img-fluid">
					</div>
					<p> <?php echo $ayarcek['aciklama']; ?></p>

					<ul class="list-inline footer-socials mt-4">
						<li class="list-inline-item"><a href="<?php echo $ayarcek['facebook']; ?>"><i class="icofont-facebook"></i></a></li>
						<li class="list-inline-item"><a href="<?php echo $ayarcek['twitter']; ?>"><i class="icofont-twitter"></i></a></li>
						<li class="list-inline-item"><a href="<?php echo $ayarcek['linkedin']; ?>"><i class="icofont-linkedin"></i></a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Kategoriler</h4>
					<div class="divider mb-4"></div>

					<ul class="list-unstyled footer-menu lh-35">
						<?php $altkategori=$db->prepare("SELECT * FROM altkategori where kategori_id=? ");
						$altkategori->execute(array(6));
						while ($altkategoricek=$altkategori->fetch(PDO::FETCH_ASSOC)) { ?>

						<li class="list-inline-item"><a  href="urunler-<?=seo($altkategoricek['baslik']).'-'.$altkategoricek['id']?>">
							<?php echo $altkategoricek['baslik'];?>
						</a></li>

					<?php } ?>

					</ul>
				</div>
			</div>

			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Sayfalar</h4>
					<div class="divider mb-4"></div>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="index">Anasayfa</a></li>
						<li><a href="hakkimizda">Hakkımızda</a></li>
						<li><a href="galeri">Galeri </a></li>
						<li><a href="iletisim">İletişim</a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget widget-contact mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">İletişim</h4>
					<div class="divider mb-4"></div>

					<div class="footer-contact-block mb-4">
						<div class="icon d-flex align-items-center">
							<i class="icofont-email mr-3"></i>
							<span class="h6 mb-0"> 24/7 İletişim</span>
						</div>
						<h4 class="mt-2"><a href="<?php echo $ayarcek['mailadres']; ?>"><?php echo $ayarcek['mailadres']; ?></a></h4>
					</div>

					<div class="footer-contact-block">
						<div class="icon d-flex align-items-center">
							<i class="icofont-support mr-3"></i>
							<span class="h6 mb-0">Hafta içi : 08:30 - 18:00</span>
						</div>
						<h4 class="mt-2"><a href="<?php echo $ayarcek['telefon']; ?>"><?php echo $ayarcek['telefon']; ?></a></h4>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-btm py-4 mt-5">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-6">
					<div class="copyright">
					Tüm Hakları Saklıdır <span class="text-color">Kadir Yolcu</span> by <strong><?php echo date("Y");?></strong>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<a class="backtop js-scroll-trigger" href="#top">
						<i class="icofont-long-arrow-up"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</footer>

    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.js"></script>
    <!-- Bootstrap 4.3.2 -->
    <script src="plugins/bootstrap/js/popper.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/counterup/jquery.easing.js"></script>
    <!-- Slick Slider -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="plugins/counterup/jquery.waypoints.min.js"></script>

    <script src="plugins/shuffle/shuffle.min.js"></script>
    <script src="plugins/counterup/jquery.counterup.min.js"></script>
    <!-- Google Map -->
    <script src="plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>

    <script src="js/script.js"></script>
    <script src="js/contact.js"></script>

  </body>
  </html>
