<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/*********************************************************************************

 * Description:    Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 ********************************************************************************/
global $timedate;
 
$mod_strings = array (
    'LBL_GOOD_FILE' => 'Archivo de Importación Leído correctamente',
    'LBL_RECORD_CONTAIN_LOCK_FIELD' => 'El registro importado está participando en un proceso y no se puede editar porque algunos campos están bloqueados para la edición por el proceso.',
    'LBL_RECORDS_SKIPPED_DUE_TO_ERROR' => 'se ha encontrado una serie de errores. Vea la pestaña de errores para identificar las filas que no se han importado debido a errores',
    'LBL_UPDATE_SUCCESSFULLY' => 'registros actualizados correctamente',
    'LBL_SUCCESSFULLY_IMPORTED' => 'se han creado registros',
    'LBL_STEP_4_TITLE' => 'Paso {0}: Importar Archivo',
    'LBL_STEP_5_TITLE' => 'Paso {0}: Ver Resultados de Importación',
    'LBL_CUSTOM_ENCLOSURE' => 'Archivos Calificados Por:',
    'LBL_ERROR_UNABLE_TO_PUBLISH' => 'No ha sido posible realizar la publicación. Ya hay otro mapa de Importación publicado con el mismo nombre.',
    'LBL_ERROR_UNABLE_TO_UNPUBLISH' => 'No ha sido posible quitar la publicación de un mapa cuyo propietario es otro usuario. Usted posee un mapa de Importación con el mismo nombre.',
    'LBL_ERROR_IMPORTS_NOT_SET_UP' => 'No se ha configurado la Importación para este tipo de módulo',
    'LBL_IMPORT_TYPE' => '¿Qué le gustaría hacer con los datos importados?',
    'LBL_IDM_IMPORT_TYPE_CREATE' => 'Create New Records',
    'LBL_IDM_IMPORT_TYPE_UPDATE' => 'Update Existing Records',
    'LBL_IMPORT_BUTTON' => 'Crear solo nuevos registros',
    'LBL_UPDATE_BUTTON' => 'Crear registros nuevos y actualizar los existentes',
    'LBL_CREATE_BUTTON_HELP' => 'Utilice esta opción para crear nuevos registros. Nota: Las filas en el archivo de importación que contienen valores que coinciden con los ID de los registros existentes no se importarán si los valores se asignan al campo ID.',
    'LBL_UPDATE_BUTTON_HELP' => 'Utilice esta opción para actualizar los registros existentes. El dato en el archivo de importación se comparará con los registros existentes en base al ID del registro en el archivo de importación.',
    'LBL_NO_ID' => 'ID Requerido',
    'LBL_PRE_CHECK_SKIPPED' => 'Comprobaciones previas omitidas',
    'LBL_NOLOCALE_NEEDED' => 'No es necesaria ninguna conversión de la configuración local',
    'LBL_FIELD_NAME' => 'Nombre de Campo',
    'LBL_VALUE' => 'Valor',
    'LBL_ROW_NUMBER' => 'Número de Fila',
    'LBL_NONE' => 'Ninguna',
    'LBL_REQUIRED_VALUE' => 'Falta un valor requerido',
    'LBL_ERROR_SYNC_USERS' => 'Valor no válido para sincronizar con el cliente de email: ',
    'LBL_ID_EXISTS_ALREADY' => 'ID ya existente en esta tabla',
    'LBL_ASSIGNED_USER' => 'Si el usuario no existe, utilice el usuario actual',
    'LBL_SHOW_HIDDEN' => 'Mostrar campos que no son normalmente importables',
    'LBL_UPDATE_RECORDS' => 'Actualizar registros actuales en lugar de importarlos (No se puede Deshacer)',
    'LBL_TEST'=> 'Probar Importación (sin guardar ni cambiar datos)',
    'LBL_TRUNCATE_TABLE' => 'Vaciar la tabla antes de importación (borrar todos los registros)',
    'LBL_RELATED_ACCOUNTS' => 'No crear cuentas relacionadas',
    'LBL_NO_DATECHECK' => 'Saltar comprobación de fecha (más rápido pero fallará si la fecha es incorrecta)',
    'LBL_NO_WORKFLOW' => 'No ejecutar workflows durante la importación',
    'LBL_NO_EMAILS' => 'No enviar notificaciones de Email durante la importación',
    'LBL_NO_PRECHECK' => 'Modo de Formato Nativo',
    'LBL_STRICT_CHECKS' => 'Utilizar conjunto de reglas estricto (Comprobar también direcciones de Email y números de teléfono)',
    'LBL_ERROR_SELECTING_RECORD' => 'Error al seleccionar registro:',
    'LBL_ERROR_DELETING_RECORD' => 'Error al eliminar registro:',
    'LBL_NOT_SET_UP' => 'La importación no se ha configurado para este tipo de módulo',
    'LBL_ARE_YOU_SURE' => '¿Está seguro? Esto borrará todos los datos del módulo.',
    'LBL_NO_RECORD' => 'No existe ningún registro con este ID para actualizar',
    'LBL_NOT_SET_UP_FOR_IMPORTS' => 'La importación no se ha configurado para este tipo de módulo',
    'LBL_DEBUG_MODE' => 'Habilitar modo de eliminación de incidencias',
    'LBL_ERROR_INVALID_ID' => 'El ID proporcionado es demasiado largo para el campo (la longitud máxima es de 36 caracteres)',
    'LBL_ERROR_INVALID_PHONE' => 'Número de teléfono no válido',
    'LBL_ERROR_INVALID_NAME' => 'Cadena demasiado larga para el campo',
    'LBL_ERROR_INVALID_VARCHAR' => 'Cadena demasiado larga para el campo',
    'LBL_ERROR_INVALID_DATETIME' => 'Fecha y hora no válida',
    'LBL_ERROR_INVALID_DATETIMECOMBO' => 'Fecha y hora no válida',
    'LBL_ERROR_INVALID_INT' => 'Valor entero no válido',
    'LBL_ERROR_INVALID_NUM' => 'Valor numérico no válido',
    'LBL_ERROR_INVALID_TIME' => 'Hora no válida',
    'LBL_ERROR_INVALID_EMAIL'=>'Dirección de Email no válida',
    'LBL_ERROR_INVALID_BOOL'=>'Valor no válido (debería ser 1 o 0)',
    'LBL_ERROR_INVALID_DATE'=>'Cadena de fecha no válida',
    'LBL_ERROR_INVALID_USER'=>'Nombre o ID de usuario no válido',
    'LBL_ERROR_INVALID_TEAM' => 'Nombre o ID de equipo no válido',
    'LBL_ERROR_INVALID_ACCOUNT' => 'Nombre o ID de cuenta no válido',
    'LBL_ERROR_INVALID_RELATE' => 'Campo relacional no válido',
    'LBL_ERROR_INVALID_CURRENCY' => 'Valor de moneda no válido',
    'LBL_ERROR_INVALID_FLOAT' => 'Número en coma flotante no válido',
    'LBL_ERROR_NOT_IN_ENUM' => 'Valor no perteneciente a la lista desplegable. Los valores permitidos son:',
    'LBL_ERROR_ENUM_EMPTY' => 'Value not in dropDown list. dropDown list is empty',
    'LBL_NOT_MULTIENUM' => 'No es una Enumeración Múltiple (MultiEnum)',
    'LBL_IMPORT_MODULE_NO_TYPE' => 'La importación no se ha configurado para este tipo de módulo',
    'LBL_IMPORT_MODULE_NO_USERS' => 'AVISO: No ha definido usuarios en su sistema.    Si realiza la importación sin antes añadir usuarios, todos los registros pertenecerán al Administrador.',
    'LBL_IMPORT_MODULE_MAP_ERROR' => 'No ha sido posible realizar la publicación. Ya hay otro mapa de Importación publicado con el mismo nombre.',
    'LBL_IMPORT_MODULE_MAP_ERROR2' => 'No ha sido posible quitar la publicación de un mapa cuyo propietario es otro usuario. Usted posee un mapa de Importación con el mismo nombre.',
    'LBL_IMPORT_MODULE_NO_DIRECTORY' => 'El directorio',
    'LBL_IMPORT_MODULE_NO_DIRECTORY_END' => 'no existe o no tiene permisos de escritura en el mismo',
    'LBL_IMPORT_MODULE_ERROR_NO_UPLOAD' => 'El archivo no pudo cargarse correctamente. Puede que la opción "upload_max_filesize" de su archivo php.ini esté ajustada en un valor demasiado pequeño',
    'LBL_IMPORT_MODULE_ERROR_LARGE_FILE' => 'El archivo es demasiado grande. Máx:',
    'LBL_IMPORT_MODULE_ERROR_LARGE_FILE_END' => 'Bytes. Cambie $sugar_config[&#39;upload_maxsize&#39;] en config.php',
    'LBL_MODULE_NAME' => 'Importar',
    'LBL_MODULE_NAME_SINGULAR' => 'Importar',
    'LBL_TRY_AGAIN' => 'Pruebe de nuevo',
    'LBL_START_OVER' => 'Comenzar de nuevo',
    'LBL_ERROR' => 'Error:',
    'LBL_IMPORT_ERROR_MAX_REC_LIMIT_REACHED' => 'El archivo de importación contiene {0} filas. El número óptimo de filas es {1}. Más filas puede retardar el proceso de importación. Haga clic en Aceptar para continuar importando. Haga clic en Cancelar para revisar y volver a cargar el archivo de importación.',
    'ERR_IMPORT_SYSTEM_ADMININSTRATOR'  => 'No puede importar un usuario administrador del sistema',
    'ERR_REPORT_LOOP' => 'El sistema ha detectado dependencias cíclicas en la jerarquía de informadores. Un usuario no puede informarse a si mismo, ni puede ninguno de sus responsables informarle a él.',
    'ERR_MULTIPLE' => 'Se han definido múltiples columnas con el mismo nombre de campo.',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Faltan campos requeridos:',
    'ERR_MISSING_MAP_NAME' => 'Falta el nombre de asiganción personalizada',
    'ERR_USERS_IMPORT_DISABLED_TO_IDM_MODE' => 'La importación de usuarios está deshabilitada para el modo IDM.',
    'ERR_SELECT_FULL_NAME' => 'No puede seleccionar Nombre Completo cuando Nombre y Apellido están seleccionados.',
    'ERR_SELECT_FILE' => 'Seleccione el archivo que desea cargar.',
    'LBL_SELECT_FILE' => 'Seleccione un archivo:',
    'LBL_CUSTOM' => 'Personalizado',
    'LBL_CUSTOM_CSV' => 'Archivo personalizado delimitado por comas',
    'LBL_CSV' => 'un archivo en mi ordenador',
    'LBL_EXTERNAL_SOURCE' => 'una aplicación o servicio externo',
    'LBL_TAB' => 'Archivo delimitado por tabulaciones',
    'LBL_CUSTOM_DELIMITED' => 'Archivo con delimitador personalizado',
    'LBL_CUSTOM_DELIMITER' => 'Campos delimitados por:',
    'LBL_FILE_OPTIONS' => 'Opciones de archivo',
    'LBL_CUSTOM_TAB' => 'Archivo personalizado delimitado por tabuladores',
    'LBL_DONT_MAP' => '-- No asigne este campo --',
    'LBL_STEP_MODULE' => '¿En que módulo se desea importar los datos?',
    'LBL_STEP_1_TITLE' => 'Paso 1: Seleccione el Origen de Datos',
    'LBL_CONFIRM_TITLE' => 'Paso {0}: Confirmar las propiedades de importación del archivo',
    'LBL_CONFIRM_EXT_TITLE' => 'Paso {0}: Confirmar las propiedades de la fuente externa',
    'LBL_WHAT_IS' => 'Mis datos están en:',
    'LBL_MICROSOFT_OUTLOOK' => 'Microsoft Outlook',
    'LBL_MICROSOFT_OUTLOOK_HELP' => 'Las asignaciones personalizadas para Microsoft Outlook se basan en el archivo de importación delimitado por comas (.csv). Si el archivo de importación está delimitado por tabuladores, las asignaciones no se aplicarán como se esperaba.',
    'LBL_ACT' => 'Act!',
    'LBL_SALESFORCE' => 'Salesforce.com',
    'LBL_MY_SAVED' => 'Para utilizar la configuración de importación guardada, seleccione de las siguientes:',
    'LBL_PUBLISH' => 'Publicar',
    'LBL_DELETE' => 'Eliminar',
    'LBL_PUBLISHED_SOURCES' => 'Para utilizar la configuración de importación predefinida, seleccione de las siguientes:',
    'LBL_UNPUBLISH' => 'Quitar Publicación',
    'LBL_NEXT' => 'Siguiente >',
    'LBL_BACK' => '< Anterior',
    'LBL_STEP_2_TITLE' => 'Paso {0}: Cargar Archivo de Importación',
    'LBL_HAS_HEADER' => 'Fila de cabecera:',
    'LBL_NUM_1' => '1.',
    'LBL_NUM_2' => '2.',
    'LBL_NUM_3' => '3.',
    'LBL_NUM_4' => '4.',
    'LBL_NUM_5' => '5.',
    'LBL_NUM_6' => '6.',
    'LBL_NUM_7' => '7.',
    'LBL_NUM_8' => '8.',
    'LBL_NUM_9' => '9.',
    'LBL_NUM_10' => '10.',
    'LBL_NUM_11' => '11.',
    'LBL_NUM_12' => '12.',
    'LBL_NOTES' => 'Notas:',
    'LBL_NOW_CHOOSE' => 'Ahora elija el archivo a importar:',
    'LBL_IMPORT_OUTLOOK_TITLE' => 'Microsoft Outlook 98 y 2000 pueden exportar datos en el formato <b>Valores Separados por Coma</b>, que se puede utilizar para importar datos en el sistema. Para exportar sus datos desde Outlook, siga los pasos a continuación:',
    'LBL_OUTLOOK_NUM_1' => 'Inicie <b>Outlook</b>',
    'LBL_OUTLOOK_NUM_2' => 'Seleccione el menú <b>Archivo</b>, y entonces la opción de menú <b>Importar y Exportar ...</b>',
    'LBL_OUTLOOK_NUM_3' => 'Seleccione <b>Exportar a un archivo</b> y haga clic en Siguiente',
    'LBL_OUTLOOK_NUM_4' => 'Seleccione <b>Valores Separados por Coma (Windows)</b> y haga clic en <b>Siguiente</b>.<br>  Nota: Es posible que se le solicite la instalación del componente de exportación',
    'LBL_OUTLOOK_NUM_5' => 'Seleccione la carpeta <b>Contactos</b> y haga clic en <b>Siguiente</b>. Puede seleccionar distintas carpetas de contactos si sus contactos están almacenados en distintas carpetas',
    'LBL_OUTLOOK_NUM_6' => 'Escoja un nombre de archivo y haga clic en <b>Siguiente</b>',
    'LBL_OUTLOOK_NUM_7' => 'Haga clic en <b>Finalizar</b>',
    'LBL_IMPORT_SF_TITLE' => 'Salesforce.com puede exportar datos en el formato <b>Valores Separados por Coma</b>, que se puede utilizar para importar datos en el sistema. Para exportar sus datos desde Salesforce.com, siga los pasos a continuación:',
    'LBL_SF_NUM_1' => 'Abra su navegador, vaya a http://www.salesforce.com, e inicie su sesión con su dirección de email y contraseña',
    'LBL_SF_NUM_2' => 'Haga clic en la pestaña <b>Informes</b> del menú superior',
    'LBL_SF_NUM_3' => '<b>Para exportar cuentas:</b> Haga clic en el enlace <b>Cuentas Activas</b><br><b>Para exportar contactos:</b> Haga clic en el enlace <b>Lista de correo</b>',
    'LBL_SF_NUM_4' => 'En <b>Paso 1: Seleccione su tipo de informe</b>, seleccione <b>Informe Tabular</b> y haga clic en <b>Siguiente</b>',
    'LBL_SF_NUM_5' => 'En <b>Paso 2: Seleccione las columnas del informe</b>, seleccione las columnas que desee exportar y haga clic en <b>Siguiente</b>',
    'LBL_SF_NUM_6' => 'En <b>Paso 3: Seleccione la información a resumir</b>, simplemente haga clic en <b>Siguiente</b>',
    'LBL_SF_NUM_7' => 'En <b>Paso 4: Ordene las columnas del informe</b>, simplemente haga clic en <b>Siguiente</b>',
    'LBL_SF_NUM_8' => 'En <b>Paso 5: Seleccione los criterios del informe</b>, con <b>Fecha de Inicio</b>, seleccione una fecha suficientemente pasada como para incluir todas sus cuentas. También puede exportar un subconjunto de cuentas utilizando criterios más avanzados. Cuando haya terminado, haga clic en <b>Ejecutar Informe</b>',
    'LBL_SF_NUM_9' => 'Se generará un informe, y la página mostrará <b>Estado de la Generación del Informe: Completado.</b> Ahora haga clic en <b>Exportar a Excel</b>',
    'LBL_SF_NUM_10' => 'En <b>Exportar Informe:</b>, para el <b>Formato del Fichero de Exportación:</b>, seleccione <b>Delimitado por Comas .csv</b>. Haga clic en <b>Exportar</b>.',
    'LBL_SF_NUM_11' => 'Aparecerá un cuadro de diálogo para que guarde el archivo exportado en su ordenador.',
    'LBL_IMPORT_ACT_TITLE' => 'Act! puede exportar datos en el formato <b>Valores Separados por Comas</b>, que puede ser utilizado para importar datos en el sistema. Para exportar datos desde Act!, siga los pasos a continuación:',
    'LBL_ACT_NUM_1' => 'Abra <b>ACT!</b>',
    'LBL_ACT_NUM_2' => 'Seleccione el menú <b>Archivo</b>, la opción de menú <b>Intercambio de menús</b>, y a continuación la opción de menú <b>Exportar...</b>',
    'LBL_ACT_NUM_3' => 'Seleccione el tipo de archivo <b>Texto-Delimitado</b>',
    'LBL_ACT_NUM_4' => 'Seleccione un nombre de archivo y una ubicación para los datos exportados y haga clic en <b>Siguiente</b>',
    'LBL_ACT_NUM_5' => 'Seleccione <b>Únicamente los registros de Contactos</b>',
    'LBL_ACT_NUM_6' => 'Haga clic en el botón <b>Opciones...</b>',
    'LBL_ACT_NUM_7' => 'Seleccione <b>Coma</b> como carácter separador de campos',
    'LBL_ACT_NUM_8' => 'Marque la casilla <b>Sí, exportar los nombres de los campos</b> y haga clic en <b>Aceptar</b>',
    'LBL_ACT_NUM_9' => 'Haga clic en <b>Siguiente</b>',
    'LBL_ACT_NUM_10' => 'Seleccione <b>Todos los registros</b> y haga clic en <b>Finalizar</b>',
    'LBL_IMPORT_CUSTOM_TITLE' => 'Muchas aplicaciones le permiten exportar datos en el formato <b>Archivo de texto separado por comas (.csv)</b>, siguiendo estos pasos genéricos:',
    'LBL_CUSTOM_NUM_1' => 'Abra la aplicación y abra el archivo de datos',
    'LBL_CUSTOM_NUM_2' => 'Seleccione la opción de menú <b>Guardar como...</b> o <b>Exportar...</b>',
    'LBL_CUSTOM_NUM_3' => 'Guarde el archivo en el formato <b>CSV</b> o <b>Valores Separados por Comas</b>',
    'LBL_IMPORT_TAB_TITLE' => 'Muchas aplicaciones le permiten exportar datos en el formato <b>Archivo de texto separado por tabuladores (.tsv o .tab)</b>. Habitualmente, la mayoría de aplicaciones siguen estos pasos genéricos:',
    'LBL_TAB_NUM_1' => 'Abra la aplicación y abra el archivo de datos',
    'LBL_TAB_NUM_2' => 'Seleccione la opción de menú <b>Guardar como...</b> o <b>Exportar...</b>',
    'LBL_TAB_NUM_3' => 'Guarde el archivo en el formato <b>TSV</b> o <b>Valores Separados por Tabuladores</b>',
    'LBL_STEP_3_TITLE' => 'Paso {0}: Confirme las asignaciones de campos',
    'LBL_STEP_DUP_TITLE' => 'Paso {0}: Compruebe si hay posibles duplicados',
    'LBL_SELECT_FIELDS_TO_MAP' => 'En la siguente lista, seleccione los campos del archivo de importación que se deban importar en cada campo del sistema. Cuando termine, haga clic en <b>Siguiente</b>:',
    'LBL_DATABASE_FIELD' => 'Campo de Módulo',
    'LBL_HEADER_ROW' => 'Fila de Cabecera',
    'LBL_HEADER_ROW_OPTION_HELP' => 'Seleccione si la primera fila del archivo de importación es una fila de encabezado que contiene las etiquetas de campo.',
    'LBL_ROW' => 'Fila',
    'LBL_SAVE_AS_CUSTOM' => 'Guardar como Asignación Personalizada:',
    'LBL_SAVE_AS_CUSTOM_NAME' => 'Nombre de Asignación Personalizada:',
    'LBL_CONTACTS_NOTE_1' => 'Debe asignar el Apellido o el Nombre Completo.',
    'LBL_CONTACTS_NOTE_2' => 'Si asocia el Nombre Completo, el Nombre y Apellido se ignorarán.',
    'LBL_CONTACTS_NOTE_3' => 'Si asigna el Nombre Completo, los datos en Nombre Completo se dividirán en Nombre y Apellido cuando se introduzcan en la base de datos.',
    'LBL_CONTACTS_NOTE_4' => 'Los campos que contienen Calle 2 de la Dirección y Calle 3 de la Dirección se concatenarán en el campo Dirección Principal cuando se introduzcan en la base de datos.',
    'LBL_ACCOUNTS_NOTE_1' => 'Los campos que contienen Calle 2 de la Dirección y Calle 3 de la Dirección se concatenarán en el campo Dirección Principal cuando se introduzcan en la base de datos.',
    'LBL_REQUIRED_NOTE' => 'Campos Requeridos:',
    'LBL_IMPORT_NOW' => 'Importar Ahora',
    'LBL_' => '',
    'LBL_CANNOT_OPEN' => 'No puede abrirse el archivo de importación para lectura',
    'LBL_NOT_SAME_NUMBER' => 'No hay el mismo número de campos en cada línea de su archivo',
    'LBL_NO_LINES' => 'No se han detectado líneas en su archivo de importación. Asegúrese de que no hay líneas vacías en el archivo y vuela a intentarlo.',
    'LBL_FILE_ALREADY_BEEN_OR' => 'El archivo de importación no existe o ya se ha procesado',
    'LBL_SUCCESS' => 'Éxito:',
	'LBL_FAILURE' => 'Fallo en la importación:',
    'LBL_SUCCESSFULLY' => 'Importado correctamente',
    'LBL_LAST_IMPORT_UNDONE' => 'Su última importación se ha desecho.',
    'LBL_NO_IMPORT_TO_UNDO' => 'No hay importación que deshacer.',
    'LBL_FAIL' => 'Fallo:',
    'LBL_RECORDS_SKIPPED' => 'Registros omitidos por falta de alguno de los campos requeridos',
    'LBL_IDS_EXISTED_OR_LONGER' => 'Registros omitidos porque sus id existían o tenían más de 36 caracteres',
    'LBL_RESULTS' => 'Resultados',
    'LBL_CREATED_TAB' => 'Registros creados',
    'LBL_DUPLICATE_TAB' => 'Duplicados',
    'LBL_ERROR_TAB' => 'Errores',
    'LBL_IMPORT_MORE' => 'Importar de nuevo',
    'LBL_FINISHED' => 'Finalizado',
    'LBL_UNDO_LAST_IMPORT' => 'Deshacer Importación',
    'LBL_LAST_IMPORTED'=>'Creado',
    'ERR_MULTIPLE_PARENTS' => 'Sólo puede haber definido un ID principal',
    'LBL_DUPLICATES' => 'Se han Encontrado Duplicados',
    'LNK_DUPLICATE_LIST' => 'Descargar Lista de Duplicados',
    'LNK_ERROR_LIST' => 'Descargar Lista de Errores',
    'LNK_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Descargar lista de filas que no se han podido importar',
    'LBL_UNIQUE_INDEX' => 'Elija el Índice para comparar duplicados',
    'LBL_VERIFY_DUPS' => 'Para verificar los datos coincidentes de los registros existentes, seleccione los campos que se deben comprobar.',
    'LBL_INDEX_USED' => 'Campos que se deben comprobar:',
    'LBL_INDEX_NOT_USED' => 'Índices disponibles:',
    'LBL_IMPORT_MODULE_ERROR_NO_MOVE' => 'El archivo no ha sido subido correctamente.  Compruebe los permisos de archivos en el directorio de caché de su instalación de Sugar.',
    'LBL_IMPORT_FIELDDEF_ID' => 'Número de ID único',
    'LBL_IMPORT_FIELDDEF_RELATE' => 'Nombre o ID',
    'LBL_IMPORT_FIELDDEF_PHONE' => 'Número de Teléfono',
    'LBL_IMPORT_FIELDDEF_TEAM_LIST' => 'ID o Nombre de Equipo',
    'LBL_IMPORT_FIELDDEF_NAME' => 'Cualquier Texto',
    'LBL_IMPORT_FIELDDEF_VARCHAR' => 'Cualquier Texto',
    'LBL_IMPORT_FIELDDEF_TEXT' => 'Cualquier Texto',
    'LBL_IMPORT_FIELDDEF_TIME' => 'Hora',
    'LBL_IMPORT_FIELDDEF_DATE' => 'Fecha',
    'LBL_IMPORT_FIELDDEF_DATETIME' => 'Fecha y Hora',
    'LBL_IMPORT_FIELDDEF_ASSIGNED_USER_NAME' => 'Nombre de Usuario o ID',
    'LBL_IMPORT_FIELDDEF_BOOL' => '&#39;0&#39; o &#39;1&#39;',
    'LBL_IMPORT_FIELDDEF_ENUM' => 'Lista',
    'LBL_IMPORT_FIELDDEF_EMAIL' => 'Dirección de EMail',
    'LBL_IMPORT_FIELDDEF_INT' => 'Numérico (Sin Decimales)',
    'LBL_IMPORT_FIELDDEF_DOUBLE' => 'Numérico (Sin Decimales)',
    'LBL_IMPORT_FIELDDEF_NUM' => 'Numérico (Sin Decimales)',
    'LBL_IMPORT_FIELDDEF_CURRENCY' => 'Numérico (Decimales Permitidos)',
    'LBL_IMPORT_FIELDDEF_FLOAT' => 'Numérico (Decimales Permitidos)',
    'LBL_DATE_FORMAT' => 'Formato de Fecha:',
    'LBL_TIME_FORMAT' => 'Formato de Hora:',
    'LBL_TIMEZONE' => 'Zona Horaria:',
    'LBL_ADD_ROW' => 'Agregar Campo',
    'LBL_REMOVE_ROW' => 'Quitar Campo',
    'LBL_DEFAULT_VALUE' => 'Valor por Defecto',
    'LBL_SHOW_ADVANCED_OPTIONS' => 'Ver Propiedades del Archivo de Importación',
    'LBL_HIDE_ADVANCED_OPTIONS' => 'Ocultar Propiedades de Archivo de Importación',
    'LBL_SHOW_NOTES' => 'Ver notas',
    'LBL_HIDE_NOTES' => 'Ocultar notas',
    'LBL_SHOW_PREVIEW_COLUMNS' => 'Mostrar Columnas de Vista Preliminar',
    'LBL_HIDE_PREVIEW_COLUMNS' => 'Ocultar Columnas de Vista Preliminar',
    'LBL_SAVE_MAPPING_AS' => 'Para guardar la configuración de importación, proporcione un nombre para la configuración guardada:',
    'LBL_OPTION_ENCLOSURE_QUOTE' => 'Comillas Simples (&#39;)',
    'LBL_OPTION_ENCLOSURE_DOUBLEQUOTE' => 'Comillas Dobles (")',
    'LBL_OPTION_ENCLOSURE_NONE' => 'Ninguna',
    'LBL_OPTION_ENCLOSURE_OTHER' => 'Otro:',
    'LBL_IMPORT_COMPLETE' => 'Importación Completada',
    'LBL_IMPORT_COMPLETED' => 'Importación completada',
    'LBL_IMPORT_ERROR' => 'Han Ocurrido Errores de Importación',
    'LBL_IMPORT_RECORDS' => 'Importando Registros',
    'LBL_IMPORT_RECORDS_OF' => 'de',
    'LBL_IMPORT_RECORDS_TO' => 'a',
    'LBL_CURRENCY' => 'Moneda',
    'LBL_SYSTEM_SIG_DIGITS' => 'Dígitos significativos del sistema',
    'LBL_NUMBER_GROUPING_SEP' => 'Separador de miles:',
    'LBL_DECIMAL_SEP' => 'Símbolo Decimal:',
    'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'Nombre de Formato de Visualización',
    'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Ejemplo',
    'LBL_LOCALE_NAME_FORMAT_DESC' => '<i>"s" Saludo, "f" Nombre, "l" Apellido</i>',
    'LBL_CHARSET' => 'Codificación de Archivo:',
    'LBL_MY_SAVED_HELP' => 'Utilice esta opción para aplicar los ajustes predefinidos de importación, incluyendo las propiedades de importación, las asignaciones, y la configuración de control de duplicado, a la importación.<br><br>Haga clic en <b>Eliminar</b> para eliminar una asignación de todos los usuarios.',
    'LBL_MY_SAVED_ADMIN_HELP' => 'Utilice esta opción para aplicar los ajustes predefinidos de importación, incluyendo las propiedades de importación, las asignaciones, y la configuración de control de duplicado, a la importación. <br><br>Haga clic en <b>Publicar</b> para hacer disponible la asignación al resto de usuarios. <br> Haga clic en <b>Eliminar publicación</b> para desactivar la asignación disponible para otros usuarios.<br>Haga clic en <b>Eliminar </b> para eliminar la asignación para todos los usuarios.',
    'LBL_MY_PUBLISHED_HELP' => 'Utilice esta opción para aplicar los ajustes predefinidos de importación, incluyendo las propiedades de importación, las asignaciones, y la configuración de control de duplicado, a la importación.',
    'LBL_ENCLOSURE_HELP' => '<p>El <b>carácter calificador</b> se utiliza para encerrar el contenido de un campo, incluyendo cualquier carácter que se utilice como delimitador.<br><br>Ejemplo: Si el carácter delimitador es una coma (,) y el calificador es una comilla doble ("),<br><b>"Cupertino, California"</b> se importará en un sólo campo de la aplicación y aparecerá como <b>Cupertino, California</b>.<br>Si no se establece ningún carácter calificador, o éste es un carácter distinto,<br><b>"Cupertino, California"</b> será importado en dos campos adyacentes como <b>"Cupertino</b> y <b>California"</b>.<br><br>Nota: El archivo de importación puede no contener caracteres calificadores.<br>El carácter calificador por defecto para archivos delimitados por coma o tabulador creados en Excel es la comilla doble.</p>',
    'LBL_DELIMITER_COMMA_HELP' => 'Utilice esta opción para seleccionar y cargar un archivo de hoja de cálculo que contenga los datos que desee importar. Ejemplos: archivo .csv delimitado por comas o archivo de exportación de Microsoft Outlook.',
    'LBL_DELIMITER_TAB_HELP' => 'Seleccione esta opción si el carácter que separa los campos en el archivo de importación es un  <b>TAB</b>, y la extensión del archivo es .txt.',
    'LBL_DELIMITER_CUSTOM_HELP' => 'Seleccione esta opción si el carácter que separa los campos en el archivo de importación no es ni una coma ni un TAB, y escriba el carácter en el campo adyacente.',
    'LBL_DATABASE_FIELD_HELP' => 'Esta columna muestra todos los campos del módulo. Seleccione un campo para signar a los datos en las filas del archivo de importación.',
    'LBL_HEADER_ROW_HELP' => 'Esta columna muestra las etiquetas en la fila correspondiente a la cabecera del archivo de importación.',
    'LBL_DEFAULT_VALUE_HELP' => 'Indique un valor a usar para el campo en el registro creado o actualizado si el campo en el archivo de importación no contiene datos.',
    'LBL_ROW_HELP' => 'Esta columna muestra los datos en la primera columna que no corresponde a la cabecera del archivo de importación. Si las etiquetas de la fila de la cabecera aparecen en esta columna, haga clic en Volver para especificar la fila de la cabecera en las propiedades del archivo de importación.',
    'LBL_SAVE_MAPPING_HELP' => 'Introduzca un nombre para guardar la configuración de importación, incluidas las asignaciones e indexaciones de campos utilizadas para el control de duplicados. La configuración de importación guardada se puede utilizar para importaciones futuras.',
    'LBL_IMPORT_FILE_SETTINGS_HELP' => 'Durante la carga del archivo de importación, es posible que algunas propiedades del archivo se hayan detectado automáticamente. Vea y administre estas propiedades según sea <br>necesario. Nota: Esta configuración no pertenece a esta importación <br>y no sobreescribirá la configuración general de usuario.',
    'LBL_VERIFY_DUPLCATES_HELP' => 'Encuentre registros existentes en el sistema que se podrían considerar duplicados de los registros que se van a importar realizando un control de duplicados para datos coincidentes. Los campos que se arrastren hasta la columna "Comprobar datos" se utilizarán para el control de duplicados. Las filas que contengan datos duplicados se enumerarán en la siguiente página y podrá seleccionar las filas que se importarán',
    'LBL_IMPORT_STARTED' => 'Importación Iniciada:',
    'LBL_IMPORT_FILE_SETTINGS' => 'Configuración de Archivos para la Importación',
    'LBL_IDM_RECORD_CANNOT_BE_CREATED' => 'No se ha añadido el registro. Los nuevos usuarios se deben añadir en Ajustes de SugarCloud',
    'LBL_RECORD_CANNOT_BE_UPDATED' => 'El registro no ha podido ser actualizado debido un problema de permisos',
    'LBL_DELETE_MAP_CONFIRMATION' => '¿Está seguro de que desea eliminar este conjunto guardado de la configuración de importación?',
    'LBL_THIRD_PARTY_CSV_SOURCES' => 'Si los datos de importación de archivos se exportan desde una de las siguientes fuentes, seleccione cual de ellas.',
    'LBL_THIRD_PARTY_CSV_SOURCES_HELP' => 'Seleccione la fuente para aplicar automáticamente las asignaciones personalizadas con el fin de simplificar el proceso de asignación (paso siguiente).',
    'LBL_EXTERNAL_SOURCE_HELP' => 'Utilice esta opción para importar datos directamente desde una aplicación externa o de servicios, como Gmail.',
    'LBL_EXAMPLE_FILE' => 'Descargar plantilla de importación de archivos',
    'LBL_CONFIRM_IMPORT' => 'Usted ha seleccionado actualizar los registros durante el proceso de importación. Las actualizaciones realizadas en los registros existentes no se pueden deshacer. Sin embargo, los registros creados durante el proceso de importación se pueden deshacer (eliminando), si lo desea. Haga clic en Cancelar para seleccionar crear nuevos registros sólo, o haga clic en Aceptar para continuar.',
    'LBL_IDM_CONFIRM_IMPORT' => 'Updates made to existing records during the import process cannot be undone. Click Cancel to create new records, or click OK to continue.',
    'LBL_CONFIRM_MAP_OVERRIDE' => 'Advertencia: Usted ya ha seleccionado una asignación personalizada para esta importación, ¿quiere continuar?',
    'LBL_EXTERNAL_FIELD' => 'Campo externo',
    'LBL_SAMPLE_URL_HELP' => 'Descargue el ejemplo de archivo de importación el cual contiene una fila de cabecera con los campos del módulo. El archivo puede ser utilizado como una plantilla para crear el archivo de importación que contiene los datos que desea importar.',
    'LBL_AUTO_DETECT_ERROR' => 'El delimitador de campo y de clasificación en el archivo de importación no se ha podido detectar. Verifique la configuración de las propiedades del archivo de importación.',
    'LBL_MIME_TYPE_ERROR_1' => 'El archivo seleccionado no parece contener una lista delimitada. Compruebe el tipo de archivo. Recomendamos archivos delimitados por comas (.csv).',
    'LBL_MIME_TYPE_ERROR_2' => 'Para proceder con la importación del archivo seleccionado, haga clic en Aceptar. Para cargar un nuevo archivo, haga clic en Volver a intentar',
    'LBL_FIELD_DELIMETED_HELP' => 'El delimitador de campo especifica el carácter utilizado para separar las columnas de campos.',
    'LBL_FILE_UPLOAD_WIDGET_HELP' => 'Seleccione un archivo que contenga datos separados por un delimitador, ya sea por comas o por tabulaciones. Se recomiendan los archivos de tipo .csv.',
    'LBL_EXTERNAL_ERROR_NO_SOURCE' => 'No se puede recuperar el adaptador de la fuente, inténtelo más tarde.',
    'LBL_EXTERNAL_ERROR_FEED_CORRUPTED' => 'No se puede recuperar datos externos, inténtelo más tarde.',
    'LBL_ERROR_IMPORT_CACHE_NOT_WRITABLE' => 'El directorio caché de importaciones no tiene permisos de escritura',
    'LBL_ADD_FIELD_HELP' => 'Utilice esta opción para agregar un valor a un campo en todos los registros creados y/o actualizados. Seleccione el campo y luego escriba o seleccione un valor para ese campo en la columna valor por defecto.',
    'LBL_MISSING_HEADER_ROW' => 'No se ha encontrado fila de cabecera',
    'LBL_CANCEL' => 'Cancelar',
    'LBL_SELECT_DS_INSTRUCTION' => '¿Listo para empezar a importar? Seleccione el origen de datos que desea importar.',
    'LBL_SELECT_UPLOAD_INSTRUCTION' => 'Seleccione un archivo de su ordenador que contenga los datos que desea importar, o descargue la plantilla para disponer de un ejemplo para la creación del archivo de importación.',
    'LBL_SELECT_IDM_CREATE_INSTRUCTION' => 'Para crear nuevos registros, acceda a <a href="{0}" target="_blank">Ajustes de SugarCloud</a>.',
    'LBL_SELECT_IDM_UPLOAD_INSTRUCTION' => 'Para actualizar registros existentes, seleccione un archivo de su ordenador que contenga los datos que desea importar.',
    'LBL_SELECT_PROPERTY_INSTRUCTION' => 'Así es como las primeras filas de los archivos de importación aparecen con las propiedades detectadas. Si se ha detectado la fila de cabecera, se muestra en la fila superior de la tabla. Ver las propiedades del archivo de importación para realizar cambios en las propiedades detectadas y para configurar propiedades adicionales. Al actualizar los valores se actualizarán los datos que aparecen en la tabla.',
    'LBL_SELECT_MAPPING_INSTRUCTION' => 'La siguiente tabla contiene todos los campos del módulo que se puede relacionar a los datos en el archivo de importación. Si el archivo contiene una fila de cabecera, las columnas en el archivo se han asignado a los campos de importación. Si los datos de importación contienen fechas, el año debe tener el formato AAAA. Compruebe las asignaciones para asegurarse de que son lo que usted espera, y hacer los cambios, según sea necesario. Para ayudarte a comprobar las asignaciones, la fila 1 muestra los datos en el archivo. Asegúrese de asignar todos los campos obligatorios (señalados con un asterisco).',
    'LBL_IDM_SELECT_MAPPING_INSTRUCTION' => 'The table below contains all of the editable fields in the module that can be mapped to the data in the import file. If the file contains a header row, the columns in the file have been mapped to matching fields. If the import data contain dates, the year must be in YYYY format. Check the mappings to make sure that they are what you expect, and make changes, as necessary. To help you check the mappings, Row 1 displays the data in the file. Be sure to map to all of the required fields (noted by an asterisk).',
    'LBL_IDM_SELECT_MAPPING_FIELDS_INSTRUCTION' => '<a href="{0}" target="_blank">Fields</a> that are only editable in SugarIdentity via the SugarCloud Settings console will not be available to map.',
    'LBL_SELECT_DUPLICATE_INSTRUCTION' => 'Para evitar la creación de registros duplicados, seleccionar cuál de los campos asignados que le gustaría utilizar para realizar una comprobación de duplicados mientras los datos se está importando. Los valores dentro de los registros existentes en los campos seleccionados se cotejará con los datos en el archivo de importación. Si en los datos se encuentra coincidencia, las filas en el archivo de importación se mostrarán junto con los resultados de importación (página siguiente). A continuación podrá seleccionar cuál de estas filas para seguir importando.',
    'LBL_EXT_SOURCE_SIGN_IN' => 'Iniciar sesión',
    'LBL_EXT_SOURCE_SIGN_OUT' => 'Cerrar sesión',
    'LBL_DUP_HELP' => 'Aquí están las filas del archivo de importación que no han sido importados, ya que contienen datos que coinciden con los valores de los registros existentes sobre la base de la comprobación de duplicados. Los datos que se ponen de relieve son los implicados. Para volver a importar estas filas, descargue la lista, realice los cambios y haga clic en <b>Importar de nuevo</b>.',
    'LBL_DESELECT' => 'anular la selección',
    'LBL_SUMMARY' => 'Resumen',
    'LBL_OK' => 'Aceptar',
    'LBL_ERROR_HELP' => 'Aquí están las filas del archivo de importación que no fueron importados debido a los errores. Para volver a importar estas filas, descargue la lista, realice los cambios y haga clic en <b>Importar de nuevo</b>',
    'LBL_EXTERNAL_MAP_HELP' => 'La siguiente tabla contiene los campos de la fuente externa y los campos del módulo al que se asignan. Compruebe las asignaciones para asegurarse de que son lo que usted espera, y hacer los cambios, según sea necesario. Asegúrese de asignar a todos los campos obligatorios (señalados con un asterisco).',
    'LBL_EXTERNAL_MAP_NOTE' => 'La importación se intentó para contactos dentro de todos los grupos de contactos de Google.',
    'LBL_EXTERNAL_MAP_NOTE_SUB' => 'Los Nombres de Usuarios de los nuevos usuarios por defecto serán Nombres Completos en Google Contacts. Los Nombres de Usuarios podrán ser modificados posteriormente.',
    'LBL_EXTERNAL_MAP_SUB_HELP' => 'Haga clic en <b>Importar ahora</b> para comenzar la importación. Los registros sólo se crearán para las entradas que incluyen los apellidos. Los registros no se crearán para los datos identificados como duplicados basados ​​en nombres y / o direcciones de email coincidentes con registros existentes.',
    'LBL_EXTERNAL_FIELD_TOOLTIP' => 'Esta columna muestra los campos de la fuente externa que contiene los datos que se utilizarán para crear nuevos registros.',
    'LBL_EXTERNAL_DEFAULT_TOOPLTIP' => 'Indique un valor de uso para el campo en el registro creado si el campo de la fuente externa no contiene datos.',
    'LBL_EXTERNAL_ASSIGNED_TOOLTIP' => 'Para asignar los nuevos registros a un usuario que no sea usted mismo, utilice la columna Valor por defecto para seleccionar un usuario diferente.',
    'LBL_EXTERNAL_TEAM_TOOLTIP' => 'Para asignar los nuevos registros a otros equipos que no sean el equipo por defecto, utilice la columna Valor por defecto para seleccionar los diferentes equipos.',
    'LBL_SIGN_IN_HELP' => 'Para activar este servicio, inicie sesión en la pestaña Cuentas externas dentro de su página de configuración de usuario.',
    'LBL_NO_EMAIL_DEFS_IN_MODULE' => "Intentando administrar direcciones de email en un Bean que no sea compatible.",
);
