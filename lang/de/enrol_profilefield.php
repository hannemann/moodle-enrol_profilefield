<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Adds new instance of enrol_paypal to specified course
 * or edits current instance.
 *
 * @package    enrol_profilefield
 * @category   enrol
 * @copyright  2010 Valery Fremaux (valery.fremaux@gmail.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Privacy.
$string['privacy:metadata'] = "Das Profile Field Enroll Plugin speichert keine Daten von Benutzern";

// Capabilities.
$string['profilefield:config'] = 'Kann Profile Field Enroll Plugin konfigurieren';
$string['profilefield:enrol'] = 'Kann Nutzer durch Profile Field Enroll Plugin einschreiben';
$string['profilefield:manage'] = 'Kann eine Registrierung nach Profil hinzufügen';
$string['profilefield:unenrol'] = 'Kann eine Registrierung nach Profilfeld abmelden';
$string['profilefield:unenrolself'] = 'Kann sich von einer Profil-Feld Einschreibung abmelden';

$string['assignrole'] = 'Rolle zuweisen';
$string['auto_desc'] = 'Diese Gruppe wurde vom Profil-Feld Enroll-Plugin automatisch erstellt. Es wird gelöscht, wenn Sie das ProfileField Enroll-Plugin aus dem Kurs entfernen.';
$string['badprofile'] = 'Ihre Profil Informationen verhindern, dass Sie sich für diesen Kurs anmelden können. Wenn Sie jedoch einen guten Grund haben, hier zu sein, wenden Sie sich an einen Administrator, der Ihr Profil entsprechend ändert.';
$string['course'] = 'Kurs: {$a}';
$string['enrol/profilefield:unenrolself'] = 'Kann sich von einem Kurs abmelden';
$string['auto'] = 'Automatisch';
$string['auto_help'] = 'Wenn diese Option aktiviert ist, wird der Benutzer beim Anmelden für den Kurs eingeschrieben, ohne dass er den Kurs unbedingt besuchen muss.';
$string['enrolenddate'] = 'Enddatum';
$string['enrolenddate_help'] = 'Wenn diese Option aktiviert ist, können Benutzer nur bis zu diesem Datum registriert werden.';
$string['enrolenddaterror'] = 'Das Enddatum der Anmeldung darf nicht vor dem Startdatum liegen';
$string['enrolme'] = 'Melde mich für den Kurs an';
$string['enrolmentconfirmation'] = 'Sei willkommen. Mit Ihren Profil Informationen können Sie sich für diesen Kurs anmelden. Fortfahren?';
$string['enrolname'] = 'Registrierung basierend auf dem Benutzerprofil';
$string['enrolperiod'] = 'Einschreibedauer';
$string['enrolperiod_desc'] = 'Standarddauer, für die die Registrierung gültig ist (in Sekunden). Wenn auf Null gesetzt, ist die Registrierungsdauer standardmäßig unbegrenzt.';
$string['enrolperiod_help'] = 'Die Gültigkeitsdauer der Registrierung beginnt mit dem Zeitpunkt der Registrierung des Benutzers. Wenn deaktiviert, ist die Registrierungsdauer unbegrenzt.';
$string['enrolstartdate'] = 'Startdatum';
$string['enrolstartdate_help'] = 'Wenn diese Option aktiviert ist, können Benutzer erst ab diesem Datum registriert werden.';
$string['emptyfield'] = 'Nein {$a}';
$string['groupon'] = 'Gruppieren nach';
$string['g_none'] = 'Keine Gruppierung, oder wählen...';
$string['g_auth'] = 'Authentifiziuerungsmethode';
$string['g_dept'] = 'Abteilung';
$string['g_inst'] = 'Institution';
$string['g_lang'] = 'Sprache';
$string['groupon_help'] = 'Dieses Registrierungs-Plugin kann Benutzer automatisch zu einer Gruppe hinzufügen, wenn sie auf der Grundlage eines Profil Feldes registriert werden.';
$string['grouppassword'] = 'Passwort um einer Gruppe beizutreten, falls bekannt.';
$string['newcourseenrol'] = 'Ein neuer Teilnehmer hat sich für den Kurs {$a} angemeldet';
$string['nonexistantprofilefielderror'] = 'Dieses Feld ist in Benutzerprofilerweiterungen nicht definiert';
$string['notificationtext'] = 'Benachrichtigungsvorlage';
$string['notificationtext_help'] = 'Der Inhalt der E-Mail kann hier unter Verwendung der Platzhalter &lt;%%USERNAME%%&gt;, &lt;%%COURSE%%&gt;, &lt;%%URL%%&gt; und &lt;%%TEACHER%%&gt; angelegt werden. Beachten Sie, dass alle mehrsprachigen Span-Tags auf der Grundlage der tatsächlichen Sprache des Empfängers verarbeitet werden.';
$string['notifymanagers'] = 'Manager benachrichtigen??';
$string['passwordinvalid'] = 'Passwort ist ungültig';
$string['pluginname'] = 'Registrierung basierend auf dem Benutzerprofil';
$string['pluginname_desc'] = 'Diese Methode ermöglicht die direkte Kursregistrierung, wenn für das Profilfeld des Benutzers der erwartete Wert festgelegt wurde';
$string['profilefield'] = 'Benutzerprofilfeld';
$string['profilefield_desc'] = 'Ein Zeiger auf ein benutzerdefiniertes Benutzerfeld';
$string['profilevalue'] = 'Erwarteter Wert';
$string['profilevalue_desc'] = '';
$string['status'] = 'Aktiviert';
$string['unenrolself'] = 'Vom Kurs "{$a}" abmelden?';
$string['unenrolselfconfirm'] = 'Wollen Sie sich wirklich vom Kurs "{$a}" abmelden?';

$string['defaultnotification'] = '
Hallo <%%TEACHER%%>,

der Nutzer <%%USERNAME%%> hast sich an deinem Kurs <%%COURSE%%> angemeldet. (Profil wert ok)

Du kannst sein Profil <a href="<%%URL%%>">hier</a> einsehen.
';
