<?php

# site specific values

$site_name = 'Giuman';
$site_root = 'http://www.giuman.com';
$site_keywords = array($site_name, $site_root);
$site_author = 'sbierti';

$scrpt = explode('.', $_SERVER['SCRIPT_NAME']);
$pageName = substr($scrpt[0],1);

# it18n variables
$lang = 'en'; #default value

$qstr = explode('=', $_SERVER['QUERY_STRING']);

if($qstr[1]=='en'){
	$lang = $qstr[1];
}
                
include 'languages/'.$lang.'/lang.php';

?>