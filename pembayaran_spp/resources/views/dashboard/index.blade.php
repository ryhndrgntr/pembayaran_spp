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
          <div class="chart-area">
            <canvas id="chartBig1"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    
  </div>
  
</div>
@endsection

