<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ChangeString
 *
 * @author nelson
 */
class ChangeString
{
 
    private function _buscar_letra($letra)
    {
        $letras = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','ñ',
            'o','p','q','r','s','t','u','v','w','x','y','z');
        
        $k = array_search(strtolower($letra), $letras);
        
        if ($k !== False)
        {
            $pos = $k + 1;
            if (!$letras[$pos])
            {
                $pos = 0;
            }
            
            if ($letra === $letras[$k])
            {
                $salida = $letras[$pos];
            } else {
                $salida = strtoupper($letras[$pos]);
            }
        } else {
            $salida = $letra;
        }
         
        return $salida;
    }

    //put your code here
    public static function build($param) 
    {
        
        $len = strlen($param);
        for ($x=0; $x<$len; $x++)
        {
            $letra = substr($param, $x, 1);
            $salida .= self::_buscar_letra($letra);
        }
        
        print( "Entrada: ".$param." Salida: ".$salida);
        
    }
}