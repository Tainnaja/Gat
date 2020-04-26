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
                <select id="q1-1" name="q1-1">
                    <option value="x" selected disabled hidden>เลือกคำตอบ</option>                    
                    <option value="A">⎯⎯⎯⎯⎯⎯⮞</option>
                    <option value="F">⎯⎯⎯x⎯⎯⮞</option>
                    <option value="D">⎯⎯⎯⎯⎯⎯●</option>                            
                </select>
            <label for="q1-1">แต่งทรงผมได้ดีเพิ่มขึ้น</label>
            
            <hr>            

            <h5>2. <b>การเอาเปรียบ</b>ส่งผลให้<b>ผู้อื่นรังเกียจ</b></h5><br/>            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <label for="q1-2">การเอาเปรียบ</label>                
                <select id="q1-2" name="q1-2">
                    <option value="x" selected disabled hidden>เลือกคำตอบ</option>                    
                    <option value="A">⎯⎯⎯⎯⎯⎯⮞</option>
                    <option value="F">⎯⎯⎯x⎯⎯⮞</option>
                    <option value="D">⎯⎯⎯⎯⎯⎯●</option>                            
                </select>
            <label for="q1-2">ผู้อื่นรังเกียจ</label><br/>

            <hr>            

            <h5>3. <b>คนดี</b>จะต้องมีคุณสมบัติอย่างน้อยสองอย่างคือ<b>กตัญญูกตเวที</b>และมีความรับผิดชอบ</h5><br/>            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <label for="q1-3">คนดี</label>                
                <select id="q1-3" name="q1-3">
                    <option value="x" selected disabled hidden>เลือกคำตอบ</option>                    
                    <option value="A">⎯⎯⎯⎯⎯⎯⮞</option>
                    <option value="F">⎯⎯⎯x⎯⎯⮞</option>
                    <option value="D">⎯⎯⎯⎯⎯⎯●</option>                            
                </select>
            <label for="q1-3">กตัญญูกตเวที</label><br/>

            <hr>            

            <h5>4. การ<b>คบคนเลว</b>จะทำให้ชีวิตไม่มี<b>ความสุข</b></h5><br/>            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <label for="q1-4" name="q1-4">คบคนเลว</label>                            
                <select id="q1-4">
                    <option value="x" selected disabled hidden>เลือกคำตอบ</option>                    
                    <option value="A">⎯⎯⎯⎯⎯⎯⮞</option>
                    <option value="F">⎯⎯⎯x⎯⎯⮞</option>
                    <option value="D">⎯⎯⎯⎯⎯⎯●</option>                            
                </select>
            <label for="q1-4">ความสุข</label><br/>

            <hr>            

            <h5>5. <b>รัตนชาติ</b>อันเป็นหินมงคลของไทย ประกอบด้วย <b>เพชร</b>,ทับทิม,มรกต</h5><br/>            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <label for="q1-5">รัตนชาติ</label>                
                <select id="q1-5" name="q1-5">
                    <option value="x" selected disabled hidden>เลือกคำตอบ</option>                    
                    <option value="A">⎯⎯⎯⎯⎯⎯⮞</option>
                    <option value="F">⎯⎯⎯x⎯⎯⮞</option>
                    <option value="D">⎯⎯⎯⎯⎯⎯●</option>                            
                </select>
            <label for="q1-5">เพชร</label><br/>

            <hr>            

            <h5>6. <b>การอ่านฉลากให้เข้าใจ</b>สามารถ<b>ป้องกันอันตรายจากการใช้ยาฆ่าแมลง</b>ได้</h5><br/>            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <label for="q1-6">การอ่านฉลากให้เข้าใจ</label>                
                <select id="q1-6" name="q1-6">
                    <option value="x" selected disabled hidden>เลือกคำตอบ</option>                    
                    <option value="A">⎯⎯⎯⎯⎯⎯⮞</option>
                    <option value="F">⎯⎯⎯x⎯⎯⮞</option>
                    <option value="D">⎯⎯⎯⎯⎯⎯●</option>                            
                </select>
            <label for="q1-6">ป้องกันอันตรายจากการใช้ยาฆ่าแมลง</label><br/>

            <hr>            

            <h5>7. <b>เกมทำฟาร์ม</b>เล่นแล้วเพลินจนทำให้เสีย<b>เวลาอันมีค่า</b>มากมาย</h5><br/>            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <label for="q1-7">เกมทำฟาร์ม</label>                
                <select id="q1-7" name="q1-7">
                    <option value="x" selected disabled hidden>เลือกคำตอบ</option>                    
                    <option value="A">⎯⎯⎯⎯⎯⎯⮞</option>
                    <option value="F">⎯⎯⎯x⎯⎯⮞</option>
                    <option value="D">⎯⎯⎯⎯⎯⎯●</option>                            
                </select>
            <label for="q1-7">เวลาอันมีค่า</label><br/>

            <hr>            

            <h5>8. <b>การปราบปรามผู้มีอิทธิพล</b>ทำให้<b>ยาเสพติด</b>น้อยลง</h5><br/>            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <label for="q1-8">การปราบปรามผู้มีอิทธิพล</label>                
                <select id="q1-8" name="q1-8">
                    <option value="x" selected disabled hidden>เลือกคำตอบ</option>                    
                    <option value="A">⎯⎯⎯⎯⎯⎯⮞</option>
                    <option value="F">⎯⎯⎯x⎯⎯⮞</option>
                    <option value="D">⎯⎯⎯⎯⎯⎯●</option>                            
                </select>
            <label for="q1-8">ยาเสพติด</label><br/>

            <hr>            

            <h5>9. <b>ครอบครัวฉัน</b>มี<b>ปู่เฮียว</b>เป็นสมาชิกด้วย</h5><br/>            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <label for="q1-9">ครอบครัวฉัน</label>                
                <select id="q1-9" name="q1-9">
                    <option value="x" selected disabled hidden>เลือกคำตอบ</option>                    
                    <option value="A">⎯⎯⎯⎯⎯⎯⮞</option>
                    <option value="F">⎯⎯⎯x⎯⎯⮞</option>
                    <option value="D">⎯⎯⎯⎯⎯⎯●</option>                            
                </select>
            <label for="q1-9">ปู่เฮียว</label><br/>

            <hr>            

            <h5>10. การไป<b>เล่นพนันที่นั้น</b>มัน<b>ได้ไม่คุ้มเสีย</b>หรอก</h5><br/>            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <label for="q1-10">เล่นพนันที่นั้น</label>                
                <select id="q1-10" name="q1-10">
                    <option value="x" selected disabled hidden>เลือกคำตอบ</option>                    
                    <option value="A">⎯⎯⎯⎯⎯⎯⮞</option>
                    <option value="F">⎯⎯⎯x⎯⎯⮞</option>
                    <option value="D">⎯⎯⎯⎯⎯⎯●</option>                            
                </select>
            <label for="q1-10">ได้ไม่คุ้มเสีย</label><br/>

            <br/>
            <br/>
             <center><button type="button" class="btn btn-warning btn-lg" onclick="CheckExamRelation1()" data-toggle="modal" data-target="#scoreModal" style="width:400px; height:80">ส่งคำตอบ</button></center>                                   
                      

        </div>

        <div id="sequence" class="w3-container city w3-animate-zoom" style="display:block; margin-left:250px; margin-right:150px; margin-bottom: 500px">
            <br/>
            <h1>แบบทดสอบเรื่องลำดับเหตุการณ์</h1>
            <h3>คำสั่ง: จงพิจรณาข้อความที่กำหนดให้และเลือกทิศทางของความสัมพันธ์ให้ถูกต้อง</h3><br/>

            <h5>1. <b>ความเกรงใจ</b>เป็นสมบัติของ<b>ผู้ดี</b></h5><br/>            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <label for="q2-1">ความเกรงใจ</label>                
                <select id="q2-1" name="q2-1">
                    <option value="x" selected disabled hidden>เลือกคำตอบ</option>                    
                    <option value="1">⎯⎯⎯⎯⎯⎯●</option>
                    <option value="2">●⎯⎯⎯⎯⎯⎯</option>                            
                </select>
            <label for="q2-1">ผู้ดี</label>
            
            <hr>

            <h5>2. สาเหตุที่<b>ทำงานด้วยกันไม่ได้</b>เพราะ<b>ความต่างของมุมมอง</b></h5><br/>            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <label for="q2-2">ทำงานด้วยกันไม่ได้</label>                
                <select id="q2-2" name="q2-2">
                    <option value="x" selected disabled hidden>เลือกคำตอบ</option>                    
                    <option value="1">⎯⎯⎯⎯⎯⎯⮞</option>
                    <option value="2">⮜⎯⎯⎯⎯⎯⎯</option>                            
                </select>
            <label for="q2-2">ความต่างของมุมมอง</label>

            <hr>

            <h5>3. <b>อบายมุข</b>นำพามาซึ่งความ<b>ความล่มจม</b></h5><br/>            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <label for="q2-3">อบายมุข</label>                
                <select id="q2-3" name="q2-3">
                    <option value="x" selected disabled hidden>เลือกคำตอบ</option>                    
                    <option value="1">⎯⎯⎯⎯⎯⎯⮞</option>
                    <option value="2">⮜⎯⎯⎯⎯⎯⎯</option>                            
                </select>
            <label for="q2-3">ความล่มจม</label>

            <hr>

            <h5>4. <b>แอสการ์ด</b>ไม่ใช่สถานที่ แต่คือ<b>ผู้คน</b></h5><br/>            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <label for="q2-4">แอสการ์ด</label>                
                <select id="q2-4" name="q2-4">
                    <option value="x" selected disabled hidden>เลือกคำตอบ</option>                    
                    <option value="1">⎯⎯⎯⎯⎯⎯●</option>
                    <option value="2">●⎯⎯⎯⎯⎯⎯</option>                            
                </select>
            <label for="q2-4">ผู้คน</label>

            <hr>

            <h5>5. แค่<b>ทำผิดพลาดครั้งเดียว</b>ก็โดนลด<b>ความเชื่อมั่น</b>แล้ว</h5><br/>            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <label for="q2-5">ทำผิดพลาดครั้งเดียว</label>                
                <select id="q2-5" name="q2-5">
                    <option value="x" selected disabled hidden>เลือกคำตอบ</option>                    
                    <option value="1">⎯⎯⎯x⎯⎯⮞</option>
                    <option value="2">⮜⎯⎯⎯x⎯⎯</option>                            
                </select>
            <label for="q2-5">ความเชื่อมั่น</label>

            <hr>

            <h5>6. เมื่อ<b>T-virus กลายพันธ์ุ</b>หน่วย<b>ตำรวจ R.P.D.</b>ก็รับมือได้ยากลำบากมากขึ้น</h5><br/>            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <label for="q2-6">T-virus กลายพันธ์ุ</label>                
                <select id="q2-6" name="q2-6">
                    <option value="x" selected disabled hidden>เลือกคำตอบ</option>                    
                    <option value="1">⎯⎯⎯x⎯⎯⮞</option>
                    <option value="2">⮜⎯⎯⎯x⎯⎯</option>                            
                </select>
            <label for="q2-6">ตำรวจ R.P.D.</label>

            <hr>

            <h5>7. <b>ความขลาด</b>มันก็เป็นหนึ่งใน<b>สาเหตุที่ทำให้จบชีวิตตนเอง</b>นี่แหละ</h5><br/>            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <label for="q2-7">ความขลาด</label>                
                <select id="q2-7" name="q2-7">
                    <option value="x" selected disabled hidden>เลือกคำตอบ</option>                    
                    <option value="1">⎯⎯⎯⎯⎯⎯●</option>
                    <option value="2">●⎯⎯⎯⎯⎯⎯</option>                            
                </select>
            <label for="q2-7">สาเหตุที่ทำให้จบชีวิตตนเอง</label>

            <hr>

            <h5>8. เพราะ<b>เธอ</b>ทำให้<b>ฉันร้องไห้</b></h5><br/>            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <label for="q2-8">เธอ</label>                
                <select id="q2-8" name="q2-8">
                    <option value="x" selected disabled hidden>เลือกคำตอบ</option>                    
                    <option value="1">⎯⎯⎯⎯⎯⎯⮞</option>
                    <option value="2">⮜⎯⎯⎯⎯⎯⎯</option>                            
                </select>
            <label for="q2-8">ฉันร้องไห้</label>

            <hr>

            <h5>9. <b>การทดสอบระบบ</b>ก็อยู่ใน<b>สิ่งต้องทำ</b>วันนี้</h5><br/>            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <label for="q2-9">การทดสอบระบบ</label>                
                <select id="q2-9" name="q2-9">
                    <option value="x" selected disabled hidden>เลือกคำตอบ</option>                    
                    <option value="1">⎯⎯⎯⎯⎯⎯●</option>
                    <option value="2">●⎯⎯⎯⎯⎯⎯</option>                            
                </select>
            <label for="q2-9">สิ่งต้องทำ</label>

            <hr>

            <h5>10. <b>ผู้คนตาย</b>เมื่อ<b>ถูกฆ่า</b> (กล่าวโดย เอมิยะ ชีโร่)</h5><br/>            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <label for="q2-10">ผู้คนตาย</label>                
                <select id="q2-10" name="q2-10">
                    <option value="x" selected disabled hidden>เลือกคำตอบ</option>                    
                    <option value="1">⎯⎯⎯⎯⎯⎯⮞</option>
                    <option value="2">⮜⎯⎯⎯⎯⎯⎯</option>                            
                </select>
            <label for="q2-10">ถูกฆ่า</label>
            <br/>
            <br/>
             <center><button type="button" class="btn btn-warning btn-lg" onclick="CheckExamRelation2()" data-toggle="modal" data-target="#scoreModal" style="width:400px; height:80">ส่งคำตอบ</button></center>

        </div>

        <div id="sentence" class="w3-container city w3-animate-zoom" style="display:block; margin-left:250px; margin-right:150px; margin-bottom: 500px">
            <br/>
            <h1>ประโยคความซ้อน</h1>  

            <h3>คำสั่ง: จงพิจรณาข้อความที่กำหนดให้และเลือก ชนิด,ทิศทางของความสัมพันธ์ให้ถูกต้อง ข้อความจะมีการเล่นประโยคความซ้อนและคำซ้ำด้วย</h3><br/>

            <h5>1. ช่วงนี้<b>การใช้บริการห้างสรรพสินค้า</b>น้อยลงมากเพราะ<b>สถานการณ์โควิด-19</b> แต่ขณะเดียวกับ กลับทำให้มีคนใช้<b>บริการส่งอาหารถึงบ้าน</b>มากขึ้น</h5><br/>            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <label>การใช้บริการห้างสรรพสินค้า</label>                
                <select id="q3-1" name="q3-1">
                    <option value="x" selected disabled hidden>เลือกคำตอบ</option>
                    <option value="A1">⎯⎯⎯⎯⎯⎯⮞</option>                    
                    <option value="D1">⎯⎯⎯⎯⎯⎯●</option>
                    <option value="F1">⎯⎯⎯x⎯⎯⮞</option>
                    <option value="A2">⮜⎯⎯⎯⎯⎯⎯</option>
                    <option value="D2">●⎯⎯⎯⎯⎯⎯</option>
                    <option value="F2">⮜⎯⎯⎯x⎯⎯</option>                            
                </select>
            <label>สถานการณ์โควิด-19</label> 
                <select id="q3-2" name="q3-2">
                        <option value="x" selected disabled hidden>เลือกคำตอบ</option>
                        <option value="A1">⎯⎯⎯⎯⎯⎯⮞</option>                    
                        <option value="D1">⎯⎯⎯⎯⎯⎯●</option>
                        <option value="F1">⎯⎯⎯x⎯⎯⮞</option>
                        <option value="A2">⮜⎯⎯⎯⎯⎯⎯</option>
                        <option value="D2">●⎯⎯⎯⎯⎯⎯</option>
                        <option value="F2">⮜⎯⎯⎯x⎯⎯</option>                            
                </select>  
            <label>บริการส่งอาหารถึงบ้าน</label> 

            <hr>

            <h5>2. <b>การดื่มสุรา</b>เป็นหนึ่งใน<b>อบายมุข</b>ที่ทำให้<b>ทักษะการใช้ชีวิต</b>ลดลง</h5><br/>            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <label>อบายมุข</label>                
                <select id="q3-3" name="q3-3">
                    <option value="x" selected disabled hidden>เลือกคำตอบ</option>
                    <option value="A1">⎯⎯⎯⎯⎯⎯⮞</option>                    
                    <option value="D1">⎯⎯⎯⎯⎯⎯●</option>
                    <option value="F1">⎯⎯⎯x⎯⎯⮞</option>
                    <option value="A2">⮜⎯⎯⎯⎯⎯⎯</option>
                    <option value="D2">●⎯⎯⎯⎯⎯⎯</option>
                    <option value="F2">⮜⎯⎯⎯x⎯⎯</option>                            
                </select>
            <label>การดื่มสุรา</label> 
                <select id="q3-4" name="q3-4">
                        <option value="x" selected disabled hidden>เลือกคำตอบ</option>
                        <option value="A1">⎯⎯⎯⎯⎯⎯⮞</option>                    
                        <option value="D1">⎯⎯⎯⎯⎯⎯●</option>
                        <option value="F1">⎯⎯⎯x⎯⎯⮞</option>
                        <option value="A2">⮜⎯⎯⎯⎯⎯⎯</option>
                        <option value="D2">●⎯⎯⎯⎯⎯⎯</option>
                        <option value="F2">⮜⎯⎯⎯x⎯⎯</option>                            
                </select>  
            <label>ทักษะการใช้ชีวิต</label>

            <hr>

            <h5>3. <b>การเล่นโทรศัพท์มือถือมากเกินไป</b>จะส่งผลทำให้ตาเสียและอาจทำให้<b>เด็กกลายเป็นโรคสมาธิสั้น</b> รวมไปถึงมี<b>พัฒนาการ</b>ช้าได้</h5><br/>            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <label>เด็กกลายเป็นโรคสมาธิสั้น</label>                
                <select id="q3-5" name="q3-5">
                    <option value="x" selected disabled hidden>เลือกคำตอบ</option>
                    <option value="A1">⎯⎯⎯⎯⎯⎯⮞</option>                    
                    <option value="D1">⎯⎯⎯⎯⎯⎯●</option>
                    <option value="F1">⎯⎯⎯x⎯⎯⮞</option>
                    <option value="A2">⮜⎯⎯⎯⎯⎯⎯</option>
                    <option value="D2">●⎯⎯⎯⎯⎯⎯</option>
                    <option value="F2">⮜⎯⎯⎯x⎯⎯</option>                            
                </select>
            <label>การเล่นโทรศัพท์มือถือมากเกินไป</label> 
                <select id="q3-6" name="q3-6">
                        <option value="x" selected disabled hidden>เลือกคำตอบ</option>
                        <option value="A1">⎯⎯⎯⎯⎯⎯⮞</option>                    
                        <option value="D1">⎯⎯⎯⎯⎯⎯●</option>
                        <option value="F1">⎯⎯⎯x⎯⎯⮞</option>
                        <option value="A2">⮜⎯⎯⎯⎯⎯⎯</option>
                        <option value="D2">●⎯⎯⎯⎯⎯⎯</option>
                        <option value="F2">⮜⎯⎯⎯x⎯⎯</option>                            
                </select>  
            <label>พัฒนาการ</label>

            <hr>

            <h5>4. <b>เวลาทั้งหมดถูกหยุดแล้ว!!</b> นั้นเป็นผลมาจากพลังของ <b>The world!!</b> ซึ่งเป็น<b>แสตนของดีโอ</b> </h5><br/>            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <label>เวลาทั้งหมดถูกหยุดแล้ว!!</label>                
                <select id="q3-7" name="q3-7">
                    <option value="x" selected disabled hidden>เลือกคำตอบ</option>
                    <option value="A1">⎯⎯⎯⎯⎯⎯⮞</option>                    
                    <option value="D1">⎯⎯⎯⎯⎯⎯●</option>
                    <option value="F1">⎯⎯⎯x⎯⎯⮞</option>
                    <option value="A2">⮜⎯⎯⎯⎯⎯⎯</option>
                    <option value="D2">●⎯⎯⎯⎯⎯⎯</option>
                    <option value="F2">⮜⎯⎯⎯x⎯⎯</option>                            
                </select>
            <label>The world!!</label> 
                <select id="q3-8" name="q3-8">
                        <option value="x" selected disabled hidden>เลือกคำตอบ</option>
                        <option value="A1">⎯⎯⎯⎯⎯⎯⮞</option>                    
                        <option value="D1">⎯⎯⎯⎯⎯⎯●</option>
                        <option value="F1">⎯⎯⎯x⎯⎯⮞</option>
                        <option value="A2">⮜⎯⎯⎯⎯⎯⎯</option>
                        <option value="D2">●⎯⎯⎯⎯⎯⎯</option>
                        <option value="F2">⮜⎯⎯⎯x⎯⎯</option>                            
                </select>  
            <label>แสตนของดีโอ</label> 

            <hr>

            <h5>5. มีสัตว์เพียง 2 ชนิดเท่านั้น ที่มีลักษณะพิเศษอย่างการ<b>ออกลูกเป็นไข่ทั้งๆที่เป็นสัตว์เลี้ยงลูกด้วยนม</b> นั้นก็คือ<b>ตุ่นปากเป็ด</b>และ<b>ตัวกินมดหนาม</b> </h5><br/>            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <label>ตุ่นปากเป็ด</label>                
                <select id="q3-9" name="q3-9">
                    <option value="x" selected disabled hidden>เลือกคำตอบ</option>
                    <option value="A1">⎯⎯⎯⎯⎯⎯⮞</option>                    
                    <option value="D1">⎯⎯⎯⎯⎯⎯●</option>
                    <option value="F1">⎯⎯⎯x⎯⎯⮞</option>
                    <option value="A2">⮜⎯⎯⎯⎯⎯⎯</option>
                    <option value="D2">●⎯⎯⎯⎯⎯⎯</option>
                    <option value="F2">⮜⎯⎯⎯x⎯⎯</option>                            
                </select>
            <label>ออกลูกเป็นไข่ทั้งๆที่เป็นสัตว์เลี้ยงลูกด้วยนม</label> 
                <select id="q3-10" name="q3-10">
                        <option value="x" selected disabled hidden>เลือกคำตอบ</option>
                        <option value="A1">⎯⎯⎯⎯⎯⎯⮞</option>                    
                        <option value="D1">⎯⎯⎯⎯⎯⎯●</option>
                        <option value="F1">⎯⎯⎯x⎯⎯⮞</option>
                        <option value="A2">⮜⎯⎯⎯⎯⎯⎯</option>
                        <option value="D2">●⎯⎯⎯⎯⎯⎯</option>
                        <option value="F2">⮜⎯⎯⎯x⎯⎯</option>                            
                </select>  
            <label>ตัวกินมดหนาม</label> 
            <br/>
            <br/>
             <center><button type="button" class="btn btn-warning btn-lg" onclick="CheckExamRelation3()" data-toggle="modal" data-target="#scoreModal" style="width:400px; height:80">ส่งคำตอบ</button></center>
        </div> 
    </div>

    <script>
        $(function() {
            openLink(event, 'relate');
        });
    </script>

    <script>

        function CheckExamRelation1(){           

            var score = 0;
            var wrong = " ";
            var answer = ["","","","","","","","","",""];            
            answer[0] = document.getElementById("q1-1").value;
            answer[1] = document.getElementById("q1-2").value;
            answer[2] = document.getElementById("q1-3").value;
            answer[3] = document.getElementById("q1-4").value;
            answer[4] = document.getElementById("q1-5").value;
            answer[5] = document.getElementById("q1-6").value;
            answer[6] = document.getElementById("q1-7").value;
            answer[7] = document.getElementById("q1-8").value;
            answer[8] = document.getElementById("q1-9").value;
            answer[9] = document.getElementById("q1-10").value; 
            
            var solution = ['A','A','D','F','D','A','F','F','D','A'];
            for (i = 0; i < 10; i++) {
                if(answer[i] == solution[i]){
                    score++;
                    }
                else{
                    wrong = wrong + String(i+1) + " ";
                    }
                } 
                
                
                var x = document.getElementById("answerRelation");
                var y = document.getElementById("wrongRelation"); 
                x.innerHTML = "คะแนนที่ได้ " + score + "/10";
                if(score == 10){
                    y.innerHTML = " ";
                }
                else{
                    y.innerHTML = "*ข้อที่ผิด: " + wrong;
                }
                  
                
            }

        function CheckExamRelation2(){           

            var score = 0;
            var wrong = " ";
            var answer = ["","","","","","","","","",""];            
            answer[0] = document.getElementById("q2-1").value;
            answer[1] = document.getElementById("q2-2").value;
            answer[2] = document.getElementById("q2-3").value;
            answer[3] = document.getElementById("q2-4").value;
            answer[4] = document.getElementById("q2-5").value;
            answer[5] = document.getElementById("q2-6").value;
            answer[6] = document.getElementById("q2-7").value;
            answer[7] = document.getElementById("q2-8").value;
            answer[8] = document.getElementById("q2-9").value;
            answer[9] = document.getElementById("q2-10").value; 
            
            var solution = ['2','2','1','1','1','1','2','1','2','2'];
            for (i = 0; i < 10; i++) {
                if(answer[i] == solution[i]){
                    score++;
                    }
                else{
                    wrong = wrong + String(i+1) + " ";
                    }
                } 
                
                console.log(score);
                var x = document.getElementById("answerRelation");
                var y = document.getElementById("wrongRelation"); 
                x.innerHTML = "คะแนนที่ได้ " + score + "/10";
                if(score == 10){
                    y.innerHTML = " ";
                }
                else{
                    y.innerHTML = "*ข้อที่ผิด: " + wrong;
                }
        }

        function CheckExamRelation3(){           

            var score = 0;
            var wrong = " ";
            var answer = ["","","","","","","","","",""];            
            answer[0] = document.getElementById("q3-1").value;
            answer[1] = document.getElementById("q3-2").value;
            answer[2] = document.getElementById("q3-3").value;
            answer[3] = document.getElementById("q3-4").value;
            answer[4] = document.getElementById("q3-5").value;
            answer[5] = document.getElementById("q3-6").value;
            answer[6] = document.getElementById("q3-7").value;
            answer[7] = document.getElementById("q3-8").value;
            answer[8] = document.getElementById("q3-9").value;
            answer[9] = document.getElementById("q3-10").value; 
            
            var solution = ['F2','A1','D1','F1','A2','F1','A2','D1','D1','D2'];
            for (i = 0; i < 10; i++) {
                if(answer[i] == solution[i]){
                    score++;
                    }
                else{
                    if(i == 0 || i ==1){
                        wrong = wrong +  "1 ";
                    }
                    else if(i == 2 || i ==3){
                        wrong = wrong +  "2 ";
                    }
                    else if(i == 4 || i ==5){
                        wrong = wrong +  "3 ";
                    }
                    else if(i == 6 || i ==7){
                        wrong = wrong +  "4 ";
                    }
                    else if(i == 8 || i ==9){
                        wrong = wrong +  "5 ";
                    }
                } 
                
                console.log(score);
                var x = document.getElementById("answerRelation");
                var y = document.getElementById("wrongRelation"); 
                x.innerHTML = "คะแนนที่ได้ " + score + "/10";
                if(score == 10){
                    y.innerHTML = " ";
                }
                else{
                    y.innerHTML = "*ข้อที่มีการตอบผิด: " + wrong;
                }  
            }    
        }                    

    </script>

    <!-- Modal -->
    <div class="modal fade in" id="scoreModal" role="dialog">
        <div class="modal-dialog">
        
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">ส่งคำตอบแล้ว</h4>
            </div>
            <div class="modal-body">
            <center><img src="{{ URL::asset('image/write-icon.png') }}" alt="Write" style="width:100px;height:100px;" ></center>
            <center><h2><div id="answerRelation">คะแนนที่ได้</div></h2></center>
            <center><h4><div id="wrongRelation">*ข้อที่ผิด</div></h4></center>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
            </div>
        </div>
        
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
