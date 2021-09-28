@extends('layouts.master')

@push('plugin-styles')
    {!! Html::style('/assets/plugins/plugin.css') !!}
    {!! Html::script('/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.css') !!}
    @push('custom-scripts')
        <!-- {!! Html::style('/assets/css/daterangepicker.css') !!} -->
    @endpush

@section('content')
    <div class="row">
        <div class="col">
            <h1 class="text-primary"><b>Dashboard</b></h1>
        </div>
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="row col-auto">
                        <div class="col-md-3 input-grup">
                            <h2 class="card-title mb-0">Uker</h2>
                            <select class="btn btn-primary btn-block" id="inputGroupSelect01" style="font-size: 14px">
                                <option value="0">KANWIL MALANG</option>
                                <option value="44">LUMAJANG</option>
                                <option value="21">JEMBER</option>
                                <option value="45">MADIUN</option>
                                <option value="13">BONDOWOSO</option>
                                <option value="516">KEPANJEN</option>
                                <option value="65">PASURUAN</option>
                                <option value="33">KEDIRI</option>
                                <option value="9">BLITAR</option>
                                <option value="73">PROBOLINGGO</option>
                                <option value="7">BANYUWANGI</option>
                                <option value="56">NGANJUK</option>
                                <option value="429">MALANG SUTOYO</option>
                                <option value="177">TRENGGALEK</option>
                                <option value="57">NGAWI</option>
                                <option value="344">MALANG M.DINATA</option>
                                <option value="110">TULUNGAGUNG</option>
                                <option value="579">SOEKARNO HATTA</option>
                                <option value="577">GENTENG</option>
                                <option value="67">PACITAN</option>
                                <option value="49">MAGETAN</option>
                                <option value="90">SITUBONDO</option>
                                <option value="70">PONOROGO</option>
                                <option value="555">PARE</option>
                                <option value="51">MALANG KAWI</option>
                                <option value="854">KANWIL MALANG</option>
                                <option value="851">KANINS MALANG</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h2 class="card-title mb-0">Time Series Reliability</h2>
                        <div class="wrapper d-flex">
                        </div>
                    </div>
                    <div class="chart-container">
                        <canvas id="dashboard-area-chart" height="80"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row col-auto">
                        <div class="col-md-3 input-grup">
                            <h2 class="card-title mb-0">Tahun</h2>
                            <select class="btn btn-primary btn-block" id="inputGroupSelect01" style="font-size: 14px">
                                <option value="0">2021</option>
                                <option value="44">2020</option>
                                <option value="21">2019</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="d-sm-flex justify-content-between align-items-center pb-4">
                            <div id="stacked-bar-traffic-legend"></div>
                        </div>
                        <canvas id="dasboard-barChart" style="height:250px"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('plugin-scripts')
    {!! Html::script('/assets/plugins/chartjs/chart.min.js') !!}
    {!! Html::script('/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.js') !!}
    {!! Html::script('/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') !!}
@endpush

@push('custom-scripts')
    {!! Html::script('/assets/js/chart-dashboard.js') !!}
    {!! Html::script('/assets/js/moment.min.js') !!}
    {!! Html::script('/assets/js/daterangepicker.js') !!}
    {!! Html::script('/assets/js/jquery.min.js') !!}
@endpush
