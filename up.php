<?php include('config.php'); ?>

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
  <title><?php echo $SiteBaslik; ?></title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans:400,700&subset=latin,vietnamese,latin-ext">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&subset=latin,cyrillic">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/socicon/css/socicon.min.css">
  <link rel="stylesheet" href="assets/puritym/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">  
</head>
<body>

<?php include('nav.php'); ?>

<section class="mbr-section mbr-section-nopadding" id="msg-box4-a" data-rv-view="39" style="background-color: rgb(255, 255, 255); padding-top: 1.5rem; padding-bottom: 1.5rem;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-lg-3 mbr-inner-padding text-xs-center mbr-table-cell-lg">
			
<?php 

	// Uzantı Kontrollerim
	$uzanti=    array('image/jpeg','image/jpg','image/png','image/x-png','image/gif', 'image/svg+xml', 'image/tiff', 'image/tif', 'application/x-shockwave-flash', 'image/bmp');
	
	// Aynı Dizinde Bulunan Resimler Klasörüne Kaydet
	if(in_array(strtolower($_FILES['dosya']['type']),$uzanti)){


	/* Türkçe Karakter Kontrol*/
	function tr($metin){
	$aranan=array("ş","Ş","ı","I","İ","ğ","Ğ","ü","Ü","ö","Ö","Ç","ç","(",")","/",":",";"," ");
	$yerine=array("s","s","i","i","i","g","g","u","u","o","o","c","c","","","-","-","","");
	return str_replace($aranan,$yerine,$metin);
	}
        
    /* Dosyanın ve dosya adının kaynak bilgisayardan alınması*/
    $kaynak = $_FILES["dosya"]["tmp_name"];
    $dosyaadi = "".tr($_FILES["dosya"]["name"]);
    
    /* Dosyanın web sayfamızda hangi konuma kayıt edileceği*/
    $yol = "$yuklemedizin";

    
    /* Yüklenen her dosyanın farklı isimde ve belirli bir uzunlukta kayıt edilmesi için kullanılan kodlar */
    $yeniad = substr(md5(time()), 0,11);
    $uzanti = substr($dosyaadi, -4);
    $sonad = $yeniad.$uzanti;
    
    /* Dosyanın belirtilen alana kaydını gerçekleştiren fonksiyon*/
    $yukle = move_uploaded_file($kaynak,$yol."/".$sonad);
    
	$silgi	= "sil.php?dosya=$yol/$sonad";
    


	$boyut = $_FILES['dosya']['size'];
	if($boyut > (1024*1024*$limit)){
	   echo 'Dosya yükleme Boyutunu aşıyor.<br>Dosya <?echo $limit; ?> den büyük olamaz.';
	} else {
	
    /* Dosyanın karşı tarafa  yüklenip yüklenmediğini kontrol eden koşul fonksiyonu*/
    if($yukle)
    {
        echo("
		<h3 class='mbr-section-title display-4'>Dosya Başarıyla Yüklendi</h3>
		
		<div class='lead'>
		<p>İndirme Linki :<a href='$domain/down/$sonad.html' target='_blank'>$domain/down/$sonad.html</a>
		<br />
		   Direk Linki : <a href='$domain/direk/$sonad.html' target='_blank'>$domain/direk/$sonad.html</a></p></div>
		
		

		<div><form action='sil/$sonad.html' method='post' >					
		<input type='image' name='silcem' src='https://dabuttonfactory.com/button.png?t=Sil&f=Calibri&ts=12&tc=fff&w=100&h=25&c=5&bgt=gradient&bgc=f00&ebgc=900&be=1' value='Dosyayı Sil' >
		</form>
		<input type='image' src='https://dabuttonfactory.com/button.png?t=Yeni+Resim+Y%C3%BCkle&f=Calibri&ts=12&tc=fff&w=150&h=40&c=5&bgt=gradient&bgc=90f&ebgc=20124d&be=1' onClick='history.back()'/>
		</div>
            </div>
            <div class='col-xs-12 col-lg-9 mbr-table-cell-lg image-size' style='width: 10%;'>
                <div class='mbr-figure'><img src='$domain/direk/$sonad.html'></div>
            </div>

		");
        
        echo ("");
    }
    else
    {
        echo(" <br><br><h3 class='mbr-section-title display-4'>Dosya Yükleme İşlemi Başarısız</h3><br>");
        echo ("<br><a class='btn btn-lg btn-danger-outline btn-danger' href='$domain'>Geri Dön</a>");
		die();
    }
}
}

?>
             
        </div>
    </div>
</section>

<section class="mbr-section mbr-section-small" id="content4-2" data-rv-view="5" style="background-color: rgb(255, 255, 255); padding-top: 1.5rem; padding-bottom: 0rem;">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="card cart-block">
                    <div class="card-block">
                        <h4 class="card-title text-xs-center">BBCODE</h4>
                        <p class="card-text">
						<textarea class="form-control" name="message" rows="4" data-form-field="Message" onclick='this.focus();this.select()' readonly='readonly'>[url=<? echo $domain; ?>/down/<? echo $sonad; ?>.html]<? echo $sonad; ?> | <? echo $SiteBaslik; ?>[/url]</textarea>
						</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card cart-block">
                    <div class="card-block">
                        <h4 class="card-title text-xs-center">HTML CODE</h4>
                        <p class="card-text">
						<textarea class="form-control" name="message" rows="4" data-form-field="Message" onclick='this.focus();this.select()' readonly='readonly'><a href="<? echo $domain; ?>/down/<? echo $sonad; ?>.html" title="<? echo $sonad; ?>"><? echo $sonad; ?> | <? echo $SiteBaslik; ?></a></textarea>
						</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card cart-block">
                    <div class="card-block">
                        <h4 class="card-title text-xs-center">Resim Linki</h4>
                        <p class="card-text">
						<textarea class="form-control" name="message" rows="4" data-form-field="Message" onclick='this.focus();this.select()' readonly='readonly'><img src="<? echo $domain; ?>/direk/<? echo $sonad; ?>.html" title="<? echo $sonad; ?> | <? echo $SiteBaslik; ?>"></textarea>
						</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card cart-block">
                    <div class="card-block">
                        <h4 class="card-title text-xs-center">İndirme Linki</h4>
                        <p class="card-text">
						<textarea class="form-control" name="message" rows="4" data-form-field="Message" onclick='this.focus();this.select()' readonly='readonly'><? echo $domain; ?>/down/<? echo $sonad; ?>.html</textarea>
						</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<? 
	$soslink	=	"$domain/down/$sonad.html";
	$sosres		=	"$domain/direk/$sonad.html";
	$sosad		=	"$sonad";
?>

<?php include('share.php'); ?>
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