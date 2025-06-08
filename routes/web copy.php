<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
 
Route::get('/','DataForExpertController@getDataforHome');

// Location Routes
Route::get('/getdistrict/{id}', 'PagesController@getDistrict'); 
Route::get('/subdistrict/{id}', 'PagesController@getTumbol');    


// Menu Tap1
Route::get('/reports/map', 'MapController@getDamageByAmpG'); 
Route::get('chart', 'HighChartController@indexAll')->name('chartAll');
Route::get('chart/{amp}', 'HighChartController@probAll');
Route::get('/reports/summary', function () {return view('general/summary');});
Route::get('/reports/problem', function () {return view('general/problem');});
Route::get('/reports/solution', function () {return view('general/solution');});

Route::get('report/pdf/amp','DataForExpertController@expertPDFAmp')->name('report/pdf/amp');
Route::get('reports/problem/pdf', "pdfController@tablegen")->name('reports/pdf');
Route::get('reports/solution/pdf', "DataForExpertController@solutionPDFgen")->name('reports/solution');


Route::get('projectInfomation',function () {return view('menubar/projectInfo');});

Route::get('form/getDamage_admin/{app}', 'MapController@getDamage_admin');


Route::get('blocker', 'FormBlockageController@getBlockagebyUser')->name('blocker');
Route::get('newblockage', 'PagesController@newFormblockage');
Route::get('/editblockage/{id}', 'PagesController@editblockage'); 
Route::get('reportblockage/pdf/{id}', "pdfController@view");



page
1. home.blade.php
Tab1
1. general.map.blade.php
2. chart/chart_Allsee
3. general/summary => expert.reportpdf_Amp_php
4. general/problem => table_reportAmp.blade.php
5. general/solution


<Form>
pages.homeblockage
new_form_blockage
edit_form_blockage_survey
report_php