<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%author}}`.
 */
class m250705_090636_create_author_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%author}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'date_of_birth' => $this->date()->notNull(),
            'country_id' => $this->integer()->notNull(),
        ]);

        //Индексы для справочника стран
        $this->createIndex(
            'idx-author-author_id',
            'author',
            'country_id'
        );
        $this->addForeignKey(
            'fk-author-country_id',
            'author',
            'country_id',
            'country',
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
        $this->dropIndex('idx-author-author_id', '{{%author}}');

        //Удаляю таблицу
        $this->dropTable('{{%author}}');
    }
}
