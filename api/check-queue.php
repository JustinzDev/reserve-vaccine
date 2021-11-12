<?php
    include('connect.php');
    include('setlink.php');
    

    $sql = "SELECT * FROM reserves INNER JOIN queues ON reserves.res_idcard = queues.que_idcard WHERE reserves.res_idcard = '".$_GET['user_idcard']."' AND reserves.res_phone = '".$_GET['user_phone']."'";
    $query = mysqli_query($conn, $sql);

    $resultArray = array();
    while($row = mysqli_fetch_array($query)){
        array_push($resultArray, $row);
    }
    echo json_encode($resultArray);
?>