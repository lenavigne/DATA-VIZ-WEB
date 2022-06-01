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

    <body>
        <h1>All streamers</h1>
        <br><br>
        <?php foreach ($test as $testId=>$streamer): ?>
            <button id="togg1">Cliquez-moi !</button>
        <div id="d1">
            <h2>Streamer :</h2> <p><a href="/streamer.php?id=<?=$testId+1; ?>"><?php  echo $streamer[0]; ?></a></p>
        <h2>Date du dernier stream :</h2> <p><?php  echo $streamer[1]; ?></p>
        <h2>Nb followers total :</h2> <p><?php echo $streamer[2] ?></p>
        <h2>Nb views total :</h2> <p><?php echo $streamer[3] ?></p>
        <br><br>
        </div>
        <?php endforeach; ?>

    </body>

    <script type="text/javascript">
    let togg1 = document.getElementById("togg1");
        let d1 = document.getElementById("d1");
        togg1.addEventListener("click", () => {
  if(getComputedStyle(d1).display != "none"){
    d1.style.display = "none";
  } else {
    d1.style.display = "block";
  }
})
// function show_hide_div(input_box, div_stats) 
// {
//     if(input_box.checked)
//     {
//         document.getElementId(div_stats).style.display ="flex";
//     }else
//     {
//         document.getElementId(div_stats).style.display ="none";
//     }
// }
    </script>
</html>
