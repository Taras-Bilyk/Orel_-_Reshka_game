<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="inputs">
        <?php
            // $action=$_POST["action"];
            $games=$_POST["games"];
            // echo($games);
            
        ?>
        <form action="<?php if ($games < 9){echo("game.php");}else{echo("results.php");} ?>" method="POST">
            <p>
                <button type="submit" name="game" value="1">Orel</button>
                <button type="submit" name="game" value="2">Reshka</button>

                <?php
                    $level=$_POST["level"];
                    $victoris=$_POST["victoris"];
                    $loses=$_POST["loses"];
                    $games=$_POST["games"];
                    $disabled=$_POST["disabled"];

                    // $action=$_POST["action"];
                ?>
                <input type="hidden" name="level" value="<?php echo($level); ?>">
                
            </p>

            <p>
                <?php error_reporting(2);
                    if (isset($_POST["game"])){
                        if ($_POST){
                            // $level=$_POST["level"]; // easy medium hard
                            $game=$_POST["game"]; // 1 or 2 
                            $rand=rand(0, 100);
                            $result="";
                            
                            
                            $games += 1;
                            
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
                                        $loses += 1;
                                        // $games += 1;
                                    }else{
                                        echo("<h2>Oh, you win</h2>");
                                        $victoris += 1;
                                        // $games += 1;
                                    }
                                }else{
                                    echo("<h2>Victory!</h2>");
                                    $victoris += 1;
                                    // $games += 1;
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
                                        $victoris += 1;
                                        // $games += 1;
                                    }else{
                                        echo("<h2>Lose!!!</h2>");
                                        $loses += 1;
                                        // $games += 1;
                                    }
                                }else{
                                    echo("<h2>Lose!</h2>");
                                    $loses += 1;
                                    // $games += 1;
                                }
                            }
                            echo("<p>$result</p>");
                            echo("<p>Wictoris: $victoris</p>");
                            echo("<p>Loses: $loses</p>");
                            echo("<p>Games: $games</p>");

                            // echo("<p></p>");

                            // echo("<p>Action: $action</p>");
                        }


                    }else{
                        echo("<h2>Game started!</h2>");
                        echo("<p>Choose OREL or RESHKA</p>");
                    }
                ?>
            </p>

            <input type="hidden" name="victoris" value="<?php echo($victoris); ?>">
            <input type="hidden" name="loses" value="<?php echo($loses); ?>">
            <input type="hidden" name="games" value="<?php echo($games); ?>">
            <input type="hidden" name="level" value="<?php echo($level); ?>">
            <input type="hidden" name="disabled" value="<?php echo($disabled); ?>">

            <!-- <input type="hidden" name="action" value="<?php echo($action); ?>"> -->
        </form>
    </div>
</body>
</html>
