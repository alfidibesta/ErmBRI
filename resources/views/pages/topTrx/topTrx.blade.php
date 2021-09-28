@extends('layouts.master')

@push('plugin-styles')
{!! Html::style('/assets/plugins/plugin.css') !!}
{!! Html::style('/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') !!}
{!! Html::style('/assets/datatables-responsive/css/responsive.bootstrap4.min.css') !!}
{!! Html::style('/assets/datatables-buttons/css/buttons.bootstrap4.min.css') !!}
{!! Html::style('/assets/plugins/bootstrap/css/app.css') !!}
@endpush

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="col">
            <h1 class="text-primary"><b>Top Trx</b></h1>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row col-auto">
                        <div class="col-md-3 input-grup">
                            <h2 class="card-title mb-0">Periode</h2>
                            <select class="btn btn-primary btn-block" id="inputGroupSelect01" style="font-size: 14px">
                                <option value="">Agustus</option>
                                <option value="">September</option>
                                <option value="">Oktober</option>
                                <option value="">November</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="box-body table-responsive">
                        <table id="mentoring" class="table table-striped table-hover table-bordered table-condensed">
                            <thead class="table-info">
                                <tr>
                                    <th rowspan="2">No</th>
                                    <th rowspan="2">Kanca</th>
                                    <th colspan="2">Merchant</th>
                                    <th colspan="2">BRILink</th>
                                </tr>
                                <tr>
                                    <th>Trx</th>
                                    <th>SV</th>
                                    <th>Trx</th>
                                    <th>SV</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Kediri</td>
                                    <td>100</td>
                                    <td>100</td>
                                    <td>100</td>
                                    <td>100</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Kediri</td>
                                    <td>100</td>
                                    <td>100</td>
                                    <td>100</td>
                                    <td>100</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Kediri</td>
                                    <td>100</td>
                                    <td>100</td>
                                    <td>100</td>
                                    <td>100</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Kediri</td>
                                    <td>100</td>
                                    <td>100</td>
                                    <td>100</td>
                                    <td>100</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Kediri</td>
                                    <td>100</td>
                                    <td>100</td>
                                    <td>100</td>
                                    <td>100</td>
                                </tr>
                            </tbody>
                        </table>
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
{!! Html::script('/assets/plugins/datatables/jquery.dataTables.min.js') !!}
{!! Html::script('/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') !!}
{!! Html::script('/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') !!}
{!! Html::script('/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') !!}
{!! Html::script('/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') !!}
{!! Html::script('/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') !!}
{!! Html::script('/assets/plugins/datatables-buttons/js/buttons.html5.min.js') !!}
{!! Html::script('/assets/plugins/datatables-buttons/js/buttons.print.min.js') !!}
{!! Html::script('/assets/plugins/datatables-buttons/js/buttons.colVis.min.js') !!}
@endpush

@push('custom-scripts')
{!! Html::script('/assets/js/data-table.js') !!}
@endpush
