<?php

use yii\db\Migration;

class m191203_042845_cms_product extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%cms_product}}', [
            'id' => "int(11) NOT NULL AUTO_INCREMENT",
            'column_id' => "int(11) NOT NULL COMMENT '栏目'",
            'title' => "varchar(255) NOT NULL COMMENT '产品标题'",
            'cate_id' => "int(11) NULL DEFAULT '0' COMMENT '栏目分类'",
            'image' => "varchar(255) NULL COMMENT '缩略图'",
            'seo_title' => "varchar(255) NULL COMMENT 'seo标题'",
            'seo_keyword' => "varchar(255) NULL COMMENT 'seo关键词'",
            'seo_description' => "text NULL COMMENT 'seo描述'",
            'price' => "decimal(10,2) NULL DEFAULT '0.00' COMMENT '价格'",
            'unit' => "varchar(50) NULL COMMENT '单位'",
            'content' => "text NULL COMMENT '内容描述'",
            'author' => "varchar(255) NULL COMMENT '作者'",
            'views_num' => "int(11) NULL DEFAULT '0' COMMENT '浏览量'",
            'status' => "tinyint(2) NULL DEFAULT '1' COMMENT '状态'",
            'created_at' => "int(11) NULL COMMENT '添加时间'",
            'updated_at' => "int(11) NULL COMMENT '更新时间'",
            'PRIMARY KEY (`id`)'
        ], "ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COMMENT='产品列表'");
        
        /* 索引设置 */
        $this->createIndex('cate_id','{{%cms_product}}','cate_id',0);
        $this->createIndex('column_id','{{%cms_product}}','column_id',0);
        
        
        /* 表数据 */
        $this->insert('{{%cms_product}}',['id'=>'1','column_id'=>'5','title'=>'asdfsadfasd','cate_id'=>'0','image'=>NULL,'seo_title'=>'','seo_keyword'=>'','seo_description'=>'','price'=>'0.00','unit'=>'323','content'=>'<p>232323</p>','author'=>'33','views_num'=>'0','status'=>'1','created_at'=>'1573253993','updated_at'=>'1573254023']);
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%cms_product}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

