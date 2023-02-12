<?php 
include("baglanti.php");

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/globalCSS.css">
    <title>Easy Tech</title>
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


    <?php 
     $sorgu=$bag->prepare("select * from easytech where id=?");
     $sorgu->execute([
       $_GET["ID"]
     ]);
     $easytech=$sorgu->fetch(PDO::FETCH_ASSOC);

    echo "<div class='detay'>
	<img src='".$easytech["urun_resimi"]."' data-aos='fade-right' data-aos-duration='1000'>
    <div class='detaySag'>
		<h2>".$easytech["urun_adi"]."</h2>
		<h1>".$easytech["urun_fiyat"]."₺</h1>
        <a href='https://shopier.com/".$easytech["urun_link"]."'>SATIN AL</a>
		<p>".$easytech["urun_aciklamasi"]."</p>

	</div></div>
</div>";

	 ?>

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
      <a href="https://www.instagram.com/easytechtr/">  <img src="assets/image/insta.png" alt="" /></a>
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