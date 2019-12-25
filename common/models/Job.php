<?php

namespace addons\KbitCms\common\models;

use common\models\base\BaseModel;
use Yii;

/**
 * This is the model class for table "{{%cms_job}}".
 *
 * @property int $id
 * @property int $merchant_id 商户ID
 * @property int $column_id 栏目ID
 * @property string $title 职位
 * @property int $num 人数
 * @property string $content 招聘要求
 * @property int $status 状态
 * @property int $sort 排序
 * @property string $link_main 负责人
 * @property string $phone 联系电话
 * @property string $address 面试地址
 * @property string $email 面试邮件
 * @property int $created_at 添加时间
 * @property int $updated_at 更新时间
 */
class Job extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%cms_job}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['merchant_id', 'column_id', 'num', 'status', 'sort', 'created_at', 'updated_at'], 'integer'],
            [['title', 'merchant_id', 'column_id'], 'required'],
            [['content', 'address'], 'string'],
            [['title', 'email'], 'string', 'max' => 255],
            [['link_main', 'phone'], 'string', 'max' => 50],
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
            'title' => '职位',
            'num' => '人数',
            'content' => '招聘要求',
            'status' => '状态',
            'sort' => '排序',
            'link_main' => '负责人',
            'phone' => '联系电话',
            'address' => '面试地址',
            'email' => '面试邮件',
            'created_at' => '添加时间',
            'updated_at' => '更新时间',
        ];
    }
}
