<?php

$type = htmlspecialchars($_POST["type"]);
$act = htmlspecialchars($_POST["act"]);
if($act == 'woof'){
    if($type == 'pl-labr'){
        echo 'Шыбуршыт';
    }
    elseif($type == 'siba'){
        echo 'Звонко и задорно издает лай';
    }
    elseif($type == 'taxa'){
        echo 'Начинает скалить зубы и очень злобно рычать';
    }
    elseif($type == 'taxa-toy'){
        echo 'Интенсивно пищит';
    }
    elseif($type == 'mops'){
        echo "А разве я так умею?";
    }
}
else{
    if($type == 'pl-labr'){
        echo '"Зачем мне охотиться, лучше обниматься ^^"';
    }
    elseif($type == 'siba'){
        echo 'Смотрит взглядом Хатико и отказывается что-либо делать';
    }
    elseif($type == 'taxa'){
       echo 'Бежит к подушке и разрывает её в клочья'; 
    }
    elseif($type == 'taxa-toy'){
        echo 'Стоит на месте и недоумевает';
    }
    elseif($type == 'mops'){
        echo 'Я что, похож на собаку, умеющую охотиться?';
    }
}



?>