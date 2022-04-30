<!DOCTYPE html>
<?php 
   require('controller/courseInfo.php');
   $course = fetchCourse($_GET['id']);
   include "nav.php";
?>
<html>
<head>
	<title> Edit Course </title>
</head>

<body>
 <form action="controller/updateCourse.php" method="POST" enctype="multipart/form-data">
  <fieldset>
  <legend>
    <b><h3> Edit Course </h3></b>
  </legend> 
  <label for="topic"> Topic: <?php echo $course['Topic']?> </label> <br><br>
  <label for="day"> Day : </label> <br>
  <input type="text" id="day" name="day"> <br><br>
  <label for="stime"> Starting Time : </label> <br>
  <input type="time" id="stime" name="stime"> <br><br>
  <label for="etime"> Ending Time : </label> <br>
  <input type="time" id="etime" name="etime"> <br><br>
  <label for="ins_id"> Instructor ID : </label> <br>
  <input type="int" id="ins_id" name="ins_id"> <br><br>
  <label for="status"> Status : </label> <br>
  <input type="text" id="status" name="status"> <br><br><br>
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  <input type="submit" name="updateCourse" value="Update">
  <input type="reset" value="Reset"> 
 </fieldset>
</form> 
</body>
</html>

