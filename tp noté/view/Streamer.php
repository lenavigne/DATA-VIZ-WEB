<!-- ~/view/Streamer.php -->
<?php $streamer = GetStreamer($dbh, $id); ?>
<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="./Css.css">
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <title><?php echo $streamer[0][0]; ?></title>
        <meta name="description" content="liste de streamers">
        <link rel="icon" type="image/png" sizes="32x32" href="https://static.twitchcdn.net/assets/favicon-32-e29e246c157142c94346.png" >
    </head>

    <body>
        <td><a href="/Streamers.php"><?= 'Retour'; ?></a></td>
        <h1><?php echo $streamer[0][0]; ?></h1>

        <?php foreach ($streamer as $streamerId => $stream) : ?>
            <p>Date du stream: <?php echo $stream[1]; ?></p>
            <p>temps du stream (min): <?php echo $stream[2]; ?></p>
            <p>rang: <?php echo $stream[3]; ?></p>
            <p>nb moyen de viewers:  <?php echo $stream[4]; ?></p>
            <p>nb max de viewers: <?php echo $stream[5]; ?></p>
            <p>nb d'heures visionnées: <?php echo $stream[6]; ?></p>
            <p>nb de followers: <?php echo $stream[7]; ?></p>
            <p>nb de views: <?php echo $stream[8]; ?></p>
            <p>nb total de folowers: <?php echo $stream[9]; ?></p>
            <p>nb total de views: <?php echo $stream[10]; ?></p>
        <?php endforeach; ?>
        
    </body>
</html>
