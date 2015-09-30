<?php
include '../lib/config.php';
include '../lib/function.php';
include '../models/parents_corner_model.php';
$page = null;
$page = (isset($_GET['page'])) ? $_GET['page'] : "list";
$title = ucfirst("parents corner");

$_SESSION['menu_active'] = 12;

switch ($page) {
	case 'list':
		get_header($title);
		
		$query = select();
		$add_button = "parents_corner.php?page=form";

		include '../views/parents_corner/list.php';
		get_footer();
	break;
	
	case 'form':
		get_header();

		$close_button = "parents_corner.php?page=list";

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		if($id){
			$title = ucfirst("Form Edit parents corner");
			$row = read_id($id);
			$action = "parents_corner.php?page=edit&id=$id";
			
		} else{
			$title = ucfirst("Form Input parents corner");
			//inisialisasi
			$row = new stdClass();
			$row->parents_corner_name = false;
			$row->parents_corner_name2 = false;
			$row->parents_corner_desc = false;
			$row->parents_corner_img = false;
			$action = "parents_corner.php?page=save";
		}

		include '../views/parents_corner/form.php';
		get_footer();
	break;
	
	
	case 'save':
		extract($_POST);

		$i_name = get_isset($i_name);
		$i_name2 = get_isset($i_name2);
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
					'$image', 
					'$i_name',
					'$i_name2',
					'$i_desc',
					'$date'
			";
			
			create("parents_corners", $data);
			
			header('Location: parents_corner.php?page=list&did=1');

	break;
	
	

	case 'edit':

		extract($_POST);
		
		$id = get_isset($_GET['id']);	
		$i_name = get_isset($i_name);
		$i_name2 = get_isset($i_name2);
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
					parents_corner_img 	= '$image',
					parents_corner_name 	= '$i_name',
					parents_corner_name2 	= '$i_name2',
					parents_corner_desc 	= '$i_desc'
					";
		}else{
				$data = "
					parents_corner_name 	= '$i_name',
					parents_corner_name2 	= '$i_name2',
					parents_corner_desc 	= '$i_desc'";
			
			
		}
		update("parents_corners",$data,"parents_corner_id", $id);
		header('Location: parents_corner.php?page=list&did=2');

		

	break;
	
	
	case 'delete':

		$id = get_isset($_GET['id']);	
		
		$path = "../../wp-content/uploads/images/";
		
		$r_img = get_img($id);
			echo $r_img;
			if($r_img != ""){
				if(file_exists($path.$r_img)){
					unlink($path.$r_img); 
				}
			}
		
		delete($id);

		header('Location: parents_corner.php?page=list&did=3');

	break;
	
	
}

?>