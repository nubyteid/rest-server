<?php

/**
 * @SWG\Resource(
 *  basePath="http://skyapi.dev",
 *  resourcePath="/vps",
 *  @SWG\Api(
 *   path="/vps",
 *   @SWG\Operation(
 *    method="GET",
 *    type="array",
 *    summary="Fetch vps lists",
 *    nickname="vps/index",
 *    @SWG\Parameter(
 *     name="expand",
 *     description="Models to expand",
 *     paramType="query",
 *     type="string",
 *     defaultValue="vps,os_template"
 *    )
 *   )
 *  )
 * )
 */

namespace app\modules\v1\controllers;

use app\helpers\BehaviorsFromParamsHelper;
use yii\rest\ActiveController;

class PenerbitController extends ActiveController
{
    
    public function actionTest()
    {
        return ['field1', 'field2'];
    }
    
    public $modelClass = 'app\models\Penerbit';

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors = BehaviorsFromParamsHelper::behaviors($behaviors);
        return $behaviors;
    }
    
}