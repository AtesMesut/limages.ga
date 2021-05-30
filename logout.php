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




<section class="mbr-section mbr-section-full mbr-parallax-background mbr-after-navbar" id="header1-1" data-rv-view="2" style="background-image: url(assets/images/mbr-896x1080.jpg);">
    <div class="mbr-table-cell">
        
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-xs-center">
				                    <h1 class="mbr-section-title display-1">
					<a href="<? echo $domain; ?>"><img src="<? echo $sitelogo; ?>" width="400"></a>
					</h1>
                <h2 class="mbr-section-title display-3 text-xs-center"><? echo $adminname; ?></h2>
<?php
session_start();
ob_start();
session_destroy();
echo "<center>Çıkış Yaptınız.<br><br> Ana Sayfaya Yönlendiriliyorsunuz</center>";
header("Refresh: 2; url=index.php");
ob_end_flush();
?>
					</div>
                </div>
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