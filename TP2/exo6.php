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
            preg_match_all("/(?:bon(?:s)?)/", $phrase, $matches);
            $i=0;
            foreach ($matches as $match){
                foreach ($match as $x){
                    $i=$i+1;
                }
            }
            print("il y a " . $i . " bon ou bons dans cette phrase");
        }
        
    ?>

    <form action="caca.php" method="POST">
        écriver une phrase <br>
        <input type="text" name="phrase"></textarea>
        <input type="submit" value="verifier" >
    </form>
    </body>
</html>
