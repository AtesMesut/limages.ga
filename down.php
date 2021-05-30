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

   <?php
    $file		=	$_GET["file"];
	$down		=	"$domain/$yuklemedizin/$file";
	$soslink	=	"$domain/down/$file.html";
	$sosres		=	"$domain/direk/$file.html";
	$sosad		=	"$file";
	?>
	
<br>
<br>
<section class="mbr-section mbr-section-nopadding" id="msg-box4-a" data-rv-view="39" style="background-color: rgb(255, 255, 255); padding-top: 1.5rem; padding-bottom: 1.5rem;">
    
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-lg-3 mbr-inner-padding text-xs-center mbr-table-cell-lg">
                <h3 class="mbr-section-title display-4">İndirdiğiniz için teşekkürler.</h3>
                <div class="lead"><p><? echo $file; ?> dosyasını indirmek için aşağıdaki indir butonuna tıklayınız.</p></div>
                <div>
					<a class="btn btn-lg btn-info-outline btn-info" href="<? echo $down; ?>" download>Resmi İndir</a>
					<a class="btn btn-lg btn-primary-outline btn-secondary-outline" href="../index.html">Sende Yükle</a>

				</div>
            </div>
            <div class="col-xs-12 col-lg-9 mbr-table-cell-lg image-size" style="width: 10%;">
                <div class="mbr-figure"><img src="<? echo $domain; ?>/direk/<? echo $file; ?>.html"></div>
            </div>
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
						<textarea class="form-control" name="message" rows="4" data-form-field="Message" onclick='this.focus();this.select()' readonly='readonly'>[url=<? echo $domain; ?>/down/<? echo $file; ?>.html]<? echo $file; ?> | <? echo $SiteBaslik; ?>[/url]</textarea>
						</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card cart-block">
                    <div class="card-block">
                        <h4 class="card-title text-xs-center">HTML CODE</h4>
                        <p class="card-text">
						<textarea class="form-control" name="message" rows="4" data-form-field="Message" onclick='this.focus();this.select()' readonly='readonly'><a href="<? echo $domain; ?>/down/<? echo $file; ?>.html" title="<? echo $file; ?>"><? echo $file; ?> | <? echo $SiteBaslik; ?></a></textarea>
						</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card cart-block">
                    <div class="card-block">
                        <h4 class="card-title text-xs-center">Resim Linki</h4>
                        <p class="card-text">
						<textarea class="form-control" name="message" rows="4" data-form-field="Message" onclick='this.focus();this.select()' readonly='readonly'><img src="<? echo $domain; ?>/direk/<? echo $file; ?>.html" title="<? echo $file; ?> | <? echo $SiteBaslik; ?>"></textarea>
						</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card cart-block">
                    <div class="card-block">
                        <h4 class="card-title text-xs-center">İndirme Linki</h4>
                        <p class="card-text">
						<textarea class="form-control" name="message" rows="4" data-form-field="Message" onclick='this.focus();this.select()' readonly='readonly'><? echo $domain; ?>/down/<? echo $file; ?>.html</textarea>
						</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

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