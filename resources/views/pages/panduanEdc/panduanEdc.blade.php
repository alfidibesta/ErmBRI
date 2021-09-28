@extends('layouts.master')

@push('plugin-styles')
<!-- {!! Html::style('/assets/plugins/plugin.css') !!} -->
@endpush

@section('content')
<div class="row">
    <div class="col-md-12 col-xl-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Versi EDC Terbaru</h2>
                <hr>
                <div class="box-body table-responsive-sm">
                    <table class="table table-bordered table-striped">
                        <thead class="table-info">
                            <tr>
                                <th>#</th>
                                <th>Merchant</th>
                                <th>BRILink</th>
                                <th>UKO</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>Ingenico ICT/IWL 220/250</th>
                                <td><a
                                        href="http://kanwilmalang.com:81/erm/assets/document/injek/telium_merchant.rar">M2017.1.7.1.2</a>
                                </td>
                                <td><a
                                        href="http://kanwilmalang.com:81/erm/assets/document/injek/TELIUM_brilink.rar">B2017.1.7.2.2</a>
                                </td>
                                <td><a
                                        href="http://kanwilmalang.com:81/erm/assets/document/injek/TELIUM_uko.rar">V2016.1.6.5.2</a>
                                </td>
                            </tr>
                            <tr>
                                <th>Ingenico Move2500</th>
                                <td><a></a><a
                                        href="http://kanwilmalang.com:81/erm/assets/document/injek/app Merchant.rar">M2017.1.7.1.8</a>
                                </td>
                                <td><a
                                        href="http://kanwilmalang.com:81/erm/assets/document/injek/app Brilink.rar">B2017.1.7.2.8</a>
                                </td>
                                <td><a>Download</a></td>
                            </tr>
                            <tr>
                                <th>PAX</th>
                                <td><a
                                        href="http://kanwilmalang.com:81/erm/assets/document/injek/M2019.1.0.0.4.pck">M2019.1.0.0.4</a>
                                </td>
                                <td><a href="http://kanwilmalang.com:81/erm/assets/document/injek/B2017.1.7.2.4.pck">B2017
                                        1.7.2.4</a></td>
                                <td><a>Download</a></td>
                            </tr>
                            <tr>
                                <th>Verifone C680</th>
                                <td><a
                                        href="http://kanwilmalang.com:81/erm/assets/document/injek/C680M2019.1.0.0.1.zip">M2019.1.0.0.1</a>
                                </td>
                                <td><a
                                        href="http://kanwilmalang.com:81/erm/assets/document/injek/c680B2017.1.7.2.1.zip">B2017.1.7.2.1</a>
                                </td>
                                <td><a
                                        href="http://kanwilmalang.com:81/erm/assets/document/injek/V2017.1.6.6.1.zip">V2017.1.6.6.1</a>
                                </td>
                            </tr>
                            <tr>
                                <th>Verifone VX675</th>
                                <td><a
                                        href="http://kanwilmalang.com:81/erm/assets/document/injek/vx675m2019.1.0.0.1.zip">M2019.1.0.0.1</a>
                                </td>
                                <td><a>Download</a></td>
                                <td><a>Download</a></td>
                            </tr>
                            <tr>
                                <th>Verifone VX520</th>
                                <td><a
                                        href="http://kanwilmalang.com:81/erm/assets/document/injek/vx520M2019.1.0.0.1.zip">M2019.1.0.0.1</a>
                                </td>
                                <td><a
                                        href="http://kanwilmalang.com:81/erm/assets/document/injek/vx520B2017.1.7.2.1.zip">B2017.1.7.2.1</a>
                                </td>
                                <td><a>Download</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-xl-4 grid-margin stretch-card">
        <div class="row flex-grow">
            <div class="col-md-6 col-xl-12 grid-margin grid-margin-md-0 grid-margin-xl stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="card-title">Setting APN Jarkom GPRS</h2>
                                <hr>
                            </div>
                            <div class="col-md-12" style="font-size: 10pt">
                                <ul class="list-ticked">
                                    <li>Telkomsel : m2medcbri</li>
                                    <li>Indosat : edcbri.isat</li>
                                    <li>XL : briedc.xl</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="card-title">Lain-lain</h2>
                                <hr>
                            </div>
                            <div class="col-md-12" style="font-size: 10pt">
                                <ul class="list-ticked">
                                    <li>Password Tamper EDC PAX : 997648</li>
                                    <li>Set Masterkey EDC VX520 : 1234567890ABCDEF</li>
                                    <li>Cetak SN EDC Move 2500 : Func69 => password func2</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title mb-4">Mekanisme Handling Komplin EDC Merchant</h2>
                <hr>
                <div class="fluid-container">
                    <ul>
                        <li>Untuk permasalahan <b>_Trx Kartu Kredit BRI dan Kartu Bank Lain_</b> , Bpk/Ibu bisa
                            menginput komplain tsb melalui _input trouble ticket CM di Aplikasi MMS_ dengan memilih
                            jenis masalah <b>TRANSAKSI KK BRI/KARTU BANK LAIN</b> dengan 3 tipe permasalahan :</li>
                        <ul>
                            <li>pilih <b>DOUBLE POSTING</b> utk trx gagal di EDC namun Cardholder terdebet (agar saat
                                input ticket lampirkan dokumen pendukund dan informasi data tgl trx, nominal trx, no
                                kartu dan informasi kesediaan merchant utk didebet kembali apabila trx gagal tsb
                                terbayar ke merchant agar proses lebih cepat)</li>
                            <li>pilih <b>GAGAL SETTLEMENT</b> utk trx yang belum terbayar namun sdh dilakukan settlement
                                (lampirkan bukti settlement/sales draft trx yg blm terbayar) atau belum dilakukan
                                settlement namun EDC error (agar diinformasikan data tgl trx, nominal trx dan no kartu
                                serta lampirkan bukti clear batch/sales draft)</li>
                            <li>pilih <b>REFUND</b> utk merchant yang mengajukan refund full/sebagian. *bukan trx gagal
                                namun terdebet (misal : Cardholder dtg kembali ke merchant utk mnt refund atas pmbelian
                                tiket pesawat, krn tdk jadi brangkat, atau merchant mnt refund ke merchant krn barang
                                tidak sesuai). Informasikan data nominal trx, tgl trx dan no kartu, kesediaan merchant
                                utk didebet kembali dan lampirkan sales draft</li>
                        </ul>
                        <li>Untk permasalahan <b>_Trx Kartu debit BRI_</b> Bpk/Ibu bisa mengirimkan email ke
                            admin.edc@corp.bri.co.id dengan tipe permasalahan :</li>
                        <ul>
                            <li><b>kurang bayar trx debit bri</b> (lampirkan sales draft)</li>
                            <li><b>trx gagal namun Cardholder terdebet</b> (informasikan data nominal trx, tgl trx, mid
                                tid, no kartu dan kesediaan merchant utk didebet bila trx tsb sdh terbayar ke merchant)
                            </li>
                        </ul>
                        <li>Untuk Merchant / Kasir / SPV Kasir bisa menghubungi call center 1500274 untuk Permasalahan
                            meliputi :</li>
                        <ul>
                            <li>Cek status trx bila struk tidak keluari</li>
                            <li>Komplain trkait trx kartu BRI / kartu bank lain</li>
                            <li>Permintaan kunjungan teknisi</li>
                            <li>Permintaan roll paper</li>
                        </ul>
                        <li>Untuk permasalahan <b>_Trx Kartu BRIZZI_</b>, Bpk/Ibu dapat mengirimkan email ke
                            merchantops.sto@corp.bri.co.id dengan melampirkan sales draft &amp; bukti settlement</li>
                    </ul>
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
@endpush
