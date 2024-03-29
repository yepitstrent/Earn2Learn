<?PHP // $Id: admin.php,v 1.12.2.4 2006/02/06 09:59:39 moodler Exp $ 
      // admin.php - created with Moodle 1.5.3+ (2005060230)


$string['adminseesallevents'] = 'Los administradores ven todos los eventos';
$string['adminseesownevents'] = 'Los administradores son como los dem�s usuarios';
$string['availablelangs'] = 'Paquetes de idioma disponibles';
$string['backgroundcolour'] = 'Color Transparente';
$string['badwordsconfig'] = 'Escriba su lista de palabras censuradas, separadas por comas';
$string['badwordsdefault'] = 'Si la lista personalizada est� vac�a, se usar� una lista por defecto contenida en el paquete de idioma.';
$string['badwordslist'] = 'Lista personalizada de palabras censuradas';
$string['blockinstances'] = 'Ejemplos';
$string['blockmultiple'] = 'M�ltiples';
$string['cachetext'] = 'Tiempo de vida de la cach� de texto';
$string['calendarsettings'] = 'Calendario';
$string['change'] = 'cambiar';
$string['configallowcoursethemes'] = 'Si activa esta opci�n, se permitir� a los cursos ajustar sus propios temas. Los temas de los cursos pasan por alto cualesquiera otras opciones de tema (sitio, usuario o sesi�n)';
$string['configallowemailaddresses'] = 'Si desea restringir todas las direcciones nuevas de correo a dominios particulares, l�stelos aqu� separados por espacios. El resto de los dominios ser� rechazado, e.g., <strong>ourcollege.edu.au .gov.au</strong>';
$string['configallowobjectembed'] = 'Como medida de seguridad por defecto, los usuarios normales no podr�n incrustar en el c�digo HTML objetos multimedia (e.g., Flash) dentro del texto utilizando las marcas expl�citas EMBED y OBJECT (si bien podr� hacerse con seguridad utilizando el filtro mediaplugins). Active la opci�n si desea permitir dichas marcas.';
$string['configallowunenroll'] = 'Si selecciona \'S�\', los estudiantes podr�n desmatricularse de los cursos cuando quieran. En caso contrario no podr�n hacerlo, quedando este proceso bajo el control de profesores y administradores.';
$string['configallowuserblockhiding'] = '�Desea que los usuarios puedan mostrar u ocultar bloques laterales en el sitio? Esta opci�n usa Javascript y cookies para recordar el estado de cada bloque colapsable, y s�lo afecta al modo en que cada usuario ve la informaci�n.';
$string['configallowuserthemes'] = 'Si se activa esta opci�n, los usuarios podr�n elegir sus propios temas. Los temas de los usuarios pasan por alto los temas del sitio (pero no los temas del curso)';
$string['configallusersaresitestudents'] = 'En lo que concierne a las actividades de la p�gina principal del sitio, �deber�an todos los usuarios ser considerados como estudiantes? Si la respuesta es \"S�\", cualquier usuario con cuenta confirmada podr� participar como estudiante en talea actividades. Si la respuesta es \"No\", s�lo los usuarios que ya participan en al menos un curso podr�n tomar parte en las actividades de la p�gina principal. S�lo los administradores y profesores especialmente asignados pueden actuar como profesores en las actividades de la p�gina principal.';
$string['configautologinguests'] = '�Deber� permitirse a los visitantes autom�ticamente el acceso como invitados cuando entran a los cursos con acceso de invitado?';
$string['configcachetext'] = 'En sitios extensos o que usan filtros de texto, esta opci�n realmente puede acelerar las cosas. Las copias de los textos se retendr�n en su forma procesada durante el tiempo especificado aqu�. Si el ajuste es muy peque�o, el proceso se enlentecer�, pero si es muy grande los textos tardar�n demasiado en refrescarse (con nuevos enlaces, por ejemplo).';
$string['configclamactlikevirus'] = 'Tratar archivos como virus';
$string['configclamdonothing'] = 'Tratar archivos como buenos';
$string['configclamfailureonupload'] = 'Si ha configurado clam para escanear archivos subidos, pero est� mal configurado o no funciona por alguna raz�n desconocida, �c�mo deber�a comportarse? Si selecciona \'Tratar archivos como virus\', tales archivos ser�n trasladados al �rea de cuarentena, o eliminados. Si selecciona \'Tratar los archivos como buenos\', los archivos ser�n trasladados al directorio de destino. En cualquier caso, los administradores recibir�n una alerta cuando clam falle. Si selecciona \'Tratar los archivos como virus\' y por alguna raz�n clam no funciona (normalmente debido a que ha introducido una ruta no v�lida), TODOS los archivos subidos ser�n llevados al �rea de cuarentena, o eliminados. Sea cuidadoso.';
$string['configcountry'] = 'Si selecciona un pa�s, dicho pa�s quedar� como valor por defecto para nuevos usuarios o cuentas. Para forzar a los usuarios a elegir un pa�s, deje la opci�n sin seleccionar.';
$string['configdbsessions'] = 'Si elige esta opci�n, se usar� la base de datos para almacenar informaci�n sobre las sesiones actuales. Esto es especialmente �til para sitios grandes u ocupados constru�dos sobre racimos (\'clusters\') de servidores. En la mayor�a de los casos deber�a dejarse en blanco de modo que se use en su lugar el disco del servidor. Note que la modificaci�n de este ajuste desconectar� a todos los usuarios, inclu�do usted.';
$string['configdebug'] = 'Si activa esta opci�n, se incrementar� el error_reporting de PHP, de modo que recibir� m�s advertencias. S�lo resulta �til para los desarrolladores.';
$string['configdefaultallowedmodules'] = 'Para los cursos inclu�dos en la categor�a anterior, �qu� m�dulos desea que aparezcan por defecto <b>cuando se crea el curso</b>?';
$string['configdefaultrequestedcategory'] = 'Categor�a por defecto en la que incluir los cursos solicitados, en el caso de que sean aprobados.';
$string['configdeleteunconfirmed'] = 'Si est� usando una autenticaci�n basada en email, �ste es el per�odo dentro del cual se aceptar� una respuesta enviada por los usuarios. Pasado ese per�odo, se eliminar�n todas las cuentas no confirmadas.';
$string['configdenyemailaddresses'] = 'Para denegar direcciones de email de dominios particulares, escriba aqu� una lista de ellos. El resto de los dominios ser�n aceptados. Por ejemplo, <strong>hotmail.com yahoo.es</strong>';
$string['configdigestmailtime'] = 'Se enviar� un resumen de los correos a las personas que eligen dicha opci�n. Este ajuste controla a qu� hora del d�a se enviar� el correo (por medio del primer cron que se ejecute despu�s de la hora fijada).';
$string['configdisplayloginfailures'] = 'Esta opci�n muestra informaci�n a los usuarios seleccionados sobre intentos previos de acceso fallidos.';
$string['configenablecourserequests'] = 'Permite que cualquier usuario solicite la creaci�n de un curso.';
$string['configenablerssfeeds'] = 'Esta opci�n posibilita el acceso a canales RSS. Para ver cualquier cambio es necesario tambi�n activar los canales RSS en los m�dulos individuales (vaya a los ajustes de M�dulos en Admin - Configuraci�n).';
$string['configenablerssfeedsdisabled'] = 'No est� disponible porque los canales RSS est�n desactivados en todo el sitio. Para activarlos, vaya a Variables en Admin - Configuraci�n.';
$string['configenablestats'] = 'Si selecciona \'s�\', el cronjob de Moodle procesar� los registros y recopilar� algunas estad�sticas. Dependiendo de la cantidad de tr�fico del sitio, esta operaci�n puede demorarse. Si activa esta opci�n, podr� ver algunos gr�ficos y estad�sticas interesantes sobre cada uno de sus cursos, o bien sobre todo el sitio.';
$string['configerrorlevel'] = 'Seleccionar la cantidad de advertencias PHP que desea mostrar. La mejor elecci�n es \'Normal\'.';
$string['configextendedusernamechars'] = 'Este ajuste permite a los estudiantes usar cualesquiera caracteres en sus nombres de usuario (note que eso no afecta a sus nombres reales). El valor por defecto es \"false\", lo que restringe los nombres de usuario a caracteres alfanum�ricos.';
$string['configfilterall'] = 'Filtrar todas las cadenas, incluyendo cabeceras, t�tulos, barra de navegaci�n, etc. Esto resulta muy �til cuando se usa el filtro multi-idioma; de otro modo, �nicamente se ocasionar� una sobrecarga en el sitio para obtener escasas ganancias.';
$string['configfiltermatchoneperpage'] = 'Los filtros de enlace autom�tico s�lo generar�n un enlace �nico al primer ejemplo de texto coincidente que se encuentre en la p�gina completa, pasando por alto el resto.';
$string['configfiltermatchonepertext'] = 'Los filtros de enlace autom�tico s�lo generar�n un enlace �nico al primer ejemplo de texto coincidente que se encuentre en cada elemento de texto (e.g., recurso, bloque) de la p�gina, pasando por alto el resto. Este ajuste no se tendr� en cuenta si el �nico ajuste por p�gina es <i>s�</i>.';
$string['configfilteruploadedfiles'] = 'Esta opci�n posibilita que Moodle procese con los filtros todos los archivos HTML y de texto subidos antes de mostrarlos.';
$string['configforcelogin'] = 'Normalmente la p�gina principal del sitio y las listas de los cursos (pero no los cursos) pueden ser le�dos por cualquiera sin necesidad de escribir su nombre de usuario y contrase�a. Si desea forzar a los visitantes a acceder al sitio antes de poder ver CUALQUIER CONTENIDO, deber�a activar esta opci�n.';
$string['configforceloginforprofiles'] = 'Esta opci�n obliga a acceder al sitio con cuentas v�lidas (no como invitados) antes de poder ver las p�ginas de los perfiles de usuario. El valor por defecto es \"false\", de modo que los futuros estudiantes pueden ver los profesores de cada curso, pero eso supone asimismo que los motores de b�squeda tambi�n pueden verlos.';
$string['configframename'] = 'Si desea anidar a Moodle en un marco, escriba aqu� el nombre del marco. De otro modo, este valor deber�a permanecer como \'_top\'';
$string['configfullnamedisplay'] = 'Esta opci�n define c�mo se ver�n los nombres cuando se muestren completos. Para la mayor�a de los sitios que usen un solo idioma el ajuste m�s eficiente es el valor por defecto (\"Nombre + Apellido\"), pero puede elegir ocultar los apellidos, o dejar que sea el idioma actual quien decida (algunos idiomas usan reglas diferentes).';
$string['configgdversion'] = 'Indique qu� versi�n de GD est� instalada. La versi�n que se muestra por defecto es la que ha sido autodetectada. No cambie esto a menos que sepa exactamente qu� est� haciendo.';
$string['confighiddenuserfields'] = 'Para aumentar la privacidad de los estudiantes, seleccione qu� campos de informaci�n sobre el usuario desea ocultar a otros usuarios distintos de los profesores y administradores del curso. Mantenga pulsada la tecla CTRL para seleccionar varios campos. ';
$string['confightmleditor'] = 'Elija si permitir� o no usar el editor anidado HTML. Incluso si elige la primera opci�n, el editor s�lo aparecer� cuando el usuario est� utilizando un navegador compatible. Los usuarios pueden elegir no utilizarlo.';
$string['configidnumber'] = 'Esta opci�n especifica si (a) No se pide a los usuarios un n�mero de ID, (b) Se les pide un n�mero de ID pero pueden dejarlo en blanco o (c) Se les pide un n�mero de ID y no pueden dejarlo en blanco. En caso afirmativo, el n�mero de ID del Usuario se muestra en su Perfil.';
$string['configintro'] = 'En esta p�gina puede especificar un n�mero de variables de configuraci�n que ayudan a Moodle a trabajar adecuadamente en su servidor. Que esto no le preocupe demasiado: los valores por defecto funcionar�n bien y, en todo caso, siempre podr� volver a esta p�gina y cambiar los ajustes.';
$string['configintroadmin'] = 'En esta p�gina deber�a configurar su cuenta de administrador principal -que le dar� un control absoluto sobre el sitio-. Aseg�rese de que usa un nombre de usuario y contrase�a seguros, as� como una direcci�n de correo electr�nico v�lida. M�s adelante podr� crear m�s cuentas de administrador.';
$string['configintrosite'] = 'Esta p�gina le permite configurar la p�gina principal y dar un nombre a su nuevo sitio. Puede volver m�s adelante y cambiar estos ajustes utilizando el enlace \'Ajustes del Sitio\' en la p�gina de inicio.';
$string['configintrotimezones'] = 'Esta p�gina buscar� nueva informaci�n sobre zonas horarias (incluyendo reglas para ahorrar energ�a aprovechando la luz solar) y actualizar� su base de datos local con esta informaci�n. Dichas zonas ser�n comprobadas en orden: $a Este procedimiento es en general muy seguro y no puede afectar a las instalaciones normales. �Desea actualizar ahora las zonas horarias?';
$string['configlang'] = 'Elija un idioma por defecto para el sitio completo. Los usuarios pueden m�s tarde elegir otra opci�n.';
$string['configlangcache'] = 'Cach� del men� de idioma. Ahorra mucha memoria y potencia de procesamiento. Si lo activa, el men� tardar� unos minutos en actualizarse una vez que usted haya a�adido o eliminado idiomas.';
$string['configlangdir'] = 'La mayor parte de los idiomas se escriben de izquierda a derecha, pero algunos (e.g., �rabe, hebreo) se escriben al rev�s.';
$string['configlanglist'] = 'Deje esto en blanco para dejar que los usuarios elijan cualquier idioma presente en la instalaci�n de Moodle. Sin embargo, puede acortar el men� escribiendo una lista de c�digos de los idiomas que desee separada por comas. Por ejemplo, en,es_es,fr,it';
$string['configlangmenu'] = 'Decida si quiere o no mostrar el men� de idiomas de prop�sito general en la p�gina de inicio, en la de acceso, etc. Esto no afecta a la posibilidad que los usuarios tienen de elegir su idioma preferido en su propio perfil.';
$string['configlocale'] = 'Elija una localizaci�n para el sitio (esto afectar� al formato de idioma y a las fechas). Necesita tener estos datos de localizaci�n instalados en su sistema operativo (e.g., en_US o esp_ESP). Si no sabe qu� elegir, d�jelo en blanco.';
$string['configloginhttps'] = 'Esta opci�n hace que Moodle use una conexi�n https segura en la p�gina de acceso (proporcionando un acceso seguro) para volver luego a la URL http normal. PRECAUCI�N: esta opci�n REQUIERE que el https est� habilitado espec�ficamente en el servidor web. En caso contrario, USTED MISMO SER� EXPULSADO DEL SITIO.';
$string['configloglifetime'] = 'Esta opci�n especifica durante cu�nto tiempo desea conservar los registros de actividad de cada usuario. Los registros anteriores ser�n eliminados. Es mejor que la cifra sea alta (por si los necesita) pero si el servidor est� muy ocupado y hay problemas de funcionamiento, tal vez convenga acortar el tiempo.';
$string['configlongtimenosee'] = 'Si los estudiantes no acceden durante mucho tiempo, son autom�ticamente desmatriculados de los cursos. Este par�metro especifica ese l�mite de tiempo.';
$string['configmaxbytes'] = 'Esta opci�n especifica el tama�o m�ximo que deben tener los archivos subidos al sitio. Est� limitada por el ajuste PHP upload_max_filesize y por el ajuste de Apache LimitRequestBody. Por otra parte, la opci�n limita el rango de tama�os que pueden elegirse en el nivel de curso o de m�dulo. ';
$string['configmaxeditingtime'] = 'Esta opci�n especifica cu�nto tiempo tienen los usuarios para reeditar los mensajes enviados al foro, el feedback del diario, etc. Normalmente 30 minutos es un valor adecuado.';
$string['configmessaging'] = '�Desea habilitar el sistema de mensajer�a entre los usuarios del sitio?';
$string['configmymoodleredirect'] = 'Esta opci�n fuerza a los no administradores a dirigirse a /my al ingresar y reemplaza el breadcrumb superior del sitio con /my';
$string['confignoreplyaddress'] = 'A veces los emails son enviados por el usuario (e.g., mensajes a un foro). La direcci�n email especificada aqu� se usar� como direcci�n \"De\" en aquellos casos en que los receptores no puedan replicar directamente al usuario (e.g., cuando un usuario elige mantener oculta su direcci�n).';
$string['confignotifyloginfailures'] = 'Si los intentos de acceso fallidos han sido registrados, pueden enviarse notificaciones mediante correo electr�nico. �Qui�n puede ver tales notificaciones?';
$string['confignotifyloginthreshold'] = 'Si las notificaciones de intentos de acceso fallidos est�n activas, �cu�ntos intentos fallidos son necesarios para enviar una notificaci�n al respecto a un usuario o a una direcci�n IP?';
$string['configopentogoogle'] = 'Si activa esta opci�n, se permitir� a Google entrar al sitio como Invitado. Adem�s, quien acceda al sitio v�a b�squeda en Google acceder� autom�ticamente como Invitado. Note que esta opci�n s�lo proporciona acceso transparente a los cursos que ya permiten el acceso a invitados.';
$string['configpathtoclam'] = 'Ruta a clam AV. Probablemente algo parecido a /usr/bin/clamscan or /usr/bin/clamdscan. Esta ruta es necesaria para que clam AV funcione.';
$string['configpathtodu'] = 'Ruta a du (probablemente algo parecido a /usr/bin/du). Si escribe esto, las p�ginas que muestran el contenido del directorio se ejecutar�n mucho m�s r�pidamente cuando los directorios contengan muchos archivos.';
$string['configperfdebug'] = 'Si activa esta opci�n, aparecer� la informaci�n sobre el rendimiento en el pie de p�gina del tema est�ndar.';
$string['configproxyhost'] = 'Si este <b>servidor</b> necesita usar un proxi (e.g., un cortafuegos) para acceder a Internet, escriba aqu� el nombre del proxy y el puerto. En caso contrario, d�jelo en blanco.';
$string['configquarantinedir'] = 'Si desea que clam AV traslade los archivos infectados a un directorio de cuarentena, escr�balo aqu�. El directorio debe tener permiso de escritura en el servidor. Si lo deja en blanco, o si escribe un directorio inexistente o sin permiso de escritura, los archivos infectados ser�n destru�dos. No incluya la barra final.';
$string['configrequestedstudentname'] = 'T�rmino utilizado para \'estudiante\' en los cursos solicitados';
$string['configrequestedstudentsname'] = 'T�rmino utilizado para \'estudiantes\' en los cursos solicitados';
$string['configrequestedteachername'] = 'T�rmino utilizado para \'profesor\' en los cursos solicitados';
$string['configrequestedteachersname'] = 'T�rmino utilizado para \'profesores\' en los cursos solicitados';
$string['configrestrictbydefault'] = '�Deber�an los cursos nuevos inclu�dos en la categor�a anterior tener sus m�dulos restringidos por defecto?';
$string['configrestrictmodulesfor'] = '�Qu� cursos deber�an contener <b>la opci�n</b> de deshabilitar algunos m�dulos de actividad?';
$string['configrunclamonupload'] = '�Deber� ejecutarse clam AV cuando se sube un archivo? Para que esto funcione es necesaria una ruta correcta \'pathtoclam\'. (Clam AV es un programa antivirus gratuito que se puede bajar de http://www.clamav.net/)';
$string['configsectioninterface'] = 'Interface';
$string['configsectionmail'] = 'Correo electr�nico';
$string['configsectionmaintenance'] = 'Mantenimiento';
$string['configsectionmisc'] = 'Miscel�nea';
$string['configsectionoperatingsystem'] = 'Sistema Operativo';
$string['configsectionpermissions'] = 'Permisos';
$string['configsectionrequestedcourse'] = 'Solicitudes de cursos';
$string['configsectionsecurity'] = 'Seguridad';
$string['configsectionstats'] = 'Estad�sticas';
$string['configsectionuser'] = 'Usuario';
$string['configsecureforms'] = 'Moodle puede usar un nivel adicional de seguridad cuando acepta datos provenientes de formularios web. Si la opci�n est� activada, se contrastar� la variable HTTP_REFERER del navegador con la direcci�n del formulario actual. En muy pocos casos esto ocasiona problemas si el usuario utiliza un cortafuegos (e.g., ZoneAlarm) configurado para desmontar su HTTP_REFERER del tr�fico web. El s�ntoma consiste en quedarse \'atascasdo\' en un formulario. Si, pongamos por caso, los usuarios tuvieran problemas con la p�gina de acceso, quiz�s conviniera desactivar la opci�n, aun con el riesgo de dejar el sitio m�s vulnerable a ataques de fuerza bruta. En caso de duda, seleccione la opci�n \'S�\'.';
$string['configsessioncookie'] = 'Esta opci�n personaliza el nombre de la cookie usada para las sesiones de Moodle. Es opcional, y resulta �til �nicamente para evitar que las cookies se confundan cuando hay m�s de una copia de Moodle ejecut�ndose en el mismo sitio web.';
$string['configsessiontimeout'] = 'Si los usuarios conectados al sitio est�n inactivos durante mucho tiempo (i.e., sin cargar p�ginas), ser�n desconectados autom�ticamente (i.e., terminar� la sesi�n). Esta variable especifica el tiempo de inactividad antes de la desconexi�n.';
$string['configshowblocksonmodpages'] = 'Algunos m�dulos de actividad soportan bloques en sus p�ginas. Si selecciona esta opci�n, los profesores podr�n a�adir bloques laterales a sus p�ginas. En caso contrario, la interface no mostrar� esta caracter�stica.';
$string['configshowsiteparticipantslist'] = 'Todos los estudiantes y profesores del sitio aparecer�n en la lista de participantes. �Qui�n puede ver esa lista?';
$string['configsitepolicy'] = 'Si su pol�tica exige que todos los usuarios lean y acepten sus condiciones antes de usar el sitio, especifique aqu� la URL; en caso contrario, d�jelo en blanco. La URL puede ser cualquier direcci�n (un lugar conveniente podr�a ser un fichero en el propio sitio, e.g., http://yoursite/file.php/1/policy.html)';
$string['configslasharguments'] = 'Los archivos (im�genes, subidas, etc.) se proporcionan v�a un script que usa \'slash arguments\' (la segunda opci�n aqu�). Este m�todo permite que los archivos sean inclu�dos m�s f�cilmente en la cach� de los navegadores, servidores proxy, etc. Desafortunadamente, algunos servidores PHP no permiten usar este m�todo, de modo que si usted tiene problemas para ver archivos o im�genes subidas al servidor (e.g., fotograf�as de los usuarios), seleccione la primera opci�n.';
$string['configsmtphosts'] = 'Escriba el nombre completo de uno o m�s servidores SMTP locales que Moodle usar� para enviar correo (e.g., \'mail.a.com\' o \'mail.a.com;mail.b.com\'). Si lo deja en blanco, Moodle usar� el m�todo PHP por defecto para enviar correo.';
$string['configsmtpuser'] = 'Si antes ha especificado un servidor SMTP, y el servidor requiere autenticaci�n, escriba aqu� el nombre de usuario y la contrase�a.';
$string['configstatsfirstrun'] = 'Esta opci�n especifica el momento a partir del cual deber�an procesarse los registros <b>la primera vez</b> que el cronjob procesa las estad�sticas. Si el sitio tiene mucho tr�fico y el servidor es compartido, probablemente no sea una buena idea comenzar demasiado pronto, puesto que se tardar� mucho tiempo y se consumir�n muchos recursos. (N�tese que en esta opci�n 1 mes equivale a 28 d�as, en tanto que en los gr�ficos e informes generados, 1 mes equivale a 1 mes de calendario).';
$string['configstatsmaxruntime'] = 'El procesamiento estad�stico puede ser muy intenso, de modo que conviene combinar este campo y el siguiente para especificar cu�ndo y durante cu�nto tiempo funcionar�.';
$string['configstatsruntimestart'] = '�En qu� momento <b>comenzar�</b> a trabajar el cronjob que procesa las estad�sticas?';
$string['configstatsuserthreshold'] = 'Si escribe aqu� un valor no num�rico distinto a cero para ordenar los cursos, entonces aquellos cursos con menos usuarios (estudiantes + profesores) que dicho n�mero no ser�n tenidos en cuenta.';
$string['configteacherassignteachers'] = '�Pueden los profesores ordinarios incluir a otros profesores en los cursos que dictan? Si selecciona \'No\', s�lo los creadores de cursos y los administradores pueden nombrar profesores.';
$string['configthemelist'] = 'Deje esta opci�n en blanco para permitir que se utilice cualquier tema v�lido. Si quiere acortar el men� de temas, puede especificar una lista de nombres separados por comas. Por ejemplo: standard,orangewhite';
$string['configtimezone'] = 'Aqu� puede decidir la zona horaria por defecto. �sta es la �nica zona horaria POR DEFECTO para mostrar fechas -cada usuario puede cambiar esta opci�n en su perfil-. La \"Hora del Servidor\" aqu� har� que Moodle tome por defecto la del sistema operativo, pero esa opci�n en el perfil del usuario lo ajustar� a la correspondiente zona horaria.';
$string['configunzip'] = 'Indique d�nde est� el programa de descompresi�n -\'Unzip\'- (s�lo Unix, opcional). Si se especifica, esto puede usarse para descomprimir archivos en el servidor. Si lo deja en blanco, Moodle usar� sus rutinas internas.';
$string['configvariables'] = 'Variables';
$string['configwarning'] = 'Sea cuidadoso al modificar estos resultados (valores extra�os pueden ocasionar problemas).';
$string['configzip'] = 'Indique d�nde est� el programa de compresi�n -\'Zip-\'  (s�lo Unix, opcional). Si se especifica, esto puede usarse para comprimir archivos en el servidor. Si lo deja en blanco, Moodle usar� sus rutinas internas.';
$string['confirmation'] = 'Confirmaci�n';
$string['confirminstall'] = 'Est� a punto de instalar el paquete de idioma ($a); �est� usted seguro?';
$string['cronwarning'] = 'El script de mantenimiento del <a href=\"cron.php\">cron.php </a> no ha sido ejecutado durante las �ltimas 24 horas. <br />La <a href=\"../doc/?frame=install.html&#8834;=cron\">documentaci�n de instalaci�n</a> explica c�mo puede automatizarlo.';
$string['density'] = 'Densidad';
$string['edithelpdocs'] = 'Editar documentos de ayuda';
$string['editstrings'] = 'Editar cadenas';
$string['filterall'] = 'Filtrar todas las cadenas';
$string['filtermatchoneperpage'] = 'Filtrar una coincidencia por p�gina';
$string['filtermatchonepertext'] = 'Filtrar una coincidencia por texto';
$string['filteruploadedfiles'] = 'Filtrar archivos subidos';
$string['globalsquoteswarning'] = '<p><strong>Advertencia de seguridad</strong>: para funcionar adecuadamente, Moodle requiere<br />llevar a cabo ciertos cambios en los ajustes de PHP.<p/><p>Usted <em>debe</em> ajustar <code>register_globals=off</code> y/o <code>magic_quotes_gpc=on</code>. <br />Si fuera posible, deber�a ajustar <code>register_globals=off</code> para mejorar la seguridad <br /> general del servidor, el ajuste <code>magic_quotes_gpc=on</code> es asimismo recomendable.<p/><p>Estos ajustes se realizan editando el archivo <code>php.ini</code>, la configuraci�n de <br />Apache/IIS o el archivo <code>.htaccess</code>.</p>';
$string['helpadminseesall'] = '�Pueden los administradores ver todos los eventos del calendario o s�lo los que les conciernen?';
$string['helpcalendarsettings'] = 'Configurar varios aspectos de Moodle relacionados con el calendario y con fechas';
$string['helpforcetimezone'] = 'Puede permitir que los usuarios seleccionen su zona horaria, o forzarla para todos.';
$string['helpsitemaintenance'] = 'Para actualizaciones y otras tareas';
$string['helpstartofweek'] = '�Qu� d�a comienza la semana?';
$string['helpupcominglookahead'] = '�Cu�ntos d�as debe considerar el calendario por defecto para eventos pr�ximos?';
$string['helpupcomingmaxevents'] = '�Cu�ntos eventos pr�ximos se mostrar�n como m�ximo a los usuarios?';
$string['helpweekenddays'] = '�Cu�ntos d�as de la semana se considerar�n como \'fin de semana\' y se mostrar�n con un color diferente?';
$string['importtimezones'] = 'Actualizar la lista completa de zonas horarias';
$string['importtimezonescount'] = '$a->count entradas importadas desde $a->source';
$string['importtimezonesfailed'] = '�No se encuentran fuentes! (malas noticias)';
$string['incompatibleblocks'] = 'Bloques imcompatibles';
$string['install'] = 'Instalar';
$string['installedlangs'] = 'Paquetes de idioma instalados';
$string['langimport'] = 'Utilidad de importaci�n de idioma';
$string['langimportsuccess'] = 'Paquete de idioma actualizado con �xito';
$string['langpackremoved'] = 'Desinstalaci�n de paquete de idioma completada';
$string['latexpreamble'] = 'Pre�mbulo LaTeX';
$string['latexsettings'] = 'Ajustes de LaTeX';
$string['mediapluginavi'] = 'Habilitar filtro .avi';
$string['mediapluginflv'] = 'Habilitar filtro .flv';
$string['mediapluginmov'] = 'Habilitar filtro .mov';
$string['mediapluginmp3'] = 'Habilitar filtro .mp3';
$string['mediapluginmpg'] = 'Habilitar filtro .mpg';
$string['mediapluginswf'] = 'Habilitar filtro .swf';
$string['mediapluginwmv'] = 'Habilitar filtro .wmv';
$string['optionalmaintenancemessage'] = 'Mensaje de mantenimiento opcional';
$string['pathconvert'] = 'Ruta de <i>convert</i> binario';
$string['pathdvips'] = 'Ruta de <i>dvips</i> binario';
$string['pathlatex'] = 'Ruta de <i>latex</i> binario';
$string['pleaseregister'] = 'Por favor, registre su sitio para eliminar este bot�n';
$string['sitemaintenance'] = 'Este sitio est� en fase de mantenimiento y no est� disponible en este momento';
$string['sitemaintenancemode'] = 'Modo de mantenimiento';
$string['sitemaintenanceoff'] = 'El modo de mantenimiento est� desactivado y el sitio vuelve a funcionar con normalidad';
$string['sitemaintenanceon'] = 'El sitio est� en modo mantenimiento (s�lo los administradores tienen acceso).';
$string['sitemaintenancewarning'] = 'El sitio est� en modo mantenimiento (s�lo los administradores tienen acceso). Para ponerlo en funcionamiento de nuevo, <a href=\"maintenance.php\">desactive el modo de mantenimiento</a>.';
$string['stickyblocks'] = 'Bloques \'sticky\'';
$string['stickyblockscourseview'] = 'P�gina del curso';
$string['stickyblocksduplicatenotice'] = 'Si cualquier bloque que agregue aqu� est� ya presente en una p�gina en particular, el resultado ser� un duplicado.<br />�nicamente el bloque agregado no ser� editable, en tanto que el duplicado podr� editarse.';
$string['stickyblocksmymoodle'] = 'Mi moodle';
$string['stickyblockspagetype'] = 'Tipo de p�gina a configurar';
$string['tabselectedtofront'] = 'En tablas con tabuladores, la fila con el \'tag\' actualmente seleccionado deber�a colocarse en el frente';
$string['therewereerrors'] = 'Hay errores en sus datos';
$string['timezoneforced'] = 'Esta opci�n est� forzada por el administrador del sitio';
$string['timezoneisforcedto'] = 'Forzar a todos los usuarios a utilizar';
$string['timezonenotforced'] = 'Los usuarios pueden elegir su propia zona horaria';
$string['uninstall'] = 'Desinstalar';
$string['uninstallconfirm'] = 'Est� a punto de desinstalar el paquete de idioma $a; �est� usted seguro?';
$string['upgradeforumread'] = 'Se ha incorporado a Moodle 1.5 una nueva caracter�stica para rastrear mensajes enviados al foro le�dos y no le�dos.<br />Para hacer uso de esta funcionalidad, necesita <a href=\"$a\">actualizar sus tablas</a>.';
$string['upgradeforumreadinfo'] = 'Se ha incorporado a Moodle 1.5 una nueva funcionalidad para rastrear mensajes enviados al foro le�dos y no le�dos. Para hacer uso de ella, necesita actualizar sus tablas con toda la informaci�n concerniente a los mensajes existentes. Dependiendo del tama�o del sitio, esto puede llevar mucho tiempo (horas) y hacer un uso intensivo de la base de datos, de modo que es mejor llevar a cabo esta operaci�n durante un per�odo de tranquilidad. Sin embargo, el sitio continuar� funcionando durante la actualizaci�n y los usuarios no se ver�n afectados. Una vez que comience este proceso, deber�a dejarlo terminar (i.e., mantenga abierta la ventana del navegador). En todo caso, si detiene el proceso cerrando la ventana, no se preocupe, siempre podr� recomenzar.<br /><br />�Desea comenzar el proceso de actualizaci�n ahora?';
$string['upgradelogs'] = 'Para conseguir una funcionalidad total, sus registros antiguos deben ser actualizados. <a href=\"$a\">M�s informaci�n</a>';
$string['upgradelogsinfo'] = 'Recientemente se han llevado a cabo algunos cambios en la forma en que se almacenan los registros. Para poder ver sus registros antiguos clasificados por actividad, esos registros se deben actualizar. Dependiendo del tama�o de su sitio este proceso puede tardar bastante tiempo (e.g., varias horas) puesto que habr� de consultar continuamente la base de datos. Una vez iniciado el proceso debe permitir que llegue a su fin (manteniendo la ventana de su navegador abierta). No se preocupe: durante este proceso su sitio funcionar� correctamente para los otros usuarios.<br /><br /> �Desea actualizar sus registros ahora?';
$string['upgradesure'] = 'Sus archivos Moodle han sido modificados, y usted est� a punto de actualizar autom�ticamente su servidor a esta versi�n:
<p><b>$a</b></p>
<p>Una vez que haga esto, no podr� volver atr�s.</p>
<p>�Est� seguro de que quiere actualizar este servidor a esta versi�n?</p>';
$string['upgradingdata'] = 'Actualizando los datos';
$string['upgradinglogs'] = 'Actualizando los registros';

?>
