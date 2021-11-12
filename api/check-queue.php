<?php
    include('connect.php');
    include('setlink.php');
    
    $sql = "SELECT * FROM reserves INNER JOIN queues ON reserves.res_idcard = queues.que_idcard WHERE reserves.res_idcard = '".$_GET['user_idcard']."' AND reserves.res_phone = '".$_GET['user_phone']."'";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_array($query);

    if($result){
        echo "เลขบัตรประชาชน: ".$result['res_idcard']."<br/>"
        ."ชื่อ-นามสกุล: ".$result['res_fname']." ".$result['res_lname'];
    }
    else{
        echo "Not Found";
    }
?>