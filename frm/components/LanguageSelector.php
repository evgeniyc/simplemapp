<?php
namespace app\components;

use Yii;
use yii\base\BootstrapInterface;
use yii\web\Cookie;

class LanguageSelector implements BootstrapInterface
{
    public $supportedLanguages = [];

    public function bootstrap($app)
    {
        if ($app instanceof \yii\web\Application) {
            $language = null;

            // Попытаться получить язык из сессии (приоритет выше, т.к. это явный выбор пользователя)
            if ($app->session->has('language')) {
                $language = $app->session->get('language');
            }
            // Если нет в сессии, попытаться получить из куков (для более длительного сохранения)
            elseif ($app->request->cookies->has('language')) {
                $language = $app->request->cookies->get('language')->value;
            }

            // Если язык найден и он в списке поддерживаемых, устанавливаем его
            if ($language && in_array($language, $this->supportedLanguages)) {
                $app->language = $language;
            }
            // Иначе, будет использоваться язык по умолчанию из config/web.php
        }
    }
}