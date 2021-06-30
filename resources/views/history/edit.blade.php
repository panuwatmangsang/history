@extends('history/historyMaster')
@section('title','แก้ไขฝากประวัติ')

@section('cssBlock')
<!-- css -->
<link rel="stylesheet" href="/css/resume/resumeBlade.css">
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
            <p>แก้ไขประวัติ</p>
        </div>
        @if(count($errors) > 0)
        <div class="alert_error">
            <ul> @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif


        <form action="{{ route('history.update',$history->id ) }}" method="post">
            {{csrf_field()}}
            @method('PUT')
            <input type="hidden" name="_method" value="PATCH">
            <section class="myHistory">
                <p>ประวัติส่วนตัว</p>

                <div class="resumeImage">
                    <div class="selectPhoto">
                        <label for="resumePhoto">เลือกรูป</label>
                        <input type="file" id="resumePhoto" accept="image/*" onchange="showPhoto(event);">
                        <div class="preview">
                            <img id="displayImage" src="{{ asset('../resumePhoto/'.$history['resumePhoto']) }}">
                        </div>
                    </div>
                </div>

                <div class="checkbox">
                    <input type="checkbox" id="namePrefix1" name="namePrefix" value="{{$history->namePrefix}}">
                    <label for="vehicle1">นาย</label>
                    <input type="checkbox" id="namePrefix2" name="namePrefix" value="{{$history->namePrefix}}">
                    <label for="vehicle2"> นาง</label>
                    <input type="checkbox" id="namePrefix3" name="namePrefix" value="{{$history->namePrefix}}">
                    <label for="vehicle3">นางสาว</label>
                </div>

                <div class="firstNameInput">
                    <label for="firstName">ชื่อ :</label>
                    <input type="text" placeholder="กรุณากรอกชื่อ" name="firstName" value="{{$history->firstName}}">
                </div>

                <div class="lastNameInput">
                    <label for="lastName">นามสกุล :</label>
                    <input type="text" placeholder="กรุณากรอกนามสกุล" name="lastName" value="{{$history->lastName}}">
                </div>

                <div class="emailInput">
                    <label for="email">อีเมล :</label>
                    <input type="text" placeholder="กรุณากรอกอีเมล" name="email" value="{{$history->email}}">
                </div>

                <div class="phoneNumberInput">
                    <label for="phoneNumber">เบอร์ติดต่อ :</label>
                    <input type="text" placeholder="กรุณากรอกเบอร์ติดต่อ" name="phoneNumber" value="{{$history->phoneNumber}}">
                </div>

                <div class="birthday">
                    <label for="birthday">วันเกิด :</label>
                    <input type="date" id="birthday" name="birthday" value="{{$history->birthday}}">
                </div>

                <div class="yearOld">
                    <label for="yearOld">อายุ :</label>
                    <select class="selectYears" name="yearOld" value="{{$history->yearOld}}">
                        <option value="year">0</option>
                        <script language="javascript">
                            for (var i = 18; i < 100; i++) {
                                document.write("<option value=\"" + i + "\">" + i + "</option>\n");
                            }
                        </script>
                    </select>
                    <label for="yearsOld">ปี</label>
                </div>

                <hr style="margin-top: 120px;">
            </section>

            <!-- ======================================================================================================================= -->

            <section class="educationsHistory">
                <p>ประวัติการศึกษา</p>

                <div class="universityInput">
                    <label for="university">จบจากมหาวิทยาลัย/วิทลัย :</label>
                    <input type="text" name="university" value="{{$history->university}}" placeholder="กรุณากรอกมหาวิทยาลัย/วิทลัย">
                </div>
                <div class="facultyInput">
                    <label for="faculty">คณะ :</label>
                    <input type="text" name="faculty" value="{{$history->faculty}}" placeholder="กรุณากรอกคณะ">
                </div>

                <div class="branchInput">
                    <label for="branch">สาขา :</label>
                    <input type="text" name="branch" value="{{$history->branch}}" placeholder="กรุณากรอกสาขา">
                </div>

                <div class="gpaInput">
                    <label for="gpa">GPA :</label>
                    <input type="text" name="gpa" value="{{$history->gpa}}" placeholder="กรุณากรอก GPA">
                </div>

                <div class="checkbox2">
                    <label for="educational">วุฒิการศึกษา :</label>
                    <input type="checkbox" id="educational1" name="educational" value="{{$history->educational}}">
                    <label for="vehicle1">ม.6</label>
                    <input type="checkbox" id="educational2" name="educational" value="{{$history->educational}}">
                    <label for="vehicle1">ปวส.</label>
                    <input type="checkbox" id="educational3" name="educational" value="{{$history->educational}}">
                    <label for="vehicle1">ปวช.</label>
                    <input type="checkbox" id="educational4" name="educational" value="{{$history->educational}}">
                    <label for="vehicle2">ป.ตรี</label>
                    <input type="checkbox" id="educational5" name="educational" value="{{$history->educational}}">
                    <label for="vehicle3">ป.โท</label>
                </div>

                <hr style="margin-top: 150px;">
            </section>

            <!-- ======================================================================================================================= -->

            <section class="myExperience">
                <p>ประสบการณ์การทำงาน</p>

                <div class="usedToWorkInput">
                    <label for="usedToWork">ประสบการณ์ที่เคยทำงานกับบริษัท (ปี) :</label>
                    <input type="text" name="experience" value="{{$history->experience}}" placeholder="กรุณากรอกประสบการณ์ที่เคยทำงานกับบริษัท (ปี)">
                </div>
                <div class="dominantLanguageInput">
                    <label for="dominantLanguage">ภาษาที่ถนัด :</label>
                    <textarea name="dominantLanguage" style="width:300px; height:100px;">{{$history->dominantLanguage}}</textarea>
                </div>

                <div class="LanguageLearnedInput">
                    <label for="languageLearned">ภาษาที่เคยเรียนรู้ :</label>
                    <textarea name="languageLearned" style="width:300px; height:100px;">{{$history->languageLearned}}</textarea>
                </div>

                <div class="charismaInput">
                    <label for="charisma">ความสามารถพิเศษ :</label>
                    <textarea name="charisma" style="width:300px; height:100px;">{{$history->charisma}}</textarea>
                </div>


                <hr style="margin-top: 450px;">
            </section>

            <a class="gotoTopbtn" href="#"><i class="fas fa-arrow-up"></i></a>

            <!-- ======================================================================================================================= -->

            <section class="domicile">
                <p>ภูมิลำเนา</p>

                <div class="nameVillage">
                    <label for="nameVillage">หมู่บ้าน :</label>
                    <input type="text" name="nameVillage" value="{{$history->nameVillage}}" placeholder="กรุณากรอกชื่อหมู่บ้าน">
                </div>

                <div class="homeNumber">
                    <label for="homeNumber">บ้านเลขที่ :</label>
                    <input type="text" name="homeNumber" value="{{$history->homeNumber}}" placeholder="กรุณากรอกบ้านเลขที่">
                </div>

                <div class="alley">
                    <label for="alley">ซอย/ตรอก :</label>
                    <input type="text" name="alley" value="{{$history->alley}}" placeholder="กรุณากรอกซอย/ตรอก">
                </div>

                <div class="road">
                    <label for="road">ถนน :</label>
                    <input type="text" name="road" value="{{$history->road}}" placeholder="กรุณากรอกถนน">
                </div>

                <div class="district">
                    <label for="district">ตำบล :</label>
                    <input type="text" name="district" value="{{$history->district}}" placeholder="กรุณากรอกตำบล">
                </div>

                <div class="canton">
                    <label for="canton">อำเภอ :</label>
                    <input type="text" name="canton" value="{{$history->canton}}" placeholder="กรุณากรอกอำเภอ">
                </div>

                <div class="province">
                    <label for="province">จังหวัด :</label>
                    <input type="text" name="province" value="{{$history->province}}" placeholder="กรุณากรอกจังหวัด">
                </div>

                <div class="postalCode">
                    <label for="postalCode">รหัสไปรษณี :</label>
                    <input type="text" name="postalCode" value="{{$history->postalCode}}" placeholder="กรุณากรอกรหัสไปรษณี">
                </div>

                <hr style="margin-top: 180px;">
            </section>

            <!-- ======================================================================================================================= -->

            <section class="myDomicile">
                <p>ที่อยู่ปัจจุบัน</p>

                <div class="myNameVillage">
                    <label for="myNameVillage">หมู่บ้าน :</label>
                    <input type="text" name="myNameVillage" value="{{$history->myNameVillage}}" placeholder="กรุณากรอกชื่อหมู่บ้าน">
                </div>

                <div class="myHomeNumber">
                    <label for="myHomeNumber">บ้านเลขที่ :</label>
                    <input type="text" name="myHomeNumber" value="{{$history->myHomeNumber}}" placeholder="กรุณากรอกบ้านเลขที่">
                </div>

                <div class="myAlley">
                    <label for="myAlley">ซอย/ตรอก :</label>
                    <input type="text" name="myAlley" value="{{$history->myAlley}}" placeholder="กรุณากรอกซอย/ตรอก">
                </div>

                <div class="myRoad">
                    <label for="myRoad">ถนน :</label>
                    <input type="text" name="myRoad" value="{{$history->myRoad}}" placeholder="กรุณากรอกถนน">
                </div>

                <div class="myDistrict">
                    <label for="myDistrict">ตำบล :</label>
                    <input type="text" name="myDistrict" value="{{$history->myDistrict}}" placeholder="กรุณากรอกตำบล">
                </div>

                <div class="myCanton">
                    <label for="myCanton">อำเภอ :</label>
                    <input type="text" name="myCanton" value="{{$history->myCanton}}" placeholder="กรุณากรอกอำเภอ">
                </div>

                <div class="myProvince">
                    <label for="myProvince">จังหวัด :</label>
                    <input type="text" name="myProvince" value="{{$history->myProvince}}" placeholder="กรุณากรอกจังหวัด">
                </div>

                <div class="myPostalCode">
                    <label for="myPostalCode">รหัสไปรษณี :</label>
                    <input type="text" name="myPostalCode" value="{{$history->myPostalCode}}" placeholder="กรุณากรอกรหัสไปรษณี">
                </div>

                <hr style="margin-top: 180px;">
            </section>


            <button class="submitBtn" type="submit">Update</button>
            <button class="backBtn" type="button" onclick="window.location.href='{{ url('/history/') }}';">Back</button>

        </form>

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
</body>
@stop