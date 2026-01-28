function compute($chaine1){
        if(isset($chaine1)){
            preg_match_all("/\d(?:\*\d+)?/", $chaine1,$matches);
            //print_r($matches);

            $nombre=0;
            foreach($matches[0] as $chiffres){
                
                if(preg_match("/\*/",$chiffres)){
                    preg_match_all("/(\d+)/",$chiffres,$chiffreAMult);
                    $mult=1;
                    foreach($chiffreAMult[1] as $multi){
                        $mult*=$multi;
                    }
                    $nombre+=$mult;
                }else $nombre+=$chiffres;
            }
            echo $nombre;
        }
    }
