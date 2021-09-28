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
            <h1 class="text-primary"><b>Produktifitas BRILink</b></h1>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row col-auto">
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
                            <h2 class="card-title mb-0">Tanggal</h2>
                            <select class="btn btn-primary btn-block" id="inputGroupSelect01" style="font-size: 14px">
                                <option value="">2</option>
                                <option value="">10</option>
                                <option value="">17</option>
                                <option value="">28</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <h2 class="card-title mb-0">Data Tanggal</h2>
                            <div id="datepicker">
                                <button class="btn btn-primary btn-block">17-09-2021</button>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="box-body table-responsive">
                        <table id="mentoring" class="table table-bordered table-striped table-hover" role="grid"
                            aria-describedby="dt-table_info">
                            <thead class="table-info">
                                <tr role="row">
                                    <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="No">
                                        No
                                    </th>
                                    <th class="text-left sorting_disabled" rowspan="1" colspan="1" aria-label="Kanca">
                                        Kanca
                                    </th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Kelolaan">
                                        Kelolaan
                                    </th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                        aria-label="Produktif (Trx &amp;gt;= 120)">
                                        Produktif
                                        <span style="font-size: 11px;">- (Trx &gt;= 120)</span>
                                    </th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Tidak Produktif">
                                        Tidak Produktif
                                    </th>
                                    <th class="sorting_desc" rowspan="1" colspan="1" style="" aria-label="Rasio (%)">
                                        Rasio (%)
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="body-table">

                                <tr role="row" class="odd">
                                    <td>1</td>
                                    <td class=" text-left">PASURUAN</td>
                                    <td>193</td>
                                    <td>186</td>
                                    <td>7</td>
                                    <td class="sorting_1"><span class="badge bg-yellow">96.37 %</span></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td>2</td>
                                    <td class=" text-left">KEDIRI</td>
                                    <td>325</td>
                                    <td>309</td>
                                    <td>16</td>
                                    <td class="sorting_1"><span class="badge bg-yellow">95.08 %</span></td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td>3</td>
                                    <td class=" text-left">JEMBER</td>
                                    <td>242</td>
                                    <td>229</td>
                                    <td>13</td>
                                    <td class="sorting_1"><span class="badge bg-red">94.63 %</span></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td>4</td>
                                    <td class=" text-left">MAGETAN</td>
                                    <td>324</td>
                                    <td>304</td>
                                    <td>20</td>
                                    <td class="sorting_1"><span class="badge bg-red">93.83 %</span></td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td>5</td>
                                    <td class=" text-left">PACITAN</td>
                                    <td>185</td>
                                    <td>173</td>
                                    <td>12</td>
                                    <td class="sorting_1"><span class="badge bg-red">93.51 %</span></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td>6</td>
                                    <td class=" text-left">MADIUN</td>
                                    <td>306</td>
                                    <td>285</td>
                                    <td>21</td>
                                    <td class="sorting_1"><span class="badge bg-red">93.14 %</span></td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td>7</td>
                                    <td class=" text-left">NGANJUK</td>
                                    <td>568</td>
                                    <td>520</td>
                                    <td>48</td>
                                    <td class="sorting_1"><span class="badge bg-red">91.55 %</span></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td>8</td>
                                    <td class=" text-left">MALANG M.DINATA</td>
                                    <td>237</td>
                                    <td>213</td>
                                    <td>24</td>
                                    <td class="sorting_1"><span class="badge bg-red">89.87 %</span></td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td>9</td>
                                    <td class=" text-left">NGAWI</td>
                                    <td>372</td>
                                    <td>331</td>
                                    <td>41</td>
                                    <td class="sorting_1"><span class="badge bg-red">88.98 %</span></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td>10</td>
                                    <td class=" text-left">TULUNGAGUNG</td>
                                    <td>334</td>
                                    <td>292</td>
                                    <td>42</td>
                                    <td class="sorting_1"><span class="badge bg-red">87.43 %</span></td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td>11</td>
                                    <td class=" text-left">LUMAJANG</td>
                                    <td>219</td>
                                    <td>191</td>
                                    <td>28</td>
                                    <td class="sorting_1"><span class="badge bg-red">87.21 %</span></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td>12</td>
                                    <td class=" text-left">PONOROGO</td>
                                    <td>343</td>
                                    <td>298</td>
                                    <td>45</td>
                                    <td class="sorting_1"><span class="badge bg-red">86.88 %</span></td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td>13</td>
                                    <td class=" text-left">PARE</td>
                                    <td>156</td>
                                    <td>135</td>
                                    <td>21</td>
                                    <td class="sorting_1"><span class="badge bg-red">86.54 %</span></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td>14</td>
                                    <td class=" text-left">BANYUWANGI</td>
                                    <td>294</td>
                                    <td>251</td>
                                    <td>43</td>
                                    <td class="sorting_1"><span class="badge bg-red">85.37 %</span></td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td>15</td>
                                    <td class=" text-left">KEPANJEN</td>
                                    <td>192</td>
                                    <td>161</td>
                                    <td>31</td>
                                    <td class="sorting_1"><span class="badge bg-red">83.85 %</span></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td>16</td>
                                    <td class=" text-left">BLITAR</td>
                                    <td>367</td>
                                    <td>307</td>
                                    <td>60</td>
                                    <td class="sorting_1"><span class="badge bg-red">83.65 %</span></td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td>17</td>
                                    <td class=" text-left">PROBOLINGGO</td>
                                    <td>173</td>
                                    <td>138</td>
                                    <td>35</td>
                                    <td class="sorting_1"><span class="badge bg-red">79.77 %</span></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td>18</td>
                                    <td class=" text-left">BONDOWOSO</td>
                                    <td>192</td>
                                    <td>151</td>
                                    <td>41</td>
                                    <td class="sorting_1"><span class="badge bg-red">78.65 %</span></td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td>19</td>
                                    <td class=" text-left">TRENGGALEK</td>
                                    <td>353</td>
                                    <td>276</td>
                                    <td>77</td>
                                    <td class="sorting_1"><span class="badge bg-red">78.19 %</span></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td>20</td>
                                    <td class=" text-left">SITUBONDO</td>
                                    <td>114</td>
                                    <td>89</td>
                                    <td>25</td>
                                    <td class="sorting_1"><span class="badge bg-red">78.07 %</span></td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td>21</td>
                                    <td class=" text-left">SOEKARNO HATTA</td>
                                    <td>214</td>
                                    <td>161</td>
                                    <td>53</td>
                                    <td class="sorting_1"><span class="badge bg-red">75.23 %</span></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td>22</td>
                                    <td class=" text-left">GENTENG</td>
                                    <td>178</td>
                                    <td>130</td>
                                    <td>48</td>
                                    <td class="sorting_1"><span class="badge bg-red">73.03 %</span></td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td>23</td>
                                    <td class=" text-left">MALANG SUTOYO</td>
                                    <td>186</td>
                                    <td>128</td>
                                    <td>58</td>
                                    <td class="sorting_1"><span class="badge bg-red">68.82 %</span></td>
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
