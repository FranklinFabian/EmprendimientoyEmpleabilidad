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
            <td class="negrilla centro">MÉTODO CANVA</td>
        </tr>
    </table>

    <table id="table-no-margin">
        <tr>
            <td class="negrilla">
                Idea de Negocio
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->idea) {{ $data->idea }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                Público Objetivo
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->publico_objetivo) {{ $data->publico_objetivo }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                Propuesta de Valor
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->propuesta_valor) {{ $data->propuesta_valor }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                Canales
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->canal) {{ $data->canal }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                Relación con Clientes
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->relacion_cliente) {{ $data->relacion_cliente }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                Fuentes de Ingreso
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->fuente_ingreso) {{ $data->fuente_ingreso }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                Recursos Clave
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->recurso_clave) {{ $data->recurso_clave }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                Actividades Clave
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->actividad_clave) {{ $data->actividad_clave }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                Socios Clave
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->socio_clave) {{ $data->socio_clave }}@endisset
            </td>
        </tr>
    </table>



</main>
</body>
</html>

