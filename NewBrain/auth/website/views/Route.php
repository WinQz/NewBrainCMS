<?php

$request = $_SERVER['REQUEST_URI'];

if (User::userData('rank') == null)
{
	switch ($request) {
	
	// Begin Normale website gedrag \\
    case '/' :
        require __DIR__ . '/NewBrain_Validator/NewBrain_Index.php';
        break;
		
    case '' :
        require __DIR__ . '/NewBrain_Validator/NewBrain_Index.php';
        break;
	// Eindig Normale website gedrag \\
	
	// Begin Initialiseer Validation Components & Relateerde \\
    case '/Login' :
        require __DIR__ . '/NewBrain_Validator/NewBrain_Login.php';
        break;
		
	case '/Register' :
        require __DIR__ . '/NewBrain_Validator/NewBrain_Register.php';
        break;
		
	case '/Info' :
        require __DIR__ . '/NewBrain_Validator/NewBrain_Info.php';
        break;
		
	case '/Logout' :
        require __DIR__ . '/NewBrain_Validator/NewBrain_Logout.php';
        break;
	// Eindig Initialiseer Validation Components & Relateerde \\
	
	// Me Components \\
	case '/Me' :
        require __DIR__ . '/NewBrain_Errors/NewBrain_ErrorNoUser.php';
        break;
	// Eindig Me Components \\
	
	// Begin Community Components \\
	case '/Community' :
        require __DIR__ . '/NewBrain_Community/NewBrain_Community.php';
        break;

    case '/Online' :
        require __DIR__ . '/NewBrain_Community/NewBrain_Online.php';
         break;
	// Eindig Community Components \\
	
	// Begin Settings Components \\
	case '/Dashboard' :
        require __DIR__ . '/NewBrain_Errors/NewBrain_ErrorNoUser.php';
        break;
		
	case '/Settings' :
        require __DIR__ . '/NewBrain_Errors/NewBrain_ErrorNoUser.php';
        break;
		
	case '/Settings2' :
        require __DIR__ . '/NewBrain_Errors/NewBrain_ErrorNoUser.php';
        break;
		
	case '/HotelSettings' :
        require __DIR__ . '/NewBrain_Errors/NewBrain_ErrorNoUser.php';
        break;
		
	case '/Sessies' :
        require __DIR__ . '/NewBrain_Errors/NewBrain_ErrorNoUser.php';
        break;
		
	case '/BetaSettings' :
        require __DIR__ . '/NewBrain_Errors/NewBrain_ErrorNoUser.php';
        break;
	// Eindig Settings Components \\
	
	// Begin Staff Components \\
	case '/Management' :
        require __DIR__ . '/NewBrain_Errors/NewBrain_ErrorNoUser.php';
        break;
		
	case '/Developers' :
        require __DIR__ . '/NewBrain_Errors/NewBrain_ErrorNoUser.php';
        break;
		
	case '/Moderatie' :
        require __DIR__ . '/NewBrain_Errors/NewBrain_ErrorNoUser.php';
        break;
	// Eindig Staff Components \\
	
	// Begin Staff Components \\
	case '/Kluis' :
        require __DIR__ . '/NewBrain_Errors/NewBrain_ErrorNoUser.php';
        break;
		
	case '/RuilWaarde' :
        require __DIR__ . '/NewBrain_Valuta/NewBrain_RuilWaarde.php';
        break;
		
	case '/BadgeShop' :
        require __DIR__ . '/NewBrain_Errors/NewBrain_ErrorNoUser.php';
        break;
	// Eindig Staff Components \\
		
    default:
        http_response_code(404);
        require __DIR__ . '/NewBrain_Errors/NewBrain_Error404.php';
        break;
}
}

else 
	
{
	switch ($request) {
	
	// Begin Normale website gedrag \\
    case '/' :
        require __DIR__ . '/NewBrain_Validator/NewBrain_Index.php';
        break;
		
    case '' :
        require __DIR__ . '/NewBrain_Validator/NewBrain_Index.php';
        break;
	// Eindig Normale website gedrag \\
	
	// Begin Initialiseer Validation Components & Relateerde \\
    case '/Login' :
        require __DIR__ . '/NewBrain_Validator/NewBrain_Login.php';
        break;
		
	case '/Register' :
        require __DIR__ . '/NewBrain_Validator/NewBrain_Register.php';
        break;
		
	case '/Info' :
        require __DIR__ . '/NewBrain_Validator/NewBrain_Info.php';
        break;
		
	case '/Logout' :
        require __DIR__ . '/NewBrain_Validator/NewBrain_Logout.php';
        break;
	// Eindig Initialiseer Validation Components & Relateerde \\
	
	// Me Components \\
	case '/Me' :
        require __DIR__ . '/NewBrain_Me/NewBrain_Me.php';
        break;
	// Eindig Me Components \\
	
	// Begin Community Components \\
	case '/Community' :
        require __DIR__ . '/NewBrain_Community/NewBrain_Community.php';
        break;
		
	case '/Online' :
        require __DIR__ . '/NewBrain_Community/NewBrain_Online.php';
        break;
	// Eindig Community Components \\
	
	// Begin Settings Components \\
	case '/Dashboard' :
        require __DIR__ . '/NewBrain_Settings/NewBrain_Dashboard.php';
        break;
		
	case '/Settings' :
        require __DIR__ . '/NewBrain_Settings/NewBrain_Settings.php';
        break;
		
	case '/Settings2' :
        require __DIR__ . '/NewBrain_Settings/NewBrain_Settings2.php';
        break;
		
	case '/HotelSettings' :
        require __DIR__ . '/NewBrain_Settings/NewBrain_HotelSettings.php';
        break;
		
	case '/Sessies' :
        require __DIR__ . '/NewBrain_Settings/NewBrain_Sessies.php';
        break;
		
	case '/BetaSettings' :
        require __DIR__ . '/NewBrain_Settings/NewBrain_BetaSettings.php';
        break;
	// Eindig Settings Components \\
	
    // Begin Staff Components \\
	case '/Management' :
        require __DIR__ . '/NewBrain_Staff/NewBrain_Management.php';
        break;
		
	case '/Developers' :
        require __DIR__ . '/NewBrain_Staff/NewBrain_Developers.php';
        break;
		
	case '/Moderatie' :
        require __DIR__ . '/NewBrain_Staff/NewBrain_Moderatie.php';
        break;
	// Eindig Staff Components \\
	
    // Begin Valuta Components \\
	case '/Kluis' :
        require __DIR__ . '/NewBrain_Valuta/NewBrain_Kluis.php';
        break;
		
	case '/RuilWaarde' :
        require __DIR__ . '/NewBrain_Valuta/NewBrain_RuilWaarde.php';
        break;
		
	case '/BadgeShop' :
        require __DIR__ . '/NewBrain_Valuta/NewBrain_BadgeShop.php';
        break;
	// Eindig Valuta Components \\
		
    default:
        http_response_code(404);
        require __DIR__ . '/NewBrain_Errors/NewBrain_Error404.php';
        break;
	}
}

?>