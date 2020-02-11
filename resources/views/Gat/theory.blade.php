@extends('layouts.main')

<!-- Start Featured Slider -->
@section('content')

<div style="margin-top:90px ; " >
        <div class="w3-sidebar w3-bar-block w3-black w3-card" style="width:130px">
            <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'relationship')">ความสัมพันธ์แต่ละแบบ</button>
            <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Chronology')">ข้อควรระวังลำดับเหตุการณ์</button>
            <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'sentences')">ข้อควรระวังประโยคความซ้อน</button>
            <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'duplicate')">ข้อควรระวังการกล่าวซ้ำ</button> 
        </div>
         <div id="relationship" class="w3-container city w3-animate-zoom" style="display:none; margin-left:125px; margin-bottom: 500px;display:block">
            <h1>ความสัมพันธ์แต่ละแบบ</h1>
            
        </div>
        <div id="Chronology" class="w3-container city w3-animate-zoom" style="display:none; margin-left:125px; margin-bottom: 500px;">
            <h1>ข้อควรระวังลำดับเหตุการณ์</h1>
            
        </div>
        <div id="sentences" class="w3-container city w3-animate-zoom" style="display:none; margin-left:125px; margin-bottom: 500px;">
            <h1>ข้อควรระวังประโยคความซ้อน</h1>
           
        </div>
        <div id="duplicate" class="w3-container city w3-animate-zoom" style="display:none; margin-left:125px; margin-bottom: 500px;">
            <h1>ข้อควรระวังการกล่าวซ้ำ</h1>
           
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
