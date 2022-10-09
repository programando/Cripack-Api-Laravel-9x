<?php

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;
  
 

  
       Route::group(['prefix' => 'empleados'], function () {
        Route::get('/evaluacion/desepenio/email'           , 'TercerosEvaluacionDesepenioController@enviarComunicaciones') ;
    });
   