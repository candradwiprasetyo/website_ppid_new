<?php

function select(){
	$query = mysql_query("select * from users");
	return $query;
}

function read_id($id){
	$query = mysql_query("select *
			from users 
			where user_id = '$id'");
	$result = mysql_fetch_object($query);
	return $result;
}

function read_page_info(){
	$query = mysql_query("select *
			from home_page_infos 
			limit 1");
	$result = mysql_fetch_object($query);
	return $result;
}


function create($data){
	mysql_query("insert into users values(".$data.")");
}

function update($data, $id){
	mysql_query("update users set ".$data." where user_id = '$id'");
}

function update_home_page($data){
	mysql_query("update home_page_infos set ".$data."");
}


function delete($id){
	mysql_query("delete from users  where user_id = '$id'");
}
function cek_name_login($name){
	$query = mysql_query("select count(user_id)
							from users 
						where user_login = '".$name."'");
	$result = mysql_fetch_array($query);
	$row = $result['0'];
	return $row;
}

?>