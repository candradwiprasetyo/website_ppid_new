<?php
include '../lib/config.php';
include '../lib/function.php';
include '../models/academic_model.php';
$page = null;
$page = (isset($_GET['page'])) ? $_GET['page'] : "list";
$title = ucfirst("academic");

$_SESSION['menu_active'] = 7;

switch ($page) {
	case 'list':
		get_header($title);
		
		$query = select();
		$add_button = "academic.php?page=form";


		include '../views/academic/list.php';
		get_footer();
	break;
	
	case 'form':
		get_header();

		$close_button = "academic.php?page=list";

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		if($id){
			$title = ucfirst("Form Edit academic");
			$row = read_id($id);
			$action = "academic.php?page=edit&id=$id";
			
		} else{
			$title = ucfirst("Form Input academic");
			//inisialisasi
			$row = new stdClass();

			$row->academic_name = false;
			$row->academic_desc = false;
			$row->academic_color = false;
			$action = "academic.php?page=save";
		}

		include '../views/academic/form.php';
		get_footer();
	break;
	
	
	case 'save':
		extract($_POST);

		$i_name = get_isset($i_name);
		$i_desc = get_isset($i_desc);
		$i_color = get_isset($i_color);
		
		
			$data = "'',
					'$i_name', 
					'$i_desc',
					'$i_color'
			";
			
			create("academics", $data);
			
			header('Location: academic.php?page=list&did=1');

	break;
	
	

	case 'edit':

		extract($_POST);
		
		$id = get_isset($_GET['id']);	
		$i_name = get_isset($i_name);
		$i_desc = get_isset($i_desc);
		$i_color = get_isset($i_color);
		
	
		$data = "academic_name 		= '$i_name',
				academic_desc 		= '$i_desc',
				academic_color  	= '$i_color'
				";

		update("academics", $data, "academic_id", $id);
		header('Location: academic.php?page=list&did=2');

		

	break;
	
	
	case 'delete':

		$id = get_isset($_GET['id']);	
	
		delete($id);

		header('Location: academic.php?page=list&did=3');

	break;
	
	
}

?>