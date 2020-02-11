@extends('layouts.main')

<!-- Start Featured Slider -->
@section('content')

<div style="margin-top:90px ; " >
        <div class="w3-sidebar w3-bar-block w3-black w3-card" style="width:130px">
            <!-- <h5 class="w3-bar-item">Menu</h5> -->
            <button id="BtnSkills" class="w3-bar-item w3-button tablink" onclick="openLink(event, 'skills')">ทักษะเชิงวิเคราะห์คืออะไร</button>
            <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'gatTest')">ข้อสอบ gat คืออะไร</button>
            <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'examples')">ตัวอย่างข้อสอบและวิธีคิดคะแนน</button>    
            <button class="w3-bar-item w3-button tablink" onclick="location.href='{{ url('/learn') }}'"> <span class="glyphicon  glyphicon glyphicon-arrow-left " aria-hidden="true"></span>   ย้อนกลับ</button>       
        </div>
        <!-- <div style="margin-left:130px"> -->
        <!-- <div class="w3-padding">Use any of the w3-animate-classes to fade, zoom or slide in tab content.</div> -->
        <!-- <div id="Fade" class="w3-container city w3-animate-opacity" style="display:none"> -->
        <div id="skills" class="w3-container city w3-animate-zoom" style="display:none; margin-left:125px; margin-bottom: 500px;display:block">
            <h1>ทักษะเชิงวิเคราะห์</h1>
            <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ทักษะเชิงวิเคราะห์ คือ ความสามารถในการคิดจำแนกแจกแจงองค์ประกอบต่างๆ ของข้อมูลหรือปัญหาต่างๆออกเป็นประเด็นย่อยๆ </h3>
            <h3>ในหลายๆแง่มุม  รวมทั้งการหาความสัมพันธ์ระหว่างองค์ประกอบเหล่านั้น  แล้วนำมาวิเคราะห์เพื่อหาสาเหตุที่แท้จริงของสิ่งที่เกิดขึ้นได้อย่างเป็นระบบ</h3>         
        </div>

        <div id="gatTest" class="w3-container city w3-animate-zoom" style="display:none; margin-left:125px; margin-bottom: 500px">
            <h2>ข้อสอบ gat คืออะไร</h2>
            <h3>ข้อสอบ gat คือ GAT เป็นการทดสอบวิชาความถนัดทั่วไป (General Aptitude Test) หรือเรียกง่ายๆ ว่าเป็น “การวัดศักยภาพในการเรียนในมหาวิทยาลัยให้ประสบความสำเร็จ”
            แบ่งออกเป็น 2 ส่วน คือ
            1) ความสามารถในการอ่าน/การเขียน/การคิดเชิงวิเคราะห์/และการแก้โจทย์ปัญหา เป็นการวัดความถนัดทั่วๆ ไป หรือที่เรียกว่าเป็นพาร์ทเชื่อมโยง ซึ่งน้องๆ สามารถฝึกตะลุยโจทย์จากข้อสอบ ตัวอย่างที่มีอยู่ในเว็บ สทศ. หรือติดตามได้ที่ OnDemand ในพาร์ทนี้ต้องเน้นย้ำเลยว่าควร ฝึกทำโจทย์เยอะๆ เพื่อให้คุ้นเคยกับรูปแบบการเชื่อมโยงมากยิ่งขึ้น อย่าประมาทเป็นอันขาด! เพราะน้องๆ หลายคนพลาดข้อสอบในส่วนนี้ไปเยอะ เนื่องจากทำไม่ทันเวลา
            ทริคสำคัญ : สำหรับการทำข้อสอบในส่วนนี้คือ น้องๆ ต้องหา “ความสัมพันธ์ระหว่าง ข้อความแต่ละข้อความ” ตามที่โจทย์ระบุมา เน้นย้ำว่า “ควรอ่านโจทย์ คำสั่ง เครื่องหมายและข้อความ ให้ละเอียดถี่ถ้วน” จากนั้นใช้วิธีการ “วาดรูป” แทนความสัมพันธ์ต่างๆ เพื่อคิด วิเคราะห์ เชื่อมโยง ได้ง่ายขึ้นและเห็นภาพมากยิ่งขึ้น ที่สำคัญที่สุดต้องหมั่นฝึกทำโจทย์ของปี ที่ผ่านๆ มาให้แม่น เพื่อวันที่ลงสนามสอบจริง น้องๆ จะคุ้นเคยกับรูปแบบโจทย์ได้มากกว่า ทั้งยังช่วยประหยัดเวลาในการทำข้อสอบได้มากกว่าคนที่ไม่เคยฝึกทำโจทย์เลย
            2) ความสามารถในการสื่อสารด้วยภาษาอังกฤษ (เสียงลือให้หนาหูว่าภาษาอังกฤษ GAT ค่อนข้างหินมากก) โดยข้อสอบในส่วนนี้ จะแบ่งออกเป็น 4 พาร์ทใหญ่ คือ
            Speaking and Conversation การพูดคุย / การโต้ตอบสนทนา เป็นการวัดทักษะการสื่อสารทั้งการเลือกใช้ประโยค สำนวนที่ใช้ในการพูดคุย ในส่วนนี้การหัดคุยกับเจ้าของภาษา ฟังเพลงหรือดูภาพยนตร์ต่างประเทศ ช่วยได้เยอะเลยครับ
            Vocabulary เป็นการวัดคลังคำศัพท์ที่น้องๆ รู้จักนั่นเอง ซึ่งใครที่รู้จักศัพท์ภาษาอังกฤษเยอะกว่า ได้เปรียบแน่นอน แต่ขอกระซิบว่าคำศัพท์ที่ออกสอบส่วนใหญ่ มักไม่ค่อยได้ใช้ ในชีวิตประจำวัน
            Structure and Writing เป็นข้อสอบเพื่อวัดในส่วนของแกรมม่า ไวยากรณ์ คำ ความหมาย หน้าที่ของเทนส์ เติมประโยคในช่องว่าง ไปจนถึงการเรียงประโยค
            Reading Comprehension พาร์ทนี้ยินดีกับหนอนหนังสือตัวยง และน้องๆ ที่ชอบฝึกอ่าน ฝึกสังเกตตามป้ายโฆษณาภาษาอังกฤษ เพราะการอ่านสามารถช่วยในส่วนนี้ได้เยอะ โดยโจทย์มักมาในรูปแบบของสำนวน เรื่องราวที่เชื่อมโยงกัน รวมไปถึงบทความต่างๆ ซึ่งน้องๆ ควรฝึกอ่านแบบจับใจความไว้ เพื่อช่วยประหยัดเวลาในการอ่านและทำข้อสอบได้ทัน</h3>

        </div>

        <div id="examples" class="w3-container city w3-animate-zoom" style="display:none; margin-left:125px; margin-bottom: 500px;">
            <h1>การนับคะแนน</h1>
            <h3>กรณีที่ 1 ตอบถูกหมดทุกคำตอบ กรณีนี้เป็นกรณีตั้งต้นเพื่อไปสู่กรณีต่อไปนะคะ เวลาที่ทำข้อสอบ GAT เชื่อมโยงเนี่ยจะมีคำมาให้ว่าคำนี้ตอบอะไรบ้าง ซึ่งโจทย์กำหนดมาให้เรียบร้อยแล้ว หน้าที่ของเราก็คือดูว่าคำนั้นมีอะไรมาเกี่ยวข้องบ้าง พี่แป้งขอยกตัวอย่างข้อสอบ 1 ข้อ ซึ่งเป็นข้อที่มี 3 คำตอบคือ 01A 03D 05F ถ้าน้อง ๆ ทำข้อสอบละถูกหมดทั้ง 3 ข้อ ก็รับคะแนนไปเต็ม ๆ เลยค่ะคำตอบละ 4 คะแนน รวมเป็น 12 คะแนน</h3>         
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
