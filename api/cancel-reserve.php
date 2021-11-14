<?php
    session_start();
    include('connect.php');
    include('setlink.php');
    error_reporting(0);

    if($_GET['user_idcard'] == "" && $_GET['user_phone'] == ""){
        header("location:$mylocalhost");
        exit();
    }

    echo '
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    ';

    $SQLRESERVE = "SELECT * FROM reserves INNER JOIN queues ON reserves.res_idcard = queues.que_idcard WHERE reserves.res_idcard = '".$_GET['user_idcard']."' AND reserves.res_phone = '".$_GET['user_phone']."'";
    $QUERY = mysqli_query($conn, $SQLRESERVE);

    if(mysqli_num_rows($QUERY) > 0){
        $DELETE = "DELETE FROM reserves WHERE res_idcard = '".$_GET['user_idcard']."' AND res_phone = '".$_GET['user_phone']."'";
        $QUERYDELETE = mysqli_query($conn, $DELETE);

        $UPDATEQUE = "UPDATE queues SET que_status = 'cancel' WHERE que_idcard = '".$_GET['user_idcard']."'";
        $QUERYUPADTE = mysqli_query($conn, $UPDATEQUE);

        if($QUERYDELETE && $QUERYUPADTE){
            echo '
            <script>
                setTimeout(function(){
                    swal({
                        title: "การยกเลิกสิทธิ์การจองวัคซีนของคุณสำเร็จแล้ว!",
                        text: "คุณได้ทำการยกเลิกการจองวัคซีนสำหรับผู้จอง: '.$_GET['user_idcard'].'",
                        icon: "success",
                        button: "ตกลง",
                    })
                    .then((value) => {
                        window.location = "'.$mylocalhost.'";
                    });
                }, 100);
            </script>
            ';
            session_destroy();
            exit();
        }
    }else{
        echo '
        <script>
            setTimeout(function(){
                swal({
                    title: "เกิดข้อผิดพลาด!",
                    text: "ไม่พบข้อมูลของคุณในระบบ, กรุณาติดต่อผู้ดูแลระบบ!",
                    icon: "error",
                    button: "ตกลง",
                })
                .then((value) => {
                    window.location = "'.$mylocalhost.'";
                });
            }, 100);
        </script>
        ';
        session_destroy();
        exit();
    }
?>  