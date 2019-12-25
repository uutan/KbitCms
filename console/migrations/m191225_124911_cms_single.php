<?php

use yii\db\Migration;

class m191225_124911_cms_single extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%cms_single}}', [
            'id' => "int(11) NOT NULL AUTO_INCREMENT",
            'merchant_id' => "int(11) NULL DEFAULT '0' COMMENT '商户ID'",
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
        $this->insert('{{%cms_single}}',['id'=>'1','merchant_id'=>'1','column_id'=>'2','content'=>NULL,'title'=>NULL,'cover'=>NULL,'description'=>NULL,'display'=>'0','author'=>NULL,'view'=>'0','sort'=>'0','is_new_template'=>'0','status'=>'1','created_at'=>'1571841253','updated_at'=>'1571841253']);
        $this->insert('{{%cms_single}}',['id'=>'2','merchant_id'=>'1','column_id'=>'9','content'=>'<p>asdfasdf</p>','title'=>'3232','cover'=>NULL,'description'=>'3232','display'=>'0','author'=>'','view'=>'0','sort'=>'0','is_new_template'=>'0','status'=>'1','created_at'=>'1571841351','updated_at'=>'1571843685']);
        $this->insert('{{%cms_single}}',['id'=>'3','merchant_id'=>'1','column_id'=>'10','content'=>NULL,'title'=>NULL,'cover'=>NULL,'description'=>NULL,'display'=>'0','author'=>NULL,'view'=>'0','sort'=>'0','is_new_template'=>'0','status'=>'1','created_at'=>'1571841355','updated_at'=>'1571841355']);
        $this->insert('{{%cms_single}}',['id'=>'4','merchant_id'=>'1','column_id'=>'11','content'=>NULL,'title'=>NULL,'cover'=>NULL,'description'=>NULL,'display'=>'0','author'=>NULL,'view'=>'0','sort'=>'0','is_new_template'=>'0','status'=>'1','created_at'=>'1571841356','updated_at'=>'1571841356']);
        $this->insert('{{%cms_single}}',['id'=>'5','merchant_id'=>'1','column_id'=>'12','content'=>'','title'=>'','cover'=>'http://admin-cms.test/attachment/images/2019/10/24/image_157187644710253985.jpeg','description'=>'','display'=>'0','author'=>'','view'=>'0','sort'=>'0','is_new_template'=>'0','status'=>'1','created_at'=>'1571841356','updated_at'=>'1572958760']);
        $this->insert('{{%cms_single}}',['id'=>'6','merchant_id'=>'1','column_id'=>'8','content'=>'<p>公司概况公司概况公司概况公司概况</p>','title'=>'公司概况','cover'=>'http://admin-cms.test/attachment/images/2019/10/24/image_157187644710253985.jpeg','description'=>'公司概况公司概况公司概况','display'=>'0','author'=>'','view'=>'0','sort'=>'0','is_new_template'=>'1','status'=>'1','created_at'=>'1571874041','updated_at'=>'1575612015']);
        $this->insert('{{%cms_single}}',['id'=>'7','merchant_id'=>'1','column_id'=>'1','content'=>'<p><span style=\"color: rgb(55, 71, 79); font-family: Roboto, sans-serif; background-color: rgb(255, 255, 255);\">联系我们</span></p><p><span style=\"color: rgb(55, 71, 79); font-family: Roboto, sans-serif; background-color: rgb(255, 255, 255);\"><br/></span></p><p><span style=\"color: rgb(55, 71, 79); font-family: Roboto, sans-serif; background-color: rgb(255, 255, 255);\">adsfasdfasdfsadsfasdf</span></p>','title'=>'联系我们','cover'=>NULL,'description'=>'联系我们','display'=>'0','author'=>'','view'=>'0','sort'=>'0','is_new_template'=>'1','status'=>'1','created_at'=>'1574205306','updated_at'=>'1575611691']);
        $this->insert('{{%cms_single}}',['id'=>'8','merchant_id'=>'1','column_id'=>'3','content'=>NULL,'title'=>NULL,'cover'=>NULL,'description'=>NULL,'display'=>'0','author'=>NULL,'view'=>'0','sort'=>'0','is_new_template'=>'0','status'=>'1','created_at'=>'1574205385','updated_at'=>'1574205385']);
        $this->insert('{{%cms_single}}',['id'=>'9','merchant_id'=>'1','column_id'=>'4','content'=>NULL,'title'=>NULL,'cover'=>NULL,'description'=>NULL,'display'=>'0','author'=>NULL,'view'=>'0','sort'=>'0','is_new_template'=>'0','status'=>'1','created_at'=>'1574205386','updated_at'=>'1574205386']);
        $this->insert('{{%cms_single}}',['id'=>'10','merchant_id'=>'1','column_id'=>'7','content'=>NULL,'title'=>NULL,'cover'=>NULL,'description'=>NULL,'display'=>'0','author'=>NULL,'view'=>'0','sort'=>'0','is_new_template'=>'0','status'=>'1','created_at'=>'1574211747','updated_at'=>'1574211747']);
        $this->insert('{{%cms_single}}',['id'=>'11','merchant_id'=>'0','column_id'=>'13','content'=>NULL,'title'=>NULL,'cover'=>NULL,'description'=>NULL,'display'=>'0','author'=>NULL,'view'=>'0','sort'=>'0','is_new_template'=>'0','status'=>'1','created_at'=>'1575795559','updated_at'=>'1575795559']);
        $this->insert('{{%cms_single}}',['id'=>'12','merchant_id'=>'0','column_id'=>'22','content'=>'<p><span style=\"color: rgb(62, 62, 62); font-family: 宋体; font-size: 18pt;\"><span style=\"line-height: 2; font-size: 18px;\">&nbsp;汉江集团丹江口博远置业有限责任公司（简称博远公司）是汉江集团的全资子公司，与汉江水利水电（集团）有限责任公司服务管理中心、汉江水利水电（集团）有限责任公司旅游发展公司、汉江水利水电（集团）有限责任公司北京办事处合署办公。</span></span></p><p><span style=\"color: rgb(62, 62, 62); font-family: 宋体; font-size: 18pt;\"><span style=\"font-size: 18px;\"><span style=\"line-height: 2;\"></span><span style=\"line-height: 2;\">&nbsp;&nbsp;&nbsp; 汉江集团是以汉江水利水电（集团）有限责任公司（水利部丹江口水利枢纽管理局）为核心，隶属于水利部长江水利委员会管理的大型企业集团，集团下属分、子公司</span></span><span style=\"line-height: 2; font-size: 18px;\">33</span><span style=\"line-height: 2; font-size: 18px;\">家，截止</span><span style=\"line-height: 2; font-size: 18px;\">2016</span><span style=\"line-height: 2; font-size: 18px;\">年底集团资产总额</span><span style=\"line-height: 2; font-size: 18px;\">136.5</span><span style=\"line-height: 2; font-size: 18px;\">亿元，年销售收入</span><span style=\"line-height: 2; font-size: 18px;\">50</span><span style=\"line-height: 2; font-size: 18px;\">亿元左右。丹江口水利枢纽是治理开发汉江的关键性工程，也是南水北调中线水源工程。集团围绕“做大水电、做精工业、做优服务业、做强汉江集团”的战略目标，致力于各产业板块协同发展，逐步向跨地区、跨行业的大型综合性企业集团迈进。汉江集团连续六年被评为“湖北省百强企业”。</span></span></p><p><span style=\"color: rgb(62, 62, 62); line-height: 2; font-family: 宋体; font-size: 18pt;\"><span style=\"line-height: 2; font-size: 18px;\"></span></span><span style=\"color: rgb(62, 62, 62); line-height: 2; font-family: 宋体; font-size: 18pt;\"><span style=\"line-height: 2; font-size: 18px;\">&nbsp;&nbsp;&nbsp; 博远公司拥有城市园林绿化企业二级资质、水土保持方案编制乙级资质、水土保持监测乙级资质、物业管理企业二级资质、特种设备检验检测机构核准证、旅游从业资格。业务涵盖旅游资源的开发利用，丹江口大坝景区和松涛山庄景区的经营管理，宾馆经营管理；园林绿化规划设计与施工，水土保持工程咨询；物业经营管理；茶叶、水果、苗木的生产销售，液化气和成品油的经营；“三退”以及富余人员的服务管理，车辆服务管理，委托资产管理等。</span></span></p><p><span style=\"color: rgb(62, 62, 62); line-height: 2; font-family: 宋体; font-size: 18pt;\"><span style=\"line-height: 2; font-size: 18px;\"></span></span><span style=\"color: rgb(62, 62, 62); font-family: 宋体; font-size: 18pt;\"><span style=\"line-height: 2; font-size: 18px;\">&nbsp;&nbsp;&nbsp; 经过十几年发展，博远公司以旅游开发、物业管理、绿化工程为三大战略支撑，初步成为一个集“跨地区的优秀物业企业、结构多元而且优势明显的绿化企业、在鄂西北有影响力的旅游企业”为一体的综合性企业。公司旗下松涛山庄和丹江口大坝景区先后被评为国家水利风景区，在</span><span style=\"line-height: 2; font-size: 18px;\">2014</span><span style=\"line-height: 2; font-size: 18px;\">年荣获十堰市“十星级”物业服务企业荣誉称号；绿化工程和养护项目遍及十堰、襄阳、武汉、山西太原、江苏昆山等地，屡获殊荣，承建的第十届中国武汉国际园林博览会晋中展园工程荣获“工程优胜奖”以及“园博优秀建设者”两个奖项，碧水方圆小区二期景观绿化工程被评为</span><span style=\"line-height: 2; font-size: 18px;\">2016</span><span style=\"line-height: 2; font-size: 18px;\">年度湖北省园林绿化优质工程。</span></span></p><p><br/></p>','title'=>'关于我们','cover'=>'http://trip.test/attachment/images/2019/12/08/image_157576322355579910.png','description'=>'关于我们','display'=>'0','author'=>'','view'=>'10000','sort'=>'0','is_new_template'=>'1','status'=>'1','created_at'=>'1575805710','updated_at'=>'1575816853']);
        $this->insert('{{%cms_single}}',['id'=>'13','merchant_id'=>'0','column_id'=>'17','content'=>NULL,'title'=>NULL,'cover'=>NULL,'description'=>NULL,'display'=>'0','author'=>NULL,'view'=>'0','sort'=>'0','is_new_template'=>'0','status'=>'1','created_at'=>'1575816777','updated_at'=>'1575816777']);
        
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

