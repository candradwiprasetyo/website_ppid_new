<?php

function select(){
	$query = mysql_query("select *
		from form_informations a 
			order by form_information_id
			");
	return $query;
}



function read_id($id){
	$query = mysql_query("select *
			from form_informations 
			where form_information_id = '$id'");
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
	mysql_query("delete from news  where news_id = '$id'");
}
function get_img($id){
	$q_img = mysql_query("select news_img from news where news_id = '$id'");
	$r_img = mysql_fetch_object($q_img);
	return $r_img->news_img;
}


?>