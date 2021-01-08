<?php

namespace app\models;

use yii\db\ActiveRecord;

class Pengarang extends ActiveRecord
{ 
    public static function tableName()
    {
        return 'pengarang';
    }

    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'namaPengarang'], 'string']
        ];
    }
}