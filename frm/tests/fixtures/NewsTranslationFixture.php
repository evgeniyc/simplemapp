<?php
namespace tests\fixtures;

use yii\test\ActiveFixture;

class NewsTranslationFixture extends ActiveFixture
{
    public $modelClass = 'app\models\NewsTranslation';
    public $dataFile = '@tests/fixtures/data/news_translation.php';

    public $depends = [
        'tests\fixtures\NewsFixture',
    ];
}
