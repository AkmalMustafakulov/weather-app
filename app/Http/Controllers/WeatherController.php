<?php

namespace App\Http\Controllers;

use App\Components\ImportWeatherClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function london() {
        if (Cache::has('London')) {
            $weathers = Cache::get('London');
            date_default_timezone_set('Europe/London');
            $currentTime = date('H:i:s');
            echo "Addres:" . $weathers->resolvedAddress . "<br>";
            echo "Data:" . $weathers->days['0']->datetime . "<br>";
            echo "Condition:" . $weathers->days['0']->conditions . "<br>";
            echo "Description:" . $weathers->description . "<br><br><br>";
            $hours = $weathers->days['0']->hours;
            foreach ($hours as $hour) {
                if ($currentTime < $hour->datetime) {
                    echo "Time: " . $hour->datetime . "<br>";
                    echo "Condition: " . $hour->icon. "<br><br><br>";
                }
            }
            echo "Cache";
        } else {
            date_default_timezone_set('Europe/London');
            $currentTime = date('H:i:s');
            $currentDate = date('Y-m-d');
            $import = new ImportWeatherClient();
            $response = $import->client->request('GET', "London,UK/$currentDate?key=VD7XYLPJCHSUWF7MCNG6MCY9G");
            $weathers = json_decode($response->getBody()->getContents());
            echo "Addres:" . $weathers->resolvedAddress . "<br>";
            echo "Data:" . $weathers->days['0']->datetime . "<br>";
            echo "Condition:" . $weathers->days['0']->conditions . "<br>";
            echo "Description:" . $weathers->description . "<br><br><br>";
            $hours = $weathers->days['0']->hours;
            foreach ($hours as $hour) {
                if ($currentTime < $hour->datetime) {
                    echo "Time: " . $hour->datetime . "<br>";
                    echo "Condition: " . $hour->icon. "<br><br><br>";
                }
            }
            Cache::put('London', $weathers, 120);
            echo "Not Cache";
        }
        return "<br>End";
    }
    public function washington() {
        if (Cache::has('Washington')) {
            $weathers = Cache::get('Washington');
            date_default_timezone_set('America/New_York');
            $currentTime = date('H:i:s');
            echo "Addres:" . $weathers->resolvedAddress . "<br>";
            echo "Data:" . $weathers->days['0']->datetime . "<br>";
            echo "Condition:" . $weathers->days['0']->conditions . "<br>";
            echo "Description:" . $weathers->description . "<br><br><br>";
            $hours = $weathers->days['0']->hours;
            foreach ($hours as $hour) {
                if ($currentTime < $hour->datetime) {
                    echo "Time: " . $hour->datetime . "<br>";
                    echo "Condition: " . $hour->icon. "<br><br><br>";
                }
            }
            echo "Cache";
        } else {
            date_default_timezone_set('America/New_York');
            $currentDate = date('Y-m-d');
            $currentTime = date('H:i:s');
            $import = new ImportWeatherClient();
            $response = $import->client->request('GET', "Washington,United States/$currentDate?key=VD7XYLPJCHSUWF7MCNG6MCY9G");
            $weathers = json_decode($response->getBody()->getContents());
            echo "Addres:" . $weathers->resolvedAddress . "<br>";
            echo "Data:" . $weathers->days['0']->datetime . "<br>";
            echo "Condition:" . $weathers->days['0']->conditions . "<br>";
            echo "Description:" . $weathers->description . "<br><br><br>";
            $hours = $weathers->days['0']->hours;
            foreach ($hours as $hour) {
                if ($currentTime < $hour->datetime) {
                    echo "Time: " . $hour->datetime . "<br>";
                    echo "Condition: " . $hour->icon. "<br><br><br>";
                }
            }
            Cache::put('Washington', $weathers, 120);
            echo "Not Cache";
        }
        return "<br>End";
    }
    public function moscow() {
        if (Cache::has('Moscow')) {
            $weathers = Cache::get('Moscow');
            date_default_timezone_set('Europe/Moscow');
            $currentTime = date('H:i:s');
            echo "Addres:" . $weathers->resolvedAddress . "<br>";
            echo "Data:" . $weathers->days['0']->datetime . "<br>";
            echo "Condition:" . $weathers->days['0']->conditions . "<br>";
            echo "Description:" . $weathers->description . "<br><br><br>";
            $hours = $weathers->days['0']->hours;
            foreach ($hours as $hour) {
                if ($currentTime < $hour->datetime) {
                    echo "Time: " . $hour->datetime . "<br>";
                    echo "Condition: " . $hour->icon. "<br><br><br>";
                }
            }
            echo "Cache";
        } else {
            $currentDate = date('Y-m-d');
            date_default_timezone_set('Europe/Moscow');
            $currentTime = date('H:i:s');
            $import = new ImportWeatherClient();
            $response = $import->client->request('GET', "Moscow,Russian/$currentDate?key=VD7XYLPJCHSUWF7MCNG6MCY9G");
            $weathers = json_decode($response->getBody()->getContents());
            echo "Addres:" . $weathers->resolvedAddress . "<br>";
            echo "Data:" . $weathers->days['0']->datetime . "<br>";
            echo "Condition:" . $weathers->days['0']->conditions . "<br>";
            echo "Description:" . $weathers->description . "<br><br><br>";
            $hours = $weathers->days['0']->hours;
            foreach ($hours as $hour) {
                if ($currentTime < $hour->datetime) {
                    echo "Time: " . $hour->datetime . "<br>";
                    echo "Condition: " . $hour->icon. "<br><br><br>";
                }
            }
            Cache::put('Moscow', $weathers, 120);
            echo "Not Cache";
        }
        return "<br>End";
    }
    public function dushanbe() {
        if (Cache::has('Dushanbe')) {
            $weathers = Cache::get('Dushanbe');
            date_default_timezone_set('Asia/Dushanbe');
            $currentTime = date('H:i:s');
            echo "Addres:" . $weathers->resolvedAddress . "<br>";
            echo "Data:" . $weathers->days['0']->datetime . "<br>";
            echo "Condition:" . $weathers->days['0']->conditions . "<br>";
            echo "Description:" . $weathers->description . "<br><br><br>";
            $hours = $weathers->days['0']->hours;
            foreach ($hours as $hour) {
                if ($currentTime < $hour->datetime) {
                    echo "Time: " . $hour->datetime . "<br>";
                    echo "Condition: " . $hour->icon. "<br><br><br>";
                }
            }
            echo "Cache";
        } else {
            date_default_timezone_set('Asia/Dushanbe');
            $currentDate = date('Y-m-d');
            $currentTime = date('H:i:s');
            $import = new ImportWeatherClient();
            $response = $import->client->request('GET', "Dushanbe,Tajikistan/$currentDate?key=VD7XYLPJCHSUWF7MCNG6MCY9G");
            $weathers = json_decode($response->getBody()->getContents());
            echo "Addres:" . $weathers->resolvedAddress . "<br>";
            echo "Data:" . $weathers->days['0']->datetime . "<br>";
            echo "Condition:" . $weathers->days['0']->conditions . "<br>";
            echo "Description:" . $weathers->description . "<br><br><br>";
            $hours = $weathers->days['0']->hours;
            foreach ($hours as $hour) {
                if ($currentTime < $hour->datetime) {
                    echo "Time: " . $hour->datetime . "<br>";
                    echo "Condition: " . $hour->icon. "<br><br><br>";
                }
            }
            Cache::put('Dushanbe', $weathers, 120);
            echo "Not Cache";
        }
        return "<br>End";
    }
}
