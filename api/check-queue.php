<?php
    include('connect.php');
    include('setlink.php');
    error_reporting(0);
    
    $sql = "SELECT * FROM reserves INNER JOIN queues ON reserves.res_idcard = queues.que_idcard WHERE reserves.res_idcard = '".$_GET['user_idcard']."' AND reserves.res_phone = '".$_GET['user_phone']."'";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_array($query);

    $sql1 = "SELECT lct_name FROM locations WHERE lct_id = '".$result['res_locationid']."'";
    $query2 = mysqli_query($conn, $sql1);
    $result3 = mysqli_fetch_array($query2);
    

    if($result){
        if($result['que_status'] == 'stable') $que_status = 'รอการฉีดวัคซีน';
        else if($result['que_status'] == 'cancel') $que_status = 'ยกเลิกสิทธ์';

        if($result['res_sex'] == 'male') $gender = "ชาย";
        else if($result['res_sex'] == 'female') $gender = "หญิง";
        else if($result['res_sex'] == 'other') $gender = "เพศทางเลือก";

        echo "เลขลำดับคิวของคุณ: " .$result['que_no']."<br/>"
        ."สถานะคิว: " .$que_status."<br/>"
        ."เลขบัตรประชาชน: ".$result['res_idcard']."<br/>"
        ."ชื่อ-นามสกุล: ".$result['res_fname']." ".$result['res_lname']."<br/>"
        ."วันเกิด: ".$result['res_birth']."&nbsp;" ."อายุ: " .$result['res_age'] 
        ."&nbsp;" ."เพศ: ".$gender."<br/>"
        ."ที่อยู่: ".$result['res_address']."<br/>" 
        ."เบอร์โทรศัพท์: " .$result['res_phone']."<br/>"
        ."อีเมล: " .$result['res_email']."<br/>"
        ."โรคประจำตัว: " .$result['res_disease']."<br/>"
        ."เคยรับการฉีควัคฉีนหรือยัง: " .$result['res_getvac']."<br/>"
        ."วัคซีนที่ต้องการจอง: " .$result['res_vactype']."<br/>"
        ."สถานที่ต้องการเข้ารับฉีควัคซีน: " .$result3['lct_name']."<br/>"
        ."จำนวนวัคซีนที่ต้องการจอง: " .$result['res_needles']."<br/>"
        ;
    }
    else{
        echo "Not Found";
    }
?>