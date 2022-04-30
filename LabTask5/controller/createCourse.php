<?php  
require('../model/model.php');

if(isset($_POST['createCourse'])) 
{
	$data['day'] = $_POST['day'];
	$data['stime'] = $_POST['stime'];
	$data['etime'] = $_POST['etime'];
	$data['topic'] = $_POST['topic'];
	$data['ins_id'] = $_POST['ins_id'];
	$data['status'] = $_POST['status'];

  if(empty($data))
  {
  	echo 'Sorry! It cannot be created';
  }
  if(addCourse($data)) 
  {
  	echo 'Successfully added!!';
  }
}
  else 
  {
  	echo 'You are not allowed to access this page.';
  }

?>