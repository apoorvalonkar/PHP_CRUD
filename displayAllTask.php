<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <title>

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
            color: blue;
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

<?php require_once("config.php");

$alltask = fetchAllTask();
?>

<!-- Table goes in the document BODY -->
<table class="table-style-three">
    <thead>
    <!-- display user details header  -->
    <th>Task ID</th>
    <th>Task/Grocery</th>
    <th>Created Date</th>
    <th>End Date</th>
    <th>Status</th>
    </thead>
    <tbody>
    <?php
    foreach($alltask as $displayTask) { ?>
        <tr>
            <td><a href="editTheTask.php?taskid=<?php print $displayTask['taskid']; ?>"><?php print $displayTask['taskid']; ?></a></td>
            <td><?php print $displayTask['task']; ?></td>
            <td><?php print $displayTask['CreatedDate']; ?></td>
            <td><?php print $displayTask['EndDate']; ?></td>
            <td><?php print $displayTask['status']; ?></td>

        </tr>
    <?php } ?>
    </tbody>
</table>

</body>
</html>
