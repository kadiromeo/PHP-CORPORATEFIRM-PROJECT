<?php require_once 'header.php'; ?>

<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">İletişim</span>
          <h1 class="text-capitalize mb-5 text-lg">Bizimle İletişime Geçin</h1>

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Contact Us</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- contact form start -->

<section class="section contact-info pb-0">
    <div class="container">
         <div class="row">
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                    <i class="icofont-live-support"></i>
                    <h5>Telefon Numarası:</h5>
                     <?php echo $ayarcek['telefon']; ?>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                    <i class="icofont-support-faq"></i>
                    <h5>Email: </h5>
                     <?php echo $ayarcek['mailadres']; ?>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                    <i class="icofont-location-pin"></i>
                    <h5>Adres:</h5>
                     <?php echo $ayarcek['adres'] ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-form-wrap section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center">
                    <h2 class="text-md mb-2">İletişime Geçin!</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p class="mb-5">İletişime geçmek için lütfen formu doldurunuz...</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form  class="contact__form" method="post" action="mail.php">
                 <!-- form message -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="name"  type="text" class="form-control" placeholder="Ad Soyad" >
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="email"  type="email" class="form-control" placeholder="Email ">
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="subject"  type="text" class="form-control" placeholder="Konu">
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="phone"  type="text" class="form-control" placeholder="Telefon No">
                            </div>
                        </div>
                    </div>

                    <div class="form-group-2 mb-4">
                        <textarea name="message" class="form-control" rows="8" placeholder="Mesajınız"></textarea>
                    </div>

                    <div class="text-center">
                        <input class="btn btn-main btn-round-full" name="submit" type="submit" value="Gönder"></input>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12041.752031966818!2d28.956320441907422!3d41.01567230930991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab9eb9d587135%3A0x8aa0bb6b1dd6ffb7!2zRW1pbsO2bsO8LCBSw7xzdGVtIFBhxZ9hLCBGYXRpaC_EsHN0YW5idWw!5e0!3m2!1str!2str!4v1666008663145!5m2!1str!2str" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<?php require_once 'footer.php'; ?>
