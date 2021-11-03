<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script>
        $(document).ready(function(){
            var trigger = $('.menu-blackground a'),
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
    <div class="menu-blackground">
        <hr>
        <a href="#" data-target="reserve"> 
            <img src="../best-of-vaccine/assets/img/menu1.png">
        </a>
        <a href="#" data-target="reserve"> 
            <img src="../best-of-vaccine/assets/img/menu2.png">
        </a>
        <a href="#" data-target="reserve"> 
            <img src="../best-of-vaccine/assets/img/menu3.png">
        </a>
        <hr>
    </div>
    
    <div class="text-blackground2">
        <h2>ขอบคุณทุกท่านที่สนใจจองวัคซีนกับทางโรงพยาบาลของเรา</h2>
        <h5>เนื่องจากขณะนี้มีผู้ให้ความสนใจจองวัคซีนครบตามจำนวนที่โรงพยาบาลคาดว่าจะได้รับจัดสรรค์จากองค์การเภสัชแล้ว ทางโรงพยาบาลจึงใคร่ขอปิด <br> การจองและช่องทางการชำระเงินทั้งหมด</h5>
        <u>ตั้งแต่วันที่ 13 กระด้อกกระแด้กกระดาคม 2564 เวลา 12:00 น. (เที่ยง) เป็นต้นไป</u>
        <hr>
        <br>
        <br>
        <br>
        <br>
    </div>
</body>
</html>