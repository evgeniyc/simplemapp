<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\News;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

	/**
     * Displays products page.
     *
     * @return string
     */
    public function actionProducts()
    {
        return $this->render('products');
    }

    /**
     * Displays news page.
     *
     * @return string
     */
    public function actionNews()
    {
        $lang = Yii::$app->language; // 'ru', 'uk', 'en'
        /* switch ($lang) {
            case 'uk-UA':
                $newsList = require(Yii::getAlias('@app/views/site/uk-UA/news-list.php'));
                break;
            case 'ru-RU':
                $newsList = require(Yii::getAlias('@app/views/site/ru-RU/news-list.php'));
                break;
            default:
                $newsList = require(Yii::getAlias('@app/views/site/news-list.php'));
                break;
        }

        usort($newsList, function($a, $b) {
            return strtotime($b['date']) <=> strtotime($a['date']);
        }); */

        $news = News::find()
        ->with('translation')
        ->all();

        // **Важно:** передаем массив в render
        return $this->render('news', [
            'newsList' => $news,
        ]);
    }

    public function actionSnews($id)
{
    // Временно — массив фейковых новостей (пока без БД)
    $newsList = require(Yii::getAlias('@app/views/site/news-list.php'));
    if (!isset($newsList[$id])) {
        throw new \yii\web\NotFoundHttpException('News not found');
    }

    $news = $newsList[$id];

    return $this->render('snews', [
        'news' => $news
    ]);
}



    /**
     * Action to switch application language.
     */
    public function actionSetLanguage()
    {
        // Проверяем, что запрос отправлен методом POST (для безопасности CSRF)
        if (Yii::$app->request->isPost) {
            $language = Yii::$app->request->post('language'); // Получаем выбранный язык из POST-данных

            // Проверяем, что язык допустим (опционально, но рекомендуется)
            $allowedLanguages = ['uk-UA', 'ru-RU', 'en']; // Добавь все поддерживаемые языки
            if (in_array($language, $allowedLanguages)) {
                Yii::$app->language = $language;
                // Сохраняем выбор языка в сессии (наиболее распространенный способ)
                Yii::$app->session->set('language', $language);
                // Или в куках, если нужно, чтобы выбор сохранялся дольше
                 Yii::$app->response->cookies->add(new \yii\web\Cookie([
                    'name' => 'language',
					'value' => $language,
                    'expire' => time() + (86400 * 30), // 30 дней
                ]));
            }
        }

        // Перенаправляем пользователя на предыдущую страницу
        // Если предыдущей страницы нет, перенаправляем на главную
        return $this->redirect(Yii::$app->request->referrer ?: Yii::$app->homeUrl);
    }

    /**
     * Displays LangApp details page.
     * @return string
     */
    public function actionLangAppDetails()
    {
        return $this->render('langAppDetails');
    }

    public function actionCardsDe()
    {
        return $this->render('cardsDe');
    }


    public function actionUnderDevelopment()
    {
        return $this->render('underDevelopment');
    }
}
