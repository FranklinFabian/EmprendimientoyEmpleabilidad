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
            <td class="negrilla centro">FICHA SOCIAL</td>
        </tr>
    </table>


    <table id="table-no-margin">
        <tr>
            <td class="negrilla">1. ENTORNO FAMILIAR</td>
        </tr>
    </table >
    <table id="table-no-margin">
        <tr>
            <td class="negrilla">
                1. Estado Civil
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->estado_civil) {{ $data->estado_civil }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                2. Cantidad de Hijos
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->cantidad_hijos) {{ $data->cantidad_hijos }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                3. Madre
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->madre) {{ $data->madre }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                4. ¿Vive con la familia?
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->familia_madre) {{ $data->familia_madre }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                5. Padre
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->padre) {{ $data->padre }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                6. ¿Vive con la familia?
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->familia_padre) {{ $data->familia_padre }}@endisset
            </td>
        </tr>
    </table>


    <table id="table-no-margin">
        <tr>
            <td class="negrilla">2. ESTUDIOS</td>
        </tr>
    </table>
    <table id="table-no-margin">
        <tr>
            <td class="negrilla">
                1. ¿Estudias Actualmente?
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->estudias_actualmente) {{ $data->estudias_actualmente }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                2. Cuál es tu nivel de instrucción?
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->nivel_instruccion) {{ $data->nivel_instruccion }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                3. ¿Qué estudias?
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->estudio) {{ $data->estudio }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                4. ¿En qué Institución?
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->institucion) {{ $data->institucion }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                5. Curso o Nivel
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->nivel) {{ $data->nivel }}@endisset
            </td>
        </tr>
    </table>

    <table id="table-no-margin">
        <tr>
            <td class="negrilla">3. INFORMACION LABORAL</td>
        </tr>
    </table>
    <table id="table-no-margin">
        <tr>
            <td class="negrilla">
                1. ¿Trabajas Actualmente?
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->trabajas_actualmente) {{ $data->trabajas_actualmente }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                2. ¿En que empresa?
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->empresa) {{ $data->empresa }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                3. ¿Cargo que desempeñas?
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->cargo) {{ $data->cargo }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                4. ¿En que horarios?
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->horario) {{ $data->horario }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                5. ¿Tienes experiencia laboral?
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->experiencia_laboral) {{ $data->experiencia_laboral }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                6. ¿De cuanto tiempo?
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->experiencia) {{ $data->experiencia }}@endisset
            </td>
        </tr><tr>
            <td class="negrilla">
                7. ¿En que área?
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->area) {{ $data->area }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                8. ¿Tienes algún negocio familiar?
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->negocio_familiar) {{ $data->negocio_familiar }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                9. ¿En que rubro?
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->rubro) {{ $data->rubro }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                10. ¿Trabajas en el negocio familiar?
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->trabajo_negocio) {{ $data->trabajo_negocio }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                11. ¿Recibiste alguna capacitación sobre emprendimiento y/o empleabilidad?
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->capacitacion) {{ $data->capacitacion }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                12. ¿Tienes algún certificado que avale su capacitación?
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->certificado) {{ $data->certificado }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                13. ¿Qué conocimiento aplicas gracias a su capacitación?
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->conocimiento) {{ $data->conocimiento }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                14. ¿Tienes algún integrante de tu familia que este participando en estas capacitaciones?
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->integrante) {{ $data->integrante }}@endisset
            </td>
        </tr>
    </table>

    <table id="table-no-margin">
        <tr>
            <td class="negrilla">4. CONDICIONES DE HABITABILIDAD</td>
        </tr>
    </table>
    <table id="table-no-margin">

    </table>

    <table id="table-no-margin">
        <tr>
            <td class="negrilla">5. PROBLEMATICAS QUE CURSA EN SU VIDA</td>
        </tr>
    </table>
    <table id="table-no-margin">

    </table>

</main>
</body>
</html>

