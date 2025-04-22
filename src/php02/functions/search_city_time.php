<?php
//http://localhost/php02/functions/search_city_time.php


function searchCityTime($city_name)
{
    //phpファイルの読み込み
    require('config/cities.php');

    foreach ($cities as $city) {
        if ($city['name'] === $city_name) {
            $date_time = new DateTime('', new DateTimeZone($city["time_zone"]));
            $time = $date_time->format('H:i');
            $city['time'] = $time;

            return $city;
        }
    }
}
