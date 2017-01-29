<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CompleteRange
 *
 * @author nelson
 */
class CompleteRange
{
    private function _completar_rango($first, $last)
    {
        $salida = array();
        $i = $first;
        do {          
            $salida[] =  $i;
            $i ++;
        } while ($i <= $last);

        return implode(',', $salida);
    }

    //put your code here
    public static function build($param) 
    {
        $arreglo = explode(',', $param);       

        $first = $arreglo[0];
        $last = $arreglo[count($arreglo)-1];
        $salida = self::_completar_rango($first, $last);
        
        print( "Entrada: ".$param." Salida: ".$salida);
        
    }

}
