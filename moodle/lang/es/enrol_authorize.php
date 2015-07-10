<?PHP // $Id: enrol_authorize.php,v 1.1.2.4 2006/02/06 09:59:39 moodler Exp $ 
      // enrol_authorize.php - created with Moodle 1.5.3+ (2005060230)


$string['adminauthorizeccapture'] = 'Ajustes Revisar Orden y Auto-Capturar';
$string['adminauthorizeemail'] = 'Ajustes Enviar Email';
$string['adminauthorizesettings'] = 'Ajustes Authorize.net';
$string['adminauthorizewide'] = 'Ajustes Todo el Sitio';
$string['adminreview'] = 'Revisar el orden antes de capturar la tarjeta de cr�dito.';
$string['anlogin'] = 'Authorize.net: Usuario';
$string['anpassword'] = 'Authorize.net: Contrase�a (no requerida)';
$string['anreferer'] = 'Escriba aqu� la referencia URL en el caso de que usted la ajuste en su cuenta authorize.net, que enviar� una cabecera \"Referer: URL\" en la petici�n web.';
$string['antestmode'] = 'Authorize.net:';
$string['antrankey'] = 'Authorize.net:';
$string['ccexpire'] = 'Fecha de expiraci�n';
$string['ccexpired'] = 'La tarjeta de cr�dito ha expirado';
$string['ccinvalid'] = 'N�mero de tarjeta no v�lido';
$string['ccno'] = 'N�mero de la tarjeta de cr�dito';
$string['cctype'] = 'Tipo de la tarjeta de cr�dito';
$string['ccvv'] = 'CV2';
$string['ccvvhelp'] = 'Mire el reverso de la tarjeta (3 �ltimos d�gitos)';
$string['choosemethod'] = 'Si conoce la clave de matriculaci�n en el curso, escr�bala; en caso contrario, necesitar� pagar para acceder al curso.';
$string['chooseone'] = 'Rellene uno o ambos de los siguientes dos campos';
$string['description'] = 'El m�dulo Authorize.net le permite ajustar cursos de pago v�a proveedores CC. Si el costo de cualquier curso es cero, no se pedir� a los estudiantes que paguen. Existe un costo del sitio que usted ajusta aqu� por defecto para todo el sitio y adem�s un ajuste por curso que puede efectuar para cada curso individualmente. El costo del curso pasa por alto el costo del sitio.';
$string['enrolname'] = 'Puerta de tarjeta de cr�dito Authorize.net:';
$string['httpsrequired'] = 'Lamentamos comunicarle que su solicitud no puede procesarse en este momento. La configuraci�n de este sitio no se ha podido realizar correctamente.
<br /><br />
Por favor, no escriba su n�mero de tarjeta de cr�dito a menos que vea un candado amarillo en la parte inferior del navegador. Ello significa transferidos entre cliente y servidor son encriptados, con el fin de proteger la informaci�n durante la transacci�n entre dos ordenadores y que el n�mero de su tarjeta no puede ser capturado en internet.';
$string['logindesc'] = 'Puede seleccionar la opci�n <a href=\"$a->url\">loginhttps</a> en la secci�n Variables/Seguridad.
<br /><br />
Si la selecciona, Moodle usar� una conexi�n https segura �nicamente en la p�gina de acceso y pago.';
$string['nameoncard'] = 'Nombre que figura en la tarjeta';
$string['paymentpending'] = 'El pago de este curso est� pendiente con este n�mero de orden $a->orderid.';
$string['reviewday'] = 'Capturar la tarjeta de cr�dito autom�ticamente a menos que un profesor o administrador revise la orden antes de <b>$a</b>d�as. EL CRON DEBE ESTAR ACTIVADO.<br />(0 d�as significa que se desactivar� la auto-captura, y que el profesor o administrador revisar�n la orden manualmente. La transacci�n ser� cancelada si usted desactiva la auto-captura, o si no la revisa antes de 30 d�as).';
$string['reviewnotify'] = 'Su pago ser� revisado. En unos d�as recibir� un email de su profesor.';
$string['sendpaymentbutton'] = 'Enviar pago';
$string['zipcode'] = 'C�digo postal';

?>
