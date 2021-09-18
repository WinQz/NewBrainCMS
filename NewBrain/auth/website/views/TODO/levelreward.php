
    <title><?= $config['hotelName'] ?>: Level Rewards</title>
<?php 
include_once 'includes/header_scripts.php'; 

?>
</head>
<?php include 'controller/level.php'; 
?>

<style>

		.reward-container-reward-title-websitelevel {
			text-align: center;
			
		}
		.reward-container-reward-title-websitelevel {
			float: left;
			padding: 2px;
			margin: 5px;
			border: 1px solid #0000;
			cursor: pointer;
			border-radius: 6px;
			transition: 0.2s;
			
		}
		.reward-container-reward-title-websitelevel:hover {
			float: left;
			padding: 2px;
			margin: 5px;
			border: 1px solid #0000;
			cursor: pointer;
			background-color: lightgray;
			transition: 0.5s;
		}
		
		</style>
<body >

<style>
.img-alert {
	background-image: url('/auth/website/img/bg_hotel.png');
	height: 100%;
	text-align: center;
}
</style>

<div class="container">
	<div class="row">
        <div class="col-4">
			<?php 
		if (User::userData('rank') == null){
			echo '<div id="shadow-box">
			<div style="height: 70px;" class="title-box png20">
				<div class="title">Your level Statistics</div>
				<div class="desc">Elke 1000XP is 1 level erbij</div>
			</div>
			<div class="png20">
			Before you can use this feature, please login.
			</div>
		</div>
		
		<div id="shadow-box">
		<div class="title-box png20" style="height: 80px;">
			<div class="title">BELANGRIJK!!</div>
			<div class="desc">Lees dit eerst, voordat je al gaat beginnen met claimen!</div>
		</div>
		<div class="png20">
			Hey, <b>Bezoeker</b> kleine tip, ga van laag naar hoog claimen, anders blokkeer je alle onder staande. Hierdoor denkt het systeem dat je de vorige ook hebt geclaimed, maar dat is niet waar. Mocht dit gebeuren wij kunnen je niet helpen.
			
			<hr>
			Alhoewel, <b>Milan</b> in het hotel dit kan, <b>Milan</b> kan jouw level rewards resetten hierdoor kan je alles weer claimen wat bij jouw level toe behoort. Maar of dit gegarandeerd uitgevoert wordt door hem, is een vraag.
		</div>
	</div>
</div>
	
	<div class="col-8">
		
		
                                            <div id="shadow-box" style="width: 642px;">
                                              <div class="title-box png20" style="background-color:#d32f2f;background-repeat: no-repeat;background-position: right;height: 70px;">
                                                 <div class="title"><font color="white">Level Rewards</font></div>
                                                 <div class="desc"><font color="white">Hier kan je alle pakketten zien die je kan krijgen of mogelijk kan claimen.</font></div>
                                            </div>
                                <div class="png20" style="height: 470px; position: relative;">
								<div class="img-alert">
                                    Login before using this system.<br>This system is in beta anyway.<br>
									<a href="/index"><button style="width: 35%" class="btn big green">Login Now</button></a>
									</div>
								</div>
                            </div>
                    	</div>';
		}
		else {
			echo '<div id="shadow-box">
			<div style="height: 70px;" class="title-box png20">
				<div class="title">Jouw level statistieken</div>
				<div class="desc">Elke 1000XP is 1 level erbij</div>
			</div>
			<div class="png20">
				
			   Jouw Huidige Level: <b>' . $levelShow . '</b><br>
			   
			   Jouw totale XP: <b>'.User::userData('ls_experience') .'</b><br>
			   
			   <h4>Jouw Prestige: '. $prestigelevel .' </h4> </b>
			</div>
		</div>
		<div id="shadow-box">
			<div class="title-box png20" style="height: 80px;">
				<div class="title">BELANGRIJK!!</div>
				<div class="desc">Lees dit eerst, voordat je al gaat beginnen met claimen!</div>
			</div>
			<div class="png20">
				Hey, <b>'. User::userData('username').'</b> kleine tip, ga van laag naar hoog claimen, anders blokkeer je alle onder staande. Hierdoor denkt het systeem dat je de vorige ook hebt geclaimed, maar dat is niet waar. Mocht dit gebeuren wij kunnen je niet helpen.
				
				<hr>
				
			</div>
		</div>';
		}
			?>
            
        </div>
		<div class="col-8">
		<?= levelreward() ?>
		
		
                                            
                        
</div>
</div>
<?php
include_once 'includes/footer.php';
?>

