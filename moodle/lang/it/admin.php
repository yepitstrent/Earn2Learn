<?PHP // $Id: admin.php,v 1.8.2.5 2006/02/06 09:59:52 moodler Exp $ 
      // admin.php - created with Moodle 1.6 development (2005101200)


$string['adminseesallevents'] = 'Gli Amministratori  visualizzano tutti gli eventi';
$string['adminseesownevents'] = 'Gli Amministratori  sono come tutti gli altri utenti';
$string['backgroundcolour'] = 'Colore Trasparente';
$string['badwordsconfig'] = 'Inserire un elenco di parole censurate e separate da virgole';
$string['badwordsdefault'] = 'Se l\'elenco personalizzato � vuoto, verr� utilizzato l\'elenco standard.';
$string['badwordslist'] = 'Elenco personalizzato delle parole censurate';
$string['blockinstances'] = 'Istanze';
$string['blockmultiple'] = 'Multiplo';
$string['cachetext'] = 'Durata cache del testo';
$string['calendarsettings'] = 'Calendario';
$string['change'] = 'cambia';
$string['configallowcoursethemes'] = 'Se abilitato, sar� possibile impostare un tema personalizzato in ogni corso. Il tema del corso sovrascriver� ogni altra scelta (sito, utenti, sessioni di sistema).';
$string['configallowemailaddresses'] = 'Se si desidera restringere tutti i nuovi indirizzi e-mail ad un particolare dominio, farne un\'elenco qui, separato da spazi. Tutti gli altri dominii verranno rifiutati: <strong>Per esempio, miosito.it, unito.it</strong>';
$string['configallowobjectembed'] = 'Come misura di sicurezza standard, agli utenti normali non � permesso includere oggetti multimediali (come Flash) utilizzando esplicitamente i tag EMBED e OBJECT nei testi HTML (rimane la possibilit� per loro di utilizzare il filtro mediaplugins). Se si vuole permettere l\'utilizzo di questi tag allora abilitare questa opzione.';
$string['configallowunenroll'] = 'Se impostato su \"Si\", gli studenti saranno autorizzati a revocarsi autonomamente da un corso in qualunque momento. In caso contrario non verranno autorizzati a farlo, demandando a docenti e amministratori questa possibilit�.';
$string['configallowuserblockhiding'] = 'Si desidera permettere agli utenti di mostrare/nascondere i blocchi laterali di tutto il sito? <br>Questa caratteristica utilizza Javascript e i cookies per ricordare lo stato di ogni blocco, e influenza solo la vista personale dell\'utente.';
$string['configallowuserthemes'] = 'Se abilitato, ogni utente potr� ad impostare un proprio tema personale. I temi personali dell\'utente sovrascrivono i temi del sito. (ma non i temi di un corso).';
$string['configallusersaresitestudents'] = 'Ai fini delle attivit� poste sulla pagina principale del sito, tutti gli utenti devono essere considerati studenti? Se si risponde \"Si\" allora ogni account utente confermato sar� abilitato a partecipare come studente a queste attivit�. Se si risponde \"No\", allora solo gli utenti che sono anche studenti iscritti almeno ad un corso saranno abilitati a partecipare a queste attivit� presenti nella pagina principale. Solo gli amministratori e i docenti speciali assegnati potranno comportarsi come docenti per queste attivit� della pagina principale.';
$string['configautologinguests'] = 'Abilitare automaticamente i vistatori occasionali a visitare i corsi (aperti agli ospiti) con accesso Ospite?';
$string['configcachetext'] = 'Per siti molto ampi o siti che utilizzano filtri di testo, queste impostazioni possono davvero velocizzare molto la navigazione. Le copie dei testi saranno mantenute nella loro forma originaria per il tempo specificato qui. Impostazioni con valori di spazio molto ridotto potrebbero provocare un rallentamento generale, mentre Impostazioni con valori di spazio troppo ampii potrebbe portare a tempi troppo lunghi nel refresh dei testi principali (in caso di nuovi collegamenti, per esempio)';
$string['configclamactlikevirus'] = 'Tratta i files come virus';
$string['configclamdonothing'] = 'Tratta i files come OK';
$string['configclamfailureonupload'] = 'Se avete configurato Clam antivirus per esaminare i files trasferiti, ma la configurazione non � corretta o non riesce a funzionare per un certo motivo sconosciuto, come dovrebbe comportarsi?  Se scegliete \'Tratta i files come virus\', i files saranno spostati nell\'area di quarantena o cancellati. Se scegliete \'Tratta i files come OK\', i files verranno trasferiti nella directory di destinazione e trattati come normali.
In ogni caso, gli Amministratori verranno avvisati se Clam antivirus dovesse fallire.

Se scegliete \'Tratta i files come virus\' e per qualche motivo Clam antivirus dovesse fallire (solitamente perch� lo avete inserito in un pathtoclam non valido), TUTTI i files trasferiti saranno spostati nell\'area di quarantena o cancellati. Si consiglia di impostare questa variabile con molta attenzione!';
$string['configcountry'] = 'Se scegliete uno stato qui, questo verr� proposto di default. Per obbligare un utente a scegliere il proprio stato, lasciatelo in bianco. ';
$string['configdbsessions'] = 'Se attivata, questa opzione utilizzer� il database per memorizzare le informazioni sulle sessioni correnti. Ci� � particolarmente utile per siti molto grandi o con molto traffico o per siti costruiti su cluster di servers. Per la maggior parte dei siti questa impostazione dovrebbe probabilmente essere lasciata su disabled in modo da utilizzare il disco del server. Attenzione: cambiare questa impostazione provocher� il log-out dal sito di tutti gli utenti collegati, voi compresi.';
$string['configdebug'] = 'Attivando questa opzione, verr� incrementata la reportistica di errore di PHP, aumentando i messaggi di errore. Questa opzione � utile solo per gli sviluppatori.';
$string['configdefaultallowedmodules'] = 'Per i corsi che ricadono nella categoria sovrastante, quali moduli si vuole che vengano permessi <b>quando il corso � creato</b>?';
$string['configdefaultrequestedcategory'] = 'Categoria in cui mettere i corsi che sono stato richiesti, se vengono approvati.';
$string['configdeleteunconfirmed'] = 'Se state usando l\'autenticazione e-mail, questo parametro imposta il periodo in cui sar� accettata la risposta dagli utenti. Dopo questo periodo, gli utenti non confermati vengono cancellati.';
$string['configdenyemailaddresses'] = 'Per rifiutare indirizzi e-mail provenienti da domini particolari, inserirne il nome qui. Tutti gli altri indirizzi verranno accettati.';
$string['configdigestmailtime'] = 'Agli utenti che hanno scelto la modalit� \'invio e-mail come raccolta quotidiana\', verr� inviata quotidianamente la raccolte dei messaggi.  Questa impostazione regola l\'ora di invio della raccolta.(il cron attivo nell\'ora seguente a questa impostazione invier� i dati richiesti).';
$string['configdisplayloginfailures'] = 'Visualizza informazioni sul mancato login degli utenti selezionati.';
$string['configenablecourserequests'] = 'Questa impostazione permette a qualunque utente di richiedere la creazione di un corso.';
$string['configenablerssfeeds'] = 'Questa impostazione attiva l\'alimentatore RSS (RSS Feeds) nel sito. Per visualizzare i cambiamenti bisogner� attivare l\'alimentatore RSS anche nei moduli individuali: per farlo, andate in \'configurazione moduli\' nel pannello di Amministrazione.';
$string['configenablerssfeedsdisabled'] = 'Non � attiva poich� l\'alimentatore RSS � disabilitato in tutto il sito. Per attivarlo, andate in \'configura variabili\' nel pannello di Amministrazione.';
$string['configenablestats'] = 'Se qui viene scelto \'Si\'. All\'esecuzione del cron Moodle elaborer� i log e generer� alcune statistiche. La durata di questa operazione dipende dal traffico del vostro sito. Se viene abititata questa impostazione sarete in grado di visualizzare alcuni grafici interessanti su ogni corso, o su tutto il sito.';
$string['configerrorlevel'] = 'Scegliete l\'ammontare di messaggi di errore di PHP che si desidera visualizzare. \'Normale\' � solitamente l\'opzione migliore.';
$string['configextendedusernamechars'] = 'Attivate questa opzione per permettere agli studenti di utilizzare qualsiasi carattere nel loro nome utente (da notare che questo non influisce sui loro nomi attuali).
L\'impostazione predefinita limita l\'uso dei caratteri ai soli alfanumerici (esclude quindi caratteri speciali, caratteri accentati, ecc).';
$string['configfilterall'] = 'Filtra tutte le stringhe, incluse le intestazioni, titoli, barre di navigazione ecc.
Questo � particolarmente utile se si usa il filtro multilingua; altrimenti creer� soltanto traffico supplementare sul sito senza un guadagno apprezzabile. ';
$string['configfiltermatchoneperpage'] = 'Il filtro di creazione automatica dei collegamenti (auto-collegamento) generer� solo il collegamento alla prima occorrenza del testo che viene trovata in una pagina. Tutte le altre sono ignorate.';
$string['configfiltermatchonepertext'] = 'Il filtro di creazione automatica dei collegamenti (auto-collegamento) generer� solo il collegamento alla prima occorrenza del testo trovata in ogni elemento di testo (es. risorsa, blocco) della pagina. Tutti gli altri sono ignorati. Questa impostazione non viene considerata se l\'impostazione uno per pagina � <i>si</i>.';
$string['configfilteruploadedfiles'] = 'Attivando questa opzione, Moodle elaborer� tutti i file di testo e HTML mediante il filtro, prima di visualizzarli.';
$string['configforcelogin'] = 'Normalmente, la pagina principale del sito e la lista dei corsi (ma non i corsi) vengono visualizzate senza dover effettuare il login al sito. Se si desidera forzare i visitatori alla registrazione prima che sia possibile fare QUALUNQUE cosa sul sito, scegliere questa opzione.';
$string['configforceloginforprofiles'] = 'Attivando questa impostazione si forza il visitatore al login come utente reale (non come ospite) per poter visualizzare i profili di altri utenti. L\'opzione predefinita abilita questa possibilit�, in modo che anche i potenziali studenti possano leggere i profili degli docenti di ogni corso.
Da tenere presente che anche i motori di ricerca web potranno visualizzare i profili.';
$string['configframename'] = 'Se incorporate Moodle in un web frame, mettete il nome del frame qui. Altrimenti questo valore pu� rimanere su \'_top\' ';
$string['configfullnamedisplay'] = 'Definisce la modalit� di piena visualizzazione dei nomi. Per la maggior parte dei siti \'mono-linguistici\' la scelta pi� efficiente � quella predefinita \'nome+cognome\', ma si potrebbe per esempio voler nascondere i cognomi, oppure lasciar decidere alle impostazioni del pacchetto linguistico in uso. (alcune lingue hanno convenzioni differenti).';
$string['configgdversion'] = 'Indica quale versione della libreria grafica GD (GD library) � installata. La versione mostrata � quella che � stata riconosciuta automaticamente dal sistema. Non modificare questo valore fino a quando non sapete davvero cosa state facendo!';
$string['confightmleditor'] = 'Scegliete se permettere o meno l\'utilizzo dell\'editor HTML integrato. Anche se si sceglie di permetterlo, l\'utente lo visualizzer� solo se utilizza un web browser compatibile con esso. L\'utente pu� in ogni caso decidere di non utilizzarlo.';
$string['configidnumber'] = 'Questa opzione specifica se:
a) all\'utente non viene richiesto un numero ID in assoluto.
b) all\'utente viene richiesto un numero ID ma pu� lasciarlo in bianco.
c) all\'utente viene richiesto un numero ID e non pu� lasciarlo in bianco. Se attivato, il numero ID � viualizzato nel profilo degli utenti.';
$string['configintro'] = 'In questa pagina si possono specificare un numero di variabili di configurazione che aiutano Moodle a lavorare correttamente sul vostro server.
Non vi preoccupate troppo a riguardo, i valori predefiniti in genere svolgono bene il loro compito e potete sempre tornare su questa pagina in un secondo momento per cambiare queste impostazioni.';
$string['configintroadmin'] = 'In questa pagina si dovrebbe configurare l\'account dell\'Amministratore principale che avr� il controllo completo sul sito. Assicuratevi di fornire uno username e una password sicuri, cos� come un indirizzo E-mail valido.
Potrete creare altri account di tipo Amministratore pi� tardi.';
$string['configintrosite'] = 'Questa pagina vi permette di configurare la pagina principale e il nome di questo nuovo sito.
Potrete tornare in un secondo momento su questa pagina per modificare queste impostazioni, seguendo il collegamento \'Impostazioni del sito\' dalla Home Page del sito.Questa pagina ';
$string['configintrotimezones'] = 'Questa pagina cercher� nuove informazioni sulle impostazioni del fuso orario (incluse le impostazioni sul passaggio all\'ora legale) e aggiorner� il vostro database locale con queste informazioni.
Queste localit� verranno controllate, in ordine. $a Questa procedura � generalmente molto sicura e non pu� interrompere una normale installazione. Desiderate aggiornare le impostazioni dell\'ora locale?';
$string['configlang'] = 'Scegliete una lingua predefinita. Gli utenti potranno modificare pi� tardi queste impostazioni.';
$string['configlangcache'] = 'Cache del menu lingua. Permette di risparmiare memoria e potenza di calcolo. Se attivata, il menu impiegher� alcuni minuti per aggiornarsi nel caso vengano aggiunte o rimosse lingue.';
$string['configlangdir'] = 'La maggioranza delle lingue scrivono da destra verso sinistra, ma alcune, come l\'arabo e l\'ebraico, sono scritte da destra a sinistra.';
$string['configlanglist'] = 'Lasciate in bianco per consentire agli utenti di scegliere tra tutte le lingue dell\'installazione di Moodle. Comunque, si pu� abbreviare il menu delle lingue inserendo, separate da virgole, una lista dei codici delle lingue desiderate.
Per esempio: en, es_es, it, fr';
$string['configlangmenu'] = 'Scegliete se pubblicare o meno il menu lingua generico sulla Home Page, nella pagina di Login, ecc.
Questa scelta non influisce sulla possibilit� da parte dell\'utente di scegliere una lingua preferita all\'interno del suo profilo personale.';
$string['configlocale'] = 'Scegliete una data locale - Questa opzione avr� effetto sulla visualizzazione delle date. � necessario avere una data locale del server impostata sul sistema operativo del proprio computer. (Per esempio: it_IT).
Se non sapete quale scegliere, lasciate vuoto questo campo. ';
$string['configloginhttps'] = 'Se attivata, questa impostazione consente a Moodle di utilizzare connessioni sicure di tipo https soltanto per la pagina di login (fornendo una login sicura), tornando successivamente ad una normale connessione http per il resto della navigazione degli altri URL.<br>
PRUDENZA: questa impostazione RICHIEDE che https venga specificatamente attivato sul web server - Se non lo fosse VERRETE BLOCCATI AL DI FUORI DAL SITO!';
$string['configloglifetime'] = 'Questa impostazione specifica la durata di conservazione dei files di log riguardanti l\'attivit� degli utenti. I logs precedenti questa data verranno cancellati automaticamente.
La cosa migliore � conservarli il pi� a lungo possibile in caso di necessit� di recupero; ma se disponete di un server molto occupato o avete avuto problemi di performance generali, � meglio abbreviare tale durata impostando un valore pi� basso.';
$string['configlongtimenosee'] = 'Se gli studenti non si sono collegati per molto tempo, vengono automaticamente revocati dai corsi. Questo parametro ne specifica il limite di tempo.';
$string['configmaxbytes'] = 'Specifica il limite massimo dei file da trasferire sul sito. Questo valore dipende dalla impostazione della variabile \'upload_max_filesize\' in PHP e dalle impostazioni di \'LimitRequestBody\' in Apache.
In alternativa, la dimensione massima pu� essere scelta a livello dei corsi o dei moduli. ';
$string['configmaxeditingtime'] = 'Questo parametro specifica il tempo complessivo che gli utenti hanno a disposizione per modificare i loro messaggi sui forums, sul diario, per il feedback, ecc. Normalmente, 30 � un buon valore. ';
$string['configmessaging'] = 'Attivare il sistema di messaggistica interna?';
$string['configmymoodleredirect'] = 'Questa impostazione forza la ridirezione a /my all\'accesso per i non amministratori e sostituisce collegamento alla pagina principale del sito con /my';
$string['confignoreplyaddress'] = 'Le mail a volte sono spedite a nome di un utente (per esempio, i messaggi dei forum). L\'indirizzo mail qui specificato sar� utilizzato come l\'indirizzo \"Da\" cui proviene il messaggio,nei casi in cui il ricevente non � in grado di replicare direttamente all\'utente (per esempio, quando un utente decide di mantenere il suo indirizzo privato). ';
$string['confignotifyloginfailures'] = 'Se sono stati registrati accessi falliti, una mail di notifica pu� essere spedita. Chi deve ricevere queste notifiche? ';
$string['confignotifyloginthreshold'] = 'Se la notifica sugli accessi falliti � attiva, dopo quanti tentativi falliti per utente o per indirizzo IP la notifica deve essere inviata? ';
$string['configopentogoogle'] = 'Se abilitate questa impostazione, Google potr� entrare nel vostro sito come Ospite. Inoltre, chi arriver� al vostro sito tramite Google verr� automaticamente autenticato come Ospite. Nota che questa impostazione fornisce un accesso trasparente solo ai corsi che gi� permettono l\'accesso agli ospiti. ';
$string['configpathtoclam'] = 'Percorso a Clam antivirus. Probabilmente, sar� usr/bin/clamscan oppure /usr/bin/clamdscan.
Questo percorso consente a Clam di funzionare.';
$string['configpathtodu'] = 'Percorso a du. Probabilmente sar� usr/bin/du. Se questo campo viene definito, le pagine che mostrano il contenuto delle cartelle con molti file verranno elaborate pi� velocemente.';
$string['configproxyhost'] = 'Se questo <b>server</b> necessita di un proxy (ad esempio un firewall) per accedere a Internet, allora indicare qui il nome del server (hostname) e il numero della porta di accesso. In caso contrario, lasciate vuoto questo campo. ';
$string['configquarantinedir'] = 'Se desiderate che Clam antivirus sposti eventuali file infetti in una cartella di quarantena, inseritene il percorso qui. La cartella deve avere i permessi di scrittura da parte del server web. Se lasciate in bianco, o se configurate una directory inesistente o senza i permessi di scrittura necessari, i files infetti saranno cancellati. Non inserite slash di percorso.';
$string['configrequestedstudentname'] = 'Termine per \'studente\' da utilizzare nel corsi richiesti';
$string['configrequestedstudentsname'] = 'Termine per \'studenti\' da utilizzare nel corsi richiesti';
$string['configrequestedteachername'] = 'Termine per \'docente\' da utilizzare nel corsi richiesti';
$string['configrequestedteachersname'] = 'Termine per \'docenti\' da utilizzare nel corsi richiesti';
$string['configrestrictbydefault'] = 'I nuovi corsi che vengono creati nella categoria soprastante devono avere restrizioni sui loro moduli?';
$string['configrestrictmodulesfor'] = 'Quali corsi devono avere la <b>possibilit�</b> di disabilitare alcuni moduli?';
$string['configrunclamonupload'] = 'Attivare Clam antivirus sui file in trasferimento? Avrete bisogno di configurare correttamente il percorso nella variabile \'pathtoclam\' per farlo funzionare. (Clam � un antivirus gratuito che si pu� ottenere dal sito: http://www.clamav.net/)';
$string['configsectioninterface'] = 'Interfaccia';
$string['configsectionmail'] = 'Posta';
$string['configsectionmaintenance'] = 'Mantenimento';
$string['configsectionmisc'] = 'Miscellanea';
$string['configsectionoperatingsystem'] = 'Sistema Operativo';
$string['configsectionpermissions'] = 'Permessi';
$string['configsectionrequestedcourse'] = 'Richiesta corsi';
$string['configsectionsecurity'] = 'Sicurezza';
$string['configsectionstats'] = 'Statistiche';
$string['configsectionuser'] = 'Utente';
$string['configsecureforms'] = 'Moodle pu� utilizzare un livello aggiuntivo di sicurezza nell\'accettazione di dati provenienti da moduli web. Se attivata, la variabile HTTP_REFERER del browser � confrontata con l\'indirizzo del form attuale. In alcuni rari casi questo pu� causare problemi se l\'utente sta utilizzando un firewall (ad esempio Zonealarm) configurato per rimuovere HTTP_REFERER dal suo traffico web. Uno dei sintomi � rimanere \'bloccato\' su di un form. Se i vostri utenti dovessero avere problemi con la pagina di login (per esempio), potreste disabilitare questa impostazione, anche se questo pu� esporre il  sito ad attacchi con forzature di password. Se siete in dubbio, lasciate l\'impostazione su \'Si\'. ';
$string['configsessioncookie'] = 'Questa impostazione personalizza il nome del cookie usato per le sessioni di Moodle. Questa impostazione � opzionale ed � utile solo se pi� di una copia di Moodle viene eseguita sullo stesso sito web. ';
$string['configsessiontimeout'] = 'Se le persone loggate in questo sito sono inattive da molto tempo (senza caricare pagine) viene automaticamente terminata la loro sessione. Questa variabile specifica la durata della sessione.';
$string['configshowblocksonmodpages'] = 'Alcuni moduli supportano l\'inserimento di blocchi sulle loro pagine. Se l\'opzione viene attivata darete la possibilt� ai docenti di attivare i blocchi; in caso contrario, l\'opzione non verr� visualizzata.';
$string['configshowsiteparticipantslist'] = 'Tutti gli studenti e i docenti iscritti nel sito verranno elencati nella lista dei partecipanti. Chi � autorizzato a visualizzare questa lista?';
$string['configsitepolicy'] = 'Se si dispone di una politica del sito (modalit� di utilizzo) che tutti gli utenti devono leggere e sottoscrivere prima di utilizzare il sito, specificarne qui l\'indirizzo (URL), altrimenti lasciare in bianco. L\'URL pu� puntare ad un\'indirizzo qualsiasi, ma si consiglia di riferirlo ad un file presente sul sito. Per esempio, http://tuosito/file.php/1/policy.html';
$string['configslasharguments'] = 'I files (immagini, uploads ecc) vengono distribuiti mediante uno script che utilizza gli \'slash arguments\' (la seconda opzione a fianco). 
Questo metodo permette una migliore gestione dei files nella cache del browser o del proxy server.
Sfortunantamente alcuni server PHP non autorizzano questo metodo, perci� se avete problemi nel visualizzare files e/o immagini trasferiti (ad esempio le immagini del profilo utente), impostate la variabile con la prima opzione. ';
$string['configsmtphosts'] = 'Impostare il nome intero di uno o pi� servers locali SMTP che Moodle dovrebbe usare (per esempio \'mail.a.com\' oppure \'mail.a.com;mail.b.com\'). Se lasciato in bianco, Moodle utilizzer� il metodo di spedizione della posta predefinito in PHP. ';
$string['configsmtpuser'] = 'Se avete specificato un server SMTP che richiede l\'autenticazione, indicate qui l\'username e la password relativi.';
$string['configstatsfirstrun'] = 'Questa impostazione definisce, per la <b>prima elaborazione</b> delle statistiche dei log, da quanto indietro nel tempo devono essere elaborati i log. Se avete molto traffico e non avete un server dedicato, probabilmente non � una buona idea tornare troppo indietro nel tempo, l\'elaborazione potrebbe essere abbastanza lunga ed esosa in termini di risorse necessarie. (Notare che nell\'impostazione , 1 mese = 28 giorni. Nei grafici e nei rapporti generati, 1 mese = 1 mese del calendario.) ';
$string['configstatsmaxruntime'] = 'L\'elaborazione delle statistiche pu� essere abbastanza lunga. Utilizzate una combinazione di questo e del prossimo campo per definire quando farla partire e per quanto tempo.';
$string['configstatsruntimestart'] = 'A che ora il cron deve far <b>iniziare</b> l\'elaborazione delle statistiche?';
$string['configteacherassignteachers'] = 'Possono i docenti assegnare altri docenti ai corsi in cui insegnano? Se \'No\', gli unici che possono assegnare docenti sono i creatori di corsi e gli amministratori. ';
$string['configthemelist'] = 'Lasciate in bianco se volete permettere l\'utilizzo di un qualunque tema valido. Se desiderate invece abbreviare il menu dei temi, specificate un\'elenco di temi disponibili, separato da virgole. Per esempio: standard,orangewhite.';
$string['configtimezone'] = 'Qui potete impostare il fuso orario standard. Questo � l\'unico fuso orario standard per la visualizzazione delle date - ogni utente pu� scegliere la propria impostazione nel suo profilo. Impostando \"Server time\", si far� coincidere l\'ora con quella impostata nel sistema operativo del server, mentre impostandolo nel profilo utente corrisponder� a impostarlo a questo valore.';
$string['configunzip'] = 'Indica il percorso del programma Unzip di decompressione dati (Solo per Unix). Se specificato, questo programma si occuper� di spacchettare i files compressi lato server. Se lasciato in bianco, Moodle utilizzer� le proprie routine interne.';
$string['configvariables'] = 'Variabili';
$string['configwarning'] = 'Fate attenzione a modificare queste impostazioni, valori anomali potrebbero causare problemi.';
$string['configzip'] = 'Indica il percorso del programma Zip di compressione dati (Solo per Unix).
Se specificato, questo programma si occuper� di creare archivi di files compressi lato server. Se lasciato in bianco, Moodle utilizzer� le proprie routine interne.';
$string['confirmation'] = 'Conferma';
$string['cronwarning'] = 'Lo  <a href=\"cron.php\">script della routine cron.php</a> non � stato lanciato nelle ultime 24 ore.  <br />La <a href=\"../doc/?frame=install.html?=cron\">documentazione di installazione</a> vi spiegher� come fare ad automatizzare questo processo.';
$string['density'] = 'Densit�';
$string['edithelpdocs'] = 'Modifica documenti di Help';
$string['editstrings'] = 'Modifica stringhe';
$string['filterall'] = 'Filtra tutte le stringhe';
$string['filtermatchoneperpage'] = 'Filtra occorrenze una volta per pagina';
$string['filtermatchonepertext'] = 'Filtra occorrenze una volta per testo';
$string['filteruploadedfiles'] = 'Applica filtro sui file inviati';
$string['helpadminseesall'] = 'Gli amministratori visualizzano tutti gli eventi calendario o solo quelli a loro stessi collegati?';
$string['helpcalendarsettings'] = 'Configura vari aspetti in Moodle relativi al calendario, alle date, alle durate.';
$string['helpforcetimezone'] = 'Potete autorizzare gli utenti a selezionare individualmente il fuso orario, oppure impoore un fuso orario a tutti gli utenti.';
$string['helpsitemaintenance'] = 'Per aggiornamenti e altro lavoro.';
$string['helpstartofweek'] = 'Da quale giorno inizia la settimana nel calendario?';
$string['helpupcominglookahead'] = 'Valore predefinito della frequenza con cui il calendario cerca eventi imminenti. (valore espresso in giorni futuri).';
$string['helpupcomingmaxevents'] = 'Quanti (valore massimo) eventi imminenti vengono mostrati agli utenti?';
$string['helpweekenddays'] = 'Quali giorni della settimana devono essere considerati come festivi e mostrati con un colore diverso?';
$string['importtimezones'] = 'Aggiorna la lista completa dei fusi orari';
$string['importtimezonescount'] = '$a->conta entries importate da $a->source';
$string['importtimezonesfailed'] = 'Non � stata trovata sorgente! (brutte notizie)';
$string['incompatibleblocks'] = 'Blocchi non compatibili';
$string['latexpreamble'] = 'Preambolo LaTex';
$string['latexsettings'] = 'Impostazioni di elaborazione LaTex';
$string['mediapluginavi'] = 'Abilita filtro .avi';
$string['mediapluginmov'] = 'Abilita filtro .mov';
$string['mediapluginmp3'] = 'Abilita filtro .mp3';
$string['mediapluginmpg'] = 'Abilita filtro .mpg';
$string['mediapluginswf'] = 'Abilita filtro .swf';
$string['mediapluginwmv'] = 'Abilita filtro .wmv';
$string['optionalmaintenancemessage'] = 'Messaggio di mantenimento opzionale';
$string['pathconvert'] = 'Percorso per l\'eseguibile <i>convert</i>';
$string['pathdvips'] = 'Percorso per l\'eseguibile <i>dvips</i>';
$string['pathlatex'] = 'Percorso per l\'eseguibile <i>latex</i>';
$string['pleaseregister'] = 'Registrando il vostro sito questo pulsante verr� rimosso';
$string['sitemaintenance'] = 'Il sito � sottoposto a mantenimento e non � attualmente disponibile';
$string['sitemaintenancemode'] = 'Modalit� di mantenimento';
$string['sitemaintenanceoff'] = 'La modalit� di mantenimento � stata disattivata e il sito � nuovamente operativo.';
$string['sitemaintenanceon'] = 'Il sito � attualmente in modalit� di mantenimento (solo gli amministratori possono collegarsi o utilizzare il sito).';
$string['sitemaintenancewarning'] = 'Il sito � attualmente in modalit� di mantenimento (solo gli amministratori possono collegarsi o utilizzare il sito). Per tornare in modalit� normale, <a href=\"maintenance.php\">disattivare la modalit� di mantenimento</a>.';
$string['stickyblocks'] = 'Blocchi \"pinzati\"';
$string['stickyblockscourseview'] = 'Pagina del Corso';
$string['stickyblocksduplicatenotice'] = 'Se un blocco aggiunto qui esiste gi� in una particolare pagina, risulter� duplicato.<br />Solo i blocchi \"pinzati\" non saranno modificabili, il duplicato continuer� ad essere modificabile.';
$string['stickyblocksmymoodle'] = 'Moodle Mio';
$string['stickyblockspagetype'] = 'Tipo di pagina da configurare';
$string['tabselectedtofront'] = 'Nelle tabelle con etichetta, si deve posizionare davanti la riga con il tag corrente selezionato? ';
$string['therewereerrors'] = 'Si sono verificati errori nei vostri dati';
$string['timezoneforced'] = 'Questa viene forzata dall\'amministratore?';
$string['timezoneisforcedto'] = 'Forza tutti gli utenti all\'utilizzo';
$string['timezonenotforced'] = 'Gli utenti possono opzionare il loro fuso orario';
$string['upgradeforumread'] = 'Una nuova caratteristica � stata aggiunta a Moodle 1.5 per tracciare i messaggi letti/non letti di un forum.<br />Per utilizzarla, bisogna<a href=\"$a\">aggiornare le vostre tabelle</a>.';
$string['upgradeforumreadinfo'] = 'Una nuova caratteristica � stata aggiunta a Moodle 1.5 per tracciare i messaggi letti/non letti di un forum. Per utilizzarla, bisogna aggiornare le vostre tabelle con tutte le informazioni di tracciamento dei messaggi pre-esistenti. Il tempo di esecuzione dipende dalle dimensioni del vostro sito e potrebbe durare anche ore, sottoponendo il server ad un lavoro gravoso. E\' dunque consigliabile farlo in un momento tranquillo. In ogni caso, il sito continuer� a funzionare durante questa operazione e gli utenti non ne saranno interessati. Una volta lanciato, il processo non dovrebbe essere interrotto, lasciando aperta la finestra del browser. Se si fermasse il processo, chiudendo la finestra del browser, niente paura: si pu� sempre ricominciare.
br /><br />Si desidera iniziare adesso il processo di aggiornamento?';
$string['upgradelogs'] = 'Per la piena funzionalit�, i vostri vecchi log devono essere aggiornati. <a href=\"$a\">Ulteriori informazioni</a>';
$string['upgradelogsinfo'] = 'Alcune modifiche hanno cambiato il modo in cui vengono salvati alcuni log. Per poter visualizzare tutti i vecchi log su una base di per-attivit�, � necessario aggiornarli. In base al tuo sito questa operazione pu� richiedere molto tempo (es alcune ore) e pu� essere grosso lavoro per la base dati dei siti grandi. Una volta che l\'aggiornamento � iniziato devi lasciarlo terminare (mantenendo la finestra del browser aperta). Non preoccuparti - il tuo sito continuer� a lavorare correttamente mentre i log vengono aggiornati.<br /><br />Vuoi aggiornare i log ora?';
$string['upgradesure'] = 'I file di Moodle sono cambiati, e si per aggiornare automaticamente la versione del server alla seguente versione:
<p><b>$a</b></p>
<p>Una volta effettuato questo non � possibile tornare indietro.</p>
<p>Siete sicuri di voler aggiornare questo server a questa versione?</p>';
$string['upgradingdata'] = 'Dati di aggiornamento';
$string['upgradinglogs'] = 'Aggiornamento logs';

?>
