<?php

use yii\db\Migration;

class m191203_042845_cms_article extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%cms_article}}', [
            'id' => "int(11) NOT NULL AUTO_INCREMENT",
            'column_id' => "int(11) NOT NULL COMMENT '栏目ID'",
            'title' => "varchar(255) NOT NULL COMMENT '标题'",
            'image' => "varchar(255) NULL COMMENT '封面'",
            'description' => "text NULL COMMENT '描述'",
            'author' => "varchar(100) NULL COMMENT '作者'",
            'content' => "text NULL COMMENT '内容'",
            'link' => "text NULL COMMENT '外链'",
            'sort' => "int(11) NULL DEFAULT '0' COMMENT '排序'",
            'view' => "int(11) NULL DEFAULT '0' COMMENT '浏览量'",
            'position' => "tinyint(2) NULL DEFAULT '0' COMMENT '推荐位'",
            'seo_key' => "varchar(255) NULL COMMENT 'SEO关键词'",
            'seo_content' => "varchar(1000) NULL COMMENT 'SEO内容'",
            'status' => "tinyint(2) NULL DEFAULT '1' COMMENT '状态'",
            'created_at' => "int(11) NULL COMMENT '添加时间'",
            'updated_at' => "int(11) NULL COMMENT '更新时间'",
            'PRIMARY KEY (`id`)'
        ], "ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COMMENT='文章表'");
        
        /* 索引设置 */
        $this->createIndex('column_id','{{%cms_article}}','column_id',0);
        
        
        /* 表数据 */
        $this->insert('{{%cms_article}}',['id'=>'1','column_id'=>'14','title'=>'aaaaasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfadf','image'=>NULL,'description'=>'323','author'=>'3232','content'=>'<p>32323</p>','link'=>'323','sort'=>'10','view'=>'2323','position'=>'0','seo_key'=>'','seo_content'=>'','status'=>'1','created_at'=>'1571876122','updated_at'=>'1573042448']);
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%cms_article}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

