<html>
<head>
<?php
include "includes/header_scripts.php"
?>




    <title><?= $config['hotelName'] ?>: Winkel</title>
</head>

<body>

	<div class="container">
	<center>
	<?php 
	
	if (User::userData('rank') == null){
		echo '<div class="col-7">
		
				<div id="shadow-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#00796B;background-image:url(/templates/yada/img/expert.png);background-repeat: no-repeat;background-position: right;height: 80px;">
						<div class="title"><font color="white">Log Eerst in!</font></div>
						<div class="desc"><font color="white">Log Eerst In Voordat Je Gaat Kopen</font></div>
					</div>
					<div class="png20">
<b>Oeps??</b><br>
Misschien verstandig dat je eerst in gaat loggen?
<hr>
<a href="/index"><button style="width: 100%" class="btn big green">Inloggen</button></a>
					</div>
				</div>
        </div>
		</center>';
	} else {
		echo '<div class="row">
			<div class="col-6">
				<div id="shadow-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#8F110B;background-image:url(/templates/yada/img/vips.png);background-repeat: no-repeat;height: 80px;background-position: right;">
						<div class="title"><font color="white">VIP Voordelen</font></div>
						<div class="desc"><font color="white">Alle voordelen voor VIP leden!</font></div>
					</div>
                <div class="png20">
				<div id="yada-load">
We hebben leuke vip perks, je kan onder selecteren wat je wilt zien.<hr>
<p>Kleding: <a class="btn red" data-target="https://caprihotel.nl/templates/yada/yadashop/yada3.html">:D</a></p>
	</div>
                </div>
				<a class="btn green" data-target="https://caprihotel.nl/auth/website/yadashop/yada1.html">1</a>
				<a class="btn green" data-target="https://caprihotel.nl/templates/yada/yadashop/yada2.html">2</a>
				</div>
			</div>
			<div class="col-6">
				<div id="shadow-box" style="max-height:300px">
					<div class="title-box png20" style="background-color:#b3514d;background-image:url(/templates/yada/img/stacks.gif);background-repeat: no-repeat;height: 80px;background-position: right;">
						<div class="title"><font color="white">VIP Kopen</font></div>
						<div class="desc"><font color="white">Koop gauw jouw VIP status</font></div>
					</div>
                <div class="png20">
			<center>
				
				VIP kost precies  '.  $config['vipCost'] .' diamanten!
				'. buyvip() .'
			</center>
			<form method="post">
				<input type="submit" class="btn green big" value="VIP kopen" name="getvip" style="margin-top: 10px;width: 100%;">
			</form>
                </div>
				</div>
			</div>
        </div>';
	}
	
	?>
		
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