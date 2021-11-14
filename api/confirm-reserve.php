<?php
    session_start();
    include('connect.php');
    include('setlink.php');
    error_reporting(0);

    echo '
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    ';

    $user_idcard = $_POST['user_idcard'];
    $user_fname = $_POST['user_fname'];
    $user_lname = $_POST['user_lname'];
    $user_age = $_POST['user_age'];
    $user_birthday = $_POST['user_birthday'];
    $user_gender = $_POST['user_gender'];
    $user_address = $_POST['user_address'];
    $user_phone = $_POST['user_phone'];
    $user_email = $_POST['user_email'];
    $user_disease = $_POST['user_disease'];
    $user_getvac = $_POST['user_getvac'];
    $user_vactype = $_POST['user_vactype'];
    $user_locationid = $_POST['user_locationid'];
    $user_needles = $_POST['user_needles'];

    if($user_idcard == "" || $user_phone == "" || $user_email == "" || $user_fname == "" || $user_lname == ""){
        header("location:$mylocalhost");
        exit();
    }

    $checkidcard = "SELECT res_idcard FROM reserves WHERE res_idcard = '".$user_idcard."'";
    $queryidcard = mysqli_query($conn, $checkidcard);
    $resultidcard = mysqli_fetch_array($queryidcard);

    if($resultidcard){
        echo '
            <script>
                setTimeout(function(){
                    swal({
                        title: "เกิดข้อผิดพลาด",
                        text: "รหัสบัตรประาชาชนนี้ได้ถูกลงทะเบียนไปแล้ว!",
                        type: "error",
                        showButtonCancel: true,
                    }, function(isConfirm){
                        if(isConfirm) window.location = "'.$mylocalhost.'";
                        if(isCancel) window.location = "'.$mylocalhost.'";
                    });
                }, 300);
            </script>
            ';
        session_destroy();
        exit();
    }

    $checkidcard = "SELECT res_phone FROM reserves WHERE res_phone = '".$user_phone."'";
    $queryidcard = mysqli_query($conn, $checkidcard);
    $resultidcard = mysqli_fetch_array($queryidcard);

    if($resultidcard){
        echo '
            <script>
                setTimeout(function(){
                    swal({
                        title: "เกิดข้อผิดพลาด",
                        text: "เบอร์โทรศัพท์นี้เคยลงทะเบียนไว้แล้ว!",
                        type: "error",
                        showButtonCancel: true,
                    }, function(isConfirm){
                        if(isConfirm) window.location = "'.$mylocalhost.'";
                        if(isCancel) window.location = "'.$mylocalhost.'";
                    });
                }, 300);
            </script>
            ';
        session_destroy();
        exit();
    }

    $checkidcard = "SELECT res_email FROM reserves WHERE res_email = '".$user_email."'";
    $queryidcard = mysqli_query($conn, $checkidcard);
    $resultidcard = mysqli_fetch_array($queryidcard);

    if($resultidcard){
        echo '
            <script>
                setTimeout(function(){
                    swal({
                        title: "เกิดข้อผิดพลาด",
                        text: "อีเมลนี้เคยลงทะเบียนไว้แล้ว!",
                        type: "error",
                        showButtonCancel: true,
                    }, function(isConfirm){
                        if(isConfirm) window.location = "'.$mylocalhost.'";
                        if(isCancel) window.location = "'.$mylocalhost.'";
                    });
                }, 300);
            </script>
            ';
        session_destroy();
        exit();
    }

    if($_GET['status'] == "new"){
        $addreserve = "INSERT INTO reserves (res_idcard, res_fname, res_lname, res_age, res_address, res_phone, res_sex, res_birth, res_disease, res_email, res_getvac, res_vactype, res_needles, res_locationid) 
        VALUES ('".$user_idcard."', '".$user_fname."', '".$user_lname."', '".$user_age."', '".$user_address."', '".$user_phone."', '".$user_gender."', 
        '".$user_birthday."', '".$user_disease."', '".$user_email."', '".$user_getvac."', '".$user_vactype."', '".$user_needles."', '".$user_locationid."')";
        $queryaddreserve = mysqli_query($conn, $addreserve);
        if($queryaddreserve){

            $queue_no = 1001;
            $result = mysqli_query($conn, "SELECT * FROM queues WHERE locationid = '".$user_locationid."'");
            $rowhave = mysqli_num_rows($result);
            if($rowhave > 0) $queue_no += $rowhave;
            $addqueue2 = "INSERT INTO queues SET que_no = '".$queue_no."', que_idcard = '".$user_idcard."', locationid = '".$user_locationid."', que_status = 'stable'";
            $queryaddqueue2 = mysqli_query($conn, $addqueue2);

            echo '
                <script>

                    setTimeout(function(){
                        swal({
                            title: "การจองวัคซีนสำเร็จ",
                            text: "คุณได้ทำการจองวัคซีนสำเร็จคิวของคุณคือ: '.$queue_no.'",
                            type: "success",
                            showButtonCancel: true,
                            confirmButtonColor: "#2DEE4D",
                            confirmButtonText: "ตกลง",
                        }, function(isConfirm){
                            if(isConfirm) window.location = "'.$mylocalhost.'";
                            if(isCancel) window.location = "'.$mylocalhost.'";
                        });
                    }, 300);
                </script>
            ';
        }
    }
    else if($_GET['status'] == "edit"){

        $SELECTSQL = "SELECT * FROM reserves INNER JOIN queues ON reserves.res_idcard = queues.que_idcard WHERE queues.que_idcard = '".$_SESSION['user_idcard']."'";
        $QUERYSELECT = mysqli_query($conn, $SELECTSQL);
        $RESULTSELECT = mysqli_fetch_array($QUERYSELECT);

        echo '
            <script>

                setTimeout(function(){
                    swal({
                        title: "การอัพเดทการจองสำเร็จ",
                        text: "คุณได้ทำการอัพเดทคิวการจอง: '.$RESULTSELECT['que_no'].' เรียบร้อยแล้ว",
                        type: "success",
                        showButtonCancel: true,
                        confirmButtonColor: "#2DEE4D",
                        confirmButtonText: "ตกลง",
                    }, function(isConfirm){
                        if(isConfirm) window.location = "'.$mylocalhost.'";
                        if(isCancel) window.location = "'.$mylocalhost.'";
                    });
                }, 300);
            </script>
        ';

        $SQLUPDATEQUE = "UPDATE queues SET que_idcard = '".$user_idcard."' WHERE que_idcard = '".$RESULTSELECT['que_idcard']."'";
        $QUERYUPDATEQUE = mysqli_query($conn, $SQLUPDATEQUE);

        $SQLUPDATE = "UPDATE reserves SET res_idcard = '".$user_idcard."', res_fname = '".$user_fname."', res_lname = '".$user_lname."', res_age = '".$user_age."',
        res_birth = '".$user_birthday."', res_sex = '".$user_gender."', res_address = '".$user_address."', res_phone = '".$user_phone."', res_email = '".$user_email."',
        res_disease = '".$user_disease."', res_getvac = '".$user_getvac."' WHERE res_idcard = '".$_SESSION['user_idcard']."'";
        $QUERY = mysqli_query($conn, $SQLUPDATE);

        session_destroy();
    }
    
?>