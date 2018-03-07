<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "options".
 *
 * @property integer $id
 * @property string $title
 * @property string $answerA
 * @property string $answerB
 * @property string $answerC
 * @property string $answerD
 * @property string $answer
 *
 * @property Quiz[] $quizzes
 */
class Options extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'options';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'answerA', 'answerB', 'answerC', 'answerD', 'answer'], 'required'],
            [['title', 'answerA', 'answerB', 'answerC', 'answerD', 'answer'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'answerA' => 'Answer A',
            'answerB' => 'Answer B',
            'answerC' => 'Answer C',
            'answerD' => 'Answer D',
            'answer' => 'Answer',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuizzes()
    {
        return $this->hasMany(Quiz::className(), ['options' => 'id']);
    }

    /**
     * @inheritdoc
     * @return OptionsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OptionsQuery(get_called_class());
    }
}
