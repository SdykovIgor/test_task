<?php

use yii\db\Migration;

/**
 * Создаю таблицу `{{%book}}, нормализованную, отдельные сущности вынесены в отдельные таблицы`.
 */
class m250705_090637_create_book_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%book}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'author_id'=>$this->integer()->notNull(),
            'language_id' => $this->integer()->notNull(),
            'genre_id' => $this->integer()->notNull(),
            'pages' => $this->integer()->notNull(),
            'description' => $this->text()->notNull(),
        ]);

        //Индексы для Автора
        $this->createIndex(
            'idx-book-author_id',
            'book',
            'author_id'
        );
        $this->addForeignKey(
            'fk-book-author_id',
            'book',
            'author_id',
            'author',
            'id',
            'CASCADE'
        );

        //Индексы для жанра
        $this->createIndex(
            'idx-book-genre_id',
            'book',
            'genre_id'
        );
        $this->addForeignKey(
            'fk-book-genre_id',
            'book',
            'genre_id',
            'genre',
            'id',
            'CASCADE'
        );

        //Индексы для языка
        $this->createIndex(
            'idx-book-language_id',
            'book',
            'language_id'
        );
        $this->addForeignKey(
            'fk-book-language_id',
            'book',
            'language_id',
            'language',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        //Удаляю индексы
        $this->dropIndex('idx-book-language_id', '{{%book}}');
        $this->dropIndex('idx-book-genre_id', '{{%book}}');
        $this->dropIndex('idx-book-author_id', '{{%book}}');

        //Удаляю таблицу
        $this->dropTable('{{%book}}');
    }
}
