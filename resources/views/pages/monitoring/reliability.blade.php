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
            <h1 class="text-primary"><b>Reliabililty</b></h1>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                        <p class="text-muted">Data Tanggal 17-09-2021</p>
                    <hr>
                    <div class="table-responsive">
                        <table id="mentoring" class="table table-striped table-bordered table-condensed">
                            <thead class="table-info">
                                <tr>
                                    <th rowspan="2">No</th>
                                    <th rowspan="2">Nama Kanca</th>
                                    <th colspan="4">Merchant <span style="font-size: 12px; color: green;">(Target :
                                            99.5)</span></th>
                                    <th colspan="4">BRILink <span style="font-size: 12px; color: green;">(Target :
                                            99.75)</span></th>
                                    <th colspan="4">UKO <span style="font-size: 12px; color: green;">(Target :
                                            99.97)</span>
                                    </th>
                                    <th>Ratas</th>
                                </tr>
                                <tr>
                                    <th>4 - 7</th>
                                    <th>NOP ≥ 8 hari</th>
                                    <th>Σ EDC</th>
                                    <th>Reli (%)</th>
                                    <th>4 - 7</th>
                                    <th>NOP ≥ 8 hari</th>
                                    <th>Σ EDC</th>
                                    <th>Reli (%)</th>
                                    <th>4 - 7</th>
                                    <th>NOP ≥ 8 hari</th>
                                    <th>Σ EDC</th>
                                    <th>Reli (%)</th>
                                    <th>Reliability</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><b>1</b></td>
                                    <td style="text-align: left !important;"><a
                                            href="http://kanwilmalang.com:81/erm/reliability/monitor_kc/344/">MALANG
                                            M.DINATA</a></td>

                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/344/4_7/">11</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/344/total/">257</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/344/4_7/">5</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/344/total/">191</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td><a href="http://kanwilmalang.com:81/erm/reliability/detail/uker/344/4_7/">3</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/uker/344/total/">98</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td>100</td>
                                </tr>
                                <tr>
                                    <td><b>2</b></td>
                                    <td style="text-align: left !important;"><a
                                            href="http://kanwilmalang.com:81/erm/reliability/monitor_kc/67/">PACITAN</a>
                                    </td>

                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/67/4_7/">3</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/67/total/">56</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/67/4_7/">4</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/67/total/">146</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td><a href="http://kanwilmalang.com:81/erm/reliability/detail/uker/67/4_7/">1</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/uker/67/total/">62</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td>100</td>
                                </tr>
                                <tr>
                                    <td><b>3</b></td>
                                    <td style="text-align: left !important;"><a
                                            href="http://kanwilmalang.com:81/erm/reliability/monitor_kc/57/">NGAWI</a>
                                    </td>

                                    <td>0</td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/57/total/">40</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/57/4_7/">9</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/57/total/">280</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td><a href="http://kanwilmalang.com:81/erm/reliability/detail/uker/57/4_7/">2</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/uker/57/total/">81</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td>100</td>
                                </tr>
                                <tr>
                                    <td><b>4</b></td>
                                    <td style="text-align: left !important;"><a
                                            href="http://kanwilmalang.com:81/erm/reliability/monitor_kc/44/">LUMAJANG</a>
                                    </td>

                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/44/4_7/">3</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/44/total/">66</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/44/4_7/">6</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/44/total/">185</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td><a href="http://kanwilmalang.com:81/erm/reliability/detail/uker/44/4_7/">4</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/uker/44/total/">88</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td>100</td>
                                </tr>
                                <tr>
                                    <td><b>5</b></td>
                                    <td style="text-align: left !important;"><a
                                            href="http://kanwilmalang.com:81/erm/reliability/monitor_kc/177/">TRENGGALEK</a>
                                    </td>

                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/177/4_7/">3</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/177/total/">32</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/177/4_7/">10</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/177/total/">278</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td><a href="http://kanwilmalang.com:81/erm/reliability/detail/uker/177/4_7/">5</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/uker/177/total/">52</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td>100</td>
                                </tr>
                                <tr>
                                    <td><b>6</b></td>
                                    <td style="text-align: left !important;"><a
                                            href="http://kanwilmalang.com:81/erm/reliability/monitor_kc/33/">KEDIRI</a>
                                    </td>

                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/33/4_7/">17</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/33/total/">254</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/33/4_7/">13</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/33/total/">274</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td>0</td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/uker/33/total/">129</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td>100</td>
                                </tr>
                                <tr>
                                    <td><b>7</b></td>
                                    <td style="text-align: left !important;"><a
                                            href="http://kanwilmalang.com:81/erm/reliability/monitor_kc/49/">MAGETAN</a>
                                    </td>

                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/49/4_7/">7</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/49/total/">77</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/49/4_7/">11</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/49/total/">280</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td><a href="http://kanwilmalang.com:81/erm/reliability/detail/uker/49/4_7/">5</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/uker/49/total/">70</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td>100</td>
                                </tr>
                                <tr>
                                    <td><b>8</b></td>
                                    <td style="text-align: left !important;"><a
                                            href="http://kanwilmalang.com:81/erm/reliability/monitor_kc/7/">BANYUWANGI</a>
                                    </td>

                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/7/nop/">1</a>
                                    </td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/7/total/">96</a>
                                    </td>
                                    <td style="background-color: #ff9;">98.96</td>

                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/7/4_7/">11</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/7/total/">213</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td><a href="http://kanwilmalang.com:81/erm/reliability/detail/uker/7/4_7/">9</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/uker/7/total/">101</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td>99.65</td>
                                </tr>
                                <tr>
                                    <td><b>9</b></td>
                                    <td style="text-align: left !important;"><a
                                            href="http://kanwilmalang.com:81/erm/reliability/monitor_kc/9/">BLITAR</a>
                                    </td>

                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/9/4_7/">8</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/9/total/">91</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/9/4_7/">13</a>
                                    </td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/9/nop/">1</a>
                                    </td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/9/total/">288</a>
                                    </td>
                                    <td style="background-color: #ff9;">99.65</td>

                                    <td><a href="http://kanwilmalang.com:81/erm/reliability/detail/uker/9/4_7/">3</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/uker/9/total/">140</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td>99.88</td>
                                </tr>
                                <tr>
                                    <td><b>10</b></td>
                                    <td style="text-align: left !important;"><a
                                            href="http://kanwilmalang.com:81/erm/reliability/monitor_kc/13/">BONDOWOSO</a>
                                    </td>

                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/13/4_7/">9</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/13/total/">74</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/13/4_7/">15</a>
                                    </td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/13/nop/">3</a>
                                    </td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/13/total/">159</a>
                                    </td>
                                    <td style="background-color: #ff9;">98.11</td>

                                    <td><a href="http://kanwilmalang.com:81/erm/reliability/detail/uker/13/4_7/">6</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/uker/13/total/">57</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td>99.37</td>
                                </tr>
                                <tr>
                                    <td><b>11</b></td>
                                    <td style="text-align: left !important;"><a
                                            href="http://kanwilmalang.com:81/erm/reliability/monitor_kc/21/">JEMBER</a>
                                    </td>

                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/21/4_7/">12</a>
                                    </td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/21/nop/">16</a>
                                    </td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/21/total/">151</a>
                                    </td>
                                    <td style="background-color: #f99;">89.4</td>

                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/21/4_7/">3</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/21/total/">193</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td><a href="http://kanwilmalang.com:81/erm/reliability/detail/uker/21/4_7/">3</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/uker/21/total/">141</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td>96.47</td>
                                </tr>
                                <tr>
                                    <td><b>12</b></td>
                                    <td style="text-align: left !important;"><a
                                            href="http://kanwilmalang.com:81/erm/reliability/monitor_kc/45/">MADIUN</a>
                                    </td>

                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/45/4_7/">14</a>
                                    </td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/45/nop/">3</a>
                                    </td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/45/total/">187</a>
                                    </td>
                                    <td style="background-color: #ff9;">98.4</td>

                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/45/4_7/">9</a>
                                    </td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/45/nop/">2</a>
                                    </td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/45/total/">234</a>
                                    </td>
                                    <td style="background-color: #ff9;">99.15</td>

                                    <td><a href="http://kanwilmalang.com:81/erm/reliability/detail/uker/45/4_7/">7</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/uker/45/total/">152</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td>99.18</td>
                                </tr>
                                <tr>
                                    <td><b>13</b></td>
                                    <td style="text-align: left !important;"><a
                                            href="http://kanwilmalang.com:81/erm/reliability/monitor_kc/51/">MALANG
                                            KAWI</a>
                                    </td>

                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/51/4_7/">39</a>
                                    </td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/51/nop/">6</a>
                                    </td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/51/total/">329</a>
                                    </td>
                                    <td style="background-color: #ff9;">98.18</td>

                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td style="background-color: #f99;">0</td>

                                    <td><a href="http://kanwilmalang.com:81/erm/reliability/detail/uker/51/4_7/">1</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/uker/51/total/">56</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td>99.09</td>
                                </tr>
                                <tr>
                                    <td><b>14</b></td>
                                    <td style="text-align: left !important;"><a
                                            href="http://kanwilmalang.com:81/erm/reliability/monitor_kc/56/">NGANJUK</a>
                                    </td>

                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/56/4_7/">1</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/56/total/">67</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/56/4_7/">18</a>
                                    </td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/56/nop/">1</a>
                                    </td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/56/total/">430</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">99.77</td>

                                    <td><a href="http://kanwilmalang.com:81/erm/reliability/detail/uker/56/4_7/">2</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/uker/56/total/">94</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td>99.92</td>
                                </tr>
                                <tr>
                                    <td><b>15</b></td>
                                    <td style="text-align: left !important;"><a
                                            href="http://kanwilmalang.com:81/erm/reliability/monitor_kc/65/">PASURUAN</a>
                                    </td>

                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/65/4_7/">3</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/65/total/">71</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/65/4_7/">1</a>
                                    </td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/65/nop/">1</a>
                                    </td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/65/total/">164</a>
                                    </td>
                                    <td style="background-color: #ff9;">99.39</td>

                                    <td><a href="http://kanwilmalang.com:81/erm/reliability/detail/uker/65/4_7/">3</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/uker/65/total/">93</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td>99.8</td>
                                </tr>
                                <tr>
                                    <td><b>16</b></td>
                                    <td style="text-align: left !important;"><a
                                            href="http://kanwilmalang.com:81/erm/reliability/monitor_kc/70/">PONOROGO</a>
                                    </td>

                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/70/4_7/">8</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/70/total/">129</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/70/4_7/">22</a>
                                    </td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/70/nop/">1</a>
                                    </td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/70/total/">260</a>
                                    </td>
                                    <td style="background-color: #ff9;">99.62</td>

                                    <td><a href="http://kanwilmalang.com:81/erm/reliability/detail/uker/70/4_7/">4</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/uker/70/total/">79</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td>99.87</td>
                                </tr>
                                <tr>
                                    <td><b>17</b></td>
                                    <td style="text-align: left !important;"><a
                                            href="http://kanwilmalang.com:81/erm/reliability/monitor_kc/73/">PROBOLINGGO</a>
                                    </td>

                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/73/4_7/">5</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/73/total/">62</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/73/4_7/">15</a>
                                    </td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/73/nop/">2</a>
                                    </td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/73/total/">135</a>
                                    </td>
                                    <td style="background-color: #ff9;">98.52</td>

                                    <td><a href="http://kanwilmalang.com:81/erm/reliability/detail/uker/73/4_7/">3</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/uker/73/total/">89</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td>99.51</td>
                                </tr>
                                <tr>
                                    <td><b>18</b></td>
                                    <td style="text-align: left !important;"><a
                                            href="http://kanwilmalang.com:81/erm/reliability/monitor_kc/90/">SITUBONDO</a>
                                    </td>

                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/90/4_7/">17</a>
                                    </td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/90/nop/">3</a>
                                    </td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/90/total/">59</a>
                                    </td>
                                    <td style="background-color: #ff9;">94.92</td>

                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/90/4_7/">2</a>
                                    </td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/90/nop/">2</a>
                                    </td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/90/total/">92</a>
                                    </td>
                                    <td style="background-color: #ff9;">97.83</td>

                                    <td><a href="http://kanwilmalang.com:81/erm/reliability/detail/uker/90/4_7/">1</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/uker/90/total/">58</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td>97.58</td>
                                </tr>
                                <tr>
                                    <td><b>19</b></td>
                                    <td style="text-align: left !important;"><a
                                            href="http://kanwilmalang.com:81/erm/reliability/monitor_kc/110/">TULUNGAGUNG</a>
                                    </td>

                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/110/4_7/">1</a>
                                    </td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/110/nop/">1</a>
                                    </td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/110/total/">108</a>
                                    </td>
                                    <td style="background-color: #ff9;">99.07</td>

                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/110/4_7/">14</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/110/total/">285</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td><a href="http://kanwilmalang.com:81/erm/reliability/detail/uker/110/4_7/">5</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/uker/110/total/">141</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td>99.69</td>
                                </tr>
                                <tr>
                                    <td><b>20</b></td>
                                    <td style="text-align: left !important;"><a
                                            href="http://kanwilmalang.com:81/erm/reliability/monitor_kc/429/">MALANG
                                            SUTOYO</a></td>

                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/429/4_7/">13</a>
                                    </td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/429/nop/">6</a>
                                    </td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/429/total/">195</a>
                                    </td>
                                    <td style="background-color: #ff9;">96.92</td>

                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/429/4_7/">13</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/429/total/">136</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td><a href="http://kanwilmalang.com:81/erm/reliability/detail/uker/429/4_7/">3</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/uker/429/total/">95</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td>98.97</td>
                                </tr>
                                <tr>
                                    <td><b>21</b></td>
                                    <td style="text-align: left !important;"><a
                                            href="http://kanwilmalang.com:81/erm/reliability/monitor_kc/516/">KEPANJEN</a>
                                    </td>

                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/516/4_7/">1</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/516/total/">22</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/516/4_7/">4</a>
                                    </td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/516/nop/">2</a>
                                    </td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/516/total/">151</a>
                                    </td>
                                    <td style="background-color: #ff9;">98.68</td>

                                    <td><a href="http://kanwilmalang.com:81/erm/reliability/detail/uker/516/4_7/">1</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/uker/516/total/">54</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td>99.56</td>
                                </tr>
                                <tr>
                                    <td><b>22</b></td>
                                    <td style="text-align: left !important;"><a
                                            href="http://kanwilmalang.com:81/erm/reliability/monitor_kc/555/">PARE</a>
                                    </td>

                                    <td>0</td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/555/total/">55</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/555/4_7/">8</a>
                                    </td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/555/nop/">1</a>
                                    </td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/555/total/">110</a>
                                    </td>
                                    <td style="background-color: #ff9;">99.09</td>

                                    <td><a href="http://kanwilmalang.com:81/erm/reliability/detail/uker/555/4_7/">1</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/uker/555/total/">37</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td>99.7</td>
                                </tr>
                                <tr>
                                    <td><b>23</b></td>
                                    <td style="text-align: left !important;"><a
                                            href="http://kanwilmalang.com:81/erm/reliability/monitor_kc/577/">GENTENG</a>
                                    </td>

                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/577/4_7/">3</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/577/total/">54</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/577/4_7/">14</a>
                                    </td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/577/nop/">1</a>
                                    </td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/577/total/">143</a>
                                    </td>
                                    <td style="background-color: #ff9;">99.3</td>

                                    <td><a href="http://kanwilmalang.com:81/erm/reliability/detail/uker/577/4_7/">4</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/uker/577/total/">50</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td>99.77</td>
                                </tr>
                                <tr>
                                    <td><b>24</b></td>
                                    <td style="text-align: left !important;"><a
                                            href="http://kanwilmalang.com:81/erm/reliability/monitor_kc/579/">SOEKARNO
                                            HATTA</a></td>

                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/579/4_7/">23</a>
                                    </td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/579/nop/">5</a>
                                    </td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/579/total/">153</a>
                                    </td>
                                    <td style="background-color: #ff9;">96.73</td>

                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/579/4_7/">7</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/579/total/">146</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td><a href="http://kanwilmalang.com:81/erm/reliability/detail/uker/579/4_7/">1</a>
                                    </td>
                                    <td>0</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/uker/579/total/">77</a>
                                    </td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td>98.91</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="2">Total</th>

                                    <th><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/all/4_7/">201</a>
                                    </th>
                                    <th><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/all/nop/">41</a>
                                    </th>
                                    <th><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/merchant/all/total/">2.685</a>
                                    </th>
                                    <th style="background-color: #ff9;">98.47</th>

                                    <th><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/all/4_7/">227</a>
                                    </th>
                                    <th><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/all/nop/">17</a>
                                    </th>
                                    <th><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/brilinks/all/total/">4.773</a>
                                    </th>
                                    <th style="background-color: #ff9">99.64</th>

                                    <th><a href="http://kanwilmalang.com:81/erm/reliability/detail/uker/all/4_7/">77</a>
                                    </th>
                                    <th>0</th>
                                    <th><a
                                            href="http://kanwilmalang.com:81/erm/reliability/detail/uker/all/total/">2.094</a>
                                    </th>
                                    <th style="background-color: #2ED15F">100</th>

                                    <th>99.37</th>
                                </tr>
                            </tfoot>
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
