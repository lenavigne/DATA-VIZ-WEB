<!-- ~/view/Streamer.php -->
<?php $streamer = GetStreamer($dbh, $id); ?>
<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="./Css2.css">
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <title><?php echo $streamer[0][0]; ?></title>
        <meta name="description" content="liste de streamers">
        <link rel="icon" type="image/png" sizes="32x32" href="https://static.twitchcdn.net/assets/favicon-32-e29e246c157142c94346.png" >
    </head>

    <body>
    <div>
  <canvas id="myChart"></canvas>
    </div>
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

   <script>
   const labels = [
    'Janvier',
    'Fevrier',
    'Mars',
    'Avril',
    'Mai',
    'Juin',
  ];

  const data = {
    labels: labels,
    datasets: [{
      label: 'Evolution',
      backgroundColor: 'rgb(255, 99, 132)',
      borderColor: 'rgb(255, 99, 132)',
      data: [0, 10, 5, 2, 20, 30, 45],
    }]
  };

  const config = {
    type: 'line',
    data: data,
    options: {}
  };
</script>

<script>
  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>
        
        <h1><?php echo $streamer[0][0]; ?></h1>
        <img src=".\images_streamers\<?= $streamer[0][0]?>.jpg", alt=<?= $streamer[0][0] ?>>
        <?php foreach ($streamer as $streamerId => $stream) : ?>
          <br>
            <h2>Date du stream:</h2> <p><?php echo $stream[1]; ?></p>
            <h2>temps du stream (min):</h2> <p><?php echo $stream[2]; ?></p>
            <h2>rang:</h2> <p><?php echo $stream[3]; ?></p>
            <h2>nb moyen de viewers:</h2>  <p><?php echo $stream[4]; ?></p>
            <h2>nb max de viewers:</h2> <p><?php echo $stream[5]; ?></p>
            <h2>nb d'heures visionnées:</h2> <p><?php echo $stream[6]; ?></p>
            <h2>nb de followers:</h2> <p><?php echo $stream[7]; ?></p>
            <h2>nb de views:</h2> <p><?php echo $stream[8]; ?></p>
            <h2>nb total de folowers:</h2> <p><?php echo $stream[9]; ?></p>
            <h2>nb total de views:</h2> <p><?php echo $stream[10]; ?></p>
        
        <?php endforeach; ?>
        
    </body>

  

</html>
