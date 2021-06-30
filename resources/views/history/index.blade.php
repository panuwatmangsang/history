@extends('jobs/jobsMaster')
@section('title','ฝากประวัติ')

@section('cssBlock')
<!-- css -->
<link rel="stylesheet" href="../css/resume.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<!-- font fontawesome -->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
@stop

@section('content')

<body>

    <div class="history">
        <div class="historyTitle">
            <p>ประวัติของคุณ</p>
        </div>
        <!-- @if($message = Session::get('success'))
        <div class="alert_success">
            <p>{{ $message }}</p>
        </div>
        @endif -->

        @foreach($historyCase as $histCase)
        <form action="#" method="post">
            {{csrf_field()}}
            <section class="myHistory">
                <p>ประวัติส่วนตัว</p>

                <div class="resumeImage2">
                    <img src="{{ asset('../resumePhoto/'.$histCase['resumePhoto']) }}">
                </div>

                <div class="checkbox2">
                    <label for="namePrefix">คำนำหน้า :</label>
                    <input type="text" placeholder="กรุณากรอกชื่อ" name="namePrefix" value="{{$histCase['namePrefix']}}">
                </div>

                <div class="firstNameInput2">
                    <label for="firstName">ชื่อ :</label>
                    <input type="text" placeholder="กรุณากรอกชื่อ" name="firstName" value="{{$histCase['firstName']}}">
                </div>

                <div class="lastNameInput2">
                    <label for="lastName">นามสกุล :</label>
                    <input type="text" placeholder="กรุณากรอกนามสกุล" name="lastName" value="{{$histCase['lastName']}}">
                </div>

                <div class="emailInput">
                    <label for="email">อีเมล :</label>
                    <input type="text" placeholder="กรุณากรอกอีเมล" name="email" value="{{$histCase['email']}}">
                </div>

                <div class="phoneNumberInput">
                    <label for="phoneNumber">เบอร์ติดต่อ :</label>
                    <input type="text" placeholder="กรุณากรอกเบอร์ติดต่อ" name="phoneNumber" value="{{$histCase['phoneNumber']}}">
                </div>

                <div class="birthday">
                    <label for="birthday">วันเกิด :</label>
                    <input type="date" id="birthday" name="birthday" value="{{$histCase['birthday']}}">
                </div>

                <div class="yearOld2">
                    <label for="yearOld">อายุ :</label>
                    <input type="text" name="yearOld" value="{{$histCase['yearOld']}}">
                    <label for="yearsOld">ปี</label>
                </div>

                <hr style="margin-top: 120px;">
            </section>

            <!-- ======================================================================================================================= -->

            <section class="educationsHistory">
                <p>ประวัติการศึกษา</p>

                <div class="universityInput">
                    <label for="university">จบจากมหาวิทยาลัย/วิทลัย :</label>
                    <input type="text" name="university" value="{{$histCase['university']}}" placeholder="กรุณากรอกมหาวิทยาลัย/วิทลัย">
                </div>
                <div class="facultyInput">
                    <label for="faculty">คณะ :</label>
                    <input type="text" name="faculty" value="{{$histCase['faculty']}}" placeholder="กรุณากรอกคณะ">
                </div>

                <div class="branchInput">
                    <label for="branch">สาขา :</label>
                    <input type="text" name="branch" value="{{$histCase['branch']}}" placeholder="กรุณากรอกสาขา">
                </div>

                <div class="gpaInput">
                    <label for="gpa">GPA :</label>
                    <input type="text" name="gpa" value="{{$histCase['gpa']}}" placeholder="กรุณากรอก GPA">
                </div>

                <div class="checkbox2_education">
                    <label for="educational">วุฒิการศึกษา :</label>
                    <input type="text" name="educational" value="{{$histCase['educational']}}">
                </div>

                <hr style="margin-top: 150px;">
            </section>

            <!-- ======================================================================================================================= -->

            <section class="myExperience">
                <p>ประสบการณ์การทำงาน</p>

                <div class="usedToWorkInput">
                    <label for="usedToWork">ประสบการณ์ที่เคยทำงานกับบริษัท (ปี) :</label>
                    <input type="text" name="experience" value="{{$histCase['experience']}}" placeholder="กรุณากรอกประสบการณ์ที่เคยทำงานกับบริษัท (ปี)">
                </div>
                <div class="dominantLanguageInput">
                    <label for="dominantLanguage">ภาษาที่ถนัด :</label>
                    <textarea name="dominantLanguage" style="width:300px; height:100px;">{{$histCase['dominantLanguage']}}</textarea>
                </div>

                <div class="LanguageLearnedInput">
                    <label for="languageLearned">ภาษาที่เคยเรียนรู้ :</label>
                    <textarea name="languageLearned" style="width:300px; height:100px;">{{$histCase['languageLearned']}}</textarea>
                </div>

                <div class="charismaInput">
                    <label for="charisma">ความสามารถพิเศษ :</label>
                    <textarea name="charisma" style="width:300px; height:100px;">{{$histCase['charisma']}}</textarea>
                </div>
            
                <hr style="margin-top: 450px;">
            </section>

            <a class="gotoTopbtn" href="#"><i class="fas fa-arrow-up"></i></a>

            <!-- ======================================================================================================================= -->

            <section class="domicile">
                <p>ภูมิลำเนา</p>

                <div class="nameVillage">
                    <label for="nameVillage">หมู่บ้าน :</label>
                    <input type="text" name="nameVillage" value="{{$histCase['nameVillage']}}" placeholder="กรุณากรอกชื่อหมู่บ้าน">
                </div>

                <div class="homeNumber">
                    <label for="homeNumber">บ้านเลขที่ :</label>
                    <input type="text" name="homeNumber" value="{{$histCase['homeNumber']}}" placeholder="กรุณากรอกบ้านเลขที่">
                </div>

                <div class="alley">
                    <label for="alley">ซอย/ตรอก :</label>
                    <input type="text" name="alley" value="{{$histCase['alley']}}" placeholder="กรุณากรอกซอย/ตรอก">
                </div>

                <div class="road">
                    <label for="road">ถนน :</label>
                    <input type="text" name="road" value="{{$histCase['road']}}" placeholder="กรุณากรอกถนน">
                </div>

                <div class="district">
                    <label for="district">ตำบล :</label>
                    <input type="text" name="district" value="{{$histCase['district']}}" placeholder="กรุณากรอกตำบล">
                </div>

                <div class="canton">
                    <label for="canton">อำเภอ :</label>
                    <input type="text" name="canton" value="{{$histCase['canton']}}" placeholder="กรุณากรอกอำเภอ">
                </div>

                <div class="province">
                    <label for="province">จังหวัด :</label>
                    <input type="text" name="province" value="{{$histCase['province']}}" placeholder="กรุณากรอกจังหวัด">
                </div>

                <div class="postalCode">
                    <label for="postalCode">รหัสไปรษณี :</label>
                    <input type="text" name="postalCode" value="{{$histCase['postalCode']}}" placeholder="กรุณากรอกรหัสไปรษณี">
                </div>

                <hr style="margin-top: 180px;">
            </section>

            <!-- ======================================================================================================================= -->

            <section class="myDomicile">
                <p>ที่อยู่ปัจจุบัน</p>

                <div class="myNameVillage">
                    <label for="myNameVillage">หมู่บ้าน :</label>
                    <input type="text" name="myNameVillage" value="{{$histCase['myNameVillage']}}" placeholder="กรุณากรอกชื่อหมู่บ้าน">
                </div>

                <div class="myHomeNumber">
                    <label for="myHomeNumber">บ้านเลขที่ :</label>
                    <input type="text" name="myHomeNumber" value="{{$histCase['myHomeNumber']}}" placeholder="กรุณากรอกบ้านเลขที่">
                </div>

                <div class="myAlley">
                    <label for="myAlley">ซอย/ตรอก :</label>
                    <input type="text" name="myAlley" value="{{$histCase['myAlley']}}" placeholder="กรุณากรอกซอย/ตรอก">
                </div>

                <div class="myRoad">
                    <label for="myRoad">ถนน :</label>
                    <input type="text" name="myRoad" value="{{$histCase['myRoad']}}" placeholder="กรุณากรอกถนน">
                </div>

                <div class="myDistrict">
                    <label for="myDistrict">ตำบล :</label>
                    <input type="text" name="myDistrict" value="{{$histCase['myDistrict']}}" placeholder="กรุณากรอกตำบล">
                </div>

                <div class="myCanton">
                    <label for="myCanton">อำเภอ :</label>
                    <input type="text" name="myCanton" value="{{$histCase['myCanton']}}" placeholder="กรุณากรอกอำเภอ">
                </div>

                <div class="myProvince">
                    <label for="myProvince">จังหวัด :</label>
                    <input type="text" name="myProvince" value="{{$histCase['myProvince']}}" placeholder="กรุณากรอกจังหวัด">
                </div>

                <div class="myPostalCode">
                    <label for="myPostalCode">รหัสไปรษณี :</label>
                    <input type="text" name="myPostalCode" value="{{$histCase['myPostalCode']}}" placeholder="กรุณากรอกรหัสไปรษณี">
                </div>

                <hr style="margin-top: 180px;">
            </section>




            <a href="{{ action('HistoryController@edit' , $histCase['id']) }}" class="editBtn">Edit</a>
        </form>
        <!-- ===================== delete ==================== -->
        <form action="{{ action('HistoryController@destroy' , $histCase['id'] )}}" method="post" class="delete_form">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="DELETE">
            <button class="deleteBtn" type="submit">Delete</button>
        </form>
        @endforeach
        <button class="submitBtn2" type="button" onclick="window.location.href='{{ url('/history/create/') }}';">Create</button>
        <button class="backBtn" type="button" onclick="window.location.href='{{ url('/history/') }}';">Back</button>
    </div>


    <!-- ============================ dropdown อายุ ========================= -->
    <script>
        /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;
        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }
    </script>

    <!-- ============================ photo resume ========================= -->
    <script>
        function showPhoto(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("displayImage");
                preview.src = src;
                preview.style.display = "block";
            }
        }
    </script>

    <!-- ============================ delete js========================= -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('.delete_form').on('submit', function() {
                if (confirm("คุณต้องการลบข้อมูลหรือไม่ ?")) {
                    return true;
                } else {
                    return false;
                }
            });
        });
    </script>
</body>
@stop