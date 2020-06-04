@extends('layouts.main')

@section('content')
  
  

<div style="margin-top:150px;" >
<center><h1><b> Achievement </b></h1></center>

    <table class="table table-sm table-dark; center" style="display:block; margin-left:400px; margin-right:150px; margin-top:50px;">
    
    <tbody>
        @php
            if($done>1)
                $ac1 = 1;
            else    
                $ac1 = $done;
        @endphp
        <tr>
            @if($done>=1)
            <td><img src="{{ URL::asset('image/stair-icon.png') }}" alt="Achievement1" style="height:200px"></td>
            @else 
            <td><img src="{{ URL::asset('image/not-stair-icon.png') }}" alt="Achievement1" style="height:200px"></td>
            @endif      
            <td style="width:400px">
                </br><h3><b>ก้าวแรกสู่การเต็ม Gat!!</b></h3>
                <p>เริ่มทำข้อสอบจริงข้อแรก</p>
                <div class="progress">
                    <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $ac1*100;?>%;">
                    <p style="color:black;">{{$ac1}}/1 </p>
                    </div>
                </div>
                @if($done>=1)
                <img src="{{ URL::asset('image/success-icon.jpg') }}" alt="Write" style="width:20px;height:20px;" align="left">
                <h5 style="color:green;"><b> สำเร็จแล้ว</b></h5>
                @else
                <h5 style="color:gray;"><b>ยังไม่สำเร็จ</b></h5>
                @endif
            </td>      
        </tr>

        @php
            if($full>1)
                $ac2 = 1;
            else    
                $ac2 = $full;
        @endphp
        <tr>
            @if($full>=1)
            <td><img src="{{ URL::asset('image/5.png') }}" alt="Achievement2" style="height:200px"></td>
            @else 
            <td><img src="{{ URL::asset('image/not-5.png') }}" alt="Achievement2" style="height:200px"></td>
            @endif      
            <td style="width:400px">
                </br><h3><b>เริ่มเป็นเซียน Gat</b></h3>
                <p>ทำข้อสอบจริงได้คะแนนเต็ม 1 ครั้ง</p>
                <div class="progress">
                    <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $ac2*100;?>%;">
                    <p style="color:black;">{{$ac2}}/1 </p>
                    </div>
                </div>
                @if($full>=1)
                <img src="{{ URL::asset('image/success-icon.jpg') }}" alt="Write" style="width:20px;height:20px;" align="left">
                <h5 style="color:green;"><b> สำเร็จแล้ว</b></h5>
                @else 
                <h5 style="color:gray;"><b>ยังไม่สำเร็จ</b></h5>
                @endif
            </td>      
        </tr>

        @php
            if($full>3)
                $ac3 = 3;
            else    
                $ac3 = $full;
        @endphp
        <tr>
            @if($full>=3)
            <td><img src="{{ URL::asset('image/3.png') }}" alt="Achievement2" style="height:200px"></td>
            @else 
            <td><img src="{{ URL::asset('image/not-5.png') }}" alt="Achievement2" style="height:200px"></td>
            @endif      
            <td style="width:400px">
                </br><h3><b>เทพ Gat!!</b></h3>
                <p>ทำข้อสอบจริงได้คะแนนเต็ม 3 ครั้ง</p>
                <div class="progress">
                    <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo ($ac3/3)*100;?>%;">
                    <p style="color:black;">{{$ac3}}/3 </p>
                    </div>
                </div>
                @if($full>=3)
                <img src="{{ URL::asset('image/success-icon.jpg') }}" alt="Write" style="width:20px;height:20px;" align="left">
                <h5 style="color:green;"><b> สำเร็จแล้ว</b></h5>
                @else 
                <h5 style="color:gray;"><b>ยังไม่สำเร็จ</b></h5>
                @endif
            </td>      
        </tr>  
        
        @php
            if($full>5)
                $ac4 = 5;
            else    
                $ac4 = $full;
        @endphp
        <tr>
            @if($full>=5)
            <td><img src="{{ URL::asset('image/2.png') }}" alt="Achievement2" style="height:200px"></td>
            @else 
            <td><img src="{{ URL::asset('image/not-5.png') }}" alt="Achievement2" style="height:200px"></td>
            @endif      
            <td style="width:400px">
                </br><h3><b>ปรมาจารย์ Gat!!</b></h3>
                <p>ทำข้อสอบจริงได้คะแนนเต็ม 5 ครั้ง</p>
                <div class="progress">
                    <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo ($ac4/5)*100;?>%;">
                    <p style="color:black;">{{$ac4}}/5 </p>
                    </div>
                </div>
                @if($full>=5)
                <img src="{{ URL::asset('image/success-icon.jpg') }}" alt="Write" style="width:20px;height:20px;" align="left">
                <h5 style="color:green;"><b> สำเร็จแล้ว</b></h5>
                @else 
                <h5 style="color:gray;"><b>ยังไม่สำเร็จ</b></h5>
                @endif
            </td>      
        </tr> 

        <tbody>
        @php
            if($done>10)
                $ac5 = 10;
            else    
                $ac5 = $done;
        @endphp
        <tr>
            @if($done>=10)
            <td><img src="{{ URL::asset('image/work.png') }}" alt="Achievement1" style="height:200px"></td>
            @else 
            <td><img src="{{ URL::asset('image/not-work.png') }}" alt="Achievement1" style="height:200px"></td>
            @endif      
            <td style="width:400px">
                </br><h3><b>คนขยัน2020!!</b></h3>
                <p>ทำข้อสอบจริงครบ 10 ครั้ง</p>
                <div class="progress">
                    <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo ($ac5/10)*100;?>%;">
                    <p style="color:black;">{{$ac5}}/10 </p>
                    </div>
                </div>
                @if($done>=10)
                <img src="{{ URL::asset('image/success-icon.jpg') }}" alt="Write" style="width:20px;height:20px;" align="left">
                <h5 style="color:green;"><b> สำเร็จแล้ว</b></h5>
                @else
                <h5 style="color:gray;"><b>ยังไม่สำเร็จ</b></h5>
                @endif
            </td>      
        </tr>                 
        
    </tbody>
    </table>
 </div>


  
@endsection