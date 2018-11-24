<?php
/**
 * Created by PhpStorm.
 * User: apoorvalonkar
 * Date: 14/11/18
 * Time: 6:18 PM
 */

echo "<pre>";
print_r($_POST);
echo "</pre>";

require_once("config.php");

$task=$_POST['task'];
$creatdate=$_POST['CreatedDate'];
$enddate=$_POST['EndDate'];
$status=$_POST['status'];


$newtask= createNewTask($task,$creatdate,$enddate,$status);

echo "<br><br>";
echo $newtask;

?>