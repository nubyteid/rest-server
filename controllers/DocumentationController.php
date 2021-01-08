<?php

namespace app\controllers;
use Yii;
use yii\helpers\Url;
use yii\web\Controller;

class DocumentationController extends \yii\web\Controller
{
    public function actions(): array
    {
        return [
            //The document preview addesss:http://api.yourhost.com/site/doc
        'doc' => [
            'class' => 'light\swagger\SwaggerAction',
            'restUrl' => \yii\helpers\Url::to(['/site/modules'], true),
        ],
        //The resultUrl action.
        'api' => [
            'class' => 'light\swagger\SwaggerApiAction',
            //The scan directories, you should use real path there.
            'scanDir' => [
              
                Yii::getAlias('@app/controllers'),
                Yii::getAlias('@app/models'),
              
            ],
            //The security key
            'api_key' => 'balbalbal',
        ],
        ];
    }
    
    public function actionIndex()
    {
        return $this->render('index');
    }

}
