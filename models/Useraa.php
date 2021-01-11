<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $nama_dtw
 * @property int $kategori_tkw
 *
 * @property LaporanKunjungan[] $laporanKunjungans
 * @property KategoriTkw $kategoriTkw
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'nama_dtw', 'kategori_tkw'], 'required'],
            [['kategori_tkw'], 'integer'],
            [['username'], 'string', 'max' => 10],
            [['password'], 'string', 'max' => 15],
            [['nama_dtw'], 'string', 'max' => 50],
            [['kategori_tkw'], 'exist', 'skipOnError' => true, 'targetClass' => KategoriTkw::className(), 'targetAttribute' => ['kategori_tkw' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'nama_dtw' => 'Nama Dtw',
            'kategori_tkw' => 'Kategori Tkw',
        ];
    }

    /**
     * Gets query for [[LaporanKunjungans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLaporanKunjungans()
    {
        return $this->hasMany(LaporanKunjungan::className(), ['id_user' => 'id']);
    }

    /**
     * Gets query for [[KategoriTkw]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKategoriTkw()
    {
        return $this->hasOne(KategoriTkw::className(), ['id' => 'kategori_tkw']);
    }
}
