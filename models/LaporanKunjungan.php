<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "laporan_kunjungan".
 *
 * @property int $id
 * @property int $id_user
 * @property int $kategori_akw
 * @property int $negara
 * @property int $provinsi
 * @property int $pria
 * @property int $wanita
 * @property int $jumlah
 *
 * @property KategoriAkw $kategoriAkw
 * @property Negara $negara0
 * @property Provinsi $provinsi0
 * @property User $user
 */
class LaporanKunjungan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'laporan_kunjungan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'kategori_akw', 'negara', 'provinsi', 'pria', 'wanita', 'jumlah'], 'required'],
            [['id_user', 'kategori_akw', 'negara', 'provinsi', 'pria', 'wanita', 'jumlah'], 'integer'],
            [['kategori_akw'], 'exist', 'skipOnError' => true, 'targetClass' => KategoriAkw::className(), 'targetAttribute' => ['kategori_akw' => 'id']],
            [['negara'], 'exist', 'skipOnError' => true, 'targetClass' => Negara::className(), 'targetAttribute' => ['negara' => 'id']],
            [['provinsi'], 'exist', 'skipOnError' => true, 'targetClass' => Provinsi::className(), 'targetAttribute' => ['provinsi' => 'id']],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_user' => 'Id User',
            'kategori_akw' => 'Kategori Akw',
            'negara' => 'Negara',
            'provinsi' => 'Provinsi',
            'pria' => 'Pria',
            'wanita' => 'Wanita',
            'jumlah' => 'Jumlah',
        ];
    }

    /**
     * Gets query for [[KategoriAkw]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKategoriAkw()
    {
        return $this->hasOne(KategoriAkw::className(), ['id' => 'kategori_akw']);
    }

    /**
     * Gets query for [[Negara0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNegara0()
    {
        return $this->hasOne(Negara::className(), ['id' => 'negara']);
    }

    /**
     * Gets query for [[Provinsi0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProvinsi0()
    {
        return $this->hasOne(Provinsi::className(), ['id' => 'provinsi']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }
}
