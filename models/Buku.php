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

    public function getPenerbit()
    {
        return $this->hasOne(Penerbit::className(), ['idPenerbit' => 'idPenerbit']);
    }

    public function getPengarang()
    {
        return $this->hasOne(Pengarang::className(), ['id' => 'idPengarang']);
    }

    public function extraFields()
    {
        return [
        'penerbit',
        'pengarang'];
    }



    
}