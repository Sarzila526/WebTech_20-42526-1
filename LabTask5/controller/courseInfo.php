<?php 
require('model/model.php');

function fetchAllCourses()
{
	return displayCourse();
}

function fetchCourse($id)
{
	return showCourse($id);
}
