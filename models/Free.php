<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "free".
 *
 * @property int $id
 * @property string $name
 */
class Free extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $images;
    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }
    public static function tableName()
    {
        return 'free';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 100],
            ['images', 'file', 'extensions'=>'png, jpg', 'maxFiles'=>28]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }
    public function upload(){

        if($this->validate()){
            foreach ($this->images as $file){
                $path = 'web/uploads/store/'.$file->baseName.'.'.$file->extension;
                $file->saveAs($path);
                $this->attachImage($path);
                @unlink($path);
            }
            return true;
        }else{
            return false;
        }


    }
}
