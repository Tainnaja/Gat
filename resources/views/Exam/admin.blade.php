@extends('layouts.main')

<!-- Start Featured Slider -->
@section('content')

<h1> Welcome Admin : {{ Auth::user()->name }} </h1>

    <div class="container" style="margin-top:140px ; ">
         
        <div class="row">
        <div class="col-xs-6 col-md-3"></div>
        <div class="col-xs-6 col-md-8">
            <div class="row" style="margin-top:-50px;margin-bottom:50px;margin-left:55px;">
                 <h1> Welcome Admin : {{ Auth::user()->first_name }} </h1>
            </div>
            <div class="row">
                <button class=" btn-learn"  onclick="location.href='{{ url('/createTest') }}'">สร้างแบบทดสอบใหม่ </button>                                    
            </div>
            <div class="row">
                <button class="btn-learn"  onclick="location.href='{{ url('/editarticle') }}'">แก้ไขแบบทดสอบ</button>              
            </div>
            <div class="row">
                <button class=" btn-learn"  onclick="location.href='{{ url('/fulltest') }}'">ลองทำแบบทดสอบ</button>              
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