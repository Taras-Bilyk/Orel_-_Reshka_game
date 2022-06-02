<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $wins=$_POST["wins"];
        if(isset($_POST["disabled"])){
            $disabled = $_POST["disabled"];
        }else{
            $disabled = 0;
        }
        // echo(var_dump($_POST));
    ?>
    <form action="game.php" method="POST">
        <p>
            <label>
                <input type="radio" name="level" value="easy" checked>Easy
            </label>
            
            <input type="hidden" name="victoris" value="0">
            <input type="hidden" name="loses" value="0">
            <input type="hidden" name="games" value="0">
            <input type="hidden" name="disabled" value="<?php echo($disabled); ?>">
            
            <input type="hidden" name="action" value="game.php">
            
            <label>
                <input type="radio" name="level" value="medium" <?php if($disabled == 0){echo("disabled");} ?>>Medium
            </label>
            <label>
                <input type="radio" name="level" value="hard" <?php if($disabled == 0 || $disabled == 1){echo("disabled");}?>>Hard
            </label>
            
        </p>
        <!-- <input type="hidden" name="levelInput" value=""> -->
        <input type="submit" value="OK">
    </form>
</body>
</html>
