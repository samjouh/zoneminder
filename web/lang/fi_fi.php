<?php
//
// ZoneMinder web Finnish language file, $Date$, $Revision$
// Translation by Sami Jouhki

// Huomioita kääntäjille
// 0. Ansaitse kunniaa, lisää nimesi yllä olevaan riviin (vapaaehtoinen)
// 1. Kun kirjoitat kielitokeneita omalla kielelläsi, yritä pitää teksti suunnilleen samanpituisena. Lyhennä tarvittaessa, koska tilaa on monessa kohtaa vähän.
// 2. On olemassa neljä erilaista merkkijonon korvausta
//   a) Yksinkertaiset korvaukset ovat sanoja tai lyhyitä lauseita, jotka ovat staattisia ja käytetään sellaisinaan.
//   b) Monimutkaiset korvaukset sisältävät jonkin dynaamisen elementin ja saattavat vaatia järjestyksen muuttamista. Tämä tokeni käsitellään sprintf-muotoilufunktiona. Jos dynaaminen elementti on numero, sinun täytyy käyttää myös muuttujakorvausta.
//   c) Muuttujakorvaukset käytetään yhdessä monimutkaisten korvausten kanssa ja ne sisältävät yksikön tai monikon muodostamisen riippuen zmVlang-funktioon syötetystä numerosta.
//   d) Valinnaiset merkkijonot voivat korvata Options-osan kehotukset ja/tai ohjetekstit. Näitä ei ole listattu, koska ne ovat suuria ja tallennettu tietokantaan, jotta niitä voidaan käyttää myös zmconfig.pl-skriptissä.
// 3. Alla listattuja tokeneita ei käytetä rakentamaan lauseita yksittäisistä sanoista. Voit siis olettaa, että yksittäinen sana käytetään vain siinä kontekstissa.
// 4. Uusissa kielitiedostoissa tai jos muutat vain muutamia sanoja tai lauseita, on järkevää ylläpidon kannalta sisällyttää alkuperäinen kielitiedosto ja ylikirjoittaa vanhat määritelmät sen sijaan, että kopioisit kaikki kielitokenit. Muuta alla oleva rivi peruskieleksesi ja poista kommentti.

// require_once( 'lang/fi_fi.php' );

// Saatat joutua muuttamaan merkistöä täällä, jos web-palvelin ei tee sitä oletuksena. Poista kommentti, jos tarpeen.

// Esimerkki
// header( "Content-Type: text/html; charset=iso-8859-1" );

// Saatat joutua muuttamaan alueasetuksia, jos oletusalueasetus on väärä tälle kielelle tai jos tuet useita kieliä. Jos joudut muuttamaan alueasetusta, huomaa, että funktioiden muoto vaihtelee PHP:n versioissa ennen ja jälkeen 4.3.0. Katso yksityiskohdat: http://uk2.php.net/manual/en/function.setlocale.php.
// Myös, alueasetuksen muuttaminen saattaa vaikuttaa joihinkin desimaalilaskentoihin tietokannassa. Muuta vain yksittäiset alueasetusalueet, jotka eivät vaikuta tähän, sen sijaan että muuttaisit kaikki kerrallaan. Katso esimerkit alla.
// Lopuksi, riippuen kokoonpanostasi, PHP ei välttämättä toimi oikein jaetuissa säikeistetyissä ympäristöissä, jos saat outoja virheitä, tämä saattaa olla syynä.

// Esimerkkejä
// setlocale( 'LC_ALL', 'fi_FI' ); Kaikki alueasetukset ennen 4.3.0
// setlocale( LC_ALL, 'fi_FI' ); Kaikki alueasetukset 4.3.0 jälkeen
// setlocale( LC_CTYPE, 'fi_FI' ); Merkkiluokka-asetukset 4.3.0 jälkeen
// setlocale( LC_TIME, 'fi_FI' ); Aika-asetukset 4.3.0 jälkeen

// Yksinkertaiset merkkijonojen korvaukset
$SLANG['24BitColour']          = '24 bitin väri';
$SLANG['32BitColour']          = '32 bitin väri';
$SLANG['8BitGrey']             = '8 bitin harmaasävy';
$SLANG['Colour']               = 'Väri';
$SLANG['Grey']                 = 'Harmaa';
$SLANG['RemoteImageColours']   = 'Etäkuvan värit';
$SLANG['ZoneAlarmColour']      = 'Hälytysväri (Punainen/Vihreä/Sininen)';

?>
