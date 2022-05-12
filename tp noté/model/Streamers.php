<?php 
// ~/tp noté/public/Streamers.php

function find_streamer($dbh, $id)
{
    $stats = $dbh->prepare('SELECT name, date, minutes_streamed, rank, avg_viewers, max_viewers, hours_watched, followers, views, followers_total, views_total FROM streamers_stats INNER JOIN streamers ON streamers_stats.streamer = streamers.id WHERE streamers_stats.streamer = :id');
    $stats->execute(["id"=>$id]);
    $streamer = $stats->fetchAll();
    return $streamer;
}
