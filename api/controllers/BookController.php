<?php

namespace api\controllers;

use common\models\search\BookSearch;

/**
 * Rest API контроллер для модели Book.
 */
class BookController extends DefaultController
{
    public $modelClass = 'common\models\Book';


    /**
     * Настройка фильтров
     *
     * @return array
     */
    public function actions(): array
    {
        $actions = parent::actions();
        $actions['index']['dataFilter'] = [
            'class' => \yii\data\ActiveDataFilter::class,
            'searchModel' => (new BookSearch()),
        ];
        return $actions;
    }
}
