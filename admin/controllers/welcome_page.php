<?php
include '../lib/config.php';
include '../lib/function.php';
include '../models/welcome_page_model.php';
$page = null;
$page = (isset($_GET['page'])) ? $_GET['page'] : "list";
$title = ucfirst("Home");

$_SESSION['menu_active'] = 1;

switch ($page) {
	case 'list':
	
		get_header();

		$row = read_id();
		$action = "welcome_page.php?page=edit";
			
		include '../views/welcome_page/form.php';
		get_footer();
		
	break;

	case 'edit':

		extract($_POST);
		
		$i_desc = get_isset($editor);
		$i_name = get_isset($i_name);
		
		$path = "../../assets/images/";
		
		$i_img = ($_FILES['i_img']['name']) ? $_FILES['i_img']['name'] : "";
		$i_date = date("Y-m-d-his");
		
		if($i_img != ""){
			
			$r_img = get_img($id);
			echo $r_img;
			if($r_img != ""){
				if(file_exists($path.$r_img)){
					unlink($path.$r_img); 
				}
			}
			$image = $i_date."_".$_FILES['i_img']['name'];
			move_uploaded_file($_FILES['i_img']['tmp_name'], $path.$image);
			
				$data = "
					welcome_page_img 		= '$image',
					welcome_page_desc 	= '$i_desc',
					welcome_page_name 	= '$i_name'
					";
		}else{
				$data = "
					welcome_page_desc 	= '$i_desc',
					welcome_page_name 	= '$i_name'";
			
			
		}
		update("home_welcome_pages", $data);
		header('Location: welcome_page.php?page=list&did=2');

		

	break;
	
	
	
	
}

?>