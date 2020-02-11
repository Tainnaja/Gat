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
            <div>
                หนังสือ Made To Stick คนเขียนมีแนวทางให้เราลอง เป็นหลักการ 6 อย่าง เป็นคุณสมบัติของไอเดียที่จะทำให้มันปัง ได้แก่ Simple, Unexpected, Concrete, Credible, Emotional และ Stories ได้ตัวย่อเป็นความสำเร็จ เป็น SUCCES
                Simple คือง่าย ทำยังไงให้เข้าใจง่าย ไม่ต้องเยอะ เอาแค่ที่สำคัญ น้ำไม่ต้อง เอาแต่เนื้อ ไม่ต้องเล่ายาว สรุปมาให้หน่อย
                Unexpected คือไม่คาดคิด ไม่เคยเห็นมาก่อน ไม่คิดว่าแบบนี้ก็ทำได้ เซอร์ไพรส์ทำให้คนสนใจ ความไม่เหมือนใครทำให้คนยิ่งอยากรู้ อยากรู้ว่ามันจะจบยังไง
                Concrete คือจับต้องได้ เคลียร์ ทำได้จริง ทำได้ง่าย ทำได้ไว
                Credible คือเชื่อถือได้ มีรายละเอียด มีข้อมูลอ้างอิง ทดสอบมาแล้ว
                Emotional คืออารมณ์ อย่าให้คนต้องคิด ให้เค้ารู้สึกเอาเอง ให้มันสื่อถึงตัวเค้า หรือคนที่เค้าสนใจ
                Stories คือเรื่องราว ที่มันท้าทาย ที่มันมีพัฒนาการ ที่มันสร้างสรรค์

                ลองใช้หลักการทั้ง 6 นี้ น่าจะช่วยให้ไอเดียเราปังและฮิตติดอยู่ในใจคนได้  
            </div>
            <iframe class="flow-gat" src="http://127.0.0.1:8000/test"> </iframe>
            <table class="table table-bordered">
            <thead  >
                <tr style="background:black; color:#F8F8FF">
                    <th scope="col-1">ลำดับ</th>
                    <th scope="col-4">ข้อความที่กำหนด</th>
                    <th scope="col-7"></th>  
                    <th scope="col-7">ร่างรหัสคำตอบ</th>  
                    <th scope="col-7"></th>                                      
                </tr>
            </thead>
            <tbody>
                <tr  style="background:#F5F5F5">
                    <th scope="row">1</th>
                    <td>นะโม</td>                                  
                    <td> <input class="" id="set1-1-1" type="text"></td>
                    <td> <input class="" id="set1-1-2" type="text"></td>
                    <td> <input class="" id="set1-1-3" type="text"></td>                                  
                </tr>
                <tr style="background:#DCDCDC">
                    <th scope="row">2</th>
                    <td>กัปตัน</td>
                    <td> <input class="" id="set1-2-1" type="text"></td>
                    <td> <input class="" id="set1-2-2" type="text"></td>
                    <td> <input class="" id="set1-2-3" type="text"></td>           
                </tr>
                <tr style="background:#F5F5F5">
                    <th scope="row">3</th>
                    <td >วิท</td>      
                    <td> <input class="" id="set1-3-1" type="text"></td>
                    <td> <input class="" id="set1-3-2" type="text"></td>
                    <td> <input class="" id="set1-3-3" type="text"></td>      
                </tr>
            </tbody>
            </table>

            <div class="row">
                <button id="sendSet1" class=" btn-learn">ส่งคำตอบ</button>                                    
            </div>
                  
        </div>
        <div id="set2" class="w3-container city w3-animate-zoom" style="display:none; margin-left:125px; margin-bottom: 500px;">
            <h1>ชุดที่2</h1>  
            <div>
                หนังสือ Made To Stick คนเขียนมีแนวทางให้เราลอง เป็นหลักการ 6 อย่าง เป็นคุณสมบัติของไอเดียที่จะทำให้มันปัง ได้แก่ Simple, Unexpected, Concrete, Credible, Emotional และ Stories ได้ตัวย่อเป็นความสำเร็จ เป็น SUCCES
                Simple คือง่าย ทำยังไงให้เข้าใจง่าย ไม่ต้องเยอะ เอาแค่ที่สำคัญ น้ำไม่ต้อง เอาแต่เนื้อ ไม่ต้องเล่ายาว สรุปมาให้หน่อย
                Unexpected คือไม่คาดคิด ไม่เคยเห็นมาก่อน ไม่คิดว่าแบบนี้ก็ทำได้ เซอร์ไพรส์ทำให้คนสนใจ ความไม่เหมือนใครทำให้คนยิ่งอยากรู้ อยากรู้ว่ามันจะจบยังไง
                Concrete คือจับต้องได้ เคลียร์ ทำได้จริง ทำได้ง่าย ทำได้ไว
                Credible คือเชื่อถือได้ มีรายละเอียด มีข้อมูลอ้างอิง ทดสอบมาแล้ว
                Emotional คืออารมณ์ อย่าให้คนต้องคิด ให้เค้ารู้สึกเอาเอง ให้มันสื่อถึงตัวเค้า หรือคนที่เค้าสนใจ
                Stories คือเรื่องราว ที่มันท้าทาย ที่มันมีพัฒนาการ ที่มันสร้างสรรค์

                ลองใช้หลักการทั้ง 6 นี้ น่าจะช่วยให้ไอเดียเราปังและฮิตติดอยู่ในใจคนได้  
            </div>
            <iframe class="flow-gat" src="http://127.0.0.1:8000/test"> </iframe>
                <table class="table table-bordered">
            <thead  >
                <tr style="background:black; color:#F8F8FF">
                    <th scope="col-1">ลำดับ</th>
                    <th scope="col-4">ข้อความที่กำหนด</th>
                    <th scope="col-7"></th>  
                    <th scope="col-7">ร่างรหัสคำตอบ</th>  
                    <th scope="col-7"></th>                                      
                </tr>
            </thead>
            <tbody>
                <tr  style="background:#F5F5F5">
                    <th scope="row">1</th>
                    <td>นะโม</td>                                  
                    <td> <input class="" id="set2-1-1" type="text"></td>
                    <td> <input class="" id="set2-1-2" type="text"></td>
                    <td> <input class="" id="set2-1-3" type="text"></td>                                  
                </tr>
                <tr style="background:#DCDCDC">
                    <th scope="row">2</th>
                    <td>กัปตัน</td>
                    <td> <input class="" id="set2-2-1" type="text"></td>
                    <td> <input class="" id="set2-2-2" type="text"></td>
                    <td> <input class="" id="set2-2-3" type="text"></td>           
                </tr>
                <tr style="background:#F5F5F5">
                    <th scope="row">3</th>
                    <td >วิท</td>      
                    <td> <input class="" id="set2-3-1" type="text"></td>
                    <td> <input class="" id="set2-3-2" type="text"></td>
                    <td> <input class="" id="set2-3-3" type="text"></td>      
                </tr>
            </tbody>
            </table>
            <div class="row">
                <button id="sendSet2" class=" btn-learn">ส่งคำตอบ</button>                                    
            </div>
        </div> 
        <div id="set3" class="w3-container city w3-animate-zoom" style="display:none; margin-left:125px; margin-bottom: 500px;">
            <h1>ชุดที่3</h1>    
            <div>
                หนังสือ Made To Stick คนเขียนมีแนวทางให้เราลอง เป็นหลักการ 6 อย่าง เป็นคุณสมบัติของไอเดียที่จะทำให้มันปัง ได้แก่ Simple, Unexpected, Concrete, Credible, Emotional และ Stories ได้ตัวย่อเป็นความสำเร็จ เป็น SUCCES
                Simple คือง่าย ทำยังไงให้เข้าใจง่าย ไม่ต้องเยอะ เอาแค่ที่สำคัญ น้ำไม่ต้อง เอาแต่เนื้อ ไม่ต้องเล่ายาว สรุปมาให้หน่อย
                Unexpected คือไม่คาดคิด ไม่เคยเห็นมาก่อน ไม่คิดว่าแบบนี้ก็ทำได้ เซอร์ไพรส์ทำให้คนสนใจ ความไม่เหมือนใครทำให้คนยิ่งอยากรู้ อยากรู้ว่ามันจะจบยังไง
                Concrete คือจับต้องได้ เคลียร์ ทำได้จริง ทำได้ง่าย ทำได้ไว
                Credible คือเชื่อถือได้ มีรายละเอียด มีข้อมูลอ้างอิง ทดสอบมาแล้ว
                Emotional คืออารมณ์ อย่าให้คนต้องคิด ให้เค้ารู้สึกเอาเอง ให้มันสื่อถึงตัวเค้า หรือคนที่เค้าสนใจ
                Stories คือเรื่องราว ที่มันท้าทาย ที่มันมีพัฒนาการ ที่มันสร้างสรรค์

                ลองใช้หลักการทั้ง 6 นี้ น่าจะช่วยให้ไอเดียเราปังและฮิตติดอยู่ในใจคนได้  
            </div>
            <iframe class="flow-gat" src="http://127.0.0.1:8000/test"> </iframe>
                <table class="table table-bordered">
            <thead  >
                <tr style="background:black; color:#F8F8FF">
                    <th scope="col-1">ลำดับ</th>
                    <th scope="col-4">ข้อความที่กำหนด</th>
                    <th scope="col-7"></th>  
                    <th scope="col-7">ร่างรหัสคำตอบ</th>  
                    <th scope="col-7"></th>                                      
                </tr>
            </thead>
            <tbody>
                <tr  style="background:#F5F5F5">
                    <th scope="row">1</th>
                    <td>นะโม</td>                                  
                    <td> <input class="" id="set3-1-1" type="text"></td>
                    <td> <input class="" id="set3-1-2" type="text"></td>
                    <td> <input class="" id="set3-1-3" type="text"></td>                                  
                </tr>
                <tr style="background:#DCDCDC">
                    <th scope="row">2</th>
                    <td>กัปตัน</td>
                    <td> <input class="" id="set3-2-1" type="text"></td>
                    <td> <input class="" id="set3-2-2" type="text"></td>
                    <td> <input class="" id="set3-2-3" type="text"></td>           
                </tr>
                <tr style="background:#F5F5F5">
                    <th scope="row">3</th>
                    <td >วิท</td>      
                    <td> <input class="" id="set3-3-1" type="text"></td>
                    <td> <input class="" id="set3-3-2" type="text"></td>
                    <td> <input class="" id="set3-3-3" type="text"></td>      
                </tr>
            </tbody>
            </table> 
            <div class="row">
                <button id="sendSet3" class=" btn-learn">ส่งคำตอบ</button>                                    
            </div>
        </div> 
        <div id="set4" class="w3-container city w3-animate-zoom" style="display:none; margin-left:125px; margin-bottom: 500px;">
            <h1>ชุดที่4</h1>      
            <div>
                หนังสือ Made To Stick คนเขียนมีแนวทางให้เราลอง เป็นหลักการ 6 อย่าง เป็นคุณสมบัติของไอเดียที่จะทำให้มันปัง ได้แก่ Simple, Unexpected, Concrete, Credible, Emotional และ Stories ได้ตัวย่อเป็นความสำเร็จ เป็น SUCCES
                Simple คือง่าย ทำยังไงให้เข้าใจง่าย ไม่ต้องเยอะ เอาแค่ที่สำคัญ น้ำไม่ต้อง เอาแต่เนื้อ ไม่ต้องเล่ายาว สรุปมาให้หน่อย
                Unexpected คือไม่คาดคิด ไม่เคยเห็นมาก่อน ไม่คิดว่าแบบนี้ก็ทำได้ เซอร์ไพรส์ทำให้คนสนใจ ความไม่เหมือนใครทำให้คนยิ่งอยากรู้ อยากรู้ว่ามันจะจบยังไง
                Concrete คือจับต้องได้ เคลียร์ ทำได้จริง ทำได้ง่าย ทำได้ไว
                Credible คือเชื่อถือได้ มีรายละเอียด มีข้อมูลอ้างอิง ทดสอบมาแล้ว
                Emotional คืออารมณ์ อย่าให้คนต้องคิด ให้เค้ารู้สึกเอาเอง ให้มันสื่อถึงตัวเค้า หรือคนที่เค้าสนใจ
                Stories คือเรื่องราว ที่มันท้าทาย ที่มันมีพัฒนาการ ที่มันสร้างสรรค์

                ลองใช้หลักการทั้ง 6 นี้ น่าจะช่วยให้ไอเดียเราปังและฮิตติดอยู่ในใจคนได้  
            </div>
            <iframe class="flow-gat" src="http://127.0.0.1:8000/test"> </iframe> 
                <table class="table table-bordered">
            <thead  >
                <tr style="background:black; color:#F8F8FF">
                    <th scope="col-1">ลำดับ</th>
                    <th scope="col-4">ข้อความที่กำหนด</th>
                    <th scope="col-7"></th>  
                    <th scope="col-7">ร่างรหัสคำตอบ</th>  
                    <th scope="col-7"></th>                                      
                </tr>
            </thead>
            <tbody>
                <tr  style="background:#F5F5F5">
                    <th scope="row">1</th>
                    <td>นะโม</td>                                  
                    <td> <input class="" id="set4-1-1" type="text"></td>
                    <td> <input class="" id="set4-1-2" type="text"></td>
                    <td> <input class="" id="set4-1-3" type="text"></td>                                  
                </tr>
                <tr style="background:#DCDCDC">
                    <th scope="row">2</th>
                    <td>กัปตัน</td>
                    <td> <input class="" id="set4-2-1" type="text"></td>
                    <td> <input class="" id="set4-2-2" type="text"></td>
                    <td> <input class="" id="set4-2-3" type="text"></td>           
                </tr>
                <tr style="background:#F5F5F5">
                    <th scope="row">3</th>
                    <td >วิท</td>      
                    <td> <input class="" id="set4-3-1" type="text"></td>
                    <td> <input class="" id="set4-3-2" type="text"></td>
                    <td> <input class="" id="set4-3-3" type="text"></td>      
                </tr>
            </tbody>
            </table>
            <div class="row">
                <button id="sendSet4" class=" btn-learn">ส่งคำตอบ</button>                                    
            </div>
        </div> 
        <div id="set5" class="w3-container city w3-animate-zoom" style="display:none; margin-left:125px; margin-bottom: 500px;">
            <h1>ชุดที่5</h1>         
            <div>
                หนังสือ Made To Stick คนเขียนมีแนวทางให้เราลอง เป็นหลักการ 6 อย่าง เป็นคุณสมบัติของไอเดียที่จะทำให้มันปัง ได้แก่ Simple, Unexpected, Concrete, Credible, Emotional และ Stories ได้ตัวย่อเป็นความสำเร็จ เป็น SUCCES
                Simple คือง่าย ทำยังไงให้เข้าใจง่าย ไม่ต้องเยอะ เอาแค่ที่สำคัญ น้ำไม่ต้อง เอาแต่เนื้อ ไม่ต้องเล่ายาว สรุปมาให้หน่อย
                Unexpected คือไม่คาดคิด ไม่เคยเห็นมาก่อน ไม่คิดว่าแบบนี้ก็ทำได้ เซอร์ไพรส์ทำให้คนสนใจ ความไม่เหมือนใครทำให้คนยิ่งอยากรู้ อยากรู้ว่ามันจะจบยังไง
                Concrete คือจับต้องได้ เคลียร์ ทำได้จริง ทำได้ง่าย ทำได้ไว
                Credible คือเชื่อถือได้ มีรายละเอียด มีข้อมูลอ้างอิง ทดสอบมาแล้ว
                Emotional คืออารมณ์ อย่าให้คนต้องคิด ให้เค้ารู้สึกเอาเอง ให้มันสื่อถึงตัวเค้า หรือคนที่เค้าสนใจ
                Stories คือเรื่องราว ที่มันท้าทาย ที่มันมีพัฒนาการ ที่มันสร้างสรรค์

                ลองใช้หลักการทั้ง 6 นี้ น่าจะช่วยให้ไอเดียเราปังและฮิตติดอยู่ในใจคนได้  
            </div>
            <iframe class="flow-gat" src="http://127.0.0.1:8000/test"> </iframe> 
                <table class="table table-bordered">
            <thead  >
                <tr style="background:black; color:#F8F8FF">
                    <th scope="col-1">ลำดับ</th>
                    <th scope="col-4">ข้อความที่กำหนด</th>
                    <th scope="col-7"></th>  
                    <th scope="col-7">ร่างรหัสคำตอบ</th>  
                    <th scope="col-7"></th>                                      
                </tr>
            </thead>
            <tbody>
                <tr  style="background:#F5F5F5">
                    <th scope="row">1</th>
                    <td>นะโม</td>                                  
                    <td> <input class="" id="set5-1-1" type="text"></td>
                    <td> <input class="" id="set5-1-2" type="text"></td>
                    <td> <input class="" id="set5-1-3" type="text"></td>                                  
                </tr>
                <tr style="background:#DCDCDC">
                    <th scope="row">2</th>
                    <td>กัปตัน</td>
                    <td> <input class="" id="set5-2-1" type="text"></td>
                    <td> <input class="" id="set5-2-2" type="text"></td>
                    <td> <input class="" id="set5-2-3" type="text"></td>           
                </tr>
                <tr style="background:#F5F5F5">
                    <th scope="row">3</th>
                    <td >วิท</td>      
                    <td> <input class="" id="set5-3-1" type="text"></td>
                    <td> <input class="" id="set5-3-2" type="text"></td>
                    <td> <input class="" id="set5-3-3" type="text"></td>      
                </tr>
            </tbody>
            </table>
            <div class="row">
                <button id="sendSet5" class=" btn-learn">ส่งคำตอบ</button>                                    
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