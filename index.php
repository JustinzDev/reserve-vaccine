<?php include('api/setlink.php'); error_reporting(0)?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เว็บไซต์จองวัคซีน</title>
    <link href="<?php echo $mylocalhost; ?>assets/css/main.css?v=<?=time();?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    

    <script>
        async function getDataFromAPI(){
            let response = await fetch('api/list-vaccine');
            let rawData = await response.text();
            let objectData = JSON.parse(rawData);
            console.log(objectData);

            let sinovac = document.getElementById('sinovac');
            sinovac.innerHTML = "Sinovac: "+objectData[0]+" คน";

            let astraZeneca = document.getElementById('astraZeneca');
            astraZeneca.innerHTML = "AstraZeneca: "+objectData[1]+" คน";

            let pifzer = document.getElementById('pifzer');
            pifzer.innerHTML = "Pifzer: "+objectData[2]+" คน";

            let moderna = document.getElementById('moderna');
            moderna.innerHTML = "Moderna: "+objectData[3]+" คน";

            let sinopharm = document.getElementById('sinopharm');
            sinopharm.innerHTML = "Sinopharm: "+objectData[3]+" คน";
        }
        getDataFromAPI();
    </script>

</head>
<body>
    <main>
        <?php 
        if($_COOKIE['loadmodal'] == 0){
            setcookie("loadmodal", 1, time() + 1800); 
        ?>
            <div id="myModal" class="modal fade" tabindex="-1">
                <div class="modal-dialog modal-dialog-scrollable modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">รายละเอียดการฉีดวัคซีนทางเลือก</h5> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <?php include('detail-list.html');?>
                        </div>
                        <div class="modal-footer"> <button type="button" class="btn btn-primary" data-bs-dismiss="modal">ยอมรับ</button> </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
        <div class="blackground">
            <div class="image-logo"><img src="../best-of-vaccine/assets/img/logo.png"width="500px" height="300px"></div>
            <div class="message-logo">
                <h4>ระบบจองวัคซีนทางเลือก</h4>
                <hr size="10">
                <h4 style="margin-bottom:30px;">สำหรับประชาชนทั่วไปที่มีความประสงค์ต้องการจะจองวัคซีนทางเลือก</h4>
            </div>
        </div>
        <h5 style="margin-top:30px;">( วัคซีนจัดสรรโดยรัฐบาล )</h5>
        <div class="text-blackground1">
            <h5>[คำเตือน]</h5>
            <h5>การฉีดวัคซีนจะไม่มีค่าใช้จ่าย ส่วนการจองวัคซีนโควิด 19 ของสถานพยาบาลเอกชนเป็นทางเลือกหนึ่งที่ประชาชนสามารถเลือกรับบริการได้ แต่ต้องชำระค่าใช้จ่ายเอง</h5>
        </div>
        <div class="list-of-vaccine">
            <h4 id="sinovac"></h4><br/>
            <h4 id="astraZeneca"></h4><br/>
            <h4 id="pifzer"></h4><br/>
            <h4 id="moderna"></h4><br/>
            <h4 id="sinopharm"></h4><br/>
        </div>
        <div id="contentdata">
            <?php include('home.php');?>
        </div>
    </main>
    <footer>
        Edit by ....
    </footer>
</body> 
<script type="text/javascript">

    $(window).on('load',function(){
        $('#myModal').modal('show');
    });
</script>
</html>