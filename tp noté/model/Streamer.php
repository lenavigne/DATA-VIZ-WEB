<?php 
// ~/tp noté/public/Streamer.php

function GetStreamer($dbh, $id)
{
    $sql = 'SELECT name, `streamers-stats`.`date`, `streamers-stats`.`minutes_streamed`, `streamers-stats`.`rank`, `streamers-stats`.`avg_viewers`, `streamers-stats`.`max_viewers`, `streamers-stats`.`hours_watched`, `streamers-stats`.`followers`, `streamers-stats`.`views`, `streamers-stats`.`followers_total`, `streamers-stats`.`views_total`
    FROM streamers
    INNER JOIN `streamers-stats` ON `streamers`.id = `streamers-stats`.`streamer`
    WHERE streamers.id = :id;';
    $str = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $str->execute(array('id' => $id));
    $stre = $str->fetchAll();
    return $stre;
}
?>