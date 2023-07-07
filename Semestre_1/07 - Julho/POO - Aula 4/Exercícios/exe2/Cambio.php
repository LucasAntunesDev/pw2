<?php

class Cambio{
    public static function realParaDolar($valor){
        return 'U$ '. number_format($valor * 4.92, 2, ",", ".");
    }
    public static function dolarParaReal($valor){
        return 'R$ '.number_format($valor / 4.92, 2, ",", ".");
    }
    public static function realParaBitcoin($valor){
        return '₿$ '.number_format($valor * 148209.28, 2, ",", ".");
    }
    public static function bitcoinParaReal($valor){
        return 'R$ '.number_format($valor / 148209.28, 8, ",", ".");
    }
}