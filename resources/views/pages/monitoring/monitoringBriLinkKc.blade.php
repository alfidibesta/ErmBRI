@extends('layouts.master')

@push('plugin-styles')
{!! Html::style('/assets/plugins/plugin.css') !!}
{!! Html::style('/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') !!}
{!! Html::style('/assets/datatables-responsive/css/responsive.bootstrap4.min.css') !!}
{!! Html::style('/assets/datatables-buttons/css/buttons.bootstrap4.min.css') !!}
@endpush

@section('content')
{{-- <div class="row">
    <div class="col-md-12 grid-margin">
        <div class="col">
            <h1 class="text-primary"><b>Monitoring BRILink KC</b></h1>
        </div>
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row row-cols-auto">
                        <div class="col">
                            <h2 class="card-title mb-0">Bulan</h2>
                            <div class="dropdown">
                                <button type="button" id="dropdownMenuOutlineButton2" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false"
                                    class="btn btn-primary dropdown-toggle btn-block">Pilih Bulan</button>
                                <div aria-labelledby="dropdownMenuOutlineButton2" class="dropdown-menu" style="">
                                    <a href="#" class="dropdown-item">Agustus</a>
                                    <a href="#" class="dropdown-item">September</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <h2 class="card-title mb-0">Tanggal</h2>
                            <div class="dropdown">
                                <button type="button" id="dropdownMenuOutlineButton2" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false"
                                    class="btn btn-primary dropdown-toggle btn-block">Pilih tanggal</button>
                                <div aria-labelledby="dropdownMenuOutlineButton2" class="dropdown-menu" style="">
                                    <a href="#" class="dropdown-item">12</a>
                                    <a href="#" class="dropdown-item">20</a>
                                </div>
                            </div>
                        </div>
                        <div class="col" style="align-content:left;">
                            <h2 class="card-title mb-0">Cetak Excel</h2>
                            <button class="btn btn-success btn-fw">
                                <i class="mdi mdi-file-excel"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="col">
            <h1 class="text-primary"><b>Monitoring BRILink PAB</b></h1>
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
                        <table id="mentoring" class="table table-bordered table-hover table-striped">
                            <thead class="table-info">
                                <tr>
                                    <th rowspan="2">No</th>
                                    <th rowspan="2">Cabang</th>
                                    <th rowspan="2">Juml. rasio</th>
                                    <th colspan="5">User (10%)</th>
                                    <th colspan="5">Trx (15%)</th>
                                    <th colspan="5">FBI (15%)</th>
                                    <th colspan="5">Casa</th>
                                    <th colspan="4">Agen BEP (10%)</th>
                                    <th colspan="3">Pert. Agen (5%)</th>
                                    <th colspan="5">Bumdes (5%)</th>
                                    <th rowspan="2">Inclusion (5%)</th>
                                    <th colspan="3">Reff. Simp (5%)</th>
                                    <th colspan="3">Reff. Pinj (5%)</th>
                                    <th colspan="2">Act. Mobile (5%)</th>
                                    <th rowspan="2">Act. EDC (5%)</th>
                                    <th rowspan="2">BSS (5%)</th>
                                </tr>
                                <tr>
                                    <th>EDC</th>
                                    <th>WEB</th>
                                    <th>Σ</th>
                                    <th>Target</th>
                                    <th>Rasio(%)</th>

                                    <!-- trx -->
                                    <th>EDC</th>
                                    <th>WEB</th>
                                    <th>Σ Akumulasi</th>
                                    <th>Target</th>
                                    <th>Rasio</th>

                                    <!-- fbi -->
                                    <th>EDC</th>
                                    <th>WEB</th>
                                    <th>Σ Akumulasi</th>
                                    <th>Target</th>
                                    <th>Rasio</th>

                                    <!-- casa -->
                                    <th>EDC</th>
                                    <th>WEB</th>
                                    <th>Σ</th>
                                    <th>Target</th>
                                    <th>Rasio</th>

                                    <!-- agen bep -->
                                    <th>EDC</th>
                                    <th>WEB</th>
                                    <th>Σ</th>
                                    <th>Rasio</th>

                                    <!-- agen bep -->
                                    <th>Juragan</th>
                                    <th>Jawara</th>

                                    <th>Rasio</th>

                                    <th>EDC</th>
                                    <th>WEB</th>
                                    <th>Σ</th>
                                    <th>Target</th>
                                    <th>Rasio</th>

                                    <!-- reff. simp -->
                                    <th>Σ Akumulasi</th>
                                    <th>Target</th>
                                    <th>Rasio</th>

                                    <!-- reff. pinj -->
                                    <th>Σ Akumulasi</th>
                                    <th>Target</th>
                                    <th>Rasio</th>

                                    <!-- activ web -->
                                    <th>Σ</th>
                                    <th>Rasio</th>
                                </tr>
                            </thead>
                            <tbody class="body-main-list">
                                <tr>
                                    <td>1</td>
                                    <td class="text-left">Kediri</td>

                                    <td style="background-color: #2ED15F;">111.08</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/monitorbrilink/det/eyJrb2RlX2thbmNhIjoiMzMiLCJwZXJpb2RlIjoiMjAyMS0wOC0zMSJ9/">325</a>
                                    </td>
                                    <td>5,381</td>
                                    <td>5,706</td>
                                    <td>4,554</td>
                                    <td style="background-color: #2ED15F;">125.3</td>

                                    <!-- trx -->
                                    <td>211,127</td>
                                    <td>254,540</td>
                                    <td>2,565,820</td>
                                    <td>2,465,971</td>
                                    <td style="background-color: #2ED15F;">104.05</td>

                                    <!-- fbi -->
                                    <td>260,144,472</td>
                                    <td>49,688,603</td>
                                    <td>2,180,753,313</td>
                                    <td>1,688,216,954</td>
                                    <td style="background-color: #2ED15F;">129.17</td>

                                    <!-- casa -->
                                    <td>11,235,861,920</td>
                                    <td>116,930,016,421</td>
                                    <td>128,165,878,341</td>
                                    <td>100,882,533,541</td>
                                    <td style="background-color: #2ED15F;">127.04</td>

                                    <!-- agen bep -->
                                    <td>309</td>
                                    <td>1106</td>
                                    <td>1,415</td>
                                    <td style="background-color: #2ED15F">183.05</td>

                                    <!-- pertumbuhan agen -->
                                    <td>16</td>
                                    <td>131</td>
                                    <td style="background-color: #2ED15F;">153.13</td>

                                    <!-- bumdes -->
                                    <td>23</td>
                                    <td>65</td>
                                    <td>88</td>
                                    <td>67</td>
                                    <td style="background-color: #2ED15F;">131.34</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>180</td>
                                    <td>98</td>
                                    <td style="background-color: #2ED15F;">183.67</td>

                                    <!-- reff. pinj -->
                                    <td>1,413</td>
                                    <td>112</td>
                                    <td style="background-color: #2ED15F;">1261.61</td>

                                    <!-- active web -->
                                    <td>5378</td>
                                    <td style="background-color: #ff9;">99.94</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.5</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="text-left">Banyuwangi</td>

                                    <td style="background-color: #2ED15F;">106.27</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/monitorbrilink/det/eyJrb2RlX2thbmNhIjoiNyIsInBlcmlvZGUiOiIyMDIxLTA4LTMxIn0/">294</a>
                                    </td>
                                    <td>1,077</td>
                                    <td>1,371</td>
                                    <td>1,427</td>
                                    <td style="background-color: #ff9;">96.08</td>

                                    <!-- trx -->
                                    <td>263,367</td>
                                    <td>36,188</td>
                                    <td>2,360,576</td>
                                    <td>2,358,541</td>
                                    <td style="background-color: #2ED15F;">100.09</td>

                                    <!-- fbi -->
                                    <td>424,022,455</td>
                                    <td>37,518,536</td>
                                    <td>3,232,071,316</td>
                                    <td>2,551,681,295</td>
                                    <td style="background-color: #2ED15F;">126.66</td>

                                    <!-- casa -->
                                    <td>6,375,635,384</td>
                                    <td>27,513,330,578</td>
                                    <td>33,888,965,962</td>
                                    <td>33,914,615,932</td>
                                    <td style="background-color: #ff9;">99.92</td>

                                    <!-- agen bep -->
                                    <td>251</td>
                                    <td>142</td>
                                    <td>393</td>
                                    <td style="background-color: #2ED15F">162.4</td>

                                    <!-- pertumbuhan agen -->
                                    <td>40</td>
                                    <td>121</td>
                                    <td style="background-color: #2ED15F;">137.61</td>

                                    <!-- bumdes -->
                                    <td>10</td>
                                    <td>17</td>
                                    <td>27</td>
                                    <td>26</td>
                                    <td style="background-color: #2ED15F;">103.85</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>66</td>
                                    <td>44</td>
                                    <td style="background-color: #2ED15F;">150</td>

                                    <!-- reff. pinj -->
                                    <td>924</td>
                                    <td>75</td>
                                    <td style="background-color: #2ED15F;">1232</td>

                                    <!-- active web -->
                                    <td>1016</td>
                                    <td style="background-color: #f99;">94.34</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.9</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="text-left">Tulungagung</td>

                                    <td style="background-color: #2ED15F;">105.99</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/monitorbrilink/det/eyJrb2RlX2thbmNhIjoiMTEwIiwicGVyaW9kZSI6IjIwMjEtMDgtMzEifQ/">334</a>
                                    </td>
                                    <td>1,480</td>
                                    <td>1,814</td>
                                    <td>2,075</td>
                                    <td style="background-color: #f99;">87.42</td>

                                    <!-- trx -->
                                    <td>242,382</td>
                                    <td>18,046</td>
                                    <td>1,912,558</td>
                                    <td>1,848,514</td>
                                    <td style="background-color: #2ED15F;">103.46</td>

                                    <!-- fbi -->
                                    <td>397,453,100</td>
                                    <td>21,106,991</td>
                                    <td>3,076,366,957</td>
                                    <td>2,604,401,167</td>
                                    <td style="background-color: #2ED15F;">118.12</td>

                                    <!-- casa -->
                                    <td>11,676,163,004</td>
                                    <td>57,132,055,559</td>
                                    <td>68,808,218,563</td>
                                    <td>58,851,395,441</td>
                                    <td style="background-color: #2ED15F;">116.92</td>

                                    <!-- agen bep -->
                                    <td>292</td>
                                    <td>109</td>
                                    <td>401</td>
                                    <td style="background-color: #2ED15F">125.31</td>

                                    <!-- pertumbuhan agen -->
                                    <td>32</td>
                                    <td>112</td>
                                    <td style="background-color: #2ED15F;">105.88</td>

                                    <!-- bumdes -->
                                    <td>40</td>
                                    <td>96</td>
                                    <td>136</td>
                                    <td>103</td>
                                    <td style="background-color: #2ED15F;">132.04</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>69</td>
                                    <td>85</td>
                                    <td style="background-color: #f99;">81.18</td>

                                    <!-- reff. pinj -->
                                    <td>251</td>
                                    <td>24</td>
                                    <td style="background-color: #2ED15F;">1045.83</td>

                                    <!-- active web -->
                                    <td>1445</td>
                                    <td style="background-color: #ff9;">97.64</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.91</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="text-left">Pasuruan</td>

                                    <td style="background-color: #2ED15F;">105.98</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/monitorbrilink/det/eyJrb2RlX2thbmNhIjoiNjUiLCJwZXJpb2RlIjoiMjAyMS0wOC0zMSJ9/">193</a>
                                    </td>
                                    <td>1,801</td>
                                    <td>1,994</td>
                                    <td>2,495</td>
                                    <td style="background-color: #f99;">79.92</td>

                                    <!-- trx -->
                                    <td>83,240</td>
                                    <td>64,985</td>
                                    <td>1,196,409</td>
                                    <td>999,655</td>
                                    <td style="background-color: #2ED15F;">119.68</td>

                                    <!-- fbi -->
                                    <td>114,653,457</td>
                                    <td>36,965,429</td>
                                    <td>1,145,988,403</td>
                                    <td>947,971,727</td>
                                    <td style="background-color: #2ED15F;">120.89</td>

                                    <!-- casa -->
                                    <td>2,579,423,815</td>
                                    <td>54,001,919,522</td>
                                    <td>56,581,343,337</td>
                                    <td>61,952,280,434</td>
                                    <td style="background-color: #f99;">91.33</td>

                                    <!-- agen bep -->
                                    <td>186</td>
                                    <td>230</td>
                                    <td>416</td>
                                    <td style="background-color: #2ED15F">107.35</td>

                                    <!-- pertumbuhan agen -->
                                    <td>6</td>
                                    <td>57</td>
                                    <td style="background-color: #2ED15F;">134.04</td>

                                    <!-- bumdes -->
                                    <td>6</td>
                                    <td>23</td>
                                    <td>29</td>
                                    <td>22</td>
                                    <td style="background-color: #2ED15F;">131.82</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>90</td>
                                    <td>62</td>
                                    <td style="background-color: #2ED15F;">145.16</td>

                                    <!-- reff. pinj -->
                                    <td>1,170</td>
                                    <td>19</td>
                                    <td style="background-color: #2ED15F;">6157.89</td>

                                    <!-- active web -->
                                    <td>1758</td>
                                    <td style="background-color: #ff9;">97.61</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.87</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="text-left">Magetan</td>

                                    <td style="background-color: #2ED15F;">105.45</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/monitorbrilink/det/eyJrb2RlX2thbmNhIjoiNDkiLCJwZXJpb2RlIjoiMjAyMS0wOC0zMSJ9/">324</a>
                                    </td>
                                    <td>1,385</td>
                                    <td>1,709</td>
                                    <td>1,652</td>
                                    <td style="background-color: #2ED15F;">103.45</td>

                                    <!-- trx -->
                                    <td>230,995</td>
                                    <td>32,748</td>
                                    <td>2,333,379</td>
                                    <td>2,507,268</td>
                                    <td style="background-color: #f99;">93.06</td>

                                    <!-- fbi -->
                                    <td>377,283,708</td>
                                    <td>26,586,038</td>
                                    <td>2,867,353,223</td>
                                    <td>2,468,359,094</td>
                                    <td style="background-color: #2ED15F;">116.16</td>

                                    <!-- casa -->
                                    <td>8,558,738,005</td>
                                    <td>42,184,902,865</td>
                                    <td>50,743,640,870</td>
                                    <td>32,014,565,115</td>
                                    <td style="background-color: #2ED15F;">158.5</td>

                                    <!-- agen bep -->
                                    <td>304</td>
                                    <td>129</td>
                                    <td>433</td>
                                    <td style="background-color: #2ED15F">140.13</td>

                                    <!-- pertumbuhan agen -->
                                    <td>31</td>
                                    <td>117</td>
                                    <td style="background-color: #2ED15F;">109.63</td>

                                    <!-- bumdes -->
                                    <td>13</td>
                                    <td>49</td>
                                    <td>62</td>
                                    <td>63</td>
                                    <td style="background-color: #ff9;">98.41</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>47</td>
                                    <td>53</td>
                                    <td style="background-color: #f99;">88.68</td>

                                    <!-- reff. pinj -->
                                    <td>692</td>
                                    <td>81</td>
                                    <td style="background-color: #2ED15F;">854.32</td>

                                    <!-- active web -->
                                    <td>1268</td>
                                    <td style="background-color: #f99;">91.55</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.66</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td class="text-left">Blitar</td>

                                    <td style="background-color: #2ED15F;">105.27</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/monitorbrilink/det/eyJrb2RlX2thbmNhIjoiOSIsInBlcmlvZGUiOiIyMDIxLTA4LTMxIn0/">367</a>
                                    </td>
                                    <td>2,006</td>
                                    <td>2,373</td>
                                    <td>2,507</td>
                                    <td style="background-color: #f99;">94.65</td>

                                    <!-- trx -->
                                    <td>218,836</td>
                                    <td>132,747</td>
                                    <td>2,280,917</td>
                                    <td>2,249,559</td>
                                    <td style="background-color: #2ED15F;">101.39</td>

                                    <!-- fbi -->
                                    <td>356,866,886</td>
                                    <td>38,815,392</td>
                                    <td>2,909,083,849</td>
                                    <td>2,406,249,396</td>
                                    <td style="background-color: #2ED15F;">120.9</td>

                                    <!-- casa -->
                                    <td>11,105,950,805</td>
                                    <td>53,000,779,729</td>
                                    <td>64,106,730,534</td>
                                    <td>69,197,181,723</td>
                                    <td style="background-color: #f99;">92.64</td>

                                    <!-- agen bep -->
                                    <td>307</td>
                                    <td>146</td>
                                    <td>453</td>
                                    <td style="background-color: #2ED15F">125.83</td>

                                    <!-- pertumbuhan agen -->
                                    <td>34</td>
                                    <td>102</td>
                                    <td style="background-color: #2ED15F;">125.93</td>

                                    <!-- bumdes -->
                                    <td>20</td>
                                    <td>37</td>
                                    <td>57</td>
                                    <td>55</td>
                                    <td style="background-color: #2ED15F;">103.64</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>89</td>
                                    <td>83</td>
                                    <td style="background-color: #2ED15F;">107.23</td>

                                    <!-- reff. pinj -->
                                    <td>1,855</td>
                                    <td>58</td>
                                    <td style="background-color: #2ED15F;">3198.28</td>

                                    <!-- active web -->
                                    <td>1923</td>
                                    <td style="background-color: #ff9;">95.86</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.91</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td class="text-left">Trenggalek</td>

                                    <td style="background-color: #2ED15F;">105.08</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/monitorbrilink/det/eyJrb2RlX2thbmNhIjoiMTc3IiwicGVyaW9kZSI6IjIwMjEtMDgtMzEifQ/">353</a>
                                    </td>
                                    <td>838</td>
                                    <td>1,191</td>
                                    <td>1,330</td>
                                    <td style="background-color: #f99;">89.55</td>

                                    <!-- trx -->
                                    <td>204,713</td>
                                    <td>18,405</td>
                                    <td>1,728,980</td>
                                    <td>1,616,909</td>
                                    <td style="background-color: #2ED15F;">106.93</td>

                                    <!-- fbi -->
                                    <td>322,341,910</td>
                                    <td>21,783,853</td>
                                    <td>2,681,903,073</td>
                                    <td>2,317,823,870</td>
                                    <td style="background-color: #2ED15F;">115.71</td>

                                    <!-- casa -->
                                    <td>10,417,003,774</td>
                                    <td>25,831,448,744</td>
                                    <td>36,248,452,518</td>
                                    <td>33,225,607,972</td>
                                    <td style="background-color: #2ED15F;">109.1</td>

                                    <!-- agen bep -->
                                    <td>276</td>
                                    <td>98</td>
                                    <td>374</td>
                                    <td style="background-color: #2ED15F">119.87</td>

                                    <!-- pertumbuhan agen -->
                                    <td>30</td>
                                    <td>106</td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <!-- bumdes -->
                                    <td>47</td>
                                    <td>10</td>
                                    <td>57</td>
                                    <td>54</td>
                                    <td style="background-color: #2ED15F;">105.56</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>62</td>
                                    <td>69</td>
                                    <td style="background-color: #f99;">89.86</td>

                                    <!-- reff. pinj -->
                                    <td>379</td>
                                    <td>51</td>
                                    <td style="background-color: #2ED15F;">743.14</td>

                                    <!-- active web -->
                                    <td>699</td>
                                    <td style="background-color: #f99;">83.41</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.72</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td class="text-left">Malang M.dinata</td>

                                    <td style="background-color: #2ED15F;">103.28</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/monitorbrilink/det/eyJrb2RlX2thbmNhIjoiMzQ0IiwicGVyaW9kZSI6IjIwMjEtMDgtMzEifQ/">237</a>
                                    </td>
                                    <td>1,156</td>
                                    <td>1,393</td>
                                    <td>1,726</td>
                                    <td style="background-color: #f99;">80.71</td>

                                    <!-- trx -->
                                    <td>136,453</td>
                                    <td>18,132</td>
                                    <td>1,062,055</td>
                                    <td>1,176,433</td>
                                    <td style="background-color: #f99;">90.28</td>

                                    <!-- fbi -->
                                    <td>231,562,961</td>
                                    <td>8,642,362</td>
                                    <td>1,793,650,717</td>
                                    <td>1,672,401,699</td>
                                    <td style="background-color: #2ED15F;">107.25</td>

                                    <!-- casa -->
                                    <td>7,801,013,718</td>
                                    <td>62,963,267,816</td>
                                    <td>70,764,281,534</td>
                                    <td>56,076,240,642</td>
                                    <td style="background-color: #2ED15F;">126.19</td>

                                    <!-- agen bep -->
                                    <td>213</td>
                                    <td>64</td>
                                    <td>277</td>
                                    <td style="background-color: #2ED15F">133.82</td>

                                    <!-- pertumbuhan agen -->
                                    <td>21</td>
                                    <td>77</td>
                                    <td style="background-color: #2ED15F;">103.16</td>

                                    <!-- bumdes -->
                                    <td>8</td>
                                    <td>10</td>
                                    <td>18</td>
                                    <td>14</td>
                                    <td style="background-color: #2ED15F;">128.57</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>79</td>
                                    <td>47</td>
                                    <td style="background-color: #2ED15F;">168.09</td>

                                    <!-- reff. pinj -->
                                    <td>362</td>
                                    <td>23</td>
                                    <td style="background-color: #2ED15F;">1573.91</td>

                                    <!-- active web -->
                                    <td>1022</td>
                                    <td style="background-color: #f99;">88.41</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.99</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td class="text-left">Soekarno Hatta</td>

                                    <td style="background-color: #2ED15F;">101.75</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/monitorbrilink/det/eyJrb2RlX2thbmNhIjoiNTc5IiwicGVyaW9kZSI6IjIwMjEtMDgtMzEifQ/">214</a>
                                    </td>
                                    <td>1,176</td>
                                    <td>1,390</td>
                                    <td>1,673</td>
                                    <td style="background-color: #f99;">83.08</td>

                                    <!-- trx -->
                                    <td>69,949</td>
                                    <td>87,479</td>
                                    <td>988,301</td>
                                    <td>1,542,368</td>
                                    <td style="background-color: #f99;">64.08</td>

                                    <!-- fbi -->
                                    <td>104,227,365</td>
                                    <td>3,079,170</td>
                                    <td>756,188,174</td>
                                    <td>617,926,673</td>
                                    <td style="background-color: #2ED15F;">122.38</td>

                                    <!-- casa -->
                                    <td>5,361,147,949</td>
                                    <td>75,720,871,474</td>
                                    <td>81,082,019,423</td>
                                    <td>48,347,895,578</td>
                                    <td style="background-color: #2ED15F;">167.71</td>

                                    <!-- agen bep -->
                                    <td>161</td>
                                    <td>51</td>
                                    <td>212</td>
                                    <td style="background-color: #2ED15F">147.22</td>

                                    <!-- pertumbuhan agen -->
                                    <td>4</td>
                                    <td>32</td>
                                    <td style="background-color: #2ED15F;">116.13</td>

                                    <!-- bumdes -->
                                    <td>15</td>
                                    <td>8</td>
                                    <td>23</td>
                                    <td>16</td>
                                    <td style="background-color: #2ED15F;">143.75</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>156</td>
                                    <td>116</td>
                                    <td style="background-color: #2ED15F;">134.48</td>

                                    <!-- reff. pinj -->
                                    <td>200</td>
                                    <td>17</td>
                                    <td style="background-color: #2ED15F;">1176.47</td>

                                    <!-- active web -->
                                    <td>1135</td>
                                    <td style="background-color: #ff9;">96.51</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.99</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td class="text-left">Ponorogo</td>

                                    <td style="background-color: #2ED15F;">101.68</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/monitorbrilink/det/eyJrb2RlX2thbmNhIjoiNzAiLCJwZXJpb2RlIjoiMjAyMS0wOC0zMSJ9/">343</a>
                                    </td>
                                    <td>1,430</td>
                                    <td>1,773</td>
                                    <td>2,185</td>
                                    <td style="background-color: #f99;">81.14</td>

                                    <!-- trx -->
                                    <td>206,470</td>
                                    <td>30,529</td>
                                    <td>1,710,811</td>
                                    <td>1,712,055</td>
                                    <td style="background-color: #ff9;">99.93</td>

                                    <!-- fbi -->
                                    <td>305,978,565</td>
                                    <td>38,909,922</td>
                                    <td>2,516,304,918</td>
                                    <td>2,337,889,811</td>
                                    <td style="background-color: #2ED15F;">107.63</td>

                                    <!-- casa -->
                                    <td>5,678,549,286</td>
                                    <td>43,734,382,523</td>
                                    <td>49,412,931,809</td>
                                    <td>51,191,138,240</td>
                                    <td style="background-color: #ff9;">96.53</td>

                                    <!-- agen bep -->
                                    <td>298</td>
                                    <td>172</td>
                                    <td>470</td>
                                    <td style="background-color: #2ED15F">161.51</td>

                                    <!-- pertumbuhan agen -->
                                    <td>26</td>
                                    <td>111</td>
                                    <td style="background-color: #2ED15F;">111.38</td>

                                    <!-- bumdes -->
                                    <td>19</td>
                                    <td>13</td>
                                    <td>32</td>
                                    <td>31</td>
                                    <td style="background-color: #2ED15F;">103.23</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>74</td>
                                    <td>74</td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <!-- reff. pinj -->
                                    <td>179</td>
                                    <td>19</td>
                                    <td style="background-color: #2ED15F;">942.11</td>

                                    <!-- active web -->
                                    <td>1164</td>
                                    <td style="background-color: #f99;">81.4</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.64</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td class="text-left">Ngawi</td>

                                    <td style="background-color: #2ED15F;">101.27</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/monitorbrilink/det/eyJrb2RlX2thbmNhIjoiNTciLCJwZXJpb2RlIjoiMjAyMS0wOC0zMSJ9/">372</a>
                                    </td>
                                    <td>2,324</td>
                                    <td>2,696</td>
                                    <td>3,128</td>
                                    <td style="background-color: #f99;">86.19</td>

                                    <!-- trx -->
                                    <td>275,952</td>
                                    <td>18,825</td>
                                    <td>2,134,761</td>
                                    <td>2,021,826</td>
                                    <td style="background-color: #2ED15F;">105.59</td>

                                    <!-- fbi -->
                                    <td>448,965,630</td>
                                    <td>25,756,566</td>
                                    <td>3,419,763,927</td>
                                    <td>2,980,280,073</td>
                                    <td style="background-color: #2ED15F;">114.75</td>

                                    <!-- casa -->
                                    <td>10,928,582,473</td>
                                    <td>74,641,486,710</td>
                                    <td>85,570,069,183</td>
                                    <td>84,330,105,732</td>
                                    <td style="background-color: #2ED15F;">101.47</td>

                                    <!-- agen bep -->
                                    <td>331</td>
                                    <td>95</td>
                                    <td>426</td>
                                    <td style="background-color: #f99">86.15</td>

                                    <!-- pertumbuhan agen -->
                                    <td>39</td>
                                    <td>126</td>
                                    <td style="background-color: #2ED15F;">106.45</td>

                                    <!-- bumdes -->
                                    <td>19</td>
                                    <td>6</td>
                                    <td>25</td>
                                    <td>22</td>
                                    <td style="background-color: #2ED15F;">113.64</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>71</td>
                                    <td>93</td>
                                    <td style="background-color: #f99;">76.34</td>

                                    <!-- reff. pinj -->
                                    <td>1,134</td>
                                    <td>76</td>
                                    <td style="background-color: #2ED15F;">1492.11</td>

                                    <!-- active web -->
                                    <td>2098</td>
                                    <td style="background-color: #f99;">90.28</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.96</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td class="text-left">Malang Sutoyo</td>

                                    <td style="background-color: #2ED15F;">100.65</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/monitorbrilink/det/eyJrb2RlX2thbmNhIjoiNDI5IiwicGVyaW9kZSI6IjIwMjEtMDgtMzEifQ/">186</a>
                                    </td>
                                    <td>981</td>
                                    <td>1,167</td>
                                    <td>1,650</td>
                                    <td style="background-color: #f99;">70.73</td>

                                    <!-- trx -->
                                    <td>44,213</td>
                                    <td>183,319</td>
                                    <td>1,989,420</td>
                                    <td>1,167,410</td>
                                    <td style="background-color: #2ED15F;">170.41</td>

                                    <!-- fbi -->
                                    <td>65,586,829</td>
                                    <td>1,240,111</td>
                                    <td>508,040,721</td>
                                    <td>550,971,417</td>
                                    <td style="background-color: #f99;">92.21</td>

                                    <!-- casa -->
                                    <td>2,677,113,458</td>
                                    <td>84,007,590,283</td>
                                    <td>86,684,703,741</td>
                                    <td>81,198,638,495</td>
                                    <td style="background-color: #2ED15F;">106.76</td>

                                    <!-- agen bep -->
                                    <td>128</td>
                                    <td>101</td>
                                    <td>229</td>
                                    <td style="background-color: #ff9">95.82</td>

                                    <!-- pertumbuhan agen -->
                                    <td>0</td>
                                    <td>22</td>
                                    <td style="background-color: #2ED15F;">110</td>

                                    <!-- bumdes -->
                                    <td>13</td>
                                    <td>14</td>
                                    <td>27</td>
                                    <td>22</td>
                                    <td style="background-color: #2ED15F;">122.73</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>71</td>
                                    <td>76</td>
                                    <td style="background-color: #f99;">93.42</td>

                                    <!-- reff. pinj -->
                                    <td>117</td>
                                    <td>18</td>
                                    <td style="background-color: #2ED15F;">650</td>

                                    <!-- active web -->
                                    <td>951</td>
                                    <td style="background-color: #ff9;">96.94</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.47</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td class="text-left">Lumajang</td>

                                    <td style="background-color: #ff9;">99.8</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/monitorbrilink/det/eyJrb2RlX2thbmNhIjoiNDQiLCJwZXJpb2RlIjoiMjAyMS0wOC0zMSJ9/">219</a>
                                    </td>
                                    <td>2,609</td>
                                    <td>2,828</td>
                                    <td>3,576</td>
                                    <td style="background-color: #f99;">79.08</td>

                                    <!-- trx -->
                                    <td>129,175</td>
                                    <td>35,780</td>
                                    <td>1,266,960</td>
                                    <td>1,592,835</td>
                                    <td style="background-color: #f99;">79.54</td>

                                    <!-- fbi -->
                                    <td>195,274,105</td>
                                    <td>30,603,605</td>
                                    <td>1,761,872,765</td>
                                    <td>1,609,470,187</td>
                                    <td style="background-color: #2ED15F;">109.47</td>

                                    <!-- casa -->
                                    <td>5,576,503,510</td>
                                    <td>90,510,587,485</td>
                                    <td>96,087,090,995</td>
                                    <td>76,291,442,863</td>
                                    <td style="background-color: #2ED15F;">125.95</td>

                                    <!-- agen bep -->
                                    <td>191</td>
                                    <td>161</td>
                                    <td>352</td>
                                    <td style="background-color: #f99">86.38</td>

                                    <!-- pertumbuhan agen -->
                                    <td>13</td>
                                    <td>81</td>
                                    <td style="background-color: #2ED15F;">130.56</td>

                                    <!-- bumdes -->
                                    <td>17</td>
                                    <td>20</td>
                                    <td>37</td>
                                    <td>24</td>
                                    <td style="background-color: #2ED15F;">154.17</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>370</td>
                                    <td>324</td>
                                    <td style="background-color: #2ED15F;">114.2</td>

                                    <!-- reff. pinj -->
                                    <td>773</td>
                                    <td>128</td>
                                    <td style="background-color: #2ED15F;">603.91</td>

                                    <!-- active web -->
                                    <td>2451</td>
                                    <td style="background-color: #f99;">93.94</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.89</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td class="text-left">Madiun</td>

                                    <td style="background-color: #ff9;">99.66</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/monitorbrilink/det/eyJrb2RlX2thbmNhIjoiNDUiLCJwZXJpb2RlIjoiMjAyMS0wOC0zMSJ9/">306</a>
                                    </td>
                                    <td>1,361</td>
                                    <td>1,667</td>
                                    <td>2,228</td>
                                    <td style="background-color: #f99;">74.82</td>

                                    <!-- trx -->
                                    <td>192,471</td>
                                    <td>16,583</td>
                                    <td>1,567,031</td>
                                    <td>1,544,086</td>
                                    <td style="background-color: #2ED15F;">101.49</td>

                                    <!-- fbi -->
                                    <td>318,497,510</td>
                                    <td>15,918,977</td>
                                    <td>2,374,725,921</td>
                                    <td>2,025,999,155</td>
                                    <td style="background-color: #2ED15F;">117.21</td>

                                    <!-- casa -->
                                    <td>5,590,460,921</td>
                                    <td>48,601,663,605</td>
                                    <td>54,192,124,526</td>
                                    <td>57,168,284,139</td>
                                    <td style="background-color: #f99;">94.79</td>

                                    <!-- agen bep -->
                                    <td>285</td>
                                    <td>101</td>
                                    <td>386</td>
                                    <td style="background-color: #2ED15F">128.45</td>

                                    <!-- pertumbuhan agen -->
                                    <td>19</td>
                                    <td>99</td>
                                    <td style="background-color: #2ED15F;">112.38</td>

                                    <!-- bumdes -->
                                    <td>10</td>
                                    <td>62</td>
                                    <td>72</td>
                                    <td>66</td>
                                    <td style="background-color: #2ED15F;">109.09</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>37</td>
                                    <td>80</td>
                                    <td style="background-color: #f99;">46.25</td>

                                    <!-- reff. pinj -->
                                    <td>834</td>
                                    <td>34</td>
                                    <td style="background-color: #2ED15F;">2452.94</td>

                                    <!-- active web -->
                                    <td>1054</td>
                                    <td style="background-color: #f99;">77.44</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.32</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td class="text-left">Pare</td>

                                    <td style="background-color: #ff9;">99.52</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/monitorbrilink/det/eyJrb2RlX2thbmNhIjoiNTU1IiwicGVyaW9kZSI6IjIwMjEtMDgtMzEifQ/">156</a>
                                    </td>
                                    <td>550</td>
                                    <td>706</td>
                                    <td>857</td>
                                    <td style="background-color: #f99;">82.38</td>

                                    <!-- trx -->
                                    <td>104,993</td>
                                    <td>3,916</td>
                                    <td>685,770</td>
                                    <td>983,560</td>
                                    <td style="background-color: #f99;">69.72</td>

                                    <!-- fbi -->
                                    <td>180,042,169</td>
                                    <td>4,295,653</td>
                                    <td>1,111,508,158</td>
                                    <td>984,878,680</td>
                                    <td style="background-color: #2ED15F;">112.86</td>

                                    <!-- casa -->
                                    <td>2,870,109,442</td>
                                    <td>23,670,827,370</td>
                                    <td>26,540,936,812</td>
                                    <td>24,832,992,595</td>
                                    <td style="background-color: #2ED15F;">106.88</td>

                                    <!-- agen bep -->
                                    <td>135</td>
                                    <td>25</td>
                                    <td>160</td>
                                    <td style="background-color: #2ED15F">136.75</td>

                                    <!-- pertumbuhan agen -->
                                    <td>11</td>
                                    <td>41</td>
                                    <td style="background-color: #2ED15F;">123.81</td>

                                    <!-- bumdes -->
                                    <td>10</td>
                                    <td>6</td>
                                    <td>16</td>
                                    <td>10</td>
                                    <td style="background-color: #2ED15F;">160</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>30</td>
                                    <td>26</td>
                                    <td style="background-color: #2ED15F;">115.38</td>

                                    <!-- reff. pinj -->
                                    <td>124</td>
                                    <td>15</td>
                                    <td style="background-color: #2ED15F;">826.67</td>

                                    <!-- active web -->
                                    <td>326</td>
                                    <td style="background-color: #f99;">59.27</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.88</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td class="text-left">Kepanjen</td>

                                    <td style="background-color: #ff9;">98.64</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/monitorbrilink/det/eyJrb2RlX2thbmNhIjoiNTE2IiwicGVyaW9kZSI6IjIwMjEtMDgtMzEifQ/">192</a>
                                    </td>
                                    <td>625</td>
                                    <td>817</td>
                                    <td>1,115</td>
                                    <td style="background-color: #f99;">73.27</td>

                                    <!-- trx -->
                                    <td>139,681</td>
                                    <td>8,478</td>
                                    <td>1,199,248</td>
                                    <td>1,262,824</td>
                                    <td style="background-color: #f99;">94.97</td>

                                    <!-- fbi -->
                                    <td>241,041,515</td>
                                    <td>10,381,730</td>
                                    <td>1,963,168,786</td>
                                    <td>1,897,402,779</td>
                                    <td style="background-color: #2ED15F;">103.47</td>

                                    <!-- casa -->
                                    <td>5,706,566,248</td>
                                    <td>11,090,110,711</td>
                                    <td>16,796,676,959</td>
                                    <td>19,108,627,984</td>
                                    <td style="background-color: #f99;">87.9</td>

                                    <!-- agen bep -->
                                    <td>161</td>
                                    <td>47</td>
                                    <td>208</td>
                                    <td style="background-color: #2ED15F">116.2</td>

                                    <!-- pertumbuhan agen -->
                                    <td>19</td>
                                    <td>71</td>
                                    <td style="background-color: #2ED15F;">103.45</td>

                                    <!-- bumdes -->
                                    <td>11</td>
                                    <td>8</td>
                                    <td>19</td>
                                    <td>17</td>
                                    <td style="background-color: #2ED15F;">111.76</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>45</td>
                                    <td>44</td>
                                    <td style="background-color: #2ED15F;">102.27</td>

                                    <!-- reff. pinj -->
                                    <td>503</td>
                                    <td>57</td>
                                    <td style="background-color: #2ED15F;">882.46</td>

                                    <!-- active web -->
                                    <td>487</td>
                                    <td style="background-color: #f99;">77.92</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.76</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td class="text-left">Situbondo</td>

                                    <td style="background-color: #ff9;">97.19</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/monitorbrilink/det/eyJrb2RlX2thbmNhIjoiOTAiLCJwZXJpb2RlIjoiMjAyMS0wOC0zMSJ9/">114</a>
                                    </td>
                                    <td>878</td>
                                    <td>992</td>
                                    <td>1,275</td>
                                    <td style="background-color: #f99;">77.8</td>

                                    <!-- trx -->
                                    <td>81,137</td>
                                    <td>96,671</td>
                                    <td>1,099,552</td>
                                    <td>1,637,502</td>
                                    <td style="background-color: #f99;">67.15</td>

                                    <!-- fbi -->
                                    <td>124,294,843</td>
                                    <td>6,187,254</td>
                                    <td>910,031,550</td>
                                    <td>845,917,222</td>
                                    <td style="background-color: #2ED15F;">107.58</td>

                                    <!-- casa -->
                                    <td>2,833,145,513</td>
                                    <td>33,877,313,619</td>
                                    <td>36,710,459,132</td>
                                    <td>31,745,000,987</td>
                                    <td style="background-color: #2ED15F;">115.64</td>

                                    <!-- agen bep -->
                                    <td>89</td>
                                    <td>143</td>
                                    <td>232</td>
                                    <td style="background-color: #2ED15F">187.85</td>

                                    <!-- pertumbuhan agen -->
                                    <td>7</td>
                                    <td>33</td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <!-- bumdes -->
                                    <td>8</td>
                                    <td>20</td>
                                    <td>28</td>
                                    <td>26</td>
                                    <td style="background-color: #2ED15F;">107.69</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>53</td>
                                    <td>71</td>
                                    <td style="background-color: #f99;">74.65</td>

                                    <!-- reff. pinj -->
                                    <td>321</td>
                                    <td>38</td>
                                    <td style="background-color: #2ED15F;">844.74</td>

                                    <!-- active web -->
                                    <td>805</td>
                                    <td style="background-color: #f99;">91.69</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.98</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td class="text-left">Pacitan</td>

                                    <td style="background-color: #ff9;">96.79</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/monitorbrilink/det/eyJrb2RlX2thbmNhIjoiNjciLCJwZXJpb2RlIjoiMjAyMS0wOC0zMSJ9/">185</a>
                                    </td>
                                    <td>826</td>
                                    <td>1,011</td>
                                    <td>1,571</td>
                                    <td style="background-color: #f99;">64.35</td>

                                    <!-- trx -->
                                    <td>159,748</td>
                                    <td>19,975</td>
                                    <td>1,268,885</td>
                                    <td>1,247,458</td>
                                    <td style="background-color: #2ED15F;">101.72</td>

                                    <!-- fbi -->
                                    <td>211,175,205</td>
                                    <td>22,623,575</td>
                                    <td>1,823,633,583</td>
                                    <td>1,641,656,374</td>
                                    <td style="background-color: #2ED15F;">111.08</td>

                                    <!-- casa -->
                                    <td>5,255,471,163</td>
                                    <td>22,438,156,826</td>
                                    <td>27,693,627,989</td>
                                    <td>37,336,198,043</td>
                                    <td style="background-color: #f99;">74.17</td>

                                    <!-- agen bep -->
                                    <td>173</td>
                                    <td>106</td>
                                    <td>279</td>
                                    <td style="background-color: #2ED15F">135.77</td>

                                    <!-- pertumbuhan agen -->
                                    <td>29</td>
                                    <td>77</td>
                                    <td style="background-color: #2ED15F;">103.92</td>

                                    <!-- bumdes -->
                                    <td>11</td>
                                    <td>5</td>
                                    <td>16</td>
                                    <td>17</td>
                                    <td style="background-color: #f99;">94.12</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>42</td>
                                    <td>50</td>
                                    <td style="background-color: #f99;">84</td>

                                    <!-- reff. pinj -->
                                    <td>790</td>
                                    <td>31</td>
                                    <td style="background-color: #2ED15F;">2548.39</td>

                                    <!-- active web -->
                                    <td>648</td>
                                    <td style="background-color: #f99;">78.45</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.94</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td class="text-left">Jember</td>

                                    <td style="background-color: #ff9;">96.36</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/monitorbrilink/det/eyJrb2RlX2thbmNhIjoiMjEiLCJwZXJpb2RlIjoiMjAyMS0wOC0zMSJ9/">242</a>
                                    </td>
                                    <td>1,967</td>
                                    <td>2,209</td>
                                    <td>2,524</td>
                                    <td style="background-color: #f99;">87.52</td>

                                    <!-- trx -->
                                    <td>151,644</td>
                                    <td>18,023</td>
                                    <td>1,359,560</td>
                                    <td>2,641,564</td>
                                    <td style="background-color: #f99;">51.47</td>

                                    <!-- fbi -->
                                    <td>248,151,777</td>
                                    <td>16,239,009</td>
                                    <td>2,007,287,604</td>
                                    <td>1,946,253,420</td>
                                    <td style="background-color: #2ED15F;">103.14</td>

                                    <!-- casa -->
                                    <td>5,689,606,491</td>
                                    <td>76,876,162,268</td>
                                    <td>82,565,768,759</td>
                                    <td>69,798,488,888</td>
                                    <td style="background-color: #2ED15F;">118.29</td>

                                    <!-- agen bep -->
                                    <td>229</td>
                                    <td>92</td>
                                    <td>321</td>
                                    <td style="background-color: #2ED15F">103.38</td>

                                    <!-- pertumbuhan agen -->
                                    <td>19</td>
                                    <td>71</td>
                                    <td style="background-color: #2ED15F;">109.76</td>

                                    <!-- bumdes -->
                                    <td>8</td>
                                    <td>16</td>
                                    <td>24</td>
                                    <td>23</td>
                                    <td style="background-color: #2ED15F;">104.35</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>107</td>
                                    <td>78</td>
                                    <td style="background-color: #2ED15F;">137.18</td>

                                    <!-- reff. pinj -->
                                    <td>382</td>
                                    <td>78</td>
                                    <td style="background-color: #2ED15F;">489.74</td>

                                    <!-- active web -->
                                    <td>1817</td>
                                    <td style="background-color: #f99;">92.37</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td class="text-left">Nganjuk</td>

                                    <td style="background-color: #f99;">94.91</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/monitorbrilink/det/eyJrb2RlX2thbmNhIjoiNTYiLCJwZXJpb2RlIjoiMjAyMS0wOC0zMSJ9/">568</a>
                                    </td>
                                    <td>3,388</td>
                                    <td>3,956</td>
                                    <td>4,544</td>
                                    <td style="background-color: #f99;">87.06</td>

                                    <!-- trx -->
                                    <td>382,813</td>
                                    <td>15,299</td>
                                    <td>2,994,388</td>
                                    <td>6,703,213</td>
                                    <td style="background-color: #f99;">44.67</td>

                                    <!-- fbi -->
                                    <td>417,797,858</td>
                                    <td>17,505,027</td>
                                    <td>3,031,342,457</td>
                                    <td>2,572,663,446</td>
                                    <td style="background-color: #2ED15F;">117.83</td>

                                    <!-- casa -->
                                    <td>6,580,535,059</td>
                                    <td>100,611,249,893</td>
                                    <td>107,191,784,952</td>
                                    <td>106,203,363,484</td>
                                    <td style="background-color: #2ED15F;">100.93</td>

                                    <!-- agen bep -->
                                    <td>520</td>
                                    <td>105</td>
                                    <td>625</td>
                                    <td style="background-color: #2ED15F">139.04</td>

                                    <!-- pertumbuhan agen -->
                                    <td>33</td>
                                    <td>165</td>
                                    <td style="background-color: #f99;">86.84</td>

                                    <!-- bumdes -->
                                    <td>2</td>
                                    <td>78</td>
                                    <td>80</td>
                                    <td>82</td>
                                    <td style="background-color: #ff9;">97.56</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>162</td>
                                    <td>159</td>
                                    <td style="background-color: #2ED15F;">101.89</td>

                                    <!-- reff. pinj -->
                                    <td>1,432</td>
                                    <td>24</td>
                                    <td style="background-color: #2ED15F;">5966.67</td>

                                    <!-- active web -->
                                    <td>3286</td>
                                    <td style="background-color: #ff9;">96.99</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.99</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td class="text-left">Genteng</td>

                                    <td style="background-color: #f99;">94.32</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/monitorbrilink/det/eyJrb2RlX2thbmNhIjoiNTc3IiwicGVyaW9kZSI6IjIwMjEtMDgtMzEifQ/">178</a>
                                    </td>
                                    <td>511</td>
                                    <td>689</td>
                                    <td>808</td>
                                    <td style="background-color: #f99;">85.27</td>

                                    <!-- trx -->
                                    <td>114,199</td>
                                    <td>11,236</td>
                                    <td>1,026,723</td>
                                    <td>1,786,692</td>
                                    <td style="background-color: #f99;">57.47</td>

                                    <!-- fbi -->
                                    <td>199,719,083</td>
                                    <td>14,506,493</td>
                                    <td>1,567,776,916</td>
                                    <td>1,645,435,567</td>
                                    <td style="background-color: #ff9;">95.28</td>

                                    <!-- casa -->
                                    <td>7,802,147,792</td>
                                    <td>17,599,675,604</td>
                                    <td>25,401,823,396</td>
                                    <td>14,423,326,734</td>
                                    <td style="background-color: #2ED15F;">176.12</td>

                                    <!-- agen bep -->
                                    <td>130</td>
                                    <td>50</td>
                                    <td>180</td>
                                    <td style="background-color: #2ED15F">150.63</td>

                                    <!-- pertumbuhan agen -->
                                    <td>12</td>
                                    <td>55</td>
                                    <td style="background-color: #2ED15F;">103.08</td>

                                    <!-- bumdes -->
                                    <td>14</td>
                                    <td>1</td>
                                    <td>15</td>
                                    <td>14</td>
                                    <td style="background-color: #2ED15F;">107.14</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>24</td>
                                    <td>31</td>
                                    <td style="background-color: #f99;">77.42</td>

                                    <!-- reff. pinj -->
                                    <td>207</td>
                                    <td>14</td>
                                    <td style="background-color: #2ED15F;">1478.57</td>

                                    <!-- active web -->
                                    <td>409</td>
                                    <td style="background-color: #f99;">80.04</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.87</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td class="text-left">Bondowoso</td>

                                    <td style="background-color: #f99;">90.06</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/monitorbrilink/det/eyJrb2RlX2thbmNhIjoiMTMiLCJwZXJpb2RlIjoiMjAyMS0wOC0zMSJ9/">192</a>
                                    </td>
                                    <td>1,418</td>
                                    <td>1,610</td>
                                    <td>1,853</td>
                                    <td style="background-color: #f99;">86.89</td>

                                    <!-- trx -->
                                    <td>101,272</td>
                                    <td>16,227</td>
                                    <td>960,756</td>
                                    <td>1,238,739</td>
                                    <td style="background-color: #f99;">77.56</td>

                                    <!-- fbi -->
                                    <td>66,698,057</td>
                                    <td>4,099,885</td>
                                    <td>573,721,727</td>
                                    <td>684,183,752</td>
                                    <td style="background-color: #f99;">83.85</td>

                                    <!-- casa -->
                                    <td>3,604,908,077</td>
                                    <td>49,960,613,963</td>
                                    <td>53,565,522,040</td>
                                    <td>50,949,428,542</td>
                                    <td style="background-color: #2ED15F;">105.13</td>

                                    <!-- agen bep -->
                                    <td>151</td>
                                    <td>40</td>
                                    <td>191</td>
                                    <td style="background-color: #f99">77.02</td>

                                    <!-- pertumbuhan agen -->
                                    <td>3</td>
                                    <td>29</td>
                                    <td style="background-color: #f99;">74.42</td>

                                    <!-- bumdes -->
                                    <td>8</td>
                                    <td>27</td>
                                    <td>35</td>
                                    <td>34</td>
                                    <td style="background-color: #2ED15F;">102.94</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>112</td>
                                    <td>136</td>
                                    <td style="background-color: #f99;">82.35</td>

                                    <!-- reff. pinj -->
                                    <td>687</td>
                                    <td>9</td>
                                    <td style="background-color: #2ED15F;">7633.33</td>

                                    <!-- active web -->
                                    <td>1269</td>
                                    <td style="background-color: #f99;">89.49</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.59</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td class="text-left">Probolinggo</td>

                                    <td style="background-color: #f99;">88.7</td>
                                    <td><a
                                            href="http://kanwilmalang.com:81/erm/monitorbrilink/det/eyJrb2RlX2thbmNhIjoiNzMiLCJwZXJpb2RlIjoiMjAyMS0wOC0zMSJ9/">173</a>
                                    </td>
                                    <td>1,378</td>
                                    <td>1,551</td>
                                    <td>2,151</td>
                                    <td style="background-color: #f99;">72.11</td>

                                    <!-- trx -->
                                    <td>85,114</td>
                                    <td>12,668</td>
                                    <td>798,642</td>
                                    <td>1,389,094</td>
                                    <td style="background-color: #f99;">57.49</td>

                                    <!-- fbi -->
                                    <td>128,661,667</td>
                                    <td>9,670,437</td>
                                    <td>1,165,136,775</td>
                                    <td>1,327,500,779</td>
                                    <td style="background-color: #f99;">87.77</td>

                                    <!-- casa -->
                                    <td>13,996,231,674</td>
                                    <td>41,572,258,167</td>
                                    <td>55,568,489,841</td>
                                    <td>71,456,781,537</td>
                                    <td style="background-color: #f99;">77.77</td>

                                    <!-- agen bep -->
                                    <td>138</td>
                                    <td>48</td>
                                    <td>186</td>
                                    <td style="background-color: #2ED15F">107.83</td>

                                    <!-- pertumbuhan agen -->
                                    <td>10</td>
                                    <td>48</td>
                                    <td style="background-color: #f99;">82.86</td>

                                    <!-- bumdes -->
                                    <td>12</td>
                                    <td>13</td>
                                    <td>25</td>
                                    <td>22</td>
                                    <td style="background-color: #2ED15F;">113.64</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>71</td>
                                    <td>64</td>
                                    <td style="background-color: #2ED15F;">110.94</td>

                                    <!-- reff. pinj -->
                                    <td>1,838</td>
                                    <td>216</td>
                                    <td style="background-color: #2ED15F;">850.93</td>

                                    <!-- active web -->
                                    <td>1191</td>
                                    <td style="background-color: #f99;">86.43</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">98.99</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
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
