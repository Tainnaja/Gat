@extends('layouts.main')

<!-- Start Featured Slider -->
@section('content')

<div style="margin-top:90px ; " >
        <div class="w3-sidebar w3-bar-block w3-black w3-card" style="width:130px">           
            <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'set1')">บทความที่1</button>
            <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'set2')">บทความที่2</button>
            <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'set3')">บทความที่3</button>
            <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'set4')">บทความที่4</button>            
            <button class="w3-bar-item w3-button tablink" onclick="location.href='{{ url('/learn') }}'"> <span class="glyphicon  glyphicon glyphicon-arrow-left " aria-hidden="true"></span>   ย้อนกลับ</button>
        </div>        
        <div id="set1" class="w3-container city w3-animate-zoom" style="display:block; margin-left:250px; margin-right:150px; margin-bottom: 500px">
        <br/><h1>บทความที่1 กวดวิชา</h1>   
            <div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ในสมัยที่ผู้ปกครองมักส่งบุตรหลานไปเรียนกวดวิชา ผู้ปกครองบางกลุ่มยอมทุ่มเงินทุ่มเวลาไปมากมาย เพราะอยากให้<b>ผลการเรียนเป็นไปอย่างที่ตั้งความหวังไว้</b> 
            เรากลับพบว่านักเรียนมัธยมหลายคน<b>ไม่ตั้งใจเรียนพิเศษ</b> ผู้เขียนพบว่าปัญหานี้เกิดจากหลายสาเหตุด้วยกัน เช่น <b>นักเรียนขาดแรงจูงใจในการเรียน ไม่มีเป้าหมายชัดเจน</b> 
            หรือแม้กระทั่งไม่เต็มใจมาเรียนพิเศษเพราะโดนบังคับ การที่เด็กไม่ตั้งใจเรียนเช่นนี้ย่อมส่งผลร้ายตามมาหลายประการ ที่เห็นได้ชัดก็เช่น <b>เสียเงินและเวลาโดยเปล่าประโยชน์</b> 
            นอกจากนี้ยังทำให้ผลการเรียนไม่เป็นอย่างที่หวังไว้อีกด้วย 
            </div>
            <br/><iframe class="flow-gat" src="http://127.0.0.1:8000/test"> </iframe>
                <table class="table table-bordered">
            <thead  >
                <tr style="background:black; color:#F8F8FF">
                    <th scope="col-1">ลำดับ</th>
                    <th scope="col-2">ข้อความที่กำหนด</th>                     
                    <th colspan="3">ร่างรหัสคำตอบ</th>  
                                                         
                </tr>
            </thead>
            <tbody>
                <tr  style="background:#F5F5F5">
                    <th scope="row">01</th>
                    <td>เสียเงินและเวลาโดยเปล่าประโยชน์</td>                                  
                    <td> <input class="" id="set1-1-1" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set1-1-2" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set1-1-3" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>                                  
                </tr>
                <tr style="background:#DCDCDC">
                    <th scope="row">02</th>
                    <td>ผลการเรียนเป็นไปอย่างที่ตั้งความหวังไว้</td>
                    <td> <input class="" id="set1-2-1" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set1-2-2" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set1-2-3" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>           
                </tr>
                <tr style="background:#F5F5F5">
                    <th scope="row">03</th>
                    <td >นักเรียนขาดแรงจูงใจในการเรียน</td>      
                    <td> <input class="" id="set1-3-1" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set1-3-2" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set1-3-3" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>      
                </tr>
                <tr style="background:#DCDCDC">
                    <th scope="row">04</th>
                    <td>ไม่มีเป้าหมายชัดเจน</td>
                    <td> <input class="" id="set1-4-1" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set1-4-2" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set1-4-3" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>           
                </tr>
                <tr style="background:#F5F5F5">
                    <th scope="row">05</th>
                    <td >ไม่ตั้งใจเรียนพิเศษ</td>      
                    <td> <input class="" id="set1-5-1" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set1-5-2" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set1-5-3" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>      
                </tr>
            </tbody>
            </table>

            <div class="row">
                <button id="sendSet1" class=" btn-learn">ส่งคำตอบ</button>                                    
            </div>
                  
        </div>
        <div id="set2" class="w3-container city w3-animate-zoom" style="display:block; margin-left:250px; margin-right:150px; margin-bottom: 500px">
        <br/><h1>บทความที่2 เรียนสายศิลป์</h1>  
            <div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หากจะให้ระบุสาเหตุของ<b>การเลือกเรียนสายศิลป์</b> คงมีได้หลายอย่างด้วยกัน บางคนอาจเลือกเรียนเพราะ<b>ชอบเรียนด้านภาษา</b> 
            บางคนเลือกเรียนเพราะหนีวิชาวิทยาศาสตร์บางคนเลือกเพราะมีนิสัยค่อนข้างขี้เกียจ<b>ไม่อยากเรียนหนัก</b> ทั้งๆที่มันเป็นความคิดที่ไม่ถูกต้องเลย  
            สำหรับนักเรียนที่ตัดสินใจเลือกเรียนสายนี้ ไม่ว่าจะด้วยเหตุผลใดก็ตาม เราสามารถแบ่งออกได้เป็นหลายทางเลือกด้วยกัน 
            ไม่ว่าจะเป็น<b>เลือกเรียนศิลป์ภาษา</b> (แบ่งย่อยออกได้อีกหลายสาย เช่น ศิลป์ ฝรั่งเศส ศิลป์ จีน ศิลป์ ญี่ปุ่นเป็นต้น) 
            หรือหากอยากเรียนคณิตศาสตร์ด้วยเพื่อที่จะใช้สอบเรียนต่อด้านบัญชี บริหาร เศรษฐศาสตร์ นักเรียนก็สามารถ<b>เลือกเรียนศิลป์คำนวณ</b>ได้เช่นกัน  
            </div>
            <br/><iframe class="flow-gat" src="http://127.0.0.1:8000/test"> </iframe>
                <table class="table table-bordered">
            <thead  >
                <tr style="background:black; color:#F8F8FF">
                    <th scope="col-1">ลำดับ</th>
                    <th scope="col-2">ข้อความที่กำหนด</th>                     
                    <th colspan="3">ร่างรหัสคำตอบ</th>                                    
                </tr>
            </thead>
            <tbody>
            <tr  style="background:#F5F5F5">
                    <th scope="row">01</th>
                    <td>ไม่อยากเรียนหนัก</td>                                  
                    <td> <input class="" id="set2-1-1" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set2-1-2" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set2-1-3" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>                                  
                </tr>
                <tr style="background:#DCDCDC">
                    <th scope="row">02</th>
                    <td>เลือกเรียนศิลป์คำนวณ</td>
                    <td> <input class="" id="set2-2-1" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set2-2-2" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set2-2-3" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>           
                </tr>
                <tr style="background:#F5F5F5">
                    <th scope="row">03</th>
                    <td >เลือกเรียนศิลป์ภาษา</td>      
                    <td> <input class="" id="set2-3-1" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set2-3-2" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set2-3-3" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>      
                </tr>
                <tr style="background:#DCDCDC">
                    <th scope="row">04</th>
                    <td>ชอบเรียนด้านภาษา</td>
                    <td> <input class="" id="set2-4-1" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set2-4-2" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set2-4-3" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>           
                </tr>
                <tr style="background:#F5F5F5">
                    <th scope="row">05</th>
                    <td >การเลือกเรียนสายศิลป์</td>      
                    <td> <input class="" id="set2-5-1" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set2-5-2" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set2-5-3" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>      
                </tr>
            </tbody>
            </table>
            <div class="row">
                <button id="sendSet2" class=" btn-learn">ส่งคำตอบ</button>                                    
            </div>
        </div> 
        <div id="set3" class="w3-container city w3-animate-zoom" style="display:block; margin-left:250px; margin-right:150px; margin-bottom: 500px">
        <br/><h1>บทความที่3 สิววัยรุ่น</h1>    
            <div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วัยรุ่นเป็นวัยที่มีการเปลี่ยนแปลงระดับฮอร์โมนอย่างมาก สิวในวัยนี้ซึ่งเกิดจากปัจจัยหลัก คือ<b>ฮอร์โมนเพศชาย</b>จึงถือเป็นหนึ่งใน<b>ปัญหาสำคัญของวัยรุ่น</b> 
            ปัญหาสิวในวัยรุ่นดูเหมือนจะเป็นเรื่องเล็ก ๆ ในสายตาผู้ใหญ่แต่สำหรับวัยรุ่นแล้ว ปัญหานี้ถือว่าสำคัญมากสำหรับวัยที่กำลังเริ่มชอบพอเพื่อนต่างเพศ 
            <br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;นอกจากฮอร์โมนเพศชายแล้ว ปัจจัยที่ส่งผลให้เกิด<b>สิวในวัยรุ่น</b>ยังมีอีกหลายประการด้วยกัน เช่น <b>ความเครียด</b> การนอนดึก เป็นต้น 
            ปัจจัยดังกล่าวส่งผลทำให้เกิดสิวง่ายขึ้นอีกมาก ยิ่งไปกว่านั้น ช่วงวัยรุ่นนี้จำเป็นต้องทุ่มเทเวลาให้กับการเรียนหนังสือมากกว่าแต่ก่อน 
            <b>ความกดดันในการสอบแข่งขันเข้ามหาวิทยาลัย</b> จึงถือเป็นตัวการให้วัยรุ่นจำเป็นต้อง<b>นอนดึก</b> และรู้สึกเครียดอย่างหลีกเลี่ยงไม่ได้
            <br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วัยรุ่นยุคใหม่มัก<b>พบแพทย์ผิวหนังตามคลินิกเสริมความงาม</b>เพื่อรักษาอาการสิววัยรุ่น เพราะพวกเขาคิด ว่าจะเห็นผลได้ไวและชัดเจนที่สุด แต่อย่างไรก็ดี 
            ควรใช้สติในการควบคุมค่าใช้จ่ายด้วย มิฉะนั้นจะโดนแรงยุให้ จ่ายเงินมากโดยไม่จำเป็น จะได้ไม่ต้องลำบากกระเป๋าสตางค์คุณพ่อคุณแม่มากจนเกินไป  
            </div>
            <br/><iframe class="flow-gat" src="http://127.0.0.1:8000/test"> </iframe>
                <table class="table table-bordered">
            <thead  >
                <tr style="background:black; color:#F8F8FF">
                    <th scope="col-1">ลำดับ</th>
                    <th scope="col-2">ข้อความที่กำหนด</th>                     
                    <th colspan="3">ร่างรหัสคำตอบ</th>                                     
                </tr>
            </thead>
            <tbody>
            <tr  style="background:#F5F5F5">
                    <th scope="row">01</th>
                    <td>สิวในวัยรุ่น</td>                                  
                    <td> <input class="" id="set3-1-1" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set3-1-2" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set3-1-3" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>                                  
                </tr>
                <tr style="background:#DCDCDC">
                    <th scope="row">02</th>
                    <td>ความกดดันในการสอบแข่งขันเข้ามหาวิทยาลัย</td>
                    <td> <input class="" id="set3-2-1" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set3-2-2" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set3-2-3" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>           
                </tr>
                <tr style="background:#F5F5F5">
                    <th scope="row">03</th>
                    <td >ปัญหาสำคัญของวัยรุ่น</td>      
                    <td> <input class="" id="set3-3-1" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set3-3-2" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set3-3-3" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>      
                </tr>
                <tr style="background:#DCDCDC">
                    <th scope="row">04</th>
                    <td>นอนดึก</td>
                    <td> <input class="" id="set3-4-1" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set3-4-2" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set3-4-3" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>           
                </tr>
                <tr style="background:#F5F5F5">
                    <th scope="row">05</th>
                    <td >ฮอร์โมนเพศชาย</td>      
                    <td> <input class="" id="set3-5-1" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set3-5-2" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set3-5-3" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>      
                </tr>
                <tr style="background:#DCDCDC">
                    <th scope="row">06</th>
                    <td>ความเครียด</td>
                    <td> <input class="" id="set3-6-1" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set3-6-2" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set3-6-3" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>           
                </tr>
                <tr style="background:#F5F5F5">
                    <th scope="row">07</th>
                    <td >พบแพทย์ผิวหนังตามคลินิกเสริมความงาม</td>      
                    <td> <input class="" id="set3-7-1" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set3-7-2" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set3-7-3" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>      
                </tr>
            </tbody>
            </table> 
            <div class="row">
                <button id="sendSet3" class=" btn-learn">ส่งคำตอบ</button>                                    
            </div>
        </div> 
        <div id="set4" class="w3-container city w3-animate-zoom" style="display:block; margin-left:250px; margin-right:150px; margin-bottom: 500px">
        <br/><h1>บทความที่4 งานเอทีซี</h1>      
            <div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;งานเจ้าหน้าที่ควบคุมจราจรทางอากาศ (Air Traffic Controller หรือเรียกย่อ ๆ ว่า เอทีซี) เป็นงานที่สำคัญต่อ 
            อุตสาหกรรมการบินอย่างมาก ผู้คนมากมายทั่วโลกต่างกล่าวขานว่า<b>งานเอทีซีเป็นงานที่เครียดมากที่สุดติดอันดับโลก</b> งานนี้เป็นอย่างไร? 
            เราจะมาทำความรู้จักงานนี้คร่าวๆกัน
            </br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ในที่นี้จะกล่าวเบื้องต้นถึง<b>สิ่งที่ผู้สนใจควรทราบเกี่ยวกับงานเอทีซี</b>เป็นสองประเด็นด้วยกัน ประเด็นแรก คือ<b>ลักษณะของเนื้องานเอทีซี</b> งานชนิดนี้เป็นอย่างไร? 
            คำตอบแบ่งได้เป็นสองประการสำคัญ ประการแรก งานนี้มีลักษณะ<b>เป็นการจัดการระบบการบินบนน่านฟ้าทั่วโลก</b> ซึ่งเป็นที่รู้กันดีว่าเป็นระบบที่ซับซ้อนและละเอียดอ่อนมาก นอกจากนี้งานเอทีซียัง<b>เป็นการควบคุมดูแลความปลอดภัยของอากาศยาน</b>อีกด้วย 
            ด้วยลักษณะสองอย่างนี้จึงทำให้งานนี้ถือเป็นงานที่เครียดติดอันดับโลกดังที่กล่าวไป 
            </br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ประเด็นต่อมาคือ <b>ลักษณะของผู้ที่จะมาทำงานเอทีซี</b>นั้นควรจะเป็นคนอย่างไร? คำตอบคือ ต้องเป็นคนมีความคิดฉับไว กล้าตัดสินใจ <b>ชอบทำงานเป็นทีม</b> 
            และมีทักษะภาษาอังกฤษในขั้นดีมาก เป็นต้น    
            </div>
            <br/><iframe class="flow-gat" src="http://127.0.0.1:8000/test"> </iframe> 
                <table class="table table-bordered">
            <thead  >
                <tr style="background:black; color:#F8F8FF">
                    <th scope="col-1">ลำดับ</th>
                    <th scope="col-2">ข้อความที่กำหนด</th>                     
                    <th colspan="3">ร่างรหัสคำตอบ</th>                                      
                </tr>
            </thead>
            <tbody>
            <tr  style="background:#F5F5F5">
                    <th scope="row">01</th>
                    <td>ลักษณะของเนื้องานเอทีซี</td>                                  
                    <td> <input class="" id="set4-1-1" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set4-1-2" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set4-1-3" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>                                  
                </tr>
                <tr style="background:#DCDCDC">
                    <th scope="row">02</th>
                    <td>ลักษณะของผู้ที่จะมาทำงานเอทีซี</td>
                    <td> <input class="" id="set4-2-1" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set4-2-2" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set4-2-3" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>           
                </tr>
                <tr style="background:#F5F5F5">
                    <th scope="row">03</th>
                    <td >สิ่งที่ผู้สนใจควรทราบเกี่ยวกับงานเอทีซี </td>      
                    <td> <input class="" id="set4-3-1" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set4-3-2" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set4-3-3" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>      
                </tr>
                <tr style="background:#DCDCDC">
                    <th scope="row">04</th>
                    <td>งานเอทีซีเป็นงานที่เครียดมากที่สุดติดอันดับโลก </td>
                    <td> <input class="" id="set4-4-1" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set4-4-2" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set4-4-3" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>           
                </tr>
                <tr style="background:#F5F5F5">
                    <th scope="row">05</th>
                    <td >เป็นการจัดการระบบการบินบนน่านฟ้าทั่วโลก </td>      
                    <td> <input class="" id="set4-5-1" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set4-5-2" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set4-5-3" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>      
                </tr>
                <tr style="background:#DCDCDC">
                    <th scope="row">06</th>
                    <td>เป็นการควบคุมดูแลความปลอดภัยของอากาศยาน </td>
                    <td> <input class="" id="set4-6-1" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set4-6-2" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set4-6-3" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>           
                </tr>
                <tr style="background:#F5F5F5">
                    <th scope="row">07</th>
                    <td >ชอบทำงานเป็นทีม</td>      
                    <td> <input class="" id="set4-7-1" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set4-7-2" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>
                    <td> <input class="" id="set4-7-3" type="text" onkeyup="this.value = this.value.toUpperCase();"></td>      
                </tr>
            </tbody>
            </table>
            <div class="row">
                <button id="sendSet4" class=" btn-learn">ส่งคำตอบ</button>                                    
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

    <style>
        .flow-gat {
            width: 100%;
            height: 500px;            
        }
        span {
            width: 100%;
            display: block;
        }

        table {
        border-collapse: collapse;
        }

        td, th {
        border: 1px solid;
        }
        input {
            width: 100%; /* force to expand to container's width */ 
            /* border: 7px solid #DFDFDF;   */
            /* padding: 0 10px; */
             /* negative margin = border-width + horizontal padding */ 
        }  
        
        .btn-learn {
            width: 600px;
            height: 120px;
            border-radius: 50px 50px 50px 50px;
            background:#FFCC00;
            margin-bottom: 15px;
            font-size: 25px;
            color: blue;
        }

        .btn-learn:hover{
            /* width: 620px;    */
            background:#FFDAB9;
            color: #00CCFF;
        }
    
    </style>