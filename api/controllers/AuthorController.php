<?php

namespace api\controllers;

use common\models\search\AuthorSearch;

/**
 * Rest API контроллер для модели Author.
 */
class AuthorController extends DefaultController
{
    public $modelClass = 'common\models\Author';
    /**
     * @OA\Get(
     *     path="/api/endpoint",
     *     @OA\Response(response="200", description="")
     * )
     */
    public function actions(): array
    {
        $actions = parent::actions();
        $actions['index']['dataFilter'] = [
            'class' => \yii\data\ActiveDataFilter::class,
            'searchModel' => (new AuthorSearch()),
        ];
        return $actions;
    }
}
