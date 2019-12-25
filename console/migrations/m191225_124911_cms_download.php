<?php

use yii\db\Migration;

class m191225_124911_cms_download extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%cms_download}}', [
            'id' => "int(11) NOT NULL AUTO_INCREMENT",
            'merchant_id' => "int(11) NOT NULL COMMENT '商户ID'",
            'column_id' => "int(11) NOT NULL COMMENT '栏目ID'",
            'title' => "varchar(255) NOT NULL COMMENT '标题'",
            'remark' => "text NULL COMMENT '简介'",
            'content' => "text NULL COMMENT '内容介绍'",
            'image' => "varchar(255) NULL COMMENT '缩略图'",
            'is_password' => "tinyint(1) NULL DEFAULT '0' COMMENT '是否需要密码'",
            'password' => "varchar(50) NULL COMMENT '密码'",
            'file' => "varchar(255) NULL COMMENT '下载地址'",
            'sort' => "int(11) NULL DEFAULT '99'",
            'status' => "tinyint(2) NULL DEFAULT '1' COMMENT '状态'",
            'created_at' => "int(11) NULL COMMENT '添加时间'",
            'updated_at' => "int(11) NULL COMMENT '更新时间'",
            'PRIMARY KEY (`id`)'
        ], "ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COMMENT='下载表'");
        
        /* 索引设置 */
        $this->createIndex('sort','{{%cms_download}}','sort',0);
        
        
        /* 表数据 */
        $this->insert('{{%cms_download}}',['id'=>'1','merchant_id'=>'0','column_id'=>'28','title'=>'文件下载1','remark'=>'adsfasdf','content'=>'<p>asdfadf</p>','image'=>'http://trip.test/attachment/images/2019/12/08/image_157576322355579910.png','is_password'=>'1','password'=>'323223','file'=>NULL,'sort'=>'99','status'=>'1','created_at'=>'1577276521','updated_at'=>'1577276574']);
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%cms_download}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

