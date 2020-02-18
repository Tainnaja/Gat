@extends('layouts.main')

<!-- Start Featured Slider -->
@section('content')
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
<div style="margin-top:90px ; " >

<div style="margin-left:590px">
@if($achievement==1)
<div class="container">
  <div class="row">
    <div class="col-sm">
        <td><img src="{{ URL::asset('image/1.png') }}" alt="Achievement1" style="height:300px"></td>
         ทำข้อสอบได้เต็ม 150 คะแนน ใน 1 ครั้ง 
    </div>     
  </div>
</div>
@elseif($achievement==2)
<div class="container">
  <div class="row">
    <div class="col-sm">
        <td><img src="{{ URL::asset('image/2.png') }}" alt="Achievement1" style="height:300px"></td>
        ทำข้อสอบได้เฉลี่ย 140 - 150 คะแนน 
    </div>     
  </div>
</div>   
@elseif($achievement==3)
<div class="container">
  <div class="row">
    <div class="col-sm">
    <td><img src="{{ URL::asset('image/3.png') }}" alt="Achievement1" style="height:300px"></td>
        ทำข้อสอบได้เฉลี่ย 100 - 140 คะแนน
    </div>     
  </div>
</div>    
@elseif($achievement==5)
<div class="container">
  <div class="row">
    <div class="col-sm">
    <td><img src="{{ URL::asset('image/5.png') }}" alt="Achievement1" style="height:300px"></td>
            ทำข้อสอบได้เฉลี่ย 80 - 100 คะแนน
    </div>     
  </div>
</div>     
@else
<div class="container">
  <div class="row">
    <div class="col-sm">
    <td><img src="{{ URL::asset('image/6.png') }}" alt="Achievement1" style="height:300px"></td>
       ทำคะแนนได้ต่ำกว่า 80 คะแนนโดยเลี่ย
    </div>     
  </div>
</div>         
@endif
</div>
<table class="table table-sm table-dark">
  <thead>
    <tr style="background:#000000; color:#ffffff">
      <th scope="col">ลำดับ</th>
      <th scope="col">คะแนน</th>
      <th scope="col">จำนวนที่ผิด</th>
      <th scope="col">ระดับ</th>
    </tr>
  </thead>
  <tbody>
    <tr style="background:#ccf5ff">
      <th scope="row">1</th>
      <td>150</td>
      <td>0 %</td>
      <td><img src="{{ URL::asset('image/1.png') }}" alt="Achievement1" style="height:120px"></td>
    </tr>
    <tr style="background:#ffffb3">
      <th scope="row">2</th>
      <td>140-150</td>
      <td> 1 - 10 %</td>
      <td><img src="{{ URL::asset('image/2.png') }}" alt="Achievement2" style="height:120px"></td>
    </tr>
    <tr style="background:#d5dcdd">
      <th scope="row">3</th>
      <td>100-140</td>
      <td> 10 - 30 %</td>
      <td><img src="{{ URL::asset('image/3.png') }}" alt="Achievement3" style="height:120px"></td>
    </tr>
    <tr style="background:#dfbf9f">
      <th scope="row">4</th>
      <td>80-100</td>
      <td> 30 - 60 %</td>
      <td><img src="{{ URL::asset('image/5.png') }}" alt="Achievement5" style="height:120px"></td>
    </tr>
    <tr style="background:#ffffff">
      <th scope="row">5</th>
      <td> 0 - 80</td>
      <td> 60 % up</td>
      <td><img src="{{ URL::asset('image/6.png') }}" alt="Achievement6" style="height:120px"></td>
    </tr>
  </tbody>
</table>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" itegrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
@endsectionn