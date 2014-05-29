<link rel="stylesheet" href="styles.css" type="text/css">

<?php

require_once('wc_pool.php');
echo '<a href="#groups">See Groups</a>';

$wc_pool = new WC_Pool();
$wc_pool->calculateStandings();
$wc_pool->displayStandings();
$wc_pool->displayTeams();
$wc_pool->displayGroups();

?>