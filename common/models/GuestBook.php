<?php

namespace addons\KbitCms\common\models;

use common\models\base\BaseModel;
use Yii;

/**
 * This is the model class for table "{{%cms_guest_book}}".
 *
 * @property int $id
 * @property int $merchant_id 商户ID
 * @property int $column_id 栏目ID
 * @property string $target_model 关联模型
 * @property int $target_id 关联ID
 * @property string $realname 用户名
 * @property string $email 邮箱
 * @property string $content 内容
 * @property string $phone 手机号
 * @property int $is_replay 是否回复
 * @property string $replay 回复内容
 * @property int $status 状态
 * @property int $created_at 添加时间
 * @property int $updated_at 更新时间
 */
class GuestBook extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%cms_guest_book}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['realname', 'content'], 'required'],
            [['merchant_id', 'column_id', 'target_id', 'is_replay', 'status', 'created_at', 'updated_at'], 'integer'],
            [['content', 'replay'], 'string'],
            [['target_model', 'email'], 'string', 'max' => 255],
            [['realname', 'phone'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'merchant_id' => '商户ID',
            'column_id' => '栏目ID',
            'target_model' => '关联模型',
            'target_id' => '关联ID',
            'realname' => '用户名',
            'email' => '邮箱',
            'content' => '内容',
            'phone' => '手机号',
            'is_replay' => '是否回复',
            'replay' => '回复内容',
            'status' => '状态',
            'created_at' => '添加时间',
            'updated_at' => '更新时间',
        ];
    }
}
