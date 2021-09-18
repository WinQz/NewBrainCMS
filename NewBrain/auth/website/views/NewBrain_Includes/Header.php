<?php staffCheck(); ?>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script src="auth/assets/js/load/JQueryLoad.js"> </script>
<meta charset="utf-8">
<link type="text/css" href="/auth/assets/css/style.css?v=18" rel="stylesheet">
<link type="text/css" href="/auth/assets/css/settings.css?v=2" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<meta name="description" content="NewBrain is het leukste hotel van 2020, join ons gauw om nieuwe vrienden te maken, kamers te bouwen en mee te doen met evenementen!">
<link rel="canonical" href="https://yadahotel.nl">
<meta property="og:site_name" content="yadahotel.nl">
<meta property="og:type" content="assets">
<meta property="og:url" content="https://yadahotel.nl/">
<meta property="og:title" content="yadahotel.nl">
<meta property="og:description" content="NewBrain is het leukste hotel van 2020, join ons gauw om nieuwe vrienden te maken, kamers te bouwen en mee te doen met evenementen!">
<meta name="author" content="NewBrain Development">
<meta name="copyright" content="Copyright © NewBrain">	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta name="description" content="NewBrain is het leukste hotel van 2020, join ons gauw om nieuwe vrienden te maken, kamers te bouwen en mee te doen met evenementen!">
	<link rel="canonical" href="https://yadahotel.nl">
	<meta property="og:site_name" content="yadahotel.nl">
	<meta property="og:type" content="assets">
	<meta property="og:url" content="https://yadahotel.nl/">
	<meta property="og:title" content="yadahotel.nl">
	<meta property="og:description" content="NewBrain is het leukste hotel van 2020, join ons gauw om nieuwe vrienden te maken, kamers te bouwen en mee te doen met evenementen!">
	<meta name="twitter:title" content="yadahotel.nl">
	<meta name="twitter:description" content="NewBrain is het leukste hotel van 2020, join ons gauw om nieuwe vrienden te maken, kamers te bouwen en mee te doen met evenementen!">
	<meta name="author" content="NewBrain Development">
	<meta name="copyright" content="Copyright © NewBrain Development ">
	<meta name="keywords" content="habbo, habbo hotel, habbo retro, NewBrain, habbo kostenloos">
	<meta name="robots" content="index, follow"> 
    <title>yadahotel.nl - De leukste virtuele wereld sinds 2019.</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<style>
.navigation{
            font-size: 15px;
			background-color: white;
            border: 1px solid #0000000;
            padding-bottom: 10px;
			
        }
		
.navigation {
            list-style-type: none;
            display: none;
        }
		
.navigation li {
            text-align: center;
            margin: 15px auto;
			font-size: 10px;
			
        }
		
.navbar-toggle {
            position: absolute;
            top: 10px;
            right: 20px;
            cursor: pointer;
            color: black;
            font-size: 24px;
        }
		.active {
  display: block;
}

		
@media screen and (min-width: 768px) {
            .navigation {
                display: flex;
                justify-content: space-between;
                padding-bottom: 0;
                height: 70px;
                align-items: center;
            }

            .navigation {
                display: flex;
                margin-right: 30px;
                flex-direction: row;
                justify-content: flex-end;
            }

            .navigation li {
                margin: 0;
            }

            .nav-links {
                margin-left: 40px;
            }

            .navbar-toggle {
                display: none;
            }

            
        }



</style>
<script data-require="jquery@3.1.0" data-semver="3.1.0" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
<script data-require="angularjs@1.5.8" data-semver="1.5.8" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.8/angular.js"></script>
<script data-require="ui-bootstrap@2.1.3" data-semver="2.1.3"
    src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.1.3/ui-bootstrap-tpls.js"></script>


<div id="loading" style="justify-content: center;"><center><img style="position: relative; top: 250px;" src="https://habbofont.net/font/habbo_new_big/New Brain.gif"></img></center><h1 style="position: absolute; left: 43%; top: 550px;">Loading New Brain...</h1></div></center>
		<div id="header-content">
		<div class="container">
			<div class="row">
				<div class="col-2">
<?php
if(User::userData('rank') > 2){
  echo '<a href="/adminpan/dash" class="btn red big check-in-header">Housekeeping</a>';
}
?>
				</div>
				<div class="col-2">
<?php
if(User::userData('djteam') > 0 OR User::userData('rank') > 7) {
  echo '<a href="/djpaneel" class="btn red big check-in-header">Radiopaneel</a>';
}
?>
				</div>
				<div class="col-8">
					<div class="hotel"></div>

					<div class="online-count-box"><b><?= Game::usersOnline() ?></b> <?= $config['hotelName'] ?>'s online</div>
					<?php 
					if(User::userData('rank') == null){
					echo '<a href="/index" class="btn red big check-in-header" target="_blank">Log in First</a>';
					} else {
					echo '<a href="/hotel" class="btn green big check-in-header" target="_blank">To ' . $config['hotelName'] . '</a>';
					}
					
					?>
				</div>
			</div>
		</div>
	</div>
	<div id="header-menu">
		<div class="container">
			<div class="row">
				<div class="col-4">
				<?php  
				if(User::userData('rank') == null){
				echo '<ul class="user-menu">
						<li>
							<a href="/">
								<div class="user-avatar-menu" style="background-image:url(https://habbo.nl/habbo-imaging/avatarimage?figure=&head_direction=3&gesture=sml)"></div>Bezoeker<span></i></span>
							</a>

						</li>
					</ul>';
				} else {
					echo '
					<ul class="user-menu">
						<li>
							<a href="/Me">
								<div class="user-avatar-menu" style="background-image:url(https://habbo.nl/habbo-imaging/avatarimage?figure=' . $brainUserData->userLook . '&head_direction=3&gesture=sml)"></div>' . $brainUserData->userName . '<span><i class="far fa-angle-down"></i></span>
							</a>

							<ul class="user-subnavi">
								<li><a href="#">Account Switch (Soon)</a></li>
								<li><a href="/Dashboard">Settings</a></li>
								<li><a href="/Logout" class="logout">Logout</a></li>
							</ul>
						</li>
					</ul>
				';}?>
				
				
				</div>
				
				<?php  
				if(User::userData('rank') == null){
				echo '<div class="col-8">
				<span class="navbar-toggle" id="js-navbar-toggle">
					<i class="fas fa-bars"></i>
					</span>
					<ul class="navigation" id="js-menu">
					
						<li>
							<a href="#">Community<span><i class="far fa-angle-down"></i></span></a>

							<ul class="subnavi">
								<li><a href="/Community">Community</a></li>
								<li><a href="/Online">Online Users</a></li>
								<li><a href="/binnenkort">Stats</a></li>
							</ul>
						</li>
						<li>
							<a href="#">Valuta<span><i class="far fa-angle-down"></i></span></a>

							<ul class="subnavi">
								<li><a href="/RuilWaarde">Ruilwaarde</a></li>
							</ul>
						</li>
					</ul>
				</div>';
				} else {
					echo '
					<div class="col-8">
				<span class="navbar-toggle" id="js-navbar-toggle">
					<i class="fas fa-bars"></i>
					</span>
					<ul class="navigation" id="js-menu">
					
						<li>
							<a href="#">Community<span><i class="far fa-angle-down"></i></span></a>

							<ul class="subnavi">
								<li><a href="/Community">Community</a></li>
								<li><a href="/Online">Online Users</a></li>
								<li><a href="/binnenkort">Stats</a></li>
							</ul>
						</li>
						<li>
							<a href="#">Staff<span><i class="far fa-angle-down"></i></span></a>

							<ul class="subnavi">
								<li><a href="/Management">Management</a></li>
								<li><a href="/Developers">Developers</a></li>
								<li><a href="/Moderatie">Moderators</a></li>
							</ul>
						</li>
						<li>
							<a href="#">Teams<span><i class="far fa-angle-down"></i></span></a>

							<ul class="subnavi">
								<li><a href="/dj">DJs</a></li>
								<li><a href="/eventteam">Event Team</a></li>
							</ul>
						</li>
						<li>
							<a href="#">Shop<span><i class="far fa-angle-down"></i></span></a>

							<ul class="subnavi">
								<li><a href="/winkel">VIP Shop</a></li>
								<li><a href="/vips">All VIPS</a></li>
							</ul>
						</li>
						<li>
							<a href="#">Valuta<span><i class="far fa-angle-down"></i></span></a>

							<ul class="subnavi">
								<li><a href="/Kluis">Kraak De Kluis (Soon)</a></li>
								<li><a href="/RuilWaarde">Ruilwaarde</a></li>
								<li><a href="/BadgeShop">BadgeShop</a></li>
							</ul>
						</li>
					</ul>
				</div>
				';}?>
				
			</div>
		</div>
		</div>
		<script>
let mainNav = document.getElementById('js-menu');
let navBarToggle = document.getElementById('js-navbar-toggle');

navBarToggle.addEventListener('click', function () {
  mainNav.classList.toggle('active');
});
</script>
			<script>
const wait = (delay = 0) =>
  new Promise(resolve => setTimeout(resolve, delay));

const setVisible = (elementOrSelector, visible) => 
  (typeof elementOrSelector === 'string'
    ? document.querySelector(elementOrSelector)
    : elementOrSelector
  ).style.display = visible ? 'block' : 'none';

setVisible('.container', false);
setVisible('#loading', true);

document.addEventListener('DOMContentLoaded', () =>
  wait(1000).then(() => {
    setVisible('.container', true);
    setVisible('#loading', false);
  }));
</script>
<style>
/* width */
::-webkit-scrollbar {
  width: 15px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
#loading {
  display: flex;
  position: fixed;
  z-index: 100;
  width: 100%;
  height: 100%;
  background-color: rgba(255, 255, 255, 0.8);
  
  background-image: url("/auth/assets/img/loading.gif");
  background-repeat: no-repeat;
  background-position: center;
  transition: 0.3s;
}
</style>
