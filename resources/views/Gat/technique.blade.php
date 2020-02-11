@extends('layouts.main')

<!-- Start Featured Slider -->
@section('content')

<div style="margin-top:90px ; " >
        <div class="w3-sidebar w3-bar-block w3-black w3-card" style="width:130px">           
            <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'reading')">เทคนิคการอ่านจับใจความ</button>
            <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'writing')">เทคนิคการเขียนแผนภาพ</button>             
            <button class="w3-bar-item w3-button tablink" onclick="location.href='{{ url('/learn') }}'"> <span class="glyphicon  glyphicon glyphicon-arrow-left " aria-hidden="true"></span>   ย้อนกลับ</button>
        </div>        
        <div id="reading" class="w3-container city w3-animate-zoom" style="display:none; margin-left:125px; margin-bottom: 500px;display:block">
            <h1>เทคนิคการอ่านจับใจความ</h1>           
        </div>
        <div id="writing" class="w3-container city w3-animate-zoom" style="display:none; margin-left:125px; margin-bottom: 500px;">
            <h1>เทคนิคการเขียนแผนภาพ</h1>           
        </div> 
    </div>

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
