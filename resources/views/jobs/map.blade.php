@extends('jobs/jobsMaster')
@section('title','แผนที่')

@section('cssBlock')
<!-- css -->
<link rel="stylesheet" href="../css/map.css">
@stop

@section('content')

<body>
    <div class="map">
        <div class="mapTable">
            <div class="mapTitle">
                ประเภทของงาน
            </div>
            <div class="mapDetails">
                <a href="#">
                    <i class="fa fa-circle" style="font-size:20px;color:#040EFF"></i>
                    งานเต็มเวลา
                </a>
            </div>
            <div class="mapDetails">
                <a href="#">
                    <i class="fa fa-circle" style="font-size:20px;color:#00F928"></i>
                        งานพาร์ทไทม์
                </a>
            </div>
        </div>

        <div class="showMap">
            <p>Google Map</p>
        </div>
    </div>
</body>
@stop