<?php
include '../lib/config.php';
include '../lib/function.php';
include '../models/any_information_model.php';
$page = null;
$page = (isset($_GET['page'])) ? $_GET['page'] : "list";
$title = ucfirst("informasi setiap saat");

$_SESSION['menu_active'] = 9;

switch ($page) {
	case 'list':
		get_header($title);
		
		$query = select();
		$add_button = "any_information.php?page=form";


		include '../views/any_information/list.php';
		get_footer();
	break;
	
	case 'form':
		get_header();

		$close_button = "any_information.php?page=list";

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		if($id){
			$title = ucfirst("Form Edit menu");
			$row = read_id($id);
			$action = "any_information.php?page=edit&id=$id";
			
		} else{
			$title = ucfirst("Form Input menu");
			//inisialisasi
			$row = new stdClass();

			$row->any_information_name = false;
			$row->any_information_status = false;
			$row->any_information_content = false;
			$action = "any_information.php?page=save";
		}

		include '../views/any_information/form.php';
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
			
			create("any_informations", $data);
			
			header('Location: any_information.php?page=list&did=1');

	break;


	case 'edit':

		extract($_POST);
		
		$id = get_isset($_GET['id']);	

		$i_no = get_isset($i_no);
		$i_name = get_isset($i_name);
		$i_content = get_isset($editor);
				
		$data = "any_information_name 		= '$i_no',
				any_information_status  	= '$i_name',
				any_information_content  	= '$i_content'
				";

		update("any_informations", $data, "any_information_id", $id);
		header('Location: any_information.php?page=list&did=2');

		

	break;

	
	
	case 'delete':

		$id = get_isset($_GET['id']);	
	
		delete($id);

		header('Location: any_information.php?page=list&did=3');

	break;
	
	
}

?>