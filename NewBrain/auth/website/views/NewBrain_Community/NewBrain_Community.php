
<?php 
include_once $config['routeUrl'] . $config['routeUrlAuth'] . $config['routeUrlWebsite'] . $config['routeUrlViews'] . $config['routeUrlIncludes'] . '/Header.php'; 
?>
    <title><?= $config['hotelName'] ?>: Community</title>
</head>

<body>

	<div class="container">
		<div class="row">
        <div class="col-8">
				<div id="news-content">
<?php
$sql = $dbh->prepare("SELECT id,title,image,shortstory,author FROM cms_news ORDER BY id DESC LIMIT 1");
$sql->execute();
$newsAuthorQ = $dbh->prepare("SELECT username,look FROM users WHERE id = :newsid");
$newsAuthorQ->bindParam(':newsid', $news2['author']);
$newsAuthorQ->execute();
$newsAuthor = $newsAuthorQ->fetch();
while ($news = $sql->fetch())
{
echo'
				<a href="/news/'.filter($news["id"]).'" style="text-decoration:none">
					<div class="news-article show" style="background: url('. $news['image'] .')">
						<div class="shadow"></div>
						<div class="news-content">
							<div class="news-title">' .filter($news["title"]).'</div>
							<div class="news-short-text">' .filter($news["shortstory"]).'</div>
						</div>

						<div class="details-box">
							<div class="back-news"><i class="fal fa-newspaper"></i></div>
						</div>
';

}
?>
					</div>
					</a>
				</div>
        </div>
        <div class="col-4">
				<iframe src="https://discordapp.com/widget?id=641705852843327511&theme=dark" width="100%" height="250" allowtransparency="true" frameborder="0"></iframe>
        </div>
        <div class="col-12">
				<div id="content-box" style="max-height:300px">
					<div class="title-box png20" style="background-color:#00796B;background-image:url(/templates/yada/img/party.png);background-repeat: no-repeat;background-position: right;height: 80px;">
						<div class="title"><font color="white">Evenementen</font></div>
						<div class="desc"><font color="white">Geplande evenementen in <?= $config['hotelName'] ?></font></div>
					</div>
					<div class="png20">
								<div class="event">
									<div class="icon" style="width:13%"><i class="fa fa-play fa-2x" aria-hidden="true"></i></div>
									<div class="info" style="width:87%">
										<div class="event_title">Opening van <?= $config['hotelName'] ?></div>
										<div class="event_date">Begint op
											<b>05.01.2020</b> om
											<b>14:00</b></div>
										<div style="clear: both"></div>
										<div class="event_desc">Op 5 januari 2020 opent <?= $config['hotelName'] ?> haar deuren</div>
									</div>
									<div style="clear: both"></div>
								</div>
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