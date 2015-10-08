<?php
include '../lib/config.php';
include '../lib/function.php';
include '../models/periodic_information_model.php';
$page = null;
$page = (isset($_GET['page'])) ? $_GET['page'] : "list";
$title = ucfirst("informasi berkala");

$_SESSION['menu_active'] = 8;

switch ($page) {
	case 'list':
		get_header($title);
		
		$query = select();
		$add_button = "periodic_information.php?page=form";


		include '../views/periodic_information/list.php';
		get_footer();
	break;
	
	case 'form':
		get_header();

		$close_button = "periodic_information.php?page=list";

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		if($id){
			$title = ucfirst("Form Edit menu");
			$row = read_id($id);
			$action = "periodic_information.php?page=edit&id=$id";
			
		} else{
			$title = ucfirst("Form Input menu");
			//inisialisasi
			$row = new stdClass();

			$row->periodic_information_no = false;
			$row->periodic_information_name = false;
			$row->periodic_information_content = false;
			$action = "periodic_information.php?page=save";
		}

		include '../views/periodic_information/form.php';
		get_footer();
	break;
	
	case 'save':
		extract($_POST);

		$i_no = get_isset($i_no);
		$i_name = get_isset($i_name);
		$i_content = get_isset($editor);
		
			$data = "'',
					'$i_no',
					'$i_name',
					'$i_content'
			";
			
			create("periodic_informations", $data);
			
			header('Location: periodic_information.php?page=list&did=1');

	break;


	case 'edit':

		extract($_POST);
		
		$id = get_isset($_GET['id']);	

		$i_no = get_isset($i_no);
		$i_name = get_isset($i_name);
		$i_content = get_isset($editor);
				
		$data = "periodic_information_no 		= '$i_no',
				periodic_information_name  	= '$i_name',
				periodic_information_content  	= '$i_content'
				";

		update("periodic_informations", $data, "periodic_information_id", $id);
		header('Location: periodic_information.php?page=list&did=2');

		

	break;

	
	
	case 'delete':

		$id = get_isset($_GET['id']);	
	
		delete($id);

		header('Location: periodic_information.php?page=list&did=3');

	break;
	
	
}

?>