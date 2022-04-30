<!DOCTYPE html>
<html>
<head>
	<title> Add Course </title>
</head>

<body>
 <?php include "nav.php"; ?>
 <br>
 <div class="container" style="width:480px;">  
 <form action="controller/createCourse.php" method="POST" enctype="multipart/form-data">
  <fieldset>
  <legend>
    <b><h3> Add Course </h3></b>
  </legend> 
  <label for="topic"> Topic : </label> <br>
  <input type="text" id="topic" name="topic"> <br><br>
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
  <input type="checkbox" name="Display" value="Display"> Display <br>
  <span class="underline"> ___________________________ </span> <br><br>
  <input type="submit" name="createCourse" value="SAVE">
  </fieldset>
</form>
</div> 
</body>
</html>

