<?php
include '../lib/config.php';
include '../lib/function.php';
include '../models/farmer_model.php';
$page = null;
$page = (isset($_GET['page'])) ? $_GET['page'] : "list";
$title = ucfirst("Data Petani");

$_SESSION['menu_active'] = 2;

switch ($page) {
	case 'list':
		get_header($title);
		
		$query = select();
		$add_button = "farmer.php?page=form";


		include '../views/farmer/list.php';
		get_footer();
	break;
	
	case 'form':
		get_header();

		$close_button = "farmer.php?page=list";

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		if($id){
			$title = ucfirst("Form Edit Petani");
			$row = read_id($id);
			$action = "farmer.php?page=edit&id=$id";
			
		} else{
			$title = ucfirst("Form Input Petani");
			//inisialisasi
			$row = new stdClass();

			$row->farmer_contract_code = false;
			$row->farmer_name = false;
			$row->farmer_address = false;
			$row->farmer_identity_number = false;
			$row->farmer_login = false;
			$row->farmer_identity_img = false;

			$action = "farmer.php?page=save";
		}

		include '../views/farmer/form.php';
		get_footer();
	break;
	
	case 'form_farmer':
		get_header();
		
		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		$f_id = (isset($_GET['f_id'])) ? $_GET['f_id'] : null;
		
		$close_button = "farmer.php?page=form&id=$id";

		
		if($f_id){
			$title = ucfirst("Form Edit Tanah Petani");

			$row = read_farmer_land_id($f_id);
		
			$action = "farmer.php?page=edit_land&id=$id&f_id=$f_id";
		} else{
			$title = ucfirst("Form Input Tanah Petani");

			//inisialisasi
			$row = new stdClass();
			
			$row->farmer_id = false;
			$row->land_id = false;
			$row->farmer_land_area 	 = 0;
		
			$action = "farmer.php?page=save_land&id=$id";
		}

		include '../views/farmer/form_land.php';
		get_footer();
	break;

	case 'save':
		extract($_POST);

		$i_code = get_isset($i_code);
		$i_name = get_isset($i_name);
		$i_no_ktp = get_isset($i_no_ktp);
		$i_alamat = get_isset($i_alamat);
		$i_img = get_isset($_FILES['i_img']['name']);
		$path = "../img/farmer/";
		
		$i_img = ($_FILES['i_img']['name']) ? $_FILES['i_img']['name'] : "";
		$i_date = date("Y-m-d-his");
		
		if($i_img != ""){
			$image = $path.$i_date."_".$_FILES['i_img']['name'];
			move_uploaded_file($_FILES['i_img']['tmp_name'], $image);
		}else{
			$image = "";
		}
			$data = "'',
					'$i_code', 
					'$i_name',
					'$i_alamat', 
					'$i_no_ktp',
					'$image'
			";
			
			create("farmers",$data);
			
			header('Location: farmer.php?page=list&did=1');

	break;
	
	case 'save_land':
	
		extract($_POST);

		$i_land_id = get_isset($i_land_id);
		$i_luas = get_isset($i_luas);
		
		
		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		
		$validasi = select_farmer($id,$i_land_id);
		
		if(mysql_num_rows($validasi)>0){
			
			header("Location: farmer.php?page=form_farmer&did=2&id=$id");
		}else{
		
		$data = "'',
				'$i_land_id',
				'$id',
				'$i_luas'
			";
			//echo $data;
		//$update = 	"land_area = land_area  + ".$i_luas."";
		create("farmer_lands", $data);
		//update("lands", $update,"land_id",$id);
		
		header("Location: farmer.php?page=form&did=2&id=$id");
		}
		
	break;

	case 'edit':

		extract($_POST);
		
		$id = get_isset($_GET['id']);	
		$i_code = get_isset($i_code);
		$i_name = get_isset($i_name);
		$i_no_ktp = get_isset($i_no_ktp);
		$i_alamat = get_isset($i_alamat);
		$i_img = get_isset($_FILES['i_img']['name']);
		$path = "../img/farmer/";
		
		$i_img = ($_FILES['i_img']['name']) ? $_FILES['i_img']['name'] : "";
		$i_date = date("Y-m-d-his");
		$path = '../img/farmer/';
		if($i_img != ""){
			
			$r_img = get_img($id);
			echo $r_img;
			if($r_img != ""){
				if(file_exists($r_img)){
					unlink($r_img); 
				}
			}
			$image = $path.$i_date."_".$_FILES['i_img']['name'];
			move_uploaded_file($_FILES['i_img']['tmp_name'], $image);
			
				$data = "
					farmer_contract_code 	= '$i_code',
					farmer_name 	 		= '$i_name',
					farmer_address 	 		= '$i_alamat', 
					farmer_identity_number	= '$i_no_ktp', 
					farmer_identity_img		= '$image'";
		}else{
				$data = "
					farmer_contract_code 	= '$i_code',
					farmer_name 	 		= '$i_name',
					farmer_address 	 		= '$i_alamat', 
					farmer_identity_number	= '$i_no_ktp'";
			
			
		}
		update("farmer",$data,"farmer_id", $id);
		header('Location: farmer.php?page=list&did=2');

		

	break;
	
	case 'edit_land':

		extract($_POST);
		$id = get_isset($_GET['id']);
		//$i_number = get_isset($i_number);
		$i_land_id = get_isset($i_land_id);
		$i_luas = get_isset($i_luas);
		
		$f_id = (isset($_GET['f_id'])) ? $_GET['f_id'] : null;
		$get_luas = get_luas($f_id);
		
		$update = 	"land_area = land_area  - ".$get_luas."";
		
		update("lands", $update,"land_id",$id);
	
		$data = " 
				  farmer_id 	 = '$i_farmer_id',
				  farmer_land_area  = '$i_luas'
			";
		$update2 = 	"land_area = land_area  + ".$i_luas."";
		update("farmer_lands", $data,"farmer_land_id", $f_id);
		
		update("lands", $update2,"land_id",$id);	
		header("Location: farmer.php?page=form&did=2&id=$id");

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

		header('Location: farmer.php?page=list&did=3');

	break;
	
	case 'delete_land':

		$id = get_isset($_GET['id']);	
		$f_id = (isset($_GET['f_id'])) ? $_GET['f_id'] : null;
		
		$get_luas = get_luas($f_id);
		
		$update = 	"land_area = land_area  - ".$get_luas."";
		
		update("lands", $update,"land_id",$id);
		
		delete("farmer_lands","farmer_land_id", $f_id);

			
		header("Location: farmer.php?page=form&did=2&id=$id");

	break;
}

?>