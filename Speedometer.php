<?php


class Speedometer
{

    const MILES = 621/1000;

    public static function convertKmToMiles(int $km)
    {
        return $km * self::MILES .'miles';
    }

    public static function convertMilesToKm(int $miles)
    {
        return $miles / self::MILES .'km';
    }
}