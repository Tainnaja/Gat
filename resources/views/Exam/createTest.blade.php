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
            <h1>ชุดบทความที่ 1</h1>       
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
                        <td> <input class="" name="text1_1[]" type="text" value="{{old('text1_1.0')}}" ></td>                                  
                        <td> <input class="" name="set1_1_1[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_1_1.0')}}"></td>
                        <td> <input class="" name="set1_1_2[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_1_2.0')}}"></td>
                        <td> <input class="" name="set1_1_3[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_1_3.0')}}"></td>   
                        <td> <input class="" name="set1_1_4[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_1_4.0')}}"></td>                                 
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">2</th>
                        <td> <input class="" name="text1_2[]" type="text" value="{{old('text1_2.0')}}"></td>
                        <td> <input class="" name="set1_2_1[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_2_1.0')}}"></td>
                        <td> <input class="" name="set1_2_2[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_2_2.0')}}"></td>
                        <td> <input class="" name="set1_2_3[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_2_3.0')}}"></td>  
                        <td> <input class="" name="set1_2_4[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_2_4.0')}}"></td>           
                    </tr>
                    <tr style="background:#F5F5F5">
                        <th scope="row">3</th>
                        <td> <input class="" name="text1_3[]" type="text" value="{{old('text1_3.0')}}"></td>     
                        <td> <input class="" name="set1_3_1[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_3_1.0')}}"></td>
                        <td> <input class="" name="set1_3_2[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_3_2.0')}}"></td>
                        <td> <input class="" name="set1_3_3[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_3_3.0')}}"></td>   
                        <td> <input class="" name="set1_3_4[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_3_4.0')}}"></td>     
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">4</th>
                        <td> <input class="" name="text1_4[]" type="text" value="{{old('text1_4.0')}}"></td>   
                        <td> <input class="" name="set1_4_1[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_4_1.0')}}"></td>
                        <td> <input class="" name="set1_4_2[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_4_2.0')}}"></td>
                        <td> <input class="" name="set1_4_3[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_4_3.0')}}"></td>   
                        <td> <input class="" name="set1_4_4[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_4_4.0')}}"></td>     
                    </tr>
                    <tr style="background:#F5F5F5">
                        <th scope="row">5</th>
                        <td> <input class="" name="text1_5[]" type="text" value="{{old('text1_5.0')}}"></td>   
                        <td> <input class="" name="set1_5_1[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_5_1.0')}}"></td>
                        <td> <input class="" name="set1_5_2[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_5_2.0')}}"></td>
                        <td> <input class="" name="set1_5_3[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_5_3.0')}}"></td>   
                        <td> <input class="" name="set1_5_4[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_5_4.0')}}"></td>     
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">6</th>
                        <td> <input class="" name="text1_6[]" type="text" value="{{old('text1_6.0')}}"></td>  
                        <td> <input class="" name="set1_6_1[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_6_1.0')}}"></td>
                        <td> <input class="" name="set1_6_2[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_6_2.0')}}"></td>
                        <td> <input class="" name="set1_6_3[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_6_3.0')}}"></td>   
                        <td> <input class="" name="set1_6_4[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_6_4.0')}}"></td>     
                    </tr>
                    <tr style="background:#F5F5F5">
                        <th scope="row">7</th>
                        <td> <input class="" name="text1_7[]" type="text" value="{{old('text1_7.0')}}"></td>   
                        <td> <input class="" name="set1_7_1[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_7_1.0')}}"></td>
                        <td> <input class="" name="set1_7_2[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_7_2.0')}}"></td>
                        <td> <input class="" name="set1_7_3[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_7_3.0')}}"></td>   
                        <td> <input class="" name="set1_7_4[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_7_4.0')}}"></td>     
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">8</th>
                        <td> <input class="" name="text1_8[]" type="text" value="{{old('text1_8.0')}}"></td>   
                        <td> <input class="" name="set1_8_1[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_8_1.0')}}"></td>
                        <td> <input class="" name="set1_8_2[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_8_2.0')}}"></td>
                        <td> <input class="" name="set1_8_3[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_8_3.0')}}"></td>   
                        <td> <input class="" name="set1_8_4[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_8_4.0')}}"></td>     
                    </tr>
                    <tr style="background:#F5F5F5">
                        <th scope="row">9</th>
                        <td> <input class="" name="text1_9[]" type="text" value="{{old('text1_9.0')}}"></td>   
                        <td> <input class="" name="set1_9_1[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_9_1.0')}}"></td>
                        <td> <input class="" name="set1_9_2[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_9_2.0')}}"></td>
                        <td> <input class="" name="set1_9_3[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_9_3.0')}}"></td>   
                        <td> <input class="" name="set1_9_4[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_9_4.0')}}"></td>     
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">10</th>
                        <td> <input class="" name="text1_10[]" type="text" value="{{old('text1_10.0')}}"></td>   
                        <td> <input class="" name="set1_10_1[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_10_1.0')}}"></td>
                        <td> <input class="" name="set1_10_2[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_10_2.0')}}"></td>
                        <td> <input class="" name="set1_10_3[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_10_3.0')}}"></td>   
                        <td> <input class="" name="set1_10_4[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_10_4.0')}}"></td>     
                    </tr>
                </tbody>
            </table>           

            
        </div>
        &nbsp
        
        
        <div>
        <h1>ชุดบทความที่ 2</h1>            
            

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
                        <th scope="row">11</th>
                        <td> <input class="" name="text1_1[]" type="text" value="{{old('text1_1.1')}}"></td>                                  
                        <td> <input class="" name="set1_1_1[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_1_1.1')}}"></td>
                        <td> <input class="" name="set1_1_2[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_1_2.1')}}"></td>
                        <td> <input class="" name="set1_1_3[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_1_3.1')}}"></td>   
                        <td> <input class="" name="set1_1_4[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_1_4.1')}}"></td>                                 
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">12</th>
                        <td> <input class="" name="text1_2[]" type="text" value="{{old('text1_2.1')}}"></td>
                        <td> <input class="" name="set1_2_1[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_2_1.1')}}"></td>
                        <td> <input class="" name="set1_2_2[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_2_2.1')}}"></td>
                        <td> <input class="" name="set1_2_3[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_2_3.1')}}"></td>  
                        <td> <input class="" name="set1_2_4[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_2_4.1')}}"></td>           
                    </tr>
                    <tr style="background:#F5F5F5">
                        <th scope="row">13</th>
                        <td> <input class="" name="text1_3[]" type="text" value="{{old('text1_3.1')}}"></td>     
                        <td> <input class="" name="set1_3_1[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_3_1.1')}}"></td>
                        <td> <input class="" name="set1_3_2[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_3_2.1')}}"></td>
                        <td> <input class="" name="set1_3_3[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_3_3.1')}}"></td>   
                        <td> <input class="" name="set1_3_4[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_3_4.1')}}"></td>     
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">14</th>
                        <td> <input class="" name="text1_4[]" type="text" value="{{old('text1_4.1')}}"></td>   
                        <td> <input class="" name="set1_4_1[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_4_1.1')}}"></td>
                        <td> <input class="" name="set1_4_2[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_4_2.1')}}"></td>
                        <td> <input class="" name="set1_4_3[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_4_3.1')}}"></td>   
                        <td> <input class="" name="set1_4_4[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_4_4.1')}}"></td>     
                    </tr>
                    <tr style="background:#F5F5F5">
                        <th scope="row">15</th>
                        <td> <input class="" name="text1_5[]" type="text" value="{{old('text1_5.1')}}"></td>   
                        <td> <input class="" name="set1_5_1[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_5_1.1')}}"></td>
                        <td> <input class="" name="set1_5_2[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_5_2.1')}}"></td>
                        <td> <input class="" name="set1_5_3[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_5_3.1')}}"></td>   
                        <td> <input class="" name="set1_5_4[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_5_4.1')}}"></td>     
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">16</th>
                        <td> <input class="" name="text1_6[]" type="text" value="{{old('text1_6.1')}}"></td>  
                        <td> <input class="" name="set1_6_1[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_6_1.1')}}"></td>
                        <td> <input class="" name="set1_6_2[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_6_2.1')}}"></td>
                        <td> <input class="" name="set1_6_3[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_6_3.1')}}"></td>   
                        <td> <input class="" name="set1_6_4[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_6_4.1')}}"></td>     
                    </tr>
                    <tr style="background:#F5F5F5">
                        <th scope="row">17</th>
                        <td> <input class="" name="text1_7[]" type="text" value="{{old('text1_7.1')}}"></td>   
                        <td> <input class="" name="set1_7_1[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_7_1.1')}}"></td>
                        <td> <input class="" name="set1_7_2[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_7_2.1')}}"></td>
                        <td> <input class="" name="set1_7_3[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_7_3.1')}}"></td>   
                        <td> <input class="" name="set1_7_4[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_7_4.1')}}"></td>     
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">18</th>
                        <td> <input class="" name="text1_8[]" type="text" value="{{old('text1_8.1')}}"></td>   
                        <td> <input class="" name="set1_8_1[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_8_1.1')}}"></td>
                        <td> <input class="" name="set1_8_2[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_8_2.1')}}"></td>
                        <td> <input class="" name="set1_8_3[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_8_3.1')}}"></td>   
                        <td> <input class="" name="set1_8_4[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_8_4.1')}}"></td>     
                    </tr>
                    <tr style="background:#F5F5F5">
                        <th scope="row">19</th>
                        <td> <input class="" name="text1_9[]" type="text" value="{{old('text1_9.1')}}"></td>   
                        <td> <input class="" name="set1_9_1[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_9_1.1')}}"></td>
                        <td> <input class="" name="set1_9_2[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_9_2.1')}}"></td>
                        <td> <input class="" name="set1_9_3[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_9_3.1')}}"></td>   
                        <td> <input class="" name="set1_9_4[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_9_4.1')}}"></td>     
                    </tr>
                    <tr style="background:#DCDCDC">
                        <th scope="row">20</th>
                        <td> <input class="" name="text1_10[]" type="text" value="{{old('text1_10.1')}}"></td>   
                        <td> <input class="" name="set1_10_1[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_10_1.1')}}"></td>
                        <td> <input class="" name="set1_10_2[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_10_2.1')}}"></td>
                        <td> <input class="" name="set1_10_3[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_10_3.1')}}"></td>   
                        <td> <input class="" name="set1_10_4[]" type="text" onkeyup="this.value = this.value.toUpperCase();" value="{{old('set1_10_4.1')}}"></td>     
                    </tr>
                </tbody>
            </table>                  
               
                      
        </div>
        &nbsp

        <label for="emphasize">เลือกประเภทความสัมพันธ์ที่เน้นในข้อสอบนี้*:</label>

            <select id="emphasize" name="emphasize">
                <option value="A" selected>A</option>
                <option value="D">D</option>
                <option value="F">F</option>            
            </select>      

    </div>
    
    @if($errors->any())
    <ul class="alert alert-danger">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    
    &nbsp
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


