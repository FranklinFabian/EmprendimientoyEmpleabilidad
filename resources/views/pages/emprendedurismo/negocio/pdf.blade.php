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
            <td class="negrilla centro">IDEA DE NEGOCIO</td>
        </tr>
    </table>

    <table id="table-no-margin">
        <tr>
            <td class="negrilla">
                1. Cual es el nombre de tu idea de negocio:
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->nombre) {{ $data->nombre }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                2. Tu idea de negocio será de:
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->idea_negocio) {{ $data->idea_negocio }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                3. Cuan costoso es llevar a cabo tu idea:
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->costoso) {{ $data->costoso }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                4. Hacer tu idea de negocio será:
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->hacer_idea) {{ $data->hacer_idea }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                5. Te gusta tu idea de negocio:
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->gusta_idea) {{ $data->gusta_idea }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                6. Conoces del proceso de fabricación para llevar a cabo tu idea:
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->conocer_proceso) {{ $data->conocer_proceso }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                7. Cuentas con El Dinero Para Hacerlo:
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->dinero) {{ $data->dinero }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                8. Cuentas con algún apoyo para llevar a cabo tu idea de negocio:
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->apoyo) {{ $data->apoyo }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                9. Conoces a Tus Proveedores o Compradores:
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->proveedores_compradores) {{ $data->proveedores_compradores }}@endisset
            </td>
        </tr>
    </table>



</main>
</body>
</html>

