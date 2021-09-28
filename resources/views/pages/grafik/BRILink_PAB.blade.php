@extends('layouts.master')

@push('plugin-styles')
<!-- {!! Html::style('/assets/plugins/plugin.css') !!} -->
@endpush

@section('content')
<div class="row">
    <div class="col">
        <h1 class="text-primary"><b>BRILink PAB</b></h1>
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
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="d-sm-flex justify-content-between align-items-center mb-4">
                    <h2 class="card-title mb-0">Ranking PAB</h2>
                    <div class="wrapper d-flex">
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table" id="dtBasicExample">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Presentase</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Marsela Me</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 99%"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </td>
                                <td>112.66</td>
                                <td>
                                    <div>
                                        <button type="button" class="btn btn-icons btn-rounded btn-primary"><i
                                                class="mdi mdi-eye"></i></button>
                                        <button type="button" class="btn btn-icons btn-rounded btn-success"><i
                                                class="mdi mdi-email"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Rio Pratam</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 99%"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </td>
                                <td>112.66</td>
                                <td>
                                    <div>
                                        <button type="button" class="btn btn-icons btn-rounded btn-primary"><i
                                                class="mdi mdi-eye"></i></button>
                                        <button type="button" class="btn btn-icons btn-rounded btn-success"><i
                                                class="mdi mdi-email"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Fandi Joha</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 99%"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </td>
                                <td>112.66</td>
                                <td>
                                    <div>
                                        <button type="button" class="btn btn-icons btn-rounded btn-primary"><i
                                                class="mdi mdi-eye"></i></button>
                                        <button type="button" class="btn btn-icons btn-rounded btn-success"><i
                                                class="mdi mdi-email"></i></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="row">
                    <div class="col-sm-7">
                        <div class="dataTables_info" id="table1_info" role="status" aria-live="polite">Showing 1
                            to 5 of 5 entries</div>
                    </div>
                    <div class="col-sm-5">
                        <div class="dataTables_paginate paging_simple_numbers" id="table1_paginate">
                            <ul class="pagination">
                                <li class="paginate_button previous disabled" id="table1_previous"><a href="#"
                                        aria-controls="table1" data-dt-idx="0" tabindex="0">Previous</a></li>
                                <li class="paginate_button active"><a href="#" aria-controls="table1" data-dt-idx="1"
                                        tabindex="0">1</a></li>
                                <li class="paginate_button next disabled" id="table1_next"><a href="#"
                                        aria-controls="table1" data-dt-idx="2" tabindex="0">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="card">
                    <div class="p-4 border-bottom bg-light">
                        <h4 class="card-title mb-0">Pencapaian Masing-Masing Item Marsela (%)</h4>
                    </div>
                    <div class="card-body">
                        <div class="chart-container">
                            <canvas id="pencapaianKcChart" style="height:250px"></canvas>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <br>
                <div class="row">
                    <div class="col-lg-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="p-4 pr-5 border-bottom bg-light d-sm-flex justify-content-between">
                                <h4 class="card-title mb-0">Agent Juragan</h4>
                            </div>
                            <div class="card-body d-flex flex-column">
                                <canvas class="my-auto" id="juraganChart" height="225"></canvas>
                                <div class="d-flex mt-5 py-3 border-top">
                                    <p class="mb-0 font-weight-semibold"><span class="dot-indicator bg-success"></span>
                                        Pencapaian </p>
                                    <p class="mb-0 ml-auto text-primary">$2,464</p>
                                </div>
                                <div class="d-flex py-3  border-top">
                                    <p class="mb-0 font-weight-semibold"><span
                                            class="dot-indicator bg-success"></span>Total </p>
                                    <p class="mb-0 ml-auto text-primary">$1,325</p>
                                </div>
                                <div class="d-flex pt-3 border-top">
                                    <p class="mb-0 font-weight-semibold"><span class="dot-indicator bg-success"></span>
                                        Rasio </p>
                                    <p class="mb-0 ml-auto text-primary">$2,464</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="p-4 pr-5 border-bottom bg-light d-sm-flex justify-content-between">
                                <h4 class="card-title mb-0">Agent Jawara</h4>
                            </div>
                            <div class="card-body d-flex flex-column">
                                <canvas class="my-auto" id="jawaraChart" height="200"></canvas>
                                <div class="d-flex mt-5 py-3 border-top">
                                    <p class="mb-0 font-weight-semibold"><span class="dot-indicator bg-success"></span>
                                        Pencapaian </p>
                                    <p class="mb-0 ml-auto text-primary">$2,464</p>
                                </div>
                                <div class="d-flex py-3  border-top">
                                    <p class="mb-0 font-weight-semibold"><span
                                            class="dot-indicator bg-success"></span>Total </p>
                                    <p class="mb-0 ml-auto text-primary">$1,325</p>
                                </div>
                                <div class="d-flex pt-3 border-top">
                                    <p class="mb-0 font-weight-semibold"><span class="dot-indicator bg-success"></span>
                                        Rasio </p>
                                    <p class="mb-0 ml-auto text-primary">$2,464</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <br>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="p-4 border-bottom bg-light">
                                <h4 class="card-title mb-0">Time Series Ranking Cabang KC Marsela</h4>
                            </div>
                            <div class="card-body">
                                <canvas id="lineChart" style="height:250px"></canvas>
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
{!! Html::script('/assets/js/dashboard.js') !!}
{!! Html::script('/assets/js/chart.js') !!}
{!! Html::script('/assets/js/chart-dashboard.js') !!}
{!! Html::script('/assets/js/chart-juragan.js') !!}
{!! Html::script('/assets/js/chart-produk.js') !!}
{!! Html::script('/assets/js/chart-jawara.js') !!}
{!! Html::script('/assets/js/chart-pencapaian-kc.js') !!}
@endpush
