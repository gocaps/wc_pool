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
		echo '<tr><th>A</th></tr>';
		echo '<tr><td '.self::inORout(FRANCE).'>FRANCE'.self::getIndPointsFormatted(FRANCE).'</td></tr>';
		echo '<tr><td '.self::inORout(ENGLAND).'>ENGLAND'.self::getIndPointsFormatted(ENGLAND).'</td></tr>';

	  echo '<tr><th>B</th><th>C</th></tr>';
			echo '<tr><td '.self::inORout(GERMANY).'>GERMANY'.self::getIndPointsFormatted(GERMANY).'</td><td '.self::inORout(BELGIUM).'>BELGIUM'.self::getIndPointsFormatted(BELGIUM).'</td></tr>';
			echo '<tr><td '.self::inORout(SPAIN).'>SPAIN'.self::getIndPointsFormatted(SPAIN).'</td><td '.self::inORout(ITALY).'>ITALY'.self::getIndPointsFormatted(ITALY).'</td></tr>';
			echo '<tr><td '.self::inORout(PORTUGAL).'>PORTUGAL'.self::getIndPointsFormatted(PORTUGAL).'</td><td '.self::inORout(HOLLAND).'>HOLLAND'.self::getIndPointsFormatted(HOLLAND).'</td></tr>';

		echo '<tr><th>D</th></tr>';
		echo '<tr><td '.self::inORout(DENMARK).'>DENMARK'.self::getIndPointsFormatted(DENMARK).'</td></tr>';
		echo '<tr><td '.self::inORout(CROATIA).'>CROATIA'.self::getIndPointsFormatted(CROATIA).'</td></tr>';
		echo '<tr><td '.self::inORout(TURKEY).'>TURKEY'.self::getIndPointsFormatted(TURKEY).'</td></tr>';
		echo '<tr><td '.self::inORout(SWITZERLAND).'>SWITZERLAND'.self::getIndPointsFormatted(SWITZERLAND).'</td></tr>';

	  echo '<tr><th>E</th></tr>';
			echo '<tr><td '.self::inORout(SERBIA).'>SERBIA'.self::getIndPointsFormatted(SERBIA).'</td></tr>';
			echo '<tr><td '.self::inORout(AUSTRIA).'>AUSTRIA'.self::getIndPointsFormatted(AUSTRIA).'</td></tr>';
			echo '<tr><td '.self::inORout(HUNGARY).'>HUNGARY'.self::getIndPointsFormatted(HUNGARY).'</td></tr>';

		echo '<tr><th>F</th></tr>';
		echo '<tr><td '.self::inORout(SCOTLAND).'>SCOTLAND'.self::getIndPointsFormatted(SCOTLAND).'</td></tr>';
		echo '<tr><td '.self::inORout(POLAND).'>POLAND'.self::getIndPointsFormatted(POLAND).'</td></tr>';
		echo '<tr><td '.self::inORout(UKRAINE).'>UKRAINE'.self::getIndPointsFormatted(UKRAINE).'</td></tr>';
		echo '<tr><td '.self::inORout(CZECH_REPUBLIC).'>CZECH REPUBLIC'.self::getIndPointsFormatted(CZECH_REPUBLIC).'</td></tr>';

		echo '<tr><th>G</th></tr>';
			echo '<tr><td '.self::inORout(ROMANIA).'>ROMANIA'.self::getIndPointsFormatted(ROMANIA).'</td></tr>';
			echo '<tr><td '.self::inORout(SLOVENIA).'>SLOVENIA'.self::getIndPointsFormatted(SLOVENIA).'</td></tr>';
			echo '<tr><td '.self::inORout(ALBANIA).'>ALBANIA'.self::getIndPointsFormatted(ALBANIA).'</td></tr>';
			echo '<tr><td '.self::inORout(GEORGIA).'>GEORGIA'.self::getIndPointsFormatted(GEORGIA).'</td></tr>';
			echo '<tr><td '.self::inORout(SLOVAKIA).'>SLOVAKIA'.self::getIndPointsFormatted(SLOVAKIA).'</td></tr>';

		echo '<tr><th>H</th></tr>';
		echo '<tr><td '.self::inORout(MBAPPE).'>MBAPPE'.self::getIndPointsFormatted(MBAPPE).'</td></tr>';
		echo '<tr><td '.self::inORout(KANE).'>KANE'.self::getIndPointsFormatted(KANE).'</td></tr>';

	  echo '<tr><th>I</th></tr>';
			echo '<tr><td '.self::inORout(RONALDO).'>RONALDO'.self::getIndPointsFormatted(RONALDO).'</td></tr>';
			echo '<tr><td '.self::inORout(LUKAKU).'>LUKAKU'.self::getIndPointsFormatted(LUKAKU).'</td></tr>';
			echo '<tr><td '.self::inORout(BELLINGHAM).'>BELLINGHAM'.self::getIndPointsFormatted(BELLINGHAM).'</td></tr>';

	  echo '<tr><th>J</th><th>K</th><th>L</th><th>M</th><th>N</th></tr>';
			echo '<tr><td '.self::inORout(GIROUD).'>GIROUD'.self::getIndPointsFormatted(GIROUD).'</td><td '.self::inORout(SANE).'>SANE'.self::getIndPointsFormatted(SANE).'</td>'.
			 '<td '.self::inORout(GAKPO).'>GAKPO'.self::getIndPointsFormatted(GAKPO).'</td><td '.self::inORout(MALEN).'>MALEN'.self::getIndPointsFormatted(MALEN).'</td><td '.self::inORout(DOVBYK).'>DOVBYK'.self::getIndPointsFormatted(DOVBYK).'</td></tr>';
			echo '<tr><td '.self::inORout(FODEN).'>FODEN'.self::getIndPointsFormatted(FODEN).'</td><td '.self::inORout(HOJLUND).'>HOJLUND'.self::getIndPointsFormatted(HOJLUND).'</td>'.
			 '<td '.self::inORout(VLAHOVIC).'>VLAHOVIC'.self::getIndPointsFormatted(VLAHOVIC).'</td><td '.self::inORout(DE_BRUYNE).'>DE BRUYNE'.self::getIndPointsFormatted(DE_BRUYNE).'</td><td '.self::inORout(SCHICK).'>SCHICK'.self::getIndPointsFormatted(SCHICK).'</td></tr>';
			echo '<tr><td '.self::inORout(MORATA).'>MORATA'.self::getIndPointsFormatted(MORATA).'</td><td '.self::inORout(NITROVIC).'>NITROVIC'.self::getIndPointsFormatted(NITROVIC).'</td>'.
			 '<td '.self::inORout(SCAMACCA).'>SCAMACCA'.self::getIndPointsFormatted(SCAMACCA).'</td><td '.self::inORout(BUDIMIR).'>BUDIMIR'.self::getIndPointsFormatted(BUDIMIR).'</td><td '.self::inORout(LEWANDOWSKI).'>LEWANDOWSKI'.self::getIndPointsFormatted(LEWANDOWSKI).'</td></tr>';
			echo '<tr><td '.self::inORout(HAVERTZ).'>HAVERTZ'.self::getIndPointsFormatted(HAVERTZ).'</td><td '.self::inORout(FERNANDES).'>FERNANDES'.self::getIndPointsFormatted(FERNANDES).'</td>'.
			 '<td '.self::inORout(MUSIALA).'>MUSIALA'.self::getIndPointsFormatted(MUSIALA).'</td><td '.self::inORout(CHIESA).'>CHIESA'.self::getIndPointsFormatted(CHIESA).'</td><td '.self::inORout(AKTURKOGLU).'>AKTURKOGLU'.self::getIndPointsFormatted(AKTURKOGLU).'</td></tr>';

		echo '<tr><th>O</th></tr>';
			echo '<tr><td '.self::inORout(ARGENTINA).'>ARGENTINA'.self::getIndPointsFormatted(ARGENTINA).'</td></tr>';
			echo '<tr><td '.self::inORout(BRAZIL).'>BRAZIL'.self::getIndPointsFormatted(BRAZIL).'</td></tr>';

	  echo '<tr><th>P</th><th>Q</th></tr>';
			echo '<tr><td '.self::inORout(URUGUAY).'>URUGUAY'.self::getIndPointsFormatted(URUGUAY).'</td><td '.self::inORout(USA).'>USA'.self::getIndPointsFormatted(USA).'</td></tr>';
			echo '<tr><td '.self::inORout(MEXICO).'>MEXICO'.self::getIndPointsFormatted(MEXICO).'</td><td '.self::inORout(ECUADOR).'>ECUADOR'.self::getIndPointsFormatted(ECUADOR).'</td></tr>';
			echo '<tr><td '.self::inORout(COLOMBIA).'>COLOMBIA'.self::getIndPointsFormatted(COLOMBIA).'</td><td '.self::inORout(CHILE).'>CHILE'.self::getIndPointsFormatted(CHILE).'</td></tr>';

	  echo '<tr><th>R</th><th>S</th></tr>';
			echo '<tr><td '.self::inORout(PERU).'>PERU'.self::getIndPointsFormatted(PERU).'</td><td '.self::inORout(COSTA_RICA).'>COSTA RICA'.self::getIndPointsFormatted(COSTA_RICA).'</td></tr>';
			echo '<tr><td '.self::inORout(VENEZUELA).'>VENEZUELA'.self::getIndPointsFormatted(VENEZUELA).'</td><td '.self::inORout(JAMAICA).'>JAMAICA'.self::getIndPointsFormatted(JAMAICA).'</td></tr>';
			echo '<tr><td '.self::inORout(PARAGUAY).'>PARAGUAY'.self::getIndPointsFormatted(PARAGUAY).'</td><td '.self::inORout(PANAMA).'>PANAMA'.self::getIndPointsFormatted(PANAMA).'</td></tr>';
			echo '<tr><td '.self::inORout(CANADA).'>CANADA'.self::getIndPointsFormatted(CANADA).'</td><td '.self::inORout(BOLIVIA).'>BOLIVIA'.self::getIndPointsFormatted(BOLIVIA).'</td></tr>';

		echo '<tr><th>T</th></tr>';
			echo '<tr><td '.self::inORout(MESSI).'>MESSI'.self::getIndPointsFormatted(MESSI).'</td></tr>';
			echo '<tr><td '.self::inORout(VINICIUS_JR).'>VINICIUS JR'.self::getIndPointsFormatted(VINICIUS_JR).'</td></tr>';

		echo '<tr><th>U</th></tr>';
			echo '<tr><td '.self::inORout(NUNEZ).'>NUNEZ'.self::getIndPointsFormatted(NUNEZ).'</td></tr>';
			echo '<tr><td '.self::inORout(ALVAREZ).'>ALVAREZ'.self::getIndPointsFormatted(ALVAREZ).'</td></tr>';
			echo '<tr><td '.self::inORout(RODRYGO).'>RODRYGO'.self::getIndPointsFormatted(RODRYGO).'</td></tr>';
			echo '<tr><td '.self::inORout(MARTINEZ).'>MARTINEZ'.self::getIndPointsFormatted(MARTINEZ).'</td></tr>';
			echo '<tr><td '.self::inORout(MARTINELLI).'>MARTINELLI'.self::getIndPointsFormatted(MARTINELLI).'</td></tr>';

	  echo '<tr><th>V</th><th>W</th></tr>';
			echo '<tr><td '.self::inORout(SUAREZ).'>SUAREZ'.self::getIndPointsFormatted(SUAREZ).'</td><td '.self::inORout(GIMENEZ).'>GIMENEZ'.self::getIndPointsFormatted(GIMENEZ).'</td></tr>';
			echo '<tr><td '.self::inORout(PULISIC).'>PULISIC'.self::getIndPointsFormatted(PULISIC).'</td><td '.self::inORout(VARGAS).'>VARGAS'.self::getIndPointsFormatted(VARGAS).'</td></tr>';
			echo '<tr><td '.self::inORout(VALENCIA).'>VALENCIA'.self::getIndPointsFormatted(VALENCIA).'</td><td '.self::inORout(DAVID).'>DAVID'.self::getIndPointsFormatted(DAVID).'</td></tr>';
			echo '<tr><td '.self::inORout(DIAZ).'>DIAZ'.self::getIndPointsFormatted(DIAZ).'</td><td '.self::inORout(LAPADULA).'>LAPADULA'.self::getIndPointsFormatted(LAPADULA).'</td></tr>';

		echo '<tr><th>X</th></tr>';
			echo '<tr><td '.self::inORout(BAREIRO).'>BAREIRO'.self::getIndPointsFormatted(BAREIRO).'</td></tr>';
			echo '<tr><td '.self::inORout(RONDON).'>RONDON'.self::getIndPointsFormatted(RONDON).'</td></tr>';
			echo '<tr><td '.self::inORout(UGALDE).'>UGALDE'.self::getIndPointsFormatted(UGALDE).'</td></tr>';
			echo '<tr><td '.self::inORout(NICHOLSON).'>NICHOLSON'.self::getIndPointsFormatted(NICHOLSON).'</td></tr>';
			echo '<tr><td '.self::inORout(DAVIES).'>DAVIES'.self::getIndPointsFormatted(DAVIES).'</td></tr>';

		echo '</table></div>';
  }

}
  
