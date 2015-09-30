<?php
include '../lib/config.php';
include '../lib/function.php';
include '../models/slider_model.php';
$page = null;
$page = (isset($_GET['page'])) ? $_GET['page'] : "list";
$title = ucfirst("Slider");

$_SESSION['menu_active'] = 2;

switch ($page) {
	case 'list':
		get_header($title);
		
		$query = select();
		$add_button = "slider.php?page=form";


		include '../views/slider/list.php';
		get_footer();
	break;
	
	case 'form':
		get_header();

		$close_button = "slider.php?page=list";

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		if($id){
			$title = ucfirst("Form Edit Slider");
			$row = read_id($id);
			$action = "slider.php?page=edit&id=$id";
			
		} else{
			$title = ucfirst("Form Input Slider");
			//inisialisasi
			$row = new stdClass();

			$row->slider_name = false;
			$row->slider_desc = false;
			$row->slider_img = false;
			$action = "slider.php?page=save";
		}

		include '../views/slider/form.php';
		get_footer();
	break;
	
	case 'save':
		extract($_POST);

		$i_name = get_isset($i_name);
		$i_desc = get_isset($i_desc);
		$i_img = get_isset($_FILES['i_img']['name']);

		$path = "../../assets/images/slider/";
		
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
					'$i_name', 
					'$i_desc'
			";
			
			create("sliders", $data);
			
			header('Location: slider.php?page=list&did=1');

	break;

	case 'edit':

		extract($_POST);
		
		$id = get_isset($_GET['id']);	
		$i_desc = get_isset($i_desc);
		
		$path = "../../assets/images/slider/";
		
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
					slider_img 		= '$image',
					slider_name 		= '$i_name',
					slider_desc 	= '$i_desc'
					";
		}else{
				$data = "
					slider_name 		= '$i_name',
					slider_desc 	= '$i_desc'";
			
			
		}
		update("sliders",$data,"slider_id", $id);
		header('Location: slider.php?page=list&did=2');

	break;	
	
	case 'delete':

		$id = get_isset($_GET['id']);	

		$path = "../../assets/images/slider/";
		
		$r_img = get_img($id);
			echo $r_img;
			if($r_img != ""){
				if(file_exists($path.$r_img)){
					unlink($path.$r_img); 
				}
			}
		
		delete($id);

		header('Location: slider.php?page=list&did=3');

	break;
	
	
}

?>