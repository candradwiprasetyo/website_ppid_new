<?php
include '../lib/config.php';
include '../lib/function.php';
include '../models/profile_model.php';
$page = null;
$page = (isset($_GET['page'])) ? $_GET['page'] : "list";

$_SESSION['menu_active'] = 5;

switch ($page) {
	case 'list':

		
		$type_id = $_GET['type_id'];


		get_header();

		$query = select($type_id);
		$add_button = "profile.php?page=form&type_id=$type_id";

		include '../views/profile/list.php';
		get_footer();
	break;
	
	case 'form':
		get_header();

		$type_id = $_GET['type_id'];

		$close_button = "profile.php?type_id=$type_id";

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		if($id){
			$row = read_id($id);
			$action = "profile.php?page=edit&id=$id&type_id=$type_id";
			
		} else{
			//inisialisasi
			$row = new stdClass();

			$row->profile_name = false;
			$row->profile_img = false;
			$row->profile_desc = false;

			$action = "profile.php?page=save&type_id=$type_id";
		}

		include '../views/profile/form.php';
		get_footer();
	break;
	
	
	case 'save':
		extract($_POST);


		$type_id = $_GET['type_id'];


		$i_name = get_isset($i_name);
		$i_desc = get_isset($editor);
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
					'$type_id',
					'$i_name',
					'$image', 
					'$i_desc'
			";
			
			create("profiles", $data);
			
			header("Location: profile.php?page=list&type_id=$type_id&did=1");

	break;
	
	

	case 'edit':

		extract($_POST);


		$type_id = $_GET['type_id'];

		
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
					profile_name	= '$i_name',
					profile_img 	= '$image',
					profile_desc 	= '$i_desc'
					";
		}else{
				$data = "
					profile_name 	= '$i_name',
					profile_desc 	= '$i_desc'";
			
			
		}
		update("profiles",$data,"profile_id", $id);
		header("Location: profile.php?page=list&type_id=$type_id&did=2");

		

	break;
	
	
	case 'delete':

		$id = get_isset($_GET['id']);
		$type_id = $_GET['type_id'];

		
		$r_img = get_img($id);
			echo $r_img;
			if($r_img != ""){
				if(file_exists($r_img)){
					unlink($r_img); 
				}
			}
		
		delete($id);

		header("Location: profile.php?page=list&type_id=$type_id&did=3");

	break;
	
	
}

?>