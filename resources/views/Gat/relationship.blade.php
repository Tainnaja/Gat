@extends('layouts.main')

<!-- Start Featured Slider -->
@section('content')

<div style="margin-top:90px ; " >
        <div class="w3-sidebar w3-bar-block w3-black w3-card" style="width:130px">           
            <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'relate')">ความสัมพันธ์</button>
            <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'sequence')">ลำดับเหตุการณ์</button>             
            <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'sentence')">ประโยคความซ้อน</button>             
        </div>        
        <div id="relate" class="w3-container city w3-animate-zoom" style="display:none; margin-left:125px; margin-bottom: 500px;display:block">
            <h1>ความสัมพันธ์</h1>           
        </div>
        <div id="sequence" class="w3-container city w3-animate-zoom" style="display:none; margin-left:125px; margin-bottom: 500px;">
            <h1>ลำดับเหตุการณ์</h1>           
        </div> 
        <div id="sentence" class="w3-container city w3-animate-zoom" style="display:none; margin-left:125px; margin-bottom: 500px;">
            <h1>ประโยคความซ้อน</h1>           
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
