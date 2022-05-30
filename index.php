<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orel & Reshka</title>
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
    <h1>Orel & Reshka game</h1>
    
    <div class="inputs">
        <form action="index.php" method="POST">
            <p>
                <label>
                    <input type="radio" name="level" value="easy">Easy
                </label>
                <label>
                    <input type="radio" name="level" value="madium" checked>Medium
                </label>
                <label>
                    <input type="radio" name="level" value="hard">Hard
                </label>
            </p>
            <p>
                <button type="submit" name="game" value="1">Orel</button>
                <button type="submit" name="game" value="2">Reshka</button>
            </p>
        </form>
        <p>
            <?php
                if ($_POST){
                    $level=$_POST["level"]; // easy medium hard
                    $game=$_POST["game"]; // 1 or 2 
                    $rand=rand(0, 100);
                    $result="";
                    

                    if($rand == 0){
                        // echo("rebro!!!");
                        $result = "rebro!!!";
                    }else if($rand <= 50){
                        $result = "reshka";
                        //echo($result);
                        // echo("reshka");
                        $rand = 2;
                    }else if($rand > 50){
                        $result = "orel";
                        //echo($result);
                        //echo("orel");
                        $rand = 1;
                    }

                    if($game == 1){
                        echo("<p>You chooose Orel</p>");
                    }else if($game == 2){
                        echo("<p>You chooose Reshka</p>");
                    }

                    if($game == $rand){
                        if($level == "hard"){
                            $rand=rand(0, 2);
                            if($rand == 0){
                                if($game == 1){
                                    $result = "reshka";
                                }else{
                                    $result = "orel";
                                }
                                echo("<h2>Ha, you lose!!!</h2>");
                            }else{
                                echo("<h2>Oh, you win</h2>");
                            }
                        }else{
                            echo("<h2>Victory!</h2>");
                        }
                    }else{
                        if($level == "easy"){
                            $rand=rand(0, 1);
                            if($rand == 1){
                                if($game == 1){
                                    $result = "orel";
                                }else{
                                    $result = "reshka";
                                }
                                echo("<h2>Win!!!</h2>");
                            }else{
                                echo("<h2>Lose!!!</h2>");
                            }
                        }else{
                            echo("<h2>Lose!</h2>");
                        }
                    }
                    echo("<p>$result</p>");
                    var_dump($_POST);
                    echo(isset($_POST["level"]));
                }
            ?>
        </p>
    </div>
</body>
</html>
