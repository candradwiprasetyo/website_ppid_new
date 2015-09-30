<?php

function select(){
	$query = mysql_query("select a.*, b.menu_name as menu_parent_name
		from menus a 
		left join menus b on b.menu_id = a.menu_parent_id
		where a.menu_level = '2'
			order by a.menu_id
			");
	return $query;
}



function read_id($id){
	$query = mysql_query("select *
			from menus 
			where menu_id = '$id'");
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
	mysql_query("delete from menus  where menu_id = '$id'");
}


?>