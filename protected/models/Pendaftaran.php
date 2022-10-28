<?php

/**
 * This is the model class for table "pendaftaran".
 *
 * The followings are the available columns in table 'pendaftaran':
 * @property string $kode_pendaftaran
 * @property string $tanggal_kunjungan
 * @property integer $no_antrian
 * @property string $tujuan_poli
 * @property string $dokter
 * @property string $jenis_pembiayaan
 * @property string $no_jaminan
 * @property string $nama_pasien
 * @property string $tgl_lahir
 * @property string $alamat
 * @property string $no_rekamedik
 */
class Pendaftaran extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pendaftaran';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kode_pendaftaran, tanggal_kunjungan, no_antrian, tujuan_poli, dokter, jenis_pembiayaan, no_jaminan, nama_pasien, tgl_lahir, alamat, no_rekamedik', 'required'),
			array('no_antrian', 'numerical', 'integerOnly'=>true),
			array('kode_pendaftaran, no_rekamedik', 'length', 'max'=>10),
			array('tujuan_poli, dokter, no_jaminan', 'length', 'max'=>50),
			array('jenis_pembiayaan', 'length', 'max'=>20),
			array('nama_pasien', 'length', 'max'=>80),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('kode_pendaftaran, tanggal_kunjungan, no_antrian, tujuan_poli, dokter, jenis_pembiayaan, no_jaminan, nama_pasien, tgl_lahir, alamat, no_rekamedik', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'kode_pendaftaran' => 'Kode Pendaftaran',
			'tanggal_kunjungan' => 'Tanggal Kunjungan',
			'no_antrian' => 'No Antrian',
			'tujuan_poli' => 'Tujuan Poli',
			'dokter' => 'Dokter',
			'jenis_pembiayaan' => 'Jenis Pembiayaan',
			'no_jaminan' => 'No Jaminan',
			'nama_pasien' => 'Nama Pasien',
			'tgl_lahir' => 'Tgl Lahir',
			'alamat' => 'Alamat',
			'no_rekamedik' => 'No Rekamedik',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('kode_pendaftaran',$this->kode_pendaftaran,true);
		$criteria->compare('tanggal_kunjungan',$this->tanggal_kunjungan,true);
		$criteria->compare('no_antrian',$this->no_antrian);
		$criteria->compare('tujuan_poli',$this->tujuan_poli,true);
		$criteria->compare('dokter',$this->dokter,true);
		$criteria->compare('jenis_pembiayaan',$this->jenis_pembiayaan,true);
		$criteria->compare('no_jaminan',$this->no_jaminan,true);
		$criteria->compare('nama_pasien',$this->nama_pasien,true);
		$criteria->compare('tgl_lahir',$this->tgl_lahir,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('no_rekamedik',$this->no_rekamedik,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pendaftaran the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
