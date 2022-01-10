<?php

namespace App\Helpers\Format;

class FormaterURL{

    public function URL($string){

        $string = rtrim($string);
        $string_output = $string;
        //caracteres inválidos en una url
        $find = array('¥','µ','à','á','â','ã','ä','å','æ','ç','è','é','ê','ë','ì','í','î','ï','ð','ñ','ò','ó','ô','õ','ö','ø','ù','ú','û','ü','ý','ÿ','\'','"');
        //traduccion caracteres válidos
        $repl = array('-','-','a','a','a','a','a','a','a','c','e','e','e','e','i','i','i','i','o','ny','o','o','o','o','o','o','u','u','u','u','y','y','','' );
        $string_output = str_replace($find, $repl, $string_output);

        $string_output = trim($string_output);
        $find = strpos($string_output, '(');
        if(strlen($find) > 0) $string_output = substr($string_output, 0, $find);
        $string_output = trim($string_output);

        //más caracteres inválidos en una url que sustituiremos por guión
        $find = array(' ');
        $string_output = str_replace($find, '_', $string_output);
    
        return $string_output;

    }

}