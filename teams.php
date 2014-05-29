<?php

include_once('wc_config.php');

$dave = array();
$dave['name'] = 'Davinder';
$dave['A']['ARGENTINA'] = ARGENTINA;
$dave['B']['GERMANY'] = GERMANY;
$dave['C']['BELGIUM'] = BELGIUM;
$dave['D']['ITALY'] = ITALY;
$dave['E']['COLOMBIA'] = COLOMBIA;
$dave['F']['SWITZERLAND'] = SWITZ;
$dave['G']['ECUADOR'] = ECUADOR;
$dave['H']['GHANA'] = GHANA;
$dave['I']['GREECE'] = GREECE;
$dave['J']['IRAN'] = IRAN;
$dave['K']['MESSI'] = MESSI;
$dave['L']['AGUERO'] = AGUERO;
$dave['M']['DIEGO COSTA'] = COSTA;
$dave['N']['FRED'] = FRED;
$dave['O']['BALOTELLI'] = BALOTELLI;
$dave['P']['GIROUD'] = GIROUD;
$dave['Q']['KLOSE'] = KLOSE;
$dave['R']['RIBERY'] = RIBERY;
$dave['S']['PIRLO'] = PIRLO;
$dave['T']['DEMPSEY'] = DEMPSEY;
$dave['U']['HERNANDEZ'] = HERNANDEZ;
$dave['V']['GYAN'] = GYAN;
define('DAVE', serialize($dave));

$dave2 = array();
$dave2['name'] = 'Spicey Ricey';
$dave2['A']['ARGENTINA'] = ARGENTINA;
$dave2['B']['SPAIN'] = SPAIN;
$dave2['C']['FRANCE'] = FRANCE;
$dave2['D']['ITALY'] = ITALY;
$dave2['E']['COLOMBIA'] = COLOMBIA;
$dave2['F']['SWITZERLAND'] = SWITZ;
$dave2['G']['ECUADOR'] = ECUADOR;
$dave2['H']['GHANA'] = GHANA;
$dave2['I']['GREECE'] = GREECE;
$dave2['J']['IRAN'] = IRAN;
$dave2['K']['MESSI'] = MESSI;
$dave2['L']['AGUERO'] = AGUERO;
$dave2['M']['DIEGO COSTA'] = COSTA;
$dave2['N']['FRED'] = FRED;
$dave2['O']['BALOTELLI'] = BALOTELLI;
$dave2['P']['GIROUD'] = GIROUD;
$dave2['Q']['KLOSE'] = KLOSE;
$dave2['R']['RIBERY'] = RIBERY;
$dave2['S']['PIRLO'] = PIRLO;
$dave2['T']['DEMPSEY'] = DEMPSEY;
$dave2['U']['HERNANDEZ'] = HERNANDEZ;
$dave2['V']['GYAN'] = GYAN;
define('DAVE2', serialize($dave2));


/********************************/

$wc_teams = array();
$wc_teams[] = $dave;
$wc_teams[] = $dave2;
define('WC_TEAMS', serialize($wc_teams));

?>