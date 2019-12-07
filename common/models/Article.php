<?php

namespace addons\KbitCms\common\models;

use common\models\base\BaseModel;
use Yii;

/**
 * This is the model class for table "{{%content_article}}".
 *
 * @property int $id
 * @property int $column_id 栏目ID
 * @property string $title 标题
 * @property string $image 封面
 * @property string $description 描述
 * @property string $author 作者
 * @property string $content 内容
 * @property string $link 外链
 * @property int $sort 排序
 * @property int $view 浏览量
 * @property int $position 推荐位
 * @property string $seo_key SEO关键词
 * @property string $seo_content SEO内容
 * @property int $status 状态
 * @property int $created_at 添加时间
 * @property int $updated_at 更新时间
 */
class Article extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%cms_article}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['column_id', 'title'], 'required'],
            [['column_id', 'sort', 'view', 'position', 'status', 'created_at', 'updated_at'], 'integer'],
            [['description', 'content', 'link'], 'string'],
            [['title', 'image', 'seo_key'], 'string', 'max' => 255],
            [['author'], 'string', 'max' => 100],
            [['seo_content'], 'string', 'max' => 1000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'column_id' => '栏目ID',
            'title' => '标题',
            'image' => '封面',
            'description' => '描述',
            'author' => '作者',
            'content' => '内容',
            'link' => '外链',
            'sort' => '排序',
            'view' => '浏览量',
            'position' => '推荐位',
            'seo_key' => 'SEO关键词',
            'seo_content' => 'SEO内容',
            'status' => '状态',
            'created_at' => '添加时间',
            'updated_at' => '更新时间',
        ];
    }
}
