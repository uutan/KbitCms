<?php

use yii\db\Migration;

class m191225_124911_cms_image extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%cms_image}}', [
            'id' => "int(11) NOT NULL AUTO_INCREMENT",
            'column_id' => "int(11) NOT NULL DEFAULT '0' COMMENT '栏目ID'",
            'target_id' => "int(11) NULL DEFAULT '0' COMMENT '关联ID'",
            'image' => "varchar(255) NULL COMMENT '图片地址'",
            'remark' => "text NULL COMMENT '描述'",
            'sort' => "int(11) NULL DEFAULT '0' COMMENT '排序值'",
            'is_main' => "tinyint(2) NULL DEFAULT '0' COMMENT '主图'",
            'status' => "tinyint(2) NULL DEFAULT '1' COMMENT '状态'",
            'created_at' => "int(11) NULL COMMENT '添加时间'",
            'updated_at' => "int(11) NULL COMMENT '更新时间'",
            'PRIMARY KEY (`id`)'
        ], "ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='附件多图表'");
        
        /* 索引设置 */
        
        
        /* 表数据 */
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%cms_image}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

