<?php 
    require('controller/deleteCourse.php');

    if($status)
        {
            header('location: displayCourse.php');
        }
        else
        {
            echo 'Delete failed';
        }
 ?>