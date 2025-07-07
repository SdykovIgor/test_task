<?php
namespace api\controllers;

use yii\filters\ContentNegotiator;
use yii\rest\ActiveController;
use yii\web\Response;


/**
 * Дефолтный контроллер для Api
 */
class DefaultController extends ActiveController
{
    public $serializer = [
        'class' => 'yii\rest\Serializer',
    ];
    public function behaviors(): array
    {
        return [
            [
                'class' => ContentNegotiator::class,
                'formats' => [
                    'application/json' => Response::FORMAT_JSON,
                ],
            ]
        ];
    }
}
