<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\TourOperators;
use app\modules\admin\models\TourOperatorsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TourOperatorsController implements the CRUD actions for TourOperators model.
 */
class TourOperatorsController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all TourOperators models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TourOperatorsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TourOperators model.
     * @param int $id_tour_operator Id Tour Operator
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_tour_operator)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_tour_operator),
        ]);
    }

    /**
     * Creates a new TourOperators model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TourOperators();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_tour_operator' => $model->id_tour_operator]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TourOperators model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_tour_operator Id Tour Operator
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_tour_operator)
    {
        $model = $this->findModel($id_tour_operator);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_tour_operator' => $model->id_tour_operator]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TourOperators model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_tour_operator Id Tour Operator
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_tour_operator)
    {
        $this->findModel($id_tour_operator)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TourOperators model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_tour_operator Id Tour Operator
     * @return TourOperators the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_tour_operator)
    {
        if (($model = TourOperators::findOne(['id_tour_operator' => $id_tour_operator])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
