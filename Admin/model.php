<?php
require_once 'config.php';
ob_start();
session_start();
//AYARLARI KAYDET
if (isset($_POST['ayarKyt'])) {

  $baslik=$_POST['baslik'];
  $aciklama=$_POST['aciklama'];
  $anahtarkelime=$_POST['anahtarkelime'];
  $adres=$_POST['adres'];
  $telefon=$_POST['telefon'];
  $whatsapp=$_POST['whatsapp'];
  $instagram=$_POST['instagram'];
  $twitter=$_POST['twitter'];
  $linkedin=$_POST['linkedin'];
  $facebook=$_POST['facebook'];
  $mailadres=$_POST['mailadres'];

  $query=$db->prepare(" UPDATE ayarlar SET

  baslik=?,
  aciklama=?,
  anahtarkelime=?,
  adres=?,
  telefon=?,
  whatsapp=?,
  instagram=?,
  twitter=?,
  linkedin=?,
  facebook=?,
  mailadres=?

  WHERE id=1
     ");
  $update=$query->execute(array(
  $baslik,   $aciklama,  $anahtarkelime,  $adres,  $telefon, $whatsapp, $instagram,
  $twitter,  $linkedin, $facebook, $mailadres
  ));

  if ($update) {
    Header("Location:ayarlar.php?status=true");
  }
  else{
    Header("Location:ayarlar.php?status=false");
  }
}
//HAKKIMIZDA KAYDET
if (isset($_POST['hkmzdKyt'])) {
  // değişkenlerimizi alıyoruz.
  $baslik=$_POST['baslik'];
  $aciklama=$_POST['aciklama'];
  $misyon=$_POST['misyon'];
  $vizyon=$_POST['vizyon'];

  $query=$db->prepare(" UPDATE hakkimizda SET

  baslik=?,
  aciklama=?,
  misyon=?,
  vizyon=?

  WHERE id=1
     ");
  $update=$query->execute(array(
  $baslik,   $aciklama,  $misyon,  $vizyon
  ));

  if ($update) {
    Header("Location:hakkimizda.php?status=true");
  }
  else{
    Header("Location:hakkimizda.php?status=false");
  }
}
//KATEGORİ EKLE
if (isset($_POST['ktgKyt'])) {
  $baslik=$_POST['baslik'];
  $sira=$_POST['sira'];

  $query=$db->prepare("INSERT INTO kategori SET
  baslik=?,
  sira=? ");

  $insert=$query->execute(array(
    $baslik, $sira
  ));

  if ($insert) {
    Header("Location:kategori.php");
  }
}
//KATEGORİ DÜZENLE
if (isset($_POST['ktgDznl'])) {
  $baslik=$_POST['baslik'];
  $sira=$_POST['sira'];
  $id=$_POST['id'];

  $query=$db->prepare(" UPDATE kategori SET

  baslik=?,
  sira=?

  WHERE id=$id
     ");
  $update=$query->execute(array(
  $baslik,   $sira
  ));

  if ($update) {
    Header("Location:kategori.php?status=true");
  }
  else{
    Header("Location:kategori.php?status=false");
  }
}
//KATEGORİ SİL
if (isset($_GET['kategorisil'])) {

  $id=$_GET['id'];
  $query=$db->prepare(" DELETE from kategori

  WHERE id=?
     ");
  $update=$query->execute(array(
    $id
  ));

  if ($update) {
    Header("Location:kategori.php?status=true");
  }
  else{
    Header("Location:kategori.php?status=false");
  }
}
//ALT KATEGORİ EKLE
if (isset($_POST['altkategorikaydet'])) {

  $baslik=$_POST['baslik'];
  $sira=$_POST['sira'];
  $id=$_POST['id'];

    $query=$db->prepare("INSERT into  altkategori SET

    baslik=?,
    sira=?,
    kategori_id=?
       ");
    $insert=$query->execute(array(
    $baslik, $sira, $id
    ));
    if ($insert) {
      Header("Location:altkategori.php?id=$id&status=true");
    }
    else{
      Header("Location:altkategori.php?id=$id&status=false");
    }

}
//ALT KATEGORİ DÜZENLE
if (isset($_POST['altKtgDznl'])) {
  $baslik=$_POST['baslik'];
  $sira=$_POST['sira'];
  $id=$_POST['id'];

  $query=$db->prepare("UPDATE altkategori SET
  baslik=?,
  sira=?
  WHERE
  id=$id

  ");

  $update=$query->execute(array(
    $baslik, $sira
  ));

  if ($update) {
    Header("Location:altkategori.php?id=$id&status=true");
  }else{
    Header("Location:altkategori.php?id=$id&status=false");
  }
}
//ALT KATEGORİ SİL
if (isset($_GET['altkategorisil'])) {

  $id=$_GET['id'];
  $query=$db->prepare(" DELETE from altkategori
  WHERE id=?
     ");
  $delete=$query->execute(array(
    $id
  ));

  if ($delete) {
    Header("Location:altkategori.php?id=$id&status=true");
  }
  else{
    Header("Location:altkategori.php?id=$id&status=false");
  }
}
//GALERİ KAYDET
if (isset($_POST['glrKydt'])) {
  $sira=$_POST['sira'];
  $yukle = '../img/gallery/';
  @$resimad =$_FILES['resim'] ["tmp_name"];
  @$isim = $_FILES['resim'] ["name"];

  $resimyolu=$sayilar.$isim;
  @move_uploaded_file($resimad, "$yukle/$resimyolu");

  $query=$db->prepare("INSERT INTO galeri SET
  resim=?,
  sira=?
  ");

  $insert=$query->execute(array(
    $sira, $resimyolu
  ));

  if ($insert) {
    Header("Location:galeri.php?status=true");
  }else{
    Header("Location:galeri.php?status=false");
  }

}
//GALERİ DÜZENLE
if (isset($_POST['glrDznl'])) {

  if ($_FILES['resim'] ["size"]>0) {

  $sira=$_POST['sira'];
  $yukle = '../img/gallery/';
  @$resimad =$_FILES['resim'] ["tmp_name"];
  @$isim = $_FILES['resim'] ["name"];

  $resimyolu=$sayilar.$isim;
  @move_uploaded_file($resimad, "$yukle/$resimyolu");
  $sira=$_POST['sira'];
  $id=$_POST['id'];

  $query=$db->prepare(" UPDATE galeri SET
  sira=?, resim=? WHERE id=$id ");

  $update=$query->execute(array(
  $sira, $resimyolu
  ));

  $delete=$_POST['oldimg'];
  unlink("../img/gallery/$delete");

    if ($update) {
      Header("Location:galeri.php?status=true");
    }
    else{
      Header("Location:galeri.php?status=false");
    }
  }else{

  $sira=$_POST['sira'];
  $id=$_POST['id'];

  $query=$db->prepare(" UPDATE galeri SET

  sira=? WHERE id=$id ");

  $update=$query->execute(array(
  $sira
  ));

    if ($update) {
      Header("Location:galeri.php?status=true");
    }
    else{
      Header("Location:galeri.php?status=false");
    }
  }
}
//GALERİ Sİl
if (isset($_POST['glrSl'])) {

  $id=$_POST['id'];
  $resim=$_POST['resim'];

  $query=$db->prepare(" DELETE from galeri

  WHERE id=?
     ");
  $update=$query->execute(array(
    $id
  ));
  unlink("../img/gallery/$resim");
    if ($update) {
      Header("Location:galeri.php?status=true");
    }else{
      Header("Location:galeri.php&status=false");
    }
}
//URUN EKLE
if (isset($_POST['urnKyt'])) {

  $baslik=$_POST['baslik'];
  $aciklama=$_POST['aciklama'];
  $sira=$_POST['sira'];
  $fiyat=$_POST['fiyat'];
  $altid=$_POST['altid'];

  $yukle = '../img/prod';

  @$resimad =$_FILES['resim'] ["tmp_name"];
  @$isim = $_FILES['resim'] ["name"];
  $resimyolu=$sayilar.$isim;

  @move_uploaded_file($resimad, "$yukle/$resimyolu");

  $query=$db->prepare("INSERT INTO urunler SET
  baslik=?,
  aciklama=?,
  sira=?,
  fiyat=?,
  resim=?,
  altkategori_id=?
  ");

  $insert=$query->execute(array(
    $baslik, $aciklama, $sira, $fiyat, $resimyolu, $altid
  ));

  if ($insert) {
    Header("Location:urunler.php?altid=$altid&status=true");
  }else{
    Header("Location:urunler.php?altid=$altid&status=false");
  }
}
//URUN DUZENLE
if (isset($_POST['urnDznl'])) {

  $baslik=$_POST['baslik'];
  $aciklama=$_POST['aciklama'];
  $sira=$_POST['sira'];
  $fiyat=$_POST['fiyat'];
  $id=$_POST['id'];

  if ($_FILES['resim'] ["size"]>0) {

  $yukle = '../img/prod/';
  @$resimad =$_FILES['resim'] ["tmp_name"];
  @$isim = $_FILES['resim'] ["name"];

  $resimyolu=$sayilar.$isim;
  @move_uploaded_file($resimad, "$yukle/$resimyolu");

  $query=$db->prepare(" UPDATE urunler SET

    baslik=?,
    aciklama=?,
    sira=?,
    fiyat=?,
    resim=?
  WHERE id=$id

     ");

  $update=$query->execute(array(
  $baslik, $aciklama, $sira, $fiyat, $resimyolu
  ));

  $delete=$_POST['oldimg'];
  unlink("../img/prod/$delete");

    if ($update) {
      Header("Location:urunler.php?status=true");
    }
    else{
      Header("Location:urunler.php?status=false");
    }
  }else{

    $query=$db->prepare(" UPDATE urunler SET
    baslik=?, aciklama=?, sira=?, fiyat=? WHERE id=$id ");

    $update=$query->execute(array(
    $baslik, $aciklama, $sira, $fiyat
    ));

      if ($update) {
        Header("Location:urunler.php?status=true");
      }
      else{
        Header("Location:urunler.php?status=false");
      }
    }
}
//URUN SİL
if (isset($_POST['urnSl'])) {

  $id=$_POST['id'];
  $resim=$_POST['resim'];

  $query=$db->prepare(" DELETE from urunler
   WHERE id=?
     ");
  $delete=$query->execute(array(
    $id
  ));
  unlink("../img/prod/$resim");
    if ($delete) {
      Header("Location:urunler.php?status=true");
    }
    else{
      Header("Location:urunler.php&status=false");
    }
}
//SLİDER KAYDET
if (isset($_POST['sldKyt'])) {
  $yukle = '../img/slider/';
  $baslik=$_POST['baslik'];
  $sira=$_POST['sira'];
  $aciklama=$_POST['aciklama'];

  @$resimad =$_FILES['resim'] ["tmp_name"];
  @$isim = $_FILES['resim'] ["name"];

  $resimyolu=$sayilar.$isim;
  @move_uploaded_file($resimad, "$yukle/$resimyolu");

  $query=$db->prepare("INSERT INTO slider SET
    resim=?,
    baslik=?,
    sira=?,
    aciklama=?

  ");

  $insert=$query->execute(array(
  $resimyolu, $baslik, $sira, $aciklama
  ));

  if ($insert) {
    Header("Location:slider.php?status=true");
  }else{
    Header("Location:slider.php?status=false");
  }
}
//SLİDER DÜZENLE
if (isset($_POST['sldDzn'])) {

  $yukle = '../img/slider/';
  $baslik=$_POST['baslik'];
  $sira=$_POST['sira'];
  $aciklama=$_POST['aciklama'];
  $id=$_POST['id'];

  if ($_FILES['resim'] ["size"]>0) {

  @$resimad =$_FILES['resim'] ["tmp_name"];
  @$isim = $_FILES['resim'] ["name"];

  $resimyolu=$sayilar.$isim;
  @move_uploaded_file($resimad, "$yukle/$resimyolu");

  $query=$db->prepare(" UPDATE slider SET
    resim=?, baslik=?, sira=?, aciklama=? WHERE id=$id ");

  $update=$query->execute(array(
    $resimyolu, $baslik, $sira, $aciklama));

      $delete=$_POST['oldimg'];
      unlink("../img/slider/$delete");

      if ($update) {
        Header("Location:slider.php?status=true");
      }
      else{
        Header("Location:slider.php?status=false");
      }
    }else{
        $query=$db->prepare(" UPDATE slider SET
          baslik=?, sira=?, aciklama=? WHERE id=$id ");

        $update=$query->execute(array(
            $baslik, $sira, $aciklama
        ));
          if ($update) {
            Header("Location:slider.php?status=true");
          }
          else{
            Header("Location:slider.php?status=false");
        }
      }
}
//SLİDER Sİl
if (isset($_POST['sldSl'])) {

  $id=$_POST['id'];
  $resim=$_POST['resim'];

  $query=$db->prepare(" DELETE from slider

  WHERE id=?
     ");
  $delete=$query->execute(array(
      $id
  ));
    unlink("../img/slider/$resim");
    if ($delete) {
      Header("Location:slider.php?status=true");
    }
    else{
      Header("Location:slider.php&status=false");
    }
}
//LOGO Kaydet
if (isset($_POST['logoKyt'])) {
  $yukle = '../img/logo/';
  @$resimad =$_FILES['resim'] ["tmp_name"];
  @$isim = $_FILES['resim'] ["name"];

  $resimyolu=$sayilar.$isim;
  @move_uploaded_file($resimad, "$yukle/$resimyolu");

  $query=$db->prepare("UPDATE ayarlar SET
  resim=?
  WHERE id=1
  ");

  $insert=$query->execute(array(
    $resimyolu
  ));

  if ($insert) {
    Header("Location:ayarlar.php?status=true");
  }else{
    Header("Location:ayarlar.php?status=false");
  }

}
//ADMİN GİRİŞ
if (isset($_POST['giris'])) {

  $mail=htmlspecialchars($_POST['email']);
  $pass=htmlspecialchars($_POST['sifre']);
  $md5pass=md5($pass);
  if ($mail && $md5pass) {
    $query=$db->prepare("SELECT * FROM kullanici where email=? and sifre=?");
    $query->execute(array(
        $mail, $md5pass
    ));
    $count=$query->rowCount();
    if ($count > 0) {
      $_SESSION['kad'] = $mail;
      header("Location:index.php");
    }else{
      header("Location:giris.php?status=false");
    }
  }
}
?>
