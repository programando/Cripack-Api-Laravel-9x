<?php
 
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\AgendaAsstnciaMqunasController;
 

    Route::controller( AgendaAsstnciaMqunasController::class )->prefix('clientes/asistencia')->group ( function () {
        Route::post('/enviar/email/aprobadas'                , 'aprobadasEnviarEmail') ;
    });
