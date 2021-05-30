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
                <h2 class="mbr-section-title display-3 text-xs-center">Admin Login Form</h2>
					<form action="singin.php" method="POST">
						<div class="form-group">
							<input type="text" name="user" class="form-control" placeholder="Kullanıcı Adı" required="">
						</div>
						<div class="form-group">
							<input class="form-control" type="password" name="pass" id="exampleInputPassword1" required="" type="password" placeholder="Şifreniz">
						</div>							
							<div class="text-xs-right"><button type="submit" name="girisyap" class="btn btn-secondary-outline">Giriş Yap</button></div>
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