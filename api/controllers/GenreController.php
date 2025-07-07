<?php

namespace api\controllers;


use common\models\search\GenreSearch;


/**
 * @OA\Tag(
 *   name="Genres",
 *   description="Жанры",
 *   @OA\ExternalDocumentation(
 *     description="Жанры",
 *     url="/genres"
 *   )
 * )
 */
class GenreController extends DefaultController
{
    public $modelClass = 'common\models\Genre';

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
            'searchModel' => (new GenreSearch()),
        ];
        return $actions;
    }

    /**
     * @OA\Get(
     *     path="/genres",
     *     description="Список жанров",
     *     @OA\Parameter(
     *         name="id",
     *         in="query",
     *         description="Фильтр по id",
     *         required=false,
     *         @OA\Schema(
     *           type="int",
     *           @OA\Items(type="int"),
     *         ),
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Список жанров",
     *     ),
     *     @OA\Response(
     *         response="400",
     *         description="Ошибка",
     *     ),
     * )
     */
}

