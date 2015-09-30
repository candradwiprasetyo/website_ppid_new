<?php
include '../lib/config.php';
include '../lib/function.php';
include '../models/news_model.php';
$page = null;
$page = (isset($_GET['page'])) ? $_GET['page'] : "list";
$title = ucfirst("news");

$_SESSION['menu_active'] = 4;

switch ($page) {
	case 'list':
		get_header($title);
		
		$query = select();
		$add_button = "news.php?page=form";

		include '../views/news/list.php';
		get_footer();
	break;
	
	case 'form':
		get_header();

		$close_button = "news.php?page=list";

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		if($id){
			$title = ucfirst("Form Edit news");
			$row = read_id($id);
			$action = "news.php?page=edit&id=$id";
			
		} else{
			$title = ucfirst("Form Input news");
			//inisialisasi
			$row = new stdClass();
			$row->news_name = false;
			$row->news_desc = false;
			$row->news_img = false;
			$action = "news.php?page=save";
		}

		include '../views/news/form.php';
		get_footer();
	break;
	
	
	case 'save':
		extract($_POST);

		$i_name = get_isset($i_name);
		$i_desc = get_isset($editor);
		$i_img = get_isset($_FILES['i_img']['name']);
		$path = "../../assets/images/news/";
		
		$i_img = ($_FILES['i_img']['name']) ? $_FILES['i_img']['name'] : "";
		$i_date = date("Y-m-d-his");
		
		if($i_img != ""){
			$image = $i_date."_".$_FILES['i_img']['name'];
			move_uploaded_file($_FILES['i_img']['tmp_name'], $path.$image);
		}else{
			$image = "";
		}
			$data = "'',
					'$i_name',
					'$image', 
					'$i_desc',
					'1',
					'".date("Y-m-d")."'
			";
			
			create("news", $data);
			
			header('Location: news.php?page=list&did=1');

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