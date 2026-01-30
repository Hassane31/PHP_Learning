<?php
//Advanced Examples With Parameters And Arguments




function say_hello($one,$two){
    echo "hello sir $one and $two<br>";

}

say_hello("hassane","iness");


function deep_frez($item){
    if($item == "water"){
        echo "make ace <br>";
    }

    elseif($item == "cola"){
        echo "make cold <br>";
    }

    elseif($item == "fruits"){
        echo "make fresh <br>";
    }
    else{
        echo "unknown item <br>";
    }
}

deep_frez("fruits");
deep_frez("cola");
deep_frez("water");
