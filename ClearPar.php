<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClearPar
 *
 * @author nelson
 */
class ClearPar
{
    private function _buscar_parejas(&$arreglo1)
    {
        $parejas = 0;
        $len = count($arreglo1);
        $first = '';
        $pos_first = '';
        $pos_second = '';
        for ($x=0; $x<$len; $x++)
        {
            if ($first == '' && $arreglo1[$x] == '(')
            {
                $first = $arreglo1[$x];
                $pos_first = $x;
                continue;
            } 
            
            if ($first)
            {
                if ($arreglo1[$x] == ')')
                {
                    $pos_second = $x;
                    $arreglo1[$pos_first] = '';
                    $arreglo1[$pos_second] = '';
                    $first = '';
                    $parejas ++;
                } else {
                    if (trim($arreglo1[$x]))
                    {
                        $pos_first = $x;
                    }
                }
            }
        }

        return $parejas;
    }

    //put your code here
    public static function build($param) 
    {
        $arreglo1 = str_split($param);
        $arreglo2 = $arreglo1;
        $len = count($arreglo2);
        
        do {          
            $parejas =  self::_buscar_parejas($arreglo1);
        } while ($parejas > 0);
        
        for ($x=0; $x<$len; $x++)
        {
            if (trim($arreglo1[$x]) != '')
            {
                $arreglo2[$x] = '';
            }
            $salida .= $arreglo2[$x];
        }

        print( "Entrada: '".$param."' ------ Salida: '".$salida."'");
        
    }
}
