<?php

namespace addons\KbitCms\common\models;

use Yii;
use common\models\base\BaseModel;
/**
 * This is the model class for table "{{%cms_product}}".
 *
 * @property int $id
 * @property int $column_id 栏目
 * @property string $title 产品标题
 * @property int $cate_id 栏目分类
 * @property string $image 缩略图
 * @property string $seo_title seo标题
 * @property string $seo_keyword seo关键词
 * @property string $seo_description seo描述
 * @property string $price 价格
 * @property string $unit 单位
 * @property string $content 内容描述
 * @property string $author 作者
 * @property int $views_num 浏览量
 * @property int $sort 排序值
 * @property int $status 状态
 * @property int $created_at 添加时间
 * @property int $updated_at 更新时间
 */
class Product extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%cms_product}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['column_id', 'title'], 'required'],
            [['column_id', 'cate_id', 'views_num', 'status', 'created_at', 'updated_at','sort'], 'integer'],
            [['seo_description', 'content'], 'string'],
            [['price'], 'number'],
            [['title', 'image', 'seo_title', 'seo_keyword', 'author'], 'string', 'max' => 255],
            [['unit'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'column_id' => '栏目',
            'title' => '产品标题',
            'cate_id' => '栏目分类',
            'image' => '缩略图',
            'seo_title' => 'seo标题',
            'seo_keyword' => 'seo关键词',
            'seo_description' => 'seo描述',
            'price' => '价格',
            'unit' => '单位',
            'content' => '内容描述',
            'author' => '作者',
            'views_num' => '浏览量',
            'sort' => '排序值',
            'status' => '状态',
            'created_at' => '添加时间',
            'updated_at' => '更新时间',
        ];
    }
}
