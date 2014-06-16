<?php

define('UPDATING', false);
define('LAST_UPDATE', 'June 16, After Iran vs Nigeria');
define('SHOW_TEAMS', true);
define('SHOW_BONUS_TEXT', false);
define('TWEET', false);

/*************************************************/
/******************* TEAMS ***********************/
/*************************************************/

/*************************************************/
//A
define('BRAZIL_WINS', 3);		define('BRAZIL_TIES', 0);		define('BRAZIL_BONUS', 0);
define('ARGENTINA_WINS', 3);	define('ARGENTINA_TIES', 0);	define('ARGENTINA_BONUS', 0);

define('BRAZIL', 	serialize(array(BRAZIL_WINS, BRAZIL_TIES, BRAZIL_BONUS)));
define('ARGENTINA', serialize(array(ARGENTINA_WINS, ARGENTINA_TIES, ARGENTINA_BONUS)));


/*************************************************/
//B
define('SPAIN_WINS', 0);		define('SPAIN_TIES', 0);		define('SPAIN_BONUS', 0);
define('GERMANY_WINS', 3);		define('GERMANY_TIES', 0);		define('GERMANY_BONUS', 0);

define('SPAIN', 	serialize(array(SPAIN_WINS, SPAIN_TIES, SPAIN_BONUS)));
define('GERMANY', 	serialize(array(GERMANY_WINS, GERMANY_TIES, GERMANY_BONUS)));


/*************************************************/
//C
define('BELGIUM_WINS', 0);		define('BELGIUM_TIES', 0);		define('BELGIUM_BONUS', 0);
define('FRANCE_WINS', 3);		define('FRANCE_TIES', 0);		define('FRANCE_BONUS', 0);

define('BELGIUM', 	serialize(array(BELGIUM_WINS, BELGIUM_TIES, BELGIUM_BONUS)));
define('FRANCE', 	serialize(array(FRANCE_WINS, FRANCE_TIES, FRANCE_BONUS)));


/*************************************************/
//D
define('HOLLAND_WINS', 3);		define('HOLLAND_TIES', 0);		define('HOLLAND_BONUS', 0);
define('ITALY_WINS', 3);		define('ITALY_TIES', 0);		define('ITALY_BONUS', 0);
define('PORTUGAL_WINS', 0);		define('PORTUGAL_TIES', 0);		define('PORTUGAL_BONUS', 0);

define('HOLLAND', 	serialize(array(HOLLAND_WINS, HOLLAND_TIES, HOLLAND_BONUS)));
define('ITALY', 	serialize(array(ITALY_WINS, ITALY_TIES, ITALY_BONUS)));
define('PORTUGAL', 	serialize(array(PORTUGAL_WINS, PORTUGAL_TIES, PORTUGAL_BONUS)));


/*************************************************/
//E
define('COLOMBIA_WINS', 3);		define('COLOMBIA_TIES', 0);		define('COLOMBIA_BONUS', 0);
define('SWITZ_WINS', 3);		define('SWITZ_TIES', 0);		define('SWITZ_BONUS', 0);
define('RUSSIA_WINS', 0);		define('RUSSIA_TIES', 0);		define('RUSSIA_BONUS', 0);

define('COLOMBIA', 	serialize(array(COLOMBIA_WINS, COLOMBIA_TIES, COLOMBIA_BONUS)));
define('SWITZ', 	serialize(array(SWITZ_WINS, SWITZ_TIES, SWITZ_BONUS)));
define('RUSSIA', 	serialize(array(RUSSIA_WINS, RUSSIA_TIES, RUSSIA_BONUS)));


/*************************************************/
//F
define('CHILE_WINS', 3);		define('CHILE_TIES', 0);		define('CHILE_BONUS', 0);
define('IVORY_WINS', 3);		define('IVORY_TIES', 0);		define('IVORY_BONUS', 0);
define('ENGLAND_WINS', 0);		define('ENGLAND_TIES', 0);		define('ENGLAND_BONUS', 0);
define('URUGUAY_WINS', 0);		define('URUGUAY_TIES', 0);		define('URUGUAY_BONUS', 0);

define('CHILE', 	serialize(array(CHILE_WINS, CHILE_TIES, CHILE_BONUS)));
define('IVORY', 	serialize(array(IVORY_WINS, IVORY_TIES, IVORY_BONUS)));
define('ENGLAND', 	serialize(array(ENGLAND_WINS, ENGLAND_TIES, ENGLAND_BONUS)));
define('URUGUAY', 	serialize(array(URUGUAY_WINS, URUGUAY_TIES, URUGUAY_BONUS)));


/*************************************************/
//G
define('ECUADOR_WINS', 0);		define('ECUADOR_TIES', 0);		define('ECUADOR_BONUS', 0);
define('CROATIA_WINS', 0);		define('CROATIA_TIES', 0);		define('CROATIA_BONUS', 0);
define('JAPAN_WINS', 0);		define('JAPAN_TIES', 0);		define('JAPAN_BONUS', 0);
define('MEXICO_WINS', 3);		define('MEXICO_TIES', 0);		define('MEXICO_BONUS', 0);

define('ECUADOR', 	serialize(array(ECUADOR_WINS, ECUADOR_TIES, ECUADOR_BONUS)));
define('CROATIA', 	serialize(array(CROATIA_WINS, CROATIA_TIES, CROATIA_BONUS)));
define('JAPAN', 	serialize(array(JAPAN_WINS, JAPAN_TIES, JAPAN_BONUS)));
define('MEXICO', 	serialize(array(MEXICO_WINS, MEXICO_TIES, MEXICO_BONUS)));


/*************************************************/
//H
define('USA_WINS', 0);			define('USA_TIES', 0);			define('USA_BONUS', 0);
define('GHANA_WINS', 0);		define('GHANA_TIES', 0);		define('GHANA_BONUS', 0);
define('BOSNIA_WINS', 0);		define('BOSNIA_TIES', 0);		define('BOSNIA_BONUS', 0);
define('GREECE_WINS', 0);		define('GREECE_TIES', 0);		define('GREECE_BONUS', 0);

define('USA', 		serialize(array(USA_WINS, USA_TIES, USA_BONUS)));
define('GHANA', 	serialize(array(GHANA_WINS, GHANA_TIES, GHANA_BONUS)));
define('BOSNIA', 	serialize(array(BOSNIA_WINS, BOSNIA_TIES, BOSNIA_BONUS)));
define('GREECE', 	serialize(array(GREECE_WINS, GREECE_TIES, GREECE_BONUS)));


/*************************************************/
//I
define('NIGERIA_WINS', 0);		define('NIGERIA_TIES', 1);		define('NIGERIA_BONUS', 0);
define('KOREA_WINS', 0);		define('KOREA_TIES', 0);		define('KOREA_BONUS', 0);
define('CAMEROON_WINS', 0);		define('CAMEROON_TIES', 0);		define('CAMEROON_BONUS', 0);
define('ALGERIA_WINS', 0);		define('ALGERIA_TIES', 0);		define('ALGERIA_BONUS', 0);

define('NIGERIA', 	serialize(array(NIGERIA_WINS, NIGERIA_TIES, NIGERIA_BONUS)));
define('KOREA', 	serialize(array(KOREA_WINS, KOREA_TIES, KOREA_BONUS)));
define('CAMEROON', 	serialize(array(CAMEROON_WINS, CAMEROON_TIES, CAMEROON_BONUS)));
define('ALGERIA', 	serialize(array(ALGERIA_WINS, ALGERIA_TIES, ALGERIA_BONUS)));


/*************************************************/
//J
define('AUSTRALIA_WINS', 0);	define('AUSTRALIA_TIES', 0);	define('AUSTRALIA_BONUS', 0);
define('IRAN_WINS', 0);			define('IRAN_TIES', 1);			define('IRAN_BONUS', 0);
define('COSTA_WINS', 3);		define('COSTA_TIES', 0);		define('COSTA_BONUS', 0);
define('HONDURAS_WINS', 0);		define('HONDURAS_TIES', 0);		define('HONDURAS_BONUS', 0);

define('AUSTRALIA', serialize(array(AUSTRALIA_WINS, AUSTRALIA_TIES, AUSTRALIA_BONUS)));
define('IRAN', 		serialize(array(IRAN_WINS, IRAN_TIES, IRAN_BONUS)));
define('COSTA', 	serialize(array(COSTA_WINS, COSTA_TIES, COSTA_BONUS)));
define('HONDURAS', 	serialize(array(HONDURAS_WINS, HONDURAS_TIES, HONDURAS_BONUS)));



/*************************************************/
/****************** PLAYERS **********************/
/*************************************************/

/*************************************************/
//K
define('MESSI_GOALS', 2);		define('MESSI_BONUS', 0);
define('NEYMAR_GOALS', 4);		define('NEYMAR_BONUS', 0);

define('MESSI', serialize(array(MESSI_GOALS, MESSI_BONUS)));
define('NEYMAR', serialize(array(NEYMAR_GOALS, NEYMAR_BONUS)));


/*************************************************/
//L
define('AGUERO_GOALS', 0);		define('AGUERO_BONUS', 0);
define('RONALDO_GOALS', 0);		define('RONALDO_BONUS', 0);
define('SUAREZ_GOALS', 0);		define('SUAREZ_BONUS', 0);
define('LUKAKU_GOALS', 0);		define('LUKAKU_BONUS', 0);

define('AGUERO', serialize(array(AGUERO_GOALS, AGUERO_BONUS)));
define('RONALDO', serialize(array(RONALDO_GOALS, RONALDO_BONUS)));
define('SUAREZ', serialize(array(SUAREZ_GOALS, SUAREZ_BONUS)));
define('LUKAKU', serialize(array(LUKAKU_GOALS, LUKAKU_BONUS)));


/*************************************************/
//M
define('HIGUAIN_GOALS', 0);		define('HIGUAIN_BONUS', 0);
define('DCOSTA_GOALS', 0);		define('DCOSTA_BONUS', 0);
define('PERSIE_GOALS', 4);		define('PERSIE_BONUS', 0);
define('FALCAO_GOALS', 0);		define('FALCAO_BONUS', 0);

define('HIGUAIN', serialize(array(HIGUAIN_GOALS, HIGUAIN_BONUS)));
define('DCOSTA', serialize(array(DCOSTA_GOALS, DCOSTA_BONUS)));
define('PERSIE', serialize(array(PERSIE_GOALS, PERSIE_BONUS)));
define('FALCAO', serialize(array(FALCAO_GOALS, FALCAO_BONUS)));


/*************************************************/
//N
define('FRED_GOALS', 0);		define('FRED_BONUS', 0);
define('HULK_GOALS', 0);		define('HULK_BONUS', 0);
define('BENZEMA_GOALS', 4);		define('BENZEMA_BONUS', 0);
define('CAVANI_GOALS', 2);		define('CAVANI_BONUS', 0);

define('FRED', serialize(array(FRED_GOALS, FRED_BONUS)));
define('HULK', serialize(array(HULK_GOALS, HULK_BONUS)));
define('BENZEMA', serialize(array(BENZEMA_GOALS, BENZEMA_BONUS)));
define('CAVANI', serialize(array(CAVANI_GOALS, CAVANI_BONUS)));


/*************************************************/
//O
define('NEGREDO_GOALS', 0);		define('NEGREDO_BONUS', 0);
define('OSCAR_GOALS', 2);		define('OSCAR_BONUS', 0);
define('BALOTELLI_GOALS', 2);	define('BALOTELLI_BONUS', 0);
define('ROBBEN_GOALS', 4);		define('ROBBEN_BONUS', 0);

define('NEGREDO', serialize(array(NEGREDO_GOALS, NEGREDO_BONUS)));
define('OSCAR', serialize(array(OSCAR_GOALS, OSCAR_BONUS)));
define('BALOTELLI', serialize(array(BALOTELLI_GOALS, BALOTELLI_BONUS)));
define('ROBBEN', serialize(array(ROBBEN_GOALS, ROBBEN_BONUS)));


/*************************************************/
//P
define('MULLER_GOALS', 6);		define('MULLER_BONUS', 0);
define('LAVEZZI_GOALS', 0);		define('LAVEZZI_BONUS', 0);
define('GIROUD_GOALS', 0);		define('GIROUD_BONUS', 0);
define('TORRES_GOALS', 0);		define('TORRES_BONUS', 0);

define('MULLER', serialize(array(MULLER_GOALS, MULLER_BONUS)));
define('LAVEZZI', serialize(array(LAVEZZI_GOALS, LAVEZZI_BONUS)));
define('GIROUD', serialize(array(GIROUD_GOALS, GIROUD_BONUS)));
define('TORRES', serialize(array(TORRES_GOALS, TORRES_BONUS)));


/*************************************************/
//Q
define('VILLA_GOALS', 0);		define('VILLA_BONUS', 0);
define('KLOSE_GOALS', 0);		define('KLOSE_BONUS', 0);
define('ROONEY_GOALS', 0);		define('ROONEY_BONUS', 0);
define('PEDRO_GOALS', 0);		define('PEDRO_BONUS', 0);

define('VILLA', serialize(array(VILLA_GOALS, VILLA_BONUS)));
define('KLOSE', serialize(array(KLOSE_GOALS, KLOSE_BONUS)));
define('ROONEY', serialize(array(ROONEY_GOALS, ROONEY_BONUS)));
define('PEDRO', serialize(array(PEDRO_GOALS, PEDRO_BONUS)));


/*************************************************/
//R
define('RIBERY_GOALS', 0);		define('RIBERY_BONUS', 0);
define('HUNTELAAR_GOALS', 0);	define('HUNTELAAR_BONUS', 0);
define('DROGBA_GOALS', 0);		define('DROGBA_BONUS', 0);
define('DZEKO_GOALS', 0);		define('DZEKO_BONUS', 0);

define('RIBERY', serialize(array(RIBERY_GOALS, RIBERY_BONUS)));
define('HUNTELAAR', serialize(array(HUNTELAAR_GOALS, HUNTELAAR_BONUS)));
define('DROGBA', serialize(array(DROGBA_GOALS, DROGBA_BONUS)));
define('DZEKO', serialize(array(DZEKO_GOALS, DZEKO_BONUS)));


/*************************************************/
//S
define('FORLAN_GOALS', 0);		define('FORLAN_BONUS', 0);
define('PIRLO_GOALS', 0);		define('PIRLO_BONUS', 0);
define('SANCHEZ_GOALS', 2);		define('SANCHEZ_BONUS', 0);
define('HAZARD_GOALS', 0);		define('HAZARD_BONUS', 0);

define('FORLAN', serialize(array(FORLAN_GOALS, FORLAN_BONUS)));
define('PIRLO', serialize(array(PIRLO_GOALS, PIRLO_BONUS)));
define('SANCHEZ', serialize(array(SANCHEZ_GOALS, SANCHEZ_BONUS)));
define('HAZARD', serialize(array(HAZARD_GOALS, HAZARD_BONUS)));


/*************************************************/
//T
define('DEMPSEY_GOALS', 0);		define('DEMPSEY_BONUS', 0);
define('POSTIGA_GOALS', 0);		define('POSTIGA_BONUS', 0);
define('IMMOBILE_GOALS', 0);	define('IMMOBILE_BONUS', 0);
define('STURRIDGE_GOALS', 2);	define('STURRIDGE_BONUS', 0);

define('DEMPSEY', serialize(array(DEMPSEY_GOALS, DEMPSEY_BONUS)));
define('POSTIGA', serialize(array(POSTIGA_GOALS, POSTIGA_BONUS)));
define('IMMOBILE', serialize(array(IMMOBILE_GOALS, IMMOBILE_BONUS)));
define('STURRIDGE', serialize(array(STURRIDGE_GOALS, STURRIDGE_BONUS)));


/*************************************************/
//U
define('MARTINEZ_GOALS', 0);	define('MARTINEZ_BONUS', 0);
define('KERZHAKOV_GOALS', 0);	define('KERZHAKOV_BONUS', 0);
define('DRMIC_GOALS', 0);		define('DRMIC_BONUS', 0);
define('HERNANDEZ_GOALS', 0);	define('HERNANDEZ_BONUS', 0);

define('MARTINEZ', serialize(array(MARTINEZ_GOALS, MARTINEZ_BONUS)));
define('KERZHAKOV', serialize(array(KERZHAKOV_GOALS, KERZHAKOV_BONUS)));
define('DRMIC', serialize(array(DRMIC_GOALS, DRMIC_BONUS)));
define('HERNANDEZ', serialize(array(HERNANDEZ_GOALS, HERNANDEZ_BONUS)));


/*************************************************/
//V
define('CAHILL_GOALS', 2);		define('CAHILL_BONUS', 0);
define('MITROGLOU_GOALS', 0);	define('MITROGLOU_BONUS', 0);
define('EMENIKE_GOALS', 0);		define('EMENIKE_BONUS', 0);
define('GYAN_GOALS', 0);		define('GYAN_BONUS', 0);

define('CAHILL', serialize(array(CAHILL_GOALS, CAHILL_BONUS)));
define('MITROGLOU', serialize(array(MITROGLOU_GOALS, MITROGLOU_BONUS)));
define('EMENIKE', serialize(array(EMENIKE_GOALS, EMENIKE_BONUS)));
define('GYAN', serialize(array(GYAN_GOALS, GYAN_BONUS)));

?>