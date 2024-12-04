<?php
//
// ZoneMinder web Finnish language file, $Date$, $Revision$
// Copyright (C) 2024 Sami Jouhki
//
// This program is free software; you can redistribute it and/or
// modify it under the terms of the GNU General Public License
// as published by the Free Software Foundation; either version 2
// of the License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with this program; if not, write to the Free Software
// Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
//

// Notes for Translators
// 0. Get some credit, put your name in the line above (optional)
// 1. When composing the language tokens in your language you should try and keep to roughly the
//   same length text if possible. Abbreviate where necessary as spacing is quite close in a number of places.
// 2. There are four types of string replacement
//   a) Simple replacements are words or short phrases that are static and used directly. This type of
//     replacement can be used 'as is'.
//   b) Complex replacements involve some dynamic element being included and so may require substitution
//     or changing into a different order. The token listed in this file will be passed through sprintf as
//     a formatting string. If the dynamic element is a number you will usually need to use a variable
//     replacement also as described below.
//   c) Variable replacements are used in conjunction with complex replacements and involve the generation
//     of a singular or plural noun depending on the number passed into the zmVlang function. See the 
//     the zmVlang section below for a further description of this.
//   d) Optional strings which can be used to replace the prompts and/or help text for the Options section
//     of the web interface. These are not listed below as they are quite large and held in the database
//     so that they can also be used by the zmconfig.pl script. However you can build up your own list
//     quite easily from the Config table in the database if necessary.
// 3. The tokens listed below are not used to build up phrases or sentences from single words. Therefore
//   you can safely assume that a single word token will only be used in that context.
// 4. In new language files, or if you are changing only a few words or phrases it makes sense from a 
//   maintenance point of view to include the original language file and override the old definitions rather
//   than copy all the language tokens across. To do this change the line below to whatever your base language
//   is and uncomment it.
// require_once( 'zm_lang_en_gb.php' );

// You may need to change the character set here, if your web server does not already
// do this by default, uncomment this if required.
//
// Example
// header( "Content-Type: text/html; charset=iso-8859-1" );

// You may need to change your locale here if your default one is incorrect for the
// language described in this file, or if you have multiple languages supported.
// If you do need to change your locale, be aware that the format of this function
// is subtlely different in versions of PHP before and after 4.3.0, see
// http://uk2.php.net/manual/en/function.setlocale.php for details.
// Also be aware that changing the whole locale may affect some floating point or decimal 
// arithmetic in the database, if this is the case change only the individual locale areas
// that don't affect this rather than all at once. See the examples below.
// Finally, depending on your setup, PHP may not enjoy have multiple locales in a shared 
// threaded environment, if you get funny errors it may be this.
//
// Examples
// setlocale( 'LC_ALL', 'fi_FI' ); All locale settings pre-4.3.0
// setlocale( LC_ALL, 'fi_FI' ); All locale settings 4.3.0 and after
// setlocale( LC_CTYPE, 'fi_FI' ); Character class settings 4.3.0 and after
// setlocale( LC_TIME, 'fi_FI' ); Date and time formatting 4.3.0 and after

// Simple String Replacements
$SLANG = array(
    '24BitColour'          => '24 bit väri',
    '32BitColour'          => '32 bit väri',
    '8BitGrey'             => '8 bit harmaasävy',
    'Action'               => 'Toiminto',
    'Actual'               => 'Todellinen',
    'AddNewControl'        => 'Lisää uusi ohjaus',
    'AddNewMonitor'        => 'Lisää uusi valvoja',
    'AddNewServer'         => 'Lisää uusi palvelin',
    'AddNewStorage'        => 'Lisää uusi tallennus',
    'AddNewUser'           => 'Lisää uusi käyttäjä',
    'AddNewZone'           => 'Lisää uusi vyöhyke',
    'Alarm'                => 'Hälytys',
    'AlarmBrFrames'        => 'Hälytys<br/>kehykset',
    'AlarmFrame'           => 'Hälytyskehys',
    'AlarmFrameCount'      => 'Hälytyskehyksien määrä',
    'AlarmLimits'          => 'Hälytysrajat',
    'AlarmMaximumFPS'      => 'Max. FPS hälytykselle',
    'AlarmPx'              => 'Hälytyspisteet',
    'AlarmRGBUnset'        => 'Sinun on asetettava RGB-hälytysväri',
    'AlarmRefImageBlendPct'=> 'Hälytyksen viitekuvan sekoitus %',
    'Alert'                => 'Hälytys',
    'All'                  => 'Kaikki',
    'AnalysisFPS'          => 'Analyysi FPS',
    'AnalysisUpdateDelay'  => 'Analyysin päivityksen viive',
    'Apply'                => 'Käytä',
    'ApplyingStateChange'  => 'Soveltaa tilan muutosta',
    'ArchArchived'         => 'Vain arkistoidut',
    'ArchUnarchived'       => 'Vain arkistoimattomat',
    'Archive'              => 'Arkisto',
    'Archived'             => 'Arkistoitu',
    'Area'                 => 'Alue',
    'AreaUnits'            => 'Alue (px/%)',
    'AttrAlarmFrames'      => 'Hälytyskehykset',
    'AttrArchiveStatus'    => 'Arkistotila',
    'AttrAvgScore'         => 'Keskiarvo',
    'AttrCause'            => 'Syy',
    'AttrDiskBlocks'       => 'Levyn lohkot',
    'AttrDiskPercent'      => 'Levyn prosentti',
    'AttrDiskSpace'        => 'Levytila',
    'AttrDuration'         => 'Kesto',
    'AttrEndDate'          => 'Lopetuspäivä',
    'AttrEndDateTime'      => 'Lopetuspäivä/aika',
    'AttrEndTime'          => 'Lopetusaika',
    'AttrEndWeekday'       => 'Lopetuspäivä',
    'AttrFilterServer'     => 'Suodatinpalvelin',
    'AttrFrames'           => 'Kehykset',
    'AttrId'               => 'Id',
    'AttrMaxScore'         => 'Max. tulos',
    'AttrMonitorId'        => 'Valvojan id',
    'AttrMonitorName'      => 'Valvojan nimi',
    'AttrMonitorServer'    => 'Valvontapalvelin',
    'AttrName'             => 'Nimi',
    'AttrNotes'            => 'Muistiinpanot',
    'AttrStartDate'        => 'Aloituspäivä',
    'AttrStartDateTime'    => 'Aloituspäivä/aika',
    'AttrStartTime'        => 'Aloitusaika',
    'AttrStartWeekday'     => 'Aloituspäivä',
    'AttrStateId'          => 'Käyttötila',
    'AttrStorageArea'      => 'Tallennusalue',
    'AttrStorageServer'    => 'Tallennuspalvelin',
    'AttrSystemLoad'       => 'Järjestelmän kuormitus',
    'AttrTotalScore'       => 'Kokonaistulos',
    'Auto'                 => 'Automaattinen',
    'AutoStopTimeout'      => 'Automaattinen pysäytyksen aikakatkaisu',
    'Available'            => 'Saatavilla',
    'AvgBrScore'           => 'Keskiarvo<br/>arvosana',
    'Background'           => 'Tausta',
    'BackgroundFilter'     => 'Suodata taustalla',
    'BadAlarmFrameCount'   => 'Hälytyskehysten määrän tulee olla kokonaisluku, vähintään 1',
    'BadAlarmMaxFPS'       => 'Hälytys FPS:n tulee olla positiivinen kokonaisluku tai liukuluku',
    'BadAnalysisFPS'       => 'Analyysi FPS:n tulee olla positiivinen kokonaisluku tai liukuluku',
    'BadAnalysisUpdateDelay'=> 'Analyysin päivityksen viiveen tulee olla nolla tai suurempi kokonaisluku',
    'BadChannel'           => 'Kanavan tulee olla kokonaisluku, nolla tai suurempi',
    'BadColours'           => 'Kohdevärin tulee olla kelvollinen arvo',
    'BadDevice'            => 'Laitteen tulee olla kelvollinen arvo',
    'BadFPSReportInterval' => 'FPS-raportin välin tulee olla nolla tai suurempi kokonaisluku',
    'BadFormat'            => 'Muodon tulee olla kokonaisluku, nolla tai suurempi',
    'BadFrameSkip'         => 'Kehyksen ohituksen tulee olla nolla tai suurempi kokonaisluku',
    'BadHeight'            => 'Korkeuden tulee olla kelvollinen arvo',
    'BadHost'              => 'Tämä kenttä tulee sisältää kelvollisen IP-osoitteen tai verkkotunnuksen, älä sisällytä http://',
    'BadImageBufferCount'  => 'Kuvan puskurointimäärän tulee olla vähintään 2 tai suurempi kokonaisluku',
    'BadLabelX'            => 'X-koordinaatin etiketin tulee olla nolla tai suurempi kokonaisluku',
    'BadLabelY'            => 'Y-koordinaatin etiketin tulee olla nolla tai suurempi kokonaisluku',
    'BadMaxFPS'            => 'Max. FPS:n tulee olla positiivinen kokonaisluku tai liukuluku',
    'BadMotionFrameSkip'   => 'Liikkeen kehyksen ohituksen tulee olla nolla tai suurempi kokonaisluku',
    'BadNameChars'         => 'Nimi voi sisältää vain aakkosnumeerisia merkkejä, välilyöntejä, tavuviivoja ja alaviivoja',
    'BadPalette'           => 'Paletin tulee olla kelvollinen arvo',
    'BadPath'              => 'Polun tulee sisältää kelvollinen arvo',
    'BadPort'              => 'Portin tulee sisältää kelvollinen numero',
    'BadPostEventCount'    => 'Jälkitapahtuman määrän tulee olla nolla tai suurempi kokonaisluku',
    'BadPreEventCount'     => 'Ennen tapahtumaa -määrän tulee olla nolla tai suurempi kokonaisluku, ja pienempi kuin kuvan puskurointimäärä',
    'BadRefBlendPerc'      => 'Viitemäärän sekoitusprosentin tulee olla positiivinen kokonaisluku',
    'BadSectionLength'     => 'Osion pituuden tulee olla vähintään 30 tai suurempi kokonaisluku',
    'BadSignalCheckColour' => 'Signaalin tarkistuksen värin tulee olla kelvollinen RGB-värijono',
    'BadSourceType'        => 'Lähdetyyppi "Websivusto" vaatii, että toiminto on asetettu "Valvonta"',
    'BadStreamReplayBuffer'=> 'Suoratoiston toistopuskuroinnin tulee olla nolla tai suurempi kokonaisluku',
    'BadWarmupCount'       => 'Lämmittelyn kehyksen tulee olla nolla tai suurempi kokonaisluku',
    'BadWebColour'         => 'Verkkovärin tulee olla kelvollinen verkkovärijono',
    'BadWebSitePath'       => 'Syötä täydellinen verkkosivuston URL-osoite, mukaan lukien http:// tai https:// etuliite.',
    'BadWidth'             => 'Leveyden tulee olla kelvollinen arvo',
    'Bandwidth'            => 'Kaistanleveys',
    'BandwidthHead'        => 'Kaistanleveys',
    'BlobPx'               => 'Blob Px',
    'BlobSizes'            => 'Blob-koko',
    'Blobs'                => 'Blobs',
    'Brightness'           => 'Kirkkaus',
    'Buffer'               => 'Puskuri',
    'Buffers'              => 'Puskurit',
    'CSSDescription'       => 'Vaihda oletusarvoinen CSS tälle tietokoneelle',
    'CanAutoFocus'         => 'Sisältää automaattitarkennuksen',
    'CanAutoGain'          => 'Sisältää automaattivahvistuksen',
    'CanAutoIris'          => 'Sisältää automaatti-iris',
    'CanAutoWhite'         => 'Sisältää automaattivalkotasapainon',
    'CanAutoZoom'          => 'Sisältää automaattizoomin',
    'CanFocus'             => 'Sisältää tarkennuksen',
    'CanFocusAbs'          => 'Sisältää absoluuttisen tarkennuksen',
    'CanFocusCon'          => 'Sisältää jatkuvan tarkennuksen',
    'CanFocusRel'          => 'Sisältää suhteellisen tarkennuksen',
    'CanGain'              => 'Sisältää vahvistuksen',
    'CanGainAbs'           => 'Sisältää absoluuttisen vahvistuksen',
    'CanGainCon'           => 'Sisältää jatkuvan vahvistuksen',
    'CanGainRel'           => 'Sisältää suhteellisen vahvistuksen',
    'CanIris'              => 'Sisältää iriksen',
    'CanIrisAbs'           => 'Sisältää absoluuttisen iriksen',
    'CanIrisCon'           => 'Sisältää jatkuvan iriksen',
    'CanIrisRel'           => 'Sisältää suhteellisen iriksen',
    'CanMove'              => 'Sisältää liikkeen',
    'CanMoveAbs'           => 'Sisältää absoluuttisen liikkeen',
    'CanMoveCon'           => 'Sisältää jatkuvan liikkeen',
    'CanMoveDiag'          => 'Sisältää diagonaalisen liikkeen',
    'CanMoveMap'           => 'Sisältää kartoituksen',
    'CanMoveRel'           => 'Sisältää suhteellisen liikkeen',
    'CanPan'               => 'Sisältää panoraaman',
    'CanReset'             => 'Sisältää palautuksen',
    'CanReboot'            => 'Sisältää uudelleenkäynnistyksen',
    'CanSetPresets'        => 'Sisältää esiasetukset',
    'CanSleep'             => 'Sisältää lepotilan',
    'CanTilt'              => 'Sisältää kallistuksen',
    'CanWake'              => 'Sisältää herätyksen',
    'CanWhite'             => 'Sisältää valkotasapainon',
    'CanWhiteAbs'          => 'Sisältää absoluuttisen valkotasapainon',
    'CanWhiteBal'          => 'Sisältää valkotasapainon',
    'CanWhiteCon'          => 'Sisältää jatkuvan valkotasapainon',
    'CanWhiteRel'          => 'Sisältää suhteellisen valkotasapainon',
    'CanZoom'              => 'Sisältää zoomin',
    'CanZoomAbs'           => 'Sisältää absoluuttisen zoomin',
    'CanZoomCon'           => 'Sisältää jatkuvan zoomin',
    'CanZoomRel'           => 'Sisältää suhteellisen zoomin',
    'Cancel'               => 'Peruuta',
    'CancelForcedAlarm'    => 'Peruuta pakotettu hälytys',
    'CaptureHeight'        => 'Kaappauskorkeus',
    'CaptureMethod'        => 'Kaappaustapa',
    'CapturePalette'       => 'Kaappauspaletti',
    'CaptureResolution'    => 'Kaappausresoluutio',
    'CaptureWidth'         => 'Kaappausleveys',
    'Cause'                => 'Syy',
    'CheckMethod'          => 'Hälytyksen tarkistusmenetelmä',
    'ChooseDetectedCamera' => 'Valitse havaittu kamera',
    'ChooseFilter'         => 'Valitse suodatin',
    'ChooseLogFormat'      => 'Valitse lokin muoto',
    'ChooseLogSelection'   => 'Valitse lokivalinta',
    'ChoosePreset'         => 'Valitse esiasetus',
    'Clear'                => 'Tyhjennä',
    'CloneMonitor'         => 'Kloonaa',
    'Close'                => 'Sulje',
    'Colour'               => 'Väri',
    'Command'              => 'Komento',
    'Component'            => 'Komponentti',
    'ConcurrentFilter'     => 'Suorita suodatin samanaikaisesti',
    'Config'               => 'Määritä',
    'ConfiguredFor'        => 'Määritetty',
    'ConfirmDeleteEvents'  => 'Haluatko varmasti poistaa valitut tapahtumat?',
    'ConfirmPassword'      => 'Vahvista salasana',
    'ConjAnd'              => 'ja',
    'ConjOr'               => 'tai',
    'Console'              => 'Konsoli',
    'ContactAdmin'         => 'Ota yhteyttä järjestelmänvalvojaan yksityiskohtia varten.',
    'Continue'             => 'Jatka',
    'Contrast'             => 'Kontrasti',
    'Control'              => 'Ohjaus',
    'ControlAddress'       => 'Ohjausosoite',
    'ControlCap' 					 => 'Ohjauskyky',
	 	'ControlCaps'          => 'Ohjauskyvyt',
    'ControlDevice'        => 'Ohjauslaite',
    'ControlType'          => 'Ohjaustyyppi',
    'Controllable'         => 'Ohjattavissa',
    'Current'              => 'Nykyinen',
    'Cycle'                => 'Jakso',
    'CycleWatch'           => 'Jakson tarkkailu',
    'DateTime'             => 'Päivämäärä/Aika',
    'Day'                  => 'Päivä',
    'Debug'                => 'Virheenjäljitys',
    'DefaultRate'          => 'Oletusnopeus',
    'DefaultScale'         => 'Oletusasteikko',
    'DefaultView'          => 'Oletusnäkymä',
    'Deinterlacing'        => 'Lomituksen poisto',
    'Delay'                => 'Viive',
    'Delete'               => 'Poista',
    'DeleteAndNext'        => 'Poista & Seuraava',
    'DeleteAndPrev'        => 'Poista & Edellinen',
    'DeleteSavedFilter'    => 'Poista tallennetut suodattimet',
    'Description'          => 'Kuvaus',
    'DetectedCameras'      => 'Havaitut kamerat',
    'DetectedProfiles'     => 'Havaitut profiilit',
    'Device'               => 'Laite',
    'DeviceChannel'        => 'Laitteen kanava',
    'DeviceFormat'         => 'Laitteen muoto',
    'DeviceNumber'         => 'Laitenumero',
    'DevicePath'           => 'Laitteen polku',
    'Devices'              => 'Laitteet',
    'Dimensions'           => 'Mitat',
    'DisableAlarms'        => 'Poista hälytykset käytöstä',
    'Disk'                 => 'Levy',
    'Display'              => 'Näyttö',
    'Displaying'           => 'Näyttää',
    'DoNativeMotionDetection'=> 'Tee natiivi liikkeentunnistus',
    'Donate'               => 'Ole hyvä ja lahjoita',
    'DonateAlready'        => 'Ei, olen jo lahjoittanut',
    'DonateEnticement'     => 'Olet käyttänyt ZoneMinderiä jo jonkin aikaa ja toivottavasti olet huomannut, että se toimii hyvin kotona tai yrityksessäsi. Vaikka ZoneMinder on, ja tulee olemaan, ilmainen ohjelmisto ja avoin lähdekoodi, se maksaa rahaa kehittää ja ylläpitää. Jos haluat auttaa tulevassa kehityksessä ja uusissa ominaisuuksissa, ole hyvä ja lahjoita. Lahjoitukset ovat tietysti vapaaehtoisia, mutta erittäin arvostettuja ja voit lahjoittaa juuri sen verran kuin haluat.<br><br>Jos haluat antaa lahjoituksen, valitse alla tai käy osoitteessa https://zoneminder.com/donate/.<br><br>Kiitos, että käytät ZoneMinderiä, älä unohda vierailla foorumeilla ZoneMinder.comissa saadaksesi tukea ja ehdotuksia siitä, kuinka saada ZoneMinder toimimaan vielä paremmin.',
    'DonateRemindDay'      => 'Ei vielä, muistuta 1 päivän päästä',
    'DonateRemindHour'     => 'Ei vielä, muistuta 1 tunnin päästä',
    'DonateRemindMonth'    => 'Ei vielä, muistuta 1 kuukauden päästä',
    'DonateRemindNever'    => 'Ei, en halua lahjoittaa, älä muistuta enää',
    'DonateRemindWeek'     => 'Ei vielä, muistuta 1 viikon päästä',
    'DonateYes'            => 'Kyllä, haluan lahjoittaa nyt',
    'Download'             => 'Lataa',
    'DownloadVideo'        => 'Lataa video',
    'DuplicateMonitorName' => 'Kaksoiskäyttäjänimi',
    'Duration'             => 'Kesto',
    'Edit'                 => 'Muokkaa',
    'EditLayout'           => 'Muokkaa asettelua',
    'Email'                => 'Sähköposti',
    'EnableAlarms'         => 'Ota hälytykset käyttöön',
    'Enabled'              => 'Käytössä',
    'EnterNewFilterName'   => 'Anna uuden suodattimen nimi',
    'Error'                => 'Virhe',
    'ErrorBrackets'        => 'Virhe, tarkista, että vasen ja oikea hakasulku ovat samat',
    'ErrorValidValue'      => 'Virhe, tarkista, että kaikilla parametreilla on kelvollinen arvo',
    'Etc'                  => 'jne',
    'Event'                => 'Tapahtuma',
    'EventFilter'          => 'Tapahtumasuodatin',
    'EventId'              => 'Tapahtuma ID',
    'EventName'            => 'Tapahtuman nimi',
    'EventPrefix'          => 'Tapahtuman etuliite',
    'Events'               => 'Tapahtumat',
    'Exclude'              => 'Pois sulkea',
    'Execute'              => 'Suorita',
    'Exif'                 => 'Upota EXIF-tiedot kuvaan',
    'Export'               => 'Vie',
    'ExportDetails'        => 'Vie tapahtuman tiedot',
    'ExportFailed'         => 'Vienti epäonnistui',
    'ExportFormat'         => 'Vientimuoto',
    'ExportFormatTar'      => 'Tar',
    'ExportFormatZip'      => 'Zip',
    'ExportFrames'         => 'Vie kehystiedot',
    'ExportImageFiles'     => 'Vie kuvatiedostot',
    'ExportLog'            => 'Vie loki',
    'ExportMiscFiles'      => 'Vie muut tiedostot (jos on)',
    'ExportOptions'        => 'Vientiasetukset',
    'ExportSucceeded'      => 'Vienti onnistui',
    'ExportVideoFiles'     => 'Vie videotiedostot (jos on)',
    'Exporting'            => 'Viedään',
    'FPS'                  => 'fps',
    'FPSReportInterval'    => 'FPS-raportointiväli',
    'FTP'                  => 'FTP',
    'Far'                  => 'Kaukana',
    'FastForward'          => 'Nopea eteenpäin',
    'Feed'                 => 'Syöttö',
    'Ffmpeg'               => 'Ffmpeg',
    'File'                 => 'Tiedosto',
    'Filter'               => 'Suodatin',
    'FilterArchiveEvents'  => 'Arkistoi kaikki osumat',
    'FilterDeleteEvents'   => 'Poista kaikki osumat',
    'FilterEmailEvents'    => 'Lähetä sähköposti kaikista osumista',
    'FilterExecuteEvents'  => 'Suorita komento kaikista osumista',
    'FilterLog'            => 'Suodatinloki',
    'FilterMessageEvents'  => 'Ilmoita kaikista osumista',
    'FilterMoveEvents'     => 'Siirrä kaikki osumat',
    'FilterPx'             => 'Suodatin Px',
    'FilterUnset'          => 'Sinun on määritettävä suodattimen leveys ja korkeus',
    'FilterUpdateDiskSpace'=> 'Päivitä käytetty levytila',
    'FilterUploadEvents'   => 'Lataa kaikki osumat',
    'FilterVideoEvents'    => 'Luo video kaikista osumista',
    'Filters'              => 'Suodattimet',
    'First'                => 'Ensimmäinen',
    'FlippedHori'          => 'Käännetty vaakasuoraan',
    'FlippedVert'          => 'Käännetty pystysuoraan',
    'FnMocord'             => 'Mocord',
    'FnModect'             => 'Modect',
    'FnMonitor'            => 'Monitori',
    'FnNodect'             => 'Nodect',
    'FnNone'               => 'Ei mitään',
    'FnRecord'             => 'Tallenna',
    'Focus'                => 'Tarkennus',
    'ForceAlarm'           => 'Pakota hälytys',
    'Format'               => 'Muoto',
    'Frame'                => 'Kehys',
    'FrameId'              => 'Kehys id',
    'FrameRate'            => 'Kehysnopeus',
    'FrameSkip'            => 'Ohita kehys',
    'Frames'               => 'Kehykset',
    'Func'                 => 'Toiminto',
    'Function'             => 'Toiminto',
    'Gain'                 => 'Vahvistus',
    'General'              => 'Yleinen',
    'GenerateDownload'     => 'Luo lataus',
    'GenerateVideo'        => 'Luo video',
    'GeneratingVideo'      => 'Luodaan videota',
    'GoToZoneMinder'       => 'Siirry ZoneMinder.com:iin',
    'Grey'                 => 'Harmaa',
    'Group'                => 'Ryhmä',
    'Groups'               => 'Ryhmät',
    'HasFocusSpeed'        => 'On tarkennusnopeus',
    'HasGainSpeed'         => 'On vahvistusnopeus',
    'HasHomePreset'        => 'On kotiasetus',
    'HasIrisSpeed'         => 'On iirisnopeus',
    'HasPanSpeed'          => 'On panorointinopeus',
    'HasPresets'           => 'On esiasetukset',
    'HasTiltSpeed'         => 'On kallistusnopeus',
    'HasTurboPan'          => 'On turbopanorointi',
    'HasTurboTilt'         => 'On turbotilt',
    'HasWhiteSpeed'        => 'On valkotasapainon nopeus',
    'HasZoomSpeed'         => 'On zoomauksen nopeus',
    'High'                 => 'Korkea',
    'HighBW'               => 'Korkea kaistanleveys',
    'Home'                 => 'Koti',
    'Hostname'             => 'Isäntänimi',
    'Hour'                 => 'Tunti',
    'Hue'                  => 'Sävy',
    'Id'                   => 'id',
    'Idle'                 => 'Lepotila',
    'Ignore'               => 'Ohita',
    'Image'                => 'Kuva',
    'ImageBufferSize'      => 'Kuvan puskuri (kehykset)',
    'Images'               => 'Kuvat',
    'In'                   => 'Sisällä',
    'Include'              => 'Sisällytä',
    'Inverted'             => 'Käännetty',
    'Iris'                 => 'Iiris',
    'KeyString'            => 'Avainmerkkijono',
    'Label'                => 'Etiketti',
    'Language'             => 'Kieli',
    'Last'                 => 'Viimeinen',
    'Layout'               => 'Asettelu',
    'Level'                => 'Taso',
    'Libvlc'               => 'Libvlc',
    'LimitResultsPost'     => 'tulokset;',
    'LimitResultsPre'      => 'Rajoita ensimmäiseen', // This is used at the beginning of the phrase 'Limit to first N results only'
    'Line'                 => 'Viiva',
    'LinkedMonitors'       => 'Linkitetyt näytöt',
    'List'                 => 'Lista',
  	'ListMatches'          => 'Listaa osumat',
    'Load'                 => 'Kuormitus',
    'Local'                => 'Paikallinen',
    'Log'                  => 'Loki',
    'LoggedInAs'           => 'Kirjautunut käyttäjänä',
    'Logging'              => 'Kirjautuminen',
    'LoggingIn'            => 'Kirjautuu sisään',
    'Login'                => 'Kirjaudu sisään',
    'Logout'               => 'Kirjaudu ulos',
    'Logs'                 => 'Lokit',
    'Low'                  => 'Matala',
    'LowBW'                => 'Matala kaistanleveys',
    'Main'                 => 'Päävalikko',
    'Man'                  => 'Mies',
    'Manual'               => 'Manuaalinen',
    'Mark'                 => 'Merkitse',
    'Max'                  => 'Maksimi',
    'MaxBandwidth'         => 'Maksimi kaistanleveys',
    'MaxBrScore'           => 'Maks.<br/>Pisteet',
    'MaxFocusRange'        => 'Maksimi tarkennusalue',
    'MaxFocusSpeed'        => 'Maksimi tarkennusnopeus',
    'MaxFocusStep'         => 'Maksimi tarkennusaskel',
    'MaxGainRange'         => 'Maksimi vahvistusalue',
    'MaxGainSpeed'         => 'Maksimi vahvistusnopeus',
    'MaxGainStep'          => 'Maksimi vahvistusaskel',
    'MaxIrisRange'         => 'Maksimi iirisalue',
    'MaxIrisSpeed'         => 'Maksimi iirisnopeus',
    'MaxIrisStep'          => 'Maksimi iirisaskel',
    'MaxPanRange'          => 'Maksimi panorointi-alue',
    'MaxPanSpeed'          => 'Maksimi panorointinopeus',
    'MaxPanStep'           => 'Maksimi panorointiaskel',
    'MaxTiltRange'         => 'Maksimi kallistusalue',
    'MaxTiltSpeed'         => 'Maksimi kallistusnopeus',
    'MaxTiltStep'          => 'Maksimi kallistusaskel',
    'MaxWhiteRange'        => 'Maksimi valkotasapainoalue',
    'MaxWhiteSpeed'        => 'Maksimi valkotasapainonopeus',
    'MaxWhiteStep'         => 'Maksimi valkotasapainoaskel',
    'MaxZoomRange'         => 'Maksimi zoomausalue',
    'MaxZoomSpeed'         => 'Maksimi zoomausnopeus',
    'MaxZoomStep'          => 'Maksimi zoomausaskel',
    'MaximumFPS'           => 'Maksimi kuvat/s',
    'Medium'               => 'Keskitaso',
    'MediumBW'             => 'Keskikaistanleveys',
    'Message'              => 'Viesti', 
    'MinAlarmAreaLtMax'    => 'Pienimmän hälytysalueen tulee olla pienempi kuin suurin',
    'MinAlarmAreaUnset'    => 'Sinun on asetettava pienin määrä hälytyspikseleitä',
    'MinBlobAreaLtMax'     => 'Pienimmän kohdealueen tulee olla pienempi kuin suurin',
    'MinBlobAreaUnset'     => 'Sinun on asetettava pienin määrä kohdepikseleitä',
    'MinBlobLtMinFilter'   => 'Pienimmän kohdealueen tulee olla pienempi tai yhtä suuri kuin pienin suodatusalue',
    'MinBlobsLtMax'        => 'Pienimmän kohteiden määrän tulee olla pienempi kuin suurin',
    'MinBlobsUnset'        => 'Sinun on asetettava pienin määrä kohteita',
    'MinFilterAreaLtMax'   => 'Pienimmän suodatusalueen tulee olla pienempi kuin suurin',
    'MinFilterAreaUnset'   => 'Sinun on asetettava pienin määrä suodatuspikseleitä',
    'MinFilterLtMinAlarm'  => 'Pienimmän suodatusalueen tulee olla pienempi tai yhtä suuri kuin pienin hälytysalue',
    'MinFocusRange'        => 'Pienin tarkennusalue',
    'MinFocusSpeed'        => 'Pienin tarkennusnopeus',
    'MinFocusStep'         => 'Pienin tarkennusaskel',
    'MinGainRange'         => 'Pienin vahvistusalue',
    'MinGainSpeed'         => 'Pienin vahvistusnopeus',
    'MinGainStep'          => 'Pienin vahvistusaskel',
    'MinIrisRange'         => 'Pienin iirisalue',
    'MinIrisSpeed'         => 'Pienin iirisnopeus',
    'MinIrisStep'          => 'Pienin iirisaskel',
    'MinPanRange'          => 'Pienin panorointi-alue',
    'MinPanSpeed'          => 'Pienin panorointinopeus',
    'MinPanStep'           => 'Pienin panorointiaskel',
    'MinPixelThresLtMax'   => 'Pienimmän pikselikynnyksen tulee olla pienempi kuin suurin',
    'MinPixelThresUnset'   => 'Sinun on asetettava pienin pikselikynnys',
    'MinTiltRange'         => 'Pienin kallistusalue',
    'MinTiltSpeed'         => 'Pienin kallistusnopeus',
    'MinTiltStep'          => 'Pienin kallistusaskel',
    'MinWhiteRange'        => 'Pienin valkotasapainoalue',
    'MinWhiteSpeed'        => 'Pienin valkotasapainonopeus',
    'MinWhiteStep'         => 'Pienin valkotasapainoaskel',
    'MinZoomRange'         => 'Pienin zoomausalue',
    'MinZoomSpeed'         => 'Pienin zoomausnopeus',
    'MinZoomStep'          => 'Pienin zoomausaskel',
    'Misc'                 => 'Muut',
    'Mode'                 => 'Tila',
    'Monitor'              => 'Valvonta',
    'MonitorIds'           => 'Valvontatunnukset',
    'MonitorPreset'        => 'Esiasetettu valvonta',
    'MonitorPresetIntro'   => 'Valitse esiasetus listalta.<br><br>Huomioi, että tämä voi ylikirjoittaa jo tekemäsi asetukset tälle valvojalle.<br><br>',
    'MonitorProbe'         => 'Valvontatestaus',
    'MonitorProbeIntro'    => 'Alla oleva lista näyttää havaitut analogiset ja verkon kamerat sekä niiden käytön tilan.<br/><br/>Valitse haluamasi merkintä listalta.<br/><br/>Huomioi, että kaikki kamerat eivät välttämättä näy ja kameran valinta voi ylikirjoittaa nykyiset asetukset.<br/><br/>', // Added - 2009-03-31
    'Monitors'             => 'Valvojat',
    'Montage'              => 'Kollaasi',
    'MontageReview'        => 'Kollaasikatsaus',
    'Month'                => 'Kuukausi',
    'More'                 => 'Lisää',
    'MotionFrameSkip'      => 'Liike kehyksen ohitus',
    'Move'                 => 'Siirrä',
    'Mtg2widgrd'           => '2-leveä ruudukko',
    'Mtg3widgrd'           => '3-leveä ruudukko',
    'Mtg3widgrx'           => '3-leveä ruudukko, skaalattu, suurenee hälytyksessä',
    'Mtg4widgrd'           => '4-leveä ruudukko',
    'MtgDefault'           => 'Oletus',
    'MustBeGe'             => 'täytyy olla suurempi tai yhtä suuri kuin',
    'MustBeLe'             => 'täytyy olla pienempi tai yhtä suuri kuin',
    'MustConfirmPassword'  => 'Sinun on vahvistettava salasana',
    'MustSupplyPassword'   => 'Sinun on annettava salasana',
    'MustSupplyUsername'   => 'Sinun on annettava käyttäjänimi',
    'Name'                 => 'Nimi',
    'Near'                 => 'Lähellä',
    'Network'              => 'Verkko',
    'New'                  => 'Uusi',
    'NewGroup'             => 'Uusi ryhmä',
    'NewLabel'             => 'Uusi etiketti',
    'NewPassword'          => 'Uusi salasana',
    'NewState'             => 'Uusi tila',
    'NewUser'              => 'Uusi käyttäjä',
    'Next'                 => 'Seuraava',
    'No'                   => 'Ei',
    'NoDetectedCameras'    => 'Ei havaittuja kameroita',
    'NoDetectedProfiles'   => 'Ei havaittuja profiileja',
    'NoFramesRecorded'     => 'Tähän tapahtumaan ei ole tallennettu kehyksiä',
    'NoGroup'              => 'Ei ryhmää',
    'NoSavedFilters'       => 'Ei tallennettuja suodattimia',
    'NoStatisticsRecorded' => 'Tähän tapahtumaan ei ole tallennettu tilastoja',
    'None'                 => 'Ei mitään',
    'NoneAvailable'        => 'Ei saatavilla',
    'Normal'               => 'Normaali',
    'Notes'                => 'Huom.',
    'NumPresets'           => 'Esiasetusten määrä',
    'Off'                  => 'Pois',
    'On'                   => 'Päällä',
    'OnvifCredentialsIntro'=> 'Anna valitun kameran käyttäjänimi ja salasana.<br/>Jos kameralle ei ole luotu käyttäjää, käyttäjä luodaan annetulla salasanalla.<br/><br/>', // Added - 2015-04-18
    'OnvifProbe'           => 'ONVIF',
    'OnvifProbeIntro'      => 'Alla oleva lista näyttää havaitut ONVIF-kamerat ja niiden käytön tilan.<br/><br/>Valitse haluamasi merkintä listalta.<br/><br/>Huomioi, että kaikki kamerat eivät välttämättä näy ja kameran valinta voi ylikirjoittaa nykyiset asetukset.<br/><br/>', // Added - 2015-04-18
    'OpEq'                 => 'yhtä suuri kuin',
    'OpGt'                 => 'suurempi kuin',
    'OpGtEq'               => 'suurempi tai yhtä suuri kuin',
    'OpIn'                 => 'joukossa',
    'OpIs'                 => 'on',
    'OpIsNot'              => 'ei ole',
    'OpLt'                 => 'pienempi kuin',
    'OpLtEq'               => 'pienempi tai yhtä suuri kuin',
    'OpMatches'            => 'vastaa',
    'OpNe'                 => 'ei yhtä suuri kuin',
    'OpNotIn'              => 'ei joukossa',
    'OpNotMatches'         => 'ei vastaa',
    'Open'                 => 'Avaa',
    'OptionHelp'           => 'Asetusapu',
    'OptionRestartWarning' => 'Nämä muutokset eivät tule voimaan\nennen kuin järjestelmä käynnistetään uudelleen.\nKun olet valmis, käynnistä ZoneMinder uudelleen.',
    'OptionalEncoderParam' => 'Valinnaiset koodausparametrit',
    'Options'              => 'Asetukset',
    'OrEnterNewName'       => 'tai kirjoita uusi nimi',
    'Order'                => 'Järjestä',
    'Orientation'          => 'Suunta',
    'Out'                  => 'Ulos',
    'OverwriteExisting'    => 'Korvaa olemassa oleva',
    'Paged'                => 'Sivutettu',
    'Pan'                  => 'Panoroi',
    'PanLeft'              => 'Panoroi vasemmalle',
    'PanRight'             => 'Panoroi oikealle',
    'PanTilt'              => 'Pan/Tilt',
    'Parameter'            => 'Parametri',
    'Password'             => 'Salasana',
    'PasswordsDifferent'   => 'Salasanat eivät täsmää',
    'Paths'                => 'Polut',
    'Pause'                => 'Tauko',
    'Phone'                => 'Puhelin',
    'PhoneBW'              => 'Puhelimen kaistanleveys',
    'Pid'                  => 'PID',
    'PixelDiff'            => 'Pikseliero',
    'Pixels'               => 'pikseliä',
    'Play'                 => 'Toista',
    'PlayAll'              => 'Toista kaikki',
    'PleaseWait'           => 'Odota...',
    'Plugins'              => 'Lisäosat',
    'Point'                => 'Piste',
    'PostEventImageBuffer' => 'Tapahtuman jälkeinen kuvapuskuri',
    'PreEventImageBuffer'  => 'Tapahtuman edeltävä kuvapuskuri',
    'PreserveAspect'       => 'Säilytä kuvasuhde',
    'Preset'               => 'Esiasetus',
    'Presets'              => 'Esiasetukset',
    'Prev'                 => 'Edell.',
    'Probe'                => 'Testaa',
    'ProfileProbe'         => 'Virtaustesti',
    'ProfileProbeIntro'    => 'Alla oleva lista näyttää valitun kameran olemassa olevat virtausprofiilit.<br/><br/>Valitse haluamasi merkintä listalta.<br/><br/>Huomioi, että ZoneMinder ei voi määrittää lisäprofiileja ja kameran valinta voi ylikirjoittaa nykyiset asetukset.<br/><br/>', // Added - 2015-04-18
    'Progress'             => 'Edistys',
    'Protocol'             => 'Protokolla',
    'RTSPDescribe'         => 'Käytä RTSP-vastausmedian URL-osoitetta',
    'RTSPTransport'        => 'RTSP-kuljetusprotokolla',
    'Rate'                 => 'Nopeus',
    'Real'                 => 'Todellinen',
    'RecaptchaWarning'     => 'Recaptcha-salainen avain on virheellinen. Korjaa se, muuten Recaptcha ei toimi',
    'Record'               => 'Tallenna',
    'RecordAudio'          => 'Tallennetaanko äänivirta tapahtumaa tallennettaessa.',
    'RefImageBlendPct'     => 'Referenssikuvan sekoitus %',
    'Refresh'              => 'Päivitä',
    'Remote'               => 'Kaukosäädin',
    'RemoteHostName'       => 'Kaukoisäntänimi',
    'RemoteHostPath'       => 'Kaukosäätimen polku',
    'RemoteHostPort'       => 'Kaukosäätimen portti',
    'RemoteHostSubPath'    => 'Kaukosäätimen alamäärityspolku',
    'RemoteImageColours'   => 'Kaukokuvan värit',
    'RemoteMethod'         => 'Kaukomenetelmä',
    'RemoteProtocol'       => 'Kaukoprotokolla',
    'Rename'               => 'Nimeä uudelleen',
    'Replay'               => 'Toista uudelleen',
    'ReplayAll'            => 'Toista kaikki tapahtumat',
    'ReplayGapless'        => 'Katkeamattomat tapahtumat',
    'ReplaySingle'         => 'Yksittäinen tapahtuma',
    'ReportEventAudit'     => 'Tapahtumien tarkastusraportti',
    'Reset'                => 'Nollaa',
    'ResetEventCounts'     => 'Nollaa tapahtumalaskurit',
    'Restart'              => 'Käynnistä uudelleen',
    'Restarting'           => 'Käynnistetään uudelleen',
    'RestrictedCameraIds'  => 'Rajoitetut kameratunnukset',
    'RestrictedMonitors'   => 'Rajoitetut valvojat',
    'ReturnDelay'          => 'Palautusviive',
    'ReturnLocation'       => 'Palaa sijaintiin',
	  'Rewind'               => 'Kelaa taaksepäin',
    'RotateLeft'           => 'Kierrä vasemmalle',
    'RotateRight'          => 'Kierrä oikealle',
    'RunLocalUpdate'       => 'Suorita zmupdate.pl päivityksen suorittamiseksi', 
    'RunMode'              => 'Käyttötila',
    'RunState'             => 'Käyttötila',
    'Running'              => 'Käynnissä',
    'Save'                 => 'Tallenna',
    'SaveAs'               => 'Tallenna nimellä',
    'SaveFilter'           => 'Tallenna suodatin',
    'SaveJPEGs'            => 'Tallenna JPEGit',
    'Scale'                => 'Skaala',
    'Score'                => 'Pisteet',
    'Secs'                 => 'Sekunnit',
    'Sectionlength'        => 'Osion pituus',
    'Select'               => 'Valitse',
    'SelectFormat'         => 'Valitse muoto',
    'SelectLog'            => 'Valitse loki',
    'SelectMonitors'       => 'Valitse valvontakamerat',
    'SelfIntersecting'     => 'Monikulmion päät eivät saa mennä ristiin',
    'Set'                  => 'Aseta',
    'SetNewBandwidth'      => 'Aseta uusi kaistanleveys',
    'SetPreset'            => 'Aseta esiasetus',
    'Settings'             => 'Asetukset',
    'ShowFilterWindow'     => 'Näytä suodatinikkuna',
    'ShowTimeline'         => 'Näytä aikajana',
    'SignalCheckColour'    => 'Signaalin tarkistusväri',
    'SignalCheckPoints'    => 'Signaalin tarkistuspisteet',
    'Size'                 => 'Koko',
    'SkinDescription'      => 'Vaihda oletusulkoasu tälle tietokoneelle',
    'Sleep'                => 'Lepotila',
    'SortAsc'              => 'Nouseva',
    'SortBy'               => 'Lajittele',
    'SortDesc'             => 'Laskeva',
    'Source'               => 'Lähde',
    'SourceColours'        => 'Lähteen värit',
    'SourcePath'           => 'Lähdepolku',
    'SourceType'           => 'Lähdetyyppi',
    'Speed'                => 'Nopeus',
    'SpeedHigh'            => 'Korkea nopeus',
    'SpeedLow'             => 'Matala nopeus',
    'SpeedMedium'          => 'Keskinopeus',
    'SpeedTurbo'           => 'Turbo nopeus',
    'Start'                => 'Käynnistä',
    'State'                => 'Tila',
    'Stats'                => 'Tilastot',
    'Status'               => 'Tila',
    'StatusConnected'      => 'Kaappaus käynnissä',
    'StatusNotRunning'     => 'Ei käynnissä',
    'StatusRunning'        => 'Ei kaappausta',
    'StatusUnknown'        => 'Tuntematon',
    'Step'                 => 'Askel',
    'StepBack'             => 'Askel taaksepäin',
    'StepForward'          => 'Askel eteenpäin',
    'StepLarge'            => 'Suuret askeleet',
    'StepMedium'           => 'Keskikokoiset askeleet',
    'StepNone'             => 'Ei askeleita',
    'StepSmall'            => 'Pienet askeleet',
    'Stills'               => 'Still-kuvat',
    'Stop'                 => 'Pysäytä',
    'Stopped'              => 'Pysäytetty',
    'StorageArea'          => 'Tallennusalue',
    'StorageScheme'        => 'Tallennusjärjestelmä',
    'Stream'               => 'Suoratoisto',
    'StreamReplayBuffer'   => 'Suoratoiston toistopuskuri',
    'Submit'               => 'Lähetä',
    'System'               => 'Järjestelmä',
    'SystemLog'            => 'Järjestelmäloki',
    'TargetColorspace'     => 'Kohteen värimaailma',
    'Tele'                 => 'Tele',
    'Thumbnail'            => 'Pienoiskuvat',
    'Tilt'                 => 'Kallista',
    'Time'                 => 'Aika',
    'TimeDelta'            => 'Aikadelta',
    'TimeStamp'            => 'Aikaleima',
    'Timeline'             => 'Aikajana',
    'TimelineTip1'         => 'Vie hiiri kaavion päälle nähdäksesi tilannekuvan ja tapahtuman tiedot.',
    'TimelineTip2'         => 'Klikkaa kaavion värillisiä osia tai kuvaa nähdäksesi tapahtuman.',
    'TimelineTip3'         => 'Klikkaa taustaa zoomataksesi pienempään ajanjaksoon napsautuksesi ympärillä.',
    'TimelineTip4'         => 'Käytä alla olevia ohjaimia zoomataksesi ulos tai navigoidaksesi ajanjakson sisällä edestakaisin.',
    'Timestamp'            => 'Aikaleima',
    'TimestampLabelFormat' => 'Aikaleiman muoto',
    'TimestampLabelSize'   => 'Fonttikoko',
    'TimestampLabelX'      => 'Aikaleiman X-koordinaatti',
    'TimestampLabelY'      => 'Aikaleiman Y-koordinaatti',
    'Today'                => 'Tänään',
    'Tools'                => 'Työkalut',
    'Total'                => 'Yhteensä',
    'TotalBrScore'         => 'Yhteensä<br/>Pisteet',
    'TrackDelay'           => 'Seurantaviive',
    'TrackMotion'          => 'Seuraa liikettä',
    'Triggers'             => 'Laukaisimet',
    'TurboPanSpeed'        => 'Turbo-panoraamannopeus',
    'TurboTiltSpeed'       => 'Turbo-kallistusnopeus',
    'Type'                 => 'Tyyppi',
    'Unarchive'            => 'Pura arkistointi',
    'Undefined'            => 'Määrittelemätön',
    'Units'                => 'Yksiköt',
    'Unknown'              => 'Tuntematon',
    'Update'               => 'Päivitä',
    'UpdateAvailable'      => 'ZoneMinder-päivitys on saatavilla.',
    'UpdateNotNecessary'   => 'Päivitystä ei tarvita.',
    'Updated'              => 'Päivitetty',
    'Upload'               => 'Lataa',
    'UseFilter'            => 'Käytä suodatinta',
    'UseFilterExprsPost'   => '&nbsp;suodatin&nbsp;ilmaisut', // This is used at the end of the phrase 'use N filter expressions'
    'UseFilterExprsPre'    => 'Käytä&nbsp;', // This is used at the beginning of the phrase 'use N filter expressions'
    'UsedPlugins'	         => 'Käytetyt liitännäiset',
    'User'                 => 'Käyttäjä',
    'Username'             => 'Käyttäjänimi',
    'Users'                => 'Käyttäjät',
    'V4L'                  => 'V4L',
    'V4LCapturesPerFrame'  => 'Kaappaukset per kehys',
    'V4LMultiBuffer'       => 'Monipuskurointi',
    'Value'                => 'Arvo',
    'Version'              => 'Versio',
    'VersionIgnore'        => 'Ohita tämä versio',
    'VersionRemindDay'     => 'Muistuta 1 päivän päästä',
    'VersionRemindHour'    => 'Muistuta 1 tunnin päästä',
    'VersionRemindNever'   => 'Älä muistuta uusista versioista',
    'VersionRemindWeek'    => 'Muistuta 1 viikon päästä',
    'Video'                => 'Video',
    'VideoFormat'          => 'Videoformaatti',
    'VideoGenFailed'       => 'Videon luonti epäonnistui!',
    'VideoGenFiles'        => 'Olemassa olevat videorakenteet',
    'VideoGenNoFiles'      => 'Ei videorakenteita',
    'VideoGenParms'        => 'Videon luonti-asetukset',
    'VideoGenSucceeded'    => 'Videon luonti onnistui!',
    'VideoSize'            => 'Videon koko',
    'VideoWriter'          => 'Videon kirjoitin',
    'View'                 => 'Näytä',
    'ViewAll'              => 'Näytä kaikki',
    'ViewEvent'            => 'Näytä tapahtuma',
    'ViewPaged'            => 'Näytä sivutettu',
    'Wake'                 => 'Herätä',
    'WarmupFrames'         => 'Lämmityskehykset',
    'Watch'                => 'Katso',
    'Web'                  => 'Verkko',
    'WebColour'            => 'Verkkoväri',
    'WebSiteUrl'           => 'Verkkosivun URL',
    'Week'                 => 'Viikko',
    'White'                => 'Valkoinen',
    'WhiteBalance'         => 'Valkotasapaino',
    'Wide'                 => 'Leveä',
    'X'                    => 'X',
    'X10'                  => 'X10',
    'X10ActivationString'  => 'X10 aktivointimerkkijono',
    'X10InputAlarmString'  => 'X10 syöttöhälytysmerkkijono',
    'X10OutputAlarmString' => 'X10 lähtöhälytysmerkkijono',
    'Y'                    => 'K',
    'Yes'                  => 'Kyllä',
    'YouNoPerms'           => 'Sinulla ei ole oikeuksia tähän resurssiin.',
    'Zone'                 => 'Vyöhyke',
    'ZoneAlarmColour'      => 'Hälytyksen väri (Punainen/Vihreä/Sininen)',
    'ZoneArea'             => 'Vyöhykealue',
    'ZoneExtendAlarmFrames' => 'Laajenna hälytyskehysten määrää',
    'ZoneFilterSize'       => 'Suodattimen leveys/korkeus (pikseleissä)',
    'ZoneMinMaxAlarmArea'  => 'Vähimmäis-/enimmäishälytysalue',
    'ZoneMinMaxBlobArea'   => 'Vähimmäis-/enimmäisblob-alue',
    'ZoneMinMaxBlobs'      => 'Vähimmäis-/enimmäisblobit',
    'ZoneMinMaxFiltArea'   => 'Vähimmäis-/enimmäissuodatusalue',
    'ZoneMinMaxPixelThres' => 'Vähimmäis-/enimmäispikseliraja (0-255)',
    'ZoneMinderLog'        => 'ZoneMinder-loki',
    'ZoneOverloadFrames'   => 'Ylikuormituksen kehyksen ohitusmäärä',
    'Zones'                => 'Vyöhykkeet',
    'Zoom'                 => 'Zoomaa',
    'ZoomIn'               => 'Zoomaa sisään',
    'ZoomOut'              => 'Zoomaa ulos',
);

// Complex replacements with formatting and/or placements, must be passed through sprintf
$CLANG = array(
    'CurrentLogin'         => 'Nykyinen kirjautuminen on \'%1$s\'',
    'EventCount'           => '%1$s %2$s', // Esimerkiksi '37 Tapahtumaa' (alla olevasta Vlangista)
    'LastEvents'           => 'Viimeisimmät %1$s %2$s', // Esimerkiksi 'Viimeisimmät 37 Tapahtumaa' (alla olevasta Vlangista)
    'LatestRelease'        => 'Uusin versio on v%1$s, sinulla on v%2$s.',
    'MonitorCount'         => '%1$s %2$s', // Esimerkiksi '4 Valvojaa' (alla olevasta Vlangista)
    'MonitorFunction'      => 'Valvojan %1$s toiminto',
    'RunningRecentVer'     => 'Käytät ZoneMinderin uusinta versiota, v%s.',
    'VersionMismatch'      => 'Versio ei täsmää, järjestelmän versio on %1$s, tietokannan versio on %2$s.',
);

// The next section allows you to describe a series of word ending and counts used to 
// generate the correctly conjugated forms of words depending on a count that is associated
// with that word.
// This intended to allow phrases such a '0 potatoes', '1 potato', '2 potatoes' etc to
// conjugate correctly with the associated count.
// In some languages such as English this is fairly simple and can be expressed by assigning
// a count with a singular or plural form of a word and then finding the nearest (lower) value.
// So '0' of something generally ends in 's', 1 of something is singular and has no extra
// ending and 2 or more is a plural and ends in 's' also. So to find the ending for '187' of
// something you would find the nearest lower count (2) and use that ending.
//
// So examples of this would be
// $zmVlangPotato = array( 0=>'Potatoes', 1=>'Potato', 2=>'Potatoes' );
// $zmVlangSheep = array( 0=>'Sheep' );
//
// where you can have as few or as many entries in the array as necessary
// If your language is similar in form to this then use the same format and choose the
// appropriate zmVlang function below.
// If however you have a language with a different format of plural endings then another
// approach is required . For instance in Russian the word endings change continuously
// depending on the last digit (or digits) of the numerator. In this case then zmVlang
// arrays could be written so that the array index just represents an arbitrary 'type'
// and the zmVlang function does the calculation about which version is appropriate.
//
// So an example in Russian might be (using English words, and made up endings as I
// don't know any Russian!!)
// $zmVlangPotato = array( 1=>'Potati', 2=>'Potaton', 3=>'Potaten' );
//
// and the zmVlang function decides that the first form is used for counts ending in
// 0, 5-9 or 11-19 and the second form when ending in 1 etc.
//

// Variable arrays expressing plurality, see the zmVlang description above
$VLANG = array(
    'Event'              => array( 0=>'Tapahtumat', 1=>'Tapahtuma', 2=>'Tapahtumat' ),
    'Monitor'            => array( 0=>'Valvontakamerat', 1=>'Valvontakamera', 2=>'Valvontakamerat' ),
);

// You will need to choose or write a function that can correlate the plurality string arrays
// with variable counts. This is used to conjugate the Vlang arrays above with a number passed
// in to generate the correct noun form.
//
// In languages such as English this is fairly simple 
// Note this still has to be used with printf etc to get the right formating
function zmVlang( $langVarArray, $count )
{
    krsort( $langVarArray );
    foreach ( $langVarArray as $key=>$value )
    {
        if ( abs($count) >= $key )
        {
            return( $value );
        }
    }
    die( 'Virhe, ei voida suhteuttaa muuttujan kielijonoa' );
}

// This is an version that could be used in the Russian example above
// The rules are that the first word form is used if the count ends in
// 0, 5-9 or 11-19. The second form is used then the count ends in 1
// (not including 11 as above) and the third form is used when the 
// count ends in 2-4, again excluding any values ending in 12-14.
// 
// function zmVlang( $langVarArray, $count )
// {
//  $secondlastdigit = substr( $count, -2, 1 );
//  $lastdigit = substr( $count, -1, 1 );
//  // or
//  // $secondlastdigit = ($count/10)%10;
//  // $lastdigit = $count%10;
// 
//  // Get rid of the special cases first, the teens
//  if ( $secondlastdigit == 1 && $lastdigit != 0 )
//  {
//      return( $langVarArray[1] );
//  }
//  switch ( $lastdigit )
//  {
//      case 0 :
//      case 5 :
//      case 6 :
//      case 7 :
//      case 8 :
//      case 9 :
//      {
//          return( $langVarArray[1] );
//          break;
//      }
//      case 1 :
//      {
//          return( $langVarArray[2] );
//          break;
//      }
//      case 2 :
//      case 3 :
//      case 4 :
//      {
//          return( $langVarArray[3] );
//          break;
//      }
//  }
//  die( 'Error, unable to correlate variable language string' );
// }

// This is an example of how the function is used in the code which you can uncomment and 
// use to test your custom function.
//$monitors = array();
//$monitors[] = 1; // Choose any number
//echo sprintf( $zmClangMonitorCount, count($monitors), zmVlang( $zmVlangMonitor, count($monitors) ) );

// In this section you can override the default prompt and help texts for the options area
// These overrides are in the form show below where the array key represents the option name minus the initial ZM_
$OLANG = array(
    'LANG_DEFAULT' => array(
			'Prompt' => "Valitse kieli ZoneMinderille",
        'Help' => "ZoneMinder voi käyttää muuta kieltä kuin englantia valikoissa ja teksteissä. Valitse tästä kieli, jota haluat käyttää ZoneMinderissa."
    ),
    'OPTIONS_FFMPEG' => array(
        'Help' => "Tämä kenttä välittää parametrit FFmpegille. Useita parametreja voidaan erottaa ,~~ ".
                  "Esimerkkejä (älä lisää lainausmerkkejä)~~~~".
                  "\"allowed_media_types=video\" Aseta datatyyppi pyydettäväksi kamerasta (ääni, video, data)~~~~".
                  "\"reorder_queue_size=nnn\" Aseta puskuroitavien pakettien määrä uudelleenjärjestettyjen pakettien käsittelyä varten~~~~".
                  "\"loglevel=debug\" Aseta FFmpeg:n tiedotustaso (quiet, panic, fatal, error, warning, info, verbose, debug)"
    ),
    'OPTIONS_LIBVLC' => array(
        'Help' => "Tämä kenttä välittää parametrit libVLC:lle. Useita parametreja voidaan erottaa ,~~ ".
                  "Esimerkkejä (älä lisää lainausmerkkejä)~~~~".
                  "\"--rtp-client-port=nnn\" Aseta paikallinen portti rtp-datan käyttöä varten~~~~". 
                  "\"--verbose=2\" Aseta libVLC:n tiedotustaso"
    ),
);
	
?>
