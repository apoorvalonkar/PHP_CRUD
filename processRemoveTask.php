<?php
/**
 * Created by PhpStorm.
 * User: apoorvalonkar
 * Date: 14/11/18
 * Time: 7:18 PM
 */
require_once("config.php");

$task=$_POST['task'];
$creatdate=$_POST['createdDate'];
$enddate=$_POST['EndDate'];
$status=$_POST['status'];
$taskid = $_POST['taskid'];

$deletedTask =removeThisTask($task,$creatdate,$enddate,$status, $taskid);

echo $deletedTask;

?>