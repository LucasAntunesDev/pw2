<?php

class Formatador
{

    public static function numeroParaMonetario($num)
    {
        return 'R$' . number_format($num, 2, ',', '.');
    }
}
