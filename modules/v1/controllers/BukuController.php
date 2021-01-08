<?php

namespace app\modules\v1\controllers;

use app\helpers\BehaviorsFromParamsHelper;
use yii\rest\ActiveController;

/*
 *
 * @author Heru Arief Wijaya
 * 2020 @  belajararief.com
 */

class BukuController extends ActiveController
{
    public $modelClass = 'app\models\Buku';

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors = BehaviorsFromParamsHelper::behaviors($behaviors);
        return $behaviors;
    }
}