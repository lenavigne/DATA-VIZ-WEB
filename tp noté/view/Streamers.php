<!-- ~/tp noté/public/Streamers.php -->
<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="./Css.css">
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <title>All Streamer</title>
        <meta name="description" content="liste de streamers">
        <link rel="icon" type="image/png" sizes="32x32" href="https://static.twitchcdn.net/assets/favicon-32-e29e246c157142c94346.png" >
    </head>

    <header>
    <body>
        <br>
        <h1>Twitch Tracker</h1>
        <br>
        <?php foreach ($test as $testId=>$streamer): ?>
            </header>
            <br>
            <div>
            <input type="checkbox" id="scales" name="scales" onclick = "show_hide_div(this, 'd1')"checked>
        <div id="d1">
            <h2>Streamer :</h2> <p><a href="/streamer.php?id=<?=$testId+1; ?>"><?php  echo $streamer[0]; ?></a></p>
            <img src="images_streamers/<?php echo $testId+1?>.jpg" ?>
        </div>
            <br><br>
        </div>
        <?php endforeach; ?>

    </body>

    <script type="text/javascript">
function show_hide_div(input_box, div_stats) 
{
    if(input_box.checked)
    {
        document.getElementById(div_stats).style.display ="flex";
    }else
    {
        document.getElementById(div_stats).style.display ="none";
    }
}
    </script>
</html>
