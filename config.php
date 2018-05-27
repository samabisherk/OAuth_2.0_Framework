<?php
	session_start();

	require_once "Facebook/autoload.php";
	
	//Replace the app_id,app_secret with yours.
	$FB = new \Facebook\Facebook([
		'app_id' => '245744135987084',
		'app_secret' => '3a75ec9242acaf21f645654f3e45f4ef',
		'default_graph_version' => 'v3.0'
	]);

	$helper = $FB->getRedirectLoginHelper();
?>