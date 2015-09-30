<?php

function select(){
	$query = mysql_query("select *
		from home_partnerships a 
			order by partnership_id
			");
	return $query;
}



function read_id($id){
	$query = mysql_query("select *
			from home_partnerships 
			where partnership_id = '$id'");
	$result = mysql_fetch_object($query);
	return $result;
}


function create($tabel,$data){
	mysql_query("insert into ".$tabel." values(".$data.")");
	
}

function update($table,$data,$param,$id){
	mysql_query("update ".$table." set ".$data." where ".$param." = '$id'");

}

function delete($id){
	mysql_query("delete from home_partnerships  where partnership_id = '$id'");
}
function get_img($id){
	$q_img = mysql_query("select partnership_img from home_partnerships where partnership_id = '$id'");
	$r_img = mysql_fetch_object($q_img);
	return $r_img->partnership_img;
}


?>