@extends('layouts.main')

<!-- Start Featured Slider -->
@section('content')
<!-- <head>
    <script src="{{ URL::asset('ms-Dropdown-master/js/jquery/jquery-1.9.0.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('ms-Dropdown-master/js/msdropdown/jquery.dd.min.js') }}" type="text/javascript"></script>	
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('ms-Dropdown-master/css/msdropdown/dd.css') }}">
</head> -->



<div style="margin-top:90px ; " >
        <div class="w3-sidebar w3-bar-block w3-black w3-card" style="width:130px" >           
            <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'relate')">ความสัมพันธ์</button>
            <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'sequence')">ลำดับเหตุการณ์</button>             
            <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'sentence')">ประโยคความซ้อน</button>             
            <button class="w3-bar-item w3-button tablink" onclick="location.href='{{ url('/learn') }}'"> <span class="glyphicon  glyphicon glyphicon-arrow-left " aria-hidden="true"></span>   ย้อนกลับ</button>
        </div>

        <div id="relate" class="w3-container city w3-animate-zoom" style="display:block; margin-left:250px; margin-right:150px; margin-bottom: 500px">
            <br/>
            <h1>แบบทดสอบชนิดความสัมพันธ์</h1><br/>
            <h3>คำสั่ง: จงพิจรณาข้อความที่กำหนดให้และเลือกชนิดความสัมพันธ์ให้ถูกต้อง</h3><br/>

            <h5>1. <b>ช่างตัดผมมืออาชีพ</b>ทำให้<b>แต่งทรงผมได้ดีเพิ่มขึ้น</b></h5><br/>            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <label for="q1-1">ช่างตัดผมมืออาชีพ</label>                
                <select id="q1-1">                    
                    <option value="A1">⎯⎯⎯⎯⎯⎯⮞</option>
                    <option value="F1">⎯⎯⎯x⎯⎯⮞</option>
                    <option value="D1">⎯⎯⎯⎯⎯⎯●</option>                            
                </select>
            <label for="q1-1">แต่งทรงผมได้ดีเพิ่มขึ้น</label>

            

        </div>

        <div id="sequence" class="w3-container city w3-animate-zoom" style="display:block; margin-left:250px; margin-right:150px; margin-bottom: 500px">
            <br/>
            <h1>ลำดับเหตุการณ์</h1>           
        </div>

        <div id="sentence" class="w3-container city w3-animate-zoom" style="display:block; margin-left:250px; margin-right:150px; margin-bottom: 500px">
            <br/>
            <h1>ประโยคความซ้อน</h1>           
        </div> 
    </div>

    <script>
        $(function() {
            openLink(event, 'relate');
        });
    </script>

    

    <!-- <script language="javascript">
        $(document).ready(function(e) {
        try {
            $("body select").msDropDown();
        } catch(e) {
            alert(e.message);
        }
        });
    </script> -->

@endsection
	<!-- End main content -->	

    

    <script>
        function openLink(evt, animName) {
        var i, x, tablinks;
        x = document.getElementsByClassName("city");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < x.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
        }
        document.getElementById(animName).style.display = "block";
        evt.currentTarget.className += " w3-red";
        }
    </script>
