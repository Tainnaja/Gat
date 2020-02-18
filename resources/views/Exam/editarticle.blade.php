@extends('layouts.main')

<!-- Start Featured Slider -->
@section('content')
<div style="margin-top:90px ; " >
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
                        <td> <a href="{{ url("fulltest/{$exam->id}/edit") }}">  แก้ไข </a></td>  
                        <td> </td>  
                    </tr>
                    @endforeach
                </tbody>
        </table>

@endsection