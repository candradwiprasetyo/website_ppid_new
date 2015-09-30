<?php
include '../lib/config.php';
include '../lib/function.php';
include '../models/achievement_model.php';
$page = null;
$page = (isset($_GET['page'])) ? $_GET['page'] : "list";
$title = ucfirst("Content");

$_SESSION['menu_active'] = 2;

switch ($page) {
	case 'list':
		get_header($title);
		
		$query = select();
		$add_button = "achievement.php?page=form";

		include '../views/achievement/list.php';
		get_footer();
	break;
	
	case 'form':
		get_header();

		$close_button = "achievement.php?page=list";

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		if($id){
			$title = ucfirst("Form Edit achievement");
			$row = read_id($id);
			$action = "achievement.php?page=edit&id=$id";
			
		} else{
			$title = ucfirst("Form Input achievement");
			//inisialisasi
			$row = new stdClass();
			$row->achievement_name = false;
			$row->achievement_desc = false;
			$row->achievement_img = false;
			$action = "achievement.php?page=save";
		}

		include '../views/achievement/form.php';
		get_footer();
	break;
	
	
	case 'save':
		extract($_POST);

		$i_name = get_isset($i_name);
		$i_desc = get_isset($editor);
		$i_img = get_isset($_FILES['i_img']['name']);
		$path = "../../wp-content/uploads/images/";
		
		$i_img = ($_FILES['i_img']['name']) ? $_FILES['i_img']['name'] : "";
		$i_date = date("Y-m-d-his");
		$date = date("Y-m-d");
		
		if($i_img != ""){
			$image = $i_date."_".$_FILES['i_img']['name'];
			move_uploaded_file($_FILES['i_img']['tmp_name'], $path.$image);
		}else{
			$image = "";
		}
			$data = "'',
					'$i_name',
					'$image', 
					'$i_desc',
					'$date'
			";
			
			create("achievements", $data);
			
			header('Location: achievement.php?page=list&did=1');

	break;
	
	

	case 'edit':

		extract($_POST);
		
		$id = get_isset($_GET['id']);	
		$i_name = get_isset($i_name);
		$i_desc = get_isset($editor);
		
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
					achievement_name 	= '$i_name',
					achievement_img 	= '$image',
					achievement_desc 	= '$i_desc'
					";
		}else{
				$data = "
					achievement_name 	= '$i_name',
					achievement_desc 	= '$i_desc'";
			
			
		}
		update("achievements",$data,"achievement_id", $id);
		header('Location: achievement.php?page=list&did=2');

		

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

		header('Location: achievement.php?page=list&did=3');

	break;
	
	
}

?>