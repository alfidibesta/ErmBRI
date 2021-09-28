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
            <h1 class="text-primary"><b>Tracking EDC</b></h1>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <img src="/assets/images/tracking_picture.jpg" class="img-fluid rounded"
                            style="width: 500px;">
                    </div>
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="input-group mb-4">
                                <input type="text" class="form-control" placeholder="Recipient's username"
                                    aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-primary" type="button" id="button-addon2"><i
                                        class="mdi mdi-account-search-outline"> Search</i></button>
                            </div>
                        </div>
                        <div class="col-md-10 offset-md-1 text-center">
                            <p>Layanan ini digunakan untuk mengetahui status / posisi edc yang sedang dalam proses
                                perbaikan / replacement di Kanwil Malang.</p>
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
