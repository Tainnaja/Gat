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
                <button class=" btn-learn"  onclick="location.href='{{ url('/fulltest') }}'">6. แบบทดสอบกับข้อสอบจริง </button>              
            </div>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
            
        </div>
        <div class="col-xs-6 col-md-1"></div> 
        </div>
    </div>
    <!-- After Finish Exams Show Modal -->
    @isset($sumScore)
    <script>
        $(function() {
            $('#myModal').modal('show');
        });
    </script>
    @endisset
    
    
    
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

        

        <!-- Modal -->
    <div class="modal fade in" id="myModal" role="dialog">
        <div class="modal-dialog">
        
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">ส่งคำตอบแล้ว</h4>
            </div>
            <div class="modal-body">
            <center><img src="{{ URL::asset('image/write-icon.png') }}" alt="Write" style="width:100px;height:100px;" ></center>
            <center><h2>คะแนนที่ได้ {{floor($sumScore ?? '')}} /150</h2></center>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
            </div>
        </div>
        
        </div>
    </div>