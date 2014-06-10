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
$dave2['name'] = 'Fridge';
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
$dave2['R']['DROGBA'] = DROGBA;
$dave2['S']['HAZARD'] = HAZARD;
$dave2['T']['STURRIDGE'] = STURRIDGE;
$dave2['U']['HERNANDEZ'] = HERNANDEZ;
$dave2['V']['GYAN'] = GYAN;
define('DAVE2', serialize($dave2));

$aviva = array();
$aviva['name'] = 'Mrs. Spicy Ricey';
$aviva['A']['BRAZIL'] = BRAZIL;
$aviva['B']['SPAIN'] = SPAIN;
$aviva['C']['BELGIUM'] = BELGIUM;
$aviva['D']['ITALY'] = ITALY;
$aviva['E']['COLOMBIA'] = COLOMBIA;
$aviva['F']['CHILE'] = CHILE;
$aviva['G']['ECUADOR'] = ECUADOR;
$aviva['H']['USA'] = USA;
$aviva['I']['SOUTH KOREA'] = KOREA;
$aviva['J']['COSTA RICA'] = COSTA;
$aviva['K']['NEYMAR'] = NEYMAR;
$aviva['L']['SUAREZ'] = SUAREZ;
$aviva['M']['DIEGO COSTA'] = COSTA;
$aviva['N']['HULK'] = HULK;
$aviva['O']['NEGREDO'] = NEGREDO;
$aviva['P']['TORRES'] = TORRES;
$aviva['Q']['DAVID VILLA'] = VILLA;
$aviva['R']['DROGBA'] = DROGBA;
$aviva['S']['FORLAN'] = FORLAN;
$aviva['T']['DEMPSEY'] = DEMPSEY;
$aviva['U']['JACKSON MARTINEZ'] = MARTINEZ;
$aviva['V']['GYAN'] = GYAN;
define('AVIVA', serialize($aviva));

$seb = array();
$seb['name'] = 'The Double Ent-Andres';
$seb['A']['BRAZIL'] = BRAZIL;
$seb['B']['SPAIN'] = SPAIN;
$seb['C']['BELGIUM'] = BELGIUM;
$seb['D']['PORTUGAL'] = PORTUGAL;
$seb['E']['COLOMBIA'] = COLOMBIA;
$seb['F']['URUGUAY'] = URUGUAY;
$seb['G']['MEXICO'] = MEXICO;
$seb['H']['GREECE'] = GREECE;
$seb['I']['ALGERIA'] = ALGERIA;
$seb['J']['COSTA RICA'] = COSTA;
$seb['K']['MESSI'] = MESSI;
$seb['L']['RONALDO'] = RONALDO;
$seb['M']['HIGUAIN'] = HIGUAIN;
$seb['N']['FRED'] = FRED;
$seb['O']['NEGREDO'] = NEGREDO;
$seb['P']['MULLER'] = MULLER;
$seb['Q']['KLOSE'] = KLOSE;
$seb['R']['HUNTELAAR'] = HUNTELAAR;
$seb['S']['FORLAN'] = FORLAN;
$seb['T']['POSTIGA'] = POSTIGA;
$seb['U']['JACKSON MARTINEZ'] = MARTINEZ;
$seb['V']['MITROGLOU'] = MITROGLOU;
define('SEB', serialize($seb));


/********************************/

$wc_teams = array();
$wc_teams[] = $dave;
$wc_teams[] = $dave2;
$wc_teams[] = $aviva;
$wc_teams[] = $seb;
define('WC_TEAMS', serialize($wc_teams));

?>