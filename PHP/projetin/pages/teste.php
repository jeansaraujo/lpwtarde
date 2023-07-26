Quais os valores devem ser atribuídos às variáveis $u, $f, $o e $p, para que o seguinte script exiba a expressão Welcome, oh yes, IFPE Garanhus is wonderful! ?
<?php
    $u = "?";
    $f = "?";
    $o = "?";
    $p = "?";
    if($u){
            if($f && !$o){
                print "oh No, not here!";
                }
            elseif(!$f &&!$o){
                print "Maybe, yes or no?";
            }
        }
        else{
            if(!$f){
                if((!$u && !$f) && ($o &&!$p)){
                    print "Welcome, oh yes, IFPE Garanhus is wonderful";
                }
                else{
                    print "Bye bye, IFPE is to the lovers!";
                }
            }
            else{
                    print "But, don't give up love";
                }
        }
    }
?>