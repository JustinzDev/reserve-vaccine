<?php
    include('connect.php');
    include('setlink.php');

    $QUERYHOSPITAL = mysqli_query($conn, "SELECT * FROM locations");

    $resultArray = array();
    while($ROWS = mysqli_fetch_array($QUERYHOSPITAL)){

        $QUERYVACCINE_HOSPITAL_1 = mysqli_query($conn, "SELECT res_vactype FROM reserves WHERE res_locationid = '".$ROWS['lct_id']."' AND res_vactype = 'Sinovac'");
        $RESULTVACCINE_HOSPITAL_1 = mysqli_num_rows($QUERYVACCINE_HOSPITAL_1);

        $QUERYVACCINE_HOSPITAL_2 = mysqli_query($conn, "SELECT res_vactype FROM reserves WHERE res_locationid = '".$ROWS['lct_id']."' AND res_vactype = 'AstraZeneca'");
        $RESULTVACCINE_HOSPITAL_2 = mysqli_num_rows($QUERYVACCINE_HOSPITAL_2);

        $QUERYVACCINE_HOSPITAL_3 = mysqli_query($conn, "SELECT res_vactype FROM reserves WHERE res_locationid = '".$ROWS['lct_id']."' AND res_vactype = 'Pifzer'");
        $RESULTVACCINE_HOSPITAL_3 = mysqli_num_rows($QUERYVACCINE_HOSPITAL_3);

        $QUERYVACCINE_HOSPITAL_4 = mysqli_query($conn, "SELECT res_vactype FROM reserves WHERE res_locationid = '".$ROWS['lct_id']."' AND res_vactype = 'Moderna'");
        $RESULTVACCINE_HOSPITAL_4 = mysqli_num_rows($QUERYVACCINE_HOSPITAL_4);

        $QUERYVACCINE_HOSPITAL_5 = mysqli_query($conn, "SELECT res_vactype FROM reserves WHERE res_locationid = '".$ROWS['lct_id']."' AND res_vactype = 'Sinopharm'");
        $RESULTVACCINE_HOSPITAL_5 = mysqli_num_rows($QUERYVACCINE_HOSPITAL_5);

        array_push($resultArray, ['hospitalname' => $ROWS['lct_name'], 
        'hospitalmax' => $ROWS['lct_max'],
        'hospitalcapa' => $ROWS['lct_capa'],
        'hospital_vaccine_1' => $RESULTVACCINE_HOSPITAL_1,
        'hospital_vaccine_2' => $RESULTVACCINE_HOSPITAL_2,
        'hospital_vaccine_3' => $RESULTVACCINE_HOSPITAL_3,
        'hospital_vaccine_4' => $RESULTVACCINE_HOSPITAL_4,
        'hospital_vaccine_5' => $RESULTVACCINE_HOSPITAL_5]);
    }
    echo json_encode($resultArray);
?>