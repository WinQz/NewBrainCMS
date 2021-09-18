<html>
<head>
<?php 
include_once $config['routeUrl'] . $config['routeUrlAuth'] . $config['routeUrlWebsite'] . $config['routeUrlViews'] . $config['routeUrlIncludes'] . '/Header.php'; 
?>
    <title><?= $config['hotelName'] ?>: Kluis </title>
</head>

<body>

	<div class="container">
		<div class="row">
        <div class="col-12">
				<div id="shadow-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#ef5350;background-image:url(/templates/yada/img/regels.png);background-repeat: no-repeat;background-position: right;height: 80px;">
						<div class="title"><font color="white">Kluis</font></div>
						<div class="desc"><font color="white">Kraak de Kluis word binnenkort verwacht op <?= $config['hotelName'] ?> </font></div>
					</div>
					<div class="png20">
				You first need to login before being able to reach this page.
					</div>
				</div>
        </div>
<?php
include "includes/footer.php"
?>
        </div>
    </div>
    </body>
</html>