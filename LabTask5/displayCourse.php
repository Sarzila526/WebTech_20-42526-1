<!DOCTYPE html>
<?php  
  require('controller/courseInfo.php');
  $courses = fetchAllCourses();
    include "nav.php";
?>

<html>
<head>
	<title> Display Courses </title>
	<style>
		table,th,td{
			border: 1px solid black;
		}
		th,td{
			padding: 14px;
		}
	</style>
</head>
<body>
	<br>
<table>
  <thead>
	<tr>
		<th>Course ID</th>
		<th>Topic</th>
		<th>Day</th>
		<th>Starting Time</th>
		<th>Ending Time</th>
		<th>Instructor ID</th>
		<th>Status</th>
		<th colspan="2">Action</th>
	</tr>
  </thead>
  <tbody>
		<?php foreach ($courses as $i => $course): ?>
		<tr>
		<td><a href="showCourse.php?id=<?php echo $course['Course ID']?>">
			<?php echo "W" . $course['Course ID']?> </a></td>
		<td><?php echo $course['Topic']?></td>
		<td><?php echo $course['Day']?></td>
		<td><?php echo $course['Starting Time']?></td>
		<td><?php echo $course['Ending Time']?></td>
		<td><?php echo $course['Instructor ID']?> </a></td>
		<td><?php echo $course['Status']?></td>	
		<td><a href="editCourse.php?id=<?php echo $course['Course ID']?>"> Edit </a></td>	
		<td><a href="deleteCourse.php?id=<?php echo $course['Course ID']?>"> Delete </a></td>	
		</tr>
		<?php endforeach; ?>
  </tbody>
</table>
</body>
</html>