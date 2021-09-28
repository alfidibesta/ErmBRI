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
            <h1 class="text-primary"><b>BRILink Android</b></h1>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row col-auto">
                        <div class="col-md-3 input-grup">
                            <h2 class="card-title mb-0">Kanca</h2>
                            <select class="btn btn-primary btn-block" id="inputGroupSelect01" style="font-size: 14px">
                                <option value="0">-- All --</option>
                                <option value="44">LUMAJANG</option>
                                <option value="21">JEMBER</option>
                                <option value="45">MADIUN</option>
                                <option value="13">BONDOWOSO</option>
                                <option value="516">KEPANJEN</option>
                                <option value="65">PASURUAN</option>
                                <option value="33">KEDIRI</option>
                                <option value="9">BLITAR</option>
                                <option value="73">PROBOLINGGO</option>
                                <option value="7">BANYUWANGI</option>
                                <option value="56">NGANJUK</option>
                                <option value="429">MALANG SUTOYO</option>
                                <option value="177">TRENGGALEK</option>
                                <option value="57">NGAWI</option>
                                <option value="344">MALANG M.DINATA</option>
                                <option value="110">TULUNGAGUNG</option>
                                <option value="579">SOEKARNO HATTA</option>
                                <option value="577">GENTENG</option>
                                <option value="67">PACITAN</option>
                                <option value="49">MAGETAN</option>
                                <option value="90">SITUBONDO</option>
                                <option value="70">PONOROGO</option>
                                <option value="555">PARE</option>
                                <option value="51">MALANG KAWI</option>
                                <option value="854">KANWIL MALANG</option>
                                <option value="851">KANINS MALANG</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="box-body table-responsive">
                        <table class="table table-bordered table-striped table-hover" id="mentoring" role="grid">
                            <thead class="table-info">
                                <tr role="row">
                                    <th>No</th>
                                    <th>Kode Outlet</th>
                                    <th>NamaOutlet</th>
                                    <th>Alamat</th>
                                    <th>SN EDC / SN SIM</th>
                                    <th>Kanca</th>
                                    <th>PAB</th>
                                    <th>Tgl Implementasi</th>
                                    <th>Action</th>
                                    <th>Ket.</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr role="row" class="odd">
                                    <td>1</td>
                                    <td>11113808</td>
                                    <td>WIRATAMA MOBILE</td>
                                    <td>ds.klurahan 01/03</td>
                                    <td>
                                        <p style="margin: 0">edc:PE5720AN60320</p>
                                        <p style="margin: 0">sim:085192442430</p>
                                    </td>
                                    <td>NGANJUK</td>
                                    <td>Riska Dede Antoko</td>
                                    <td class="sorting_1">14 September 2021</td>
                                    <td><a href="http://kanwilmalang.com:81/erm/lapormposbrilink/update/eyJpZCI6IjUxMiJ9/"
                                            class="btn btn-xs btn-warning btn-flat">Update</a></td>
                                    <td></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td>2</td>
                                    <td>11129891</td>
                                    <td>Rena Cell Mobile</td>
                                    <td>Jln Barito No 115 Ds Begadung Kab Nganjuk</td>
                                    <td>
                                        <p style="margin: 0">edc:PE5720AN62653</p>
                                        <p style="margin: 0">sim:085192442434</p>
                                    </td>
                                    <td>NGANJUK</td>
                                    <td>Agus Sumarsono</td>
                                    <td class="sorting_1">14 September 2021</td>
                                    <td><a href="http://kanwilmalang.com:81/erm/lapormposbrilink/update/eyJpZCI6IjUxMyJ9/"
                                            class="btn btn-xs btn-warning btn-flat">Update</a></td>
                                    <td></td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td>3</td>
                                    <td>11087450</td>
                                    <td>Anugrah Jaya Mandiri</td>
                                    <td>Komis Wetan 01/07 Wonosobo</td>
                                    <td>
                                        <p style="margin: 0">edc:PE5720AN62771</p>
                                        <p style="margin: 0">sim:085192442487</p>
                                    </td>
                                    <td>BANYUWANGI</td>
                                    <td>Dian Prajabakti Jonathan</td>
                                    <td class="sorting_1">14 September 2021</td>
                                    <td><a href="http://kanwilmalang.com:81/erm/lapormposbrilink/update/eyJpZCI6IjI2MiJ9/"
                                            class="btn btn-xs btn-warning btn-flat">Update</a></td>
                                    <td></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td>4</td>
                                    <td>11105981</td>
                                    <td>Intan Toko</td>
                                    <td>Sumberdadi 32/05 Tegaldlimo</td>
                                    <td>
                                        <p style="margin: 0">edc:PE5720AN61557</p>
                                        <p style="margin: 0">sim:085192442488</p>
                                    </td>
                                    <td>BANYUWANGI</td>
                                    <td>Dian Prajabakti Jonathan</td>
                                    <td class="sorting_1">14 September 2021</td>
                                    <td><a href="http://kanwilmalang.com:81/erm/lapormposbrilink/update/eyJpZCI6IjI4NCJ9/"
                                            class="btn btn-xs btn-warning btn-flat">Update</a></td>
                                    <td></td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td>5</td>
                                    <td>11113637</td>
                                    <td>PITOYO</td>
                                    <td>DUSUN KALIBOYO RT01 RW02</td>
                                    <td>
                                        <p style="margin: 0">edc:PE5720AN61052</p>
                                        <p style="margin: 0">sim:085192442489</p>
                                    </td>
                                    <td>BANYUWANGI</td>
                                    <td>Bayu Kharisma</td>
                                    <td class="sorting_1">14 September 2021</td>
                                    <td><a href="http://kanwilmalang.com:81/erm/lapormposbrilink/update/eyJpZCI6IjI5MyJ9/"
                                            class="btn btn-xs btn-warning btn-flat">Update</a></td>
                                    <td></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td>6</td>
                                    <td>11116129</td>
                                    <td>SUHARIPIN</td>
                                    <td>DSN SUNGAILEMBU RT 03 RW 01</td>
                                    <td>
                                        <p style="margin: 0">edc:PE5720AN62679</p>
                                        <p style="margin: 0">sim:085192442490</p>
                                    </td>
                                    <td>BANYUWANGI</td>
                                    <td>Ferry Andry Setiawan</td>
                                    <td class="sorting_1">14 September 2021</td>
                                    <td><a href="http://kanwilmalang.com:81/erm/lapormposbrilink/update/eyJpZCI6IjI5OSJ9/"
                                            class="btn btn-xs btn-warning btn-flat">Update</a></td>
                                    <td></td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td>7</td>
                                    <td>10709131</td>
                                    <td>RIA TRI SUSANTI</td>
                                    <td>DUSUN KRAJAN RT 09 RW 1 SENEPOREJO</td>
                                    <td>
                                        <p style="margin: 0">edc:PE5720AN61843</p>
                                        <p style="margin: 0">sim:085192442479</p>
                                    </td>
                                    <td>BANYUWANGI</td>
                                    <td>Dian Prajabakti Jonathan</td>
                                    <td class="sorting_1">14 September 2021</td>
                                    <td><a href="http://kanwilmalang.com:81/erm/lapormposbrilink/update/eyJpZCI6IjE0OCJ9/"
                                            class="btn btn-xs btn-warning btn-flat">Update</a></td>
                                    <td></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td>8</td>
                                    <td>10799072</td>
                                    <td>RUSDIANA KHOFFIATUL MATIN</td>
                                    <td>DUSUN RINGINTELU RT 003 RW 003 BANGOREJO</td>
                                    <td>
                                        <p style="margin: 0">edc:PE5720AN60344</p>
                                        <p style="margin: 0">sim:085192442480</p>
                                    </td>
                                    <td>BANYUWANGI</td>
                                    <td>Dian Prajabakti Jonathan</td>
                                    <td class="sorting_1">14 September 2021</td>
                                    <td><a href="http://kanwilmalang.com:81/erm/lapormposbrilink/update/eyJpZCI6IjE2MyJ9/"
                                            class="btn btn-xs btn-warning btn-flat">Update</a></td>
                                    <td></td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td>9</td>
                                    <td>10941501</td>
                                    <td>ALDA BRILINK</td>
                                    <td>DUSUN REJOSARI RT 03 RW 01</td>
                                    <td>
                                        <p style="margin: 0">edc:PE5720AN61829</p>
                                        <p style="margin: 0">sim:085192442481</p>
                                    </td>
                                    <td>BANYUWANGI</td>
                                    <td>Bayu Kharisma</td>
                                    <td class="sorting_1">14 September 2021</td>
                                    <td><a href="http://kanwilmalang.com:81/erm/lapormposbrilink/update/eyJpZCI6IjE4OCJ9/"
                                            class="btn btn-xs btn-warning btn-flat">Update</a></td>
                                    <td></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td>10</td>
                                    <td>10947331</td>
                                    <td>DINDA CELL</td>
                                    <td>Dsn malar rt 001 rw 004</td>
                                    <td>
                                        <p style="margin: 0">edc:PE5720AN60094</p>
                                        <p style="margin: 0">sim:085192442482</p>
                                    </td>
                                    <td>BANYUWANGI</td>
                                    <td>Diyah Sulistyoningrum</td>
                                    <td class="sorting_1">14 September 2021</td>
                                    <td><a href="http://kanwilmalang.com:81/erm/lapormposbrilink/update/eyJpZCI6IjE4OSJ9/"
                                            class="btn btn-xs btn-warning btn-flat">Update</a></td>
                                    <td></td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td>11</td>
                                    <td>10963103</td>
                                    <td>SUNARTI AGEN</td>
                                    <td>DSN KRAJAN RT 002 RW 009</td>
                                    <td>
                                        <p style="margin: 0">edc:PE5720AN62377</p>
                                        <p style="margin: 0">sim:085192442483</p>
                                    </td>
                                    <td>BANYUWANGI</td>
                                    <td>Bayu Kharisma</td>
                                    <td class="sorting_1">14 September 2021</td>
                                    <td><a href="http://kanwilmalang.com:81/erm/lapormposbrilink/update/eyJpZCI6IjIwMCJ9/"
                                            class="btn btn-xs btn-warning btn-flat">Update</a></td>
                                    <td></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td>12</td>
                                    <td>10991893</td>
                                    <td>KOPKAR BANGKIT SEJAHTERA</td>
                                    <td>PTPN X11 KEBUN SUNGAI LEMBU</td>
                                    <td>
                                        <p style="margin: 0">edc:PE5720AN60856</p>
                                        <p style="margin: 0">sim:085192442484</p>
                                    </td>
                                    <td>BANYUWANGI</td>
                                    <td>Ferry Andry Setiawan</td>
                                    <td class="sorting_1">14 September 2021</td>
                                    <td><a href="http://kanwilmalang.com:81/erm/lapormposbrilink/update/eyJpZCI6IjIxNCJ9/"
                                            class="btn btn-xs btn-warning btn-flat">Update</a></td>
                                    <td></td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td>13</td>
                                    <td>11012390</td>
                                    <td>BERKAH JAYA MANDIRI</td>
                                    <td>DUSUN PAELOAN RT 01 RW 03</td>
                                    <td>
                                        <p style="margin: 0">edc:PE5720AN62508</p>
                                        <p style="margin: 0">sim:085192442485</p>
                                    </td>
                                    <td>BANYUWANGI</td>
                                    <td>Bayu Kharisma</td>
                                    <td class="sorting_1">14 September 2021</td>
                                    <td><a href="http://kanwilmalang.com:81/erm/lapormposbrilink/update/eyJpZCI6IjIyMiJ9/"
                                            class="btn btn-xs btn-warning btn-flat">Update</a></td>
                                    <td></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td>14</td>
                                    <td>10617814</td>
                                    <td>JAYA CELL</td>
                                    <td>PASAR PARANG</td>
                                    <td>
                                        <p style="margin: 0">edc:PE5720AN61066</p>
                                        <p style="margin: 0">sim:085192442492</p>
                                    </td>
                                    <td>MAGETAN</td>
                                    <td>AMRI BASMARA</td>
                                    <td class="sorting_1">14 September 2021</td>
                                    <td><a href="http://kanwilmalang.com:81/erm/lapormposbrilink/update/eyJpZCI6IjQ4NyJ9/"
                                            class="btn btn-xs btn-warning btn-flat">Update</a></td>
                                    <td></td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td>15</td>
                                    <td>11130632</td>
                                    <td>PEBRI RINAWATI</td>
                                    <td>BANJAREJO 16/6</td>
                                    <td>
                                        <p style="margin: 0">edc:PE5720AN60006</p>
                                        <p style="margin: 0">sim:085192442493</p>
                                    </td>
                                    <td>MAGETAN</td>
                                    <td>AMRI BASMARA</td>
                                    <td class="sorting_1">14 September 2021</td>
                                    <td><a href="http://kanwilmalang.com:81/erm/lapormposbrilink/update/eyJpZCI6IjQ5MSJ9/"
                                            class="btn btn-xs btn-warning btn-flat">Update</a></td>
                                    <td></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td>16</td>
                                    <td>11168911</td>
                                    <td>KANTIN SITI AMINAH</td>
                                    <td>DSN SELOGIRI RT 001 RW 004</td>
                                    <td>
                                        <p style="margin: 0">edc:PE5720AN62656</p>
                                        <p style="margin: 0">sim:085192442491</p>
                                    </td>
                                    <td>BANYUWANGI</td>
                                    <td>Diyah Sulistyoningrum</td>
                                    <td class="sorting_1">14 September 2021</td>
                                    <td><a href="http://kanwilmalang.com:81/erm/lapormposbrilink/update/eyJpZCI6IjQ5MyJ9/"
                                            class="btn btn-xs btn-warning btn-flat">Update</a></td>
                                    <td></td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td>17</td>
                                    <td>11171000</td>
                                    <td>ANGGA</td>
                                    <td>SAYUTAN 24/08</td>
                                    <td>
                                        <p style="margin: 0">edc:PE5720AS60471</p>
                                        <p style="margin: 0">sim:085192442494</p>
                                    </td>
                                    <td>MAGETAN</td>
                                    <td>AMRI BASMARA</td>
                                    <td class="sorting_1">14 September 2021</td>
                                    <td><a href="http://kanwilmalang.com:81/erm/lapormposbrilink/update/eyJpZCI6IjQ5NCJ9/"
                                            class="btn btn-xs btn-warning btn-flat">Update</a></td>
                                    <td></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td>18</td>
                                    <td>10384059</td>
                                    <td>TOKO MAMI</td>
                                    <td>DSN SONOAGENG RT 13 RW 03</td>
                                    <td>
                                        <p style="margin: 0">edc:PE5720AN61466</p>
                                        <p style="margin: 0">sim:085192442495</p>
                                    </td>
                                    <td>NGANJUK</td>
                                    <td>Aditya Septian Nugroho</td>
                                    <td class="sorting_1">14 September 2021</td>
                                    <td><a href="http://kanwilmalang.com:81/erm/lapormposbrilink/update/eyJpZCI6IjQ5NSJ9/"
                                            class="btn btn-xs btn-warning btn-flat">Update</a></td>
                                    <td></td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td>19</td>
                                    <td>10690938</td>
                                    <td>TOKO SULIS 2</td>
                                    <td>PRAYUNGAN 0/01 LENGKONG</td>
                                    <td>
                                        <p style="margin: 0">edc:PE5720AN62639</p>
                                        <p style="margin: 0">sim:085192442496</p>
                                    </td>
                                    <td>NGANJUK</td>
                                    <td>Rilo Pambudi Marbangun</td>
                                    <td class="sorting_1">14 September 2021</td>
                                    <td><a href="http://kanwilmalang.com:81/erm/lapormposbrilink/update/eyJpZCI6IjQ5NiJ9/"
                                            class="btn btn-xs btn-warning btn-flat">Update</a></td>
                                    <td></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td>20</td>
                                    <td>10873264</td>
                                    <td>TOKO HARYONO</td>
                                    <td>SUKOMORO 03/02</td>
                                    <td>
                                        <p style="margin: 0">edc:PE5720AN62466</p>
                                        <p style="margin: 0">sim:085192442497</p>
                                    </td>
                                    <td>NGANJUK</td>
                                    <td>Dewangga Dharma Kesuma</td>
                                    <td class="sorting_1">14 September 2021</td>
                                    <td><a href="http://kanwilmalang.com:81/erm/lapormposbrilink/update/eyJpZCI6IjQ5NyJ9/"
                                            class="btn btn-xs btn-warning btn-flat">Update</a></td>
                                    <td></td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td>21</td>
                                    <td>10904399</td>
                                    <td>TIRTA LINK</td>
                                    <td>DSN DEPOK RT 05/03 SUMBERJO DEPOK GONDANG</td>
                                    <td>
                                        <p style="margin: 0">edc:PE5720AN62504</p>
                                        <p style="margin: 0">sim:085192442498</p>
                                    </td>
                                    <td>NGANJUK</td>
                                    <td>Hirlani Mustaghfirin Machfudz</td>
                                    <td class="sorting_1">14 September 2021</td>
                                    <td><a href="http://kanwilmalang.com:81/erm/lapormposbrilink/update/eyJpZCI6IjQ5OCJ9/"
                                            class="btn btn-xs btn-warning btn-flat">Update</a></td>
                                    <td></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td>22</td>
                                    <td>10906998</td>
                                    <td>TOKO PRACANGAN KIPTIYAH MOBILE BRILINK</td>
                                    <td>godean loceret</td>
                                    <td>
                                        <p style="margin: 0">edc:PE5720AS60505</p>
                                        <p style="margin: 0">sim:085192442499</p>
                                    </td>
                                    <td>NGANJUK</td>
                                    <td>Wahyu Dwi Hartanto</td>
                                    <td class="sorting_1">14 September 2021</td>
                                    <td><a href="http://kanwilmalang.com:81/erm/lapormposbrilink/update/eyJpZCI6IjQ5OSJ9/"
                                            class="btn btn-xs btn-warning btn-flat">Update</a></td>
                                    <td></td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td>23</td>
                                    <td>10913485</td>
                                    <td>ROHIT MOBILE</td>
                                    <td>Dsn.Margoyoso RT 015 Rw 009 Ds.Kalianyar Kec.Ngronggot Kab.Nganj
                                    </td>
                                    <td>
                                        <p style="margin: 0">edc:PE5720AS62101</p>
                                        <p style="margin: 0">sim:085192442500</p>
                                    </td>
                                    <td>NGANJUK</td>
                                    <td>Riska Dede Antoko</td>
                                    <td class="sorting_1">14 September 2021</td>
                                    <td><a href="http://kanwilmalang.com:81/erm/lapormposbrilink/update/eyJpZCI6IjUwMCJ9/"
                                            class="btn btn-xs btn-warning btn-flat">Update</a></td>
                                    <td></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td>24</td>
                                    <td>10971800</td>
                                    <td>FADHIL CELL</td>
                                    <td>Ds PANDANTOYO 2/2</td>
                                    <td>
                                        <p style="margin: 0">edc:PE5720AS61787</p>
                                        <p style="margin: 0">sim:085192442501</p>
                                    </td>
                                    <td>NGANJUK</td>
                                    <td>Wahyu Dwi Hartanto</td>
                                    <td class="sorting_1">14 September 2021</td>
                                    <td><a href="http://kanwilmalang.com:81/erm/lapormposbrilink/update/eyJpZCI6IjUwMSJ9/"
                                            class="btn btn-xs btn-warning btn-flat">Update</a></td>
                                    <td></td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td>25</td>
                                    <td>10973094</td>
                                    <td>TOKO ARSY II</td>
                                    <td>DSN TAWANGREJO RT 04/05 NGETOS</td>
                                    <td>
                                        <p style="margin: 0">edc:PE5720AN62299</p>
                                        <p style="margin: 0">sim:085192442502</p>
                                    </td>
                                    <td>NGANJUK</td>
                                    <td>Hirlani Mustaghfirin Machfudz</td>
                                    <td class="sorting_1">14 September 2021</td>
                                    <td><a href="http://kanwilmalang.com:81/erm/lapormposbrilink/update/eyJpZCI6IjUwMiJ9/"
                                            class="btn btn-xs btn-warning btn-flat">Update</a></td>
                                    <td></td>
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
