<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news_translation}}`.
 */
class m260218_193526_create_news_translation_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%news_translation}}', [
            'id' => $this->primaryKey(),
            'news_id' => $this->integer()->notNull(),
            'language' => $this->string(5)->notNull(),
            'title' => $this->string()->notNull(),
            'description' => $this->text()->notNull(),
        ]);
        $this->createIndex(
            'idx-news_translation-news_id',
            '{{%news_translation}}',
            'news_id'
        );

        $this->addForeignKey(
            'fk-news_translation-news_id',
            '{{%news_translation}}',
            'news_id',
            '{{%news}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-news_translation-news_id',
            '{{%news_translation}}'
        );

        $this->dropIndex(
            'idx-news_translation-news_id',
            '{{%news_translation}}'
        );

        $this->dropTable('{{%news_translation}}');
    }
    
}
