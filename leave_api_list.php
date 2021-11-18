<?php
	date_default_timezone_set('Asia/Bangkok');
	define('BASE_PATH', dirname(__FILE__) . '/');

	//require_once(BASE_PATH . 'common_lib/SystemConfig.php');
	// ini_set('display_errors', '1');

	require_once "../../../include/config/globalvariable.inc.php"; 
	require_once "../../../include/config/connectdb.inc.php"; 
	require_once "prettyjson.php";
	require_once "EleaveApp.php";
	

	// Default variable
	$json_obj = new stdClass();


	$output = empty($_GET['output']) ? 'json' : $_GET['output'];
	$img_size = empty($_POST['img_size']) ? 'full' : $_POST['img_size'];
	$posts_per_page =  empty($_POST['per_page']) ? 10 : $_POST['per_page'];
	$page =  empty($_POST['page']) ? 1 : intval($_POST['page']);

	$service = new EleaveApp();
  	$result = $service->handler($_POST);

  	print_r($result);

?>