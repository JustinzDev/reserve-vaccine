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

    <script>

        async function getDataFromAPI(){

            let idcard = document.getElementById('idcard').value;
            let phone = document.getElementById('phone').value;

            let link = "<?php echo $mylocalhost;?>/api/check-queue?user_idcard="+idcard+"&user_phone="+phone;
            let response = await fetch(link);
            let rawData = await response.text();
            let objectData = JSON.parse(rawData);
            let resultdata = document.getElementById('result-data');
            if(objectData.length == 0){
                resultdata.innerHTML = "ไม่พบข้อมูล!";
                resultdata.style.color = "red";
            }
            else{
                document.getElementById('form-control-input').style.display = "none";
                let content = "บัตรประชาชน: "+objectData[0].res_idcard+"<br/> \
                "+"ชื่อ-นามสกุล: "+objectData[0].res_fname+" "+objectData[0].res_lname;
                let result = document.getElementById('show-Result');
                let span = document.createElement('span');
                span.innerHTML = content;
                result.appendChild(span);
            }
        }
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
        <div class="divA" id="form-control-input">
            <div class="divC">
                <h3>กรุณากรอกข้อมูลเพื่อค้นหาลำดับการจอง</h3>
                <p id="text1">ข้อมูลที่ใช้สำหรับกรอกส่วนนี้เป็นข้อมูลส่วนบุคคลที่ได้ทำการลงทะเบียนการจองวัคซีน</p>
                <div class="container1">
                    <div class="row">
                        <h2 id="result-data"></h2>
                        <div class='col-lg-12'>
                            <label>กรอกเลขบัตรประชาชน 13 หลัก</label>
                                <input type="text" name="user_idcard" id="idcard" class="form-control" maxlength="13">
                            <span class="error"></span>
                        </div>
                    </div>
                </div>
                <label id="text4">เบอร์โทรศัพท์มือถือที่ลงทะเบียน</label><br>
                <input id="phone" name="user_phone" pattern="(08|09|06)[0-9]{8}" maxlength="10" type="tel" size="20px" required><br>
                <div class="divD">
                    <button id="login" type="submit" onclick="getDataFromAPI()">เข้าสู่ระบบ</button>
                </div>  
                <h5 id="text6">***ถ้ามีปัญหาในการใช้งานระบบโปรดเเจ้งหรือทำการติดต่อมาที่ฝ่ายสนับสนุน***</h5>  
            </div>
        </div>
        <div id="show-Result">
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

    $(document).ready(function(){
  $('#idcard').on('keyup',function(){
    if($.trim($(this).val()) != '' && $(this).val().length == 13){
      id = $(this).val().replace(/-/g,"");
      var result = Script_checkID(id);
      if(result === false){
        $('span.error').removeClass('true').text('เลขบัตรผิด');
      }else{
        $('span.error').addClass('true').text('เลขบัตรถูกต้อง');
      }
    }else{
      $('span.error').removeClass('true').text('');
    }
  })
});

    function Script_checkID(id){
        if(! IsNumeric(id)) return false;
        if(id.substring(0,1)== 0) return false;
        if(id.length != 13) return false;
        for(i=0, sum=0; i < 12; i++)
            sum += parseFloat(id.charAt(i))*(13-i);
        if((11-sum%11)%10!=parseFloat(id.charAt(12))) return false;
        return true;
    }
    function IsNumeric(input){
        var RE = /^-?(0|INF|(0[1-7][0-7]*)|(0x[0-9a-fA-F]+)|((0|[1-9][0-9]*|(?=[\.,]))([\.,][0-9]+)?([eE]-?\d+)?))$/;
        return (RE.test(input));
    }
</script>
</html>