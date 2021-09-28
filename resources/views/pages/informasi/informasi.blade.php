@extends('layout.master')

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
            <h1 class="text-primary"><b>Monitoring BRILink KC</b></h1>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="box-body table-responsive">
                        <table id="mentoring2" class="table table-striped table-hover table-condensed" role="grid">
                            <thead class="table-info">
                                <tr role="row">
                                    <th>No</th>
                                    <th>Informasi</th>
                                    <th>Dokumen</th>
                                    <th>Ket</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr role="row" class="odd">
                                    <td>1</td>
                                    <td>Panduan Penggunaan EDC UKO VERIFONE(VX520_VX675_C680)</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/assets/document/informasi/Panduan_Penggunaan_EDC_UKO(VX520_VX675_C680).pdf">Download</a>
                                    </td>
                                    <td class="sorting_1">2021-01-12 16:05:55</td>
                                </tr>
                                <tr role="row" class="even">
                                    <td>2</td>
                                    <td>Panduan Penggunaan EDC UKO PAX(S900)</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/assets/document/informasi/Panduan_Penggunaan_EDC_UKO_PAX(S900).pdf">Download</a>
                                    </td>
                                    <td class="sorting_1">2021-01-12 16:02:40</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td>3</td>
                                    <td>Panduan Penggunaan EDC UKO INGENICO( ICT220_IWL220)</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/assets/document/informasi/Panduan_Penggunaan_EDC_UKO(_ICT220_IWL220).pdf">Download</a>
                                    </td>
                                    <td class="sorting_1">2021-01-12 15:57:59</td>
                                </tr>
                                <tr role="row" class="even">
                                    <td>4</td>
                                    <td>Panduan Penggunaan EDC BRILink PAX(S900_D210)</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/assets/document/informasi/Panduan_Penggunaan_EDC_BRILink_PAX(S900_D210).pdf">Download</a>
                                    </td>
                                    <td class="sorting_1">2021-01-12 15:52:49</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td>5</td>
                                    <td>Panduan Penggunaan EDC BRILink VERIFONE(C680_VX520)</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/assets/document/informasi/Panduan_Penggunaan_EDC_BRILink_VERIFONE(C680_VX520).pdf">Download</a>
                                    </td>
                                    <td class="sorting_1">2021-01-12 15:48:04</td>
                                </tr>
                                <tr role="row" class="even">
                                    <td>6</td>
                                    <td>Panduan Penggunaan EDC BRILink INGENICO( ICT220_IWL220_MOVE2500)</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/assets/document/informasi/Panduan_Penggunaan_EDC_BRILink_INGENICO(_ICT220_IWL220_MOVE2500).pdf">Download</a>
                                    </td>
                                    <td class="sorting_1">2021-01-12 15:43:43</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td>7</td>
                                    <td>Panduan Penggunaan EDC Merchant VERIFONE(C680_VX520_VX675)</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/assets/document/informasi/Panduan_Penggunaan_EDC_Merchant_VERIFONE(C680_VX520_VX675).pdf">Download</a>
                                    </td>
                                    <td class="sorting_1">2021-01-12 15:35:47</td>
                                </tr>
                                <tr role="row" class="even">
                                    <td>8</td>
                                    <td>Panduan Penggunaan EDC Merchant PAX(S800_S900_D210)</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/assets/document/informasi/Panduan_Penggunaan_EDC_PAX(S800_S900_D210).pdf">Download</a>
                                    </td>
                                    <td class="sorting_1">2021-01-12 15:32:27</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td>9</td>
                                    <td>Panduan Penggunaan EDC Merchant Ingenico(ICT220_IWL220_MOVE2500)</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/assets/document/informasi/Panduan_Penggunaan_EDC_Merchant_Ingenico(ICT220_IWL220_MOVE2500).pdf">Download</a>
                                    </td>
                                    <td class="sorting_1">2021-01-12 15:28:45</td>
                                </tr>
                                <tr role="row" class="even">
                                    <td>10</td>
                                    <td>Panduan Back Date Aktivasi Brizzi</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/assets/document/informasi/Panduan_Back_Date_Aktivasi_Brizzi.pdf">Download</a>
                                    </td>
                                    <td class="sorting_1">2020-12-17 12:21:08</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td>11</td>
                                    <td>Panduan Penggunaan EDC VX675</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/assets/document/informasi/Panduan_Penggunaan_EDC_VX675.pdf">Download</a>
                                    </td>
                                    <td class="sorting_1">2020-12-17 12:19:56</td>
                                </tr>
                                <tr role="row" class="even">
                                    <td>12</td>
                                    <td>Panduan Penggunaan EDC VERIFONE C680</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/assets/document/informasi/Panduan_Penggunaan_EDC_VERIFONE_C680.pdf">Download</a>
                                    </td>
                                    <td class="sorting_1">2020-12-17 12:19:42</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td>13</td>
                                    <td>Panduan Penggunaan EDC PAX</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/assets/document/informasi/Panduan_Penggunaan_EDC_PAX.pdf">Download</a>
                                    </td>
                                    <td class="sorting_1">2020-12-17 12:19:28</td>
                                </tr>
                                <tr role="row" class="even">
                                    <td>14</td>
                                    <td>Panduan Penggunaan EDC Ingenico</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/assets/document/informasi/Panduan_Penggunaan_EDC_Ingenico.pdf">Download</a>
                                    </td>
                                    <td class="sorting_1">2020-12-17 12:18:03</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td>15</td>
                                    <td>Cara Pembayaran PDAM di EDC BRILink</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/assets/document/informasi/Cara_Pembayaran_PDAM_di_EDC_BRILink_update.pdf">Download</a>
                                    </td>
                                    <td class="sorting_1">2020-10-15 14:11:14</td>
                                </tr>
                                <tr role="row" class="even">
                                    <td>16</td>
                                    <td>SE Pengelolaan Prangkat EDC</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/assets/document/informasi/SE_Pengelolaan_EDC_S_07_DIR_ECH_01_2020.pdf">Download</a>
                                    </td>
                                    <td class="sorting_1">2020-10-14 10:51:08</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td>17</td>
                                    <td>User Guide Link Aja di EDC BRI</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/assets/document/informasi/User_Guide_Link_Aja_EDC_BRI.pdf">Download</a>
                                    </td>
                                    <td class="sorting_1">2020-10-14 10:48:33</td>
                                </tr>
                                <tr role="row" class="even">
                                    <td>18</td>
                                    <td>Mekanisme Komplain TOP UP dan CARD Replace BRIZZI</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/assets/document/informasi/Mekanisme_Komplain_Top_Up_dan_Card_Replace_BRIZZI.pdf">Download</a>
                                    </td>
                                    <td class="sorting_1">2020-10-14 10:47:57</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td>19</td>
                                    <td>Mekanisme Pengalihan EDC Kerjasama Program Pemerintah pada EDC Pro</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/assets/document/informasi/Mekanisme_Pengalihan_EDC_Kerjasama_Program_Pemerintah_pada_EDC_Pro.pdf">Download</a>
                                    </td>
                                    <td class="sorting_1">2020-10-14 10:47:01</td>
                                </tr>
                                <tr role="row" class="even">
                                    <td>20</td>
                                    <td>B.216 Kegiatan Preventive Maintenance (PM) Corrective Maintenance (CM)
                                        Electronic Data Capture (EDC)</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/assets/document/informasi/B.216_Kegiatan_Preventive_Maintenance_(PM)__Corrective_Maintenance_(CM)_Electronic_Data_Capture_(EDC">Download</a>
                                    </td>
                                    <td class="sorting_1">2020-10-14 10:41:32</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td>21</td>
                                    <td>Format Berita Acara Serah Terima (BA Pemasangan) EDC</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/assets/document/informasi/ba_.pdf">Download</a>
                                    </td>
                                    <td class="sorting_1">2020-10-14 10:29:57</td>
                                </tr>
                                <tr role="row" class="even">
                                    <td>22</td>
                                    <td>Tatacara Upload BA Pemasangan EDC Brilinks dan Merchant</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/assets/document/informasi/Tatacara_Upload_BA_Pemasangan_EDC_Brilinks_dan_Mer.doc">Download</a>
                                    </td>
                                    <td class="sorting_1">2020-10-14 10:27:47</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td>23</td>
                                    <td>Tatacara Create Tiket Replace Via MMS Petugas IT</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/assets/document/informasi/Tatacara_Create_Tiket_Replace_Via_MMS_Petugas_IT.docx">Download</a>
                                    </td>
                                    <td class="sorting_1">2020-10-14 10:24:35</td>
                                </tr>
                                <tr role="row" class="even">
                                    <td>24</td>
                                    <td>Tatacara Tindak Lanjut Ticket Replace Via MMS Petugas IT</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/assets/document/informasi/Tatacara_Tindak_Lanjut_Ticket_Replace_Via_MMS_Petu.doc">Download</a>
                                    </td>
                                    <td class="sorting_1">2020-10-14 10:17:56</td>
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