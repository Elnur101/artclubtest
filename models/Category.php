<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string $name
 * @property int $parent_id
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    public function getLesson(){

        return $this->hasMany(Lesson::className(), ['category_id'=>'id']);
    }
    public function getTimetable(){
        return $this->hasOne(Timetable::className(), ['category_id'=>'id']);
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'parent_id'], 'required'],
            [['parent_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => '№ ID',
            'name' => 'Название категории',
            'parent_id' => 'Родитель',
        ];
    }
}
