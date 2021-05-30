<?php
include("config.php");
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="AtesMesut">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="<?php echo $favicon; ?>" type="image/x-icon">
  <meta name="description" content="<?php echo $description; ?>">
  <meta name="keywords" content="<?php echo $keywords; ?>">
  <title>Admin - <? echo $SiteBaslik; ?></title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans:400,700&subset=latin,vietnamese,latin-ext">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&subset=latin,cyrillic">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/socicon/css/socicon.min.css">
  <link rel="stylesheet" href="assets/puritym/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">  
</head>
<body>

<?php
session_start();
if(!isset($_SESSION["login"])){
echo "<center><br><br><br><img src='$sitelogo' width='400'></center><br><br>";
echo '<center>Bu sayfayı görüntüleme yetkiniz yoktur.<br><br><a href="login.php">Giriş Yapınız.<a/></center>';
header("Refresh: 3; url=login.php");
die();
}else{
}
?>

  <nav class="navbar navbar-light mbr-navbar navbar-transparent navbar-fixed-top" id="menu-0" data-rv-view="0">
    <div class="container">
        <button class="navbar-toggler pull-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
            <div class="hamburger-icon"></div>
        </button>
        <div class="clearfix">Hoşgeldin <? echo $adminname; ?></div>
        <div class="collapse navbar-toggleable-sm" id="exCollapsingNavbar2">
            <ul class="nav navbar-nav pull-xs-right">

				<li class="nav-item"><a class="nav-link" href="<? echo $domain; ?>" target="_blank">Siteye Git</a></li>
				<li class="nav-item"><a class="nav-link" href="logout.php">Çıkış Yap</a></li>

			</ul>
        </div>
    </div>
</nav>


<section class="mbr-section mbr-section-small" id="testimonials1-5" data-rv-view="14" style="background-color: rgb(255, 255, 255); padding-top: 1.5rem; padding-bottom: 1.5rem;">
    <div>
        <div class="container">
            <h2 class="mbr-section-title display-3 text-xs-center">Sistem Kontrol</h2>
						<?php
							$file= $_GET['dosya'];
							$dosyaadi="$file";
							echo unlink($dosyaadi)?"<meta http-equiv='refresh' content='3;admin.php'><h5 class='text-xs-center'><font color='green'>Dosya Silme işlemi Başarılı.</font></h5>":"";
						?>
            <div class="row mbr-testimonial-cards">

		<table width='%100' height='%100' bgcolor='white'  border='0' cellspacing='8' cellpadding='8' align='center'> 
<td> 
<center> 	
			<? 
			# Resimleri cek 
			$dizin  = "$yuklemedizin";
			$tutucu = opendir($dizin); 
			while($dosya = readdir($tutucu)){ 
			   if(is_file($dizin."/".$dosya)) 
			   $resim[] = $dosya; 
			   } 
			closedir($tutucu); 

			# On bılgıler 
			$limit  = 9;                    // Sayfalama kacarlı yapılacak? 
			$sayfa  = $_GET["sayfa"];       // Kacıncı sayfadayız? (Bu bılgı adres satırından gelıyor) 
			if($sayfa < 1) $sayfa = 1;      // Kontrol ... 
			$toplam = count($resim);        // Toplam kac adet resım var? 

			# Bu bılgıler dogrultusunda 
			$kactan = ($sayfa-1) * $limit;  // Kactan baslamalıyım? 
			$kaca   = ($kactan+$limit);     // Kacta bıtırmelıyım? 
			if($kaca > $toplam) $kaca = $toplam; 

			# $kactan baslayıp $kaca kadar resım bas 
			for($i=$kactan; $i < $kaca; $i++){ 
			   echo "<table border='0' width='%10'>
      <tr>
         <td rowspan='2'><a href='direk/$resim[$i].html' target='_blank' title='$resim[$i]'><img src='".$dizin."/".$resim[$i]."' height='80' width='80'></a></td>
         <td><center><a href='direk/$resim[$i].html' target='_blank' title='$resim[$i]'><img src='https://dabuttonfactory.com/button.png?t=$resim[$i]&f=Calibri-Bold&ts=15&tc=fff&w=150&h=30&c=0&bgt=gradient&bgc=aad4fa&ebgc=2f74b3&be=1'></a></center></td>
      </tr>
      <tr>
         <td><form action='admin.php?dosya=$dizin/$resim[$i]' method='post' id='dosya'>
		 <center><input type='image' name='dosya' src='https://dabuttonfactory.com/button.png?t=Resimi+Sil&f=Calibri&ts=12&tc=fff&w=150&h=25&c=0&bgt=gradient&bgc=f00&ebgc=900&be=1' value='Dosyayı Sil' ></center></form></td>
      </tr>
   </table>"; 
			   } 

			# Bırden baslayıp sayfa sayısı kadar lınk bas 
			for($i=1; $i < $toplam / $limit; $i++){ 
			  if($sayfa == $i) 
			  echo "<img src='https://dabuttonfactory.com/button.png?t=$i&f=Calibri-Bold&ts=24&tc=fff&tshs=1&tshc=000&w=50&h=50&c=5&bgt=gradient&bgc=ccc&ebgc=666'>"; else 
			  echo "<a href='admin.php?sayfa=$i'><img src='https://dabuttonfactory.com/button.png?t=$i&f=Calibri-Bold&ts=24&tc=fff&w=45&h=45&c=5&bgt=pyramid&bgc=073763&ebgc=3d85c6&be=1'></a>"; 
			  } 
			?> 
			
			
</center>
</td>
</table> 
            </div>
        </div>
    </div>
</section>




<?php include('footer.php'); ?>

  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/social-likes/social-likes.js"></script>
  <script src="assets/puritym/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  
  
</body>
</html>