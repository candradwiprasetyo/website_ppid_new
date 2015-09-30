<?php
include '../lib/config.php';
include '../lib/function.php';
include '../models/education_grade_model.php';
$page = null;
$page = (isset($_GET['page'])) ? $_GET['page'] : "list";
$title = ucfirst("education_grade");

$_SESSION['menu_active'] = 6;

switch ($page) {
	case 'list':
		get_header($title);
		
		$query = select();
		$add_button = "education_grade.php?page=form";

		include '../views/education_grade/list.php';
		get_footer();
	break;
	
	case 'form':
		get_header();

		$close_button = "education_grade.php?page=list";

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		if($id){
			$title = ucfirst("Form Edit education_grade");
			$row = read_id($id);
			$action = "education_grade.php?page=edit&id=$id";
			
		}

		include '../views/education_grade/form.php';
		get_footer();
	break;
	
	

	case 'edit':

		extract($_POST);
		
		$id = get_isset($_GET['id']);	
		$i_name = get_isset($i_name);
		
		$path = "../../wp-content/uploads/images/education_grade/";
		
		$i_header_img = ($_FILES['i_header_img']['name']) ? $_FILES['i_header_img']['name'] : "";
		$i_footer_img = ($_FILES['i_footer_img']['name']) ? $_FILES['i_footer_img']['name'] : "";
		$i_date = date("Y-m-d-his");
		
		if($i_header_img != ""){
			
			$r_header_img = get_header_img($id);
		
			if($r_header_img != ""){
				if(file_exists($path.$r_header_img)){
					unlink($path.$r_header_img); 
				}
			}
			$image = $i_date."_".$_FILES['i_header_img']['name'];
			move_uploaded_file($_FILES['i_header_img']['tmp_name'], $path.$image);
			
			$data = "eg_header_img 	= '$image'
						";
			update("education_grades", $data,"eg_id", $id);
		
		}

		if($i_footer_img != ""){
			
			$r_footer_img = get_footer_img($id);
		
			if($r_footer_img != ""){
				if(file_exists($path.$r_footer_img)){
					unlink($path.$r_footer_img); 
				}
			}
			$image = $i_date."_".$_FILES['i_footer_img']['name'];
			move_uploaded_file($_FILES['i_footer_img']['tmp_name'], $path.$image);
			
			$data = "eg_footer_img 	= '$image'
						";
			update("education_grades", $data,"eg_id", $id);
		
		}

		$data = "eg_name = '$i_name'";
		update("education_grades", $data,"eg_id", $id);

		header('Location: education_grade.php?page=list&did=2');

		

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

		header('Location: education_grade.php?page=list&did=3');

	break;
	
	
}

?>