<?php  
require('../model/model.php');

if(isset($_POST['updateCourse'])) 
{
	$data['day'] = $_POST['day'];
	$data['stime'] = $_POST['stime'];
	$data['etime'] = $_POST['etime'];
	$data['ins_id'] = $_POST['ins_id'];
	$data['status'] = $_POST['status'];

  if(updateCourse($_POST['id'], $data)) 
  {
  	 echo 'Successfully updated!!';
	 header('location: displayCourse.php');
  }
  else 
  {
	echo 'You are not allowed to access this page.';
  }
}
?>