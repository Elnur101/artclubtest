<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "timetable".
 *
 * @property int $id
 * @property string $datatime
 * @property int $category_id
 * @property int $lesson_id
 * @property string $name
 * @property string $url
 * @property int $typelesson_id
 */
class Timetable extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'timetable';
    }

    public function getCategory(){
        return $this->hasMany(Category::className(), ['id'=>'category_id']);
    }

    public function getLesson(){
        return $this->hasMany(Lesson::className(), ['id'=>'lesson_id']);
    }



    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['datatime', 'category_id', 'lesson_id', 'name', 'url', 'typelesson_id'], 'required'],
            [['datatime'], 'safe'],
            [['category_id', 'lesson_id', 'typelesson_id'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['url'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'datatime' => 'Datatime',
            'category_id' => 'Category ID',
            'lesson_id' => 'Lesson ID',
            'name' => 'Name',
            'url' => 'Url',
            'typelesson_id' => 'Typelesson ID',
        ];
    }
}
