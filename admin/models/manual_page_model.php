<?php

function read_id($id){
	$query = mysql_query("select *
			from manual_pages
			where page_id = '$id'");
	$result = mysql_fetch_object($query);
	return $result;
}


function update($table,$data, $param, $id){
	mysql_query("update ".$table." set ".$data." where $param = '$id'");

}




?>