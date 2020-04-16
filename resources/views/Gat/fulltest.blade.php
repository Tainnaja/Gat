@extends('layouts.main')

<!-- Start Featured Slider -->
@section('content')

<h1> แบบทดสอบกับข้อสอบจริง </h1>

    <div class="container" style="margin-top:140px ; ">
        <div class="row">        
        <div class="col-xs-6 col-md-3">
            <nav>
                <h4>คำอธิบายสัญลักษณ์</h4>
                <img src="{{ URL::asset('image/notdone.png') }}" alt="Write" style="width:20px;height:20px;" align="left"><p>-ยังไม่เคยทำข้อสอบนี้</p>
                <img src="{{ URL::asset('image/done2.png') }}" alt="Write" style="width:20px;height:20px;" align="left"><p>-เคยทำแล้วแต่ยังไม่ได้เต็ม</p>
                <img src="{{ URL::asset('image/done1.png') }}" alt="Write" style="width:20px;height:20px;" align="left"><p>-เคยทำและได้คะแนนเต็มแล้ว</p>
            </nav>
        </div>        
        <div class="col-xs-6 col-md-8">
            <div class="row" style="margin-top:-50px;margin-bottom:50px;margin-left:75px;">
                 <h1>แบบทดสอบกับข้อสอบจริง </h1>
            </div>            
            @foreach($fulltests as $fulltest)

                <!-- check user have already done exam yet? -->
                @php
                    $yellow = 'false';
                    $green = 'false';
                @endphp
                
                @foreach($histories as $history) 
                    @if($fulltest->id == $history->exam_id and $history->total_score == '150')                    
                        @php                        
                        $green = 'true';
                        @endphp

                    @elseif($fulltest->id == $history->exam_id)
                        @php    
                        $yellow = 'true';
                        @endphp

                    @endif    
                @endforeach

                @php
                    $image_name = '';
                    if($green == 'true'){
                        $image_name = 'done1.png';
                    }
                    else if($yellow == 'true'){
                        $image_name = 'done2.png';
                    }
                    else{
                        $image_name = 'notdone.png';
                    }
                @endphp
                <!-- END check user have already done exam yet? -->
                
                <div class="row">                                       
                    <img src="{{ URL::asset('image/'.$image_name) }}" alt="Write" style="width:50px;height:50px;">                        
                    <button class=" btn-learn"  onclick="location.href='{{ url('fulltest/'.$fulltest->id) }}'">{{ '' .$fulltest->exam_name }}</button>                                    
                </div>
            @endforeach
            
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