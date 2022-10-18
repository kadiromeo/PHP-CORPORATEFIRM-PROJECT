<?php
require_once 'Admin/config.php';
require_once 'function.php';
$ayar=$db->prepare("SELECT * FROM ayarlar where id=?");
$ayar->execute(array(1));
$ayarcek=$ayar->fetch(PDO::FETCH_ASSOC);
 ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="<?php echo $ayarcek['aciklama']; ?>">
    <meta name="keywords" content="<?php echo $ayarcek['anahtarkelime']; ?>">
    <meta name="author" content="Kadir Yolcu">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $ayarcek['baslik']; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/icofont/icofont.min.css">
    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body id="top">
<header>
	<div class="header-top-bar">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<ul class="top-bar-info list-inline-item pl-0 mb-0">
						<li class="list-inline-item"><a href="<?php echo $ayarcek['mailadres']; ?>"><i class="icofont-support-faq mr-2"></i><?php echo $ayarcek['mailadres']; ?></a></li>
						<li class="list-inline-item"><i class="icofont-location-pin mr-2"></i><?php echo $ayarcek['adres']; ?> </li>
					</ul>
				</div>
				<div class="col-lg-6">
					<div class="text-lg-right top-right-bar mt-2 mt-lg-0">
						<a href="tel:+23-345-67890" >
							<span>Telefon No : </span>
							<span class="h4"><?php echo $ayarcek['telefon']; ?></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navigation" id="navbar">
		<div class="container">
		 	 <a class="navbar-brand" href="index">
			  	<img src="img/logo/<?php echo $ayarcek['logo']; ?>" alt="" class="img-fluid">
			  </a>

		  	<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icofont-navigation-menu"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarmain">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item active">
				<a class="nav-link" href="index.php">Anasayfa</a>
			  </li>
			   <li class="nav-item"><a class="nav-link" href="hakkimizda.php">Hakkımızda</a></li>

         <?php $kategori=$db->prepare("SELECT * FROM kategori");
         $kategori->execute();
         while ($kategoricek=$kategori->fetch(PDO::FETCH_ASSOC)) {
         $katid=$kategoricek['id'];
           ?>

			    <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="department.html" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $kategoricek['baslik']; ?> <i class="icofont-thin-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="dropdown02">

            <?php $altkategori=$db->prepare("SELECT * FROM altkategori where kategori_id=? ");
            $altkategori->execute(array($katid));
            while ($altkategoricek=$altkategori->fetch(PDO::FETCH_ASSOC)) { ?>

						<li><a class="dropdown-item" href="urunler-<?=seo($altkategoricek['baslik']).'-'.$altkategoricek['id']?>">
              <?php echo $altkategoricek['baslik']; ?>
            </a></li>

          <?php } ?>
					</ul>
			  	</li>
        <?php } ?>
			   <li class="nav-item"><a class="nav-link" href="galeri.php">Galeri</a></li>
         <li class="nav-item"><a class="nav-link" href="iletisim.php">İletişim</a></li>
			</ul>
		  </div>
		</div>
	</nav>
</header>
