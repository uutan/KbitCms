<?php

namespace addons\KbitCms\common\models;

use common\models\base\BaseModel;
use Yii;

/**
 * This is the model class for table "{{%content_single}}".
 *
 * @property int $id
 * @property int $column_id 关联栏目
 * @property string $content 内容
 * @property string $title 标题
 * @property string $cover 封面
 * @property string $description 描述
 * @property int $display 可见性
 * @property string $author 作者
 * @property int $view 浏览量
 * @property int $sort 排序
 * @property int $is_new_template 是否生成新模板
 * @property int $status 状态
 * @property int $created_at 添加时间
 * @property int $updated_at 更新时间
 */
class Single extends BaseModel
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%cms_single}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['column_id', 'display', 'view', 'sort', 'is_new_template', 'status', 'created_at', 'updated_at'], 'integer'],
            [['content', 'description'], 'string'],
            [['title', 'cover'], 'string', 'max' => 255],
            [['author'], 'string', 'max' => 80],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'column_id' => '关联栏目',
            'content' => '内容',
            'title' => '标题',
            'cover' => '封面',
            'description' => '描述',
            'display' => '可见性',
            'author' => '作者',
            'view' => '浏览量',
            'sort' => '排序',
            'is_new_template' => '是否生成新模板',
            'status' => '状态',
            'created_at' => '添加时间',
            'updated_at' => '更新时间',
        ];
    }
}
