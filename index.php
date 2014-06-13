<?php

ob_start();

$css = file_get_contents('styles.css');
echo '<style>'.$css.'</style>';

require_once('wc_pool.php');

if(UPDATING) {
  echo '<h1>Dave\'s World Cup Pool</h1>';
  echo '<h3>HOLD YOUR HORSES!</h3>';
  echo '<p>I\'m doing some standings updates. Check this out, and by the time you\'re done watching<br />you should be able to refresh your page and see the up to date standings. ~Dave</p>';
  echo '<script height="349px" width="620px" src="http://player.ooyala.com/iframe.js#pbid=2d940881487848159b3b99a3ae8125b9&ec=t2cXY0bjpwu5pc-9oDgvXKiIA5FNsJXH"></script>';
}
else {
  echo '<h1>Dave\'s World Cup Pool</h1>';
  echo '<a name="top" href="#groups">See Groups</a><br />';
  echo '<a href="#rules">See Rules & Prizes</a>';
  echo '<h4>Last Update: '.LAST_UPDATE.'</h4>';
  echo '<blockquote class="twitter-tweet" lang="en"><p>FT: <a href="https://twitter.com/search?q=%23ESP&amp;src=hash">#ESP</a> 1-5 <a href="https://twitter.com/search?q=%23NED&amp;src=hash">#NED</a> Impressive Netherlands see off Spain in Salvador <a href="https://twitter.com/search?q=%23WorldCup&amp;src=hash">#WorldCup</a> <a href="https://twitter.com/search?q=%23ESPNED&amp;src=hash">#ESPNED</a> <a href="https://twitter.com/search?q=%23joinin&amp;src=hash">#joinin</a> – <a href="http://t.co/WJ66IW5Rki">http://t.co/WJ66IW5Rki</a> <a href="http://t.co/461r8xDxjZ">pic.twitter.com/461r8xDxjZ</a></p>&mdash; FIFAWorldCup (@FIFAWorldCup) <a href="https://twitter.com/FIFAWorldCup/statuses/477553848777990146">June 13, 2014</a></blockquote>
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>';

  $wc_pool = new WC_Pool();
  $wc_pool->calculateStandings();
  $wc_pool->displayStandings();
  if(SHOW_TEAMS) $wc_pool->displayTeams();
  $wc_pool->displayGroups();

  echo '<a name="rules"/>';
  echo '<h4>Rules</h4>';
  echo '<p>In Team groups, each win in the tournament is worth 3 points. A draw is worth 1 point. The team in each bracket (and ties) that finishes with the most points will receive 3 bonus points.</p>';
  echo '<p>In Player groups, each goal scored is worth 2 points. The player in each bracket (and ties) that finishes with the most goals will receive 3 bonus points.</p>';
  echo '<h4>Prizes</h4>';
  echo '<ul><li>1st - $200</li><li>2nd - $100</li><li>3rd - $40</li></ul>';
  echo '<h4>Tiebreakers</h4>';
  echo '<p>If there are ties in the top three spots at the end of the tournament, tiebreakers in order are:';
  echo '<ul><li>Picked the World Cup winner in their bracket</li>';
  echo '<li>Made the most picks that received the Bonus Pts for their group</li>';
  echo '<li>Scored the most goals</li></ul>';
  echo '<h2>Good Luck!</h2>';
}

file_put_contents('output.html', ob_get_contents());
ob_end_flush();

?>