<?php include('api/setlink.php'); ?>
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
    <script>
        $(document).ready(function() {
            var trigger = $('.menutype a'),
                container = $('#contentdata');

            trigger.on('click', function() {
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
            <a style="text-decoration: none; color: black;" href="<?php echo $mylocalhost; ?>">กลับหน้าหลัก</a>
        </div>
        <header>
            <main>
                <div class="Box_Input_vaccin01">
                    <div class="Box_Input_vaccin02">
                        <form action="<?php echo $mylocalhost;?>api/confirm-reserve?status=new" method="POST">
                            <div class="container1">
                                <div class="row">
                                    <div class='col-lg-12'>
                                        <label>กรอกเลขบัตรประชาชน 13 หลัก</label>
                                        <input type="text" id="idcard" name="user_idcard" class="form-control" maxlength="13" required />
                                        <span class="error"></span>
                                    </div>
                                </div>
                            </div>

                            <label for="firstname">ชื่อจริง *</label><br/>
                            <input type="text" name="user_fname"  pattern="^[ก-๏\s]+$" required><br/>

                            <label for="lastname">นามสกุล *</label><br/>
                            <input type="text" name="user_lname" pattern="^[ก-๏\s]+$" required><br/>

                            <label for="age">อายุ *</label><br/>
                            <input type="number" name="user_age" min="0" step="1" required><br/>

                            <label for="birth">วันเกิด *</label><br/>
                            <input type="date" name="user_birthday" required/><br/>

                            <label for="gender">เพศ *</label><br/>
                            <select name="user_gender" required>
                                <option value="male">ชาย</option>
                                <option value="female">หญิง</option>
                                <option value="other">อื่นๆ</option>
                            </select> <br/>

                            <label for="address">ที่อยู่ *</label><br/>
                            <textarea name="user_address" cols="30" rows="10" required></textarea> <br>

                            <label for="phone ">เบอร์โทร *</label><br/>
                            <input type="text" name="user_phone"  id="numberphone" pattern="(08|09|06)[0-9]{8}" maxlength="10" required><br/>
                            <span id="phonestatus"></span><br/>

                            <label for="email">อีเมล์ *</label><br/>
                            <input type="email" name="user_email" required/><br/>

                            <label for="disease">โรคประจำตัว *</label><br/>
                            <select name="user_disease" required>
                                <option value="ไม่มี">ไม่มี</option>
                                <option value="โรคทางเดินหายใจเรื้อรังรุนแรง">โรคทางเดินหายใจเรื้อรังรุนแรง</option>
                                <option value="โรคหัวใจและหลอดเลือด">โรคหัวใจและหลอดเลือด</option>
                                <option value="โรคไตเรื้อรัง">โรคไตเรื้อรัง</option>
                                <option value="โรคหลอดเลือดสมอง">โรคหลอดเลือดสมอง</option>
                                <option value="โรคมะเร็ง">โรคมะเร็ง</option>
                                <option value="โรคเบาหวาน">โรคเบาหวาน</option>
                                <option value="โรคอ้วน">โรคอ้วน</option>
                                <option value="อื่นๆ">อื่นๆ</option>
                            </select> <br/>

                            <label for="disease">เคยรับการฉีควัคฉีนหรือยัง *</label><br/>
                            <div class="radiodiv">
                                <input type="radio" name="user_getvac" value="0" required/>
                                <label>เคย</label><br/>
                                <input style="margin-left:15px"; type="radio" name="user_getvac" value="1" required/>
                                <label>ไม่เคย</label><br/>
                            </div>

                            <label for="vactype">วัคซีนที่ต้องการจอง *</label><br/>
                            <select name="user_vactype" required>
                                <option value="Sinovac">Sinovac</option>
                                <option value="AstraZeneca">AstraZeneca</option>
                                <option value="Pifzer">Pifzer</option>
                                <option value="Moderna">Moderna</option>
                                <option value="Sinopharm">Sinopharm</option>
                            </select> <br/>

                            <label for="locationid">สถานที่ต้องการเข้ารับฉีควัคซีน *</label><br/>
                            <select name="user_locationid" required>
                                <option value="1">รพ.1</option>
                                <option value="2">รพ.2</option>
                                <option value="3">รพ.3</option>
                                <option value="4">รพ.4</option>
                                <option value="5">รพ.5</option>
                            </select> <br/>
                            <div class="needles">
                                <label for="needles">จำนวนวัคซีนที่ต้องการจอง *</label><br/>
                                <input style="margin-left:15px" type="radio" name="user_needles" value="2" required/>
                                <label> Full dose (2 เข็ม)</label></br>
                                <input style="margin-left:15px" type="radio" name="user_needles" value="1" required/>
                                <label> Half dose (1 เข็ม)</label></br>
                            </div>
                                                         
                            <button type="submit">ยืนยันการจอง</button>
                        </form>
                    </div>
                </div>
            </main>
</body>
<script> 
    $(document).ready(function(){

        $('#numberphone').on('keyup', function(){
            var checkphone = document.getElementById("numberphone"), phonepattern = checkphone.pattern;
            var patternphone = new RegExp(phonepattern);
            var resultpatternphone = patternphone.test(checkphone.value);

            if(!resultpatternphone){
                var phonestatus = document.getElementById('phonestatus').innerHTML = "รูปแบบเบอร์โทรศัพท์ผิดพลาด";
                var phonestatus = document.getElementById('phonestatus').style.color = "red";
            }
            else{
                var phonestatus = document.getElementById('phonestatus').innerHTML = "";
            }
        })
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