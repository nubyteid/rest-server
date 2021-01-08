<?php

namespace app\models;

use yii\db\ActiveRecord;

class Penerbit extends ActiveRecord
{ 
    public static function tableName()
    {
        return 'penerbit';
    }

    public function rules()
    {
        return [
            [['idPenerbit'], 'required'],
            [['idPenerbit', 'namaPenerbit'], 'string']
        ];
    }
}