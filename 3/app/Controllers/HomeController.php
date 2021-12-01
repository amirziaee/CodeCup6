<?php

namespace App\Controllers;

use Core\Logger;
use Core\View;

class HomeController
{
    // TODO: Implement

     public function index()
    {
        $dateTime = new \DateTime();
        $log = $dateTime->format('Y-m-d H:i:s').' - '.'Home Page Visited'.PHP_EOL;
        $setLog = new Logger(__DIR__."/../../storage/logs");
        $setLog->writeLog($log);
        $setLog->getLog();

         
        return View::render('index');
    }
    public function about()
    {
        $dateTime = new \DateTime();
        $log = $dateTime->format('Y-m-d H:i:s').' - '.'About Page Visited'.PHP_EOL;
        $setLog = new Logger(__DIR__."/../../storage/logs");
        $setLog->writeLog($log);
        $setLog->getLog();
        return View::render('about');
    }

    public function contact()
    {
        $dateTime = new \DateTime();
        $log = $dateTime->format('Y-m-d H:i:s').' - '.'Contact Page Visited'.PHP_EOL;
        $setLog = new Logger(__DIR__."/../../storage/logs");
        $setLog->writeLog($log);
        $setLog->getLog();
        return View::render('contact');

    }
}
