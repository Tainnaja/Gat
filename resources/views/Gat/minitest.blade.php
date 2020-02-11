@extends('layouts.main')

<!-- Start Featured Slider -->
@section('content')

<div style="margin-top:90px ; " >
        <div class="w3-sidebar w3-bar-block w3-black w3-card" style="width:130px">           
            <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'set1')">ชุดที่1</button>
            <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'set2')">ชุดที่2</button>
            <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'set3')">ชุดที่3</button>
            <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'set4')">ชุดที่4</button>
            <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'set5')">ชุดที่5</button>
            <button class="w3-bar-item w3-button tablink" onclick="location.href='{{ url('/learn') }}'"> <span class="glyphicon  glyphicon glyphicon-arrow-left " aria-hidden="true"></span>   ย้อนกลับ</button>
        </div>        
        <div id="set1" class="w3-container city w3-animate-zoom" style="display:none; margin-left:125px; margin-bottom: 500px;display:block">
            <h1>ชุดที่1</h1>           
        </div>
        <div id="set2" class="w3-container city w3-animate-zoom" style="display:none; margin-left:125px; margin-bottom: 500px;">
            <h1>ชุดที่2</h1>           
        </div> 
        <div id="set3" class="w3-container city w3-animate-zoom" style="display:none; margin-left:125px; margin-bottom: 500px;">
            <h1>ชุดที่3</h1>           
        </div> 
        <div id="set4" class="w3-container city w3-animate-zoom" style="display:none; margin-left:125px; margin-bottom: 500px;">
            <h1>ชุดที่4</h1>           
        </div> 
        <div id="set5" class="w3-container city w3-animate-zoom" style="display:none; margin-left:125px; margin-bottom: 500px;">
            <h1>ชุดที่5</h1>           
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
