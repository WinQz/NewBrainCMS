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
<link type="text/css" href="/auth/website/sass/settings.scss" rel="stylesheet">
<div class="col-4">
	<a href="/Dasboard" id="settings-navigation-box" class="selected">
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
    <a href="/HotelSettings" id="settings-navigation-box">
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

    <div id="content-box" style="height:95%">
        <div class="title-box png20">
            <div class="title">Explanation of our Settings Feature</div>
        </div>
		
        <div class="png20">
		<form>
            <h3>Change password</h3>
<p>This is a default option, if your password has been leaked or you believe it has, please use our <b>"Change Password"</b> feature.</p>
<h3>Email Edit</h3>
<p>This is a standard option, do you want to link a new email to your account? Then you can use our <b>"Email Editing"</b> function.</p>
<h3>Hotel/Radio Settings</h3>
<p>This is a standard option, here you can activate or deactivate all hotel preferences. If you want to use this, you can navigate to our <b>"Hotel/Radio Settings"</b> function.</p>
<h3>Login Activity</h3>
<p>This is a default option, here you can view all recent login activity. If you want to use this, you can navigate to our <b>"Login Activity"</b> function.</p>
<h3>Verification Code</h3>
<p>This is a new option, you can enable an extra security layer. You can still log in, but to visit our site you will first receive a message to verify your verification code. If you want to use this, you can navigate to our <b>"Verification Code"</b> function.</p>
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