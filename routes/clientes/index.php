<?php
/* DB::listen(function($query) {
echo "<pre>{$query->sql} - {$query->time}</pre>";
});
   */

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TercerosController;
use App\Http\Controllers\AgendaAsstnciaMqunasController;

 
Route::controller( TercerosController::class )
            ->prefix('clientes/')
            //->middleware(['auth:sanctum'])
            ->group ( function () {
                Route::get('bitacora/disenadores'                               , 'bitacoraOtsPorDisenador') ;
                Route::get('bloqueados-cartera'                                 , 'bloqueadosPorCartera') ;
                Route::get('bloqueados-cartera/ots/pendientes'                  , 'bloqueadosPorCarteraOtsPendientes') ;
                Route::get('cotizaciones'                                       , 'cotizacionGenerarDesdeOT')->name('get-cotizacion-from-ot') ;
                Route::get('ots/en-aprobacion'                                  , 'otsBloqueadasDibEnAprobacion') ;
                Route::get('solicitud/orden-compra'                             , 'solicitudOrdenesCompraGenerarFactura') ;
                Route::post('busqueda/'                                         , 'clientesBuscar') ;
                Route::post('busqueda/codigo'                                   , 'buscarClientePorCodigo') ;
                Route::post('busqueda/idtercero'                                , 'buscarClientePorIdTercero') ;
                Route::post('busqueda/por/vendedor'                             , 'clienteBuscarPorVendedor') ;
                Route::post('ots/estado'                                        , 'OrdenesTrabajoEstadoProduccion') ;
                Route::post('ots/historial'                                     , 'OrdenesTrabajoCliente') ;
                Route::post('primeros/registros'                                , 'primerosVeinteClientes') ;
                Route::post('productos/ultimos/3/anios'                         , 'productosUltimos3Anios') ;
                Route::post('ultimas/cinco/compras'                             , 'clienteUltimasCincoCompras') ;
                Route::post('ultimas/visitas'                                   , 'clienteUltimasVeinteVisitas') ;
                Route::post('ventas/ultimos/3/anios'                            , 'ventasUltimos3Anios') ;
                Route::post('ventas/ultimos/3/anios/productos/seleccionados'    , 'ventasValoresUltimos3AniosGruposSeleccionados') ;
                Route::post('resumen/dashBoard'                                 , 'datosResumenDashBoard') ;
                Route::post('cotizaciones'                                      , 'dashBoardCotizacionesUltimos6Meses') ;
                Route::post('ordenes/trabajo'                                   , 'dashBoardOrdenesTrabajo') ;
                Route::post('pqrs'                                              , 'dashBoardPqrs') ;
                Route::post('productos/vedidos/ultimos/3/anios'                 , 'productosVendidosUltimos3Anios') ;
                Route::post('ventas/grupos/productos'                           , 'ventasPorGruposDeProducto') ;
                Route::post('ventas/grupos/productos/seleccionados'             , 'ventasUltimos3AniosGruposSeleccionados') ;
                Route::post('cartera/download/pdf'                              , 'carteraDownloadPdfPorNit') ;
    });

 

?>