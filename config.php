<?php 
 
// Database configuration    
define('DB_HOST', 'localhost'); 
define('DB_USERNAME', 'sulay'); 
define('DB_PASSWORD', 'sulay2020*'); 
define('DB_NAME', 'apicalendar'); 
 
// Google API configuration 
define('GOOGLE_CLIENT_ID', ''); 
define('GOOGLE_CLIENT_SECRET', ''); 
define('GOOGLE_OAUTH_SCOPE', 'https://www.googleapis.com/auth/calendar'); 
define('REDIRECT_URI', 'http://localhost/apicalendarphp/google_calendar_event_sync.php'); 
 
// Start session 
if(!session_id()) session_start(); 
 
// Google OAuth URL 
$googleOauthURL = 'https://accounts.google.com/o/oauth2/auth?scope=' . GOOGLE_OAUTH_SCOPE . '&redirect_uri=' . REDIRECT_URI . '&response_type=code&client_id=' . GOOGLE_CLIENT_ID . '&access_type=online'; 
 
?>
