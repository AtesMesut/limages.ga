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
                    
                    <div class="mbr-buttons--center">
					<form name="yukleme" method="post" action="upload.html" enctype="multipart/form-data">
					<input type="file" name="dosya"><br><small>" Max <? echo $limit; ?> MB. - jpeg/jpg/tif/tiff/png/gif/swf/bmp/svg "</small><br>
					<input type="image" name="yukle" src="https://dabuttonfactory.com/button.png?t=Y%C3%BCkle&f=Calibri&ts=12&tc=fff&w=150&h=50&c=5&bgt=gradient&bgc=3d85c6&ebgc=073763&be=1" value="Yükle">
					</form>
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