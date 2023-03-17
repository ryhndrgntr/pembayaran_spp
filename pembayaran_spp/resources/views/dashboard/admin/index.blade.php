@extends('app/index')
@section('title', 'Dashboard')
@section('pagejudul', 'Dashboard')
@section('content')
<div class="content">
  <div class="row">
    <div class="col-12">
      <div class="card card-chart">
        <div class="card-header ">
          <div class="row">
            
          </div>
        </div>
        <div class="card-body">
          <h3 class="text-light ml-3">{{ $sentences }}</h3>
          <h4 class="text-light ml-3">Welcome {{ $name_user }}</h4>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    
  </div>
  
</div>
@endsection

