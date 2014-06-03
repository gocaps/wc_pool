<?php

include_once('wc_config.php');

$dave = array();
$dave['name'] = 'Davinder';
$dave['A']['ARGENTINA'] = ARGENTINA;
$dave['B']['GERMANY'] = GERMANY;
$dave['C']['BELGIUM'] = BELGIUM;
$dave['D']['ITALY'] = ITALY;
$dave['E']['COLOMBIA'] = COLOMBIA;
$dave['F']['IVORY COAST'] = IVORY;
$dave['G']['ECUADOR'] = ECUADOR;
$dave['H']['BOSNIA'] = BOSNIA;
$dave['I']['KOREA'] = KOREA;
$dave['J']['COSTA'] = COSTA;
$dave['K']['MESSI'] = MESSI;
$dave['L']['LUKAKU'] = LUKAKU;
$dave['M']['PERSIE'] = PERSIE;
$dave['N']['BENZEMA'] = BENZEMA;
$dave['O']['BALOTELLI'] = BALOTELLI;
$dave['P']['MULLER'] = MULLER;
$dave['Q']['PEDRO'] = PEDRO;
$dave['R']['DZEKO'] = DZEKO;
$dave['S']['PIRLO'] = PIRLO;
$dave['T']['IMMOBILE'] = IMMOBILE;
$dave['U']['KERZHAKOV'] = KERZHAKOV;
$dave['V']['GYAN'] = GYAN;
define('DAVE', serialize($dave));

$dave2 = array();
$dave2['name'] = 'Spicey Ricey';
$dave2['A']['ARGENTINA'] = ARGENTINA;
$dave2['B']['GERMANY'] = GERMANY;
$dave2['C']['FRANCE'] = FRANCE;
$dave2['D']['HOLLAND'] = HOLLAND;
$dave2['E']['SWITZERLAND'] = SWITZ;
$dave2['F']['ENGLAND'] = ENGLAND;
$dave2['G']['MEXICO'] = MEXICO;
$dave2['H']['GHANA'] = GHANA;
$dave2['I']['GREECE'] = GREECE;
$dave2['J']['IRAN'] = IRAN;
$dave2['K']['MESSI'] = MESSI;
$dave2['L']['AGUERO'] = AGUERO;
$dave2['M']['PERSIE'] = PERSIE;
$dave2['N']['BENZEMA'] = BENZEMA;
$dave2['O']['ROBBEN'] = ROBBEN;
$dave2['P']['GIROUD'] = GIROUD;
$dave2['Q']['ROONEY'] = ROONEY;
$dave2['R']['RIBERY'] = RIBERY;
$dave2['S']['HAZARD'] = HAZARD;
$dave2['T']['STURRIDGE'] = STURRIDGE;
$dave2['U']['HERNANDEZ'] = HERNANDEZ;
$dave2['V']['GYAN'] = GYAN;
define('DAVE2', serialize($dave2));


/********************************/

$wc_teams = array();
$wc_teams[] = $dave;
$wc_teams[] = $dave2;
define('WC_TEAMS', serialize($wc_teams));

?>