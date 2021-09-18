<?php 
include_once $config['routeUrl'] . $config['routeUrlAuth'] . $config['routeUrlWebsite'] . $config['routeUrlViews'] . $config['routeUrlIncludes'] . '/Header.php'; 

?>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<head>
	<meta property="og:site_name" content="Newbrain.net">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://brain.yadahotel.nl/">
	<meta property="og:title" content="Newbrain.net">
	<meta property="og:description" content="New Brain Project, largely rewritten and optimized version of Brain 1.7.0" />
	<meta name="description" content="New Brain Project, largely rewritten and optimized version of Brain 1.7.0">
 
 </head>
<body>
<?php  

if(User::userData('rank') != null) {
	header('Location: ' . $config['hotelUrl'] . '/me');
} 
?>

<div class="container">
	<div class="row">
        <div class="col-4">
		
				<form method="post">
				<?php User::login(); ?>
				
						<div id="shadow-box">
                <div class="title-box png20">
                    <div class="title">Welcome (Back) on</div>
                </div>
                <div class="png20" style="text-align: center;">
				<img src="https://habbofont.net/font/habbo_new_big/New Brain.gif">
                </div>
            </div>
						</div>
            
                        <div class="col-8">
                                            
						<div id="shadow-box">
                <div class="title-box png20">
                    <div class="title">Account Login</div>
                </div>
					<div class="png20">
                        <label><?= $config['hotelName'] ?> Name</label>
                        <input type="text" class="login-field" name="username" id="login-username">
                        <p class="desc">Your created <?= $config['hotelName'] ?>Name.</p>
                        
                        <label>Password</label>
                        <input type="password" class="form-control" style="width: 94%" id="password" name="password">
                        <p class="desc">Password that you have given up.</p><br>

                        <a href="/" class="btn red back-register">Cancel</a>
                        <button type="submit" style="width: 100px;" class="btn green next-register" name="login">Login</button>

                        <div style="clear:both"></div>
                </div>
                </div>
            </div>
            
        </div>
		</form>
            	</div>
</div>
</div>
<?php
include_once 'includes/footer.php';
?>
