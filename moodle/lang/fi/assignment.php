<?PHP // $Id: assignment.php,v 1.21.2.5 2006/02/06 09:59:43 moodler Exp $ 
      // assignment.php - created with Moodle 1.5.2 + (2005060222)


$string['allowresubmit'] = 'Salli uudelleenpalautus';
$string['assignmentdetails'] = 'Teht�v�n tiedot';
$string['assignmentmail'] = '$a->teacher on antanut sinulle palautetta teht�v�st� \'$a->assignment\'

Voit n�hd� sen osoitteessa:

$a->url';
$string['assignmentmailhtml'] = '$a->teacher on antanut sinulle palautetta teht�v�st� \'<i>$a->assignment</i>\'<br /><br />

Voit n�hd� sen osoitteessa:

<a href=\"$a->url\">Teht�v�n palautus</a>.';
$string['assignmentname'] = 'Teht�v�n nimi';
$string['assignmenttype'] = 'Teht�v�n tyyppi';
$string['availabledate'] = 'Tarjoaa';
$string['comment'] = 'Kommentoi';
$string['commentinline'] = 'Kommentoi ja muokkaa vastausta';
$string['configmaxbytes'] = 'Oletusasetus sivuston teht�vien maksimikoolle (alisteinen kurssien omille rajoituksille ja muille paikallisille asetuksille)';
$string['description'] = 'Kuvaus';
$string['duedate'] = 'Palautettava viimeist��n';
$string['duedateno'] = 'Ei palautusp�iv�m��r��';
$string['early'] = '$a ajoissa';
$string['editmysubmission'] = 'Muokkaa palautustani';
$string['emailteachermail'] = '$a->username on p�ivitt�nyt palautustaan teht�v��n \'$a->assignment\'.

Se on saatavilla t��ll�:

$a->url';
$string['emailteachermailhtml'] = '$a->username on p�ivitt�nyt palautustaan teht�v��n \'$a->assignment\'.</i><br /><br />
Se on <a href=\"$a->url\">saatavilla verkkosivulla</a>.';
$string['emailteachers'] = 'L�het� ilmoitukset opettajille s�hk�postilla';
$string['emptysubmission'] = 'Et ole palauttanut viel� mit��n.';
$string['existingfiledeleted'] = 'Tiedosto on poistettu: $a';
$string['failedupdatefeedback'] = 'Palautteen tallentaminen k�ytt�j�lle $a ep�onnistui';
$string['feedback'] = 'Palaute';
$string['feedbackfromteacher'] = 'Palautetta {$a}lta';
$string['feedbackupdated'] = 'Vastausten palautteet p�ivitetty $a oppilaalle';
$string['guestnoupload'] = 'Valitan, vieraat eiv�t saa l�hett�� tiedostoja palvelimelle';
$string['helpoffline'] = '<p>T�m� on hy�dyllist� kun teht�v� suoritetaan Moodlen ulkopuolella. Kyseess� saattaa olla teht�v� jossain muualla verkossa tai tapaaminen.</p>

<p>Oppilaat voivat n�hd� teht�v�n kuvailun, mutta eiv�t voi palauttaa tiedostoja tai muutakaan. Arvostelu tapahtuu normaalisti ja oppilaat saavat ilmoituksen arvosanoistaan.</p>';
$string['helponline'] = '<p>T�ss� teht�v�tyypiss� k�ytt�j�t muokkaavat valittua teksti� k�ytt�en normaaleja tekstink�sittelyty�kaluja. Opettajat voivat arvostella heid�t verkossa, ja jopa lis�t� kommenttejaan tai muuttaa t�it�.</p>
<p>(Jos olet perehtynyt Moodlen aikaisempiin versioihin, t�m� teht�v�tyyppi on samanlainen kuin aikaisempi Muistio-moduuli.';
$string['helpuploadsingle'] = '<p>T�m�n tyyppisess� teht�v�ss� kaikki osanottajat voivat palauttaa yhden tiedoston, joka voi olla mit� tahansa tyyppi�.</p>
<p>Se saattaa olla tekstidokumentti, kuva, zip-pakattu verkkosivu tai mit� tahansa pyyd�tkin heilt�.</p>';
$string['late'] = '$a my�h�ss�';
$string['maximumgrade'] = 'Arvosanan yl�raja';
$string['maximumsize'] = 'Maksimikoko';
$string['modulename'] = 'Teht�v�';
$string['modulenameplural'] = 'Teht�v�t';
$string['newsubmissions'] = 'Palautetut teht�v�t';
$string['noassignments'] = 'Ei viel� teht�vi�';
$string['noattempts'] = 'T�t� teht�v�� ei ole viel� koitettu ratkoa';
$string['notgradedyet'] = 'Ei viel� arvioitu';
$string['notsubmittedyet'] = 'Ei viel� palautettu';
$string['overwritewarning'] = 'Varoitus: uudelleen l�hett�minen KORVAA aiemman vastauksesi.';
$string['preventlate'] = 'Est� my�h�styneet palautukset';
$string['saveallfeedback'] = 'Tallenna palaute';
$string['submission'] = 'Palautus';
$string['submissionfeedback'] = 'Palaute teht�v�st�';
$string['submissions'] = 'Palautukset';
$string['submissionsaved'] = 'Muutokset tallennettu';
$string['submitassignment'] = 'Palauta teht�v�si k�ytt�en t�t� lomaketta';
$string['submitted'] = 'Palautettu';
$string['typeoffline'] = 'Offline-teht�v�';
$string['typeonline'] = 'Verkkoteksti';
$string['typeuploadsingle'] = 'L�het� yksi tiedosto';
$string['uploadbadname'] = 'Tiedostonimess� on tuntemattomia merkkej�. Tiedostoa ei voida l�hett��.';
$string['uploadedfiles'] = 'l�hetetyt tiedostot';
$string['uploaderror'] = 'Tiedoston tallentamisessa palvelimelle tapahtui virhe.';
$string['uploadfailnoupdate'] = 'Tiedosto saapui palvelimelle, mutta vastauksesi tallentamisessa tapahtui virhe.';
$string['uploadfiletoobig'] = 'Valitettavasti tiedosto, jota yritit l�hett��, on liian suuri (kokorajoitus on $a tavua).';
$string['uploadnofilefound'] = 'Tiedostoa ei l�ydy - oletko varma, ett� valitsit tiedoston l�hetett�v�ksi?';
$string['uploadnotregistered'] = '\'$a\' vastaanotettiin, mutta l�hetyst�si ei rekister�ity. ';
$string['uploadsuccess'] = '\'$a\' on vastaanotettu palvelimelle.';
$string['viewfeedback'] = 'Katso teht�vien arviointeja ja palautteita.';
$string['viewsubmissions'] = 'Katso palautettuja teht�vi�, joiden lukum��r� on $a';
$string['yoursubmission'] = 'Palautuksesi';

?>
