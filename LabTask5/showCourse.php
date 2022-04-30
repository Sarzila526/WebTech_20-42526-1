<!DOCTYPE html>
<?php  
   require('controller/courseInfo.php');
   $course = fetchCourse($_GET['id']);
   include "nav.php";
?>

<html>
<head>
	<title> Show Course </title>
	<style>
<style>
		table,th,td{
			border: 1px solid black;
		}
		th,td{
			padding: 12px;
		}
	</style>
   </style>
</head>
<body>
<table>
	<tr>
		<th>Topic</th>
		<th>Day</th>
		<th>Starting Time</th>
		<th>Ending Time</th>
		<th>Instructor ID</th>
		<th>Status</th>
		<th>Action</th>
	</tr>
	<tr>
		<td><?php echo $course['Topic']?></td>
		<td><?php echo $course['Day']?></td>
		<td><?php echo $course['Starting Time']?></td>
		<td><?php echo $course['Ending Time']?></td>
		<td><?php echo $course['Instructor ID']?> </a></td>
		<td><?php echo $course['Status']?></td>
		<td><a href="editCourse.php?id=<?php echo $course['Course ID']?>"> Edit </a></td>	
		<td><a href="deleteCourse.php?id=<?php echo $course['Course ID']?>"> Delete </a></td>	
	</tr>
</table>
</body>
</html>