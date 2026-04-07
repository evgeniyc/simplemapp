<?php

namespace app\controllers;

use Yii;
use app\models\News;
use app\models\NewsTranslation;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * NewsController реализует CRUD для модели News с поддержкой i18n (вкладки).
 */
class NewsController extends Controller
{
    /**
     * Настройка доступа и методов
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'], // Доступ только для залогиненных пользователей
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'delete' => ['POST'], // Удаление только через POST запрос
                ],
            ],
        ];
    }

    /**
     * Список всех новостей в админке
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => News::find()->with('translation'), // Жадная загрузка перевода для текущего языка
            'sort' => ['defaultOrder' => ['date' => SORT_DESC]],
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Просмотр одной новости
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Создание новой новости с переводами на 3 языка
     */
    public function actionCreate()
    {
        $model = new News();
        $languages = ['ru-RU', 'uk-UA', 'en'];
        $translations = [];

        foreach ($languages as $lang) {
            $translations[$lang] = new NewsTranslation(['language' => $lang]);
        }

        if ($model->load(Yii::$app->request->post())) {
            $transaction = Yii::$app->db->beginTransaction();
            try {
                if ($model->save()) {
                    if (NewsTranslation::loadMultiple($translations, Yii::$app->request->post())) {
                        foreach ($translations as $translation) {
                            $translation->news_id = $model->id;
                            if (!$translation->save()) {
                                throw new \Exception("Ошибка сохранения перевода [$translation->language]");
                            }
                        }
                        $transaction->commit();
                        return $this->redirect(['view', 'id' => $model->id]);
                    }
                }
            } catch (\Exception $e) {
                $transaction->rollBack();
                Yii::$app->session->setFlash('error', $e->getMessage());
            }
        }

        return $this->render('create', [
            'model' => $model,
            'translations' => $translations,
        ]);
    }

    /**
     * Редактирование новости и её переводов
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $languages = ['ru-RU', 'uk-UA', 'en'];
        $translations = [];

        foreach ($languages as $lang) {
            $translation = NewsTranslation::findOne(['news_id' => $id, 'language' => $lang]);
            $translations[$lang] = $translation ?: new NewsTranslation(['news_id' => $id, 'language' => $lang]);
        }

        if ($model->load(Yii::$app->request->post())) {
            $transaction = Yii::$app->db->beginTransaction();
            try {
                if ($model->save()) {
                    if (NewsTranslation::loadMultiple($translations, Yii::$app->request->post())) {
                        foreach ($translations as $translation) {
                            $translation->news_id = $model->id; // На случай если создаем новый перевод в Update
                            if (!$translation->save()) {
                                throw new \Exception("Ошибка обновления перевода [$translation->language]");
                            }
                        }
                        $transaction->commit();
                        return $this->redirect(['view', 'id' => $model->id]);
                    }
                }
            } catch (\Exception $e) {
                $transaction->rollBack();
                Yii::$app->session->setFlash('error', $e->getMessage());
            }
        }

        return $this->render('update', [
            'model' => $model,
            'translations' => $translations,
        ]);
    }

    /**
     * Удаление новости (переводы удалятся автоматически, если в БД настроен ON DELETE CASCADE)
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        return $this->redirect(['index']);
    }

    /**
     * Поиск модели
     */
    protected function findModel($id)
    {
        if (($model = News::find()->where(['id' => $id])->with('newsTranslations')->one()) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('Новость не найдена.');
    }
}
