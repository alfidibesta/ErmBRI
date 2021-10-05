@extends('layouts.master')

@push('plugin-styles')
{!! Html::style('/assets/plugins/plugin.css') !!}
{!! Html::style('/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') !!}
{!! Html::style('/assets/datatables-responsive/css/responsive.bootstrap4.min.css') !!}
{!! Html::style('/assets/datatables-buttons/css/buttons.bootstrap4.min.css') !!}
@endpush

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="col">
            <h1 class="text-primary"><b>Cek Kode Eror</b></h1>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="box-body table-responsive">
                        <table id="mentoring2" class="table table-striped table-hover table-condensed dataTable no-footer"
                            role="grid" aria-describedby="example1_info" style="width: 984px;">
                            <thead class="table-info">
                                <tr role="row">
                                    <th>No</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" style="width: 48px;" aria-sort="ascending"
                                        aria-label="Kode Error: activate to sort column descending">Kode
                                        Error</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        style="width: 144px;"
                                        aria-label="Keterangan: activate to sort column ascending">
                                        Keterangan</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        style="width: 76px;"
                                        aria-label="Jenis Transaksi: activate to sort column ascending">
                                        Jenis Transaksi</th>
                                    <th class="sorting"
                                        aria-label="Yang Harus Dilakukan: activate to sort column ascending">
                                        Yang Harus Dilakukan</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($KodeEror as $p)
                                <tr role="row" class="even">
                                    <td style="word-wrap: break-word;">{{ $p->idKode }}</td>
                                    <td style="word-wrap: break-word;">{{ $p->kodeEror }}</td>
                                    <td style="word-wrap: break-word;">{{ $p->keterangan }}</td>
                                    <td style="word-wrap: break-word;">{{ $p->jenisTransaksi }}</td>
                                    <td style="word-wrap: break-word;">{{ $p->tindakan }}</td>
                                </tr>
                            @endforeach
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
