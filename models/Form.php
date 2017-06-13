<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Form extends Model
{
    public $emails;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['emails', 'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }
}
