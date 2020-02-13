@extends('layouts.main')

<!-- Start Featured Slider -->
@section('content')

<div style="margin-top:90px ; " >
            <div class="w3-sidebar w3-bar-block w3-black w3-card" style="width:180px">
            <!-- <h5 class="w3-bar-item">Menu</h5> -->
            <button id="BtnSkills" class="w3-bar-item w3-button tablink" onclick="openLink(event, 'skills')">ทักษะเชิงวิเคราะห์คืออะไร</button>
            <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'gatTest')">ข้อสอบ gat คืออะไร</button>
            <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'examples')">วิธีทำข้อสอบและวิธีคิดคะแนน</button>    
            <button class="w3-bar-item w3-button tablink" onclick="location.href='{{ url('/learn') }}'"> <span class="glyphicon  glyphicon glyphicon-arrow-left " aria-hidden="true"></span>   ย้อนกลับ</button>       
        </div>
        <!-- <div style="margin-left:130px"> -->
        <!-- <div class="w3-padding">Use any of the w3-animate-classes to fade, zoom or slide in tab content.</div> -->
        <!-- <div id="Fade" class="w3-container city w3-animate-opacity" style="display:none"> -->
        <div id="skills" class="w3-container city w3-animate-zoom" style="display:none; margin-left:250px; margin-right:150px; margin-bottom:500px;display:block">
            <h1><br/></h1>
            <h1>ทักษะเชิงวิเคราะห์</h1><br/>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ทักษะเชิงวิเคราะห์ คือ ความสามารถในการคิดจำแนกแจกแจงองค์ประกอบต่างๆ ของข้อมูลหรือปัญหาต่างๆออกเป็นประเด็นย่อยๆ 
            ในหลายๆแง่มุม  รวมทั้งการหาความสัมพันธ์ระหว่างองค์ประกอบเหล่านั้น  แล้วนำมาวิเคราะห์เพื่อหาสาเหตุที่แท้จริงของสิ่งที่เกิดขึ้นได้อย่างเป็นระบบ</p>         
        </div>

        <div id="gatTest" class="w3-container city w3-animate-zoom" style="display:none;  margin-left:250px; margin-right:150px; margin-bottom: 500px">
            <h1><br/></h1>
            <h1>ข้อสอบ GAT คืออะไร</h1><br/>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ปัจจุบันในประเทศไทยใช้การสอบ TCAS (Thai University Center Admission System) 
            เป็นระบบการคัดเลือกบุคคลเข้าศึกษาต่อในระดับมหาวิทยาลัย ซึ่งเริ่มนำมาใช้ในปีการศึกษา 2561 โดยการจัดสอบแบ่งเป็นการสอบ O-net, GAT PAT และ 9 วิชาสามัญ โดยที่นี่ เราจะให้นักเรียนมาทำความรู้จักกับ 
            ข้อสอบ GAT เป็นการทดสอบวิชาความถนัดทั่วไป (General Aptitude Test) หรือเรียกได้ว่าเป็น การวัดศักยภาพในการใช้ภาษาและการเรียนในมหาวิทยาลัยให้ประสบความสำเร็จ ข้อสอบ GAT จะแบ่งเป็น 2 ส่วนได้ดังนี้
            </p><br/>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ส่วนที่ 1 คือ GAT เชื่อมโยง วัดความสามารถในการอ่าน/การเขียน/การคิดเชิงวิเคราะห์/และการแก้โจทย์ปัญหา โดยจะมีบทความยาวประมาณ 1-2 หน้า 2 เรื่อง สำหรับแก้โจทย์ คะแนนเต็ม 150 คะแนน ซึ่งในเว็บไซต์แห่งนี้จะพานักเรียนไปลงลึกกับส่วนนี้แบบชนิดที่เว็บเดียวจบนั้นเอง</p><br/>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ส่วนที่ 2 คือ GAT ภาษาอังกฤษ วัดความสามารถในการสื่อสารด้วยภาษาอังกฤษ เป็นข้อสอบปรนัย จำนวน 40 ข้อคะแนนเต็ม 150 คะแนน</p><br/>
        </div>

        <div id="examples" class="w3-container city w3-animate-zoom" style="display:none; margin-left:250px; margin-right:150px; margin-bottom: 500px;">
            <h1><br/></h1>
            <h1>วิธีการทำข้อสอบ</h1><br/>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ข้อสอบ GAT เชื่อมโยงจะมีบทความให้อ่าน ความยาวประมาณ 2 – 3 หน้า A4 แต่ละบทความจะมี 10 รหัสข้อความ รวม 2 บทความเท่ากับ 20 รหัส 
            ข้อสอบจะกำหนดให้อ่านและหาความสัมพันธ์ระหว่างข้อความที่โจทย์กำหนดไว้เป็นรหัสในตารางท้ายบทความแต่ละบท ซึ่งลักษณะความสัมพันธ์จะแบ่งเป็น 3 ประเภทคือ ส่งผลโดยตรง 
            เป็นส่วนประกอบและมีผลยับยั้ง ซึ่งเราจะกล่าวส่วนนี้โดยละเอียดในหัว'ข้อทฤษฎีที่ต้องรู้' ทั้งนี้การทำข้อสอบชุดนี้มีลำดับขั้นตอนหลักๆ คือ </p><br/> 
            <h4>อ่านข้อความ > วาดแผนภาพ > แปลงเป็นรหัสคำตอบ > ฝนคำตอบ > ตรวจทานละเอียดอีกครั้ง</h4><br/>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เมื่อเราอ่านและวิเคราะห์ข้อความแล้ว ถัดมาเรามาจะร่างแผนภาพเพื่อสร้างความเข้าใจอย่างเป็นระบบ
            แก่ตนเองก่อนที่จะไปเติมในตารางคำตอบต่อ ตัวอย่างการวาดแผนภาพดังรูปด้านล่าง</p>
            <br/><br/><img src="{{ URL::asset('theory_images/ex_diagram.png') }}" alt="ex_diagram" class="center"><br/><br/>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หลังจากวาดแผนภาพแล้ว เราต้องแปลงภาพเป็นรหัสคำตอบ โดยการแปลงภาพเป็นรหัสคำตอบ มี 4 ประเด็นที่จำเป็นต้องทำความเข้าใจ คือ<br/><br/>
            1.ตั้งต้นจากข้อรหัสที่จะหาคำตอบ<br/>
            2.นับจำนวนคำตอบของข้อรหัสนั้นจากจำนวนเส้นที่โยงออกไปหารหัสอื่น<br/>
            3.เมื่อรหัสใดก็ตาม ไม่มีเส้นโยงออกไปหารหัสอื่น ๆ แล้ว ให้ตอบ 99H<br/>
            4.คำตอบของรหัสใด ๆ คือ เลขรหัสปลายทางที่เส้นโยงไปหา + ตัวอักษร A D F (แทนเส้นที่โยงไปหา) ดังนั้น รหัสคำตอบ 1 คำตอบ จะมี 3 หลัก เช่น 01D 02A 03F 99H เป็นต้น<br/><br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ถัดมาจึงเริ่มเติมคำตอบในตารางดังตัวอย่างด้านล่าง</p>
            <br/><br/><img src="{{ URL::asset('theory_images/ex_code.png') }}" alt="ex_code" class="center"><br/><br/>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หลังจากเติมคำตอบในตารางแล้ว ถัดมาเป็นขั้นตอนสุดท้ายก็คือการฝนรหัสคำตอบด้วยดินสอ 2B
            ลงกระดาษคำตอบจริงๆ ระบบจะตรวจความถูกต้องจากกระดาษคำตอบนี้เพราะฉะนั้นคัดลอกคำตอบจากตารางที่เราร่างไว้มาฝนในกระดาษคำตอบอย่างระมัดระวังที่สุด หากเวลาเหลือ
            ก็จงตรวจทานความถูกต้องทั้งหมดให้ชัวร์</p>
            <br/><br/><img src="{{ URL::asset('theory_images/ex_answer.png') }}" alt="ex_answer" class="center"><br/><br/>

            <h1>วิธีคิดคะแนน</h1><br/>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;คะแนนเต็มทั้งหมดของข้อสอบ 1 ชุดคือ 150 คะแนน บทความละ 75 คะแนน การนับคะแนนจะพิจรณาจากคำตอบที่นักเรียนตอบมาโดยตรง
            โดยมีกรณีรูปแบบดังนี้<br/><br/>
            <h5><b>กรณีที่ 1 ตอบถูกหมดทุกข้อ</b></h5>
            <br/><br/><img src="{{ URL::asset('theory_images/444.png') }}" alt="444" class="center"><br/><br/>
            <h5><b>กรณีที่ 2 ตอบถูก 2 คำตอบ ตอบผิด 1 คำตอบ</b></h5>
            <br/><br/><img src="{{ URL::asset('theory_images/443.png') }}" alt="443" class="center"><br/><br/>
            <h5><b>กรณีที่ 3 ตอบถูก 3 คำตอบ ตอบเกิน 1 คำตอบ</b></h5>
            <br/><br/><img src="{{ URL::asset('theory_images/4443.png') }}" alt="4443" class="center"><br/><br/>
            <h5><b>กรณีที่ 4 ตอบถูก 1 คำตอบ ตอบผิด 2 คำตอบ</b></h5>
            <br/><br/><img src="{{ URL::asset('theory_images/433.png') }}" alt="433" class="center"><br/><br/>
            <h5><b>กรณีที่ 5 ตอบถูก 2 คำตอบ (ไม่ตอบ 1 คำตอบ)</b></h5>
            <br/><br/><img src="{{ URL::asset('theory_images/44.png') }}" alt="44" class="center"><br/><br/>
            <h5><b>กรณีที่ 6 ตอบผิดหมดทุกข้อ</b></h5>
            <br/><br/><img src="{{ URL::asset('theory_images/333.png') }}" alt="333" class="center"><br/><br/>
            </p>         
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
