<?php
session_start();
include "config.php";




// insert query for register page
if(isset($_REQUEST['update']))
{
	$id=$_SESSION['login_id'];
	
	
	$fname=$_POST['fname'];
    $lname=$_POST['lname'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	// $paswords=md5($_POST['password']);
	$bio=$_POST['bio'];
	if($_POST['update']==''){
		
	$query="UPDATE `login` SET `fname`='$fname',`lname`='$lname',`address`='$address',`email`='$email',`bio`='$bio'  where `login_id`=$id";	
	}
	
	$res=mysqli_query($link,$query);
	if($res){
		$_SESSION['success']="Data Updated successfully!";
		header('Location:ArcEdit.php');
	}else{
		echo "Data not Updated, please try again!";
	}
	
}



?>