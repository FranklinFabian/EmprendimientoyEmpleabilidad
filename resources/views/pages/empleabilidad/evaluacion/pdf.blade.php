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
            <td class="negrilla centro">EVALUACION EMPLEABILIDAD</td>
        </tr>
    </table>


    <table id="table-no-margin">
        <tr>
            <td class="negrilla">DERECHOS LABORALES</td>
        </tr>
    </table >
    <table id="table-no-margin">
        <tr>
            <td class="negrilla">
                1. La Ley General del Trabajo se inicia el año 1942, establece los siguientes derechos de los empleados:
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->ley_general) {{ $data->ley_general }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                2. Señale dos características principales de un contrato :
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->contrato) {{ $data->contrato }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                3. El monto que te descuentan por AFP va a:
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->descuento_afp) {{ $data->descuento_afp }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                4. Si eres acosado en el trabajo que debes hacer:
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->acosado_trabajo) {{ $data->acosado_trabajo }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                5. Entre los beneficios sociales que tienen los trabajadores están las licencias que se otorgan por diversas causas, seleccione cuatro de ellas:
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->beneficios_sociales1) {{ $data->beneficios_sociales1 }}@endisset
            </td>
            <td>
                @isset($data->beneficios_sociales2) {{ $data->beneficios_sociales2 }}@endisset
            </td>
            <td>
                @isset($data->beneficios_sociales3) {{ $data->beneficios_sociales3 }}@endisset
            </td>
            <td>
                @isset($data->beneficios_sociales4) {{ $data->beneficios_sociales4 }}@endisset
            </td>
            <td>
                @isset($data->beneficios_sociales5) {{ $data->beneficios_sociales5 }}@endisset
            </td>
            <td>
                @isset($data->beneficios_sociales6) {{ $data->beneficios_sociales6 }}@endisset
            </td>
            <td>
                @isset($data->beneficios_sociales7) {{ $data->beneficios_sociales7 }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                6. La norma establece que la relación laboral tiene los siguientes elementos que deben estar incluidos en el contrato de trabajo:
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->relacion_laboral) {{ $data->relacion_laboral }}@endisset
            </td>
        </tr>
    </table>




    <table id="table-no-margin">
        <tr>
            <td class="negrilla">COMUNICACION EFICAZ </td>
        </tr>
    </table>
    <table id="table-no-margin">
        <tr>
            <td class="negrilla">
                7. En el proceso de comunicación el emisor genera el mensaje y lo emite utilizando el ………………. (memorándum, correo electrónico, etc.), el receptor lo recibe y lo asimila; el proceso de comunicación permitirá que el receptor decodifique y comprenda el mensaje recibido :
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->proceso_comunicacion) {{ $data->proceso_comunicacion }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                8. La comunicación no verbal se refiere a ……………… , ……………. los movimientos de cuerpo, la entonación, sonidos y otros elementos que acompañan al lenguaje verbal
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->comunicacion_no_verbal) {{ $data->comunicacion_no_verbal }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                9. La estructura que debe presentar la carta de presentación laboral
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->estructura_carta) {{ $data->estructura_carta }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                10. La carta de presentación debe tener tres partes claves, complete los que falten:
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->carta_presentacion1) {{ $data->carta_presentacion1 }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                11. Las habilidades blandas tienen que ver con los comportamientos y aptitudes, seleccione 2 habilidades la que consideres más importantes:
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->habilidades_blandas1) {{ $data->habilidades_blandas1 }}@endisset
            </td>
        </tr>
        <tr>
            <td class="negrilla">
                12. Completa las partes del currículum vitae son:
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->partes_cv) {{ $data->partes_cv }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                13. La entrevista es un proceso de selección de personal que se aplica para elegir a la persona idónea para un cargo, se centra en la recepción y evaluación de la información del postulante, complete las fases de la entrevista:
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->entrevista) {{ $data->entrevista }}@endisset
            </td>
        </tr>

        <tr>
            <td class="negrilla">
                14. El PAE es un programa de intermediación laboral que tiene como objetivo mejorar la inserción laboral de los buscadores de empleo, para beneficiarte de las becas que ofrece este programa, completa los requisitos que debes cumplir como buscador de empleo:
            </td>
        </tr>
        <tr>
            <td>
                @isset($data->pae) {{ $data->pae }}@endisset
            </td>
        </tr>


    </table>



</main>
</body>
</html>


