<?php
include '../lib/config.php';
include '../lib/function.php';
include '../models/form_info_model.php';
$page = null;
$page = (isset($_GET['page'])) ? $_GET['page'] : "list";
$title = ucfirst("permohonan informasi online");

$_SESSION['menu_active'] = 4;

switch ($page) {
	case 'list':
		get_header($title);
		
		$query = select();
		$add_button = "form_info.php?page=form";

		include '../views/form_info/list.php';
		get_footer();
	break;
	
	case 'form':
		get_header();

		$close_button = "form_info.php?page=list";

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		if($id){
			$title = ucfirst("Form Detail Permohonan");
			$row = read_id($id);
			$action = "form_info.php?page=edit&id=$id";
			
		} else{
			$title = ucfirst("Form Input news");
			//inisialisasi
			$row = new stdClass();
			$row->news_name = false;
			$row->news_desc = false;
			$row->news_img = false;
			$action = "form_info.php?page=save";
		}

		include '../views/form_info/form.php';
		get_footer();
	break;
	
	
	case 'save':
		extract($_POST);

		$nama 					= get_isset($nama);
		$no_ktp 				= get_isset($no_ktp);
		$organisasi				= get_isset($organisasi);
		$alamat 				= get_isset($alamat);
		$telepon 				= get_isset($telepon);
		$email 					= get_isset($email);
		$informasi 				= get_isset($informasi);
		$tujuan 				= get_isset($tujuan);
		$memperoleh_informasi 	= get_isset($memperoleh_informasi);
		$mendapat_informasi 	= get_isset($mendapat_informasi);
		$type 					= get_isset($type);
		
		$scan_ktp = get_isset($_FILES['scan_ktp']['name']);
		$path = "../../assets/images/permohonan/";
		
		$scan_ktp = ($_FILES['scan_ktp']['name']) ? $_FILES['scan_ktp']['name'] : "";
		$i_date = date("Y-m-d-his");
		
		if($scan_ktp != ""){
			$scan_ktp = $i_date."_".$_FILES['scan_ktp']['name'];
			move_uploaded_file($_FILES['scan_ktp']['tmp_name'], $path.$scan_ktp);
		}else{
			$scan_ktp = "";
		}
		
		$scan_berkas = get_isset($_FILES['scan_berkas']['name']);
		$path = "../../assets/images/permohonan/";
		
		$scan_berkas = ($_FILES['scan_berkas']['name']) ? $_FILES['scan_berkas']['name'] : "";
		$i_date = date("Y-m-d-his");
		
		if($scan_berkas != ""){
			$scan_berkas = $i_date."_".$_FILES['scan_berkas']['name'];
			move_uploaded_file($_FILES['scan_berkas']['tmp_name'], $path.$scan_berkas);
		}else{
			$scan_berkas = "";
		}
			$data = "'',
					'$nama',
					'$no_ktp', 
					'$organisasi',
					'$alamat',
					'$telepon', 
					'$email',
					'$informasi',
					'$tujuan', 
					'$memperoleh_informasi',
					'$mendapat_informasi',
					'$scan_ktp', 
					'$scan_berkas',
					'$type'
			";
			
			create("form_informations", $data);
			
			header('Location: ../../index.php?page=info_individu&did=1');

	break;
	
	

	case 'edit':

		extract($_POST);
		
		$id = get_isset($_GET['id']);	
		$i_name = get_isset($i_name);
		$i_desc = get_isset($editor);
		
		$path = "../../assets/images/news/";
		
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
					news_name 	= '$i_name',
					news_img 	= '$image',
					news_desc 	= '$i_desc'
					";
		}else{
				$data = "
					news_name 	= '$i_name',
					news_desc 	= '$i_desc'";
			
			
		}
		update("news",$data,"news_id", $id);
		header('Location: news.php?page=list&did=2');

		

	break;
	
	
	case 'delete':

		$id = get_isset($_GET['id']);	
		
		$path = "../../assets/images/news/";

		$r_img = get_img($id);
			echo $r_img;
			if($r_img != ""){
				if(file_exists($path.$r_img)){
					unlink($path.$r_img); 
				}
			}
		
		delete($id);

		header('Location: news.php?page=list&did=3');

	break;
	
	
}

?>