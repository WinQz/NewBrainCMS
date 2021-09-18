<?php 
include_once $config['routeUrl'] . $config['routeUrlAuth'] . $config['routeUrlWebsite'] . $config['routeUrlViews'] . $config['routeUrlIncludes'] . '/Header.php'; 

if (User::userData('rank') == null)
{
	echo '';} 
else 
{
	header('Location: /Me');
	
}
?>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">
<body>

<style>
.register-error {
	border: 1px solid #00000000;
	background-color: red;
	color: white;
	border-radius: 4px;
	font-size: 16px;
	text-align: center;
	font-family: 'Ubuntu', sans-serif;
	font-weight: bold;
}
</style>

<div class="container">
	<div class="row">
        <div class="col-4">
		
				<form method="post">
				<?php User::Register(); ?>
				
						<div id="shadow-box">
                <div class="title-box png20">
                    <div class="title">General Required Information</div>
                </div>
                <div class="png20">
				
				<label>E-mailadres</label>
                        <input type="text" class="form-control" style="width: 94%" id="email" name="email">
                        <p class="desc">You can use your e-mail address <?= $config['hotelName'] ?> double secure account.</p>
                        
                        <label>Motto</label>
                        <input type="text" class="form-control" style="width: 94%" id="motto" name="motto" value="<?= $config['startMotto'] ?>">
                        <p class="desc">Choose a motto that other <?= $config['hotelName'] ?>'s can really identify with!</p>

						<?php
								if($config['recaptchaSiteKeyEnable'] == true)
								{
								?>
								<div class="form-group">
									<label for="inputcaptcha" class="col-lg-4 control-label"><?php echo $lang['Rrobot']; ?></label>
									<div class="col-lg-8">
										<div class="g-recaptcha" data-sitekey="6Lcz6vUaAAAAALYxhlDHFzYrV_-i68Kl1ahz5hnI"></div>
									</div>
								</div>
								<?php
								}
							?>
                </div>
            </div>
						</div>
            
                        <div class="col-8">
                                            
						<div id="shadow-box">
                <div class="title-box png20">
                    <div class="title">Account Security</div>
                </div>
					<div class="png20">
                        <label><?= $config['hotelName'] ?>Name</label>
                        <input type="text" id="username" name="username" autocomplete="off" style="width:94%">
                        <p class="desc">Choose a nice name, you can't change it later!</p>
                        
                        <label>Password</label>
                        <input type="password" class="form-control" style="width: 94%" id="password" name="password">
                        <p class="desc">Choose a password that is hard to guess, but easy for you to remember.</p>
                        
                        <label>Password Reapeat</label>
                        <input type="password" class="form-control" style="width: 94%" id="password_repeat" name="password_repeat">
                        <p class="desc">Please repeat your password, this is purely for security!</p><br>
                        
                        

                        <a href="/" class="btn red back-register">Cancel</a>
                        <button type="submit" class="btn green next-register" name="register">Register</button>

                        <div style="clear:both"></div>
                </div>
                </div>
            </div>
            
        </div>
		</form>
            	</div>';
</div>
</div>
<?php
include_once 'includes/footer.php';
?>
