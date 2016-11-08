<?php
	if(!empty($_GET['action'])) {
		$action = $_GET['action'];
	} else {
		$action = "default";
	}
	
	switch ($action) {
		case 'default':
			include 'views/home.php';
			exit;
		case 'home':
			include 'views/home.php';
			exit;
		case 'dafYomi':
			include 'views/dafYomi.php';
			exit;
		case 'chumash':
			include 'views/chumash.php';
			exit;
		case 'gallery':
			include 'views/gallery.php';
			exit;
		case 'bio':
			include 'views/bio.php';
			exit;
		case 'location':
			include 'views/location.php';
			exit;
		case 'contact':
			include 'views/contact.php';
			exit;
	}
	
	/*switch ($action) {
		case 'default':
			include 'models\housesModel.php';
			include 'views\housesView.php';
			exit;
		case 'show_table':
			include 'models\housesModel.php';
			include 'views\housesTableView.php';
			exit;
		case 'details':
			include 'models\houseModel.php';
			include 'views\detailsView.php';
			exit;
		case 'delete':
			include 'models\deleteModel.php';
			include 'models\housesModel.php';
			include 'views\housesTableView.php';
			exit;
		case 'add_listing':
			include 'views\addListingForm.php';
			exit;
			
		default:
			$errorMessage = "Don't know how to $action";
			include 'views\error.php';
			exit;
	}*/
?>