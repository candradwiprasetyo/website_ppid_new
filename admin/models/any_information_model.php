<?php

function select(){
	$query = mysql_query("select a.*
		from any_informations a 
			order by a.any_information_id
			");
	return $query;
}



function read_id($id){
	$query = mysql_query("select *
			from any_informations 
			where any_information_id = '$id'");
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
	mysql_query("delete from any_informations  where any_information_id = '$id'");
}


?>