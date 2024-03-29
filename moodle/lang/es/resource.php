<?PHP // $Id: resource.php,v 1.25.2.3 2006/02/06 09:59:40 moodler Exp $ 
      // resource.php - created with Moodle 1.5.3+ (2005060230)


$string['addresource'] = 'Agregar recurso';
$string['chooseafile'] = 'Elija o suba un archivo';
$string['chooseparameter'] = 'Elegir par�metro';
$string['configallowlocalfiles'] = 'Cuando se crea un nuevo recurso de archivo, permita enlaces a archivos en un sistema local de archivos tal como un CD o un disco duro. Esto puede ser muy �til cuando todos los estudiantes de una clase tienen acceso en red a un disco com�n o cuando se necesita acceder a archivos almacenados en un CD. El uso de esta caracter�stica puede exigir cambios en los controles de seguridad de su navegador.';
$string['configdefaulturl'] = 'Este valor se usa como pre-relleno cuando se crea un nuevo recurso basado en URL.';
$string['configfilterexternalpages'] = 'Activar esta variable ocasionar� que todos los recursos externos (p�ginas web, archivos HTML cargados) se procesen seg�n los filtros definidos en el sitio (como el glosario, los enlaces autom�ticos, etc.). Esto puede hacer que el rendimiento del sistema disminuya considerablemente --�selo con cuidado, s�lo si es necesario.';
$string['configframesize'] = 'Cuando se muestra una p�gina web o un archivo cargado dentro de un marco (frame), este valor es el tama�o en p�xeles del marco superior (top) que contiene el navegador.';
$string['configparametersettings'] = 'Configura el valor por defecto del panel de ajustes de par�metros en el formulario cuando se agregan nuevos recursos. Tras esta primera vez, se convierte en una preferencia del usuario individual.';
$string['configpopup'] = 'Cuando se agrega un recurso que puede mostrarse en un ventana emergente (\"popup\"), �esta opci�n se debe activar por defecto?';
$string['configpopupdirectories'] = 'Las ventanas \"popup\", �deben por defecto mostrar los enlaces del directorio?';
$string['configpopupheight'] = '�Qu� altura deben tener por defecto las ventanas \"popup\"?';
$string['configpopuplocation'] = 'Las ventanas \"popup\", �deben por defecto mostrar la barra de ubicaci�n?';
$string['configpopupmenubar'] = 'Las ventanas \"popup\", �deben por defecto mostrar la barra de men�?';
$string['configpopupresizable'] = 'Las ventanas \"popup\", �deben por defecto ser redimensionables?';
$string['configpopupscrollbars'] = 'Las ventanas \"popup\", �deben por defecto mostrar las barras de desplazamiento?';
$string['configpopupstatus'] = 'Las ventanas \"popup\", �deben por defecto mostrar la barra de estado?';
$string['configpopuptoolbar'] = 'Las ventanas \"popup\", �deben por defecto mostrar la barra de herramientas?';
$string['configpopupwidth'] = '�Qu� ancho deben tener por defecto las ventanas \"popup\"?';
$string['configsecretphrase'] = 'Esta frase secreta se usa para generar el valor de c�digo encriptado que se enviar� a algunos recursos como par�metro. El c�digo encriptado es producido por un valor md5 de la direcci�n IP current_users concatenado con su frase secreta. Ej., code = md5(IP.frasesecreta). Esto permite al recurso destinatario verificar la conexi�n para mayor seguridad.';
$string['configwebsearch'] = 'Cuando agregue una URL como p�gina web o como enlace, esta ubicaci�n se ofrece como un sitio para que el usuario busque la URL que desea.';
$string['configwindowsettings'] = 'Fija el valor por defecto del panel de ajustes de ventana en el formulario cuando se agregan algunos recursos nuevos. Tras esta primera vez, se convierte en una preferencia del usuario individual.';
$string['deploy'] = 'Desplegar';
$string['directlink'] = 'Enlace directo a este archivo';
$string['directoryinfo'] = 'Se mostrar�n todos los archivos en el directorio elegido.';
$string['display'] = 'Ventana';
$string['editingaresource'] = 'Editar recurso';
$string['encryptedcode'] = 'C�digo encriptado';
$string['example'] = 'Ejemplo';
$string['exampleurl'] = 'http://www.ejemplo.com/directorio/archivo.html';
$string['fetchclienterror'] = 'Ha ocurrido un problema al tratar de abrir la p�gina web (posiblemente la direcci�n est� equivocada).';
$string['fetcherror'] = 'Ha ocurrido un problema al tratar de abrir la p�gina web.';
$string['fetchservererror'] = 'Ha ocurrido un problema con el servidor remoto al tratar de abrir la p�gina web (posiblemente un error del programa).';
$string['filename'] = 'Nombre del archivo';
$string['filtername'] = 'Auto-enlace de recursos';
$string['frameifpossible'] = 'Colocar el recurso en un marco para mantener visible la navegaci�n por el sitio';
$string['fulltext'] = 'Texto completo';
$string['htmlfragment'] = 'Fragmento HTML';
$string['imspackageloaded'] = 'Paquete cargado.';
$string['localfile'] = 'Archivo local';
$string['localfilechoose'] = 'Elija un archivo local (CD-ROM)';
$string['localfilehelp'] = 'Ayuda mostrar archivos locales';
$string['localfileinfo'] = '<p>Seleccione un archivo local en su ordenador. No es preciso subir el archivo al sitio; Moodle buscar� el mismo archivo en el ordenador de cualquiera que est� viendo este recurso.</p><p>Esto resulta particularmente �til cuando usted tiene archivos multimedia muy grandes almacenados en un CD-ROM est�ndar para distribuir a todos los participantes. Cada participante puede elegir su propia ruta a dichos archivos, por medio de la<a href=\"$a\" target=\"_blank\">edici�n de su perfil de usuario</a>.</p>';
$string['localfilepath'] = 'Para establecer su propia ruta local hacia este recurso, elija cualquier archivo del disco (normalmente un CD-ROM) de su ordenador en que est� ubicado el recurso. El archivo no ser� subido, pero la informaci�n del disco se almacenar� y se utilizar� para cualesquiera archivos locales de recursos';
$string['localfileselect'] = 'Elija esta ruta de archivo.';
$string['maindirectory'] = 'Directorio principal de archivos';
$string['modulename'] = 'Recurso';
$string['modulenameplural'] = 'Recursos';
$string['navigationbuttons'] = 'Botones de navegaci�n';
$string['neverseen'] = 'Nunca visto';
$string['newdirectories'] = 'Mostrar los enlaces del directorio';
$string['newfullscreen'] = 'Llenar la pantalla';
$string['newheight'] = 'Altura de la ventana (en p�xeles)';
$string['newlocation'] = 'Mostrar la barra de ubicaci�n';
$string['newmenubar'] = 'Mostrar la barra de men�';
$string['newresizable'] = 'Permitir cambiar el tama�o de la ventana';
$string['newscrollbars'] = 'Permitir desplazamiento en la ventana';
$string['newstatus'] = 'Mostrar la barra de estado';
$string['newtoolbar'] = 'Mostrar la barra de herramientas';
$string['newwidth'] = 'Ancho de la  ventana (en p�xeles)';
$string['newwindow'] = 'Nueva ventana';
$string['newwindowopen'] = 'Mostrar el recurso en una nueva ventana emergente (\"popup\")';
$string['notallowedlocalfileaccess'] = 'El acceso a archivos locales est� desactivado en este momento: el recurso no est� disponible.';
$string['note'] = 'Nota';
$string['notefile'] = 'Para subir m�s de un archivo (y se puedan ver en la lista) utilice el 
<A HREF=$a >Administrador de archivos</A>.';
$string['notypechosen'] = 'Necesita elegir un texto. Regrese e int�ntelo de nuevo.';
$string['packagechanged'] = 'El Paquete de contenidos IMS ha cambiado.';
$string['packagenotdeplyed'] = 'El Paquete de contenidos IMS no est� desplegado.';
$string['pagedisplay'] = 'Mostrar este recurso dentro de la ventana actual';
$string['pagewindow'] = 'La misma ventana';
$string['pan'] = 'Pan';
$string['parameter'] = 'Par�metro';
$string['parameters'] = 'Par�metros';
$string['popupresource'] = 'Este recurso debe aparecer en una ventana ';
$string['popupresourcelink'] = 'Si no, haga clic aqu�: $a';
$string['redeploy'] = 'Desplegar de nuevo';
$string['resourcetype'] = 'Tipo de recurso';
$string['resourcetype1'] = 'Referencia';
$string['resourcetype2'] = 'P�gina web';
$string['resourcetype3'] = 'Archivo subido';
$string['resourcetype4'] = 'Texto plano';
$string['resourcetype5'] = 'Enlace web';
$string['resourcetype6'] = 'Texto HTML';
$string['resourcetype7'] = 'Programa';
$string['resourcetype8'] = 'Texto wiki';
$string['resourcetype9'] = 'Directorio';
$string['resourcetypedirectory'] = 'Mostrar un directorio';
$string['resourcetypefile'] = 'Enlazar un archivo o una web';
$string['resourcetypehtml'] = 'Editar una p�gina web';
$string['resourcetypeims'] = 'Desplegar Paquete de contenidos IMS';
$string['resourcetypelabel'] = 'A�adir una etiqueta';
$string['resourcetyperepository'] = 'Enlace a objeto de repositorio';
$string['resourcetypetext'] = 'Editar una p�gina de texto';
$string['searchweb'] = 'Buscar una p�gina web';
$string['serverurl'] = 'URL del servidor ($a->wwwroot)';
$string['showcourseblocks'] = 'Mostrar los bloques del curso';
$string['tableofcontents'] = 'Tabla de contenidos';
$string['variablename'] = 'Nombre de la variable';
$string['viewims'] = 'Ver Paquete IMS CP';
$string['vol'] = 'Vol';

?>
