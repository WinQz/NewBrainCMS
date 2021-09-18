<html>
<head>
<?php 
include_once $config['routeUrl'] . $config['routeUrlAuth'] . $config['routeUrlWebsite'] . $config['routeUrlViews'] . $config['routeUrlIncludes'] . '/Header.php'; 
?>
    <title><?= $config['hotelName'] ?>: 403 Login Pls</title>
</head>

<body>

	<div class="container">
		<div class="row">
        <div class="col-12">
				<div id="shadow-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#ef5350;background-image:url(/auth/assets/img/regels.png);background-repeat: no-repeat;background-position: right;height: 80px;">
						<div class="title"><font color="white">403</font></div>
						<div class="desc"><font color="white">Huh, what are you doing here?</font></div>
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