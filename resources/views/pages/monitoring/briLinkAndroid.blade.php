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
            <h1 class="text-primary"><b>BRILink Android</b></h1>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <p class="text-muted">Data Tanggal 17-09-2021</p>
                    <hr>
                    <div class="box-body table-responsive">
                        <table id="mentoring" class="table table-bordered table-striped table-hover">
                            <thead class="table-info">
                                <tr>
                                    <th>No</th>
                                    <th>Kanca</th>
                                    <th>Jumlah Implementasi</th>
                                    <th>Jumlah Staging</th>
                                    <th>Jumlah Kuota</th>
                                    <th>Sisa Kuota</th>
                                </tr>
                            </thead>
                            <tbody>
                               <tr><td>1</td><td>LUMAJANG</td><td><a href="http://kanwilmalang.com:81/erm/brilinkmpos/det/eyJzdHMiOiIxIiwia29kZV9rYW5jYSI6NDR9">38</a></td><td>0</td><td>40</td><td>2</td></tr><tr><td>2</td><td>JEMBER</td><td><a href="http://kanwilmalang.com:81/erm/brilinkmpos/det/eyJzdHMiOiIxIiwia29kZV9rYW5jYSI6MjF9">16</a></td><td>0</td><td>51</td><td>35</td></tr><tr><td>3</td><td>MADIUN</td><td><a href="http://kanwilmalang.com:81/erm/brilinkmpos/det/eyJzdHMiOiIxIiwia29kZV9rYW5jYSI6NDV9">10</a></td><td>0</td><td>58</td><td>48</td></tr><tr><td>4</td><td>BONDOWOSO</td><td><a href="http://kanwilmalang.com:81/erm/brilinkmpos/det/eyJzdHMiOiIxIiwia29kZV9rYW5jYSI6MTN9">2</a></td><td>0</td><td>18</td><td>16</td></tr><tr><td>5</td><td>KEPANJEN</td><td><a href="http://kanwilmalang.com:81/erm/brilinkmpos/det/eyJzdHMiOiIxIiwia29kZV9rYW5jYSI6NTE2fQ">9</a></td><td>3</td><td>55</td><td>43</td></tr><tr><td>6</td><td>PASURUAN</td><td><a href="http://kanwilmalang.com:81/erm/brilinkmpos/det/eyJzdHMiOiIxIiwia29kZV9rYW5jYSI6NjV9">36</a></td><td>1</td><td>21</td><td>-16</td></tr><tr><td>7</td><td>KEDIRI</td><td><a href="http://kanwilmalang.com:81/erm/brilinkmpos/det/eyJzdHMiOiIxIiwia29kZV9rYW5jYSI6MzN9">53</a></td><td>1</td><td>60</td><td>6</td></tr><tr><td>8</td><td>BLITAR</td><td><a href="http://kanwilmalang.com:81/erm/brilinkmpos/det/eyJzdHMiOiIxIiwia29kZV9rYW5jYSI6OX0">36</a></td><td>2</td><td>74</td><td>36</td></tr><tr><td>9</td><td>PROBOLINGGO</td><td><a href="http://kanwilmalang.com:81/erm/brilinkmpos/det/eyJzdHMiOiIxIiwia29kZV9rYW5jYSI6NzN9">13</a></td><td>0</td><td>25</td><td>12</td></tr><tr><td>10</td><td>BANYUWANGI</td><td><a href="http://kanwilmalang.com:81/erm/brilinkmpos/det/eyJzdHMiOiIxIiwia29kZV9rYW5jYSI6N30">39</a></td><td>0</td><td>90</td><td>51</td></tr><tr><td>11</td><td>NGANJUK</td><td><a href="http://kanwilmalang.com:81/erm/brilinkmpos/det/eyJzdHMiOiIxIiwia29kZV9rYW5jYSI6NTZ9">21</a></td><td>0</td><td>112</td><td>91</td></tr><tr><td>12</td><td>MALANG SUTOYO</td><td><a href="http://kanwilmalang.com:81/erm/brilinkmpos/det/eyJzdHMiOiIxIiwia29kZV9rYW5jYSI6NDI5fQ">1</a></td><td>0</td><td>10</td><td>9</td></tr><tr><td>13</td><td>TRENGGALEK</td><td><a href="http://kanwilmalang.com:81/erm/brilinkmpos/det/eyJzdHMiOiIxIiwia29kZV9rYW5jYSI6MTc3fQ">19</a></td><td>4</td><td>74</td><td>51</td></tr><tr><td>14</td><td>NGAWI</td><td><a href="http://kanwilmalang.com:81/erm/brilinkmpos/det/eyJzdHMiOiIxIiwia29kZV9rYW5jYSI6NTd9">20</a></td><td>0</td><td>95</td><td>75</td></tr><tr><td>15</td><td>MALANG M.DINATA</td><td><a href="http://kanwilmalang.com:81/erm/brilinkmpos/det/eyJzdHMiOiIxIiwia29kZV9rYW5jYSI6MzQ0fQ">3</a></td><td>0</td><td>46</td><td>43</td></tr><tr><td>16</td><td>TULUNGAGUNG</td><td><a href="http://kanwilmalang.com:81/erm/brilinkmpos/det/eyJzdHMiOiIxIiwia29kZV9rYW5jYSI6MTEwfQ">25</a></td><td>0</td><td>81</td><td>56</td></tr><tr><td>17</td><td>SOEKARNO HATTA</td><td><a href="http://kanwilmalang.com:81/erm/brilinkmpos/det/eyJzdHMiOiIxIiwia29kZV9rYW5jYSI6NTc5fQ">2</a></td><td>0</td><td>12</td><td>10</td></tr><tr><td>18</td><td>GENTENG</td><td><a href="http://kanwilmalang.com:81/erm/brilinkmpos/det/eyJzdHMiOiIxIiwia29kZV9rYW5jYSI6NTc3fQ">21</a></td><td>0</td><td>33</td><td>12</td></tr><tr><td>19</td><td>PACITAN</td><td><a href="http://kanwilmalang.com:81/erm/brilinkmpos/det/eyJzdHMiOiIxIiwia29kZV9rYW5jYSI6Njd9">29</a></td><td>0</td><td>55</td><td>26</td></tr><tr><td>20</td><td>MAGETAN</td><td><a href="http://kanwilmalang.com:81/erm/brilinkmpos/det/eyJzdHMiOiIxIiwia29kZV9rYW5jYSI6NDl9">24</a></td><td>0</td><td>81</td><td>57</td></tr><tr><td>21</td><td>SITUBONDO</td><td><a href="http://kanwilmalang.com:81/erm/brilinkmpos/det/eyJzdHMiOiIxIiwia29kZV9rYW5jYSI6OTB9">2</a></td><td>0</td><td>23</td><td>21</td></tr><tr><td>22</td><td>PONOROGO</td><td><a href="http://kanwilmalang.com:81/erm/brilinkmpos/det/eyJzdHMiOiIxIiwia29kZV9rYW5jYSI6NzB9">45</a></td><td>1</td><td>70</td><td>24</td></tr><tr><td>23</td><td>PARE</td><td><a href="http://kanwilmalang.com:81/erm/brilinkmpos/det/eyJzdHMiOiIxIiwia29kZV9rYW5jYSI6NTU1fQ">0</a></td><td>0</td><td>26</td><td>26</td></tr>
                            </tbody>
                            <tfoot>
                                <tr><th></th><th>Total</th><th>464</th>
                                    <th>12</th>
                                    <th>1210</th>
                                    <th>734</th>
                                </tr>            </tfoot>
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
