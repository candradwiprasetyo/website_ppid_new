<?php

function select($type_id){
	$query = mysql_query("select *
		from profiles a 
		where profile_type_id = '$type_id'
		order by profile_id
			");
	return $query;
}



function read_id($id){
	$query = mysql_query("select *
			from profiles 
			where profile_id = '$id'
			order by profile_id asc
			");
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
	mysql_query("delete from profiles  where profile_id = '$id'");
}
function get_img($id){
	$q_img = mysql_query("select profile_img from profiles where profile_id = '$id'");
	$r_img = mysql_fetch_object($q_img);
	return $r_img->profile_img;
}


?>