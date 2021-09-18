<html>
<head>
<?php
include_once $config['routeUrl'] . $config['routeUrlAuth'] . $config['routeUrlWebsite'] . $config['routeUrlViews'] . $config['routeUrlIncludes'] . '/Header.php'; 
?>
    <title><?= $config['hotelName'] ?>: Ruilwaarde</title>
</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col-12">
				<div id="shadow-box" style="background-image:url(/auth/assets/img/spambox.png);height: 115px;background-position: right;background-repeat: no-repeat;background-size: cover;">
					<div class="title-box png20">
						<div class="title">
						<font color="white" style="color: white;font-size: 175%">
						Hey, <?php echo $brainUserData->userName; ?>!</font></div>
						<div class="desc"><font color="white" style="color: white">Dit is de officiële <?= $config['hotelName'] ?> ruilwaarde, deze kun je hanteren tijdens het ruilen en gokken.<br>
						Momenteel is de diamant-belcredit schaal <img src="/templates/david_vox/img/diamonds.png">10 : <img src="/ruilwaarde/bc.png" height="15px">1</font></div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-3">
				<div class="photos" style="background-image:url(/ruilwaarde/gouden_voet.png)"><div class="overlay">Gouden Voetballer<div class="username"><img src="/ruilwaarde/bc.png"> 32</div></div></div>
            </div>
			<div class="col-3">
				<div class="photos" style="background-image:url(/ruilwaarde/doodskop_fontein.png)"><div class="overlay">Doodskoppen Fontein<div class="username"><img src="/ruilwaarde/bc.png">300</div></div></div>
            </div>
			<div class="col-3">
				<div class="photos" style="background-image:url(/ruilwaarde/legendarische_draak.png)"><div class="overlay">Legendarische Draak<div class="username"><img src="/ruilwaarde/bc.png">800</div></div></div>
            </div>
			<div class="col-3">
				<div class="photos" style="background-image:url(/ruilwaarde/paars_sdraak.png)"><div class="overlay">Paarse Special Vuurdraak<div class="username"><img src="/ruilwaarde/bc.png">800</div></div></div>
            </div>
			<div class="col-3">
				<div class="photos" style="background-image:url(/ruilwaarde/holo_nelly.png)"><div class="overlay">Nijlpaard Holo<div class="username"><img src="/ruilwaarde/bc.png">350</div></div></div>
            </div>
			<div class="col-3">
				<div class="photos" style="background-image:url(/ruilwaarde/p_ijs.png)"><div class="overlay">Paarse IJsdraak<div class="username"><img src="/ruilwaarde/bc.png">215</div></div></div>
            </div>
			<div class="col-3">
				<div class="photos" style="background-image:url(/ruilwaarde/draaitafel.png)"><div class="overlay">Professionele Draaitafel<div class="username"><img src="/ruilwaarde/bc.png"> 37</div></div></div>
            </div>
			<div class="col-3">
				<div class="photos" style="background-image:url(/ruilwaarde/b_fant.png)"><div class="overlay">Bronzen Fantje<div class="username"><img src="/ruilwaarde/bc.png">250</div></div></div>
            </div>
			<div class="col-3">
				<div class="photos" style="background-image:url(/ruilwaarde/z_fant.png)"><div class="overlay">Zilveren Fantje<div class="username"><img src="/ruilwaarde/bc.png">280</div></div></div>
            </div>
			<div class="col-3">
				<div class="photos" style="background-image:url(/ruilwaarde/perkje.png)"><div class="overlay">Grasperkje<div class="username"><img src="/ruilwaarde/bc.png"> 42</div></div></div>
            </div>
			<div class="col-3">
				<div class="photos" style="background-image:url(/ruilwaarde/oranjeflipper.png)"><div class="overlay">Oranje Ventilator<div class="username"><img src="/ruilwaarde/bc.png"> 1000</div></div></div>
            </div>
			<div class="col-3">
				<div class="photos" style="background-image:url(/ruilwaarde/rt.png)"><div class="overlay">Rode Troon<div class="username"><img src="/ruilwaarde/bc.png"> 1300</div></div></div>
            </div>
			<div class="col-3">
				<div class="photos" style="background-image:url(/ruilwaarde/pt.png)"><div class="overlay">Paarse Troon<div class="username"><img src="/ruilwaarde/bc.png"> 1300</div></div></div>
            </div>
			<div class="col-3">
				<div class="photos" style="background-image:url(/ruilwaarde/zt.png)"><div class="overlay">Zwarte Troon<div class="username"><img src="/ruilwaarde/bc.png"> 2000</div></div></div>
            </div>
			<div class="col-3">
				<div class="photos" style="background-image:url(/ruilwaarde/bt.png)"><div class="overlay">Blauwe Troon<div class="username"><img src="/ruilwaarde/bc.png"> 2300</div></div></div>
            </div>
			<div class="col-3">
				<div class="photos" style="background-image:url(/ruilwaarde/bkd.png)"><div class="overlay">Blauwe Kristaldraak<div class="username"><img src="/ruilwaarde/bc.png"> 1000</div></div></div>
            </div>
			<div class="col-3">
				<div class="photos" style="background-image:url(/ruilwaarde/dpkd.png)"><div class="overlay">Paarse Kristaldraak<div class="username"><img src="/ruilwaarde/bc.png"> 1000</div></div></div>
            </div>
			<div class="col-3">
				<div class="photos" style="background-image:url(/ruilwaarde/rkd.png)"><div class="overlay">Rode Kristaldraak<div class="username"><img src="/ruilwaarde/bc.png"> 1000</div></div></div>
            </div>
			<div class="col-3">
				<div class="photos" style="background-image:url(/ruilwaarde/gkd.png)"><div class="overlay">Goude Kristaldraak<div class="username"><img src="/ruilwaarde/bc.png"> 1000</div></div></div>
            </div>
			<div class="col-3">
				<div class="photos" style="background-image:url(/ruilwaarde/okd.png)"><div class="overlay">Gele Kristaldraak<div class="username"><img src="/ruilwaarde/bc.png"> 1000</div></div></div>
            </div>
			<div class="col-3">
				<div class="photos" style="background-image:url(/ruilwaarde/grkd.png)"><div class="overlay">Groene Kristaldraak<div class="username"><img src="/ruilwaarde/bc.png"> 1000</div></div></div>
            </div>
			<div class="col-3">
				<div class="photos" style="background-image:url(/ruilwaarde/pkd.png)"><div class="overlay">Roze Kristaldraak<div class="username"><img src="/ruilwaarde/bc.png"> 1000</div></div></div>
            </div>
			<div class="col-3">
				<div class="photos" style="background-image:url(/ruilwaarde/wkd.png)"><div class="overlay">Witte Kristaldraak<div class="username"><img src="/ruilwaarde/bc.png"> 1250</div></div></div>
            </div>
			<div class="col-3">
				<div class="photos" style="background-image:url(/ruilwaarde/zkd.png)"><div class="overlay">Zwarte Kristaldraak<div class="username"><img src="/ruilwaarde/bc.png"> 1300</div></div></div>
            </div>
			<div class="col-3">
				<div class="photos" style="background-image:url(/ruilwaarde/rfan.png)"><div class="overlay">Rode Ventilator<div class="username"><img src="/ruilwaarde/bc.png"> 210</div></div></div>
            </div>
<?php
include "includes/footer.php"
?>
        </div>
    </div>
    </body>
<?php
include "includes/scripts.php"
?>
</html>