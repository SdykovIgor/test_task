<?php

namespace api\controllers;


use common\models\search\LanguageSearch;

/**
 * Rest API контроллер для модели Language.
 */
class LanguageController extends DefaultController
{
    public $modelClass = 'common\models\Language';

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
            'searchModel' => (new LanguageSearch()),
        ];
        return $actions;
    }
}
