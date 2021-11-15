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
    <nav>
        <div class="menu-blackground">
            <hr>
            <a data-target="check-vaccine"> 
                <img src="../best-of-vaccine/assets/img/menu1.png">
            </a>
            <a data-target="edit-reserve-login"> 
                <img src="../best-of-vaccine/assets/img/menu3.png">
            </a>
            <hr>
        </div>
    </nav>
    <main>
        <div class="text-blackground2">
            <h2>ขอบคุณทุกท่านที่สนใจจองวัคซีนกับทางโรงพยาบาลของเรา</h2>
            <h5>"Work From Home มันอ้างว้าง ให้เราไปอยู่ข้างๆไหม จะได้ไม่เหงา" <br> ครูเรียกให้ตอบ เน็ตก็พร้อมกระตุกทันที</h5>
            <u>มหาลัยก็ไม่ได้ไป หวานใจก็ไม่ได้เจอ เฮ้อ</u> &nbsp;   <u> ยากกว่าเดาข้อสอบ คือเดาคำตอบจากใจเธอ เฮ้อ</u>
            <hr>
            <br>
            <br>
            <br>
            <br>
        </div>
    </main>
</body>
</html>