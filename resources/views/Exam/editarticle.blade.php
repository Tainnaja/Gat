@extends('layouts.main')

<!-- Start Featured Slider -->
@section('content')
<div style="display:block; margin-left:250px; margin-right:150px; margin-top:120px; margin-bottom: 500px" >
    <table class="table table-bordered">
                <thead>
                    <tr style="background:black; color:#F8F8FF;">
                        <th scope="col-2">ข้อสอบ</th>
                        <th scope="col-2">วันที่สร้าง</th>
                        <th scope="col-2">วันที่อัพเดท</th>    
                        <th scope="col-2">แก้ไข</th>     
                        <th scope="col-2">ลบ</th>                                                         
                    </tr>
                </thead>
                <tbody>    
                        @foreach($exams as $exam)                                            
                        <tr style="background:#F5F5F5">
                        <th scope="row">{{ '' .$exam->exam_name }}</th> 
                        <td> {{ '' .$exam->created_at }}</td>    
                        <td>{{ '' .$exam->updated_at }} </td>  
                        <td> <u><a style="color:green" href="{{ url("fulltest/{$exam->id}/edit") }}">  แก้ไข </a></u></td>  
                        <td>
                            {!! Form::open(['method' => 'DELETE', 'url'=>'fulltest/'.$exam->id]) !!}                                
                            {!! Form::submit( 'ลบ' , ['class'=>'btn btn-danger']) !!}
                            {!! Form::close() !!}
                         </td>  
                    </tr>
                    @endforeach
                </tbody>
        </table>
        </br></br></br></br></br></br></br></br></br></br></br></br>

@endsection