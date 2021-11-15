<?php include('api/setlink.php'); ?>
<?php include('api/connect.php');
    $queryvaccines = mysqli_query($conn, "SELECT `vac_name` FROM `vaccines`");
    $querylocation = mysqli_query($conn, "SELECT `lct_name`,`lct_id` FROM `locations`");
    

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
    <main>
        <table class="table">
            <tr>
                <th>#</th>
                <th>ชื่อโรงพยาบาล</th>
                <th>จำนวน</th>
            </tr>
            <tr>
                <td>1</td>
                <td>โรงพยาบาลบางซื่อ</td>
                <td>10</td>
            </tr>
            <tr>
                <td>2</td>
                <td>โรงพยาบาลบางโพ</td>
                <td>30</td>
            </tr>
            <tr>
                <td>3</td>
                <td>โรงพยาบาลบางโพ</td>
                <td>30</td>
            </tr>
            <tr>
                <td>4</td>
                <td>โรงพยาบาลบางโพ</td>
                <td>30</td>
            </tr>
            <tr>
                <td>5</td>
                <td>โรงพยาบาลบางโพ</td>
                <td>30</td>
            </tr>
        </table>
    </main>
    <nav>
        <div class="menutype">
            <a style="text-decoration: none; color: black;" href="<?php echo $mylocalhost; ?>">&laquo;</a>
            <a data-target="check-vaccine">1</a>
            <a data-target="check-vaccine">2</a>
            <a data-target="check-vaccine">3</a>
            <a data-target="check-vaccine">4</a>
            <a data-target="check-vaccine">5</a>
            <a style="text-decoration: none; color: black;" href="<?php echo $mylocalhost; ?>">&raquo;</a>
        </div>
    </nav>
</body>

</html>