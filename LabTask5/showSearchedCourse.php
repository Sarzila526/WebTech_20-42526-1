<!DOCTYPE html>
<html>

<head>
	<title> Searched Course </title>
	<style>
		table,td,th{
			padding: 5%;
		}
	</style>
</head>

<body>
<center> <h1> <b> Weekly Courses </b> </h1> </center>
      <input type="text" name="topic" value="
	  <?php 
	echo $_POST['topic'];
	?>">
    </form>
	<br>
	<p><a href="searchCourse.php">Back to the search bar </a></p>
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
		<th>&nbsp</th>
		<th colspan="2">Action</th>
	</tr>
	 </tr>
	</thead>
	<tbody>
		<?php foreach ($SearchedTopic as $i => $course) : ?>
			<tr>
			<td><a href="showCourse.php?id=<?php echo $course['Course ID']?>">
			<?php echo "W" . $course['Course ID']?> </a></td>
			<td><?php echo $course['Topic']?></td>
			<td><?php echo $course['Day']?></td>
			<td><?php echo $course['Starting Time']?></td>
			<td><?php echo $course['Ending Time']?></td>
			<td><?php echo $course['Instructor ID']?> </a></td>
			<td><?php echo $course['Status']?></td>
			<td> </td>
			<td><a href="editCourse.php?id=<?php echo $course['Course ID']?>"> Edit </a></td>	
			<td><a href="deleteCourse.php?id=<?php echo $course['Course ID']?>"> Delete </a></td>		
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
</body>
</html>