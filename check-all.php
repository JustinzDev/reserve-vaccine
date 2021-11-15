<?php include('api/setlink.php'); ?>
<?php include('api/connect.php');
    
    $per_page = 2;
    if (isset($_GET['page'])) $page = $_GET['page'];
    else $page = 1;

    $start = ($page - 1) * $per_page;

    $SQL1 = "SELECT reserves.res_locationid, reserves.res_fname, reserves.res_lname, locations.lct_id, locations.lct_name FROM reserves INNER JOIN locations 
    ON reserves.res_locationid = locations.lct_id LIMIT {$start}, {$per_page}";
    $SQLQUERY1 = mysqli_query($conn, $SQL1);
    
    
    $SQL2 = "SELECT reserves.res_locationid, reserves.res_fname, reserves.res_lname, locations.lct_id, locations.lct_name FROM reserves INNER JOIN locations 
    ON reserves.res_locationid = locations.lct_id";
    $SQLQUERY2 = mysqli_query($conn, $SQL2);
    $TOTAL_RECORD = mysqli_num_rows($SQLQUERY2);
    $TOTAL_PAGE = ceil($TOTAL_RECORD / $per_page);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>จองวัคซีน</title>
    <link href="<?php echo $mylocalhost; ?>assets/css/main.css?v=<?= time(); ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


</head>

<body>

    <nav>
        <div class="menutype">
        <a style="text-decoration: none; color: black;" href="<?php echo $mylocalhost; ?>">โรงพยาบาล</a>
            <a style="text-decoration: none; color: black;" href="<?php echo $mylocalhost; ?>">กลับหน้าหลัก</a>
        </div>
    </nav>

    <main>
        <h2 style="text-align:center; margin-top:20px;">หน้า <?php echo $_GET['page'];?></h2>
        <table class="table">
            <tr>
                <th>#</th>
                <th>ชื่อ - นามสกุล</th>
                <th>ชื่อโรงพยาบาลที่จองวัคซีน</th>
            </tr>
            <?php $number_no = 1;
            while($ROWS = mysqli_fetch_array($SQLQUERY1)){?>
                <tr>
                
                    <td><?php echo $number_no++;?></td>
                    <td><?php echo $ROWS['res_fname'];?> <?php echo $ROWS['res_lname'];?></td>
                    <td><?php echo $ROWS['lct_name'];?></td>
                </tr>
            <?php }?>
        </table>
    </main>
    <nav>
        <div class="menutype">
            <a href="./check-all?page=1" style="text-decoration: none; color: black;"><<</a>
            <?php for($i=1; $i<=$TOTAL_PAGE; $i++){?>
                <a href="./check-all?page=<?php echo $i;?>" style="text-decoration: none; color: black;"><?php echo $i;?></a>
            <?php }?>
            <a href="./check-all?page=<?php echo $TOTAL_PAGE;?>" style="text-decoration: none; color: black;">>></a>
        </div>
    </nav>
</body>

</html>