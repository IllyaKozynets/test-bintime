<?php

namespace app\controllers;

use app\models\Email;
use app\models\Form;
use Yii;
use yii\data\Pagination;
use yii\web\Controller;

class SiteController extends Controller
{
    /**
     * @inheritdoc
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
        $query = Email::find();
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $query->count(),
        ]);
        $emails = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'emails' => $emails,
            'pagination' => $pagination,
        ]);
    }

    public function actionAdd(){
        $model = new Form();
        if ($model->load(Yii::$app->request->post())) {
            $mails = explode(';', $model->emails);
             foreach ($mails as $mail) {
                $record = new Email();
                $record->name = $mail;
                $record->save();
            }
            return $this->refresh();
        }
        return $this->render('form', ['model' => $model]);
    }

}
