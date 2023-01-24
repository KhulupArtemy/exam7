<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Вариант7 Главная</title>
        <link rel="stylesheet" type="text/css" href="bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="styles.css"/>
        <script src="showDetails.js"></script>
    </head>
    <body style="background: #e1b7bf">     
        <div class="container" style="background: #59437a; color: white; width: 60em; padding: 30px;">
            <h1 onclick="showDetails('Film1')">Обзоры фильмов</h1>
            <hr>

            <table class="table table-secondary table-striped table-bordered border-secondary">
                <tr>
                    <td>Название фильма</td>
                </tr>
            <?php
                $link = mysqli_connect("localhost", "root", "root", "db_variant7");
                mysqli_set_charset($link , "utf8");
                if (!$link) {
                    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
                    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
                exit;
                }
                echo "<br><h3>Вот что актуально на сегодня</h3>" . PHP_EOL;
                if ($result = mysqli_query($link, 'SELECT film_name FROM films')) {
                    while( $row = mysqli_fetch_assoc($result) ){
                    echo '<tr>';
                    echo '<td style="border: 1px solid black" onclick="showDetails(\''.$row["film_name"].'\')">'.$row["film_name"].'</td>';
                    echo '</tr>';
                }
                echo '</table>';
                    mysqli_free_result($result);
                }
                mysqli_close($link);
            ?>
            <hr>
        </div>   
    </body>
</html>