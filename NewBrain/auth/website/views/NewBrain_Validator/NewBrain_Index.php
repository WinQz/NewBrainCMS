<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="New Brain Project, largely rewritten and optimized version of Brain 1.7.0">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title><?= $config['hotelName'] ?>: Welkom </title>

        <link type="text/css" href="/auth/assets/css/index.css?v=4" rel="stylesheet">
    </head>
    <body>
		
        <div class="hero">
            <div class="hotel"></div>
        </div>

        <div id="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo"></div>
                        <div class="online-count"><b><?= Game::usersOnline() ?></b> <?= $config['hotelName'] ?>'s online</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="login-position">
                        <h2>New Brain</h2>
						<h3><?= $config['hotelName'] ?> for Young & Old.</h3>
						<p>Here below can you choose whether u will Register or Login!<br> <?= $config['hotelName'] ?> is currently in Beta Phase!</p>
						<a href="<?php if (User::userData('rank') == null) {echo '/Login';} else {echo '/Me';}?>">
						 <button type="submit" class="btn big green login-button" style="width: 100%" name="login"><?php if (User::userData('rank') == null) {echo 'No Session Detected, Login First.';} else {echo 'Session Detected: Continue';}?></button>
                        </a>
                        <div class="clear"></div>
                        <div class="row">
                            <div class="col-md-12">
                                <p>or</p>
                            </div>
							
                            <div class="col-md-12">
                                <a href="/Register">
							<button class="btn big orange register-button">Register</button>
								</a>
                            </div>
							<hr>
							<div class="col-md-12">
                                <a href="/Info">
							<button class="btn big red register-button">Information</button>
								</a>
                            </div>
                        </div>
							
                           
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="row" style="margin-top: 12%; margin-left: -62%;">
<?php
include "includes/footer.php"
?>
            </div>
        </div>
    </body>
</html>