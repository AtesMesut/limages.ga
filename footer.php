<?php
	$sayac_degeri = file_get_contents('sayac.txt');
	$sayac_degeri = $sayac_degeri+1;
	file_put_contents('sayac.txt',$sayac_degeri);
?>

<section class="mbr-section mbr-section-small mbr-footer" id="contacts1-7" data-rv-view="25" style="background-color: rgb(55, 56, 62); padding-top: 4.5rem; padding-bottom: 4.5rem;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-3">
                <div><img src="<?php echo $footerlogo; ?>" width="80%"></div>
            </div>
			<!-- Adres satırı 
            <div class="col-xs-12 col-md-3">
                <p><strong><? echo $adres; ?></strong><br>
					<? echo $adress; ?></p>
            </div> 
			Adres satırı -->
			
			<!-- sayac -->
            <div class="col-xs-12 col-md-3">
                <p><strong>İstatislik</strong><br>
				<? echo $sayac_degeri; ?> Defa Görüldü<br>
				<a href="https://whatismyipaddress.com/ip/<?php echo $_SERVER['REMOTE_ADDR']; ?>" target="_blank"><?php echo $_SERVER['REMOTE_ADDR']; ?></a>
				<br>
			</p>
            </div>
			<!-- sayac -->
			
			
            <div class="col-xs-12 col-md-3">
                <p><strong><? echo $ilet; ?></strong><br>
				<? echo $ilett; ?></p>
            </div>
            <div class="col-xs-12 col-md-3">
				<strong><? echo $link; ?></strong>
					<ul>
						<li><? echo $link1; ?></li>
						<li><? echo $link2; ?></li>
						<li><? echo $link3; ?></li>
					</ul>
			</div>
        </div>
    </div>
</section>

<? echo $whatsapp; ?>