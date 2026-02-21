<?php
namespace tests\fixtures;

use yii\test\ActiveFixture;
use app\models\News;

class NewsFixture extends ActiveFixture
{
    public $modelClass = News::class;
    public $dataFile = '@tests/fixtures/data/news.php';
}
