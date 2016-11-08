<?php
    require 'db.php';
    
    $query = 'SELECT name, link FROM mesechtos';
    $statement = $db->prepare($query);
    $statement->execute();
    $mesechtos = $statement->fetchAll(PDO::FETCH_ASSOC);
    $statement->closeCursor();
	
	#checks if it's an AJAX request
	if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
		echo json_encode($mesechtos);
	}
?>