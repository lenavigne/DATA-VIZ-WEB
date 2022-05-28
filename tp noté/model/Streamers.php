<?php 
// ~/tp noté/public/Streamers.php

$stream = $dbh->prepare('SELECT streamers.name, date, followers_total, views_total
FROM `streamers-stats`
INNER JOIN streamers ON `streamers-stats`.`streamer` = streamers.id
GROUP BY streamer;');
$stream->execute();
$test = $stream->fetchAll();

