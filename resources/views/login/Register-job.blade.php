<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ลงทะเบียนข้อมูลผู้สมัคร</title>
    <link rel="stylesheet" href="../css/rejob.css">
</head>
<body bgcolor ="6AC36A">
    <div class="form-box-two">
        <div class="text-job">ลงทะเบียนข้อมูลผู้สมัคร</div>
        <form id="login" class="input-group-regisone">

            <div class="details-name">
                <label>ชื่อผู้ใช้</label>
                <input type="text"  placeholder=" กรุณากรอกชื่อผู้ใช้" required>
            </div>
            
            <div class="details-email">
                <label>อีเมล</label>
                <input type="email"  placeholder=" กรุณากรอกอีเมล" required>
            </div>

            <div class="details-cemail">
                <label>ยืนยันอีเมล</label>
                <input type="email" placeholder=" กรุณากรอกยืนยันอีเมล" required>
            </div>

            <div class="details-pass">
                <label>รหัสผ่าน</label>
                <input type="password" placeholder=" กรุณากรอกรหัสผ่าน" required>
            </div>

            <div class="details-cpass">
                <label>ยืนยันรหัสผ่าน</label>
                <input type="password" class="input-field-regis" placeholder=" กรุณากรอกยืนยันรหัสผ่าน" required>
            </div>
      </form>
            <button type="submit" class="confirm-job">ยืนยัน</button>
            <button type="button" class="cancel-job">ยกเลิก</button>
    </div>
</body>   
</html>