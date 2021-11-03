<?php include('api/setlink.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="<?php echo $mylocalhost; ?>assets/css/top-navbar.css?v=<?=time();?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">

    <script>
        $(document).ready(function(){
            var trigger = $('#topnavbar a'),
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
    <div class="topnav" id="topnavbar">
        <div style="margin-left: 20px;">
            <h1>เว็บไซต์จองวัคซีนที่ดีที่สุดในประเทศไทย</h1>
        </div>
        <div class="right-menu">
            <a href="<?php echo $mylocalhost;?>">หน้าหลัก</a>
            <a href="#" data-target="reserve">จองคิววัคซีน</a>
            <a href="#" data-target="check-vaccine">เช็คคิววัคซีน</a>
            <a href="#">ติดต่อทีมงาน</a>
        </div>
        <i class="fa fa-bars" onclick="downmenu()"></i>
    </div>

    <div class="modal fade" id="ListInfoitem">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">รายละเอียดสินค้า</h5>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
            </div>
            <div class="modal-body">
                <div id="listitem_detail">  
                </div> 
                <div class="modal-footer">
                    
                </div>
            </div>
            </div>
        </div>
    </div>
</body>
<script>
    function downmenu(){
        var menu = document.getElementById('topnavbar');
        if(menu.className == 'topnav'){
            menu.className += " responsive";
        }
        else{
            menu.className = "topnav";
        }
    }
</script>
</html>