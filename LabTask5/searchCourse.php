<!DOCTYPE html>
<html>
<head>
    <title> Search Course </title>
</head>
<body>
<?php 
    include "nav.php";
?>
    <form method="post" action="controller/findCourse.php">
      <h1><br></h1>
      <input type="text" name="topic">
      <button type="submit" >Submit</button>
    </form>
  </body>
</html>