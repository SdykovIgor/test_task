<?php

namespace console\controllers;

use yii\console\Controller;
class TestController extends Controller
{
    public function actionTestLanguage($urlApi = ""){

    }
    public function actionTestGenres($urlApi = ""){

    }
    public function actionTestCountries($urlApi = ""){

    }
    public function actionTestAuthor($urlApi = ""){

    }
    public function actionTestBooks($urlApi = ""){

    }
    public function actionTest($urlApi = ""){

    }

    private function request($url, $method = "GET", $params = [])
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);

    }
}