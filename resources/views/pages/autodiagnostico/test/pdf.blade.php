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
            background-color: #D1D2D4;
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
            <td class="negrilla centro">AUTODIAGNÓSTICO</td>
        </tr>
    </table>

    <table id="table-no-margin">
        <tr>
            <td class="negrilla">1. AUTOCONOCIMIENTO</td>
        </tr>
        <tr>
            <td>
                <hr>
            </td>
        </tr>
    </table>

    <table id="table-no-margin">
        <tr>
            <td class="negrilla">
                1. Ante los consejos de los demás adoptó una actitud abierta
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->ca1) {{ $data->ca1 }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                2. Busco ayuda para mejor cuando me siento desorientado en un determinado tema
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->ca2) {{ $data->ca2 }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                3. Tengo confianza en mis posibilidades y capacidades
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->ca3) {{ $data->ca3 }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                4. Durante este periodo de COVID me muestro resilente
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->ca4) {{ $data->ca4 }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                5. Siento motivación por conseguir mis objetivos
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->ca5) {{ $data->ca5 }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                6. Soy perfeccionista y suelo confundir la búsqueda de la perfección con la excelencia
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->ca6) {{ $data->ca6 }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                7. Me considero un poco tímido, a pesar de tener siempre nuevas ideas en mi cabeza me cuesta expresarlas
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->ca7) {{ $data->ca7 }}@endisset
            </td>
        </tr>

    </table>


    <table id="table-no-margin">
        <tr>
            <td class="negrilla">2. RESOLUCION DE CONFLICTOS</td>
        </tr>
        <tr>
            <td>
                <hr>
            </td>
        </tr>
    </table>

    <table id="table-no-margin">
        <tr>
            <td class="negrilla">
                1. Afronto los problemas con optimismo y las analizo con una mirada esperanzadora
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->ca8) {{ $data->ca8 }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                2. Tengo la predisposición para asumir retos
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->ca9) {{ $data->ca9 }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                3. Es importante para mí disponer la autonomía en el trabajo, porque no me gusta regirme a un horario
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->ca10) {{ $data->ca10 }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                4. Me logre adoptar fácilmente a la era digital
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->ca11) {{ $data->ca11 }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                5. Sacrificarías tu tiempo libre si el trabajo lo demanda
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->ca12) {{ $data->ca12 }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                6. Soy capaz de separar mis conflictos personales en el área laboral
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->ca13) {{ $data->ca13 }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                7. Expreso con claridad aquello que me causa malestar
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->ca14) {{ $data->ca14 }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                8. No me dejo llevar con mis impulsos emocionales
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->ca15) {{ $data->ca15 }}@endisset
            </td>
        </tr>
    </table>

    <table id="table-no-margin">
        <tr>
            <td class="negrilla">
                9. Soy capaz de tolerar el stress en forma efectiva
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->ca16) {{ $data->ca16 }}@endisset
            </td>
        </tr>
    </table>



    <table id="table-no-margin">
        <tr>
            <td class="negrilla">3. PROYECTO</td>
        </tr>
        <tr>
            <td>
                <hr>
            </td>
        </tr>
    </table>

    <table id="table-no-margin">
        <tr>
            <td class="negrilla">
                1. Se encuentra satisfecho con su emprendimiento propio
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->ca17) {{ $data->ca17 }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                2. Me resulta fácil asignar tareas a los demás
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->ca18) {{ $data->ca18 }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                3. Soy capaz de trabajar en equipo
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->ca19) {{ $data->ca19 }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                4. Puedo administrar mis recursos económicos eficientemente
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->ca20) {{ $data->ca20 }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                5. Puedo proyectarme a futuro en mi proyecto
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->ca21) {{ $data->ca21 }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                6. Planifico de forma rigurosa las acciones concretas para conseguir mis metas (plan de negocio, canvas y contabilidad)
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->ca22) {{ $data->ca22 }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                7. Tengo una buena relación laboral con mis proveedores de negocio
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->ca23) {{ $data->ca23 }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                8. Tengo una buena relación laboral con mis clientes
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->ca24) {{ $data->ca24 }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                9.  Logre adaptar mi negocio a la digitalización comercial
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->ca25) {{ $data->ca25 }}@endisset
            </td>
        </tr>
    </table>

</main>
</body>
</html>

