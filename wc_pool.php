<?php

require_once('teams.php');
require_once('wc_config.php');
require_once('wc_team.php');


class WC_Pool {

  public $standings = array();
  
  public $wc_teams = array();


  public function __construct() {

    $allteams = unserialize(WC_TEAMS);

    foreach($allteams as $i => $team) {
      $this->wc_teams[] = $team['name'];
    }
  }

  public function calculateStandings() {
  
    foreach($this->wc_teams as $team_name) {

      $Team = new WC_Team($team_name);
      $this->standings[$team_name] = $Team->calculatePoints();
    }
  }

  public function displayStandings() {
  
	$standings = $this->standings;
	echo '<h2>STANDINGS</h2>';
	echo '<p><span class="out">Team or Player has no games left</span></p>';
	echo '<div class="standings"><table class="imagetable"><tr><th>Name</th><th>Points</th></tr>';

	while(count($standings)) {
	  
	  $top = -1;
	  $topName = '';
	  
	  foreach($standings as $name => $pts) {
	    if($pts['total'] > $top) {
	      $top = $pts['total'];
	  	  $topName = $name;    
	    }
	  }
	  
	  $anchor = str_replace(' ', '', $topName);
	  echo '<tr><td><a href="#'.$anchor.'">'.$topName.'</a></td><td>'.$top.'</td></tr>';
	  unset($standings[$topName]);
	}

	echo '</table></div>';
  }

  public function displayTeams() {

    foreach($this->wc_teams as $team_name) {

      $Team = new WC_Team($team_name);
	  	$Team->displayTeam();
		}
  }

  public static function getIndPointsFormatted($individual) {
  
    $total = 0;
    $ind = unserialize($individual);
    array_pop($ind);

    foreach($ind as $i) {
      $total += $i;
    }
    
    if($total == 0) return '';
    
    $bn = (end($ind) > 0)? ' *':'';
    return ($total == 1)? ' ('.$total.'pt)'.$bn:' ('.$total.'pts)'.$bn;
  }

  public static function inORout($individual) {

    $ind = unserialize($individual);
  	$in_out = 'class="in"';
		$out = array_pop($ind);

		if($out) {
		  $in_out = 'class="out"';
		}
  
    return $in_out;
  }


  public function displayGroups() {
    echo '<div class="groups"><a name="groups"/><h2>GROUPS</h2>';
    if(SHOW_BONUS_TEXT) echo '<p> (* - includes 3 point bonus for winning the bracket)</p>';

    echo '<table class="imagetable">';

    echo '<tr><th>1</th></tr>';
    echo '<tr><td '.self::inORout(SPAIN).'>SPAIN'.self::getIndPointsFormatted(SPAIN).'</td></tr>';
    echo '<tr><td '.self::inORout(FRANCE).'>FRANCE'.self::getIndPointsFormatted(FRANCE).'</td></tr>';
    echo '<tr><td '.self::inORout(ENGLAND).'>ENGLAND'.self::getIndPointsFormatted(ENGLAND).'</td></tr>';

    echo '<tr><th>2</th></tr>';
    echo '<tr><td '.self::inORout(PORTUGAL).'>PORTUGAL'.self::getIndPointsFormatted(PORTUGAL).'</td></tr>';
    echo '<tr><td '.self::inORout(ARGENTINA).'>ARGENTINA'.self::getIndPointsFormatted(ARGENTINA).'</td></tr>';
    echo '<tr><td '.self::inORout(BRAZIL).'>BRAZIL'.self::getIndPointsFormatted(BRAZIL).'</td></tr>';
    echo '<tr><td '.self::inORout(GERMANY).'>GERMANY'.self::getIndPointsFormatted(GERMANY).'</td></tr>';

    echo '<tr><th>3</th></tr>';
    echo '<tr><td '.self::inORout(BELGIUM).'>BELGIUM'.self::getIndPointsFormatted(BELGIUM).'</td></tr>';
    echo '<tr><td '.self::inORout(HOLLAND).'>HOLLAND'.self::getIndPointsFormatted(HOLLAND).'</td></tr>';
    echo '<tr><td '.self::inORout(COLOMBIA).'>COLOMBIA'.self::getIndPointsFormatted(COLOMBIA).'</td></tr>';
    echo '<tr><td '.self::inORout(NORWAY).'>NORWAY'.self::getIndPointsFormatted(NORWAY).'</td></tr>';

    echo '<tr><th>4</th></tr>';
    echo '<tr><td '.self::inORout(MOROCCO).'>MOROCCO'.self::getIndPointsFormatted(MOROCCO).'</td></tr>';
    echo '<tr><td '.self::inORout(MEXICO).'>MEXICO'.self::getIndPointsFormatted(MEXICO).'</td></tr>';
    echo '<tr><td '.self::inORout(URUGUAY).'>URUGUAY'.self::getIndPointsFormatted(URUGUAY).'</td></tr>';
    echo '<tr><td '.self::inORout(SWITZ).'>SWITZERLAND'.self::getIndPointsFormatted(SWITZ).'</td></tr>';

    echo '<tr><th>5</th></tr>';
    echo '<tr><td '.self::inORout(ECUADOR).'>ECUADOR'.self::getIndPointsFormatted(ECUADOR).'</td></tr>';
    echo '<tr><td '.self::inORout(JAPAN).'>JAPAN'.self::getIndPointsFormatted(JAPAN).'</td></tr>';
    echo '<tr><td '.self::inORout(USA).'>US'.self::getIndPointsFormatted(USA).'</td></tr>';
    echo '<tr><td '.self::inORout(TURKEY).'>TURKEY'.self::getIndPointsFormatted(TURKEY).'</td></tr>';

    echo '<tr><th>6</th></tr>';
    echo '<tr><td '.self::inORout(CANADA).'>CANADA'.self::getIndPointsFormatted(CANADA).'</td></tr>';
    echo '<tr><td '.self::inORout(IVORY).'>IVORY COAST'.self::getIndPointsFormatted(IVORY).'</td></tr>';
    echo '<tr><td '.self::inORout(AUSTRIA).'>AUSTRIA'.self::getIndPointsFormatted(AUSTRIA).'</td></tr>';
    echo '<tr><td '.self::inORout(CROATIA).'>CROATIA'.self::getIndPointsFormatted(CROATIA).'</td></tr>';

    echo '<tr><th>7</th></tr>';
    echo '<tr><td '.self::inORout(SENEGAL).'>SENEGAL'.self::getIndPointsFormatted(SENEGAL).'</td></tr>';
    echo '<tr><td '.self::inORout(SWEDEN).'>SWEDEN'.self::getIndPointsFormatted(SWEDEN).'</td></tr>';
    echo '<tr><td '.self::inORout(SCOTLAND).'>SCOTLAND'.self::getIndPointsFormatted(SCOTLAND).'</td></tr>';
    echo '<tr><td '.self::inORout(CZECH).'>CZECH REPUBLIC'.self::getIndPointsFormatted(CZECH).'</td></tr>';

    echo '<tr><th>8</th></tr>';
    echo '<tr><td '.self::inORout(ALGERIA).'>ALGERIA'.self::getIndPointsFormatted(ALGERIA).'</td></tr>';
    echo '<tr><td '.self::inORout(PARAGUAY).'>PARAGUAY'.self::getIndPointsFormatted(PARAGUAY).'</td></tr>';
    echo '<tr><td '.self::inORout(KOREA).'>S KOREA'.self::getIndPointsFormatted(KOREA).'</td></tr>';
    echo '<tr><td '.self::inORout(EGYPT).'>EGYPT'.self::getIndPointsFormatted(EGYPT).'</td></tr>';

    echo '<tr><th>9</th></tr>';
    echo '<tr><td '.self::inORout(AUSTRALIA).'>AUSTRALIA'.self::getIndPointsFormatted(AUSTRALIA).'</td></tr>';
    echo '<tr><td '.self::inORout(IRAN).'>IRAN'.self::getIndPointsFormatted(IRAN).'</td></tr>';
    echo '<tr><td '.self::inORout(BOSNIA).'>BOSNIA'.self::getIndPointsFormatted(BOSNIA).'</td></tr>';
    echo '<tr><td '.self::inORout(GHANA).'>GHANA'.self::getIndPointsFormatted(GHANA).'</td></tr>';

    echo '<tr><th>10</th></tr>';
    echo '<tr><td '.self::inORout(MBAPPE).'>MBAPPE'.self::getIndPointsFormatted(MBAPPE).'</td></tr>';
    echo '<tr><td '.self::inORout(KANE).'>KANE'.self::getIndPointsFormatted(KANE).'</td></tr>';

    echo '<tr><th>11</th></tr>';
    echo '<tr><td '.self::inORout(HAALAND).'>HAALAND'.self::getIndPointsFormatted(HAALAND).'</td></tr>';
    echo '<tr><td '.self::inORout(MESSI).'>MESSI'.self::getIndPointsFormatted(MESSI).'</td></tr>';
    echo '<tr><td '.self::inORout(OYARZABAL).'>OYARZABAL'.self::getIndPointsFormatted(OYARZABAL).'</td></tr>';
    echo '<tr><td '.self::inORout(LAMAL).'>LAMAL'.self::getIndPointsFormatted(LAMAL).'</td></tr>';

    echo '<tr><th>12</th></tr>';
    echo '<tr><td '.self::inORout(RONALDO).'>RONALDO'.self::getIndPointsFormatted(RONALDO).'</td></tr>';
    echo '<tr><td '.self::inORout(VINI).'>VINI JR'.self::getIndPointsFormatted(VINI).'</td></tr>';
    echo '<tr><td '.self::inORout(RAPHINHA).'>RAPHINHA'.self::getIndPointsFormatted(RAPHINHA).'</td></tr>';
    echo '<tr><td '.self::inORout(DEMBELE).'>DEMBELE'.self::getIndPointsFormatted(DEMBELE).'</td></tr>';

    echo '<tr><th>13</th></tr>';
    echo '<tr><td '.self::inORout(MARTINEZ).'>MARTINEZ'.self::getIndPointsFormatted(MARTINEZ).'</td></tr>';
    echo '<tr><td '.self::inORout(ALVAREZ).'>ALVAREZ'.self::getIndPointsFormatted(ALVAREZ).'</td></tr>';
    echo '<tr><td '.self::inORout(GAKPO).'>GAKPO'.self::getIndPointsFormatted(GAKPO).'</td></tr>';
    echo '<tr><td '.self::inORout(LUKAKU).'>LUKAKU'.self::getIndPointsFormatted(LUKAKU).'</td></tr>';

    echo '<tr><th>14</th></tr>';
    echo '<tr><td '.self::inORout(HAVERTZ).'>HAVERTZ'.self::getIndPointsFormatted(HAVERTZ).'</td></tr>';
    echo '<tr><td '.self::inORout(MALEN).'>MALEN'.self::getIndPointsFormatted(MALEN).'</td></tr>';
    echo '<tr><td '.self::inORout(SAKA).'>SAKA'.self::getIndPointsFormatted(SAKA).'</td></tr>';
    echo '<tr><td '.self::inORout(OLISE).'>OLISE'.self::getIndPointsFormatted(OLISE).'</td></tr>';

    echo '<tr><th>15</th></tr>';
    echo '<tr><td '.self::inORout(BRUNO).'>BRUNO FERNANDES'.self::getIndPointsFormatted(BRUNO).'</td></tr>';
    echo '<tr><td '.self::inORout(DIAZ).'>LUIS DIAZ'.self::getIndPointsFormatted(DIAZ).'</td></tr>';
    echo '<tr><td '.self::inORout(SUAREZ).'>SUAREZ'.self::getIndPointsFormatted(SUAREZ).'</td></tr>';
    echo '<tr><td '.self::inORout(TORRES).'>FERRAN TORRES'.self::getIndPointsFormatted(TORRES).'</td></tr>';

    echo '<tr><th>16</th></tr>';
    echo '<tr><td '.self::inORout(GIMENEZ).'>GIMENEZ'.self::getIndPointsFormatted(GIMENEZ).'</td></tr>';
    echo '<tr><td '.self::inORout(BELLINGHAM).'>BELLINGHAM'.self::getIndPointsFormatted(BELLINGHAM).'</td></tr>';
    echo '<tr><td '.self::inORout(ISAK).'>ISAK'.self::getIndPointsFormatted(ISAK).'</td></tr>';
    echo '<tr><td '.self::inORout(MUSIALA).'>MUSIALA'.self::getIndPointsFormatted(MUSIALA).'</td></tr>';

    echo '<tr><th>17</th></tr>';
    echo '<tr><td '.self::inORout(WIRTZ).'>WIRTZ'.self::getIndPointsFormatted(WIRTZ).'</td></tr>';
    echo '<tr><td '.self::inORout(NEYMAR).'>NEYMAR'.self::getIndPointsFormatted(NEYMAR).'</td></tr>';
    echo '<tr><td '.self::inORout(DEBRUYNE).'>DE BRUYNE'.self::getIndPointsFormatted(DEBRUYNE).'</td></tr>';
    echo '<tr><td '.self::inORout(PULISIC).'>PULISIC'.self::getIndPointsFormatted(PULISIC).'</td></tr>';

    echo '<tr><th>18</th></tr>';
    echo '<tr><td '.self::inORout(BALOGUN).'>BALOGUN'.self::getIndPointsFormatted(BALOGUN).'</td></tr>';
    echo '<tr><td '.self::inORout(NUNEZ).'>NUNEZ'.self::getIndPointsFormatted(NUNEZ).'</td></tr>';
    echo '<tr><td '.self::inORout(MANE).'>MANE'.self::getIndPointsFormatted(MANE).'</td></tr>';
    echo '<tr><td '.self::inORout(SALAH).'>SALAH'.self::getIndPointsFormatted(SALAH).'</td></tr>';

    echo '<tr><th>19</th></tr>';
    echo '<tr><td '.self::inORout(LEAO).'>LEAO'.self::getIndPointsFormatted(LEAO).'</td></tr>';
    echo '<tr><td '.self::inORout(DAVID).'>J DAVID'.self::getIndPointsFormatted(DAVID).'</td></tr>';
    echo '<tr><td '.self::inORout(SON).'>SON'.self::getIndPointsFormatted(SON).'</td></tr>';
    echo '<tr><td '.self::inORout(DZEKO).'>DZEKO'.self::getIndPointsFormatted(DZEKO).'</td></tr>';
    echo '<tr><td '.self::inORout(AKTURKOGLU).'>AKTURKOGLU'.self::getIndPointsFormatted(AKTURKOGLU).'</td></tr>';

    echo '<tr><th>20</th></tr>';
    echo '<tr><td '.self::inORout(SCHICK).'>SCHICK'.self::getIndPointsFormatted(SCHICK).'</td></tr>';
    echo '<tr><td '.self::inORout(LARSEN).'>LARSEN'.self::getIndPointsFormatted(LARSEN).'</td></tr>';
    echo '<tr><td '.self::inORout(MAHREZ).'>MAHREZ'.self::getIndPointsFormatted(MAHREZ).'</td></tr>';
    echo '<tr><td '.self::inORout(RODRIGUEZ).'>RODRIGUEZ'.self::getIndPointsFormatted(RODRIGUEZ).'</td></tr>';
    echo '<tr><td '.self::inORout(VALENCIA).'>VALENCIA'.self::getIndPointsFormatted(VALENCIA).'</td></tr>';

    echo '<tr><th>21</th></tr>';
    echo '<tr><td '.self::inORout(MCTOMINAY).'>MCTOMINAY'.self::getIndPointsFormatted(MCTOMINAY).'</td></tr>';
    echo '<tr><td '.self::inORout(BRAHIM).'>DIAZ'.self::getIndPointsFormatted(BRAHIM).'</td></tr>';
    echo '<tr><td '.self::inORout(UEDA).'>UEDA'.self::getIndPointsFormatted(UEDA).'</td></tr>';
    echo '<tr><td '.self::inORout(EMBOLO).'>EMBOLO'.self::getIndPointsFormatted(EMBOLO).'</td></tr>';
    echo '<tr><td '.self::inORout(KRAMARIC).'>KRAMARIC'.self::getIndPointsFormatted(KRAMARIC).'</td></tr>';

    echo '</table></div>';
  }

}
  
?> 
