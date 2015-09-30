<?php

function select(){
	$query = mysql_query("select *
		from farmers a 
			
			");
	return $query;
}

function select_land($id){
	$query = mysql_query("select a.*,b.*,c.location_name
							from farmer_lands a 
							JOIN lands b ON b.land_id = a.land_id
							JOIN locations c ON c.location_id = b.location_id
							WHERE farmer_id = '$id'
			
			");
	return $query;
}


function read_id($id){
	$query = mysql_query("select *
			from farmers 
			where farmer_id = '$id'");
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
	mysql_query("delete from farmers  where farmer_id = '$id'");
}
function get_img($id){
	$q_img = mysql_query("select farmer_identity_img from farmers where farmer_id = '$id'");
	$r_img = mysql_fetch_object($q_img);
	return $r_img->farmer_identity_img;
}

function read_farmer_land_id($id){
	$query = mysql_query("SELECT *
FROM `farmer_lands` WHERE farmer_land_id = '$id'");
	$result = mysql_fetch_object($query);
	return $result;
}
function select_farmer($id,$i_land_id){
	$query = mysql_query("select a.*,b.farmer_name
							from farmer_lands a 
							JOIN farmers b ON b.farmer_id = a.farmer_id
							WHERE land_id = '$i_land_id' and a.farmer_id = '$id'
			
			");
	return $query;
}

function get_luas($id){
	$q_img = mysql_query("select farmer_land_area from farmer_lands where farmer_land_id = '$id'");
	$r_img = mysql_fetch_object($q_img);
	return $r_img->farmer_land_area;
}

?>