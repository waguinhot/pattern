<?php




final class StaticFactory {

    public static function make($type)
    {
        if($type == "number")
        {
            require 'formatNumber.php';
            return new FormatNumber();
        }

        if($type == "string")
        {   
            require 'formatString.php';
            return new FormatString();
        }
    }
}