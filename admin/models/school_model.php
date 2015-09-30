<?php

function select_teacher($eg_id){
	$query = mysql_query("select a.*
		from education_grade_teachers a 
		join education_grade_menus b on b.egm_id = a.egm_id
		where b.eg_id = '$eg_id'
		order by egt_id
			");
	return $query;
}


function select_facility($eg_id){
	$query = mysql_query("select a.*
		from education_grade_facilities a 
		join education_grade_menus b on b.egm_id = a.egm_id
		where b.eg_id = '$eg_id'
		order by egf_id
			");
	return $query;
}

function select_gallery($eg_id){
	$query = mysql_query("select a.*
		from education_grade_galleries a 
		join education_grade_menus b on b.egm_id = a.egm_id
		where b.eg_id = '$eg_id'
		order by egg_id
			");
	return $query;
}




function read_teacher_id($id){
	$query = mysql_query("select *
			from education_grade_teachers 
			where egt_id = '$id'");
	$result = mysql_fetch_object($query);
	return $result;
}


function read_facility_id($id){
	$query = mysql_query("select *
			from education_grade_facilities 
			where egf_id = '$id'");
	$result = mysql_fetch_object($query);
	return $result;
}

function read_gallery_id($id){
	$query = mysql_query("select *
			from education_grade_galleries 
			where egg_id = '$id'");
	$result = mysql_fetch_object($query);
	return $result;
}

function read_home_id($id){
	$query = mysql_query("select *
			from education_grade_home 
			where eg_id = '$id'");
	$result = mysql_fetch_object($query);
	return $result;
}


function read_curriculum_id($id){
	$query = mysql_query("select *
			from education_grade_curriculum
			where eg_id = '$id'");
	$result = mysql_fetch_array($query);
	return $result;
}


function create($tabel,$data){
	mysql_query("insert into ".$tabel." values(".$data.")");
	
}

function update($table,$data,$param,$id){
	mysql_query("update ".$table." set ".$data." where ".$param." = '$id'");

}

function delete($table,$param,$id){
	mysql_query("delete from $table  where $param = '$id'");
}


function get_img($id, $column){
	$q_img = mysql_query("select $column as result from education_grade_home where eg_id = '$id'");
	$r_img = mysql_fetch_object($q_img);
	return $r_img->result;
}

function get_img_teacher($id){
	$q_img = mysql_query("select img as result from education_grade_teachers where egt_id = '$id'");
	$r_img = mysql_fetch_object($q_img);
	return $r_img->result;
}

function get_img_facility($id){
	$q_img = mysql_query("select img as result from education_grade_facilities where egf_id = '$id'");
	$r_img = mysql_fetch_object($q_img);
	return $r_img->result;
}

function get_img_gallery($id){
	$q_img = mysql_query("select img as result from education_grade_galleries where egg_id = '$id'");
	$r_img = mysql_fetch_object($q_img);
	return $r_img->result;
}


?>