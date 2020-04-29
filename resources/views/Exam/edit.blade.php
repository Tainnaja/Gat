@extends('layouts.main')

<!-- Start Featured Slider -->
@section('content')
<!-- <script src="{{ asset('ckeditor/ckeditor.js') }}"></script> -->
<script src="https://cdn.ckeditor.com/4.5.6/standard/ckeditor.js"></script>

        <div class="container" style="margin-top:140px;">
                <div class="row">
                    <div class="col" style="margin-top:-50px;margin-bottom:50px;margin-left:355px;">
                        <h1><b> สร้างแบบทดสอบใหม่</b></h1>
                    </div>
            </div>
        </div>
        
        
        {!! Form::model($exam, ['method' => 'PATCH','action'=>['FulltestController@update', $exam->id],'files' => true]) !!}
        <input name="article1ID" value="{{$article[0]->id}}" type="hidden">
        <input name="article2ID"  value="{{ '' .$article[1]->id}}"type="hidden">    
        <input name="answerdew1ID" value="{{$answers1[0]->id}}" type="hidden">    
        <input name="answerdew2ID" value="{{$answers2[0]->id}}" type="hidden">
        <!-- @csrf -->
    <div style="margin-right:150px ;margin-left:150px;">        
        <div class="form-group">
            {!! Form::label('exam_name', 'ชื่อชุดข้อสอบ : ') !!}
             {!! Form::text('exam_name', null, ['class'=>'form-control','Placeholder'=>"ชื่อชุดข้อสอบ"]) !!}
        </div>
        <!-- <div class="w3-bar w3-black">
            <button class="w3-bar-item w3-button" onclick="openCity('article1')">บทความที่ 1</button>
            <button class="w3-bar-item w3-button" onclick="openCity('article2')">บทความที่ 2</button>
           
        </div> -->

        <!-- <div id="article1" class="w3-container w3-display-container city" >      -->
        <div>
            <h1>ข้อสอบชุดที่ 1</h1>       
            <!-- <h2>article1</h2>     -->
                       
            <!-- @csrf_field -->
           
            <div class="form-group">
            {!! Form::label('article_name[]', 'ชื่อบทความ : ') !!}
            
            <input class="" name="article_name[]" type="text" value="{{$article[0]->article_name}}">
            <!-- {!! Form::text('article_name[]', null, ['class'=>'form-control','Placeholder'=>"ชื่อบทความ"]) !!} -->
            </div>
            <div class="form-group">            
                
                <textarea name="article_detail[]" class="ckeditor"  value="{{$article[0]->article_detail}}">{{$article[0]->article_detail}} </textarea>                    
               
            </div>

            <table class="table table-bordered">
                <thead>
                    <tr style="background:black; color:#F8F8FF;">
                        <th scope="col-1">ลำดับ</th>
                        <th scope="col-2">ข้อความที่กำหนด</th>
                        <th colspan="4">ผลเฉลยรหัสคำตอบ</th>                                                             
                    </tr>
                </thead>
                <tbody>
                    <tr style="background:#F5F5F5">
                        <th scope="row">1</th>
                        <td> <input class="" name="text1_1[]" type="text" value="{{$answers1[0]->text1_1}}"></td>                                  
                        <td> <input class="" name="set1_1_1[]" type="text"value="{{$answers1[0]->set1_1_1}}"></td>
                        <td> <input class="" name="set1_1_2[]" type="text"value="{{$answers1[0]->set1_1_2}}"></td>
                        <td> <input class="" name="set1_1_3[]" type="text"value="{{$answers1[0]->set1_1_3}}"></td>   
                        <td> <input class="" name="set1_1_4[]" type="text"value="{{$answers1[0]->set1_1_4}}"></td>                                 
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">2</th>
                        <td> <input class="" name="text1_2[]" type="text" value="{{$answers1[0]->text1_2}}"></td>
                        <td> <input class="" name="set1_2_1[]" type="text"value="{{$answers1[0]->set1_2_1}}"></td>
                        <td> <input class="" name="set1_2_2[]" type="text"value="{{$answers1[0]->set1_2_2}}"></td>
                        <td> <input class="" name="set1_2_3[]" type="text"value="{{$answers1[0]->set1_2_3}}"></td>  
                        <td> <input class="" name="set1_2_4[]" type="text"value="{{$answers1[0]->set1_2_4}}"></td>           
                    </tr>
                    <tr style="background:#F5F5F5">
                        <th scope="row">3</th>
                        <td> <input class="" name="text1_3[]" type="text"value="{{$answers1[0]->text1_3}}"></td>     
                        <td> <input class="" name="set1_3_1[]" type="text"value="{{$answers1[0]->set1_3_1}}"></td>
                        <td> <input class="" name="set1_3_2[]" type="text"value="{{$answers1[0]->set1_3_2}}"></td>
                        <td> <input class="" name="set1_3_3[]" type="text"value="{{$answers1[0]->set1_3_3}}"></td>   
                        <td> <input class="" name="set1_3_4[]" type="text"value="{{$answers1[0]->set1_3_4}}"></td>     
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">4</th>
                        <td> <input class="" name="text1_4[]" type="text"value="{{$answers1[0]->text1_4}}"></td>   
                        <td> <input class="" name="set1_4_1[]" type="text"value="{{$answers1[0]->set1_4_1}}"></td>
                        <td> <input class="" name="set1_4_2[]" type="text"value="{{$answers1[0]->set1_4_2}}"></td>
                        <td> <input class="" name="set1_4_3[]" type="text"value="{{$answers1[0]->set1_4_3}}"></td>   
                        <td> <input class="" name="set1_4_4[]" type="text"value="{{$answers1[0]->set1_4_4}}"></td>     
                    </tr>
                    <tr style="background:#F5F5F5">
                        <th scope="row">5</th>
                        <td> <input class="" name="text1_5[]" type="text" value="{{$answers1[0]->text1_5}}"></td>   
                        <td> <input class="" name="set1_5_1[]" type="text"value="{{$answers1[0]->set1_5_1}}"></td>
                        <td> <input class="" name="set1_5_2[]" type="text"value="{{$answers1[0]->set1_5_2}}"></td>
                        <td> <input class="" name="set1_5_3[]" type="text"value="{{$answers1[0]->set1_5_3}}"></td>   
                        <td> <input class="" name="set1_5_4[]" type="text"value="{{$answers1[0]->set1_5_4}}"></td>     
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">6</th>
                        <td> <input class="" name="text1_6[]" type="text"value="{{$answers1[0]->text1_6}}"></td>  
                        <td> <input class="" name="set1_6_1[]" type="text"value="{{$answers1[0]->set1_6_1}}"></td>
                        <td> <input class="" name="set1_6_2[]" type="text"value="{{$answers1[0]->set1_6_2}}"></td>
                        <td> <input class="" name="set1_6_3[]" type="text"value="{{$answers1[0]->set1_6_3}}"></td>   
                        <td> <input class="" name="set1_6_4[]" type="text"value="{{$answers1[0]->set1_6_4}}"></td>     
                    </tr>
                    <tr style="background:#F5F5F5">
                        <th scope="row">7</th>
                        <td> <input class="" name="text1_7[]" type="text" value="{{$answers1[0]->text1_7}}"></td>   
                        <td> <input class="" name="set1_7_1[]" type="text"value="{{$answers1[0]->set1_7_1}}"></td>
                        <td> <input class="" name="set1_7_2[]" type="text"value="{{$answers1[0]->set1_7_2}}"></td>
                        <td> <input class="" name="set1_7_3[]" type="text"value="{{$answers1[0]->set1_7_3}}"></td>   
                        <td> <input class="" name="set1_7_4[]" type="text"value="{{$answers1[0]->set1_7_4}}"></td>     
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">8</th>
                        <td> <input class="" name="text1_8[]" type="text" value="{{$answers1[0]->text1_8}}"></td>   
                        <td> <input class="" name="set1_8_1[]" type="text"value="{{$answers1[0]->set1_8_1}}"></td>
                        <td> <input class="" name="set1_8_2[]" type="text"value="{{$answers1[0]->set1_8_2}}"></td>
                        <td> <input class="" name="set1_8_3[]" type="text"value="{{$answers1[0]->set1_8_3}}"></td>   
                        <td> <input class="" name="set1_8_4[]" type="text"value="{{$answers1[0]->set1_8_4}}"></td>     
                    </tr>
                    <tr style="background:#F5F5F5">
                        <th scope="row">9</th>
                        <td> <input class="" name="text1_9[]" type="text" value="{{$answers1[0]->text1_9}}"></td>   
                        <td> <input class="" name="set1_9_1[]" type="text"value="{{$answers1[0]->set1_9_1}}"></td>
                        <td> <input class="" name="set1_9_2[]" type="text"value="{{$answers1[0]->set1_9_2}}"></td>
                        <td> <input class="" name="set1_9_3[]" type="text"value="{{$answers1[0]->set1_9_3}}"></td>   
                        <td> <input class="" name="set1_9_4[]" type="text"value="{{$answers1[0]->set1_9_4}}"></td>     
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">10</th>
                        <td> <input class="" name="text1_10[]" type="text" value="{{$answers1[0]->text1_10}}"></td>   
                        <td> <input class="" name="set1_10_1[]" type="text"value="{{$answers1[0]->set1_10_1}}"></td>
                        <td> <input class="" name="set1_10_2[]" type="text"value="{{$answers1[0]->set1_10_2}}"></td>
                        <td> <input class="" name="set1_10_3[]" type="text"value="{{$answers1[0]->set1_10_3}}"></td>   
                        <td> <input class="" name="set1_10_4[]" type="text"value="{{$answers1[0]->set1_10_4}}"></td>     
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
               
            </div>

            <!-- {!! Form::close() !!} -->
        </div>

        <br/>
        <div>
        <h1>ข้อสอบชุดที่ 2</h1>               
            <!-- {!! Form::open(['url' => '#','method' => 'POST','files' => true]) !!}                 -->

                <div class="form-group">
                {!! Form::label(' article_name[]', 'ชื่อบทความ : ') !!}
                <input class="" name="article_name[]" type="text" value="{{$article[1]->article_name}}">
                </div>
                <div class="form-group">                
                    
                    <textarea name="article_detail[]" class="ckeditor"  value="">{{$article[1]->article_detail}} </textarea> 
                                      
                    
                </div>
                <table class="table table-bordered">
                <thead>
                    <tr style="background:black; color:#F8F8FF;">
                        <th scope="col-1">ลำดับ</th>
                        <th scope="col-2">ข้อความที่กำหนด</th>
                        <th colspan="4">ผลเฉลยรหัสคำตอบ</th>                                                             
                    </tr>
                </thead>
                <tbody>
                    <tr style="background:#F5F5F5">
                        <th scope="row">1</th>
                        <td> <input class="" name="text1_1[]" type="text" value="{{$answers2[0]->text1_1}}"></td>                                  
                        <td> <input class="" name="set1_1_1[]" type="text"value="{{$answers2[0]->set1_1_1}}"></td>
                        <td> <input class="" name="set1_1_2[]" type="text"value="{{$answers2[0]->set1_1_2}}"></td>
                        <td> <input class="" name="set1_1_3[]" type="text"value="{{$answers2[0]->set1_1_3}}"></td>   
                        <td> <input class="" name="set1_1_4[]" type="text"value="{{$answers2[0]->set1_1_4}}"></td>                                 
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">2</th>
                        <td> <input class="" name="text1_2[]" type="text" value="{{$answers2[0]->text1_2}}"></td>
                        <td> <input class="" name="set1_2_1[]" type="text"value="{{$answers2[0]->set1_2_1}}"></td>
                        <td> <input class="" name="set1_2_2[]" type="text"value="{{$answers2[0]->set1_2_2}}"></td>
                        <td> <input class="" name="set1_2_3[]" type="text"value="{{$answers2[0]->set1_2_3}}"></td>  
                        <td> <input class="" name="set1_2_4[]" type="text"value="{{$answers2[0]->set1_2_4}}"></td>           
                    </tr>
                    <tr style="background:#F5F5F5">
                        <th scope="row">3</th>
                        <td> <input class="" name="text1_3[]"  type="text"value="{{$answers2[0]->text1_3}}"></td>     
                        <td> <input class="" name="set1_3_1[]" type="text"value="{{$answers2[0]->set1_3_1}}"></td>
                        <td> <input class="" name="set1_3_2[]" type="text"value="{{$answers2[0]->set1_3_2}}"></td>
                        <td> <input class="" name="set1_3_3[]" type="text"value="{{$answers2[0]->set1_3_3}}"></td>   
                        <td> <input class="" name="set1_3_4[]" type="text"value="{{$answers2[0]->set1_3_4}}"></td>     
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">4</th>
                        <td> <input class="" name="text1_4[]"  type="text"value="{{$answers2[0]->text1_4}}"></td>   
                        <td> <input class="" name="set1_4_1[]" type="text"value="{{$answers2[0]->set1_4_1}}"></td>
                        <td> <input class="" name="set1_4_2[]" type="text"value="{{$answers2[0]->set1_4_2}}"></td>
                        <td> <input class="" name="set1_4_3[]" type="text"value="{{$answers2[0]->set1_4_3}}"></td>   
                        <td> <input class="" name="set1_4_4[]" type="text"value="{{$answers2[0]->set1_4_4}}"></td>     
                    </tr>
                    <tr style="background:#F5F5F5">
                        <th scope="row">5</th>
                        <td> <input class="" name="text1_5[]" type="text" value="{{$answers2[0]->text1_5}}"></td>   
                        <td> <input class="" name="set1_5_1[]" type="text"value="{{$answers2[0]->set1_5_1}}"></td>
                        <td> <input class="" name="set1_5_2[]" type="text"value="{{$answers2[0]->set1_5_2}}"></td>
                        <td> <input class="" name="set1_5_3[]" type="text"value="{{$answers2[0]->set1_5_3}}"></td>   
                        <td> <input class="" name="set1_5_4[]" type="text"value="{{$answers2[0]->set1_5_4}}"></td>     
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">6</th>
                        <td> <input class="" name="text1_6[]"  type="text"value="{{$answers2[0]->text1_6}}"></td>  
                        <td> <input class="" name="set1_6_1[]" type="text"value="{{$answers2[0]->set1_6_1}}"></td>
                        <td> <input class="" name="set1_6_2[]" type="text"value="{{$answers2[0]->set1_6_2}}"></td>
                        <td> <input class="" name="set1_6_3[]" type="text"value="{{$answers2[0]->set1_6_3}}"></td>   
                        <td> <input class="" name="set1_6_4[]" type="text"value="{{$answers2[0]->set1_6_4}}"></td>     
                    </tr>
                    <tr style="background:#F5F5F5">
                        <th scope="row">7</th>
                        <td> <input class="" name="text1_7[]" type="text" value="{{$answers2[0]->text1_7}}"></td>   
                        <td> <input class="" name="set1_7_1[]" type="text"value="{{$answers2[0]->set1_7_1}}"></td>
                        <td> <input class="" name="set1_7_2[]" type="text"value="{{$answers2[0]->set1_7_2}}"></td>
                        <td> <input class="" name="set1_7_3[]" type="text"value="{{$answers2[0]->set1_7_3}}"></td>   
                        <td> <input class="" name="set1_7_4[]" type="text"value="{{$answers2[0]->set1_7_4}}"></td>     
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">8</th>
                        <td> <input class="" name="text1_8[]" type="text" value="{{$answers2[0]->text1_8}}"></td>   
                        <td> <input class="" name="set1_8_1[]" type="text"value="{{$answers2[0]->set1_8_1}}"></td>
                        <td> <input class="" name="set1_8_2[]" type="text"value="{{$answers2[0]->set1_8_2}}"></td>
                        <td> <input class="" name="set1_8_3[]" type="text"value="{{$answers2[0]->set1_8_3}}"></td>   
                        <td> <input class="" name="set1_8_4[]" type="text"value="{{$answers2[0]->set1_8_4}}"></td>     
                    </tr>
                    <tr style="background:#F5F5F5">
                        <th scope="row">9</th>
                        <td> <input class="" name="text1_9[]" type="text" value="{{$answers2[0]->text1_9}}"></td>   
                        <td> <input class="" name="set1_9_1[]" type="text"value="{{$answers2[0]->set1_9_1}}"></td>
                        <td> <input class="" name="set1_9_2[]" type="text"value="{{$answers2[0]->set1_9_2}}"></td>
                        <td> <input class="" name="set1_9_3[]" type="text"value="{{$answers2[0]->set1_9_3}}"></td>   
                        <td> <input class="" name="set1_9_4[]" type="text"value="{{$answers2[0]->set1_9_4}}"></td>     
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">10</th>
                        <td> <input class="" name="text1_10[]" type="text" value="{{$answers2[0]->text1_10}}"></td>   
                        <td> <input class="" name="set1_10_1[]" type="text"value="{{$answers2[0]->set1_10_1}}"></td>
                        <td> <input class="" name="set1_10_2[]" type="text"value="{{$answers2[0]->set1_10_2}}"></td>
                        <td> <input class="" name="set1_10_3[]" type="text"value="{{$answers2[0]->set1_10_3}}"></td>   
                        <td> <input class="" name="set1_10_4[]" type="text"value="{{$answers2[0]->set1_10_4}}"></td>     
                    </tr>
                </tbody>
            </table>
                <div class="form-group">
                    <!-- {!! Form::submit("สร้างชุดข้อสอบ", ['class'=>'btn form-control']) !!} -->
                </div>
                      
        </div>
    </div>


    {!! Form::submit("แก้ไขชุดข้อสอบ", ['class'=>'btn form-control']) !!}
    {!! Form::close() !!} 
@endsection

	<!-- End main content -->	

    <script>
        function openCity(cityName) {
        var i;
        var x = document.getElementsByClassName("city");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
        document.getElementById(cityName).style.display = "block";  
        }
    </script>
    
    <script type="text/javascript">
   var editor = CKEDITOR.replace(jQuery('.ckeditor'));
  
</script>
