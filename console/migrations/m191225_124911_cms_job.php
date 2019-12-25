<?php

use yii\db\Migration;

class m191225_124911_cms_job extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%cms_job}}', [
            'id' => "int(11) NOT NULL AUTO_INCREMENT",
            'merchant_id' => "int(11) NOT NULL DEFAULT '0' COMMENT '商户ID'",
            'column_id' => "int(11) NOT NULL DEFAULT '0' COMMENT '栏目ID'",
            'title' => "varchar(255) NOT NULL COMMENT '职位'",
            'num' => "int(11) NULL DEFAULT '10' COMMENT '人数'",
            'content' => "text NULL COMMENT '招聘要求'",
            'status' => "tinyint(2) NULL DEFAULT '1' COMMENT '状态'",
            'sort' => "int(11) NULL DEFAULT '99' COMMENT '排序'",
            'link_main' => "varchar(50) NULL COMMENT '负责人'",
            'phone' => "varchar(50) NULL COMMENT '联系电话'",
            'address' => "text NULL COMMENT '面试地址'",
            'email' => "varchar(255) NULL COMMENT '面试邮件'",
            'created_at' => "int(11) NOT NULL COMMENT '添加时间'",
            'updated_at' => "int(11) NOT NULL COMMENT '更新时间'",
            'PRIMARY KEY (`id`)'
        ], "ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COMMENT='招聘表'");
        
        /* 索引设置 */
        
        
        /* 表数据 */
        $this->insert('{{%cms_job}}',['id'=>'1','merchant_id'=>'0','column_id'=>'29','title'=>'工程师','num'=>'10','content'=>'<p>asdfasdf</p>','status'=>'1','sort'=>'99','link_main'=>'杨一','phone'=>'13621723968','address'=>'香港德輔道中308﹣320號富衛金融中心26樓2607室','email'=>'yuyitong82@gmail.com','created_at'=>'1577276839','updated_at'=>'1577276839']);
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%cms_job}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

