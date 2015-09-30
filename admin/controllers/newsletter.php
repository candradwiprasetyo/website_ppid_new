<?php
include '../lib/config.php';
include '../lib/function.php';
include '../models/newsletter_model.php';
$page = null;
$page = (isset($_GET['page'])) ? $_GET['page'] : "list";
$title = ucfirst("newsletter");

$_SESSION['menu_active'] = 6;

switch ($page) {
	case 'list':
		get_header($title);
		
		$query = select();
		$add_button = "newsletter.php?page=form";

		include '../views/newsletter/list.php';
		get_footer();
	break;
	
	case 'form':
		get_header();

		$close_button = "newsletter.php?page=list";

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		if($id){
			$title = ucfirst("Form Edit newsletter");
			$row = read_id($id);
			$action = "newsletter.php?page=edit&id=$id";
			
		} else{
			$title = ucfirst("Form Input newsletter");
			//inisialisasi
			$row = new stdClass();
			$row->newsletter_name = false;
			$row->newsletter_img = false;
			$action = "newsletter.php?page=save";
		}

		include '../views/newsletter/form.php';
		get_footer();
	break;
	
	
	case 'save':
		extract($_POST);

		$i_name = get_isset($i_name);
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
					'$date'
			";
			
			create("newsletters", $data);
			
			header('Location: newsletter.php?page=list&did=1');

	break;
	
	

	case 'edit':

		extract($_POST);
		
		$id = get_isset($_GET['id']);	
		$i_name = get_isset($i_name);
		
		$path = "../../wp-content/uploads/images/";
		
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
					newsletter_name 	= '$i_name',
					newsletter_img 	= '$image'
					";
		}else{
				$data = "
					newsletter_name 	= '$i_name'
					";
			
			
		}
		update("newsletters",$data,"newsletter_id", $id);
		header('Location: newsletter.php?page=list&did=2');

		

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

		header('Location: newsletter.php?page=list&did=3');

	break;
	
	
}

?>