<?php

namespace addons\KbitCms\common\models;

use common\models\base\BaseModel;
use Yii;

/**
 * This is the model class for table "{{%cms_album}}".
 *
 * @property int $id
 * @property int $merchant_id 商户ID
 * @property int $column_id 栏目ID
 * @property string $title 标题
 * @property string $remark 内容
 * @property int $sort 排序值
 * @property string $image 缩略图
 * @property int $status 状态
 * @property string $seo_title SEO标题
 * @property string $seo_keyword SEO关键词
 * @property string $seo_description SEO描述
 * @property int $created_at 添加时间
 * @property int $updated_at 更新时间
 */
class Album extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%cms_album}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['merchant_id', 'column_id', 'sort', 'status', 'created_at', 'updated_at'], 'integer'],
            [['title','column_id'], 'required'],
            [['remark', 'seo_description'], 'string'],
            [['title', 'image'], 'string', 'max' => 255],
            [['seo_title', 'seo_keyword'], 'string', 'max' => 500],
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
            'remark' => '内容',
            'sort' => '排序值',
            'image' => '缩略图',
            'status' => '状态',
            'seo_title' => 'SEO标题',
            'seo_keyword' => 'SEO关键词',
            'seo_description' => 'SEO描述',
            'created_at' => '添加时间',
            'updated_at' => '更新时间',
        ];
    }
}
