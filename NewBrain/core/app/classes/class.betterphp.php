<?php

/* 	Registreer hier al je variables die je netter wilt hebben.
	PHP gemaakt door Mildrano-
*/
	
class BrainVariables 
{
	
  protected static function getUsername() 
  {
    return User::userData('username');
  }
  
  protected static function getMotto() 
  {
    return User::userData('motto');
  }
  
  protected static function getLook() 
  {
    return User::userData('look');
  }
  
  protected static function getCredits() 
  {
	return User::userData('credits');
  }
  
  protected static function getPixels() 
  {
	return User::userData('pixels');
  }
}

class brainUserData extends BrainVariables 
{
	
  public $userName;
  public $userMotto;
  public $userLook;
  public $userCredits;
  public $userPixels;
  
  public function __construct() 
  {
    $this -> userName = parent::getUsername();
	$this -> userMotto = parent::getMotto();
	$this -> userLook = parent::getLook();
	$this -> userCredits = parent::getCredits();
	$this -> userPixels = parent::getPixels();
  }	
}

$brainUserData = new brainUserData;

?>