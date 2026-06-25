<?php

define('UPDATING', false);
define('LAST_UPDATE', 'Group E Games');
define('SHOW_TEAMS', true);
define('SHOW_BONUS_TEXT', true);
define('TWEET', false);

/*************************************************/
/******************* TEAMS ***********************/
/*************************************************/

/*************************************************/
//A
define('SPAIN_WINS', 3);    define('SPAIN_TIES', 1);    define('SPAIN_BONUS', 0);
define('FRANCE_WINS', 6);   define('FRANCE_TIES', 0);   define('FRANCE_BONUS', 0);
define('ENGLAND_WINS', 3);    define('ENGLAND_TIES', 1);    define('ENGLAND_BONUS', 0);
define('SPAIN_OUT', 0);    define('FRANCE_OUT', 0);   define('ENGLAND_OUT', 0);

define('SPAIN',   serialize(array(SPAIN_WINS, SPAIN_TIES, SPAIN_BONUS, SPAIN_OUT)));
define('FRANCE',  serialize(array(FRANCE_WINS, FRANCE_TIES, FRANCE_BONUS, FRANCE_OUT)));
define('ENGLAND',   serialize(array(ENGLAND_WINS, ENGLAND_TIES, ENGLAND_BONUS, ENGLAND_OUT)));

/*************************************************/
//B
define('BRAZIL_WINS', 6);		define('BRAZIL_TIES', 1);		define('BRAZIL_BONUS', 0);
define('ARGENTINA_WINS', 6);	define('ARGENTINA_TIES', 0);	define('ARGENTINA_BONUS', 0);
define('PORTUGAL_WINS', 3);   define('PORTUGAL_TIES', 1);   define('PORTUGAL_BONUS', 0);
define('GERMANY_WINS', 6);   define('GERMANY_TIES', 0);    define('GERMANY_BONUS', 0);
define('BRAZIL_OUT', 0);    define('ARGENTINA_OUT', 0); define('PORTUGAL_OUT', 0);    define('GERMANY_OUT', 0);

define('PORTUGAL',  serialize(array(PORTUGAL_WINS, PORTUGAL_TIES, PORTUGAL_BONUS, PORTUGAL_OUT)));
define('BRAZIL', 	serialize(array(BRAZIL_WINS, BRAZIL_TIES, BRAZIL_BONUS, BRAZIL_OUT)));
define('ARGENTINA', serialize(array(ARGENTINA_WINS, ARGENTINA_TIES, ARGENTINA_BONUS, ARGENTINA_OUT)));
define('GERMANY', 	serialize(array(GERMANY_WINS, GERMANY_TIES, GERMANY_BONUS, GERMANY_OUT)));

/*************************************************/
//C
define('BELGIUM_WINS', 0);		define('BELGIUM_TIES', 2);		define('BELGIUM_BONUS', 0);
define('HOLLAND_WINS', 3);   define('HOLLAND_TIES', 1);    define('HOLLAND_BONUS', 0);
define('COLOMBIA_WINS', 6);  define('COLOMBIA_TIES', 0);   define('COLOMBIA_BONUS', 0);
define('NORWAY_WINS', 6);  define('NORWAY_TIES', 0);   define('NORWAY_BONUS', 0);
define('BELGIUM_OUT', 0);		define('HOLLAND_OUT', 0);  define('COLOMBIA_OUT', 0);   define('NORWAY_OUT', 0);

define('BELGIUM', 	serialize(array(BELGIUM_WINS, BELGIUM_TIES, BELGIUM_BONUS, BELGIUM_OUT)));
define('HOLLAND',   serialize(array(HOLLAND_WINS, HOLLAND_TIES, HOLLAND_BONUS, HOLLAND_OUT)));
define('COLOMBIA',  serialize(array(COLOMBIA_WINS, COLOMBIA_TIES, COLOMBIA_BONUS, COLOMBIA_OUT)));
define('NORWAY',  serialize(array(NORWAY_WINS, NORWAY_TIES, NORWAY_BONUS, NORWAY_OUT)));

/*************************************************/
//D
define('MEXICO_WINS', 9);   define('MEXICO_TIES', 0);   define('MEXICO_BONUS', 0);
define('MOROCCO_WINS', 3);   define('MOROCCO_TIES', 1);   define('MOROCCO_BONUS', 0);
define('URUGUAY_WINS', 0);    define('URUGUAY_TIES', 1);    define('URUGUAY_BONUS', 0);
define('SWITZ_WINS', 6);    define('SWITZ_TIES', 1);    define('SWITZ_BONUS', 0);
define('MEXICO_OUT', 0);   define('MOROCCO_OUT', 0);  define('URUGUAY_OUT', 0);   define('SWITZ_OUT', 0);

define('MEXICO',  serialize(array(MEXICO_WINS, MEXICO_TIES, MEXICO_BONUS, MEXICO_OUT)));
define('MOROCCO',  serialize(array(MOROCCO_WINS, MOROCCO_TIES, MOROCCO_BONUS, MOROCCO_OUT)));
define('URUGUAY',   serialize(array(URUGUAY_WINS, URUGUAY_TIES, URUGUAY_BONUS, URUGUAY_OUT)));
define('SWITZ',   serialize(array(SWITZ_WINS, SWITZ_TIES, SWITZ_BONUS, SWITZ_OUT)));

/*************************************************/
//E
define('ECUADOR_WINS', 3);    define('ECUADOR_TIES', 1);    define('ECUADOR_BONUS', 0);
define('JAPAN_WINS', 3);    define('JAPAN_TIES', 1);    define('JAPAN_BONUS', 0);
define('USA_WINS', 6);      define('USA_TIES', 0);      define('USA_BONUS', 0);
define('TURKEY_WINS', 0);      define('TURKEY_TIES', 0);      define('TURKEY_BONUS', 0);
define('ECUADOR_OUT', 0);   define('JAPAN_OUT', 0);  define('USA_OUT', 0);   define('TURKEY_OUT', 0);

define('ECUADOR',   serialize(array(ECUADOR_WINS, ECUADOR_TIES, ECUADOR_BONUS, ECUADOR_OUT)));
define('JAPAN',   serialize(array(JAPAN_WINS, JAPAN_TIES, JAPAN_BONUS, JAPAN_OUT)));
define('USA',     serialize(array(USA_WINS, USA_TIES, USA_BONUS, USA_OUT)));
define('TURKEY',     serialize(array(TURKEY_WINS, TURKEY_TIES, TURKEY_BONUS, TURKEY_OUT)));

/*************************************************/
//F
define('CROATIA_WINS', 3);    define('CROATIA_TIES', 0);    define('CROATIA_BONUS', 0);
define('IVORY_WINS', 6);    define('IVORY_TIES', 0);    define('IVORY_BONUS', 0);
define('CANADA_WINS', 3);    define('CANADA_TIES', 1);    define('CANADA_BONUS', 0);
define('AUSTRIA_WINS', 3);    define('AUSTRIA_TIES', 0);    define('AUSTRIA_BONUS', 0);
define('CROATIA_OUT', 0);   define('IVORY_OUT', 0);  define('CANADA_OUT', 0);   define('AUSTRIA_OUT', 0);

define('CROATIA',   serialize(array(CROATIA_WINS, CROATIA_TIES, CROATIA_BONUS, CROATIA_OUT)));
define('IVORY',   serialize(array(IVORY_WINS, IVORY_TIES, IVORY_BONUS, IVORY_OUT)));
define('CANADA',   serialize(array(CANADA_WINS, CANADA_TIES, CANADA_BONUS, CANADA_OUT)));
define('AUSTRIA',   serialize(array(AUSTRIA_WINS, AUSTRIA_TIES, AUSTRIA_BONUS, AUSTRIA_OUT)));

/*************************************************/
//G
define('SENEGAL_WINS', 0);    define('SENEGAL_TIES', 0);    define('SENEGAL_BONUS', 0);
define('SWEDEN_WINS', 3);   define('SWEDEN_TIES', 0);   define('SWEDEN_BONUS', 0);
define('SCOTLAND_WINS', 3);   define('SCOTLAND_TIES', 0);   define('SCOTLAND_BONUS', 0);
define('CZECH_WINS', 0);   define('CZECH_TIES', 1);   define('CZECH_BONUS', 0);
define('SENEGAL_OUT', 0);     define('SWEDEN_OUT', 0);     define('SCOTLAND_OUT', 0);    define('CZECH_OUT', 0);

define('SENEGAL',   serialize(array(SENEGAL_WINS, SENEGAL_TIES, SENEGAL_BONUS, SENEGAL_OUT)));
define('SWEDEN',  serialize(array(SWEDEN_WINS, SWEDEN_TIES, SWEDEN_BONUS, SWEDEN_OUT)));
define('SCOTLAND',  serialize(array(SCOTLAND_WINS, SCOTLAND_TIES, SCOTLAND_BONUS, SCOTLAND_OUT)));
define('CZECH',  serialize(array(CZECH_WINS, CZECH_TIES, CZECH_BONUS, CZECH_OUT)));

/*************************************************/
//H
define('ALGERIA_WINS', 3);    define('ALGERIA_TIES', 0);    define('ALGERIA_BONUS', 0);
define('KOREA_WINS', 3);    define('KOREA_TIES', 0);    define('KOREA_BONUS', 0);
define('PARAGUAY_WINS', 3);    define('PARAGUAY_TIES', 0);    define('PARAGUAY_BONUS', 0);
define('EGYPT_WINS', 3);    define('EGYPT_TIES', 1);    define('EGYPT_BONUS', 0);
define('ALGERIA_OUT', 0);     define('KOREA_OUT', 0);     define('PARAGUAY_OUT', 0);    define('EGYPT_OUT', 0);

define('ALGERIA',   serialize(array(ALGERIA_WINS, ALGERIA_TIES, ALGERIA_BONUS, ALGERIA_OUT)));
define('KOREA',   serialize(array(KOREA_WINS, KOREA_TIES, KOREA_BONUS, KOREA_OUT)));
define('PARAGUAY',   serialize(array(PARAGUAY_WINS, PARAGUAY_TIES, PARAGUAY_BONUS, PARAGUAY_OUT)));
define('EGYPT',   serialize(array(EGYPT_WINS, EGYPT_TIES, EGYPT_BONUS, EGYPT_OUT)));

/*************************************************/
//I
define('AUSTRALIA_WINS', 3);	define('AUSTRALIA_TIES', 0);	define('AUSTRALIA_BONUS', 0);
define('IRAN_WINS', 0);			define('IRAN_TIES', 2);			define('IRAN_BONUS', 0);
define('BOSNIA_WINS', 3);		define('BOSNIA_TIES', 1);		define('BOSNIA_BONUS', 0);
define('GHANA_WINS', 3);		define('GHANA_TIES', 1);		define('GHANA_BONUS', 0);
define('AUSTRALIA_OUT', 0);		define('IRAN_OUT', 0);			define('BOSNIA_OUT', 0);		define('GHANA_OUT', 0);

define('AUSTRALIA', serialize(array(AUSTRALIA_WINS, AUSTRALIA_TIES, AUSTRALIA_BONUS, AUSTRALIA_OUT)));
define('IRAN', 		serialize(array(IRAN_WINS, IRAN_TIES, IRAN_BONUS, IRAN_OUT)));
define('BOSNIA', 	serialize(array(BOSNIA_WINS, BOSNIA_TIES, BOSNIA_BONUS, BOSNIA_OUT)));
define('GHANA', 	serialize(array(GHANA_WINS, GHANA_TIES, GHANA_BONUS, GHANA_OUT)));



/*************************************************/
/****************** PLAYERS **********************/
/*************************************************/

/*************************************************/
//J
define('MBAPPE_GOALS', 8);   define('MBAPPE_BONUS', 0);
define('KANE_GOALS', 4);    define('KANE_BONUS', 0);
define('MBAPPE_OUT', 0);     define('KANE_OUT', 0);

define('MBAPPE', serialize(array(MBAPPE_GOALS, MBAPPE_BONUS, MBAPPE_OUT)));
define('KANE', serialize(array(KANE_GOALS, KANE_BONUS, KANE_OUT)));

/*************************************************/
//K
define('MESSI_GOALS', 10);		define('MESSI_BONUS', 0);
define('HAALAND_GOALS', 8);		define('HAALAND_BONUS', 0);
define('OYARZABAL_GOALS', 4);   define('OYARZABAL_BONUS', 0);
define('LAMAL_GOALS', 2);   define('LAMAL_BONUS', 0);
define('MESSI_OUT', 0);			define('HAALAND_OUT', 0);
define('OYARZABAL_OUT', 0);  define('LAMAL_OUT', 0);

define('MESSI', serialize(array(MESSI_GOALS, MESSI_BONUS, MESSI_OUT)));
define('HAALAND', serialize(array(HAALAND_GOALS, HAALAND_BONUS, HAALAND_OUT)));
define('OYARZABAL', serialize(array(OYARZABAL_GOALS, OYARZABAL_BONUS, OYARZABAL_OUT)));
define('LAMAL', serialize(array(LAMAL_GOALS, LAMAL_BONUS, LAMAL_OUT)));

/*************************************************/
//L
define('VINI_GOALS', 8);		define('VINI_BONUS', 0);
define('RONALDO_GOALS', 4);		define('RONALDO_BONUS', 0);
define('RAPHINHA_GOALS', 0);		define('RAPHINHA_BONUS', 0);
define('DEMBELE_GOALS', 0);		define('DEMBELE_BONUS', 0);
define('VINI_OUT', 0);		define('RONALDO_OUT', 0);
define('RAPHINHA_OUT', 0);		define('DEMBELE_OUT', 0);

define('VINI', serialize(array(VINI_GOALS, VINI_BONUS, VINI_OUT)));
define('RONALDO', serialize(array(RONALDO_GOALS, RONALDO_BONUS, RONALDO_OUT)));
define('RAPHINHA', serialize(array(RAPHINHA_GOALS, RAPHINHA_BONUS, RAPHINHA_OUT)));
define('DEMBELE', serialize(array(DEMBELE_GOALS, DEMBELE_BONUS, DEMBELE_OUT)));

/*************************************************/
//M
define('MARTINEZ_GOALS', 0);		define('MARTINEZ_BONUS', 0);
define('ALVAREZ_GOALS', 0);		define('ALVAREZ_BONUS', 0);
define('GAKPO_GOALS', 4);		define('GAKPO_BONUS', 0);
define('LUKAKU_GOALS', 0);		define('LUKAKU_BONUS', 0);
define('MARTINEZ_OUT', 0);		define('ALVAREZ_OUT', 0);
define('GAKPO_OUT', 0);		define('LUKAKU_OUT', 0);

define('MARTINEZ', serialize(array(MARTINEZ_GOALS, MARTINEZ_BONUS, MARTINEZ_OUT)));
define('ALVAREZ', serialize(array(ALVAREZ_GOALS, ALVAREZ_BONUS, ALVAREZ_OUT)));
define('GAKPO', serialize(array(GAKPO_GOALS, GAKPO_BONUS, GAKPO_OUT)));
define('LUKAKU', serialize(array(LUKAKU_GOALS, LUKAKU_BONUS, LUKAKU_OUT)));

/*************************************************/
//N
define('HAVERTZ_GOALS', 4);		define('HAVERTZ_BONUS', 0);
define('MALEN_GOALS', 0);		define('MALEN_BONUS', 0);
define('SAKA_GOALS', 0);		define('SAKA_BONUS', 0);
define('OLISE_GOALS', 0);		define('OLISE_BONUS', 0);
define('HAVERTZ_OUT', 0);		define('MALEN_OUT', 0);
define('SAKA_OUT', 0);		define('OLISE_OUT', 0);

define('HAVERTZ', serialize(array(HAVERTZ_GOALS, HAVERTZ_BONUS, HAVERTZ_OUT)));
define('MALEN', serialize(array(MALEN_GOALS, MALEN_BONUS, MALEN_OUT)));
define('SAKA', serialize(array(SAKA_GOALS, SAKA_BONUS, SAKA_OUT)));
define('OLISE', serialize(array(OLISE_GOALS, OLISE_BONUS, OLISE_OUT)));

/*************************************************/
//O
define('BRUNO_GOALS', 0);		define('BRUNO_BONUS', 0);
define('DIAZ_GOALS', 2);		define('DIAZ_BONUS', 0);
define('SUAREZ_GOALS', 0);	define('SUAREZ_BONUS', 0);
define('TORRES_GOALS', 0);		define('TORRES_BONUS', 0);
define('BRUNO_OUT', 0);		define('DIAZ_OUT', 0);
define('SUAREZ_OUT', 0);		define('TORRES_OUT', 0);

define('BRUNO', serialize(array(BRUNO_GOALS, BRUNO_BONUS, BRUNO_OUT)));
define('DIAZ', serialize(array(DIAZ_GOALS, DIAZ_BONUS, DIAZ_OUT)));
define('SUAREZ', serialize(array(SUAREZ_GOALS, SUAREZ_BONUS, SUAREZ_OUT)));
define('TORRES', serialize(array(TORRES_GOALS, TORRES_BONUS, TORRES_OUT)));

/*************************************************/
//P
define('GIMENEZ_GOALS', 0);		define('GIMENEZ_BONUS', 0);
define('BELLINGHAM_GOALS', 2);		define('BELLINGHAM_BONUS', 0);
define('ISAK_GOALS', 2);		define('ISAK_BONUS', 0);
define('MUSIALA_GOALS', 2);		define('MUSIALA_BONUS', 0);
define('GIMENEZ_OUT', 0);		define('BELLINGHAM_OUT', 0);
define('ISAK_OUT', 0);		define('MUSIALA_OUT', 0);

define('GIMENEZ', serialize(array(GIMENEZ_GOALS, GIMENEZ_BONUS, GIMENEZ_OUT)));
define('BELLINGHAM', serialize(array(BELLINGHAM_GOALS, BELLINGHAM_BONUS, BELLINGHAM_OUT)));
define('ISAK', serialize(array(ISAK_GOALS, ISAK_BONUS, ISAK_OUT)));
define('MUSIALA', serialize(array(MUSIALA_GOALS, MUSIALA_BONUS, MUSIALA_OUT)));

/*************************************************/
//Q
define('WIRTZ_GOALS', 0);		define('WIRTZ_BONUS', 0);
define('NEYMAR_GOALS', 0);		define('NEYMAR_BONUS', 0);
define('DEBRUYNE_GOALS', 0);		define('DEBRUYNE_BONUS', 0);
define('PULISIC_GOALS', 0);		define('PULISIC_BONUS', 0);

define('WIRTZ_OUT', 0);			define('NEYMAR_OUT', 0);
define('DEBRUYNE_OUT', 0);		define('PULISIC_OUT', 0);

define('WIRTZ', serialize(array(WIRTZ_GOALS, WIRTZ_BONUS, WIRTZ_OUT)));
define('NEYMAR', serialize(array(NEYMAR_GOALS, NEYMAR_BONUS, NEYMAR_OUT)));
define('DEBRUYNE', serialize(array(DEBRUYNE_GOALS, DEBRUYNE_BONUS, DEBRUYNE_OUT)));
define('PULISIC', serialize(array(PULISIC_GOALS, PULISIC_BONUS, PULISIC_OUT)));

/*************************************************/
//R
define('BALOGUN_GOALS', 4);   define('BALOGUN_BONUS', 0);
define('NUNEZ_GOALS', 0);    define('NUNEZ_BONUS', 0);
define('MANE_GOALS', 0);    define('MANE_BONUS', 0);
define('SALAH_GOALS', 2);   define('SALAH_BONUS', 0);

define('BALOGUN_OUT', 0);     define('NUNEZ_OUT', 0);
define('MANE_OUT', 0);    define('SALAH_OUT', 0);

define('BALOGUN', serialize(array(BALOGUN_GOALS, BALOGUN_BONUS, BALOGUN_OUT)));
define('NUNEZ', serialize(array(NUNEZ_GOALS, NUNEZ_BONUS, NUNEZ_OUT)));
define('MANE', serialize(array(MANE_GOALS, MANE_BONUS, MANE_OUT)));
define('SALAH', serialize(array(SALAH_GOALS, SALAH_BONUS, SALAH_OUT)));

/*************************************************/
//S
define('LEAO_GOALS', 2);		define('LEAO_BONUS', 0);
define('DAVID_GOALS', 6);	define('DAVID_BONUS', 0);
define('SON_GOALS', 0);		define('SON_BONUS', 0);
define('DZEKO_GOALS', 0);		define('DZEKO_BONUS', 0);
define('AKTURKOGLU_GOALS', 0);   define('AKTURKOGLU_BONUS', 0);
define('LEAO_OUT', 0);		define('DAVID_OUT', 0);
define('SON_OUT', 0);		define('DZEKO_OUT', 0);    define('AKTURKOGLU_OUT', 0);

define('LEAO', serialize(array(LEAO_GOALS, LEAO_BONUS, LEAO_OUT)));
define('DAVID', serialize(array(DAVID_GOALS, DAVID_BONUS, DAVID_OUT)));
define('SON', serialize(array(SON_GOALS, SON_BONUS, SON_OUT)));
define('DZEKO', serialize(array(DZEKO_GOALS, DZEKO_BONUS, DZEKO_OUT)));
define('AKTURKOGLU', serialize(array(AKTURKOGLU_GOALS, AKTURKOGLU_BONUS, AKTURKOGLU_OUT)));

/*************************************************/
//T
define('SCHICK_GOALS', 0);		define('SCHICK_BONUS', 0);
define('LARSEN_GOALS', 0);		define('LARSEN_BONUS', 0);
define('MAHREZ_GOALS', 0);		define('MAHREZ_BONUS', 0);
define('RODRIGUEZ_GOALS', 0);		define('RODRIGUEZ_BONUS', 0);
define('VALENCIA_GOALS', 0);   define('VALENCIA_BONUS', 0);
define('SCHICK_OUT', 0);		define('LARSEN_OUT', 0);
define('MAHREZ_OUT', 0);		define('RODRIGUEZ_OUT', 0);   define('VALENCIA_OUT', 0);

define('SCHICK', serialize(array(SCHICK_GOALS, SCHICK_BONUS, SCHICK_OUT)));
define('LARSEN', serialize(array(LARSEN_GOALS, LARSEN_BONUS, LARSEN_OUT)));
define('MAHREZ', serialize(array(MAHREZ_GOALS, MAHREZ_BONUS, MAHREZ_OUT)));
define('RODRIGUEZ', serialize(array(RODRIGUEZ_GOALS, RODRIGUEZ_BONUS, RODRIGUEZ_OUT)));
define('VALENCIA', serialize(array(VALENCIA_GOALS, VALENCIA_BONUS, VALENCIA_OUT)));

/*************************************************/
//U
define('MCTOMINAY_GOALS', 0);		define('MCTOMINAY_BONUS', 0);
define('BRAHIM_GOALS', 0);		define('BRAHIM_BONUS', 0);
define('UEDA_GOALS', 4);	define('UEDA_BONUS', 0);
define('EMBOLO_GOALS', 2);	define('EMBOLO_BONUS', 0);
define('KRAMARIC_GOALS', 0);  define('KRAMARIC_BONUS', 0);
define('MCTOMINAY_OUT', 0);		define('BRAHIM_OUT', 0);
define('UEDA_OUT', 0);		define('EMBOLO_OUT', 0);    define('KRAMARIC_OUT', 0);

define('MCTOMINAY', serialize(array(MCTOMINAY_GOALS, MCTOMINAY_BONUS, MCTOMINAY_OUT)));
define('BRAHIM', serialize(array(BRAHIM_GOALS, BRAHIM_BONUS, BRAHIM_OUT)));
define('UEDA', serialize(array(UEDA_GOALS, UEDA_BONUS, UEDA_OUT)));
define('EMBOLO', serialize(array(EMBOLO_GOALS, EMBOLO_BONUS, EMBOLO_OUT)));
define('KRAMARIC', serialize(array(KRAMARIC_GOALS, KRAMARIC_BONUS, KRAMARIC_OUT)));
