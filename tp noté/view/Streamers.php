<!-- ~/tp noté/public/Streamers.php -->
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <title>All Streamer</title>
        <meta name="description" content="liste de streamers">
        <link rel="icon" type="image/png" sizes="32x32" href="https://static.twitchcdn.net/assets/favicon-32-e29e246c157142c94346.png" >
    </head>

    <body>
        <h1>All streamers</h1>

        <?php foreach ($test as $testId=>$streamer): ?>
        <p>Streamer : <?php  echo $streamer[0]; ?></p>
        <p>Date du dernier stream : <?php  echo $streamer[1]; ?></p>
        <p>Nb followers total : <?php echo $streamer[2] ?></p>
        <p>Nb views total : <?php echo $streamer[3] ?></p>

        <!--<p><?php var_dump($streamer); ?></p> -->
        <?php endforeach; ?>

    </body>
</html>
