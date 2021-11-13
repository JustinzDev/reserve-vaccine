<?php
    session_start();
    include('connect.php');
    include('setlink.php');

    if($_POST['user_idcard'] == "" || $_POST['user_phone'] == ""){
        header("location:$mylocalhost");
        exit();
    }

    echo '
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    ';

    $SQL = "SELECT * FROM reserves WHERE res_idcard = '".$_POST['user_idcard']."' AND res_phone = '".$_POST['user_phone']."'";
    $QUERY = mysqli_query($conn, $SQL);
    $RESULT = mysqli_fetch_array($QUERY);

    if(mysqli_num_rows($QUERY) > 0){
        $newlink = $mylocalhost."reserve-data";

        $_SESSION['user_idcard'] = $RESULT['res_idcard'];
        $_SESSION['user_phone'] = $RESULT['res_phone'];

        $message = $RESULT['res_fname']." ".$RESULT['res_lname'];

        echo '
            <script>
                setTimeout(function(){
                    swal({
                        title: "พบข้อมูลผู้จอง",
                        text: "ยินดีต้อนรับ คุณ '.$message.'",
                        type: "success",
                        showButtonCancel: true,
                    }, function(isConfirm){
                        if(isConfirm) window.location = "'.$newlink.'";
                        if(isCancel) window.location = "'.$newlink.'";
                    });
                }, 300);
            </script>
            ';
        exit();
    }
    else{
        echo '
            <script>
                setTimeout(function(){
                    swal({
                        title: "เกิดข้อผิดพลาด",
                        text: "ไม่พบข้อมูลดังกล่าว!",
                        type: "error",
                        showButtonCancel: true,
                    }, function(isConfirm){
                        if(isConfirm) window.location = "'.$mylocalhost.'";
                        if(isCancel) window.location = "'.$mylocalhost.'";
                    });
                }, 300);
            </script>
            ';
        exit();
    }
?>