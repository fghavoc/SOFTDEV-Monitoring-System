<p style="text-align: center;"><img src="https://cdn.jotfor.ms/img/check-icon.png" alt="" width="128" height="128" /></p>
<div style="text-align: center;">
<h1 style="text-align: center;">Thank You!</h1>
<p style="text-align: center;">You submission will be up for approval.</p>
</div>

<?php

function ExtendedAddslash(&$params){
	foreach($params as &$var){
		//check if $var is an array. If yes, it will start another ExtendedAddslash
		//function to loop to each key inside
		is_array($var)?ExtendedAddslash($var):$var=addslashes($var);
	}
}
	//initialize ExtendedAddslash()function for every $_POST variable
	ExtendedAddslash($_POST);
	
	$submission_id = $_POST['submission_id'];
	$form_id = $_POST['formID'];
	$ip_address = $_POST['ip'];
	$name = $_POST['name'][0].". ".$_POST['name'][1]." ".$_POST['name'][2]." ".$_POST['name'][3];
	$other_names = $_POST['othernames'][0]."/".$_POST['othernames'][1]."/".$_POST['othernames'][2];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$address = $_POST['address'][0].", ".$_POST['address'][2].", ".$_POST['address'][5];
	$last_time_seen = $_POST['whenwas11'][0]."-".$_POST['whenwas11'][1]."-".$_POST['whenwas11'][2];
	$last_location_seen = $_POST['wherewas'];
	$shirt_color = $_POST['colorof14'];
	$lower_garment = $_POST['lowergarment'];
	$footwear = $_POST['footwear'];
	$hair_length = $_POST['hairlength'];
	$hair_color = $_POST['haircolor'];
	$eye_color = $_POST['eyecolor'];
	$skin_color = $_POST['skincolor'];
	$picture = $_POST['pictureof'];
	
	$db_host='localhost';
	$db_username='root';
	$db_password='';
	$db_name='afterlife';
	$db_connect = mysqli_connect($db_host, $db_username, $db_password, $db_name) or die(mysqli_error());
	
	//search submission ID
	
	$query = "SELECT * FROM missing WHERE submission_id = '$submission_id'";
	$sqlsearch = mysqli_query($db_connect, $query);
	$resultcount = mysqli_num_rows($sqlsearch); 
	
	if($resultcount > 0){
		mysqli_query($db_connect, "UPDATE missing SET
					name = '$name',
					other_names = '$other_names',
					age = '$age',
					gender = '$gender',
					address = '$address',
					last_time_seen = '$last_time_seen',
					last_location_seen = '$last_location_seen',
					shirt_color = '$shirt_color',
					lower_garment = '$shirt_color',
					footwear = '$footwear',
					hair_length = '$hair_length',
					hair_color = '$hair_color',
					eye_color = '$eye_color',
					skin_color = '$skin_color',
					picture = '$picture'")
		or die(mysqli_error($db_connect));
		
	}else{
		mysqli_query($db_connect, "INSERT INTO missing
					(submission_id, form_id, ip_address, name, other_names,
					age, gender, last_time_seen, last_location_seen, shirt_color,
					lower_garment, footwear, hair_length, hair_color, eye_color, 
					skin_color, picture)
					VALUES 
					('$submission_id', '$form_id', '$ip_address', '$name', '$other_names',
					'$age', '$gender', '$last_time_seen', '$last_location_seen', '$shirt_color',
					'$lower_garment', '$footwear', '$hair_length', '$hair_color', '$eye_color', 
					'$skin_color', '$picture')")
		or die(mysqli_error($db_connect));
		
	}
	
?>