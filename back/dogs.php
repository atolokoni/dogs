<?php

abstract class Dog
{
    public static $woofWord;
    public static $huntWord;

    public static function hunt() {
        return static::$my_static;
    }

    public static function woof() {
        return static::$my_static;
    }
}

class SibaInu extends Dog {
    public static $woofWord = 'Звонко и задорно издает лай' . '<br/>';
    public static $huntWord = 'Смотрит взглядом Хатико и отказывается что-либо делать' . '<br/>';
}

class Mops extends Dog {
    public static $woofWord = '"А разве я так умею?"' . '<br/>';
    public static $huntWord = '"Я что, похож на собаку, умеющую охотиться?"' . '<br/>';
}

class Taxa extends Dog {
    public static $woofWord = 'Начинает скалить зубы и очень злобно рычать' . '<br/>';
    public static $huntWord = 'Бежит к подушке и разрывает её в клочья' . '<br/>';
}

class FluffyLabrador extends Dog {
    public static $woofWord = 'Шыбуршыт' . '<br/>';
    public static $huntWord = '"Зачем мне охотиться, лучше обниматься ^^"' . '<br/>';
}

class RubberTaxaWithPischalka extends Dog {
    public static $woofWord = 'Интенсивно пищит' . '<br/>';
    public static $huntWord = 'Стоит на месте и недоумевает' . '<br/>';
}

?>