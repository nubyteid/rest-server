<?php

namespace app\models;

use yii\db\ActiveRecord;

class Buku extends ActiveRecord
{ 
    public static function tableName()
    {
        return 'buku';
    }

    public function rules()
    {
        return [
            [['idBuku'], 'required'],
            [['idBuku', 'judul', 'idPengarang', 'idPenerbit'], 'string']
        ];
    }
}