<?php
include '../lib/config.php';
include '../lib/function.php';
include '../models/user_model.php';
$page = null;
$page = (isset($_GET['page'])) ? $_GET['page'] : "list";
$title = ucfirst("Home");

switch ($page) {
	case 'list':
		get_header($title);
		
		//$row = read_page_info();
		$action = "home.php?page=edit";
		
		include '../views/layout/home.php';
		get_footer();
	break;
	
	case 'edit':
	
	extract($_POST);
		
		$i_name = get_isset($i_name);
		$i_address = get_isset($i_address);
		$i_facebook = get_isset($i_facebook);
		$i_twitter = get_isset($i_twitter);
		$i_youtube = get_isset($i_youtube);

			$data = "
					page_info_name 	= '$i_name',
					page_info_address = '$i_address',
					page_info_facebook 	= '$i_facebook',
					page_info_twitter 	= '$i_twitter',
					page_info_youtube 	= '$i_youtube'
					";
			
		echo $i_desc;	
		
		update_home_page($data);
		header("Location: home.php?did=1");
	
	break;
	
}

?>