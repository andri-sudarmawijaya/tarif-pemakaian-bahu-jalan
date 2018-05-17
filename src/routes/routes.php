<?php

Route::group(['prefix' => 'tarif-pemakaian-bahu-jalan'], function() {
    Route::get('demo', 'Bantenprov\TarifPemakaianBahuJalan\Http\Controllers\TarifPemakaianBahuJalanController@demo');
});
