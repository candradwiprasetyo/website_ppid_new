<?php

function read_id(){
	$query = mysql_query("select *
			from home_welcome_pages 
			where welcome_page_id = '1'");
	$result = mysql_fetch_object($query);
	return $result;
}


function update($table,$data){
	mysql_query("update ".$table." set ".$data." where welcome_page_id = '1'");

}

function get_img(){
	$q_img = mysql_query("select welcome_page_img from home_welcome_pages where welcome_page_id = '1'");
	$r_img = mysql_fetch_object($q_img);
	return $r_img->welcome_page_img;
}


?>