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
            <td class="negrilla centro">PROBLEMATICAS</td>
        </tr>
    </table>

    @foreach($datas as $key => $data)
        <table id="table-no-margin">
            <tr>
                <td class="margin centro negrilla fondo" width="50%"> PROBLEMA @isset($key) {{ $key + 1 }}@endisset</td>
            </tr>
        </table>
        <table id="table-no-margin">
            <tr>
                <td class="margin negrilla fondo" width="33%">problemática
                    <table id="table-no-margin">
                        <tr>
                            <td>a @isset($data->problema) {{ $data->problema }}@endisset</td>
                        </tr>
                    </table>
                </td>
                <td class="margin negrilla" width="33%">Solución/Idea
                    <table id="table-no-margin">
                        <tr>
                            <td>b @isset($data->solucion) {{ $data->solucion }}@endisset</td>
                        </tr>
                    </table>
                </td>
                <td class="margin negrilla" width="33%">Como resuelve el Problema tu idea
                    <table id="table-no-margin">
                        <tr>
                            <td>c @isset($data->resuelve) {{ $data->resuelve }}@endisset</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    @endforeach
    <br>


</main>
</body>
</html>

