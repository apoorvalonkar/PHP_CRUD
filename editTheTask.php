/**
 * Created by PhpStorm.
 * User: apoorvalonkar
*/
<?php

require_once("config.php");

$thisTaskId = $_GET['taskid'];
echo $thisTaskId;

$foundTask = fetchThisTask($thisTaskId);
echo "<pre>";
print_r($foundTask);
echo "</pre>";
?>

<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <title>
        FIRST CRUD - Ipdate This Record
    </title>
    <!-- Style -- Can also be included as a file usually style.css -->
    <style type="text/css">
        table.table-style-three {
            font-family: verdana, arial, sans-serif;
            font-size: 11px;
            color: #333333;
            border-width: 1px;
            border-color: #3A3A3A;
            border-collapse: collapse;
        }
        table.table-style-three th {
            border-width: 1px;
            padding: 8px;
            border-style: solid;
            border-color: #FFA6A6;
            background-color: #D56A6A;
            color: #ffffff;
        }
        table.table-style-three a {
            color: #ffffff;
            text-decoration: none;
        }

        table.table-style-three tr:hover td {
            cursor: pointer;
        }
        table.table-style-three tr:nth-child(even) td{
            background-color: #F7CFCF;
        }
        table.table-style-three td {
            border-width: 1px;
            padding: 8px;
            border-style: solid;
            border-color: #FFA6A6;
            background-color: #ffffff;
        }
    </style>

</head>
<body>

<form name="getTaskDetails" method="post" action="processEditTask.php">
    <table class="table-style-three">
        <?php foreach ($foundTask as $taskdetails) { ?>
            <tr>
                <td>Task id </td>
                <td><input type="text" name="taskid" value="<?php print $taskdetails['taskid'];?>"> </td>
            </tr>
            <tr><td>Task /Grocery </td>
                <td><input type="text" name="task" value="<?php print $taskdetails['task']; ?>"></td>
            </tr>
            <tr><td>Create Date</td>
                <td><input type="text" name="createdDate" value="<?php print $taskdetails['createdDate']; ?>"></td>
            </tr>
            <tr><td>End date</td>
                <td><input type="text" name="EndDate" value="<?php print $taskdetails['EndDate']; ?>"></td>
            </tr>
            <tr><td>Status</td>
                <td><input type="text" name="status" value="<?php print $taskdetails['status']; ?>"></td>
            </tr>
           <?php } ?>
    </table>

    <input type="submit" name="submit" value="Edit Task">

</form>


</body>
</html>