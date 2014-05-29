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
	  
	  $top = 0;
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

  public function displayGroups() {
	echo '<div class="groups"><a name="groups"/><h2>GROUPS</h2>';
	echo '<table class="imagetable">';
	echo '<tr><th>A</th><th>B</th><th>C</th</tr>';
	echo '<tr><td>BRAZIL</td><td>SPAIN</td><td>BELGIUM</td></tr>';
	echo '<tr><td>ARGENTINA</td><td>GERMANY</td><td>FRANCE</td></tr>';

    echo '<tr><th>D</th><th>E</th></tr>';
	echo '<tr><td>HOLLAND</td><td>COLOMBIA</td></tr>';
	echo '<tr><td>ITALY</td><td>SWITZERLAND</td></tr>';
	echo '<tr><td>PORTUGAL</td><td>RUSSIA</td></tr>';

    echo '<tr><th>F</th><th>G</th><th>H</th><th>I</th><th>J</th></tr>';
	echo '<tr><td>ENGLAND</td><td>ECUADOR</td><td>USA</td><td>NIGERIA</td><td>AUSTRALIA</td></tr>';
	echo '<tr><td>URUGUAY</td><td>CROATIA</td><td>GHANA</td><td>SOUTH KOREA</td><td>IRAN</td></tr>';
	echo '<tr><td>CHILE</td><td>JAPAN</td><td>GREECE</td><td>CAMEROON</td><td>COSTA RICA</td></tr>';
	echo '<tr><td>IVORY COAST</td><td>MEXICO</td><td>BOSNIA</td><td>ALGERIA</td><td>HONDURAS</td></tr>';

	echo '<tr><th>K</th></tr>';
	echo '<tr><td>MESSI</td></tr>';
	echo '<tr><td>NEYMAR</td></tr>';

    echo '<tr><th>L</th><th>M</th><th>N</th><th>O</th></tr>';
	echo '<tr><td>AGUERO</td><td>HIGUAIN</td><td>FRED</td><td>NEGREDO</td></tr>';
	echo '<tr><td>RONALDO</td><td>DIEGO COSTA</td><td>HULK</td><td>OSCAR</td></tr>';
	echo '<tr><td>SUAREZ</td><td>VAN PERSIE</td><td>BENZEMA</td><td>BALOTELLI</td></tr>';
	echo '<tr><td>LUKAKU</td><td>FALCAO</td><td>CAVANI</td><td>ROBBEN</td></tr>';

    echo '<tr><th>P</th><th>Q</th><th>R</th><th>S</th></tr>';
	echo '<tr><td>MULLER</td><td>VILLA</td><td>RIBERY</td><td>FORLAN</td></tr>';
	echo '<tr><td>LEVEZZI</td><td>KLOSE</td><td>HUNTELAAR</td><td>PIRLO</td></tr>';
	echo '<tr><td>GIROUD</td><td>ROONEY</td><td>DROGBA</td><td>SANCHEZ</td></tr>';
	echo '<tr><td>TORRES</td><td>PEDRO</td><td>DZEKO</td><td>HAZARD</td></tr>';

    echo '<tr><th>T</th><th>U</th><th>V</th></tr>';
	echo '<tr><td>DEMPSEY</td><td>MARTINEZ</td><td>CAHILL</td></tr>';
	echo '<tr><td>POSTIGA</td><td>KERZHAKOV</td><td>MITROGLOU</td></tr>';
	echo '<tr><td>IMMOBILE</td><td>DRMIC</td><td>EMENIKE</td></tr>';
	echo '<tr><td>STURRIDGE</td><td>HERNANDEZ</td><td>GYAN</td></tr>';

	echo '</table></div>';  
  }

}
  
?> 