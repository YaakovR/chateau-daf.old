<?php
	$cs = 'mysql:host=localhost;dbname=chateauDaf';
	$user = 'yaakov';
	$password = 'p@$$w0rd';
	$options = array(
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
	);
	
	try {
		$db = new PDO($cs, $user, $password, $options);
	} catch(PDOException $e) {
		$errorMessage = $e->getMessage();
		http_response_code(500);
		exit;
	}
?>