<?php include('api/setlink.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>จองวัคซีน</title>
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
        <a style="text-decoration: none; color: black;" href="<?php echo $mylocalhost;?>">กลับหน้าหลัก</a>
    </div>
    <div class="Box_Input_vaccin01">
        <div class="Box_Input_vaccin02">
            <form action="#" method="POST">
                <div class="Contorl_form">
                    <br>
                    <label>บัตรประชาชน </label>
                    <input type="text" name="idcard" pattern="[0-9]" maxlength="13"  required  > <br><br>

                    <label>ชื่อจริง</label>
                    <input type="text" name="fname"  required> <br><br>

                    <label>นามสกุล</label>
                    <input type="text" name="lname"   required> <br><br>

                    <label>อายุ</label>
                    <input type="number" name="age" required> <br><br>

                    <label>เพศ</label>
                    <input type="text" name="sex"  required> <br><br>

                    <label>ที่อยู่</label> <br>
                    <textarea  name="address" rows="4" cols="50"   required> </textarea> <br>

                    <label>เบอร์โทร</label>
                    <input type="text" name="phone " pattern="[0-9]" maxlength="10"  required> <br>

                    <label>วันเกิด</label>
                    <input type="date" name="birth"  required> <br>

                    <label>โรคประจำตัว</label>
                    <input type="text" name="disease"  required> <br>

                    <label>อีเมล์</label>
                    <input type="email" name="email" required> <br>

                    <label>เคยรับการฉีดวัคซีนหรือยัง</label>   <br>
                    <input type="radio" name="getvac" value="1" required> <label>เคย</label><br>
                    <input type="radio" name="getvac" value="0" required> <label>ไม่เคย</label> <br>

                    <label>ประเภทวัคซีนที่ต้องการจอง</label>
                    <select name="vactype">
                        <option value="#">---Select----</option>
                        <option value="Sinovac">Sinovac</option>
                        <option value="AstraZeneca">AstraZeneca</option>
                        <option value="Pfizer">Pfizer</option>
                        <option value="Moderna">Moderna</option>
                        <option value="Sinopharm">Sinopharm</option>
                    </select>                                                                          <br>
                
                    <label>จำนวนที่ต้องการจอง</label>
                    <input type="number" name="needles" > <br>

                    <label>สถานที่ต้องการฉีด</label>
                    <select name="locationid ">
                        <option value="#">---Select----</option>
                        <option value="Sinovac">โคโนฮะงาคุเระ</option>
                        <option value="AstraZeneca">คิริงาคุเระ</option>
                        <option value="Pfizer">อิวะงาคุเระ</option>
                        <option value="Moderna">คุโมะงาคุเระ</option>
                        <option value="Sinopharm">ซึนะงาคุเระ</option>
                    </select>                                                                           <br>

                    <input type="submit">
                </div>

            </form>
        </div>
    </div>
</body>
</html>