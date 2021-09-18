<html>
<head>
<?php
include_once $config['routeUrl'] . $config['routeUrlAuth'] . $config['routeUrlWebsite'] . $config['routeUrlViews'] . $config['routeUrlIncludes'] . '/Header.php'; 
?>
    <title><?= $config['hotelName'] ?>: Badges</title>
</head>

<body>

	<div class="container">
        <div class="row">
			<div class="col-8">
				<div id="shadow-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:green;background-image:url(/templates/yada/img/rijk.png);background-repeat: no-repeat;height: 80px;background-position: right;">
						<div class="title"><font color="white">Badges Kopen?</font></div>
						<div class="desc"><font color="white">Vanaf nu kan je badges kopen</font></div>
					</div>
					<div class="png20">
					 <table class="table table-striped table-bordered table-condensed">
								<b>	<strong><tr><td><b>Badge</b></td><td><b>Kosten</b></td><td><b>Kopen?</b></td></tr></strong></b>
								<tbody>
								<?php
									
									$getArticles = $dbh->prepare("SELECT * FROM cms_capri_badges ORDER BY date DESC LIMIT 2");
									$getArticles->execute();
									while($news = $getArticles->fetch())
										echo'<tr>
										<td style="width: 20%;"><img alt="badges" src="https://caprihotel.nl/c_images/album1584/'.$news["badge_code"].'.gif"></td>
										<td style="width: 40%;">'.htmlspecialchars($news['price']).'</td>
										<td style="width: 40%;"><button>s</button></td>
										</tr>';
								?>
							</table>
					</div>
				</div>
			</div>
			<div class="col-4">
				<div id="shadow-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:blue;background-image:url(/templates/yada/img/informatie.png);background-repeat: no-repeat;height: 80px;background-position: right;">
						<div class="title"><font color="white">Hoe werkt dit?</font></div>
						<div class="desc"><font color="white">Uitleg over de badges shop.</font></div>
					</div>
					<div style="text-align: center;" class="png20">
				       Eindelijk kan je badges kopen op Capri website.
					   Alhoewel het nog in verder ontwikkeling is.
					</div>
				</div>
			</div>
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