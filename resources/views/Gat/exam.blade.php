@extends('layouts.main')

@section('content')
    <!-- <div type="hidden">  {{$i = 0   }} </div>
    <div  hidden> {{ @$i += 1 }} </div> -->
    
        <div style="margin-top:90px"></div>           
        

         <div class="w3-sidebar w3-bar-block w3-black w3-card" style="width:130px ">           
            <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'set1')">บทความที่ 1</button>
            <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'set2')">บทความที่ 2</button>           
            <button class="w3-bar-item w3-button tablink" onclick="location.href='{{ url('/learn') }}'"> <span class="glyphicon  glyphicon glyphicon-arrow-left " aria-hidden="true"></span>   ย้อนกลับ</button>
        </div>  
             
        <center><h1 style="margin-left: 300px; margin-top: 100px; margin-bottom: 30px"><b> {{ 'ข้อสอบ:' .$exam->exam_name }} </b></h1></center>
             

        <div id="set1" class="w3-container city w3-animate-zoom" style="display:block; margin-left:250px; margin-right:150px; margin-bottom: 500px">
            <h3>บทความที่ 1 {{ '' .$articles[0]->article_name }}</h3>   
            <div>                 
                 {!! '' .$articles[0]->article_detail !!}
            </div>
            <iframe class="flow-gat" src="http://127.0.0.1:8000/test"> </iframe>
             {!! Form::open(['url' => 'sendAnswer','method' => 'POST','files' => true]) !!} 
             <input name="examID" value="{{ '' .$exam->id}}" type="hidden">
             @if($errors->any())
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr style="background:black; color:#F8F8FF;">
                        <th scope="col-1">ลำดับ</th>
                        <th scope="col-2">ข้อความที่กำหนด</th>
                        <th colspan="4">กรอกรหัสคำตอบ</th>                                                             
                    </tr>
                </thead>
                <tbody>
                    <tr style="background:#F5F5F5">
                        <th scope="row">1</th>
                        <td> {{ '' .$answers1[0]->text1_1 }}</td>                                  
                        <td> <input class="" name="set1_1_1[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_1_1.0')}}" type="text"></td>
                        <td> <input class="" name="set1_1_2[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_1_2.0')}}" type="text"></td>
                        <td> <input class="" name="set1_1_3[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_1_3.0')}}" type="text"></td>   
                        <td> <input class="" name="set1_1_4[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_1_4.0')}}" type="text"></td>                                                       
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">2</th>
                        <td> {{ '' .$answers1[0]->text1_2 }}</td>
                        <td> <input class="" name="set1_2_1[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_2_1.0')}}" type="text"></td>
                        <td> <input class="" name="set1_2_2[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_2_2.0')}}" type="text"></td>
                        <td> <input class="" name="set1_2_3[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_2_3.0')}}" type="text"></td>  
                        <td> <input class="" name="set1_2_4[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_2_4.0')}}" type="text"></td>           
                    </tr>
                    <tr style="background:#F5F5F5">
                        <th scope="row">3</th>
                        <td> {{ '' .$answers1[0]->text1_3 }}</td>    
                        <td> <input class="" name="set1_3_1[]" onkeyup="this.value = this.value.toUpperCase(); "value="{{old('set1_3_1.0')}}" type="text"></td>
                        <td> <input class="" name="set1_3_2[]" onkeyup="this.value = this.value.toUpperCase(); "value="{{old('set1_3_2.0')}}" type="text"></td>
                        <td> <input class="" name="set1_3_3[]" onkeyup="this.value = this.value.toUpperCase(); "value="{{old('set1_3_3.0')}}" type="text"></td>   
                        <td> <input class="" name="set1_3_4[]" onkeyup="this.value = this.value.toUpperCase(); "value="{{old('set1_3_4.0')}}" type="text"></td>     
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">4</th>
                        <td> {{ '' .$answers1[0]->text1_4 }}</td> 
                        <td> <input class="" name="set1_4_1[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_4_1.0')}}" type="text"></td>
                        <td> <input class="" name="set1_4_2[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_4_2.0')}}" type="text"></td>
                        <td> <input class="" name="set1_4_3[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_4_3.0')}}" type="text"></td>   
                        <td> <input class="" name="set1_4_4[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_4_4.0')}}" type="text"></td>     
                    </tr>
                    <tr style="background:#F5F5F5">
                        <th scope="row">5</th>
                        <td> {{ '' .$answers1[0]->text1_5 }}</td>   
                        <td> <input class="" name="set1_5_1[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_5_1.0')}}" type="text"></td>
                        <td> <input class="" name="set1_5_2[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_5_2.0')}}" type="text"></td>
                        <td> <input class="" name="set1_5_3[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_5_3.0')}}" type="text"></td>   
                        <td> <input class="" name="set1_5_4[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_5_4.0')}}" type="text"></td>     
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">6</th>
                        <td> {{ '' .$answers1[0]->text1_6 }}</td> 
                        <td> <input class="" name="set1_6_1[]" onkeyup="this.value = this.value.toUpperCase(); "value="{{old('set1_6_1.0')}}" type="text"></td>
                        <td> <input class="" name="set1_6_2[]" onkeyup="this.value = this.value.toUpperCase(); "value="{{old('set1_6_2.0')}}" type="text"></td>
                        <td> <input class="" name="set1_6_3[]" onkeyup="this.value = this.value.toUpperCase(); "value="{{old('set1_6_3.0')}}" type="text"></td>   
                        <td> <input class="" name="set1_6_4[]" onkeyup="this.value = this.value.toUpperCase(); "value="{{old('set1_6_4.0')}}" type="text"></td>     
                    </tr>
                    <tr style="background:#F5F5F5">
                        <th scope="row">7</th>
                        <td> {{ '' .$answers1[0]->text1_7 }}</td>
                        <td> <input class="" name="set1_7_1[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_7_1.0')}}" type="text"></td>
                        <td> <input class="" name="set1_7_2[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_7_2.0')}}" type="text"></td>
                        <td> <input class="" name="set1_7_3[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_7_3.0')}}" type="text"></td>   
                        <td> <input class="" name="set1_7_4[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_7_4.0')}}" type="text"></td>     
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">8</th>
                        <td> {{ '' .$answers1[0]->text1_8 }}</td> 
                        <td> <input class="" name="set1_8_1[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_8_1.0')}}" type="text"></td>
                        <td> <input class="" name="set1_8_2[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_8_2.0')}}" type="text"></td>
                        <td> <input class="" name="set1_8_3[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_8_3.0')}}" type="text"></td>   
                        <td> <input class="" name="set1_8_4[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_8_4.0')}}" type="text"></td>     
                    </tr>
                    <tr style="background:#F5F5F5">
                        <th scope="row">9</th>
                        <td> {{ '' .$answers1[0]->text1_9 }}</td>  
                        <td> <input class="" name="set1_9_1[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_9_1.0')}}" type="text"></td>
                        <td> <input class="" name="set1_9_2[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_9_2.0')}}" type="text"></td>
                        <td> <input class="" name="set1_9_3[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_9_3.0')}}" type="text"></td>   
                        <td> <input class="" name="set1_9_4[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_9_4.0')}}" type="text"></td>     
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">10</th>
                        <td> {{ '' .$answers1[0]->text1_10 }}</td>  
                        <td> <input class="" name="set1_10_1[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_10_1.0')}}" type="text"></td>
                        <td> <input class="" name="set1_10_2[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_10_2.0')}}" type="text"></td>
                        <td> <input class="" name="set1_10_3[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_10_3.0')}}" type="text"></td>   
                        <td> <input class="" name="set1_10_4[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_10_4.0')}}" type="text"></td>     
                    </tr>
                </tbody>
            </table>

           
                  
        </div>       
            
      

        <div id="set2" class="w3-container city w3-animate-zoom" style="display:block; margin-left:250px; margin-right:150px; margin-bottom: 500px">
            <h3>บทความที่ 2 {{ '' .$articles[1]->article_name }}</h3>   
            <div>                 
                 {!! '' .$articles[1]->article_detail !!}
            </div>
            <iframe class="flow-gat" src="http://127.0.0.1:8000/test"> </iframe>
                <table class="table table-bordered">
                <thead>
                    <tr style="background:black; color:#F8F8FF;">
                        <th scope="col-1">ลำดับ</th>
                        <th scope="col-2">ข้อความที่กำหนด</th>
                        <th colspan="4">กรอกรหัสคำตอบ</th>                                                             
                    </tr>
                </thead>
                <tbody>
                    <tr style="background:#F5F5F5">
                        <th scope="row">11</th>
                        <td> {{ '' .$answers2[0]->text1_1 }}</td>                                  
                        <td> <input class="" name="set1_1_1[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_1_1.1')}}" type="text"></td>
                        <td> <input class="" name="set1_1_2[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_1_2.1')}}" type="text"></td>
                        <td> <input class="" name="set1_1_3[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_1_3.1')}}" type="text"></td>   
                        <td> <input class="" name="set1_1_4[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_1_4.1')}}" type="text"></td>                                 
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">12</th>
                        <td> {{ '' .$answers2[0]->text1_2 }}</td>
                        <td> <input class="" name="set1_2_1[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_2_1.1')}}" type="text"></td>
                        <td> <input class="" name="set1_2_2[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_2_2.1')}}" type="text"></td>
                        <td> <input class="" name="set1_2_3[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_2_3.1')}}" type="text"></td>  
                        <td> <input class="" name="set1_2_4[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_2_4.1')}}" type="text"></td>           
                    </tr>
                    <tr style="background:#F5F5F5">
                        <th scope="row">13</th>
                        <td> {{ '' .$answers2[0]->text1_3 }}</td>    
                        <td> <input class="" name="set1_3_1[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_3_1.1')}}" type="text"></td>
                        <td> <input class="" name="set1_3_2[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_3_2.1')}}" type="text"></td>
                        <td> <input class="" name="set1_3_3[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_3_3.1')}}" type="text"></td>   
                        <td> <input class="" name="set1_3_4[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_3_4.1')}}" type="text"></td>     
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">14</th>
                        <td> {{ '' .$answers2[0]->text1_4 }}</td> 
                        <td> <input class="" name="set1_4_1[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_4_1.1')}}" type="text"></td>
                        <td> <input class="" name="set1_4_2[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_4_2.1')}}" type="text"></td>
                        <td> <input class="" name="set1_4_3[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_4_3.1')}}" type="text"></td>   
                        <td> <input class="" name="set1_4_4[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_4_4.1')}}" type="text"></td>     
                    </tr>
                    <tr style="background:#F5F5F5">
                        <th scope="row">15</th>
                        <td> {{ '' .$answers2[0]->text1_5 }}</td>   
                        <td> <input class="" name="set1_5_1[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_5_1.1')}}" type="text"></td>
                        <td> <input class="" name="set1_5_2[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_5_2.1')}}" type="text"></td>
                        <td> <input class="" name="set1_5_3[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_5_3.1')}}" type="text"></td>   
                        <td> <input class="" name="set1_5_4[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_5_4.1')}}" type="text"></td>     
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">16</th>
                        <td> {{ '' .$answers2[0]->text1_6 }}</td> 
                        <td> <input class="" name="set1_6_1[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_6_1.1')}}" type="text"></td>
                        <td> <input class="" name="set1_6_2[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_6_2.1')}}" type="text"></td>
                        <td> <input class="" name="set1_6_3[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_6_3.1')}}" type="text"></td>   
                        <td> <input class="" name="set1_6_4[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_6_4.1')}}" type="text"></td>     
                    </tr>
                    <tr style="background:#F5F5F5">
                        <th scope="row">17</th>
                        <td> {{ '' .$answers2[0]->text1_7 }}</td>
                        <td> <input class="" name="set1_7_1[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_7_1.1')}}" type="text"></td>
                        <td> <input class="" name="set1_7_2[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_7_2.1')}}" type="text"></td>
                        <td> <input class="" name="set1_7_3[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_7_3.1')}}" type="text"></td>   
                        <td> <input class="" name="set1_7_4[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_7_4.1')}}" type="text"></td>     
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">18</th>
                        <td> {{ '' .$answers2[0]->text1_8 }}</td> 
                        <td> <input class="" name="set1_8_1[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_8_1.1')}}" type="text"></td>
                        <td> <input class="" name="set1_8_2[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_8_2.1')}}" type="text"></td>
                        <td> <input class="" name="set1_8_3[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_8_3.1')}}" type="text"></td>   
                        <td> <input class="" name="set1_8_4[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_8_4.1')}}" type="text"></td>     
                    </tr>
                    <tr style="background:#F5F5F5">
                        <th scope="row">19</th>
                        <td> {{ '' .$answers2[0]->text1_9 }}</td>  
                        <td> <input class="" name="set1_9_1[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_9_1.1')}}" type="text"></td>
                        <td> <input class="" name="set1_9_2[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_9_2.1')}}" type="text"></td>
                        <td> <input class="" name="set1_9_3[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_9_3.1')}}" type="text"></td>   
                        <td> <input class="" name="set1_9_4[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_9_4.1')}}" type="text"></td>     
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">20</th>
                        <td> {{ '' .$answers2[0]->text1_10 }}</td>  
                        <td> <input class="" name="set1_10_1[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_10_1.1')}}" type="text"></td>
                        <td> <input class="" name="set1_10_2[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_10_2.1')}}" type="text"></td>
                        <td> <input class="" name="set1_10_3[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_10_3.1')}}" type="text"></td>   
                        <td> <input class="" name="set1_10_4[]" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_10_4.1')}}" type="text"></td>     
                    </tr>
                </tbody>
            </table>
            

         
        </div>
       
            <div class="row" style="margin-top:-500px; margin-left: 160px">
                <center><button id="sendSet2" class=" btn-learn">ส่งคำตอบ</button></center>                                    
            </div>
            {!! Form::close() !!}
            

         <div style="margin-bottom:200px"></div>
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