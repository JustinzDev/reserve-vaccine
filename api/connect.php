<?php
    $conn = mysqli_connect("localhost","root","","best_vaccine");
    if(mysqli_connect_errno()){
        echo "เชื่อมต่อไม่สำเร็จ!";
    }
?>