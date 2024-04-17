<?php


namespace App\Utils;
use Symfony\Component\HttpFoundation\Response;

class HoursParse
{
    public static function getHours($value){
        
        $hours = floor($value / 60);
        $minutes = $value % 60;
        $format = '';
        if ($hours > 0) {
            $format .= $hours . 'h ';
        }
        $format .= $minutes . 'm';
        return $format;
    }
}