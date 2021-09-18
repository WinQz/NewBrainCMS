<html>
<head>
<?php 
include_once $config['routeUrl'] . $config['routeUrlAuth'] . $config['routeUrlWebsite'] . $config['routeUrlViews'] . $config['routeUrlIncludes'] . '/Header.php'; 
?>
    <title><?= $config['hotelName'] ?>: 404 Not existing</title>
</head>

<body>

	<div class="container">
		<div class="row">
        <div class="col-12">
				<div id="shadow-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#ef5350;background-image:url(/auth/website/img/regels.png);background-repeat: no-repeat;background-position: right;height: 80px;">
						<div class="title"><font color="white">404</font></div>
						<div class="desc"><font color="white">Huh, what are you doing here?</font></div>
					</div>
					<div class="png20">
I'm guessing you've landed on the wrong page! Below are some suggestions, maybe you were looking for one of these pages:<br>
<a href="/me">Homepagina</a> | <a href="/management">Management</a> | <a href="/verzoeklijn">Verzoeklijn</a>
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