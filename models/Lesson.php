<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lesson".
 *
 * @property int $id
 * @property int $category_id
 * @property string $title
 */
class Lesson extends \yii\db\ActiveRecord
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
        return 'lesson';
    }

    public function getCategory(){
        return $this->hasOne(Category::className(),['id'=>'category_id']);
    }
    public function getTimetable(){
        return $this->hasOne(Timetable::className(),['lesson_id'=>'id']);
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'title'], 'required'],
            [['category_id'], 'integer'],
            [['title'], 'string', 'max' => 100],
            ['images', 'file', 'extensions'=>'png, jpg', 'maxFiles'=>28]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => '№ ID',
            'category_id' => 'Категория',
            'title' => 'Название урока',
        ];
    }

    public function getCategoryName(){
        return isset($this->category) ? $this->category->name : "Нет категории";
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
