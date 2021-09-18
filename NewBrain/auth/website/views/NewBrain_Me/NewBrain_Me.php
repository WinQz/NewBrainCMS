<?php 
include_once $config['routeUrl'] . $config['routeUrlAuth'] . $config['routeUrlWebsite'] . $config['routeUrlViews'] . $config['routeUrlIncludes'] . '/Header.php'; 
?>
<html>
<head>
    <title><?= $config['hotelName'] ?>: <?php echo $brainUserData->userName; ?></title>
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>

<body>


	<div class="container">
		<div class="row">
		
        <link type="text/css" href="/auth/assets/css/profile.css?v=9" rel="stylesheet">
        <div class="col-6">
            <div id="shadow-box" class="profile" style="min-height: 330px;">
                <div class="bg" style="min-height: 330px;"></div>
                <div class="overlay" style="min-height: 330px;">
                    <div class="avatar-image" style="background-image:url(https://habbo.nl/habbo-imaging/avatarimage?figure=<?php echo $brainUserData->userLook;?>&size=l&head_direction=2&gesture=sml)"></div>

                    <div class="username">Hello, <?php echo $brainUserData->userName; ?>!</div>
												 
                    <div class="motto"></div>

                    <div class="last-online">
					<b><img src="/auth/assets/img/credits.png" width="15px"> <?php echo $brainUserData->userCredits; ?></b> <br>
					<b><img src="/auth/assets/img/duckets.png" width="15px"> <?php echo $brainUserData->userPixels; ?></b> <br>
					<b><img src="/auth/assets/img/diamonds.png" width="14px" title="SS Punten"> 0</b> <br>
					<b>Your motto: </b><?php echo $brainUserData->userMotto; ?> </div>
                </div>
                <div style="clear:both"></div>
            </div>
			
			<a class="staff-box">
                        <div class="staff-header"><div class="header1"></div><div class="overlay"><div class="work"><?php echo $brainUserData->userName; ?>'s Bank</div><div class="username"></div></div></div>
                        <div class="avatarimage" style="background-image:url()"></div>
                        <div class="clear" style="color: black;">Your Currency</div>
                        <div class="png" style="height: 124px">
                        <div class="newbrain-flexbox">
							<div class="newbrain-currency credits">
							<span class="newbrain-currency-item"><?php echo $brainUserData->userPixels; ?></span>
							</div>
							<div class="newbrain-currency">
							<span class="newbrain-currency-item">100</span>
							</div>
						</div>
                       </div>
                     <div class="clear"></div>
                    </a>
				
		
				
        </div>
        <div class="col-6">
				
				<div id="shadow-box" style="background-color:#52be80;background-image:url(/auth/assets/img/naarhotel.png);background-repeat: no-repeat;background-position: right;height: 95px;">
					<a href="/hotelv2" target="_blank" style="text-decoration:none">
					<div class="title-box png20">
						<div class="title">
						<font color="white" style="color: white;font-size: 175%">
						 To <?= $config['hotelName'] ?> Nitro</font></div>
						<div class="desc"><font color="white" style="color: white">And play with everyone else <?= $config['hotelName'] ?>ters!</font></div>
					</div>
					</a>
				</div>
				
				<div id="shadow-box" style="background-color:#AE4333;background-image:url(/auth/assets/img/naarhotel.png);background-repeat: no-repeat;background-position: right;height: 95px;">
					<a href="/hotel" target="_blank" style="text-decoration:none">
					<div class="title-box png20">
						<div class="title">
						<font color="white" style="color: white;font-size: 175%">
						 To <?= $config['hotelName'] ?> Flash</font></div>
						<div class="desc"><font color="white" style="color: white">And play with everyone else <?= $config['hotelName'] ?>ters!</font></div>
					</div>
					</a>
				</div>

				<div class="col-13">
				<div id="shadow-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#7B1FA2;background-image:url(/auth/assets/img/friends.png);background-repeat: no-repeat;background-position: right;height: 80px;">
						<div class="title2"><font color="white">Invite Friends</font></div>
						<div class="desc2"><font color="white">Invite friends out to <?= $config['hotelName'] ?>!</font></div>
					</div>
					<div class="png20 stataantal">
					<img style="float:right;" src="/auth/assets/habbo_friends.png"/>
                    <p class="refer-text">
                        Everyone wants to have fun of course <?= $config['hotelName'] ?> to have. And with a lot online and all your friends
                        in the hotel it will certainly work! <br/><br/>
                        So invite your friends and get cool gifts <br>
                    </p>
                    <a href="/verdienen">
                        <button style="font-size:15px;width:100%" class="btn big green">More Information!</button>
                    </a>
					</div>
				</div>
			</div>
	  </div>
</div>

		<?php
include "includes/footer.php"
?>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
<script type="text/javascript" src=""></script>
<script src="//instant.page/3.0.0" type="module" defer integrity="sha384-OeDn4XE77tdHo8pGtE1apMPmAipjoxUQ++eeJa6EtJCfHlvijigWiJpD7VDPWXV1"></script></div>
    </div>
    </body>
</html>