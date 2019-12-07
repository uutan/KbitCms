<?php

use yii\db\Migration;

class m191203_042845_cms_tempate extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%cms_tempate}}', [
            'id' => "int(11) NOT NULL AUTO_INCREMENT",
            'name' => "varchar(128) NOT NULL COMMENT '模板名称'",
            'folder' => "varchar(255) NOT NULL COMMENT '目录名称'",
            'author' => "varchar(255) NULL COMMENT '作者'",
            'version' => "varchar(100) NULL COMMENT '版本号'",
            'remark' => "text NULL COMMENT '描述'",
            'is_default' => "tinyint(2) NULL DEFAULT '0' COMMENT '是否为默认模板'",
            'status' => "tinyint(2) NULL DEFAULT '1' COMMENT '状态'",
            'created_at' => "int(11) NULL COMMENT '添加时间'",
            'updated_at' => "int(11) NULL COMMENT '更新时间'",
            'PRIMARY KEY (`id`)'
        ], "ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='模板表'");
        
        /* 索引设置 */
        
        
        /* 表数据 */
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%cms_tempate}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

