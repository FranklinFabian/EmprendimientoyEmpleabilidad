<html>
<head>
    <style>
        @page {
            margin: 0cm 0cm;
            font-family: Arial, Helvetica, sans-serif, normal;
            font-size: 11px;
        }

        body {
            margin: 2.7cm 1cm 1cm;
            border: 1px solid #6D6E70;
        }



        .letratipo1{
            font-weight: bold;
            font-size: 20px;
        }

        .letratipo2{
            font-size: 12px;
        }

        .letratipo3{
            font-size: 9px;
        }

        .letratipo4{
            font-size: 8px;
        }

        .fondo{
            background-color: #DDEBF7;
            font-weight: bold;
        }

        .negrilla{
            font-weight: bold;
        }

        .centro{
            text-align: center;
        }

        .izquierda{
            text-align: left;
        }

        .derecha{
            text-align: right;
        }

        #table-margin{
            width: 100%;
        }

        #table-margin td{
            border: 1px solid #6D6E70;
            padding: 5px;
        }

        #table-no-margin {
            width: 100%;
        }

        #table-no-margin td{
            padding: 5px;
        }

        .margin{
            border: 1px solid #6D6E70;
        }

        .underline{
            text-decoration: underline;
        }



        header {
            position: fixed;
            top: 0.6cm;
            left: 1cm;
            right: 1cm;
            height: 2cm;
            text-align: center;
            line-height: 15px;
            border: 1px solid #6D6E70;

        }




    </style>
</head>
<body>

<header>
    <table id="table-no-margin">
        <tr>
            <td align="center" width="15%"><img src="{{ asset('storage/childfund.jpeg') }}" alt="Logo" height="60px"></td>
            <td align="center" width="15%"><img src="{{ asset('storage/sanjose.jpeg') }}" alt="Logo" height="60px"></td>
            <td align="center" width="70%"> <div class="letratipo1">PROGRAMA DE EMPLEABILIDAD Y EMPRENDIMIENTO</div></td>
        </tr>

    </table>
</header>
<main>

    <table id="table-no-margin">
        <tr>
            <td><strong>Nombres:</strong> @isset($data->usuario) {{ $data->usuario }}@endisset</td>
            <td><strong>Fecha:</strong> @isset($data->fecha) {{ $data->fecha }}@endisset</td>
        </tr>
    </table>

    <table id="table-no-margin">
        <tr>
            <td class="negrilla centro">EVALUACION DE EMPRENDIMIENTO</td>
        </tr>
    </table>

    <table id="table-no-margin">
        <tr>
            <td class="negrilla">
                1. Según el monitoreo global del emprendimiento cual es el porcentaje de emprendimientos que alcanza el tercer año de vida:
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->monitoreo_global) {{ $data->monitoreo_global }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                2. ¿Qué tipo de emprendimientos existen?:
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->tipo_emprendimientos) {{ $data->tipo_emprendimientos }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                3. ¿En cuantos niveles se divide la pirámide de Maslow?:
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->piramide_maslow) {{ $data->piramide_maslow }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                4. ¿Cuál de estas afirmaciones es la correcta?:
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->afirmaciones) {{ $data->afirmaciones }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                5. ¿Cuántos componentes tiene el modelo CANVAS?:
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->modelo_canvas) {{ $data->modelo_canvas }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                6. La segmentación de clientes se refiere a:
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->segmentacion_clientes) {{ $data->segmentacion_clientes }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                7. Cuales son los tipos de costos:
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->tipos_costos) {{ $data->tipos_costos }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                8. Los costos fijos son:
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->costos_fijos) {{ $data->costos_fijos }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                9. ¿A que se refiere la depreciación?:
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->depreciacion) {{ $data->depreciacion }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                10. Que características poseen los productos o servicios sin excepción:
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->productos_servicios) {{ $data->productos_servicios }}@endisset
            </td>
        </tr>
    </table>



</main>
</body>
</html>

