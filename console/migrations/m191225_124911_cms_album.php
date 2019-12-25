<?php

use yii\db\Migration;

class m191225_124911_cms_album extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%cms_album}}', [
            'id' => "int(11) NOT NULL AUTO_INCREMENT",
            'merchant_id' => "int(11) NULL DEFAULT '0' COMMENT '商户ID'",
            'column_id' => "int(11) NOT NULL DEFAULT '0' COMMENT '栏目ID'",
            'title' => "varchar(255) NOT NULL COMMENT '标题'",
            'remark' => "text NULL COMMENT '内容'",
            'sort' => "int(11) NOT NULL DEFAULT '99' COMMENT '排序值'",
            'image' => "varchar(255) NULL COMMENT '缩略图'",
            'status' => "tinyint(2) NULL DEFAULT '1' COMMENT '状态'",
            'seo_title' => "varchar(500) NULL COMMENT 'SEO标题'",
            'seo_keyword' => "varchar(500) NULL COMMENT 'SEO关键词'",
            'seo_description' => "text NULL COMMENT 'SEO描述'",
            'created_at' => "int(11) NULL COMMENT '添加时间'",
            'updated_at' => "int(11) NULL COMMENT '更新时间'",
            'PRIMARY KEY (`id`)'
        ], "ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COMMENT='图集表'");
        
        /* 索引设置 */
        $this->createIndex('sort','{{%cms_album}}','sort',0);
        $this->createIndex('status','{{%cms_album}}','status',0);
        
        
        /* 表数据 */
        $this->insert('{{%cms_album}}',['id'=>'1','merchant_id'=>'0','column_id'=>'27','title'=>'奇才asdfas','remark'=>'asdfasfd','sort'=>'99','image'=>'http://trip.test/attachment/images/2019/12/08/image_157576322355579910.png','status'=>'1','seo_title'=>'','seo_keyword'=>'','seo_description'=>'','created_at'=>'1577248441','updated_at'=>'1577258928']);
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%cms_album}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

