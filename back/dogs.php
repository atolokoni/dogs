<?php

$input = json_decode(file_get_contents('php://input'), true);
$type = $input["type"];
$act = $input["act"];

abstract class Dog
{
    public static $woofWord;
    public static $huntWord;

    public static function hunt() {
        return static::$huntWord;
    }

    public static function woof() {
        return static::$woofWord;
    }
}

class SibaInu extends Dog {
    public static $woofWord = 'Звонко и задорно издает лай' ;
    public static $huntWord = 'Смотрит взглядом Хатико и отказывается что-либо делать' ;
}

class Mops extends Dog {
    public static $woofWord = '"А разве я так умею?"' ;
    public static $huntWord = '"Я что, похож на собаку, умеющую охотиться?"' ;
}

class Taxa extends Dog {
    public static $woofWord = 'Начинает скалить зубы и очень злобно рычать' ;
    public static $huntWord = 'Бежит к подушке и разрывает её в клочья';
}

class FluffyLabrador extends Dog {
    public static $woofWord = 'Шыбуршыт' ;
    public static $huntWord = '"Зачем мне охотиться, лучше обниматься ^^"' ;
}

class RubberTaxaWithPischalka extends Dog {
    public static $woofWord = 'Интенсивно пищит' ;
    public static $huntWord = 'Стоит на месте и недоумевает' ;
}


if($act == 'woof'){
    if($type == 'pl-labr'){
        echo FluffyLabrador::$woofWord;
    }
    elseif($type == 'siba'){
        echo SibaInu::$woofWord;
    }
    elseif($type == 'taxa'){
        echo Taxa::$woofWord;
    }
    elseif($type == 'taxa-toy'){
        echo RubberTaxaWithPischalka::$woofWord;
    }
    elseif($type == 'mops'){
        echo Mops::$woofWord;
    }
}
else{
    if($type == 'pl-labr'){
        echo FluffyLabrador::$huntWord;
    }
    elseif($type == 'siba'){
        echo SibaInu::$huntWord;
    }
    elseif($type == 'taxa'){
       echo Taxa::$huntWord; 
    }
    elseif($type == 'taxa-toy'){
        echo RubberTaxaWithPischalka::$huntWord;
    }
    elseif($type == 'mops'){
        echo Mops::$huntWord;
    }
}

?>