<?php

define('UPDATING', false);
define('LAST_UPDATE', 'After Argentina vs Canada');
define('SHOW_TEAMS', true);
define('SHOW_BONUS_TEXT', true);
define('TWEET', false);

/*************************************************/
/******************* TEAMS ***********************/
/*************************************************/

/*************************************************/
//A
define('ENGLAND_WINS', 9);		define('ENGLAND_TIES', 2);		define('ENGLAND_BONUS', 0);
define('FRANCE_WINS', 9);   define('FRANCE_TIES', 2);   define('FRANCE_BONUS', 0);
define('ENGLAND_OUT', 0);		define('FRANCE_OUT', 1);

define('ENGLAND',   serialize(array(ENGLAND_WINS, ENGLAND_TIES, ENGLAND_BONUS, ENGLAND_OUT)));
define('FRANCE',  serialize(array(FRANCE_WINS, FRANCE_TIES, FRANCE_BONUS, FRANCE_OUT)));

/*************************************************/
//B
define('SPAIN_WINS', 18);    define('SPAIN_TIES', 0);    define('SPAIN_BONUS', 3);
define('GERMANY_WINS', 9);   define('GERMANY_TIES', 1);    define('GERMANY_BONUS', 0);
define('PORTUGAL_WINS', 9);   define('PORTUGAL_TIES', 1);   define('PORTUGAL_BONUS', 0);
define('SPAIN_OUT', 0);     define('GERMANY_OUT', 1);   define('PORTUGAL_OUT', 1);

define('SPAIN',   serialize(array(SPAIN_WINS, SPAIN_TIES, SPAIN_BONUS, SPAIN_OUT)));
define('GERMANY',   serialize(array(GERMANY_WINS, GERMANY_TIES, GERMANY_BONUS, GERMANY_OUT)));
define('PORTUGAL',  serialize(array(PORTUGAL_WINS, PORTUGAL_TIES, PORTUGAL_BONUS, PORTUGAL_OUT)));

/*************************************************/
//C
define('BELGIUM_WINS', 3);   define('BELGIUM_TIES', 1);    define('BELGIUM_BONUS', 0);
define('HOLLAND_WINS', 9);   define('HOLLAND_TIES', 1);    define('HOLLAND_BONUS', 3);
define('ITALY_WINS', 3);    define('ITALY_TIES', 1);    define('ITALY_BONUS', 0);
define('BELGIUM_OUT', 1);   define('HOLLAND_OUT', 0);   define('ITALY_OUT', 1);

define('BELGIUM',   serialize(array(BELGIUM_WINS, BELGIUM_TIES, BELGIUM_BONUS, BELGIUM_OUT)));
define('HOLLAND',   serialize(array(HOLLAND_WINS, HOLLAND_TIES, HOLLAND_BONUS, HOLLAND_OUT)));
define('ITALY',   serialize(array(ITALY_WINS, ITALY_TIES, ITALY_BONUS, ITALY_OUT)));

/*************************************************/
//D
define('DENMARK_WINS', 0);    define('DENMARK_TIES', 3);    define('DENMARK_BONUS', 0);
define('CROATIA_WINS', 0);    define('CROATIA_TIES', 2);    define('CROATIA_BONUS', 0);
define('TURKEY_WINS', 9);    define('TURKEY_TIES', 0);    define('TURKEY_BONUS', 3);
define('SWITZERLAND_WINS', 6);    define('SWITZERLAND_TIES', 2);    define('SWITZERLAND_BONUS', 0);
define('DENMARK_OUT', 1);   define('CROATIA_OUT', 1);   define('TURKEY_OUT', 1);   define('SWITZERLAND_OUT', 1);

define('DENMARK',   serialize(array(DENMARK_WINS, DENMARK_TIES, DENMARK_BONUS, DENMARK_OUT)));
define('CROATIA',   serialize(array(CROATIA_WINS, CROATIA_TIES, CROATIA_BONUS, CROATIA_OUT)));
define('TURKEY',   serialize(array(TURKEY_WINS, TURKEY_TIES, TURKEY_BONUS, TURKEY_OUT)));
define('SWITZERLAND',   serialize(array(SWITZERLAND_WINS, SWITZERLAND_TIES, SWITZERLAND_BONUS, SWITZERLAND_OUT)));

/*************************************************/
//E
define('SERBIA_WINS', 0);   define('SERBIA_TIES', 2);    define('SERBIA_BONUS', 0);
define('AUSTRIA_WINS', 6);   define('AUSTRIA_TIES', 0);    define('AUSTRIA_BONUS', 3);
define('HUNGARY_WINS', 3);    define('HUNGARY_TIES', 0);    define('HUNGARY_BONUS', 0);
define('SERBIA_OUT', 1);   define('AUSTRIA_OUT', 1);   define('HUNGARY_OUT', 1);

define('SERBIA',   serialize(array(SERBIA_WINS, SERBIA_TIES, SERBIA_BONUS, SERBIA_OUT)));
define('AUSTRIA',   serialize(array(AUSTRIA_WINS, AUSTRIA_TIES, AUSTRIA_BONUS, AUSTRIA_OUT)));
define('HUNGARY',   serialize(array(HUNGARY_WINS, HUNGARY_TIES, HUNGARY_BONUS, HUNGARY_OUT)));

/*************************************************/
//F
define('SCOTLAND_WINS', 0);    define('SCOTLAND_TIES', 1);    define('SCOTLAND_BONUS', 0);
define('POLAND_WINS', 0);    define('POLAND_TIES', 1);    define('POLAND_BONUS', 0);
define('UKRAINE_WINS', 3);    define('UKRAINE_TIES', 1);    define('UKRAINE_BONUS', 3);
define('CZECH_REPUBLIC_WINS', 0);    define('CZECH_REPUBLIC_TIES', 1);    define('CZECH_REPUBLIC_BONUS', 0);
define('SCOTLAND_OUT', 1);   define('POLAND_OUT', 1);   define('UKRAINE_OUT', 1);   define('CZECH_REPUBLIC_OUT', 1);

define('SCOTLAND',   serialize(array(SCOTLAND_WINS, SCOTLAND_TIES, SCOTLAND_BONUS, SCOTLAND_OUT)));
define('POLAND',   serialize(array(POLAND_WINS, POLAND_TIES, POLAND_BONUS, POLAND_OUT)));
define('UKRAINE',   serialize(array(UKRAINE_WINS, UKRAINE_TIES, UKRAINE_BONUS, UKRAINE_OUT)));
define('CZECH_REPUBLIC',   serialize(array(CZECH_REPUBLIC_WINS, CZECH_REPUBLIC_TIES, CZECH_REPUBLIC_BONUS, CZECH_REPUBLIC_OUT)));

/*************************************************/
//G
define('ROMANIA_WINS', 3);    define('ROMANIA_TIES', 1);    define('ROMANIA_BONUS', 3);
define('SLOVENIA_WINS', 0);    define('SLOVENIA_TIES', 3);    define('SLOVENIA_BONUS', 0);
define('ALBANIA_WINS', 0);    define('ALBANIA_TIES', 1);    define('ALBANIA_BONUS', 0);
define('GEORGIA_WINS', 3);    define('GEORGIA_TIES', 1);    define('GEORGIA_BONUS', 3);
define('SLOVAKIA_WINS', 3);    define('SLOVAKIA_TIES', 1);    define('SLOVAKIA_BONUS', 3);
define('ROMANIA_OUT', 1);   define('SLOVENIA_OUT', 1);   define('ALBANIA_OUT', 1);   define('GEORGIA_OUT', 1);   define('SLOVAKIA_OUT', 1);

define('ROMANIA',   serialize(array(ROMANIA_WINS, ROMANIA_TIES, ROMANIA_BONUS, ROMANIA_OUT)));
define('SLOVENIA',   serialize(array(SLOVENIA_WINS, SLOVENIA_TIES, SLOVENIA_BONUS, SLOVENIA_OUT)));
define('ALBANIA',   serialize(array(ALBANIA_WINS, ALBANIA_TIES, ALBANIA_BONUS, ALBANIA_OUT)));
define('GEORGIA',   serialize(array(GEORGIA_WINS, GEORGIA_TIES, GEORGIA_BONUS, GEORGIA_OUT)));
define('SLOVAKIA',   serialize(array(SLOVAKIA_WINS, SLOVAKIA_TIES, SLOVAKIA_BONUS, SLOVAKIA_OUT)));

/*************************************************/
//H
define('MBAPPE_GOALS', 2);   define('MBAPPE_BONUS', 0);
define('KANE_GOALS', 4);    define('KANE_BONUS', 3);
define('MBAPPE_OUT', 1);     define('KANE_OUT', 0);

define('MBAPPE', serialize(array(MBAPPE_GOALS, MBAPPE_BONUS, MBAPPE_OUT)));
define('KANE', serialize(array(KANE_GOALS, KANE_BONUS, KANE_OUT)));

/*************************************************/
//I
define('RONALDO_GOALS', 0);   define('RONALDO_BONUS', 0);
define('LUKAKU_GOALS', 0);    define('LUKAKU_BONUS', 0);
define('BELLINGHAM_GOALS', 4);    define('BELLINGHAM_BONUS', 3);
define('RONALDO_OUT', 1);     define('LUKAKU_OUT', 1);     define('BELLINGHAM_OUT', 0);

define('RONALDO', serialize(array(RONALDO_GOALS, RONALDO_BONUS, RONALDO_OUT)));
define('LUKAKU', serialize(array(LUKAKU_GOALS, LUKAKU_BONUS, LUKAKU_OUT)));
define('BELLINGHAM', serialize(array(BELLINGHAM_GOALS, BELLINGHAM_BONUS, BELLINGHAM_OUT)));

/*************************************************/
//J
define('GIROUD_GOALS', 0);    define('GIROUD_BONUS', 0);
define('FODEN_GOALS', 0);   define('FODEN_BONUS', 0);
define('MORATA_GOALS', 2);    define('MORATA_BONUS', 0);
define('HAVERTZ_GOALS', 4);    define('HAVERTZ_BONUS', 0);
define('GIROUD_OUT', 1);    define('FODEN_OUT', 0);   define('MORATA_OUT', 0);    define('HAVERTZ_OUT', 1);

define('GIROUD', serialize(array(GIROUD_GOALS, GIROUD_BONUS, GIROUD_OUT)));
define('FODEN', serialize(array(FODEN_GOALS, FODEN_BONUS, FODEN_OUT)));
define('MORATA', serialize(array(MORATA_GOALS, MORATA_BONUS, MORATA_OUT)));
define('HAVERTZ', serialize(array(HAVERTZ_GOALS, HAVERTZ_BONUS, HAVERTZ_OUT)));

/*************************************************/
//K
define('SANE_GOALS', 0);    define('SANE_BONUS', 0);
define('HOJLUND_GOALS', 0);   define('HOJLUND_BONUS', 0);
define('NITROVIC_GOALS', 0);    define('NITROVIC_BONUS', 0);
define('FERNANDES_GOALS', 2);    define('FERNANDES_BONUS', 3);
define('SANE_OUT', 1);    define('HOJLUND_OUT', 1);   define('NITROVIC_OUT', 1);    define('FERNANDES_OUT', 1);

define('SANE', serialize(array(SANE_GOALS, SANE_BONUS, SANE_OUT)));
define('HOJLUND', serialize(array(HOJLUND_GOALS, HOJLUND_BONUS, HOJLUND_OUT)));
define('NITROVIC', serialize(array(NITROVIC_GOALS, NITROVIC_BONUS, NITROVIC_OUT)));
define('FERNANDES', serialize(array(FERNANDES_GOALS, FERNANDES_BONUS, FERNANDES_OUT)));

/*************************************************/
//L
define('GAKPO_GOALS', 6);    define('GAKPO_BONUS', 0);
define('VLAHOVIC_GOALS', 0);   define('VLAHOVIC_BONUS', 0);
define('SCAMACCA_GOALS', 0);    define('SCAMACCA_BONUS', 0);
define('MUSIALA_GOALS', 6);    define('MUSIALA_BONUS', 0);
define('GAKPO_OUT', 0);    define('VLAHOVIC_OUT', 1);   define('SCAMACCA_OUT', 1);    define('MUSIALA_OUT', 1);

define('GAKPO', serialize(array(GAKPO_GOALS, GAKPO_BONUS, GAKPO_OUT)));
define('VLAHOVIC', serialize(array(VLAHOVIC_GOALS, VLAHOVIC_BONUS, VLAHOVIC_OUT)));
define('SCAMACCA', serialize(array(SCAMACCA_GOALS, SCAMACCA_BONUS, SCAMACCA_OUT)));
define('MUSIALA', serialize(array(MUSIALA_GOALS, MUSIALA_BONUS, MUSIALA_OUT)));

/*************************************************/
//M
define('MALEN_GOALS', 4);    define('MALEN_BONUS', 3);
define('DE_BRUYNE_GOALS', 2);   define('DE_BRUYNE_BONUS', 0);
define('BUDIMIR_GOALS', 0);    define('BUDIMIR_BONUS', 0);
define('CHIESA_GOALS', 0);    define('CHIESA_BONUS', 0);
define('MALEN_OUT', 0);    define('DE_BRUYNE_OUT', 1);   define('BUDIMIR_OUT', 1);    define('CHIESA_OUT', 1);

define('MALEN', serialize(array(MALEN_GOALS, MALEN_BONUS, MALEN_OUT)));
define('DE_BRUYNE', serialize(array(DE_BRUYNE_GOALS, DE_BRUYNE_BONUS, DE_BRUYNE_OUT)));
define('BUDIMIR', serialize(array(BUDIMIR_GOALS, BUDIMIR_BONUS, BUDIMIR_OUT)));
define('CHIESA', serialize(array(CHIESA_GOALS, CHIESA_BONUS, CHIESA_OUT)));

/*************************************************/
//N
define('DOVBYK_GOALS', 0);    define('DOVBYK_BONUS', 0);
define('SCHICK_GOALS', 2);   define('SCHICK_BONUS', 3);
define('LEWANDOWSKI_GOALS', 2);    define('LEWANDOWSKI_BONUS', 3);
define('AKTURKOGLU_GOALS', 2);    define('AKTURKOGLU_BONUS', 3);
define('DOVBYK_OUT', 1);    define('SCHICK_OUT', 1);   define('LEWANDOWSKI_OUT', 1);    define('AKTURKOGLU_OUT', 1);

define('DOVBYK', serialize(array(DOVBYK_GOALS, DOVBYK_BONUS, DOVBYK_OUT)));
define('SCHICK', serialize(array(SCHICK_GOALS, SCHICK_BONUS, SCHICK_OUT)));
define('LEWANDOWSKI', serialize(array(LEWANDOWSKI_GOALS, LEWANDOWSKI_BONUS, LEWANDOWSKI_OUT)));
define('AKTURKOGLU', serialize(array(AKTURKOGLU_GOALS, AKTURKOGLU_BONUS, AKTURKOGLU_OUT)));

/*************************************************/
//O
define('BRAZIL_WINS', 3);    define('BRAZIL_TIES', 2);    define('BRAZIL_BONUS', 0);
define('ARGENTINA_WINS', 15);   define('ARGENTINA_TIES', 0);   define('ARGENTINA_BONUS', 3);
define('BRAZIL_OUT', 1);   define('ARGENTINA_OUT', 0);

define('BRAZIL', 	serialize(array(BRAZIL_WINS, BRAZIL_TIES, BRAZIL_BONUS, BRAZIL_OUT)));
define('ARGENTINA', serialize(array(ARGENTINA_WINS, ARGENTINA_TIES, ARGENTINA_BONUS, ARGENTINA_OUT)));

/*************************************************/
//P
define('URUGUAY_WINS', 12);    define('URUGUAY_TIES', 0);    define('URUGUAY_BONUS', 0);
define('MEXICO_WINS', 3);   define('MEXICO_TIES', 1);    define('MEXICO_BONUS', 0);
define('COLOMBIA_WINS', 9);   define('COLOMBIA_TIES', 1);   define('COLOMBIA_BONUS', 0);
define('URUGUAY_OUT', 0);     define('MEXICO_OUT', 1);   define('COLOMBIA_OUT', 0);

define('URUGUAY',   serialize(array(URUGUAY_WINS, URUGUAY_TIES, URUGUAY_BONUS, URUGUAY_OUT)));
define('MEXICO',   serialize(array(MEXICO_WINS, MEXICO_TIES, MEXICO_BONUS, MEXICO_OUT)));
define('COLOMBIA',  serialize(array(COLOMBIA_WINS, COLOMBIA_TIES, COLOMBIA_BONUS, COLOMBIA_OUT)));

/*************************************************/
//Q
define('USA_WINS', 3);    define('USA_TIES', 0);    define('USA_BONUS', 0);
define('ECUADOR_WINS', 3);   define('ECUADOR_TIES', 1);    define('ECUADOR_BONUS', 3);
define('CHILE_WINS', 0);   define('CHILE_TIES', 2);   define('CHILE_BONUS', 0);
define('USA_OUT', 1);     define('ECUADOR_OUT', 1);   define('CHILE_OUT', 1);

define('USA',   serialize(array(USA_WINS, USA_TIES, USA_BONUS, USA_OUT)));
define('ECUADOR',   serialize(array(ECUADOR_WINS, ECUADOR_TIES, ECUADOR_BONUS, ECUADOR_OUT)));
define('CHILE',  serialize(array(CHILE_WINS, CHILE_TIES, CHILE_BONUS, CHILE_OUT)));

/*************************************************/
//R
define('PERU_WINS', 0);    define('PERU_TIES', 1);    define('PERU_BONUS', 0);
define('VENEZUELA_WINS', 9);    define('VENEZUELA_TIES', 0);    define('VENEZUELA_BONUS', 0);
define('PARAGUAY_WINS', 0);    define('PARAGUAY_TIES', 0);    define('PARAGUAY_BONUS', 0);
define('CANADA_WINS', 6);    define('CANADA_TIES', 2);    define('CANADA_BONUS', 0);
define('PERU_OUT', 1);   define('VENEZUELA_OUT', 1);   define('PARAGUAY_OUT', 1);   define('CANADA_OUT', 0);

define('PERU',   serialize(array(PERU_WINS, PERU_TIES, PERU_BONUS, PERU_OUT)));
define('VENEZUELA',   serialize(array(VENEZUELA_WINS, VENEZUELA_TIES, VENEZUELA_BONUS, VENEZUELA_OUT)));
define('PARAGUAY',   serialize(array(PARAGUAY_WINS, PARAGUAY_TIES, PARAGUAY_BONUS, PARAGUAY_OUT)));
define('CANADA',   serialize(array(CANADA_WINS, CANADA_TIES, CANADA_BONUS, CANADA_OUT)));

/*************************************************/
//S
define('COSTA_RICA_WINS', 3);    define('COSTA_RICA_TIES', 1);    define('COSTA_RICA_BONUS', 0);
define('JAMAICA_WINS', 0);    define('JAMAICA_TIES', 0);    define('JAMAICA_BONUS', 0);
define('PANAMA_WINS', 6);    define('PANAMA_TIES', 0);    define('PANAMA_BONUS', 3);
define('BOLIVIA_WINS', 0);    define('BOLIVIA_TIES', 0);    define('BOLIVIA_BONUS', 0);
define('COSTA_RICA_OUT', 1);   define('JAMAICA_OUT', 1);   define('PANAMA_OUT', 1);   define('BOLIVIA_OUT', 1);

define('COSTA_RICA',   serialize(array(COSTA_RICA_WINS, COSTA_RICA_TIES, COSTA_RICA_BONUS, COSTA_RICA_OUT)));
define('JAMAICA',   serialize(array(JAMAICA_WINS, JAMAICA_TIES, JAMAICA_BONUS, JAMAICA_OUT)));
define('PANAMA',   serialize(array(PANAMA_WINS, PANAMA_TIES, PANAMA_BONUS, PANAMA_OUT)));
define('BOLIVIA',   serialize(array(BOLIVIA_WINS, BOLIVIA_TIES, BOLIVIA_BONUS, BOLIVIA_OUT)));

/*************************************************/
//T
define('MESSI_GOALS', 2);   define('MESSI_BONUS', 0);
define('VINICIUS_JR_GOALS', 4);    define('VINICIUS_JR_BONUS', 0);
define('MESSI_OUT', 0);     define('VINICIUS_JR_OUT', 1);

define('MESSI', serialize(array(MESSI_GOALS, MESSI_BONUS, MESSI_OUT)));
define('VINICIUS_JR', serialize(array(VINICIUS_JR_GOALS, VINICIUS_JR_BONUS, VINICIUS_JR_OUT)));

/*************************************************/
//U
define('NUNEZ_GOALS', 4);    define('NUNEZ_BONUS', 0);
define('ALVAREZ_GOALS', 4);   define('ALVAREZ_BONUS', 0);
define('RODRYGO_GOALS', 0);    define('RODRYGO_BONUS', 0);
define('MARTINEZ_GOALS', 8);    define('MARTINEZ_BONUS', 0);
define('MARTINELLI_GOALS', 0);    define('MARTINELLI_BONUS', 0);
define('NUNEZ_OUT', 0);    define('ALVAREZ_OUT', 0);   define('RODRYGO_OUT', 1);    define('MARTINEZ_OUT', 0);  define('MARTINELLI_OUT', 1);

define('NUNEZ', serialize(array(NUNEZ_GOALS, NUNEZ_BONUS, NUNEZ_OUT)));
define('ALVAREZ', serialize(array(ALVAREZ_GOALS, ALVAREZ_BONUS, ALVAREZ_OUT)));
define('RODRYGO', serialize(array(RODRYGO_GOALS, RODRYGO_BONUS, RODRYGO_OUT)));
define('MARTINEZ', serialize(array(MARTINEZ_GOALS, MARTINEZ_BONUS, MARTINEZ_OUT)));
define('MARTINELLI', serialize(array(MARTINELLI_GOALS, MARTINELLI_BONUS, MARTINELLI_OUT)));

/*************************************************/
//V
define('SUAREZ_GOALS', 0);    define('SUAREZ_BONUS', 0);
define('PULISIC_GOALS', 2);   define('PULISIC_BONUS', 0);
define('VALENCIA_GOALS', 0);    define('VALENCIA_BONUS', 0);
define('DIAZ_GOALS', 4);    define('DIAZ_BONUS', 0);
define('SUAREZ_OUT', 0);    define('PULISIC_OUT', 1);   define('VALENCIA_OUT', 1);    define('DIAZ_OUT', 0);

define('SUAREZ', serialize(array(SUAREZ_GOALS, SUAREZ_BONUS, SUAREZ_OUT)));
define('PULISIC', serialize(array(PULISIC_GOALS, PULISIC_BONUS, PULISIC_OUT)));
define('VALENCIA', serialize(array(VALENCIA_GOALS, VALENCIA_BONUS, VALENCIA_OUT)));
define('DIAZ', serialize(array(DIAZ_GOALS, DIAZ_BONUS, DIAZ_OUT)));

/*************************************************/
//W
define('GIMENEZ_GOALS', 0);    define('GIMENEZ_BONUS', 0);
define('VARGAS_GOALS', 0);   define('VARGAS_BONUS', 0);
define('DAVID_GOALS', 2);    define('DAVID_BONUS', 3);
define('LAPADULA_GOALS', 0);    define('LAPADULA_BONUS', 0);
define('GIMENEZ_OUT', 1);    define('VARGAS_OUT', 1);   define('DAVID_OUT', 0);    define('LAPADULA_OUT', 1);

define('GIMENEZ', serialize(array(GIMENEZ_GOALS, GIMENEZ_BONUS, GIMENEZ_OUT)));
define('VARGAS', serialize(array(VARGAS_GOALS, VARGAS_BONUS, VARGAS_OUT)));
define('DAVID', serialize(array(DAVID_GOALS, DAVID_BONUS, DAVID_OUT)));
define('LAPADULA', serialize(array(LAPADULA_GOALS, LAPADULA_BONUS, LAPADULA_OUT)));

/*************************************************/
//X
define('BAREIRO_GOALS', 0);    define('BAREIRO_BONUS', 0);
define('RONDON_GOALS', 6);   define('RONDON_BONUS', 0);
define('UGALDE_GOALS', 0);    define('UGALDE_BONUS', 0);
define('NICHOLSON_GOALS', 0);    define('NICHOLSON_BONUS', 0);
define('DAVIES_GOALS', 0);    define('DAVIES_BONUS', 0);
define('BAREIRO_OUT', 1);    define('RONDON_OUT', 1);   define('UGALDE_OUT', 1);    define('NICHOLSON_OUT', 1); define('DAVIES_OUT', 0);

define('BAREIRO', serialize(array(BAREIRO_GOALS, BAREIRO_BONUS, BAREIRO_OUT)));
define('RONDON', serialize(array(RONDON_GOALS, RONDON_BONUS, RONDON_OUT)));
define('UGALDE', serialize(array(UGALDE_GOALS, UGALDE_BONUS, UGALDE_OUT)));
define('NICHOLSON', serialize(array(NICHOLSON_GOALS, NICHOLSON_BONUS, NICHOLSON_OUT)));
define('DAVIES', serialize(array(DAVIES_GOALS, DAVIES_BONUS, DAVIES_OUT)));

