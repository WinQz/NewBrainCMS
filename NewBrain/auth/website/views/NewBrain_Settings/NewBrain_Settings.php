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
    <a href="/Settings" id="settings-navigation-box" class="selected">
        <div class="png20">
            <i class="far fa-lock-open-alt icon"></i>
            <div class="settings-title">Change Password</div>
            <div class="settings-desc">Change your Password</div>
        </div>
        <div class="clear"></div>
    </a>
    <a href="/Settings2" id="settings-navigation-box">
        <div class="png20">
            <i class="far fa-envelope icon"></i>
            <div class="settings-title">Chance E-mail</div>
            <div class="settings-desc">Change your e-mail</div>
        </div>
        <div class="clear"></div>
    </a>
    <a href="/HotelSettings" id="settings-navigation-box">
        <div class="png20">
            <i class="far fa-hotel icon"></i>
            <div class="settings-title">Hotel/Radio Settings</div>
            <div class="settings-desc">Change your hotel & radio settings on</div>
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
            <div class="settings-desc">Verification Code login</div>
        </div>
        <div class="clear"></div>
    </a>
</div>
<div class="col-8">

    <div id="content-box" style="height:400px">
        <div class="title-box png20">
            <div class="title">Change Password</div>
        </div>

        <div class="png20">
            <form method="post">
			<?php User::editPassword(); ?>
                <label for="old-password">Old Password</label>
                <input type="password" name="oldpassword" value="" id="avatarmotto" class="form-control" required>
                <div class="desc" style="margin: 0 0 20px 0">Enter your old password here, with this we can verify that you are the owner of this account.</div>
                <div class="line"></div>

                <label for="new-password">New Password</label>
                <input type="password" name="newpassword" value="" id="avatarmotto"class="form-control" required>
                <div class="desc">Enter your desired password here, which you would like to have.</div>

                <input type="submit" value="<?= $lang["Ssave"] ?>" name="password" class="btn green save">
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