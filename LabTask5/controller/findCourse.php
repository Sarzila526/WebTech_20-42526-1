<?php
    require('../model/model.php');
        if(isset($_POST['topic'])) 
        {
            try {
                $SearchedTopic = searchCourse($_POST['topic']);
                require('../showSearchedCourse.php');
            } 
            catch (Exception $ex) 
            {
                echo $ex->getMessage();
            }
        }
?>
