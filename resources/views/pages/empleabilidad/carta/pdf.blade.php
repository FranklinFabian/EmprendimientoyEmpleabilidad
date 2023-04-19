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
            <td class="negrilla centro">CARTA</td>
        </tr>
    </table>

    <table id="table-no-margin">
        <tr>
            <td width="50%"></td>
            <td class="margin negrilla fondo" width="25%">Nombres y Apellidos:</td>
            <td class="margin" width="25%"></td>
        </tr>
        <tr>
            <td width="50%"></td>
            <td class="margin negrilla fondo" width="25%">Dirección:</td>
            <td class="margin" width="25%"></td>
        </tr>
        <tr>
            <td width="50%"></td>
            <td class="margin negrilla fondo" width="25%">Teléfono:</td>
            <td class="margin" width="25%"></td>
        </tr>
        <tr>
            <td width="50%"></td>
            <td class="margin negrilla fondo" width="25%">Movil:</td>
            <td class="margin" width="25%"></td>
        </tr>
        <tr>
            <td width="50%"></td>
            <td class="margin negrilla fondo" width="25%">Correo Electrónico:</td>
            <td class="margin" width="25%"></td>
        </tr>
    </table>

    <table id="table-no-margin">
        <tr>
            <td class="margin negrilla fondo" width="25%">Institución:</td>
            <td class="margin" width="25%">@isset($data->institucion) {{ $data->institucion }}@endisset</td>
            <td width="50%"></td>
        </tr>
        <tr>
            <td class="margin negrilla fondo" width="25%">Nombres y Apellidos:</td>
            <td class="margin" width="25%">@isset($data->institucion) {{ $data->institucion }}@endisset</td>
            <td width="50%"></td>
        </tr>
        <tr>
            <td class="margin negrilla fondo" width="25%">Cargo en la empresa:</td>
            <td class="margin" width="25%">@isset($data->institucion) {{ $data->institucion }}@endisset</td>
            <td width="50%"></td>
        </tr>
    </table>

    <table id="table-no-margin">
        <tr>
            <td width="50%"></td>
            <td class="margin negrilla underline fondo" width="50%">REF.: @isset($data->referencia) {{ $data->referencia }}@endisset </td>
        </tr>
    </table>


    <table id="table-no-margin">
        <tr>
            <td class="margin negrilla fondo" width="25%">Párrafo que explique el motivo de la carta e informe las potencialidades y las intenciones de aportar a la empresa:</td>
            <td class="margin" width="75%">@isset($data->parrafo_motivo) {{ $data->parrafo_motivo }}@endisset</td>
        </tr>
    </table>

    <br>

    <table id="table-no-margin">
        <tr>
            <td class="margin negrilla fondo" width="25%">Párrafo que expresa el motivo por el que se postula al puesto:</td>
            <td class="margin" width="75%">@isset($data->parrafo_puesto) {{ $data->parrafo_puesto }}@endisset</td>
        </tr>
    </table>

    <br>

    <table id="table-no-margin">
        <tr>
            <td class="margin negrilla fondo" width="25%">Párrafo donde se manifiesta interés por concertar la cita:</td>
            <td class="margin" width="75%">@isset($data->parrafo_interes) {{ $data->parrafo_interes }}@endisset</td>
        </tr>
    </table>

    <br>

    <table id="table-no-margin">
        <tr>
            <td class="margin negrilla fondo" width="25%">Despedida: </td>
            <td class="margin" width="75%">@isset($data->parrafo_despedida) {{ $data->parrafo_despedida }}@endisset</td>
        </tr>
    </table>

    <br>

    <table id="table-no-margin">
        <tr>
            <td width="25%"></td>
            <td class="margin negrilla fondo" width="25%"><br> &nbsp; Firma  <br> &nbsp;</td>
            <td class="margin" width="25%"></td>
            <td width="25%"></td>
        </tr>
        <tr>
            <td width="25%"></td>
            <td class="margin negrilla fondo" width="25%"> Nombres y Apellidos </td>
            <td class="margin" width="25%"></td>
            <td width="25%"></td>
        </tr>
    </table>

</main>
</body>
</html>

