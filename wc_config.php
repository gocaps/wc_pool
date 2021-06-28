<?php

define('UPDATING', false);
define('LAST_UPDATE', 'Spain vs Croatia');
define('SHOW_TEAMS', true);
define('SHOW_BONUS_TEXT', true);
define('TWEET', false);

/*************************************************/
/******************* TEAMS ***********************/
/*************************************************/

/*************************************************/
//A
define('BELGIUM_WINS', 12);		define('BELGIUM_TIES', 0);		define('BELGIUM_BONUS', 0);
define('FRANCE_WINS', 3);		define('FRANCE_TIES', 2);		define('FRANCE_BONUS', 0);
define('ENGLAND_WINS', 6);		define('ENGLAND_TIES', 1);		define('ENGLAND_BONUS', 0);
define('GERMANY_WINS', 3);		define('GERMANY_TIES', 1);		define('GERMANY_BONUS', 0);
define('BELGIUM_OUT', 0);		define('FRANCE_OUT', 0);	define('ENGLAND_OUT', 0);	define('GERMANY_OUT', 0);

define('BELGIUM', 	serialize(array(BELGIUM_WINS, BELGIUM_TIES, BELGIUM_BONUS, BELGIUM_OUT)));
define('FRANCE', 	serialize(array(FRANCE_WINS, FRANCE_TIES, FRANCE_BONUS, FRANCE_OUT)));
define('ENGLAND', 	serialize(array(ENGLAND_WINS, ENGLAND_TIES, ENGLAND_BONUS, ENGLAND_OUT)));
define('GERMANY', 	serialize(array(GERMANY_WINS, GERMANY_TIES, GERMANY_BONUS, GERMANY_OUT)));

/*************************************************/
//B
define('SPAIN_WINS', 6);		define('SPAIN_TIES', 2);		define('SPAIN_BONUS', 0);
define('HOLLAND_WINS', 9);		define('HOLLAND_TIES', 0);		define('HOLLAND_BONUS', 0);
define('ITALY_WINS', 12);		define('ITALY_TIES', 0);		define('ITALY_BONUS', 0);
define('PORTUGAL_WINS', 3);		define('PORTUGAL_TIES', 1);		define('PORTUGAL_BONUS', 0);
define('SPAIN_OUT', 0);			define('HOLLAND_OUT', 1);		define('ITALY_OUT', 0);			define('PORTUGAL_OUT', 1);

define('SPAIN', 	serialize(array(SPAIN_WINS, SPAIN_TIES, SPAIN_BONUS, SPAIN_OUT)));
define('HOLLAND', 	serialize(array(HOLLAND_WINS, HOLLAND_TIES, HOLLAND_BONUS, HOLLAND_OUT)));
define('ITALY', 	serialize(array(ITALY_WINS, ITALY_TIES, ITALY_BONUS, ITALY_OUT)));
define('PORTUGAL', 	serialize(array(PORTUGAL_WINS, PORTUGAL_TIES, PORTUGAL_BONUS, PORTUGAL_OUT)));

/*************************************************/
//C - Teams from A and B

/*************************************************/
//D
define('DENMARK_WINS', 6);		define('DENMARK_TIES', 0);		define('DENMARK_BONUS', 0);
define('CROATIA_WINS', 3);		define('CROATIA_TIES', 1);		define('CROATIA_BONUS', 0);
define('UKRAINE_WINS', 3);		define('UKRAINE_TIES', 0);		define('UKRAINE_BONUS', 0);
define('DENMARK_OUT', 0);			define('CROATIA_OUT', 1);		define('UKRAINE_OUT', 0);

define('DENMARK', 	serialize(array(DENMARK_WINS, DENMARK_TIES, DENMARK_BONUS, DENMARK_OUT)));
define('CROATIA', 	serialize(array(CROATIA_WINS, CROATIA_TIES, CROATIA_BONUS, CROATIA_OUT)));
define('UKRAINE', 	serialize(array(UKRAINE_WINS, UKRAINE_TIES, UKRAINE_BONUS, UKRAINE_OUT)));

/*************************************************/
//E
define('RUSSIA_WINS', 3);		define('RUSSIA_TIES', 0);		define('RUSSIA_BONUS', 0);
define('AUSTRIA_WINS', 6);		define('AUSTRIA_TIES', 0);		define('AUSTRIA_BONUS', 0);
define('POLAND_WINS', 0);		define('POLAND_TIES', 1);		define('POLAND_BONUS', 0);
define('CZECH_WINS', 6);		define('CZECH_TIES', 1);		define('CZECH_BONUS', 3);
define('RUSSIA_OUT', 1);			define('AUSTRIA_OUT', 1);		define('POLAND_OUT', 1);			define('CZECH_OUT', 0);

define('RUSSIA', 	serialize(array(RUSSIA_WINS, RUSSIA_TIES, RUSSIA_BONUS, RUSSIA_OUT)));
define('AUSTRIA', 	serialize(array(AUSTRIA_WINS, AUSTRIA_TIES, AUSTRIA_BONUS, AUSTRIA_OUT)));
define('POLAND', 	serialize(array(POLAND_WINS, POLAND_TIES, POLAND_BONUS, POLAND_OUT)));
define('CZECH', 	serialize(array(CZECH_WINS, CZECH_TIES, CZECH_BONUS, CZECH_OUT)));

/*************************************************/
//F
define('SWITZERLAND_WINS', 3);		define('SWITZERLAND_TIES', 1);		define('SWITZERLAND_BONUS', 0);
define('TURKEY_WINS', 0);		define('TURKEY_TIES', 0);		define('TURKEY_BONUS', 0);
define('SWEDEN_WINS', 6);		define('SWEDEN_TIES', 1);		define('SWEDEN_BONUS', 0);
define('WALES_WINS', 3);		define('WALES_TIES', 1);		define('WALES_BONUS', 0);
define('SWITZERLAND_OUT', 0);			define('TURKEY_OUT', 1);		define('SWEDEN_OUT', 0);			define('WALES_OUT', 1);

define('SWITZERLAND', serialize(array(SWITZERLAND_WINS, SWITZERLAND_TIES, SWITZERLAND_BONUS, SWITZERLAND_OUT)));
define('TURKEY', 	serialize(array(TURKEY_WINS, TURKEY_TIES, TURKEY_BONUS, TURKEY_OUT)));
define('SWEDEN', 	serialize(array(SWEDEN_WINS, SWEDEN_TIES, SWEDEN_BONUS, SWEDEN_OUT)));
define('WALES', 	serialize(array(WALES_WINS, WALES_TIES, WALES_BONUS, WALES_OUT)));

/*************************************************/
//G
define('SCOTLAND_WINS', 0);		define('SCOTLAND_TIES', 1);		define('SCOTLAND_BONUS', 0);
define('SLOVAKIA_WINS', 3);		define('SLOVAKIA_TIES', 0);		define('SLOVAKIA_BONUS', 3);
define('FINLAND_WINS', 3);		define('FINLAND_TIES', 0);		define('FINLAND_BONUS', 3);
define('MACEDONIA_WINS', 0);		define('MACEDONIA_TIES', 0);		define('MACEDONIA_BONUS', 0);
define('HUNGARY_WINS', 0);		define('HUNGARY_TIES', 2);		define('HUNGARY_BONUS', 0);
define('SCOTLAND_OUT', 1);			define('SLOVAKIA_OUT', 1);		define('FINLAND_OUT', 1);			
define('MACEDONIA_OUT', 1);		define('HUNGARY_OUT', 1);

define('SCOTLAND', 	serialize(array(SCOTLAND_WINS, SCOTLAND_TIES, SCOTLAND_BONUS, SCOTLAND_OUT)));
define('SLOVAKIA', 	serialize(array(SLOVAKIA_WINS, SLOVAKIA_TIES, SLOVAKIA_BONUS, SLOVAKIA_OUT)));
define('FINLAND', 	serialize(array(FINLAND_WINS, FINLAND_TIES, FINLAND_BONUS, FINLAND_OUT)));
define('MACEDONIA', 	serialize(array(MACEDONIA_WINS, MACEDONIA_TIES, MACEDONIA_BONUS, MACEDONIA_OUT)));
define('HUNGARY', 	serialize(array(HUNGARY_WINS, HUNGARY_TIES, HUNGARY_BONUS, HUNGARY_OUT)));

/*************************************************/
/****************** PLAYERS **********************/
/*************************************************/

/*************************************************/
//H
define('KANE_GOALS', 0);		define('KANE_BONUS', 0);
define('LUKAKU_GOALS', 6);		define('LUKAKU_BONUS', 0);
define('MBAPPE_GOALS', 0);		define('MBAPPE_BONUS', 0);
define('KANE_OUT', 0);	define('LUKAKU_OUT', 0);	define('MBAPPE_OUT', 0);

define('KANE', serialize(array(KANE_GOALS, KANE_BONUS, KANE_OUT)));
define('LUKAKU', serialize(array(LUKAKU_GOALS, LUKAKU_BONUS, LUKAKU_OUT)));
define('MBAPPE', serialize(array(MBAPPE_GOALS, MBAPPE_BONUS, MBAPPE_OUT)));

/*************************************************/
//I
define('RONALDO_GOALS', 10);		define('RONALDO_BONUS', 0);
define('GRIEZMANN_GOALS', 2);		define('GRIEZMANN_BONUS', 0);
define('DEPAY_GOALS', 4);		define('DEPAY_BONUS', 0);
define('RONALDO_OUT', 1);	define('GRIEZMANN_OUT', 0);	define('DEPAY_OUT', 1);

define('RONALDO', serialize(array(RONALDO_GOALS, RONALDO_BONUS, RONALDO_OUT)));
define('GRIEZMANN', serialize(array(GRIEZMANN_GOALS, GRIEZMANN_BONUS, GRIEZMANN_OUT)));
define('DEPAY', serialize(array(DEPAY_GOALS, DEPAY_BONUS, DEPAY_OUT)));

/*************************************************/
//J
define('MORATA_GOALS', 4);		define('MORATA_BONUS', 0);
define('IMMOBILE_GOALS', 4);		define('IMMOBILE_BONUS', 0);
define('GNABRY_GOALS', 0);		define('GNABRY_BONUS', 0);
define('MORATA_OUT', 0);	define('IMMOBILE_OUT', 0);	define('GNABRY_OUT', 0);

define('MORATA', serialize(array(MORATA_GOALS, MORATA_BONUS, MORATA_OUT)));
define('IMMOBILE', serialize(array(IMMOBILE_GOALS, IMMOBILE_BONUS, IMMOBILE_OUT)));
define('GNABRY', serialize(array(GNABRY_GOALS, GNABRY_BONUS, GNABRY_OUT)));

/*************************************************/
//K
define('LEWANDOWSKI_GOALS', 6);		define('LEWANDOWSKI_BONUS', 0);
define('STERLING_GOALS', 4);		define('STERLING_BONUS', 0);
define('HAZARD_GOALS', 0);		define('HAZARD_BONUS', 0);
define('LEWANDOWSKI_OUT', 1);	define('STERLING_OUT', 0);	define('HAZARD_OUT', 0);

define('LEWANDOWSKI', serialize(array(LEWANDOWSKI_GOALS, LEWANDOWSKI_BONUS, LEWANDOWSKI_OUT)));
define('STERLING', serialize(array(STERLING_GOALS, STERLING_BONUS, STERLING_OUT)));
define('HAZARD', serialize(array(HAZARD_GOALS, HAZARD_BONUS, HAZARD_OUT)));

/*************************************************/
//L
define('WERNER_GOALS', 0);		define('WERNER_BONUS', 0);
define('RASHFORD_GOALS', 0);		define('RASHFORD_BONUS', 0);
define('TORRES_GOALS', 4);		define('TORRES_BONUS', 0);
define('WERNER_OUT', 0);	define('RASHFORD_OUT', 0);	define('TORRES_OUT', 0);

define('WERNER', serialize(array(WERNER_GOALS, WERNER_BONUS, WERNER_OUT)));
define('RASHFORD', serialize(array(RASHFORD_GOALS, RASHFORD_BONUS, RASHFORD_OUT)));
define('TORRES', serialize(array(TORRES_GOALS, TORRES_BONUS, TORRES_OUT)));

/*************************************************/
//M
define('FERNANDES_GOALS', 0);		define('FERNANDES_BONUS', 0);
define('BELOTTI_GOALS', 0);		define('BELOTTI_BONUS', 0);
define('BALE_GOALS', 0);		define('BALE_BONUS', 0);
define('FERNANDES_OUT', 1);	define('BELOTTI_OUT', 0);	define('BALE_OUT', 1);

define('FERNANDES', serialize(array(FERNANDES_GOALS, FERNANDES_BONUS, FERNANDES_OUT)));
define('BELOTTI', serialize(array(BELOTTI_GOALS, BELOTTI_BONUS, BELOTTI_OUT)));
define('BALE', serialize(array(BALE_GOALS, BALE_BONUS, BALE_OUT)));

/*************************************************/
//N
define('YILMAZ_GOALS', 0);		define('YILMAZ_BONUS', 0);
define('SCHICK_GOALS', 8);		define('SCHICK_BONUS', 0);
define('YARMOLENKO_GOALS', 4);		define('YARMOLENKO_BONUS', 0);
define('YILMAZ_OUT', 1);	define('SCHICK_OUT', 0);	define('YARMOLENKO_OUT', 0);

define('YILMAZ', serialize(array(YILMAZ_GOALS, YILMAZ_BONUS, YILMAZ_OUT)));
define('SCHICK', serialize(array(SCHICK_GOALS, SCHICK_BONUS, SCHICK_OUT)));
define('YARMOLENKO', serialize(array(YARMOLENKO_GOALS, YARMOLENKO_BONUS, YARMOLENKO_OUT)));

/*************************************************/
//O
define('ERIKSON_GOALS', 0);		define('ERIKSON_BONUS', 0);
define('DZUBA_GOALS', 2);		define('DZUBA_BONUS', 0);
define('QUAISON_GOALS', 0);		define('QUAISON_BONUS', 0);
define('ERIKSON_OUT', 0);	define('DZUBA_OUT', 1);	define('QUAISON_OUT', 0);

define('ERIKSON', serialize(array(ERIKSON_GOALS, ERIKSON_BONUS, ERIKSON_OUT)));
define('DZUBA', serialize(array(DZUBA_GOALS, DZUBA_BONUS, DZUBA_OUT)));
define('QUAISON', serialize(array(QUAISON_GOALS, QUAISON_BONUS, QUAISON_OUT)));

/*************************************************/
//P
define('PUKKI_GOALS', 0);		define('PUKKI_BONUS', 0);
define('ADAMS_GOALS', 0);		define('ADAMS_BONUS', 0);
define('SEFEROVIC_GOALS', 2);		define('SEFEROVIC_BONUS', 3);
define('PUKKI_OUT', 1);	define('ADAMS_OUT', 1);	define('SEFEROVIC_OUT', 0);

define('PUKKI', serialize(array(PUKKI_GOALS, PUKKI_BONUS, PUKKI_OUT)));
define('ADAMS', serialize(array(ADAMS_GOALS, ADAMS_BONUS, ADAMS_OUT)));
define('SEFEROVIC', serialize(array(SEFEROVIC_GOALS, SEFEROVIC_BONUS, SEFEROVIC_OUT)));

?>