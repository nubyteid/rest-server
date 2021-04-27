<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penerima".
 *
 * @property int $id
 * @property string|null $Nama
 * @property string|null $TempatLahir
 * @property string|null $TanggalLahir
 * @property string|null $JenisKelamin
 * @property string|null $InstansiKerja
 * @property int $statusBansos
 * @property float $penghasilan
 * @property string|null $UserId
 * @property string|null $TanggalInput
 */
class Penerima extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penerima';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['statusBansos', 'penghasilan'], 'required'],
            [['statusBansos'], 'integer'],
            [['penghasilan'], 'number'],
            [['Nama'], 'string', 'max' => 43],
            [['TempatLahir'], 'string', 'max' => 24],
            [['TanggalLahir'], 'string', 'max' => 17],
            [['JenisKelamin'], 'string', 'max' => 14],
            [['InstansiKerja'], 'string', 'max' => 23],
            [['UserId'], 'string', 'max' => 7],
            [['TanggalInput'], 'string', 'max' => 13],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Nama' => 'Nama',
            'TempatLahir' => 'Tempat Lahir',
            'TanggalLahir' => 'Tanggal Lahir',
            'JenisKelamin' => 'Jenis Kelamin',
            'InstansiKerja' => 'Instansi Kerja',
            'statusBansos' => 'Status Bansos',
            'penghasilan' => 'Penghasilan',
            'UserId' => 'User ID',
            'TanggalInput' => 'Tanggal Input',
        ];
    }
}
