<?php

use yii\db\Migration;

class m191225_124911_cms_guest_book extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%cms_guest_book}}', [
            'id' => "int(11) NOT NULL AUTO_INCREMENT",
            'merchant_id' => "int(11) NOT NULL COMMENT '商户ID'",
            'column_id' => "int(11) NOT NULL COMMENT '栏目ID'",
            'target_model' => "varchar(255) NULL COMMENT '关联模型'",
            'target_id' => "int(11) NULL DEFAULT '0' COMMENT '关联ID'",
            'realname' => "varchar(50) NOT NULL COMMENT '用户名'",
            'email' => "varchar(255) NULL COMMENT '邮箱'",
            'content' => "text NOT NULL COMMENT '内容'",
            'phone' => "varchar(50) NULL COMMENT '手机号'",
            'is_replay' => "tinyint(2) NULL DEFAULT '0' COMMENT '是否回复'",
            'replay' => "text NULL COMMENT '回复内容'",
            'status' => "tinyint(2) NULL DEFAULT '1' COMMENT '状态'",
            'sort' => "int(11) NULL DEFAULT '99' COMMENT '排序值'",
            'created_at' => "int(11) NULL COMMENT '添加时间'",
            'updated_at' => "int(11) NULL COMMENT '更新时间'",
            'PRIMARY KEY (`id`)'
        ], "ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COMMENT='留言表'");
        
        /* 索引设置 */
        
        
        /* 表数据 */
        $this->insert('{{%cms_guest_book}}',['id'=>'1','merchant_id'=>'0','column_id'=>'30','target_model'=>NULL,'target_id'=>'0','realname'=>'测试留言者','email'=>'q@q.com','content'=>'asdfasdfasdf','phone'=>'13621723968','is_replay'=>'1','replay'=>'asdfasdf','status'=>'1','sort'=>'99','created_at'=>'1577277175','updated_at'=>'1577277175']);
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%cms_guest_book}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

