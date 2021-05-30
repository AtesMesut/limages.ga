<?php include('config.php'); header('Content-type: text/xml');  ?>
<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" 
xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" 
xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 
http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
<url>
<loc><?php echo $domain;?></loc>
<changefreq>weekly</changefreq>
<lastmod><?php echo date("d/m/Y T H:i:s"); ?></lastmod>
<priority>0.8</priority>
</url>

<url>
<loc><?php echo $domain;?>/index.html</loc>
<changefreq>weekly</changefreq>
<lastmod><?php echo date("d/m/Y T H:i:s"); ?></lastmod>
<priority>0.8</priority>
</url>



<?php
$dosyalar = opendir("u");
$tarih = date("d/m/Y T H:i:s");

while($dosya = readdir($dosyalar)){
echo "
<url>
<loc>$domain/down/$dosya.html</loc>
<changefreq>weekly</changefreq>
<lastmod>$tarih</lastmod>
<priority>0.8</priority>
</url>";
}
closedir($dosyalar);
?>


</urlset>