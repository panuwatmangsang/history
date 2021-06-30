<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ</title>
    <link rel="stylesheet" href="../css/log.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body bgcolor="6AC36A">
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Jobs Search</button>
                <button type="button" class="toggle-btn-ap" onclick="register()">Applicants Search</button>
            </div>
            <form id="login" class="input-group">
                <div class="text-j">เข้าสู่ระบบสำหรับผู้สมัคร</div>

                <input type="email" placeholder="อีเมลผู้สมัคร" required>
                <input type="password" class="input-control" placeholder="รหัสผ่านผู้สมัคร" required>
                <i class="fa fa-eye password-show"></i>

                <div class="chech-box">
                    <input type="checkbox">
                </div>

                <span class="rem">ลืมรหัสผ่าน</span>
                <botton type="submit" class="submit-btn">เข้าสู่ระบบ</botton>
                <div class="text">ยังไม่ได้เป็นสมาชิก JobsIT?</div>
                <button type="button" class="toggle-re">สมัครสมาชิก</button>
            </form>

            <form id="register" class="input-group">
                <div class="text-a">เข้าสู่ระบบสำหรับผู้ประกอบการ</div>
                <input type="email" placeholder="อีเมลผู้ประกอบการ" required>
                <input type="password" class="input-control" placeholder="รหัสผ่านผู้ประกอบการ" required>
                <i class="fa fa-eye password-show"></i>

                <div class="chech-box">
                    <input type="checkbox">
                </div>

                <span class="rem">ลืมรหัสผ่าน</span>
                <botton type="submit" class="submit-btn-ap">เข้าสู่ระบบ</botton>
                <div class="text">ยังไม่ได้เป็นสมาชิก JobsIT?</div>
                <button type="button" class="toggle-re">สมัครสมาชิก</button>
            </form>
        </div>
    </div>
    <script src="js/jquery-latest.min.js"></script>
    <script>
        function register() {
            document.getElementById("login").style.transform = "translateX(-400px)";
            document.getElementById("register").style.transform = "translateX(-400px)";
            btn.style.transform = "translateX(170px)";
        }
        function login() {
            document.getElementById("login").style.transform = "translateX(0px)";
            document.getElementById("register").style.transform = "translateX(0px)";
            btn.style.transform = "translateX(0px)";

        }
        $(function(){
		$(".password-show").click(function(event) {
			$(this).toggleClass('fa-eye-slash');
			var x = $(".input-control").attr("type"); //getting attribute in variable
			if (x == "password") 
			{
				$(".input-control").attr("type","text"); //setting attribute on condition
			}
			else
			{
				$(".input-control").attr("type","password");
			}
		});
	})
    </script>
</body>

</html>