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
                        <form action="#" method="POST">
                            <div class="Contorl_form">
                                <table>
                                    <tr>
                                        <td> <label>บัตรประชาชน </label> </td>
                                    <tr>
                                    <tr>
                                        <td> <input type="text" name="idcard" pattern="[0-9]{13}" maxlength="13" required> </td>
                                    </tr>

                                    <tr>
                                        <td><label>ชื่อจริง</label></td>
                                        <td><label>นามสกุล</label></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="fname" required></td>

                                        <td><input type="text" name="lname" required></td>
                                    </tr>

                                    <tr>
                                        <td><label>อายุ</label></td>
                                        <td><label>เพศ</label></td>
                                    </tr>

                                    <tr>
                                        <td><input type="number" name="age" min="0" step="1" required> </td>

                                        <td>
                                            <select name="sex">
                                                <option value="#">---Select----</option>
                                                <option value="male">ชาย</option>
                                                <option value="female">หญิง</option>
                                                <option value="other">อื่นๆ</option>
                                            </select> 
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><label>ที่อยู่</label></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2"><textarea name="address" rows="4" cols="50" required> </textarea> </td>
                                    </tr>

                                    <tr>
                                        <td><label>วันเกิด</label></td>
                                        <td><label>โรคประจำตัว</label></td>
                                    </tr>

                                    <tr>
                                        <td><input type="date" name="birth" required></td>

                                        <td><input type="text" name="disease" required></td>
                                    </tr>

                                    <tr>
                                        <td><label>เบอร์โทร</label></td>
                                        <td><label>อีเมล์</label></td>
                                    </tr>

                                    <tr>
                                        <td><input type="text" name="phone " pattern="[0-9]{10}" maxlength="10" required></td>

                                        <td><input type="email" name="email" required></td>
                                    </tr>

                                    <tr>
                                        <td><label>เคยรับการฉีดวัคซีนหรือยัง</label></td>
                        
                                    </tr>
                                    <tr>
                                        <th><input type="radio" name="getvac" value="1" required><label>เคย</label><br></th>
                        
                                    </tr>
                                    <tr>
                                        <th><input type="radio" name="getvac" value="1" required><label> ไม่เคย</label><br></th>
                                    </tr>
                                   

                                    <tr>
                                        <td><label>ประเภทวัคซีนที่ต้องการจอง</label></td>
                                        <td><label>สถานที่ต้องการฉีด</label></td>
                                    </tr>

                                    <tr>
                                            <td>
                                                <select name="vactype">
                                                    <option value="#">---Select----</option>
                                                    <option value="Sinovac">Sinovac</option>
                                                    <option value="AstraZeneca">AstraZeneca</option>
                                                    <option value="Pfizer">Pfizer</option>
                                                    <option value="Moderna">Moderna</option>
                                                    <option value="Sinopharm">Sinopharm</option>
                                                </select> 
                                            </td>

                                            <td>
                                                <select name="locationid ">
                                                    <option value="#">---Select----</option>
                                                    <option value="locationid_01">โคโนฮะงาคุเระ</option>
                                                    <option value="locationid_02">คิริงาคุเระ</option>
                                                    <option value="locationid_03">อิวะงาคุเระ</option>
                                                    <option value="locationid_04">คุโมะงาคุเระ</option>
                                                    <option value="locationid_05">ซึนะงาคุเระ</option>
                                                </select>
                                            </td>
                                    </tr>
                                    
                                    <tr>
                                        <td><label>จำนวนที่ต้องการจอง</label></td>
                                        
                                    </tr>   
                                    
                                    
                                    <tr>
                                        <td><input type="number"  min="0" step="1" name="needles"></td>

                                        
                                    </tr>
                                </table>

                                <button style="margin-top:30px;" >ยืนยันการจอง</button>
                                
                            </div>

                        </form>
                    
                    </div>
                </div>
            </main>
</body>

</html>