@extends('layouts.main')

<!-- Start Featured Slider -->
@section('content')
<!-- <script src="{{ asset('ckeditor/ckeditor.js') }}"></script> -->
<script src="https://cdn.ckeditor.com/4.5.6/standard/ckeditor.js"></script>

        <div class="container" style="margin-top:140px ;">
                <div class="row">
                    <div class="col" style="margin-top:-50px;margin-bottom:50px;margin-left:355px;">
                        <h1> สร้างแบบทดสอบใหม่</h1>
                    </div>
            </div>
        </div>        

        <div class="w3-bar w3-black">
            <button class="w3-bar-item w3-button" onclick="openCity('article1')">บทความที่ 1</button>
            <button class="w3-bar-item w3-button" onclick="openCity('article2')">บทความที่ 2</button>
           
        </div>

        <div id="article1" class="w3-container w3-display-container city" >     
            <h1>ข้อสอบชุดที่ 1</h1>       
            <!-- <h2>article1</h2>     -->
            {!! Form::open(['url' => '#','method' => 'POST','files' => true]) !!}
            <div class="form-group">
            {!! Form::label('exam_name', 'ชื่อชุดข้อสอบ : ') !!}
             {!! Form::text('exam_name', null, ['class'=>'form-control','Placeholder'=>"ชื่อชุดข้อสอบ"]) !!}
            </div>

            <div class="form-group">
            {!! Form::label(' article_name', 'ชื่อบทความ : ') !!}
             {!! Form::text('article_name', null, ['class'=>'form-control','Placeholder'=>"ชื่อบทความ"]) !!}
            </div>
            <div class="form-group">
            <!-- {!! Form::label(' article_detail', 'ชื่อบทความ : ') !!}
            {!! Form::text('article_detail', null, ['class'=>'ckeditor','Placeholder'=>"ชื่อบทความ"]) !!} -->
                
                <textarea id="article_detail" class="ckeditor" ></textarea>                    
                </textarea>
            </div>

            <table class="table table-bordered">
            <thead  >
                <tr style="background:black; color:#F8F8FF">
                    <th scope="col-1">ลำดับ</th>
                    <th scope="col-4">ข้อความที่กำหนด</th>
                    <th scope="col-7"></th>  
                    <th scope="col-7">ร่างรหัสคำตอบ</th>  
                    <th scope="col-7"></th> 
                    <th scope="col-7"></th>                                       
                </tr>
            </thead>
            <tbody>
                <tr  style="background:#F5F5F5">
                    <th scope="row">1</th>
                    <td> <input class="" id="set1-3-1" type="text"></td>                                  
                    <td> <input class="" id="set1-1-1" type="text"></td>
                    <td> <input class="" id="set1-1-2" type="text"></td>
                    <td> <input class="" id="set1-1-3" type="text"></td>   
                    <td> <input class="" id="set1-1-3" type="text"></td>                                 
                </tr>
                <tr style="background:#DCDCDC">
                    <th scope="row">2</th>
                    <td> <input class="" id="set1-3-1" type="text"></td>
                    <td> <input class="" id="set1-2-1" type="text"></td>
                    <td> <input class="" id="set1-2-2" type="text"></td>
                    <td> <input class="" id="set1-2-3" type="text"></td>  
                    <td> <input class="" id="set1-1-3" type="text"></td>           
                </tr>
                <tr style="background:#F5F5F5">
                    <th scope="row">3</th>
                    <td> <input class="" id="set1-3-1" type="text"></td>     
                    <td> <input class="" id="set1-3-1" type="text"></td>
                    <td> <input class="" id="set1-3-2" type="text"></td>
                    <td> <input class="" id="set1-3-3" type="text"></td>   
                    <td> <input class="" id="set1-1-3" type="text"></td>     
                </tr>
                <tr style="background:#DCDCDC">
                    <th scope="row">4</th>
                    <td> <input class="" id="set1-3-1" type="text"></td>   
                    <td> <input class="" id="set1-3-1" type="text"></td>
                    <td> <input class="" id="set1-3-2" type="text"></td>
                    <td> <input class="" id="set1-3-3" type="text"></td>   
                    <td> <input class="" id="set1-1-3" type="text"></td>     
                </tr>
                <tr style="background:#F5F5F5">
                    <th scope="row">5</th>
                    <td> <input class="" id="set1-3-1" type="text"></td>   
                    <td> <input class="" id="set1-3-1" type="text"></td>
                    <td> <input class="" id="set1-3-2" type="text"></td>
                    <td> <input class="" id="set1-3-3" type="text"></td>   
                    <td> <input class="" id="set1-1-3" type="text"></td>     
                </tr>
                <tr style="background:#DCDCDC">
                    <th scope="row">6</th>
                    <td> <input class="" id="set1-3-1" type="text"></td>  
                    <td> <input class="" id="set1-3-1" type="text"></td>
                    <td> <input class="" id="set1-3-2" type="text"></td>
                    <td> <input class="" id="set1-3-3" type="text"></td>   
                    <td> <input class="" id="set1-1-3" type="text"></td>     
                </tr>
            </tbody>
            </table>
            <div class="form-group">
                {!! Form::submit("สร้างชุดข้อสอบ", ['class'=>'btn form-control']) !!}
            </div>

            {!! Form::close() !!}
        </div>

        <div id="article2" class="w3-container w3-display-container city"style="display:none" >
        <h1>ข้อสอบชุดที่ 2</h1>               
            {!! Form::open(['url' => '#','method' => 'POST','files' => true]) !!}
                <div class="form-group">
                {!! Form::label('exam_name', 'ชื่อชุดข้อสอบ : ') !!}
                {!! Form::text('exam_name', null, ['class'=>'form-control','Placeholder'=>"ชื่อชุดข้อสอบ"]) !!}
                </div>

                <div class="form-group">
                {!! Form::label(' article_name', 'ชื่อบทความ : ') !!}
                {!! Form::text('article_name', null, ['class'=>'form-control','Placeholder'=>"ชื่อบทความ"]) !!}
                </div>
                <div class="form-group">
                <!-- {!! Form::label(' article_detail', 'ชื่อบทความ : ') !!}
                {!! Form::text('article_detail', null, ['class'=>'ckeditor','Placeholder'=>"ชื่อบทความ"]) !!} -->
                    
                    <textarea id="article_detail" class="ckeditor" ></textarea>                    
                    </textarea>
                </div>

                <table class="table table-bordered">
            <thead  >
                <tr style="background:black; color:#F8F8FF">
                    <th scope="col-1">ลำดับ</th>
                    <th scope="col-4">ข้อความที่กำหนด</th>
                    <th scope="col-7"></th>  
                    <th scope="col-7">ร่างรหัสคำตอบ</th>  
                    <th scope="col-7"></th> 
                    <th scope="col-7"></th>                                       
                </tr>
            </thead>
            <tbody>
                <tr  style="background:#F5F5F5">
                    <th scope="row">1</th>
                    <td> <input class="" id="set1-3-1" type="text"></td>                                  
                    <td> <input class="" id="set1-1-1" type="text"></td>
                    <td> <input class="" id="set1-1-2" type="text"></td>
                    <td> <input class="" id="set1-1-3" type="text"></td>   
                    <td> <input class="" id="set1-1-3" type="text"></td>                                 
                </tr>
                <tr style="background:#DCDCDC">
                    <th scope="row">2</th>
                    <td> <input class="" id="set1-3-1" type="text"></td>
                    <td> <input class="" id="set1-2-1" type="text"></td>
                    <td> <input class="" id="set1-2-2" type="text"></td>
                    <td> <input class="" id="set1-2-3" type="text"></td>  
                    <td> <input class="" id="set1-1-3" type="text"></td>           
                </tr>
                <tr style="background:#F5F5F5">
                    <th scope="row">3</th>
                    <td> <input class="" id="set1-3-1" type="text"></td>     
                    <td> <input class="" id="set1-3-1" type="text"></td>
                    <td> <input class="" id="set1-3-2" type="text"></td>
                    <td> <input class="" id="set1-3-3" type="text"></td>   
                    <td> <input class="" id="set1-1-3" type="text"></td>     
                </tr>
                <tr style="background:#DCDCDC">
                    <th scope="row">4</th>
                    <td> <input class="" id="set1-3-1" type="text"></td>   
                    <td> <input class="" id="set1-3-1" type="text"></td>
                    <td> <input class="" id="set1-3-2" type="text"></td>
                    <td> <input class="" id="set1-3-3" type="text"></td>   
                    <td> <input class="" id="set1-1-3" type="text"></td>     
                </tr>
                <tr style="background:#F5F5F5">
                    <th scope="row">5</th>
                    <td> <input class="" id="set1-3-1" type="text"></td>   
                    <td> <input class="" id="set1-3-1" type="text"></td>
                    <td> <input class="" id="set1-3-2" type="text"></td>
                    <td> <input class="" id="set1-3-3" type="text"></td>   
                    <td> <input class="" id="set1-1-3" type="text"></td>     
                </tr>
                <tr style="background:#DCDCDC">
                    <th scope="row">6</th>
                    <td> <input class="" id="set1-3-1" type="text"></td>  
                    <td> <input class="" id="set1-3-1" type="text"></td>
                    <td> <input class="" id="set1-3-2" type="text"></td>
                    <td> <input class="" id="set1-3-3" type="text"></td>   
                    <td> <input class="" id="set1-1-3" type="text"></td>     
                </tr>
            </tbody>
            </table>



                <div class="form-group">
                    {!! Form::submit("สร้างชุดข้อสอบ", ['class'=>'btn form-control']) !!}
                </div>
                {!! Form::close() !!}        
        </div>
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