<?php
/**
 * This file generate user access tokens
 * just change $grantToken value
 * empty the file zcrm_oathtoken.txt
 * run only once in the beginning 
 * 
 * Generate grant token with scopes: 
 * ZohoCRM.modules.ALL,ZohoCRM.settings.ALL,aaaserver.profile.READ
 */

include_once 'includes.php';

// Assign the email id access
$_SERVER['user_email_id'] = $conf['currentUserEmail'];

//Generating access tokens
try {
    $oAuthClient = ZohoOAuth::getClientInstance();
    $grantToken = 'Grant token here';
    $oAuthTokens = $oAuthClient->generateAccessToken($grantToken);
    echo 'Token generated and app authorised successfully.';

} catch (Exception $e) {
    echo "Grant token did not generated:\n" . $e ;
}