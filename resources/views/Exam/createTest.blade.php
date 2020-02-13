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
        
        {!! Form::open(['url' => 'saveArticle','method' => 'POST','files' => true]) !!} 
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
            {!! Form::label(' article_name[]', 'ชื่อบทความ : ') !!}
             {!! Form::text('article_name[]', null, ['class'=>'form-control','Placeholder'=>"ชื่อบทความ"]) !!}
            </div>
            <div class="form-group">            
                
                <textarea name="article_detail[]" class="ckeditor" ></textarea>                    
                </textarea>
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
                        <td> <input class="" name="text1-1[]" type="text"></td>                                  
                        <td> <input class="" name="set1-1-1[]" type="text"></td>
                        <td> <input class="" name="set1-1-2[]" type="text"></td>
                        <td> <input class="" name="set1-1-3[]" type="text"></td>   
                        <td> <input class="" name="set1-1-4[]" type="text"></td>                                 
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">2</th>
                        <td> <input class="" name="text1-2[]" type="text"></td>
                        <td> <input class="" name="set1-2-1[]" type="text"></td>
                        <td> <input class="" name="set1-2-2[]" type="text"></td>
                        <td> <input class="" name="set1-2-3[]" type="text"></td>  
                        <td> <input class="" name="set1-2-4[]" type="text"></td>           
                    </tr>
                    <tr style="background:#F5F5F5">
                        <th scope="row">3</th>
                        <td> <input class="" name="text1-3[]" type="text"></td>     
                        <td> <input class="" name="set1-3-1[]" type="text"></td>
                        <td> <input class="" name="set1-3-2[]" type="text"></td>
                        <td> <input class="" name="set1-3-3[]" type="text"></td>   
                        <td> <input class="" name="set1-3-4[]" type="text"></td>     
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">4</th>
                        <td> <input class="" name="text1-4[]" type="text"></td>   
                        <td> <input class="" name="set1-4-1[]" type="text"></td>
                        <td> <input class="" name="set1-4-2[]" type="text"></td>
                        <td> <input class="" name="set1-4-3[]" type="text"></td>   
                        <td> <input class="" name="set1-4-4[]" type="text"></td>     
                    </tr>
                    <tr style="background:#F5F5F5">
                        <th scope="row">5</th>
                        <td> <input class="" name="text1-5[]" type="text"></td>   
                        <td> <input class="" name="set1-5-1[]" type="text"></td>
                        <td> <input class="" name="set1-5-2[]" type="text"></td>
                        <td> <input class="" name="set1-5-3[]" type="text"></td>   
                        <td> <input class="" name="set1-5-4[]" type="text"></td>     
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">6</th>
                        <td> <input class="" name="text1-6[]" type="text"></td>  
                        <td> <input class="" name="set1-6-1[]" type="text"></td>
                        <td> <input class="" name="set1-6-2[]" type="text"></td>
                        <td> <input class="" name="set1-6-3[]" type="text"></td>   
                        <td> <input class="" name="set1-6-4[]" type="text"></td>     
                    </tr>
                    <tr style="background:#F5F5F5">
                        <th scope="row">7</th>
                        <td> <input class="" name="text1-7[]" type="text"></td>   
                        <td> <input class="" name="set1-7-1[]" type="text"></td>
                        <td> <input class="" name="set1-7-2[]" type="text"></td>
                        <td> <input class="" name="set1-7-3[]" type="text"></td>   
                        <td> <input class="" name="set1-7-4[]" type="text"></td>     
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">8</th>
                        <td> <input class="" name="text1-8[]" type="text"></td>   
                        <td> <input class="" name="set1-8-1[]" type="text"></td>
                        <td> <input class="" name="set1-8-2[]" type="text"></td>
                        <td> <input class="" name="set1-8-3[]" type="text"></td>   
                        <td> <input class="" name="set1-8-4[]" type="text"></td>     
                    </tr>
                    <tr style="background:#F5F5F5">
                        <th scope="row">9</th>
                        <td> <input class="" name="text1-9[]" type="text"></td>   
                        <td> <input class="" name="set1-9-1[]" type="text"></td>
                        <td> <input class="" name="set1-9-2[]" type="text"></td>
                        <td> <input class="" name="set1-9-3[]" type="text"></td>   
                        <td> <input class="" name="set1-9-4[]" type="text"></td>     
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">10</th>
                        <td> <input class="" name="text1-10[]" type="text"></td>   
                        <td> <input class="" name="set1-10-1[]" type="text"></td>
                        <td> <input class="" name="set1-10-2[]" type="text"></td>
                        <td> <input class="" name="set1-10-3[]" type="text"></td>   
                        <td> <input class="" name="set1-10-4[]" type="text"></td>     
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
               
            </div>

            <!-- {!! Form::close() !!} -->
        </div>

        <!-- <div id="article2" class="w3-container w3-display-container city"style="display:none" > -->
        <div>
        <h1>ข้อสอบชุดที่ 2</h1>               
            <!-- {!! Form::open(['url' => '#','method' => 'POST','files' => true]) !!}                 -->

                <div class="form-group">
                {!! Form::label(' article_name[]', 'ชื่อบทความ : ') !!}
                {!! Form::text('article_name[]', null, ['class'=>'form-control','Placeholder'=>"ชื่อบทความ"]) !!}
                </div>
                <div class="form-group">                
                    
                    <textarea name="article_detail[]" class="ckeditor" ></textarea>                    
                    </textarea>
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
                        <td> <input class="" name="text1-1[]" type="text"></td>                                  
                        <td> <input class="" name="set1-1-1[]" type="text"></td>
                        <td> <input class="" name="set1-1-2[]" type="text"></td>
                        <td> <input class="" name="set1-1-3[]" type="text"></td>   
                        <td> <input class="" name="set1-1-4[]" type="text"></td>                                 
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">2</th>
                        <td> <input class="" name="text1-2[]" type="text"></td>
                        <td> <input class="" name="set1-2-1[]" type="text"></td>
                        <td> <input class="" name="set1-2-2[]" type="text"></td>
                        <td> <input class="" name="set1-2-3[]" type="text"></td>  
                        <td> <input class="" name="set1-2-4[]" type="text"></td>           
                    </tr>
                    <tr style="background:#F5F5F5">
                        <th scope="row">3</th>
                        <td> <input class="" name="text1-3[]" type="text"></td>     
                        <td> <input class="" name="set1-3-1[]" type="text"></td>
                        <td> <input class="" name="set1-3-2[]" type="text"></td>
                        <td> <input class="" name="set1-3-3[]" type="text"></td>   
                        <td> <input class="" name="set1-3-4[]" type="text"></td>     
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">4</th>
                        <td> <input class="" name="text1-4[]" type="text"></td>   
                        <td> <input class="" name="set1-4-1[]" type="text"></td>
                        <td> <input class="" name="set1-4-2[]" type="text"></td>
                        <td> <input class="" name="set1-4-3[]" type="text"></td>   
                        <td> <input class="" name="set1-4-4[]" type="text"></td>     
                    </tr>
                    <tr style="background:#F5F5F5">
                        <th scope="row">5</th>
                        <td> <input class="" name="text1-5[]" type="text"></td>   
                        <td> <input class="" name="set1-5-1[]" type="text"></td>
                        <td> <input class="" name="set1-5-2[]" type="text"></td>
                        <td> <input class="" name="set1-5-3[]" type="text"></td>   
                        <td> <input class="" name="set1-5-4[]" type="text"></td>     
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">6</th>
                        <td> <input class="" name="text1-6[]" type="text"></td>  
                        <td> <input class="" name="set1-6-1[]" type="text"></td>
                        <td> <input class="" name="set1-6-2[]" type="text"></td>
                        <td> <input class="" name="set1-6-3[]" type="text"></td>   
                        <td> <input class="" name="set1-6-4[]" type="text"></td>     
                    </tr>
                    <tr style="background:#F5F5F5">
                        <th scope="row">7</th>
                        <td> <input class="" name="text1-7[]" type="text"></td>   
                        <td> <input class="" name="set1-7-1[]" type="text"></td>
                        <td> <input class="" name="set1-7-2[]" type="text"></td>
                        <td> <input class="" name="set1-7-3[]" type="text"></td>   
                        <td> <input class="" name="set1-7-4[]" type="text"></td>     
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">8</th>
                        <td> <input class="" name="text1-8[]" type="text"></td>   
                        <td> <input class="" name="set1-8-1[]" type="text"></td>
                        <td> <input class="" name="set1-8-2[]" type="text"></td>
                        <td> <input class="" name="set1-8-3[]" type="text"></td>   
                        <td> <input class="" name="set1-8-4[]" type="text"></td>     
                    </tr>
                    <tr style="background:#F5F5F5">
                        <th scope="row">9</th>
                        <td> <input class="" name="text1-9[]" type="text"></td>   
                        <td> <input class="" name="set1-9-1[]" type="text"></td>
                        <td> <input class="" name="set1-9-2[]" type="text"></td>
                        <td> <input class="" name="set1-9-3[]" type="text"></td>   
                        <td> <input class="" name="set1-9-4[]" type="text"></td>     
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">10</th>
                        <td> <input class="" name="text1-10[]" type="text"></td>   
                        <td> <input class="" name="set1-10-1[]" type="text"></td>
                        <td> <input class="" name="set1-10-2[]" type="text"></td>
                        <td> <input class="" name="set1-10-3[]" type="text"></td>   
                        <td> <input class="" name="set1-10-4[]" type="text"></td>     
                    </tr>
                </tbody>
            </table>
                <!-- <table class="table table-bordered">
            <thead  >
                <tr style="background:black; color:#F8F8FF">
                    <th scope="col-1">ลำดับ</th>
                    <th scope="col-2">ข้อความที่กำหนด</th>
                    <th colspan="4">ผลเฉลยรหัสคำตอบ</th>                                       
                </tr>
            </thead>
                <tbody>
                    <tr style="background:#F5F5F5">
                        <th scope="row">11</th>
                        <td> <input class="" name="text2-1" type="text"></td>                                  
                        <td> <input class="" name="set2-1-1" type="text"></td>
                        <td> <input class="" name="set2-1-2" type="text"></td>
                        <td> <input class="" name="set2-1-3" type="text"></td>   
                        <td> <input class="" name="set2-1-4" type="text"></td>                                 
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">12</th>
                        <td> <input class="" name="text2-2" type="text"></td>
                        <td> <input class="" name="set2-2-1" type="text"></td>
                        <td> <input class="" name="set2-2-2" type="text"></td>
                        <td> <input class="" name="set2-2-3" type="text"></td>  
                        <td> <input class="" name="set2-2-4" type="text"></td>           
                    </tr>
                    <tr style="background:#F5F5F5">
                        <th scope="row">13</th>
                        <td> <input class="" name="text2-3" type="text"></td>     
                        <td> <input class="" name="set2-3-1" type="text"></td>
                        <td> <input class="" name="set2-3-2" type="text"></td>
                        <td> <input class="" name="set2-3-3" type="text"></td>   
                        <td> <input class="" name="set2-3-4" type="text"></td>     
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">14</th>
                        <td> <input class="" name="text2-4" type="text"></td>   
                        <td> <input class="" name="set2-4-1" type="text"></td>
                        <td> <input class="" name="set2-4-2" type="text"></td>
                        <td> <input class="" name="set2-4-3" type="text"></td>   
                        <td> <input class="" name="set2-4-4" type="text"></td>     
                    </tr>
                    <tr style="background:#F5F5F5">
                        <th scope="row">15</th>
                        <td> <input class="" name="text2-5" type="text"></td>   
                        <td> <input class="" name="set2-5-1" type="text"></td>
                        <td> <input class="" name="set2-5-2" type="text"></td>
                        <td> <input class="" name="set2-5-3" type="text"></td>   
                        <td> <input class="" name="set2-5-4" type="text"></td>     
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">16</th>
                        <td> <input class="" name="text2-6" type="text"></td>  
                        <td> <input class="" name="set2-6-1" type="text"></td>
                        <td> <input class="" name="set2-6-2" type="text"></td>
                        <td> <input class="" name="set2-6-3" type="text"></td>   
                        <td> <input class="" name="set2-6-4" type="text"></td>     
                    </tr>
                    <tr style="background:#F5F5F5">
                        <th scope="row">17</th>
                        <td> <input class="" name="text1-7" type="text"></td>   
                        <td> <input class="" name="set2-7-1" type="text"></td>
                        <td> <input class="" name="set2-7-2" type="text"></td>
                        <td> <input class="" name="set2-7-3" type="text"></td>   
                        <td> <input class="" name="set2-7-4" type="text"></td>     
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">18</th>
                        <td> <input class="" name="text2-8" type="text"></td>   
                        <td> <input class="" name="set2-8-1" type="text"></td>
                        <td> <input class="" name="set2-8-2" type="text"></td>
                        <td> <input class="" name="set2-8-3" type="text"></td>   
                        <td> <input class="" name="set2-8-4" type="text"></td>     
                    </tr>
                    <tr style="background:#F5F5F5">
                        <th scope="row">19</th>
                        <td> <input class="" name="text2-9" type="text"></td>   
                        <td> <input class="" name="set2-9-1" type="text"></td>
                        <td> <input class="" name="set2-9-2" type="text"></td>
                        <td> <input class="" name="set2-9-3" type="text"></td>   
                        <td> <input class="" name="set2-9-4" type="text"></td>     
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">20</th>
                        <td> <input class="" name="text2-10" type="text"></td>   
                        <td> <input class="" name="set2-10-1" type="text"></td>
                        <td> <input class="" name="set2-10-2" type="text"></td>
                        <td> <input class="" name="set2-10-3" type="text"></td>   
                        <td> <input class="" name="set2-10-4" type="text"></td>     
                    </tr>
                </tbody>
            </table> -->



                <div class="form-group">
                    <!-- {!! Form::submit("สร้างชุดข้อสอบ", ['class'=>'btn form-control']) !!} -->
                </div>
                      
        </div>
    </div>


    {!! Form::submit("สร้างชุดข้อสอบ", ['class'=>'btn form-control']) !!}
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
    CKEDITOR.replace(jQuery('.ckeditor'));
</script>

<!-- <table class="table table-bordered">
            <thead  >
                <tr style="background:black; color:#F8F8FF">
                    <th scope="col-1">ลำดับ</th>
                    <th scope="col-2">ข้อความที่กำหนด</th>
                    <th colspan="4">ผลเฉลยรหัสคำตอบ</th>                                       
                </tr>
            </thead>
                <tbody>
                    <tr style="background:#F5F5F5">
                        <th scope="row">11</th>
                        <td> <input class="" name="text2-1[1]" type="text"></td>                                  
                        <td> <input class="" name="set2-1-1[1]" type="text"></td>
                        <td> <input class="" name="set2-1-2[1]" type="text"></td>
                        <td> <input class="" name="set2-1-3[1]" type="text"></td>   
                        <td> <input class="" name="set2-1-4[1]" type="text"></td>                                 
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">12</th>
                        <td> <input class="" name="text2-2[1]" type="text"></td>
                        <td> <input class="" name="set2-2-1[1]" type="text"></td>
                        <td> <input class="" name="set2-2-2[1]" type="text"></td>
                        <td> <input class="" name="set2-2-3[1]" type="text"></td>  
                        <td> <input class="" name="set2-2-4[1]" type="text"></td>           
                    </tr>
                    <tr style="background:#F5F5F5">
                        <th scope="row">13</th>
                        <td> <input class="" name="text2-3[1]" type="text"></td>     
                        <td> <input class="" name="set2-3-1[1]" type="text"></td>
                        <td> <input class="" name="set2-3-2[1]" type="text"></td>
                        <td> <input class="" name="set2-3-3[1]" type="text"></td>   
                        <td> <input class="" name="set2-3-4[1]" type="text"></td>     
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">14</th>
                        <td> <input class="" name="text2-4[1]" type="text"></td>   
                        <td> <input class="" name="set2-4-1[1]" type="text"></td>
                        <td> <input class="" name="set2-4-2[1]" type="text"></td>
                        <td> <input class="" name="set2-4-3[1]" type="text"></td>   
                        <td> <input class="" name="set2-4-4[1]" type="text"></td>     
                    </tr>
                    <tr style="background:#F5F5F5">
                        <th scope="row">15</th>
                        <td> <input class="" name="text2-5[1]" type="text"></td>   
                        <td> <input class="" name="set2-5-1[1]" type="text"></td>
                        <td> <input class="" name="set2-5-2[1]" type="text"></td>
                        <td> <input class="" name="set2-5-3[1]" type="text"></td>   
                        <td> <input class="" name="set2-5-4[1]" type="text"></td>     
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">16</th>
                        <td> <input class="" name="text2-6[1]" type="text"></td>  
                        <td> <input class="" name="set2-6-1[1]" type="text"></td>
                        <td> <input class="" name="set2-6-2[1]" type="text"></td>
                        <td> <input class="" name="set2-6-3[1]" type="text"></td>   
                        <td> <input class="" name="set2-6-4[1]" type="text"></td>     
                    </tr>
                    <tr style="background:#F5F5F5">
                        <th scope="row">17</th>
                        <td> <input class="" name="text1-7[1]" type="text"></td>   
                        <td> <input class="" name="set2-7-1[1]" type="text"></td>
                        <td> <input class="" name="set2-7-2[1]" type="text"></td>
                        <td> <input class="" name="set2-7-3[1]" type="text"></td>   
                        <td> <input class="" name="set2-7-4[1]" type="text"></td>     
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">18</th>
                        <td> <input class="" name="text2-8[1]" type="text"></td>   
                        <td> <input class="" name="set2-8-1[1]" type="text"></td>
                        <td> <input class="" name="set2-8-2[1]" type="text"></td>
                        <td> <input class="" name="set2-8-3[1]" type="text"></td>   
                        <td> <input class="" name="set2-8-4[1]" type="text"></td>     
                    </tr>
                    <tr style="background:#F5F5F5">
                        <th scope="row">19</th>
                        <td> <input class="" name="text2-9[1]" type="text"></td>   
                        <td> <input class="" name="set2-9-1[1]" type="text"></td>
                        <td> <input class="" name="set2-9-2[1]" type="text"></td>
                        <td> <input class="" name="set2-9-3[1]" type="text"></td>   
                        <td> <input class="" name="set2-9-4[1]" type="text"></td>     
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">20</th>
                        <td> <input class="" name="text2-10[1]" type="text"></td>   
                        <td> <input class="" name="set2-10-1[1]" type="text"></td>
                        <td> <input class="" name="set2-10-2[1]" type="text"></td>
                        <td> <input class="" name="set2-10-3[1]" type="text"></td>   
                        <td> <input class="" name="set2-10-4[1]" type="text"></td>     
                    </tr>
                </tbody>
            </table>

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
                        <td> <input class="" name="text1-1[0]" type="text"></td>                                  
                        <td> <input class="" name="set1-1-1[0]" type="text"></td>
                        <td> <input class="" name="set1-1-2[0]" type="text"></td>
                        <td> <input class="" name="set1-1-3[0]" type="text"></td>   
                        <td> <input class="" name="set1-1-4[0]" type="text"></td>                                 
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">2</th>
                        <td> <input class="" name="text1-2[0]" type="text"></td>
                        <td> <input class="" name="set1-2-1[0]" type="text"></td>
                        <td> <input class="" name="set1-2-2[0]" type="text"></td>
                        <td> <input class="" name="set1-2-3[0]" type="text"></td>  
                        <td> <input class="" name="set1-2-4[0]" type="text"></td>           
                    </tr>
                    <tr style="background:#F5F5F5">
                        <th scope="row">3</th>
                        <td> <input class="" name="text1-3[0]" type="text"></td>     
                        <td> <input class="" name="set1-3-1[0]" type="text"></td>
                        <td> <input class="" name="set1-3-2[0]" type="text"></td>
                        <td> <input class="" name="set1-3-3[0]" type="text"></td>   
                        <td> <input class="" name="set1-3-4[0]" type="text"></td>     
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">4</th>
                        <td> <input class="" name="text1-4[0]" type="text"></td>   
                        <td> <input class="" name="set1-4-1[0]" type="text"></td>
                        <td> <input class="" name="set1-4-2[0]" type="text"></td>
                        <td> <input class="" name="set1-4-3[0]" type="text"></td>   
                        <td> <input class="" name="set1-4-4[0]" type="text"></td>     
                    </tr>
                    <tr style="background:#F5F5F5">
                        <th scope="row">5</th>
                        <td> <input class="" name="text1-5[0]" type="text"></td>   
                        <td> <input class="" name="set1-5-1[0]" type="text"></td>
                        <td> <input class="" name="set1-5-2[0]" type="text"></td>
                        <td> <input class="" name="set1-5-3[0]" type="text"></td>   
                        <td> <input class="" name="set1-5-4[0]" type="text"></td>     
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">6</th>
                        <td> <input class="" name="text1-6[0]" type="text"></td>  
                        <td> <input class="" name="set1-6-1[0]" type="text"></td>
                        <td> <input class="" name="set1-6-2[0]" type="text"></td>
                        <td> <input class="" name="set1-6-3[0]" type="text"></td>   
                        <td> <input class="" name="set1-6-4[0]" type="text"></td>     
                    </tr>
                    <tr style="background:#F5F5F5">
                        <th scope="row">7</th>
                        <td> <input class="" name="text1-7[0]" type="text"></td>   
                        <td> <input class="" name="set1-7-1[0]" type="text"></td>
                        <td> <input class="" name="set1-7-2[0]" type="text"></td>
                        <td> <input class="" name="set1-7-3[0]" type="text"></td>   
                        <td> <input class="" name="set1-7-4[0]" type="text"></td>     
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">8</th>
                        <td> <input class="" name="text1-8[0]" type="text"></td>   
                        <td> <input class="" name="set1-8-1[0]" type="text"></td>
                        <td> <input class="" name="set1-8-2[0]" type="text"></td>
                        <td> <input class="" name="set1-8-3[0]" type="text"></td>   
                        <td> <input class="" name="set1-8-4[0]" type="text"></td>     
                    </tr>
                    <tr style="background:#F5F5F5">
                        <th scope="row">9</th>
                        <td> <input class="" name="text1-9[0]" type="text"></td>   
                        <td> <input class="" name="set1-9-1[0]" type="text"></td>
                        <td> <input class="" name="set1-9-2[0]" type="text"></td>
                        <td> <input class="" name="set1-9-3[0]" type="text"></td>   
                        <td> <input class="" name="set1-9-4[0]" type="text"></td>     
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">10</th>
                        <td> <input class="" name="text1-10[0]" type="text"></td>   
                        <td> <input class="" name="set1-10-1[0]" type="text"></td>
                        <td> <input class="" name="set1-10-2[0]" type="text"></td>
                        <td> <input class="" name="set1-10-3[0]" type="text"></td>   
                        <td> <input class="" name="set1-10-4[0]" type="text"></td>     
                    </tr>
                </tbody>
            </table> -->
