<?php
	if(!defined('BRAIN_CMS')) 
	{ 
		die('Sorry but you cannot access this file!'); 
	}
	function levelreward()
	{
		global $dbh,$config,$lang;
		if (isset($_POST['level5']))
		{
			{
				if (User::userData('online') == 1)
				{
					echo 'Zorg dat je offline bent, anders lukt dit niet.<br>';
				}
				else
				{
					if (User::userData('claim_level') > 0)
					{
						echo 'Je hebt dit pakket al geclaimed<br>';
					}
					else
					{
						$addDiamonds = $dbh->prepare("
						UPDATE users_currency SET 
						amount = amount + :diamond_add
						WHERE (user_id=:id AND type=5)
						");
						$addDiamonds->bindParam(':id', $_SESSION['id']);
						$addDiamonds->bindParam(':diamond_add', $config['diamondTen']);
						$addDiamonds->execute();
						$giveClaimRank = $dbh->prepare("
						UPDATE users SET 
						claim_level = '1'
						WHERE 
						id=:id
						");
						$giveClaimRank->bindParam(':id', $_SESSION['id']);
						$giveClaimRank->execute();
						echo 'Met Succes Pakket 1 Geclaimed<br>';
					}
				}

		}
		}
		if (isset($_POST['level10']))
		{
			{
				if (User::userData('online') == 1)
				{
					echo 'Zorg dat je offline bent, anders lukt dit niet.<br>';
				}
				else
				{
					if (User::userData('claim_level') > 1)
					{
						echo 'Je hebt dit pakket al geclaimed<br>';
					}
					else
					{
						$addDiamonds = $dbh->prepare("
						UPDATE users_currency SET 
						amount = amount + :diamond_add
						WHERE (user_id=:id AND type=5)
						");
						$addDiamonds->bindParam(':id', $_SESSION['id']);
						$addDiamonds->bindParam(':diamond_add', $config['diamondTen']);
						$addDiamonds->execute();
						$giveClaimRank = $dbh->prepare("
						UPDATE users SET 
						claim_level = '2'
						WHERE 
						id=:id
						");
						$giveClaimRank->bindParam(':id', $_SESSION['id']);
						$giveClaimRank->execute();
						echo 'Met Succes Pakket 2 Geclaimed<br>';
					}
				}

		}
		}
		if (isset($_POST['level15']))
		{
			{
				if (User::userData('online') == 1)
				{
					echo 'Zorg dat je offline bent, anders lukt dit niet.<br>';
				}
				else
				{
					if (User::userData('claim_level') > 2)
					{
						echo 'Je hebt dit pakket al geclaimed<br>';
					}
					else
					{
						$addDiamonds = $dbh->prepare("
						UPDATE users_currency SET 
						amount = amount + :diamond_add
						WHERE (user_id=:id AND type=5)
						");
						$addDiamonds->bindParam(':id', $_SESSION['id']);
						$addDiamonds->bindParam(':diamond_add', $config['diamondTen']);
						$addDiamonds->execute();
						$giveClaimRank = $dbh->prepare("
						UPDATE users SET 
						claim_level = '3'
						WHERE 
						id=:id
						");
						$giveClaimRank->bindParam(':id', $_SESSION['id']);
						$giveClaimRank->execute();
						echo 'Met Succes Pakket 3 Geclaimed<br>';
					}
				}

		}
		}
		if (isset($_POST['level20']))
		{
			{
				if (User::userData('online') == 1)
				{
					echo 'Zorg dat je offline bent, anders lukt dit niet.<br>';
				}
				else
				{
					if (User::userData('claim_level') > 3)
					{
						echo 'Je hebt dit pakket al geclaimed<br>';
					}
					else
					{
						$addDiamonds = $dbh->prepare("
						UPDATE users_currency SET 
						amount = amount + :diamond_add
						WHERE (user_id=:id AND type=5)
						");
						$addDiamonds->bindParam(':id', $_SESSION['id']);
						$addDiamonds->bindParam(':diamond_add', $config['diamondTen']);
						$addDiamonds->execute();
						$giveClaimRank = $dbh->prepare("
						UPDATE users SET 
						claim_level = '4'
						WHERE 
						id=:id
						");
						$giveClaimRank->bindParam(':id', $_SESSION['id']);
						$giveClaimRank->execute();
						echo 'Met Succes Pakket 4 Geclaimed<br>';
					}
				}

		}
		}
		if (isset($_POST['level25']))
		{
			{
				if (User::userData('online') == 1)
				{
					echo 'Zorg dat je offline bent, anders lukt dit niet.<br>';
				}
				else
				{
					if (User::userData('claim_level') > 4)
					{
						echo 'Je hebt dit pakket al geclaimed<br>';
					}
					else
					{
						$addDiamonds = $dbh->prepare("
						UPDATE users_currency SET 
						amount = amount + :diamond_add
						WHERE (user_id=:id AND type=5)
						");
						$addDiamonds->bindParam(':id', $_SESSION['id']);
						$addDiamonds->bindParam(':diamond_add', $config['diamondTen']);
						$addDiamonds->execute();
						$giveClaimRank = $dbh->prepare("
						UPDATE users SET 
						claim_level = '5'
						WHERE 
						id=:id
						");
						$giveClaimRank->bindParam(':id', $_SESSION['id']);
						$giveClaimRank->execute();
						echo 'Met Succes Pakket 5 Geclaimed<br>';
					}
				}

		}
		}
		if (isset($_POST['level30']))
		{
			{
				if (User::userData('online') == 1)
				{
					echo 'Zorg dat je offline bent, anders lukt dit niet.<br>';
				}
				else
				{
					if (User::userData('claim_level') > 5)
					{
						echo 'Je hebt dit pakket al geclaimed<br>';
					}
					else
					{
						$addDiamonds = $dbh->prepare("
						UPDATE users_currency SET 
						amount = amount + :diamond_add
						WHERE (user_id=:id AND type=5)
						");
						$addDiamonds->bindParam(':id', $_SESSION['id']);
						$addDiamonds->bindParam(':diamond_add', $config['diamondTen']);
						$addDiamonds->execute();
						$giveClaimRank = $dbh->prepare("
						UPDATE users SET 
						claim_level = '6'
						WHERE 
						id=:id
						");
						$giveClaimRank->bindParam(':id', $_SESSION['id']);
						$giveClaimRank->execute();
						echo 'Met Succes Pakket 6 Geclaimed<br>';
					}
				}

		}
		}
		if (isset($_POST['level35']))
		{
			{
				if (User::userData('online') == 1)
				{
					echo 'Zorg dat je offline bent, anders lukt dit niet.<br>';
				}
				else
				{
					if (User::userData('claim_level') > 6)
					{
						echo 'Je hebt dit pakket al geclaimed<br>';
					}
					else
					{
						$addDiamonds = $dbh->prepare("
						UPDATE users_currency SET 
						amount = amount + :diamond_add
						WHERE (user_id=:id AND type=5)
						");
						$addDiamonds->bindParam(':id', $_SESSION['id']);
						$addDiamonds->bindParam(':diamond_add', $config['diamondTen']);
						$addDiamonds->execute();
						$giveClaimRank = $dbh->prepare("
						UPDATE users SET 
						claim_level = '7'
						WHERE 
						id=:id
						");
						$giveClaimRank->bindParam(':id', $_SESSION['id']);
						$giveClaimRank->execute();
						echo 'Met Succes Pakket 7 Geclaimed<br>';
					}
				}

		}
		}
		if (isset($_POST['level40']))
		{
			{
				if (User::userData('online') == 1)
				{
					echo 'Zorg dat je offline bent, anders lukt dit niet.<br>';
				}
				else
				{
					if (User::userData('claim_level') > 7)
					{
						echo 'Je hebt dit pakket al geclaimed<br>';
					}
					else
					{
						$addDiamonds = $dbh->prepare("
						UPDATE users_currency SET 
						amount = amount + :diamond_add
						WHERE (user_id=:id AND type=5)
						");
						$addDiamonds->bindParam(':id', $_SESSION['id']);
						$addDiamonds->bindParam(':diamond_add', $config['diamondTen']);
						$addDiamonds->execute();
						$giveClaimRank = $dbh->prepare("
						UPDATE users SET 
						claim_level = '8'
						WHERE 
						id=:id
						");
						$giveClaimRank->bindParam(':id', $_SESSION['id']);
						$giveClaimRank->execute();
						echo 'Met Succes Pakket 8 Geclaimed<br>';
					}
				}

		}
		}
	}