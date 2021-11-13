<?php
    include('connect.php');
    include('setlink.php');

    $querysinovac = mysqli_query($conn, "SELECT res_vactype FROM reserves WHERE res_vactype = 'Sinovac'");
    $countsinovac = mysqli_num_rows($querysinovac);

    $queryastra = mysqli_query($conn, "SELECT res_vactype FROM reserves WHERE res_vactype = 'AstraZeneca'");
    $countastra = mysqli_num_rows($queryastra);

    $querypifzer = mysqli_query($conn, "SELECT res_vactype FROM reserves WHERE res_vactype = 'Pifzer'");
    $countpifzer = mysqli_num_rows($querypifzer);

    $querymoderna = mysqli_query($conn, "SELECT res_vactype FROM reserves WHERE res_vactype = 'Moderna'");
    $countmoderna = mysqli_num_rows($querymoderna);

    $querysinopharm = mysqli_query($conn, "SELECT res_vactype FROM reserves WHERE res_vactype = 'Sinopharm'");
    $countsinopharm = mysqli_num_rows($querysinopharm);

    $resultArray = array();
    array_push($resultArray, $countsinovac);
    array_push($resultArray, $countastra);
    array_push($resultArray, $countpifzer);
    array_push($resultArray, $countmoderna);
    array_push($resultArray, $countsinopharm);

    echo json_encode($resultArray);
?>