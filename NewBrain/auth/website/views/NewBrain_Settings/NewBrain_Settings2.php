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
            <div class="settings-desc">General Explanation</div>
        </div>
        <div class="clear"></div>
    </a>
    <a href="/Settings" id="settings-navigation-box">
        <div class="png20">
            <i class="far fa-lock-open-alt icon"></i>
            <div class="settings-title">Chance Password</div>
            <div class="settings-desc">Chance your password</div>
        </div>
        <div class="clear"></div>
    </a>
    <a href="/Settings2" id="settings-navigation-box" class="selected">
        <div class="png20">
            <i class="far fa-envelope icon"></i>
            <div class="settings-title">Chance E-mail</div>
            <div class="settings-desc">Chance your E-mail</div>
        </div>
        <div class="clear"></div>
    </a>
    <a href="/HotelSettings" id="settings-navigation-box">
        <div class="png20">
            <i class="far fa-hotel icon"></i>
            <div class="settings-title">Hotel/Radio Settings</div>
            <div class="settings-desc">Chance your hotel & radio Settings on</div>
        </div>
        <div class="clear"></div>
    </a>
    <a href="/Sessies" id="settings-navigation-box">
        <div class="png20">
            <i class="far fa-key icon"></i>
            <div class="settings-title">Login Activity</div>
            <div class="settings-desc">Check your 10 recente login's</div>
        </div>
        <div class="clear"></div>
    </a>
	<a href="/BetaSettings" id="settings-navigation-box">
        <div class="png20">
            <i class="far fa-check icon"></i>
            <div class="settings-title">Verification Code</div>
            <div class="settings-desc">Verification Code Login</div>
        </div>
        <div class="clear"></div>
    </a>
</div>
<div class="col-8">

    <div id="content-box" style="height:270px">
        <div class="title-box png20">
            <div class="title">Chance Email</div>
        </div>

        <div class="png20">
            <form method="post">
			<?php User::editEmail(); ?>
                <label for="old-password">New Email</label>
                <input type="text" name="email" id="avatarmotto" class="form-control" required>
                <div class="desc" style="margin: 0 0 20px 0">Enter your own e-mail address here, if you want to use it in the future for: <?= $config['hotelName'] ?>.</div>

                <input type="submit" value="<?= $lang["Ssave"] ?>" name="account" class="btn green save">
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