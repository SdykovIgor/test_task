<?php

namespace api\controllers;

use common\models\search\CountrySearch;

/**
 * Rest API контроллер для модели Country.
 */
class CountryController extends DefaultController
{
    public $modelClass = 'common\models\Country';

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
            'searchModel' => (new CountrySearch()),
        ];
        return $actions;
    }
}
