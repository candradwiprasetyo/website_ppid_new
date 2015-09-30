<?php
include '../lib/config.php';
include '../lib/function.php';
include '../models/menu_model.php';
$page = null;
$page = (isset($_GET['page'])) ? $_GET['page'] : "list";
$title = ucfirst("content");

$_SESSION['menu_active'] = 3;

switch ($page) {
	case 'list':
		get_header($title);
		
		$query = select();
		$add_button = "menu.php?page=form";


		include '../views/menu/list.php';
		get_footer();
	break;

	case 'form_fix':
	get_header();

		$close_button = "menu.php?page=list";

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		if($id){
			$title = ucfirst("Form Edit menu");
			$row = read_id($id);
			$action = "menu.php?page=edit_fix&id=$id";
			
		} 

		include '../views/menu/form_fix.php';
		get_footer();
	break;
	
	case 'form':
		get_header();

		$close_button = "menu.php?page=list";

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		if($id){
			$title = ucfirst("Form Edit menu");
			$row = read_id($id);
			$action = "menu.php?page=edit&id=$id";
			
		} else{
			$title = ucfirst("Form Input menu");
			//inisialisasi
			$row = new stdClass();

			$row->menu_name = false;
			$row->menu_type = false;
			$row->menu_content = false;
			$action = "menu.php?page=save";
		}

		include '../views/menu/form.php';
		get_footer();
	break;

	case 'form_sub':
		get_header();

		$close_button = "menu.php?page=list";

		$menu_parent_id = (isset($_GET['menu_parent_id'])) ? $_GET['menu_parent_id'] : null;

			$title = ucfirst("Form Input sub menu");
			//inisialisasi
			$row = new stdClass();

			$row->menu_name = false;
			$row->menu_type = false;
			$row->menu_content = false;
			$action = "menu.php?page=save_sub&menu_parent_id=$menu_parent_id";
		

		include '../views/menu/form_sub.php';
		get_footer();
	break;
	
	
	case 'save':
		extract($_POST);

		$i_name = get_isset($i_name);
		$i_content = get_isset($editor);
		
			$data = "'',
					'0',
					'1',
					'$i_name',
					'"."?page_content="."$i_name', 
					'$i_type',
					'2',
					'$i_content',
					'1'
			";
			
			create("menus", $data);
			
			header('Location: menu.php?page=list&did=1');

	break;

	case 'save_sub':
		$menu_parent_id = (isset($_GET['menu_parent_id'])) ? $_GET['menu_parent_id'] : null;

		extract($_POST);

		$i_name = get_isset($i_name);
		$i_type = get_isset($i_type);
		$i_content = get_isset($editor);
		
			$data = "'',
					'$menu_parent_id',
					'2',
					'$i_name',
					'"."?page_content="."$i_name', 
					'2',
					'2',
					'$i_content',
					'1'
			";
			
			create("menus", $data);
			
			header('Location: menu.php?page=list&did=1');

	break;
	
	

	case 'edit':

		extract($_POST);
		
		$id = get_isset($_GET['id']);	

		$i_name = get_isset($i_name);
		//$i_type = get_isset($i_type);
		$i_content = get_isset($editor);
				
	
		$data = "menu_name 		= '$i_name',
				menu_content  	= '$i_content'
				";

		update("menus", $data, "menu_id", $id);
		header('Location: menu.php?page=list&did=2');

		

	break;

	case 'edit_fix':

		extract($_POST);
		
		$id = get_isset($_GET['id']);	

		$i_name = get_isset($i_name);
				
	
		$data = "menu_name 		= '$i_name'
				";

		update("menus", $data, "menu_id", $id);
		header('Location: menu.php?page=list&did=2');

		

	break;
	
	
	case 'delete':

		$id = get_isset($_GET['id']);	
	
		delete($id);

		header('Location: menu.php?page=list&did=3');

	break;
	
	
}

?>