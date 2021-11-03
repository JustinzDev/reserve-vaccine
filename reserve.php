<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="<?php echo $mylocalhost; ?>assets/reserve.php?v=<?=time();?>" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">

    <!--เรียกสกอบาร์-->
    <STYLE TYPE="text/css">
        html {
            overflow: -moz-scrollbars-vertical;
            overflow-y: scroll;
        }
    </STYLE>

    <title>การจองวัคซีน</title>

</head>

<body>
    
    <div class="Box_Input_vaccin01">

        <div class="Box_Input_vaccin02">
            <form action="#" method="POST">

                <div class="Contorl_form">
                    <br>
                    <label>บัตรประชาชน </label>
                    <input type="text" name="idcard" pattern="[0-9]" maxlength="13"  size="30" required  > <br><br>

                    <label>ชื่อจริง</label>
                    <input type="text" name="fname"    size="30" required> <br><br>

                    <label>นามสกุล</label>
                    <input type="text" name="lname"    size="30" required> <br><br>

                    <label>อายุ</label>
                    <input type="number" name="age"  size="30" required> <br><br>

                    <label>เพศ</label>
                    <input type="text" name="sex"    size="30" required> <br><br>

                    <label>ที่อยู่</label> <br>
                    <textarea  name="address" rows="4" cols="50"   required> </textarea> <br>

                    <label>เบอร์โทร</label>
                    <input type="text" name="phone " pattern="[0-9]" maxlength="10"  size="30" required> <br>

                    <label>วันเกิด</label>
                    <input type="date" name="birth"  size="30" required> <br>

                    <label>โรคประจำตัว</label>
                    <input type="text" name="disease"  size="30" required> <br>

                    <label>อีเมล์</label>
                    <input type="email" name="email" size="30" required> <br>

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
                    <input type="number" name="needles"  size="30"> <br>

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