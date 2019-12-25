<?php

namespace addons\KbitCms\common\models;

use common\models\base\BaseModel;
use Yii;

/**
 * This is the model class for table "{{%cms_download}}".
 *
 * @property int $id
 * @property int $merchant_id 商户ID
 * @property int $column_id 栏目ID
 * @property string $title 标题
 * @property string $remark 简介
 * @property string $content 内容介绍
 * @property string $image 缩略图
 * @property int $is_password 是否需要密码
 * @property string $password 密码
 * @property string $file 下载地址
 * @property int $sort
 * @property int $status 状态
 * @property int $created_at 添加时间
 * @property int $updated_at 更新时间
 */
class Download extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%cms_download}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['column_id', 'title'], 'required'],
            [['merchant_id', 'column_id', 'is_password', 'sort', 'status', 'created_at', 'updated_at'], 'integer'],
            [['remark', 'content'], 'string'],
            [['title', 'image', 'file'], 'string', 'max' => 255],
            [['password'], 'string', 'max' => 50],
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
            'title' => '标题',
            'remark' => '简介',
            'content' => '内容介绍',
            'image' => '缩略图',
            'is_password' => '是否需要密码',
            'password' => '密码',
            'file' => '下载地址',
            'sort' => '排序值',
            'status' => '状态',
            'created_at' => '添加时间',
            'updated_at' => '更新时间',
        ];
    }
}
