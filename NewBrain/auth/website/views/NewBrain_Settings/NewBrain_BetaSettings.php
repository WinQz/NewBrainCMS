<html>
<head>
<?php
include_once $config['routeUrl'] . $config['routeUrlAuth'] . $config['routeUrlWebsite'] . $config['routeUrlViews'] . $config['routeUrlIncludes'] . '/Header.php'; 
?>
    <title><?= $config['hotelName'] ?>: Instellingen</title>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
	

</head>

<body>

	<div class="container">
		<div class="row">
<link type="text/css" href="/templates/yada/css/settings.css" rel="stylesheet">
<div class="col-4">
	<a href="/Dasboard" id="settings-navigation-box">
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
            <div class="settings-title">Change Password</div>
            <div class="settings-desc">Change your password</div>
        </div>
        <div class="clear"></div>
    </a>
    <a href="/Settings2" id="settings-navigation-box">
        <div class="png20">
            <i class="far fa-envelope icon"></i>
            <div class="settings-title">Change E-mail</div>
            <div class="settings-desc">Change your e-mail</div>
        </div>
        <div class="clear"></div>
    </a>
    <a href="/HotelSettings3" id="settings-navigation-box">
        <div class="png20">
            <i class="far fa-hotel icon"></i>
            <div class="settings-title">Hotel/Radio Settings</div>
            <div class="settings-desc">Change your & radio settings at</div>
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
	<a href="/BetaSettings" id="settings-navigation-box"  class="selected">
        <div class="png20">
            <i class="far fa-check icon"></i>
            <div class="settings-title">Verification Code</div>
            <div class="settings-desc">Verification Code login</div>
        </div>
        <div class="clear"></div>
    </a>
</div>
<div class="col-8">

    <div id="content-box" style="height:100%">
        <div class="title-box png20">
            <div class="title">Geavanceerde Beveiliging <p style="color: red;">(LET OP: Systeem is nog in onderhoud contacteer SleepWalking#0001 voor mee informatie.)</p></div>
        </div>

        <div class="png20">
			
					<?php if (User::userData('enable_beta') == 0) {
						echo '<b>AuthCode</b><br> Wil jij een extra zelfgemaakte digit wachtwoord voor het inloggen?<br>
						<p>Maximaal 15 Characters.</p>
					<span><b>Na het aanmaken van je persoonlijke Verificatie Code, is er geen weg terug.</b></span>
					<br>
					Als je niks invult, wordt jouw code automatisch -> <b><i>Yada-30195619</i></b>
					<br>
					Het is dus aangeraden om een eigen code in te vullen.
					<br>
					<br>
						<input type="radio" class="hidde" name="hinstellingenr" id="true" value="1" novalidate=""> <img src="/templates/yada/img/image_969.png"> 
							<div> 
								<label for="true"> 
									Jazeker dat wil ik!
									<input style="display:none;" placeholder="Vul hier jouw cijfer code in. (Letters zijn mogelijk maar we raden dat af)" type="text" name="advanced-instelling" id="advanced-instelling"/ maxlength="15" required>
								</label> 
								
							</div> 
						
							</div> <br>
						<button id="SendDataCode" class="submit btn green save" value="Activeer" name="hotelsettings"">Activeer</button>
					';} else {
						echo '
						<span><b>Verificatie Code is geactiveerd.</b></span>
						<br>
						<br>
						<b style="color: green;">Uw Verificatie Code:</b>
						<label> 
						<input type="text" placeholder="'. User::userData('beta_code') .'" readonly>
						</label>
						<div style="background-image:url(/templates/david_vox/img/gegevens.png);background-repeat: no-repeat;background-position: left;height: 200px;">
						</div>

						<p style="background-position: left; position: relative;">Mocht dit nou echt perongeluk zijn, neem dan contact op met onze Verificatie-Code Team.<br>Om vervolgens uw Verificatie Code van uw account af te halen.</p>
						</div>
						<button type="submit" class="submit btn red save" name="hotelsettings"">Maak Ticket</button>';
					}
					?>
					
        </div>
    </div>
</div>
<script>
		$("input[type='radio']").change(function(){
		if($(this).val()=="1")

		{
		$("#advanced-instelling").show();
		}
		else
		{
       $("#advanced-instelling").hide(); 
		}

		});
		</script>
		<script src="https://yadahotel.nl/templates/yada/js/verification/sendcode.js"></script>
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