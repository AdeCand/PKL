<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "provinsi".
 *
 * @property int $id
 * @property string $provinsi
 *
 * @property LaporanKunjungan[] $laporanKunjungans
 */
class Provinsi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'provinsi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['provinsi'], 'required'],
            [['provinsi'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'provinsi' => 'Provinsi',
        ];
    }

    /**
     * Gets query for [[LaporanKunjungans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLaporanKunjungans()
    {
        return $this->hasMany(LaporanKunjungan::className(), ['provinsi' => 'id']);
    }
}
