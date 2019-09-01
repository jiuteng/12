<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "add".
 *
 * @property string $id
 * @property string $name
 * @property string $pwd
 * @property string $user
 * @property string $radio
 * @property string $city
 * @property string $tel
 * @property string $excel
 */
class Add extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'add';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['name','required',"message"=>"用户名不能为空"],
            ['pwd','required',"message"=>"密码不能为空"],
            ['user','required',"message"=>"姓名不能为空"],
            ['radio','required',"message"=>"性别不能为空"],
            ['city','required',"message"=>"城市不能为空"],
            ['tel','required',"message"=>"电话不能为空"],
            ['excel','required',"message"=>"邮箱不能为空"],
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
            'pwd' => 'Pwd',
            'user' => 'User',
            'radio' => 'Radio',
            'city' => 'City',
            'tel' => 'Tel',
            'excel' => 'Excel',
        ];
    }
}
