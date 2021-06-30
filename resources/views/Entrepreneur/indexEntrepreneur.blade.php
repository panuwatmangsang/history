<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- css -->
    <link rel="stylesheet" href="../css/ent/indexEnt.css">

    <title>@yield('title')</title>
    @yield('cssBlock')

</head>

<body>

    <nav>
        <ul>
            <div class="logo-text">

                <li>For Applicants Search</li>
            </div>
            <div class="item">

                <div class="name" data-text="Home">
                    <li>
                        <a href="/Entrepreneur/entMaster">
                            <div class="icon">
                                <i class="fa fa-home" style='font-size:20px'></i>
                            </div>
                            <p>HOME</p>
                        </a>
                    </li>
                </div>

                <div class="name" data-text="post">
                    <li>
                        <a href="/Entrepreneur/entPost">
                            <div class="icon">
                                <i class="fa fa-edit" style='font-size:20px'></i>
                            </div>
                            <p> POST</p>
                        </a>
                    </li>

                </div>

                <div class="name" data-text="Check">
                    <li>
                        <a href="/Entrepreneur/entCheck">
                            <div class="icon">
                                <i class="fa fa-th-list" style='font-size:20px'></i>
                            </div>
                            <p>CHECK</p>
                        </a>
                    </li>
                </div>


                <div class="notification" data-text="Notification">
                    <div class="noti">
                        <li>
                            <a href="#">
                                <div class="icon">
                                    <i class="fa fa-bell" style='font-size:20px'></i>
                                </div>
                                <p>NOTIFICATION</p>
                            </a>
                        </li>
                    </div>
                    <div class="notiDetail">
                        <div class="notiTitle">
                            <p>การแจ้งเตือน</p>
                        </div>
                        <div class="notiItem">
                            <div class="notiData">
                                <div class="notiIcon">
                                    <span class="icon"></span>
                                </div>
                                <div class="notiDataDetail">
                                    <p>ชื่อบริษัท</p>
                                    <p>การอนุมัติ</p>
                                    <p>วันที่แจ้งเตือน</p>
                                </div>
                            </div>

                            <div class="notiData">
                                <div class="notiIcon">
                                    <span class="icon"></span>
                                </div>
                                <div class="notiDataDetail">
                                    <p>ชื่อบริษัท</p>
                                    <p>การอนุมัติ</p>
                                    <p>วันที่แจ้งเตือน</p>
                                </div>
                            </div>

                            <div class="notiData">
                                <div class="notiIcon">
                                    <span class="icon"></span>
                                </div>
                                <div class="notiDataDetail">
                                    <p>ชื่อบริษัท</p>
                                    <p>การอนุมัติ</p>
                                    <p>วันที่แจ้งเตือน</p>
                                </div>
                            </div>

                            <div class="notiData">
                                <div class="notiIcon">
                                    <span class="icon"></span>
                                </div>
                                <div class="notiDataDetail">
                                    <p>ชื่อบริษัท</p>
                                    <p>การอนุมัติ</p>
                                    <p>วันที่แจ้งเตือน</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="profile" data-text="Profile">
                    <li>
                        <a href="#">
                            <div class="icon">
                                <i class="fa fa-industry" style='font-size:20px'></i>
                            </div>
                            <p>PROFILE</p>
                        </a>
                    </li>
                </div>
            </div>
            <li class="search-icon">
                <input type="search" placeholder="Search">
                <label class="icon">
                    <span class="fa fa-search"></span>
                </label>
            </li>
        </ul>
    </nav>

    @yield('content')
</body>
@yield('jsBlock')

<!-- ============================ dropdown btn ========================= -->
<script>
    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("noti");
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

</html>