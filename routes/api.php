<?php

use App\Http\Controllers\HospitalSituationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\PandemicStat;
use App\Http\Resources\PandemicStat as PandemicStatResource;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/lastpandemicstat', function () {
    return new PandemicStatResource(PandemicStat::orderBy('last_update', 'DESC')->first());
});

Route::get('/pandemicstats', function () {
    return new PandemicStatResource(PandemicStat::orderBy('last_update', 'DESC')->get());
});

Route::get('/pandemicstatsasc', function () {
    return new PandemicStatResource(PandemicStat::orderBy('last_update', 'ASC')->get());
});

Route::group([
    'prefix' => 'dashboard',
    // 'middleware' => 'auth:dashboard',
], function () {
    Route::group([
        'prefix' => 'auth'
    ], function () {
        Route::post('login', 'AuthController@login');
        Route::post('logout', 'AuthController@logout');
        Route::post('refresh', 'AuthController@refresh');
        Route::post('me', 'AuthController@me');
        Route::post('lost-password', 'AuthController@asKResetPassword');
        Route::get('check-token/{token}', 'AuthController@checkResetPasswordToken');
        Route::post('reset-password/{user_id}', 'AuthController@resetPassword');
    });

    Route::group(['prefix' => 'flux'], function () {
        Route::group(['prefix' => 'predefined'], function () {
            Route::group(['prefix' => 'zones'], function () {
                Route::group(['prefix' => 'h-24'], function () {
                    Route::get('/', 'DashBoardController@getFluxDataPredefined');
                    Route::get('/daily', 'DashBoardController@getFluxDataPredefinedDaily');
                    Route::get('/daily-in', 'DashBoardController@getFluxDataPredefinedDailyIn');
                    Route::get('/daily-out', 'DashBoardController@getFluxDataPredefinedDailyOut');
                });
            });
        });

        Route::group(['prefix' => 'origin'], function () {
            Route::group(['prefix' => 'zones'], function () {
                Route::group(['prefix' => 'h-24'], function () {
                    Route::get('/', 'DashBoardController@getFluxDataFromOrigin');
                    Route::get('/daily', 'DashBoardController@getFluxDataFromOriginDaily');
                    Route::get('daily-in', 'DashBoardController@getFluxDataFromOriginDailyIn');
                    Route::get('daily-out', 'DashBoardController@getFluxDataFromOriginDailyOut');
                });
                Route::group(['prefix' => 'm-30'], function () {
                    Route::get('/', 'DashBoardController@getFlux30DataFromOrigin');
                    Route::get('/daily', 'DashBoardController@getFlux30DataFromOriginDaily');
                    Route::get('daily-in', 'DashBoardController@getFlux30DataFromOriginDailyIn');
                    Route::get('daily-out', 'DashBoardController@getFlux30DataFromOriginDailyOut');
                });
            });
            Route::group(['prefix' => 'provinces'], function () {
                Route::group(['prefix' => 'h-24'], function () {
                    Route::get('/', 'DashBoardController@getFluxDataFromOriginProvince');
                    Route::get('/daily', 'DashBoardController@getFluxDataFromOriginDailyProvince');
                    Route::get('/daily-in', 'DashBoardController@getFluxDataFromOriginDailyInProvince');
                    Route::get('/daily-out', 'DashBoardController@getFluxDataFromOriginDailyOutProvince');
                });
                Route::group(['prefix' => 'm-30'], function () {
                    Route::get('/', 'DashBoardController@getFlux30DataFromOriginProvince');
                    Route::get('/daily', 'DashBoardController@getFlux30DataFromOriginDailyProvince');
                    Route::get('/daily-in', 'DashBoardController@getFlux30DataFromOriginDailyInProvince');
                    Route::get('/daily-out', 'DashBoardController@getFlux30DataFromOriginDailyOutProvince');
                });
            });
        });
    });
    Route::resource('hospital-situations', "HospitalSituationController");
    Route::get('hospitals/', 'DashBoardController@getHospials');
    Route::get('orientation-medical-result', 'DashBoardController@getAllDiagnostics');
    Route::get('orientation-medical-stats', 'DashBoardController@getAllDiagnosticStat');
    Route::get('sondages', 'DashBoardController@getSondages');
    Route::get('cavid-cases', 'DashBoardController@getLastPandemicsRegion');
    Route::get('cavid-cases/statistics', 'DashBoardController@getLastPandemicsStatistics');
    Route::get('cavid-cases/statistics/daily', 'DashBoardController@getLastPandemicsStatisticsDaily');
    Route::post('flux-24', 'DashBoardController@getFluxData');
    Route::post('flux-24-daily', 'DashBoardController@getFluxDataDaily');
    Route::get('flux-zone', 'DashBoardController@getFluxZone');
    Route::get('flux-provinces', 'DashBoardController@getFluxProvinces');
});

Route::post('self-test', 'SelfTestController@apiCovidTest');
