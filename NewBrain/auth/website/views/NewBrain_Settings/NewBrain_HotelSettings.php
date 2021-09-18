<html>
<head>
<?php
include_once $config['routeUrl'] . $config['routeUrlAuth'] . $config['routeUrlWebsite'] . $config['routeUrlViews'] . $config['routeUrlIncludes'] . '/Header.php'; 
?>
    <title><?= $config['hotelName'] ?>: Instellingen</title>
</head>

<body>

	<div class="container">
		<div class="row">
<link type="text/css" href="/templates/yada/css/settings.css" rel="stylesheet">
<div class="col-4">
	<a href="/Dashboard" id="settings-navigation-box">
        <div class="png20">
            <i class="far fa-cogs icon"></i>
            <div class="settings-title">DashBoard</div>
            <div class="settings-desc">Algemene Uitleg</div>
        </div>
        <div class="clear"></div>
    </a>
    <a href="/Settings" id="settings-navigation-box">
        <div class="png20">
            <i class="far fa-lock-open-alt icon"></i>
            <div class="settings-title">Wachtwoord Veranderen</div>
            <div class="settings-desc">Verander jouw wachtwoord</div>
        </div>
        <div class="clear"></div>
    </a>
    <a href="/Settings2" id="settings-navigation-box">
        <div class="png20">
            <i class="far fa-envelope icon"></i>
            <div class="settings-title">E-mailadres Aanpassen</div>
            <div class="settings-desc">Pas jouw e-mailadres aan</div>
        </div>
        <div class="clear"></div>
    </a>
    <a href="/HotelSettings" id="settings-navigation-box" class="selected">
        <div class="png20">
            <i class="far fa-hotel icon"></i>
            <div class="settings-title">Hotel/Radio Instellingen</div>
            <div class="settings-desc">Pas jouw hotel & radio instellingen aan</div>
        </div>
        <div class="clear"></div>
    </a>
    <a href="/Sessies" id="settings-navigation-box">
        <div class="png20">
            <i class="far fa-key icon"></i>
            <div class="settings-title">Login Activiteit</div>
            <div class="settings-desc">Bekijk jouw 10 recente login's</div>
        </div>
        <div class="clear"></div>
    </a>
	<a href="/BetaSettings" id="settings-navigation-box">
        <div class="png20">
            <i class="far fa-check icon"></i>
            <div class="settings-title">Verificatie Code</div>
            <div class="settings-desc">Verificatie Code Inloggen</div>
        </div>
        <div class="clear"></div>
    </a>
</div>
<div class="col-8">

    <div id="content-box" style="height:100%">
        <div class="title-box png20">
            <div class="title">Hotel/Radio Settings</div>
        </div>

        <div class="png20">
			<form action="" method="POST">
					<?php User::editHotelSettings(); 
						$getUser = $dbh->prepare("SELECT * FROM users WHERE id = :id");
						$getUser->bindParam(':id', $_SESSION['id']);
						$getUser->execute();
						$stats = $getUser->fetch();
					?>
					<b>Listen to the radio</b><br> Do you want to listen to the radio as soon as the hotel page loads?<br>
						<input type="radio" class="hidde" onclick="Brain.Actions.settings(1, 1);" name="hinstellingenr" id="true" value="1" novalidate=""> <img src="/templates/yada/img/image_969.png"> 
							<div class="<?php if($stats['radio_aan'] == 1 ){ echo "burst_active";}else {echo 'burst';}?>" id="img_true_1"> 
								<label for="true"> 
									Yes, I like to listen to the radio!
								</label> 
							</div> 
						<input type="radio" class="hidde" onclick="Brain.Actions.settings(2, 1);" name="hinstellingenr" id="false" value="0" novalidate=""> <img src="/templates/yada/img/image_969_1.png"> 
							<div class="<?php if($stats['radio_aan'] == 0 ){ echo "burst_active";}else {echo 'burst';}?>" id="img_false_1"> 
								<label for="false"> 
									No thanks, I prefer to listen to Spotify.
								</label> 
							</div> <br>
						<input type="submit" class="submit btn green save" value="<?= $lang["Ssave"] ?>" name="hotelsettings"">
			</form>
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