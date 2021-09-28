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
            <h1 class="text-primary"><b>Monitoring BRILink KC</b></h1>
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
                        <table id="mentoringPab" class="table table-bordered table-hover">
                            <thead class="table-info">
                                <tr>
                                    <th rowspan="2">No</th>
                                    <th rowspan="2">PAB</th>
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
                                    <td class="text-left">[KEDIRI]marsela meilinawati</td>

                                    <td style="background-color: #2ED15F;">112.66</td>
                                    <td>50</td>
                                    <td>804</td>
                                    <td>854</td>
                                    <td>701</td>
                                    <td style="background-color: #2ED15F;">121.83</td>

                                    <!-- trx -->
                                    <td>34,874</td>
                                    <td>41,392</td>
                                    <td>434,865</td>
                                    <td>379,380</td>
                                    <td style="background-color: #2ED15F;">114.63</td>

                                    <!-- fbi -->
                                    <td>46,420,543</td>
                                    <td>8,147,818</td>
                                    <td>379,292,814</td>
                                    <td>301,224,068</td>
                                    <td style="background-color: #2ED15F;">125.92</td>

                                    <!-- casa -->
                                    <td>1,151,013,709</td>
                                    <td>17,366,268,444</td>
                                    <td>18,517,282,153</td>
                                    <td>15,520,389,776</td>
                                    <td style="background-color: #2ED15F;">968.6</td>

                                    <!-- agen bep -->
                                    <td>50</td>
                                    <td>153</td>
                                    <td>203</td>
                                    <td style="background-color: #2ED15F">156.15</td>

                                    <!-- pertumbuhan agen -->
                                    <td>4</td>
                                    <td>25</td>
                                    <td style="background-color: #2ED15F;">207.14</td>

                                    <!-- bumdes -->
                                    <td>4</td>
                                    <td>19</td>
                                    <td>23</td>
                                    <td>10</td>
                                    <td style="background-color: #2ED15F;">230</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>32</td>
                                    <td>14</td>
                                    <td style="background-color: #2ED15F;">228.57</td>

                                    <!-- reff. pinj -->
                                    <td>362</td>
                                    <td>65</td>
                                    <td style="background-color: #2ED15F;">556.92</td>

                                    <!-- active web -->
                                    <td>803</td>
                                    <td style="background-color: #ff9;">99.88</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.5</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="text-left">[KEDIRI]rio pratama sulistyo</td>

                                    <td style="background-color: #2ED15F;">112.46</td>
                                    <td>54</td>
                                    <td>879</td>
                                    <td>933</td>
                                    <td>776</td>
                                    <td style="background-color: #2ED15F;">120.23</td>

                                    <!-- trx -->
                                    <td>43,919</td>
                                    <td>32,665</td>
                                    <td>482,641</td>
                                    <td>420,028</td>
                                    <td style="background-color: #2ED15F;">114.91</td>

                                    <!-- fbi -->
                                    <td>61,701,826</td>
                                    <td>7,964,956</td>
                                    <td>460,074,815</td>
                                    <td>333,498,075</td>
                                    <td style="background-color: #2ED15F;">137.95</td>

                                    <!-- casa -->
                                    <td>2,788,623,819</td>
                                    <td>17,370,457,612</td>
                                    <td>20,159,081,431</td>
                                    <td>17,183,288,680</td>
                                    <td style="background-color: #2ED15F;">897.3</td>

                                    <!-- agen bep -->
                                    <td>51</td>
                                    <td>146</td>
                                    <td>197</td>
                                    <td style="background-color: #2ED15F">136.81</td>

                                    <!-- pertumbuhan agen -->
                                    <td>1</td>
                                    <td>24</td>
                                    <td style="background-color: #2ED15F;">178.57</td>

                                    <!-- bumdes -->
                                    <td>2</td>
                                    <td>9</td>
                                    <td>11</td>
                                    <td>10</td>
                                    <td style="background-color: #2ED15F;">110</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>27</td>
                                    <td>14</td>
                                    <td style="background-color: #2ED15F;">192.86</td>

                                    <!-- reff. pinj -->
                                    <td>146</td>
                                    <td>65</td>
                                    <td style="background-color: #2ED15F;">224.62</td>

                                    <!-- active web -->
                                    <td>879</td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.5</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="text-left">[KEDIRI]fandi johan pratama</td>

                                    <td style="background-color: #2ED15F;">111.8</td>
                                    <td>50</td>
                                    <td>808</td>
                                    <td>858</td>
                                    <td>651</td>
                                    <td style="background-color: #2ED15F;">131.8</td>

                                    <!-- trx -->
                                    <td>29,755</td>
                                    <td>49,394</td>
                                    <td>411,454</td>
                                    <td>352,282</td>
                                    <td style="background-color: #2ED15F;">116.8</td>

                                    <!-- fbi -->
                                    <td>34,009,675</td>
                                    <td>7,977,680</td>
                                    <td>309,095,182</td>
                                    <td>279,708,063</td>
                                    <td style="background-color: #2ED15F;">110.51</td>

                                    <!-- casa -->
                                    <td>690,917,336</td>
                                    <td>18,355,805,414</td>
                                    <td>19,046,722,750</td>
                                    <td>14,411,790,506</td>
                                    <td style="background-color: #2ED15F;">988.99</td>

                                    <!-- agen bep -->
                                    <td>50</td>
                                    <td>159</td>
                                    <td>209</td>
                                    <td style="background-color: #2ED15F">189.14</td>

                                    <!-- pertumbuhan agen -->
                                    <td>1</td>
                                    <td>22</td>
                                    <td style="background-color: #2ED15F;">164.29</td>

                                    <!-- bumdes -->
                                    <td>5</td>
                                    <td>6</td>
                                    <td>11</td>
                                    <td>10</td>
                                    <td style="background-color: #2ED15F;">110</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>22</td>
                                    <td>14</td>
                                    <td style="background-color: #2ED15F;">157.14</td>

                                    <!-- reff. pinj -->
                                    <td>289</td>
                                    <td>65</td>
                                    <td style="background-color: #2ED15F;">444.62</td>

                                    <!-- active web -->
                                    <td>808</td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.5</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="text-left">[TULUNGAGUNG]ardila niko f</td>

                                    <td style="background-color: #2ED15F;">111.62</td>
                                    <td>90</td>
                                    <td>424</td>
                                    <td>514</td>
                                    <td>491</td>
                                    <td style="background-color: #2ED15F;">104.68</td>

                                    <!-- trx -->
                                    <td>67,516</td>
                                    <td>4,226</td>
                                    <td>555,240</td>
                                    <td>437,149</td>
                                    <td style="background-color: #2ED15F;">127.01</td>

                                    <!-- fbi -->
                                    <td>110,052,554</td>
                                    <td>3,605,759</td>
                                    <td>861,706,461</td>
                                    <td>714,313,698</td>
                                    <td style="background-color: #2ED15F;">120.63</td>

                                    <!-- casa -->
                                    <td>3,103,033,773</td>
                                    <td>27,602,202,411</td>
                                    <td>30,705,236,184</td>
                                    <td>13,917,559,733</td>
                                    <td style="background-color: #2ED15F;">1461.87</td>

                                    <!-- agen bep -->
                                    <td>88</td>
                                    <td>37</td>
                                    <td>125</td>
                                    <td style="background-color: #2ED15F">121.95</td>

                                    <!-- pertumbuhan agen -->
                                    <td>9</td>
                                    <td>36</td>
                                    <td style="background-color: #2ED15F;">136.36</td>

                                    <!-- bumdes -->
                                    <td>5</td>
                                    <td>55</td>
                                    <td>60</td>
                                    <td>26</td>
                                    <td style="background-color: #2ED15F;">230.77</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>27</td>
                                    <td>21</td>
                                    <td style="background-color: #2ED15F;">128.57</td>

                                    <!-- reff. pinj -->
                                    <td>65</td>
                                    <td>25</td>
                                    <td style="background-color: #2ED15F;">260</td>

                                    <!-- active web -->
                                    <td>416</td>
                                    <td style="background-color: #ff9;">98.11</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.91</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="text-left">[KEDIRI]bella cikita</td>

                                    <td style="background-color: #2ED15F;">111.19</td>
                                    <td>49</td>
                                    <td>785</td>
                                    <td>834</td>
                                    <td>676</td>
                                    <td style="background-color: #2ED15F;">123.37</td>

                                    <!-- trx -->
                                    <td>35,289</td>
                                    <td>28,453</td>
                                    <td>383,276</td>
                                    <td>365,831</td>
                                    <td style="background-color: #2ED15F;">104.77</td>

                                    <!-- fbi -->
                                    <td>46,207,846</td>
                                    <td>7,076,131</td>
                                    <td>389,721,663</td>
                                    <td>290,466,065</td>
                                    <td style="background-color: #2ED15F;">134.17</td>

                                    <!-- casa -->
                                    <td>4,467,100,742</td>
                                    <td>13,338,026,908</td>
                                    <td>17,805,127,650</td>
                                    <td>14,966,090,141</td>
                                    <td style="background-color: #2ED15F;">749.74</td>

                                    <!-- agen bep -->
                                    <td>46</td>
                                    <td>155</td>
                                    <td>201</td>
                                    <td style="background-color: #2ED15F">204.06</td>

                                    <!-- pertumbuhan agen -->
                                    <td>6</td>
                                    <td>17</td>
                                    <td style="background-color: #2ED15F;">164.29</td>

                                    <!-- bumdes -->
                                    <td>6</td>
                                    <td>10</td>
                                    <td>16</td>
                                    <td>10</td>
                                    <td style="background-color: #2ED15F;">160</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>18</td>
                                    <td>14</td>
                                    <td style="background-color: #2ED15F;">128.57</td>

                                    <!-- reff. pinj -->
                                    <td>136</td>
                                    <td>65</td>
                                    <td style="background-color: #2ED15F;">209.23</td>

                                    <!-- active web -->
                                    <td>785</td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.5</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td class="text-left">[BANYUWANGI]dian prajabakti jonathan</td>

                                    <td style="background-color: #2ED15F;">110</td>
                                    <td>91</td>
                                    <td>326</td>
                                    <td>417</td>
                                    <td>401</td>
                                    <td style="background-color: #2ED15F;">103.99</td>

                                    <!-- trx -->
                                    <td>90,422</td>
                                    <td>11,216</td>
                                    <td>706,583</td>
                                    <td>663,340</td>
                                    <td style="background-color: #2ED15F;">106.52</td>

                                    <!-- fbi -->
                                    <td>159,606,994</td>
                                    <td>15,691,694</td>
                                    <td>1,199,472,143</td>
                                    <td>832,326,514</td>
                                    <td style="background-color: #2ED15F;">144.11</td>

                                    <!-- casa -->
                                    <td>2,938,249,319</td>
                                    <td>13,997,988,326</td>
                                    <td>16,936,237,645</td>
                                    <td>9,538,485,731</td>
                                    <td style="background-color: #2ED15F;">1197.09</td>

                                    <!-- agen bep -->
                                    <td>81</td>
                                    <td>50</td>
                                    <td>131</td>
                                    <td style="background-color: #2ED15F">173.51</td>

                                    <!-- pertumbuhan agen -->
                                    <td>16</td>
                                    <td>44</td>
                                    <td style="background-color: #2ED15F;">206.9</td>

                                    <!-- bumdes -->
                                    <td>2</td>
                                    <td>6</td>
                                    <td>8</td>
                                    <td>7</td>
                                    <td style="background-color: #2ED15F;">114.29</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>24</td>
                                    <td>11</td>
                                    <td style="background-color: #2ED15F;">218.18</td>

                                    <!-- reff. pinj -->
                                    <td>524</td>
                                    <td>76</td>
                                    <td style="background-color: #2ED15F;">689.47</td>

                                    <!-- active web -->
                                    <td>304</td>
                                    <td style="background-color: #f99;">93.25</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.9</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td class="text-left">[MAGETAN]amri basmara</td>

                                    <td style="background-color: #2ED15F;">109.98</td>
                                    <td>61</td>
                                    <td>301</td>
                                    <td>362</td>
                                    <td>335</td>
                                    <td style="background-color: #2ED15F;">108.06</td>

                                    <!-- trx -->
                                    <td>50,880</td>
                                    <td>6,302</td>
                                    <td>526,598</td>
                                    <td>508,721</td>
                                    <td style="background-color: #2ED15F;">103.51</td>

                                    <!-- fbi -->
                                    <td>85,182,804</td>
                                    <td>8,121,912</td>
                                    <td>702,975,805</td>
                                    <td>580,847,405</td>
                                    <td style="background-color: #2ED15F;">121.03</td>

                                    <!-- casa -->
                                    <td>2,880,618,170</td>
                                    <td>7,093,581,281</td>
                                    <td>9,974,199,451</td>
                                    <td>6,495,708,864</td>
                                    <td style="background-color: #2ED15F;">946.25</td>

                                    <!-- agen bep -->
                                    <td>58</td>
                                    <td>43</td>
                                    <td>101</td>
                                    <td style="background-color: #2ED15F">149.63</td>

                                    <!-- pertumbuhan agen -->
                                    <td>6</td>
                                    <td>26</td>
                                    <td style="background-color: #2ED15F;">118.52</td>

                                    <!-- bumdes -->
                                    <td>0</td>
                                    <td>22</td>
                                    <td>22</td>
                                    <td>13</td>
                                    <td style="background-color: #2ED15F;">169.23</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>14</td>
                                    <td>11</td>
                                    <td style="background-color: #2ED15F;">127.27</td>

                                    <!-- reff. pinj -->
                                    <td>151</td>
                                    <td>66</td>
                                    <td style="background-color: #2ED15F;">228.79</td>

                                    <!-- active web -->
                                    <td>281</td>
                                    <td style="background-color: #f99;">93.36</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.66</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td class="text-left">[BLITAR]fitria puspitasari</td>

                                    <td style="background-color: #2ED15F;">109.66</td>
                                    <td>69</td>
                                    <td>381</td>
                                    <td>450</td>
                                    <td>466</td>
                                    <td style="background-color: #ff9;">96.57</td>

                                    <!-- trx -->
                                    <td>47,927</td>
                                    <td>31,832</td>
                                    <td>510,805</td>
                                    <td>418,260</td>
                                    <td style="background-color: #2ED15F;">122.13</td>

                                    <!-- fbi -->
                                    <td>79,603,255</td>
                                    <td>10,266,851</td>
                                    <td>630,563,082</td>
                                    <td>518,876,562</td>
                                    <td style="background-color: #2ED15F;">121.52</td>

                                    <!-- casa -->
                                    <td>2,889,304,044</td>
                                    <td>10,562,862,431</td>
                                    <td>13,452,166,475</td>
                                    <td>12,865,807,657</td>
                                    <td style="background-color: #2ED15F;">865.78</td>

                                    <!-- agen bep -->
                                    <td>61</td>
                                    <td>32</td>
                                    <td>93</td>
                                    <td style="background-color: #2ED15F">128.28</td>

                                    <!-- pertumbuhan agen -->
                                    <td>8</td>
                                    <td>21</td>
                                    <td style="background-color: #2ED15F;">161.11</td>

                                    <!-- bumdes -->
                                    <td>4</td>
                                    <td>8</td>
                                    <td>12</td>
                                    <td>9</td>
                                    <td style="background-color: #2ED15F;">133.33</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>20</td>
                                    <td>14</td>
                                    <td style="background-color: #2ED15F;">142.86</td>

                                    <!-- reff. pinj -->
                                    <td>444</td>
                                    <td>39</td>
                                    <td style="background-color: #2ED15F;">1138.46</td>

                                    <!-- active web -->
                                    <td>366</td>
                                    <td style="background-color: #ff9;">96.06</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.91</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td class="text-left">[KEDIRI]wachid muslimin</td>

                                    <td style="background-color: #2ED15F;">109.27</td>
                                    <td>55</td>
                                    <td>792</td>
                                    <td>847</td>
                                    <td>701</td>
                                    <td style="background-color: #2ED15F;">120.83</td>

                                    <!-- trx -->
                                    <td>30,460</td>
                                    <td>40,185</td>
                                    <td>411,108</td>
                                    <td>379,380</td>
                                    <td style="background-color: #2ED15F;">108.36</td>

                                    <!-- fbi -->
                                    <td>38,573,771</td>
                                    <td>10,151,580</td>
                                    <td>342,469,535</td>
                                    <td>301,224,068</td>
                                    <td style="background-color: #2ED15F;">113.69</td>

                                    <!-- casa -->
                                    <td>1,390,014,263</td>
                                    <td>17,629,652,448</td>
                                    <td>19,019,666,711</td>
                                    <td>15,520,389,776</td>
                                    <td style="background-color: #2ED15F;">784.43</td>

                                    <!-- agen bep -->
                                    <td>51</td>
                                    <td>152</td>
                                    <td>203</td>
                                    <td style="background-color: #2ED15F">193.33</td>

                                    <!-- pertumbuhan agen -->
                                    <td>3</td>
                                    <td>20</td>
                                    <td style="background-color: #2ED15F;">164.29</td>

                                    <!-- bumdes -->
                                    <td>1</td>
                                    <td>6</td>
                                    <td>7</td>
                                    <td>10</td>
                                    <td style="background-color: #f99;">70</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>22</td>
                                    <td>14</td>
                                    <td style="background-color: #2ED15F;">157.14</td>

                                    <!-- reff. pinj -->
                                    <td>277</td>
                                    <td>65</td>
                                    <td style="background-color: #2ED15F;">426.15</td>

                                    <!-- active web -->
                                    <td>790</td>
                                    <td style="background-color: #ff9;">99.75</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.5</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td class="text-left">[TRENGGALEK]wayan hadi retnano</td>

                                    <td style="background-color: #2ED15F;">108.38</td>
                                    <td>129</td>
                                    <td>312</td>
                                    <td>441</td>
                                    <td>443</td>
                                    <td style="background-color: #ff9;">99.55</td>

                                    <!-- trx -->
                                    <td>77,250</td>
                                    <td>8,307</td>
                                    <td>667,592</td>
                                    <td>538,970</td>
                                    <td style="background-color: #2ED15F;">123.86</td>

                                    <!-- fbi -->
                                    <td>120,044,392</td>
                                    <td>9,567,422</td>
                                    <td>1,009,419,519</td>
                                    <td>896,053,508</td>
                                    <td style="background-color: #2ED15F;">112.65</td>

                                    <!-- casa -->
                                    <td>3,653,888,497</td>
                                    <td>12,499,472,547</td>
                                    <td>16,153,361,044</td>
                                    <td>11,075,202,657</td>
                                    <td style="background-color: #2ED15F;">975.84</td>

                                    <!-- agen bep -->
                                    <td>112</td>
                                    <td>39</td>
                                    <td>151</td>
                                    <td style="background-color: #2ED15F">135.43</td>

                                    <!-- pertumbuhan agen -->
                                    <td>13</td>
                                    <td>38</td>
                                    <td style="background-color: #2ED15F;">113.33</td>

                                    <!-- bumdes -->
                                    <td>16</td>
                                    <td>9</td>
                                    <td>25</td>
                                    <td>18</td>
                                    <td style="background-color: #2ED15F;">138.89</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>23</td>
                                    <td>23</td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <!-- reff. pinj -->
                                    <td>62</td>
                                    <td>69</td>
                                    <td style="background-color: #f99;">89.86</td>

                                    <!-- active web -->
                                    <td>289</td>
                                    <td style="background-color: #f99;">92.63</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.72</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td class="text-left">[MAGETAN]yeni tri winarti</td>

                                    <td style="background-color: #2ED15F;">107.48</td>
                                    <td>80</td>
                                    <td>303</td>
                                    <td>383</td>
                                    <td>371</td>
                                    <td style="background-color: #2ED15F;">103.23</td>

                                    <!-- trx -->
                                    <td>69,404</td>
                                    <td>7,131</td>
                                    <td>668,245</td>
                                    <td>563,227</td>
                                    <td style="background-color: #2ED15F;">118.65</td>

                                    <!-- fbi -->
                                    <td>118,626,049</td>
                                    <td>8,328,682</td>
                                    <td>856,369,202</td>
                                    <td>643,081,056</td>
                                    <td style="background-color: #2ED15F;">133.17</td>

                                    <!-- casa -->
                                    <td>1,478,863,285</td>
                                    <td>6,390,303,542</td>
                                    <td>7,869,166,827</td>
                                    <td>7,191,677,671</td>
                                    <td style="background-color: #2ED15F;">670.74</td>

                                    <!-- agen bep -->
                                    <td>79</td>
                                    <td>31</td>
                                    <td>110</td>
                                    <td style="background-color: #2ED15F">147.65</td>

                                    <!-- pertumbuhan agen -->
                                    <td>12</td>
                                    <td>32</td>
                                    <td style="background-color: #2ED15F;">162.96</td>

                                    <!-- bumdes -->
                                    <td>2</td>
                                    <td>8</td>
                                    <td>10</td>
                                    <td>13</td>
                                    <td style="background-color: #f99;">76.92</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>10</td>
                                    <td>11</td>
                                    <td style="background-color: #f99;">90.91</td>

                                    <!-- reff. pinj -->
                                    <td>267</td>
                                    <td>66</td>
                                    <td style="background-color: #2ED15F;">404.55</td>

                                    <!-- active web -->
                                    <td>278</td>
                                    <td style="background-color: #f99;">91.75</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.66</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td class="text-left">[MALANG M.DINATA]sekar mayangsari</td>

                                    <td style="background-color: #2ED15F;">106.97</td>
                                    <td>72</td>
                                    <td>356</td>
                                    <td>428</td>
                                    <td>436</td>
                                    <td style="background-color: #ff9;">98.17</td>

                                    <!-- trx -->
                                    <td>36,486</td>
                                    <td>2,779</td>
                                    <td>302,688</td>
                                    <td>297,079</td>
                                    <td style="background-color: #2ED15F;">101.89</td>

                                    <!-- fbi -->
                                    <td>63,153,870</td>
                                    <td>2,454,026</td>
                                    <td>525,152,478</td>
                                    <td>489,801,581</td>
                                    <td style="background-color: #2ED15F;">107.22</td>

                                    <!-- casa -->
                                    <td>3,224,934,067</td>
                                    <td>13,667,692,003</td>
                                    <td>16,892,626,070</td>
                                    <td>14,160,666,829</td>
                                    <td style="background-color: #2ED15F;">948.5</td>

                                    <!-- agen bep -->
                                    <td>69</td>
                                    <td>13</td>
                                    <td>82</td>
                                    <td style="background-color: #2ED15F">151.85</td>

                                    <!-- pertumbuhan agen -->
                                    <td>6</td>
                                    <td>17</td>
                                    <td style="background-color: #ff9;">95.83</td>

                                    <!-- bumdes -->
                                    <td>0</td>
                                    <td>4</td>
                                    <td>4</td>
                                    <td>3</td>
                                    <td style="background-color: #2ED15F;">133.33</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>33</td>
                                    <td>12</td>
                                    <td style="background-color: #2ED15F;">275</td>

                                    <!-- reff. pinj -->
                                    <td>82</td>
                                    <td>24</td>
                                    <td style="background-color: #2ED15F;">341.67</td>

                                    <!-- active web -->
                                    <td>356</td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.99</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td class="text-left">[SOEKARNO HATTA]berlian gani ayunda</td>

                                    <td style="background-color: #2ED15F;">106.55</td>
                                    <td>84</td>
                                    <td>448</td>
                                    <td>532</td>
                                    <td>527</td>
                                    <td style="background-color: #2ED15F;">100.95</td>

                                    <!-- trx -->
                                    <td>30,204</td>
                                    <td>21,731</td>
                                    <td>409,749</td>
                                    <td>485,952</td>
                                    <td style="background-color: #f99;">84.32</td>

                                    <!-- fbi -->
                                    <td>40,416,042</td>
                                    <td>1,222,182</td>
                                    <td>293,998,494</td>
                                    <td>225,796,230</td>
                                    <td style="background-color: #2ED15F;">130.21</td>

                                    <!-- casa -->
                                    <td>3,860,976,509</td>
                                    <td>22,377,482,007</td>
                                    <td>26,238,458,516</td>
                                    <td>15,232,898,607</td>
                                    <td style="background-color: #2ED15F;">1381.03</td>

                                    <!-- agen bep -->
                                    <td>66</td>
                                    <td>20</td>
                                    <td>86</td>
                                    <td style="background-color: #2ED15F">173.74</td>

                                    <!-- pertumbuhan agen -->
                                    <td>2</td>
                                    <td>12</td>
                                    <td style="background-color: #2ED15F;">140</td>

                                    <!-- bumdes -->
                                    <td>8</td>
                                    <td>2</td>
                                    <td>10</td>
                                    <td>5</td>
                                    <td style="background-color: #2ED15F;">200</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>88</td>
                                    <td>39</td>
                                    <td style="background-color: #2ED15F;">225.64</td>

                                    <!-- reff. pinj -->
                                    <td>40</td>
                                    <td>22</td>
                                    <td style="background-color: #2ED15F;">181.82</td>

                                    <!-- active web -->
                                    <td>431</td>
                                    <td style="background-color: #ff9;">96.21</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.99</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td class="text-left">[PASURUAN]topan aris f</td>

                                    <td style="background-color: #2ED15F;">105.44</td>
                                    <td>32</td>
                                    <td>484</td>
                                    <td>516</td>
                                    <td>507</td>
                                    <td style="background-color: #2ED15F;">101.78</td>

                                    <!-- trx -->
                                    <td>15,244</td>
                                    <td>8,738</td>
                                    <td>252,615</td>
                                    <td>203,182</td>
                                    <td style="background-color: #2ED15F;">124.33</td>

                                    <!-- fbi -->
                                    <td>19,638,570</td>
                                    <td>7,250,764</td>
                                    <td>208,319,246</td>
                                    <td>223,462,704</td>
                                    <td style="background-color: #f99;">93.22</td>

                                    <!-- casa -->
                                    <td>321,885,559</td>
                                    <td>12,921,821,901</td>
                                    <td>13,243,707,460</td>
                                    <td>12,591,926,918</td>
                                    <td style="background-color: #2ED15F;">756.38</td>

                                    <!-- agen bep -->
                                    <td>32</td>
                                    <td>77</td>
                                    <td>109</td>
                                    <td style="background-color: #ff9">97.76</td>

                                    <!-- pertumbuhan agen -->
                                    <td>0</td>
                                    <td>10</td>
                                    <td style="background-color: #2ED15F;">125</td>

                                    <!-- bumdes -->
                                    <td>1</td>
                                    <td>8</td>
                                    <td>9</td>
                                    <td>4</td>
                                    <td style="background-color: #2ED15F;">225</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>27</td>
                                    <td>10</td>
                                    <td style="background-color: #2ED15F;">270</td>

                                    <!-- reff. pinj -->
                                    <td>475</td>
                                    <td>13</td>
                                    <td style="background-color: #2ED15F;">3653.85</td>

                                    <!-- active web -->
                                    <td>483</td>
                                    <td style="background-color: #ff9;">99.79</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.87</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td class="text-left">[NGAWI]catur bekti aris setiawan</td>

                                    <td style="background-color: #2ED15F;">105.42</td>
                                    <td>56</td>
                                    <td>324</td>
                                    <td>380</td>
                                    <td>420</td>
                                    <td style="background-color: #f99;">90.48</td>

                                    <!-- trx -->
                                    <td>42,456</td>
                                    <td>2,657</td>
                                    <td>338,397</td>
                                    <td>271,386</td>
                                    <td style="background-color: #2ED15F;">124.69</td>

                                    <!-- fbi -->
                                    <td>69,453,265</td>
                                    <td>3,891,293</td>
                                    <td>548,188,865</td>
                                    <td>463,954,696</td>
                                    <td style="background-color: #2ED15F;">118.16</td>

                                    <!-- casa -->
                                    <td>1,088,814,250</td>
                                    <td>12,655,569,977</td>
                                    <td>13,744,384,227</td>
                                    <td>11,319,477,280</td>
                                    <td style="background-color: #2ED15F;">787.24</td>

                                    <!-- agen bep -->
                                    <td>45</td>
                                    <td>10</td>
                                    <td>55</td>
                                    <td style="background-color: #f99">70.51</td>

                                    <!-- pertumbuhan agen -->
                                    <td>7</td>
                                    <td>20</td>
                                    <td style="background-color: #2ED15F;">142.11</td>

                                    <!-- bumdes -->
                                    <td>3</td>
                                    <td>3</td>
                                    <td>6</td>
                                    <td>3</td>
                                    <td style="background-color: #2ED15F;">200</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>13</td>
                                    <td>12</td>
                                    <td style="background-color: #2ED15F;">108.33</td>

                                    <!-- reff. pinj -->
                                    <td>225</td>
                                    <td>38</td>
                                    <td style="background-color: #2ED15F;">592.11</td>

                                    <!-- active web -->
                                    <td>318</td>
                                    <td style="background-color: #ff9;">98.15</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.96</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td class="text-left">[PONOROGO]yanuar aris pratama</td>

                                    <td style="background-color: #2ED15F;">104.57</td>
                                    <td>73</td>
                                    <td>398</td>
                                    <td>471</td>
                                    <td>476</td>
                                    <td style="background-color: #ff9;">98.95</td>

                                    <!-- trx -->
                                    <td>47,202</td>
                                    <td>4,964</td>
                                    <td>373,644</td>
                                    <td>372,624</td>
                                    <td style="background-color: #2ED15F;">100.27</td>

                                    <!-- fbi -->
                                    <td>72,531,276</td>
                                    <td>6,327,031</td>
                                    <td>574,332,199</td>
                                    <td>590,135,321</td>
                                    <td style="background-color: #ff9;">97.32</td>

                                    <!-- casa -->
                                    <td>990,634,070</td>
                                    <td>13,350,513,845</td>
                                    <td>14,341,147,915</td>
                                    <td>11,141,600,676</td>
                                    <td style="background-color: #2ED15F;">945.35</td>

                                    <!-- agen bep -->
                                    <td>63</td>
                                    <td>33</td>
                                    <td>96</td>
                                    <td style="background-color: #2ED15F">144.36</td>

                                    <!-- pertumbuhan agen -->
                                    <td>6</td>
                                    <td>27</td>
                                    <td style="background-color: #2ED15F;">132</td>

                                    <!-- bumdes -->
                                    <td>4</td>
                                    <td>2</td>
                                    <td>6</td>
                                    <td>6</td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>16</td>
                                    <td>15</td>
                                    <td style="background-color: #2ED15F;">106.67</td>

                                    <!-- reff. pinj -->
                                    <td>71</td>
                                    <td>15</td>
                                    <td style="background-color: #2ED15F;">473.33</td>

                                    <!-- active web -->
                                    <td>356</td>
                                    <td style="background-color: #f99;">89.45</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.64</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td class="text-left">[MALANG SUTOYO]richa afriyanti</td>

                                    <td style="background-color: #2ED15F;">104.55</td>
                                    <td>73</td>
                                    <td>349</td>
                                    <td>422</td>
                                    <td>530</td>
                                    <td style="background-color: #f99;">79.62</td>

                                    <!-- trx -->
                                    <td>16,607</td>
                                    <td>60,470</td>
                                    <td>670,901</td>
                                    <td>375,239</td>
                                    <td style="background-color: #2ED15F;">178.79</td>

                                    <!-- fbi -->
                                    <td>25,316,273</td>
                                    <td>408,569</td>
                                    <td>198,342,595</td>
                                    <td>205,394,266</td>
                                    <td style="background-color: #ff9;">96.57</td>

                                    <!-- casa -->
                                    <td>1,480,607,905</td>
                                    <td>40,961,641,630</td>
                                    <td>42,442,249,535</td>
                                    <td>26,099,562,373</td>
                                    <td style="background-color: #2ED15F;">1178.84</td>

                                    <!-- agen bep -->
                                    <td>48</td>
                                    <td>36</td>
                                    <td>84</td>
                                    <td style="background-color: #2ED15F">103.07</td>

                                    <!-- pertumbuhan agen -->
                                    <td>0</td>
                                    <td>7</td>
                                    <td style="background-color: #2ED15F;">116.67</td>

                                    <!-- bumdes -->
                                    <td>4</td>
                                    <td>5</td>
                                    <td>9</td>
                                    <td>7</td>
                                    <td style="background-color: #2ED15F;">128.57</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>26</td>
                                    <td>25</td>
                                    <td style="background-color: #2ED15F;">104</td>

                                    <!-- reff. pinj -->
                                    <td>60</td>
                                    <td>24</td>
                                    <td style="background-color: #2ED15F;">250</td>

                                    <!-- active web -->
                                    <td>340</td>
                                    <td style="background-color: #ff9;">97.42</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.47</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td class="text-left">[MADIUN]novadilla ika pramana putri</td>

                                    <td style="background-color: #2ED15F;">104.36</td>
                                    <td>36</td>
                                    <td>215</td>
                                    <td>251</td>
                                    <td>246</td>
                                    <td style="background-color: #2ED15F;">102.03</td>

                                    <!-- trx -->
                                    <td>25,233</td>
                                    <td>1,240</td>
                                    <td>188,675</td>
                                    <td>170,214</td>
                                    <td style="background-color: #2ED15F;">110.85</td>

                                    <!-- fbi -->
                                    <td>42,674,682</td>
                                    <td>1,095,397</td>
                                    <td>304,813,755</td>
                                    <td>259,023,008</td>
                                    <td style="background-color: #2ED15F;">117.68</td>

                                    <!-- casa -->
                                    <td>842,807,189</td>
                                    <td>8,375,434,401</td>
                                    <td>9,218,241,590</td>
                                    <td>6,302,015,574</td>
                                    <td style="background-color: #2ED15F;">1012.62</td>

                                    <!-- agen bep -->
                                    <td>34</td>
                                    <td>6</td>
                                    <td>40</td>
                                    <td style="background-color: #2ED15F">131.15</td>

                                    <!-- pertumbuhan agen -->
                                    <td>3</td>
                                    <td>11</td>
                                    <td style="background-color: #f99;">93.33</td>

                                    <!-- bumdes -->
                                    <td>1</td>
                                    <td>11</td>
                                    <td>12</td>
                                    <td>9</td>
                                    <td style="background-color: #2ED15F;">133.33</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>4</td>
                                    <td>11</td>
                                    <td style="background-color: #f99;">36.36</td>

                                    <!-- reff. pinj -->
                                    <td>30</td>
                                    <td>20</td>
                                    <td style="background-color: #2ED15F;">150</td>

                                    <!-- active web -->
                                    <td>154</td>
                                    <td style="background-color: #f99;">71.63</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.32</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td class="text-left">[MALANG M.DINATA]lukman hakim</td>

                                    <td style="background-color: #2ED15F;">104.13</td>
                                    <td>63</td>
                                    <td>275</td>
                                    <td>338</td>
                                    <td>401</td>
                                    <td style="background-color: #f99;">84.29</td>

                                    <!-- trx -->
                                    <td>39,130</td>
                                    <td>7,683</td>
                                    <td>288,617</td>
                                    <td>273,313</td>
                                    <td style="background-color: #2ED15F;">105.6</td>

                                    <!-- fbi -->
                                    <td>62,830,099</td>
                                    <td>2,233,531</td>
                                    <td>459,588,619</td>
                                    <td>450,617,454</td>
                                    <td style="background-color: #2ED15F;">101.99</td>

                                    <!-- casa -->
                                    <td>1,283,565,425</td>
                                    <td>11,750,178,982</td>
                                    <td>13,033,744,407</td>
                                    <td>13,027,813,482</td>
                                    <td style="background-color: #2ED15F;">758.94</td>

                                    <!-- agen bep -->
                                    <td>56</td>
                                    <td>23</td>
                                    <td>79</td>
                                    <td style="background-color: #2ED15F">154.9</td>

                                    <!-- pertumbuhan agen -->
                                    <td>8</td>
                                    <td>18</td>
                                    <td style="background-color: #2ED15F;">108.33</td>

                                    <!-- bumdes -->
                                    <td>4</td>
                                    <td>4</td>
                                    <td>8</td>
                                    <td>3</td>
                                    <td style="background-color: #2ED15F;">266.67</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>20</td>
                                    <td>12</td>
                                    <td style="background-color: #2ED15F;">166.67</td>

                                    <!-- reff. pinj -->
                                    <td>103</td>
                                    <td>24</td>
                                    <td style="background-color: #2ED15F;">429.17</td>

                                    <!-- active web -->
                                    <td>255</td>
                                    <td style="background-color: #f99;">92.73</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.99</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td class="text-left">[PASURUAN]dicky setiawan</td>

                                    <td style="background-color: #2ED15F;">103.97</td>
                                    <td>38</td>
                                    <td>246</td>
                                    <td>284</td>
                                    <td>325</td>
                                    <td style="background-color: #f99;">87.38</td>

                                    <!-- trx -->
                                    <td>13,620</td>
                                    <td>4,957</td>
                                    <td>159,347</td>
                                    <td>130,036</td>
                                    <td style="background-color: #2ED15F;">122.54</td>

                                    <!-- fbi -->
                                    <td>16,603,481</td>
                                    <td>6,731,039</td>
                                    <td>201,503,149</td>
                                    <td>143,016,131</td>
                                    <td style="background-color: #2ED15F;">140.9</td>

                                    <!-- casa -->
                                    <td>504,171,645</td>
                                    <td>6,145,457,797</td>
                                    <td>6,649,629,442</td>
                                    <td>8,058,833,227</td>
                                    <td style="background-color: #f99;">480.97</td>

                                    <!-- agen bep -->
                                    <td>37</td>
                                    <td>23</td>
                                    <td>60</td>
                                    <td style="background-color: #2ED15F">111.11</td>

                                    <!-- pertumbuhan agen -->
                                    <td>0</td>
                                    <td>11</td>
                                    <td style="background-color: #2ED15F;">137.5</td>

                                    <!-- bumdes -->
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td style="background-color: #f99;">75</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>11</td>
                                    <td>10</td>
                                    <td style="background-color: #2ED15F;">110</td>

                                    <!-- reff. pinj -->
                                    <td>237</td>
                                    <td>13</td>
                                    <td style="background-color: #2ED15F;">1823.08</td>

                                    <!-- active web -->
                                    <td>240</td>
                                    <td style="background-color: #ff9;">97.56</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.87</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td class="text-left">[MALANG M.DINATA]rossy ratnaliyona mp</td>

                                    <td style="background-color: #2ED15F;">103.41</td>
                                    <td>54</td>
                                    <td>245</td>
                                    <td>299</td>
                                    <td>419</td>
                                    <td style="background-color: #f99;">71.36</td>

                                    <!-- trx -->
                                    <td>36,646</td>
                                    <td>4,119</td>
                                    <td>277,592</td>
                                    <td>285,196</td>
                                    <td style="background-color: #ff9;">97.33</td>

                                    <!-- fbi -->
                                    <td>63,980,871</td>
                                    <td>1,165,000</td>
                                    <td>477,482,871</td>
                                    <td>470,209,517</td>
                                    <td style="background-color: #2ED15F;">101.55</td>

                                    <!-- casa -->
                                    <td>866,093,367</td>
                                    <td>18,228,326,259</td>
                                    <td>19,094,419,626</td>
                                    <td>13,594,240,156</td>
                                    <td style="background-color: #2ED15F;">894.37</td>

                                    <!-- agen bep -->
                                    <td>45</td>
                                    <td>11</td>
                                    <td>56</td>
                                    <td style="background-color: #2ED15F">127.27</td>

                                    <!-- pertumbuhan agen -->
                                    <td>3</td>
                                    <td>27</td>
                                    <td style="background-color: #2ED15F;">125</td>

                                    <!-- bumdes -->
                                    <td>3</td>
                                    <td>1</td>
                                    <td>4</td>
                                    <td>3</td>
                                    <td style="background-color: #2ED15F;">133.33</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>15</td>
                                    <td>12</td>
                                    <td style="background-color: #2ED15F;">125</td>

                                    <!-- reff. pinj -->
                                    <td>153</td>
                                    <td>24</td>
                                    <td style="background-color: #2ED15F;">637.5</td>

                                    <!-- active web -->
                                    <td>230</td>
                                    <td style="background-color: #f99;">93.88</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.99</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td class="text-left">[BLITAR]joko dwi santoso</td>

                                    <td style="background-color: #2ED15F;">103.37</td>
                                    <td>63</td>
                                    <td>363</td>
                                    <td>426</td>
                                    <td>441</td>
                                    <td style="background-color: #ff9;">96.6</td>

                                    <!-- trx -->
                                    <td>39,538</td>
                                    <td>9,811</td>
                                    <td>425,884</td>
                                    <td>395,651</td>
                                    <td style="background-color: #2ED15F;">107.64</td>

                                    <!-- fbi -->
                                    <td>56,984,474</td>
                                    <td>8,170,613</td>
                                    <td>454,643,499</td>
                                    <td>490,829,180</td>
                                    <td style="background-color: #f99;">92.63</td>

                                    <!-- casa -->
                                    <td>1,837,383,859</td>
                                    <td>9,678,291,561</td>
                                    <td>11,515,675,420</td>
                                    <td>12,170,358,595</td>
                                    <td style="background-color: #f99;">769.88</td>

                                    <!-- agen bep -->
                                    <td>54</td>
                                    <td>33</td>
                                    <td>87</td>
                                    <td style="background-color: #2ED15F">138.1</td>

                                    <!-- pertumbuhan agen -->
                                    <td>5</td>
                                    <td>17</td>
                                    <td style="background-color: #2ED15F;">122.22</td>

                                    <!-- bumdes -->
                                    <td>2</td>
                                    <td>7</td>
                                    <td>9</td>
                                    <td>9</td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>25</td>
                                    <td>14</td>
                                    <td style="background-color: #2ED15F;">178.57</td>

                                    <!-- reff. pinj -->
                                    <td>411</td>
                                    <td>39</td>
                                    <td style="background-color: #2ED15F;">1053.85</td>

                                    <!-- active web -->
                                    <td>342</td>
                                    <td style="background-color: #f99;">94.21</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.91</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td class="text-left">[KEPANJEN]alan asevano</td>

                                    <td style="background-color: #2ED15F;">102.9</td>
                                    <td>70</td>
                                    <td>220</td>
                                    <td>290</td>
                                    <td>331</td>
                                    <td style="background-color: #f99;">87.61</td>

                                    <!-- trx -->
                                    <td>50,098</td>
                                    <td>3,562</td>
                                    <td>432,750</td>
                                    <td>374,901</td>
                                    <td style="background-color: #2ED15F;">115.43</td>

                                    <!-- fbi -->
                                    <td>88,234,133</td>
                                    <td>4,836,977</td>
                                    <td>724,683,308</td>
                                    <td>653,292,884</td>
                                    <td style="background-color: #2ED15F;">110.93</td>

                                    <!-- casa -->
                                    <td>2,418,322,903</td>
                                    <td>5,193,933,486</td>
                                    <td>7,612,256,389</td>
                                    <td>5,672,873,933</td>
                                    <td style="background-color: #2ED15F;">925.48</td>

                                    <!-- agen bep -->
                                    <td>58</td>
                                    <td>20</td>
                                    <td>78</td>
                                    <td style="background-color: #2ED15F">121.88</td>

                                    <!-- pertumbuhan agen -->
                                    <td>7</td>
                                    <td>28</td>
                                    <td style="background-color: #2ED15F;">120.69</td>

                                    <!-- bumdes -->
                                    <td>4</td>
                                    <td>2</td>
                                    <td>6</td>
                                    <td>6</td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>4</td>
                                    <td>15</td>
                                    <td style="background-color: #f99;">26.67</td>

                                    <!-- reff. pinj -->
                                    <td>170</td>
                                    <td>77</td>
                                    <td style="background-color: #2ED15F;">220.78</td>

                                    <!-- active web -->
                                    <td>162</td>
                                    <td style="background-color: #f99;">73.64</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.76</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td class="text-left">[PASURUAN]denny perdana p</td>

                                    <td style="background-color: #2ED15F;">102.6</td>
                                    <td>33</td>
                                    <td>289</td>
                                    <td>322</td>
                                    <td>365</td>
                                    <td style="background-color: #f99;">88.22</td>

                                    <!-- trx -->
                                    <td>14,725</td>
                                    <td>4,774</td>
                                    <td>175,544</td>
                                    <td>146,291</td>
                                    <td style="background-color: #2ED15F;">120</td>

                                    <!-- fbi -->
                                    <td>24,049,174</td>
                                    <td>6,763,768</td>
                                    <td>222,244,874</td>
                                    <td>160,893,147</td>
                                    <td style="background-color: #2ED15F;">138.13</td>

                                    <!-- casa -->
                                    <td>698,962,910</td>
                                    <td>5,777,845,745</td>
                                    <td>6,476,808,655</td>
                                    <td>9,066,187,381</td>
                                    <td style="background-color: #f99;">498.13</td>

                                    <!-- agen bep -->
                                    <td>33</td>
                                    <td>33</td>
                                    <td>66</td>
                                    <td style="background-color: #f99">92.31</td>

                                    <!-- pertumbuhan agen -->
                                    <td>2</td>
                                    <td>9</td>
                                    <td style="background-color: #2ED15F;">137.5</td>

                                    <!-- bumdes -->
                                    <td>1</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>4</td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>15</td>
                                    <td>10</td>
                                    <td style="background-color: #2ED15F;">150</td>

                                    <!-- reff. pinj -->
                                    <td>147</td>
                                    <td>13</td>
                                    <td style="background-color: #2ED15F;">1130.77</td>

                                    <!-- active web -->
                                    <td>284</td>
                                    <td style="background-color: #ff9;">98.27</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.87</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td class="text-left">[JEMBER]bagus kurniawan akbar</td>

                                    <td style="background-color: #2ED15F;">102.19</td>
                                    <td>43</td>
                                    <td>312</td>
                                    <td>355</td>
                                    <td>375</td>
                                    <td style="background-color: #f99;">94.67</td>

                                    <!-- trx -->
                                    <td>32,764</td>
                                    <td>2,058</td>
                                    <td>258,249</td>
                                    <td>392,461</td>
                                    <td style="background-color: #f99;">65.8</td>

                                    <!-- fbi -->
                                    <td>55,195,706</td>
                                    <td>2,509,477</td>
                                    <td>417,501,797</td>
                                    <td>335,358,606</td>
                                    <td style="background-color: #2ED15F;">124.49</td>

                                    <!-- casa -->
                                    <td>1,031,163,979</td>
                                    <td>10,836,738,041</td>
                                    <td>11,867,902,020</td>
                                    <td>10,370,061,206</td>
                                    <td style="background-color: #2ED15F;">792.76</td>

                                    <!-- agen bep -->
                                    <td>40</td>
                                    <td>16</td>
                                    <td>56</td>
                                    <td style="background-color: #2ED15F">124.44</td>

                                    <!-- pertumbuhan agen -->
                                    <td>3</td>
                                    <td>18</td>
                                    <td style="background-color: #2ED15F;">150</td>

                                    <!-- bumdes -->
                                    <td>1</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>4</td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>27</td>
                                    <td>13</td>
                                    <td style="background-color: #2ED15F;">207.69</td>

                                    <!-- reff. pinj -->
                                    <td>69</td>
                                    <td>53</td>
                                    <td style="background-color: #2ED15F;">130.19</td>

                                    <!-- active web -->
                                    <td>291</td>
                                    <td style="background-color: #f99;">93.27</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td class="text-left">[TULUNGAGUNG]laksvira ika arsianti</td>

                                    <td style="background-color: #2ED15F;">102.14</td>
                                    <td>89</td>
                                    <td>447</td>
                                    <td>536</td>
                                    <td>603</td>
                                    <td style="background-color: #f99;">88.89</td>

                                    <!-- trx -->
                                    <td>69,625</td>
                                    <td>7,456</td>
                                    <td>538,753</td>
                                    <td>537,068</td>
                                    <td style="background-color: #2ED15F;">100.31</td>

                                    <!-- fbi -->
                                    <td>115,865,194</td>
                                    <td>10,309,580</td>
                                    <td>890,396,346</td>
                                    <td>877,585,400</td>
                                    <td style="background-color: #2ED15F;">101.46</td>

                                    <!-- casa -->
                                    <td>2,750,429,330</td>
                                    <td>12,015,081,417</td>
                                    <td>14,765,510,747</td>
                                    <td>17,098,716,243</td>
                                    <td style="background-color: #f99;">618.82</td>

                                    <!-- agen bep -->
                                    <td>73</td>
                                    <td>38</td>
                                    <td>111</td>
                                    <td style="background-color: #2ED15F">125.42</td>

                                    <!-- pertumbuhan agen -->
                                    <td>10</td>
                                    <td>27</td>
                                    <td style="background-color: #2ED15F;">112.12</td>

                                    <!-- bumdes -->
                                    <td>17</td>
                                    <td>17</td>
                                    <td>34</td>
                                    <td>26</td>
                                    <td style="background-color: #2ED15F;">130.77</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>21</td>
                                    <td>21</td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <!-- reff. pinj -->
                                    <td>105</td>
                                    <td>25</td>
                                    <td style="background-color: #2ED15F;">420</td>

                                    <!-- active web -->
                                    <td>447</td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.91</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td class="text-left">[PASURUAN]aris agusta p</td>

                                    <td style="background-color: #2ED15F;">101.87</td>
                                    <td>27</td>
                                    <td>286</td>
                                    <td>313</td>
                                    <td>345</td>
                                    <td style="background-color: #f99;">90.72</td>

                                    <!-- trx -->
                                    <td>12,113</td>
                                    <td>13,288</td>
                                    <td>165,795</td>
                                    <td>138,164</td>
                                    <td style="background-color: #2ED15F;">120</td>

                                    <!-- fbi -->
                                    <td>17,013,570</td>
                                    <td>8,429,974</td>
                                    <td>168,559,073</td>
                                    <td>151,954,639</td>
                                    <td style="background-color: #2ED15F;">110.93</td>

                                    <!-- casa -->
                                    <td>389,265,932</td>
                                    <td>4,858,780,908</td>
                                    <td>5,248,046,840</td>
                                    <td>8,562,510,304</td>
                                    <td style="background-color: #f99;">503.58</td>

                                    <!-- agen bep -->
                                    <td>27</td>
                                    <td>47</td>
                                    <td>74</td>
                                    <td style="background-color: #2ED15F">140.95</td>

                                    <!-- pertumbuhan agen -->
                                    <td>1</td>
                                    <td>10</td>
                                    <td style="background-color: #2ED15F;">137.5</td>

                                    <!-- bumdes -->
                                    <td>0</td>
                                    <td>3</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td style="background-color: #f99;">75</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>11</td>
                                    <td>10</td>
                                    <td style="background-color: #2ED15F;">110</td>

                                    <!-- reff. pinj -->
                                    <td>107</td>
                                    <td>13</td>
                                    <td style="background-color: #2ED15F;">823.08</td>

                                    <!-- active web -->
                                    <td>274</td>
                                    <td style="background-color: #ff9;">95.8</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.87</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td class="text-left">[BLITAR]heinrich purwo</td>

                                    <td style="background-color: #2ED15F;">101.82</td>
                                    <td>62</td>
                                    <td>278</td>
                                    <td>340</td>
                                    <td>378</td>
                                    <td style="background-color: #f99;">89.95</td>

                                    <!-- trx -->
                                    <td>39,573</td>
                                    <td>3,339</td>
                                    <td>349,203</td>
                                    <td>339,129</td>
                                    <td style="background-color: #2ED15F;">102.97</td>

                                    <!-- fbi -->
                                    <td>68,008,394</td>
                                    <td>4,245,854</td>
                                    <td>586,597,836</td>
                                    <td>420,710,726</td>
                                    <td style="background-color: #2ED15F;">139.43</td>

                                    <!-- casa -->
                                    <td>1,125,348,822</td>
                                    <td>7,511,324,607</td>
                                    <td>8,636,673,429</td>
                                    <td>10,431,735,938</td>
                                    <td style="background-color: #f99;">533.14</td>

                                    <!-- agen bep -->
                                    <td>52</td>
                                    <td>20</td>
                                    <td>72</td>
                                    <td style="background-color: #2ED15F">109.92</td>

                                    <!-- pertumbuhan agen -->
                                    <td>7</td>
                                    <td>20</td>
                                    <td style="background-color: #2ED15F;">150</td>

                                    <!-- bumdes -->
                                    <td>4</td>
                                    <td>6</td>
                                    <td>10</td>
                                    <td>9</td>
                                    <td style="background-color: #2ED15F;">111.11</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>9</td>
                                    <td>14</td>
                                    <td style="background-color: #f99;">64.29</td>

                                    <!-- reff. pinj -->
                                    <td>359</td>
                                    <td>39</td>
                                    <td style="background-color: #2ED15F;">920.51</td>

                                    <!-- active web -->
                                    <td>269</td>
                                    <td style="background-color: #ff9;">96.76</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.91</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td class="text-left">[BLITAR]egi ariga pratama</td>

                                    <td style="background-color: #2ED15F;">101.6</td>
                                    <td>68</td>
                                    <td>368</td>
                                    <td>436</td>
                                    <td>454</td>
                                    <td style="background-color: #ff9;">96.04</td>

                                    <!-- trx -->
                                    <td>33,605</td>
                                    <td>54,754</td>
                                    <td>445,300</td>
                                    <td>406,955</td>
                                    <td style="background-color: #2ED15F;">109.42</td>

                                    <!-- fbi -->
                                    <td>56,784,281</td>
                                    <td>7,349,298</td>
                                    <td>456,342,654</td>
                                    <td>504,852,871</td>
                                    <td style="background-color: #f99;">90.39</td>

                                    <!-- casa -->
                                    <td>2,435,586,662</td>
                                    <td>7,109,341,128</td>
                                    <td>9,544,927,790</td>
                                    <td>12,518,083,126</td>
                                    <td style="background-color: #f99;">529.4</td>

                                    <!-- agen bep -->
                                    <td>57</td>
                                    <td>21</td>
                                    <td>78</td>
                                    <td style="background-color: #2ED15F">133.33</td>

                                    <!-- pertumbuhan agen -->
                                    <td>6</td>
                                    <td>13</td>
                                    <td style="background-color: #2ED15F;">105.56</td>

                                    <!-- bumdes -->
                                    <td>5</td>
                                    <td>5</td>
                                    <td>10</td>
                                    <td>9</td>
                                    <td style="background-color: #2ED15F;">111.11</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>18</td>
                                    <td>14</td>
                                    <td style="background-color: #2ED15F;">128.57</td>

                                    <!-- reff. pinj -->
                                    <td>144</td>
                                    <td>39</td>
                                    <td style="background-color: #2ED15F;">369.23</td>

                                    <!-- active web -->
                                    <td>355</td>
                                    <td style="background-color: #ff9;">96.47</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.91</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td class="text-left">[KEDIRI]astikasari</td>

                                    <td style="background-color: #2ED15F;">101.58</td>
                                    <td>36</td>
                                    <td>606</td>
                                    <td>642</td>
                                    <td>475</td>
                                    <td style="background-color: #2ED15F;">135.16</td>

                                    <!-- trx -->
                                    <td>19,946</td>
                                    <td>33,309</td>
                                    <td>248,225</td>
                                    <td>257,437</td>
                                    <td style="background-color: #ff9;">96.42</td>

                                    <!-- fbi -->
                                    <td>18,899,657</td>
                                    <td>3,230,198</td>
                                    <td>157,164,574</td>
                                    <td>204,402,046</td>
                                    <td style="background-color: #f99;">76.89</td>

                                    <!-- casa -->
                                    <td>465,207,634</td>
                                    <td>16,544,963,022</td>
                                    <td>17,010,170,656</td>
                                    <td>10,531,693,062</td>
                                    <td style="background-color: #2ED15F;">1002.64</td>

                                    <!-- agen bep -->
                                    <td>36</td>
                                    <td>164</td>
                                    <td>200</td>
                                    <td style="background-color: #2ED15F">287.77</td>

                                    <!-- pertumbuhan agen -->
                                    <td>0</td>
                                    <td>15</td>
                                    <td style="background-color: #2ED15F;">107.14</td>

                                    <!-- bumdes -->
                                    <td>1</td>
                                    <td>6</td>
                                    <td>7</td>
                                    <td>10</td>
                                    <td style="background-color: #f99;">70</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>24</td>
                                    <td>14</td>
                                    <td style="background-color: #2ED15F;">171.43</td>

                                    <!-- reff. pinj -->
                                    <td>117</td>
                                    <td>65</td>
                                    <td style="background-color: #2ED15F;">180</td>

                                    <!-- active web -->
                                    <td>606</td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.5</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>31</td>
                                    <td class="text-left">[PACITAN]ahmad romli</td>

                                    <td style="background-color: #2ED15F;">101.55</td>
                                    <td>51</td>
                                    <td>203</td>
                                    <td>254</td>
                                    <td>374</td>
                                    <td style="background-color: #f99;">67.91</td>

                                    <!-- trx -->
                                    <td>41,862</td>
                                    <td>5,022</td>
                                    <td>344,550</td>
                                    <td>297,014</td>
                                    <td style="background-color: #2ED15F;">116</td>

                                    <!-- fbi -->
                                    <td>62,319,248</td>
                                    <td>5,418,368</td>
                                    <td>532,808,505</td>
                                    <td>453,322,980</td>
                                    <td style="background-color: #2ED15F;">117.53</td>

                                    <!-- casa -->
                                    <td>879,310,938</td>
                                    <td>6,316,584,542</td>
                                    <td>7,195,895,480</td>
                                    <td>8,889,570,963</td>
                                    <td style="background-color: #f99;">632.02</td>

                                    <!-- agen bep -->
                                    <td>51</td>
                                    <td>32</td>
                                    <td>83</td>
                                    <td style="background-color: #2ED15F">184.44</td>

                                    <!-- pertumbuhan agen -->
                                    <td>8</td>
                                    <td>20</td>
                                    <td style="background-color: #2ED15F;">133.33</td>

                                    <!-- bumdes -->
                                    <td>1</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>3</td>
                                    <td style="background-color: #2ED15F;">133.33</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>7</td>
                                    <td>10</td>
                                    <td style="background-color: #f99;">70</td>

                                    <!-- reff. pinj -->
                                    <td>159</td>
                                    <td>25</td>
                                    <td style="background-color: #2ED15F;">636</td>

                                    <!-- active web -->
                                    <td>169</td>
                                    <td style="background-color: #f99;">83.25</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.94</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>32</td>
                                    <td class="text-left">[BANYUWANGI]ferry andry setiawan</td>

                                    <td style="background-color: #2ED15F;">101.09</td>
                                    <td>76</td>
                                    <td>279</td>
                                    <td>355</td>
                                    <td>384</td>
                                    <td style="background-color: #f99;">92.45</td>

                                    <!-- trx -->
                                    <td>78,520</td>
                                    <td>9,157</td>
                                    <td>847,497</td>
                                    <td>633,858</td>
                                    <td style="background-color: #2ED15F;">133.7</td>

                                    <!-- fbi -->
                                    <td>105,191,419</td>
                                    <td>7,134,009</td>
                                    <td>796,235,237</td>
                                    <td>795,334,224</td>
                                    <td style="background-color: #2ED15F;">100.11</td>

                                    <!-- casa -->
                                    <td>1,162,348,925</td>
                                    <td>3,549,313,237</td>
                                    <td>4,711,662,162</td>
                                    <td>9,114,553,032</td>
                                    <td style="background-color: #f99;">430.34</td>

                                    <!-- agen bep -->
                                    <td>67</td>
                                    <td>25</td>
                                    <td>92</td>
                                    <td style="background-color: #2ED15F">176.92</td>

                                    <!-- pertumbuhan agen -->
                                    <td>12</td>
                                    <td>32</td>
                                    <td style="background-color: #2ED15F;">151.72</td>

                                    <!-- bumdes -->
                                    <td>3</td>
                                    <td>4</td>
                                    <td>7</td>
                                    <td>7</td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>14</td>
                                    <td>11</td>
                                    <td style="background-color: #2ED15F;">127.27</td>

                                    <!-- reff. pinj -->
                                    <td>194</td>
                                    <td>76</td>
                                    <td style="background-color: #2ED15F;">255.26</td>

                                    <!-- active web -->
                                    <td>274</td>
                                    <td style="background-color: #ff9;">98.21</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.9</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>33</td>
                                    <td class="text-left">[LUMAJANG]m hasan mustajibillah</td>

                                    <td style="background-color: #2ED15F;">101.05</td>
                                    <td>42</td>
                                    <td>462</td>
                                    <td>504</td>
                                    <td>639</td>
                                    <td style="background-color: #f99;">78.87</td>

                                    <!-- trx -->
                                    <td>24,377</td>
                                    <td>7,946</td>
                                    <td>238,345</td>
                                    <td>284,435</td>
                                    <td style="background-color: #f99;">83.8</td>

                                    <!-- fbi -->
                                    <td>37,598,243</td>
                                    <td>7,729,334</td>
                                    <td>335,082,280</td>
                                    <td>333,326,374</td>
                                    <td style="background-color: #2ED15F;">100.53</td>

                                    <!-- casa -->
                                    <td>1,647,966,627</td>
                                    <td>26,339,019,914</td>
                                    <td>27,986,986,541</td>
                                    <td>13,623,471,940</td>
                                    <td style="background-color: #2ED15F;">1355.81</td>

                                    <!-- agen bep -->
                                    <td>37</td>
                                    <td>43</td>
                                    <td>80</td>
                                    <td style="background-color: #2ED15F">103.23</td>

                                    <!-- pertumbuhan agen -->
                                    <td>2</td>
                                    <td>17</td>
                                    <td style="background-color: #2ED15F;">158.33</td>

                                    <!-- bumdes -->
                                    <td>4</td>
                                    <td>5</td>
                                    <td>9</td>
                                    <td>4</td>
                                    <td style="background-color: #2ED15F;">225</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>100</td>
                                    <td>54</td>
                                    <td style="background-color: #2ED15F;">185.19</td>

                                    <!-- reff. pinj -->
                                    <td>339</td>
                                    <td>87</td>
                                    <td style="background-color: #2ED15F;">389.66</td>

                                    <!-- active web -->
                                    <td>457</td>
                                    <td style="background-color: #ff9;">98.92</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.89</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>34</td>
                                    <td class="text-left">[PARE]taufik alvian</td>

                                    <td style="background-color: #2ED15F;">100.4</td>
                                    <td>93</td>
                                    <td>280</td>
                                    <td>373</td>
                                    <td>460</td>
                                    <td style="background-color: #f99;">81.09</td>

                                    <!-- trx -->
                                    <td>54,347</td>
                                    <td>2,210</td>
                                    <td>407,019</td>
                                    <td>528,208</td>
                                    <td style="background-color: #f99;">77.06</td>

                                    <!-- fbi -->
                                    <td>87,624,826</td>
                                    <td>2,019,570</td>
                                    <td>649,590,607</td>
                                    <td>613,425,382</td>
                                    <td style="background-color: #2ED15F;">105.9</td>

                                    <!-- casa -->
                                    <td>1,095,629,825</td>
                                    <td>14,884,542,201</td>
                                    <td>15,980,172,026</td>
                                    <td>13,336,236,764</td>
                                    <td style="background-color: #2ED15F;">819.08</td>

                                    <!-- agen bep -->
                                    <td>79</td>
                                    <td>13</td>
                                    <td>92</td>
                                    <td style="background-color: #2ED15F">134.31</td>

                                    <!-- pertumbuhan agen -->
                                    <td>6</td>
                                    <td>25</td>
                                    <td style="background-color: #2ED15F;">155</td>

                                    <!-- bumdes -->
                                    <td>6</td>
                                    <td>4</td>
                                    <td>10</td>
                                    <td>5</td>
                                    <td style="background-color: #2ED15F;">200</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>24</td>
                                    <td>13</td>
                                    <td style="background-color: #2ED15F;">184.62</td>

                                    <!-- reff. pinj -->
                                    <td>86</td>
                                    <td>30</td>
                                    <td style="background-color: #2ED15F;">286.67</td>

                                    <!-- active web -->
                                    <td>174</td>
                                    <td style="background-color: #f99;">62.14</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.88</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>35</td>
                                    <td class="text-left">[NGANJUK]rilo pambudi m</td>

                                    <td style="background-color: #2ED15F;">100.11</td>
                                    <td>71</td>
                                    <td>494</td>
                                    <td>565</td>
                                    <td>613</td>
                                    <td style="background-color: #f99;">92.17</td>

                                    <!-- trx -->
                                    <td>66,286</td>
                                    <td>1,132</td>
                                    <td>492,407</td>
                                    <td>904,728</td>
                                    <td style="background-color: #f99;">54.43</td>

                                    <!-- fbi -->
                                    <td>64,040,420</td>
                                    <td>1,447,638</td>
                                    <td>462,522,631</td>
                                    <td>402,710,377</td>
                                    <td style="background-color: #2ED15F;">114.85</td>

                                    <!-- casa -->
                                    <td>848,736,843</td>
                                    <td>14,808,160,049</td>
                                    <td>15,656,896,892</td>
                                    <td>14,334,196,299</td>
                                    <td style="background-color: #2ED15F;">726.27</td>

                                    <!-- agen bep -->
                                    <td>69</td>
                                    <td>6</td>
                                    <td>75</td>
                                    <td style="background-color: #2ED15F">154.64</td>

                                    <!-- pertumbuhan agen -->
                                    <td>6</td>
                                    <td>23</td>
                                    <td style="background-color: #2ED15F;">103.57</td>

                                    <!-- bumdes -->
                                    <td>0</td>
                                    <td>32</td>
                                    <td>32</td>
                                    <td>10</td>
                                    <td style="background-color: #2ED15F;">320</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>25</td>
                                    <td>20</td>
                                    <td style="background-color: #2ED15F;">125</td>

                                    <!-- reff. pinj -->
                                    <td>163</td>
                                    <td>12</td>
                                    <td style="background-color: #2ED15F;">1358.33</td>

                                    <!-- active web -->
                                    <td>484</td>
                                    <td style="background-color: #ff9;">97.98</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.99</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>36</td>
                                    <td class="text-left">[NGAWI]agnes kusuma prembayun</td>

                                    <td style="background-color: #2ED15F;">100.07</td>
                                    <td>53</td>
                                    <td>271</td>
                                    <td>324</td>
                                    <td>399</td>
                                    <td style="background-color: #f99;">81.2</td>

                                    <!-- trx -->
                                    <td>39,694</td>
                                    <td>3,269</td>
                                    <td>299,014</td>
                                    <td>257,817</td>
                                    <td style="background-color: #2ED15F;">115.98</td>

                                    <!-- fbi -->
                                    <td>64,784,734</td>
                                    <td>4,666,210</td>
                                    <td>460,333,504</td>
                                    <td>440,756,961</td>
                                    <td style="background-color: #2ED15F;">104.44</td>

                                    <!-- casa -->
                                    <td>1,036,239,457</td>
                                    <td>9,037,185,444</td>
                                    <td>10,073,424,901</td>
                                    <td>10,753,503,416</td>
                                    <td style="background-color: #f99;">646.19</td>

                                    <!-- agen bep -->
                                    <td>45</td>
                                    <td>19</td>
                                    <td>64</td>
                                    <td style="background-color: #f99">88.89</td>

                                    <!-- pertumbuhan agen -->
                                    <td>8</td>
                                    <td>10</td>
                                    <td style="background-color: #f99;">94.74</td>

                                    <!-- bumdes -->
                                    <td>4</td>
                                    <td>1</td>
                                    <td>5</td>
                                    <td>3</td>
                                    <td style="background-color: #2ED15F;">166.67</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>11</td>
                                    <td>12</td>
                                    <td style="background-color: #f99;">91.67</td>

                                    <!-- reff. pinj -->
                                    <td>355</td>
                                    <td>38</td>
                                    <td style="background-color: #2ED15F;">934.21</td>

                                    <!-- active web -->
                                    <td>228</td>
                                    <td style="background-color: #f99;">84.13</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.96</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>37</td>
                                    <td class="text-left">[TRENGGALEK]nanang hadi sofyan</td>

                                    <td style="background-color: #ff9;">99.93</td>
                                    <td>104</td>
                                    <td>287</td>
                                    <td>391</td>
                                    <td>427</td>
                                    <td style="background-color: #f99;">91.57</td>

                                    <!-- trx -->
                                    <td>63,360</td>
                                    <td>5,549</td>
                                    <td>517,451</td>
                                    <td>519,008</td>
                                    <td style="background-color: #ff9;">99.7</td>

                                    <!-- fbi -->
                                    <td>100,611,796</td>
                                    <td>6,516,168</td>
                                    <td>804,938,709</td>
                                    <td>862,866,341</td>
                                    <td style="background-color: #f99;">93.29</td>

                                    <!-- casa -->
                                    <td>2,867,597,530</td>
                                    <td>8,218,655,752</td>
                                    <td>11,086,253,282</td>
                                    <td>10,665,009,966</td>
                                    <td style="background-color: #2ED15F;">639.32</td>

                                    <!-- agen bep -->
                                    <td>79</td>
                                    <td>30</td>
                                    <td>109</td>
                                    <td style="background-color: #2ED15F">116.58</td>

                                    <!-- pertumbuhan agen -->
                                    <td>10</td>
                                    <td>30</td>
                                    <td style="background-color: #f99;">88.89</td>

                                    <!-- bumdes -->
                                    <td>15</td>
                                    <td>1</td>
                                    <td>16</td>
                                    <td>18</td>
                                    <td style="background-color: #f99;">88.89</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>26</td>
                                    <td>23</td>
                                    <td style="background-color: #2ED15F;">113.04</td>

                                    <!-- reff. pinj -->
                                    <td>190</td>
                                    <td>69</td>
                                    <td style="background-color: #2ED15F;">275.36</td>

                                    <!-- active web -->
                                    <td>224</td>
                                    <td style="background-color: #f99;">78.05</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.72</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>38</td>
                                    <td class="text-left">[PONOROGO]hanif dony h</td>

                                    <td style="background-color: #ff9;">99.17</td>
                                    <td>78</td>
                                    <td>303</td>
                                    <td>381</td>
                                    <td>476</td>
                                    <td style="background-color: #f99;">80.04</td>

                                    <!-- trx -->
                                    <td>46,930</td>
                                    <td>3,797</td>
                                    <td>384,120</td>
                                    <td>372,624</td>
                                    <td style="background-color: #2ED15F;">103.09</td>

                                    <!-- fbi -->
                                    <td>67,944,601</td>
                                    <td>4,882,353</td>
                                    <td>552,815,457</td>
                                    <td>590,135,321</td>
                                    <td style="background-color: #f99;">93.68</td>

                                    <!-- casa -->
                                    <td>1,610,442,209</td>
                                    <td>8,167,493,807</td>
                                    <td>9,777,936,016</td>
                                    <td>11,141,600,676</td>
                                    <td style="background-color: #f99;">727.15</td>

                                    <!-- agen bep -->
                                    <td>70</td>
                                    <td>23</td>
                                    <td>93</td>
                                    <td style="background-color: #2ED15F">135.77</td>

                                    <!-- pertumbuhan agen -->
                                    <td>7</td>
                                    <td>24</td>
                                    <td style="background-color: #2ED15F;">124</td>

                                    <!-- bumdes -->
                                    <td>5</td>
                                    <td>3</td>
                                    <td>8</td>
                                    <td>6</td>
                                    <td style="background-color: #2ED15F;">133.33</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>19</td>
                                    <td>15</td>
                                    <td style="background-color: #2ED15F;">126.67</td>

                                    <!-- reff. pinj -->
                                    <td>14</td>
                                    <td>15</td>
                                    <td style="background-color: #f99;">93.33</td>

                                    <!-- active web -->
                                    <td>226</td>
                                    <td style="background-color: #f99;">74.59</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.64</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>39</td>
                                    <td class="text-left">[PASURUAN]jhony johansyah</td>

                                    <td style="background-color: #ff9;">98.86</td>
                                    <td>35</td>
                                    <td>278</td>
                                    <td>313</td>
                                    <td>527</td>
                                    <td style="background-color: #f99;">59.39</td>

                                    <!-- trx -->
                                    <td>15,377</td>
                                    <td>16,903</td>
                                    <td>258,938</td>
                                    <td>211,309</td>
                                    <td style="background-color: #2ED15F;">122.54</td>

                                    <!-- fbi -->
                                    <td>20,581,553</td>
                                    <td>4,554,150</td>
                                    <td>183,027,332</td>
                                    <td>232,401,213</td>
                                    <td style="background-color: #f99;">78.75</td>

                                    <!-- casa -->
                                    <td>463,129,965</td>
                                    <td>11,053,630,340</td>
                                    <td>11,516,760,305</td>
                                    <td>13,095,603,994</td>
                                    <td style="background-color: #f99;">660.4</td>

                                    <!-- agen bep -->
                                    <td>31</td>
                                    <td>32</td>
                                    <td>63</td>
                                    <td style="background-color: #2ED15F">151.81</td>

                                    <!-- pertumbuhan agen -->
                                    <td>2</td>
                                    <td>8</td>
                                    <td style="background-color: #2ED15F;">125</td>

                                    <!-- bumdes -->
                                    <td>2</td>
                                    <td>3</td>
                                    <td>5</td>
                                    <td>4</td>
                                    <td style="background-color: #2ED15F;">125</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>17</td>
                                    <td>10</td>
                                    <td style="background-color: #2ED15F;">170</td>

                                    <!-- reff. pinj -->
                                    <td>187</td>
                                    <td>13</td>
                                    <td style="background-color: #2ED15F;">1438.46</td>

                                    <!-- active web -->
                                    <td>268</td>
                                    <td style="background-color: #ff9;">96.4</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.87</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>40</td>
                                    <td class="text-left">[SITUBONDO]puguh hendriatma w.</td>

                                    <td style="background-color: #ff9;">98.66</td>
                                    <td>41</td>
                                    <td>301</td>
                                    <td>342</td>
                                    <td>371</td>
                                    <td style="background-color: #f99;">92.18</td>

                                    <!-- trx -->
                                    <td>36,903</td>
                                    <td>34,672</td>
                                    <td>406,272</td>
                                    <td>476,018</td>
                                    <td style="background-color: #f99;">85.35</td>

                                    <!-- fbi -->
                                    <td>63,079,650</td>
                                    <td>2,001,033</td>
                                    <td>403,122,588</td>
                                    <td>285,196,501</td>
                                    <td style="background-color: #2ED15F;">141.35</td>

                                    <!-- casa -->
                                    <td>546,734,021</td>
                                    <td>11,575,661,931</td>
                                    <td>12,122,395,952</td>
                                    <td>9,228,197,961</td>
                                    <td style="background-color: #2ED15F;">882.91</td>

                                    <!-- agen bep -->
                                    <td>33</td>
                                    <td>50</td>
                                    <td>83</td>
                                    <td style="background-color: #2ED15F">167.68</td>

                                    <!-- pertumbuhan agen -->
                                    <td>2</td>
                                    <td>12</td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <!-- bumdes -->
                                    <td>3</td>
                                    <td>6</td>
                                    <td>9</td>
                                    <td>9</td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>1</td>
                                    <td>24</td>
                                    <td style="background-color: #f99;">4.17</td>

                                    <!-- reff. pinj -->
                                    <td>79</td>
                                    <td>52</td>
                                    <td style="background-color: #2ED15F;">151.92</td>

                                    <!-- active web -->
                                    <td>282</td>
                                    <td style="background-color: #f99;">93.69</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.98</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>41</td>
                                    <td class="text-left">[LUMAJANG]denny febriyanto</td>

                                    <td style="background-color: #ff9;">98.28</td>
                                    <td>33</td>
                                    <td>393</td>
                                    <td>426</td>
                                    <td>562</td>
                                    <td style="background-color: #f99;">75.8</td>

                                    <!-- trx -->
                                    <td>20,964</td>
                                    <td>3,682</td>
                                    <td>206,698</td>
                                    <td>250,303</td>
                                    <td style="background-color: #f99;">82.58</td>

                                    <!-- fbi -->
                                    <td>32,055,860</td>
                                    <td>4,107,910</td>
                                    <td>291,217,967</td>
                                    <td>293,327,209</td>
                                    <td style="background-color: #ff9;">99.28</td>

                                    <!-- casa -->
                                    <td>568,852,769</td>
                                    <td>15,791,640,973</td>
                                    <td>16,360,493,742</td>
                                    <td>11,988,655,307</td>
                                    <td style="background-color: #2ED15F;">983.19</td>

                                    <!-- agen bep -->
                                    <td>27</td>
                                    <td>24</td>
                                    <td>51</td>
                                    <td style="background-color: #f99">82.93</td>

                                    <!-- pertumbuhan agen -->
                                    <td>2</td>
                                    <td>12</td>
                                    <td style="background-color: #2ED15F;">116.67</td>

                                    <!-- bumdes -->
                                    <td>3</td>
                                    <td>3</td>
                                    <td>6</td>
                                    <td>4</td>
                                    <td style="background-color: #2ED15F;">150</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>68</td>
                                    <td>54</td>
                                    <td style="background-color: #2ED15F;">125.93</td>

                                    <!-- reff. pinj -->
                                    <td>102</td>
                                    <td>87</td>
                                    <td style="background-color: #2ED15F;">117.24</td>

                                    <!-- active web -->
                                    <td>384</td>
                                    <td style="background-color: #ff9;">97.71</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.89</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>42</td>
                                    <td class="text-left">[NGAWI]bias cahyo purnomo</td>

                                    <td style="background-color: #ff9;">98.1</td>
                                    <td>51</td>
                                    <td>203</td>
                                    <td>254</td>
                                    <td>357</td>
                                    <td style="background-color: #f99;">71.15</td>

                                    <!-- trx -->
                                    <td>34,325</td>
                                    <td>1,549</td>
                                    <td>261,081</td>
                                    <td>230,678</td>
                                    <td style="background-color: #2ED15F;">113.18</td>

                                    <!-- fbi -->
                                    <td>63,269,237</td>
                                    <td>2,073,612</td>
                                    <td>463,714,646</td>
                                    <td>394,361,491</td>
                                    <td style="background-color: #2ED15F;">117.59</td>

                                    <!-- casa -->
                                    <td>2,114,476,934</td>
                                    <td>6,540,844,181</td>
                                    <td>8,655,321,115</td>
                                    <td>9,621,555,688</td>
                                    <td style="background-color: #f99;">585.48</td>

                                    <!-- agen bep -->
                                    <td>46</td>
                                    <td>13</td>
                                    <td>59</td>
                                    <td style="background-color: #f99">90.08</td>

                                    <!-- pertumbuhan agen -->
                                    <td>4</td>
                                    <td>21</td>
                                    <td style="background-color: #2ED15F;">131.58</td>

                                    <!-- bumdes -->
                                    <td>4</td>
                                    <td>0</td>
                                    <td>4</td>
                                    <td>3</td>
                                    <td style="background-color: #2ED15F;">133.33</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>3</td>
                                    <td>12</td>
                                    <td style="background-color: #f99;">25</td>

                                    <!-- reff. pinj -->
                                    <td>146</td>
                                    <td>38</td>
                                    <td style="background-color: #2ED15F;">384.21</td>

                                    <!-- active web -->
                                    <td>183</td>
                                    <td style="background-color: #f99;">90.15</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.96</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>43</td>
                                    <td class="text-left">[MADIUN]devi mahrita</td>

                                    <td style="background-color: #ff9;">98.02</td>
                                    <td>50</td>
                                    <td>198</td>
                                    <td>248</td>
                                    <td>351</td>
                                    <td style="background-color: #f99;">70.66</td>

                                    <!-- trx -->
                                    <td>29,154</td>
                                    <td>2,956</td>
                                    <td>240,845</td>
                                    <td>243,163</td>
                                    <td style="background-color: #ff9;">99.05</td>

                                    <!-- fbi -->
                                    <td>47,430,934</td>
                                    <td>3,472,857</td>
                                    <td>361,034,813</td>
                                    <td>370,032,869</td>
                                    <td style="background-color: #ff9;">97.57</td>

                                    <!-- casa -->
                                    <td>537,498,582</td>
                                    <td>7,438,725,517</td>
                                    <td>7,976,224,099</td>
                                    <td>9,002,879,392</td>
                                    <td style="background-color: #f99;">567.39</td>

                                    <!-- agen bep -->
                                    <td>46</td>
                                    <td>19</td>
                                    <td>65</td>
                                    <td style="background-color: #2ED15F">131.31</td>

                                    <!-- pertumbuhan agen -->
                                    <td>2</td>
                                    <td>17</td>
                                    <td style="background-color: #2ED15F;">126.67</td>

                                    <!-- bumdes -->
                                    <td>3</td>
                                    <td>10</td>
                                    <td>13</td>
                                    <td>9</td>
                                    <td style="background-color: #2ED15F;">144.44</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>10</td>
                                    <td>11</td>
                                    <td style="background-color: #f99;">90.91</td>

                                    <!-- reff. pinj -->
                                    <td>156</td>
                                    <td>20</td>
                                    <td style="background-color: #2ED15F;">780</td>

                                    <!-- active web -->
                                    <td>142</td>
                                    <td style="background-color: #f99;">71.72</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.32</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>44</td>
                                    <td class="text-left">[MAGETAN]ulin nasfi'ah setiawan</td>

                                    <td style="background-color: #ff9;">98.02</td>
                                    <td>59</td>
                                    <td>195</td>
                                    <td>254</td>
                                    <td>287</td>
                                    <td style="background-color: #f99;">88.5</td>

                                    <!-- trx -->
                                    <td>42,021</td>
                                    <td>4,226</td>
                                    <td>446,550</td>
                                    <td>436,047</td>
                                    <td style="background-color: #2ED15F;">102.41</td>

                                    <!-- fbi -->
                                    <td>69,511,053</td>
                                    <td>5,004,861</td>
                                    <td>537,638,718</td>
                                    <td>497,869,205</td>
                                    <td style="background-color: #2ED15F;">107.99</td>

                                    <!-- casa -->
                                    <td>1,097,011,290</td>
                                    <td>3,595,495,147</td>
                                    <td>4,692,506,437</td>
                                    <td>5,567,750,455</td>
                                    <td style="background-color: #f99;">478.99</td>

                                    <!-- agen bep -->
                                    <td>51</td>
                                    <td>20</td>
                                    <td>71</td>
                                    <td style="background-color: #2ED15F">129.09</td>

                                    <!-- pertumbuhan agen -->
                                    <td>6</td>
                                    <td>21</td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <!-- bumdes -->
                                    <td>6</td>
                                    <td>7</td>
                                    <td>13</td>
                                    <td>13</td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>4</td>
                                    <td>11</td>
                                    <td style="background-color: #f99;">36.36</td>

                                    <!-- reff. pinj -->
                                    <td>86</td>
                                    <td>66</td>
                                    <td style="background-color: #2ED15F;">130.3</td>

                                    <!-- active web -->
                                    <td>171</td>
                                    <td style="background-color: #f99;">87.69</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.66</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>45</td>
                                    <td class="text-left">[TULUNGAGUNG]hasim pramono</td>

                                    <td style="background-color: #ff9;">97.59</td>
                                    <td>77</td>
                                    <td>275</td>
                                    <td>352</td>
                                    <td>491</td>
                                    <td style="background-color: #f99;">71.69</td>

                                    <!-- trx -->
                                    <td>58,742</td>
                                    <td>4,047</td>
                                    <td>466,825</td>
                                    <td>437,149</td>
                                    <td style="background-color: #2ED15F;">106.79</td>

                                    <!-- fbi -->
                                    <td>97,768,492</td>
                                    <td>4,265,365</td>
                                    <td>768,438,873</td>
                                    <td>714,313,698</td>
                                    <td style="background-color: #2ED15F;">107.58</td>

                                    <!-- casa -->
                                    <td>4,046,703,992</td>
                                    <td>9,517,428,243</td>
                                    <td>13,564,132,235</td>
                                    <td>13,917,559,733</td>
                                    <td style="background-color: #ff9;">682.22</td>

                                    <!-- agen bep -->
                                    <td>60</td>
                                    <td>21</td>
                                    <td>81</td>
                                    <td style="background-color: #2ED15F">148.62</td>

                                    <!-- pertumbuhan agen -->
                                    <td>9</td>
                                    <td>19</td>
                                    <td style="background-color: #f99;">84.85</td>

                                    <!-- bumdes -->
                                    <td>9</td>
                                    <td>17</td>
                                    <td>26</td>
                                    <td>26</td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>6</td>
                                    <td>21</td>
                                    <td style="background-color: #f99;">28.57</td>

                                    <!-- reff. pinj -->
                                    <td>40</td>
                                    <td>25</td>
                                    <td style="background-color: #2ED15F;">160</td>

                                    <!-- active web -->
                                    <td>267</td>
                                    <td style="background-color: #ff9;">97.09</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.91</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>46</td>
                                    <td class="text-left">[MADIUN]bayu dirgantoro</td>

                                    <td style="background-color: #ff9;">97.37</td>
                                    <td>44</td>
                                    <td>246</td>
                                    <td>290</td>
                                    <td>351</td>
                                    <td style="background-color: #f99;">82.62</td>

                                    <!-- trx -->
                                    <td>32,099</td>
                                    <td>3,400</td>
                                    <td>259,895</td>
                                    <td>243,163</td>
                                    <td style="background-color: #2ED15F;">106.88</td>

                                    <!-- fbi -->
                                    <td>53,906,717</td>
                                    <td>3,774,579</td>
                                    <td>381,729,045</td>
                                    <td>370,032,869</td>
                                    <td style="background-color: #2ED15F;">103.16</td>

                                    <!-- casa -->
                                    <td>745,220,008</td>
                                    <td>4,827,754,652</td>
                                    <td>5,572,974,660</td>
                                    <td>9,002,879,392</td>
                                    <td style="background-color: #f99;">493.3</td>

                                    <!-- agen bep -->
                                    <td>43</td>
                                    <td>24</td>
                                    <td>67</td>
                                    <td style="background-color: #2ED15F">161.45</td>

                                    <!-- pertumbuhan agen -->
                                    <td>2</td>
                                    <td>18</td>
                                    <td style="background-color: #2ED15F;">133.33</td>

                                    <!-- bumdes -->
                                    <td>1</td>
                                    <td>8</td>
                                    <td>9</td>
                                    <td>9</td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>7</td>
                                    <td>11</td>
                                    <td style="background-color: #f99;">63.64</td>

                                    <!-- reff. pinj -->
                                    <td>125</td>
                                    <td>20</td>
                                    <td style="background-color: #2ED15F;">625</td>

                                    <!-- active web -->
                                    <td>222</td>
                                    <td style="background-color: #f99;">90.24</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.32</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>47</td>
                                    <td class="text-left">[PONOROGO]andriani irawati</td>

                                    <td style="background-color: #ff9;">97.1</td>
                                    <td>62</td>
                                    <td>276</td>
                                    <td>338</td>
                                    <td>411</td>
                                    <td style="background-color: #f99;">82.24</td>

                                    <!-- trx -->
                                    <td>32,349</td>
                                    <td>9,927</td>
                                    <td>309,185</td>
                                    <td>322,269</td>
                                    <td style="background-color: #ff9;">95.94</td>

                                    <!-- fbi -->
                                    <td>47,701,627</td>
                                    <td>12,056,996</td>
                                    <td>439,548,311</td>
                                    <td>510,387,305</td>
                                    <td style="background-color: #f99;">86.12</td>

                                    <!-- casa -->
                                    <td>808,304,479</td>
                                    <td>7,702,860,955</td>
                                    <td>8,511,165,434</td>
                                    <td>9,635,978,963</td>
                                    <td style="background-color: #f99;">836.09</td>

                                    <!-- agen bep -->
                                    <td>54</td>
                                    <td>48</td>
                                    <td>102</td>
                                    <td style="background-color: #2ED15F">172.88</td>

                                    <!-- pertumbuhan agen -->
                                    <td>3</td>
                                    <td>19</td>
                                    <td style="background-color: #f99;">88</td>

                                    <!-- bumdes -->
                                    <td>2</td>
                                    <td>4</td>
                                    <td>6</td>
                                    <td>6</td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>26</td>
                                    <td>15</td>
                                    <td style="background-color: #2ED15F;">173.33</td>

                                    <!-- reff. pinj -->
                                    <td>21</td>
                                    <td>15</td>
                                    <td style="background-color: #2ED15F;">140</td>

                                    <!-- active web -->
                                    <td>254</td>
                                    <td style="background-color: #f99;">92.03</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.64</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>48</td>
                                    <td class="text-left">[NGAWI]sri oktin rulyana</td>

                                    <td style="background-color: #ff9;">96.78</td>
                                    <td>38</td>
                                    <td>227</td>
                                    <td>265</td>
                                    <td>315</td>
                                    <td style="background-color: #f99;">84.13</td>

                                    <!-- trx -->
                                    <td>30,097</td>
                                    <td>2,194</td>
                                    <td>220,713</td>
                                    <td>203,539</td>
                                    <td style="background-color: #2ED15F;">108.44</td>

                                    <!-- fbi -->
                                    <td>45,872,761</td>
                                    <td>2,697,075</td>
                                    <td>330,911,628</td>
                                    <td>347,966,022</td>
                                    <td style="background-color: #ff9;">95.1</td>

                                    <!-- casa -->
                                    <td>1,426,136,944</td>
                                    <td>6,070,792,346</td>
                                    <td>7,496,929,290</td>
                                    <td>8,489,607,960</td>
                                    <td style="background-color: #f99;">592.8</td>

                                    <!-- agen bep -->
                                    <td>35</td>
                                    <td>11</td>
                                    <td>46</td>
                                    <td style="background-color: #ff9">98.92</td>

                                    <!-- pertumbuhan agen -->
                                    <td>2</td>
                                    <td>14</td>
                                    <td style="background-color: #f99;">84.21</td>

                                    <!-- bumdes -->
                                    <td>2</td>
                                    <td>0</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td style="background-color: #f99;">66.67</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>26</td>
                                    <td>12</td>
                                    <td style="background-color: #2ED15F;">216.67</td>

                                    <!-- reff. pinj -->
                                    <td>60</td>
                                    <td>38</td>
                                    <td style="background-color: #2ED15F;">157.89</td>

                                    <!-- active web -->
                                    <td>196</td>
                                    <td style="background-color: #f99;">86.34</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.96</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>49</td>
                                    <td class="text-left">[SOEKARNO HATTA]moh adi saputra</td>

                                    <td style="background-color: #ff9;">96.71</td>
                                    <td>54</td>
                                    <td>408</td>
                                    <td>462</td>
                                    <td>527</td>
                                    <td style="background-color: #f99;">87.67</td>

                                    <!-- trx -->
                                    <td>17,285</td>
                                    <td>40,589</td>
                                    <td>350,502</td>
                                    <td>485,952</td>
                                    <td style="background-color: #f99;">72.13</td>

                                    <!-- fbi -->
                                    <td>29,969,027</td>
                                    <td>642,911</td>
                                    <td>212,465,286</td>
                                    <td>225,796,230</td>
                                    <td style="background-color: #f99;">94.1</td>

                                    <!-- casa -->
                                    <td>609,248,251</td>
                                    <td>24,293,060,673</td>
                                    <td>24,902,308,924</td>
                                    <td>15,232,898,607</td>
                                    <td style="background-color: #2ED15F;">1053.93</td>

                                    <!-- agen bep -->
                                    <td>40</td>
                                    <td>17</td>
                                    <td>57</td>
                                    <td style="background-color: #2ED15F">114</td>

                                    <!-- pertumbuhan agen -->
                                    <td>2</td>
                                    <td>7</td>
                                    <td style="background-color: #f99;">90</td>

                                    <!-- bumdes -->
                                    <td>3</td>
                                    <td>3</td>
                                    <td>6</td>
                                    <td>5</td>
                                    <td style="background-color: #2ED15F;">120</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>27</td>
                                    <td>39</td>
                                    <td style="background-color: #f99;">69.23</td>

                                    <!-- reff. pinj -->
                                    <td>57</td>
                                    <td>22</td>
                                    <td style="background-color: #2ED15F;">259.09</td>

                                    <!-- active web -->
                                    <td>400</td>
                                    <td style="background-color: #ff9;">98.04</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.99</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>50</td>
                                    <td class="text-left">[PASURUAN]syainur ardi</td>

                                    <td style="background-color: #ff9;">96.51</td>
                                    <td>28</td>
                                    <td>218</td>
                                    <td>246</td>
                                    <td>426</td>
                                    <td style="background-color: #f99;">57.75</td>

                                    <!-- trx -->
                                    <td>12,161</td>
                                    <td>16,325</td>
                                    <td>184,161</td>
                                    <td>170,673</td>
                                    <td style="background-color: #2ED15F;">107.9</td>

                                    <!-- fbi -->
                                    <td>16,767,109</td>
                                    <td>3,235,734</td>
                                    <td>162,324,204</td>
                                    <td>187,708,672</td>
                                    <td style="background-color: #f99;">86.48</td>

                                    <!-- casa -->
                                    <td>202,007,804</td>
                                    <td>13,244,382,831</td>
                                    <td>13,446,390,635</td>
                                    <td>10,577,218,611</td>
                                    <td style="background-color: #2ED15F;">869.48</td>

                                    <!-- agen bep -->
                                    <td>26</td>
                                    <td>18</td>
                                    <td>44</td>
                                    <td style="background-color: #f99">77.88</td>

                                    <!-- pertumbuhan agen -->
                                    <td>1</td>
                                    <td>9</td>
                                    <td style="background-color: #2ED15F;">125</td>

                                    <!-- bumdes -->
                                    <td>1</td>
                                    <td>4</td>
                                    <td>5</td>
                                    <td>4</td>
                                    <td style="background-color: #2ED15F;">125</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>9</td>
                                    <td>10</td>
                                    <td style="background-color: #f99;">90</td>

                                    <!-- reff. pinj -->
                                    <td>17</td>
                                    <td>13</td>
                                    <td style="background-color: #2ED15F;">130.77</td>

                                    <!-- active web -->
                                    <td>209</td>
                                    <td style="background-color: #ff9;">95.87</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.87</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>51</td>
                                    <td class="text-left">[PACITAN]rika rukmoko</td>

                                    <td style="background-color: #ff9;">96.37</td>
                                    <td>40</td>
                                    <td>176</td>
                                    <td>216</td>
                                    <td>314</td>
                                    <td style="background-color: #f99;">68.79</td>

                                    <!-- trx -->
                                    <td>34,625</td>
                                    <td>4,957</td>
                                    <td>274,334</td>
                                    <td>249,492</td>
                                    <td style="background-color: #2ED15F;">109.96</td>

                                    <!-- fbi -->
                                    <td>42,305,610</td>
                                    <td>5,191,147</td>
                                    <td>364,200,729</td>
                                    <td>380,791,303</td>
                                    <td style="background-color: #ff9;">95.64</td>

                                    <!-- casa -->
                                    <td>1,756,826,433</td>
                                    <td>3,667,313,718</td>
                                    <td>5,424,140,151</td>
                                    <td>7,467,239,609</td>
                                    <td style="background-color: #f99;">665.07</td>

                                    <!-- agen bep -->
                                    <td>38</td>
                                    <td>21</td>
                                    <td>59</td>
                                    <td style="background-color: #2ED15F">142.17</td>

                                    <!-- pertumbuhan agen -->
                                    <td>7</td>
                                    <td>18</td>
                                    <td style="background-color: #2ED15F;">119.05</td>

                                    <!-- bumdes -->
                                    <td>4</td>
                                    <td>1</td>
                                    <td>5</td>
                                    <td>3</td>
                                    <td style="background-color: #2ED15F;">166.67</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>6</td>
                                    <td>10</td>
                                    <td style="background-color: #f99;">60</td>

                                    <!-- reff. pinj -->
                                    <td>74</td>
                                    <td>25</td>
                                    <td style="background-color: #2ED15F;">296</td>

                                    <!-- active web -->
                                    <td>137</td>
                                    <td style="background-color: #f99;">77.84</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.94</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>52</td>
                                    <td class="text-left">[BLITAR]yuyus dwi kusuma wardana</td>

                                    <td style="background-color: #ff9;">95.81</td>
                                    <td>55</td>
                                    <td>322</td>
                                    <td>377</td>
                                    <td>391</td>
                                    <td style="background-color: #ff9;">96.42</td>

                                    <!-- trx -->
                                    <td>28,686</td>
                                    <td>27,483</td>
                                    <td>280,670</td>
                                    <td>350,434</td>
                                    <td style="background-color: #f99;">80.09</td>

                                    <!-- fbi -->
                                    <td>46,350,864</td>
                                    <td>2,859,191</td>
                                    <td>373,657,953</td>
                                    <td>434,734,417</td>
                                    <td style="background-color: #f99;">85.95</td>

                                    <!-- casa -->
                                    <td>826,289,602</td>
                                    <td>8,732,520,602</td>
                                    <td>9,558,810,204</td>
                                    <td>10,779,460,469</td>
                                    <td style="background-color: #f99;">671.32</td>

                                    <!-- agen bep -->
                                    <td>43</td>
                                    <td>18</td>
                                    <td>61</td>
                                    <td style="background-color: #2ED15F">145.24</td>

                                    <!-- pertumbuhan agen -->
                                    <td>4</td>
                                    <td>14</td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <!-- bumdes -->
                                    <td>3</td>
                                    <td>6</td>
                                    <td>9</td>
                                    <td>9</td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>13</td>
                                    <td>14</td>
                                    <td style="background-color: #f99;">92.86</td>

                                    <!-- reff. pinj -->
                                    <td>310</td>
                                    <td>39</td>
                                    <td style="background-color: #2ED15F;">794.87</td>

                                    <!-- active web -->
                                    <td>306</td>
                                    <td style="background-color: #ff9;">95.03</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.91</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>53</td>
                                    <td class="text-left">[LUMAJANG]sagita debriyanti</td>

                                    <td style="background-color: #ff9;">95.76</td>
                                    <td>37</td>
                                    <td>561</td>
                                    <td>598</td>
                                    <td>587</td>
                                    <td style="background-color: #2ED15F;">101.87</td>

                                    <!-- trx -->
                                    <td>23,022</td>
                                    <td>11,460</td>
                                    <td>213,191</td>
                                    <td>261,680</td>
                                    <td style="background-color: #f99;">81.47</td>

                                    <!-- fbi -->
                                    <td>35,700,720</td>
                                    <td>4,400,268</td>
                                    <td>293,373,796</td>
                                    <td>306,660,264</td>
                                    <td style="background-color: #ff9;">95.67</td>

                                    <!-- casa -->
                                    <td>778,706,117</td>
                                    <td>16,001,902,833</td>
                                    <td>16,780,608,950</td>
                                    <td>12,533,594,185</td>
                                    <td style="background-color: #2ED15F;">863.34</td>

                                    <!-- agen bep -->
                                    <td>31</td>
                                    <td>28</td>
                                    <td>59</td>
                                    <td style="background-color: #f99">69.82</td>

                                    <!-- pertumbuhan agen -->
                                    <td>3</td>
                                    <td>15</td>
                                    <td style="background-color: #2ED15F;">150</td>

                                    <!-- bumdes -->
                                    <td>3</td>
                                    <td>4</td>
                                    <td>7</td>
                                    <td>4</td>
                                    <td style="background-color: #2ED15F;">175</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>33</td>
                                    <td>54</td>
                                    <td style="background-color: #f99;">61.11</td>

                                    <!-- reff. pinj -->
                                    <td>103</td>
                                    <td>87</td>
                                    <td style="background-color: #2ED15F;">118.39</td>

                                    <!-- active web -->
                                    <td>502</td>
                                    <td style="background-color: #f99;">89.48</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.89</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>54</td>
                                    <td class="text-left">[MADIUN]ferdika luki hercahyono</td>

                                    <td style="background-color: #ff9;">95.58</td>
                                    <td>42</td>
                                    <td>174</td>
                                    <td>216</td>
                                    <td>281</td>
                                    <td style="background-color: #f99;">76.87</td>

                                    <!-- trx -->
                                    <td>23,175</td>
                                    <td>2,976</td>
                                    <td>196,697</td>
                                    <td>194,530</td>
                                    <td style="background-color: #2ED15F;">101.11</td>

                                    <!-- fbi -->
                                    <td>39,220,989</td>
                                    <td>1,843,128</td>
                                    <td>294,172,506</td>
                                    <td>296,026,295</td>
                                    <td style="background-color: #ff9;">99.37</td>

                                    <!-- casa -->
                                    <td>1,164,551,113</td>
                                    <td>6,649,649,901</td>
                                    <td>7,814,201,014</td>
                                    <td>7,202,303,514</td>
                                    <td style="background-color: #2ED15F;">749.84</td>

                                    <!-- agen bep -->
                                    <td>34</td>
                                    <td>10</td>
                                    <td>44</td>
                                    <td style="background-color: #2ED15F">118.92</td>

                                    <!-- pertumbuhan agen -->
                                    <td>2</td>
                                    <td>10</td>
                                    <td style="background-color: #f99;">80</td>

                                    <!-- bumdes -->
                                    <td>2</td>
                                    <td>8</td>
                                    <td>10</td>
                                    <td>9</td>
                                    <td style="background-color: #2ED15F;">111.11</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>0</td>
                                    <td>11</td>
                                    <td style="background-color: #f99;">0</td>

                                    <!-- reff. pinj -->
                                    <td>77</td>
                                    <td>20</td>
                                    <td style="background-color: #2ED15F;">385</td>

                                    <!-- active web -->
                                    <td>155</td>
                                    <td style="background-color: #f99;">89.08</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.32</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>55</td>
                                    <td class="text-left">[MALANG SUTOYO]prima setyo</td>

                                    <td style="background-color: #ff9;">95.45</td>
                                    <td>55</td>
                                    <td>340</td>
                                    <td>395</td>
                                    <td>550</td>
                                    <td style="background-color: #f99;">71.82</td>

                                    <!-- trx -->
                                    <td>12,901</td>
                                    <td>60,584</td>
                                    <td>640,113</td>
                                    <td>389,137</td>
                                    <td style="background-color: #2ED15F;">164.5</td>

                                    <!-- fbi -->
                                    <td>20,452,169</td>
                                    <td>392,467</td>
                                    <td>160,851,063</td>
                                    <td>213,001,461</td>
                                    <td style="background-color: #f99;">75.52</td>

                                    <!-- casa -->
                                    <td>581,679,147</td>
                                    <td>20,677,351,748</td>
                                    <td>21,259,030,895</td>
                                    <td>27,066,212,832</td>
                                    <td style="background-color: #f99;">666.28</td>

                                    <!-- agen bep -->
                                    <td>40</td>
                                    <td>32</td>
                                    <td>72</td>
                                    <td style="background-color: #f99">87.8</td>

                                    <!-- pertumbuhan agen -->
                                    <td>0</td>
                                    <td>7</td>
                                    <td style="background-color: #2ED15F;">116.67</td>

                                    <!-- bumdes -->
                                    <td>6</td>
                                    <td>7</td>
                                    <td>13</td>
                                    <td>7</td>
                                    <td style="background-color: #2ED15F;">185.71</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>26</td>
                                    <td>25</td>
                                    <td style="background-color: #2ED15F;">104</td>

                                    <!-- reff. pinj -->
                                    <td>30</td>
                                    <td>24</td>
                                    <td style="background-color: #2ED15F;">125</td>

                                    <!-- active web -->
                                    <td>332</td>
                                    <td style="background-color: #ff9;">97.65</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.47</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>56</td>
                                    <td class="text-left">[MADIUN]nurul kumalasari</td>

                                    <td style="background-color: #ff9;">95.1</td>
                                    <td>37</td>
                                    <td>167</td>
                                    <td>204</td>
                                    <td>316</td>
                                    <td style="background-color: #f99;">64.56</td>

                                    <!-- trx -->
                                    <td>23,361</td>
                                    <td>2,422</td>
                                    <td>200,979</td>
                                    <td>218,847</td>
                                    <td style="background-color: #f99;">91.84</td>

                                    <!-- fbi -->
                                    <td>38,430,119</td>
                                    <td>2,178,441</td>
                                    <td>299,853,966</td>
                                    <td>333,029,582</td>
                                    <td style="background-color: #f99;">90.04</td>

                                    <!-- casa -->
                                    <td>980,921,922</td>
                                    <td>9,835,535,956</td>
                                    <td>10,816,457,878</td>
                                    <td>8,102,591,453</td>
                                    <td style="background-color: #2ED15F;">1223.23</td>

                                    <!-- agen bep -->
                                    <td>36</td>
                                    <td>18</td>
                                    <td>54</td>
                                    <td style="background-color: #2ED15F">117.39</td>

                                    <!-- pertumbuhan agen -->
                                    <td>2</td>
                                    <td>15</td>
                                    <td style="background-color: #2ED15F;">113.33</td>

                                    <!-- bumdes -->
                                    <td>0</td>
                                    <td>9</td>
                                    <td>9</td>
                                    <td>9</td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>6</td>
                                    <td>11</td>
                                    <td style="background-color: #f99;">54.55</td>

                                    <!-- reff. pinj -->
                                    <td>182</td>
                                    <td>20</td>
                                    <td style="background-color: #2ED15F;">910</td>

                                    <!-- active web -->
                                    <td>117</td>
                                    <td style="background-color: #f99;">70.06</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.32</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>57</td>
                                    <td class="text-left">[NGAWI]suyanto</td>

                                    <td style="background-color: #ff9;">95.05</td>
                                    <td>55</td>
                                    <td>384</td>
                                    <td>439</td>
                                    <td>504</td>
                                    <td style="background-color: #f99;">87.1</td>

                                    <!-- trx -->
                                    <td>40,186</td>
                                    <td>3,372</td>
                                    <td>331,097</td>
                                    <td>325,663</td>
                                    <td style="background-color: #2ED15F;">101.67</td>

                                    <!-- fbi -->
                                    <td>64,687,062</td>
                                    <td>4,866,936</td>
                                    <td>532,357,595</td>
                                    <td>556,745,635</td>
                                    <td style="background-color: #ff9;">95.62</td>

                                    <!-- casa -->
                                    <td>971,216,942</td>
                                    <td>13,907,319,456</td>
                                    <td>14,878,536,398</td>
                                    <td>13,583,372,735</td>
                                    <td style="background-color: #2ED15F;">739.81</td>

                                    <!-- agen bep -->
                                    <td>50</td>
                                    <td>12</td>
                                    <td>62</td>
                                    <td style="background-color: #f99">86.71</td>

                                    <!-- pertumbuhan agen -->
                                    <td>7</td>
                                    <td>20</td>
                                    <td style="background-color: #2ED15F;">142.11</td>

                                    <!-- bumdes -->
                                    <td>3</td>
                                    <td>0</td>
                                    <td>3</td>
                                    <td>3</td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>1</td>
                                    <td>12</td>
                                    <td style="background-color: #f99;">8.33</td>

                                    <!-- reff. pinj -->
                                    <td>162</td>
                                    <td>38</td>
                                    <td style="background-color: #2ED15F;">426.32</td>

                                    <!-- active web -->
                                    <td>342</td>
                                    <td style="background-color: #f99;">89.06</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.96</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>58</td>
                                    <td class="text-left">[PONOROGO]andria f amri</td>

                                    <td style="background-color: #f99;">94.75</td>
                                    <td>63</td>
                                    <td>243</td>
                                    <td>306</td>
                                    <td>411</td>
                                    <td style="background-color: #f99;">74.45</td>

                                    <!-- trx -->
                                    <td>41,757</td>
                                    <td>6,791</td>
                                    <td>326,312</td>
                                    <td>322,269</td>
                                    <td style="background-color: #2ED15F;">101.25</td>

                                    <!-- fbi -->
                                    <td>62,738,860</td>
                                    <td>9,230,987</td>
                                    <td>493,239,941</td>
                                    <td>510,387,305</td>
                                    <td style="background-color: #ff9;">96.64</td>

                                    <!-- casa -->
                                    <td>1,120,150,996</td>
                                    <td>6,474,384,198</td>
                                    <td>7,594,535,194</td>
                                    <td>9,635,978,963</td>
                                    <td style="background-color: #f99;">606.97</td>

                                    <!-- agen bep -->
                                    <td>52</td>
                                    <td>39</td>
                                    <td>91</td>
                                    <td style="background-color: #2ED15F">202.22</td>

                                    <!-- pertumbuhan agen -->
                                    <td>5</td>
                                    <td>22</td>
                                    <td style="background-color: #2ED15F;">108</td>

                                    <!-- bumdes -->
                                    <td>6</td>
                                    <td>1</td>
                                    <td>7</td>
                                    <td>6</td>
                                    <td style="background-color: #2ED15F;">116.67</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>10</td>
                                    <td>15</td>
                                    <td style="background-color: #f99;">66.67</td>

                                    <!-- reff. pinj -->
                                    <td>14</td>
                                    <td>15</td>
                                    <td style="background-color: #f99;">93.33</td>

                                    <!-- active web -->
                                    <td>163</td>
                                    <td style="background-color: #f99;">67.08</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.64</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>59</td>
                                    <td class="text-left">[GENTENG]deden ari putra</td>

                                    <td style="background-color: #f99;">94.71</td>
                                    <td>97</td>
                                    <td>291</td>
                                    <td>388</td>
                                    <td>462</td>
                                    <td style="background-color: #f99;">83.98</td>

                                    <!-- trx -->
                                    <td>68,520</td>
                                    <td>5,492</td>
                                    <td>602,850</td>
                                    <td>1,020,967</td>
                                    <td style="background-color: #f99;">59.05</td>

                                    <!-- fbi -->
                                    <td>119,765,435</td>
                                    <td>7,240,228</td>
                                    <td>919,858,243</td>
                                    <td>1,090,479,737</td>
                                    <td style="background-color: #f99;">84.35</td>

                                    <!-- casa -->
                                    <td>1,827,574,545</td>
                                    <td>14,285,857,951</td>
                                    <td>16,113,432,496</td>
                                    <td>8,241,900,991</td>
                                    <td style="background-color: #2ED15F;">1003.68</td>

                                    <!-- agen bep -->
                                    <td>75</td>
                                    <td>24</td>
                                    <td>99</td>
                                    <td style="background-color: #2ED15F">145.59</td>

                                    <!-- pertumbuhan agen -->
                                    <td>6</td>
                                    <td>30</td>
                                    <td style="background-color: #2ED15F;">112.5</td>

                                    <!-- bumdes -->
                                    <td>8</td>
                                    <td>1</td>
                                    <td>9</td>
                                    <td>7</td>
                                    <td style="background-color: #2ED15F;">128.57</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>15</td>
                                    <td>15</td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <!-- reff. pinj -->
                                    <td>91</td>
                                    <td>29</td>
                                    <td style="background-color: #2ED15F;">313.79</td>

                                    <!-- active web -->
                                    <td>229</td>
                                    <td style="background-color: #f99;">78.69</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.87</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>60</td>
                                    <td class="text-left">[SITUBONDO]guruh dwi argo</td>

                                    <td style="background-color: #f99;">94.57</td>
                                    <td>39</td>
                                    <td>275</td>
                                    <td>314</td>
                                    <td>460</td>
                                    <td style="background-color: #f99;">68.26</td>

                                    <!-- trx -->
                                    <td>27,648</td>
                                    <td>34,923</td>
                                    <td>408,522</td>
                                    <td>590,262</td>
                                    <td style="background-color: #f99;">69.21</td>

                                    <!-- fbi -->
                                    <td>38,873,917</td>
                                    <td>694,003</td>
                                    <td>302,493,939</td>
                                    <td>353,643,661</td>
                                    <td style="background-color: #f99;">85.54</td>

                                    <!-- casa -->
                                    <td>625,332,782</td>
                                    <td>11,583,527,692</td>
                                    <td>12,208,860,474</td>
                                    <td>11,442,965,472</td>
                                    <td style="background-color: #2ED15F;">776.59</td>

                                    <!-- agen bep -->
                                    <td>34</td>
                                    <td>47</td>
                                    <td>81</td>
                                    <td style="background-color: #2ED15F">202.5</td>

                                    <!-- pertumbuhan agen -->
                                    <td>3</td>
                                    <td>13</td>
                                    <td style="background-color: #2ED15F;">114.29</td>

                                    <!-- bumdes -->
                                    <td>0</td>
                                    <td>9</td>
                                    <td>9</td>
                                    <td>9</td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>31</td>
                                    <td>24</td>
                                    <td style="background-color: #2ED15F;">129.17</td>

                                    <!-- reff. pinj -->
                                    <td>62</td>
                                    <td>52</td>
                                    <td style="background-color: #2ED15F;">119.23</td>

                                    <!-- active web -->
                                    <td>242</td>
                                    <td style="background-color: #f99;">88</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.98</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>61</td>
                                    <td class="text-left">[JEMBER]ismanto</td>

                                    <td style="background-color: #f99;">94.53</td>
                                    <td>47</td>
                                    <td>399</td>
                                    <td>446</td>
                                    <td>476</td>
                                    <td style="background-color: #f99;">93.7</td>

                                    <!-- trx -->
                                    <td>30,156</td>
                                    <td>6,131</td>
                                    <td>305,338</td>
                                    <td>498,123</td>
                                    <td style="background-color: #f99;">61.3</td>

                                    <!-- fbi -->
                                    <td>48,290,198</td>
                                    <td>3,593,341</td>
                                    <td>378,505,866</td>
                                    <td>425,647,462</td>
                                    <td style="background-color: #f99;">88.92</td>

                                    <!-- casa -->
                                    <td>862,129,664</td>
                                    <td>9,463,833,244</td>
                                    <td>10,325,962,908</td>
                                    <td>13,162,000,762</td>
                                    <td style="background-color: #f99;">609.47</td>

                                    <!-- agen bep -->
                                    <td>45</td>
                                    <td>33</td>
                                    <td>78</td>
                                    <td style="background-color: #2ED15F">127.87</td>

                                    <!-- pertumbuhan agen -->
                                    <td>5</td>
                                    <td>14</td>
                                    <td style="background-color: #2ED15F;">135.71</td>

                                    <!-- bumdes -->
                                    <td>3</td>
                                    <td>3</td>
                                    <td>6</td>
                                    <td>4</td>
                                    <td style="background-color: #2ED15F;">150</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>22</td>
                                    <td>13</td>
                                    <td style="background-color: #2ED15F;">169.23</td>

                                    <!-- reff. pinj -->
                                    <td>138</td>
                                    <td>53</td>
                                    <td style="background-color: #2ED15F;">260.38</td>

                                    <!-- active web -->
                                    <td>362</td>
                                    <td style="background-color: #f99;">90.73</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>62</td>
                                    <td class="text-left">[MADIUN]dimas nurhadi</td>

                                    <td style="background-color: #f99;">94.52</td>
                                    <td>42</td>
                                    <td>171</td>
                                    <td>213</td>
                                    <td>298</td>
                                    <td style="background-color: #f99;">71.48</td>

                                    <!-- trx -->
                                    <td>27,740</td>
                                    <td>1,778</td>
                                    <td>223,036</td>
                                    <td>206,689</td>
                                    <td style="background-color: #2ED15F;">107.91</td>

                                    <!-- fbi -->
                                    <td>45,001,219</td>
                                    <td>2,005,638</td>
                                    <td>334,745,239</td>
                                    <td>314,527,938</td>
                                    <td style="background-color: #2ED15F;">106.43</td>

                                    <!-- casa -->
                                    <td>339,081,443</td>
                                    <td>4,488,527,363</td>
                                    <td>4,827,608,806</td>
                                    <td>7,652,447,483</td>
                                    <td style="background-color: #f99;">532</td>

                                    <!-- agen bep -->
                                    <td>42</td>
                                    <td>11</td>
                                    <td>53</td>
                                    <td style="background-color: #2ED15F">124.71</td>

                                    <!-- pertumbuhan agen -->
                                    <td>2</td>
                                    <td>15</td>
                                    <td style="background-color: #2ED15F;">113.33</td>

                                    <!-- bumdes -->
                                    <td>2</td>
                                    <td>7</td>
                                    <td>9</td>
                                    <td>9</td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>3</td>
                                    <td>11</td>
                                    <td style="background-color: #f99;">27.27</td>

                                    <!-- reff. pinj -->
                                    <td>127</td>
                                    <td>20</td>
                                    <td style="background-color: #2ED15F;">635</td>

                                    <!-- active web -->
                                    <td>134</td>
                                    <td style="background-color: #f99;">78.36</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.32</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>63</td>
                                    <td class="text-left">[BLITAR]fery suryananda</td>

                                    <td style="background-color: #f99;">94.46</td>
                                    <td>50</td>
                                    <td>294</td>
                                    <td>344</td>
                                    <td>378</td>
                                    <td style="background-color: #f99;">91.01</td>

                                    <!-- trx -->
                                    <td>29,507</td>
                                    <td>5,528</td>
                                    <td>269,054</td>
                                    <td>339,129</td>
                                    <td style="background-color: #f99;">79.34</td>

                                    <!-- fbi -->
                                    <td>49,135,618</td>
                                    <td>5,923,585</td>
                                    <td>407,278,825</td>
                                    <td>420,710,726</td>
                                    <td style="background-color: #ff9;">96.81</td>

                                    <!-- casa -->
                                    <td>1,992,037,816</td>
                                    <td>9,406,439,400</td>
                                    <td>11,398,477,216</td>
                                    <td>10,431,735,938</td>
                                    <td style="background-color: #2ED15F;">867.6</td>

                                    <!-- agen bep -->
                                    <td>40</td>
                                    <td>22</td>
                                    <td>62</td>
                                    <td style="background-color: #2ED15F">105.98</td>

                                    <!-- pertumbuhan agen -->
                                    <td>4</td>
                                    <td>18</td>
                                    <td style="background-color: #2ED15F;">122.22</td>

                                    <!-- bumdes -->
                                    <td>2</td>
                                    <td>5</td>
                                    <td>7</td>
                                    <td>9</td>
                                    <td style="background-color: #f99;">77.78</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>4</td>
                                    <td>14</td>
                                    <td style="background-color: #f99;">28.57</td>

                                    <!-- reff. pinj -->
                                    <td>187</td>
                                    <td>39</td>
                                    <td style="background-color: #2ED15F;">479.49</td>

                                    <!-- active web -->
                                    <td>285</td>
                                    <td style="background-color: #ff9;">96.94</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.91</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>64</td>
                                    <td class="text-left">[MAGETAN]titik nuryanti</td>

                                    <td style="background-color: #f99;">94.41</td>
                                    <td>66</td>
                                    <td>302</td>
                                    <td>368</td>
                                    <td>335</td>
                                    <td style="background-color: #2ED15F;">109.85</td>

                                    <!-- trx -->
                                    <td>36,129</td>
                                    <td>13,693</td>
                                    <td>384,041</td>
                                    <td>508,721</td>
                                    <td style="background-color: #f99;">75.49</td>

                                    <!-- fbi -->
                                    <td>53,297,366</td>
                                    <td>3,605,580</td>
                                    <td>404,895,714</td>
                                    <td>580,847,405</td>
                                    <td style="background-color: #f99;">69.71</td>

                                    <!-- casa -->
                                    <td>1,066,595,670</td>
                                    <td>12,824,509,468</td>
                                    <td>13,891,105,138</td>
                                    <td>6,495,708,864</td>
                                    <td style="background-color: #2ED15F;">1083.16</td>

                                    <!-- agen bep -->
                                    <td>64</td>
                                    <td>23</td>
                                    <td>87</td>
                                    <td style="background-color: #2ED15F">135.94</td>

                                    <!-- pertumbuhan agen -->
                                    <td>3</td>
                                    <td>22</td>
                                    <td style="background-color: #f99;">92.59</td>

                                    <!-- bumdes -->
                                    <td>3</td>
                                    <td>8</td>
                                    <td>11</td>
                                    <td>13</td>
                                    <td style="background-color: #f99;">84.62</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>9</td>
                                    <td>11</td>
                                    <td style="background-color: #f99;">81.82</td>

                                    <!-- reff. pinj -->
                                    <td>72</td>
                                    <td>66</td>
                                    <td style="background-color: #2ED15F;">109.09</td>

                                    <!-- active web -->
                                    <td>272</td>
                                    <td style="background-color: #f99;">90.07</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.66</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>65</td>
                                    <td class="text-left">[MADIUN]muchamat muzaqi fanani</td>

                                    <td style="background-color: #f99;">94.35</td>
                                    <td>55</td>
                                    <td>190</td>
                                    <td>245</td>
                                    <td>386</td>
                                    <td style="background-color: #f99;">63.47</td>

                                    <!-- trx -->
                                    <td>31,709</td>
                                    <td>1,811</td>
                                    <td>256,904</td>
                                    <td>267,479</td>
                                    <td style="background-color: #ff9;">96.05</td>

                                    <!-- fbi -->
                                    <td>51,832,850</td>
                                    <td>1,548,937</td>
                                    <td>398,376,597</td>
                                    <td>407,036,156</td>
                                    <td style="background-color: #ff9;">97.87</td>

                                    <!-- casa -->
                                    <td>980,380,664</td>
                                    <td>6,986,035,815</td>
                                    <td>7,966,416,479</td>
                                    <td>9,903,167,331</td>
                                    <td style="background-color: #f99;">441.08</td>

                                    <!-- agen bep -->
                                    <td>50</td>
                                    <td>13</td>
                                    <td>63</td>
                                    <td style="background-color: #2ED15F">117.76</td>

                                    <!-- pertumbuhan agen -->
                                    <td>6</td>
                                    <td>13</td>
                                    <td style="background-color: #2ED15F;">126.67</td>

                                    <!-- bumdes -->
                                    <td>1</td>
                                    <td>9</td>
                                    <td>10</td>
                                    <td>9</td>
                                    <td style="background-color: #2ED15F;">111.11</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>7</td>
                                    <td>11</td>
                                    <td style="background-color: #f99;">63.64</td>

                                    <!-- reff. pinj -->
                                    <td>137</td>
                                    <td>20</td>
                                    <td style="background-color: #2ED15F;">685</td>

                                    <!-- active web -->
                                    <td>130</td>
                                    <td style="background-color: #f99;">68.42</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.32</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>66</td>
                                    <td class="text-left">[NGANJUK]wahyu dwi hartanto</td>

                                    <td style="background-color: #f99;">94.18</td>
                                    <td>67</td>
                                    <td>405</td>
                                    <td>472</td>
                                    <td>474</td>
                                    <td style="background-color: #ff9;">99.58</td>

                                    <!-- trx -->
                                    <td>51,334</td>
                                    <td>2,839</td>
                                    <td>437,946</td>
                                    <td>699,108</td>
                                    <td style="background-color: #f99;">62.64</td>

                                    <!-- fbi -->
                                    <td>42,494,880</td>
                                    <td>2,739,707</td>
                                    <td>316,805,426</td>
                                    <td>311,185,291</td>
                                    <td style="background-color: #2ED15F;">101.81</td>

                                    <!-- casa -->
                                    <td>675,045,246</td>
                                    <td>8,434,407,662</td>
                                    <td>9,109,452,908</td>
                                    <td>11,076,424,412</td>
                                    <td style="background-color: #f99;">641.61</td>

                                    <!-- agen bep -->
                                    <td>64</td>
                                    <td>22</td>
                                    <td>86</td>
                                    <td style="background-color: #2ED15F">162.26</td>

                                    <!-- pertumbuhan agen -->
                                    <td>5</td>
                                    <td>25</td>
                                    <td style="background-color: #2ED15F;">107.14</td>

                                    <!-- bumdes -->
                                    <td>0</td>
                                    <td>5</td>
                                    <td>5</td>
                                    <td>10</td>
                                    <td style="background-color: #f99;">50</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>23</td>
                                    <td>20</td>
                                    <td style="background-color: #2ED15F;">115</td>

                                    <!-- reff. pinj -->
                                    <td>128</td>
                                    <td>12</td>
                                    <td style="background-color: #2ED15F;">1066.67</td>

                                    <!-- active web -->
                                    <td>383</td>
                                    <td style="background-color: #f99;">94.57</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.99</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>67</td>
                                    <td class="text-left">[BANYUWANGI]bayu kharisma</td>

                                    <td style="background-color: #f99;">93.91</td>
                                    <td>71</td>
                                    <td>248</td>
                                    <td>319</td>
                                    <td>384</td>
                                    <td style="background-color: #f99;">83.07</td>

                                    <!-- trx -->
                                    <td>57,148</td>
                                    <td>5,743</td>
                                    <td>458,067</td>
                                    <td>633,858</td>
                                    <td style="background-color: #f99;">72.27</td>

                                    <!-- fbi -->
                                    <td>100,716,860</td>
                                    <td>8,596,442</td>
                                    <td>776,142,206</td>
                                    <td>795,334,224</td>
                                    <td style="background-color: #ff9;">97.59</td>

                                    <!-- casa -->
                                    <td>1,609,886,386</td>
                                    <td>6,815,974,766</td>
                                    <td>8,425,861,152</td>
                                    <td>9,114,553,032</td>
                                    <td style="background-color: #f99;">628.46</td>

                                    <!-- agen bep -->
                                    <td>56</td>
                                    <td>34</td>
                                    <td>90</td>
                                    <td style="background-color: #2ED15F">144</td>

                                    <!-- pertumbuhan agen -->
                                    <td>9</td>
                                    <td>29</td>
                                    <td style="background-color: #2ED15F;">131.03</td>

                                    <!-- bumdes -->
                                    <td>2</td>
                                    <td>1</td>
                                    <td>3</td>
                                    <td>7</td>
                                    <td style="background-color: #f99;">42.86</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>12</td>
                                    <td>11</td>
                                    <td style="background-color: #2ED15F;">109.09</td>

                                    <!-- reff. pinj -->
                                    <td>136</td>
                                    <td>76</td>
                                    <td style="background-color: #2ED15F;">178.95</td>

                                    <!-- active web -->
                                    <td>225</td>
                                    <td style="background-color: #f99;">90.73</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.9</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>68</td>
                                    <td class="text-left">[KEDIRI]wahidiyah indriyani</td>

                                    <td style="background-color: #f99;">93.7</td>
                                    <td>31</td>
                                    <td>703</td>
                                    <td>734</td>
                                    <td>575</td>
                                    <td style="background-color: #2ED15F;">127.65</td>

                                    <!-- trx -->
                                    <td>16,884</td>
                                    <td>29,083</td>
                                    <td>194,147</td>
                                    <td>311,634</td>
                                    <td style="background-color: #f99;">62.3</td>

                                    <!-- fbi -->
                                    <td>14,331,154</td>
                                    <td>5,125,165</td>
                                    <td>142,875,280</td>
                                    <td>247,434,056</td>
                                    <td style="background-color: #f99;">57.74</td>

                                    <!-- casa -->
                                    <td>282,984,417</td>
                                    <td>16,320,030,992</td>
                                    <td>16,603,015,409</td>
                                    <td>12,748,891,601</td>
                                    <td style="background-color: #2ED15F;">797.12</td>

                                    <!-- agen bep -->
                                    <td>25</td>
                                    <td>176</td>
                                    <td>201</td>
                                    <td style="background-color: #2ED15F">175.55</td>

                                    <!-- pertumbuhan agen -->
                                    <td>1</td>
                                    <td>8</td>
                                    <td style="background-color: #f99;">64.29</td>

                                    <!-- bumdes -->
                                    <td>4</td>
                                    <td>9</td>
                                    <td>13</td>
                                    <td>10</td>
                                    <td style="background-color: #2ED15F;">130</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>35</td>
                                    <td>14</td>
                                    <td style="background-color: #2ED15F;">250</td>

                                    <!-- reff. pinj -->
                                    <td>86</td>
                                    <td>65</td>
                                    <td style="background-color: #2ED15F;">132.31</td>

                                    <!-- active web -->
                                    <td>703</td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.5</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>69</td>
                                    <td class="text-left">[LUMAJANG]tri hastomo</td>

                                    <td style="background-color: #f99;">93.67</td>
                                    <td>36</td>
                                    <td>439</td>
                                    <td>475</td>
                                    <td>613</td>
                                    <td style="background-color: #f99;">77.49</td>

                                    <!-- trx -->
                                    <td>21,103</td>
                                    <td>4,126</td>
                                    <td>251,155</td>
                                    <td>273,057</td>
                                    <td style="background-color: #f99;">91.98</td>

                                    <!-- fbi -->
                                    <td>33,826,138</td>
                                    <td>4,899,305</td>
                                    <td>320,056,283</td>
                                    <td>319,993,319</td>
                                    <td style="background-color: #2ED15F;">100.02</td>

                                    <!-- casa -->
                                    <td>757,075,721</td>
                                    <td>5,524,927,365</td>
                                    <td>6,282,003,086</td>
                                    <td>13,078,533,062</td>
                                    <td style="background-color: #f99;">635.22</td>

                                    <!-- agen bep -->
                                    <td>32</td>
                                    <td>23</td>
                                    <td>55</td>
                                    <td style="background-color: #2ED15F">103.77</td>

                                    <!-- pertumbuhan agen -->
                                    <td>3</td>
                                    <td>12</td>
                                    <td style="background-color: #2ED15F;">125</td>

                                    <!-- bumdes -->
                                    <td>3</td>
                                    <td>2</td>
                                    <td>5</td>
                                    <td>4</td>
                                    <td style="background-color: #2ED15F;">125</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>98</td>
                                    <td>54</td>
                                    <td style="background-color: #2ED15F;">181.48</td>

                                    <!-- reff. pinj -->
                                    <td>78</td>
                                    <td>87</td>
                                    <td style="background-color: #f99;">89.66</td>

                                    <!-- active web -->
                                    <td>392</td>
                                    <td style="background-color: #f99;">89.29</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.89</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>70</td>
                                    <td class="text-left">[SOEKARNO HATTA]hendy aldila resa permana</td>

                                    <td style="background-color: #f99;">93.3</td>
                                    <td>76</td>
                                    <td>320</td>
                                    <td>396</td>
                                    <td>619</td>
                                    <td style="background-color: #f99;">63.97</td>

                                    <!-- trx -->
                                    <td>22,460</td>
                                    <td>25,159</td>
                                    <td>238,414</td>
                                    <td>570,465</td>
                                    <td style="background-color: #f99;">41.79</td>

                                    <!-- fbi -->
                                    <td>33,842,296</td>
                                    <td>1,214,077</td>
                                    <td>258,548,203</td>
                                    <td>265,065,140</td>
                                    <td style="background-color: #ff9;">97.54</td>

                                    <!-- casa -->
                                    <td>890,923,189</td>
                                    <td>29,050,328,794</td>
                                    <td>29,941,251,983</td>
                                    <td>17,882,098,364</td>
                                    <td style="background-color: #2ED15F;">1089.65</td>

                                    <!-- agen bep -->
                                    <td>55</td>
                                    <td>14</td>
                                    <td>69</td>
                                    <td style="background-color: #2ED15F">155.06</td>

                                    <!-- pertumbuhan agen -->
                                    <td>0</td>
                                    <td>13</td>
                                    <td style="background-color: #2ED15F;">130</td>

                                    <!-- bumdes -->
                                    <td>4</td>
                                    <td>3</td>
                                    <td>7</td>
                                    <td>5</td>
                                    <td style="background-color: #2ED15F;">140</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>41</td>
                                    <td>39</td>
                                    <td style="background-color: #2ED15F;">105.13</td>

                                    <!-- reff. pinj -->
                                    <td>103</td>
                                    <td>22</td>
                                    <td style="background-color: #2ED15F;">468.18</td>

                                    <!-- active web -->
                                    <td>304</td>
                                    <td style="background-color: #ff9;">95</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.99</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>71</td>
                                    <td class="text-left">[BANYUWANGI]diyah sulistyoningrum</td>

                                    <td style="background-color: #f99;">92.94</td>
                                    <td>56</td>
                                    <td>221</td>
                                    <td>277</td>
                                    <td>259</td>
                                    <td style="background-color: #2ED15F;">106.95</td>

                                    <!-- trx -->
                                    <td>37,277</td>
                                    <td>10,055</td>
                                    <td>348,143</td>
                                    <td>427,486</td>
                                    <td style="background-color: #f99;">81.44</td>

                                    <!-- fbi -->
                                    <td>58,507,182</td>
                                    <td>6,071,268</td>
                                    <td>459,823,865</td>
                                    <td>536,388,198</td>
                                    <td style="background-color: #f99;">85.73</td>

                                    <!-- casa -->
                                    <td>665,150,754</td>
                                    <td>2,892,515,019</td>
                                    <td>3,557,665,773</td>
                                    <td>6,147,024,138</td>
                                    <td style="background-color: #f99;">448.94</td>

                                    <!-- agen bep -->
                                    <td>47</td>
                                    <td>33</td>
                                    <td>80</td>
                                    <td style="background-color: #2ED15F">156.86</td>

                                    <!-- pertumbuhan agen -->
                                    <td>3</td>
                                    <td>16</td>
                                    <td style="background-color: #f99;">65.52</td>

                                    <!-- bumdes -->
                                    <td>3</td>
                                    <td>6</td>
                                    <td>9</td>
                                    <td>7</td>
                                    <td style="background-color: #2ED15F;">128.57</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>16</td>
                                    <td>11</td>
                                    <td style="background-color: #2ED15F;">145.45</td>

                                    <!-- reff. pinj -->
                                    <td>70</td>
                                    <td>76</td>
                                    <td style="background-color: #f99;">92.11</td>

                                    <!-- active web -->
                                    <td>210</td>
                                    <td style="background-color: #ff9;">95.02</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.9</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>72</td>
                                    <td class="text-left">[PACITAN]nur alifah</td>

                                    <td style="background-color: #f99;">92.94</td>
                                    <td>26</td>
                                    <td>157</td>
                                    <td>183</td>
                                    <td>269</td>
                                    <td style="background-color: #f99;">68.03</td>

                                    <!-- trx -->
                                    <td>30,444</td>
                                    <td>2,735</td>
                                    <td>229,529</td>
                                    <td>213,850</td>
                                    <td style="background-color: #2ED15F;">107.33</td>

                                    <!-- fbi -->
                                    <td>41,409,799</td>
                                    <td>3,344,644</td>
                                    <td>336,819,784</td>
                                    <td>326,392,546</td>
                                    <td style="background-color: #2ED15F;">103.19</td>

                                    <!-- casa -->
                                    <td>676,994,546</td>
                                    <td>5,218,287,156</td>
                                    <td>5,895,281,702</td>
                                    <td>6,400,491,093</td>
                                    <td style="background-color: #f99;">788.05</td>

                                    <!-- agen bep -->
                                    <td>24</td>
                                    <td>17</td>
                                    <td>41</td>
                                    <td style="background-color: #2ED15F">103.8</td>

                                    <!-- pertumbuhan agen -->
                                    <td>4</td>
                                    <td>16</td>
                                    <td style="background-color: #ff9;">95.24</td>

                                    <!-- bumdes -->
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>3</td>
                                    <td style="background-color: #f99;">0</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>9</td>
                                    <td>10</td>
                                    <td style="background-color: #f99;">90</td>

                                    <!-- reff. pinj -->
                                    <td>157</td>
                                    <td>25</td>
                                    <td style="background-color: #2ED15F;">628</td>

                                    <!-- active web -->
                                    <td>132</td>
                                    <td style="background-color: #f99;">84.08</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.94</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>73</td>
                                    <td class="text-left">[NGANJUK]agus sumarsono</td>

                                    <td style="background-color: #f99;">92.89</td>
                                    <td>68</td>
                                    <td>400</td>
                                    <td>468</td>
                                    <td>557</td>
                                    <td style="background-color: #f99;">84.02</td>

                                    <!-- trx -->
                                    <td>51,655</td>
                                    <td>1,384</td>
                                    <td>392,124</td>
                                    <td>822,480</td>
                                    <td style="background-color: #f99;">47.68</td>

                                    <!-- fbi -->
                                    <td>57,436,704</td>
                                    <td>1,309,276</td>
                                    <td>406,206,808</td>
                                    <td>366,100,343</td>
                                    <td style="background-color: #2ED15F;">110.96</td>

                                    <!-- casa -->
                                    <td>841,911,520</td>
                                    <td>12,944,753,011</td>
                                    <td>13,786,664,531</td>
                                    <td>13,031,087,544</td>
                                    <td style="background-color: #2ED15F;">790.59</td>

                                    <!-- agen bep -->
                                    <td>63</td>
                                    <td>12</td>
                                    <td>75</td>
                                    <td style="background-color: #2ED15F">141.51</td>

                                    <!-- pertumbuhan agen -->
                                    <td>6</td>
                                    <td>15</td>
                                    <td style="background-color: #f99;">75</td>

                                    <!-- bumdes -->
                                    <td>0</td>
                                    <td>7</td>
                                    <td>7</td>
                                    <td>10</td>
                                    <td style="background-color: #f99;">70</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>20</td>
                                    <td>20</td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <!-- reff. pinj -->
                                    <td>155</td>
                                    <td>12</td>
                                    <td style="background-color: #2ED15F;">1291.67</td>

                                    <!-- active web -->
                                    <td>389</td>
                                    <td style="background-color: #ff9;">97.25</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.99</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>74</td>
                                    <td class="text-left">[NGAWI]muhamad ali wafa</td>

                                    <td style="background-color: #f99;">92.58</td>
                                    <td>36</td>
                                    <td>294</td>
                                    <td>330</td>
                                    <td>378</td>
                                    <td style="background-color: #f99;">87.3</td>

                                    <!-- trx -->
                                    <td>27,155</td>
                                    <td>1,907</td>
                                    <td>209,746</td>
                                    <td>244,247</td>
                                    <td style="background-color: #f99;">85.87</td>

                                    <!-- fbi -->
                                    <td>41,935,752</td>
                                    <td>2,740,377</td>
                                    <td>329,377,771</td>
                                    <td>417,559,226</td>
                                    <td style="background-color: #f99;">78.88</td>

                                    <!-- casa -->
                                    <td>2,258,332,440</td>
                                    <td>8,770,662,122</td>
                                    <td>11,028,994,562</td>
                                    <td>10,187,529,552</td>
                                    <td style="background-color: #2ED15F;">582.26</td>

                                    <!-- agen bep -->
                                    <td>34</td>
                                    <td>11</td>
                                    <td>45</td>
                                    <td style="background-color: #f99">81.82</td>

                                    <!-- pertumbuhan agen -->
                                    <td>4</td>
                                    <td>8</td>
                                    <td style="background-color: #f99;">63.16</td>

                                    <!-- bumdes -->
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>3</td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>16</td>
                                    <td>12</td>
                                    <td style="background-color: #2ED15F;">133.33</td>

                                    <!-- reff. pinj -->
                                    <td>46</td>
                                    <td>38</td>
                                    <td style="background-color: #2ED15F;">121.05</td>

                                    <!-- active web -->
                                    <td>278</td>
                                    <td style="background-color: #f99;">94.56</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.96</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>75</td>
                                    <td class="text-left">[TRENGGALEK]muhamad sholih hilmi</td>

                                    <td style="background-color: #f99;">92.33</td>
                                    <td>120</td>
                                    <td>235</td>
                                    <td>355</td>
                                    <td>460</td>
                                    <td style="background-color: #f99;">77.17</td>

                                    <!-- trx -->
                                    <td>64,103</td>
                                    <td>4,548</td>
                                    <td>543,922</td>
                                    <td>558,932</td>
                                    <td style="background-color: #ff9;">97.31</td>

                                    <!-- fbi -->
                                    <td>101,685,722</td>
                                    <td>5,698,913</td>
                                    <td>867,524,595</td>
                                    <td>929,240,675</td>
                                    <td style="background-color: #f99;">93.36</td>

                                    <!-- casa -->
                                    <td>3,895,517,747</td>
                                    <td>4,805,913,947</td>
                                    <td>8,701,431,694</td>
                                    <td>11,485,395,348</td>
                                    <td style="background-color: #f99;">674.64</td>

                                    <!-- agen bep -->
                                    <td>85</td>
                                    <td>29</td>
                                    <td>114</td>
                                    <td style="background-color: #2ED15F">108.06</td>

                                    <!-- pertumbuhan agen -->
                                    <td>7</td>
                                    <td>38</td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <!-- bumdes -->
                                    <td>16</td>
                                    <td>0</td>
                                    <td>16</td>
                                    <td>18</td>
                                    <td style="background-color: #f99;">88.89</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>13</td>
                                    <td>23</td>
                                    <td style="background-color: #f99;">56.52</td>

                                    <!-- reff. pinj -->
                                    <td>127</td>
                                    <td>69</td>
                                    <td style="background-color: #2ED15F;">184.06</td>

                                    <!-- active web -->
                                    <td>182</td>
                                    <td style="background-color: #f99;">77.45</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.72</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>76</td>
                                    <td class="text-left">[NGANJUK]aditya septian n</td>

                                    <td style="background-color: #f99;">92.1</td>
                                    <td>71</td>
                                    <td>474</td>
                                    <td>545</td>
                                    <td>613</td>
                                    <td style="background-color: #f99;">88.91</td>

                                    <!-- trx -->
                                    <td>50,231</td>
                                    <td>1,406</td>
                                    <td>417,307</td>
                                    <td>904,728</td>
                                    <td style="background-color: #f99;">46.13</td>

                                    <!-- fbi -->
                                    <td>57,307,336</td>
                                    <td>1,385,550</td>
                                    <td>408,305,869</td>
                                    <td>402,710,377</td>
                                    <td style="background-color: #2ED15F;">101.39</td>

                                    <!-- casa -->
                                    <td>1,173,829,618</td>
                                    <td>10,443,178,484</td>
                                    <td>11,617,008,102</td>
                                    <td>14,334,196,299</td>
                                    <td style="background-color: #f99;">603.89</td>

                                    <!-- agen bep -->
                                    <td>66</td>
                                    <td>15</td>
                                    <td>81</td>
                                    <td style="background-color: #2ED15F">137.29</td>

                                    <!-- pertumbuhan agen -->
                                    <td>5</td>
                                    <td>23</td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <!-- bumdes -->
                                    <td>1</td>
                                    <td>8</td>
                                    <td>9</td>
                                    <td>10</td>
                                    <td style="background-color: #f99;">90</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>27</td>
                                    <td>20</td>
                                    <td style="background-color: #2ED15F;">135</td>

                                    <!-- reff. pinj -->
                                    <td>137</td>
                                    <td>12</td>
                                    <td style="background-color: #2ED15F;">1141.67</td>

                                    <!-- active web -->
                                    <td>448</td>
                                    <td style="background-color: #f99;">94.51</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.99</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>77</td>
                                    <td class="text-left">[NGANJUK]hirlani m.m</td>

                                    <td style="background-color: #f99;">91.56</td>
                                    <td>96</td>
                                    <td>500</td>
                                    <td>596</td>
                                    <td>753</td>
                                    <td style="background-color: #f99;">79.15</td>

                                    <!-- trx -->
                                    <td>58,414</td>
                                    <td>4,484</td>
                                    <td>450,703</td>
                                    <td>1,110,348</td>
                                    <td style="background-color: #f99;">40.59</td>

                                    <!-- fbi -->
                                    <td>62,248,948</td>
                                    <td>6,103,022</td>
                                    <td>482,683,083</td>
                                    <td>494,235,462</td>
                                    <td style="background-color: #ff9;">97.66</td>

                                    <!-- casa -->
                                    <td>809,556,968</td>
                                    <td>15,962,265,116</td>
                                    <td>16,771,822,084</td>
                                    <td>17,591,968,185</td>
                                    <td style="background-color: #ff9;">825.15</td>

                                    <!-- agen bep -->
                                    <td>84</td>
                                    <td>28</td>
                                    <td>112</td>
                                    <td style="background-color: #2ED15F">162.32</td>

                                    <!-- pertumbuhan agen -->
                                    <td>3</td>
                                    <td>33</td>
                                    <td style="background-color: #2ED15F;">128.57</td>

                                    <!-- bumdes -->
                                    <td>0</td>
                                    <td>8</td>
                                    <td>8</td>
                                    <td>10</td>
                                    <td style="background-color: #f99;">80</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>34</td>
                                    <td>20</td>
                                    <td style="background-color: #2ED15F;">170</td>

                                    <!-- reff. pinj -->
                                    <td>435</td>
                                    <td>12</td>
                                    <td style="background-color: #2ED15F;">3625</td>

                                    <!-- active web -->
                                    <td>487</td>
                                    <td style="background-color: #ff9;">97.4</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.99</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>78</td>
                                    <td class="text-left">[MALANG SUTOYO]kurniawan trias surya</td>

                                    <td style="background-color: #f99;">91.51</td>
                                    <td>58</td>
                                    <td>290</td>
                                    <td>348</td>
                                    <td>570</td>
                                    <td style="background-color: #f99;">61.05</td>

                                    <!-- trx -->
                                    <td>14,705</td>
                                    <td>62,252</td>
                                    <td>691,778</td>
                                    <td>403,034</td>
                                    <td style="background-color: #2ED15F;">171.64</td>

                                    <!-- fbi -->
                                    <td>19,818,387</td>
                                    <td>421,125</td>
                                    <td>162,481,146</td>
                                    <td>220,608,656</td>
                                    <td style="background-color: #f99;">73.65</td>

                                    <!-- casa -->
                                    <td>614,826,406</td>
                                    <td>22,364,996,639</td>
                                    <td>22,979,823,045</td>
                                    <td>28,032,863,290</td>
                                    <td style="background-color: #f99;">708.2</td>

                                    <!-- agen bep -->
                                    <td>40</td>
                                    <td>33</td>
                                    <td>73</td>
                                    <td style="background-color: #ff9">96.69</td>

                                    <!-- pertumbuhan agen -->
                                    <td>0</td>
                                    <td>8</td>
                                    <td style="background-color: #2ED15F;">133.33</td>

                                    <!-- bumdes -->
                                    <td>3</td>
                                    <td>2</td>
                                    <td>5</td>
                                    <td>7</td>
                                    <td style="background-color: #f99;">71.43</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>19</td>
                                    <td>25</td>
                                    <td style="background-color: #f99;">76</td>

                                    <!-- reff. pinj -->
                                    <td>27</td>
                                    <td>24</td>
                                    <td style="background-color: #2ED15F;">112.5</td>

                                    <!-- active web -->
                                    <td>277</td>
                                    <td style="background-color: #ff9;">95.52</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.47</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>79</td>
                                    <td class="text-left">[PONOROGO]dwi arista susanti</td>

                                    <td style="background-color: #f99;">91.26</td>
                                    <td>67</td>
                                    <td>209</td>
                                    <td>276</td>
                                    <td>411</td>
                                    <td style="background-color: #f99;">67.15</td>

                                    <!-- trx -->
                                    <td>38,232</td>
                                    <td>5,039</td>
                                    <td>317,479</td>
                                    <td>322,269</td>
                                    <td style="background-color: #ff9;">98.51</td>

                                    <!-- fbi -->
                                    <td>55,062,201</td>
                                    <td>6,399,057</td>
                                    <td>456,284,299</td>
                                    <td>510,387,305</td>
                                    <td style="background-color: #f99;">89.4</td>

                                    <!-- casa -->
                                    <td>1,149,017,532</td>
                                    <td>7,990,395,063</td>
                                    <td>9,139,412,595</td>
                                    <td>9,635,978,963</td>
                                    <td style="background-color: #f99;">623.04</td>

                                    <!-- agen bep -->
                                    <td>59</td>
                                    <td>29</td>
                                    <td>88</td>
                                    <td style="background-color: #2ED15F">170.87</td>

                                    <!-- pertumbuhan agen -->
                                    <td>5</td>
                                    <td>19</td>
                                    <td style="background-color: #ff9;">96</td>

                                    <!-- bumdes -->
                                    <td>2</td>
                                    <td>3</td>
                                    <td>5</td>
                                    <td>6</td>
                                    <td style="background-color: #f99;">83.33</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>3</td>
                                    <td>15</td>
                                    <td style="background-color: #f99;">20</td>

                                    <!-- reff. pinj -->
                                    <td>59</td>
                                    <td>15</td>
                                    <td style="background-color: #2ED15F;">393.33</td>

                                    <!-- active web -->
                                    <td>164</td>
                                    <td style="background-color: #f99;">78.47</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.64</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>80</td>
                                    <td class="text-left">[PACITAN]putri ardyantari</td>

                                    <td style="background-color: #f99;">91.01</td>
                                    <td>32</td>
                                    <td>137</td>
                                    <td>169</td>
                                    <td>269</td>
                                    <td style="background-color: #f99;">62.83</td>

                                    <!-- trx -->
                                    <td>29,198</td>
                                    <td>4,122</td>
                                    <td>217,848</td>
                                    <td>213,850</td>
                                    <td style="background-color: #2ED15F;">101.87</td>

                                    <!-- fbi -->
                                    <td>30,458,049</td>
                                    <td>4,256,762</td>
                                    <td>279,103,504</td>
                                    <td>326,392,546</td>
                                    <td style="background-color: #f99;">85.51</td>

                                    <!-- casa -->
                                    <td>482,522,645</td>
                                    <td>3,137,204,502</td>
                                    <td>3,619,727,147</td>
                                    <td>6,400,491,093</td>
                                    <td style="background-color: #f99;">331.74</td>

                                    <!-- agen bep -->
                                    <td>30</td>
                                    <td>24</td>
                                    <td>54</td>
                                    <td style="background-color: #2ED15F">124.14</td>

                                    <!-- pertumbuhan agen -->
                                    <td>6</td>
                                    <td>10</td>
                                    <td style="background-color: #f99;">76.19</td>

                                    <!-- bumdes -->
                                    <td>3</td>
                                    <td>1</td>
                                    <td>4</td>
                                    <td>3</td>
                                    <td style="background-color: #2ED15F;">133.33</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>9</td>
                                    <td>10</td>
                                    <td style="background-color: #f99;">90</td>

                                    <!-- reff. pinj -->
                                    <td>224</td>
                                    <td>25</td>
                                    <td style="background-color: #2ED15F;">896</td>

                                    <!-- active web -->
                                    <td>107</td>
                                    <td style="background-color: #f99;">78.1</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.94</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>81</td>
                                    <td class="text-left">[PROBOLINGGO]bayu setyo p</td>

                                    <td style="background-color: #f99;">90.3</td>
                                    <td>37</td>
                                    <td>254</td>
                                    <td>291</td>
                                    <td>344</td>
                                    <td style="background-color: #f99;">84.59</td>

                                    <!-- trx -->
                                    <td>16,019</td>
                                    <td>1,861</td>
                                    <td>128,609</td>
                                    <td>221,869</td>
                                    <td style="background-color: #f99;">57.97</td>

                                    <!-- fbi -->
                                    <td>23,905,604</td>
                                    <td>1,765,666</td>
                                    <td>197,539,149</td>
                                    <td>245,909,268</td>
                                    <td style="background-color: #f99;">80.33</td>

                                    <!-- casa -->
                                    <td>2,531,268,029</td>
                                    <td>11,075,873,783</td>
                                    <td>13,607,141,812</td>
                                    <td>11,413,235,940</td>
                                    <td style="background-color: #2ED15F;">1007.12</td>

                                    <!-- agen bep -->
                                    <td>25</td>
                                    <td>12</td>
                                    <td>37</td>
                                    <td style="background-color: #2ED15F">134.55</td>

                                    <!-- pertumbuhan agen -->
                                    <td>1</td>
                                    <td>11</td>
                                    <td style="background-color: #f99;">85.71</td>

                                    <!-- bumdes -->
                                    <td>1</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>4</td>
                                    <td style="background-color: #f99;">50</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>25</td>
                                    <td>13</td>
                                    <td style="background-color: #2ED15F;">192.31</td>

                                    <!-- reff. pinj -->
                                    <td>330</td>
                                    <td>176</td>
                                    <td style="background-color: #2ED15F;">187.5</td>

                                    <!-- active web -->
                                    <td>209</td>
                                    <td style="background-color: #f99;">82.28</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">98.99</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>82</td>
                                    <td class="text-left">[KEPANJEN]asrul hakam</td>

                                    <td style="background-color: #f99;">90.08</td>
                                    <td>51</td>
                                    <td>187</td>
                                    <td>238</td>
                                    <td>366</td>
                                    <td style="background-color: #f99;">65.03</td>

                                    <!-- trx -->
                                    <td>39,468</td>
                                    <td>3,101</td>
                                    <td>373,544</td>
                                    <td>414,364</td>
                                    <td style="background-color: #f99;">90.15</td>

                                    <!-- fbi -->
                                    <td>68,609,552</td>
                                    <td>4,212,095</td>
                                    <td>593,188,225</td>
                                    <td>722,060,555</td>
                                    <td style="background-color: #f99;">82.15</td>

                                    <!-- casa -->
                                    <td>854,748,663</td>
                                    <td>2,904,892,212</td>
                                    <td>3,759,640,875</td>
                                    <td>6,270,018,557</td>
                                    <td style="background-color: #f99;">488.23</td>

                                    <!-- agen bep -->
                                    <td>47</td>
                                    <td>20</td>
                                    <td>67</td>
                                    <td style="background-color: #2ED15F">147.25</td>

                                    <!-- pertumbuhan agen -->
                                    <td>6</td>
                                    <td>19</td>
                                    <td style="background-color: #f99;">86.21</td>

                                    <!-- bumdes -->
                                    <td>4</td>
                                    <td>1</td>
                                    <td>5</td>
                                    <td>6</td>
                                    <td style="background-color: #f99;">83.33</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>26</td>
                                    <td>15</td>
                                    <td style="background-color: #2ED15F;">173.33</td>

                                    <!-- reff. pinj -->
                                    <td>172</td>
                                    <td>77</td>
                                    <td style="background-color: #2ED15F;">223.38</td>

                                    <!-- active web -->
                                    <td>169</td>
                                    <td style="background-color: #f99;">90.37</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.76</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>83</td>
                                    <td class="text-left">[GENTENG]kerty ayuningtyas</td>

                                    <td style="background-color: #f99;">89.6</td>
                                    <td>81</td>
                                    <td>220</td>
                                    <td>301</td>
                                    <td>346</td>
                                    <td style="background-color: #f99;">86.99</td>

                                    <!-- trx -->
                                    <td>45,679</td>
                                    <td>5,744</td>
                                    <td>423,814</td>
                                    <td>765,725</td>
                                    <td style="background-color: #f99;">55.35</td>

                                    <!-- fbi -->
                                    <td>79,953,648</td>
                                    <td>7,266,265</td>
                                    <td>647,814,324</td>
                                    <td>817,859,803</td>
                                    <td style="background-color: #f99;">79.21</td>

                                    <!-- casa -->
                                    <td>5,974,573,247</td>
                                    <td>3,313,817,653</td>
                                    <td>9,288,390,900</td>
                                    <td>6,181,425,743</td>
                                    <td style="background-color: #2ED15F;">1050.09</td>

                                    <!-- agen bep -->
                                    <td>55</td>
                                    <td>26</td>
                                    <td>81</td>
                                    <td style="background-color: #2ED15F">157.28</td>

                                    <!-- pertumbuhan agen -->
                                    <td>6</td>
                                    <td>25</td>
                                    <td style="background-color: #ff9;">96.88</td>

                                    <!-- bumdes -->
                                    <td>6</td>
                                    <td>0</td>
                                    <td>6</td>
                                    <td>7</td>
                                    <td style="background-color: #f99;">85.71</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>9</td>
                                    <td>15</td>
                                    <td style="background-color: #f99;">60</td>

                                    <!-- reff. pinj -->
                                    <td>116</td>
                                    <td>29</td>
                                    <td style="background-color: #2ED15F;">400</td>

                                    <!-- active web -->
                                    <td>180</td>
                                    <td style="background-color: #f99;">81.82</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.87</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>84</td>
                                    <td class="text-left">[MAGETAN]riza dwi sukmawati</td>

                                    <td style="background-color: #f99;">89.51</td>
                                    <td>58</td>
                                    <td>284</td>
                                    <td>342</td>
                                    <td>323</td>
                                    <td style="background-color: #2ED15F;">105.88</td>

                                    <!-- trx -->
                                    <td>32,561</td>
                                    <td>1,396</td>
                                    <td>307,941</td>
                                    <td>490,552</td>
                                    <td style="background-color: #f99;">62.77</td>

                                    <!-- fbi -->
                                    <td>50,666,436</td>
                                    <td>1,525,003</td>
                                    <td>365,469,058</td>
                                    <td>560,102,855</td>
                                    <td style="background-color: #f99;">65.25</td>

                                    <!-- casa -->
                                    <td>2,035,649,590</td>
                                    <td>12,281,013,427</td>
                                    <td>14,316,663,017</td>
                                    <td>6,263,719,262</td>
                                    <td style="background-color: #2ED15F;">1235.21</td>

                                    <!-- agen bep -->
                                    <td>52</td>
                                    <td>12</td>
                                    <td>64</td>
                                    <td style="background-color: #2ED15F">133.33</td>

                                    <!-- pertumbuhan agen -->
                                    <td>4</td>
                                    <td>16</td>
                                    <td style="background-color: #f99;">74.07</td>

                                    <!-- bumdes -->
                                    <td>2</td>
                                    <td>4</td>
                                    <td>6</td>
                                    <td>13</td>
                                    <td style="background-color: #f99;">46.15</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>10</td>
                                    <td>11</td>
                                    <td style="background-color: #f99;">90.91</td>

                                    <!-- reff. pinj -->
                                    <td>116</td>
                                    <td>66</td>
                                    <td style="background-color: #2ED15F;">175.76</td>

                                    <!-- active web -->
                                    <td>266</td>
                                    <td style="background-color: #f99;">93.66</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.66</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>85</td>
                                    <td class="text-left">[KEPANJEN]septrio asmara</td>

                                    <td style="background-color: #f99;">89.26</td>
                                    <td>71</td>
                                    <td>207</td>
                                    <td>278</td>
                                    <td>418</td>
                                    <td style="background-color: #f99;">66.51</td>

                                    <!-- trx -->
                                    <td>50,115</td>
                                    <td>1,801</td>
                                    <td>403,325</td>
                                    <td>473,559</td>
                                    <td style="background-color: #f99;">85.17</td>

                                    <!-- fbi -->
                                    <td>84,197,830</td>
                                    <td>1,320,345</td>
                                    <td>662,157,546</td>
                                    <td>825,212,063</td>
                                    <td style="background-color: #f99;">80.24</td>

                                    <!-- casa -->
                                    <td>2,433,494,682</td>
                                    <td>2,875,312,398</td>
                                    <td>5,308,807,080</td>
                                    <td>7,165,735,494</td>
                                    <td style="background-color: #f99;">580.37</td>

                                    <!-- agen bep -->
                                    <td>56</td>
                                    <td>7</td>
                                    <td>63</td>
                                    <td style="background-color: #f99">94.03</td>

                                    <!-- pertumbuhan agen -->
                                    <td>6</td>
                                    <td>24</td>
                                    <td style="background-color: #2ED15F;">103.45</td>

                                    <!-- bumdes -->
                                    <td>3</td>
                                    <td>5</td>
                                    <td>8</td>
                                    <td>6</td>
                                    <td style="background-color: #2ED15F;">133.33</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>15</td>
                                    <td>15</td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <!-- reff. pinj -->
                                    <td>161</td>
                                    <td>77</td>
                                    <td style="background-color: #2ED15F;">209.09</td>

                                    <!-- active web -->
                                    <td>148</td>
                                    <td style="background-color: #f99;">71.5</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.76</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>86</td>
                                    <td class="text-left">[NGANJUK]frendy w</td>

                                    <td style="background-color: #f99;">89.21</td>
                                    <td>80</td>
                                    <td>459</td>
                                    <td>539</td>
                                    <td>585</td>
                                    <td style="background-color: #f99;">92.14</td>

                                    <!-- trx -->
                                    <td>45,845</td>
                                    <td>717</td>
                                    <td>336,427</td>
                                    <td>863,604</td>
                                    <td style="background-color: #f99;">38.96</td>

                                    <!-- fbi -->
                                    <td>56,497,386</td>
                                    <td>574,605</td>
                                    <td>395,261,306</td>
                                    <td>384,405,360</td>
                                    <td style="background-color: #2ED15F;">102.82</td>

                                    <!-- casa -->
                                    <td>846,542,258</td>
                                    <td>16,717,080,147</td>
                                    <td>17,563,622,405</td>
                                    <td>13,682,641,921</td>
                                    <td style="background-color: #2ED15F;">833.8</td>

                                    <!-- agen bep -->
                                    <td>73</td>
                                    <td>8</td>
                                    <td>81</td>
                                    <td style="background-color: #2ED15F">107.28</td>

                                    <!-- pertumbuhan agen -->
                                    <td>4</td>
                                    <td>16</td>
                                    <td style="background-color: #f99;">71.43</td>

                                    <!-- bumdes -->
                                    <td>1</td>
                                    <td>5</td>
                                    <td>6</td>
                                    <td>10</td>
                                    <td style="background-color: #f99;">60</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>14</td>
                                    <td>20</td>
                                    <td style="background-color: #f99;">70</td>

                                    <!-- reff. pinj -->
                                    <td>185</td>
                                    <td>12</td>
                                    <td style="background-color: #2ED15F;">1541.67</td>

                                    <!-- active web -->
                                    <td>453</td>
                                    <td style="background-color: #ff9;">98.69</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.99</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>87</td>
                                    <td class="text-left">[PARE]mujiari puwanti</td>

                                    <td style="background-color: #f99;">88.97</td>
                                    <td>63</td>
                                    <td>270</td>
                                    <td>333</td>
                                    <td>397</td>
                                    <td style="background-color: #f99;">83.88</td>

                                    <!-- trx -->
                                    <td>50,646</td>
                                    <td>1,706</td>
                                    <td>278,725</td>
                                    <td>455,352</td>
                                    <td style="background-color: #f99;">61.21</td>

                                    <!-- fbi -->
                                    <td>92,417,343</td>
                                    <td>2,276,083</td>
                                    <td>461,842,002</td>
                                    <td>528,814,985</td>
                                    <td style="background-color: #f99;">87.34</td>

                                    <!-- casa -->
                                    <td>1,774,479,617</td>
                                    <td>8,786,285,169</td>
                                    <td>10,560,764,786</td>
                                    <td>11,496,755,831</td>
                                    <td style="background-color: #f99;">673.05</td>

                                    <!-- agen bep -->
                                    <td>56</td>
                                    <td>12</td>
                                    <td>68</td>
                                    <td style="background-color: #2ED15F">140.21</td>

                                    <!-- pertumbuhan agen -->
                                    <td>5</td>
                                    <td>16</td>
                                    <td style="background-color: #2ED15F;">105</td>

                                    <!-- bumdes -->
                                    <td>4</td>
                                    <td>2</td>
                                    <td>6</td>
                                    <td>5</td>
                                    <td style="background-color: #2ED15F;">120</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>6</td>
                                    <td>13</td>
                                    <td style="background-color: #f99;">46.15</td>

                                    <!-- reff. pinj -->
                                    <td>38</td>
                                    <td>30</td>
                                    <td style="background-color: #2ED15F;">126.67</td>

                                    <!-- active web -->
                                    <td>152</td>
                                    <td style="background-color: #f99;">56.3</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.88</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>88</td>
                                    <td class="text-left">[NGAWI]khrisna wijaya suprapto</td>

                                    <td style="background-color: #f99;">88.95</td>
                                    <td>43</td>
                                    <td>415</td>
                                    <td>458</td>
                                    <td>378</td>
                                    <td style="background-color: #2ED15F;">121.16</td>

                                    <!-- trx -->
                                    <td>28,073</td>
                                    <td>2,544</td>
                                    <td>223,549</td>
                                    <td>244,247</td>
                                    <td style="background-color: #f99;">91.53</td>

                                    <!-- fbi -->
                                    <td>43,196,553</td>
                                    <td>3,277,720</td>
                                    <td>345,587,772</td>
                                    <td>417,559,226</td>
                                    <td style="background-color: #f99;">82.76</td>

                                    <!-- casa -->
                                    <td>1,037,806,131</td>
                                    <td>6,892,786,986</td>
                                    <td>7,930,593,117</td>
                                    <td>10,187,529,552</td>
                                    <td style="background-color: #f99;">635.73</td>

                                    <!-- agen bep -->
                                    <td>39</td>
                                    <td>12</td>
                                    <td>51</td>
                                    <td style="background-color: #f99">88.7</td>

                                    <!-- pertumbuhan agen -->
                                    <td>2</td>
                                    <td>17</td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <!-- bumdes -->
                                    <td>2</td>
                                    <td>0</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td style="background-color: #f99;">66.67</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>0</td>
                                    <td>12</td>
                                    <td style="background-color: #f99;">0</td>

                                    <!-- reff. pinj -->
                                    <td>108</td>
                                    <td>38</td>
                                    <td style="background-color: #2ED15F;">284.21</td>

                                    <!-- active web -->
                                    <td>400</td>
                                    <td style="background-color: #ff9;">96.39</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.96</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>89</td>
                                    <td class="text-left">[TULUNGAGUNG]irma tirayana</td>

                                    <td style="background-color: #f99;">88.44</td>
                                    <td>78</td>
                                    <td>334</td>
                                    <td>412</td>
                                    <td>491</td>
                                    <td style="background-color: #f99;">83.91</td>

                                    <!-- trx -->
                                    <td>46,499</td>
                                    <td>2,317</td>
                                    <td>351,736</td>
                                    <td>437,149</td>
                                    <td style="background-color: #f99;">80.46</td>

                                    <!-- fbi -->
                                    <td>73,766,860</td>
                                    <td>2,926,287</td>
                                    <td>555,819,277</td>
                                    <td>714,313,698</td>
                                    <td style="background-color: #f99;">77.81</td>

                                    <!-- casa -->
                                    <td>1,775,995,909</td>
                                    <td>7,997,343,488</td>
                                    <td>9,773,339,397</td>
                                    <td>13,917,559,733</td>
                                    <td style="background-color: #f99;">603.16</td>

                                    <!-- agen bep -->
                                    <td>71</td>
                                    <td>13</td>
                                    <td>84</td>
                                    <td style="background-color: #2ED15F">112.75</td>

                                    <!-- pertumbuhan agen -->
                                    <td>4</td>
                                    <td>30</td>
                                    <td style="background-color: #2ED15F;">103.03</td>

                                    <!-- bumdes -->
                                    <td>9</td>
                                    <td>7</td>
                                    <td>16</td>
                                    <td>26</td>
                                    <td style="background-color: #f99;">61.54</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>15</td>
                                    <td>21</td>
                                    <td style="background-color: #f99;">71.43</td>

                                    <!-- reff. pinj -->
                                    <td>41</td>
                                    <td>25</td>
                                    <td style="background-color: #2ED15F;">164</td>

                                    <!-- active web -->
                                    <td>315</td>
                                    <td style="background-color: #f99;">94.31</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.91</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>90</td>
                                    <td class="text-left">[BONDOWOSO]ratnasari</td>

                                    <td style="background-color: #f99;">88.43</td>
                                    <td>41</td>
                                    <td>276</td>
                                    <td>317</td>
                                    <td>319</td>
                                    <td style="background-color: #ff9;">99.37</td>

                                    <!-- trx -->
                                    <td>17,677</td>
                                    <td>1,149</td>
                                    <td>170,182</td>
                                    <td>213,116</td>
                                    <td style="background-color: #f99;">79.85</td>

                                    <!-- fbi -->
                                    <td>11,554,920</td>
                                    <td>591,585</td>
                                    <td>94,058,944</td>
                                    <td>136,516,316</td>
                                    <td style="background-color: #f99;">68.9</td>

                                    <!-- casa -->
                                    <td>270,450,900</td>
                                    <td>9,032,177,729</td>
                                    <td>9,302,628,629</td>
                                    <td>8,765,493,082</td>
                                    <td style="background-color: #2ED15F;">866.95</td>

                                    <!-- agen bep -->
                                    <td>34</td>
                                    <td>10</td>
                                    <td>44</td>
                                    <td style="background-color: #f99">75.86</td>

                                    <!-- pertumbuhan agen -->
                                    <td>0</td>
                                    <td>5</td>
                                    <td style="background-color: #f99;">55.56</td>

                                    <!-- bumdes -->
                                    <td>1</td>
                                    <td>7</td>
                                    <td>8</td>
                                    <td>7</td>
                                    <td style="background-color: #2ED15F;">114.29</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>19</td>
                                    <td>27</td>
                                    <td style="background-color: #f99;">70.37</td>

                                    <!-- reff. pinj -->
                                    <td>224</td>
                                    <td>7</td>
                                    <td style="background-color: #2ED15F;">3200</td>

                                    <!-- active web -->
                                    <td>248</td>
                                    <td style="background-color: #f99;">89.86</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.59</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>91</td>
                                    <td class="text-left">[LUMAJANG]budi asmoro</td>

                                    <td style="background-color: #f99;">88.4</td>
                                    <td>43</td>
                                    <td>371</td>
                                    <td>414</td>
                                    <td>639</td>
                                    <td style="background-color: #f99;">64.79</td>

                                    <!-- trx -->
                                    <td>22,557</td>
                                    <td>4,898</td>
                                    <td>202,590</td>
                                    <td>284,435</td>
                                    <td style="background-color: #f99;">71.23</td>

                                    <!-- fbi -->
                                    <td>30,560,309</td>
                                    <td>4,536,261</td>
                                    <td>263,733,049</td>
                                    <td>333,326,374</td>
                                    <td style="background-color: #f99;">79.12</td>

                                    <!-- casa -->
                                    <td>1,018,012,800</td>
                                    <td>16,794,654,466</td>
                                    <td>17,812,667,266</td>
                                    <td>13,623,471,940</td>
                                    <td style="background-color: #2ED15F;">820.15</td>

                                    <!-- agen bep -->
                                    <td>40</td>
                                    <td>28</td>
                                    <td>68</td>
                                    <td style="background-color: #ff9">97.14</td>

                                    <!-- pertumbuhan agen -->
                                    <td>1</td>
                                    <td>15</td>
                                    <td style="background-color: #2ED15F;">133.33</td>

                                    <!-- bumdes -->
                                    <td>4</td>
                                    <td>2</td>
                                    <td>6</td>
                                    <td>4</td>
                                    <td style="background-color: #2ED15F;">150</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>26</td>
                                    <td>54</td>
                                    <td style="background-color: #f99;">48.15</td>

                                    <!-- reff. pinj -->
                                    <td>61</td>
                                    <td>87</td>
                                    <td style="background-color: #f99;">70.11</td>

                                    <!-- active web -->
                                    <td>371</td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.89</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>92</td>
                                    <td class="text-left">[BONDOWOSO]ifraz tikka khan</td>

                                    <td style="background-color: #f99;">88.34</td>
                                    <td>28</td>
                                    <td>265</td>
                                    <td>293</td>
                                    <td>279</td>
                                    <td style="background-color: #2ED15F;">105.02</td>

                                    <!-- trx -->
                                    <td>24,107</td>
                                    <td>35</td>
                                    <td>157,663</td>
                                    <td>186,477</td>
                                    <td style="background-color: #f99;">84.55</td>

                                    <!-- fbi -->
                                    <td>11,790,262</td>
                                    <td>37,830</td>
                                    <td>84,941,212</td>
                                    <td>119,451,776</td>
                                    <td style="background-color: #f99;">71.11</td>

                                    <!-- casa -->
                                    <td>814,799,843</td>
                                    <td>8,329,677,599</td>
                                    <td>9,144,477,442</td>
                                    <td>7,669,806,447</td>
                                    <td style="background-color: #2ED15F;">876.72</td>

                                    <!-- agen bep -->
                                    <td>23</td>
                                    <td>0</td>
                                    <td>23</td>
                                    <td style="background-color: #2ED15F">106.98</td>

                                    <!-- pertumbuhan agen -->
                                    <td>1</td>
                                    <td>3</td>
                                    <td style="background-color: #f99;">44.44</td>

                                    <!-- bumdes -->
                                    <td>1</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>7</td>
                                    <td style="background-color: #f99;">57.14</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>20</td>
                                    <td>27</td>
                                    <td style="background-color: #f99;">74.07</td>

                                    <!-- reff. pinj -->
                                    <td>4</td>
                                    <td>7</td>
                                    <td style="background-color: #f99;">57.14</td>

                                    <!-- active web -->
                                    <td>261</td>
                                    <td style="background-color: #ff9;">98.49</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.59</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>93</td>
                                    <td class="text-left">[BONDOWOSO]silvi liya kurniawati</td>

                                    <td style="background-color: #f99;">88.33</td>
                                    <td>41</td>
                                    <td>328</td>
                                    <td>369</td>
                                    <td>478</td>
                                    <td style="background-color: #f99;">77.2</td>

                                    <!-- trx -->
                                    <td>28,378</td>
                                    <td>12,276</td>
                                    <td>276,284</td>
                                    <td>319,675</td>
                                    <td style="background-color: #f99;">86.43</td>

                                    <!-- fbi -->
                                    <td>13,763,891</td>
                                    <td>1,275,965</td>
                                    <td>120,221,045</td>
                                    <td>204,774,473</td>
                                    <td style="background-color: #f99;">58.71</td>

                                    <!-- casa -->
                                    <td>839,619,179</td>
                                    <td>12,959,116,921</td>
                                    <td>13,798,736,100</td>
                                    <td>13,148,239,624</td>
                                    <td style="background-color: #2ED15F;">688.75</td>

                                    <!-- agen bep -->
                                    <td>32</td>
                                    <td>15</td>
                                    <td>47</td>
                                    <td style="background-color: #f99">73.44</td>

                                    <!-- pertumbuhan agen -->
                                    <td>1</td>
                                    <td>6</td>
                                    <td style="background-color: #f99;">77.78</td>

                                    <!-- bumdes -->
                                    <td>2</td>
                                    <td>7</td>
                                    <td>9</td>
                                    <td>7</td>
                                    <td style="background-color: #2ED15F;">128.57</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>33</td>
                                    <td>27</td>
                                    <td style="background-color: #2ED15F;">122.22</td>

                                    <!-- reff. pinj -->
                                    <td>431</td>
                                    <td>7</td>
                                    <td style="background-color: #2ED15F;">6157.14</td>

                                    <!-- active web -->
                                    <td>271</td>
                                    <td style="background-color: #f99;">82.62</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.59</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>94</td>
                                    <td class="text-left">[JEMBER]anis yanuar satria</td>

                                    <td style="background-color: #f99;">87.93</td>
                                    <td>37</td>
                                    <td>327</td>
                                    <td>364</td>
                                    <td>375</td>
                                    <td style="background-color: #ff9;">97.07</td>

                                    <!-- trx -->
                                    <td>23,221</td>
                                    <td>548</td>
                                    <td>192,433</td>
                                    <td>392,461</td>
                                    <td style="background-color: #f99;">49.03</td>

                                    <!-- fbi -->
                                    <td>38,992,994</td>
                                    <td>687,952</td>
                                    <td>318,610,497</td>
                                    <td>335,358,606</td>
                                    <td style="background-color: #ff9;">95.01</td>

                                    <!-- casa -->
                                    <td>1,505,664,052</td>
                                    <td>14,879,372,838</td>
                                    <td>16,385,036,890</td>
                                    <td>10,370,061,206</td>
                                    <td style="background-color: #2ED15F;">792.22</td>

                                    <!-- agen bep -->
                                    <td>37</td>
                                    <td>2</td>
                                    <td>39</td>
                                    <td style="background-color: #f99">80.41</td>

                                    <!-- pertumbuhan agen -->
                                    <td>2</td>
                                    <td>15</td>
                                    <td style="background-color: #2ED15F;">121.43</td>

                                    <!-- bumdes -->
                                    <td>0</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>4</td>
                                    <td style="background-color: #f99;">50</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>7</td>
                                    <td>13</td>
                                    <td style="background-color: #f99;">53.85</td>

                                    <!-- reff. pinj -->
                                    <td>63</td>
                                    <td>53</td>
                                    <td style="background-color: #2ED15F;">118.87</td>

                                    <!-- active web -->
                                    <td>303</td>
                                    <td style="background-color: #f99;">92.66</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>95</td>
                                    <td class="text-left">[JEMBER]danny arif wijaya sugiarto</td>

                                    <td style="background-color: #f99;">87.44</td>
                                    <td>42</td>
                                    <td>307</td>
                                    <td>349</td>
                                    <td>476</td>
                                    <td style="background-color: #f99;">73.32</td>

                                    <!-- trx -->
                                    <td>24,486</td>
                                    <td>3,641</td>
                                    <td>200,464</td>
                                    <td>498,123</td>
                                    <td style="background-color: #f99;">40.24</td>

                                    <!-- fbi -->
                                    <td>39,670,710</td>
                                    <td>2,709,350</td>
                                    <td>321,305,500</td>
                                    <td>425,647,462</td>
                                    <td style="background-color: #f99;">75.49</td>

                                    <!-- casa -->
                                    <td>874,158,669</td>
                                    <td>20,892,985,965</td>
                                    <td>21,767,144,634</td>
                                    <td>13,162,000,762</td>
                                    <td style="background-color: #2ED15F;">858.26</td>

                                    <!-- agen bep -->
                                    <td>38</td>
                                    <td>14</td>
                                    <td>52</td>
                                    <td style="background-color: #ff9">98.11</td>

                                    <!-- pertumbuhan agen -->
                                    <td>4</td>
                                    <td>12</td>
                                    <td style="background-color: #2ED15F;">114.29</td>

                                    <!-- bumdes -->
                                    <td>2</td>
                                    <td>4</td>
                                    <td>6</td>
                                    <td>4</td>
                                    <td style="background-color: #2ED15F;">150</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>23</td>
                                    <td>13</td>
                                    <td style="background-color: #2ED15F;">176.92</td>

                                    <!-- reff. pinj -->
                                    <td>43</td>
                                    <td>53</td>
                                    <td style="background-color: #f99;">81.13</td>

                                    <!-- active web -->
                                    <td>271</td>
                                    <td style="background-color: #f99;">88.27</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>96</td>
                                    <td class="text-left">[PROBOLINGGO]gressy probo kusuma wardhana</td>

                                    <td style="background-color: #f99;">87.14</td>
                                    <td>38</td>
                                    <td>290</td>
                                    <td>328</td>
                                    <td>538</td>
                                    <td style="background-color: #f99;">60.97</td>

                                    <!-- trx -->
                                    <td>18,477</td>
                                    <td>6,235</td>
                                    <td>224,117</td>
                                    <td>347,273</td>
                                    <td style="background-color: #f99;">64.54</td>

                                    <!-- fbi -->
                                    <td>30,116,256</td>
                                    <td>3,051,217</td>
                                    <td>299,146,766</td>
                                    <td>384,901,463</td>
                                    <td style="background-color: #f99;">77.72</td>

                                    <!-- casa -->
                                    <td>9,907,951,043</td>
                                    <td>3,628,048,238</td>
                                    <td>13,535,999,281</td>
                                    <td>17,864,195,384</td>
                                    <td style="background-color: #f99;">518.84</td>

                                    <!-- agen bep -->
                                    <td>32</td>
                                    <td>18</td>
                                    <td>50</td>
                                    <td style="background-color: #2ED15F">126.58</td>

                                    <!-- pertumbuhan agen -->
                                    <td>3</td>
                                    <td>13</td>
                                    <td style="background-color: #2ED15F;">114.29</td>

                                    <!-- bumdes -->
                                    <td>3</td>
                                    <td>7</td>
                                    <td>10</td>
                                    <td>4</td>
                                    <td style="background-color: #2ED15F;">250</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>8</td>
                                    <td>13</td>
                                    <td style="background-color: #f99;">61.54</td>

                                    <!-- reff. pinj -->
                                    <td>266</td>
                                    <td>176</td>
                                    <td style="background-color: #2ED15F;">151.14</td>

                                    <!-- active web -->
                                    <td>269</td>
                                    <td style="background-color: #f99;">92.76</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">98.99</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>97</td>
                                    <td class="text-left">[BONDOWOSO]girindra bella. g</td>

                                    <td style="background-color: #f99;">87.02</td>
                                    <td>44</td>
                                    <td>298</td>
                                    <td>342</td>
                                    <td>399</td>
                                    <td style="background-color: #f99;">85.71</td>

                                    <!-- trx -->
                                    <td>16,247</td>
                                    <td>2,230</td>
                                    <td>151,676</td>
                                    <td>266,395</td>
                                    <td style="background-color: #f99;">56.94</td>

                                    <!-- fbi -->
                                    <td>21,068,698</td>
                                    <td>1,651,659</td>
                                    <td>189,051,165</td>
                                    <td>170,645,394</td>
                                    <td style="background-color: #2ED15F;">110.79</td>

                                    <!-- casa -->
                                    <td>408,300,047</td>
                                    <td>9,687,216,596</td>
                                    <td>10,095,516,643</td>
                                    <td>10,956,866,353</td>
                                    <td style="background-color: #f99;">759.94</td>

                                    <!-- agen bep -->
                                    <td>31</td>
                                    <td>10</td>
                                    <td>41</td>
                                    <td style="background-color: #f99">75.93</td>

                                    <!-- pertumbuhan agen -->
                                    <td>1</td>
                                    <td>10</td>
                                    <td style="background-color: #2ED15F;">122.22</td>

                                    <!-- bumdes -->
                                    <td>2</td>
                                    <td>2</td>
                                    <td>4</td>
                                    <td>7</td>
                                    <td style="background-color: #f99;">57.14</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>11</td>
                                    <td>27</td>
                                    <td style="background-color: #f99;">40.74</td>

                                    <!-- reff. pinj -->
                                    <td>13</td>
                                    <td>7</td>
                                    <td style="background-color: #2ED15F;">185.71</td>

                                    <!-- active web -->
                                    <td>260</td>
                                    <td style="background-color: #f99;">87.25</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.59</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>98</td>
                                    <td class="text-left">[NGANJUK]riska dede a</td>

                                    <td style="background-color: #f99;">86.92</td>
                                    <td>71</td>
                                    <td>403</td>
                                    <td>474</td>
                                    <td>530</td>
                                    <td style="background-color: #f99;">89.43</td>

                                    <!-- trx -->
                                    <td>36,060</td>
                                    <td>2,023</td>
                                    <td>277,212</td>
                                    <td>781,356</td>
                                    <td style="background-color: #f99;">35.48</td>

                                    <!-- fbi -->
                                    <td>49,269,067</td>
                                    <td>2,473,736</td>
                                    <td>359,455,653</td>
                                    <td>347,795,325</td>
                                    <td style="background-color: #2ED15F;">103.35</td>

                                    <!-- casa -->
                                    <td>895,121,596</td>
                                    <td>13,665,428,062</td>
                                    <td>14,560,549,658</td>
                                    <td>12,379,533,167</td>
                                    <td style="background-color: #2ED15F;">989.35</td>

                                    <!-- agen bep -->
                                    <td>59</td>
                                    <td>8</td>
                                    <td>67</td>
                                    <td style="background-color: #2ED15F">115.52</td>

                                    <!-- pertumbuhan agen -->
                                    <td>3</td>
                                    <td>18</td>
                                    <td style="background-color: #f99;">75</td>

                                    <!-- bumdes -->
                                    <td>0</td>
                                    <td>6</td>
                                    <td>6</td>
                                    <td>10</td>
                                    <td style="background-color: #f99;">60</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>4</td>
                                    <td>20</td>
                                    <td style="background-color: #f99;">20</td>

                                    <!-- reff. pinj -->
                                    <td>173</td>
                                    <td>12</td>
                                    <td style="background-color: #2ED15F;">1441.67</td>

                                    <!-- active web -->
                                    <td>395</td>
                                    <td style="background-color: #ff9;">98.01</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.99</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>99</td>
                                    <td class="text-left">[NGAWI]maulana yusuf</td>

                                    <td style="background-color: #f99;">86.82</td>
                                    <td>40</td>
                                    <td>206</td>
                                    <td>246</td>
                                    <td>378</td>
                                    <td style="background-color: #f99;">65.08</td>

                                    <!-- trx -->
                                    <td>33,966</td>
                                    <td>1,333</td>
                                    <td>251,161</td>
                                    <td>244,247</td>
                                    <td style="background-color: #2ED15F;">102.83</td>

                                    <!-- fbi -->
                                    <td>55,766,266</td>
                                    <td>1,543,343</td>
                                    <td>409,285,396</td>
                                    <td>417,559,226</td>
                                    <td style="background-color: #ff9;">98.02</td>

                                    <!-- casa -->
                                    <td>995,559,375</td>
                                    <td>10,766,326,198</td>
                                    <td>11,761,885,573</td>
                                    <td>10,187,529,552</td>
                                    <td style="background-color: #2ED15F;">813.97</td>

                                    <!-- agen bep -->
                                    <td>37</td>
                                    <td>7</td>
                                    <td>44</td>
                                    <td style="background-color: #f99">90.72</td>

                                    <!-- pertumbuhan agen -->
                                    <td>5</td>
                                    <td>16</td>
                                    <td style="background-color: #2ED15F;">110.53</td>

                                    <!-- bumdes -->
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>3</td>
                                    <td style="background-color: #f99;">0</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>1</td>
                                    <td>12</td>
                                    <td style="background-color: #f99;">8.33</td>

                                    <!-- reff. pinj -->
                                    <td>32</td>
                                    <td>38</td>
                                    <td style="background-color: #f99;">84.21</td>

                                    <!-- active web -->
                                    <td>153</td>
                                    <td style="background-color: #f99;">74.27</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.96</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>100</td>
                                    <td class="text-left">[LUMAJANG]mochamad iswanto</td>

                                    <td style="background-color: #f99;">86.71</td>
                                    <td>28</td>
                                    <td>383</td>
                                    <td>411</td>
                                    <td>536</td>
                                    <td style="background-color: #f99;">76.68</td>

                                    <!-- trx -->
                                    <td>17,152</td>
                                    <td>3,668</td>
                                    <td>154,920</td>
                                    <td>238,925</td>
                                    <td style="background-color: #f99;">64.84</td>

                                    <!-- fbi -->
                                    <td>25,532,835</td>
                                    <td>4,930,527</td>
                                    <td>258,340,784</td>
                                    <td>279,994,154</td>
                                    <td style="background-color: #f99;">92.27</td>

                                    <!-- casa -->
                                    <td>805,889,476</td>
                                    <td>10,058,441,934</td>
                                    <td>10,864,331,410</td>
                                    <td>11,443,716,429</td>
                                    <td style="background-color: #f99;">713.32</td>

                                    <!-- agen bep -->
                                    <td>24</td>
                                    <td>15</td>
                                    <td>39</td>
                                    <td style="background-color: #f99">63.93</td>

                                    <!-- pertumbuhan agen -->
                                    <td>2</td>
                                    <td>10</td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <!-- bumdes -->
                                    <td>0</td>
                                    <td>4</td>
                                    <td>4</td>
                                    <td>4</td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>45</td>
                                    <td>54</td>
                                    <td style="background-color: #f99;">83.33</td>

                                    <!-- reff. pinj -->
                                    <td>90</td>
                                    <td>87</td>
                                    <td style="background-color: #2ED15F;">103.45</td>

                                    <!-- active web -->
                                    <td>345</td>
                                    <td style="background-color: #f99;">90.08</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.89</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>101</td>
                                    <td class="text-left">[JEMBER]moh antony mardianto</td>

                                    <td style="background-color: #f99;">86.57</td>
                                    <td>36</td>
                                    <td>318</td>
                                    <td>354</td>
                                    <td>404</td>
                                    <td style="background-color: #f99;">87.62</td>

                                    <!-- trx -->
                                    <td>18,911</td>
                                    <td>2,185</td>
                                    <td>210,059</td>
                                    <td>422,650</td>
                                    <td style="background-color: #f99;">49.7</td>

                                    <!-- fbi -->
                                    <td>28,804,420</td>
                                    <td>2,415,097</td>
                                    <td>255,629,477</td>
                                    <td>361,155,422</td>
                                    <td style="background-color: #f99;">70.78</td>

                                    <!-- casa -->
                                    <td>801,887,241</td>
                                    <td>12,313,786,356</td>
                                    <td>13,115,673,597</td>
                                    <td>11,167,758,222</td>
                                    <td style="background-color: #2ED15F;">694.72</td>

                                    <!-- agen bep -->
                                    <td>34</td>
                                    <td>10</td>
                                    <td>44</td>
                                    <td style="background-color: #f99">94.62</td>

                                    <!-- pertumbuhan agen -->
                                    <td>2</td>
                                    <td>6</td>
                                    <td style="background-color: #f99;">57.14</td>

                                    <!-- bumdes -->
                                    <td>1</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>4</td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>16</td>
                                    <td>13</td>
                                    <td style="background-color: #2ED15F;">123.08</td>

                                    <!-- reff. pinj -->
                                    <td>48</td>
                                    <td>53</td>
                                    <td style="background-color: #f99;">90.57</td>

                                    <!-- active web -->
                                    <td>311</td>
                                    <td style="background-color: #ff9;">97.8</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>102</td>
                                    <td class="text-left">[SITUBONDO]hadi santoso</td>

                                    <td style="background-color: #f99;">86.19</td>
                                    <td>34</td>
                                    <td>301</td>
                                    <td>335</td>
                                    <td>445</td>
                                    <td style="background-color: #f99;">75.28</td>

                                    <!-- trx -->
                                    <td>16,586</td>
                                    <td>27,076</td>
                                    <td>283,996</td>
                                    <td>571,222</td>
                                    <td style="background-color: #f99;">49.72</td>

                                    <!-- fbi -->
                                    <td>22,341,276</td>
                                    <td>3,492,218</td>
                                    <td>203,312,911</td>
                                    <td>342,235,801</td>
                                    <td style="background-color: #f99;">59.41</td>

                                    <!-- casa -->
                                    <td>1,661,078,710</td>
                                    <td>10,674,513,634</td>
                                    <td>12,335,592,344</td>
                                    <td>11,073,837,554</td>
                                    <td style="background-color: #2ED15F;">874.55</td>

                                    <!-- agen bep -->
                                    <td>22</td>
                                    <td>46</td>
                                    <td>68</td>
                                    <td style="background-color: #2ED15F">202.99</td>

                                    <!-- pertumbuhan agen -->
                                    <td>2</td>
                                    <td>8</td>
                                    <td style="background-color: #f99;">71.43</td>

                                    <!-- bumdes -->
                                    <td>5</td>
                                    <td>5</td>
                                    <td>10</td>
                                    <td>9</td>
                                    <td style="background-color: #2ED15F;">111.11</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>21</td>
                                    <td>24</td>
                                    <td style="background-color: #f99;">87.5</td>

                                    <!-- reff. pinj -->
                                    <td>180</td>
                                    <td>52</td>
                                    <td style="background-color: #2ED15F;">346.15</td>

                                    <!-- active web -->
                                    <td>280</td>
                                    <td style="background-color: #f99;">93.02</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.98</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>103</td>
                                    <td class="text-left">[BONDOWOSO]miftahulinsyiroh</td>

                                    <td style="background-color: #f99;">85.53</td>
                                    <td>38</td>
                                    <td>251</td>
                                    <td>289</td>
                                    <td>379</td>
                                    <td style="background-color: #f99;">76.25</td>

                                    <!-- trx -->
                                    <td>14,863</td>
                                    <td>537</td>
                                    <td>204,951</td>
                                    <td>253,076</td>
                                    <td style="background-color: #f99;">80.98</td>

                                    <!-- fbi -->
                                    <td>8,520,286</td>
                                    <td>542,846</td>
                                    <td>85,449,361</td>
                                    <td>162,113,125</td>
                                    <td style="background-color: #f99;">52.71</td>

                                    <!-- casa -->
                                    <td>1,271,738,108</td>
                                    <td>9,952,425,118</td>
                                    <td>11,224,163,226</td>
                                    <td>10,409,023,035</td>
                                    <td style="background-color: #2ED15F;">745.66</td>

                                    <!-- agen bep -->
                                    <td>31</td>
                                    <td>5</td>
                                    <td>36</td>
                                    <td style="background-color: #f99">71.29</td>

                                    <!-- pertumbuhan agen -->
                                    <td>0</td>
                                    <td>5</td>
                                    <td style="background-color: #f99;">55.56</td>

                                    <!-- bumdes -->
                                    <td>2</td>
                                    <td>8</td>
                                    <td>10</td>
                                    <td>7</td>
                                    <td style="background-color: #2ED15F;">142.86</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>29</td>
                                    <td>27</td>
                                    <td style="background-color: #2ED15F;">107.41</td>

                                    <!-- reff. pinj -->
                                    <td>15</td>
                                    <td>7</td>
                                    <td style="background-color: #2ED15F;">214.29</td>

                                    <!-- active web -->
                                    <td>229</td>
                                    <td style="background-color: #f99;">91.24</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.59</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>104</td>
                                    <td class="text-left">[PACITAN]pramudya mahendra fatqurrochman</td>

                                    <td style="background-color: #f99;">85.24</td>
                                    <td>36</td>
                                    <td>149</td>
                                    <td>185</td>
                                    <td>344</td>
                                    <td style="background-color: #f99;">53.78</td>

                                    <!-- trx -->
                                    <td>23,619</td>
                                    <td>2,960</td>
                                    <td>201,916</td>
                                    <td>273,253</td>
                                    <td style="background-color: #f99;">73.89</td>

                                    <!-- fbi -->
                                    <td>34,682,499</td>
                                    <td>4,233,204</td>
                                    <td>309,966,545</td>
                                    <td>417,057,142</td>
                                    <td style="background-color: #f99;">74.32</td>

                                    <!-- casa -->
                                    <td>1,459,816,601</td>
                                    <td>4,072,446,899</td>
                                    <td>5,532,263,500</td>
                                    <td>8,178,405,286</td>
                                    <td style="background-color: #f99;">681.96</td>

                                    <!-- agen bep -->
                                    <td>30</td>
                                    <td>10</td>
                                    <td>40</td>
                                    <td style="background-color: #2ED15F">117.65</td>

                                    <!-- pertumbuhan agen -->
                                    <td>4</td>
                                    <td>13</td>
                                    <td style="background-color: #f99;">80.95</td>

                                    <!-- bumdes -->
                                    <td>3</td>
                                    <td>0</td>
                                    <td>3</td>
                                    <td>3</td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>11</td>
                                    <td>10</td>
                                    <td style="background-color: #2ED15F;">110</td>

                                    <!-- reff. pinj -->
                                    <td>176</td>
                                    <td>25</td>
                                    <td style="background-color: #2ED15F;">704</td>

                                    <!-- active web -->
                                    <td>99</td>
                                    <td style="background-color: #f99;">66.44</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.94</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>105</td>
                                    <td class="text-left">[PROBOLINGGO]mario krisnadi</td>

                                    <td style="background-color: #f99;">83.21</td>
                                    <td>40</td>
                                    <td>293</td>
                                    <td>333</td>
                                    <td>478</td>
                                    <td style="background-color: #f99;">69.67</td>

                                    <!-- trx -->
                                    <td>18,774</td>
                                    <td>901</td>
                                    <td>173,272</td>
                                    <td>308,688</td>
                                    <td style="background-color: #f99;">56.13</td>

                                    <!-- fbi -->
                                    <td>26,458,699</td>
                                    <td>882,667</td>
                                    <td>231,344,003</td>
                                    <td>342,134,633</td>
                                    <td style="background-color: #f99;">67.62</td>

                                    <!-- casa -->
                                    <td>293,682,622</td>
                                    <td>8,749,106,873</td>
                                    <td>9,042,789,495</td>
                                    <td>15,879,284,786</td>
                                    <td style="background-color: #f99;">591.02</td>

                                    <!-- agen bep -->
                                    <td>37</td>
                                    <td>3</td>
                                    <td>40</td>
                                    <td style="background-color: #2ED15F">115.94</td>

                                    <!-- pertumbuhan agen -->
                                    <td>1</td>
                                    <td>11</td>
                                    <td style="background-color: #f99;">85.71</td>

                                    <!-- bumdes -->
                                    <td>4</td>
                                    <td>2</td>
                                    <td>6</td>
                                    <td>4</td>
                                    <td style="background-color: #2ED15F;">150</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>14</td>
                                    <td>13</td>
                                    <td style="background-color: #2ED15F;">107.69</td>

                                    <!-- reff. pinj -->
                                    <td>174</td>
                                    <td>176</td>
                                    <td style="background-color: #ff9;">98.86</td>

                                    <!-- active web -->
                                    <td>259</td>
                                    <td style="background-color: #f99;">88.4</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">98.99</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>106</td>
                                    <td class="text-left">[MALANG M.DINATA]achmad hanafi</td>

                                    <td style="background-color: #f99;">83.02</td>
                                    <td>48</td>
                                    <td>279</td>
                                    <td>327</td>
                                    <td>471</td>
                                    <td style="background-color: #f99;">69.43</td>

                                    <!-- trx -->
                                    <td>24,191</td>
                                    <td>3,551</td>
                                    <td>193,501</td>
                                    <td>320,845</td>
                                    <td style="background-color: #f99;">60.31</td>

                                    <!-- fbi -->
                                    <td>41,598,121</td>
                                    <td>2,789,805</td>
                                    <td>329,252,393</td>
                                    <td>528,985,707</td>
                                    <td style="background-color: #f99;">62.24</td>

                                    <!-- casa -->
                                    <td>2,426,420,859</td>
                                    <td>19,314,464,748</td>
                                    <td>21,740,885,607</td>
                                    <td>15,293,520,175</td>
                                    <td style="background-color: #2ED15F;">906.62</td>

                                    <!-- agen bep -->
                                    <td>43</td>
                                    <td>17</td>
                                    <td>60</td>
                                    <td style="background-color: #2ED15F">103.45</td>

                                    <!-- pertumbuhan agen -->
                                    <td>4</td>
                                    <td>15</td>
                                    <td style="background-color: #f99;">79.17</td>

                                    <!-- bumdes -->
                                    <td>1</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td style="background-color: #f99;">66.67</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>11</td>
                                    <td>12</td>
                                    <td style="background-color: #f99;">91.67</td>

                                    <!-- reff. pinj -->
                                    <td>24</td>
                                    <td>24</td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <!-- active web -->
                                    <td>180</td>
                                    <td style="background-color: #f99;">64.52</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">99.99</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>107</td>
                                    <td class="text-left">[PROBOLINGGO]hikam yudillah</td>

                                    <td style="background-color: #f99;">81.82</td>
                                    <td>27</td>
                                    <td>242</td>
                                    <td>269</td>
                                    <td>359</td>
                                    <td style="background-color: #f99;">74.93</td>

                                    <!-- trx -->
                                    <td>15,511</td>
                                    <td>1,424</td>
                                    <td>134,965</td>
                                    <td>231,516</td>
                                    <td style="background-color: #f99;">58.3</td>

                                    <!-- fbi -->
                                    <td>24,066,222</td>
                                    <td>1,729,306</td>
                                    <td>224,075,288</td>
                                    <td>256,600,975</td>
                                    <td style="background-color: #f99;">87.32</td>

                                    <!-- casa -->
                                    <td>825,606,638</td>
                                    <td>5,414,446,966</td>
                                    <td>6,240,053,604</td>
                                    <td>11,909,463,590</td>
                                    <td style="background-color: #f99;">448.21</td>

                                    <!-- agen bep -->
                                    <td>17</td>
                                    <td>7</td>
                                    <td>24</td>
                                    <td style="background-color: #f99">78.69</td>

                                    <!-- pertumbuhan agen -->
                                    <td>3</td>
                                    <td>5</td>
                                    <td style="background-color: #f99;">57.14</td>

                                    <!-- bumdes -->
                                    <td>4</td>
                                    <td>2</td>
                                    <td>6</td>
                                    <td>4</td>
                                    <td style="background-color: #2ED15F;">150</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>13</td>
                                    <td>13</td>
                                    <td style="background-color: #2ED15F;">100</td>

                                    <!-- reff. pinj -->
                                    <td>758</td>
                                    <td>176</td>
                                    <td style="background-color: #2ED15F;">430.68</td>

                                    <!-- active web -->
                                    <td>209</td>
                                    <td style="background-color: #f99;">86.36</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">98.99</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>108</td>
                                    <td class="text-left">[PROBOLINGGO]rachmat nurisma bagus p</td>

                                    <td style="background-color: #f99;">77.68</td>
                                    <td>31</td>
                                    <td>299</td>
                                    <td>330</td>
                                    <td>433</td>
                                    <td style="background-color: #f99;">76.21</td>

                                    <!-- trx -->
                                    <td>16,333</td>
                                    <td>2,247</td>
                                    <td>137,679</td>
                                    <td>279,748</td>
                                    <td style="background-color: #f99;">49.22</td>

                                    <!-- fbi -->
                                    <td>24,114,886</td>
                                    <td>2,241,581</td>
                                    <td>213,031,569</td>
                                    <td>310,059,512</td>
                                    <td style="background-color: #f99;">68.71</td>

                                    <!-- casa -->
                                    <td>437,723,342</td>
                                    <td>12,704,782,307</td>
                                    <td>13,142,505,649</td>
                                    <td>14,390,601,837</td>
                                    <td style="background-color: #f99;">477.11</td>

                                    <!-- agen bep -->
                                    <td>27</td>
                                    <td>8</td>
                                    <td>35</td>
                                    <td style="background-color: #f99">86.42</td>

                                    <!-- pertumbuhan agen -->
                                    <td>2</td>
                                    <td>8</td>
                                    <td style="background-color: #f99;">71.43</td>

                                    <!-- bumdes -->
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>4</td>
                                    <td style="background-color: #f99;">25</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>11</td>
                                    <td>13</td>
                                    <td style="background-color: #f99;">84.62</td>

                                    <!-- reff. pinj -->
                                    <td>310</td>
                                    <td>176</td>
                                    <td style="background-color: #2ED15F;">176.14</td>

                                    <!-- active web -->
                                    <td>245</td>
                                    <td style="background-color: #f99;">81.94</td>

                                    <!-- active edc -->
                                    <td style="background-color: #ff9;">98.99</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>
                                </tr>
                                <tr>
                                    <td>109</td>
                                    <td class="text-left">[JEMBER]andri darmiko</td>

                                    <td style="background-color: #f99;">77.16</td>
                                    <td>37</td>
                                    <td>304</td>
                                    <td>341</td>
                                    <td>418</td>
                                    <td style="background-color: #f99;">81.58</td>

                                    <!-- trx -->
                                    <td>22,106</td>
                                    <td>3,460</td>
                                    <td>193,009</td>
                                    <td>437,745</td>
                                    <td style="background-color: #f99;">44.09</td>

                                    <!-- fbi -->
                                    <td>37,197,749</td>
                                    <td>4,323,792</td>
                                    <td>315,724,792</td>
                                    <td>374,053,830</td>
                                    <td style="background-color: #f99;">84.41</td>

                                    <!-- casa -->
                                    <td>614,602,886</td>
                                    <td>8,489,445,824</td>
                                    <td>9,104,048,710</td>
                                    <td>11,566,606,730</td>
                                    <td style="background-color: #f99;">549.2</td>

                                    <!-- agen bep -->
                                    <td>35</td>
                                    <td>17</td>
                                    <td>52</td>
                                    <td style="background-color: #f99">92.04</td>

                                    <!-- pertumbuhan agen -->
                                    <td>3</td>
                                    <td>6</td>
                                    <td style="background-color: #f99;">64.29</td>

                                    <!-- bumdes -->
                                    <td>1</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>4</td>
                                    <td style="background-color: #f99;">50</td>

                                    <td></td>

                                    <!-- reff. simp -->
                                    <td>12</td>
                                    <td>13</td>
                                    <td style="background-color: #f99;">92.31</td>

                                    <!-- reff. pinj -->
                                    <td>21</td>
                                    <td>53</td>
                                    <td style="background-color: #f99;">39.62</td>

                                    <!-- active web -->
                                    <td>279</td>
                                    <td style="background-color: #f99;">91.78</td>

                                    <!-- active edc -->
                                    <td style="background-color: #2ED15F;">100</td>

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
