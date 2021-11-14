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

    $newlink = $mylocalhost."api/cancel-reserve?user_idcard=".$_GET['user_idcard']."&user_phone=".$_GET['user_phone'];

    echo '
    <script>
        setTimeout(function(){
            swal({
                title: "คุณแน่ใจหรือไม่?",
                text: "คุณแน่ใจหรือไม่ที่ต้องการยกเลิกสิทธิ์การจองของคุณ? \n [!] คุณจะไม่สามารถลงทะเบียนด้วยเลขบัตรประชาชนนี้ได้อีก",
                icon: "warning",
                buttons: ["ยกเลิก", "ยืนยัน"],
                dangerMode: true,
              })
              .then((willDelete) => {
                if (willDelete) {
                    window.location = "'.$newlink.'";
                } else {
                    window.location = "'.$mylocalhost.'";
                }
              });
        }, 300);
    </script>
    ';

?>