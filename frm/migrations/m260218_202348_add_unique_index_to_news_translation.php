<?php

use yii\db\Migration;

class m260218_202348_add_unique_index_to_news_translation extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-news_translation-unique',
            '{{%news_translation}}',
            ['news_id', 'language'],
            true
        );
    }

    public function safeDown()
    {
        $this->dropIndex(
            'idx-news_translation-unique',
            '{{%news_translation}}'
        );
    }


    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m260218_202348_add_unique_index_to_news_translation cannot be reverted.\n";

        return false;
    }
    */
}
