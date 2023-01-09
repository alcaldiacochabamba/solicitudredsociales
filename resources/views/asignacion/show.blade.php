<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <style>
            /** 
                Establezca los márgenes de la página en 0, por lo que el pie de página y el encabezado
                puede ser de altura y anchura completas.
            **/
            @page {
                margin: 0cm 0cm;
            }

            /** Defina ahora los márgenes reales de cada página en el PDF **/
            body {
                margin-top: 1cm;
                margin-left: 2cm;
                margin-right: 2cm;
                margin-bottom: 2cm;
            }

            /** Definir las reglas del encabezado **/
            header {
                position: fixed;
                top: 1cm;
                left: 2cm;
                right: 0cm;
                height: 2cm;
            }

            /** Definir las reglas del pie de página **/
            footer {
                position: fixed; 
                bottom: 0cm; 
                left: 0cm; 
                right: 0cm;
                height: 2cm;
            }
            table tr td{
                font-size: 12px;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            .txthead{
                font-size: 10px;
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
        </style>

        <link rel="stylesheet" href="{{ public_path('css/app.css') }}" type="text/css">
    </head>
    <body>
        <header>        <!-- Cabecera -->
            <table class="table table-striped table-hover">
                <tr>
                    <td width="20%">
                        <img src="{{ public_path('/img/logo-cbba.jpg') }}" style="width: 60px; height: 60px">
                    </td>
                    <td class="50%">
                        <span class="txthead">
                            GOBIERNO AUTONOMO MUNICIPAL DE COCHABAMBA <br>
                            SECRETARIA DE SALUD <br>
                        </span>
                    </td>
                    <td width="170px"></td>
                    <td width="5%">
                        <span class="txthead" aling="rigth">
                            Fecha: {{ date('Y-m-d')}} <br>
                            Hora: {{ date('H:m:s')}}
                        </span>
                    </td>
                </tr>
            </table>
            <br>
            <br>
        </header>
        <footer>        <!-- Pie de Pagina -->
            <!-- <img src="footer.png" width="100%" height="100%"/> -->
        </footer>
        <!-- Envuelva el contenido de su PDF dentro de una etiqueta principal -->
        <main>
            <pre>

            </pre>
            <br>
            <table>     <!-- tabla encabezado  -->
                <tr>

                </tr>
            </table>

            <table>     <!-- tabla encabezado -->
                <tr>    <!-- TITULO -->
                    <br>
                    <br>
                    <td colspan="100%" width="380px" >
                        <h4 align="left" >BOLETA DE ENTREGA</h4>
                    </td>
                </tr>
                <tr colspan="2">
                    <td width="30%" >C.I.: {{ $maestros[0]->ci ?? ''}}</td>
                    <td width="60%" >EMPRESA:{{$empresa ?? ''}}</td>
                </tr>
                <tr >
                    <td width="80%" >NOMBERE: {{ $maestros[0]->nombre }} {{$maestros[0]->apellido1}} {{$maestros[0]->apellido2}}</td>
                    <td width="20%">Celular:{{ $maestros[0]->celular ?? ''}}</td>
                </tr>
                
                <tr class="thead">      <!-- titulo de las COLUMNAS
                    <td colspan="100%" width="15%" align="center">HORA INGRESO</td>    -->
                    <td width="10%" align="center">CANTIDAD</td>
                    <td width="10%" align="center" >m3 CILINDRO</td>
                    <td width="40%" align="center">COLOR</td>
                    <td width="30%" align="center">CODIGO DEL CILINDRO</td>
                </tr>
                @php($subt=4)
                @foreach ($maestros as $index => $detal)    <!-- titulo de las COLUMNAS -->
                    <tr>
                        <td width="10%" align="center">{{ $detal->cantidad }}</td>
                        <td width="10%" align="center">{{ $detal->capacidad}}</td>
                        <td width="40%" align="left">{{ $detal->color }}</td>
                        <td width="30%" align="left">{{ $detal->cilindro }}</td>
                    </tr>
                @endforeach
            </table>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="infoVista">
                <tr>
                    <td align="center">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="contFirma">
                            ----------------------------------------<br>
                            {{ $maestros[0]->nombre }} {{$maestros[0]->apellido1}} {{$maestros[0]->apellido2}} <br>
                        </div>
                    </td>
                </tr>
            </table>
        </main>
    </body>
</html>