<?php

namespace mdm\admin\controllers;

use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\rbac\DbManager;
use Yii;

/**
 * AuthItemController implements the CRUD actions for AuthItem model.
 *
 * @author Misbahul D Munir <misbahuldmunir@gmail.com>
 * @since 1.0
 */
class CacheController extends Controller
{

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'clear' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all AuthItem models.
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index', [
        ]);
    }

    /**
     * Displays a single AuthItem model.
     * @return mixed
     */
    public function actionClear()
    {
        /* @var $manager DbManager */
        $manager = Yii::$app->authManager;
        $manager->invalidateCache();

        Yii::$app->session->setFlash('auth.cache.cleared');
        return $this->redirect(['index']);
    }

}