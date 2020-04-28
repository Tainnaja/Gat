@extends('layouts.main')

<!-- Start Featured Slider -->
@section('content')
<div style="margin-top:90px ; " >
        <div class="w3-sidebar w3-bar-block w3-black w3-card" style="width:130px">           
            <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'set1')">วิเคราะห์ความสามารถ</button>
            <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'set2')">ประวัติทำข้อสอบ</button>           
            <button class="w3-bar-item w3-button tablink" onclick="location.href='{{ url('/') }}'"> <span class="glyphicon  glyphicon glyphicon-arrow-left " aria-hidden="true"></span>   ย้อนกลับ</button>
        </div>       

        <div id="set1" class="w3-container city w3-animate-zoom" style="display:none; margin-left:125px; margin-bottom: 500px;display:block">
        

        
                        <div class="mu-counter-block" style="margin-top:90px ">
								<div class="row">

									<!-- Start Single Counter -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-single-counter">
											<!-- <i class="fa fa-files-o" aria-hidden="true"></i> -->
											<div class="counter-value" data-count="05">{{$skill->skill_A .'%' ?? '0'}}</div>
											<h5 class="mu-counter-name">อัตราความถูกต้องของความสัมพันธ์แบบก่อให้เกิด</h5>
										</div>
									</div>
									<!-- / Single Counter -->

									<!-- Start Single Counter -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-single-counter">
											<!-- <i class="fa fa-file-text-o" aria-hidden="true"></i> -->
											<div class="counter-value" data-count="42">{{$skill->skill_D .'%' ?? '0'}}</div>
											<h5 class="mu-counter-name">อัตราความถูกต้องของความสัมพันธ์แบบยับยั้ง</h5>
										</div>
									</div>
									<!-- / Single Counter -->

									<!-- Start Single Counter -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-single-counter">
											<!-- <i class="fa fa-users" aria-hidden="true"></i> -->
											<div class="counter-value" data-count="1055">{{$skill->skill_F .'%' ?? '0'}}</div>
											<h5 class="mu-counter-name">อัตราความถูกต้องของความสัมพันธ์แบบองค์ประกอบ</h5>
										</div>
									</div>
									<!-- / Single Counter -->

									<!-- Start Single Counter -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-single-counter">
											<!-- <i class="fa fa-trophy" aria-hidden="true"></i> -->
											<div class="counter-value" data-count="428">{{$skill->skill_99H .'%' ?? '0'}}</div>
											<h5 class="mu-counter-name">อัตราความถูกต้องของความสัมพันธ์แบบ 99H</h5>
										</div>
									</div>
									<!-- / Single Counter -->

                                    

								</div>
							</div>
            

                        <div style="margin-top:-400px;margin-left:0px;margin-bottom:200px;"> 
                            <!-- <div class="col-md-6 col-sm-12"> -->
                                <div class="mu-single-counter">                                    
                                    <div class="counter-value" data-count="1055" style="margin-left:0px;">{{$skill->total_skill .'%'}}</div>
                                    <h3>อัตราความถูกต้องทั้งหมด</h3>
                                </div>

                                <div class="mu-single-counter" style="text-align:left">                                
                                    
                                    <h1><b>คำแนะนำ*</b></h1>
                                    
                                    @if($skill->skill_A >= 95) 
                                        <h3>คุณมีความเข้าใจความสัมพันธ์แบบ A ดีเยี่ยม</h3>
                                    @elseif($skill->skill_A >= 75) 
                                        <h3>คุณมีความเข้าใจความสัมพันธ์แบบ A ในเกณฑ์ดี</h3>
                                    @else   
                                        <h3>-คุณยังมีความเข้าใจความสัมพันธ์แบบ A ไม่ดีนัก ลองกลับไปทำข้อสอบ</h3>
                                        <h5>
                                        @foreach($fulltests as $fulltest)
                                        
                                            @if($fulltest->emphasize == 'A') 
                                                {{$fulltest->exam_name.', '}}
                                            @endif 
                                        @endforeach
                                        <h5>                                       
                                    @endif 

                                    @if($skill->skill_D >= 95) 
                                        <h3>คุณมีความเข้าใจความสัมพันธ์แบบ D ดีเยี่ยม</h3>
                                    @elseif($skill->skill_D >= 75) 
                                        <h3>คุณมีความเข้าใจความสัมพันธ์แบบ D ในเกณฑ์ดี</h3>
                                    @else   
                                        <h3>-คุณยังมีความเข้าใจความสัมพันธ์แบบ D ไม่ดีนัก ลองกลับไปทำข้อสอบ</h3>
                                        <h5>
                                        @foreach($fulltests as $fulltest)
                                        
                                            @if($fulltest->emphasize == 'D') 
                                                {{$fulltest->exam_name.', '}}
                                            @endif 
                                        @endforeach
                                        <h5>                                       
                                    @endif

                                    @if($skill->skill_F >= 95) 
                                        <h3>คุณมีความเข้าใจความสัมพันธ์แบบ F ดีเยี่ยม</h3>
                                    @elseif($skill->skill_A >= 75) 
                                        <h3>คุณมีความเข้าใจความสัมพันธ์แบบ F ในเกณฑ์ดี</h3>
                                    @else   
                                        <h3>-คุณยังมีความเข้าใจความสัมพันธ์แบบ F ไม่ดีนัก ลองกลับไปทำข้อสอบ</h3>
                                        <h5>
                                        @foreach($fulltests as $fulltest)
                                        
                                            @if($fulltest->emphasize == 'F') 
                                                {{$fulltest->exam_name.', '}}
                                            @endif 
                                        @endforeach
                                        <h5>                                       
                                    @endif 

                                    @if($skill->skill_99H >= 95) 
                                        <h3>คุณมีความเข้าใจความสัมพันธ์แบบ 99H ดีเยี่ยม</h3>
                                    @elseif($skill->skill_99H >= 75) 
                                        <h3>คุณมีความเข้าใจความสัมพันธ์แบบ 99H ในเกณฑ์ดี</h3>
                                    @else   
                                        <h3>-คุณยังมีความเข้าใจความสัมพันธ์แบบ 99H ไม่ดีนัก</h3>
                                                                           
                                    @endif  
                                        
                                            
                                </div>
                                
                        </div>

                          
                

        </div>
        <div id="set2" class="w3-container city w3-animate-zoom" style="display:none; margin-left:125px; margin-bottom: 500px;">
            <table class="table table-bordered">
                    <thead>
                        <tr style="background:black; color:#F8F8FF;">
                            <th scope="col-2">ข้อสอบ</th>
                            <th scope="col-2">คะแนนบทความที่ 1</th>
                            <th scope="col-2">คะแนนบทความที่ 2</th>    
                            <th scope="col-2">รวม</th>     
                            <th scope="col-2">วันที่ทำ</th>                                                         
                        </tr>
                    </thead>
                    <tbody>    
                         @foreach($histories as $history)                                            
                         <tr style="background:#F5F5F5">
                            <th scope="row">{{ '' .$history->exam_id }}</th> 
                            <td> {{ '' .$history->score_1 }}</td>    
                            <td> {{ '' .$history->score_2 }}</td>  
                            <td> {{ '' .$history->total_score }}</td>  
                            <td> {{ '' .$history->created_at }}</td>  
                        </tr>
                        @endforeach
                    </tbody>
            </table>
        </div>
@endsection

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