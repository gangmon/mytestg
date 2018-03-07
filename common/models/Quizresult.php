<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "quizresult".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $quiz_id
 * @property integer $score
 * @property integer $quiztime
 *
 * @property Quiz $quiz
 * @property User $user
 */
class Quizresult extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'quizresult';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'quiz_id', 'score', 'quiztime'], 'required'],
            [['user_id', 'quiz_id', 'score', 'quiztime'], 'integer'],
            [['quiz_id'], 'exist', 'skipOnError' => true, 'targetClass' => Quiz::className(), 'targetAttribute' => ['quiz_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'quiz_id' => 'Quiz ID',
            'score' => 'Score',
            'quiztime' => 'Quiztime',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuiz()
    {
        return $this->hasOne(Quiz::className(), ['id' => 'quiz_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @inheritdoc
     * @return QuizresultQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new QuizresultQuery(get_called_class());
    }
}
