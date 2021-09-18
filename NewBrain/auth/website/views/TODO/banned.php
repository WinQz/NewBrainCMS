<html>
<head>
<?php
include "includes/header_scripts.php"
?>
    <title><?= $config['hotelName'] ?>: Verbannen</title>
</head>

<body>

	<div class="container">
		<div class="row">
        <div class="col-12">
				<div id="shadow-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#ef5350;background-image:url(/templates/david_vox/img/regels.png);background-repeat: no-repeat;background-position: right;height: 80px;">
						<div class="title"><font color="white">Verbannen</font></div>
						<div class="desc"><font color="white">Je bent verbannen!</font></div>
					</div>
					<div class="png20">
						Yada heeft jou de toegang geblokkeerd! !!!! Het kan zijn dat je een banned pagina in beeld krijgt terwijl je hier niks van af weet! ben je niet verbannen maar heb je toch een banned pagina? meld dit direct bij ons via de chat service rechts onderaan op de website. !!!!</p>
						<?php 
							if (loggedIn())
							{
								$user = User::userData('username');
							}
							else
							{
								$user = null;
							}
							$banQuery = $dbh->prepare("SELECT * FROM bans WHERE (bantype = 'user' && value = :user)");
							$banQuery->bindParam(':user', $user); 
							$banQuery->execute(); 
							while($banInfo = $banQuery->fetch())
							{
							?><h4>Beste bezoeker,</h4> helaas ben je verbannen van onze website.<br> Dit komt omdat jij je niet aan onze regels hebt gehouden.<br><br>Je bent verbannen om de volgende reden:
							<i><b><?= $banInfo['reason']; ?></b></i><br>
							Je bent verbannen door: 
							<i><b><?= $banInfo['added_by']; ?></b></i>
							<br /><br />
							Je bent verbannen van: <b><u><?php echo gmdate("d-m-Y H:i", $banInfo['added_date']); ?></u></b> tot <b><u><?php echo gmdate("d-m-Y H:i", $banInfo['expire']); ?></u></b>.<br />Ban ID: <b><?= $banInfo['id']; ?></b><br /><hr>
							<?= $lang["Bwrong"]  ?>
							<br>
							<?php
							}
						?>
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