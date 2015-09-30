<?php
include '../lib/config.php';
include '../lib/function.php';
include '../models/manual_page_model.php';
$page = null;
$page = (isset($_GET['page'])) ? $_GET['page'] : "list";
$title = ucfirst("Manual Page");

if($_GET['id'] == 1){
	$_SESSION['menu_active'] = 2;
}else{
	$_SESSION['menu_active'] = 4;
}
switch ($page) {
	case 'list':
		
		
		get_header();

		$id = $_GET['id'];
		
		$row = read_id($id);
		$action = "manual_page.php?page=edit&id=$id";
			
		include '../views/manual_page/form.php';
		get_footer();
		
	break;

	case 'edit':
	
		$id = $_GET['id'];

		extract($_POST);
		
		$i_desc = get_isset($editor);
		$i_title = get_isset($i_title);
		
		
		
		
			$data = "
					page_title 	= '$i_title',
					page_desc = '$i_desc'";
			
		echo $i_desc;	
		
		update("manual_pages", $data, "page_id", $id);
		header("Location: manual_page.php?page=list&id=$id&did=2");

		

	break;
	
	
	
	
}

?>