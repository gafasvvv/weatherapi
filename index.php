    <?php
        require_once 'weatherapi.php';
    ?>

    <!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>天気</title>
    </head>
    <body>

        <h2>CI本社周辺の天気</h2>
        <h3>3時間ごとに表示</h3>
        <div class="weather">
            <?php
                for($i=0; $i<3; $i++){
            ?>
            <h4><?= $result["list"][$i]["dt_txt"]?>の天気</h4>
            <p>天気：<?= $result["list"][$i]["weather"][0]["main"]; ?></p>
            <p>気温：<?= $result["list"][$i]["main"]["temp"]; ?>度</p>
            <?php
                }
            ?>
        </div>
        
    </body>