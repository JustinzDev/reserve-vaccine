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
            var trigger = $('.menutype a'), container = $('#contentdata');

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
    <header>
        <div class="menutype">
            <a data-target="reserve">จองวัคซีน</a>
            <a data-target="check-vaccine">เช็คคิววัคซีน</a>
            <a style="text-decoration: none; color: black;" href="<?php echo $mylocalhost;?>">กลับหน้าหลัก</a>
        </div>
    </header>
    <main>
        <div class="divA">
            <div class="divC">
                <h3>กรุณากรอกข้อมูลเพื่อค้นหาลำดับการจอง</h3>
                <p id="text1">ข้อมูลที่ใช้สำหรับกรอกส่วนนี้เป็นข้อมูลส่วนบุคคลที่ได้ทำการลงทะเบียนการจองวัคซีน</p>
                <label id="text2">เลขบัตรประชาชน 13 หลัก</label><br>
                <input id="idcard" name="idcard" pattern="[0-9]{13}" type="text" size="20px" required><br>
                <label id="text4">เบอร์โทรศัพท์มือถือที่ลงทะเบียน</label><br>
                <input id="phone" pattern="(08|09|06)[0-9]{8}" type="tel" size="20px" required><br>
                <div class="divD">
                    <button id="login" type="submit">เข้าสู่ระบบ</button>
                </div>  
                <h5 id="text6">***ถ้ามีปัญหาในการใช้งานระบบโปรดเเจ้งหรือทำการติดต่อมาที่ฝ่ายสนับสนุน***</h5>  
            </div>
        </div>
    </main>
</body>
<script>

    document.getElementById("login").style.background="#C8C8C8";
    document.getElementById("login").style.border="#C8C8C8";
    document.getElementById("login").disabled = true;

    $('#idcard, #phone').on('keyup', function () {
        var checkidcard = document.getElementById("idcard"), idcardpattern = checkidcard.pattern;
        var patternidcard = new RegExp(idcardpattern);
        var resultpatternidcard = patternidcard.test(checkidcard.value);

        var checkphone = document.getElementById("phone"), phonepattern = checkphone.pattern;
        var patternphone = new RegExp(phonepattern);
        var resultpatternphone = patternphone.test(checkphone.value);

        if(!resultpatternidcard || !resultpatternphone){
            document.getElementById("login").style.background="#C8C8C8";
            document.getElementById("login").style.border="#C8C8C8";
            document.getElementById("login").disabled = true;
        }
        else if(resultpatternidcard && resultpatternphone){
            document.getElementById("login").style.background="rgb(159, 255, 114)";
            document.getElementById("login").disabled = false;
        }
    });
</script>
</html>