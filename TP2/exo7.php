<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Your page</title>
    </head>

    <body>
    <?php
        $phrase=$_POST["phrase"];
        if(isset($phrase)){
            preg_match_all("/[[:<:]][0-9]*[[:>:]]/", $phrase, $matches);
            foreach ($matches as $match){
                foreach ($match as $x){
                    $val=$x*2;
                    print("$val.$val");
                }
            }
        }
        
    ?>

    <form action="caca.php" method="POST">
        écriver une phrase <br>
        <input type="text" name="phrase"></textarea>
        <input type="submit" value="verifier" >
    </form>
    </body>
</html>
