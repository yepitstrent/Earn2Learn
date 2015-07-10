<?PHP // $Id: enrol_authorize.php,v 1.1.2.4 2006/02/06 10:00:30 moodler Exp $ 
      // enrol_authorize.php - created with Moodle 1.5 + (2005060201)


$string['adminreview'] = 'Controlar a encomenda antes de completar a transa��o com o cart�o de cr�dito';
$string['anlogin'] = 'Authorize.net: Nome para Login';
$string['anpassword'] = 'Authorize.net: Senha';
$string['anreferer'] = 'Definir a URL de refer�ncia se voc� configurou isto na tua conta authorize.net. Isto incluir� uma linha \"Referer: URL\" na solicita��o.';
$string['antestmode'] = 'Executar transa��es apenas em modalidade de teste (n�o ser�o feitas transa��es monet�rias reais)';
$string['antrankey'] = 'Authorize.net: Chave para transa��o';
$string['ccexpire'] = 'Data de expira��o';
$string['ccexpired'] = 'O cart�o de cr�dito expirou';
$string['ccinvalid'] = 'N�mero de cart�o n�o v�lido';
$string['ccno'] = 'N�mero do cart�o de cr�dito';
$string['cctype'] = 'Tipo de cart�o de cr�dito';
$string['ccvv'] = 'CV2';
$string['ccvvhelp'] = 'Olhe na parte posterior do cart�o (�ltimos 3 d�gitos)';
$string['choosemethod'] = 'Insira o c�digo da chave de inscri��o do curso. Se voc� ainda n�o tem ente c�digo, � necess�rio fazer a inscri��o (e pagar) para poder obt�-lo.';
$string['chooseone'] = 'Complete um ou dois dos campos abaixo';
$string['description'] = 'O m�dulo Authorize.net permite a configura��o do pagamento de cursos utilizando providers CC. Se o valor da inscri��o for zero, o pedido de pagamento n�o ser� apresentado ao aluno. Voc� deve configurar um pre�o predefinido para todo o site e um pre�o determinado para cada curso. O pre�o do curso tem prioridade sobre o pre�o predefinido para o site.';
$string['enrolname'] = 'Gateway Authorize.net do Cart�o de Cr�dito';
$string['httpsrequired'] = 'Infelizmente n�o foi poss�vel processar o seu pedido em raz�o de problemas de configura��o deste site. <br /><br />
Antes de inserir o n�mero do seu cart�o de cr�dito verifique se na barra inferior do seu navegador foi visualizada a imagem de um cadeado amarelo (isto indica que a transa��o � segura e que voc� n�o corre o risco de ter os dados roubados por terceiros durante a opera��o).';
$string['logindesc'] = 'Esta op��o deve estar ativa.
<br /><br />
Voc� pode configurar a op��o <a href=\"$a->url\">loginhttps</a> na se��o Vari�veis/Seguran�a.
<br /><br />
Com esta op��o ativada Moodle usa o https seguro no hora do login e na p�gina de pagamentos.';
$string['nameoncard'] = 'Nome no cart�o';
$string['reviewday'] = 'Completar a transa��o do cart�o de cr�dito automaticamente a menos que um administrador ou professor n�o fa�a o controle da encomenda em <b>$a</b> dias. O CRON DEVE ESTAR ATIVADO. .<br />( 0 dias = desativar transa��o automatica = prof. o admin. controlam a opera��o manualmente. A transa��o ser� cancelada quando a modalidade autocapture for desativada a menos que voc� n�o controle a opera��o em 30 dias.)';
$string['reviewnotify'] = 'O seu pagamento vai ser controlado. Voc� receber� um email do seu professor nos pr�ximos dias.';
$string['sendpaymentbutton'] = 'Enviar Pagamento';
$string['zipcode'] = 'C[odigo Postal';

?>
