<?php

function select(){
	$query = mysql_query("select *
		from education_grades a 
			order by eg_id
			");
	return $query;
}



function read_id($id){
	$query = mysql_query("select *
			from education_grades 
			where eg_id = '$id'");
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
	mysql_query("delete from education_grades  where education_grade_id = '$id'");
}
function get_header_img($id){
	$q_img = mysql_query("select eg_header_img from education_grades where eg_id = '$id'");
	$r_img = mysql_fetch_object($q_img);
	return $r_img->eg_header_img;
}

function get_footer_img($id){
	$q_img = mysql_query("select eg_footer_img from education_grades where eg_id = '$id'");
	$r_img = mysql_fetch_object($q_img);
	return $r_img->eg_footer_img;
}

?>