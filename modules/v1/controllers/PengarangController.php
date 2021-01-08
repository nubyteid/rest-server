<?php

namespace app\modules\v1\controllers;

use app\helpers\BehaviorsFromParamsHelper;
use yii\rest\ActiveController;

/*
 *
 * @author Heru Arief Wijaya
 * 2020 @  belajararief.com
 */

class PengarangController extends ActiveController
{
    public $modelClass = 'app\models\Pengarang';

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors = BehaviorsFromParamsHelper::behaviors($behaviors);
        return $behaviors;
    }
}