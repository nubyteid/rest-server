<?php

namespace app\controllers;
use app\models\User;
use yii\data\ActiveDataProvider;
use yii\rest\Controller;

class UserController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => User::find(),
        ]);

        return $dataProvider;
    }

}
