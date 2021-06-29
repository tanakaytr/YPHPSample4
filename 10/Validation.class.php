<?php

class Validation
{
// エラーをしているかどうか→空かどうか
    static function evalidation($z)               
    {
        if(empty($z)){
            return false;
        } else {
            return true;
        }
    }
// エラーをしているかどうか→数値かどうか
    static function nvalidation($x)               
    {
        if(is_numeric($x)){
            return true;
        } else {
            return false;
        }
    }
}
?>
