<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="results">
        <?php
            $victoris=$_POST["victoris"];
            $loses=$_POST["loses"];
            $games=$_POST["games"];
            $level=$_POST["level"];
            $disabled=$_POST["disabled"];

            if($victoris > 5 && $level == "easy" && $disabled == 0){
                $disabled = 1;
            }else if($victoris > 5 && $level == "medium" && $disabled == 1){
                $disabled = 2;
            }
            echo("<p>Victoris: $victoris</p>");
            echo("<p>Loses: $loses</p>");
            echo("<p>Games: $games</p>");
            echo("<p>$level</p>");
            var_dump($_POST)
        ?>
    </div>
    <form action="index.php" method="POST">
        <input type="hidden" name="wins" value="<?php echo($victoris); ?>">
        <input type="hidden" name="level" value="<?php echo($level); ?>">
        <input type="hidden" name="disabled" value="<?php echo($disabled); ?>">
        <input type="submit" value="OK">
    </form>
</body>
</html>
