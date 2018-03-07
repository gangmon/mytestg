<?php

namespace common\models;
use backend\models\Adminuser;
use Yii;

/**
 * This is the model class for table "quiz".
 *
 * @property integer $id
 * @property integer $admin_id
 * @property integer $options
 * @property integer $difficulty
 *
 * @property Administer $admin
 * @property Options $options0
 * @property Quizresult[] $quizresults
 */
class Quiz extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'quiz';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['admin_id', 'options', 'difficulty'], 'required'],
            [['admin_id', 'options', 'difficulty'], 'integer'],
            [['admin_id'], 'exist', 'skipOnError' => true, 'targetClass' => Adminuser::className(), 'targetAttribute' => ['admin_id' => 'id']],
            [['options'], 'exist', 'skipOnError' => true, 'targetClass' => Options::className(), 'targetAttribute' => ['options' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '编号',
            'admin_id' => '出卷人',
            'options' => '选择题数量',
            'difficulty' => '难度系数',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdmin()
    {
        return $this->hasOne(Adminuser::className(), ['id' => 'admin_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOptions0()
    {
        return $this->hasOne(Options::className(), ['id' => 'options']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuizresults()
    {
        return $this->hasMany(Quizresult::className(), ['quiz_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return QuizQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new QuizQuery(get_called_class());
    }
}
