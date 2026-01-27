 function foo($chaine1){
        if(isset($chaine1)){
            preg_match_all("/([[:<:]][bcdfghjklmnpqrstvwxz]*[[:>:]])|[[:<:]][[:word:]]*[[:>:]]/", $chaine1,$matches);
            $i=0;
            $number=false;
            foreach ($matches[0] as $match){
                if(!strcmp($matches[1][$i],$match)){
                    for($n=0;$n<strlen($match);$n++){
                        echo "1";
                    }
                }else echo $match;
                $i++;
            }
        }
    }
