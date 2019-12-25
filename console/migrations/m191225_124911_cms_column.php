<?php

use yii\db\Migration;

class m191225_124911_cms_column extends Migration
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
        $this->insert('{{%cms_column}}',['id'=>'8','merchant_id'=>'1','parent_id'=>'2','level'=>'2','name'=>'公司概况','name_remark'=>'公司概况','menu_name'=>'about1','seo_title'=>'','seo_keyword'=>'','seo_description'=>'','sort'=>'0','image'=>'','model_type'=>'single','url'=>'','is_nav'=>'1','is_blank'=>'0','is_comment'=>'0','status'=>'1','created_at'=>'1574203505','updated_at'=>'1575268328']);
        $this->insert('{{%cms_column}}',['id'=>'9','merchant_id'=>'1','parent_id'=>'2','level'=>'2','name'=>'公司资质','name_remark'=>'公司资质','menu_name'=>'gong-si-zi-zhi','seo_title'=>'','seo_keyword'=>'','seo_description'=>'','sort'=>'2','image'=>'','model_type'=>'single','url'=>'','is_nav'=>'0','is_blank'=>'0','is_comment'=>'0','status'=>'1','created_at'=>'1574238089','updated_at'=>'1574238089']);
        $this->insert('{{%cms_column}}',['id'=>'10','merchant_id'=>'1','parent_id'=>'2','level'=>'2','name'=>'获得荣誉','name_remark'=>'获得荣誉','menu_name'=>'huo-de-rong-yu','seo_title'=>'','seo_keyword'=>'','seo_description'=>'','sort'=>'3','image'=>'','model_type'=>'single','url'=>'','is_nav'=>'0','is_blank'=>'0','is_comment'=>'0','status'=>'1','created_at'=>'1574238135','updated_at'=>'1574238135']);
        $this->insert('{{%cms_column}}',['id'=>'11','merchant_id'=>'1','parent_id'=>'2','level'=>'2','name'=>'组织架构','name_remark'=>'组织架构','menu_name'=>'zu-zhi-jia-gou','seo_title'=>'','seo_keyword'=>'','seo_description'=>'','sort'=>'0','image'=>'','model_type'=>'single','url'=>'','is_nav'=>'1','is_blank'=>'0','is_comment'=>'0','status'=>'1','created_at'=>'1574238147','updated_at'=>'1575268337']);
        $this->insert('{{%cms_column}}',['id'=>'12','merchant_id'=>'0','parent_id'=>'0','level'=>'1','name'=>'新闻中心','name_remark'=>'新闻中心','menu_name'=>'news','seo_title'=>'新闻中心','seo_keyword'=>'新闻中心','seo_description'=>'新闻中心','sort'=>'2','image'=>'','model_type'=>'article','url'=>'','is_nav'=>'1','is_blank'=>'0','is_comment'=>'0','status'=>'1','created_at'=>'1575795197','updated_at'=>'1575805672']);
        $this->insert('{{%cms_column}}',['id'=>'13','merchant_id'=>'0','parent_id'=>'12','level'=>'2','name'=>'经营管理','name_remark'=>'经营管理','menu_name'=>'manage','seo_title'=>'经营管理','seo_keyword'=>'经营管理','seo_description'=>'经营管理','sort'=>'2','image'=>'','model_type'=>'article','url'=>'','is_nav'=>'1','is_blank'=>'0','is_comment'=>'0','status'=>'1','created_at'=>'1575795243','updated_at'=>'1575795572']);
        $this->insert('{{%cms_column}}',['id'=>'14','merchant_id'=>'0','parent_id'=>'12','level'=>'2','name'=>'服务管理','name_remark'=>'服务管理','menu_name'=>'service','seo_title'=>'服务管理','seo_keyword'=>'服务管理','seo_description'=>'','sort'=>'3','image'=>'','model_type'=>'article','url'=>'','is_nav'=>'1','is_blank'=>'0','is_comment'=>'0','status'=>'1','created_at'=>'1575795278','updated_at'=>'1575795278']);
        $this->insert('{{%cms_column}}',['id'=>'15','merchant_id'=>'0','parent_id'=>'12','level'=>'2','name'=>'党群工作','name_remark'=>'党群工作','menu_name'=>'work','seo_title'=>'党群工作','seo_keyword'=>'党群工作','seo_description'=>'党群工作','sort'=>'4','image'=>'','model_type'=>'article','url'=>'','is_nav'=>'1','is_blank'=>'0','is_comment'=>'0','status'=>'1','created_at'=>'1575795308','updated_at'=>'1575795308']);
        $this->insert('{{%cms_column}}',['id'=>'16','merchant_id'=>'0','parent_id'=>'0','level'=>'1','name'=>'公司业务','name_remark'=>'公司业务','menu_name'=>'company_bus','seo_title'=>'公司业务','seo_keyword'=>'公司业务','seo_description'=>'公司业务','sort'=>'3','image'=>'','model_type'=>'article','url'=>'','is_nav'=>'1','is_blank'=>'0','is_comment'=>'0','status'=>'1','created_at'=>'1575795356','updated_at'=>'1575805673']);
        $this->insert('{{%cms_column}}',['id'=>'17','merchant_id'=>'0','parent_id'=>'16','level'=>'2','name'=>'物业管理','name_remark'=>'物业管理','menu_name'=>'wu-ye-guan-li','seo_title'=>'物业管理','seo_keyword'=>'物业管理','seo_description'=>'物业管理','sort'=>'0','image'=>'http://trip.test/attachment/images/2019/12/08/image_157576322355579910.png','model_type'=>'single','url'=>'','is_nav'=>'1','is_blank'=>'0','is_comment'=>'0','status'=>'1','created_at'=>'1575795403','updated_at'=>'1575817047']);
        $this->insert('{{%cms_column}}',['id'=>'18','merchant_id'=>'0','parent_id'=>'16','level'=>'2','name'=>'源头之旅','name_remark'=>'源头之旅','menu_name'=>'yuan-tou-zhi-lv','seo_title'=>'源头之旅','seo_keyword'=>'源头之旅','seo_description'=>'源头之旅','sort'=>'0','image'=>'','model_type'=>'article','url'=>'','is_nav'=>'1','is_blank'=>'0','is_comment'=>'0','status'=>'1','created_at'=>'1575795434','updated_at'=>'1575795434']);
        $this->insert('{{%cms_column}}',['id'=>'19','merchant_id'=>'0','parent_id'=>'16','level'=>'2','name'=>'绿化工程','name_remark'=>'绿化工程','menu_name'=>'lv-hua-gong-cheng','seo_title'=>'绿化工程','seo_keyword'=>'绿化工程','seo_description'=>'绿化工程','sort'=>'0','image'=>'','model_type'=>'article','url'=>'','is_nav'=>'1','is_blank'=>'0','is_comment'=>'0','status'=>'1','created_at'=>'1575795460','updated_at'=>'1575795460']);
        $this->insert('{{%cms_column}}',['id'=>'21','merchant_id'=>'0','parent_id'=>'0','level'=>'1','name'=>'培训学习','name_remark'=>'培训学习','menu_name'=>'pei-xun-xue-xi','seo_title'=>'培训学习','seo_keyword'=>'培训学习','seo_description'=>'培训学习','sort'=>'4','image'=>'','model_type'=>'article','url'=>'','is_nav'=>'1','is_blank'=>'0','is_comment'=>'0','status'=>'1','created_at'=>'1575795539','updated_at'=>'1575805673']);
        $this->insert('{{%cms_column}}',['id'=>'22','merchant_id'=>'0','parent_id'=>'17','level'=>'1','name'=>'关于我们','name_remark'=>'关于我们','menu_name'=>'about','seo_title'=>'关于我们','seo_keyword'=>'关于我们','seo_description'=>'关于我们','sort'=>'1','image'=>'http://trip.test/attachment/images/2019/12/08/image_157576322355579910.png','model_type'=>'single','url'=>'','is_nav'=>'1','is_blank'=>'0','is_comment'=>'0','status'=>'1','created_at'=>'1575805666','updated_at'=>'1575808674']);
        $this->insert('{{%cms_column}}',['id'=>'23','merchant_id'=>'0','parent_id'=>'0','level'=>'1','name'=>'最新动态','name_remark'=>'','menu_name'=>'zui-xin-dong-tai','seo_title'=>'','seo_keyword'=>'','seo_description'=>'','sort'=>'0','image'=>'','model_type'=>'article','url'=>'','is_nav'=>'0','is_blank'=>'0','is_comment'=>'0','status'=>'1','created_at'=>'1575845501','updated_at'=>'1576937535']);
        $this->insert('{{%cms_column}}',['id'=>'24','merchant_id'=>'0','parent_id'=>'0','level'=>'1','name'=>'通知公告','name_remark'=>'','menu_name'=>'tong-zhi-gong-gao','seo_title'=>'','seo_keyword'=>'','seo_description'=>'','sort'=>'1','image'=>'','model_type'=>'article','url'=>'','is_nav'=>'0','is_blank'=>'0','is_comment'=>'0','status'=>'1','created_at'=>'1575845517','updated_at'=>'1575845541']);
        $this->insert('{{%cms_column}}',['id'=>'25','merchant_id'=>'0','parent_id'=>'0','level'=>'1','name'=>'党群工作','name_remark'=>'','menu_name'=>'dang-qun-gong-zuo','seo_title'=>'','seo_keyword'=>'','seo_description'=>'','sort'=>'0','image'=>'','model_type'=>'article','url'=>'','is_nav'=>'0','is_blank'=>'0','is_comment'=>'0','status'=>'1','created_at'=>'1577170166','updated_at'=>'1577170166']);
        $this->insert('{{%cms_column}}',['id'=>'26','merchant_id'=>'0','parent_id'=>'0','level'=>'1','name'=>'产品','name_remark'=>'','menu_name'=>'chan-pin','seo_title'=>'','seo_keyword'=>'','seo_description'=>'','sort'=>'0','image'=>'','model_type'=>'product','url'=>'','is_nav'=>'1','is_blank'=>'0','is_comment'=>'0','status'=>'1','created_at'=>'1577244389','updated_at'=>'1577244389']);
        $this->insert('{{%cms_column}}',['id'=>'27','merchant_id'=>'0','parent_id'=>'0','level'=>'1','name'=>'图集','name_remark'=>'','menu_name'=>'tu-ji','seo_title'=>'','seo_keyword'=>'','seo_description'=>'','sort'=>'0','image'=>'','model_type'=>'album','url'=>'','is_nav'=>'1','is_blank'=>'0','is_comment'=>'0','status'=>'1','created_at'=>'1577245901','updated_at'=>'1577245901']);
        $this->insert('{{%cms_column}}',['id'=>'28','merchant_id'=>'0','parent_id'=>'0','level'=>'1','name'=>'下载','name_remark'=>'','menu_name'=>'xia-zai','seo_title'=>'','seo_keyword'=>'','seo_description'=>'','sort'=>'0','image'=>'','model_type'=>'download','url'=>'','is_nav'=>'1','is_blank'=>'0','is_comment'=>'0','status'=>'1','created_at'=>'1577245914','updated_at'=>'1577245922']);
        $this->insert('{{%cms_column}}',['id'=>'29','merchant_id'=>'0','parent_id'=>'0','level'=>'1','name'=>'招聘','name_remark'=>'','menu_name'=>'zhao-pin','seo_title'=>'','seo_keyword'=>'','seo_description'=>'','sort'=>'0','image'=>'','model_type'=>'job','url'=>'','is_nav'=>'1','is_blank'=>'0','is_comment'=>'0','status'=>'1','created_at'=>'1577245939','updated_at'=>'1577245939']);
        $this->insert('{{%cms_column}}',['id'=>'30','merchant_id'=>'0','parent_id'=>'0','level'=>'1','name'=>'留言板','name_remark'=>'','menu_name'=>'liu-yan-ban','seo_title'=>'','seo_keyword'=>'','seo_description'=>'','sort'=>'0','image'=>'','model_type'=>'guest_book','url'=>'','is_nav'=>'1','is_blank'=>'0','is_comment'=>'0','status'=>'1','created_at'=>'1577245952','updated_at'=>'1577245958']);
        
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

