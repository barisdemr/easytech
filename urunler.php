<?php 
include("baglanti.php");

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Easy Tech | Giyilebilir Teknolojinin Adresi</title>
    <link rel="stylesheet" type="text/css" href="assets/css/globalCSS.css">
    <link rel="icon" href="assets/image/favicon.jpg" type="image/x-icon" />
</head>
<body>
<header class='Header'>
      <div class="headerTop">
        GİYİLEBİLİR TEKNOLOJİNİN ADRESİ
        </div>
        <div class="headerBottom">
       <a href="index.php"> <img src="assets/image/logo.jpg" alt="" /></a>
      
        <ul>
          <li>
            <a href='index.php'>Anasayfa</a>
            </li>
            <li>
            <a href="urunler.php">Ürünler</a>
            </li>


          
        </ul> 
     </div>
    </header>    

    <div class="urunler">

    <?php 

$sorgu=$bag->prepare("Select * from easytech where urun_aktifligi='1' " );
$sorgu->execute();

if ($sorgu->rowCount()) {
    

while ($easytech=$sorgu->fetch(PDO::FETCH_ASSOC)) {
    $sayi=rand(0,11);
    echo"<div class='urun'  >
    <a href='detay.php?ID=".$easytech["id"]."'>
  <img src='".$easytech["urun_resimi"]."'>
  <h2>".$easytech["urun_adi"]."</h2>
  <p>".$easytech["urun_fiyat"]." <span>₺</span></p>
  <div id='urun'>
  <a href='detay.php?ID=".$easytech["id"]."' id='satinal'>Satın Al</a>
    </a>
  </div>
  
</div>";

  
}
}
else{
   echo"<p>Listelenecek Ürün Bulunamadı...</p>";
}

?>
</div>


<!-- Güvenli Alışveriş-->
<div class="guvenli">
          <img src="assets/image/1.png" alt="">
          <img src="assets/image/2.png" alt="">
          <img src="assets/image/3.png" alt="">
        </div>
        <!-- FOOTER -->
        <footer>
        <div class="socialMedia">
          <h3>Sosyal Medya</h3>
      <a href="https://www.instagram.com/#/">  <img src="assets/image/insta.png" alt="" /></a>
        </div>
        <div class="noCopy">
          <h2>&#169; 2023 EasyTech</h2>
        </div>
        <div class="satisKanallari">
          <img src="assets/image/odeme.png" alt="" />
        </div>
    </footer>
    <div class="rules">
          <h2>Koşullar</h2>
          <ul>
            <li><a href="kosullar.php">Alışveriş Güvenliği</a></li>
            <li><a href="kosullar.php">Ön Bilgilendirme Formu</a></li>
            <li><a href="kosullar.php">Mesafeli Satış Sözleşmesi</a></li>
            <li><a href="kosullar.php">Kişisel Verilerin Korunması</a></li>
          </ul>
        </div>
</body>
</html>
