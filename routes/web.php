<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('cekKodeEror/cekKodeEror',\App\Http\Controllers\CekKodeErorController::class);

Route::group(['prefix' => 'dashboard'], function () {
    Route::get('login', function () {
        return view('pages.dashboard');
    });
});

Route::group(['prefix' => 'grafik'], function () {
    Route::get('BRILink_KC', function () {
        return view('pages.grafik.BRILink_KC');
    });
    Route::get('BRILink_KW', function () {
        return view('pages.grafik.BRILink_KW');
    });
    Route::get('BRILink_PAB', function () {
        return view('pages.grafik.BRILink_PAB');
    });
});

Route::group(['prefix' => 'monitoring'], function () {
    Route::get('reliability', function () {
        return view('pages.monitoring.reliability');
    });
    Route::get('monitoringBriLinkKc', function () {
        return view('pages.monitoring.monitoringBriLinkKc');
    });
    Route::get('monitoringBriLinkPab', function () {
        return view('pages.monitoring.monitoringBriLinkPab');
    });
    Route::get('briLinkAndroid', function () {
        return view('pages.monitoring.briLinkAndroid');
    });
    Route::get('produktifitasBriLink', function () {
        return view('pages.monitoring.produktifitasBriLink');
    });
});

Route::group(['prefix' => 'laporMpos'], function () {
    Route::get('laporMpos', function () {
        return view('pages.laporMpos.laporMpos');
    });
});

Route::group(['prefix' => 'totalTrx'], function () {
    Route::get('totalTrx', function () {
        return view('pages.totalTrx.totalTrx');
    });
});

Route::group(['prefix' => 'trackingEdc'], function () {
    Route::get('trackingEdc', function () {
        return view('pages.trackingEdc.trackingEdc');
    });
});

Route::group(['prefix' => 'informasi'], function () {
    Route::get('informasi', function () {
        return view('pages.informasi.informasi');
    });
});

Route::group(['prefix' => 'topTrx'], function () {
    Route::get('topTrx', function () {
        return view('pages.topTrx.topTrx');
    });
});

//Route::group(['prefix' => 'cekKodeEror'], function () {
//    Route::get('cekKodeEror', function () {
//        return view('pages.cekKodeEror.cekKodeEror');
//    });
//});

Route::group(['prefix' => 'panduanEdc'], function () {
    Route::get('panduanEdc', function () {
        return view('pages.panduanEdc.panduanEdc');
    });
});

Route::group(['prefix' => 'masterData'], function () {
    Route::get('briLinkTargetKc', function () {
        return view('pages.masterData.briLinkTargetKc');
    });
    Route::get('briLinkTargetPab', function () {
        return view('pages.masterData.briLinkTargetKc');
    });
    Route::get('briLinkBobot', function () {
        return view('pages.masterData.briLinkBobot');
    });
    Route::get('briLinkPic', function () {
        return view('pages.masterData.briLinkPic');
    });
    Route::get('briLinkData', function () {
        return view('pages.masterData.briLinkData');
    });
});

Route::group(['prefix' => 'report'], function () {
    Route::get('pencapaianRka', function () {
        return view('pages.report.pencapaianRka');
    });
});

//For Clear cache
Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

// 404 for undefined routes
 Route::any('/{page?}', function () {
     return View::make('pages.error-pages.error-404');
 })->where('page', '');

