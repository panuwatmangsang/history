<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ลงทะเบียนข้อมูลบริษัท/กิจการ</title>
    <link rel="stylesheet" href="../css/reappl.css">
</head>
<body bgcolor ="6AC36A">
    <div class="form-box-three">
        <div class="text-appl">ลงทะเบียนข้อมูลบริษัท/กิจการ</div>
        <form id="login" class="input-group-registwo">

            <div class="compa-box">
                <label>ชื่อบริษัท</label>
                <input type="text" placeholder=" กรอกชื่อบริษัท" required>
            </div>

            <div class="type-box">
            <label>ลักษณะของธุรกิจ</label>
            <select type="text" name="Sto_group"data-val="true" >
                <option value="กิจการของคนเดียว">กิจการของคนเดียว</option>
                <option value="ห้างหุ้นส่วน ">ห้างหุ้นส่วน </option>
                <option value="ห้างหุ้นส่วนจำกัด">ห้างหุ้นส่วนจำกัด</option>
            </select>
            </div>

            <div class="con-box">
                <label>ชื่อผู้ติดต่อ</label>
                <input type="text" placeholder=" กรุณากรอกชื่อผู้ติดต่อ" required>
            </div>

            <div class="num-box">
                <label>โทรศัพท์</label>
                <input type="text" placeholder=" กรุณากรอกเบอร์โทรศัพท์" required>
            </div>

            <div class="email-box">
                <label>อีเมล</label>
                <input type="email" placeholder=" กรุณากรอกอีเมล" required>
            </div>
        
            <div class="loc-box">
                <label>ตำแหน่งที่ตั้ง</label>
                <input type="email" placeholder=" กรุณากรอกตำแหน่งที่ตั้ง" required>
            </div>

            <div class="logo-box">
                <label>เลือกไฟล์โลโก้บริษัท</label>
                <input type="file">
            </div>

            <div class="ser-box">
                <label>แนบไฟล์หนังสือการประกอบธุระกิจ</label>
                <input type="file" placeholder="กรุณากรอกรหัสผ่าน" required>
            </div>

            <div class="pcon-box">
                <label>รหัสผ่าน</label>
                <input type="password" placeholder=" กรุณากรอกรหัสผ่าน" required>
            </div>

            <div class="cp-con-box">
                <label>ยืนยันรหัสผ่าน</label>
                <input type="password" placeholder=" กรุณากรอกยืนยันรหัสผ่าน" required>
            </div>

      </form>
          <button type="submit" class="confirm-appl">ยืนยัน</button>
          <button type="button" class="cancel-appl">ยกเลิก</button>
    </div>
</body>
</html>