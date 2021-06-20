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
	echo '<tr><th>A</th><th>B</th></tr>';
	echo '<tr><td '.self::inORout(FRANCE).'>FRANCE'.self::getIndPointsFormatted(FRANCE).'</td><td '.self::inORout(SPAIN).'>SPAIN'.self::getIndPointsFormatted(SPAIN).'</td></tr>';
	echo '<tr><td '.self::inORout(ENGLAND).'>ENGLAND'.self::getIndPointsFormatted(ENGLAND).'</td><td '.self::inORout(PORTUGAL).'>PORTUGAL'.self::getIndPointsFormatted(PORTUGAL).'</td></tr>';
	echo '<tr><td '.self::inORout(BELGIUM).'>BELGIUM'.self::getIndPointsFormatted(BELGIUM).'</td><td '.self::inORout(ITALY).'>ITALY'.self::getIndPointsFormatted(ITALY).'</td></tr>';
	echo '<tr><td '.self::inORout(GERMANY).'>GERMANY'.self::getIndPointsFormatted(GERMANY).'</td><td '.self::inORout(HOLLAND).'>HOLLAND'.self::getIndPointsFormatted(HOLLAND).'</td></tr>';

  echo '<tr><th>C</th><th rowspan="2">Cannot pick a team <br>you took in A or B</th></tr>';
		echo '<tr><td '.self::inORout(FRANCE).'>FRANCE'.self::getIndPointsFormatted(FRANCE).'</td></tr>';
		echo '<tr><td '.self::inORout(ENGLAND).'>ENGLAND'.self::getIndPointsFormatted(ENGLAND).'</td></tr>';
		echo '<tr><td '.self::inORout(BELGIUM).'>BELGIUM'.self::getIndPointsFormatted(BELGIUM).'</td></tr>';
		echo '<tr><td '.self::inORout(GERMANY).'>GERMANY'.self::getIndPointsFormatted(GERMANY).'</td></tr>';
		echo '<tr><td '.self::inORout(SPAIN).'>SPAIN'.self::getIndPointsFormatted(SPAIN).'</td></tr>';
		echo '<tr><td '.self::inORout(PORTUGAL).'>PORTUGAL'.self::getIndPointsFormatted(PORTUGAL).'</td></tr>';
		echo '<tr><td '.self::inORout(ITALY).'>ITALY'.self::getIndPointsFormatted(ITALY).'</td></tr>';
		echo '<tr><td '.self::inORout(HOLLAND).'>HOLLAND'.self::getIndPointsFormatted(HOLLAND).'</td></tr>';

  echo '<tr><th>D</th></tr>';
		echo '<tr><td '.self::inORout(DENMARK).'>DENMARK'.self::getIndPointsFormatted(DENMARK).'</td></tr>';
		echo '<tr><td '.self::inORout(CROATIA).'>CROATIA'.self::getIndPointsFormatted(CROATIA).'</td></tr>';
		echo '<tr><td '.self::inORout(UKRAINE).'>UKRAINE'.self::getIndPointsFormatted(UKRAINE).'</td></tr>';

  echo '<tr><th>E</th><th>F</th></tr>';
		echo '<tr><td '.self::inORout(RUSSIA).'>RUSSIA'.self::getIndPointsFormatted(RUSSIA).'</td><td '.self::inORout(SWITZERLAND).'>SWITZERLAND'.self::getIndPointsFormatted(SWITZERLAND).'</td></tr>';
		echo '<tr><td '.self::inORout(AUSTRIA).'>AUSTRIA'.self::getIndPointsFormatted(AUSTRIA).'</td><td '.self::inORout(TURKEY).'>TURKEY'.self::getIndPointsFormatted(TURKEY).'</td></tr>';
		echo '<tr><td '.self::inORout(POLAND).'>POLAND'.self::getIndPointsFormatted(POLAND).'</td><td '.self::inORout(SWEDEN).'>SWEDEN'.self::getIndPointsFormatted(SWEDEN).'</td></tr>';
		echo '<tr><td '.self::inORout(CZECH).'>CZECH'.self::getIndPointsFormatted(CZECH).'</td><td '.self::inORout(WALES).'>WALES'.self::getIndPointsFormatted(WALES).'</td></tr>';

	echo '<tr><th>G</th></tr>';
		echo '<tr><td '.self::inORout(SCOTLAND).'>SCOTLAND'.self::getIndPointsFormatted(SCOTLAND).'</td></tr>';
		echo '<tr><td '.self::inORout(SLOVAKIA).'>SLOVAKIA'.self::getIndPointsFormatted(SLOVAKIA).'</td></tr>';
		echo '<tr><td '.self::inORout(FINLAND).'>FINLAND'.self::getIndPointsFormatted(FINLAND).'</td></tr>';
		echo '<tr><td '.self::inORout(MACEDONIA).'>MACEDONIA'.self::getIndPointsFormatted(MACEDONIA).'</td></tr>';
		echo '<tr><td '.self::inORout(HUNGARY).'>HUNGARY'.self::getIndPointsFormatted(HUNGARY).'</td></tr>';

  echo '<tr><th>H</th><th>I</th><th>J</th></tr>';
		echo '<tr><td '.self::inORout(KANE).'>KANE (eng)'.self::getIndPointsFormatted(KANE).'</td><td '.self::inORout(RONALDO).'>RONALDO (por)'.self::getIndPointsFormatted(RONALDO).'</td>'.
		 '<td '.self::inORout(MORATA).'>MORATA (spa)'.self::getIndPointsFormatted(MORATA).'</td></tr>';
		echo '<tr><td '.self::inORout(LUKAKU).'>LUKAKU (bel)'.self::getIndPointsFormatted(LUKAKU).'</td><td '.self::inORout(GRIEZMANN).'>GRIEZMANN (fra)'.self::getIndPointsFormatted(GRIEZMANN).'</td>'.
		 '<td '.self::inORout(IMMOBILE).'>IMMOBILE (ita)'.self::getIndPointsFormatted(IMMOBILE).'</td></tr>';
		echo '<tr><td '.self::inORout(MBAPPE).'>MBAPPE (fra)'.self::getIndPointsFormatted(MBAPPE).'</td><td '.self::inORout(DEPAY).'>DEPAY (hol)'.self::getIndPointsFormatted(DEPAY).'</td>'.
		 '<td '.self::inORout(GNABRY).'>GNABRY (ger)'.self::getIndPointsFormatted(GNABRY).'</td></tr>';

  echo '<tr><th>K</th><th>L</th><th>M</th></tr>';
		echo '<tr><td '.self::inORout(LEWANDOWSKI).'>LEWANDOWSKI (pol)'.self::getIndPointsFormatted(LEWANDOWSKI).'</td><td '.self::inORout(WERNER).'>WERNER (ger)'.self::getIndPointsFormatted(WERNER).'</td>'.
		 '<td '.self::inORout(FERNANDES).'>FERNANDES (spa)'.self::getIndPointsFormatted(FERNANDES).'</td></tr>';
		echo '<tr><td '.self::inORout(STERLING).'>STERLING (eng)'.self::getIndPointsFormatted(STERLING).'</td><td '.self::inORout(RASHFORD).'>RASHFORD (eng)'.self::getIndPointsFormatted(RASHFORD).'</td>'.
		 '<td '.self::inORout(BELOTTI).'>BELOTTI (ita)'.self::getIndPointsFormatted(BELOTTI).'</td></tr>';
		echo '<tr><td '.self::inORout(HAZARD).'>HAZARD (bel)'.self::getIndPointsFormatted(HAZARD).'</td><td '.self::inORout(TORRES).'>TORRES (spa)'.self::getIndPointsFormatted(TORRES).'</td>'.
		 '<td '.self::inORout(BALE).'>BALE (wal)'.self::getIndPointsFormatted(BALE).'</td></tr>';

  echo '<tr><th>N</th><th>O</th><th>P</th></tr>';
		echo '<tr><td '.self::inORout(YILMAZ).'>YILMAZ (tur)'.self::getIndPointsFormatted(YILMAZ).'</td><td '.self::inORout(ERIKSON).'>ERIKSON (den)'.self::getIndPointsFormatted(ERIKSON).'</td>'.
		 '<td '.self::inORout(PUKKI).'>PUKKI (fin)'.self::getIndPointsFormatted(PUKKI).'</td></tr>';
		echo '<tr><td '.self::inORout(SCHICK).'>SCHICK (cze)'.self::getIndPointsFormatted(SCHICK).'</td><td '.self::inORout(DZUBA).'>DZUBA (rus)'.self::getIndPointsFormatted(DZUBA).'</td>'.
		 '<td '.self::inORout(ADAMS).'>ADAMS (sco)'.self::getIndPointsFormatted(ADAMS).'</td></tr>';
		echo '<tr><td '.self::inORout(YARMOLENKO).'>YARMOLENKO (ukr)'.self::getIndPointsFormatted(YARMOLENKO).'</td><td '.self::inORout(QUAISON).'>QUAISON (swe)'.self::getIndPointsFormatted(QUAISON).'</td>'.
		 '<td '.self::inORout(SEFEROVIC).'>SEFEROVIC (swi)'.self::getIndPointsFormatted(SEFEROVIC).'</td></tr>';

	echo '</table></div>';  
  }

}
  
?> 