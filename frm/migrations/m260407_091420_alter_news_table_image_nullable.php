<?php

use yii\db\Migration;

class m260407_091420_alter_news_table_image_nullable extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // Делаем поле image nullable
        $this->alterColumn('{{%news}}', 'image', $this->string(255)->null());
    }

    public function safeDown()
    {
        // Возвращаем как было (если нужно)
        $this->alterColumn('{{%news}}', 'image', $this->string(255)->notNull());
    }
}
