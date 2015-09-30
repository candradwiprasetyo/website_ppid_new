<?php
include '../lib/config.php';
include '../lib/function.php';
include '../models/admission_model.php';
$page = null;
$page = (isset($_GET['page'])) ? $_GET['page'] : "list";
$title = ucfirst("admission");

$_SESSION['menu_active'] = 11;

switch ($page) {
	case 'list':
		get_header($title);
		
		$query = select();
		$add_button = "admission.php?page=form";

		include '../views/admission/list.php';
		get_footer();
	break;
	
	case 'form':
		get_header();

		$close_button = "admission.php?page=list";

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		if($id){
			$title = ucfirst("Form Edit admission");
			$row = read_id($id);
			$action = "admission.php?page=edit&id=$id";
			
		} else{
			$title = ucfirst("Form Input admission");
			//inisialisasi
			$row = new stdClass();
			$row->admission_name = false;
			$row->admission_desc = false;
			$row->admission_img = false;
			$action = "admission.php?page=save";
		}

		include '../views/admission/form.php';
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
					'$image', 
					'$i_name',
					'$i_desc',
					'$date'
			";
			
			create("admissions", $data);
			
			header('Location: admission.php?page=list&did=1');

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
					admission_img 	= '$image',
					admission_name 	= '$i_name',
					admission_desc 	= '$i_desc'
					";
		}else{
				$data = "
					admission_name 	= '$i_name',
					admission_desc 	= '$i_desc'";
			
			
		}
		update("admissions",$data,"admission_id", $id);
		header('Location: admission.php?page=list&did=2');

		

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

		header('Location: admission.php?page=list&did=3');

	break;
	
	
}

?>