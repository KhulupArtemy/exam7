<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Вариант7 Подробная информация</title>
        <link rel="stylesheet" type="text/css" href="bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="styles.css"/>
    </head>
    <body style="background: #e1b7bf">     
        <div class="container" style="background: #59437a; color: white; width: 60em; padding: 30px;">
            <h1>Подробная информация</h1>
            <hr>

            <?php
                $filmName = $_POST["filmName"];
                $link = mysqli_connect("localhost", "root", "root", "db_variant7");
                mysqli_set_charset($link , "utf8");
                if (!$link) {
                    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
                    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
                exit;
                }
                echo "<br><h3>Вот что актуально на сегодня</h3>" . PHP_EOL;
                if ($result = mysqli_query($link, 'SELECT * FROM films WHERE film_name='$filmName' LIMIT 1')) {
                    while( $row = mysqli_fetch_assoc($result) ){
                    echo '<p>Название фильма - '.$row["film_name"].'</p>';
                    echo '<p>Длительность - '.$row["duration"].'</p>';
                    echo '<p>Жанр - '.$row["genre"].'</p>';
                }
                mysqli_free_result($result);
                }
                mysqli_close($link);
            ?>
        </div>   
    </body>
</html>