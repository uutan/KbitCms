<?php

use yii\db\Migration;

class m191203_042845_cms_column extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%cms_column}}', [
            'id' => "int(11) NOT NULL AUTO_INCREMENT",
            'merchant_id' => "int(10) unsigned NULL DEFAULT '0' COMMENT '商户id'",
            'parent_id' => "int(10) unsigned NULL DEFAULT '0' COMMENT '上级ID'",
            'level' => "tinyint(4) unsigned NULL DEFAULT '0' COMMENT '级别'",
            'name' => "varchar(255) NOT NULL DEFAULT '' COMMENT '栏目名称'",
            'name_remark' => "varchar(255) NOT NULL DEFAULT '' COMMENT '副标题'",
            'menu_name' => "varchar(255) NOT NULL DEFAULT '' COMMENT '菜单名称'",
            'seo_title' => "varchar(500) NOT NULL DEFAULT '' COMMENT 'SEO标题'",
            'seo_keyword' => "text NOT NULL COMMENT 'SEO关键词'",
            'seo_description' => "text NOT NULL COMMENT 'SEO描述'",
            'sort' => "int(11) NULL DEFAULT '0' COMMENT '排序'",
            'image' => "varchar(255) NULL DEFAULT '' COMMENT '栏目图片'",
            'model_type' => "varchar(80) NULL DEFAULT 'single' COMMENT '模型'",
            'url' => "text NULL COMMENT '外部链接'",
            'is_nav' => "tinyint(4) NULL DEFAULT '0' COMMENT '栏目显示[0:禁用;1启用]'",
            'is_blank' => "tinyint(4) NULL DEFAULT '0' COMMENT '新页打开[0:禁用;1启用]'",
            'is_comment' => "tinyint(4) NULL DEFAULT '0' COMMENT '是否留言[0:禁用;1启用]'",
            'status' => "tinyint(4) NULL DEFAULT '1' COMMENT '状态[-1:删除;0:禁用;1启用]'",
            'created_at' => "int(10) unsigned NULL DEFAULT '0' COMMENT '创建时间'",
            'updated_at' => "int(10) unsigned NULL DEFAULT '0' COMMENT '修改时间'",
            'PRIMARY KEY (`id`)'
        ], "ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COMMENT='动力建站_栏目表'");
        
        /* 索引设置 */
        
        
        /* 表数据 */
        $this->insert('{{%cms_column}}',['id'=>'1','merchant_id'=>'0','parent_id'=>'0','level'=>'1','name'=>'联系我们','name_remark'=>'联系我们','menu_name'=>'lian-xi-wo-men','seo_title'=>'','seo_keyword'=>'','seo_description'=>'点这里可以联系我们','sort'=>'1','image'=>'http://tender.test/attachment/images/2019/12/02/image_157526906557975456.png','model_type'=>'single','url'=>'','is_nav'=>'1','is_blank'=>'0','is_comment'=>'0','status'=>'1','created_at'=>'1574157604','updated_at'=>'1575269068']);
        $this->insert('{{%cms_column}}',['id'=>'2','merchant_id'=>'0','parent_id'=>'0','level'=>'1','name'=>'公司概况','name_remark'=>'公司概况','menu_name'=>'about','seo_title'=>'','seo_keyword'=>'','seo_description'=>'','sort'=>'2','image'=>'','model_type'=>'single','url'=>'','is_nav'=>'1','is_blank'=>'0','is_comment'=>'0','status'=>'1','created_at'=>'1574158313','updated_at'=>'1574333049']);
        $this->insert('{{%cms_column}}',['id'=>'3','merchant_id'=>'0','parent_id'=>'0','level'=>'1','name'=>'新闻资讯','name_remark'=>'新闻资讯','menu_name'=>'news','seo_title'=>'','seo_keyword'=>'','seo_description'=>'','sort'=>'3','image'=>'','model_type'=>'single','url'=>'','is_nav'=>'0','is_blank'=>'0','is_comment'=>'0','status'=>'1','created_at'=>'1574158349','updated_at'=>'1574158349']);
        $this->insert('{{%cms_column}}',['id'=>'4','merchant_id'=>'0','parent_id'=>'0','level'=>'1','name'=>'政策法规','name_remark'=>'政策法规','menu_name'=>'policy','seo_title'=>'','seo_keyword'=>'','seo_description'=>'','sort'=>'4','image'=>'','model_type'=>'single','url'=>'','is_nav'=>'0','is_blank'=>'0','is_comment'=>'0','status'=>'1','created_at'=>'1574158371','updated_at'=>'1574158371']);
        $this->insert('{{%cms_column}}',['id'=>'5','merchant_id'=>'0','parent_id'=>'0','level'=>'1','name'=>'招标动态','name_remark'=>'招标动态','menu_name'=>'tendering','seo_title'=>'','seo_keyword'=>'','seo_description'=>'','sort'=>'5','image'=>'','model_type'=>'article','url'=>'','is_nav'=>'0','is_blank'=>'0','is_comment'=>'0','status'=>'1','created_at'=>'1574158404','updated_at'=>'1574158404']);
        $this->insert('{{%cms_column}}',['id'=>'6','merchant_id'=>'0','parent_id'=>'0','level'=>'1','name'=>'招标业绩','name_remark'=>'招标业绩','menu_name'=>'achievement','seo_title'=>'','seo_keyword'=>'','seo_description'=>'','sort'=>'6','image'=>'','model_type'=>'article','url'=>'','is_nav'=>'0','is_blank'=>'0','is_comment'=>'0','status'=>'1','created_at'=>'1574158486','updated_at'=>'1574158486']);
        $this->insert('{{%cms_column}}',['id'=>'7','merchant_id'=>'0','parent_id'=>'0','level'=>'1','name'=>'供应商入驻','name_remark'=>'供应商入驻','menu_name'=>'supplier','seo_title'=>'','seo_keyword'=>'','seo_description'=>'','sort'=>'7','image'=>'','model_type'=>'single','url'=>'','is_nav'=>'0','is_blank'=>'0','is_comment'=>'0','status'=>'1','created_at'=>'1574158521','updated_at'=>'1574158521']);
        $this->insert('{{%cms_column}}',['id'=>'8','merchant_id'=>'0','parent_id'=>'2','level'=>'2','name'=>'公司概况','name_remark'=>'公司概况','menu_name'=>'about1','seo_title'=>'','seo_keyword'=>'','seo_description'=>'','sort'=>'0','image'=>'','model_type'=>'single','url'=>'','is_nav'=>'1','is_blank'=>'0','is_comment'=>'0','status'=>'1','created_at'=>'1574203505','updated_at'=>'1575268328']);
        $this->insert('{{%cms_column}}',['id'=>'9','merchant_id'=>'0','parent_id'=>'2','level'=>'2','name'=>'公司资质','name_remark'=>'公司资质','menu_name'=>'gong-si-zi-zhi','seo_title'=>'','seo_keyword'=>'','seo_description'=>'','sort'=>'2','image'=>'','model_type'=>'single','url'=>'','is_nav'=>'0','is_blank'=>'0','is_comment'=>'0','status'=>'1','created_at'=>'1574238089','updated_at'=>'1574238089']);
        $this->insert('{{%cms_column}}',['id'=>'10','merchant_id'=>'0','parent_id'=>'2','level'=>'2','name'=>'获得荣誉','name_remark'=>'获得荣誉','menu_name'=>'huo-de-rong-yu','seo_title'=>'','seo_keyword'=>'','seo_description'=>'','sort'=>'3','image'=>'','model_type'=>'single','url'=>'','is_nav'=>'0','is_blank'=>'0','is_comment'=>'0','status'=>'1','created_at'=>'1574238135','updated_at'=>'1574238135']);
        $this->insert('{{%cms_column}}',['id'=>'11','merchant_id'=>'0','parent_id'=>'2','level'=>'2','name'=>'组织架构','name_remark'=>'组织架构','menu_name'=>'zu-zhi-jia-gou','seo_title'=>'','seo_keyword'=>'','seo_description'=>'','sort'=>'0','image'=>'','model_type'=>'single','url'=>'','is_nav'=>'1','is_blank'=>'0','is_comment'=>'0','status'=>'1','created_at'=>'1574238147','updated_at'=>'1575268337']);
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%cms_column}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

