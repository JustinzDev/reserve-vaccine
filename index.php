<?php include('api/setlink.php'); ?>
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
</head>
<body>
    <?php include('top-navbar.php');?>
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
    <div class="card-group mt-3" id="contentdata"></div>

    <div class="blackground1">
        <img src=".//assets/img/Nhospital.png"width="500px" height="300px">
        <h4>ระบบจองวัคซีนทางเลือก</h4><hr size="10">
        <h5>สำหรับประชาชนทั่วไปที่มีความประสงค์ต้องการจะจองวัคซีนทางเลือก</h5>
    </div>
    <div class="blackground2">
        <h5>รัฐบาลได้จัดสรรวัคซีนโควิด 19 ให้กับประชาชนโดย ไม่มีค่าใช้จ่าย</h4>
        <h5>ส่วนการจองวัคซีนโควิด 19 ของสถานพยาบาลเอกชนเป็นทางเลือกหนึ่งที่ประชาชนสามารถเลือกรับบริการได้ แต่ต้องชำระค่าใช้จ่ายเอง</h5>
    </div>
   

</body> 
<script type="text/javascript">
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });
</script>
</html>