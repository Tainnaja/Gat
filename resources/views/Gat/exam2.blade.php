@extends('layouts.main')

@section('content')
        <!-- <div style="margin-top:90px"></div>
         <h1> {{ 'ข้อสอบชุดที่ :' .$exam->exam_name }} </h1>
         <h1>ชุดที่ 1</h1>   
        <div>
                {{ '' .$articles[0]->article_name }}
                {!! '' .$articles[0]->article_detail !!}
        </div>
        <iframe class="flow-gat" src="http://127.0.0.1:8000/test"> </iframe>
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
                        
                    </tr>
            </tbody>
        </table>    -->
       
           
      
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