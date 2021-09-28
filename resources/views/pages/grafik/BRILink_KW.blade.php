@extends('layouts.master')

@push('plugin-styles')
<!-- {!! Html::style('/assets/plugins/plugin.css') !!} -->
@endpush

@section('content')
<div class="row">
  <div class="col">
    <h1 class="text-primary"><b>BRILink KW</b></h1>
  </div>
  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row row-cols-auto">
          <div class="col-md-2 input-grup">
            <h2 class="card-title mb-0">Bulan</h2>
            <select class="btn btn-primary btn-block" id="inputGroupSelect01" style="font-size: 14px">
              <option value="">Agustus</option>
              <option value="">September</option>
              <option value="">Oktober</option>
              <option value="">November</option>
              <option value="">Desember</option>
            </select>
          </div>
          <div class="col-md-2 input-grup">
            <h2 class="card-title mb-0">Tahun</h2>
            <select class="btn btn-primary btn-block" id="inputGroupSelect01" style="font-size: 14px">
              <option value="">2020</option>
              <option value="">2021</option>
            </select>
          </div>
          <div class="col-md-2">
            <h2 class="card-title mb-0">Data Tanggal</h2>
            <button class="btn btn-primary btn-fw btn-block">
              17-09-2021
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-7 grid-margin">
    <div class="card">
      <div class="card-body">
        <div class="d-sm-flex justify-content-between align-items-center mb-4">
          <h2 class="card-title mb-0">Time Series Total Pencapaian</h2>
          <div class="wrapper d-flex">
            <div class="d-flex align-items-center mr-3">
              <span class="dot-indicator bg-success"></span>
              <p class="mb-0 ml-2 text-muted">Product</p>
            </div>
          </div>
        </div>
        <div class="chart-container">
          <canvas id="grafik-area-chart" height="80"></canvas>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-5 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-sm-flex justify-content-between align-items-center mb-4">
          <h2 class="card-title mb-0">Total Pencapaian Bulan ini</h2>
          <div class="wrapper d-flex">
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-6 d-flex align-items-center">
            <canvas id="UsersDoughnutChart" class="400x160 mb-4 mb-md-0" height="200"></canvas>
          </div>
          <div class="col-md-6">
            <div class="wrapper mt-4">
              <div class="d-flex justify-content-between mb-2">
                <div class="d-flex align-items-center">
                  <p class="mb-0 font-weight-medium">103,24</p>
                  <small class="text-muted ml-2">Pencapaian</small>
                </div>
                <p class="mb-0 font-weight-medium">80%</p>
              </div>
              <div class="progress">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 88%" aria-valuenow="88"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row ">
  <div class="col grid-margin stretch-card">
    <div class="card">
      <div class="p-4 border-bottom bg-light">
        <h4 class="card-title mb-0">Pencapaian Masing-Masing Item Kanwil (%)</h4>
      </div>
      <div class="card-body">
        <div class="col-md-12">
          <div class="d-sm-flex justify-content-between align-items-center pb-4">
            <div id="stacked-bar-traffic-legend"></div>
          </div>
          <canvas id="3stackedbarChart" style="height:250px"></canvas>
        </div>
        <br>
        <hr>
        <br>
        <div class="row">
          <div class="col-lg-4 grid-margin stretch-card">
            <div class="card">
              <div class="p-4 pr-5 border-bottom bg-light d-sm-flex justify-content-between">
                <h4 class="card-title mb-0">Agent Juragan</h4>
              </div>
              <div class="card-body d-flex flex-column">
                <canvas class="my-auto" id="juraganChart" height="225"></canvas>
                <div class="d-flex mt-5 py-3 border-top">
                  <p class="mb-0 font-weight-semibold"><span class="dot-indicator bg-success"></span> Pencapaian </p>
                  <p class="mb-0 ml-auto text-primary">$2,464</p>
                </div>
                <div class="d-flex py-3  border-top">
                  <p class="mb-0 font-weight-semibold"><span class="dot-indicator bg-success"></span>Total </p>
                  <p class="mb-0 ml-auto text-primary">$1,325</p>
                </div>
                <div class="d-flex pt-3 border-top">
                  <p class="mb-0 font-weight-semibold"><span class="dot-indicator bg-success"></span> Rasio </p>
                  <p class="mb-0 ml-auto text-primary">$2,464</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 grid-margin stretch-card">
            <div class="card">
              <div class="p-4 pr-5 border-bottom bg-light d-sm-flex justify-content-between">
                <h4 class="card-title mb-0">Agent Jawara</h4>
              </div>
              <div class="card-body d-flex flex-column">
                <canvas class="my-auto" id="jawaraChart" height="200"></canvas>
                <div class="d-flex mt-5 py-3 border-top">
                  <p class="mb-0 font-weight-semibold"><span class="dot-indicator bg-success"></span> Pencapaian </p>
                  <p class="mb-0 ml-auto text-primary">$2,464</p>
                </div>
                <div class="d-flex py-3  border-top">
                  <p class="mb-0 font-weight-semibold"><span class="dot-indicator bg-success"></span>Total </p>
                  <p class="mb-0 ml-auto text-primary">$1,325</p>
                </div>
                <div class="d-flex pt-3 border-top">
                  <p class="mb-0 font-weight-semibold"><span class="dot-indicator bg-success"></span> Rasio </p>
                  <p class="mb-0 ml-auto text-primary">$2,464</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 grid-margin stretch-card">
            <div class="card">
              <div class="p-4 pr-5 border-bottom bg-light d-sm-flex justify-content-between">
                <h4 class="card-title mb-0">Produktifitas</h4>
              </div>
              <div class="card-body d-flex flex-column">
                <canvas class="my-auto" id="produkChart" height="200"></canvas>
                <div class="d-flex mt-5 py-3 border-top">
                  <p class="mb-0 font-weight-semibold"><span class="dot-indicator bg-success"></span> Pencapaian </p>
                  <p class="mb-0 ml-auto text-primary">$2,464</p>
                </div>
                <div class="d-flex py-3  border-top">
                  <p class="mb-0 font-weight-semibold"><span class="dot-indicator bg-success"></span>Total </p>
                  <p class="mb-0 ml-auto text-primary">$1,325</p>
                </div>
                <div class="d-flex pt-3 border-top">
                  <p class="mb-0 font-weight-semibold"><span class="dot-indicator bg-success"></span> Rasio </p>
                  <p class="mb-0 ml-auto text-primary">$2,464</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection

@push('plugin-scripts')
{!! Html::script('/assets/plugins/chartjs/chart.min.js') !!}
{!! Html::script('/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') !!}
@endpush

@push('custom-scripts')
{{-- {!! Html::script('/assets/js/dashboard.js') !!} --}}
{{-- {!! Html::script('/assets/js/chart.js') !!} --}}
{!! Html::script('/assets/js/chart-dashboard.js') !!}
{!! Html::script('/assets/js/chart-juragan.js') !!}
{!! Html::script('/assets/js/chart-produk.js') !!}
{!! Html::script('/assets/js/chart-jawara.js') !!}
@endpush
