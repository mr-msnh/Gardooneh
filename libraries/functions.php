<?php
class Functions 
{
    public function __construct() {}

    public static function letterToLowerCase($input)
    {
        return strtolower($input); 
    }

    public static function convertToCleanArray($string, $seperator, $maxNumber)
    {
        if(!empty($string) && !empty($seperator))
        {
            if(isset($maxNumber))
            {
                $arrayHandler = explode($seperator, $string, $maxNumber);
            }
            else
            {
                $arrayHandler = explode($seperator, $string);
            }
        }
        else
        {
            $arrayHandler = [" "];
        }
        return array_filter($arrayHandler);
    }

    public static function checkInteger($input) {}
}