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
            $arrayHandler = [null];
        }

        $arrayResult = array_filter($arrayHandler);

        if(!empty($arrayResult))
        {
            return $arrayResult;
        }
        else
        {
            return [null];
        }
    }

    public static function convertEngToFaDigit($digit)
    {
        switch($digit)
        {
            case 0 : return "۰"; break;
            case 1 : return "۱"; break;
            case 2 : return "۲"; break;
            case 3 : return "۳"; break;
            case 4 : return "۴"; break;
            case 5 : return "۵"; break;
            case 6 : return "۶"; break;
            case 7 : return "۷"; break;
            case 8 : return "۸"; break;
            case 9 : return "۹"; break;
            default: return $digit;
        }
    }

    public static function convertEngToFaNumber($number)
    {
        $stringNumber = (string) $number;
        $digitsArray = [];
        $result = "";
        
        $digitsArray = str_split($stringNumber);
        
        for($i = 0; $i < count($digitsArray); $i++)
        {
            $result .= self::convertEngToFaDigit($digitsArray[$i]);
        }

        //-----Mathmatic Method-----
        // while($tempNumber > 0)
        // {
        //     array_push($digitsArray, $tempNumber%10);
        //     $tempNumber = (int) ($tempNumber/10);
        // }
        // for($i = count($digitsArray)-1; $i >= 0; $i--)
        // {
        //     $result .= self::convertEngToFaDigit($digitsArray[$i]);
        // }

        return $result;
    }

    public static function seperateDigitsBySpatialValue($number, $persion = true)
    {
        $digitsArray = str_split($number);

        if ($persion == true)
        {
            for ($i = 0; $i < count($digitsArray); $i ++)
            {
                $digitsArray[$i] = self::convertEngToFaDigit($digitsArray[$i]);
            }
        }
        
        for ($i = count($digitsArray)-1; $i >= 0; $i -= 3)
        {
            if($i == count($digitsArray)-1) { continue; }
            $digitsArray[$i] .= ",";
        }

        $result = implode("", $digitsArray);

        return $result;
    }

    public static function checkEmptyVariables($arrayVariables)
    {
        foreach ($arrayVariables as $variable)
        {
            if(is_array($variable))
            {
                $cleanVariable = array_filter($variable);
            }
            else if (is_string($variable))
            {
                $cleanVariable = trim($variable);
            }

            if (empty($cleanVariable))
            {
                return false;
            }
        }

        return true;
    }

    public static function checkInteger($input) {}

}