<?php
/**
 * Created by PhpStorm.
 * User: apoorvalonkar
 * Date: 14/11/18
 * Time: 7:00 PM
 */
require_once("config.php");

$task=$_POST['task'];
$creatdate=$_POST['createdDate'];
$enddate=$_POST['EndDate'];
$status=$_POST['status'];
$taskid = $_POST['taskid'];

$updatedTask =updateThisTask($task,$creatdate,$enddate,$status, $taskid);

echo $updatedTask;

?>