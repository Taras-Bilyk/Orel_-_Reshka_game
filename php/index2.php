<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="wrapper">
        <h1>
            <?php
                $f="Hello";
                $name=$_POST["input"];
                echo($f ." ". $name ."!");
            ?>
        </h1>
        <form action="index.php" method="POST">
            <input type="text" name="input">
            <button type=submit>ok</button>
        </form>
        <h2>
            <?php
                $p=100;
                echo("<p>$p</p>");
            ?>
        </h2>
            
            <?php
                phpinfo();
            ?>
        <p>
            <?php
                if($svitlo == 0){
                        echo("Дзвонимо в аварійну службу Обленерго")
                    }else if($svitlo < $neobhidneOsvitlennya && $svitlo > 0){
                        echo("Вмикаємо настільну лампу")
                    }
                    echo("Робимо домашку")
            ?>
        </p>
    </div>
</body>
</html>
