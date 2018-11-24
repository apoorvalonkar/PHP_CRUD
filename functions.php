<?php
/**
 * Created by PhpStorm.
 * User: apoorvalonkar
 * Date: 14/11/18
 * Time: 6:00 PM
 */

function fetchAllTask(){

    global $mysqli;
    $stmt = $mysqli->prepare(
        "SELECT
        taskid,
        task,
        createdDate,
        EndDate,
        status
        FROM task
        
         "
    );
    $stmt->execute();
    $stmt->bind_result(
        $taskid,
        $task,
        $creatdate,
        $enddate,
        $status
    );

    while ($stmt->fetch()) {
        $row[] = array(
            'taskid'     =>  $taskid,
            'task'       =>  $task,
            'CreatedDate'=>  $creatdate,
            'EndDate'    =>  $enddate,
            'status'     =>  $status
        );
    }
    $stmt->close();
    return ($row);

}

function createNewTask($task,$creatdate,$enddate,$status)
{
    global $mysqli;

    $character_array = array_merge(range('a', 'z'), range(0, 9));
    $rand_string = "";
    for ($i = 0; $i < 6; $i++) {
        $rand_string .= $character_array[rand(
            0, (count($character_array) - 1)
        )];
    }
    $stmt=$mysqli->prepare(
        "INSERT INTO task  ( 
          taskid,
          task,
          createdDate,
          EndDate,
          status
         )
         VALUES (
         '" . $rand_string . "',
		?,
		?,
		?,
        ?
         )"
    );
    $stmt->bind_param("ssss",$task,$creatdate,$enddate,$status);
    $result=$stmt->execute();
    $stmt->close();
    return $result;

}



function fetchThisTask($taskid){

    global $mysqli;
    $stmt = $mysqli->prepare(
        "SELECT
        taskid,
        task,
        createdDate,
        EndDate,
        status
        FROM task
        WHERE 
        taskid = ?
        LIMIT 1
         "
    );
    $stmt->bind_param("s",$taskid);
    $stmt->execute();
    $stmt->bind_result(
        $taskid,
        $task,
        $creatdate,
        $enddate,
        $status
    );
    $stmt->execute();
    while ($stmt->fetch()) {
        $row[] = array(
            'taskid'    => $taskid,
            'task'       =>  $task,
            'createdDate'=>  $creatdate,
            'EndDate'    =>  $enddate,
            'status'     =>  $status
        );
    }
    $stmt->close();
    return ($row);
}

function updateThisTask($task,$creatdate,$enddate,$status, $taskid)
{
    global $mysqli;
    $stmt = $mysqli->prepare(
        "UPDATE task
		SET
		task=?,
        createdDate=?,
        EndDate=?,
        status=?
		WHERE
		taskid = ?
		LIMIT 1"
    );
    $stmt->bind_param("sssss",$task,$creatdate,$enddate,$status , $taskid);
    $result = $stmt->execute();
    $stmt->close();

    return $result;
}


function removeThisTask($task,$creatdate,$enddate,$status, $taskid)
{
    global $mysqli;
    $stmt = $mysqli->prepare(
        "DELETE FROM task
		WHERE
		taskid = ?
		LIMIT 1"
    );
    $stmt->bind_param('s', $taskid);
    $result = $stmt->execute();
    $stmt->close();

    return $result;
}
