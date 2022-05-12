<?php 
// ~/tp noté/public/Streamers.php 
// include model 
include __DIR__ . '/../database/db.php';
// include model 
include __DIR__ . '/../model/Streamers.php'; 
$streamer = find_streamer($dbh, 1);
var_dump($streamer);
// include view 
include __DIR__ . '/../view/Streamer.php';