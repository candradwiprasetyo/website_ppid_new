<?php
include '../lib/config.php';
include '../lib/function.php';
include '../models/school_model.php';
$page = null;
$page = (isset($_GET['page'])) ? $_GET['page'] : "list";
$title = ucfirst("school");

$_SESSION['menu_active'] = 6;

switch ($page) {
	case 'list':
		get_header($title);
		
		$eg_id = $_GET['eg_id'];
		$row_home = read_home_id($eg_id);
		$row_curriculum = read_curriculum_id($eg_id);
		$query_teacher = select_teacher($eg_id);
		$query_facility = select_facility($eg_id);
		$query_gallery = select_gallery($eg_id);
		

		$action_home = "school.php?page=save_home&eg_id=$eg_id";
		$action_curriculum = "school.php?page=save_curriculum&eg_id=$eg_id";
		$add_button_teacher = "school.php?page=form_teacher&eg_id=$eg_id";
		$add_button_facility = "school.php?page=form_facility&eg_id=$eg_id";
		$add_button_gallery = "school.php?page=form_gallery&eg_id=$eg_id";

		include '../views/school/list.php';
		get_footer();
	break;
	
	case 'form_teacher':
		get_header();

		$eg_id = $_GET['eg_id'];

		$close_button = "school.php?eg_id=$eg_id&tab_id=3";

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		if($id){
			$title = ucfirst("Form Edit Teacher");
			$row = read_teacher_id($id);
			$action = "school.php?page=edit_teacher&id=$id&eg_id=$eg_id";
			
		} else{
			$title = ucfirst("Form Input Teacher");
			//inisialisasi
			$row = new stdClass();
			$row->name = false;
			$row->img = false;
			$action = "school.php?page=save_teacher&eg_id=$eg_id";
		}

		include '../views/school/form_teacher.php';
		get_footer();
	break;

	case 'form_facility':
		get_header();

		$eg_id = $_GET['eg_id'];

		$close_button = "school.php?eg_id=$eg_id&tab_id=4";

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		if($id){
			$title = ucfirst("Form Edit Facility");
			$row = read_facility_id($id);
			$action = "school.php?page=edit_facility&id=$id&eg_id=$eg_id";
			
		} else{
			$title = ucfirst("Form Input Facility");
			//inisialisasi
			$row = new stdClass();
			$row->name = false;
			$row->img = false;
			$action = "school.php?page=save_facility&eg_id=$eg_id";
		}

		include '../views/school/form_facility.php';
		get_footer();
	break;
	
	case 'form_gallery':
		get_header();

		$eg_id = $_GET['eg_id'];

		$close_button = "school.php?eg_id=$eg_id&tab_id=5";

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		if($id){
			$title = ucfirst("Form Edit News / Gallery");
			$row = read_gallery_id($id);
			$action = "school.php?page=edit_gallery&id=$id&eg_id=$eg_id";
			
		} else{
			$title = ucfirst("Form Input News / Gallery");
			//inisialisasi
			$row = new stdClass();
			$row->name = false;
			$row->img = false;
			$row->type = 1;
			$row->content = false;
			$action = "school.php?page=save_gallery&eg_id=$eg_id";
		}

		include '../views/school/form_gallery.php';
		get_footer();
	break;
	
	case 'save_home':
		extract($_POST);

		$eg_id = $_GET['eg_id'];

		$i_introduction_name = get_isset($i_introduction_name);
		$i_introduction_content = get_isset($i_introduction_content);
		$i_testimoni_name = get_isset($i_testimoni_name);
		$i_testimoni_content = get_isset($i_testimoni_content);
		$i_program1 = get_isset($i_program1);
		$i_program2 = get_isset($i_program2);
		$i_program3 = get_isset($i_program3);
		$i_program4 = get_isset($i_program4);

		$path = "../../wp-content/uploads/images/";
		
		$i_img1 = ($_FILES['i_img1']['name']) ? $_FILES['i_img1']['name'] : "";
		$i_img2 = ($_FILES['i_img2']['name']) ? $_FILES['i_img2']['name'] : "";
		$i_img3 = ($_FILES['i_img3']['name']) ? $_FILES['i_img3']['name'] : "";
		$i_img4 = ($_FILES['i_img4']['name']) ? $_FILES['i_img4']['name'] : "";
		$i_testimoni_img = ($_FILES['i_testimoni_img']['name']) ? $_FILES['i_testimoni_img']['name'] : "";

		$i_date = date("Y-m-d-his");
		$date = date("Y-m-d");

		
		if($i_img1 != ""){
			
			$r_img = get_img($eg_id, "img1");
			
			if($r_img != ""){
				if(file_exists($path.$r_img)){
					unlink($path.$r_img); 
				}
			}

			$image = $i_date."_".$_FILES['i_img1']['name'];
			move_uploaded_file($_FILES['i_img1']['tmp_name'], $path.$image);
			
			$data = "img1 	= '$image'";
			update("education_grade_home", $data,"eg_id", $eg_id);
			
		}

		if($i_img2 != ""){
			
			$r_img = get_img($eg_id, "img2");
			
			if($r_img != ""){
				if(file_exists($path.$r_img)){
					unlink($path.$r_img); 
				}
			}

			$image = $i_date."_".$_FILES['i_img2']['name'];
			move_uploaded_file($_FILES['i_img2']['tmp_name'], $path.$image);
			
			$data = "img2 	= '$image'";
			update("education_grade_home", $data,"eg_id", $eg_id);
			
		}

		if($i_img3 != ""){
			
			$r_img = get_img($eg_id, "img3");
			
			if($r_img != ""){
				if(file_exists($path.$r_img)){
					unlink($path.$r_img); 
				}
			}

			$image = $i_date."_".$_FILES['i_img3']['name'];
			move_uploaded_file($_FILES['i_img3']['tmp_name'], $path.$image);
			
			$data = "img3 	= '$image'";
			update("education_grade_home", $data,"eg_id", $eg_id);
			
		}

		if($i_img4 != ""){
			
			$r_img = get_img($eg_id, "img4");
			
			if($r_img != ""){
				if(file_exists($path.$r_img)){
					unlink($path.$r_img); 
				}
			}

			$image = $i_date."_".$_FILES['i_img4']['name'];
			move_uploaded_file($_FILES['i_img4']['tmp_name'], $path.$image);
			
			$data = "img4 	= '$image'";
			update("education_grade_home", $data,"eg_id", $eg_id);
			
		}

		if($i_testimoni_img != ""){
			
			$r_img = get_img($eg_id, "testimoni_img");
			
			if($r_img != ""){
				if(file_exists($path.$r_img)){
					unlink($path.$r_img); 
				}
			}

			$image = $i_date."_".$_FILES['i_testimoni_img']['name'];
			move_uploaded_file($_FILES['i_testimoni_img']['tmp_name'], $path.$image);
			
			$data = "testimoni_img 	= '$image'";
			update("education_grade_home", $data,"eg_id", $eg_id);
			
		}

		$data = "
					introduction_name 		= '$i_introduction_name',
					introduction_content 	= '$i_introduction_content',
					testimoni_content 		= '$i_testimoni_content',
					testimoni_name 			= '$i_testimoni_name',
					program1 				= '$i_program1',
					program2 				= '$i_program2',
					program3 				= '$i_program3',
					program4 				= '$i_program4'
				";
		update("education_grade_home", $data,"eg_id", $eg_id);
			
		header("Location: school.php?page=list&did=1&eg_id=$eg_id");
		

	break;
	
	

	case 'save_curriculum':

		extract($_POST);
		
		$i_content = get_isset($editor);

		$eg_id = $_GET['eg_id'];
		
		
		$data = "
					content 	= '$i_content'
				";
			
		
		update("education_grade_curriculum", $data, "eg_id", $eg_id);
		header("Location: school.php?page=list&did=2&tab_id=2&eg_id=$eg_id");

		

	break;

	case 'save_teacher':
		extract($_POST);

		$eg_id = $_GET['eg_id'];

		$i_name = get_isset($i_name);
		$i_img = get_isset($_FILES['i_img']['name']);
		$path = "../../wp-content/uploads/images/teachers/";
		
		$i_img = ($_FILES['i_img']['name']) ? $_FILES['i_img']['name'] : "";
		$i_date = date("Y-m-d-his");
		$date = date("Y-m-d");
		
		if($i_img != ""){
			$image = $i_date."_".$_FILES['i_img']['name'];
			move_uploaded_file($_FILES['i_img']['tmp_name'], $path.$image);
		}else{
			$image = "";
		}

		switch ($eg_id) {
			case '1': $egm_id = '3';  break;
			case '2': $egm_id = '9';  break;
			case '3': $egm_id = '15';  break;
			case '4': $egm_id = '21';  break;
		}
			$data = "'',
					'$egm_id',
					'$i_name',
					'$image'
			";
			
			create("education_grade_teachers", $data);
			
			header("Location: school.php?page=list&did=1&tab_id=3&eg_id=$eg_id");

	break;

	case 'save_facility':
		extract($_POST);

		$eg_id = $_GET['eg_id'];

		$i_name = get_isset($i_name);
		$i_img = get_isset($_FILES['i_img']['name']);
		$path = "../../wp-content/uploads/images/facilities/";
		
		$i_img = ($_FILES['i_img']['name']) ? $_FILES['i_img']['name'] : "";
		$i_date = date("Y-m-d-his");
		$date = date("Y-m-d");
		
		if($i_img != ""){
			$image = $i_date."_".$_FILES['i_img']['name'];
			move_uploaded_file($_FILES['i_img']['tmp_name'], $path.$image);
		}else{
			$image = "";
		}

		switch ($eg_id) {
			case '1': $egm_id = '4';  break;
			case '2': $egm_id = '10';  break;
			case '3': $egm_id = '16';  break;
			case '4': $egm_id = '22';  break;
		}
			$data = "'',
					'$egm_id',
					'$i_name',
					'$image'
			";
			
			create("education_grade_facilities", $data);
			
			header("Location: school.php?page=list&did=1&tab_id=4&eg_id=$eg_id");

	break;

	case 'save_gallery':
		extract($_POST);

		$eg_id = $_GET['eg_id'];

		$i_name = get_isset($i_name);
		$i_type = get_isset($i_type);
		$i_content = get_isset($editor);
		$i_img = get_isset($_FILES['i_img']['name']);
		$path = "../../wp-content/uploads/images/gallery/";
		
		$i_img = ($_FILES['i_img']['name']) ? $_FILES['i_img']['name'] : "";
		$i_date = date("Y-m-d-his");
		$date = date("Y-m-d");
		
		if($i_img != ""){
			$image = $i_date."_".$_FILES['i_img']['name'];
			move_uploaded_file($_FILES['i_img']['tmp_name'], $path.$image);
		}else{
			$image = "";
		}

		switch ($eg_id) {
			case '1': $egm_id = '6';  break;
			case '2': $egm_id = '12';  break;
			case '3': $egm_id = '18';  break;
			case '4': $egm_id = '24';  break;
		}
			$data = "'',
					'$egm_id',
					'$i_name',
					'$image',
					'$i_content',
					'$date',
					'$i_type'
			";
			
			create("education_grade_galleries", $data);
			
			header("Location: school.php?page=list&did=1&tab_id=5&eg_id=$eg_id");

	break;

	case 'edit_teacher':

		extract($_POST);
		
		$id = get_isset($_GET['id']);	
		$eg_id = $_GET['eg_id'];

		$i_name = get_isset($i_name);
		
		$path = "../../wp-content/uploads/images/teachers/";
		
		$i_img = ($_FILES['i_img']['name']) ? $_FILES['i_img']['name'] : "";
		$i_date = date("Y-m-d-his");
		
		

		if($i_img != ""){
			
			$r_img = get_img_teacher($id);
			
			if($r_img != ""){
				if(file_exists($path.$r_img)){
					unlink($path.$r_img); 
				}
			}
			$image = $i_date."_".$_FILES['i_img']['name'];
			move_uploaded_file($_FILES['i_img']['tmp_name'], $path.$image);
			
				$data = "
					name 	= '$i_name',
					img 	= '$image'
					";
		}else{
				$data = "
					name 	= '$i_name'
				";
			
			
		}
		update("education_grade_teachers", $data,"egt_id", $id);
		header("Location: school.php?page=list&did=1&tab_id=3&eg_id=$eg_id");

		

	break;

	case 'edit_facility':

		extract($_POST);
		
		$id = get_isset($_GET['id']);	
		$eg_id = $_GET['eg_id'];

		$i_name = get_isset($i_name);
		
		$path = "../../wp-content/uploads/images/facilities/";
		
		$i_img = ($_FILES['i_img']['name']) ? $_FILES['i_img']['name'] : "";
		$i_date = date("Y-m-d-his");
		
		

		if($i_img != ""){
			
			$r_img = get_img_facility($id);
			
			if($r_img != ""){
				if(file_exists($path.$r_img)){
					unlink($path.$r_img); 
				}
			}
			$image = $i_date."_".$_FILES['i_img']['name'];
			move_uploaded_file($_FILES['i_img']['tmp_name'], $path.$image);
			
				$data = "
					name 	= '$i_name',
					img 	= '$image'
					";
		}else{
				$data = "
					name 	= '$i_name'
				";
			
			
		}
		update("education_grade_facilities", $data,"egf_id", $id);
		header("Location: school.php?page=list&did=1&tab_id=4&eg_id=$eg_id");

		

	break;

	case 'edit_gallery':

		extract($_POST);
		
		$id = get_isset($_GET['id']);	
		$eg_id = $_GET['eg_id'];

		$i_name = get_isset($i_name);
		$i_type = get_isset($i_type);
		$i_content = get_isset($editor);
		
		$path = "../../wp-content/uploads/images/gallery/";
		
		$i_img = ($_FILES['i_img']['name']) ? $_FILES['i_img']['name'] : "";
		$i_date = date("Y-m-d-his");

		if($i_img != ""){
			
			$r_img = get_img_gallery($id);
			
			if($r_img != ""){
				if(file_exists($path.$r_img)){
					unlink($path.$r_img); 
				}
			}
			$image = $i_date."_".$_FILES['i_img']['name'];
			move_uploaded_file($_FILES['i_img']['tmp_name'], $path.$image);
			
				$data = "
					name 	= '$i_name',
					img 	= '$image',
					content = '$i_content',
					type 	= '$i_type'
					";
		}else{
				$data = "
					name 	= '$i_name',
					content = '$i_content',
					type 	= '$i_type'
				";
		}
		update("education_grade_galleries", $data,"egg_id", $id);
		header("Location: school.php?page=list&did=1&tab_id=5&eg_id=$eg_id");

	break;
	
	
	case 'delete_teacher':

		$id = get_isset($_GET['id']);	
		$eg_id = $_GET['eg_id'];

		$path = "../../wp-content/uploads/images/teachers/";

		$r_img = get_img_teacher($id);
			echo $r_img;
			if($r_img != ""){
				if(file_exists($path.$r_img)){
					unlink($path.$r_img); 
				}
			}
		
		delete("education_grade_teachers", "egt_id", $id);

		header("Location: school.php?page=list&did=3&tab_id=3&eg_id=$eg_id");

	break;

	case 'delete_facility':

		$id = get_isset($_GET['id']);	
		$eg_id = $_GET['eg_id'];

		$path = "../../wp-content/uploads/images/facilties/";

		$r_img = get_img_facility($id);
			echo $r_img;
			if($r_img != ""){
				if(file_exists($path.$r_img)){
					unlink($path.$r_img); 
				}
			}
		
		delete("education_grade_facilities", "egf_id", $id);

		header("Location: school.php?page=list&did=3&tab_id=4&eg_id=$eg_id");

	break;

	case 'delete_gallery':

		$id = get_isset($_GET['id']);	
		$eg_id = $_GET['eg_id'];

		$path = "../../wp-content/uploads/images/gallery/";

		$r_img = get_img_gallery($id);
			echo $r_img;
			if($r_img != ""){
				if(file_exists($path.$r_img)){
					unlink($path.$r_img); 
				}
			}
		
		delete("education_grade_galleries", "egg_id", $id);

		header("Location: school.php?page=list&did=3&tab_id=5&eg_id=$eg_id");

	break;
	
	
}

?>