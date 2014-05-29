<?php

ob_start();

$css = file_get_contents('styles.css');
echo '<style>'.$css.'</style>';

require_once('wc_pool.php');

if(UPDATING) {
  echo '<h3>HOLD YOUR HORSES!</h3>';
  echo '<p>I\'m doing some standings updates. Check this out, and by the time you\'re done watching<br />you should be able to refresh your page and see the up to date standings. ~Dave</p>';
  echo '<script height="349px" width="620px" src="http://player.ooyala.com/iframe.js#pbid=2d940881487848159b3b99a3ae8125b9&ec=BnYWMybjqe_Ot8yd9ynDnwXukThl2obX"></script>';
}
else {
  echo '<a href="#groups">See Groups</a>';
  $wc_pool = new WC_Pool();
  $wc_pool->calculateStandings();
  $wc_pool->displayStandings();
  $wc_pool->displayTeams();
  $wc_pool->displayGroups();
}

file_put_contents('output.html', ob_get_contents());
ob_end_flush();

?>