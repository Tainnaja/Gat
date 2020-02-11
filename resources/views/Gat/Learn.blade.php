@extends('layouts.main')

<!-- Start Featured Slider -->
@section('content')


    <div class="container" style="margin-top:140px ; ">
        <div class="row">
        <div class="col-xs-6 col-md-3"></div>
        <div class="col-xs-6 col-md-8">
            <div class="row">
                <button class=" btn-learn"  onclick="location.href='{{ url('/skillsGat') }}'">1. อะไรคือทักษะเชิงวิเคราะห์และ Gat เชื่อมโยง </button>                                    
            </div>
            <div class="row">
                <button class="btn-learn"  onclick="location.href='{{ url('/theory') }}'">2. ทฤษฎีที่ต้องรู้</button>              
            </div>
            <div class="row">
                <button class=" btn-learn"  onclick="location.href='{{ url('/technique') }}'">3. เทคนิคการทำ</button>              
            </div>
            <div class="row">
                <button class=" btn-learn"  onclick="location.href='{{ url('/relationship') }}'">4. แบบทดสอบความเข้าใจความสัมพันธ์</button>              
            </div>
            <div class="row">
                <button class=" btn-learn"  onclick="location.href='{{ url('/minitest') }}'">5. แบบทดสอบบทความขนาดเล็ก</button>              
            </div>
            <div class="row">
                <button class=" btn-learn"  onclick="location.href='{{ url('/fulltest') }}'">6. แบบทดสอบกับข้อสอบจริง</button>              
            </div>
        </div>
        <div class="col-xs-6 col-md-1"></div> 
        </div>
    </div>
@endsection
	<!-- End main content -->	

    <style>
        .btn-learn {
            width: 600px;
            height: 120px;
            border-radius: 50px 50px 50px 50px;
            background:#FFCC00;
            margin-bottom: 15px;
            font-size: 25px;
            color: blue;
        }

        .btn-learn:hover{
            /* width: 620px;    */
            background:#FFDAB9;
            color: #00CCFF;
        }
    </style>