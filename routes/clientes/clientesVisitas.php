<?php

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\TercerosVisitasController;

  
    Route::controller( TercerosVisitasController::class )->prefix('clientes/visitas')->group ( function () {
        Route::post('/grabar/nuevo-registro'                , 'grabarNuevaVisita') ;
    });

