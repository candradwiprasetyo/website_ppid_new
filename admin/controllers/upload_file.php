<?php
include '../lib/config.php';
include '../lib/function.php';
include '../models/upload_file_model.php';
$page = null;
$page = (isset($_GET['page'])) ? $_GET['page'] : "list";
$title = ucfirst("Upload File");

$_SESSION['menu_active'] = 6;

switch ($page) {
	case 'list':
		get_header($title);
		
		$query = select();
		$add_button = "upload_file.php?page=form";

		include '../views/upload_file/list.php';
		get_footer();
	break;
	
	case 'form':
		get_header();

		$close_button = "upload_file.php?page=list";

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		if($id){
			$title = ucfirst("Form Edit upload file");
			$row = read_id($id);
			$action = "upload_file.php?page=edit&id=$id";
			
		} else{
			$title = ucfirst("Form Input upload file");
			//inisialisasi
			$row = new stdClass();
			$row->img = false;
			$row->type = 1;
			$action = "upload_file.php?page=save";
		}

		include '../views/upload_file/form.php';
		get_footer();
	break;
	
	
	case 'save':
		extract($_POST);

		$i_type = get_isset($i_type);
		$i_img = get_isset($_FILES['i_img']['name']);
		$path = "../../assets/images/upload/";
		
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
					'$i_type'
			";
			
			create("upload_files", $data);
			
			header('Location: upload_file.php?page=list&did=1');

	break;
	
	

	case 'edit':

		extract($_POST);
		
		$id = get_isset($_GET['id']);	
		$i_type = get_isset($i_type);
		
		$path = "../../assets/images/upload/";
		
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
					img 	= '$image',
					type 	= '$i_type'
					";
		}else{
				$data = "
					type 	= '$i_type'
					";
			
			
		}
		update("upload_files",$data,"id", $id);
		header('Location: upload_file.php?page=list&did=2');

		

	break;
	
	
	case 'delete':

		$id = get_isset($_GET['id']);	
		
		$path = "../../assets/images/upload/";

		$r_img = get_img($id);
			echo $r_img;
			if($r_img != ""){
				if(file_exists($path.$r_img)){
					unlink($path.$r_img); 
				}
			}
		
		delete($id);

		header('Location: upload_file.php?page=list&did=3');

	break;
	
	
}

?>