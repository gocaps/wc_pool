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
    foreach($ind as $i) {
      $total += $i;
    }
    
    if($total == 0) return '';
    
    $bn = (end($ind) > 0)? ' *':'';
    return ($total == 1)? ' ('.$total.'pt)'.$bn:' ('.$total.'pts)'.$bn;
  }

  public function displayGroups() {
	echo '<div class="groups"><a name="groups"/><h2>GROUPS</h2>';
	if(SHOW_BONUS_TEXT) echo '<p> (* - includes 3 point bonus for winning the bracket)</p>';
	echo '<p><span class="out">Team or Player has no games left</span></p>';
	
	echo '<table class="imagetable">';
	echo '<tr><th>A</th><th>B</th><th>C</th</tr>';
	echo '<tr><td>BRAZIL'.self::getIndPointsFormatted(BRAZIL).'</td><td class="out">SPAIN'.self::getIndPointsFormatted(SPAIN).'</td><td>BELGIUM'.self::getIndPointsFormatted(BELGIUM).'</td></tr>';
	echo '<tr><td>ARGENTINA'.self::getIndPointsFormatted(ARGENTINA).'</td><td>GERMANY'.self::getIndPointsFormatted(GERMANY).'</td><td>FRANCE'.self::getIndPointsFormatted(FRANCE).'</td></tr>';

    echo '<tr><th>D</th><th>E</th></tr>';
	echo '<tr><td>HOLLAND'.self::getIndPointsFormatted(HOLLAND).'</td><td>COLOMBIA'.self::getIndPointsFormatted(COLOMBIA).'</td></tr>';
	echo '<tr><td class="out">ITALY'.self::getIndPointsFormatted(ITALY).'</td><td>SWITZERLAND'.self::getIndPointsFormatted(SWITZ).'</td></tr>';
	echo '<tr><td>PORTUGAL'.self::getIndPointsFormatted(PORTUGAL).'</td><td>RUSSIA'.self::getIndPointsFormatted(RUSSIA).'</td></tr>';

    echo '<tr><th>F</th><th>G</th><th>H</th><th>I</th><th>J</th></tr>';
	echo '<tr><td class="out">ENGLAND'.self::getIndPointsFormatted(ENGLAND).'</td><td>ECUADOR'.self::getIndPointsFormatted(ECUADOR).'</td>'.
		 '<td>USA'.self::getIndPointsFormatted(USA).'</td><td>NIGERIA'.self::getIndPointsFormatted(NIGERIA).'</td><td class="out">AUSTRALIA'.self::getIndPointsFormatted(AUSTRALIA).'</td></tr>';
	echo '<tr><td>URUGUAY'.self::getIndPointsFormatted(URUGUAY).'</td><td class="out">CROATIA'.self::getIndPointsFormatted(CROATIA).'</td>'.
		 '<td>GHANA'.self::getIndPointsFormatted(GHANA).'</td><td>SOUTH KOREA'.self::getIndPointsFormatted(KOREA).'</td><td class="out">IRAN'.self::getIndPointsFormatted(IRAN).'</td></tr>';
	echo '<tr><td>CHILE'.self::getIndPointsFormatted(CHILE).'</td><td class="out">JAPAN'.self::getIndPointsFormatted(JAPAN).'</td>'.
		 '<td>GREECE'.self::getIndPointsFormatted(GREECE).'</td><td class="out">CAMEROON'.self::getIndPointsFormatted(CAMEROON).'</td><td>COSTA RICA'.self::getIndPointsFormatted(COSTA).'</td></tr>';
	echo '<tr><td class="out">IVORY COAST'.self::getIndPointsFormatted(IVORY).'</td><td>MEXICO'.self::getIndPointsFormatted(MEXICO).'</td>'.
		 '<td class="out">BOSNIA'.self::getIndPointsFormatted(BOSNIA).'</td><td>ALGERIA'.self::getIndPointsFormatted(ALGERIA).'</td><td>HONDURAS'.self::getIndPointsFormatted(HONDURAS).'</td></tr>';

	echo '<tr><th>K</th></tr>';
	echo '<tr><td>MESSI'.self::getIndPointsFormatted(MESSI).'</td></tr>';
	echo '<tr><td>NEYMAR'.self::getIndPointsFormatted(NEYMAR).'</td></tr>';

    echo '<tr><th>L</th><th>M</th><th>N</th><th>O</th></tr>';
	echo '<tr><td>AGUERO'.self::getIndPointsFormatted(AGUERO).'</td><td>HIGUAIN'.self::getIndPointsFormatted(HIGUAIN).'</td>'.
		 '<td>FRED'.self::getIndPointsFormatted(FRED).'</td><td class="out">NEGREDO'.self::getIndPointsFormatted(NEGREDO).'</td></tr>';
	echo '<tr><td>RONALDO'.self::getIndPointsFormatted(RONALDO).'</td><td class="out">DIEGO COSTA'.self::getIndPointsFormatted(DCOSTA).'</td>'.
		  '<td>HULK'.self::getIndPointsFormatted(HULK).'</td><td>OSCAR'.self::getIndPointsFormatted(OSCAR).'</td></tr>';
	echo '<tr><td>SUAREZ'.self::getIndPointsFormatted(SUAREZ).'</td><td>VAN PERSIE'.self::getIndPointsFormatted(PERSIE).'</td>'.
		 '<td>BENZEMA'.self::getIndPointsFormatted(BENZEMA).'</td><td class="out">BALOTELLI'.self::getIndPointsFormatted(BALOTELLI).'</td></tr>';
	echo '<tr><td>LUKAKU'.self::getIndPointsFormatted(LUKAKU).'</td><td>FALCAO'.self::getIndPointsFormatted(FALCAO).'</td>'.
		 '<td>CAVANI'.self::getIndPointsFormatted(CAVANI).'</td><td>ROBBEN'.self::getIndPointsFormatted(ROBBEN).'</td></tr>';

    echo '<tr><th>P</th><th>Q</th><th>R</th><th>S</th></tr>';
	echo '<tr><td>MULLER'.self::getIndPointsFormatted(MULLER).'</td><td class="out">DAVID VILLA'.self::getIndPointsFormatted(VILLA).'</td>'.
	 	 '<td>RIBERY'.self::getIndPointsFormatted(RIBERY).'</td><td>FORLAN'.self::getIndPointsFormatted(FORLAN).'</td></tr>';
	echo '<tr><td>LAVEZZI'.self::getIndPointsFormatted(LAVEZZI).'</td><td>KLOSE'.self::getIndPointsFormatted(KLOSE).'</td>'.
		 '<td>HUNTELAAR'.self::getIndPointsFormatted(HUNTELAAR).'</td><td class="out">PIRLO'.self::getIndPointsFormatted(PIRLO).'</td></tr>';
	echo '<tr><td>GIROUD'.self::getIndPointsFormatted(GIROUD).'</td><td class="out">ROONEY'.self::getIndPointsFormatted(ROONEY).'</td>'.
		 '<td class="out">DROGBA'.self::getIndPointsFormatted(DROGBA).'</td><td>ALEXIS SANCHEZ'.self::getIndPointsFormatted(SANCHEZ).'</td></tr>';
	echo '<tr><td class="out">TORRES'.self::getIndPointsFormatted(TORRES).'</td><td class="out">PEDRO'.self::getIndPointsFormatted(PEDRO).'</td>'.
		 '<td class="out">DZEKO'.self::getIndPointsFormatted(DZEKO).'</td><td>HAZARD'.self::getIndPointsFormatted(HAZARD).'</td></tr>';

    echo '<tr><th>T</th><th>U</th><th>V</th></tr>';
	echo '<tr><td>DEMPSEY'.self::getIndPointsFormatted(DEMPSEY).'</td><td>MARTINEZ'.self::getIndPointsFormatted(MARTINEZ).'</td>'.
		 '<td class="out">CAHILL'.self::getIndPointsFormatted(CAHILL).'</td></tr>';
	echo '<tr><td>POSTIGA'.self::getIndPointsFormatted(POSTIGA).'</td><td>KERZHAKOV'.self::getIndPointsFormatted(KERZHAKOV).'</td>'.
		 '<td>MITROGLOU'.self::getIndPointsFormatted(MITROGLOU).'</td></tr>';
	echo '<tr><td class="out">IMMOBILE'.self::getIndPointsFormatted(IMMOBILE).'</td><td>DRMIC'.self::getIndPointsFormatted(DRMIC).'</td>'.
		 '<td>EMENIKE'.self::getIndPointsFormatted(EMENIKE).'</td></tr>';
	echo '<tr><td class="out">STURRIDGE'.self::getIndPointsFormatted(STURRIDGE).'</td><td>HERNANDEZ'.self::getIndPointsFormatted(HERNANDEZ).'</td>'.
		 '<td>GYAN'.self::getIndPointsFormatted(GYAN).'</td></tr>';

	echo '</table></div>';  
  }

}
  
?> 