<?php

function select(){
	$query = mysql_query("select *
		from admissions a 
			order by admission_id
			");
	return $query;
}



function read_id($id){
	$query = mysql_query("select *
			from admissions 
			where admission_id = '$id'");
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
	mysql_query("delete from admissions  where admission_id = '$id'");
}
function get_img($id){
	$q_img = mysql_query("select admission_img from admissions where admission_id = '$id'");
	$r_img = mysql_fetch_object($q_img);
	return $r_img->admission_img;
}


?>