<?php 
    require('model/model.php');
    
    if(isset($_GET['Course ID']))
    {
        $delId = $_GET['Course ID'];
        $status = deleteCourse($delId);
    }
 ?>