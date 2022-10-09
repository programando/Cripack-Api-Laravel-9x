<!DOCTYPE html>
<html lang="en" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
  <meta charset="utf-8">
  <meta name="x-apple-disable-message-reformatting">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no, date=no, address=no, email=no">
  <!--[if mso]>
    <xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch></o:OfficeDocumentSettings></xml>
    <style>
      td,th,div,p,a,h1,h2,h4,h4,h5,h6 {font-family: "Segoe UI", sans-serif; mso-line-height-rule: exactly;}
    </style>
  <![endif]-->
    <title>Cripack - Servicio al cliente</title>
 

     <style>
      
      .btn {
          color           : #fff;
          display         : inline-block;
          font-family     : -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI";
          font-size       : 14px;
          overflow        : hidden;
          text-align      : center;
          text-decoration : none;
          box-sizing      : border-box;
          border-radius   : 4px;
      }

      .btn-rechazar {
          color           : #fff;
          display         : inline-block;
          font-family     : -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI";
          font-size       : 14px;
          overflow        : hidden;
          text-align      : center;
          text-decoration : none;
          box-sizing      : border-box;
          border-radius   : 4px;

        background-color: #e53e3e;
        border-bottom   : 8px solid #e53e3e;
        border-left     : 18px solid #e53e3e;     
        border-right    : 18px solid #e53e3e;
        border-top      : 8px solid #e53e3e;
      }
      .btn-estudio {
          color           : #fff;
          display         : inline-block;
          font-family     : -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI";
          font-size       : 14px;
          overflow        : hidden;
          text-align      : center;
          text-decoration : none;
          box-sizing      : border-box;
          border-radius   : 4px;

        background-color: #0D50BC;
        border-bottom   : 8px solid #0D50BC;
        border-left     : 18px solid #0D50BC;     
        border-right    : 18px solid #0D50BC;
        border-top      : 8px solid #0D50BC;
      }
      .btn-aprobar {
          color           : #fff;
          display         : inline-block;
          font-family     : -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI";
          font-size       : 14px;
          overflow        : hidden;
          text-align      : center;
          text-decoration : none;
          box-sizing      : border-box;
          border-radius   : 4px;

        background-color: #34BA0C;
        border-bottom   : 8px solid #34BA0C;
        border-left     : 18px solid #34BA0C;     
        border-right    : 18px solid #34BA0C;
        border-top      : 8px solid #34BA0C;
      }
    </style>  
</head>
<body style="font-size: 12px; margin: 0; padding: 0; width: 80%; word-break: break-word; -webkit-font-smoothing: antialiased; background-color: #fff;">
 
  <div role="article"  lang="en">
    <header style="display: flex; margin: 0 40px;">
      <div style="font-size: 10px;">
       
        <h4>Señores:</h4>
        <h4 style="margin-top: 20px; margin-bottom: 0px;"> {{ $Empresa }}</h4>
        <h4 style="margin-top: 5px; margin-bottom: 0px;"> {{ $Contacto }}</h4>
        
        <br><br><br>
      </div>
    </header> 
    <aside style="margin: 0 40px; margin-top: 50px;">
      <div style="text-align: justify;">
        <h4 style="font-weight: 500;">Apreciados Señores,</h4>
        <br><br>
        <h4 style="font-weight: 500;"> 
               Con fecha <strong> {{ $FechaCotizacion }} </strong> enviamos cotización número : <strong> {{ $NroCotizacion}} </strong>, la cual se encuentra
        pendiente de aprobación, por tal motivo solicitamos nos informe de su estado a la siguiente dirección electrónica:<br>
          {{  config('company.EMAIL_SERVICLIENTES')}}  
        Para mayor facilidad, relacionamos los detalles de la misma ( Puede aprobar presionando uno de los botones correspondientes ):
        <br>

        </h4>
      </div>

<table   width="90%" style="margin: 0 auto;">

<!--             <thead  style="text-align: center; color: #fff; background-color: #FFF; height:25px;">
              <tr colspan="10" style="text-align: center">
                  <td> <a class="btn-aprobar"  href="{{ url('cotizaciones/aprobar-todo',[$NroCotizacion])}}">   Aprobar todos los trabajos de esta cotización </a></td>
              </tr>
            </thead> -->
      </table>


      <div style="margin: 0 auto;">
       <table   width="90%" >

            <thead  style="text-align: center; color: #fff; background-color: #272C6B; height:25px;">
              <tr>
                <th>Referencia</th>
                <th>Estilo</th>
                <th>Trabajo</th>
                <th>Material</th>
                <th >Cab.</th>
                <th>Cant.</th>
                <th>Encauche</th>
                <th>Precio</th>
                <th> Aprobar </th>
                <th> En estudio </th>
              </tr>
            </thead>
            <tbody style="font-size:13px;">
                  {!! $BodyTable !!}
            </tbody>
      </table>
</div>
  
    </aside>
    <div style="margin: 0 0px; margin-top: 50px;">
      <h4 style="font-weight: 500;"><span>
       Quedamos atentos a su confirmación. <br><br> Cordialmente,</span></h4>
    </div>
  </div>
  <footer>
    <br><br><br><br><br><br>
    <img src="{{ asset('storage/images/firmas/serviclientes.png') }}" alt="Firma corporativa Cripack-Serviclientes">
  </footer>
</body>
</html>