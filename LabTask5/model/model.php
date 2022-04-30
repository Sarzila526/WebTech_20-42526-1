<?php 
require_once 'db_connect.php';

function displayCourse()
{
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `weeklycourses` ';
    try{
         $cs = $conn->query($selectQuery);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $rows = $cs->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showCourse($id)
{
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `weeklycourses` where `Course ID` = ?";
    try 
    {
        $cs = $conn->prepare($selectQuery);
        $cs->execute([$id]);
    }
    catch(PDOException $e) 
    {
        echo $e->getMessage();
    }
    $row = $cs->fetch(PDO::FETCH_ASSOC);
    return $row;
}

function addCourse($data)
{
	$conn = db_conn();
    $selectQuery = "INSERT into weeklycourses(Day, `Starting Time`, `Ending Time`, Topic, `Instructor ID`, Status)
                    VALUES (:day, :stime, :etime, :topic, :ins_id, :status)";
    try{
        $cs = $conn->prepare($selectQuery);
        $cs->execute(
        [
        	':day' => $data['day'],
        	':stime' => $data['stime'],
            ':etime' => $data['etime'],
        	':topic' => $data['topic'],
        	':ins_id' => $data['ins_id'],
        	':status' => $data['status']
        ]);
    } catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $conn = null;
    return true;
}

function updateCourse($id, $data)
{
    $conn = db_conn();
    $selectQuery = "UPDATE weeklycourses set Day = ?, `Starting Time` = ?, `Ending Time` = ?, `Instructor ID` = ?, Status = ? where `Course ID` = ?";
    try{
        $cs = $conn->prepare($selectQuery);
        $cs->execute(
            [ $data['day'], $data['stime'], $data['etime'], $data['ins_id'], $data['status'], $id ]
        );
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $conn = null;
    return true;
}

function searchCourse($topic)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `weeklycourses` WHERE Topic LIKE '%$topic%'";
    try{
        $cs = $conn->query($selectQuery);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $rows = $cs->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function deleteCourse($id)
{
    $con = db_conn();
    $selectQuery = "SELECT * FROM `weeklycourses` where `Course ID` =  '$id' ";
    try{
        $cs = $conn->prepare($selectQuery);
        $cs->execute([$id]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $conn = null;
    return true;
}

?>