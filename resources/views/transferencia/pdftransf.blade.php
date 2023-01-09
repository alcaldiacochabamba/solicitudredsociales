<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Asignacion</title>
        <link rel="stylesheet" href="{{ public_path('css/app.css') }}" type="text/css">
        <style>
            /** 
                Establezca los márgenes de la página en 0, por lo que el pie de página y el encabezado
                puede ser de altura y anchura completas.
            **/
            @page {
                margin: 0cm 0cm;
                font-family: Arial;
            }

            /** Defina ahora los márgenes reales de cada página en el PDF **/
            body {
                margin: 3cm 2cm 2cm;
            }

            /** Definir las reglas del encabezado **/
            header {
                position: fixed;
                top: 1cm;
                left: 2cm;
                right: 0cm;
                height: 3cm;
                color: rgb(39, 36, 36);
                text-align: center;
                line-height: 12px;
            }

            /** Definir las reglas del pie de página **/
            footer {
                position: fixed; 
                bottom: 0cm; 
                left: 0cm; 
                right: 0cm;
                height: 2cm;
                /* background-color: #2a0927; */
                color: white;
                text-align: center;
                line-height: 12px;
            }
            table tr td{
                font-size: 12px;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            .txthead{
                font-size: 12px;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                text-align: center;
            }
            .txtadd{
                font-size: 10px;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                font-weight: 200;
            }
            .txtred{
                font-size: 12px;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                font-weight: bold;
                color: red;
            }
            .rotulo{
                font-size: 15px;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                font-weight: bold;
                font-style: italic;
            }
            .bold{
                font-size: 12px;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                font-weight: bold;
                font-style: italic;
            }
            .thead{
                background-color: rgba(155, 155, 155, 0.8);
                padding: 5px;
            }
            odd{
                background-color: rgba(155, 155, 155, 0.3);
                padding: 5px;
            }
            // Nuevos
            main {
                margin-top: 10px;
            }
            main h1 {
                font-size: 20px;
            }
            .titulo {
                margin-top: -35px;
            }
            .txtEncabezado {
                font-size: 13px;
                font-weight: 600;
            }
            .txtFur {
                margin-top: 0px;
                margin-bottom: 3px;
                color: #ae1857;
                font-size: 16px;
            }
            .espacioContenedor {
                margin-top: 10px;
                margin-bottom: 10px;
            }
            .espacioInq {
            margin-left: 10px;
            }
            .contFirma {
                margin-top: 50px;
            }
            .txtTramite {
                font-weight: bold !important;
                font-size: 14px;
            }

        </style>
    </head>
    <body>
        <header>        <!-- Cabecera -->
            <table class="table table-striped table-hover">    <!-- Escudo -->
                <tr>
                    <td width="10%">
                        <img src="{{ public_path('/img/2 logo.jpg') }}" style="width: 60%; height: 60%">
                    </td>
                </tr>
                <br>
                <br>
            </table>

            <table class="rotulo" width="100%" border="0" cellpadding="0" cellspacing="0">   <!-- tabla encabezado  -->
                <tr> 
                    <th width="100%">
                        <h2 align="center" >ACTA DE TRANSFERENCIA DE REDES SOCIALES</h2> {{-- - Nro.{{ $codigo}} --}}
                    </th>
                </tr>
            </table>

        </header>
        <footer>        <!-- Pie de Pagina -->
            <!-- <img src="footer.png" width="100%" height="100%"/> -->
            <table class="table table-striped table-hover"> 
                <tr>
                    <td width="20%">>
                        <img src="{{ public_path('/img/1 logo.jpg') }}" style="width: 25%; height: 25%">
                    </td>

                    <td align="left" style="font-family: Poppins font-size: 10px">
                        GOBIERNO AUTÓNOMO MUNICIPAL DE COCHABAMBA <br>
                        DIRECCIÓN DE PRENSA E IMAGEN CORPORATIVA <br>
                        Plaza 14 de septiembre Nº 210 <br>
                        www.cochabamba.bo <br>
                    </td>
                </tr>
                {{--<tr>
                </tr>  --}}
            </table>
        </footer>
        <!-- Envuelva el contenido de su PDF dentro de una etiqueta principal -->
        <main>
            <pre>

            </pre>
            <br>
            <div align="justify" style="font-family: Poppins font-size: 10px">
                {{ $mensaje}}
                <br>

                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                    <table id="detalles" width="100%" class="table table-striped table-bordered table-condensed table-hover">
                        <thead style="background-color:#A92D0F5">   {{-- TITULO  --}}
                            <th>Plataforma o red social</th>
                            <th>Nombre de la comunidad</th>
                            <th>usuario</th>
                            <th>Contraseña</th>
                        </thead>
                              
                        <tr>
                            <td width="20%" align="left">{{ $filre }}</td>
                            <td width="40%" align="left">{{ $filco}}</td>
                            <td width="25%" align="left">{{ $filus }}</td>
                            <td width="15%" align="left">{{ $filcl }}</td>>
                        </tr>
                        if ({{ $filre1}} != '') {
                            <tr>
                                <td width="20%" align="left">{{ $filre1 }}</td>
                                <td width="40%" align="left">{{ $filco1}}</td>
                                <td width="25%" align="left">{{ $filus1 }}</td>
                                <td width="15%" align="left">{{ $filcl1 }}</td>
                            </tr>
                        }
                        if ({{ $filre2}} != '') {
                            <tr>
                                <td width="20%" align="left">{{ $filre2 }}</td>
                                <td width="40%" align="left">{{ $filco2}}</td>
                                <td width="25%" align="left">{{ $filus2 }}</td>
                                <td width="15%" align="left">{{ $filcl2 }}</td>
                            </tr>
                        }
                        if ({{ $filre3}} != '') {
                            <tr>
                                <td width="20%" align="left">{{ $filre3 }}</td>
                                <td width="40%" align="left">{{ $filco3}}</td>
                                <td width="25%" align="left">{{ $filus3 }}</td>
                                <td width="15%" align="left">{{ $filcl3 }}</td>
                            </tr>
                        }
                        if ({{ $filre4}} != '') {
                            <tr>
                                <td width="20%" align="left">{{ $filre4 }}</td>
                                <td width="40%" align="left">{{ $filco4}}</td>
                                <td width="25%" align="left">{{ $filus4 }}</td>
                                <td width="15%" align="left">{{ $filcl4 }}</td>
                            </tr>
                        }
                        if ({{ $filre5}} != '') {
                            <tr>
                                <td width="20%" align="left">{{ $filre5 }}</td>
                                <td width="40%" align="left">{{ $filco5}}</td>
                                <td width="25%" align="left">{{ $filus5 }}</td>
                                <td width="15%" align="left">{{ $filcl5 }}</td>
                            </tr>
                        }
                    </table>
                </div>
            </div>
            <br>  
            <div align="justify" style="font-family: Poppins font-size: 10px">
                {{ $detalle}}
            </div>             
            <br>
            <div align="justify" style="font-family: Poppins font-size: 10px">
                Páginas de Facebook que contiene el administrador comercial <br>
                <p align="justify">{{ $pagina }}</p>
            </div>
            <br>
            <br>
            <br>
            <div align="center" style="font-family: Poppins font-size: 10px">
                Firma en consentimiento
            </div>
            <br>
            <br>
            <div style="font-family: Poppins font-size: 10px" align="center">
                Cochabamba ………. de …………………………………… del …………… 
            </div>

        </main>
    </body>
</html>

