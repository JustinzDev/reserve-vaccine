<?php include('api/setlink.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เช็คคิววัคซีน</title>
    <link href="<?php echo $mylocalhost; ?>assets/css/main.css?v=<?=time();?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            var trigger = $('.menutype a'),
                container = $('#contentdata');

            trigger.on('click', function(){
                var $this = $(this)
                target = $this.data('target');

                container.load(target);
                return false;
            });
        });
    </script>
</head>
<body>
    <div class="menutype">
        <a data-target="reserve">จองวัคซีน</a>
        <a data-target="check-vaccine">เช็คคิววัคซีน</a>
    </div>
    <div class="divA">
        <div class="divC">
            <h3>กรุณากรอกข้อมูลเพื่อค้นหาลำดับการจอง</h3>
            <p id="text1">ข้อมูลที่ใช้สำหรับกรอกส่วนนี้เป็นข้อมูลส่วนบุคคลที่ได้ทำการลงทะเบียนการจองวัคซีน</p>
            <label id="text2">เลขบัตรประชาชน 13 หลัก</label><br>
            <input id="text3" type="text" size="20px"><br>
            <label id="text4">เบอร์โทรศัพท์มือถือที่ลงทะเบียน</label><br>
            <input id="text5" type="text" size="20px"><br>
            <div class="divD">
                <button class="button1">LOGIN</button>
                <button class="button2">RESET</button>
            </div>  
            <p id="text6">***ถ้ามีปัญหาในการใช้งานระบบโปรดเเจ้งหรือทำการติดต่อมาที่ฝ่ายสนับสนุน***</p>  
        </div>
    </div>
</body>
</html>