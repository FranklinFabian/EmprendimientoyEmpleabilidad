 <?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
})->middleware('guest');

/*Rutas de autenticación*/
Route::namespace('Autenticacion')->name('autenticacion.')->group(function(){
    //Formulario de autenticación

    Route::get('/', 'LoginController@loginForm')->name('loginForm');
    //Función para inicio de sesión
    Route::post('/login', 'LoginController@login')->name('login');
    //Función para cerrar sesión
    Route::post('/logout', 'LoginController@logout')->name('logout');
    // Registro
    Route::post('/registro', 'RegistroController@store')->name('store');
});

Route::group(['middleware' => ['auth']], function() {

    Route::get('/dashboard', 'InicioController@index')->name('dashboard');

    /*Rutas de usuario administrador*/
    Route::namespace('Administracion')->prefix('administracion')->name('administracion.')->middleware('role:administrador')->group(function(){

        // Item
        Route::get('/item', 'ItemController@index')->name('item');
        Route::get('/item/tab/{param1}/{param2}', 'ItemController@tab')->name('tab');

        // General
        Route::resource('/item/general', 'GeneralController', ['except' => ['show', 'create']]);
        Route::get('/item/general/{param1}/{param2}', 'GeneralController@index')->name('general');

        // Submódulo Módulo
        Route::resource('/item/modulo', 'ModuloController', ['except' => ['show', 'create']]);
        Route::get('/item/modulo/{param1}/{param2}', 'ModuloController@index')->name('modulo');
        Route::get('/item/modulo_datatable/{param1}', 'ModuloController@dataTable')->name('modulodatatable');
        Route::get('/item/modulo/{param1}/{param2}/{param3}/edit', 'ModuloController@edit');

        // Submódulo Submódulo
        Route::resource('/item/submodulo', 'SubmoduloController', ['except' => ['show', 'create']]);
        Route::get('/item/submodulo/{param1}/{param2}', 'SubmoduloController@index')->name('submodulo');
        Route::get('/item/submodulo_datatable/{param1}', 'SubmoduloController@dataTable')->name('submodulodatatable');
        Route::get('/item/submodulo/{param1}/{param2}/{param3}/edit', 'SubmoduloController@edit');
        Route::get('/item/submodulo_catalogo/submodulo/{param1}/{param2}', 'SubmoduloController@submodulo');

    });



    Route::namespace('Autodiagnostico\Test')->prefix('autodiagnostico/test')->name('autodiagnostico_test.')->middleware('role:autodiagnostico')->group(function(){
        // Item
        Route::get('item', 'ItemController@index')->name('autodiagnostico_test_index');
        Route::delete('item/{param1}', 'ItemController@destroy');

        // Reporte PDF
        Route::get('item/ficha_pdf/{param1}', 'ItemController@fichaPdf')->name('autodiagnostico_test_ficha_pdf');

        // Tab
        Route::get('tab/{param1}/{param2}', 'ItemController@tab')->name('autodiagnostico_test_tab');

        // Autoconocimiento
        Route::resource('autoconocimiento', 'AutoconocimientoController', ['except' => ['show', 'create']]);
        Route::get('autoconocimiento/{param1}/{param2}', 'AutoconocimientoController@index')->name('autodiagnostico_test_autoconocimiento');

        // Resolución de conflictos
        Route::resource('resolucion', 'ResolucionController', ['except' => ['show', 'create']]);
        Route::get('resolucion/{param1}/{param2}', 'ResolucionController@index')->name('autodiagnostico_test_resolucion');

        // Proyecto
        Route::resource('proyecto', 'ProyectoController', ['except' => ['show', 'create']]);
        Route::get('proyecto/{param1}/{param2}', 'ProyectoController@index')->name('autodiagnostico_test_proyecto');
    });



    Route::namespace('Empleabilidad\Ficha')->prefix('empleabilidad/ficha')->name('empleabilidad_ficha.')->middleware('role:empleabilidad')->group(function(){
        // Item
        Route::get('item', 'ItemController@index')->name('empleabilidad_ficha_index');
        Route::delete('item/{param1}', 'ItemController@destroy');

        // Reporte PDF
        Route::get('item/ficha_pdf/{param1}', 'ItemController@fichaPdf')->name('empleabilidad_ficha_ficha_pdf');

        // Tab
        Route::get('tab/{param1}/{param2}', 'ItemController@tab')->name('empleabilidad_ficha_tab');

        // Entorno Familiar
        Route::resource('familiar', 'FamiliarController', ['except' => ['show', 'create']]);
        Route::get('familiar/{param1}/{param2}', 'FamiliarController@index')->name('empleabilidad_ficha_familiar');

        // Estudios
        Route::resource('estudio', 'EstudioController', ['except' => ['show', 'create']]);
        Route::get('estudio/{param1}/{param2}', 'EstudioController@index')->name('empleabilidad_ficha_estudio');

        // Laboral
        Route::resource('laboral', 'LaboralController', ['except' => ['show', 'create']]);
        Route::get('laboral/{param1}/{param2}', 'LaboralController@index')->name('empleabilidad_ficha_laboral');

        // Habitabilidad
        Route::resource('habitabilidad', 'HabitabilidadController', ['except' => ['show', 'create']]);
        Route::get('habitabilidad/{param1}/{param2}', 'HabitabilidadController@index')->name('empleabilidad_ficha_habitabilidad');

        // Problemática
        Route::resource('problematica', 'ProblematicaController', ['except' => ['show', 'create']]);
        Route::get('problematica/{param1}/{param2}', 'ProblematicaController@index')->name('empleabilidad_ficha_problematica');

    });

    Route::namespace('Empleabilidad\Curriculo')->prefix('empleabilidad/curriculo')->name('empleabilidad_curriculo.')->middleware('role:empleabilidad')->group(function(){
        // Item
        Route::get('item', 'ItemController@index')->name('empleabilidad_curriculo_index');

        // Reporte PDF
        Route::get('item/ficha_pdf', 'ItemController@fichaPdf')->name('empleabilidad_curriculo_ficha_pdf');

        // Breve Descripción
        Route::resource('descripcion', 'DescripcionController', ['except' => ['show', 'create']]);
        Route::get('descripcion', 'DescripcionController@index')->name('empleabilidad_curriculo_descripcion');

        // Formación
        Route::resource('formacion', 'FormacionController', ['except' => ['show', 'create']]);
        Route::get('formacion/{param1}/{param2}', 'FormacionController@index')->name('empleabilidad_curriculo_formacion');
        Route::get('formacion_datatable/{param1}', 'FormacionController@dataTable')->name('empleabilidad_curriculo_formacion_datatable');
        Route::get('formacion/{param1}/{param2}/{param3}/edit', 'FormacionController@edit');

        //Complementaria
        Route::resource('complementaria', 'ComplementariaController', ['except' => ['show', 'create']]);
        Route::get('complementaria/{param1}/{param2}', 'ComplementariaController@index')->name('empleabilidad_curriculo_complementaria');
        Route::get('complementaria_datatable/{param1}', 'ComplementariaController@dataTable')->name('empleabilidad_curriculo_complementaria_datatable');
        Route::get('complementaria/{param1}/{param2}/{param3}/edit', 'ComplementariaController@edit');

        //Experiencia
        Route::resource('experiencia', 'ExperienciaController', ['except' => ['show', 'create']]);
        Route::get('experiencia/{param1}/{param2}', 'ExperienciaController@index')->name('empleabilidad_curriculo_experiencia');
        Route::get('experiencia_datatable/{param1}', 'ExperienciaController@dataTable')->name('empleabilidad_curriculo_experiencia_datatable');
        Route::get('experiencia/{param1}/{param2}/{param3}/edit', 'ExperienciaController@edit');

        //Idioma
        Route::resource('idioma', 'IdiomaController', ['except' => ['show', 'create']]);
        Route::get('idioma/{param1}/{param2}', 'IdiomaController@index')->name('empleabilidad_curriculo_idioma');
        Route::get('idioma_datatable/{param1}', 'IdiomaController@dataTable')->name('empleabilidad_curriculo_idioma_datatable');
        Route::get('idioma/{param1}/{param2}/{param3}/edit', 'IdiomaController@edit');

        //Competencia
        Route::resource('competencia', 'CompetenciaController', ['except' => ['show', 'create']]);
        Route::get('competencia/{param1}/{param2}', 'CompetenciaController@index')->name('empleabilidad_curriculo_competencia');
        Route::get('competencia_datatable/{param1}', 'CompetenciaController@dataTable')->name('empleabilidad_curriculo_competencia_datatable');
        Route::get('competencia/{param1}/{param2}/{param3}/edit', 'CompetenciaController@edit');

        //Referencia
        Route::resource('referencia', 'ReferenciaController', ['except' => ['show', 'create']]);
        Route::get('referencia/{param1}/{param2}', 'ReferenciaController@index')->name('empleabilidad_curriculo_referencia');
        Route::get('referencia_datatable/{param1}', 'ReferenciaController@dataTable')->name('empleabilidad_curriculo_referencia_datatable');
        Route::get('referencia/{param1}/{param2}/{param3}/edit', 'ReferenciaController@edit');
    });

    Route::namespace('Empleabilidad\Carta')->prefix('empleabilidad/carta')->name('empleabilidad_carta.')->middleware('role:empleabilidad')->group(function(){
        // Item
        Route::get('item', 'ItemController@index')->name('empleabilidad_carta_index');

        // Reporte PDF
        Route::get('item/ficha_pdf', 'ItemController@fichaPdf')->name('empleabilidad_carta_ficha_pdf');

        // General
        Route::resource('general', 'GeneralController', ['except' => ['show', 'create']]);
        Route::get('general', 'GeneralController@index')->name('empleabilidad_carta_general');
    });

    Route::namespace('Empleabilidad\Evaluacion')->prefix('empleabilidad/evaluacion')->name('empleabilidad_evaluacion.')->middleware('role:empleabilidad')->group(function(){
        // Item
        Route::get('item', 'ItemController@index')->name('empleabilidad_evaluacion_index');

        // Reporte PDF
        Route::get('item/ficha_pdf/{param1}', 'ItemController@fichaPdf')->name('empleabilidad_evaluacion_ficha_pdf');

        // Tab
        Route::get('tab/{param1}/{param2}', 'ItemController@tab')->name('empleabilidad_evaluacion_tab');

        // Laboral
        Route::resource('laboral', 'LaboralController', ['except' => ['show', 'create']]);
        Route::get('laboral/{param1}/{param2}', 'LaboralController@index')->name('empleabilidad_evaluacion_laboral');

        // Comunicación
        Route::resource('comunicacion', 'ComunicacionController', ['except' => ['show', 'create']]);
        Route::get('comunicacion/{param1}/{param2}', 'ComunicacionController@index')->name('empleabilidad_evaluacion_comunicacion');

    });

    Route::namespace('Emprendedurismo\problematica')->prefix('emprendedurismo/problematica')->name('emprendedurismo_problematica.')->middleware('role:emprendedurismo')->group(function(){
        // Item
        Route::get('item', 'ItemController@index')->name('emprendedurismo_problematica_index');

        //Borrar
        Route::delete('item/{param1}', 'ItemController@destroy');

        // Reporte PDF
        Route::get('item/ficha_pdf', 'ItemController@fichaPdf')->name('emprendedurismo_problematica_ficha_pdf');

        // Tab
        Route::get('tab/{param1}/{param2}', 'ItemController@tab')->name('emprendedurismo_problematica_tab');

        // General
        Route::resource('general', 'GeneralController', ['except' => ['show', 'create']]);
        Route::get('general/{param1}/{param2}', 'GeneralController@index')->name('emprendedurismo_problematica_general');

    });

    Route::namespace('Emprendedurismo\cliente')->prefix('emprendedurismo/cliente')->name('emprendedurismo_cliente.')->middleware('role:emprendedurismo')->group(function(){
        // Item
        Route::get('item', 'ItemController@index')->name('emprendedurismo_cliente_index');

        //Borrar
        Route::delete('item/{param1}', 'ItemController@destroy');

        // Reporte PDF
        Route::get('item/ficha_pdf', 'ItemController@fichaPdf')->name('emprendedurismo_cliente_ficha_pdf');

        // Tab
        Route::get('tab/{param1}/{param2}', 'ItemController@tab')->name('emprendedurismo_cliente_tab');

        // General
        Route::resource('general', 'GeneralController', ['except' => ['show', 'create']]);
        Route::get('general/{param1}/{param2}', 'GeneralController@index')->name('emprendedurismo_cliente_general');
    });

    Route::namespace('Emprendedurismo\negocio')->prefix('emprendedurismo/negocio')->name('emprendedurismo_negocio.')->middleware('role:emprendedurismo')->group(function(){
        // Item
        Route::get('item', 'ItemController@index')->name('emprendedurismo_negocio_index');

        //Borrar
        Route::delete('item/{param1}', 'ItemController@destroy');

        // Reporte PDF
        Route::get('item/ficha_pdf/{param1}', 'ItemController@fichaPdf')->name('emprendedurismo_negocio_ficha_pdf');

        // Tab
        Route::get('tab/{param1}/{param2}', 'ItemController@tab')->name('emprendedurismo_negocio_tab');

        // General
        Route::resource('general', 'GeneralController', ['except' => ['show', 'create']]);
        Route::get('general/{param1}/{param2}', 'GeneralController@index')->name('emprendedurismo_negocio_general');
    });

    Route::namespace('Emprendedurismo\canva')->prefix('emprendedurismo/canva')->name('emprendedurismo_canva.')->middleware('role:emprendedurismo')->group(function(){
        // Item
        Route::get('item', 'ItemController@index')->name('emprendedurismo_canva_index');

        //Borrar
        Route::delete('item/{param1}', 'ItemController@destroy');

        // Reporte PDF
        Route::get('item/ficha_pdf/{param1}', 'ItemController@fichaPdf')->name('emprendedurismo_canva_ficha_pdf');

        // Tab
        Route::get('tab/{param1}/{param2}', 'ItemController@tab')->name('emprendedurismo_canva_tab');

        // General
        Route::resource('general', 'GeneralController', ['except' => ['show', 'create']]);
        Route::get('general/{param1}/{param2}', 'GeneralController@index')->name('emprendedurismo_canva_general');
    });

    Route::namespace('Emprendedurismo\elevador')->prefix('emprendedurismo/elevador')->name('emprendedurismo_elevador.')->middleware('role:emprendedurismo')->group(function(){
        // Item
        Route::get('item', 'ItemController@index')->name('emprendedurismo_elevador_index');

        //Borrar
        Route::delete('item/{param1}', 'ItemController@destroy');

        // Reporte PDF
        Route::get('item/ficha_pdf/{param1}', 'ItemController@fichaPdf')->name('emprendedurismo_elevador_ficha_pdf');

        // Tab
        Route::get('tab/{param1}/{param2}', 'ItemController@tab')->name('emprendedurismo_elevador_tab');

        // General
        Route::resource('general', 'GeneralController', ['except' => ['show', 'create']]);
        Route::get('general/{param1}/{param2}', 'GeneralController@index')->name('emprendedurismo_elevador_general');
    });

    Route::namespace('Emprendedurismo\Evaluacion')->prefix('emprendedurismo/evaluacion')->name('emprendedurismo_evaluacion.')->middleware('role:emprendedurismo')->group(function(){
        // Item
        Route::get('item', 'ItemController@index')->name('emprendedurismo_evaluacion_index');

        // Reporte PDF
        Route::get('item/ficha_pdf/{param1}', 'ItemController@fichaPdf')->name('emprendedurismo_evaluacion_ficha_pdf');

        // Tab
        Route::get('tab/{param1}/{param2}', 'ItemController@tab')->name('emprendedurismo_evaluacion_tab');

        // Laboral
        Route::resource('general', 'GeneralController', ['except' => ['show', 'create']]);
        Route::get('general/{param1}/{param2}', 'GeneralController@index')->name('emprendedurismo_evaluacion_general');


    });


});

