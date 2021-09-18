<html>
<head>
<?php
include "includes/header_scripts.php"
?>
    <title><?= $config['hotelName'] ?>: Statistieken</title>
</head>

<body>

	<div class="container">
		<div class="row">
        <div class="col-3">
				<div id="shadow-box" style="max-height:300px">
					<div class="title-box png20" style="background-color:#f39c12;height: 80px;text-decoration:none">
						<div class="title"><font color="white">Credits</font></div>
						<div class="desc"><font color="white">De top 5 Credits van alle <?= $config['hotelName'] ?>'s</font></div>
					</div>
					<div class="png20">
								<div class="event">
<?php 
$belcr_get = $dbh->prepare("SELECT credits,username from users WHERE rank < 12 ORDER BY `credits` DESC  LIMIT 5");
$belcr_get->execute();
while ($belcr_row = $belcr_get->fetch())
{
?>
<a href="/home/<?= filter($belcr_row['username']) ?>" style="text-decoration:none"><font color="grey"><?= filter($belcr_row['username']) ?></font></a>
<strong style="float:right;">&nbsp;&nbsp;<?= filter($belcr_row['credits']) ?></strong>
<img src="<?= $config['hotelUrl'] ?>/local/credits.png" style="float:right;">
<hr>
<?php } ?>
									<div style="clear: both"></div>
								</div>
					</div>
				</div>
		</div>
			
        <div class="col-3">
				<div id="shadow-box" style="max-height:300px">
					<div class="title-box png20" style="background-color:#ffbaf1;text-decoration:none;height: 80px">
						<div class="title"><font color="white">Duckets</font></div>
						<div class="desc"><font color="white">De top 5 Duckets van alle <?= $config['hotelName'] ?>'s</font></div>
					</div>
					<div class="png20">
								<div class="event">
<?php 
$belcr_get = $dbh->prepare("SELECT activity_points,username from users WHERE rank < 12 ORDER BY `activity_points` DESC  LIMIT 5");
$belcr_get->execute();
while ($belcr_row = $belcr_get->fetch())
{
?>
<a href="/home/<?= filter($belcr_row['username']) ?>" style="text-decoration:none"><font color="grey"><?= filter($belcr_row['username']) ?></font></a>
<strong style="float:right;">&nbsp;&nbsp;<?= filter($belcr_row['activity_points']) ?></strong>
<img src="<?= $config['hotelUrl'] ?>/local/ducket.png" style="float:right;">
<hr>
<?php } ?>
									<div style="clear: both"></div>
								</div>
					</div>
				</div>
		</div>
			
        <div class="col-3">
				<div id="shadow-box" style="max-height:300px">
					<div class="title-box png20" style="background-color:#70aee2;text-decoration:none;height: 80px">
						<div class="title"><font color="white">Diamanten</font></div>
						<div class="desc"><font color="white">De top 5 Diamanten van alle <?= $config['hotelName'] ?>'s</font></div>
					</div>
					<div class="png20">
								<div class="event">
<?php 
$belcr_get = $dbh->prepare("SELECT vip_points,username from users WHERE rank < 12 ORDER BY `vip_points` DESC  LIMIT 5");
$belcr_get->execute();
while ($belcr_row = $belcr_get->fetch())
{
?>
<a href="/home/<?= filter($belcr_row['username']) ?>" style="text-decoration:none"><font color="grey"><?= filter($belcr_row['username']) ?></font></a>
<strong style="float:right;">&nbsp;&nbsp;<?= filter($belcr_row['vip_points']) ?></strong>
<img src="<?= $config['hotelUrl'] ?>/local/dia.png" style="float:right;">
<hr>
<?php } ?>
									<div style="clear: both"></div>
								</div>
					</div>
				</div>
		</div>
			
        <div class="col-3">
				<div id="shadow-box" style="max-height:300px">
					<div class="title-box png20" style="background-color:#00796B;text-decoration:none;height: 80px">
						<div class="title"><font color="white">Bel-Credits</font></div>
						<div class="desc"><font color="white">De top 5 Bel-Credits van alle <?= $config['hotelName'] ?>'s</font></div>
					</div>
					<div class="png20">
								<div class="event">
<?php 
$belcr_get = $dbh->prepare("SELECT gotw_points,username from users WHERE rank < 12 ORDER BY `gotw_points` DESC  LIMIT 5");
$belcr_get->execute();
while ($belcr_row = $belcr_get->fetch())
{
?>
<a href="/home/<?= filter($belcr_row['username']) ?>" style="text-decoration:none"><font color="grey"><?= filter($belcr_row['username']) ?></font></a>
<strong style="float:right;">&nbsp;&nbsp;<?= filter($belcr_row['gotw_points']) ?></strong>
<img src="<?= $config['hotelUrl'] ?>/local/eps.png" style="float:right;">
<hr>
<?php } ?>
									<div style="clear: both"></div>
								</div>
					</div>
				</div>
		</div>
		
        <div class="col-4">
				<div id="shadow-box" style="max-height:300px">
					<div class="title-box png20" style="background-color:#d32f2f;text-decoration:none;height: 80px">
						<div class="title"><font color="white">Online Tijd</font></div>
						<div class="desc"><font color="white">De top 5 Online Tijd van alle <?= $config['hotelName'] ?>'s</font></div>
					</div>
					<div class="png20">
								<div class="event">
<?php 
$belrs_get = $dbh->prepare("SELECT `".$emuUse['OnlineTime']."`,`".$emuUse['user_stats_user_id']."` FROM `".$emuUse['user_stats']."` ORDER BY ".$emuUse['OnlineTime']." desc LIMIT 5");
$belrs_get->execute();
while ($belcr_row = $belrs_get->fetch())
{
$belrs2_get = $dbh->prepare("SELECT * FROM `users` WHERE `id` = '" . $belcr_row[$emuUse['user_stats_user_id']] . "'");
$belrs2_get->execute();
$belrs2_row = $belrs2_get->fetch();
?>
<a href="/home/<?= filter($belrs2_row['username']) ?>" style="text-decoration:none"><font color="grey"><?= filter($belrs2_row['username']) ?></font></a>
<strong style="float:right;">&nbsp;&nbsp;<?php 
$d = floor($belcr_row[$emuUse['OnlineTime']]/86400);
$h = floor(($belcr_row[$emuUse['OnlineTime']]-$d*86400)/3600);
$time_str = $d.' Dagen '.$h.' Uren ';
echo $time_str;
?></strong>
<img src="<?= $config['hotelUrl'] ?>/templates/brain/style/images/icons/9.png" style="float:right;">
<hr>
<?php } ?>
									<div style="clear: both"></div>
								</div>
					</div>
				</div>
		</div>
		
        <div class="col-4">
				<div id="shadow-box" style="max-height:300px">
					<div class="title-box png20" style="background-color:#388E3C;text-decoration:none;height: 80px">
						<div class="title"><font color="white">Respect Gekregen</font></div>
						<div class="desc"><font color="white">De top 5 Respect Gekregen van alle <?= $config['hotelName'] ?>'s</font></div>
					</div>
					<div class="png20">
								<div class="event">
<?php 
$belrs_get = $dbh->prepare("SELECT `".$emuUse['respect']."`,`".$emuUse['user_stats_user_id']."` FROM `".$emuUse['user_stats']."` ORDER BY ".$emuUse['respect']." desc LIMIT 5");
$belrs_get->execute();
while ($belrs_row = $belrs_get->fetch())
{
$belrs2_get = $dbh->prepare("SELECT * FROM `users` WHERE `id` = '" . $belrs_row[$emuUse['user_stats_user_id']] . "'");
$belrs2_get->execute();
$belrs2_row = $belrs2_get->fetch();
?>
<a href="/home/<?= filter($belrs2_row['username']) ?>" style="text-decoration:none"><font color="grey"><?= filter($belrs2_row['username']) ?></font></a>
<strong style="float:right;">&nbsp;&nbsp;<?= filter($belrs_row[$emuUse['respect']]) ?></strong>
<img src="<?= $config['hotelUrl'] ?>/local/icon_3.png" style="float:right;">
<hr>
<?php } ?>
									<div style="clear: both"></div>
								</div>
					</div>
				</div>
		</div>
		
        <div class="col-4">
				<div id="shadow-box" style="max-height:300px">
					<div class="title-box png20" style="background-color:#C2185B;text-decoration:none;height: 80px">
						<div class="title"><font color="white">Respect Gegeven</font></div>
						<div class="desc"><font color="white">De top 5 Respect Gegeven van alle <?= $config['hotelName'] ?>'s</font></div>
					</div>
					<div class="png20">
								<div class="event">
<?php 
$belrs_get = $dbh->prepare("SELECT `".$emuUse['respectgiven']."`,`".$emuUse['user_stats_user_id']."` FROM `".$emuUse['user_stats']."` ORDER BY ".$emuUse['respectgiven']." desc LIMIT 5");
$belrs_get->execute();
while ($belrs_row = $belrs_get->fetch())
{
$belrs2_get = $dbh->prepare("SELECT * FROM `users` WHERE `id` = '" . $belrs_row[$emuUse['user_stats_user_id']] . "'");
$belrs2_get->execute();
$belrs2_row = $belrs2_get->fetch();
?>
<a href="/home/<?= filter($belrs2_row['username']) ?>" style="text-decoration:none"><font color="grey"><?= filter($belrs2_row['username']) ?></font></a>
<strong style="float:right;">&nbsp;&nbsp;<?= filter($belrs_row[$emuUse['respectgiven']]) ?></strong>
<img src="<?= $config['hotelUrl'] ?>/local/icon_3.png" style="float:right;">
<hr>
<?php } ?>
									<div style="clear: both"></div>
								</div>
					</div>
				</div>
		</div>
		
        <div class="col-6">
				<div id="shadow-box" style="max-height:300px">
					<div class="title-box png20" style="background-color:#f39c12;text-decoration:none;height: 80px">
						<div class="title"><font color="white">Achievement Score</font></div>
						<div class="desc"><font color="white">De top 5 Achievement Score van alle <?= $config['hotelName'] ?>'s</font></div>
					</div>
					<div class="png20">
								<div class="event">
<?php 
$belrs_get = $dbh->prepare("SELECT `".$emuUse['AchievementScore']."`,`".$emuUse['user_stats_user_id']."` FROM `".$emuUse['user_stats']."` ORDER BY ".$emuUse['AchievementScore']." desc LIMIT 5");
$belrs_get->execute();
while ($belrs_row = $belrs_get->fetch())
{
$belrs2_get = $dbh->prepare("SELECT * FROM `users` WHERE `id` = '" . $belrs_row[$emuUse['user_stats_user_id']] . "'");
$belrs2_get->execute();
$belrs2_row = $belrs2_get->fetch();
?>
<a href="/home/<?= filter($belrs2_row['username']) ?>" style="text-decoration:none"><font color="grey"><?= filter($belrs2_row['username']) ?></font></a>
<strong style="float:right;">&nbsp;&nbsp;<?= filter($belrs_row[$emuUse['AchievementScore']]) ?></strong>
<img src="<?= $config['hotelUrl'] ?>/local/score.gif" style="float:right;">
<hr>
<?php } ?>
									<div style="clear: both"></div>
								</div>
					</div>
				</div>
		</div>
		
        <div class="col-6">
				<div id="shadow-box" style="max-height:300px">
					<div class="title-box png20" style="background-color:#7B1FA2;text-decoration:none;height: 80px">
						<div class="title"><font color="white">Kamers Bezocht</font></div>
						<div class="desc"><font color="white">De top 5 Kamers Bezocht van alle <?= $config['hotelName'] ?>'s</font></div>
					</div>
					<div class="png20">
								<div class="event">
<?php 
$belrs_get = $dbh->prepare("SELECT `".$emuUse['RoomVisits']."`,`".$emuUse['user_stats_user_id']."` FROM `".$emuUse['user_stats']."` ORDER BY ".$emuUse['RoomVisits']." desc LIMIT 5");
$belrs_get->execute();
while ($belrs_row = $belrs_get->fetch())
{
$belrs2_get = $dbh->prepare("SELECT * FROM `users` WHERE `id` = '" . $belrs_row[$emuUse['user_stats_user_id']] . "'");
$belrs2_get->execute();
$belrs2_row = $belrs2_get->fetch();
?>
<a href="/home/<?= filter($belrs2_row['username']) ?>" style="text-decoration:none"><font color="grey"><?= filter($belrs2_row['username']) ?></font></a>
<strong style="float:right;">&nbsp;&nbsp;<?= filter($belrs_row[$emuUse['RoomVisits']]) ?></strong>
<img src="<?= $config['hotelUrl'] ?>/local/kamers.gif" style="float:right;">
<hr>
<?php } ?>
									<div style="clear: both"></div>
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