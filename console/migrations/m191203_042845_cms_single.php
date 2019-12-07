<?php

use yii\db\Migration;

class m191203_042845_cms_single extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%cms_single}}', [
            'id' => "int(11) NOT NULL AUTO_INCREMENT",
            'column_id' => "int(11) NULL DEFAULT '0' COMMENT '关联栏目'",
            'content' => "text NULL COMMENT '内容'",
            'title' => "varchar(255) NULL COMMENT '标题'",
            'cover' => "varchar(255) NULL COMMENT '封面'",
            'description' => "text NULL COMMENT '描述'",
            'display' => "tinyint(2) NULL DEFAULT '0' COMMENT '可见性'",
            'author' => "varchar(80) NULL COMMENT '作者'",
            'view' => "int(11) NULL DEFAULT '0' COMMENT '浏览量'",
            'sort' => "int(11) NULL DEFAULT '0' COMMENT '排序'",
            'is_new_template' => "tinyint(2) NULL DEFAULT '0' COMMENT '是否生成新模板'",
            'status' => "tinyint(2) NULL DEFAULT '1' COMMENT '状态'",
            'created_at' => "int(11) NULL COMMENT '添加时间'",
            'updated_at' => "int(11) NULL COMMENT '更新时间'",
            'PRIMARY KEY (`id`)'
        ], "ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COMMENT='单页表'");
        
        /* 索引设置 */
        $this->createIndex('column_id','{{%cms_single}}','column_id',0);
        
        
        /* 表数据 */
        $this->insert('{{%cms_single}}',['id'=>'1','column_id'=>'2','content'=>NULL,'title'=>NULL,'cover'=>NULL,'description'=>NULL,'display'=>'0','author'=>NULL,'view'=>'0','sort'=>'0','is_new_template'=>'0','status'=>'1','created_at'=>'1571841253','updated_at'=>'1571841253']);
        $this->insert('{{%cms_single}}',['id'=>'2','column_id'=>'9','content'=>'<p>asdfasdf</p>','title'=>'3232','cover'=>NULL,'description'=>'3232','display'=>'0','author'=>'','view'=>'0','sort'=>'0','is_new_template'=>'0','status'=>'1','created_at'=>'1571841351','updated_at'=>'1571843685']);
        $this->insert('{{%cms_single}}',['id'=>'3','column_id'=>'10','content'=>NULL,'title'=>NULL,'cover'=>NULL,'description'=>NULL,'display'=>'0','author'=>NULL,'view'=>'0','sort'=>'0','is_new_template'=>'0','status'=>'1','created_at'=>'1571841355','updated_at'=>'1571841355']);
        $this->insert('{{%cms_single}}',['id'=>'4','column_id'=>'11','content'=>NULL,'title'=>NULL,'cover'=>NULL,'description'=>NULL,'display'=>'0','author'=>NULL,'view'=>'0','sort'=>'0','is_new_template'=>'0','status'=>'1','created_at'=>'1571841356','updated_at'=>'1571841356']);
        $this->insert('{{%cms_single}}',['id'=>'5','column_id'=>'12','content'=>'','title'=>'','cover'=>'http://admin-cms.test/attachment/images/2019/10/24/image_157187644710253985.jpeg','description'=>'','display'=>'0','author'=>'','view'=>'0','sort'=>'0','is_new_template'=>'0','status'=>'1','created_at'=>'1571841356','updated_at'=>'1572958760']);
        $this->insert('{{%cms_single}}',['id'=>'6','column_id'=>'8','content'=>'','title'=>'','cover'=>'http://admin-cms.test/attachment/images/2019/10/24/image_157187644710253985.jpeg','description'=>'','display'=>'0','author'=>'','view'=>'0','sort'=>'0','is_new_template'=>'0','status'=>'1','created_at'=>'1571874041','updated_at'=>'1571922152']);
        $this->insert('{{%cms_single}}',['id'=>'7','column_id'=>'1','content'=>'<p><span style=\"color: rgb(55, 71, 79); font-family: Roboto, sans-serif; background-color: rgb(255, 255, 255);\">联系我们</span></p><p><span style=\"color: rgb(55, 71, 79); font-family: Roboto, sans-serif; background-color: rgb(255, 255, 255);\"><br/></span></p><p><span style=\"color: rgb(55, 71, 79); font-family: Roboto, sans-serif; background-color: rgb(255, 255, 255);\">adsfasdfasdfs</span></p>','title'=>'联系我们','cover'=>NULL,'description'=>'联系我们','display'=>'0','author'=>'','view'=>'0','sort'=>'0','is_new_template'=>'1','status'=>'1','created_at'=>'1574205306','updated_at'=>'1575265915']);
        $this->insert('{{%cms_single}}',['id'=>'8','column_id'=>'3','content'=>NULL,'title'=>NULL,'cover'=>NULL,'description'=>NULL,'display'=>'0','author'=>NULL,'view'=>'0','sort'=>'0','is_new_template'=>'0','status'=>'1','created_at'=>'1574205385','updated_at'=>'1574205385']);
        $this->insert('{{%cms_single}}',['id'=>'9','column_id'=>'4','content'=>NULL,'title'=>NULL,'cover'=>NULL,'description'=>NULL,'display'=>'0','author'=>NULL,'view'=>'0','sort'=>'0','is_new_template'=>'0','status'=>'1','created_at'=>'1574205386','updated_at'=>'1574205386']);
        $this->insert('{{%cms_single}}',['id'=>'10','column_id'=>'7','content'=>NULL,'title'=>NULL,'cover'=>NULL,'description'=>NULL,'display'=>'0','author'=>NULL,'view'=>'0','sort'=>'0','is_new_template'=>'0','status'=>'1','created_at'=>'1574211747','updated_at'=>'1574211747']);
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%cms_single}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

