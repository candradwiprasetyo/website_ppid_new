<?php
include '../lib/config.php';
include '../lib/function.php';
include '../models/partnership_model.php';
$page = null;
$page = (isset($_GET['page'])) ? $_GET['page'] : "list";
$title = ucfirst("partnership");

$_SESSION['menu_active'] = 1;

switch ($page) {
	case 'list':
		get_header($title);
		
		$query = select();
		$add_button = "partnership.php?page=form";

		include '../views/partnership/list.php';
		get_footer();
	break;
	
	case 'form':
		get_header();

		$close_button = "partnership.php?page=list";

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		if($id){
			$title = ucfirst("Form Edit Partnership");
			$row = read_id($id);
			$action = "partnership.php?page=edit&id=$id";
			
		} else{
			$title = ucfirst("Form Input Partnership");
			//inisialisasi
			$row = new stdClass();

			$row->partnership_desc = false;
			$row->partnership_img = false;
			$action = "partnership.php?page=save";
		}

		include '../views/partnership/form.php';
		get_footer();
	break;
	
	
	case 'save':
		extract($_POST);

		$i_desc = get_isset($i_desc);
		$i_img = get_isset($_FILES['i_img']['name']);
		$path = "../../wp-content/uploads/images/";
		
		$i_img = ($_FILES['i_img']['name']) ? $_FILES['i_img']['name'] : "";
		$i_date = date("Y-m-d-his");
		
		if($i_img != ""){
			$image = $i_date."_".$_FILES['i_img']['name'];
			move_uploaded_file($_FILES['i_img']['tmp_name'], $path.$image);
		}else{
			$image = "";
		}
			$data = "'',
					'$image', 
					'$i_desc'
			";
			
			create("home_partnerships", $data);
			
			header('Location: partnership.php?page=list&did=1');

	break;
	
	

	case 'edit':

		extract($_POST);
		
		$id = get_isset($_GET['id']);	
		$i_desc = get_isset($i_desc);
		
		$path = "../../wp-content/uploads/images/";
		
		$i_img = ($_FILES['i_img']['name']) ? $_FILES['i_img']['name'] : "";
		$i_date = date("Y-m-d-his");
		
		if($i_img != ""){
			
			$r_img = get_img($id);
			echo $r_img;
			if($r_img != ""){
				if(file_exists($r_img)){
					unlink($r_img); 
				}
			}
			$image = $i_date."_".$_FILES['i_img']['name'];
			move_uploaded_file($_FILES['i_img']['tmp_name'], $path.$image);
			
				$data = "
					partnership_img 		= '$image',
					partnership_desc 	= '$i_desc'
					";
		}else{
				$data = "
					partnership_desc 	= '$i_desc'";
			
			
		}
		update("home_partnerships",$data,"partnership_id", $id);
		header('Location: partnership.php?page=list&did=2');

		

	break;
	
	
	case 'delete':

		$id = get_isset($_GET['id']);	
		
		$r_img = get_img($id);
			echo $r_img;
			if($r_img != ""){
				if(file_exists($r_img)){
					unlink($r_img); 
				}
			}
		
		delete($id);

		header('Location: partnership.php?page=list&did=3');

	break;
	
	
}

?>