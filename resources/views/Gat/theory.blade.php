@extends('layouts.main')

<!-- Start Featured Slider -->
@section('content')

<div style="margin-top:90px ; " >
        <div class="w3-sidebar w3-bar-block w3-black w3-card" style="width:130px">
            <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'relationship')">ความสัมพันธ์แต่ละแบบ</button>
            <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Chronology')">ข้อควรระวังลำดับเหตุการณ์</button>
            <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'sentences')">ข้อควรระวังประโยคความซ้อน</button>
            <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'duplicate')">ข้อควรระวังการกล่าวซ้ำ</button> 
            <button class="w3-bar-item w3-button tablink" onclick="location.href='{{ url('/learn') }}'"> <span class="glyphicon  glyphicon glyphicon-arrow-left " aria-hidden="true"></span>   ย้อนกลับ</button>
        </div>
         <div id="relationship" class="w3-container city w3-animate-zoom" style="display:block; margin-left:250px; margin-right:150px; margin-bottom: 500px">
            <h1><br/></h1>

            <h1>ความสัมพันธ์แต่ละแบบ</h1><br/>            
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เมนหลักๆ ของการทำข้อสอบ gat เชื่อมโยงและการวิเคราะห์จับใจความคือความสัมพันธ์ที่เชื่อมจากกลุ่มคำหนึ่งไปยังอีกคำหนึ่งโดยมีความสัมพันธ์ 4 แบบดังนี้<br/><br/>
            
            <h5><b>1. ก่อให้เกิด</b></h5> 
            <b>สัญลักษณ์:</b>ลูกศรปกติ<br/>
            <b>การตอบ:</b> เลขสองหลักตามด้วย A<br/>
            จะใช้เมื่อเหตุการณ์หนึ่งก่อให้เกิดอีกเหตุการณ์หนึ่งหรือคิดง่ายๆ ก็คือเหตุก่อให้เกิดผล วิธีใช้สัญลักษณ์ในการร่างคือให้เหตุอยู่ที่ปลายลูกศรจากนั้นชี้ไปที่ผลที่อยู่หัวลูกศร โดยคีย์เวิร์ดที่บ่งบอกถึงความสัมพันธ์นี้เช่น ก่อให้เกิด, ทำให้เกิด, ส่งผลให้, ส่งผลต่อ, สิ่งที่ตามมา, ทำให้, เกิดจาก, เป็นที่มาของ, เพราะ<br/>
            <b>ตัวอย่าง</b>
            <br/><br/><img src="{{ URL::asset('theory_images/s2-1.png') }}" alt="s2-1" class="center"><br/><br/>
            <b>ตัวอย่างบทความ</b>
            <br/><br/><img src="{{ URL::asset('theory_images/s2-2.png') }}" alt="s2-2" class="center"><br/><br/>
            
            <h5><b>2. ส่วนประกอบ</b></h5> 
            <b>สัญลักษณ์:</b>ลูกศรหัวมน<br/>
            <b>การตอบ:</b> เลขสองหลักตามด้วย D<br/>
            จะใช้ต่อเมื่อข้อความหนึ่งเป็นองค์ประกอบหรือคุณสมบัติของอีกข้อความหนึ่ง วิธีใช้สัญลักษณ์คือโดยลากเส้นจากข้อความตั้งต้นไปยังข้อความที่เป็นองค์ประกอบของข้อความตั้งต้นโดยที่ด้านนี้เป็นหัวมน คีย์เวิร์ดที่บ่งบอกถึงความสัมพันธ์นี้เช่น ได้แก่,ประกอบด้วย, ยกตัวอย่างเช่น, แบ่งเป็น, แบ่งได้, หมายถึง, มี, มีลักษณะ, มีคุณสมบัติ<br/>
            <b>ตัวอย่าง</b>
            <br/><br/><img src="{{ URL::asset('theory_images/s2-3.png') }}" alt="s2-3" class="center"><br/><br/>
            <b>ตัวอย่างบทความ</b>
            <br/><br/><img src="{{ URL::asset('theory_images/s2-4.png') }}" alt="s2-4" class="center"><br/><br/>            

            <h5><b>3. ยับยั้ง</b></h5> 
            <b>สัญลักษณ์:</b>ลูกศรมีกากบาทอยู่ตรงกลางเส้น<br/>
            <b>การตอบ:</b> เลขสองหลักตามด้วย F<br/>
            จะใช้เมื่อเหตุการณ์หนึ่งยับยั้งไม่ให้เกิดอีกเหตุการณ์หนึ่งหรือเหตุการณ์หนึ่งทำให้อีกเหตุการณ์หนึ่งเกิดได้ยากขึ้นและเกิดน้อยลง วิธีใช้สัญลักษณ์ในการร่างคือใช้เส้นลูกศรที่กากบาทอยู่ตรงกลางโดยให้ข้อความตั้งต้นอยู่ที่ปลายลูกศรจากนั้นชี้ไปที่ข้อความที่ถูกยับยั้งโดยข้อความตั้งต้น โดยคีย์เวิร์ดที่บ่งบอกถึงความสัมพันธ์นี้เช่น ยับยั้ง, ขัดขวาง, ป้องกัน, ห้าม, ลด, ไม่มี,    บั่นทอน, ลดทอน, แก้ไข, หยุด<br/>
            <b>ตัวอย่าง</b>
            <br/><br/><img src="{{ URL::asset('theory_images/s2-5.png') }}" alt="s2-5" class="center"><br/><br/>
            <b>ตัวอย่างบทความ</b>
            <br/><br/><img src="{{ URL::asset('theory_images/s2-6.png') }}" alt="s2-6" class="center"><br/><br/>            

            <h5><b>4. ไม่เกี่ยวข้องอะไรเลย</b></h5>
            ข้อความที่ไม่เกี่ยวข้องอะไรอีกจะไม่มีผลโดยตรงต่อกับข้อความอื่นใดๆ ทั้งสิ้นไม่ว่าจะแบบก่อให้เกิด ส่วนประกอบหรือยับยั้ง การตอบของข้อความนี้ ให้ตอบว่า 99H เพียงตัวเดียว
            </p>
        </div>

        <div id="Chronology" class="w3-container city w3-animate-zoom" style="display:none; margin-left:250px; margin-right:150px; margin-bottom: 500px;">
            <h1><br/></h1>
            <h1>ข้อควรระวังลำดับเหตุการณ์</h1><br/>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ในบทความ จะไม่มีการจัดเรียงลำดับเหตุการณ์จากเหตุไปผลก่อนเสมอไป บางครั้งจะเริ่มจากผลกระทบก่อนจากนั้นค่อยตามมาด้วยการบรรยายเรื่องเหตุทีหลัง ซึ่งจุดนี้อาจทำให้สับสนได้ว่า เหตุการณ์ไหนควรเกิดก่อนหรือหลังและอันไหนควรเป็นเหตุหรือผลกันแน่ ดังนั้นควรอ่านให้ถี่ถ้วนก่อนร่างคำตอบเสมอ เช่น 
            <br/><br/><img src="{{ URL::asset('theory_images/s2-7.png') }}" alt="s2-7" class="center"><br/><br/>
            หรือบางครั้ง ในความสัมพันธ์แบบยับยั้ง ก็สามารถเรียงการบบรยายจากผลไปเหตุได้เหมือนกัน เช่น
            <br/><br/><img src="{{ URL::asset('theory_images/s2-8.png') }}" alt="s2-8" class="center"><br/><br/> 
            <b>ตัวอย่างบทความที่มีการเรียงจากผลไปเหตุ</b>
            <br/><br/><img src="{{ URL::asset('theory_images/s2-9.png') }}" alt="s2-9" class="center"><br/><br/> 
            </p>
            
        </div>

        <div id="sentences" class="w3-container city w3-animate-zoom" style="display:none; margin-left:250px; margin-right:150px; margin-bottom: 500px;">
            <h1><br/></h1>
            <h1>ข้อควรระวังประโยคความซ้อน</h1><br/>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ประโยคความซ้อนคือประโยคที่มีการรวมสองประโยคหรือมากกว่าไว้ในประโยคเดียว โดยมีคำสันธานเป็นตัวเชื่อม ซึ่งในตัวประโยคความซ้อนนี้เองมักก่อให้เกิดความสับสนจนใช้ความสัมพันธ์ผิดประเภทเช่นเดียวกัน สิ่งสำคัญสำหรับการระวังเรื่องนี้คือการดูให้ถี่ถ้วนว่า การคลุมตัวหนานั้นครอบคลุมถึงส่วนใด 
            รวมถึงการดูคำเชื่อมให้ดีๆ ว่ากำลังเชื่อมจากข้อความใดไปสู่ข้อความใด เช่น
            <br/><br/><img src="{{ URL::asset('theory_images/s2-10.png') }}" alt="s2-10" class="center"><br/><br/>
            ต่อมาลองพิจรณาคำนี้
            <br/><br/><img src="{{ URL::asset('theory_images/s2-11.png') }}" alt="s2-11" class="center"><br/><br/>
            ลองพิจรณาตัวอย่างอื่นๆ เพื่อเสริมความเข้าใจได้
            <br/><br/><img src="{{ URL::asset('theory_images/s2-12.png') }}" alt="s2-12" class="center"><br/><br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การเล่นคำซ้อนไม่ได้มีแค่ทำให้สับสนระหว่างความสัมพันธ์แบบก่อให้เกิดและยับยั้งได้เท่านั้น แต่ในกรณีความสัมพันธ์แบบ เป็นองค์ประกอบ ก็ทำให้สับสนได้เช่นกัน เช่น
            <br/><br/><img src="{{ URL::asset('theory_images/s2-13.png') }}" alt="s2-13" class="center"><br/><br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ยังคงมีประโยคความซ้อนที่ทำให้สับสนเรื่องลำดับความสัมพันธ์ที่มักทำให้ตอบผิดได้ พิจรณาตัวอย่างดังนี้
            <br/><br/><img src="{{ URL::asset('theory_images/s2-14.png') }}" alt="s2-14" class="center"><br/><br/>
            </p>
        </div>

        <div id="duplicate" class="w3-container city w3-animate-zoom" style="display:none; margin-left:250px; margin-right:150px; margin-bottom: 500px;">
            <h1><br/></h1>
            <h1>ข้อควรระวังการกล่าวซ้ำ</h1><br/>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การกล่าวซ้ำในที่นี้ หมายถึง การที่บทความได้กล่าวถึงข้อความที่ต้องใช้รหัสคำตอบไปแล้วรอบหนึ่ง แต่ในภายหลังได้กล่าวถึงข้อความนั้นซ้ำอีกครั้ง แต่ไม่ได้ระบุว่าเป็นเลขรหัสหรือเน้นตัวหนาให้เหมือนครั้งก่อนหน้า ฉะนั้นสิ่งที่ต้องระวังก็คือต้องรู้ให้ได้ว่า ข้อความที่เป็นรหัสถูกกล่าวถึงซ้ำอีกที่ไหน 
            เพื่อไม่ให้ถูกหลอกและผิดพลาดเรื่องการเชื่อมโยง โดยการกล่าวซ้ำหลักๆ มีรูปแบบหลักดังนี้<br/><br/>

            <h5><b>1. กล่าวซ้ำแบบเหมือน</b></h5>
            ลองพิจรณาบทความตัวอย่าง
            <br/><br/><img src="{{ URL::asset('theory_images/s2-15.png') }}" alt="s2-15" class="center"><br/><br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;จากบทความตัวอย่าง จะเห็นคำว่า กีฬาโอลิมปิก ถูกเน้นตัวหนาในครั้งแรก แต่ในการกล่าวถึงครั้งที่สองตรงคำว่า "ชาวกรีกโบราณเป็นผู้ให้กำเนิดกีฬาโอลิมปิก" ซึ่งจะไม่มีการเน้นตัวหนาให้แถมยังคงเป็นคีย์ในการตอบคำถาม ในจุดนี้อาจทำให้พลาดได้ แต่อย่างไรก็ตาม 
            เคสนี้ยังถือว่าไม่ยากนักเพราะมีการกล่าวซ้ำที่เหมือนและคล้ายคลึงกับที่เคยกล่าวในครั้งแรก การร่างคำตอบที่ถูกต้องของบทความนี้คือ
            <br/><br/><img src="{{ URL::asset('theory_images/s2-16.png') }}" alt="s2-16" class="center"><br/><br/>

            <h5><b>2. กล่าวซ้ำแบบย่อ</b></h5>
            ลองพิจรณาบทความตัวอย่าง
            <br/><br/><img src="{{ URL::asset('theory_images/s2-17.png') }}" alt="s2-17" class="center"><br/><br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;จากบทความตัวอย่าง คำว่า ปัญหาฝุ่น pm 2.5 ถูกเน้นตัวหนาและกล่าวด้วยชื่อเต็ม แต่ในครั้งถัดมา ข้อความนี้ถูกกล่าวอีกครั้งในส่วน "การแจกจ่ายหน้ากากอนามัยก็แก้ปัญหานี้ได้แต่เพียงปลายเหตุเท่านั้น" ซึ่งมันกล่าวถึง "ปัญหาฝุ่น pm 2.5" แต่ถูกย่อให้เหลือแค่ 
            "ปัญหานี้" เท่านั้น การร่างคำตอบที่ถูกต้องของบทความนี้คือ
            <br/><br/><img src="{{ URL::asset('theory_images/s2-18.png') }}" alt="s2-18" class="center"><br/><br/>

            <h5><b>3. กล่าวซ้ำแบบเปลี่ยนคำ</b></h5>
            ลองพิจรณาบทความตัวอย่าง
            <br/><br/><img src="{{ URL::asset('theory_images/s2-19.png') }}" alt="s2-19" class="center"><br/><br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;จากบทความตัวอย่างคำว่า "เทคโนโลยีเอไอ" ถูกกล่าวครั้งแรกโดนเน้นตัวหนา โดยมันถูกกล่าวครั้งที่สองด้วยคำว่า "ปัญญาประดิษฐ์" ซึ่งในที่นี้ต้องเป็นที่รู้กันว่า "เทคโนโลยีเอไอ" และ "ปัญญาประดิษฐ์" สองคำนี้มีความหมายเหมือนกันและมันถูกกล่าวถึงอีกครั้งในรูปแบบที่แตกต่างแต่ยังคงความหมายเดิม เคสนี้จะเป็นเคสที่อันตรายและมีโอกาสพลาดมากที่สุด 
            ฉะนั้นควรศึกษาคำที่พ้องความหมายหลายๆ คำหรือข่าวโลกปัจจุบันต่างๆ เพื่อทำให้รู้จักคำศัพท์มากขึ้น การร่างคำตอบที่ถูกต้องของบทความนี้คือ
            <br/><br/><img src="{{ URL::asset('theory_images/s2-20.png') }}" alt="s2-20" class="center"><br/><br/>
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
