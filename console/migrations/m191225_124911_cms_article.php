<?php

use yii\db\Migration;

class m191225_124911_cms_article extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%cms_article}}', [
            'id' => "int(11) NOT NULL AUTO_INCREMENT",
            'column_id' => "int(11) NOT NULL COMMENT '栏目ID'",
            'title' => "varchar(255) NOT NULL COMMENT '标题'",
            'image' => "varchar(255) NULL COMMENT '封面'",
            'description' => "text NULL COMMENT '描述'",
            'author' => "varchar(100) NULL COMMENT '作者'",
            'content' => "text NULL COMMENT '内容'",
            'link' => "text NULL COMMENT '外链'",
            'sort' => "int(11) NULL DEFAULT '0' COMMENT '排序'",
            'view' => "int(11) NULL DEFAULT '0' COMMENT '浏览量'",
            'position' => "tinyint(2) NULL DEFAULT '0' COMMENT '推荐位'",
            'seo_key' => "varchar(255) NULL COMMENT 'SEO关键词'",
            'seo_content' => "varchar(1000) NULL COMMENT 'SEO内容'",
            'status' => "tinyint(2) NULL DEFAULT '1' COMMENT '状态'",
            'created_at' => "int(11) NULL COMMENT '添加时间'",
            'updated_at' => "int(11) NULL COMMENT '更新时间'",
            'PRIMARY KEY (`id`)'
        ], "ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COMMENT='文章表'");
        
        /* 索引设置 */
        $this->createIndex('column_id','{{%cms_article}}','column_id',0);
        
        
        /* 表数据 */
        $this->insert('{{%cms_article}}',['id'=>'6','column_id'=>'21','title'=>'龙山党支部举行员工技能比武大赛','image'=>'http://admin-trip.test/attachment/images/2019/12/09/image_157583947349989954.jpg','description'=>'','author'=>'','content'=>'<p>&nbsp; &nbsp;为了有效促进员工学习业务技能的积极性，达到“学技能、比服务、争先创优促发展”的目的，结合宾馆创建“示范基层党组织创建工作”的有关内容，1月30日，龙山宾馆党支部开展了员工业务技能比赛活动。</p><p>&nbsp; &nbsp; &nbsp; &nbsp;此次竞赛设有中餐宴会摆台、传菜技能、中式铺床、卫生间清洁四个项目，比赛活动得到了各部门员工的积极响应和热情参与，他们利用自己的休息时间，刻苦训练摆台、铺床等专业技能。为了在比赛中取得佳绩，参赛选手开动脑筋，充分发挥想象力，为自己的参赛项目设定一个与众不同的主题，力求新颖。</p><p>&nbsp; &nbsp; &nbsp; &nbsp;在大赛现场，各位参赛选手因为准备充分，表现都很出色。在餐饮部的中餐宴会摆台比赛中，参赛者有的以“家和万事兴”为主题，有的以“五谷丰登”为主题，创新台面设计，立意新颖。龙山食府所做的五谷丰登里三个灯笼代表博远公司、旅游公司以及龙山宾馆，以祝愿博远公司、旅游公司和龙山宾馆在新的一年里生意红火，再获丰收。在客房部中式铺床实操比赛中，客房服务员的甩单动作潇洒自如，“哗”的一声一次到位，艺惊四座。参赛选手规范的礼貌礼节、得体的仪容仪表、娴熟的专业技能赢得了台下观众的热烈掌声。</p><p>&nbsp; &nbsp; &nbsp; &nbsp;服务技能大赛促进了服务技能的交流与学习，激发了员工们提高专业技能的热情，在员工中形成了“比、学、赶、超”的浓厚氛围。</p><p><br/></p><p><br/></p><p><br/></p>','link'=>'','sort'=>'0','view'=>'10069','position'=>'0','seo_key'=>'','seo_content'=>'','status'=>'1','created_at'=>'1575839481','updated_at'=>'1575839490']);
        $this->insert('{{%cms_article}}',['id'=>'7','column_id'=>'21','title'=>'财务劳资部组织开展一季度业务学习会','image'=>'http://admin-trip.test/attachment/images/2019/12/09/image_157583953299495452.jpg','description'=>'','author'=>'','content'=>'<p>&nbsp;3月19日下午，财务劳资部按照年度培训教育计划，在公司三楼会议室举行了2015年一季度业务学习会。各基层单位核算员、机关工作人员约20人次参加了此次业务学习。</p><p>&nbsp; &nbsp; &nbsp; 本次学习内容一是学习发票管理办法及实施细则，二对近期集团公司及公司出台的进一步加强财务管理的有关规定和国家有关行政法规所涉及的财务事项等进行了解读，提高大家对这些政策的理解，方便今后实际工作。会上大家结合日常的业务进行了案例分析和讨论，财务劳资部安排部署了下步重点工作。</p><p>&nbsp; &nbsp; &nbsp; 2015年，财务劳资部将继续举办各种类型的学习，引导和督促业务人员提升整体素质，更好地服务于公司经营。</p><p><br/></p>','link'=>'','sort'=>'0','view'=>'57','position'=>'0','seo_key'=>'','seo_content'=>'','status'=>'1','created_at'=>'1575839535','updated_at'=>'1575839535']);
        $this->insert('{{%cms_article}}',['id'=>'8','column_id'=>'21','title'=>'博远公司开展职工职业技能初赛','image'=>NULL,'description'=>'博远公司开展职工职业技能初赛','author'=>'','content'=>'<p>&nbsp;为引导和激励广大员工学习业务，提高员工职业素质与技能水平，结合集团公司第五届职业技能竞赛，4月23日，博远公司在松涛山庄开展了职业技能（茶业加工工）初赛活动， 18名参赛选手共同切磋制茶手艺，博远公司职业技能竞赛正式拉开序幕。</p><p>&nbsp; &nbsp; &nbsp;整个竞赛分为准备、初赛、决赛、总结四个阶段，竞赛采取理论考试和实际操作相结合的形式进行。初赛前，参赛人员进行了精心准备。在初赛操作技能比赛现场，选手们各展其能，滚烫的铁锅，嫩绿的茶芽，在双手中灵活上下翻飞着，时而天女散花，时而梅雨落潭，时而绿龙藏首，随着茶叶水分渐渐减少，茶香也阵阵扑鼻而来，选手们用抖、搭、拓、甩、捺、抓、推、磨、压等10多种炒制手法，经过杀青、整形、干燥等制作程序，制作出成品手工茶。评委按炒制出的茶叶外形、汤色、香气、滋味、叶底及制作过程等对选手进行了综合评定。评出的前十名将参加集团公司组织的实际操作技能竞赛决赛。</p><p>&nbsp; &nbsp; &nbsp;据了解，手工制作出的茶叶身骨重，手感柔，滋味醇厚，色泽翠嫩，保持了茶叶原有的天然风味，深受广大茶客的喜爱。山庄将以这次技能竞赛为契机，进一步提高手工制茶技术，推广松涛山庄的多年打造的优质茶叶品牌，增强产品市场竞争力。</p><p>同时，公司举办这次职工技能竞赛活动旨在激发职工的积极性和创造性，引导职工学习技术的热情，立足岗位比学赶超，更好地凝聚广大职工的智慧和力量，为企业可持续发展鼓足后劲。</p><p><br/></p>','link'=>'','sort'=>'0','view'=>'10013','position'=>'0','seo_key'=>'','seo_content'=>'','status'=>'1','created_at'=>'1575840603','updated_at'=>'1575840603']);
        $this->insert('{{%cms_article}}',['id'=>'9','column_id'=>'21','title'=>'海底捞读后感（仲霞）','image'=>NULL,'description'=>'','author'=>'仲霞','content'=>'<p><span style=\"font-size: 16px;font-family: Tahoma;background: white;color: black\">读完《“海底捞”：你学不会》这本书后，如获至宝，“海底捞”告诉我们：从小事做起，能持之以恒，并不断学习、不断创造、不断造就人才、互助互爱、和谐共生，再加上公平的人性化管理。看</span><span style=\"font-size: 16px;font-family: 宋体;background: white;color: black\">起来</span><span style=\"font-size: 16px;font-family: Tahoma;background: white;color: black\">简</span><span style=\"font-size: 16px;font-family: 宋体;background: white;color: black\">单</span><span style=\"font-size: 16px;font-family: Tahoma;background: white;color: black\">明了，细想却发人深</span><span style=\"font-size: 16px;font-family: 宋体;background: white;color: black\">思。</span></p><p><span style=\"font-size: 19px;font-family: Tahoma;background: white;color: black\"><span style=\"font-size: 16px\">我个人认为：大事业就是像</span><span style=\"font-size: 16px\">“</span><span style=\"font-size: 16px\">海底捞</span><span style=\"font-size: 16px\">”</span><span style=\"font-size: 16px\">这样做成功的，做大事的每天都在干什么？其实就是在干些细小的小事。每件大事都是由无数件小事组成，只有日复一日、年复一年、始终不渝的做好身边每一件小事，才能最终做成大事。</span></span><span style=\"font-size: 16px;font-family: 宋体;background: white;color: black\">就像我们每时每刻都在重复着操作加油八步法</span><span style=\"font-size: 16px;font-family: Tahoma;background: white;color: black\">,</span><span style=\"font-size: 16px;font-family: 宋体;background: white;color: black\">但是维持加油站一天、一个月、一年无安全事故，无顾客投诉很难很难。纵观古今</span><span style=\"font-size: 16px;font-family: Tahoma;background: white;color: black\">，成功</span><span style=\"font-size: 16px;font-family: 宋体;background: white;color: black\">的商人</span><span style=\"font-size: 16px;font-family: Tahoma;background: white;color: black\">，绝大部分都不是靠继承得来的财富，都是靠自己从小到大、从无到有、辛辛苦苦的一步一步想出来的、做出来的，只有自己想到了、会做了，才能带领更多的人一起看、一起干、一起学，企业才能做好、做强</span><span style=\"font-size: 16px;font-family: 宋体;background: white;color: black\">，有一句话叫做只有想不到，没有做不到。</span></p><p><span style=\"font-size: 19px;font-family: Tahoma;background: white;color: black\"><span style=\"font-size: 16px\">人人都想做个成功的人，人人都想过幸福的日子，干得好小事的人，才会去想大事、才敢去干大事，若每件小事都做好了，这件大事就做成了，持之以恒下去才能成为一个成功的人，</span><span style=\"font-size: 16px\">20</span><span style=\"font-size: 16px\">多年前有一首歌词就告诉过我们，</span><span style=\"font-size: 16px\">“</span><span style=\"font-size: 16px\">幸福不在柳荫下，幸福不在月光里，幸福它在聪明的智慧里，幸福它在辛勤的汗水里</span><span style=\"font-size: 16px\">”</span><span style=\"font-size: 16px\">。其实成功也好，幸福也好，既简单又复杂，也许从一个成语、一个典故或一句诗词歌赋中理解了、感悟了它的真正含义，并做好了，做到了，你就在成功的同时收获了幸福。反之，如果半途而废、华而不实、虚心假意、表里不一，老是抱怨自身命不好、运气不如人，则既虚度了光阴、消耗了生命，到最后还悔之不及。</span></span><span style=\"font-size: 16px;font-family: 宋体;background: white;color: black\">天上是不会掉馅饼的，只有通过不懈的努力才能享受到成功的甜蜜。</span></p><p><span style=\"font-size: 19px;font-family: Tahoma;background: white;color: black\"><span style=\"font-size: 16px\">我们在这个集体组织里工作和生活，与</span><span style=\"font-size: 16px\">“</span><span style=\"font-size: 16px\">海底捞</span><span style=\"font-size: 16px\">”</span><span style=\"font-size: 16px\">差距在哪里，差距有多大，该怎样做才能缩小差距，我也在深思、也在不断纠正。山外有山、人外有人、学无止境，但学有捷径。试想你在工作时、开会时也能踊跃发言吗？你的意见得到采纳并有好的效果，奖励你</span><span style=\"font-size: 16px\">10</span><span style=\"font-size: 16px\">元、</span><span style=\"font-size: 16px\">50</span><span style=\"font-size: 16px\">元、</span><span style=\"font-size: 16px\">100</span><span style=\"font-size: 16px\">元你内心会很满意吗？你的意见没被采纳，或采纳了效果不好，你的心情会好吗？下次还会踊跃发言吗？下次还会提出更好的、更有价值的意见吗？看了</span><span style=\"font-size: 16px\">“</span><span style=\"font-size: 16px\">海底捞</span><span style=\"font-size: 16px\">”</span><span style=\"font-size: 16px\">这篇文章后心情久久不能平静，千里之行始于足下，只要明白了，有方向了，从身边的每件小事做起，最终一定能走上成功的道路。千万不要夜里想千条路，早上起来还是走老路，那样既伤心又费神，日积月累还会自我消沉。</span></span></p><p><span style=\"font-size: 16px;font-family: Tahoma;background: white;color: black\">任何组织或大的家庭都在为体现公平、创造公平而努力，但结果却不尽相同，这并不是不想办好，实在是很难办好。任何组织或大的家庭一旦想做一件大事就会牵一发而动全身，有一个环节出现问题就会引发一系列负面的连锁反应，只有正确评价、正确理解、正确对待才方显公平。站在不同的角度或不同的高度去综合衡量轻重、利弊，求大平而忽略小不平，自我的心态才能平衡。也许你对上司、或对下属、或对岗位、或对薪酬、或对待遇等等有意见，这是因为每个人的价值观、世界观不同，站的角度、高度不一样，导致结果也就不一样了，如果带着抱怨和失衡的心态去工作，不仅做起事来事倍功半，也影响自身声誉和工作成绩，还有可能导致身心忧虑，不宜健康。总之，成大事者不拘小节，你可能在一些小节中误解了，陷深了，解开这个结，身心就健康了，工作才能顺心，生活才能愉快。</span></p><p><span style=\"color: rgb(51, 51, 51);font-family: &#39;Microsoft YaHei&#39;;font-size: 14px;background-color: rgb(244, 244, 244)\">“</span><span style=\"color: rgb(51, 51, 51);font-family: 宋体;background: white\">海底捞</span><span style=\"color: rgb(51, 51, 51);font-family: &#39;Microsoft YaHei&#39;;font-size: 14px;background-color: rgb(244, 244, 244)\">”</span><span style=\"color: rgb(51, 51, 51);font-family: 宋体;background: white\">这篇文章内容简朴，易懂易记也易学，方向明确，但其含义颇为深刻，长久坚持有益，我将认真去思考，从现在做起，从身边的每一件小事做起，发动周围的同事们，从小我到大我，一步一个脚印，朝着自己的目标努力，前进！</span></p><p><br/></p>','link'=>'','sort'=>'0','view'=>'23','position'=>'0','seo_key'=>'','seo_content'=>'','status'=>'1','created_at'=>'1575841151','updated_at'=>'1575841159']);
        $this->insert('{{%cms_article}}',['id'=>'14','column_id'=>'21','title'=>'用一颗感恩的心去对待工作（黄冠群）','image'=>NULL,'description'=>'读《工匠精神》有感','author'=>'黄冠群','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"vertical-align:top;text-indent:24pt;\">
	<span style=\"font-size:16px;font-family:SimSun;color:#333333;line-height:150%;\">“</sp','link'=>NULL,'sort'=>'0','view'=>'1','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'15','column_id'=>'21','title'=>'敬业精业乐业  绽放人生光彩（沈丽娅）','image'=>NULL,'description'=>'《工匠精神》读书心得','author'=>'沈丽娅','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"text-indent:30pt;\">
	<span style=\"font-size:16px;\">翻开深褐</span><span style=\"font-size:16px;\"></span><span style=\"font-size:16p','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'16','column_id'=>'21','title'=>'把工作做到最精、最细（李继红）','image'=>NULL,'description'=>'《工匠精神》读后感','author'=>'李继红','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"text-indent:21pt;\">
	<span style=\"font-size:14pt;font-family:仿宋_GB2312;\"><span style=\"font-size:16px;font-family:SimSun;\">读完《工匠精神》，我悟出的最深的观点就是在工作','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'17','column_id'=>'21','title'=>'用工匠精神做优服务业（盘家胜）','image'=>NULL,'description'=>'《工匠精神》读后感','author'=>'盘家胜','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"text-indent:28pt;\">
	<span style=\"font-size:16px;font-family:宋体;\">读了付守永的《工匠精神》，颇有感悟。作者在书中明确地告诉我们，工匠精神是对工作的执着，对所做的事情和产生的产品的精雕细琢，精益求精。这让我联想到我们博远公司从事的服务业，前几年实施看板管理（目视管理','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'18','column_id'=>'21','title'=>'职业之心与职业追求（张余）','image'=>NULL,'description'=>'工匠精神读后感','author'=>'张余','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"text-indent:30pt;\">
	<SPAN style=\"FONT-SIZE: 16px; FONT-FAMILY: SimSun; mso-ascii-font-family: \" times=\"\" roman?;=\"\" mso-hansi-font-family:=\"\" ?times=\"\" new=\"\" roman','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'19','column_id'=>'21','title'=>'《工匠精神》读后感（于星节）','image'=>NULL,'description'=>'','author'=>'于星节','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"vertical-align:top;text-align:left;text-indent:24pt;\" align=\"left\">
	<span style=\"font-size:12pt;font-family:宋体;color:black;line-height:200%;\"><span style=\"font-size','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'20','column_id'=>'21','title'=>'读《工匠精神》心得体会（彭翠兰）','image'=>NULL,'description'=>'','author'=>'彭翠兰','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"text-indent:45pt;\">
	<span style=\"font-size:18pt;font-family:华文仿宋;color:black;\"><span style=\"font-size:16px;font-family:SimSun;\">近期单位组织全体员工开展读书活动，推荐两本书，《海底捞你学不会》及《工匠','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'21','column_id'=>'21','title'=>'海底捞的服务精神（夏术敏）','image'=>NULL,'description'=>'《海底捞你学不会》读后感','author'=>'夏术敏','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"text-indent:28pt;\">
	<SPAN style=\"FONT-SIZE: 16px; FONT-FAMILY: 宋体; mso-ascii-font-family: \" times=\"\" roman?;=\"\" mso-hansi-font-family:=\"\" ?times=\"\" new=\"\" roman??=\"','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'22','column_id'=>'21','title'=>'品质工作 向价值型员工进化（李书林）','image'=>NULL,'description'=>'《工匠精神》读后感','author'=>'李书林','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"text-indent:28pt;\">
	<span style=\"font-size:14pt;font-family:仿宋_GB2312;\"><span style=\"font-size:16px;font-family:SimSun;\">“工作将占据你生命中相当大的一部分，从事你认为具有非凡意义的工作，方能给你带来真正的满','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'23','column_id'=>'21','title'=>'《海底捞你学不会》读后感（李刚）','image'=>NULL,'description'=>'','author'=>'李刚','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"text-indent:28pt;\">
	<span style=\"font-size:14pt;font-family:宋体;\"><span style=\"font-size:16px;\">看完了《海底捞你学不会》，第一感觉就是管理者的智慧决定企业的发展。以下是我的</span><span><a href=\"http://ww','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'24','column_id'=>'21','title'=>'《海底捞你学不会》读后感（王政）','image'=>NULL,'description'=>'','author'=>'王政','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"text-indent:24pt;\">
	<span style=\"font-size:12pt;font-family:仿宋;line-height:150%;\"><span style=\"font-size:16px;font-family:SimSun;\">海底捞，是四川简阳的一家全国连锁火锅店。</span><span ','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'25','column_id'=>'21','title'=>'用感恩的心对待工作（甘润）','image'=>NULL,'description'=>'读《工匠精神-向价值型员工进化》读后感','author'=>'甘润','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"text-indent:32pt;\">
	<span style=\"font-size:16px;font-family:宋体;\">当我拿起这本书，已经被封底的</span><span style=\"font-size:16px;\">5</span><span style=\"font-size:16px;font-family:','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'26','column_id'=>'21','title'=>'心态决定一切（王青）','image'=>NULL,'description'=>'《工匠精神》读后感','author'=>'王青','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"text-indent:32pt;\">
	<span style=\"font-size:16pt;font-family:仿宋_GB2312;\"><span style=\"font-size:16px;font-family:SimSun;\">“修正内心，改变行为，把每个当下做到极致“。沿着书中巨人的脚步我们一路走来</span','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'27','column_id'=>'21','title'=>'工匠精神读后感（万春久）','image'=>NULL,'description'=>'','author'=>'万春久','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"background:#fafafa;text-align:left;text-indent:30pt;\" align=\"left\">
	<span style=\"font-size:15pt;font-family:仿宋_GB2312;color:#333333;\"><span style=\"font-size:16px;fo','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'28','column_id'=>'21','title'=>'读《海底捞你学不会》心得（许磊）','image'=>NULL,'description'=>'','author'=>'许磊','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"text-indent:30pt;\">
	<span style=\"font-size:15pt;font-family:宋体;\"><span style=\"font-size:16px;\">《海底捞你学不会》一书主要讲述了海底捞火锅店，在董事长张勇确立的服务差异化战略指导下，始终秉承服务至上，顾客至上的理念，以创新为核心，改变','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'29','column_id'=>'21','title'=>'《工匠精神》读后感（郭军辉）','image'=>NULL,'description'=>'','author'=>'郭军辉','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"text-indent:24pt;\">
	<SPAN style=\"FONT-SIZE: 16px; FONT-FAMILY: SimSun; LINE-HEIGHT: 150%; mso-ascii-font-family: \" times=\"\" roman?;=\"\" mso-hansi-font-family:=\"\" ?ti','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'30','column_id'=>'21','title'=>'读《工匠精神》有感（王敏）','image'=>NULL,'description'=>'','author'=>'王敏','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"text-indent:21.75pt;\">
	<SPAN style=\"FONT-SIZE: 16px; FONT-FAMILY: 宋体; mso-ascii-font-family: \" times=\"\" roman?;=\"\" mso-hansi-font-family:=\"\" ?times=\"\" new=\"\" roman?','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'31','column_id'=>'21','title'=>'海底捞读后感（仲霞）','image'=>NULL,'description'=>'','author'=>'仲霞','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<div>
	<p style=\"text-align:justify;text-indent:21pt;\">
		<span style=\"font-size:16px;font-family:Tahoma;background:white;color:black;\"><span style=\"font-size:16px;\"></span></span><span style=\"','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'32','column_id'=>'21','title'=>'什么是职业精神？（王峰）','image'=>NULL,'description'=>'就是把自己不喜欢做的事情，依然做得比任何人都好。','author'=>'王峰','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p style=\"text-indent:24pt;\">
	<span style=\"font-size:14pt;color:#222222;\">我们是干什么的？就是在最合适的时间，做对企业最有利的事情。比如，在清明时节，用心而高效的采摘每一片茶叶的嫩芽；在丰收时节，小心仔细的把黄橙橙的柑橘封箱、装车；在烈日炎炎下，为干涸的树苗喷洒清水；在山庄发现火情时，用最短的时间赶赴现场，积极参与火灾扑救……</span><spa','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'33','column_id'=>'21','title'=>'物业管理分公司开展“员工学习培训季”活动','image'=>NULL,'description'=>'','author'=>'宛英','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;按照公司生产标准化建设的总体要求，全面提升物业管理服务规范，实现工作的高标准、高质量、高效率，进而提高员工的规范意识和工作执行力，推进分公司学习型团队建设。物业管理分公司把4-9月份确定为“员工学习培训季”，主要学习内容为公司最新编制和印发的《博远置业公司、服务管理中心、旅游发展公司工作手册》、《小区物业管理服务规范》、《办公楼物业管理服务规范》等。
</p>','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'34','column_id'=>'21','title'=>'集团公司开展第五届职业技能（茶叶加工工）竞赛','image'=>NULL,'description'=>'','author'=>'詹世军','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	<p>
		&nbsp; &nbsp; &nbsp; &nbsp;4月28日，集团公司组织的第五届职业技能（茶叶加工工）竞赛在松涛山庄举行，来自博远置业公司的10名选手参加了决赛。
	</p>
	<p>
		&nbsp; &nbsp; &nbsp; &nb','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'35','column_id'=>'21','title'=>'博远公司开展职工职业技能初赛','image'=>NULL,'description'=>'','author'=>'詹世军','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp;为引导和激励广大员工学习业务，提高员工职业素质与技能水平，结合集团公司第五届职业技能竞赛，4月23日，博远公司在松涛山庄开展了职业技能（茶业加工工）初赛活动， 18名参赛选手共同切磋制茶手艺，博远公司职业技能竞赛正式拉开序幕。
</p>
<p>
	&nbsp; &nbsp; &nbsp;整个竞赛','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'36','column_id'=>'21','title'=>'财务劳资部组织开展一季度业务学习会','image'=>NULL,'description'=>'','author'=>'邓玉玲','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; 3月19日下午，财务劳资部按照年度培训教育计划，在公司三楼会议室举行了2015年一季度业务学习会。各基层单位核算员、机关工作人员约20人次参加了此次业务学习。
</p>
<p>
	&nbsp; &nbsp; &nbsp; 本次学习内容一是学习发票管理办法及实施细则，二对近期集团公司及公司出台的进一步加强财务管理的有关规定和国家有关行政法规所涉及的财务事项等进行了解读，提高大家对这些政策的理解，方便今后实际工作。','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'37','column_id'=>'21','title'=>'龙山党支部举行员工技能比武大赛','image'=>NULL,'description'=>'','author'=>'贾韵','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;为了有效促进员工学习业务技能的积极性，达到“学技能、比服务、争先创优促发展”的目的，结合宾馆创建“示范基层党组织创建工作”的有关内容，1月30日，龙山宾馆党支部开展了员工业务技能比赛活动。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;此次竞赛设有中餐宴会摆台、传菜技能、中式铺床、卫生间清洁四个项目，比赛活动得到了各部门员工的积极响应和热情参与，他们利用自己的休息时间，刻','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'38','column_id'=>'21','title'=>'观《致命的有限空间》有感','image'=>NULL,'description'=>'','author'=>'李晓沛','content'=>'<p>
	&nbsp; &nbsp; &nbsp; 6月24日，在松涛山庄观看了水利安全生产事故警示教育片《致命的有限空间》。影片通过一个触目惊心的事故案例，详细介绍了水电站职工检修作业时因不当操作造成较大安全事故的过程，深刻剖析了造成事故发生的主要原因以及应吸取的经验教训。片中指出，在有限空间作业危险性高，有三大危害：一是作业环境情况复杂；二是危险性大，发生事故后果严重；三是容易因盲目施救造成伤亡更大。据权威统计，2001年—2009年8月，我国在有限空间作业中因窒息导致一次死亡3人以上的事故总数为66','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'39','column_id'=>'21','title'=>'2015年度导师带徒活动进入实施阶段','image'=>NULL,'description'=>'','author'=>'汪玉红','content'=>'<p>
	&nbsp; &nbsp; &nbsp; 7月10日，在公司（中心）半年工作检查会暨双月例会上，杨建丹与常螺、王峰，高飞与曾文杰三对师徒代表现场签订了师徒合同，标志着公司（中心）2015年度导师带徒活动进入实施阶段。
</p>
<p>
	&nbsp; &nbsp; &nbsp; 导师带徒活动是拓展青年职工岗位适应性培训的重要渠道，是服务企业改革发展、服务青年成长成才的一项重要举措。根据集团公司团委、人力资源部、财务部、技术部《关于开展汉江集团公司第九届导师带徒活动的通知》（汉司青﹝2015﹞4号','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'40','column_id'=>'21','title'=>'汽车加油别走进误区','image'=>NULL,'description'=>'','author'=>'','content'=>'<p>
	<span style=\"font-size:14pt;font-family:宋体;\"><span style=\"font-size:small;font-family:Tahoma;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>质监局计量所工作人员发现在给加油机检定的过程中</span><span style=\"font-size:14pt;\">,</span><span style=\"font-size:14pt;font-family:宋体;','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'41','column_id'=>'21','title'=>'铭记历史作品4篇（詹重德）','image'=>NULL,'description'=>'','author'=>'詹重德','content'=>'<span id=\"Label_lr\"> 
<p align=\"center\">
	<b><span style=\"font-size:12pt;font-family:宋体;\">承认史实去邪恶</span></b><b><span style=\"font-size:12pt;\"> </span></b><b><span style=\"font-size:12pt;font-family:宋体;\">理性爱国卫和平</span></b><b><span style=\"font-size:12pt;\"></s','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'42','column_id'=>'21','title'=>'劳财部开展整合后首次业务学习会','image'=>NULL,'description'=>'','author'=>'刘锦玲','content'=>'<span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"text-indent:28pt;\">
	<span style=\"font-size:14pt;font-family:宋体;\">2015</span><span style=\"font-size:14pt;font-family:宋体;\">年<span>7</span>月<span>28</span>日</span><span style=\"font-size:14pt;font-family:宋体;\"','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'43','column_id'=>'21','title'=>'我爱我家<br />  ——读公司致员工《十年耕耘 感恩有你》感谢信有感<br />','image'=>NULL,'description'=>'','author'=>'','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; “这么快10年过去了，看到感谢信上的照片就像放电影似的，历历在目，10年公司发展壮大，作为我们个人做的微不足道，公司专门给我们发感谢信，令我们感动”；
</p>
<p>
	&nbsp; &nbsp; &nbsp;“公司就象一个大家庭，公司的成长壮大使其中的每个成员也得到实惠，作为基层员工的我们十分感谢公司”；
</p>
<p>
	&nbsp; &nbsp; &nbsp;“','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'44','column_id'=>'21','title'=>'松涛山庄品茗轩员工参观“丹江口名鱼宴”餐饮技能竞赛','image'=>NULL,'description'=>'','author'=>'程桂华','content'=>'<p>
	&nbsp; &nbsp; &nbsp; &nbsp;8月10日晚上，松涛山庄管理处品茗轩员工在副经理陈钢带领下到沧浪海旅游港观摩了市商务局主办的2015年“丹江口名鱼宴”美食节暨餐饮技能竞赛。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;据介绍，本次大赛有丹江口市宾馆、汉江国际大酒店、丹江口市电力宾馆等十几个单位参加。我们来到现场时，已经是人山人海，桌席都已布置好，只见厨师们煎、炒、烹、炸，使出一个个绝活，精心准备着参赛作品。此时此刻，看着那惟妙惟肖的南瓜雕花、一','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'45','column_id'=>'21','title'=>'龙山宾馆举办普通话培训','image'=>NULL,'description'=>'','author'=>'王政','content'=>'<p>
	&nbsp; &nbsp; &nbsp; &nbsp;8月19日上午，由丹江口市劳动就业局牵头、龙山宾馆承办的“旅游业普通话培训班”在龙山宾馆报告厅举行。此次培训是系列培训中的一部分，系列培训包括“普通话培训”、 “丹江口周边景区讲解”、“礼貌礼仪”等内容。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;这次培训授课老师是丹江口市广电局播音主持明廷慧。龙山宾馆、物业分公司、松涛山庄、大坝景区管理处等约110名员工参加了本次培训。
</p>
<p>
	&nbsp; &n','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'46','column_id'=>'21','title'=>'真情更添夕阳红<br />一一记原汉江中学离退休教师','image'=>NULL,'description'=>'','author'=>'史久新','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14pt;font-family:宋体;\">在巍巍大坝处，悠悠汉水畔，曾经有一个风景宜人，校舍整洁，设备完备，师资雄厚的地方，那就是汉江集团所属汉江中学。汉江中学自</span><span style=\"font-size:14pt;\">1969</span><span style=\"font-s','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'47','column_id'=>'21','title'=>'甘洒汗水写春秋<br />——记退休党员教师袁芍华 <br />','image'=>NULL,'description'=>'','author'=>'史久新','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14pt;font-family:宋体;color:black;\">走进老联通路和美苑小区，常常会看见一位被同龄人叫她<span>“</span>老师<span>”</span>，青年人喊她<span>“</span>阿姨<span>”</span>，孩子们','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'48','column_id'=>'21','title'=>'如何抓好班组安全生产','image'=>NULL,'description'=>'','author'=>'陈丽','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"text-indent:32pt;\">
	<span style=\"font-size:16px;font-family:SimSun;\">对于一个企业来说，能否正常生产，一线职工的安全意识至关重要。而一个企业要想抓好安全生产，首先要以人为本，提高一线职工的安全意识，搞好班组安全生产。</span><span style=\"font-size:16pt;font-fa','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'49','column_id'=>'21','title'=>'加油站组织学习安全法规','image'=>NULL,'description'=>'','author'=>'陈丽','content'=>'<span id=\"Label_lr\"> 
<p>
	<span style=\"font-size:14pt;font-family:仿宋_GB2312;\"><span style=\"font-size:small;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style=\"font-size:18px;font-family:SimSun;\">为了提高职工安全意思，促进加油站安全生产工作，加油站于</span><span style=\"font-','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'50','column_id'=>'21','title'=>'物业管理分公司举办小区绿化养护知识培训','image'=>NULL,'description'=>'','author'=>'宛英','content'=>'<span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14pt;font-family:宋体;\">为提升物业服务水平、提高物业服务人员绿化养护知识，</span><span style=\"font-size:14pt;\">8</span><span style=\"font-size:14pt;font-family:宋体;\">月</span><span style=\"font-size:1','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'51','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（李刚）','image'=>NULL,'description'=>'','author'=>'李刚','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'52','column_id'=>'21','title'=>'学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（孙丹农）','image'=>NULL,'description'=>'','author'=>'孙丹农','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'53','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（唐丽娜）','image'=>NULL,'description'=>'','author'=>'唐丽娜','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'54','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（肖新年）','image'=>NULL,'description'=>'','author'=>'肖新年','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'55','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（叶丹毅）','image'=>NULL,'description'=>'','author'=>'叶丹毅','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'56','column_id'=>'21','title'=>'公司（中心）2017年度物业管理员<br />职业技能竞赛圆满落幕<br />','image'=>NULL,'description'=>'','author'=>'姚斯棋  宛英','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'57','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（胡明星）<br />','image'=>NULL,'description'=>'','author'=>'胡明星','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'58','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（胡明星）<br />','image'=>NULL,'description'=>'','author'=>'胡明星','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'59','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（黄伟）<br />','image'=>NULL,'description'=>'','author'=>'黄伟','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'60','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（陈自力）','image'=>NULL,'description'=>'','author'=>'陈自力','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'61','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（汤明群）<br />','image'=>NULL,'description'=>'','author'=>'汤明群','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'62','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（陆建丹）','image'=>NULL,'description'=>'','author'=>'陆建丹','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'63','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会(卢凯）','image'=>NULL,'description'=>'','author'=>'卢凯','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'64','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（王峰）','image'=>NULL,'description'=>'','author'=>'王峰','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'65','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（张靖）','image'=>NULL,'description'=>'','author'=>'张靖','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'66','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（李书林）','image'=>NULL,'description'=>'','author'=>'李书林','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'67','column_id'=>'21','title'=>'财务劳资部组织学习《增值税暂行条例》','image'=>NULL,'description'=>'','author'=>'王玮','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'68','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（华伟）','image'=>NULL,'description'=>'','author'=>'华伟','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'69','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（李世隆）','image'=>NULL,'description'=>'','author'=>'李世隆','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'70','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（唐宏文）','image'=>NULL,'description'=>'','author'=>'唐宏文','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'71','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（夏术敏）','image'=>NULL,'description'=>'','author'=>'夏术敏','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'72','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（夏术敏）','image'=>NULL,'description'=>'','author'=>'夏术敏','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'73','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（姚丹丹）','image'=>NULL,'description'=>'','author'=>'姚丹丹','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'74','column_id'=>'21','title'=>'导师带徒成效显著获表彰','image'=>NULL,'description'=>'','author'=>'汪玉红','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'75','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”红色教育实践活动心得体会（何思）','image'=>NULL,'description'=>'','author'=>'何思','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'76','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（马占海）','image'=>NULL,'description'=>'','author'=>'马占海','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'77','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（赵华松）','image'=>NULL,'description'=>'','author'=>'赵华松','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'78','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />教育实践活动心得体会（陈钢）','image'=>NULL,'description'=>'','author'=>'陈钢','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'79','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（郑江斌）','image'=>NULL,'description'=>'','author'=>'陈钢','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'80','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（郑江斌）','image'=>NULL,'description'=>'','author'=>'郑江斌','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'81','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（孙永民）','image'=>NULL,'description'=>'','author'=>'孙永民','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'82','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（程贵斌）','image'=>NULL,'description'=>'','author'=>'程贵斌','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'83','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（程家江）','image'=>NULL,'description'=>'','author'=>'程家江','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'84','column_id'=>'21','title'=>'公司(中心)2017年度职业技能竞赛完美收官','image'=>NULL,'description'=>'','author'=>'姚斯棋','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'85','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（余涛）','image'=>NULL,'description'=>'','author'=>'余涛','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'86','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（邹立强)','image'=>NULL,'description'=>'','author'=>'邹立强','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'87','column_id'=>'21','title'=>'学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（王剑）','image'=>NULL,'description'=>'','author'=>'王剑','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'88','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（高原）','image'=>NULL,'description'=>'','author'=>'高原','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'89','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（李江河）','image'=>NULL,'description'=>'','author'=>'李江河','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'90','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得（李豹）','image'=>NULL,'description'=>'','author'=>'李豹','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'91','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得（刘爽）','image'=>NULL,'description'=>'','author'=>'刘爽','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'92','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得（白荧刚）','image'=>NULL,'description'=>'','author'=>'白荧刚','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'93','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得（涂功军）','image'=>NULL,'description'=>'','author'=>'涂功军','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'94','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得（周江）','image'=>NULL,'description'=>'','author'=>'周江','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'95','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得（熊建程）','image'=>NULL,'description'=>'','author'=>'熊建程','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'96','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（门强）','image'=>NULL,'description'=>'','author'=>'门强','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'97','column_id'=>'21','title'=>'学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（邓华）','image'=>NULL,'description'=>'','author'=>'邓华','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'98','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（王俊彦）','image'=>NULL,'description'=>'','author'=>'王俊彦','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'99','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（杨瑞）','image'=>NULL,'description'=>'','author'=>'杨瑞','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'100','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”红色教育实践活动心得体会（许磊）','image'=>NULL,'description'=>'','author'=>'许磊','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'101','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（刘发明）','image'=>NULL,'description'=>'','author'=>'刘发明','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'102','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育心得体会（张鹏)','image'=>NULL,'description'=>'','author'=>'张鹏','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'103','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（张永明）','image'=>NULL,'description'=>'','author'=>'张永明','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'104','column_id'=>'21','title'=>'安全生产须要狼性管理','image'=>NULL,'description'=>'','author'=>'李书林','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'105','column_id'=>'21','title'=>'武汉分公司开展青年员工技能培训','image'=>NULL,'description'=>'','author'=>'梅 焕','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'106','column_id'=>'21','title'=>'学习践行十九大  立足岗位展风采','image'=>NULL,'description'=>'','author'=>'','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'107','column_id'=>'21','title'=>'古朴淳厚的晋商文化','image'=>NULL,'description'=>'——武汉园博园不容错过景点之晋中园印象','author'=>'沈丽娅','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;
<p class=\"MsoNormal\" style=\"text-indent:30pt;\">
	<span></span>
</p>
','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'108','column_id'=>'21','title'=>'詹重德作品选','image'=>NULL,'description'=>'','author'=>'詹重德','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;
<p class=\"MsoNormal\" style=\"text-align:center;\" align=\"center\">
	<b><span style=\"font-size:16pt;font-family:宋体;\"><span style=\"font-size:24px;\"></span>醒世共勉（三言）</span></b><b><span style=\"font-size:16pt;\"></span','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'109','column_id'=>'21','title'=>'詹重德作品《长乐思源（三言）》','image'=>NULL,'description'=>'','author'=>'詹重德','content'=>'&nbsp;
<p class=\"MsoNormal\" style=\"text-align:center;\" align=\"center\">
	<span style=\"font-size:15pt;font-family:宋体;\">&nbsp; ——<span style=\"font-size:15pt;font-family:宋体;\">赞服务管理中心</span></span>
</p>
<p class=\"MsoNormal\" style=\"text-align:center;\" align=\"ce','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'110','column_id'=>'21','title'=>'标杆学习  学以致用','image'=>NULL,'description'=>'公司派员参加集团公司地产开发管理培训班学习','author'=>'','content'=>'<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;为进一步提升汉江集团地产开发管理的理论水平和工作能力，集团公司于10月26日至30日在深圳举办了地产开发管理培训班。公司高度重视，积极组织员工参加了此次培训。
</p>
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 本次培训特邀在万科、中海、龙湖等国内标杆地产、物业企业有任职经历的知名专家就新常态下房地产营销之道、物业管理品牌建设与盈利模式、房地产整体经营与战略成本管理等内容进行了培训，组织参加培训','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'111','column_id'=>'21','title'=>'参加2015全国水利风景区建设与管理培训班的思考','image'=>NULL,'description'=>'','author'=>'陈自力','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"text-indent:21.0pt;\">
	<br />
</p>
<p>
	<span style=\"font-size:18px;\">&nbsp; &nbsp; &nbsp; &nbsp;近期，我参加了水利部组织的2015年全国水利风景区的建设与管理培训班的学习，通过学习，使我对水利风景区的建设与管理有了深入的认识。</s','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'112','column_id'=>'21','title'=>'园林绿化工程分公司开展导师带徒培训','image'=>NULL,'description'=>'','author'=>'曾文杰','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span style=\"font-size:18px;\"> 根据公司（中心）导师带徒活动要求及工作实际需要，2015年11月7日上午，园林绿化工程分公司开展广联达钢筋算量软件的培训活动。</span><br />
<span style=\"font-size:18px;\"></span><span style=\"font-size:18px;\"> 课程组织学员学习了广联达钢筋算量软件的','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'113','column_id'=>'21','title'=>'培训学习心得（朱德超）','image'=>NULL,'description'=>'','author'=>'朱德超','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"text-indent:30.0pt;\">
	<span style=\"font-size:18px;\">金秋十月，我有幸参加了集团公司举办的汉江集团地产开发管理培训班，在深圳、武汉进行了为期七天的培训学习和参观，通过对万科、中海、龙湖、绿城等国内标杆地产、物业企业的战略选择、发展思路、标杆物业服务历程以及产品定位与差异化营销、成本管控等方面的学习，使我对地产开发与物','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'114','column_id'=>'21','title'=>'物业从我做起（周少哲）','image'=>NULL,'description'=>'','author'=>'周少哲','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"text-indent:132.0pt;background:white;\">
	<br />
</p>
<p class=\"MsoNormal\" align=\"left\" style=\"text-indent:30pt;background-color:white;\">
	<span style=\"font-size:18px;\">物业管理是什么，对大家来说都知道，','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'115','column_id'=>'21','title'=>'“小”产业做出大文章（周江）','image'=>NULL,'description'=>'','author'=>'周江','content'=>'<p class=\"MsoNormal\" style=\"text-indent:30.0pt;\">
	<span style=\"font-size:18px;\">感谢公司给了我这次学习的机会。学习就是洗脑，一种观念的转变！</span><span></span>
</p>
<p class=\"MsoNormal\" style=\"text-indent:30.0pt;\">
	<span style=\"font-size:18px;\">物业是什么？我片面的认为是保安、保洁、房屋维修等。一般人提起物业，就是跟业','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'116','column_id'=>'21','title'=>'培训学习心得（袁世红）','image'=>NULL,'description'=>'','author'=>'袁世红','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\">
	<span style=\"font-size:18px;\">&nbsp; &nbsp; &nbsp; &nbsp;通过这段时间的培训学习，使我了解了万科营销与服务之道、物业管理盈利模式即案例研讨、地产整体经营与战略成本管理，让我感受最深的有五点：</span><span style=\"font-si','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'117','column_id'=>'21','title'=>'培训学习心得（余宏）','image'=>NULL,'description'=>'','author'=>'余宏','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"text-indent:22.5pt;\">
	<span style=\"font-size:18px;\"> 2015年</span><span style=\"font-size:18px;\">10</span><span style=\"font-size:18px;\">月底，我有幸参加了汉江集团在深圳中兴培训基地举行的“汉江集团','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'118','column_id'=>'21','title'=>'培训学习心得（杨玉林）','image'=>NULL,'description'=>'','author'=>'杨玉林','content'=>'<span id=\"Label_lr\">
<p class=\"MsoNormal\" style=\"text-indent:30.0pt;\">
	<span style=\"font-size:18px;\">为了转变管理人员思想观念，跟上时代步伐，提高管理人员的素质，提高管理人员的管理水平和能力，汉江集团公司在深圳举办了地产开发管理培训班，我有幸参加了这个培训班。感觉收获很多，学习了一些先进的管理和服务的理念、知识、方法，提高了思想认识。在培训中，公司学员严格遵守纪律、认真听讲、虚心请教、积极研讨，学员之间相','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'119','column_id'=>'21','title'=>'培训学习心得（杨宪斌）','image'=>NULL,'description'=>'','author'=>'杨宪斌','content'=>'<span id=\"Label_lr\">
<p class=\"MsoNormal\" style=\"text-indent:30.0pt;\">
	<span style=\"font-size:18px;\">集团公司于</span><span style=\"font-size:18px;\">10</span><span style=\"font-size:18px;\">月</span><span style=\"font-size:18px;\">26</span><span style=\"font-size:18','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'120','column_id'=>'21','title'=>'培训学习心得（汪玉红）','image'=>NULL,'description'=>'','author'=>'汪玉红','content'=>'<p class=\"MsoNormal\" style=\"text-indent:30.0pt;\">
	<span style=\"font-size:18px;\">根据集团公司《关于举办汉江集团地产开发管理培训班的通知》部人资﹝2015﹞187号文件精神，集团公司于</span><span style=\"font-size:18px;\">2015</span><span style=\"font-size:18px;\">年</span><span style=\"font-size:18px;\">10</spa','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'121','column_id'=>'21','title'=>'培训学习心得（唐宏文）','image'=>NULL,'description'=>'','author'=>'唐宏文','content'=>'<span id=\"Label_lr\">
<p class=\"MsoNormal\" align=\"left\" style=\"text-indent:30pt;background-color:#FFFEFD;\">
	<p class=\"MsoNormal\" align=\"left\" style=\"text-indent:30pt;background-color:#FFFEFD;\">
		<span style=\"font-size:18px;\">首先感谢公司给我这次宝贵的学习机会，让我有幸来到美丽的改革','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'122','column_id'=>'21','title'=>'树立客户忠诚度，打造企业服务品牌（孙丹农）','image'=>NULL,'description'=>'','author'=>'孙丹农','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\">
	<span style=\"font-size:18px;\">&nbsp; &nbsp; &nbsp; 此次在公司领导的精心组织安排下，参加了集团公司在深圳举办的“汉江集团地产开发管理培训班”。通过五天的学习，在战略、思路、服务三个方面感悟较为深刻，现就品牌发展历程与品牌发展模式、服务理念与服务实践、产品定位与差异化营销及成本管理这几个方面','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'123','column_id'=>'21','title'=>'培训学习心得（刘东）','image'=>NULL,'description'=>'','author'=>'刘东','content'=>'<p class=\"MsoNormal\" align=\"left\" style=\"text-indent:30pt;\">
	<span style=\"font-size:18px;\">10月</span><span lang=\"EN-US\" style=\"font-size:18px;\">26</span><span style=\"font-size:18px;\">日至</span><span lang=\"EN-US\" style=\"font-size:18px;\">30</span><span styl','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'124','column_id'=>'21','title'=>'培训学习心得（李刚）','image'=>NULL,'description'=>'','author'=>'李刚','content'=>'<p class=\"MsoNormal\" style=\"text-indent:30.0pt;\">
	<span style=\"font-size:18px;\">为不断提高物业管理水平，公司组织我们一行</span><span style=\"font-size:18px;\">20</span><span style=\"font-size:18px;\">人到深圳参加了集团公司开办的“地产开发管理培训班”的学习，学习主要是围绕了中国房地产行业的领跑者——万科的先进理念来进行的，通过一周紧张有序的参观和学习，让','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'125','column_id'=>'21','title'=>'培训学习心得（黄璞）','image'=>NULL,'description'=>'','author'=>'黄璞','content'=>'<p style=\"margin-left:0cm;text-indent:30.0pt;background:white;\">
	<span style=\"font-size:18px;\">汉江集团公司于</span><span style=\"font-size:18px;\">10</span><span style=\"font-size:18px;\">月</span><span style=\"font-size:18px;\">26</span><span style=\"font-size:18px;\"','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'126','column_id'=>'21','title'=>'培训学习心得（黄冠群）','image'=>NULL,'description'=>'','author'=>'黄冠群','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" align=\"left\" style=\"text-indent:24pt;\">
	<span style=\"font-size:18px;\"> </span> 
</p>
<p class=\"MsoNormal\" align=\"left\" style=\"text-indent:24pt;\">
	<spa','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'127','column_id'=>'21','title'=>'培训学习心得（胡雪松）','image'=>NULL,'description'=>'','author'=>'胡雪松','content'=>'<p class=\"MsoNormal\" style=\"text-indent:30.0pt;\">
	<span style=\"font-size:18px;\">本次培训班主要通过高剑、孙凡、王金升三位老师对现在房地产、物业的发展及相关管理的讲授、参观万科的科研基地和小区的学习，取得一定的收获。</span><span></span>
</p>
<p class=\"MsoNormal\" style=\"text-indent:30.0pt;\">
	<span style=\"font-size:18px;\">','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'128','column_id'=>'21','title'=>'物业服务就是营销（高原）','image'=>NULL,'description'=>'','author'=>'高原','content'=>'<p class=\"MsoNormal\" style=\"text-indent:30.0pt;\">
	<span style=\"font-size:18px;\">10月</span><span style=\"font-size:18px;\">25</span><span style=\"font-size:18px;\">至</span><span style=\"font-size:18px;\">31</span><span style=\"font-size:18px;\">日，我有幸参加了集团公司组织的地产开','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'129','column_id'=>'21','title'=>'培训学习心得（高绶天）','image'=>NULL,'description'=>'','author'=>'高绶天','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" align=\"left\" style=\"text-indent:30pt;\">
	<span style=\"font-size:18px;\">经集团公司的精心策划与博远置业公司的关心爱护，我非常荣幸的参加了汉江集团地产开发管理培训班，于</span><span style=\"font-size:18px;\">2015</span><span style=\"font-size:18p','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'130','column_id'=>'21','title'=>'培训学习心得（陈皓）','image'=>NULL,'description'=>'','author'=>'陈皓','content'=>'<span style=\"font-family:宋体;\"> </span>
<p style=\"margin:0cm 0cm 0pt;text-indent:30pt;mso-char-indent-count:2.0;\">
	<span style=\"font-family:仿宋_GB2312;font-size:15pt;\">随着集团公司房地产开发市场化日趋成熟，物业管理与服务专业化需求日益迫切，在这一形势之下，人力资源部择机开展地产开发管理培训班，组织集团公司与地产开发、物业管理业务相关部门人员<','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'131','column_id'=>'21','title'=>'龙山宾馆开展服务礼仪基础培训工作','image'=>NULL,'description'=>'','author'=>'贾韵','content'=>'<p>
	<span style=\"font-size:18px;\">&nbsp;&nbsp;&nbsp;&nbsp; 为提升服务质量，增强员工服务意识，为宾客提供更温馨周到的服务，近日，龙山宾馆抓住日常工作间隙，在工作人员中开展仪容仪表、规范举止等基础服务礼仪强化培训。</span><br />
<span style=\"font-size:18px;\">&nbsp;&nbsp;&nbsp;&nbsp; 此次培训首先进行了服务礼仪的基础理论学习，使员工对服务礼仪有全面的了解，并结合当前实际工作要求，对员','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'132','column_id'=>'21','title'=>'龙山宾馆技能竞赛参赛选手刻苦训练','image'=>NULL,'description'=>'','author'=>'贾韵','content'=>'<p>
	&nbsp; &nbsp; &nbsp; &nbsp;<span style=\"font-size:18px;\">2015年湖北省生活服务业技能竞赛即将开赛，宾馆高度重视，全力备赛，组织参赛人员每日加强训练。</span>
</p>
<p>
	<span style=\"font-size:18px;\">&nbsp; &nbsp; &nbsp; &nbsp;参赛选手</span><span style=\"font-size:18px;\">争分夺秒复习相关专业理论知识，利用上班空余时间和下班时间着重','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'133','column_id'=>'21','title'=>'物业服务企业的定位思考','image'=>NULL,'description'=>'','author'=>'黄璞','content'=>'<p style=\"text-indent:30pt;background:white;\" class=\"reader-word-layerreader-word-s1-4\">
	<span style=\"line-height:150%;font-family:仿宋_GB2312;font-size:15pt;\">在当代市场经济时代，人们对生活品质和居住条件的追求日益提高，</span><span style=\"line-height:150%;font-family:仿宋_GB2312;backgro','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'134','column_id'=>'21','title'=>'物业服务企业的品牌建设研讨','image'=>NULL,'description'=>'','author'=>'黄冠群','content'=>'<p style=\"text-align:left;text-indent:39pt;\" class=\"MsoNormal\" align=\"left\">
	<span style=\"line-height:150%;font-family:仿宋_GB2312;font-size:15pt;\">品牌是企业的无形资产，也是企业赢得市场的利刃。品牌效应已成为物业服务企业的奋斗目标和发展方向。物业服务品牌具有强大的市场效应，能使企业不断成长壮大，能为企业带来经济利益和社会影响力，能够在当今市场不确定因素不断增加的','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'135','column_id'=>'21','title'=>'关于物业企业多元化发展格局的探讨','image'=>NULL,'description'=>'','author'=>'孙丹农','content'=>'<p class=\"MsoNormal\">
	<span style=\"font-family:仿宋_GB2312;color:black;font-size:15pt;\">&nbsp;&nbsp; 近年来，物业的工作内容</span><span style=\"font-family:仿宋_GB2312;color:black;font-size:15pt;\">大多数只是管理与服务，而对物业经营的问题考虑较少。随着行业的发展，精细服务和多元化经营必定是物业发展的趋势。</span><span style=','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'136','column_id'=>'21','title'=>'物业服务企业创新和商业模式探讨','image'=>NULL,'description'=>'','author'=>'高绶天','content'=>'<p style=\"text-indent:28.5pt;\">
	<span style=\"font-family:仿宋_GB2312;font-size:15pt;\">当前，物业服务企业创新和物业商业模式转型这一发展课题已成为国内物业管理行业持续关注的一个热点和焦点，物业管理服务形式不断创新，商业模式也在不断地发生着改变，逐渐从单一走向多元，从传统走向现代，从满足业主的基本需要走向满足业主的深层需要。那么，博远物业如何创新和实现商业模式转型呢？面对这一课题，我们必须不断地拷问自己：谁是我们的客户？我们能','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'137','column_id'=>'21','title'=>'物业企业如何介入社区养老服务','image'=>NULL,'description'=>'','author'=>'周江','content'=>'<p style=\"text-indent:33pt;background:white;\">
	<span style=\"font-family:仿宋_GB2312;font-size:15pt;\">“目前中国是世界上唯一一个老年人口过亿的国家，且正在以每年<span>3</span>％以上的速度快速增长，是同期人口增速的<span>5</span>倍多。”为了应对老龄化社会的挑战，我国各个城市都积极推进与探索社区养老服务，以至于社区养老服务事业发展态势迅猛。物业企业也开始介入社区养老服务，但由于开展时间','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'138','column_id'=>'21','title'=>'物业服务企业与客户关系的探讨','image'=>NULL,'description'=>'','author'=>'高 原','content'=>'<p style=\"text-indent:30pt;\" class=\"MsoNormal\">
	<span style=\"font-family:仿宋_GB2312;font-size:15pt;\">2015</span><span style=\"font-family:仿宋_GB2312;font-size:15pt;\">年<span>10</span>月，汉江集团地产开发管理培训班在深圳开班，五天的学习紧张而又丰富。三位业界精英深入浅出的授课，让我们开阔了眼界，改变了观念。物业服务企业如何处理与客户','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'139','column_id'=>'21','title'=>'中心车队举办导师带徒授课学习','image'=>NULL,'description'=>'','author'=>'聂国霞','content'=>'<p class=\"MsoNormal\">
	<span style=\"font-size:14pt;\"><span><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>12</span></span><span style=\"font-family:宋体;font-size:14pt;\">月</span><span style=\"font-size:14pt;\"><span>31</span></span><span style=\"font-family:宋体;fon','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'140','column_id'=>'21','title'=>'龙山宾馆参加省生活服务业职业技能竞赛创佳绩','image'=>NULL,'description'=>'','author'=>'黄阁','content'=>'<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:18px;\">2015年12月27日-28日，湖北省生活服务业职业技能竞赛在武汉市九洲通衢大酒店举办,本次竞赛由省商务厅、省人力资源和社会保障厅、省总工会联合主办。 </span>
</p>
<p>
	<span style=\"font-size:18px;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style=\"font-siz','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'141','column_id'=>'21','title'=>'武汉参赛见闻与收获','image'=>NULL,'description'=>'','author'=>'刘爽','content'=>'<p style=\"text-indent:21pt;\" class=\"MsoNormal\">
	<span style=\"font-family:SimSun;font-size:18px;\"><span style=\"font-family:SimSun;font-size:18px;\">2015</span></span><span style=\"font-family:SimSun;font-size:18px;\">年</span><span style=\"font-family:SimSun;f','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'142','column_id'=>'21','title'=>'武汉参赛感想','image'=>NULL,'description'=>'','author'=>'陆海荣','content'=>'<p style=\"text-indent:28pt;\" class=\"MsoNormal\">
	<span><span style=\"font-family:SimSun;font-size:18px;\">2015</span><span style=\"font-family:\"微软雅黑\", \"sans-serif\";font-size:14pt;\"><span style=\"font-family:SimSun;font-size:18px;\">年</span><span style=\"font-fa','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'143','column_id'=>'21','title'=>'赴武汉参加技能竞赛感想','image'=>NULL,'description'=>'','author'=>'余涛','content'=>'<p style=\"text-indent:28pt;\" class=\"MsoNormal\">
	<span style=\"font-family:SimSun;font-size:18px;\">2015</span><span style=\"font-family:仿宋_GB2312;font-size:14pt;\"><span style=\"font-family:SimSun;font-size:18px;\">年</span><span style=\"font-family:SimSun;font-','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'144','column_id'=>'21','title'=>'武汉技能比赛参后感','image'=>NULL,'description'=>'','author'=>'刘莉','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-family:SimSun;font-size:18px;\">2015年12月26日，我随宾馆领导及另外四名同事一行十人去武汉参加了第十九届湖北省生活服务业职业技能竞赛。经过了笔试、实操（面试）两个环节的比赛，我们取得了两个特金奖、两个金奖的好成绩。 </span>
</p>
<p>
	<span style=\"font-family:SimS','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'145','column_id'=>'21','title'=>'大坝景区管理处到车队学习先进经验','image'=>NULL,'description'=>'','author'=>'王敏','content'=>'<span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-size:18px;font-family:SimSun;line-height:150%;\">1</span><span style=\"font-size:18px;font-family:SimSun;line-height:150%;\">月</span><span style=\"font-size:18px;font-family:SimSu','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'146','column_id'=>'21','title'=>'论综合性企业如何建立长效培训机制','image'=>NULL,'description'=>'','author'=>'办公室','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:12pt;font-family:宋体;\"><strong>本篇论文获集团公司</strong><strong>2013-2014年度职工教育培训优秀论文一等奖，请大家学习借鉴。</strong></span> 
<p class=\"MsoNormal\" style=\"text-align:left;text','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'147','column_id'=>'21','title'=>'汉江集团公司2016年职工教育培训工作成果研讨论文主题及要求','image'=>NULL,'description'=>'','author'=>'','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<div style=\"text-align:center;\">
	<img class=\"pic_cont_img\" style=\"height:706px;width:481px;\" alt=\"\" src=\"/upload/image/20160111/20160111101809_9326.png\" width=\"349\" height=\"487\" /> 
</div>
<di','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'148','column_id'=>'21','title'=>'液化气分公司创办“员工学习园地”','image'=>NULL,'description'=>'','author'=>'高绶天','content'=>'<p style=\"text-indent:28pt;\" class=\"MsoNormal\">
	<span style=\"font-family:SimSun;font-size:18px;\"><span style=\"font-family:SimSun;font-size:18px;\">1</span></span><span style=\"font-family:SimSun;font-size:18px;\">月</span><span style=\"font-family:SimSun;font','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'149','column_id'=>'21','title'=>'龙山宾馆开展散客点菜技巧专项培训','image'=>NULL,'description'=>'','author'=>'贾韵','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-size:18px;\">&nbsp; 针对客源结构由政务、商务接待逐步向散客转变的新局面，龙山宾馆于1月19日下午开展散客点菜技巧专项培训，旨在通过培训切实提高餐饮服务人员的排菜、点菜技巧和服务水平，用更优质的服务争取更多的大众消费。</span>
</p>
<p>
	<span style=\"font-s','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'150','column_id'=>'21','title'=>'“供给侧改革背景下全域旅游”专题讲座学习心得','image'=>NULL,'description'=>'','author'=>'高然','content'=>'<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-family:SimSun;font-size:18px;\">首先，感谢公司给予我去十堰市学习“供给侧改革背景下全域旅游”专题讲座的机会，这次学习使我受益匪浅，并有很多感触，现汇报如下： </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp;&nbsp;</span><span sty','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'151','column_id'=>'21','title'=>'纪实片《不变的步伐》观后感','image'=>NULL,'description'=>'','author'=>'王敏','content'=>'<span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:18px;color:#2b2b2b;\">2016</span><span style=\"color:#2b2b2b;\"><span style=\"font-size:18px;\">年</span><span style=\"font-size:18px;\">1</span><span style=\"font-size:18px;\">月</span>','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'152','column_id'=>'21','title'=>'学习提升新气象 班组展示显风采','image'=>NULL,'description'=>'','author'=>'李文涛','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	<span style=\"font-size:14pt;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2</span><span style=\"font-size:14pt;font-family:宋体;\">月</span><span style=\"font-size:14pt;\">4</span><span style=\"font-size:14pt;font-family:宋体','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'153','column_id'=>'21','title'=>'武汉分公司开展“卫生消杀”培训','image'=>NULL,'description'=>'','author'=>'刘亚奇','content'=>'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14pt;font-family:宋体;line-height:150%;\">随着近日气温升高，蚊、蝇四害将逐渐增多，为保持物业管理区域清洁，确保为业主营造洁净、舒适的环境，</span><span style=\"font-size:14pt;line-height:150%;\">3</span><span style=\"font-size:14pt;','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'154','column_id'=>'21','title'=>'共读文化故事 发扬优良传统','image'=>NULL,'description'=>'','author'=>'高然','content'=>'<span id=\"Label_lr\"> 
<p>
	<span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<span style=\"font-size:18px;font-family:SimSun;line-height:250%;\">3</span><span style=\"font-size:14pt;font-family:宋体;line-height:250%;\"><sp','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'155','column_id'=>'21','title'=>'大坝景区讲解班开展春季岗位技能培训','image'=>NULL,'description'=>'','author'=>'陈正麟','content'=>'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:18px;font-family:SimSun;line-height:150%;\">3</span><span style=\"font-size:14pt;font-family:宋体;line-height:150%;\"><span style=\"font-size:18px;font-family:SimSun;\">月</span><span style=\"font-s','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'156','column_id'=>'21','title'=>'“首席技师大讲堂”开课','image'=>NULL,'description'=>'','author'=>'甘润','content'=>'<span id=\"Label_lr\"> 
<p>
	<span style=\"font-size:18px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp;&nbsp;3月9日下午2:00，公司（中心）“首席技师大讲堂”在大坝景区会议室开课。 </span>
</p>
<p>
	<span style=\"font-size:18px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp; 此次讲堂由财务劳资部举办，首席技师杨建丹主讲，课程内容为驾驶技','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'157','column_id'=>'21','title'=>'白鹤滩水电站水土保持监测项目部举行野外生存急救<br />及安全知识培训','image'=>NULL,'description'=>'','author'=>'曾文杰','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> <span style=\"font-size:18px;font-family:SimSun;color:black;line-height:150%;\">3</span><span style=\"font-size:18px;font-family:SimSun;color:black;line-height:150%;\">月</span><span style=\"font-size','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'158','column_id'=>'21','title'=>'大坝景区开启春季岗位技能培训','image'=>NULL,'description'=>'','author'=>'郭军辉、王敏','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><span><span><span><span style=\"font-size:14pt;font-family:宋体;\">围绕岗','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'159','column_id'=>'21','title'=>'龙山宾馆开展总台员工岗位晋升技能考核','image'=>NULL,'description'=>'','author'=>'贾韵','content'=>'<span id=\"Label_lr\"> 
<p>
	<span style=\"font-size:18px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp; 近日，龙山宾馆进行了总台员工岗位晋升技能考核。 </span>
</p>
<p>
	<span style=\"font-size:18px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp; 此次考核，宾馆总台有4名员工申请从初级工晋升为中级工。宾馆针对总台的岗位特点，把总台员工分为实习期、','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'160','column_id'=>'21','title'=>'基层工会财务知识','image'=>NULL,'description'=>'','author'=>'','content'=>'<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbs','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'161','column_id'=>'21','title'=>'物业管理分公司开展物业管理知识培训','image'=>NULL,'description'=>'','author'=>'宛英','content'=>'<span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14pt;font-family:宋体;\">为进一步强化服务意识，提高服务质量，物业管理分公司组织全体员工于</span><span style=\"font-size:14pt;\">3</span><span style=\"font-size:14pt;font-family:宋体;\">月</span><span style=\"font-size:','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'162','column_id'=>'21','title'=>'襄阳分公司开展保洁岗位培训','image'=>NULL,'description'=>'','author'=>'汤爱珍','content'=>'<p>
	<span style=\"font-size:16pt;font-family:宋体;background:white;color:black;\">&nbsp;&nbsp;&nbsp; <span style=\"font-size:18px;font-family:SimSun;\">3</span></span><span style=\"font-size:16pt;font-family:宋体;background:white;color:black;\"><span style=\"font-s','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'163','column_id'=>'21','title'=>'武汉分公司组织员工进行企业文化和礼仪培训','image'=>NULL,'description'=>'','author'=>'王雪培','content'=>'<span id=\"Label_lr\"><span class=\"apple-converted-space\"><SPAN style=\"FONT-SIZE: 13.5pt; FONT-FAMILY: \" 微软雅黑?,sans-serif;background:#fcfcfc;color:#333333;?><span style=\"font-size:small;font-family:Tahoma;color:#000000;background-color:#ffffff;\"><span style','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'164','column_id'=>'21','title'=>'小车队开展车辆四季保养知识培训','image'=>NULL,'description'=>'','author'=>'李晓沛','content'=>'<span id=\"Label_lr\"> 
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; <span style=\"font-family:SimSun;font-size:18px;\">小车队按照2016年岗位技能培训计划，于3月24日、30日在丹江、武汉分别开展了车辆四季保养知识培训。 </span> 
	<p>
		<span style=\"font-family:SimSun;font-size:1','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'165','column_id'=>'21','title'=>'中心车队进行随车吊实际操作培训','image'=>NULL,'description'=>'','author'=>'聂国霞','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 随车吊是博远公司绿化工程、树木吊运、花箱吊运的主要工具用车，中心车队为能更好的服务于博远公司的生产，使车队的每一位驾驶员都能够正确、熟练的掌握随车吊操作，于 3月29日下午举办了随车吊实际操作培训。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nb','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'166','column_id'=>'21','title'=>'首席技师工作室召开工作例会','image'=>NULL,'description'=>'','author'=>'聂国霞','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 2016年3月30日下午，首席技师工作室召开工作例会，小车队、中心车队负责人和驾驶员参加了会议。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 会上，首席技师杨建丹同志带领大家学习了《首席技师工作室管理办法》、《首席技师工作室职责及任务》','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'167','column_id'=>'21','title'=>'财务劳资部组织“营改增”税务政策培训','image'=>NULL,'description'=>'','author'=>'邓玉玲','content'=>'<span id=\"Label_lr\"> 
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 2016年5月1日起将全面推开营业税改征增值税试点，财务劳资部分别于3月26日、28日、30日通过大成方略网络视频课堂组织部门财务人员及相关单位核算人员进行“营改增”税务政策培训。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&n','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'168','column_id'=>'21','title'=>'园林绿化工程公司开展水土保持技术规范培训考试','image'=>NULL,'description'=>'','author'=>'湛汉溪','content'=>'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:12pt;font-family:&quot;Times New Roman&quot;,serif;line-height:150%;\">3</span><span style=\"font-size:12pt;font-family:宋体;line-height:150%;\">月</span><span style=\"font-size:12pt;font-family:&quot;T','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'169','column_id'=>'21','title'=>'又是一年清明时','image'=>NULL,'description'=>'一名龙山宾馆新员工清明节所感','author'=>'唐雪仪','content'=>'<span id=\"Label_lr\"> 
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 燕子传言莺送信，过了春风就是情牵意惹的清明了。花木芳香，草长莺飞，怎奈一句清明时节雨纷纷，路上行人欲断魂，使得“清明”二字在文字深处更增添了几分烟雨迷蒙的感觉。作为宾馆的新员工，第一次参与清明小长假工作，不禁产生很多感慨。 </span>
</p>
<p>
	<span style=\"font-family:SimSu','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'170','column_id'=>'21','title'=>'公司组织参加遥感监测野外解译技术培训','image'=>NULL,'description'=>'','author'=>'','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp;&nbsp;4月6日，长江委水土保持监测中心站在龙山宾馆开展全国水土流失动态监测与公告项目野外解译技术集中办公研讨。得知这个</span><span style=\"font-family:SimSun;font-size:18px;\">信息后，公司主动联系了中心站，组织园林绿化工程分公司、松涛山庄管理处及相关人员20人参加了研讨培训。 </span>
</p>
<','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'171','column_id'=>'21','title'=>'兄弟单位手拉手  业务技术传帮带','image'=>NULL,'description'=>'——小车队技师走进大坝景区运输部开展业务交流','author'=>'王敏','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> <span style=\"font-size:18px;font-family:SimSun;line-height:150%;\">4</span><span style=\"font-size:18px;font-family:SimSun;line-height:150%;\">月</span><span style=\"font-size:18px;font-family:SimSun','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'172','column_id'=>'21','title'=>'授之以鱼不如授之以渔','image'=>NULL,'description'=>'------小车队走进大坝景区运输部系列报道二','author'=>'高然','content'=>'<span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14pt;\">4</span><span style=\"font-size:14pt;font-family:宋体;\">月</span><span style=\"font-size:14pt;\">11</span><span style=\"font-size:14pt;font-family:宋体;\">日</span><span style=\"fo','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'173','column_id'=>'21','title'=>'中心车队开展技师讲课活动','image'=>NULL,'description'=>'','author'=>'聂国霞','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp;&nbsp;4月12日下午，中心车队按照年初培训计划，开展技师讲课活动。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp;&nbsp;此次培训由刘凯技师主讲，主要从四个方面进行了讲解：高速公路驾驶注意事项及行车技巧，汽车涡轮增压工作原理，汽车轮','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'174','column_id'=>'21','title'=>'公司开展服务礼仪培训','image'=>NULL,'description'=>'','author'=>'','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp;&nbsp;4月13日晚7点，公司（中心）在龙山宾馆二楼报告厅开展了服务礼仪培训，来自各单位（部门）的119名员工参加了此次培训。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 此次培训由龙山宾馆贾韵主讲。龙山宾馆高度重视这次培训，在正式开','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'175','column_id'=>'21','title'=>'松涛山庄与龙山宾馆开展技术交流活动','image'=>NULL,'description'=>'','author'=>'杨春','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 4月17日上午，龙山宾馆工程部工作人员一行5人在部长周江的带领下来到松涛山庄进行业务技术交流活动. </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 龙山宾馆工程部工作人员与松涛山庄维修人员一同对山庄2号、3号楼主要设备设施的运行状况进行例行','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'176','column_id'=>'21','title'=>'首席技师工作室开展学习活动','image'=>NULL,'description'=>'','author'=>'常嫘','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 4月26日下午，车队首席技师工作室在小车队二楼组织开展了学习活动，小车队和中心车队在丹的16名员工参加了学习。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 本次学习由首席技师杨建丹主持，学习内容为《关于办理醉酒驾驶机动车刑事案件适用法律','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>NULL,'updated_at'=>NULL]);
        $this->insert('{{%cms_article}}',['id'=>'269','column_id'=>'25','title'=>'共读 共写 共提升','image'=>NULL,'description'=>'——博远公司团委组织开展“书香汉江 践行梦想”主题读书月暨读书征文活动','author'=>'沈丽娅','content'=>'<span id=\"Label_lr\"><span style=\"font-size:16px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp; 博远公司团委积极响应集团公司团委号召，有效推进学习型企业建设，引导公司广大职工爱读书、多读书、读好书，营造崇尚学习、重视学习、坚持学习的浓厚氛围，开展了以“书香汉江&nbsp;&nbsp; 践行梦想”为主题的读书活动。 </span> 
<div>
	<span style=\"font-size:16px;font-family:S','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1431273600','updated_at'=>'1431273600']);
        $this->insert('{{%cms_article}}',['id'=>'270','column_id'=>'25','title'=>'植树节，我们在行动','image'=>NULL,'description'=>'','author'=>'沈丽娅','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; 细柳复苏始于人，万物萌芽源于春。3月12日上午，在第37个植树节到来之际由汉江集团团委发起的义务植树活动在左岸坝下护坡处蓬勃开展，我单位作为坝前区环境整治的施工单位，也积极参与配合，做好坝区绿化美化。
</p>
<p>
	&nbsp; &nbsp; &nbsp; 在活动现场，有的职工在指导植树队伍培土、浇水，有的在协助扶树、回填；有的在捡拾土中石块，一片劳动的火热景象。栽植的桂花树、银杏、月季等或成团成簇、或整','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1426176000','updated_at'=>'1426176000']);
        $this->insert('{{%cms_article}}',['id'=>'271','column_id'=>'25','title'=>'大坝景区管理处召开青年员工座谈会','image'=>NULL,'description'=>'','author'=>'王敏、王艺玮','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1514304000','updated_at'=>'1514304000']);
        $this->insert('{{%cms_article}}',['id'=>'272','column_id'=>'25','title'=>'白鹤滩水电站水土保持监测项目部开启“两学一做”学习教育','image'=>NULL,'description'=>'','author'=>'曾文杰','content'=>'<p><span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 4月24日，白鹤滩水电站水土保持监测项目部利用下班后时间，逐条逐句诵读《中国共产党章程》、《中国共产党廉洁自律准则》、《中国共产党纪律处分条例》，开启“两学一做”学习教育。 </span></p><p><span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 同时，项目部5位青</span></p>','link'=>'','sort'=>'0','view'=>'0','position'=>'0','seo_key'=>'','seo_content'=>'','status'=>'1','created_at'=>'1461513600','updated_at'=>'1577181571']);
        $this->insert('{{%cms_article}}',['id'=>'276','column_id'=>'28','title'=>'博远公司2015年职工排球赛圆满结束','image'=>NULL,'description'=>'','author'=>'沈丽娅','content'=>'<span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5月20日至6月4日，博远公司工会组织开展了职工排球比赛。
<div>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 本次比赛共有9支代表队参加。在比赛中，各参赛队选手挥汗赛场，密切配合、比技能、拼意志、赛风格，比赛高潮迭起，扣人心弦，加油助威声、鼓励喝彩声充满了整个赛场，到处充满燃烧的激情，到处洋溢着友爱祥和的氛围。参赛单位也高度重视，提','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1433779200','updated_at'=>'1433779200']);
        $this->insert('{{%cms_article}}',['id'=>'277','column_id'=>'28','title'=>'博远置业公司工会荣获长江委“全江先进基层工会”','image'=>NULL,'description'=>'','author'=>'王青','content'=>'<span id=\"Label_lr\">&nbsp;&nbsp;
<ul>
	<li style=\"font-size:12px;\">
		<div id=\"thetext\" style=\"font-size:14px;text-align:justify;\">
			<div>
				&nbsp; &nbsp; 近日，博远置业公司被中国农林水利工会长江委员会授予“全江先进基层工会”荣誉称号。
			</div>
			<p>
				&nbsp;&nbsp;&nbsp;&nbsp;博远置业公司工会紧密','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1431446400','updated_at'=>'1431446400']);
        $this->insert('{{%cms_article}}',['id'=>'278','column_id'=>'28','title'=>'博远置业公司工会召开2015年工作会议','image'=>NULL,'description'=>'','author'=>'王青','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;3月26日，博远置业公司召开工会2015年工作会议，公司工会委员、基层工会主席、机关部门负责人参加了会议，公司党委书记、经理王森林应邀参会，并对进一步推进2015年工会工作提出了指导意见。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;会上，公司工会主席谭本文做了题为《围绕中心，强化服务，共建和谐——为促进企业健康稳步发展做出新贡献》的工作报告，对工会组织建设、职工参与民','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1427299200','updated_at'=>'1427299200']);
        $this->insert('{{%cms_article}}',['id'=>'279','column_id'=>'28','title'=>'武汉分公司开展“三八”活动','image'=>NULL,'description'=>'','author'=>'李敏','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; 3月8日下午，武汉分公司在武汉塔子湖尚湖熙园售楼中心休闲区开展了“迎三八女员工”健身活动。
</p>
<p>
	&nbsp; &nbsp; &nbsp; 看！一场热闹地踢毽子活动正开展得热火朝天，那红色的毽儿上下跳动，可就是不肯落不下来，女职工们虽然穿着工作布鞋，一样风采奕奕、毫不逊色，裁判拿着表计时，旁边围观的同事兴致勃勃的正在计数，不远处还有候赛的女员工，一点不受干拢默默的在一旁练习。紧张的比赛在欢笑中很快','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1426003200','updated_at'=>'1426003200']);
        $this->insert('{{%cms_article}}',['id'=>'280','column_id'=>'28','title'=>'服务管理中心开展庆“三八”健身活动','image'=>NULL,'description'=>'','author'=>'王青','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; 阳春三月，万物复苏，服务管理中心热烈开展庆祝“三八”国际劳动妇女节健身活动。
</p>
<p>
	&nbsp; &nbsp; &nbsp; 3月6日下午3点，坝前公园球场一派热闹景象。中心副主任谭本文首先代表中心对女职工为企业发展做出的各项工作表示感谢，向女职工致以节日的祝贺和诚挚的问候。
</p>
<p>
	&nbsp; &nbsp; &nbsp; 运动会上，比赛精彩纷呈，计时跳绳、踢毽球比赛、套圈、托球跑等','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1425830400','updated_at'=>'1425830400']);
        $this->insert('{{%cms_article}}',['id'=>'281','column_id'=>'28','title'=>'龙山宾馆开展“关爱江河，保护水源”三八妇女节主题活动','image'=>NULL,'description'=>'','author'=>'贾韵','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp;3月6日上午，为庆祝“三八”妇女节，龙山宾馆精心组织全馆女员工开展了“关爱江河，保护水源”主题活动。
</p>
<p>
	&nbsp; &nbsp; &nbsp;宾馆女员工50余人先来到丹江口水利枢纽展览馆，通过影视资料、图片、模型及讲解员的生动讲解，详细了解了丹江口大坝的建设历史，了解南水北调工程调水路线、水量、水质、移民及丹江口大坝加高工程的情况。接着大家又来到了丹江口大坝进行了实地参观，不但领略了大坝威武雄','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1425830400','updated_at'=>'1425830400']);
        $this->insert('{{%cms_article}}',['id'=>'282','column_id'=>'28','title'=>'商贸联合工会开展“三月女人天，靓丽妇女节”主题趣味活动','image'=>NULL,'description'=>'','author'=>'彭翠兰','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; 春上柳梢风景秀，人面桃花相映红。为庆祝第105个“三八”国际妇女节，3月4日上午，商贸联合工会在羊山路液化气站院内开展了“三月女人天，靓丽妇女节”主题趣味活动。
</p>
<p>
	&nbsp; &nbsp; &nbsp; 本次活动项目有“双腿夹球跳”、“跳棋比赛”、“踢毽球比赛”、“保龄球比赛”等。活动前，商贸联合支部书记高绶天发表简短的节日致辞，他向女职工致以节日的问候，并充分肯定了在过去的一年里，广大女职','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1425484800','updated_at'=>'1425484800']);
        $this->insert('{{%cms_article}}',['id'=>'283','column_id'=>'28','title'=>'龙山宾馆举行迎新春活动','image'=>NULL,'description'=>'','author'=>'兰云','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; 春节的脚步越来越近了，为了丰富员工的文体生活，培养其团结、拼搏的精神，2月13日、14日，龙山宾馆开展了踢毽球、拔河比赛迎接新年。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;在龙山宾馆院子里，随着裁判的一声“开始”，员工们用娴熟的技巧将毽球牢牢地控制住，如同跳跃的音符，仿佛总舍不得离开钢琴家的手指似的，大家都被赛场的气氛所感染，有的大声呐喊，有的跃跃欲试。本次毽球比赛共组了九个队','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1423929600','updated_at'=>'1423929600']);
        $this->insert('{{%cms_article}}',['id'=>'284','column_id'=>'28','title'=>'武汉分公司开展迎新春员工趣味活动','image'=>NULL,'description'=>'','author'=>'黄冠群','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp; 2月7日，武汉分公司在尚湖熙园营销中心草坪举行迎新春员工趣味活动。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp; 活动伊始，李刚代表分公司表示，2014年全体员工付出了很多艰辛和汗水，得到了汉江宏升公司的认可和信赖，感谢大家的支持和奉献，希望大家玩得开心，喜迎新年。活动正值冰雪消融、春暖花开之际，大家积极参与，场上一片欢声笑语。
</p>
<p>
	&nbsp; &n','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1423497600','updated_at'=>'1423497600']);
        $this->insert('{{%cms_article}}',['id'=>'285','column_id'=>'28','title'=>'山水庭院小区保安拾金不昧','image'=>NULL,'description'=>'','author'=>'袁世红','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp;2月6日早上8点左右，正值山水庭院小区业主匆忙出门上班上学之际，人来车往，东大门门岗保安胡富生拾到手机一部，并及时交还给遗失业主，这种行为值得肯定。
</p>
<p>
	<br />
	<div style=\"text-align:center;\">
		<img class=\"pic_cont_img\" alt=\"\" src=\"/upload/image/20150618/20150618113848_0612','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1423152000','updated_at'=>'1423152000']);
        $this->insert('{{%cms_article}}',['id'=>'286','column_id'=>'28','title'=>'博远置业公司工会开展文体活动喜迎新春','image'=>NULL,'description'=>'','author'=>'王青','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;2月3日，博远置业公司工会在松涛山庄健身基地举行迎新春文体活动，共180余名职工参加。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;此次活动分为乒乓球、保龄球、跳绳接力、众人一条心四项比赛。比赛既考验团队合作，也充分展示个人风采，突出了“趣味”与“合作”的主题。各参赛队精心安排人选，积极商量对策，齐心协力完成比赛，人人积极踊跃，体育馆内笑声、喝彩声不断。龙山宾馆通过机智','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1423065600','updated_at'=>'1423065600']);
        $this->insert('{{%cms_article}}',['id'=>'287','column_id'=>'28','title'=>'博远置业公司职工排球赛开赛','image'=>NULL,'description'=>'','author'=>'王青','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; 5月20日下午5点，准备多日的职工排球赛在坝前公司球场正式开赛，公司领导来到比赛现场，为参赛队员鼓劲加油，预祝比赛取得圆满成功。
</p>
<p>
	<br />
	<div style=\"text-align:center;\">
		<img class=\"pic_cont_img\" alt=\"\" src=\"/upload/image/20150618/20150618172150_0602.jpg\" /> 
	</div','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1432224000','updated_at'=>'1432224000']);
        $this->insert('{{%cms_article}}',['id'=>'288','column_id'=>'28','title'=>'公司女排获得亚军','image'=>NULL,'description'=>'','author'=>'王青','content'=>'<span id=\"Label_lr\">
<p>
	&nbsp; &nbsp; &nbsp; 7月9日，集团公司2015年职工排球赛落下帷幕，公司女排获得亚军。
</p>
<p>
	&nbsp; &nbsp; &nbsp; 此次排球比赛从6月26日开始，历时14天。公司女队以小组赛第一名的成绩进入半决赛，又以3：1的成绩战胜丹瑞炭素公司女队进入决赛。7月9日下午，与铝业公司女队进行了一场高水平的冠军争夺战，最终获得女组亚军的成绩。
</p>
<p>
	&nbsp; &nbsp; &nbsp;&nbsp;同','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1436716800','updated_at'=>'1436716800']);
        $this->insert('{{%cms_article}}',['id'=>'289','column_id'=>'28','title'=>'公司工会组织开展职工代表培训','image'=>NULL,'description'=>'','author'=>'王青','content'=>'<span id=\"Label_lr\"> 
<p>
	<span style=\"font-size:18px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style=\"font-size:18px;font-family:SimSun;\">为进一步提高公司的民主管理和民主监督水平，更好的发挥职工代表的作用，提高职工代表参政议政能力，8月13日，公司工会组织开展职工代表培训。 </span>
</p>
<p>
	<span style=','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1439481600','updated_at'=>'1439481600']);
        $this->insert('{{%cms_article}}',['id'=>'290','column_id'=>'28','title'=>'在汉江集团第二届“最美一线职工”表彰座谈会上的交流发言<br />（纪必攀）','image'=>NULL,'description'=>'','author'=>'纪必攀','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1513526400','updated_at'=>'1513526400']);
        $this->insert('{{%cms_article}}',['id'=>'291','column_id'=>'28','title'=>'公司召开第二届职代会第六次会议','image'=>NULL,'description'=>'','author'=>'杨宪斌','content'=>'<p class=\"MsoNormal\">
	<span style=\"font-family:仿宋_GB2312;font-size:16pt;\">&nbsp;&nbsp;&nbsp; <span style=\"font-family:SimSun;font-size:18px;\">11月10日上午，公司第二届职代会第六次</span></span><span style=\"font-family:SimSun;font-size:18px;\">会议</span><span style=\"font-fa','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1447171200','updated_at'=>'1447171200']);
        $this->insert('{{%cms_article}}',['id'=>'292','column_id'=>'28','title'=>'速度与激情','image'=>NULL,'description'=>'公司开展柑桔装箱劳动竞赛','author'=>'王青','content'=>'<span id=\"Label_lr\"> 
<p style=\"text-align:justify;text-indent:28pt;margin-left:0pt;\" class=\"MsoNormal\">
	<span style=\"font-family:宋体;font-size:18px;\">11月14日，在公司花木山果园，一场充满速度与激情、分工与协作的柑桔装箱劳动竞赛正在各单位之间上演。</span><span style=\"font-family:宋体;font-size:14pt;\"></','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1447689600','updated_at'=>'1447689600']);
        $this->insert('{{%cms_article}}',['id'=>'293','column_id'=>'28','title'=>'公司工会荣获全江先进职工之家称号','image'=>NULL,'description'=>'','author'=>'王青','content'=>'<p style=\"text-align:justify;text-indent:32pt;margin-left:0pt;\" class=\"MsoNormal\">
	<span style=\"font-family:SimSun;font-size:18px;\">日前，博远置业公司工会被长江委授予“全江先进职工之家”荣誉称号，同时，物业管理分公司、商贸分公司被授予“全江先进职工小家“荣誉称号。</span><span style=\"font-family:仿宋_GB2312;font-size:16pt','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1448467200','updated_at'=>'1448467200']);
        $this->insert('{{%cms_article}}',['id'=>'294','column_id'=>'28','title'=>'公司获汉江集团职代会制度评估考核先进单位','image'=>NULL,'description'=>'','author'=>'王青','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span style=\"font-family:宋体;font-size:14pt;\"><span style=\"font-family:Tahoma;font-size:small;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>近日，在汉江集团公司<span>2014-2015</span>年度厂务公开民主管理工作和职代会制度评估考核中，博远置业公司工会被评为先进单位。<spa','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1450108800','updated_at'=>'1450108800']);
        $this->insert('{{%cms_article}}',['id'=>'295','column_id'=>'28','title'=>'大坝景区、公安分局举办迎双节排球联谊赛','image'=>NULL,'description'=>'','author'=>'郭军辉','content'=>'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14pt;line-height:150%;\">12</span><span style=\"font-size:14pt;font-family:宋体;line-height:150%;\">月</span><span style=\"font-size:14pt;line-height:150%;\">25</span><span style=\"font-size:14pt;fo','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1451318400','updated_at'=>'1451318400']);
        $this->insert('{{%cms_article}}',['id'=>'296','column_id'=>'28','title'=>'拾金不昧  感动你我','image'=>NULL,'description'=>'','author'=>'唐丽娜','content'=>'<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"line-height:150%;font-family:SimSun;color:black;font-size:18px;\">2016</span><span style=\"line-height:150%;font-family:仿宋_GB2312;color:black;font-size:12pt;\"><span style=\"font-family:SimSun;font-size:1','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1452182400','updated_at'=>'1452182400']);
        $this->insert('{{%cms_article}}',['id'=>'297','column_id'=>'28','title'=>'“热热闹闹”迎新春','image'=>NULL,'description'=>'公司组织开展迎新春文体活动','author'=>'王青','content'=>'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<span style=\"font-family:宋体;font-size:14pt;\">一元复始，万象更新。<span>1</span>月<span>28</span>日，公司（中心）领导和广大员工相聚在松涛山庄健身基地进行文体活动喜迎新春。<span></span></span> 
<p style=\"text-indent:28pt;\" class=\"MsoNormal\">
	<span style=\"font-f','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1453996800','updated_at'=>'1453996800']);
        $this->insert('{{%cms_article}}',['id'=>'298','column_id'=>'28','title'=>'武汉分公司开展“迎新春”趣味活动','image'=>NULL,'description'=>'','author'=>'王雪培','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:18px;font-family:SimSun;\">1</span><span style=\"font-size:14pt;font-family:宋体;\"><span style=\"font-size:18px;font-family:SimSun;\">月</span><span style=\"font-size:18p','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1454256000','updated_at'=>'1454256000']);
        $this->insert('{{%cms_article}}',['id'=>'299','column_id'=>'28','title'=>'服务管理中心巾帼志愿劳动迎“三八”节','image'=>NULL,'description'=>'','author'=>'王青','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<span style=\"font-family:SimSun;font-size:18px;\">3</span><span style=\"font-family:仿宋_GB2312;font-size:16pt;\"><span style=\"font-family:SimSun;font-size:18px;\">月','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1457366400','updated_at'=>'1457366400']);
        $this->insert('{{%cms_article}}',['id'=>'300','column_id'=>'28','title'=>'公司女职工获长江委表彰','image'=>NULL,'description'=>'','author'=>'','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-family:SimSun;font-size:18px;\">3</span><span style=\"font-family:SimSun;font-size:18px;\">月</span><span style=\"font-family:SimSun;font-size:18px;\">7</span><','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1458057600','updated_at'=>'1458057600']);
        $this->insert('{{%cms_article}}',['id'=>'301','column_id'=>'28','title'=>'公司开展基层工会财务专题培训<br /><br />','image'=>NULL,'description'=>'','author'=>'王青','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp;&nbsp;3月17日，公司开展基层工会财务专题培训，各基层工会主席、工会工作人员、各单位联络员参加了培训。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 培训课上，工会会计王玮作为主讲老师，从工会经费的性质、收支管理原则、收入范围、支出范','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1458489600','updated_at'=>'1458489600']);
        $this->insert('{{%cms_article}}',['id'=>'302','column_id'=>'28','title'=>'在现场——争做“漂亮大坝”的形象传播者','image'=>NULL,'description'=>'','author'=>'','content'=>'<p align=\"center\">
	<span id=\"Label_lr\"><embed src=\"http://player.youku.com/player.php/sid/XMTUwNzMwNTE4NA==/v.swf\" type=\"application/x-shockwave-flash\" width=\"550\" height=\"400\" autostart=\"false\" loop=\"true\" /></span>
</p>','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1458576000','updated_at'=>'1458576000']);
        $this->insert('{{%cms_article}}',['id'=>'307','column_id'=>'26','title'=>'机关组织学习《职工违纪违规行为处分规定试行》','image'=>NULL,'description'=>'','author'=>'沈丽娅','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6月8日下午，机关召开全体干作人员会议，集中学习《汉江水利水电(集团)有限责任公司职工违纪违规行为处分规定(试行)》。
<div>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 该规定于2015年6月3日由汉江集团第三届职工代表大会第十二次会议审议通过，旨在严肃纪律，加强管理，规范职工行为。本次集中学','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1433779200','updated_at'=>'1433779200']);
        $this->insert('{{%cms_article}}',['id'=>'308','column_id'=>'26','title'=>'商贸联合党支部流动课堂开课了','image'=>NULL,'description'=>'','author'=>'李红云','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp; 为推进创建“示范基层党组织”工作，加强学习型党组织建设，商贸联合党支部的流动课堂于6月2日、5日、8日下午分别在冷冻液化气分公司、加油站、商贸分公司进行了开课学习。
<div>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 此次学习，主要围绕支部党务建设、基层团队管理、生产安全教育','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1433779200','updated_at'=>'1433779200']);
        $this->insert('{{%cms_article}}',['id'=>'309','column_id'=>'26','title'=>'大坝景区党支部开展“捐赠助学献爱心”党日活动','image'=>NULL,'description'=>'','author'=>'王敏','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp; 在“六一”儿童节，大坝景区管理处党支部组织景区党支部开展了以“捐赠助学献爱心”为主题的党日活动，推进基层示范党支部创建工作。支部一行8人走进凉水河油坊沟小学，为孩子们送去了文具、书籍、体育用品和一些衣物。
<div>
	&nbsp;&nbsp;&nbsp; 凉水河油坊沟小学是团中央关爱农民工子女项目专员首个帮扶学校，现有老师12人，学生90多人，分1','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1433174400','updated_at'=>'1433174400']);
        $this->insert('{{%cms_article}}',['id'=>'310','column_id'=>'26','title'=>'公司开展“书香汉江 践行梦想”主题读书交流活动','image'=>NULL,'description'=>'','author'=>'曾文杰','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<ul>
	<li style=\"font-size:12px;\">
		<div id=\"thetext\" style=\"font-size:14px;text-align:justify;\">
			<div>
				&nbsp; &nbsp; 5月28日上午，博远置业公司在三楼会议室开展“书香汉江 践行梦想”主题读书交流活动，参会代表结','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1433174400','updated_at'=>'1433174400']);
        $this->insert('{{%cms_article}}',['id'=>'311','column_id'=>'26','title'=>'博远公司召开示范基层党组织创建工作推进会','image'=>NULL,'description'=>'','author'=>'王青','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<ul>
	<li style=\"font-size:12px;\">
		<div id=\"thetext\" style=\"font-size:14px;text-align:justify;\">
			<div>
				&nbsp; &nbsp; &nbsp; 5月25日，博远公司召开示范基层党组织创建工作推进会，公司领导、基层党支部书记和','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1432828800','updated_at'=>'1432828800']);
        $this->insert('{{%cms_article}}',['id'=>'312','column_id'=>'26','title'=>'见证秀美水源 热爱秀美水源——服务管理中心离退部开展党日活动','image'=>NULL,'description'=>'','author'=>'姜志斌','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<ul>
	<li style=\"font-size:12px;\">
		<div id=\"thetext\" style=\"font-size:14px;text-align:justify;\">
			<div>
				&nbsp; &nbsp; &nbsp; &nbsp; 5月16日，服务管理中心离退部党总支组织部分爱好摄影的党员同志，开','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1431878400','updated_at'=>'1431878400']);
        $this->insert('{{%cms_article}}',['id'=>'313','column_id'=>'26','title'=>'商贸联合党支部开展廉政教育活动','image'=>NULL,'description'=>'','author'=>'李红云','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<ul>
	<li style=\"font-size:12px;\">
		<div id=\"thetext\" style=\"font-size:14px;text-align:justify;\">
			<div>
				&nbsp; &nbsp; &nbsp; &nbsp; 5月11日下午，商贸联合党支部组织党员、入党积极分子及关键岗位干部职工，围绕“守纪律、讲规矩、做表率”开展','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1431619200','updated_at'=>'1431619200']);
        $this->insert('{{%cms_article}}',['id'=>'314','column_id'=>'26','title'=>'公司组织学习<br />《习总书记关于党风廉政建设和反腐败斗争论述摘编》','image'=>NULL,'description'=>'','author'=>'沈丽娅','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5月5日上午，博远公司召开中心组学习(扩大)会议，集体学习《习近平总书记关于党风廉政建设和反腐败','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1430841600','updated_at'=>'1430841600']);
        $this->insert('{{%cms_article}}',['id'=>'315','column_id'=>'26','title'=>'机关支部组织观看反腐倡廉微电影','image'=>NULL,'description'=>'','author'=>'沈丽娅','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"> 
<ul>
	<li>
		<p>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 根据2015年“党风廉政建设宣传教育月”安排，为进一步推进反腐倡廉建设， 4月29日下午，机关全体工作人员集中观看了《等你回家》、《于成龙招标外传》、《一线之间》等3部反腐倡廉警示教育微电影。
		</p>
		<p>
			&nbsp; &nbsp; &nbsp; &nbsp;这些微电影以反腐倡廉为题材，以其特有的短小精','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1430668800','updated_at'=>'1430668800']);
        $this->insert('{{%cms_article}}',['id'=>'316','column_id'=>'26','title'=>'坝区环境管理处党支部开展坝前公园环境整治活动','image'=>NULL,'description'=>'','author'=>'李继红','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"> 
<ul>
	<li style=\"font-size:12px;\">
		<div id=\"thetext\" style=\"font-size:14px;text-align:justify;\">
			<div>
				&nbsp; &nbsp; &nbsp; &nbsp;为迎接“五一”节日的到来，4月30日，坝区环境管理党支部组织全体党员职工开展坝前公园环境整治活动。
			</div>
			<div>
				<','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1430668800','updated_at'=>'1430668800']);
        $this->insert('{{%cms_article}}',['id'=>'317','column_id'=>'26','title'=>'公司开展采茶竞赛党日活动','image'=>NULL,'description'=>'','author'=>'王青','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<ul>
	<li style=\"font-size:12px;\">
		<div id=\"thetext\" style=\"font-size:14px;text-align:justify;\">
			<div>
				&nbsp; &nbsp; &nbsp;&nbsp; 4月23日、4月28日公司党委先后两次组织采茶竞赛党日活动，保证了汉','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1430323200','updated_at'=>'1430323200']);
        $this->insert('{{%cms_article}}',['id'=>'318','column_id'=>'26','title'=>'龙山宾馆党支部开展主题党日活动','image'=>NULL,'description'=>'','author'=>'周江','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp;4月16日～20日，龙山宾馆党支部组织党员及入党积极分子，对宾馆水泵房罐体、管道及室外净化水罐体进行防腐处理，开展了一次促安全生产的党日活动。
</p>
<p>
	&nbsp; &nbsp; &nbsp; 4月份，宾馆在定期开展的安全隐患排查中，发现工程部内4个储压罐的罐体出现漆面起泡、开裂、脱落现象，既不符合消防检查要求，也影响罐体安全。根据这种情况，宾馆党支部组织党员及入党积极分子，对宾馆水泵房罐体、管道及室','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1429545600','updated_at'=>'1429545600']);
        $this->insert('{{%cms_article}}',['id'=>'319','column_id'=>'26','title'=>'公司完成习总书记系列重要讲话和党的十八届四中全会精神答题活动','image'=>NULL,'description'=>'','author'=>'王青','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; “参赛人数221人；100分以上48人；平均分85分”3月28日，随着长江委直属机关党委主办的网上答题活动平台关闭，公司圆满完成了长江委学习习近平总书记系列重要讲话和党的十八届四中全会精神网上答题活动。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;为深入学习贯彻习近平总书记系列重要讲话和党的十八届四中全会精神，创新理论学习方式，推进学习型党组','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1428595200','updated_at'=>'1428595200']);
        $this->insert('{{%cms_article}}',['id'=>'320','column_id'=>'26','title'=>'离退服务部积极开展党员培训工作','image'=>NULL,'description'=>'','author'=>'张余','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;3月下旬以来，离退服务部根据公司党委安排，积极开展党员轮训工作, 组织党员认真学习社会主义核心价值观和公司领导王森林在2015年工作会上的报告，宣讲集团公司和公司（中心）当前面临的形势和任务。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;目前离退休党总支共有八个支部，下属党员480余人。这些党员居住分散，既有在外地的，也有身体不好','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1427644800','updated_at'=>'1427644800']);
        $this->insert('{{%cms_article}}',['id'=>'321','column_id'=>'26','title'=>'商贸联合党支部与坝区环境管理处党支部开展党日活动','image'=>NULL,'description'=>'','author'=>'李书林','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;为消除安全隐患和美化环境，3月28日上午，商贸联合党支部与坝区环境管理处党支部利用双休时间开展了党日活动，合力整治液化气站外围环境，来自两个支部的党员和职工共20余人参加了本次活动。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;此次环境整治活动主要对液化气罐区周边进行灌木丛砍除、枯枝清理和花','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1427644800','updated_at'=>'1427644800']);
        $this->insert('{{%cms_article}}',['id'=>'322','column_id'=>'26','title'=>'商贸联合支部布置落实党员轮训工作','image'=>NULL,'description'=>'','author'=>'唐宏文','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;3月20日下午，商贸联合党支部布置落实了支部党员轮训工作，支部全体党员、入党积极分子和支部所属单位的干部参加了学习。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;会上，支部书记高绶天传达了博远置业公司党委《博远置业公司党委关于开展2015年度党员轮训评议工作的通知》的精神，并根据党员轮训学习内容，组织党员学习了《中国共产党发展党员细则》、《胡甲均同志在集团公司2015年','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1427385600','updated_at'=>'1427385600']);
        $this->insert('{{%cms_article}}',['id'=>'323','column_id'=>'26','title'=>'为小区增绿 为党旗添彩 ——公司开展2015年植草坪党日活动','image'=>NULL,'description'=>'','author'=>'沈丽娅','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; 3月24日下午，博远置业公司组织在山水庭院开展2015年植草坪党日活动，来自博远机关、各基层单位的职工和离退休老同志200余人参加了本次活动。
</p>
<p>
	&nbsp; &nbsp; 又是一年播绿时，前两天的春雨下得正及时，当日又暖阳高照，正是植草坪的好时机。','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1427126400','updated_at'=>'1427126400']);
        $this->insert('{{%cms_article}}',['id'=>'324','column_id'=>'26','title'=>'车队联合党支部安排部署党员轮训工作','image'=>NULL,'description'=>'','author'=>'蒋丽','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp;3月23日下午，车队联合党支部安排部署党员轮训工作，并开展了全体党员学习活动。
</p>
<p>
	&nbsp; &nbsp; &nbsp;会上，支部书记孙欢民向全体党员传达了博远置业公司党委《关于开展2015年度党员轮训评议工作的通知》的精神，并结合党员轮训内容，组织党员学习了《中国共产党发展党员工作细则》、2015年全国“两会”精神、胡甲均同志在集团公司2015年党风廉政建设工作会议上的讲话等。本次学习活动为','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1427126400','updated_at'=>'1427126400']);
        $this->insert('{{%cms_article}}',['id'=>'325','column_id'=>'26','title'=>'晴天忙生产   雨天抓学习','image'=>NULL,'description'=>'','author'=>'沈丽娅','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp;3月18日，在博远置业公司的会议室里，所有领导干部和中层管理人员们集中在一起，聚精会神的学习《中国共产党发展党员工作细则》、2015 年全国“两会”精神和《习近平谈治国理政》。这是博远置业公司根据近期天气情况合理安排，组织干部们进行雨天“充电”。
</p>
<p>
	&nbsp; &nbsp; 今年以来，博远置业公司紧紧围绕经管目标和','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1426608000','updated_at'=>'1426608000']);
        $this->insert('{{%cms_article}}',['id'=>'326','column_id'=>'26','title'=>'公司开展集体廉政谈话   促进干部廉洁自律','image'=>NULL,'description'=>'','author'=>'办公室','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;3月4日下午，博远置业公司2014年度领导干部集体廉政谈话在公司办公楼三楼会议室开展，公司领导和中层管理人员参加了会议。公司党委书记王森林主持会议并作了讲话。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;会上，首先学习了《习近平在十八届中央纪委五次全会上发表重要讲话精神》，并传达了集团公司2015年党风廉政建议会议精神，然后，王森林书记从适应反腐倡廉新形势的要求出发，结','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1425484800','updated_at'=>'1425484800']);
        $this->insert('{{%cms_article}}',['id'=>'327','column_id'=>'26','title'=>'龙山宾馆党支部开展党日活动','image'=>NULL,'description'=>'','author'=>'黄阁','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;2月13日龙山宾馆党支部在委托管理点水源公司职工食堂开展了以“服务在一线”为主题的党日活动。龙山宾馆党员、入党积极分子等15人参加了活动。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;临近春节，水源公司的职工从各地回丹，职工就餐人数上升到80人左右，比平时增加了一倍多。工作量徒然增加，而食堂人手短缺，忙不过来。龙山宾馆党支部以开展党日活动的形式，组织党员等进行大力支援。','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1424016000','updated_at'=>'1424016000']);
        $this->insert('{{%cms_article}}',['id'=>'328','column_id'=>'26','title'=>'大坝景区管理处召开职工民主恳谈会','image'=>NULL,'description'=>'','author'=>'郭军辉','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;2月5日下午，大坝景区管理处在支部书记刘东的主持下召开了全体职工民主恳谈会。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;刘东书记首先传达了集团公司工作会、党建会的会议精神，总结了大坝景区在资源整合后的半年里所做的成绩及不足之处，提出了大坝景区在2015年应该努力的方向和需要达到的目标，同时请景区职工畅所欲言谈谈对领导班子及成员的看法和意见，对景区规划发展的想法和建议。','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1423411200','updated_at'=>'1423411200']);
        $this->insert('{{%cms_article}}',['id'=>'329','column_id'=>'26','title'=>'公司召开2014年党员领导干部民主生活会','image'=>NULL,'description'=>'','author'=>'王青','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; 按照集团公司统一部署，2015年1月29日，博远置业公司以“严格党内生活，严守党的纪律，深化作风建设”为主题，召开了2014年度领导班子民主生活会，会议由党委书记、经理王森林主持。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;会上，王森林首先向与会人员通报了2014年公司领导干部民主生活会召开前的各项准备情况，并代表公司领导班子进行对照检查，围绕贯彻执行民主集中制情况，遵守党的政治','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1422460800','updated_at'=>'1422460800']);
        $this->insert('{{%cms_article}}',['id'=>'330','column_id'=>'26','title'=>'大坝景区党支部与机关党支部开展迎新春联谊活动','image'=>NULL,'description'=>'','author'=>'王敏','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;1月22日的下午，大坝景区党支部与博远公司机关党支部联合开展了一次别开生面的联谊活动，大坝景区职工、机关工作人员及各单位支部书记参加了此次活动。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;活动之前，大家兴致勃勃参观了工程展览馆，游览了丹江口大坝。随后，联谊会在景区接待中心正式拉开了帷幕。首先亮相的是班组风采展示表演，7位身着标准制服的员工一出场就吸引了全场观众的目光，','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1421942400','updated_at'=>'1421942400']);
        $this->insert('{{%cms_article}}',['id'=>'331','column_id'=>'26','title'=>'公司召开中心组扩大学习会','image'=>NULL,'description'=>'','author'=>'王青','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;1月12日全天，公司党委组织召开了中心组（扩大）学习会议，会议由党委书记王森林主持，公司领导班子、科级干部共40人参加了会议。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;会上集中学习了《习近平在党的群众路线教育实践活动总结大会上的讲话》、《中国共产党党员领导干部廉洁从政若干准则》、《关于领导干部报告个人事项规定》、《习近平谈治国理政》等内容，还组织收看了警示教育片《贪','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1421164800','updated_at'=>'1421164800']);
        $this->insert('{{%cms_article}}',['id'=>'332','column_id'=>'26','title'=>'龙山宾馆开展“践行党的群众路线，争当服务先锋”主题党日活动','image'=>NULL,'description'=>'','author'=>'陆海荣','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; 1月9日，在支部书记李进的带领下，龙山宾馆党员、入党积极分子、骨干人员20余人前往委托管理项目地税局食堂和招待所进行新年卫生大扫除，开展“践行党的群众路线，争当服务先锋”主题党日活动。
</p>
<p>
	&nbsp; &nbsp; &nbsp; 活动中大家分工明确，工作热情高涨。在保障安全的前提下，克服困难，对招待所和食堂门厅的玻璃顶、外墙的窗户、地面、护栏都进行了认真仔细地清洗，并且对庭院里的盆景绿植进行艺','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1421164800','updated_at'=>'1421164800']);
        $this->insert('{{%cms_article}}',['id'=>'333','column_id'=>'26','title'=>'关于学习“学思践悟”相关文章的通知','image'=>NULL,'description'=>'','author'=>'办公室','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><a class=\"ke-insertfile\" href=\"/upload/file/20150618/20150618171208_1188.doc\" target=\"_blank\">关于学习“学思践悟”相关文章的通知</a><br />
</span></span></span></span>','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1431014400','updated_at'=>'1431014400']);
        $this->insert('{{%cms_article}}',['id'=>'334','column_id'=>'26','title'=>'商贸联合支部加强宣传阵地建设','image'=>NULL,'description'=>'','author'=>'李书林','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14pt;\">2015</span><span style=\"font-size:14pt;font-family:宋体;\">年</span><span style=\"font-size:14pt;\">6</span><span style=\"font-si','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1434643200','updated_at'=>'1434643200']);
        $this->insert('{{%cms_article}}',['id'=>'335','column_id'=>'26','title'=>'公司党委书记上“三严三实”专题党课','image'=>NULL,'description'=>'','author'=>'沈丽娅','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-size:16px;\">6</span><span style=\"font-size:16px;\">月</span><span style=\"font','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1435161600','updated_at'=>'1435161600']);
        $this->insert('{{%cms_article}}',['id'=>'336','column_id'=>'26','title'=>'商贸联合支部组织党日活动纪念7.1建党节','image'=>NULL,'description'=>'','author'=>'李红云','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; 7月1日，是中国共产党建党94周年纪念日，是我们全体党员的节日。为了庆祝这具有纪念意义的一天，商贸联合党支部组织开展了丰富多彩的党日活动。
</p>
<p>
	&nbsp; &nbsp; &nbsp; 一是向支部全体党员转发了共产党员微信“中央组织部向全国党员致以节日的祝贺”，以此表达对支部党','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1435766400','updated_at'=>'1435766400']);
        $this->insert('{{%cms_article}}',['id'=>'337','column_id'=>'26','title'=>'博远襄阳分公司和恒玖地产公司党员共度“七一”','image'=>NULL,'description'=>'','author'=>'汤爱珍','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14pt;font-family:楷体;background:white;color:black;\">2015</span><span style=\"font-size:14pt;font-family:','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1435766400','updated_at'=>'1435766400']);
        $this->insert('{{%cms_article}}',['id'=>'338','column_id'=>'26','title'=>'商贸联合党支部开展上半年度民主评议工作','image'=>NULL,'description'=>'','author'=>'李红云','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span style=\"font-size:15pt;font-family:宋体;\"><span style=\"font-size:small;font-family:Tahoma;\"><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7</span><span style=\"font-size:15pt;font-family:宋体;\">月初，在商贸联合支部党员活','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1437580800','updated_at'=>'1437580800']);
        $this->insert('{{%cms_article}}',['id'=>'339','column_id'=>'26','title'=>'小车队组织观看纪录片《大国工匠》','image'=>NULL,'description'=>'','author'=>'蒋丽','content'=>'<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:18px;\">2015年7月22日下午，小车队组织全体党员、职工观看了纪录片《大国工匠》。 </span> 
	<p>
		<span style=\"font-size:18px;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 纪录片中《大国工匠》中播出的这八名工匠，是奋斗在生产第一线的杰出劳动者的代表，他们以聪明才智、敬业勤勉，书写着一线劳动者的不平凡，他们','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1437580800','updated_at'=>'1437580800']);
        $this->insert('{{%cms_article}}',['id'=>'340','column_id'=>'26','title'=>'大坝景区管理处职工清洗安全帽','image'=>NULL,'description'=>'','author'=>'王敏','content'=>'<span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"text-indent:28.5pt;\">
	<span style=\"font-size:18px;font-family:宋体;\">正值高温酷暑季节，针对安全帽多汗渍污垢现象，大坝景区管理处党支部于</span><span style=\"font-size:18px;\">7</span><span style=\"font-size:18px;font-family:宋体;\">月</span><span ','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1437926400','updated_at'=>'1437926400']);
        $this->insert('{{%cms_article}}',['id'=>'341','column_id'=>'26','title'=>'离退服务部开展“三严三实”学习宣讲活动<br />','image'=>NULL,'description'=>'','author'=>'张余','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<div>
	&nbsp; &nbsp; &nbsp; &nbsp;7月30日，离退服务部组织召开“三严三实”学习宣讲活动，离退服务部部长熊建程带头作了宣讲。<br />
&nbsp; &nbsp; &nbsp; 熊建程同志首先介绍了公司党委“三严三实”活动开展情况，接着结合离退工作就严以修身、强化学习谈了自己的看法和体会，他要求大家在工作中要“懂感恩、识大体、知进退、晓廉耻”,要严','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1438531200','updated_at'=>'1438531200']);
        $this->insert('{{%cms_article}}',['id'=>'342','column_id'=>'26','title'=>'公司围绕“严以修身”开展专题研讨','image'=>NULL,'description'=>'','author'=>'王青','content'=>'<span id=\"Label_lr\">&nbsp;&nbsp;
<p class=\"MsoNormal\" style=\"text-indent:30pt;\">
	<span style=\"font-size:18px;font-family:仿宋_GB2312;\">7</span><span style=\"font-size:15pt;font-family:仿宋_GB2312;\"><span style=\"font-size:18px;\">月</span><span style=\"font-size:','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1438531200','updated_at'=>'1438531200']);
        $this->insert('{{%cms_article}}',['id'=>'343','column_id'=>'26','title'=>'车队联合党支部开展环境整治党日活动','image'=>NULL,'description'=>'','author'=>'蒋丽','content'=>'<p>
	&nbsp; &nbsp; &nbsp; 根据公司《关于开展环境卫生整治和“除四害”工作通知》的精神，8月5日上午，车队联合党支部开展环境整治党日活动，组织党员、群众对车队值班室后墙靠近龙山宾馆南门的坡地行了环境整治。
</p>
<p>
	&nbsp; &nbsp; &nbsp; 整治区域是杂草丛生的卫生死角，遍地都是垃圾、落叶，清理工作任务繁重。大家分工明确，相互合作，党员发挥带头作用，不顾天气炎热、蚊虫叮咬，不怕脏、不怕累，争先恐后，干劲十足。经过集中整治清理，该区域面貌得到了有效改善。
<','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1438790400','updated_at'=>'1438790400']);
        $this->insert('{{%cms_article}}',['id'=>'344','column_id'=>'26','title'=>'大坝景区管理处开展“三严三实”专题研讨会','image'=>NULL,'description'=>'','author'=>'王敏','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;8月18日，大坝景区管理处党支部在景区二楼办公室，组织全体党员及积极分子开展了“三严三实”专题研讨会。
</p>
<p>
	&nbsp; &nbsp; &nbsp; 会上，首先学习了“三严三实”推荐文章《建制度、立规矩，着力解决党内存在的“不严不实”问题》，党员同志们就文章中提出的“不严不实”的几个具体表现，并结合自己岗位上的工作实际，谈了自己的想法与建议，希望支部工作能紧紧围绕生产经营中心，推动旅','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1439827200','updated_at'=>'1439827200']);
        $this->insert('{{%cms_article}}',['id'=>'345','column_id'=>'26','title'=>'公司党委召开中心组（扩大）学习会','image'=>NULL,'description'=>'','author'=>'沈丽娅','content'=>'<span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<span style=\"font-size:18px;font-family:SimSun;\">8</span><span style=\"font-family:仿宋_GB2312;\"><span style=\"font-size:18px;font-family:SimSun;\">月</span><span style=\"font-size:18px;font-family:S','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1440000000','updated_at'=>'1440000000']);
        $this->insert('{{%cms_article}}',['id'=>'346','column_id'=>'26','title'=>'车队联合党支部开展禁烟活动','image'=>NULL,'description'=>'','author'=>'','content'=>'<p>
	&nbsp; &nbsp; &nbsp; 车队联合党支部根据博远司办〔2015〕25号《关于印发〈博远置业公司、服务管理中心、旅游发展公司创建无烟单位实施方案〉的通知》精神，结合车队实际，在车队辖区内开展禁烟活动。
</p>
<p>
	&nbsp; &nbsp; &nbsp; 为切实加强禁烟活动，车队联合党支部专门成立由党支部书记、党小组长、控烟骨干组成的领导小组；制定了切实可行的禁烟实施方案，以党小组为单位，组织职工开展多种形式的控烟宣传和健康教育；并在车场、值班室、车库、仓库、楼道、休息室等','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1440604800','updated_at'=>'1440604800']);
        $this->insert('{{%cms_article}}',['id'=>'347','column_id'=>'26','title'=>'博远公司积极创建无烟单位','image'=>NULL,'description'=>'','author'=>'王青','content'=>'<p style=\"text-indent:32pt;\" class=\"MsoNormal\">
	<span style=\"font-family:SimSun;font-size:16px;\">为进一步落实控烟工作，巩固和提升文明单位文明形象，博远公司全面开展创建“无烟单位”活动。</span><span style=\"font-family:仿宋_GB2312;font-size:16pt;\"></span>
</p>
<p style=\"text-indent:32pt;\" class=\"MsoNo','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1441123200','updated_at'=>'1441123200']);
        $this->insert('{{%cms_article}}',['id'=>'348','column_id'=>'26','title'=>'公司党委召开支部党建品牌创建工作推进会','image'=>NULL,'description'=>'','author'=>'王青','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1512921600','updated_at'=>'1512921600']);
        $this->insert('{{%cms_article}}',['id'=>'349','column_id'=>'26','title'=>'博远置业公司党委召开学习贯彻党的十九大精神宣讲大会','image'=>NULL,'description'=>'','author'=>'','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1513008000','updated_at'=>'1513008000']);
        $this->insert('{{%cms_article}}',['id'=>'350','column_id'=>'26','title'=>'公司党委召开中心组（扩大）学习会<br />暨党建工作研讨会','image'=>NULL,'description'=>'','author'=>'刘发明','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1515427200','updated_at'=>'1515427200']);
        $this->insert('{{%cms_article}}',['id'=>'351','column_id'=>'26','title'=>'机关党支部召开组织生活会开展党员民主评议','image'=>NULL,'description'=>'','author'=>'王青','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1516032000','updated_at'=>'1516032000']);
        $this->insert('{{%cms_article}}',['id'=>'352','column_id'=>'26','title'=>'松涛山庄管理处党支部召开组织生活会','image'=>NULL,'description'=>'','author'=>'陈钢','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1515859200','updated_at'=>'1515859200']);
        $this->insert('{{%cms_article}}',['id'=>'353','column_id'=>'26','title'=>'争当红旗车手践行服务承诺','image'=>NULL,'description'=>'','author'=>'常嫘　王峰','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1516723200','updated_at'=>'1516723200']);
        $this->insert('{{%cms_article}}',['id'=>'354','column_id'=>'26','title'=>'公司党委中心组专题学习《习近平谈治国理政》','image'=>NULL,'description'=>'','author'=>'王青','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1517155200','updated_at'=>'1517155200']);
        $this->insert('{{%cms_article}}',['id'=>'355','column_id'=>'26','title'=>'公司党委开展2017年基层党支部党建工作<br />联述联评联考暨中层管理人员年度考核<br />','image'=>NULL,'description'=>'','author'=>'宛英','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1517760000','updated_at'=>'1517760000']);
        $this->insert('{{%cms_article}}',['id'=>'356','column_id'=>'26','title'=>'公司召开第二届职代会第五次会议','image'=>NULL,'description'=>'','author'=>'王青','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-family:SimSun;font-size:18px;\">9</span><span style=\"font-family:仿宋_GB2312;font-size:16pt;\"><span style=\"font-family:SimSun;font-size:18px;\">月</span><span ','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1441641600','updated_at'=>'1441641600']);
        $this->insert('{{%cms_article}}',['id'=>'357','column_id'=>'26','title'=>'公司召开中心组扩大学习暨“严于律已”专题研讨会','image'=>NULL,'description'=>'','author'=>'沈丽娅','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span style=\"font-size:18px;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9</span><span style=\"font-size:18px;\">月</span><span style=\"font-size:18px;\">8</span','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1441641600','updated_at'=>'1441641600']);
        $this->insert('{{%cms_article}}',['id'=>'358','column_id'=>'26','title'=>'公司开展2013-2015年度文明单位考评','image'=>NULL,'description'=>'','author'=>'王青','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:18px;font-family:SimSun;\">9</span><span style=\"font-size:16pt;font-family:仿宋_GB2312;\"><span style=\"font-size:18px;font-fami','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1443024000','updated_at'=>'1443024000']);
        $this->insert('{{%cms_article}}',['id'=>'359','column_id'=>'26','title'=>'齐手摆好美丽花   扮靓景区迎佳节','image'=>NULL,'description'=>'','author'=>'沈丽娅','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:18px;font-family:SimSun;\">9</span><span style=\"font-size:18px;font-family:SimSun;\">月</span><span style=\"font-size:18px;font-family:SimSun;\">24</span><span style=\"font-s','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1443024000','updated_at'=>'1443024000']);
        $this->insert('{{%cms_article}}',['id'=>'360','column_id'=>'26','title'=>'抓规范 树典范 创示范','image'=>NULL,'description'=>'博远置业公司党委大力推进示范基层党组织创建工作','author'=>'沈丽娅','content'=>'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:18px;font-family:SimSun;\">2015</span><span style=\"font-size:16pt;\"><span style=\"font-size:18px;font-family:SimSun;\">年，博远公司党委把示范基层党组织创建工作当成工作重点，从自身发展的实际出发，创新党建工作方式方法，以推进实施标准化党支部建设为抓手，有力地推进了党建工作与企业','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1444579200','updated_at'=>'1444579200']);
        $this->insert('{{%cms_article}}',['id'=>'361','column_id'=>'26','title'=>'扶贫济困，与爱同行<br />','image'=>NULL,'description'=>'——公司员工扶贫日爱心捐款1.1万余元','author'=>'王青','content'=>'<span id=\"Label_lr\"> 
<p style=\"text-indent:32pt;\" class=\"MsoNormal\">
	<span style=\"font-family:SimSun;font-size:18px;\">在全国第二个扶贫日暨国际第23个消除贫困日来临之际，公司广大员工响应号召，爱心捐款1.1万余元。</span><span style=\"font-family:仿宋_GB2312;font-size:16pt;\"></span> 
</p>
<p style=\"text','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1445443200','updated_at'=>'1445443200']);
        $this->insert('{{%cms_article}}',['id'=>'362','column_id'=>'26','title'=>'龙山宾馆党支部开展环境整治党日活动','image'=>NULL,'description'=>'','author'=>'','content'=>'<p style=\"text-align:left;\" class=\"MsoNormal\">
	<span style=\"font-style:normal;font-family:SimSun;color:#333333;font-size:16px;\">&nbsp;&nbsp;&nbsp; 10月27日上午，龙山宾馆党支部组织党员及骨干开展主楼后院卫生清扫党日活动。</span><span style=\"font-style:normal;font-family:微软雅黑;color:#333333;','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1445961600','updated_at'=>'1445961600']);
        $this->insert('{{%cms_article}}',['id'=>'363','column_id'=>'26','title'=>'公司召开中心组扩大学习暨“严于用权”专题研讨会','image'=>NULL,'description'=>'','author'=>'王青','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span style=\"font-size:18px;\">&nbsp; &nbsp; &nbsp; 11月9日，公司党委组织召开了中心组扩大学习会和“严以用权”研讨会，公司领导及中层管理人员、团委负责人参加了会议，集团公司纪委副书记朱矩亭到会指导。</span><br />
<span sty','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1447171200','updated_at'=>'1447171200']);
        $this->insert('{{%cms_article}}',['id'=>'364','column_id'=>'26','title'=>'汉江集团文明单位考核验收组来公司检查验收','image'=>NULL,'description'=>'','author'=>'王青','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p style=\"text-align:justify;text-indent:32pt;margin-left:0pt;\" class=\"MsoNormal\">
	<span style=\"font-family:SimSun;font-size:18px;\">1</span><span style=\"font-family:SimSun;font-size:18px;\">1月</span><span style=\"f','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1447171200','updated_at'=>'1447171200']);
        $this->insert('{{%cms_article}}',['id'=>'365','column_id'=>'26','title'=>'园林绿化工程分公司党支部开展“树木刷白，抵御寒冬”活动','image'=>NULL,'description'=>'','author'=>'纪必攀','content'=>'<p class=\"MsoNormal\" style=\"text-indent:28.0pt;\">
	<span style=\"font-size:18px;\">冬季来临，气温骤降，为切实做好坝区冬季绿化防寒工作，确保坝区左岸乔木顺利、安全过冬。园林绿化工程分公司党支部在丹全体党员、入党积极分子于</span><span style=\"font-size:18px;\">2015</span><span style=\"font-size:18px;\">年</span><span style=\"font-si','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1447862400','updated_at'=>'1447862400']);
        $this->insert('{{%cms_article}}',['id'=>'366','column_id'=>'26','title'=>'水电公司班组长培训班学员到松涛山庄劳动体验','image'=>NULL,'description'=>'','author'=>'夏术敏','content'=>'&nbsp;
<p style=\"text-indent:35pt;\" class=\"MsoNormal\">
	<span style=\"font-size:14pt;\">11</span><span style=\"font-family:宋体;font-size:14pt;\">月</span><span style=\"font-size:14pt;\">19</span><span style=\"font-family:宋体;font-size:14pt;\">日</span><span style=\"fo','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1448208000','updated_at'=>'1448208000']);
        $this->insert('{{%cms_article}}',['id'=>'367','column_id'=>'26','title'=>'博远公司汉江大厦服务人员联合开展党日活动','image'=>NULL,'description'=>'','author'=>'李敏','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14pt;\">12</span><span style=\"font-size:14pt;font-family:宋体;\">月</span><span style=\"font-size:14pt;\">10</span><span style=\"font-size:14pt;font-family:宋体;\">日下','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1450022400','updated_at'=>'1450022400']);
        $this->insert('{{%cms_article}}',['id'=>'368','column_id'=>'26','title'=>'公司党委召开《准则》《条例》中心组扩大学习会<br />','image'=>NULL,'description'=>'','author'=>'沈丽娅','content'=>'<span id=\"Label_lr\"> 
<p>
	<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:18px;font-family:SimSun;\">12</span><span style=\"font-size:18px;font-family:SimSun;\">月</span><span style=\"fon','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1450022400','updated_at'=>'1450022400']);
        $this->insert('{{%cms_article}}',['id'=>'369','column_id'=>'26','title'=>'公司党委接受示范基层党组织创建工作考评<br />','image'=>NULL,'description'=>'','author'=>'王青','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p style=\"text-indent:28pt;\" class=\"MsoNormal\">
	<span style=\"font-family:SimSun;font-size:18px;\">12</span><span style=\"font-family:宋体;font-size:14pt;\"><span style=\"font-family:SimSun;font-size:18px;\">月</span><spa','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1450886400','updated_at'=>'1450886400']);
        $this->insert('{{%cms_article}}',['id'=>'370','column_id'=>'26','title'=>'车队联合党支部开展“红旗车”评比表彰活动','image'=>NULL,'description'=>'','author'=>'蒋丽','content'=>'<span id=\"Label_lr\"> 
<p style=\"text-indent:28pt;\" class=\"MsoNormal\">
	<span style=\"font-family:宋体;font-size:14pt;\">为了更好地学习和宣扬典型，营造学先进、赶先进的浓厚氛围，车队联合党支部扎实开展“红旗车”评比表彰活动。<span></span></span> 
</p>
<p style=\"text-indent:28pt;\" class=\"MsoNormal\">
	<span style=','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1450972800','updated_at'=>'1450972800']);
        $this->insert('{{%cms_article}}',['id'=>'371','column_id'=>'26','title'=>'商贸联合党支部落实《准则》《条例》学习','image'=>NULL,'description'=>'','author'=>'李红云','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1451232000','updated_at'=>'1451232000']);
        $this->insert('{{%cms_article}}',['id'=>'372','column_id'=>'26','title'=>'关于进一步严明纪律确保廉洁过节的通知','image'=>NULL,'description'=>'','author'=>'','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;<span style=\"font-family:仿宋_GB2312;font-size:16pt;\">集团公司所属各单位、集团各成员单位纪委，直属机关纪委：<span></span></span> 
<p style=\"text-indent:32pt;\" class=\"MsoNormal\">
	<span style=\"font-family:仿宋_GB2312;font-size:16pt;\">日前，中共中央','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1451318400','updated_at'=>'1451318400']);
        $this->insert('{{%cms_article}}',['id'=>'373','column_id'=>'26','title'=>'公司党委认真学习贯彻十八届五中全会精神','image'=>NULL,'description'=>'','author'=>'','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-family:宋体;font-size:18px;\">1</span><span style=\"font-family:宋体;font-size:14pt;\"><span style=\"font-si','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1452441600','updated_at'=>'1452441600']);
        $this->insert('{{%cms_article}}',['id'=>'374','column_id'=>'26','title'=>'联合支部齐动手 襄阳武汉党旗红','image'=>NULL,'description'=>'','author'=>'李敏','content'=>'<span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:18px;font-family:NSimSun;\">1</span><span style=\"font-size:14pt;\"><span style=\"font-size:18px;font-family:NSimSun;\">月</span><span style=\"font-size:18px;font-family:NSimSu','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1452528000','updated_at'=>'1452528000']);
        $this->insert('{{%cms_article}}',['id'=>'375','column_id'=>'26','title'=>'博远公司：以党建服务企业中心工作','image'=>NULL,'description'=>'','author'=>'','content'=>'<span id=\"Label_lr\"><span style=\"font-size:18px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp;&nbsp; 以党建服务企业中心工作是博远公司一直在探索的一个重要课题。通过创新党建工作模式，加强党组织标准化建设等，博远公司党员队伍服务群众、服务基层、服务大局的能力持续提升，有效促进了公司生产经营各项任务目标的实现。</span> 
<p style=\"font-size:14px;\" align=\"center\">
	<span','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1452528000','updated_at'=>'1452528000']);
        $this->insert('{{%cms_article}}',['id'=>'376','column_id'=>'26','title'=>'互学互助，推动基层党建工作','image'=>NULL,'description'=>'','author'=>'李红云','content'=>'<p style=\"text-indent:21pt;\" class=\"MsoNormal\">
	<span style=\"font-family:宋体;font-size:14pt;\">&nbsp;<span style=\"font-family:SimSun;font-size:18px;\">新年伊始，在商贸联合党支部活动室，商贸联合党支部、大坝景区党支部、绿化工程分公司党支部共聚一堂，进行基层党建工作交流。</span></span><span style=\"font-family:SimSun;f','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1452700800','updated_at'=>'1452700800']);
        $this->insert('{{%cms_article}}',['id'=>'377','column_id'=>'26','title'=>'走基层  心交心  聚思想','image'=>NULL,'description'=>'商贸联合党支部开展联系群众工作','author'=>'李红云','content'=>'<span id=\"Label_lr\"> 
<p style=\"text-indent:21pt;\" class=\"MsoNormal\">
	<span style=\"font-family:宋体;font-size:14pt;\">&nbsp;为了进一步落实和发扬党组织密切联系群众的优良传统，团结广大党员和群众，保证商贸联合党支部以及支部各单位</span><span style=\"font-size:14pt;\"><span>2016</span></span><span style=\"font-fam','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1452787200','updated_at'=>'1452787200']);
        $this->insert('{{%cms_article}}',['id'=>'378','column_id'=>'26','title'=>'离退部召开“三严三实”专题组织生活会','image'=>NULL,'description'=>'','author'=>'王安成','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:15pt;\">1</span><span style=\"font-family:宋体;font-size:15pt;\">月</span><span style=\"font-size:15pt;\">15</span><span style=\"font-family:宋体;font-size:15pt;\">日下午','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1453132800','updated_at'=>'1453132800']);
        $this->insert('{{%cms_article}}',['id'=>'379','column_id'=>'26','title'=>'公司开展示范基层党组织创建考评','image'=>NULL,'description'=>'','author'=>'王青','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-family:仿宋_GB2312;font-size:16pt;\"><span style=\"font-family:SimSun;font-size:18px;\">为了进一步夯实党建工作基层，提升公司党建工作整体水平，近日，公司党委组成考评组对各党支部<','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1453737600','updated_at'=>'1453737600']);
        $this->insert('{{%cms_article}}',['id'=>'380','column_id'=>'26','title'=>'大坝景区党支部开展“扮靓景区”党日活动','image'=>NULL,'description'=>'','author'=>'艾海燕','content'=>'<p>
	<span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14pt;font-family:宋体;line-height:150%;\"><span style=\"font-size:18px;font-family:SimSun;\">为打造美丽坝区，营造浓厚节日气氛，大坝景区党支部组织开展了“党群齐动手，扮靓咱景区”为主题的党群活动。</span><span></span></span> </s','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1454342400','updated_at'=>'1454342400']);
        $this->insert('{{%cms_article}}',['id'=>'381','column_id'=>'26','title'=>'博远公司领导班子召开“三严三实”专题民主生活会','image'=>NULL,'description'=>'','author'=>'沈丽娅','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-family:SimSun;font-size:18px;\">根据集团公司安排部署，博远公司、服管中心、旅游公司领导班子于近日召开了</span><span style=\"font-family:SimSun;font-size:18px;\">“</span><span style=\"font-family','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1454342400','updated_at'=>'1454342400']);
        $this->insert('{{%cms_article}}',['id'=>'382','column_id'=>'26','title'=>'博远公司获集团公司2013-2015年度文明单位荣誉','image'=>NULL,'description'=>'','author'=>'王青','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-size:18px;font-family:SimSun;\">&nbsp;</span><span style=\"font-size:14pt;font-family:宋体;\"><span style=\"font-size:18px;font-family:SimSun;\">在集团公司</span><spa','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1455465600','updated_at'=>'1455465600']);
        $this->insert('{{%cms_article}}',['id'=>'383','column_id'=>'26','title'=>'强化技术措施，为坝区环境美化夯实基础','image'=>NULL,'description'=>'园林绿化工程分公司党支部开展党日活动','author'=>'曾文杰','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 迎着新年的喜庆，追随着春的脚步，结合坝区环境整治项目土壤较为贫瘠的情况，园林绿化工程分公司党支部于2月17日开展党日活动，组织在丹全体员工集中对近期要栽植玫瑰花的地块进行土壤改良的基础工作——播撒木屑、化肥。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbs','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1455724800','updated_at'=>'1455724800']);
        $this->insert('{{%cms_article}}',['id'=>'384','column_id'=>'26','title'=>'商贸联合党支部开展春节“走基层、送温暖”活动','image'=>NULL,'description'=>'','author'=>'李红云','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-family:SimSun;font-size:18px;\">大年三十上午9点，商贸联合党支部书记高绶天带领支部慰问小组前往支部单位液化气分公司、加油站、商贸分公司，对节日期间坚守一线岗位的同志进行了走访慰问。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1455724800','updated_at'=>'1455724800']);
        $this->insert('{{%cms_article}}',['id'=>'385','column_id'=>'26','title'=>'汉江大厦开展“清除杂草”党日活动','image'=>NULL,'description'=>'','author'=>'李刚','content'=>'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14pt;\">2</span><span style=\"font-size:14pt;font-family:宋体;\">月</span><span style=\"font-size:14pt;\">17</span><span style=\"font-size:14pt;font-family:宋体;\">日</span><span style=\"font-size:14pt;f','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1455724800','updated_at'=>'1455724800']);
        $this->insert('{{%cms_article}}',['id'=>'386','column_id'=>'26','title'=>'物业分公司党支部开展“清理楼顶、顶棚”党日活动<br />','image'=>NULL,'description'=>'','author'=>'宛英','content'=>'<span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14pt;font-family:宋体;\"><span style=\"font-size:18px;font-family:SimSun;\">随着冬末春初，天干物燥，是火灾多发季节，针对张家沟小区梧桐树枝繁叶茂，近年来楼顶积存大量枯枝落叶等垃圾杂物的状况，</span><span style=\"font-size:18px;font-f','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1456416000','updated_at'=>'1456416000']);
        $this->insert('{{%cms_article}}',['id'=>'387','column_id'=>'26','title'=>'襄阳分公司开展卫生清扫党日活动','image'=>NULL,'description'=>'','author'=>'汤爱珍','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span style=\"font-size:15pt;font-family:仿宋;background:white;color:black;\">&nbsp;&nbsp;&nbsp; 2</span><span style=\"font-size:15pt;font-family:仿宋;background:white;color:black;\">','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1456675200','updated_at'=>'1456675200']);
        $this->insert('{{%cms_article}}',['id'=>'388','column_id'=>'26','title'=>'“共建绿色水源地”——志愿者携手植树','image'=>NULL,'description'=>'','author'=>'王青','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:18px;\">&nbsp;<span style=\"font-size:16px;\">3月5日，博远置业公司、丹瑞碳素公司、水力发电厂组织志愿者开展以“共建绿色水源地”为主题的春季植树活动。</span></span','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1457107200','updated_at'=>'1457107200']);
        $this->insert('{{%cms_article}}',['id'=>'389','column_id'=>'26','title'=>'公司“团队文化故事集”打造优势文化','image'=>NULL,'description'=>'','author'=>'沈丽娅','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-family:SimSun;font-size:18px;\">近日，由博远置业公司编印的</span><span style=\"font-family:SimSun;font-size:18px;\">300</span><span style=\"font-f','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1457884800','updated_at'=>'1457884800']);
        $this->insert('{{%cms_article}}',['id'=>'390','column_id'=>'26','title'=>'商贸联合党支部开展美化环境党日活动','image'=>NULL,'description'=>'','author'=>'李红云','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:18px;font-family:SimSun;\">春暖花开，为了进一步美化职大校区环境，3月25日下午17：00商贸联合党支部开展了党日活动，着手整治职工大学健身房草坪的环境卫生，支部的党员参加了本次活动。 </span>
</p>
<p>
	<span style=\"font-size:18px;font-family:SimSu','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1459094400','updated_at'=>'1459094400']);
        $this->insert('{{%cms_article}}',['id'=>'391','column_id'=>'26','title'=>'公司开启“两学一做”学习教育','image'=>NULL,'description'=>'','author'=>'王青','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-family:SimSun;font-size:18px;\">4</span><span style=\"font-family:仿宋_GB2312;font-size:16pt;\"><span style=\"font-family:SimSun;font-','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1459958400','updated_at'=>'1459958400']);
        $this->insert('{{%cms_article}}',['id'=>'392','column_id'=>'26','title'=>'车队联合党支部开展“两学一做”学习教育活动','image'=>NULL,'description'=>'','author'=>'蒋丽','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp;&nbsp;4月7日下午，车队联合党支部党员围绕“学党章党规、学系列讲话、做合格党员”两学一做，开展学习教育活动，会议由组织委员陆建丹主持。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 会上，支部书记孙欢民结合自己学习“两学一做”的体会，','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1460390400','updated_at'=>'1460390400']);
        $this->insert('{{%cms_article}}',['id'=>'393','column_id'=>'26','title'=>'博远公司召开2016年党的工作暨党风廉政建设工作会','image'=>NULL,'description'=>'','author'=>'沈丽娅','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp;&nbsp; </span><span style=\"font-family:SimSun;font-size:18px;\">4</sp','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1460390400','updated_at'=>'1460390400']);
        $this->insert('{{%cms_article}}',['id'=>'434','column_id'=>'30','title'=>'大坝景区及时开展雨后路面清理工作','image'=>NULL,'description'=>'','author'=>'王敏','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	<span style=\"font-size:16px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp; 一夜大雨使景区的路面泥泞不堪，难以下脚，为了游客进出的方便，5月8日早上大坝景区管理处支部书记刘东迅速组织党员干部及职工同志们打扫黄泥路面，他们用水冲地，用苕把清扫黄泥，经过职工们的奋战，路面终于变得干净整洁。</span>
</p>
<p>
	<span style=\"font','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1431014400','updated_at'=>'1431014400']);
        $this->insert('{{%cms_article}}',['id'=>'435','column_id'=>'30','title'=>'五一劳动节里景区的美丽劳动者','image'=>NULL,'description'=>'','author'=>'万春久','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	<span style=\"font-size:16px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp; 2015年5月1日是第66个劳动节，当很多人在游山玩水欣赏祖国大好河山的时候，大坝景区、市场营销部、展览馆、龙山旅行社、车队、坝区环境管理处等单位的劳动者们却在忙碌着，以辛勤劳动的方式迎接节日的到来。面对暴增的车流人潮，他们坚守在工作岗位上','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1430841600','updated_at'=>'1430841600']);
        $this->insert('{{%cms_article}}',['id'=>'436','column_id'=>'30','title'=>'美化旅游环境，松涛山庄在行动','image'=>NULL,'description'=>'','author'=>'詹世军','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span style=\"font-size:16px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp; 4月23日上午，笔者来到松涛山庄，看到几位戴着草帽的工作人员正在忙碌着，有的手拿打草机清理着路边的杂草，有的拿着扫把清扫路面。 </span> 
<div>
	<span style=\"font-size:16px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp;','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1398355200','updated_at'=>'1398355200']);
        $this->insert('{{%cms_article}}',['id'=>'437','column_id'=>'30','title'=>'汉江集团旅游亮相第七届华中旅游博览会','image'=>NULL,'description'=>'','author'=>'','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span style=\"font-size:16px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp;&nbsp; </span><span style=\"font-size:16px;font-family:SimSun;\">5月17日-19日，第七届华中旅游博览会在武汉国际博览中心举办，旅游发展公司应邀参加会议，全面推广汉江集团旅游整体形象。 </span> 
<div>
	<span st','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1400601600','updated_at'=>'1400601600']);
        $this->insert('{{%cms_article}}',['id'=>'438','column_id'=>'30','title'=>'龙山宾馆顺利完成市二中高考接待服务工作','image'=>NULL,'description'=>'','author'=>'','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span style=\"font-size:16px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style=\"font-size:16px;font-family:SimSun;\">又是一年高考季，龙山宾馆6月6日再次迎来了老朋友丹江口市二中230名高考师生，为其提供三天的住宿、就餐服务工作。 </span> 
<div align=\"left\">
	','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1402848000','updated_at'=>'1402848000']);
        $this->insert('{{%cms_article}}',['id'=>'439','column_id'=>'30','title'=>'龙山宾馆承接史上最大规模会议团队','image'=>NULL,'description'=>'','author'=>'黄阁','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span style=\"font-size:16px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp; 6月11日至14日，十堰市档案人员岗位知识及数字化建设培训班在龙山宾馆举办，参会人员420人，其中住宿和用餐人员320人，创下龙山宾馆单次接待最大规模会议团队纪录。 </span> 
<div>
	<span style=\"font-size:16px;','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1402848000','updated_at'=>'1402848000']);
        $this->insert('{{%cms_article}}',['id'=>'440','column_id'=>'30','title'=>'电厂旅游业务工作人员整体划转至旅游发展公司','image'=>NULL,'description'=>'','author'=>'欧阳丽娜','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span style=\"font-size:16px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp; 7月15日，集团公司在龙山宾馆8号会议室召开电厂、旅游发展公司等单位干部职工座谈会，宣布划转实施方案，听取职工的意见、建议。集团公司副总经理、纪委书记、工会主席陈家华，副总经理曾凡师，集团公司相关部门负责人出席了会议。 </span> 
<div>
	<','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1405872000','updated_at'=>'1405872000']);
        $this->insert('{{%cms_article}}',['id'=>'441','column_id'=>'30','title'=>'丹江口市积极开拓天津旅游市场','image'=>NULL,'description'=>'','author'=>'','content'=>'<span id=\"Label_lr\"><span style=\"font-size:16px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp; 为了进一步开拓天津市的旅游市场，学习天津旅游业发展的先进经验，落实市委政府主要领导提出的“加大在京津冀进行旅游营销”的工作要求，9月19日至21日，市旅游和外事侨务局局长申庆华带领太极峡景区、汉江集团旅游发展公司、静乐宫等旅游企业参加了2014中国（天津）旅游产业博览会。 </span> 
<div>
	<span style=\"f','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1412956800','updated_at'=>'1412956800']);
        $this->insert('{{%cms_article}}',['id'=>'442','column_id'=>'30','title'=>'市旅游和外事侨务局积极推进旅游电子商务工作','image'=>NULL,'description'=>'','author'=>'','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span style=\"font-size:16px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp; 为了深化对口协作工作，落实市委书记孙咏平同志关于“加快推进丹江口旅游电子商务工作”的精神，从9月22日开始，市旅游和外事侨务局局长申庆华带领汉江集团旅游发展公司总经理李进等一行六人，分别与北京市世纪明德教育科技有限责任公司、去哪儿网公司、新浪网络公司等，就我市旅游电子商务平台建设工作进行了深入','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1412956800','updated_at'=>'1412956800']);
        $this->insert('{{%cms_article}}',['id'=>'443','column_id'=>'30','title'=>'金秋十月大坝景区游客量创新高','image'=>NULL,'description'=>'','author'=>'王敏','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span style=\"font-size:16px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp; </span><span style=\"font-size:16px;font-family:SimSun;\">从7月15日加入汉江集团旅游发展公司以来，大坝景区管理处团结一心、提振士气、加强规范管理，与工程展览馆、龙山宾馆、龙山旅行社、松涛山庄等携手共','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1414425600','updated_at'=>'1414425600']);
        $this->insert('{{%cms_article}}',['id'=>'444','column_id'=>'30','title'=>'旅游公司与世纪明德公司战略合作正式启动','image'=>NULL,'description'=>'','author'=>'','content'=>'<span id=\"Label_lr\"><span style=\"font-size:16px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp; </span><span style=\"font-size:16px;font-family:SimSun;\">11月7日晚，由北京世纪明德教育科技有限公司组织的参加全国基础教育论坛的校长和老师70余人下榻丹江口龙山宾馆，这标志着汉江集团旅游发展公司与北京世纪明德教育科技有限公司战略合作的正式启动，也拉开了为期三天的松涛山庄森林公园','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1415894400','updated_at'=>'1415894400']);
        $this->insert('{{%cms_article}}',['id'=>'445','column_id'=>'30','title'=>'龙山宾馆已实现WIFI全覆盖','image'=>NULL,'description'=>'','author'=>'王政','content'=>'<span id=\"Label_lr\"><span style=\"font-size:16px;font-family:SimSun;\">&nbsp;&nbsp;</span><span style=\"font-size:16px;font-family:SimSun;\">&nbsp; 近日，细心的顾客会发现在龙山宾馆不论是客房还是走廊、大堂都能搜到“LSBG”（龙山宾馆的第一个字母）开头的免费无线WIFI信号，龙山宾馆还创建了自己的官方微信公众平台，用手机关注龙山宾馆官方微信公众平台不仅能获取WIFI密','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1416326400','updated_at'=>'1416326400']);
        $this->insert('{{%cms_article}}',['id'=>'446','column_id'=>'30','title'=>'天寒游客稀，日短取经忙','image'=>NULL,'description'=>'','author'=>'万春久','content'=>'<span id=\"Label_lr\"><span style=\"font-size:16px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp;&nbsp;为了提升景区工作人员的综合素质，开阔眼界、学习经验，适应公司长远发展，在安排好景区接待工作的前提下，旅游发展公司利用11月份接待量不太大的时间空隙，于11月19-21日和 25-27日分两批安排景区22名工作人员进行学习交流活动。 </span> 
<div>
	<span style=\"font-size:16px;fo','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1417968000','updated_at'=>'1417968000']);
        $this->insert('{{%cms_article}}',['id'=>'447','column_id'=>'30','title'=>'忙中不忘抓培训 提升素质同成长','image'=>NULL,'description'=>'','author'=>'','content'=>'<span id=\"Label_lr\"><img alt=\"\" src=\"/upload/image/20150514/20150514161924_4774.jpg\" /><img alt=\"\" src=\"/upload/image/20150514/20150514161926_7550.jpg\" /><img alt=\"\" src=\"/upload/image/20150514/20150514161929_7190.jpg\" /><img alt=\"\" src=\"/upload/image/201','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1418054400','updated_at'=>'1418054400']);
        $this->insert('{{%cms_article}}',['id'=>'448','column_id'=>'30','title'=>'大坝景区召开考察学习座谈会','image'=>NULL,'description'=>'','author'=>'王敏','content'=>'<span id=\"Label_lr\"> 
<div>
	<span style=\"font-size:16px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp;&nbsp;12月22日晚上，在大坝景区管理处龙山宾馆7号会议室召开了考察学习心得交流座谈会，刘东经理主持了这次座谈会。</span>
</div>
<div>
	<span style=\"font-size:16px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp;&nbsp;会上，职','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1419264000','updated_at'=>'1419264000']);
        $this->insert('{{%cms_article}}',['id'=>'449','column_id'=>'30','title'=>'缤纷圣诞夜 美味自助餐','image'=>NULL,'description'=>'——龙山宾馆推出2014圣诞平安夜自助晚宴','author'=>'贾韵','content'=>'<span id=\"Label_lr\"><img alt=\"\" src=\"/upload/image/20150514/20150514163027_1041.jpg\" /><img alt=\"\" src=\"/upload/image/20150514/20150514163029_2881.jpg\" /><img alt=\"\" src=\"/upload/image/20150514/20150514163030_0681.jpg\" /><img alt=\"\" src=\"/upload/image/201','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1419523200','updated_at'=>'1419523200']);
        $this->insert('{{%cms_article}}',['id'=>'450','column_id'=>'30','title'=>'大坝景区迎来“开门红”','image'=>NULL,'description'=>'','author'=>'王敏','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span style=\"font-size:16px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp; </span><span style=\"font-size:16px;font-family:SimSun;\">2015年大坝景区元旦节三天小长假迎来“开门红”，景区门票收入比去年同期翻了一倍多。 </span> 
<div>
	<span style=\"font-size:16px;font','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1420387200','updated_at'=>'1420387200']);
        $this->insert('{{%cms_article}}',['id'=>'451','column_id'=>'30','title'=>'紧锣密鼓新征程 不待扬鞭自奋蹄','image'=>NULL,'description'=>'——龙山宾馆召开2015年营销工作专题会','author'=>'黄阁','content'=>'<span id=\"Label_lr\"><span style=\"font-size:16px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp; </span><span style=\"font-size:16px;font-family:SimSun;\">1月11日，尽管室外天气寒冷，但龙山宾馆7号会议室气氛热烈。这里正在召开龙山宾馆2015年营销工作专题会，宾馆领导、各部门经理、营销部人员、青年骨干等参加了会议。 </span> 
<div>
	<span style=\"','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1421683200','updated_at'=>'1421683200']);
        $this->insert('{{%cms_article}}',['id'=>'452','column_id'=>'30','title'=>'30分钟变形记——龙山宾馆翻台工作记实','image'=>NULL,'description'=>'','author'=>'黄阁 王政','content'=>'<span id=\"Label_lr\"><span style=\"font-size:16px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp; </span><span style=\"font-size:16px;font-family:SimSun;\">30分钟能做什么？答案可能有很多，而龙山人用行动，印证了30分钟能把一个200人的会议室翻台变形成一个温馨的宴会餐厅。 </span> 
<div>
	<span style=\"font-size:16px;font-fa','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1423411200','updated_at'=>'1423411200']);
        $this->insert('{{%cms_article}}',['id'=>'453','column_id'=>'30','title'=>'龙山旅行社成功组织大型旅游团队','image'=>NULL,'description'=>'','author'=>'黄阁 刘敏','content'=>'<span id=\"Label_lr\"><span style=\"font-size:16px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp; 2月7日至8日，龙山旅行社成功组织了82人的大型团队前往南阳市南召县莲花温泉和猿人山滑雪场的精彩之旅。 </span> 
<div>
	<span style=\"font-size:16px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp;&nbsp;这是龙山旅行社在旅游淡季，根据季节，推出的时令特色旅','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1423756800','updated_at'=>'1423756800']);
        $this->insert('{{%cms_article}}',['id'=>'454','column_id'=>'30','title'=>'龙山宾馆成功推出情人节西餐活动','image'=>NULL,'description'=>'','author'=>'刘爽','content'=>'<span id=\"Label_lr\"><span>月</span><span>14</span><span>日晚 </span><span>21</span><span>：</span><span>30</span><span>分龙山宾馆西餐厅随着最后一桌客人结帐愉悦地离店后，由宾馆</span>推出的“缘定龙山，浪漫心相印”情人节营销活动圆满结束。
<div>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 在这次活动中，龙山宾馆大胆进行了两个尝试：一是宾馆首次','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1424016000','updated_at'=>'1424016000']);
        $this->insert('{{%cms_article}}',['id'=>'455','column_id'=>'30','title'=>'大坝景区喜迎春节','image'=>NULL,'description'=>'','author'=>'王敏','content'=>'<span id=\"Label_lr\"><span style=\"font-size:16px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp; 2015年2月19日大年初一早晨8点58分，大坝景区领导刘东带领职工在大坝景区院内点燃了新春的第一串鞭炮，长长的鞭炮从门口一直排到了院内，阵阵炮声夹杂着礼炮声响彻云霄。 </span> 
<div>
	<span style=\"font-size:16px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1424793600','updated_at'=>'1424793600']);
        $this->insert('{{%cms_article}}',['id'=>'456','column_id'=>'30','title'=>'龙山宾馆春节掠影','image'=>NULL,'description'=>'','author'=>'王政','content'=>'<span id=\"Label_lr\"> 
<p>
	<span style=\"font-size:16px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp; 又是一个的新春佳节，当千家万户全家团圆、举杯欢庆之际，当人们利用节日外出旅游之时，龙山宾馆员工坚守岗位，用自己的辛劳和汗水为宾客提供优质的服务，演奏着欢快的春节工作交响乐，让宾客享受了家的温馨、春节的快乐。</span>
</p>
<p>
	<span style=\"font-size:16px;font-family','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1424880000','updated_at'=>'1424880000']);
        $this->insert('{{%cms_article}}',['id'=>'457','column_id'=>'30','title'=>'旅游发展公司获“发展第三产业先进单位”殊荣','image'=>NULL,'description'=>'','author'=>'王青','content'=>'<span id=\"Label_lr\"><span style=\"font-size:16px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp; 2月27日，在丹江口市</span><span><span style=\"font-size:16px;font-family:SimSun;\">2015年全市经济工作</span></span><span style=\"font-size:16px;font-family:SimSun;\">会上，旅游发展公司被丹江口市市委、市政府','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1425052800','updated_at'=>'1425052800']);
        $this->insert('{{%cms_article}}',['id'=>'458','column_id'=>'30','title'=>'旅游公司开年忙营销','image'=>NULL,'description'=>'','author'=>'万春久','content'=>'<span id=\"Label_lr\"><span style=\"font-size:16px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp; 2月28日及3月2日，旅游发展公司分别与来访的湖北亨运集团观光旅游有限公司、湖北徐东国际旅行社就合作开发十堰和武汉周边旅游市场进行了商谈。 </span> 
<div>
	<span style=\"font-size:16px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp;&nbsp;在旅游发展公司人','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1425484800','updated_at'=>'1425484800']);
        $this->insert('{{%cms_article}}',['id'=>'459','column_id'=>'30','title'=>'旅游发展公司与亨运集团观光旅游公司签订合作协议','image'=>NULL,'description'=>'','author'=>'杨宪斌','content'=>'<span id=\"Label_lr\"><span style=\"font-size:16px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp; 3月6日，汉江集团旅游发展公司与湖北亨运集团观光旅游有限公司在亨运集团观光旅游公司会议室签订了合作协议，掀开了双方合作的序幕。 </span> 
<div>
	<span style=\"font-size:16px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp;&nbsp;汉江集团旅游发展公司副经理李','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1425830400','updated_at'=>'1425830400']);
        $this->insert('{{%cms_article}}',['id'=>'460','column_id'=>'30','title'=>'春天，到松涛山庄深呼吸','image'=>NULL,'description'=>'','author'=>'万春久','content'=>'<span id=\"Label_lr\"><span style=\"font-size:16px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp; 3月15日，鸟语花香、花团锦簇的松涛山庄迎来近200人的成人与学生团队，旅游发展公司今年推出的“到松涛山庄深呼吸”系列活动就此拉开序幕。 </span> 
<div>
	<span style=\"font-size:16px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp;&nbsp;结合松涛山庄特点，','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1426694400','updated_at'=>'1426694400']);
        $this->insert('{{%cms_article}}',['id'=>'461','column_id'=>'30','title'=>'“深呼吸”活动迎来第二批团队游客','image'=>NULL,'description'=>'','author'=>'万春久','content'=>'<span id=\"Label_lr\"><span style=\"font-size:16px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp; 3月21日，又到春花烂漫时，天气晴好，阳光照耀下的松涛山庄，迎来又一批团队游客“到松涛山庄深呼吸”。 </span> 
<div>
	<span style=\"font-size:16px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp;&nbsp;该团队是丹江本地一个户外活动团体，知晓“到松涛山庄深呼','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1426867200','updated_at'=>'1426867200']);
        $this->insert('{{%cms_article}}',['id'=>'462','column_id'=>'30','title'=>'旅游发展公司完成单批次最大团队接待任务','image'=>NULL,'description'=>'','author'=>'万春久','content'=>'<span id=\"Label_lr\"><span style=\"font-size:16px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp; 4月9日、10日，旅游发展公司接待了两批来自十堰的小学生春游团队，两批次团队人数2000余人，尤其是4月9日，接待人数1400余人，是迄今为止，景区单批次最大团队接待任务。 </span> 
<div>
	<span style=\"font-size:16px;font-family:SimSun;\">&nbsp;&nbsp;&nb','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1428854400','updated_at'=>'1428854400']);
        $this->insert('{{%cms_article}}',['id'=>'463','column_id'=>'30','title'=>'大坝景区紧抓安全不放松','image'=>NULL,'description'=>'','author'=>'','content'=>'<span id=\"Label_lr\"><SPAN style=\"FONT-SIZE: 16px; FONT-FAMILY: SimSun; mso-hansi-font-family: \" Roman?? New ?Times mso-ascii-font-family: Roman?; Times>&nbsp;&nbsp;&nbsp; 春天来临，又到了旅游好时节，近期来大坝景区参观游览的人数也节节攀升。</span><span></span><SPAN lang=EN-US style=\"FONT-S','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1428940800','updated_at'=>'1428940800']);
        $this->insert('{{%cms_article}}',['id'=>'464','column_id'=>'30','title'=>'中国康辉旅行社集团到我公司考察旅游线路','image'=>NULL,'description'=>'','author'=>'杨宪斌','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;3月9日上午，中国康辉旅行社集团总部及旗下60多家旅行社到我公司进行旅游线路考察。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;康辉旅行社考察团一行参观了丹江口工程展览馆、丹江口水力发电厂和丹江口大坝，了解了丹江口枢纽工程建设和南水北调中线丹江口大坝加高工程情况，领略了丹江口大坝的雄伟壮观，欣赏了碧波荡漾的丹江口水库。参观结束后，我公司和丹江口市旅游局、沧浪海旅游港景区','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1426089600','updated_at'=>'1426089600']);
        $this->insert('{{%cms_article}}',['id'=>'465','column_id'=>'30','title'=>'大坝景区职工烈日下清理停车场','image'=>NULL,'description'=>'','author'=>'郭军辉','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 经过前一段时间的紧张施工，大坝景区停车场整治基本完成，施退场后停车场内遗留下很多沙石瓦砾，影响了上班职工和前来景区参观游览客人车辆的进出、停放。
<div>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 为了给大家创造一个干净整洁的停车环境，在景区刘经理的带领下，职工们冒着炎炎烈日用消','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1433865600','updated_at'=>'1433865600']);
        $this->insert('{{%cms_article}}',['id'=>'466','column_id'=>'30','title'=>'大坝景区开展环境卫生集中整治','image'=>NULL,'description'=>'','author'=>'郭军辉','content'=>'<p>
	&nbsp; &nbsp; &nbsp; &nbsp;一年一度的全国摩托艇大赛即将在丹江口市拉开序幕，为了给八方来客留下宜居宜旅城市的美好印象，大坝景区根据旅游发展公司部署，开展了一次环境卫生集中整治。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;8月7号的早晨，当天边刚刚露出一丝晨曦，大坝景区的全体职工已经来到工作区域，拿着清扫工具热火朝天的忙了起来。这次环境卫生整治主要针对杂草、卫生间以及平时忽略的卫生死角。职工们发挥不怕脏不怕累的精神蹲在卫生间里刷便池，趴在草','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1438876800','updated_at'=>'1438876800']);
        $this->insert('{{%cms_article}}',['id'=>'467','column_id'=>'30','title'=>'弘扬拾金不昧的高尚品德','image'=>NULL,'description'=>'','author'=>'沈丽娅','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span style=\"font-size:18px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp;&nbsp; </span><span style=\"font-size:18px;font-family:SimSun;\">8</span><span style=\"font-size:18px;font-family:SimSun;\">月</span>','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1440000000','updated_at'=>'1440000000']);
        $this->insert('{{%cms_article}}',['id'=>'468','column_id'=>'30','title'=>'共护安宁景区  军民鱼水同欢<br />——旅游发展公司与大坝武警大队举行联谊晚会<br />','image'=>NULL,'description'=>'','author'=>'沈丽娅','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span style=\"font-size:18px;font-family:SimSun;\">&nbsp; &nbsp; 为继承和发扬</span><span style=\"font-size:18px;font-family:SimSun;\"> “</span><span style=\"font-size:18px;font-family:S','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1440086400','updated_at'=>'1440086400']);
        $this->insert('{{%cms_article}}',['id'=>'469','column_id'=>'30','title'=>'大坝景区启用新大门','image'=>NULL,'description'=>'','author'=>'郭军辉','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14pt;\">9</span><span style=\"font-size:14pt;font-family:宋体;\">月</span><span style=\"font-size:14pt;\">1</span><span style=\"font-size:14pt;font-family:宋体;','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1441036800','updated_at'=>'1441036800']);
        $this->insert('{{%cms_article}}',['id'=>'470','column_id'=>'30','title'=>'丹江口工程展览馆中小学生<br />研学实践教育项目预算获批准','image'=>NULL,'description'=>'','author'=>'万春久','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1514390400','updated_at'=>'1514390400']);
        $this->insert('{{%cms_article}}',['id'=>'471','column_id'=>'30','title'=>'我运动、我健康、我快乐','image'=>NULL,'description'=>'','author'=>'杨珏','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1515513600','updated_at'=>'1515513600']);
        $this->insert('{{%cms_article}}',['id'=>'472','column_id'=>'30','title'=>'旅游发展公司打造大坝景区新貌迎长假','image'=>NULL,'description'=>'','author'=>'万春久','content'=>'<span id=\"Label_lr\"><span style=\"font-size:16pt;font-family:仿宋_GB2312;\"><span style=\"font-size:small;font-family:Tahoma;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style=\"font-size:18px;font-family:SimSun;\">每年十一长假，是大坝景区旅游接待的黄金周，</span><span ','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1442332800','updated_at'=>'1442332800']);
        $this->insert('{{%cms_article}}',['id'=>'473','column_id'=>'30','title'=>'旅游发展公司全力备战迎国庆','image'=>NULL,'description'=>'','author'=>'','content'=>'<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 为了迎接国庆长假旅游高峰，旅游发展公司围绕“安全、质量、秩序、效益”四统一的工作目标，提早谋划、部署景区国庆旅游接待工作，全力备战国庆长假旅游接待工作。
</p>
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;一是大力投入优化环境。9月份,大坝景区启用了新大门,增设景区导示牌，景区面貌焕然一新。国庆节前，在景区主道中间花坛和两边摆放鲜花和悬挂彩旗，营造了浓厚的节日氛围。松涛山庄修建了别致的柑橘采摘园','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1443542400','updated_at'=>'1443542400']);
        $this->insert('{{%cms_article}}',['id'=>'474','column_id'=>'30','title'=>'公司圆满完成国庆假期旅游接待工作','image'=>NULL,'description'=>'','author'=>'','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-size:18px;font-family:SimSun;\">&nbsp; “十一”国庆假期七天，公司旅游相关单位全体干部职工坚守岗位、敬业奉献，圆满完成国庆假期旅游接待工作。</span> 
</p>
<p>
	<span style=\"font-size:18px;font-family','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1444320000','updated_at'=>'1444320000']);
        $this->insert('{{%cms_article}}',['id'=>'475','column_id'=>'30','title'=>'“源头之旅”亮相中国2015年水博览会','image'=>NULL,'description'=>'','author'=>'杨宪斌','content'=>'<span style=\"font-size:18px;font-family:SimSun;\">&nbsp; &nbsp; 11月18日-20日，水利行业瞩目盛事——2015年中国水博会在中国国际展览中心举行，汉江集团旅游发展公司作为长江水利委员会唯一参展单位，亮相此次水博览会“水利风景区促进水生态文明建设”专题展览。</span><br />
<span style=\"font-size:18px;font-family:SimSun;\">&nbsp; &nbsp; 接到参展通知后，汉江集团旅游发展公','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1448380800','updated_at'=>'1448380800']);
        $this->insert('{{%cms_article}}',['id'=>'476','column_id'=>'30','title'=>'大坝景区开展冬季练兵活动','image'=>NULL,'description'=>'','author'=>'郭军辉','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	&nbsp; <span style=\"font-size:18px;\">&nbsp; <span style=\"font-size:18px;\">&nbsp; &nbsp;进','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1448553600','updated_at'=>'1448553600']);
        $this->insert('{{%cms_article}}',['id'=>'477','column_id'=>'30','title'=>'龙山旅行社新年首发滑雪团','image'=>NULL,'description'=>'','author'=>'刘敏','content'=>'<p style=\"text-indent:45pt;\" class=\"MsoNormal\">
	<span style=\"font-family:SimSun;font-size:18px;\"><span style=\"font-family:SimSun;font-size:18px;\">2016</span></span><span style=\"font-family:SimSun;font-size:18px;\"><span style=\"font-family:SimSun;font-size','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1451923200','updated_at'=>'1451923200']);
        $this->insert('{{%cms_article}}',['id'=>'478','column_id'=>'30','title'=>'龙山旅行社成功接待世纪明德游学营','image'=>NULL,'description'=>'','author'=>'王欣','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp;&nbsp;1月17日下午,由北京世纪明德教育科技有限公司带领大连的90余名师生团队来到国家级水利风景区、南水北调中线源头第一岛——松涛山庄森林公园进行参观游学，并体验了山庄独具特色的农家饭。松涛山庄茂盛的植被、原生态的茶园和桔园、生态养殖以及众多的水利科普项目让师生们印象深刻，受益匪浅。 </span>
</p>
<p>
	<span style=\"font-f','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1453219200','updated_at'=>'1453219200']);
        $this->insert('{{%cms_article}}',['id'=>'479','column_id'=>'30','title'=>'旅游发展公司再获“发展第三产业优秀单位”殊荣','image'=>NULL,'description'=>'','author'=>'王青','content'=>'<span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-family:SimSun;font-size:18px;\">近日，在丹江口市</span><span style=\"font-family:SimSun;font-size:18px;\">2016</span><span style=\"font-family:SimSun;font-size:18px;\">年全市经济工作会上，旅游发展公司再次被丹江口市市委、市政府授予','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1456156800','updated_at'=>'1456156800']);
        $this->insert('{{%cms_article}}',['id'=>'480','column_id'=>'30','title'=>'2016年十堰市旅游工作会议精神摘要','image'=>NULL,'description'=>'','author'=>'','content'=>'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14pt;font-family:&quot;微软雅黑&quot;,sans-serif;color:#555555;\">3</span><span style=\"font-size:14pt;font-family:宋体;color:#555555;\">月</span><span style=\"font-size:14pt;font-family:&quot;微软雅黑&qu','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1457452800','updated_at'=>'1457452800']);
        $this->insert('{{%cms_article}}',['id'=>'481','column_id'=>'30','title'=>'大坝景区接待春季首批学生团','image'=>NULL,'description'=>'','author'=>'陈正麟','content'=>'<span id=\"Label_lr\"><span style=\"font-size:14pt;font-family:宋体;\"><span style=\"font-size:small;font-family:Tahoma;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style=\"font-size:18px;font-family:SimSun;\">3</span></span><span style=\"font-si','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1459094400','updated_at'=>'1459094400']);
        $this->insert('{{%cms_article}}',['id'=>'482','column_id'=>'30','title'=>'大坝景区新进员工学习电厂厂房机组知识','image'=>NULL,'description'=>'','author'=>'高然','content'=>'<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14pt;font-family:&quot;Arial&quot;,sans-serif;\">3</span><span style=\"font-size:14pt;font-family:宋体;\">月</span><span style=\"font-size:14pt;font-family:&quot;Arial&quot;,sans-serif;\">28</','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1459180800','updated_at'=>'1459180800']);
        $this->insert('{{%cms_article}}',['id'=>'483','column_id'=>'30','title'=>'旅游发展公司参加武当旅游西安春季推介会','image'=>NULL,'description'=>'','author'=>'万春久','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:15pt;font-family:仿宋_GB2312;line-height:150%;\">2016</span><span style=\"font-size:15pt;font-family:仿宋_GB2312;line-height:150%;\">年<spa','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1459267200','updated_at'=>'1459267200']);
        $this->insert('{{%cms_article}}',['id'=>'484','column_id'=>'30','title'=>'龙山旅行社迎来大型学生春游团','image'=>NULL,'description'=>'','author'=>'贾韵','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 四月的丹江口春暖花开，吸引了众多游客前来踏春赏花。4月1日，由龙山旅行社联系，来自十堰东风小学的900多名师生踩着春的脚步来到丹江口进行踏青春游活动。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 为了做好此次大型学生团的接待工作，龙山旅','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1459785600','updated_at'=>'1459785600']);
        $this->insert('{{%cms_article}}',['id'=>'485','column_id'=>'30','title'=>'优质服务 迎接四方宾朋','image'=>NULL,'description'=>'','author'=>'王敏','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	<span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14pt;font-','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1459872000','updated_at'=>'1459872000']);
        $this->insert('{{%cms_article}}',['id'=>'486','column_id'=>'30','title'=>'龙山旅行社获丹江口市旅游产业发展基金奖励','image'=>NULL,'description'=>'','author'=>'刘敏','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:18px;font-family:SimSun;\">4</span><span style=\"font-size:18px;font-family:SimSun;\">月</span><span style=\"font-size:18px;font-family:SimSun','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1459958400','updated_at'=>'1459958400']);
        $this->insert('{{%cms_article}}',['id'=>'487','column_id'=>'30','title'=>'旅游发展公司获市政府旅游产业发展奖励金','image'=>NULL,'description'=>'','author'=>'万春久 刘敏','content'=>'<span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:15pt;font-family:仿宋_GB2312;\">4</span><span style=\"font-size:15pt;font-family:仿宋_GB2312;\">月<span>6</span>日，从丹江口市旅游和外事侨务局传来好消息，旅游发展公司因<span>2015</span>年度旅游发展业务成绩显著，获','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1460390400','updated_at'=>'1460390400']);
        $this->insert('{{%cms_article}}',['id'=>'488','column_id'=>'30','title'=>'龙山旅行社成功接待四批学生春游团','image'=>NULL,'description'=>'','author'=>'高晓宏','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 十里春风，杨柳依依，伴着含笑花的盛放，4月11日上午，龙山旅行社又迎来了第四批学生团，东风中学的650余名师生来丹踏青春游。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 650余名师生首先参观了丹江口大坝。站在坝上伴着蓝天白云眺望远方，','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1460476800','updated_at'=>'1460476800']);
        $this->insert('{{%cms_article}}',['id'=>'489','column_id'=>'30','title'=>'大坝景区开展观光车旅游高峰运行演练','image'=>NULL,'description'=>'','author'=>'高然','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	<span style=\"font-size:18px;font-family:SimSun;\">&nbsp;&nbsp; “五一”旅游黄金周即将到来，为更好的应对节假日游客激增的情况，4月15日，大坝景区开展了一次观光车旅游高峰运行演练，公司张勇副经理及相关部门负责人莅临现场指导。 </span>
</p>
<p>
	<span s','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1460908800','updated_at'=>'1460908800']);
        $this->insert('{{%cms_article}}',['id'=>'497','column_id'=>'14','title'=>'奉献爱心  拯救生命','image'=>NULL,'description'=>'','author'=>'蔡莉莉','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1513008000','updated_at'=>'1513008000']);
        $this->insert('{{%cms_article}}',['id'=>'498','column_id'=>'14','title'=>'中心车队召开创建文明单位动员大会','image'=>NULL,'description'=>'','author'=>'聂国霞','content'=>'<span id=\"Label_lr\">
<p>
	7月21日上午，中心车队召开创建文明单位动员大会。车队全体员工认真学习了博远置业公司《关于开展2013-2015年度文明创建评选表彰活动的通知》，大家热情讨论了公司评选文明单位和文明职工的宗旨和意义，尤其是文明职工的评选，要求遵守社会公德和职业道德，思想要求进步，爱岗敬业，刻苦钻研业务技术，工作积极主动，能够发挥示范带头作用，更是引起了全体员工的热烈讨论，促进了思想交流。大会最后部署了车队创建文明单位的宣传工作和安全文明生产工作。
</p>
<div s','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1437408000','updated_at'=>'1437408000']);
        $this->insert('{{%cms_article}}',['id'=>'499','column_id'=>'14','title'=>'强化全员安全意识   确保雪天行车安全','image'=>NULL,'description'=>'','author'=>'周军','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1515340800','updated_at'=>'1515340800']);
        $this->insert('{{%cms_article}}',['id'=>'500','column_id'=>'14','title'=>'小车队召开会议安排总部搬迁车辆保障工作','image'=>NULL,'description'=>'','author'=>'李晓沛','content'=>'<span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14pt;\">9</span><span style=\"font-size:14pt;font-family:宋体;\">月</span><span style=\"font-size:14pt;\">8</span><span style=\"font-size:14pt;font-family:宋体;\">日</span><span styl','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1441641600','updated_at'=>'1441641600']);
        $this->insert('{{%cms_article}}',['id'=>'501','column_id'=>'14','title'=>'中心车队加强冬季安全行车管理','image'=>NULL,'description'=>'','author'=>'王峰','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-size:18px;font-family:SimSun;\">连日来，受冷空气影响，温度逐渐降低，为有效杜绝冬季寒冷天气交通安全事故的发生，中心车队于</span><span style=\"font-size:18px;font-family:SimSun;\">12</span><span style=\"font-siz','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1449590400','updated_at'=>'1449590400']);
        $this->insert('{{%cms_article}}',['id'=>'505','column_id'=>'14','title'=>'洁净围墙展新颜','image'=>NULL,'description'=>'','author'=>'许磊','content'=>'<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-family:SimSun;font-size:18px;\">近日，数名工人正在对大坝二路原钢厂临街的垮塌围墙进行清理及重新砌筑。</span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 这是按照集团公司工作部署，为支持并配合丹江口市“五城联创”工作，净化美化城市环境，提升城','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1459180800','updated_at'=>'1459180800']);
        $this->insert('{{%cms_article}}',['id'=>'506','column_id'=>'14','title'=>'小车队圆满完成水利部作家协会接待任务','image'=>NULL,'description'=>'','author'=>'胡明星','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:16px;\">&nbsp;1月28、29日，小车队克服恶劣天气，圆满完成了水利部作家协会接待任务。 </span> 
<div>
	<span style=\"font-size:16px;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 水利部作家协会于1月25日在丹江召开，小车队接到汉江集团下达的接待任','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1422547200','updated_at'=>'1422547200']);
        $this->insert('{{%cms_article}}',['id'=>'507','column_id'=>'14','title'=>'物业管理分公司开展“爱国卫生月”环境卫生综合整治','image'=>NULL,'description'=>'','author'=>'宛英','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:16px;\">物业管理分公司按照《关于开展第27 个“爱国卫生月\"暨“健康湖北”全民行动宣传月活动的通知》的要求，在近日结合实际情况，积极行动、广泛动员，对小区的环境卫生进行了综合整治。 </span><br />
<br />
<span style=\"font-size:16px;\">&nbsp;&nb','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1431360000','updated_at'=>'1431360000']);
        $this->insert('{{%cms_article}}',['id'=>'508','column_id'=>'14','title'=>'小车队传达学习2015年公司工作会精神','image'=>NULL,'description'=>'','author'=>'蒋丽','content'=>'<span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:16px;\">2月25日，开年上班第一天，小车队组织全体员工传达学习博远置业公司、服务管理中心、旅游发展公司2015年工作会、党建会暨第二届职代会第三次会议精神。并对王经理作得的2015年党政工作报告进行了座谈，会议由车队队长孙欢民主持。 </span> 
<div>
	<span style=\"font-size:16px;\">&nbsp;&nb','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1424880000','updated_at'=>'1424880000']);
        $this->insert('{{%cms_article}}',['id'=>'509','column_id'=>'14','title'=>'服务管理中心开展春节走访慰问','image'=>NULL,'description'=>'','author'=>'王青','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	<span style=\"font-size:16px;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 春节即将来临，服务管理中心副主任、工会主席谭本文和办公室、离退服务部工作人员一行对公司伤残军人、重症病号、劳动模范、工亡遗属、困难职工及其家属进行了慰问。慰问中，亲切问候了他们的身体和生活情况，送上慰问品，感谢他们多年来对企业做出的贡献，并代表中心祝福他们身体健康，度过一个欢乐祥和的春节。</','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1423756800','updated_at'=>'1423756800']);
        $this->insert('{{%cms_article}}',['id'=>'510','column_id'=>'14','title'=>'服务管理中心召开2015年迎春座谈会','image'=>NULL,'description'=>'','author'=>'张余','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span style=\"font-size:16px;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2月8日下午，在羊年新春佳节将至之际，服务管理中心在新装修的荷花厅会议室组织召开了离退休职工迎春座谈会，50名余离退休职工欢聚一堂，畅所欲言，服务管理中心领导班子成员、机关部门的负人全部到会参与座谈。会上还对离退休宣传先进个人、全民健身贡献奖、最美水都人等给予了表彰。 </span> 
<div>
	<sp','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1423411200','updated_at'=>'1423411200']);
        $this->insert('{{%cms_article}}',['id'=>'511','column_id'=>'14','title'=>'博远公司获十堰市“十星级”物业服务企业荣誉称号','image'=>NULL,'description'=>'','author'=>'宛英','content'=>'<span id=\"Label_lr\"><span style=\"font-size:16px;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 近日，在十堰市物业管理工作会议暨2014年度物业管理协会年会上，博远置业公司被十堰市房管局授予2014年度“十星级”物业服务企业荣誉称号，这是丹江口市唯一一家获得“十星级”的物业服务企业。 </span> 
<div>
	<span style=\"font-size:16px;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; “十','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1431446400','updated_at'=>'1431446400']);
        $this->insert('{{%cms_article}}',['id'=>'512','column_id'=>'14','title'=>'物业管理分公司组织员工进行灭火器实操演练','image'=>NULL,'description'=>'','author'=>'宛英','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp;物业管理分公司按照公司2015年“安全生产月”及“安康杯”活动要求，为确保安全工作落到实处，于6月18日上午在山水庭院空阔场地进行干粉灭火器实操演练，物业管理员、保安、保洁等二十余人参加此次演练。
</p>
<p>
	&nbsp; &nbsp; &nbsp;演练中，物业保安队长张军向全体参与者讲解和示范了干粉灭火器等常用消防器材的操作','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1434556800','updated_at'=>'1434556800']);
        $this->insert('{{%cms_article}}',['id'=>'513','column_id'=>'14','title'=>'物业分公司开展电梯紧急救援演练','image'=>NULL,'description'=>'','author'=>'刘斌','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 为加强特种设备安全管理，物业管理分公司于5月30日上午在碧水方圆小区开展电梯应急救援演练。丹江口市质量技术监督局和汉江集团技术部到场对演练进行全程指导，丹江口市王家营社区居委会、政发实业有限公司共同参与活动。
</p>
<p>
	&nbsp;&nbsp;&nbsp;&nbs','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1433174400','updated_at'=>'1433174400']);
        $this->insert('{{%cms_article}}',['id'=>'514','column_id'=>'14','title'=>'山水庭院物业开展首届军训演练','image'=>NULL,'description'=>'','author'=>'袁世红','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;按照“员工学习培训季”活动安排，为了加强员工队伍建设，提高员工素质及整体形象， 5月28日，山水庭院物业管理处举行了首届军训演练。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;演练科目包括列队训练、稍息立正训练、左右转训练、跑步训练等。当天天气虽不是很炎热，但队员们个个练得汗流浃背。通过训练，以期达到管理规范化、行动军事化，更好地为小区居民服务，为业主创造一个舒适、安全','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1432828800','updated_at'=>'1432828800']);
        $this->insert('{{%cms_article}}',['id'=>'515','column_id'=>'14','title'=>'尚湖熙园营销中心开展物业服务提升工作','image'=>NULL,'description'=>'','author'=>'黄冠群','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 跟随着营销售房冲刺的脚步，尚湖熙园物业服务提升工作逐步展开，此次提档升级工作主要从深挖细节、改变形象、创新服务三方面来全力做好营销配合。
</p>
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;为达到良好效果，主要采取以下措施：一是深挖细节，对各岗位主管开展周例会制度，对工作有总结、有重点','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1430064000','updated_at'=>'1430064000']);
        $this->insert('{{%cms_article}}',['id'=>'516','column_id'=>'14','title'=>'公司配合做好襄阳生活基地一期交房工作','image'=>NULL,'description'=>'','author'=>'李红玲','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	<span style=\"line-height:1.5;\">&nbsp;&nbsp;&nbsp;&nbsp; 为配合汉江集团襄阳生产生活基地一期正式交房，博远公司抽调多名骨干来到襄阳，与襄阳分公司职工一起，全力做好各项工作。</span> 
</p>
<p>
	<span style=\"lin','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1427990400','updated_at'=>'1427990400']);
        $this->insert('{{%cms_article}}',['id'=>'517','column_id'=>'14','title'=>'业主赠山水庭院物业锦旗','image'=>NULL,'description'=>'','author'=>'宛英','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3月24日，家住山水庭院34#楼房业主张女士给山水庭院物业服务管理处送来了一面锦旗，锦旗上面的八个字“管理规范化，服务更贴心”表达她的感谢之情。
</p>
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 据了解，张女士出门将钥匙插在门上忘记取下，被小区保安班长陆国华巡逻时及时发现并上报，物','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1427212800','updated_at'=>'1427212800']);
        $this->insert('{{%cms_article}}',['id'=>'518','column_id'=>'14','title'=>'物业小区欢乐祥和迎新春','image'=>NULL,'description'=>'','author'=>'宛英','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 新春佳节将至，物业管理分公司悬挂红灯笼和新春祝福语，努力为小区居民营造温馨康乐的节日气氛，同时组织山水庭院和张家沟小区于2月14、15日举办了以“服务业主，共建和谐”为主题的迎新春趣味系列活动，增进小区居民间的感情交流。
</p>
<p>
	在活动现场，双龙戏珠、齐心协力、螃蟹背西瓜、乒乓球反投等都是体现团队合作','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1424016000','updated_at'=>'1424016000']);
        $this->insert('{{%cms_article}}',['id'=>'519','column_id'=>'14','title'=>'物业管理分公司召开全体职工大会','image'=>NULL,'description'=>'','author'=>'宛英','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2月12日下午物业管理分公司召开全体职工大会，认真学习传达王经理在2015年工作会、党建会暨第二届职代会第三次会议上所作的党政工作报告，会议统一了思想，强化了责任意识和服务意识。
</p>
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 物业管理分公司副经理黄璞、副书记朱德超分别传达了工作','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1423756800','updated_at'=>'1423756800']);
        $this->insert('{{%cms_article}}',['id'=>'520','column_id'=>'14','title'=>'碧水方圆小区举行首届趣味运动会','image'=>NULL,'description'=>'','author'=>'曾萍','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;2月7日下午，碧水方圆小区中心广场欢呼声此起彼伏，热闹非凡，博远公司物业分公司和王家营社区居委会、小区业主联合举办的以“趣味同乐你我他”为主题的小区首届趣味运动会在这里举行，共有100多余名业主参与了本次活动。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;小区居民对趣味运动会非常关注，活动以家庭为单位组队，参赛的家庭多是父母带着孩子。活动分乒乓球返投、吹气球、二龙戏珠、','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1423497600','updated_at'=>'1423497600']);
        $this->insert('{{%cms_article}}',['id'=>'521','column_id'=>'14','title'=>'在岗一分钟，服务六十秒 ——尚湖熙园营销中心一名秩序员工作感想<br />','image'=>NULL,'description'=>'','author'=>'杨建','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp;&nbsp;2014年1月，我很荣幸地加入到博远物业这个大家庭，任普普通通的秩序员。默默无闻、踏踏实实是我的工作本性，我虽不是保卫祖国的士兵，不是维护国家权力的警察，但我常常感到肩上有光荣的责任，因为秩序员是物业公司的形象代言人，是尚湖熙园项目明亮的“眼睛”。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;入职后，我参加了尚湖熙园营销中心物业部开展的以“在岗一分钟，服务六十秒”为主题的','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1423152000','updated_at'=>'1423152000']);
        $this->insert('{{%cms_article}}',['id'=>'522','column_id'=>'14','title'=>'公司顺利协助完成襄阳生活基地分户查验工作','image'=>NULL,'description'=>'','author'=>'高原','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;2015年1月12日，博远置业公司参与进行的襄阳生活基地分户查验工作顺利完成。来自博远置业公司的二十余名员工，经过14天的努力奋战，提前一个星期完成任务，得到了委托方恒玖地产公司的充分肯定和好评。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;我公司于12月26日赴襄阳开始协助对襄阳生活基础项目809套住宅进行分户查验工作。此次查验由恒玖地产公司组织，襄阳基地项目部提供技','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1421596800','updated_at'=>'1421596800']);
        $this->insert('{{%cms_article}}',['id'=>'523','column_id'=>'14','title'=>'从小处入手保障业主出行安全','image'=>NULL,'description'=>'','author'=>'袁世红','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; 为保障山水庭院小区公共设施设备完好，共建平安和谐小区。1月6日，小区物业服务人员对小区东大门地段的破损沟盖板和8#洋房处缺失的沟盖板进行了更换与增补，既解决了小区道路的美观，又排除交通安全隐患，给行人及车辆的出行带来方便，赢得业主的好评。
</p>
<p>
	<br />
	<div style=\"text-align:center;\">
		<img class=\"pic_cont_img\" alt=\"\" s','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1420646400','updated_at'=>'1420646400']);
        $this->insert('{{%cms_article}}',['id'=>'524','column_id'=>'14','title'=>'创“十星级”物业企业  构建和谐温馨家园','image'=>NULL,'description'=>'','author'=>'宛英','content'=>'<span id=\"Label_lr\">&nbsp;
<p class=\"MsoNormal\" style=\"text-indent:28pt;\">
	<span style=\"font-size:14pt;\">2015</span><span style=\"font-size:14pt;font-family:宋体;\">年</span><span style=\"font-size:14pt;\">4</span><span style=\"font-size:14pt;font-family:宋体;\">月，','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1434988800','updated_at'=>'1434988800']);
        $this->insert('{{%cms_article}}',['id'=>'525','column_id'=>'14','title'=>'中心车队开展夏季车辆安全大检查','image'=>NULL,'description'=>'','author'=>'王峰','content'=>'<p>
	<span style=\"font-size:14pt;font-family:&quot;Calibri&quot;,sans-serif;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 7月17</span><span style=\"font-size:14pt;font-family:宋体;\">日上午，中心车队组织全体员工对所属车辆进行夏季安全大检查，针对高温天气条件下行车的安全要求，由车队安全小组对每台车辆的油、水、电，轮胎气压和车容、车貌进行了认真仔细的检查。对检查中','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1437062400','updated_at'=>'1437062400']);
        $this->insert('{{%cms_article}}',['id'=>'526','column_id'=>'14','title'=>'携手社区共建和谐家园','image'=>NULL,'description'=>'','author'=>'袁世红','content'=>'<p>
	&nbsp; &nbsp; &nbsp; &nbsp;2015年7月22日，民欣小区物业管理处联合跃进门社区和城建大队组织人员对民欣小区卫生死角进行了清理。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;此次活动，清理了2#楼东边、7#楼楼道、4#楼和将军楼车棚过道等死角的垃圾，使小区的卫生焕然一新，得到了业主的好评。活动中，跃进门社区积极调派人员和车辆，给予小区物业管理处极大的支持。活动结束后，物业管理分公司为感谢跃进门社区对民欣小区物业管理处的工作支持，主动上门向','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1438099200','updated_at'=>'1438099200']);
        $this->insert('{{%cms_article}}',['id'=>'527','column_id'=>'14','title'=>'汉江襄阳生活基地小区电梯安全大检查','image'=>NULL,'description'=>'','author'=>'门强','content'=>'<p style=\"text-indent:28pt;\" class=\"MsoNormal\">
	<span style=\"font-family:宋体;font-size:12pt;\"><span style=\"font-size:16px;\">8</span><span style=\"font-size:16px;\">月</span><span style=\"font-size:16px;\">6</span><span style=\"font-size:16px;\">日上午，襄阳汉江恒玖地产有限公司、','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1438790400','updated_at'=>'1438790400']);
        $this->insert('{{%cms_article}}',['id'=>'528','column_id'=>'14','title'=>'暴风雨中见真情','image'=>NULL,'description'=>'','author'=>'高  原','content'=>'<span id=\"Label_lr\">
<p>
	&nbsp; &nbsp; &nbsp; 8月4日晚8点多钟，丹江口市城区雷电交加，暴雨倾盆。碧水方圆一期五栋楼房和二期两栋楼房突然停电，15#楼和18#楼的电梯中各有1名业主被困，其中1名业主还是体弱多病的老太太，情况十分危急。
</p>
<p>
	&nbsp; &nbsp; &nbsp; 接到业主报警后，碧水方圆物业管理处立即联系电梯维保单位和向上级汇报。物业管理人员、维修人员、电梯维保人员冒着大雨，不顾衣服湿透，迅速赶到小区，与保安一起将业主从电梯','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1438790400','updated_at'=>'1438790400']);
        $this->insert('{{%cms_article}}',['id'=>'529','column_id'=>'14','title'=>'物业管理分公司开展环境卫生集中整治和“除四害”工作','image'=>NULL,'description'=>'','author'=>'宛英','content'=>'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:12pt;font-family:宋体;\">按照《关于开展环境卫生集中整治和“除四害”工作的通知》的要求，物业管理分公司积极组织员工、居民，对所管辖小区、办公区卫生、未形成小区的部分区域进行了环境卫生集中整治和“除四害”活动。<span></span></span> 
<p class=\"MsoNormal\" style=\"text-indent:24pt;\">
	<span style','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1439136000','updated_at'=>'1439136000']);
        $this->insert('{{%cms_article}}',['id'=>'530','column_id'=>'14','title'=>'认真总结 不断提高','image'=>NULL,'description'=>'','author'=>'周静','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1513180800','updated_at'=>'1513180800']);
        $this->insert('{{%cms_article}}',['id'=>'531','column_id'=>'14','title'=>'我们的美丽与精彩','image'=>NULL,'description'=>'','author'=>'柳文斌','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1514217600','updated_at'=>'1514217600']);
        $this->insert('{{%cms_article}}',['id'=>'532','column_id'=>'14','title'=>'业主的满意是我们最大的动力','image'=>NULL,'description'=>'','author'=>'袁世红','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1514563200','updated_at'=>'1514563200']);
        $this->insert('{{%cms_article}}',['id'=>'533','column_id'=>'14','title'=>'不一样的队员，一样的坚持','image'=>NULL,'description'=>'','author'=>'门强　周静','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1514995200','updated_at'=>'1514995200']);
        $this->insert('{{%cms_article}}',['id'=>'534','column_id'=>'14','title'=>'扫雪开路为业主','image'=>NULL,'description'=>'','author'=>'汤爱珍  周静','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1515340800','updated_at'=>'1515340800']);
        $this->insert('{{%cms_article}}',['id'=>'535','column_id'=>'14','title'=>'武汉分公司多措并举应对低温雨雪天气','image'=>NULL,'description'=>'','author'=>'李敏','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1515340800','updated_at'=>'1515340800']);
        $this->insert('{{%cms_article}}',['id'=>'536','column_id'=>'14','title'=>'寒冬中的温暖','image'=>NULL,'description'=>'','author'=>'袁世红','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1516809600','updated_at'=>'1516809600']);
        $this->insert('{{%cms_article}}',['id'=>'537','column_id'=>'14','title'=>'武汉分公司开展微型消防站培训演练活动','image'=>NULL,'description'=>'','author'=>'黎碧娟','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1516809600','updated_at'=>'1516809600']);
        $this->insert('{{%cms_article}}',['id'=>'538','column_id'=>'14','title'=>'表彰先进  学习先进','image'=>NULL,'description'=>'','author'=>'门强','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1516982400','updated_at'=>'1516982400']);
        $this->insert('{{%cms_article}}',['id'=>'539','column_id'=>'14','title'=>'瑞雪纷飞扮美城市   物业服务温暖人心','image'=>NULL,'description'=>'','author'=>'黎碧娟','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1517241600','updated_at'=>'1517241600']);
        $this->insert('{{%cms_article}}',['id'=>'540','column_id'=>'14','title'=>'欢天喜地迎佳节','image'=>NULL,'description'=>'','author'=>'袁世红','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1518019200','updated_at'=>'1518019200']);
        $this->insert('{{%cms_article}}',['id'=>'541','column_id'=>'14','title'=>'汉江集团公司总部搬迁工作简报','image'=>NULL,'description'=>'第十四期','author'=>'','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span style=\"font-family:宋体;\"> </span> 
<p style=\"text-align:center;\" align=\"center\">
	<b><span style=\"font-size:26pt;color:red;\"><span style=\"font-family:宋体;\">汉 江 集 团 公 司 总 部','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1443024000','updated_at'=>'1443024000']);
        $this->insert('{{%cms_article}}',['id'=>'542','column_id'=>'14','title'=>'武汉分公司在尚湖熙园小区开展“金秋送惠”活动','image'=>NULL,'description'=>'','author'=>'黄冠群','content'=>'<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 秋风来、桂花香，尚湖熙园小区广大业主即将喜迎交房，为方便小区业主轻松置家，既能一站式购齐装修建材家居，又能享受到超值的建材家居商品优惠，在宏升公司及朗策顾问公司的大力支持下，武汉分公司于10月18日携手红旗建材家居和乐泽运动共同举办“金秋送惠”活动，为尚湖熙园业主献上答谢盛宴。
</p>
<p>
	&nbsp;&nbsp;&nbsp;&nbsp; 活动主要有家装课堂、参观商场及乐在运动、泽惠四邻运动体验等，最后进行抽奖，同','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1445270400','updated_at'=>'1445270400']);
        $this->insert('{{%cms_article}}',['id'=>'543','column_id'=>'14','title'=>'山水庭院物业恢复小区绿地','image'=>NULL,'description'=>'','author'=>'袁世红','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:18px;font-family:SimSun;\">10</span><span style=\"f','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1445875200','updated_at'=>'1445875200']);
        $this->insert('{{%cms_article}}',['id'=>'544','column_id'=>'14','title'=>'汉江集团公司总部搬迁工作简报（第十七期）','image'=>NULL,'description'=>'','author'=>'','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p style=\"text-align:center;\" class=\"MsoNormal\">
	<span style=\"font-family:仿宋_GB2312;color:#ff0000;font-size:26pt;font-weight:bold;\">汉&nbsp;江&nbsp;集&nbsp','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1446393600','updated_at'=>'1446393600']);
        $this->insert('{{%cms_article}}',['id'=>'545','column_id'=>'14','title'=>'业主向碧水方圆物业赠送锦旗','image'=>NULL,'description'=>'','author'=>'张卫红','content'=>'<span id=\"Label_lr\">&nbsp;<span style=\"font-size:18px;\"> &nbsp; &nbsp; &nbsp;11月5日，碧水方圆业主徐期功与母亲一起将一面题有“热心助人”的锦旗送到了小区物业管理处。</span><br />
<span style=\"font-size:18px;\">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><span style=\"font-size:18px;\">徐业主表示，送锦旗是为两件事表达由衷的','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1446739200','updated_at'=>'1446739200']);
        $this->insert('{{%cms_article}}',['id'=>'546','column_id'=>'14','title'=>'碧水方圆召开2015年度工作会','image'=>NULL,'description'=>'','author'=>'曾萍','content'=>'<span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:18px;font-family:SimSun;\">12</span><span style=\"font-size:18px;font-family:SimSun;\">月</span><span style=\"font-size:18px;font-family:SimSun;\">15</span><span style=\"font-s','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1450713600','updated_at'=>'1450713600']);
        $this->insert('{{%cms_article}}',['id'=>'547','column_id'=>'14','title'=>'尚湖熙园交房首日情况','image'=>NULL,'description'=>'','author'=>'黄冠群','content'=>'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:18px;font-family:SimSun;color:black;\">12</span><span style=\"font-size:14pt;font-family:宋体;color:black;\"><span style=\"font-size:18px;font-family:SimSun;\">月</span><span style=\"font-size:18px;','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1451318400','updated_at'=>'1451318400']);
        $this->insert('{{%cms_article}}',['id'=>'548','column_id'=>'14','title'=>'尚湖熙园迎来首批房屋交付','image'=>NULL,'description'=>'','author'=>'胡宝桂','content'=>'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14pt;font-family:宋体;color:black;\">武汉尚湖熙园居民小区于通过了房屋竣工验收，<span>12</span>月<span>22</span>日博远置业武汉分公司尚湖熙园物业服务中心接待了第一批交房业主<span>,</span>截止<span>28</span>日共签订物业服务合同<span>663</span>份，平均每天交房上百套，单日最高','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1451318400','updated_at'=>'1451318400']);
        $this->insert('{{%cms_article}}',['id'=>'549','column_id'=>'14','title'=>'山水庭院物业获赞“业主的好管家”','image'=>NULL,'description'=>'','author'=>'袁世红','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 近日，山水庭院物业管理处收到小区租赁户业主太平洋保险公司送来的一面锦旗：“业主的好管家、住户的贴心人”，感谢物业人员工作认真负责、服务热情周到。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 太平洋保险公司根据国家政策，开展保险进社区的活','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1454342400','updated_at'=>'1454342400']);
        $this->insert('{{%cms_article}}',['id'=>'550','column_id'=>'14','title'=>'尚湖熙园物业小区喜迎新春','image'=>NULL,'description'=>'','author'=>'','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	<span style=\"font-size:12pt;font-family:宋体;\"><span>&nbsp;&nbsp;&nbsp;&nbsp; </span><span style=\"font-size:18px;font-family:SimSun;\">1</span><span style=\"font-size:18px;font-family:SimSun;\">月</span><span style','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1454342400','updated_at'=>'1454342400']);
        $this->insert('{{%cms_article}}',['id'=>'551','column_id'=>'14','title'=>'博远物业小区“迎新春”活动精彩纷呈','image'=>NULL,'description'=>'','author'=>'宛英','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14pt;font-family:宋体;color:#333333;\">新春佳节将至，博远物业各小区的张灯结彩喜迎新年。</span><SPAN style=\"FONT-SIZE: 14pt; FONT-FAMILY: \" Tahoma?,sans-serif;color:#333333;?>1<','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1454428800','updated_at'=>'1454428800']);
        $this->insert('{{%cms_article}}',['id'=>'552','column_id'=>'14','title'=>'物业管理分公司顺利完成春节物资装箱工作','image'=>NULL,'description'=>'','author'=>'宛英','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 近日，物业管理分公司配合资产管理部，顺利完成一千多箱春节“大礼箱”物资的粘箱、装箱和部分单位的发放工作。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp;&nbsp;1月29日，物业管理分公司接到资产管理部通知，在安排好各小区日常工作情况下，','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1454428800','updated_at'=>'1454428800']);
        $this->insert('{{%cms_article}}',['id'=>'553','column_id'=>'14','title'=>'物业管理分公司开展春节前安全、卫生检查工作<br /><br />','image'=>NULL,'description'=>'','author'=>'宛英','content'=>'<span id=\"Label_lr\"> 
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 在春节即将到来之际，2月3日—5日，物业管理分公司对办公区、小区开展全面的安全、卫生大检查活动。本次检查以安全为侧重点，主要针对消防、治安、电梯、监控、门禁、小区公共区域设备设施以及小区环境管理、制度落实等方面进行检查。 </span>
</p>
<p>
	<span style=\"font-family:SimSun','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1454601600','updated_at'=>'1454601600']);
        $this->insert('{{%cms_article}}',['id'=>'554','column_id'=>'14','title'=>'祥和平安过大年  坚守岗位作奉献<br /><br />','image'=>NULL,'description'=>'','author'=>'宛英','content'=>'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14pt;font-family:宋体;background:white;color:black;\"><span style=\"font-size:18px;font-family:SimSun;\">春节是合家团圆、走亲访友的日子，为了确保业主们的安全和小区环境的整洁，博远物业小区的管理、维修、保安、保洁等物业服务人员，默默无闻地坚守在工作岗位上……</span><span>','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1455465600','updated_at'=>'1455465600']);
        $this->insert('{{%cms_article}}',['id'=>'555','column_id'=>'14','title'=>'物业管理分公司组织召开2016年工作座谈会','image'=>NULL,'description'=>'','author'=>'宛英','content'=>'<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-family:SimSun;font-size:18px;\">2月16日，物业管理分公司组织召开了2016年工作座谈会，物业管理分公司全体员工及保安、保洁公司负责人参加了座谈会，公司领导王森林、张勇以及相关部门负责人应邀出席了座谈会。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbs','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1455638400','updated_at'=>'1455638400']);
        $this->insert('{{%cms_article}}',['id'=>'556','column_id'=>'14','title'=>'为物业“飞人班组”点赞','image'=>NULL,'description'=>'物业管理分公司物业维修部高空作业一、二事','author'=>'张卫红、袁世红','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp;&nbsp;2016年3月2日，碧水方圆小区客服部接到11#14楼一位业主的报修电话，称家中正在安装空调，但空调管无法安装。维修班李丹生接到报修单立即前去查看，经查是11#楼外墙位于14层处的空调管断裂。这本不属物业的维修范畴，更何况是高空作业，但维修负责人张贤林看到业主一脸的着急与无奈，果断拍板：“我们帮忙修”。他马上着手安排起来，别看他平时嘻嘻哈哈，在安全面前','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1458230400','updated_at'=>'1458230400']);
        $this->insert('{{%cms_article}}',['id'=>'557','column_id'=>'14','title'=>'“一切为了业主满意！”','image'=>NULL,'description'=>'','author'=>'杨玉林','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14pt;font-family:宋体;\">“我来交小区卫生费。以前是你们多次上门催交，我也不愿意交。今年，我主动到你们这里来交。我为你们物业的真心真诚服务所感动。”张家沟小区某业主来交物业费时动情地说。</span><span style=\"font-size:14pt;\"></span> 
<p clas','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1458489600','updated_at'=>'1458489600']);
        $this->insert('{{%cms_article}}',['id'=>'558','column_id'=>'14','title'=>'助力“五城联创”   整治小区环境','image'=>NULL,'description'=>'','author'=>'袁世红','content'=>'<span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:18px;font-family:SimSun;\">3</span><span style=\"font-size:18px;font-family:SimSun;\">月</span><span style=\"font-size:18px;font-family:SimSun;\">18</span><span style=\"font-si','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1459094400','updated_at'=>'1459094400']);
        $this->insert('{{%cms_article}}',['id'=>'559','column_id'=>'14','title'=>'洁净小区水系 营造优美环境','image'=>NULL,'description'=>'物业分公司开展清理山水庭院小区水系活动','author'=>'袁世红','content'=>'<span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14pt;font-family:仿宋_GB2312;\">4</span><span style=\"font-size:14pt;font-family:仿宋_GB2312;\">月<span>7</span>日下午，物业管理分公司组织党员、小区管理处服务人员对山水庭院小区水系进行了彻底清淤，</span><span style=\"fon','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1460044800','updated_at'=>'1460044800']);
        $this->insert('{{%cms_article}}',['id'=>'560','column_id'=>'14','title'=>'碧水方圆清除小区沥青沉积物','image'=>NULL,'description'=>'','author'=>'汤萍','content'=>'<span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:15pt;\">3</span><span style=\"font-size:15pt;font-family:宋体;\">月</span><span style=\"font-size:15pt;\">14</span><span style=\"font-size:15pt;font-family:宋体;\">日下午，碧水一期</s','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1460044800','updated_at'=>'1460044800']);
        $this->insert('{{%cms_article}}',['id'=>'561','column_id'=>'14','title'=>'拆除违建  业主称赞','image'=>NULL,'description'=>'','author'=>'袁世红','content'=>'<p>
	&nbsp;&nbsp;&nbsp;<span style=\"font-family:SimSun;font-size:18px;\">&nbsp; </span><span style=\"font-family:SimSun;font-size:18px;\">3</span><span style=\"font-family:宋体;font-size:14pt;\"><span style=\"font-family:SimSun;font-size:18px;\">月</span><span styl','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1460476800','updated_at'=>'1460476800']);
        $this->insert('{{%cms_article}}',['id'=>'562','column_id'=>'14','title'=>'山水庭院小区举行电梯事故应急救援演练','image'=>NULL,'description'=>'','author'=>'袁世红','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp;&nbsp;4月15日，物业管理分公司在山水庭院小区举行电梯事故应急救援演练，此次演练得到了丹江口市质量技术监督局、丹江口市政发实业有限公司、大坝路社区、液化气分公司等单位和小区业主的大力支持。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp;','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1460908800','updated_at'=>'1460908800']);
        $this->insert('{{%cms_article}}',['id'=>'563','column_id'=>'14','title'=>'汉江大厦安装灭蚊灯','image'=>NULL,'description'=>'','author'=>'黄伟','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 随着天气转暖，汉江大厦周边蚊虫也开始逐渐增多，为确保大厦舒适干净的办公和就餐环境，武汉分公司组织有关人员在院内草丛、餐厅、厨房等地方安装了灭蚊灯。灭蚊灯安装完毕后，蚊虫得到有效控制，消杀工作取得了显著效果。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1460908800','updated_at'=>'1460908800']);
        $this->insert('{{%cms_article}}',['id'=>'564','column_id'=>'14','title'=>'拾金不昧的物业保洁员','image'=>NULL,'description'=>'','author'=>'汤萍','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 4月15日，碧水方圆小区的一位业主手握感谢信，面带笑容走进物业办公室，对碧水方圆物业保洁员王振花拾金不昧的行为表示感谢，并激动地向大家讲起了事情的原由。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 一天早上，失主的老伴发现一只金耳环不见','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1460908800','updated_at'=>'1460908800']);
        $this->insert('{{%cms_article}}',['id'=>'565','column_id'=>'14','title'=>'武汉分公司召开工作分析会','image'=>NULL,'description'=>'','author'=>'李敏','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 4月15日,武汉分公司在汉江大厦310会议室召开了工作分析会，武汉分公司及小车队有关人员参加了会议，公司领导王森林、谭本文、李进、张勇和相关部门负责人应邀出席了会议。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 会议首先由分公司副经理李','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1460908800','updated_at'=>'1460908800']);
        $this->insert('{{%cms_article}}',['id'=>'566','column_id'=>'14','title'=>'公司组织开展汉江大厦服务质量检查','image'=>NULL,'description'=>'','author'=>'刘锦玲','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 4月14-15日，公司经理王森林带领相关部门工作人员到武汉分公司进行了汉江大厦服务质量检查。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 4月14日下午，在汉江大厦物业服务质量意见征询会上，集团公司各部门（中心）代表对汉江大厦近半年来的','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1460995200','updated_at'=>'1460995200']);
        $this->insert('{{%cms_article}}',['id'=>'567','column_id'=>'14','title'=>'张家沟小区迎来观摩团','image'=>NULL,'description'=>'','author'=>'杨玉林','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14pt;\">4</span><span style=\"font-size:14pt;font-family:宋体;\">月</span><span style=\"font-size:14pt','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1461168000','updated_at'=>'1461168000']);
        $this->insert('{{%cms_article}}',['id'=>'569','column_id'=>'14','title'=>'资产管理部完成2016年车辆维修计划交底工作','image'=>NULL,'description'=>'','author'=>'卢凯','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 3月17日，资产管理部针对集团公司下发的2016年综合计划分别到小车队及中心车队进行了车辆维修计划交底，并就总部搬迁后资金申报拨付程序向两车队进行了传达。经过交流，确定了两车队2016年车辆维修具体安排，还对票据的收集、传递、扫描等工作环节进行了统一。两车队表示将根据总部搬迁后车辆实际运行情况，抓紧落实各车辆的维修保养工作，确保车辆行驶安全。
	<div sty','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1458230400','updated_at'=>'1458230400']);
        $this->insert('{{%cms_article}}',['id'=>'570','column_id'=>'14','title'=>'商贸分公司开展环境卫生整治','image'=>NULL,'description'=>'','author'=>'彭翠兰','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:13.5pt;font-family:仿宋_GB2312;background:white;color:black;\"><span style=\"font-size:18px;font-family:SimSun;\">根据丹江口市“五城联创”工作要求， </span><span style=\"fo','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1439308800','updated_at'=>'1439308800']);
        $this->insert('{{%cms_article}}',['id'=>'571','column_id'=>'14','title'=>'公司献力“五城联创” 积极履行社会责任','image'=>NULL,'description'=>'','author'=>'','content'=>'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:18px;font-family:SimSun;\">近日，丹江口市</span><span style=\"font-size:18px;font-family:SimSun;\">“</span><span style=\"font-size:18px;font-family:SimSun;\">五城联创</span><span style=\"font-size:18px;font','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1439308800','updated_at'=>'1439308800']);
        $this->insert('{{%cms_article}}',['id'=>'572','column_id'=>'14','title'=>'坝前公园加强环境整治','image'=>NULL,'description'=>'','author'=>'李继红','content'=>'<span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14pt;font-family:仿宋_GB2312;\"><span style=\"font-size:18px;font-family:SimSun;\">为迎接五城联创，从</span><span style=\"font-size:18px;font-family:SimSun;\">7</span><span style=\"font-','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1439395200','updated_at'=>'1439395200']);
        $this->insert('{{%cms_article}}',['id'=>'573','column_id'=>'14','title'=>'珍爱生命 拒绝烟草<br />——龙山宾馆全面开展创建“无烟单位”活动<br />','image'=>NULL,'description'=>'','author'=>'贾韵','content'=>'<p>
	&nbsp; &nbsp; &nbsp; 为进一步贯彻落实博远司办[2015]25号《关于印发〈博远置业公司、服务管理中心、旅游发展公司创建无烟单位实施方案〉的通知》精神，创建无烟工作环境，引领文明健康生活，营造绿色生态环境，龙山宾馆结合实际，多措并举，积极开展禁烟活动，创建无烟单位。
</p>
<p>
	&nbsp; &nbsp; &nbsp; 一是成立禁烟控烟工作小组，加强全馆禁烟控烟工作，各部门负责人及质检小组成员分任控烟监督员和巡查员，责任层层分解，落实到人。
</p>
<p>
	&nb','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1440518400','updated_at'=>'1440518400']);
        $this->insert('{{%cms_article}}',['id'=>'574','column_id'=>'14','title'=>'加油站召开控烟专题会','image'=>NULL,'description'=>'','author'=>'彭建华','content'=>'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14pt;font-family:仿宋_GB2312;\">根据公司（中心）文件精神，加油站于<span>8</span>月<span>24</span>日下午组织召开了控烟专题会。会上要求员工深刻领会公司文件精神，扎实推进公共场所室内控烟工作的开展，倡导健康生活方式，营造绿色生态环境，把加油站打造成无烟单位。彭建华在会上要求加油站广大员工积极参与到控烟禁烟工作中来，把加油站的','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1440604800','updated_at'=>'1440604800']);
        $this->insert('{{%cms_article}}',['id'=>'575','column_id'=>'14','title'=>'商贸分公司开展“打造健康环境、营造美丽人生”禁烟活动','image'=>NULL,'description'=>'','author'=>'彭翠兰','content'=>'<p>
	&nbsp; &nbsp; &nbsp; 商贸分公司根据博远司办〔2015〕25号《关于印发〈博远置业公司、服务管理中心、旅游发展公司创建无烟单位实施方案〉的通知》精神，专门成立了禁烟领导小组，制定了一系列禁烟条例及管理办法。
</p>
<p>
	&nbsp; &nbsp; &nbsp;为了响应公司禁烟号召，商贸分公司于8月28日上午开展“打造健康环境、营造美丽人生”禁烟活动，倡导文明、健康向上的生活方式。活动当天，高绶天经理带队到各个办公室、机关食堂、职工大学，用通俗易懂的语言从吸烟减少寿命、','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1440691200','updated_at'=>'1440691200']);
        $this->insert('{{%cms_article}}',['id'=>'576','column_id'=>'14','title'=>'积极行动早预防','image'=>NULL,'description'=>'','author'=>'赵雁祥','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1513180800','updated_at'=>'1513180800']);
        $this->insert('{{%cms_article}}',['id'=>'577','column_id'=>'14','title'=>'中心车队组织人员进行大扫除','image'=>NULL,'description'=>'','author'=>'聂国霞','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp;&nbsp;3月22日上午，中心车队组织全体人员对车队的水沟污泥、院内杂草树叶进行了彻底的清理。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 春天是万物生长的季节，也是蚊虫孳生的季节。为确保车队有一个清洁、卫生、优美的良好环境，在队长陆建','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1458576000','updated_at'=>'1458576000']);
        $this->insert('{{%cms_article}}',['id'=>'578','column_id'=>'14','title'=>'整治环境卫生  助力五城联创','image'=>NULL,'description'=>'','author'=>'赵雁祥、王敏','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	<span style=\"font-size:18px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp;&nbsp;4月13日，商贸分公司会同跃进门社区工作人员一道对原轧钢厂厂区开展环境卫生集中整治行动。 </span>
</','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1460649600','updated_at'=>'1460649600']);
        $this->insert('{{%cms_article}}',['id'=>'585','column_id'=>'14','title'=>'离退服务部召开老同志座谈会','image'=>NULL,'description'=>'','author'=>'张余','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14px;\">&nbsp;</span><span style=\"font-size:16px;\">1月20日下午，离退部召开了老同志座谈会，会上征集了2014年民主生活会老同志们的意见建议。 </span> 
<div>
	<span style=\"font-size:16px;\">会议首先','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1421683200','updated_at'=>'1421683200']);
        $this->insert('{{%cms_article}}',['id'=>'586','column_id'=>'14','title'=>'服务管理中心退休职工史久新荣膺“最美水都人”称号','image'=>NULL,'description'=>'','author'=>'张余','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-size:16px;\"> 2月3日，丹江口市首届“最美水都人”、第三届“道德模范”颁奖活动在汉江国际四楼宴会厅隆重举行，服务管理中心退休教师史久新荣膺“最美水都人”称号，这是10名“最美水都人”中唯一一位汉江集团职工。</span><br />
<p>
	<img alt=\"\" src=\"/upload/','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1422979200','updated_at'=>'1422979200']);
        $this->insert('{{%cms_article}}',['id'=>'587','column_id'=>'14','title'=>'离退服务部组织老年门球赛','image'=>NULL,'description'=>'','author'=>'张余','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-size:16px;\">&nbsp; </span><span style=\"font-size:16px;\">4月14日下午，服管中心离退休服务部在局职机关门球场举行老年门球赛，来自服管中心的退休老','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1429027200','updated_at'=>'1429027200']);
        $this->insert('{{%cms_article}}',['id'=>'588','column_id'=>'14','title'=>'服务管理中心组织退休职工体检 为退休职工健康“买单”','image'=>NULL,'description'=>'','author'=>'甘润','content'=>'<span id=\"Label_lr\"><span style=\"font-family:宋体;color:black;\"><span style=\"font-size:16px;\">&nbsp;&nbsp;&nbsp;&nbsp;近日，服务管理中心组织为中心</span><span style=\"font-size:16px;\">600</span><span style=\"font-size:16px;\">余名离退休职工进行健康体检，体现“以人为本、关爱职工”的服务理念。</span></span> ','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1428249600','updated_at'=>'1428249600']);
        $this->insert('{{%cms_article}}',['id'=>'589','column_id'=>'14','title'=>'离退服务部积极组织气排球训练和比赛','image'=>NULL,'description'=>'','author'=>'张余','content'=>'<p style=\"text-indent:28pt;\" class=\"MsoNormal\">
	<span style=\"font-family:SimSun;color:#333333;font-size:16px;\">为了丰富广大离退休职工的晚年生活，营造文明和谐的企业文化氛围，促进老同志的身心健康，</span><span style=\"font-family:SimSun;color:#333333;font-size:16px;\">离退服务部</span><span style=\"font-f','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1437667200','updated_at'=>'1437667200']);
        $this->insert('{{%cms_article}}',['id'=>'590','column_id'=>'14','title'=>'离退服务部及时开展原众联公司投资清缴工作','image'=>NULL,'description'=>'','author'=>'张余','content'=>'<span style=\"font-size:14pt;font-family:宋体;\"><span>&nbsp;&nbsp;&nbsp; </span>根据随州市人民检察院要求和委托，集团公司安排部署了原众联投资公司破产前违规清退的部分职工出资及资金占用费清缴工作，服务管理中心离退服务部于</span><span style=\"font-size:14pt;\">7</span><span style=\"font-size:14pt;font-family:宋体;\">月</span><span style','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1438704000','updated_at'=>'1438704000']);
        $this->insert('{{%cms_article}}',['id'=>'591','column_id'=>'14','title'=>'中心召开上半年生产经营情况通报座谈会<br />','image'=>NULL,'description'=>'','author'=>'张余','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span style=\"font-size:14pt;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8</span><span style=\"font-size:14pt;font-family:宋体;\">月</span><span style=\"font-size:14pt;\">24</span><span style=\"font-size:14pt;font-f','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1440432000','updated_at'=>'1440432000']);
        $this->insert('{{%cms_article}}',['id'=>'592','column_id'=>'14','title'=>'学习十九大精神有感（詹重德）','image'=>NULL,'description'=>'','author'=>'詹重德','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1513094400','updated_at'=>'1513094400']);
        $this->insert('{{%cms_article}}',['id'=>'593','column_id'=>'14','title'=>'有幸参加聆听博远置业公司党委学习贯彻<br />十九大精神宣讲大会有感（詹重德）','image'=>NULL,'description'=>'','author'=>'詹重德','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1513094400','updated_at'=>'1513094400']);
        $this->insert('{{%cms_article}}',['id'=>'594','column_id'=>'14','title'=>'夕阳辉映党旗红','image'=>NULL,'description'=>'','author'=>'史久新','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1513180800','updated_at'=>'1513180800']);
        $this->insert('{{%cms_article}}',['id'=>'595','column_id'=>'14','title'=>'展夕阳风采 显健康魅力','image'=>NULL,'description'=>'','author'=>'张玲','content'=>'<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10月19日下午，在重阳佳节来临之际，服务管理中心在坝前公园举办了以“文化养心，康体健身”为主题的重阳节系列文体活动，400多名离退休老同志参加了活动。
</p>
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 服务管理中心全体领导班子成员出席了开幕式，中心副主任、党委副书记谭本文代表中心和公司党委致辞，向老年朋友们致以节日的问候。他肯定了广大老同志一年来对公司（中心）各项工作的关心支持和理解帮助，','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1445356800','updated_at'=>'1445356800']);
        $this->insert('{{%cms_article}}',['id'=>'596','column_id'=>'14','title'=>'服务管理中心组织老党员学习《准则》和《纪律处分条例》','image'=>NULL,'description'=>'','author'=>'王安成','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14pt;\">12</span><span style=\"font-family:宋体;font-size:14pt;\">月</span><span style=\"font-size:14pt;\">10</span><','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1450022400','updated_at'=>'1450022400']);
        $this->insert('{{%cms_article}}',['id'=>'597','column_id'=>'14','title'=>'服务管理中心召开2016年迎新春座谈会','image'=>NULL,'description'=>'','author'=>'王安成','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp;&nbsp;1月27日下午，服务管理中心召开2016年离退休职工迎春座谈会，离退休职工代表40余人参加了座谈会。中心领导王森林、谭本文和相关部门人员参加了会议，会议由中心副主任谭本文主持。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 座谈','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1453996800','updated_at'=>'1453996800']);
        $this->insert('{{%cms_article}}',['id'=>'598','column_id'=>'14','title'=>'服务做细点  感动就多点','image'=>NULL,'description'=>'','author'=>'王安成','content'=>'<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-family:SimSun;font-size:18px;\">春节将至，又到了离退服务部为离退休老同志发放春节物资的时候。由于原汉江中学小区有40余户老教师，离单位较远，而且大多数是年龄较大和身体不好的，不方便领取春节物资。2月1日早上，寒风凛冽，熊建程部长带领部门工作人员，把春节物资装车运送到小区发放。老教师们对此非常感动，连声表示感谢。</span>
</p>
<p>
	<span ','link'=>NULL,'sort'=>'0','view'=>'1','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1454428800','updated_at'=>'1454428800']);
        $this->insert('{{%cms_article}}',['id'=>'599','column_id'=>'14','title'=>'服务管理中心开展“迎新春 送温暖”走访慰问活动','image'=>NULL,'description'=>'','author'=>'王青 宛英','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14pt;font-family','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1454515200','updated_at'=>'1454515200']);
        $this->insert('{{%cms_article}}',['id'=>'600','column_id'=>'14','title'=>'离退服务部安排大病互助保险相关工作','image'=>NULL,'description'=>'','author'=>'王安成','content'=>'<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:16pt;\">2</span><span style=\"font-size:16pt;font-family:宋体;\">月</span><span style=\"font-size:16pt;\">28</span><span style=\"font-size:16pt;font-family:宋体;\">日，根据集团公司工会通知，组织全体参保职工参加</span><s','link'=>NULL,'sort'=>'0','view'=>'2','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1456761600','updated_at'=>'1456761600']);
        $this->insert('{{%cms_article}}',['id'=>'601','column_id'=>'14','title'=>'离退服务部组织离退休老同志参观敬老院','image'=>NULL,'description'=>'','author'=>'王安成','content'=>'<span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; <span style=\"font-size:16pt;\">4</span><span style=\"font-size:16pt;font-family:宋体;\">月</span><span style=\"font-size:16pt;\">20</span><span style=\"font-size:16pt;font-family:宋体;\">日下午，离退服务部组织</span><spa','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1461168000','updated_at'=>'1461168000']);
        $this->insert('{{%cms_article}}',['id'=>'616','column_id'=>'13','title'=>'博远加油站和丹江口市消防大队联合举行消防演练','image'=>NULL,'description'=>'','author'=>'彭建华','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;为加强加油站员工应对突发事件时的处置能力，提高员工安全防范意识，6月9日晚博远公司加油站和丹江口市消防大队联合举行了“加油站油罐车在卸油过程中卸油口起火”应急预案演练。博远公司应急救援队和加油站全体职工参加了演练。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;晚上19：30，丹江口市消防大队的指挥车及2辆消防车满载消防人员来到博远公司沿江路加油站，和加油站员工进行联合演','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1433865600','updated_at'=>'1433865600']);
        $this->insert('{{%cms_article}}',['id'=>'617','column_id'=>'13','title'=>'商贸分公司组织职工与承租户进行安全知识培训','image'=>NULL,'description'=>'','author'=>'赵雁祥','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;6月5日商贸分公司召集商贸员工、承租户代表共40余人进行了《消防安全知识培训》、《租赁经营场所消防知识讲座》等安全教材的学习.
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;本次学习通过PPT演示、视频播放、互动交流的形式，向职工、承租户讲解了火灾的危害、火灾发生的原因、不同火灾的扑救方法、火场逃生方法及注意事项、灭火器的正确配置及使用方法，学习了租赁经营场所在消防方面的','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1433779200','updated_at'=>'1433779200']);
        $this->insert('{{%cms_article}}',['id'=>'618','column_id'=>'13','title'=>'商贸分公司开展“五一”前安全大检查','image'=>NULL,'description'=>'','author'=>'赵雁祥','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp;为确保公司辖区节日安全，4月27日，商贸分公司开展商贸分公司开展“五·一”前安全大检查。
</p>
<p>
	&nbsp; &nbsp; &nbsp;此次安全检查，分三个组分别对经营实体、商业门面、民租房进行安全大检查，安全责任落实到人，加大对重点场所、重点部位和重点设备、设施的检查力度、密度，做到不留任何盲区、死角。尤其是针对人员密集场所，如京华超市、局宾馆、酒店、网吧等的消防设施、安全警示标志、疏散通道、安全','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1430668800','updated_at'=>'1430668800']);
        $this->insert('{{%cms_article}}',['id'=>'619','column_id'=>'13','title'=>'加油站开展“五一”节前安全大检查','image'=>NULL,'description'=>'','author'=>'仲霞','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;为了确保站内的设备设施的安全运行，4月27日上午，加油站开展了“五一”节前的安全大检查。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;安全检查前，加油站组织召开了安全生产会议，会议对近期的销售以及节日期间的安全工作做了具体的安排，针对近期销售量下滑，加油站发动全体员工在提高服务质量的同时，积极参与到销售中去，努力超额完成全年销售任务。 &nbsp; &nbsp; &nb','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1430668800','updated_at'=>'1430668800']);
        $this->insert('{{%cms_article}}',['id'=>'620','column_id'=>'13','title'=>'火情就是命令 安全重于泰山——博远公司成功阻止一场火灾的发生','image'=>NULL,'description'=>'','author'=>'詹世军','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;4月28日晚，当大部分人们已进入梦乡，有一群人却急速赶往松涛山庄，奋力扑火，将一场可能发生的大火扑灭，及时消除了一场火灾。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;十一点十四分，松涛山庄管理处负责人接到火情报告，立即向博远公司领导汇报，向应急救援队求援,并从车队调一辆水车。火情就是命令，应急救援队接到通知后，火速赶往现场。此时，树林里枯叶及低矮灌木噼噼啪啪燃烧，火势','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1430323200','updated_at'=>'1430323200']);
        $this->insert('{{%cms_article}}',['id'=>'621','column_id'=>'13','title'=>'公司荣获“丹江口市社会管理综合治理工作先进集体”称号','image'=>NULL,'description'=>'','author'=>'丁维','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp;近日，丹江口市社会管理综合治理委员会下文授于汉江集团博远置业有限责任公司2014年度全市社会管理综合治理工作先进集团荣誉称号。同时，博远公司副经理李进被授于2014年度全市社会管理综合治理工作先进个人。
</p>
<p>
	&nbsp; &nbsp; &nbsp;2014年随着博远公司管理区域和服务对象的不断增加，加之单位分散，点多面广，管理难度较大，给稳定带来一些不利因素。博远公司按照综治委综治工作相关文件和会','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1427126400','updated_at'=>'1427126400']);
        $this->insert('{{%cms_article}}',['id'=>'622','column_id'=>'13','title'=>'公司安委会安排部署新一年安全生产工作','image'=>NULL,'description'=>'','author'=>'办公室','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;2月27日下午，公司安委会召开全体成员会暨第一季度安全生产例会，安排部署新一年安全生产工作。会议由安委会副主任委员张勇主持。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;安委会办公室主任盘家胜首先代表安委会全面总结了公司（中心）2014年安全生产工作，认为2014年公司（中心）紧紧围绕“强化红线意识 、促进安全发展”这个主题，不断夯实安全基础，持续强化安全监管，坚持抓好','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1425052800','updated_at'=>'1425052800']);
        $this->insert('{{%cms_article}}',['id'=>'623','column_id'=>'13','title'=>'商贸分公司多措并举保障节日安全','image'=>NULL,'description'=>'','author'=>'赵雁祥','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;春节期间，为有效预防各类安全事故发生，商贸分公司对所辖区域的安全工作进行了周密安排和现场督查。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;商贸分公司对委托管辖的资产、土地、经营实体、门面、民租房进行划片管理，安全责任落实到人，加大对重点场所、重点部位和重点设备、设施的检查力度、密度，做到了“横向到边，纵向到底”不留盲区、死角。联系丹江口市公安分局对大坝二路万山木材厂、','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1424880000','updated_at'=>'1424880000']);
        $this->insert('{{%cms_article}}',['id'=>'624','column_id'=>'13','title'=>'春节将至 安全先行——龙山宾馆节前安全大检查活动','image'=>NULL,'description'=>'','author'=>'程贵斌','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;为确保春节期间宾馆各项工作安全开展，2月14日上午，宾馆领导率各部门负责人对近期安全生产进行了督导检查。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;本次安全检查，主要针对宾馆配电室、餐厅、厨房、仓库、锅楼房等重点部位进行了检查，共检查出隐患十余条，按照宾馆安全隐患整改制度的要求，将在2月17日前各部门全部整改完毕后将再次进行复查。
</p>
<p>
	<br />
	','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1424016000','updated_at'=>'1424016000']);
        $this->insert('{{%cms_article}}',['id'=>'625','column_id'=>'13','title'=>'加油站开展春节前安全检查','image'=>NULL,'description'=>'','author'=>'程芳','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;春节临近，为了确保春节期间加油工作的正常运行，消除各类安全隐患， 2月12日上午，加油站开展春节前安全检查。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;站长彭建华带领安全员、加油班班长对加油站配电房、油罐区、加油机、保险柜、厨房等进行了全面细致的安全检查，还重点对消防安全设施、电器线路、消防通道、物品放置等关键点进行了认真检查，并对检查出来的安全隐患问题进行了及时整改','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1424016000','updated_at'=>'1424016000']);
        $this->insert('{{%cms_article}}',['id'=>'626','column_id'=>'13','title'=>'商贸分公司开展安全隐患排查','image'=>NULL,'description'=>'','author'=>'袁功伟','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;1月28、29日，大雪纷飞，气温骤降。为防止民租房租户生柴取暖，杜绝消防隐患，商贸分公司高绶天经理带队对王大沟、苏家沟各民租房开展了一次安全隐患排查工作。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;经检查，发现四户人家存在生柴和用电炉取暖、用电线路凌乱等安全隐患。考虑到部分租户安全知识欠缺、防范意识不足等情况，我们在下达整改通知书并要求其整改的同时，告知租户如何安全取','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1422547200','updated_at'=>'1422547200']);
        $this->insert('{{%cms_article}}',['id'=>'627','column_id'=>'13','title'=>'各基层单位组织员工清扫积雪','image'=>NULL,'description'=>'','author'=>'mkjc','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;1月27日，丹江口迎来了入冬的第一场大雪，到处一片银装素裹，同时也给人们出行带来一定的不便，给安全带来一定的风险。各基层单位纷纷行动起来，清扫积雪，方便出行，消除安全隐患。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;中心车队在陆队长的带领下，大家纷纷拿起工具，前面的拿铁锹铲，后边的用扫把扫，干得热火朝天。经过近1个多小时的劳动，将路面积雪和垃圾清扫一空，确保了道路的畅','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1422460800','updated_at'=>'1422460800']);
        $this->insert('{{%cms_article}}',['id'=>'628','column_id'=>'13','title'=>'加油站消除灌区外围安全隐患','image'=>NULL,'description'=>'','author'=>'陈莉','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; 临近春节，为了防止燃放烟花给加油站造成安全隐患，1月22日上午，博远公司加油站站长彭建华带领张晓、王英将灌区围墙外的杂树和枯枝败叶进行了清理，及时消除了灌区周围的安全隐患，以确保加油站安全运行。
</p>
<p>
	<br />
	<div style=\"text-align:center;\">
		<img class=\"pic_cont_img\" alt=\"\" src=\"/upload/image/2015','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1421856000','updated_at'=>'1421856000']);
        $this->insert('{{%cms_article}}',['id'=>'629','column_id'=>'13','title'=>'商贸分公司落实安全生产月暨安康杯活动','image'=>NULL,'description'=>'','author'=>'赵雁祥','content'=>'<span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"text-indent:28pt;\">
	<span style=\"font-size:14pt;\"><span>&nbsp;</span><span>6</span></span><span style=\"font-size:14pt;font-family:宋体;\">月</span><span style=\"font-size:14pt;\">3</span><span style=\"font-size:','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1434643200','updated_at'=>'1434643200']);
        $this->insert('{{%cms_article}}',['id'=>'630','column_id'=>'13','title'=>'商贸分公司组织租赁单位进行消防演练','image'=>NULL,'description'=>'','author'=>'赵雁祥','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;6月10日、12日商贸分公司组织协调重恒机械厂、飞速网吧和阳光贝贝幼儿园3个单位举行了消防应急演练，公司办公室、资产管理部、市场营销部等相关部门到现场观摩指导。
</p>
<p>
	&nbsp; &nb','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1435075200','updated_at'=>'1435075200']);
        $this->insert('{{%cms_article}}',['id'=>'631','column_id'=>'13','title'=>'公司开展安全生产培训和消防演练','image'=>NULL,'description'=>'','author'=>'杨宪斌','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span style=\"font-size:16px;font-family:SimSun;\"><span style=\"font-family:Tahoma;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>6</span><span style=\"font-si','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1435161600','updated_at'=>'1435161600']);
        $this->insert('{{%cms_article}}',['id'=>'632','column_id'=>'13','title'=>'商贸分公司和王大沟社区共筑管辖房屋安全网','image'=>NULL,'description'=>'','author'=>'唐宏文','content'=>'<p>
	&nbsp; &nbsp; &nbsp;6月26至27日，商贸分公司员工与王大沟社区安全、计生工作人员一起对辖区内民租房、实体承租人进行了预防极端气候安全宣传和综合安全检查活动。
</p>
<p>
	&nbsp; &nbsp; &nbsp;此次活动主要从两个方面开展。一是针对暴雨天气的安全防范，对王大沟和红卫岭的破旧平房进行入户告知并签收，家中无人的采取在门前和辖区人员多聚地张贴《安全告知》的方式进行告知，以此向各承租人宣传在暴雨天气期间需要注意的各类安全事项。二是与社区互联互动，共同走访、检查','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1436112000','updated_at'=>'1436112000']);
        $this->insert('{{%cms_article}}',['id'=>'633','column_id'=>'13','title'=>'松涛山庄管理处加强夏季安全管理','image'=>NULL,'description'=>'','author'=>'夏术敏','content'=>'<p class=\"MsoNormal\" style=\"text-align:left;\" align=\"left\">
	<span style=\"font-size:14pt;font-family:宋体;\">&nbsp;&nbsp;&nbsp; 夏季高温天气来临，松涛山庄管理处景区结合自身实际情况，加强了夏季安全管理工作。</span><span style=\"font-size:14pt;\"></span>
</p>
<p class=\"MsoNormal\" style=\"text-align:le','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1438012800','updated_at'=>'1438012800']);
        $this->insert('{{%cms_article}}',['id'=>'634','column_id'=>'13','title'=>'公司加强高温季节安全督查','image'=>NULL,'description'=>'','author'=>'办公室','content'=>'&nbsp;
<p style=\"text-indent:28pt;\" class=\"MsoNormal\">
	<span style=\"font-size:14pt;\">7</span><span style=\"font-family:宋体;font-size:14pt;\">月中旬以来，面对持续高温，公司安全检查组多次到基层单位开展安全检查，力保高温季节安全。</span><span style=\"font-size:14pt;\"></span>
</p>
<p>
	<span style=\"font-','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1438444800','updated_at'=>'1438444800']);
        $this->insert('{{%cms_article}}',['id'=>'635','column_id'=>'13','title'=>'公司应急救援队为重要赛事安防巡逻','image'=>NULL,'description'=>'','author'=>'办公室','content'=>'<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8月8日-11日，为做好第五届中国摩托艇联赛（丹江口站）期间坝前区安防工作，公司应急救援队派出7个班次、40多人次开展坝前区安防巡逻，有力维护了重要赛事期间本单位负责管辖的公共区域秩序。
</p>
<div style=\"text-align:center;\">
	<img class=\"pic_cont_img\" alt=\"\" src=\"/upload/image/20150811/20150811182235_9768.','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1439222400','updated_at'=>'1439222400']);
        $this->insert('{{%cms_article}}',['id'=>'636','column_id'=>'13','title'=>'儿童游泳池重视安全管理','image'=>NULL,'description'=>'','author'=>'李继红','content'=>'<span id=\"Label_lr\"> 
<p>
	<b><span style=\"font-size:14pt;font-family:仿宋_GB2312;\"><span style=\"font-size:18px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp;<span style=\"font-size:18px;font-family:SimSun;\">近日天气炎热，坝前公园</span><span style=\"font-size:18px;font-family','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1439395200','updated_at'=>'1439395200']);
        $this->insert('{{%cms_article}}',['id'=>'637','column_id'=>'13','title'=>'应急救援队一分队进行消防器械操作使用训练','image'=>NULL,'description'=>'','author'=>'陈钢','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;8月15日早上6点半，公司应急救援队一分队在松涛山庄品茗轩停车场，进行了移动抽水水泵和电瓶消防车水泵设备操作使用流程科目训练。其目的是让一分队每位队员在松涛山庄遇到突发火情时，都能正确快速地启动使用消防器械，及时扑灭火灾。
</p>
<p>
	&nbsp; &nbsp; &nbsp;&nbsp;应急救援大队张冬生大队长和','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1439740800','updated_at'=>'1439740800']);
        $this->insert('{{%cms_article}}',['id'=>'638','column_id'=>'13','title'=>'加油站召开天津8.12危化品仓库爆炸专题教育分析会','image'=>NULL,'description'=>'','author'=>'彭建华','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p style=\"text-indent:2em;\">
	<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> </span></span></span></span></span></span> 
</p>
<p>
	<span st','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1439913600','updated_at'=>'1439913600']);
        $this->insert('{{%cms_article}}',['id'=>'639','column_id'=>'13','title'=>'小区安全的守护者<br />——记山水庭院小区保安工作<br />','image'=>NULL,'description'=>'','author'=>'宛英','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-size:14pt;font-family:宋体;color:#333333;\">山水庭院小区是丹江口市目前占地面积最大的生态宜居住宅小区，目前小区常住住户<span>400</span>余户，居住人员多、管理区域大，小区安全保障工作是重中之重。无论白天黑夜，总有一群人坚守在保卫山水庭院安全的第一','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1440950400','updated_at'=>'1440950400']);
        $this->insert('{{%cms_article}}',['id'=>'640','column_id'=>'13','title'=>'武汉分公司开展尚湖熙园元旦节前消防演练','image'=>NULL,'description'=>'','author'=>'黎碧娟','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1514217600','updated_at'=>'1514217600']);
        $this->insert('{{%cms_article}}',['id'=>'641','column_id'=>'13','title'=>'大雪中的“安全哨兵”','image'=>NULL,'description'=>'','author'=>'王敏','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1514995200','updated_at'=>'1514995200']);
        $this->insert('{{%cms_article}}',['id'=>'642','column_id'=>'13','title'=>'松涛山庄管理处党支部组织除雪保安全','image'=>NULL,'description'=>'','author'=>'高  原','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1515340800','updated_at'=>'1515340800']);
        $this->insert('{{%cms_article}}',['id'=>'643','column_id'=>'13','title'=>'清理积雪开辟“放心路”','image'=>NULL,'description'=>'','author'=>'田昊阳','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1515340800','updated_at'=>'1515340800']);
        $this->insert('{{%cms_article}}',['id'=>'644','column_id'=>'13','title'=>'公司（中心）召开安委会扩大会议','image'=>NULL,'description'=>'','author'=>'李书林','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1515427200','updated_at'=>'1515427200']);
        $this->insert('{{%cms_article}}',['id'=>'645','column_id'=>'13','title'=>'武汉分公司认真部署2018年安全生产工作','image'=>NULL,'description'=>'','author'=>'黄伟','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1515513600','updated_at'=>'1515513600']);
        $this->insert('{{%cms_article}}',['id'=>'646','column_id'=>'13','title'=>'集团公司对博远置业公司进行安全生产考核','image'=>NULL,'description'=>'','author'=>'袁仪 李书林','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1516204800','updated_at'=>'1516204800']);
        $this->insert('{{%cms_article}}',['id'=>'647','column_id'=>'13','title'=>'大坝景区除雪清冰保安全','image'=>NULL,'description'=>'','author'=>'杨珏','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1516982400','updated_at'=>'1516982400']);
        $this->insert('{{%cms_article}}',['id'=>'648','column_id'=>'13','title'=>'再战风雪 保障通畅','image'=>NULL,'description'=>'','author'=>'门强　袁世红','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1516982400','updated_at'=>'1516982400']);
        $this->insert('{{%cms_article}}',['id'=>'649','column_id'=>'13','title'=>'襄阳分公司开展消防培训','image'=>NULL,'description'=>'','author'=>'门强','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14pt;\">9</span><span style=\"font-size:14pt;font-family:宋体;\">月</span><span style=\"font-size:14pt;\">7</span><span style=\"font-size:14pt;font-family:宋体;','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1441814400','updated_at'=>'1441814400']);
        $this->insert('{{%cms_article}}',['id'=>'650','column_id'=>'13','title'=>'公司组织油气经营单位开展安全专题学习','image'=>NULL,'description'=>'','author'=>'办公室','content'=>'<div style=\"text-align:center;\">
	<img class=\"pic_cont_img\" alt=\"\" src=\"/upload/image/20150918/20150918212836_2793.jpg\" />
</div>
<span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;
<p class=\"MsoNormal\" style=\"text-indent:28pt;\">
	<span style=\"font-size:14pt;\"','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1442246400','updated_at'=>'1442246400']);
        $this->insert('{{%cms_article}}',['id'=>'651','column_id'=>'13','title'=>'加油站举行“汽车油箱口着火”应急预案演练','image'=>NULL,'description'=>'','author'=>'彭建华','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-size:14pt;font-family:仿宋_GB2312;color:black;\"><span style=\"font-size:18px;font-family:SimSun;\">为了确保“双节”的安全工作，</span><span style=\"font-size:18px;font','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1443024000','updated_at'=>'1443024000']);
        $this->insert('{{%cms_article}}',['id'=>'652','column_id'=>'13','title'=>'商贸分公司开展双节安全大检查','image'=>NULL,'description'=>'','author'=>'赵雁祥','content'=>'<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 为确保公司管辖区土地、资产安全，9月21日—27日，商贸分公司进行了双节安全大检查。
</p>
<p>
	&nbsp; &nbsp;&nbsp;&nbsp; 此次安全检查人员少、任务重，商贸分公司通过人员交叉、轮换，在不影响日常工作的前提下组成了3个检查小组，分别对经营实体、商业门面、民租房进行安全大检查。在这次安全大检查中，加大了对危险化学品使用和储存以及重点场所、重点部位和重点设备、设施的检查力度、频次，做到横向到边、纵向到底，不','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1443369600','updated_at'=>'1443369600']);
        $this->insert('{{%cms_article}}',['id'=>'653','column_id'=>'13','title'=>'大坝景区开展双节安全卫生大检查','image'=>NULL,'description'=>'','author'=>'王敏','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 9月25日，大坝景区管理处进行了双节安全卫生大检查。
</p>
<p>
	&nbsp; &nbsp; &nbsp; 上午，景区经理与各班组长一行检查了景区各工作区域的安全设施，统一协调了各类安全设置事项，确保节日景区安全、和谐、稳定。
</p>
<p>
	&nbsp; &nbsp; &nbsp; 下午，景区全体员工在对各自责任区域自查的基础上开展了环境','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1443369600','updated_at'=>'1443369600']);
        $this->insert('{{%cms_article}}',['id'=>'654','column_id'=>'13','title'=>'筑牢安全基础 保障小区节日平安','image'=>NULL,'description'=>'','author'=>'曾萍','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:12pt;font-family:宋体;\">中秋、国庆双节来临之际，为了给业主提供一个安全、舒适、温馨的居住环境，博远公司物业分公司在节前做了细致的安全检查及整治工作。</span><span style=\"font-size:12pt;\"></span> 
<p class=\"MsoNormal\" styl','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1443369600','updated_at'=>'1443369600']);
        $this->insert('{{%cms_article}}',['id'=>'655','column_id'=>'13','title'=>'商贸分公司国庆期间忙抢修','image'=>NULL,'description'=>'','author'=>'唐宏文','content'=>'<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 国庆期间，商贸分公司协同水电公司电管所和线维车间，对恒通厂区高低压输电线路存在安全隐患的路段，进行了抢修。
</p>
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 在国庆假期巡查中，商贸分公司巡查人员发现恒通厂区变电房外的高压输电线路的铁塔上爬满了藤蔓，路边的樟树也遮盖了低压电线，存在安全隐患。接到巡查人员报告后，分公司经理及时联系了水电公司有关人员到现场实地查看，在确认该区域线路存在安全隐患后，','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1444406400','updated_at'=>'1444406400']);
        $this->insert('{{%cms_article}}',['id'=>'656','column_id'=>'13','title'=>'商贸分公司开展液化气瓶使用安全专项检查工作','image'=>NULL,'description'=>'','author'=>'赵雁祥','content'=>'<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10月10日，安徽芜湖发生了经营门面液化气瓶泄漏燃烧爆炸事故，导致多人伤亡。对此，商贸分公司高度关注，19日召集分公司工作人员就安全事故进行了剖析，并安排房管员、安全员20日开始对各管辖区域的承租户进行液化气使用安全专项检查。
</p>
<p>
	&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;在此次检查活动中，商贸分公司、液化气分公司通力协作、配合，取得了良好的效果。液化气分公司专门派技术人员对商贸分公司工作','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1445443200','updated_at'=>'1445443200']);
        $this->insert('{{%cms_article}}',['id'=>'657','column_id'=>'13','title'=>'大坝景区安全班织牢安全网','image'=>NULL,'description'=>'','author'=>'陈自力','content'=>'<span id=\"Label_lr\"> 11月7日，大坝景区管理处安全班的同志们紧紧围绕人、点、管、线四个方面,对景区安全管理进行了研讨，查缺补漏，加紧各岗位的安全工作的自查自纠，严格管理，杜绝隐患。<br />
通过集思广益的讨论，加大了安全思想教育力度，让每一名景区安全员时刻认清安全形势，绷紧安全这根弦，在安全重点区域，如坝顶十八跨段的安全敏感地带，明确了安全员的站位，还强调了班组纪律，明确了违章追查制度，如发现有违章行为，将追查个人的责任。大家还对日常安全员的工作程序进行了梳理，针对不合理的细节问','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1447171200','updated_at'=>'1447171200']);
        $this->insert('{{%cms_article}}',['id'=>'658','column_id'=>'13','title'=>'商贸分公司组织开展“11.9”消防宣传日活动','image'=>NULL,'description'=>'','author'=>'赵雁祥','content'=>'&nbsp; &nbsp; &nbsp;<span style=\"font-size:18px;font-family:SimSun;\"> 为普及消防安全知识，提升租户消防安全意识，商贸分公司在第25个消防宣传日来临之际，于11月13日组织卧龙太子酒店举行了消防安全知识培训及消防应急演练活动，博远公司安委会等到场指导。</span><br />
<span style=\"font-size:18px;font-family:SimSun;\">&nbsp; &nbsp; &nbsp; 活动中，安全员向现场酒','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1447689600','updated_at'=>'1447689600']);
        $this->insert('{{%cms_article}}',['id'=>'659','column_id'=>'13','title'=>'襄阳分公司开展冬季消防培训','image'=>NULL,'description'=>'','author'=>'李红玲','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span style=\"font-size:18px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp; 12月1日下午5：30分，襄阳分公司组织全体人员进行冬季消防培训。</span><br />
<span style=\"font-size:18px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp;&nbsp;此次消防培训的主要内容包括:小区楼栋发生电失火后，如何','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1449072000','updated_at'=>'1449072000']);
        $this->insert('{{%cms_article}}',['id'=>'660','column_id'=>'13','title'=>'大坝景区开展安全驾驶培训','image'=>NULL,'description'=>'','author'=>'郭军辉','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:18px;font-family:SimSun;\">12</span><span style=\"font-size:18px;font-family:SimSun;\">月</span><span style=\"font-size:18px;font-family:SimSun;\">3</span><span ','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1449158400','updated_at'=>'1449158400']);
        $this->insert('{{%cms_article}}',['id'=>'661','column_id'=>'13','title'=>'龙山宾馆参加保卫(武装)人员培训','image'=>NULL,'description'=>'','author'=>'程贵斌','content'=>'<p style=\"text-indent:21pt;\" class=\"MsoNormal\">
	<span style=\"font-size:14pt;\">&nbsp;2015</span><span style=\"font-family:宋体;font-size:14pt;\">年</span><span style=\"font-size:14pt;\">12</span><span style=\"font-family:宋体;font-size:14pt;\">月</span><span style=\"f','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1449158400','updated_at'=>'1449158400']);
        $this->insert('{{%cms_article}}',['id'=>'662','column_id'=>'13','title'=>'液化气分公司积极做好越冬安全工作','image'=>NULL,'description'=>'','author'=>'李书林','content'=>'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14pt;font-family:仿宋_GB2312;\"><span style=\"font-size:18px;font-family:SimSun;\">冬季来临，气温逐渐降低。液化气分公司根据季节变化，积极开展越冬安全相关工作，确保安全生产和经营工作有序开展。</span><span></span></span> 
<p class=\"MsoNormal\" style=\"','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1449331200','updated_at'=>'1449331200']);
        $this->insert('{{%cms_article}}',['id'=>'663','column_id'=>'13','title'=>'公司开展冬季防火安全检查','image'=>NULL,'description'=>'','author'=>'丁维','content'=>'&nbsp;
<p style=\"text-indent:30pt;\" class=\"MsoNormal\">
	<span style=\"font-family:宋体;font-size:15pt;\">为贯彻落实集团公司关于切实做好冬春防火工作的通知，</span><span style=\"font-size:15pt;\"> <span>12</span><span style=\"font-family:宋体;\">月</span><span>8</span><span style=\"font-family','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1449504000','updated_at'=>'1449504000']);
        $this->insert('{{%cms_article}}',['id'=>'664','column_id'=>'13','title'=>'小车队召开冬季安全生产会','image'=>NULL,'description'=>'','author'=>'李晓沛','content'=>'<p style=\"text-indent:19.5pt;background:white;\">
	<span style=\"font-family:\"Times New Roman\";font-size:18px;\">12</span><span style=\"font-size:18px;\"><span style=\"font-size:18px;\">月</span></span><span style=\"font-family:\"Times New Roman\";font-size:18px;\">1','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1450368000','updated_at'=>'1450368000']);
        $this->insert('{{%cms_article}}',['id'=>'665','column_id'=>'13','title'=>'商贸分公司切实做好冬春火灾防控工作','image'=>NULL,'description'=>'','author'=>'赵雁祥','content'=>'<p style=\"text-indent:27pt;\" class=\"MsoNormal\">
	<span style=\"font-family:SimSun;font-size:18px;\">12</span><span style=\"font-family:SimSun;font-size:18px;\">月</span><span style=\"font-family:SimSun;font-size:18px;\">8</span><span style=\"font-family:SimSun;fo','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1450368000','updated_at'=>'1450368000']);
        $this->insert('{{%cms_article}}',['id'=>'666','column_id'=>'13','title'=>'加油站开展春节前设备检修工作','image'=>NULL,'description'=>'','author'=>'陈丽','content'=>'<p style=\"text-indent:28pt;\" class=\"MsoNormal\">
	<span style=\"font-family:宋体;font-size:14pt;\"><span style=\"font-family:SimSun;font-size:18px;\">春节临近，为了确保春节期间加油站的安全和设备正常运行</span><span style=\"font-family:SimSun;font-size:18px;\">,</span><span style=\"font-fami','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1453046400','updated_at'=>'1453046400']);
        $this->insert('{{%cms_article}}',['id'=>'667','column_id'=>'13','title'=>'龙山宾馆组织防冻安全检查','image'=>NULL,'description'=>'','author'=>'王政','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 1月18日,气象局发布未来几天的气温预报，预计丹江口市将出现气温骤降大雪天气，最低温度将降至-11℃左右。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 龙山宾馆接到通知后，及时组织安全检查小组对全馆设备设施开展了防冻安全检查。重点查看了','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1453132800','updated_at'=>'1453132800']);
        $this->insert('{{%cms_article}}',['id'=>'668','column_id'=>'13','title'=>'大坝景区运输部加强车辆防冻维护','image'=>NULL,'description'=>'','author'=>'郭军辉','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 根据天气预报预知，湖北将迎来“霸王级”寒潮，最低温将达到-8℃----10℃，极低温天气对车辆的安全运行是一个极大的考验。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 1月19日下午，大坝景区运输部在接到降温通知后，马上组织全体驾驶员召','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1453132800','updated_at'=>'1453132800']);
        $this->insert('{{%cms_article}}',['id'=>'669','column_id'=>'13','title'=>'中心车队做好防冻保暖安全防范工作','image'=>NULL,'description'=>'','author'=>'聂国霞','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 1月19日下午，中心车队按照公司（中心）部署组织人员进行了防冻保暖安全防范工作。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 车队接到通知后，立刻组织人员对车辆水箱防冻液、院内水管进行了检查，对车队院内的所有水管进行了保暖防护，以防止即','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1453132800','updated_at'=>'1453132800']);
        $this->insert('{{%cms_article}}',['id'=>'670','column_id'=>'13','title'=>'松涛山庄开展桔树防冻工作','image'=>NULL,'description'=>'','author'=>'夏术敏','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 近日，松涛山庄管理处生产班用冻前灌水的方式加强了桔树防冻工作。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 松涛山庄管理处生产班以往每年都采用树干涂白的方式进行桔树防冻，今年天气异常寒冷，为了进一步提高桔树越寒能力，在树干涂白工作结束后','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1453219200','updated_at'=>'1453219200']);
        $this->insert('{{%cms_article}}',['id'=>'671','column_id'=>'13','title'=>'小车队开展防冻安全检查工作','image'=>NULL,'description'=>'','author'=>'蒋丽','content'=>'<p>
	<span style=\"font-family:SimSun;\">&nbsp;&nbsp;&nbsp; <span style=\"font-family:SimSun;font-size:18px;\">为了应对即将到来的寒潮，1月19日下午，小车队由队长带队，对车队现有车辆和院内管道进行了防冻安全检查。 </span></span>
</p>
<p>
	<span style=\"font-family:SimSun;\"><span style=\"font-family:SimSun;font-','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1453305600','updated_at'=>'1453305600']);
        $this->insert('{{%cms_article}}',['id'=>'672','column_id'=>'13','title'=>'襄阳分公司开展年前安全大检查','image'=>NULL,'description'=>'','author'=>'孙丹农','content'=>'<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-family:SimSun;font-size:18px;\">1月22日上午，襄阳分公司组织人员对小区设施设备和楼栋进行了安全大检查。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style=\"font-family:SimS','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1453651200','updated_at'=>'1453651200']);
        $this->insert('{{%cms_article}}',['id'=>'673','column_id'=>'13','title'=>'大坝景区排除安全隐患','image'=>NULL,'description'=>'','author'=>'郭军辉','content'=>'<p>
	<span style=\"font-size:14pt;font-family:&quot;Calibri&quot;,sans-serif;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1</span><span style=\"font-size:14pt;font-family:宋体;\">月</span><span style=\"font-size:14pt;font-family:&quot;Calibri&quot;,sans-serif;\">','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1453737600','updated_at'=>'1453737600']);
        $this->insert('{{%cms_article}}',['id'=>'674','column_id'=>'13','title'=>'松涛山庄管理处开展消防演练','image'=>NULL,'description'=>'','author'=>'陈钢','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 松涛山庄管理处按照2016年度培训学习计划，在2016年1月29日下午，开展了护林防火消防演练活动。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 下午2：45分，此次消防演练指挥肖新年书记下达演练开始指令。接到指令后，松涛山庄各部门人员','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1454256000','updated_at'=>'1454256000']);
        $this->insert('{{%cms_article}}',['id'=>'675','column_id'=>'13','title'=>'武汉分公司开展春节前安全大检查','image'=>NULL,'description'=>'','author'=>'刘亚奇','content'=>'<span id=\"Label_lr\"><span style=\"font-size:14pt;font-family:宋体;line-height:200%;\"><span style=\"font-size:small;font-family:Tahoma;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:18px;font-family:SimSun;line-height:2;\">春节将至，为切实做好节假日期间安全工作，有效防范和控制各类','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1454256000','updated_at'=>'1454256000']);
        $this->insert('{{%cms_article}}',['id'=>'676','column_id'=>'13','title'=>'加油站开展春节前安全大检查','image'=>NULL,'description'=>'','author'=>'彭建华','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 春节将至，为了确保春节期间加油工作的正常运行，营造安全祥和的节日环境，加油站组织开展了节前安全大检查活动。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 1月26日上午，在站长彭建华的带领下，安全员张晓及两个加油班班长对加油站配电房、油罐','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1454256000','updated_at'=>'1454256000']);
        $this->insert('{{%cms_article}}',['id'=>'677','column_id'=>'13','title'=>'商贸分公司开展节前安全大检查','image'=>NULL,'description'=>'','author'=>'彭翠兰','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 春节临近，为了确保节日期间管辖资产安全，商贸分公司开展了节前安全大检查。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 1月27日，商贸分公司召开了安全检查工作会。在会上，高经理对春节前的安全检查工作做了周密安排，要求节前安全检查分三个小','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1454428800','updated_at'=>'1454428800']);
        $this->insert('{{%cms_article}}',['id'=>'678','column_id'=>'13','title'=>'加油站举行防盗抢应急预案演练','image'=>NULL,'description'=>'','author'=>'彭建华','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 临近春节，为保障加油站员工人身和公司财产安全，强化快速反应防盗抢机制，提升各岗位协同作战能力，结合年关盗抢作案高峰期的实际情况，加油站于2016年2月4日中午13：00进行了防盗抢应急预案演练。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1454601600','updated_at'=>'1454601600']);
        $this->insert('{{%cms_article}}',['id'=>'679','column_id'=>'13','title'=>'五方联动部署大坝景区节日安全工作','image'=>NULL,'description'=>'','author'=>'王敏','content'=>'<span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14pt;font-family:宋体;line-height:150%;\">为确保节日期间大坝防护安全，</span><span style=\"font-size:14pt;line-height:150%;\"> <span>2</span></span><span style=\"font-size:14pt;font-family:','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1454601600','updated_at'=>'1454601600']);
        $this->insert('{{%cms_article}}',['id'=>'680','column_id'=>'13','title'=>'商贸分公司多项举措保障节日安全','image'=>NULL,'description'=>'','author'=>'彭翠兰','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 春节期间，商贸分公司多措并举，使所辖区域渡过了一个安全祥和的节日，为全年安全生产工作持续向好开了个好头。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 商贸分公司在节日期间对委托管辖的资产进行划片管理，安全责任落实到人，加大对重点场所、重','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1455638400','updated_at'=>'1455638400']);
        $this->insert('{{%cms_article}}',['id'=>'681','column_id'=>'13','title'=>'中心车队举行节后安全大检查工作','image'=>NULL,'description'=>'','author'=>'聂国霞','content'=>'<span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14pt;\">2</span><span style=\"font-family:宋体;font-size:14pt;\">月</span><span style=\"font-size:14pt;\">23</span><span style=\"font-family:宋体;font-size:14pt;\">日上午，中心车队举行春节后安全大检','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1456156800','updated_at'=>'1456156800']);
        $this->insert('{{%cms_article}}',['id'=>'682','column_id'=>'13','title'=>'中心车队举行消防安全培训','image'=>NULL,'description'=>'','author'=>'聂国霞','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp;&nbsp;3月2日上午，中心车队举行了消防安全培训。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 此次培训主要内容是消防器材的使用方法，首先由公司应急救援队队员、车队队长陆建丹现场讲解、演示，然后车队员工进行了练习。在培训过程中，陆建丹','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1456848000','updated_at'=>'1456848000']);
        $this->insert('{{%cms_article}}',['id'=>'683','column_id'=>'13','title'=>'松涛山庄喷绘安全警示语','image'=>NULL,'description'=>'','author'=>'夏术敏','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp;&nbsp;3月22日，松涛山庄管理处对景区内高压线路设备进行了安全警示语喷绘，从而提醒游客注意安全。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 上午8点，山庄安全保障班工作人员手持事先准备好的警示语模板和喷漆，从1号山开始，对景区范围','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1458576000','updated_at'=>'1458576000']);
        $this->insert('{{%cms_article}}',['id'=>'684','column_id'=>'13','title'=>'商贸分公司组织消防应急疏散演练','image'=>NULL,'description'=>'','author'=>'赵雁祥','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 3月24日下午商贸分公司组织阳光贝贝幼儿园举行消防应急疏散演练，分公司全体员工参加观摩，公司安全员到场指导。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 随着幼儿园警报声响起，各班级老师立即停止教学活动，组织幼儿用手帕捂住口鼻，两个一排','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1458835200','updated_at'=>'1458835200']);
        $this->insert('{{%cms_article}}',['id'=>'685','column_id'=>'13','title'=>'公司应急救援队开展春季集训','image'=>NULL,'description'=>'','author'=>'办公室','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:24px;\">&nbsp;<span style=\"font-size:18px;\">3月26日，博远置业公司应急救援队在松涛山庄开展集中训练，拉开春季集训的序幕。</span></span> 
</p>
<p>
	<span style=','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1459094400','updated_at'=>'1459094400']);
        $this->insert('{{%cms_article}}',['id'=>'686','column_id'=>'13','title'=>'公司开展“五一”节前安全大检查','image'=>NULL,'description'=>'','author'=>'李书林','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 4月21日，公司分管安全的副经理张勇带领相关部门，开展了“五一”节前安全大检查。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 此次检查，涵盖了在丹的十一个单位。检查组严格按照集团公司安全环保与技术部《关于切实做好“五一”期间安全生产工作','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1461254400','updated_at'=>'1461254400']);
        $this->insert('{{%cms_article}}',['id'=>'687','column_id'=>'13','title'=>'武汉分公司开展“五一”节前安全检查','image'=>NULL,'description'=>'','author'=>'刘亚奇','content'=>'<span style=\"font-size:14pt;line-height:200%;\"><span style=\"font-size:small;\"><span style=\"font-size:18px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style=\"font-size:18px;font-family:SimSun;\">4</span></span><span style=\"','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1461513600','updated_at'=>'1461513600']);
        $this->insert('{{%cms_article}}',['id'=>'688','column_id'=>'13','title'=>'襄阳分公司开展节前安全大检查','image'=>NULL,'description'=>'','author'=>'汤爱珍','content'=>'<p>
	<span style=\"font-size:15pt;font-family:宋体;\">&nbsp;&nbsp;&nbsp; 为迎接“五一”国际劳动节的到来，</span><span style=\"font-size:15pt;font-family:&quot;Times New Roman&quot;,serif;\">4</span><span style=\"font-size:15pt;font-family:宋体;\">月</span><span style=\"font-size:15p','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1461600000','updated_at'=>'1461600000']);
        $this->insert('{{%cms_article}}',['id'=>'743','column_id'=>'13','title'=>'公司应急救援队为经营单位再解燃眉之急','image'=>NULL,'description'=>'','author'=>'丁维','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;6月13日，应急救援队紧急出动，帮助燃气冷冻分公司完成500块冰的紧急装车发货工作，为经营单位再解燃眉之急。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;近日，燃气冷冻分公司接到十堰某冷库急需500块冰的购货订单，冰块不同一般货物，光滑、笨重，装车工作难度大，500块冰同时装车更是一次工作量非常大的劳动，操作不当还容易发生安全事故。为了按时完成好此次装车发货工作，燃气冷','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1434470400','updated_at'=>'1434470400']);
        $this->insert('{{%cms_article}}',['id'=>'744','column_id'=>'13','title'=>'燃气冷冻分公司开展液化气促销活动','image'=>NULL,'description'=>'','author'=>'李书林','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;5月下旬以来，燃气冷冻分公司在居民小区、公园等场所持续开展巡回维权宣传与优惠直销活动，取得初步成效。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;近年来，有个别气站和不少气贩子打着“汉江集团液化气”的招牌，向广大液化气用户宣传销售液化气，严重侵害了广大用户和企业的权益。加上天然气进入，液化气市场需求受到冲击，液化气经营举步维艰。针对这种情况，燃气冷冻分公司积极转变经营思','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1434297600','updated_at'=>'1434297600']);
        $this->insert('{{%cms_article}}',['id'=>'745','column_id'=>'13','title'=>'集团公司到我单位进行绩效考核','image'=>NULL,'description'=>'','author'=>'詹世军','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; 5月14日下午，集团公司人力资源部王军一行组成的集团公司绩效考检组，来我单位对2014年度绩效进行考核。
</p>
<p>
	&nbsp; &nbsp; &nbsp; 会上，主任（经理）王森林作了2014年度绩效考核自评报告。2014年，博远置业公司利润指标为414万元，实际实现利润616.43万元，再一次大幅超额完成任务。龙山宾馆也超额完成任务。服务管理中心费用控制在指标范围内。服务质量综合评价达到了90分以','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1431532800','updated_at'=>'1431532800']);
        $this->insert('{{%cms_article}}',['id'=>'746','column_id'=>'13','title'=>'松涛茶园修剪正当时','image'=>NULL,'description'=>'','author'=>'沈丽娅','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp;近日，松涛山庄的工作人员正抓紧当前晴好天气有序地对茶园进行春茶采收后的修剪。
</p>
<p>
	&nbsp; &nbsp; &nbsp;山庄的陈钢副经理表示，为了保证茶树的生长及茶叶的品质，每年春茶采收过后都应该对茶树进行修剪，其修剪总的要求是要剪平树冠面，对中间突出的粗壮枝条要比平面低剪3－5cm。
</p>
<p>
	&nbsp; &nbsp; &nbsp;据悉，茶树修剪是茶园管理中一项十分重要的技术措施。','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1431446400','updated_at'=>'1431446400']);
        $this->insert('{{%cms_article}}',['id'=>'747','column_id'=>'13','title'=>'集团公司领导胡甲均一行视察我武汉项目工程','image'=>NULL,'description'=>'','author'=>'张永明','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;4月18日，集团公司领导胡甲均、胡军、曾凡师一行，到武汉总部、晋中展园绿化景观项目工地进行检查指导。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;在晋中展园绿化景观项目工地，胡董事长一行兴致勃勃地参观了已进入施工尾期的晋中展园主建筑、壁廊、园建工程、绿化工程等设施，详细了解了工程建设背景、项目进展情况、业主评价情况和存在的困难，对武汉项目部的工作表示充分肯定，并对下一步','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1429459200','updated_at'=>'1429459200']);
        $this->insert('{{%cms_article}}',['id'=>'748','column_id'=>'13','title'=>'博远公司为潘口、小漩水电站再添新绿','image'=>NULL,'description'=>'','author'=>'谢海鹰','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; 4月17日，博远置业公司竹山项目部组织人力, 在潘口、小漩水电站坝区开展较大规模植树活动,为两个坝区再添新绿。
</p>
<p>
	&nbsp; &nbsp; 当天清晨6点，一大车苗木缓缓驶入小漩电站左岸进场路厂前空地，博远置业公司竹山项目部组织的70多人立刻忙碌起来，他们分成若干个小组，卸车、转运、栽植，现场有条不紊，绿带迅速沿着两边空地铺展开来。期间，又有部分人员转战潘口坝区。经过十几小时的冒雨作业，共栽植红继木、龟甲冬','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1429459200','updated_at'=>'1429459200']);
        $this->insert('{{%cms_article}}',['id'=>'749','column_id'=>'13','title'=>'公司开展采茶劳动竞赛','image'=>NULL,'description'=>'','author'=>'王青','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;4月15日，博远置业公司采茶劳动竞赛在松涛山庄茶场举行，博远公司所属单位、机关部门员工以及离退休职工186人参加了本次活动。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;初春时节，正是采茶、制茶的黄金期，松涛山庄到处生机勃勃，茶园里的春天更是一派绿意盎然，一畦畦茶树参差错落，修剪过的茶树露出了嫩绿的苞芽。清晨六点刚过，职工们就早早来到茶园，“今天采摘的主要是一芽二叶型”','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1429027200','updated_at'=>'1429027200']);
        $this->insert('{{%cms_article}}',['id'=>'750','column_id'=>'13','title'=>'大坝坝面绿化工程进展有序','image'=>NULL,'description'=>'','author'=>'沈丽娅','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp;由绿化管理中心承担的丹江口大坝坝面绿化工程目前进展顺利，基础工作已基本完成，并已完成主要苗木种植，工程计划于4月底竣工。
</p>
<p>
	<span>&nbsp; &nbsp; &nbsp;据悉，大坝坝面绿化工程主要包括花坛、观景平台、可移动式花钵等内容，涉及种植土回填、石材铺装、绿化等多项工作，石材铺装面积约2000</span','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1428940800','updated_at'=>'1428940800']);
        $this->insert('{{%cms_article}}',['id'=>'751','column_id'=>'13','title'=>'春暖茶飘香，山庄采制忙','image'=>NULL,'description'=>'','author'=>'詹世军','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;又一轮春雨过后，春茶吐绿，茶园一派绿意盎然，一畦畦茶树参差错落，茶树尖上片片嫩芽，带着露滴，灵气十足，缕缕新茶散发出清香。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;山庄为了抢抓时机，从早上7点多，就开始忙着采摘新茶。笔者来到制茶间，看到在一排炒锅里，几双灵巧的双手随着碧绿的茶芽上下翻飞，不时传来茶叶炒制的哔哔啵啵的声响，等到芽尖从青嫩的绿色变为深绿，茶的清香就渐渐散','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1428854400','updated_at'=>'1428854400']);
        $this->insert('{{%cms_article}}',['id'=>'752','column_id'=>'13','title'=>'坝区环境管理处拓展市场有了新举措','image'=>NULL,'description'=>'','author'=>'詹世军','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;近日，笔者来到坝区环境管理处，看到院内一片繁忙景象，员工们正忙着将新进一盆盆花卉从车上卸下来，并转移到荫棚。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;据悉，坝区环境管理处今年改变以往一次性购进花卉的做法，根据市场需要分批次购进花卉，这样既减少水电、人工等养护费用，还可以减少花卉损耗。同时，在购进花卉前，厂家对欲购花卉品相给予指导，使购进花卉更加符合客户的需求，由于新','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1428508800','updated_at'=>'1428508800']);
        $this->insert('{{%cms_article}}',['id'=>'753','column_id'=>'13','title'=>'用服务赢得顾客 以品质拓宽市场——博远公司加油站开展员工服务质量培训','image'=>NULL,'description'=>'','author'=>'詹世军','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;3月30日下午，博远公司加油站组织开展了以“用服务赢得顾客，以品质拓宽市场”为主题的员工服务质量培训，站内全体加油员参加了培训。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;该培训由加油站站长彭建华主讲，他首先通过PPT向员工讲授了服务理念、服务标准、站容站貌等。具体向员工传授了加油八步法，即引车到位、问候顾客、开油箱盖、加注油品、擦拭车窗、盖油箱盖、结算货款、引车出站','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1427731200','updated_at'=>'1427731200']);
        $this->insert('{{%cms_article}}',['id'=>'754','column_id'=>'13','title'=>'坝区环境绿化工程建设大力推进','image'=>NULL,'description'=>'','author'=>'沈丽娅','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;当前正值万物萌发之季，绿化管理中心周密部署、抓实措施，全面加大坝区绿化推进力度。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;负责施工的绿化工程分公司集中人力物力，把握节点，现场挖掘机、装卸车、吊车等机械一片繁忙，确保场地及时平整到位，人员指挥协调，精心种植，确保栽植一棵，成活一棵。力争在3月底前基本完成坝区绿色种植任务。目前已已完成右岸升船机周边及付坝根部部分区域樱花','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1425830400','updated_at'=>'1425830400']);
        $this->insert('{{%cms_article}}',['id'=>'755','column_id'=>'13','title'=>'坝区环境管理处变“腐叶”为宝','image'=>NULL,'description'=>'','author'=>'詹世军','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; 3月3日上午，坝区环境管理处全体员工来到松涛山庄树林里，收集腐叶土以培育时令花卉，变“腐叶”为宝。
</p>
<p>
	&nbsp; &nbsp; &nbsp; 员工们用耙子将表层的落叶轻轻掀开，露出了又黑又肥的碎碎的黑色碎末——腐叶土，然后用铁锹将这些腐叶土装进事先准备好的袋子里，经过大家的紧张的劳动，不一会儿工夫，就装满了几十袋。腐叶土富含有机质，偏微酸性且疏松透气，保水性能良好，是栽培喜酸、喜潮湿且忌盆内','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1425571200','updated_at'=>'1425571200']);
        $this->insert('{{%cms_article}}',['id'=>'756','column_id'=>'13','title'=>'绿化工程分公司传来中标喜讯','image'=>NULL,'description'=>'','author'=>'唐丽娜','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;3月3日，绿化工程分公司参与的南水北调中线水源工程丹江口大坝加高坝顶混凝土绿化工程施工投标项目传来捷报，我方以综合优势中标。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;南水北调中线水源工程丹江口大坝加高坝顶混凝土绿化工程施工项目的比价工作在春节前拉开帷幕，在公司领导的关心和指导下，为保证此次比价工作的顺利完成，工程分公司成立了投标报价工作小组，小组成员分工协作、认真比','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1425484800','updated_at'=>'1425484800']);
        $this->insert('{{%cms_article}}',['id'=>'757','column_id'=>'13','title'=>'绿化工程分公司学习贯彻公司2015年工作会精神','image'=>NULL,'description'=>'','author'=>'张永明','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;2月25日下午，园林绿化工程分公司组织全体员工传达学习了博远置业公司、服务管理中心、旅游发展公司2015年工作会、党建会暨第二届职代会第三次会议精神，并对2015年主要工作进行了安排部署。公司（中心）领导王森林、谭本文参加了会议。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;会上，大家认真学习了王经理的工作报告，统一了“坚持以经济效益为中心，强化基础、依法经营、稳中求进','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1424966400','updated_at'=>'1424966400']);
        $this->insert('{{%cms_article}}',['id'=>'758','column_id'=>'13','title'=>'公司（中心）领导大年三十慰问一线职工','image'=>NULL,'description'=>'','author'=>'王青','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;2月18日，是中国传统佳节大年三十，公司（中心）领导一行来到生产经营、服务管理一线，看望慰问了节日里坚守岗位的干部职工。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;当天上午，公司（中心）领导先后来到在丹的11个分公司，与一线职工亲切交流，询问各单位节日期间的安全管理情况、生产任务安排情况和节假日值班情况，了解职工的休息情况，叮嘱各单位抓好节日期间的安全生产工作，并对在','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1424793600','updated_at'=>'1424793600']);
        $this->insert('{{%cms_article}}',['id'=>'759','column_id'=>'13','title'=>'加油站组织学习公司工作会精神','image'=>NULL,'description'=>'','author'=>'王英','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;2月13日，加油站召开全体员工会议，学习贯彻公司（中心）工作会党建会暨第二届第三次职代会精神。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;围绕王经理的工作报告，结合加油站的实际情况，站长彭建华强调全体员工一定要把会议精神学透，落实到工作中，并就加油站2015年的工作做了安排：一是销售上要以“摒弃坐、等、靠的思想，紧盯销量，紧盯外部市场变被动为主动，以永不满足、永不懈怠','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1424793600','updated_at'=>'1424793600']);
        $this->insert('{{%cms_article}}',['id'=>'760','column_id'=>'13','title'=>'商贸分公司学习贯彻博远公司2015年工作会会议精神','image'=>NULL,'description'=>'','author'=>'彭翠兰','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;2月12日下午，商贸分公司召开全体员工会议，学习贯彻公司（中心）2015年工作会、党建会暨第二届第三次职代会会议精神。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;围绕王经理的工作报告，结合商贸分公司实际，分公司支部书记、副经理高绶天强调：员工们要加强对会议精神实质的学习与领会， 2015年，在公司（中心）的领导下，团结协作、齐心协力、克难进取，努力完成2015年各项工','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1423929600','updated_at'=>'1423929600']);
        $this->insert('{{%cms_article}}',['id'=>'761','column_id'=>'13','title'=>'精雕细刻出杰作 古色古香留佳园-----晋中展园工程荣获第十届武汉园博会大奖','image'=>NULL,'description'=>'','author'=>'博远公司绿化工程分公司','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;2月12日，由我单位承建的第十届中国武汉国际园林博览会晋中展园工程荣获大会筹委会及武汉市总工会“工程优胜奖”以及“园博优秀建设者”两个奖项。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;晋中展园位于武汉园博会中部区域的北片区（城市片区的东南角），紧邻园区主路，有很好的区位优势。展园约成68m长*38m宽的长方形，占地面积2584m<sup>2</sup>，其中建筑控制面','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1423756800','updated_at'=>'1423756800']);
        $this->insert('{{%cms_article}}',['id'=>'762','column_id'=>'13','title'=>'市地税局向我公司递送感谢信','image'=>NULL,'description'=>'','author'=>'王青','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;2月13日上午，丹江口市地税局朱延明副局长一行专程来我公司递送感谢信，对公司在2014年为地税局所提供的各项服务工作表示肯定，对龙山宾馆地税局工作组一年来的优质服务表示由衷感谢。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;朱局长在座谈中表示，地税局委托公司管理绿植养护、职工食堂和招待所运行以来，各项服务得到了认可，尤其是公司派驻的龙山宾馆地税局工作组高度负责、不辞劳苦','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1423756800','updated_at'=>'1423756800']);
        $this->insert('{{%cms_article}}',['id'=>'763','column_id'=>'13','title'=>'大坝景区管理处上“新年第一课”','image'=>NULL,'description'=>'','author'=>'王敏','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;2月10日下午，大坝景区管理处开展了以“学制度，立规矩，做遵章守纪模范员工”为主题的培训活动，培训由刘东经理主持。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;刘东书记首先组织大家学习了博远公司员工手册的若干管理规定，孙丹农副经理向大家宣读了《职工民主管理》条例，并就自己的体会谈了一下对职工代表的理解和定义，安全员刘泽文宣读了《大坝景区管理处安全生产管理规定》，各位职工','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1423670400','updated_at'=>'1423670400']);
        $this->insert('{{%cms_article}}',['id'=>'764','column_id'=>'13','title'=>'公司（中心）召开2015年工作会、党建会暨第二届职代会第三次会议','image'=>NULL,'description'=>'','author'=>'沈丽娅','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;2月11日，博远置业公司、服务管理中心、旅游发展公司2015年工作会、党建会暨第二届职代会第三次会议在龙山宾馆大报告厅召开，集团公司副总经理曾凡师、工会副主席王奎应邀出席了会议。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;公司经理、党委书记，中心主任王森林作了题为《巩固提升 稳中有进 主动作为 &nbsp;为推进公司（中心）做优做强而努力奋斗》的党政工作报告，全面总结','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1423670400','updated_at'=>'1423670400']);
        $this->insert('{{%cms_article}}',['id'=>'765','column_id'=>'13','title'=>'坝区环境整治如火如荼','image'=>NULL,'description'=>'','author'=>'詹世军','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;近日，笔者在坝前区开关站绿化施工现场，看到挖土机不时地将一颗颗树木从车上吊下来，工人们正在忙着施工，挖土、扶苗、填土……，工地上一片繁忙的景象，工程建设正在如火如荼地进行中。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;据了解，集团公司为了改善旅游环境和保护南水北调中线工程水源地，决定对坝前区环境进行整治，对左右两岸绿化美化，打造绿色生态廊道。服务管理中心承接该项绿化工','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1422374400','updated_at'=>'1422374400']);
        $this->insert('{{%cms_article}}',['id'=>'766','column_id'=>'13','title'=>'公司（中心）2014年度工作检查全面结束','image'=>NULL,'description'=>'','author'=>'詹世军','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; 为全面、真实了解公司（中心）所属各单位（部门）资产状况、基础管理及2014年工作目标完成情况，12月中旬以来，公司（中心）对各单位（部门）工作进行了全面检查。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;年终工作检查是博远置业公司多年来坚持的一项例行工作，但今年与以往不同的是，此次工作检查分为资产清查、基础工作检查及集中汇报三个阶段进行。
</p>
<p>
	&nbsp; &nbs','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1421683200','updated_at'=>'1421683200']);
        $this->insert('{{%cms_article}}',['id'=>'767','column_id'=>'13','title'=>'坝前公园儿童游泳池嬉水池开放','image'=>NULL,'description'=>'','author'=>'李继红','content'=>'<p>
	<span style=\"font-size:14pt;font-family:仿宋_GB2312;\"><span style=\"font-size:small;font-family:Tahoma;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>又到了一年一度的暑假，<span>7</span>月<span>1</span>日，博远公司坝区环境管理处在坝前公园原有的儿童游泳池旁安装好了新进的儿童嬉水池，给孩子们清凉度假提供了新的好场所。</span>','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1435766400','updated_at'=>'1435766400']);
        $this->insert('{{%cms_article}}',['id'=>'768','column_id'=>'13','title'=>'公司（中心）开展2015年上半年工作检查','image'=>NULL,'description'=>'','author'=>'杨宪斌','content'=>'<p>
	&nbsp; &nbsp; &nbsp; 为全面了解公司（中心）所属各单位上半年生产经营、服务管理、安全生产、党群等各项工作目标完成情况，公司（中心）于6月25日至7月6日对公司（中心）所属各单位进行了2015年上半年工作检查。 &nbsp;
</p>
<p>
	&nbsp; &nbsp; &nbsp; 半年工作检查是博远置业公司多年来坚持的一项例行检查，本次检查以小组专项检查和集中汇报相结合的方式进行，以找问题、补短板、提措施、抓改进为工作目标。专项检查由综合管理、资产管理、财务劳资和安全生产','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1436716800','updated_at'=>'1436716800']);
        $this->insert('{{%cms_article}}',['id'=>'769','column_id'=>'13','title'=>'公司相关人员到电厂首席技师工作室取经','image'=>NULL,'description'=>'','author'=>'甘润','content'=>'<p>
	&nbsp; &nbsp; &nbsp; 7月8日上午，公司财务劳资部会同办公室、小车队和中心车队一行6人，赴丹江口水力发电厂首席技师工作室进行参观和学习。
</p>
<p>
	&nbsp; &nbsp; &nbsp; 今年年初，根据工作需要和两个车队的推荐意见，经过公司党委会议研究，聘任杨建丹为汽车驾驶首席技师。聘任首席技师对公司（中心）而言是一项新工作，为了尽快建好工作室，更好地发挥首席技师的作用，财务劳资部特别会同办公室、小车队和中心车队一道前往水力发电厂首席技师工作室参观学习。丹江口水力','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1436716800','updated_at'=>'1436716800']);
        $this->insert('{{%cms_article}}',['id'=>'770','column_id'=>'13','title'=>'小车队传达落实公司上半年工作检查会议精神','image'=>NULL,'description'=>'','author'=>'李晓沛','content'=>'<p>
	&nbsp; &nbsp; &nbsp; &nbsp;7月14日小车队召开员工大会，传达落实公司上半年工作检查会议精神。
</p>
<p>
	&nbsp; &nbsp; &nbsp; 在会上，首先学习了公司致全体员工的一封信“十年耕耘 感恩有你”。其次，学习了《安全生产管理制度（修订稿）》。然后，传达了公司经理、党委书记王森林对下半年工作提出的要求：一是务必保持清醒的头脑，抓好下半年工作；二是务必保持扎实的工作作风，以“三严三实”的教育成果做好全年工作；三是务必保持团结协作的优良传统，弘扬博远团','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1436889600','updated_at'=>'1436889600']);
        $this->insert('{{%cms_article}}',['id'=>'771','column_id'=>'13','title'=>'职大校区做好环境治理工作','image'=>NULL,'description'=>'','author'=>'赵雁祥','content'=>'<span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"text-indent:20.6pt;\">
	<span style=\"font-size:18px;font-family:宋体;\">为做好原职大校区资产管理，商贸分公司要求在保持校区环境一如既往、资产安全的同时，减少校区不必要的管护开支。</span><span style=\"font-size:14pt;\"></span> 
</p>
<p class=\"MsoNormal\" style=\"text-','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1437408000','updated_at'=>'1437408000']);
        $this->insert('{{%cms_article}}',['id'=>'772','column_id'=>'13','title'=>'公司领导王森林、张勇到物业管理分公司调研','image'=>NULL,'description'=>'','author'=>'盘家胜、张卫红','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; 7月23日，公司领导王森林、张勇以及相关部门负责人一行6人，到物业管理分公司就如何加强和规范物业管理、如何提高服务质量进行了为期1天的调研。
</p>
<p>
	&nbsp; &nbsp; &nbsp; 当天上午，王森林、张勇一行在物业管理分公司副经理黄璞、党支部副书记朱德超以及各片区负责人、管理员的陪同下，先后到张家沟小区、武水基地、山水庭院、阳光小区、康欣小区、民欣小','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1437926400','updated_at'=>'1437926400']);
        $this->insert('{{%cms_article}}',['id'=>'773','column_id'=>'13','title'=>'高温下的坚守','image'=>NULL,'description'=>'','author'=>'','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; 近日，我国中东部地区均开启“烧烤模式”，丹江口市也未能幸免，近几天最高气温达到37℃，骄阳似火，热浪滚滚。公司部分单位员工在高温酷暑下依然坚守岗位，他们头顶烈日、挥汗如雨，默默无闻、任劳任怨，充分表现出“博远”人的敬业精神。
</p>
<p>
	&nbsp; &nbsp; &nbsp;大坝景区内，坝面被“烤”得发烫，太阳直射在皮肤上，有一种烧灼般的疼痛，不到5分钟，笔者已','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1438185600','updated_at'=>'1438185600']);
        $this->insert('{{%cms_article}}',['id'=>'774','column_id'=>'13','title'=>'松涛山庄战酷暑抗旱保苗','image'=>NULL,'description'=>'','author'=>'夏术敏','content'=>'<p>
	&nbsp; &nbsp; &nbsp; &nbsp;近日，天气持续干旱，松涛山庄管理处开始对茶园、桔园进行抗旱保苗工作。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;连日来，丹江口周边一直没有下雨，气温达到38度以上，松涛山庄管理处根据旱情及时对茶园、桔园的抗旱做了部署安排。松涛山庄生产人员分成四组，分别对茶园和桔园进行抗旱保苗；特别是桔园桔树目前正是果实膨大期，需要大量水分，但由于桔园内管道陈旧，不具备喷灌条件，员工们顶着酷暑一棵树一棵树地人工浇灌。
</p>
','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1438272000','updated_at'=>'1438272000']);
        $this->insert('{{%cms_article}}',['id'=>'775','column_id'=>'13','title'=>'李翔市长考察丹江口坝区绿化','image'=>NULL,'description'=>'','author'=>'盘家胜','content'=>'<p>
	&nbsp; &nbsp; &nbsp; &nbsp;7月29日，丹江口市委副书记、市长李翔一行，到丹江口坝区考察了坝区绿化情况。
</p>
<p>
	&nbsp; &nbsp; &nbsp; 当天上午，李翔市长带领市有关部门一行，来到丹江口坝区，兴致勃勃地察看了坝区左右岸及坝顶绿化情况，认真听取了公司经理王森林关于坝区环境整治和绿化工作情况的介绍。李翔市长对坝区环境的巨大变化表示赞赏，对汉江集团的大力投入和博远置业公司的辛勤工作表示感谢。考察组还就如何整体开发丹江口市旅游、如何进行旅游地接等问','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1438272000','updated_at'=>'1438272000']);
        $this->insert('{{%cms_article}}',['id'=>'776','column_id'=>'13','title'=>'绿化工程分公司开展夏季抗旱养护工作','image'=>NULL,'description'=>'','author'=>'曾文杰','content'=>'<p>
	&nbsp; &nbsp; &nbsp; &nbsp;7月下旬以来，天气持续高温，给坝区绿化苗木带来严峻考验。为巩固和保护坝区绿化成果，确保苗木安然度夏，园林绿化工程分公司全面开展夏季抗旱养护工作。
</p>
<p>
	&nbsp; &nbsp; &nbsp; 坝区大部分绿化苗木为今春栽植，根系还不发达，吸水能力不强，持续的高温干旱天气让不少苗木泛黄打蔫儿，急需大量水分供给。对此，绿化工程分公司积极调派人员，采取定人、定责的方法加大抗旱养护工作力度；合理安排抗旱养护工作，对一线养护人员上班时间进','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1438617600','updated_at'=>'1438617600']);
        $this->insert('{{%cms_article}}',['id'=>'777','column_id'=>'13','title'=>'松涛山庄进行白蚁防治','image'=>NULL,'description'=>'','author'=>'夏术敏','content'=>'<span id=\"Label_lr\">
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;8月9日，公司资产管理部安排专业人员在松涛山庄开始进行白蚁防治工作。
</p>
<p>
	&nbsp; &nbsp; &nbsp; 白蚁是巢居生活的社会性昆虫，喜欢在阴暗潮湿、密不透风的环境筑巢。白蚁的主要食料为木材等含纤维的物质，它能蛀食全部植物，同时其体内分泌蚁酸，还会腐蚀钢筋，使混凝土改变性状，故白蚁被列为世界五大害虫之一。因受环境及技术多方面制约，根治蚁患十分困难。
</p>
<p>
	&nb','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1439136000','updated_at'=>'1439136000']);
        $this->insert('{{%cms_article}}',['id'=>'778','column_id'=>'13','title'=>'消除白蚁危害   保障绿化环境','image'=>NULL,'description'=>'','author'=>'赵雁祥','content'=>'<p>
	&nbsp; &nbsp; &nbsp; 8月12--15日，公司资产管理部安排专业人员到职工大学进行白蚁防治工作。
</p>
<p>
	&nbsp; &nbsp; &nbsp; 自2009年职工大学改制、撤并后，校园土地、资产交由博远置业公司看管，当时在校园后半部发现有白蚁侵蚀树木的现象，逐年扩展；现在整个校园到处都有白蚁侵蚀树木的现象，已有多棵树木被白蚁侵蚀、死亡。针对这种情况，公司资产管理部积极筹措，安排专业人员到职工大学进行白蚁防治工作，通过挖蚁巢、埋诱杀盒、打孔灌药、喷药等多种措施对白','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1439913600','updated_at'=>'1439913600']);
        $this->insert('{{%cms_article}}',['id'=>'779','column_id'=>'13','title'=>'液化气分公司开展“庆十一·十送一”促销活动','image'=>NULL,'description'=>'','author'=>'李书林','content'=>'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14pt;font-family:宋体;\">从</span><span style=\"font-size:14pt;\">8</span><span style=\"font-size:14pt;font-family:宋体;\">月</span><span style=\"font-size:14pt;\">18</span><span style=\"font-size:14pt;f','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1440086400','updated_at'=>'1440086400']);
        $this->insert('{{%cms_article}}',['id'=>'780','column_id'=>'13','title'=>'坝区环境管理处奋力完成草花种植','image'=>NULL,'description'=>'','author'=>'李继红','content'=>'<span id=\"Label_lr\"> 
<p class=\"MsoNormal\">
	<span style=\"font-family:宋体;font-size:10.5pt;\">&nbsp;&nbsp;&nbsp; <span style=\"font-family:SimSun;font-size:16px;\">近日，坝区环境管理处完成</span><span style=\"font-family:SimSun;font-size:16px;\">4</span><span style=\"font-f','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1440345600','updated_at'=>'1440345600']);
        $this->insert('{{%cms_article}}',['id'=>'781','column_id'=>'13','title'=>'碧水方圆小区召开首届业主大会','image'=>NULL,'description'=>'','author'=>'曾萍','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14pt;\">8</span><span style=\"font-size:14pt;font-family:宋体;\">月</span><span style=\"font-size:14pt;\">22</span><span style=\"font-size:14pt;font-family:宋体;\">日上午','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1440432000','updated_at'=>'1440432000']);
        $this->insert('{{%cms_article}}',['id'=>'782','column_id'=>'13','title'=>'长江委专家组对绿化中心申报全国绿化模范单位进行实地核查<br />','image'=>NULL,'description'=>'','author'=>'','content'=>'<p>
	&nbsp; &nbsp; &nbsp; &nbsp;8月26日上午，以长江委人事劳动局巡视员万晓文为组长的专家组一行，受水利部绿化办委托对汉江集团绿化管理中心申报全国绿化模范单位进行实地核查，汉江集团公司副总经理陈家华以及集团公司人力资源部、绿化管理中心相关负责人陪同并参加座谈。
</p>
<p>
	&nbsp; &nbsp; &nbsp; 座谈会上，专家组观看了绿化管理中心申报全国绿化模范单位专题片，陈家华介绍了汉江集团绿化工作规划和资金保障情况，绿化管理中心主任王森林汇报了绿化工作情况。专','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1440518400','updated_at'=>'1440518400']);
        $this->insert('{{%cms_article}}',['id'=>'783','column_id'=>'13','title'=>'液化气分公司开展“三送检·十送新”安全活动','image'=>NULL,'description'=>'','author'=>'李书林','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:16pt;font-family:仿宋_GB2312;\"><span style=\"font-size:18px;font-family:SimSun;\">为规避液化气用户因使用不合格钢瓶带来的安全风险，从九月份起，液化气分公司将持续开展保安全“三送检·十送新”不合格钢瓶置换活动。</','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1441468800','updated_at'=>'1441468800']);
        $this->insert('{{%cms_article}}',['id'=>'784','column_id'=>'13','title'=>'博远置业公司推进“互联网+”工作取得成效','image'=>NULL,'description'=>'','author'=>'袁仪','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1513094400','updated_at'=>'1513094400']);
        $this->insert('{{%cms_article}}',['id'=>'785','column_id'=>'13','title'=>'沿江路加油站启动双层罐防渗改造','image'=>NULL,'description'=>'','author'=>'王英','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1513526400','updated_at'=>'1513526400']);
        $this->insert('{{%cms_article}}',['id'=>'786','column_id'=>'13','title'=>'沿江路加油站启动双层罐防渗改造','image'=>NULL,'description'=>'','author'=>'王英','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1513526400','updated_at'=>'1513526400']);
        $this->insert('{{%cms_article}}',['id'=>'787','column_id'=>'13','title'=>'新年传喜讯  水保再立功','image'=>NULL,'description'=>'','author'=>'曾文杰','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1515513600','updated_at'=>'1515513600']);
        $this->insert('{{%cms_article}}',['id'=>'788','column_id'=>'13','title'=>'公司（中心）领导莅临武汉分公司召开“交心谈心”会','image'=>NULL,'description'=>'','author'=>'梅 焕','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1516032000','updated_at'=>'1516032000']);
        $this->insert('{{%cms_article}}',['id'=>'789','column_id'=>'13','title'=>'公司（中心）开展2017年年度工作检查','image'=>NULL,'description'=>'','author'=>'刘发明','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1516204800','updated_at'=>'1516204800']);
        $this->insert('{{%cms_article}}',['id'=>'790','column_id'=>'13','title'=>'公司（中心） 2018年工作会暨第二届职代会<br />第十四次会议召开','image'=>NULL,'description'=>'','author'=>'万春久','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1517587200','updated_at'=>'1517587200']);
        $this->insert('{{%cms_article}}',['id'=>'791','column_id'=>'13','title'=>'沿江路加油站召开销售动员大会','image'=>NULL,'description'=>'','author'=>'陈莉','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1517155200','updated_at'=>'1517155200']);
        $this->insert('{{%cms_article}}',['id'=>'792','column_id'=>'13','title'=>'物业管理分公司全力做好山水庭院4.2期交房工作','image'=>NULL,'description'=>'','author'=>'宛英','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14pt;font-family:宋体;background:white;color:black;\">近期，为了顺利、圆满完成汉江地产山水庭院小区<span>4.2</span>期交房任务，物业管理分公司积极响应、快速应对，要求以山水<span>4.2</s','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1441641600','updated_at'=>'1441641600']);
        $this->insert('{{%cms_article}}',['id'=>'793','column_id'=>'13','title'=>'碧水方圆保安保管未锁车辆获赞','image'=>NULL,'description'=>'','author'=>'曾萍','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;
<p class=\"MsoNormal\" style=\"text-indent:28pt;\">
	<span style=\"font-size:14pt;\">9</span><span style=\"font-size:14pt;font-family:宋体;\">月</span><span style=\"font-size:14pt;\">15</span><span style=\"font-size:14pt;f','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1442419200','updated_at'=>'1442419200']);
        $this->insert('{{%cms_article}}',['id'=>'794','column_id'=>'13','title'=>'加油站开展节前安全大检查','image'=>NULL,'description'=>'','author'=>'彭建华','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"text-indent:28pt;\">
	<span style=\"font-size:1','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1442505600','updated_at'=>'1442505600']);
        $this->insert('{{%cms_article}}',['id'=>'795','column_id'=>'13','title'=>'龙背湾水电站首次鱼类增殖放流工作取得成功','image'=>NULL,'description'=>'','author'=>'高飞','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;
<p style=\"text-indent:28pt;\" class=\"MsoNormal\">
	<SPAN style=\"LINE-HEIGHT: 150%; FONT-FAMILY: \" Roman?;font-size:14pt;? New Times>9</span><span style=\"line-height:150%;font-family:宋体;font-','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1442505600','updated_at'=>'1442505600']);
        $this->insert('{{%cms_article}}',['id'=>'796','column_id'=>'13','title'=>'液化气分公司推进不合格钢瓶置换活动','image'=>NULL,'description'=>'','author'=>'','content'=>'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-size:14pt;font-family:宋体;\">为大力推进保安全“三送</span><span style=\"font-size:14pt;font-family:宋体;\">检·</span><span style=\"font-size:14pt;font-family:宋体;\">十送新”不合格钢瓶置换活动，</span><span style=\"font-size:14pt;\">','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1442764800','updated_at'=>'1442764800']);
        $this->insert('{{%cms_article}}',['id'=>'797','column_id'=>'13','title'=>'博远公司为堵河流域增殖放流鱼种突破50万尾','image'=>NULL,'description'=>'','author'=>'盘家胜','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;
<p style=\"text-indent:28pt;\" class=\"MsoNormal\">
	<span style=\"font-family:SimSun;font-size:18px;\">9</span><span style=\"font-family:宋体;font-size:14pt;\"><span style=\"font-family:SimSun;font-size:18px;\">月</span>','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1443196800','updated_at'=>'1443196800']);
        $this->insert('{{%cms_article}}',['id'=>'798','column_id'=>'13','title'=>'“值班经理”轮流做   景区今天“我”当家','image'=>NULL,'description'=>'——旅游公司大坝景区创新干部选用模式','author'=>'沈丽娅','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;
<p class=\"MsoNormal\" style=\"text-align:left;text-indent:30pt;\" align=\"left\">
	<span style=\"font-size:18px;font-family:SimSun;\">“</span><span style=\"font-size:18px;font-family:SimSun;\">这次食堂搬家由安全班安排</span><span','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1444579200','updated_at'=>'1444579200']);
        $this->insert('{{%cms_article}}',['id'=>'799','column_id'=>'13','title'=>'公司获得“2014年度全省纳税信用A级纳税人”称号','image'=>NULL,'description'=>'','author'=>'陈亚妮','content'=>'<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10月10日，在丹江口市“A级纳税人”授牌暨“纳税信用贷”启动签约仪式上，博远置业公司获得“2014年度全省纳税信用A级纳税人”称号，汉江集团仅3家单位获此殊荣。
</p>
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 企业纳税信用等级评定制度，是税务部门按照纳税人依法办税程度，将纳税人评定为不同纳税信用等级进行分类管理的制度。依评定制度规定，纳税信用A级企业是指税务机关通过对纳税企业连续两年的税务','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1444579200','updated_at'=>'1444579200']);
        $this->insert('{{%cms_article}}',['id'=>'800','column_id'=>'13','title'=>'碧水方圆物业与小区业委会召开工作协调会','image'=>NULL,'description'=>'','author'=>'曾萍','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14pt;\">2015</span><span style=\"font-size:14pt;font-family:宋体;\">年</span><span style=\"font-size:14pt;\">10</span><span style=\"font-size:14pt;font-family','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1444752000','updated_at'=>'1444752000']);
        $this->insert('{{%cms_article}}',['id'=>'801','column_id'=>'13','title'=>'公司开展柑桔装箱活动','image'=>NULL,'description'=>'','author'=>'王青','content'=>'<p class=\"MsoNormal\">
	<span style=\"font-family:仿宋_GB2312;font-size:16pt;\">&nbsp;&nbsp;&nbsp; <span style=\"font-family:SimSun;font-size:18px;\">又到柑桔丰收季节，10月29日，公司组织全体员工进行了柑桔装箱活动。</span></span><span style=\"font-family:仿宋_GB2312;font-size:16pt;\"></span>
</p>','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1446393600','updated_at'=>'1446393600']);
        $this->insert('{{%cms_article}}',['id'=>'802','column_id'=>'13','title'=>'桔园采摘受欢迎','image'=>NULL,'description'=>'','author'=>'夏术敏','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span style=\"font-size:18px;\">&nbsp; &nbsp; &nbsp; 近日，随着松涛山庄景区柑桔采摘园的开放，吸引了众多游客到松涛山庄桔园进行柑桔采摘。</span><br />
<span style=\"font-size:18px;\">&nbsp; &nbsp; &nbsp; 山庄柑桔采摘园于10月1日开放，开放期间，丹江口市民和周边城市的游客纷纷来到','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1447171200','updated_at'=>'1447171200']);
        $this->insert('{{%cms_article}}',['id'=>'803','column_id'=>'13','title'=>'工程分公司对新接王甫州水电站养护工程现场进行勘察','image'=>NULL,'description'=>'','author'=>'姚丹丹','content'=>'<span id=\"Label_lr\"><span style=\"font-size:18px;\">&nbsp; &nbsp; &nbsp; 11月11日，绿化工程分公司张永明经理和陈泉书记一行人来到王甫州水电站养护工地勘察现场。</span><br />
<span style=\"font-size:18px;\">&nbsp; &nbsp; &nbsp; 在现场，张经理对工地进行了仔细的勘察了解，并就如何开展养护等工作同公司其他人员进行沟通交流。结合养护工程实际情况，做了以下工作部署：一是要加强学习，提','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1447603200','updated_at'=>'1447603200']);
        $this->insert('{{%cms_article}}',['id'=>'804','column_id'=>'13','title'=>'科学谋划“十三五”  凝聚发展新合力<br />','image'=>NULL,'description'=>'','author'=>'沈丽娅','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p style=\"text-align:center;\" cla','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1447603200','updated_at'=>'1447603200']);
        $this->insert('{{%cms_article}}',['id'=>'805','column_id'=>'13','title'=>'机关为“十三五规划”建言献策','image'=>NULL,'description'=>'','author'=>'沈丽娅','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span style=\"font-size:18px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp; <span style=\"font-size:18px;font-family:SimSun;\">根据公司（中心）工作安排，机关全体工作人员于10月12日下午在公司三楼会议室对《博远置业公司、服务管理中心、旅游发展公司十三五规划（讨论稿）》（以下简称《规划》）进行了研讨，讨论集思广益、各抒己见','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1447516800','updated_at'=>'1447516800']);
        $this->insert('{{%cms_article}}',['id'=>'806','column_id'=>'13','title'=>'集团公司领导指导坝区景观绿化工作','image'=>NULL,'description'=>'','author'=>'曾文杰','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span style=\"font-size:18px;font-family:SimSun;\">&nbsp; &nbsp; 11月25日下午，汉江集团公司董事长胡甲均、副总经理曾凡师及相关部门负责人前往坝区进行视察，了解坝区景观绿化及环境整治项目工作进展情况。</span><br />
<p>
	<span style=\"font-size:18px;font-family:SimSun;\">&nbsp; &nbsp; 在坝','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1448467200','updated_at'=>'1448467200']);
        $this->insert('{{%cms_article}}',['id'=>'807','column_id'=>'13','title'=>'尚湖熙园交房前工作准备小结','image'=>NULL,'description'=>'','author'=>'黄冠群','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\">
	<span style=\"font-size:12pt;font-family:宋体;\">&nbsp;&nbsp;&nbsp; 尚湖熙园交房验收工作是武汉分公司<span>2015</span>年的重点工作之一。在公司领导的的正确带领下，各部门分工协作，充分发挥和利用自己的专业物业服务和工作经验。以“服务只有起点，满意没有终点”的服务理念为宗旨，全力将交房准备工作做到细致，力争','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1448899200','updated_at'=>'1448899200']);
        $this->insert('{{%cms_article}}',['id'=>'808','column_id'=>'13','title'=>'商贸分公司开展职大校区冬季防冻保护工作','image'=>NULL,'description'=>'','author'=>'赵雁祥','content'=>'<p class=\"MsoNormal\">
	<span style=\"font-family:宋体;font-size:14pt;\"><span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 进入冬季后</span><span style=\"font-family:SimSun;font-size:18px;\">,&nbsp;</span><span style=\"font-family:SimSun;font-size:18','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1449763200','updated_at'=>'1449763200']);
        $this->insert('{{%cms_article}}',['id'=>'809','column_id'=>'13','title'=>'龙山宾馆参加“水都技能名师”大赛硕果累累<br />','image'=>NULL,'description'=>'','author'=>'王政','content'=>'<p>
	<span style=\"font-size:18px;\">&nbsp;&nbsp;&nbsp; 12月10日丹江口市“丹之源啤酒”杯第五届“水都技能名师”大赛在龙山宾馆隆重举行，本次比赛汇集了来自全市各大酒店的餐饮服务、客房服务、厨师等70多名参赛选手参加。</span><br />
<span style=\"font-size:18px;\">&nbsp;&nbsp;&nbsp; 比赛内容分为热菜烹饪比赛、冷拼雕刻、中式面点、餐厅摆台、客房铺床等项目。经过激烈的角逐，龙山宾馆在此次比赛中获得优','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1449763200','updated_at'=>'1449763200']);
        $this->insert('{{%cms_article}}',['id'=>'810','column_id'=>'13','title'=>'强基础、抓规范、提效能<br />——公司（中心）举办《工作手册》知识竞赛<br />','image'=>NULL,'description'=>'','author'=>'沈丽娅','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:18px;font-family:SimSun;\">12</span><span style=\"','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1450022400','updated_at'=>'1450022400']);
        $this->insert('{{%cms_article}}',['id'=>'811','column_id'=>'13','title'=>'胡甲均、胡军考察坝区环境整治绿化景观改造工程','image'=>NULL,'description'=>'','author'=>'','content'=>'<span id=\"Label_lr\"> 
<p style=\"text-indent:32pt;\" class=\"MsoNormal\">
	<span style=\"font-family:SimSun;font-size:18px;\">12</span><span style=\"font-family:仿宋_GB2312;font-size:16pt;\"><span style=\"font-family:SimSun;font-size:18px;\">月</span><span style=\"font','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1450368000','updated_at'=>'1450368000']);
        $this->insert('{{%cms_article}}',['id'=>'812','column_id'=>'13','title'=>'园林绿化工程分公司开展丹江口库区水土流失监测点基础勘察工作<br />','image'=>NULL,'description'=>'','author'=>'高飞','content'=>'<span id=\"Label_lr\"> 
<p style=\"text-align:left;text-indent:30pt;\" class=\"MsoNormal\" align=\"left\">
	<span style=\"line-height:150%;font-family:SimSun;font-size:18px;\">12</span><span style=\"line-height:150%;font-family:SimSun;font-size:18px;\">月</span><span ','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1450368000','updated_at'=>'1450368000']);
        $this->insert('{{%cms_article}}',['id'=>'813','column_id'=>'13','title'=>'园林绿化工程分公司加快推进坝区右岸绿化景观及环境整治工程进度','image'=>NULL,'description'=>'','author'=>'办公室','content'=>'<p style=\"text-indent:32pt;\" class=\"MsoNormal\">
	<span style=\"font-family:仿宋_GB2312;font-size:16pt;\">12</span><span style=\"font-family:仿宋_GB2312;font-size:16pt;\">月的丹江口，虽然看不到雪，但凛冽的寒风和接近零度的低温，足以让人感受到严冬的威力，但在坝区右岸绿化景观工程施工现场却是一片热火朝天的劳动景象。推土机轰鸣前进，吊车移动着吊臂，施工人员奋力','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1450627200','updated_at'=>'1450627200']);
        $this->insert('{{%cms_article}}',['id'=>'814','column_id'=>'13','title'=>'平安夜龙山宾馆圣诞大餐火爆热闹','image'=>NULL,'description'=>'','author'=>'王政','content'=>'<p style=\"text-indent:28pt;\" class=\"MsoNormal\">
	<span style=\"font-family:宋体;font-size:14pt;\">在临近圣诞节及新年之际，龙山宾馆进行了环境装扮，营造出浓浓的节日气氛。</span><span style=\"font-size:14pt;\"><span>12</span></span><span style=\"font-family:宋体;font-size:14pt;\">月</span><span style=\"f','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1451232000','updated_at'=>'1451232000']);
        $this->insert('{{%cms_article}}',['id'=>'815','column_id'=>'13','title'=>'公司应急救援队助力坝区右岸樱花栽植','image'=>NULL,'description'=>'','author'=>'','content'=>'<p style=\"text-indent:24pt;\" class=\"MsoNormal\">
	<span style=\"font-family:仿宋_GB2312;font-size:16pt;\">&nbsp;<span style=\"font-size:18px;\">12</span></span><span style=\"font-family:仿宋_GB2312;font-size:16pt;\"><span style=\"font-size:18px;\">月</span><span style=','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1451232000','updated_at'=>'1451232000']);
        $this->insert('{{%cms_article}}',['id'=>'816','column_id'=>'13','title'=>'集团公司发展计划部到坝区工地现场检查指导工作<br /><br />','image'=>NULL,'description'=>'','author'=>'姚丹丹','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:18px;\">2016年1月2日，集团公司发展计划部副部长管儒铂带领计划部工作人员利用节假日到坝区工地现场检查指导工作。 </span>
</p>
<p>
	<span style=\"font-size:18px;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span st','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1451836800','updated_at'=>'1451836800']);
        $this->insert('{{%cms_article}}',['id'=>'817','column_id'=>'13','title'=>'龙山宾馆餐饮获得“十佳”称号','image'=>NULL,'description'=>'','author'=>'黄阁','content'=>'&nbsp;<span style=\"font-family:宋体;font-size:15pt;\">&nbsp;&nbsp;&nbsp; <span style=\"font-family:SimSun;font-size:18px;\">近日，由丹江口市商务局、旅游外事和侨务局、食品药品监督管理局、市餐饮业协会联合举办的</span><span style=\"font-family:SimSun;font-size:18px;\">2015</span><span style=\"font-family:Si','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1452096000','updated_at'=>'1452096000']);
        $this->insert('{{%cms_article}}',['id'=>'818','column_id'=>'13','title'=>'公司（中心）开展2015年全年工作检查','image'=>NULL,'description'=>'','author'=>'','content'=>'<p style=\"text-indent:32pt;\" class=\"MsoNormal\">
	<span style=\"font-family:仿宋_GB2312;font-size:16pt;\"><span style=\"font-family:SimSun;font-size:18px;\">为全面了解公司（中心）所属各单位、机关各部门以及各党支部、基层工会</span><span style=\"font-family:SimSun;font-size:18px;\">2015</span><span','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1452441600','updated_at'=>'1452441600']);
        $this->insert('{{%cms_article}}',['id'=>'819','column_id'=>'13','title'=>'龙山宾馆开展2015年度自查工作','image'=>NULL,'description'=>'','author'=>'贾韵','content'=>'<p style=\"text-indent:28pt;\" class=\"MsoNormal\">
	<span><span style=\"line-height:150%;font-family:仿宋;font-size:14pt;\"><span style=\"font-family:SimSun;font-size:18px;\">为全面检验</span><span style=\"font-family:SimSun;font-size:18px;\">2015</span><span style=\"font','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1452700800','updated_at'=>'1452700800']);
        $this->insert('{{%cms_article}}',['id'=>'820','column_id'=>'13','title'=>'龙山宾馆客房电视机全面更新','image'=>NULL,'description'=>'','author'=>'王政','content'=>'<p style=\"text-indent:21pt;\" class=\"MsoNormal\">
	<span style=\"font-family:宋体;\"><span>&nbsp;<span style=\"font-family:SimSun;font-size:18px;\">新年伊始，龙山宾馆为提高客人入住时的收视体验，满足宾客对高清数字电视的需求，龙山宾馆对现有客房的电视机进行了全面更换。淘汰落后老化的“大块头”显像管电视机，更新为液晶电视机，加装了数字电视机顶盒，不仅图像清晰，电视节目也变得丰富多','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1452700800','updated_at'=>'1452700800']);
        $this->insert('{{%cms_article}}',['id'=>'821','column_id'=>'13','title'=>'绿化工程分公司进行2016年苗木市场调查','image'=>NULL,'description'=>'','author'=>'周军','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-family:SimSun;font-size:18px;\">新年伊始，园林绿化工程分公司在公司王经理的亲自带领下，历时一周，对2016年苗木市场进行了调查。 </span> 
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1453132800','updated_at'=>'1453132800']);
        $this->insert('{{%cms_article}}',['id'=>'822','column_id'=>'13','title'=>'大坝景区启用安检设备','image'=>NULL,'description'=>'','author'=>'李文涛','content'=>'<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14pt;line-height:150%;\">1</span><span style=\"font-size:14pt;font-family:宋体;line-height:150%;\">月</span><span style=\"font-size:14pt;line-height:150%;\">19</span><span style=\"font-size:14p','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1453132800','updated_at'=>'1453132800']);
        $this->insert('{{%cms_article}}',['id'=>'823','column_id'=>'13','title'=>'公司（中心）对专业技术人员进行年度考评','image'=>NULL,'description'=>'','author'=>'甘润','content'=>'<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-family:SimSun;font-size:18px;\">1月20日下午，公司（中心）在办公楼三楼会议室召开专业技术人员考评会，对公司（中心）专业技术人员2015年度履职情况进行集中考评。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp;&nbsp;</span>','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1453305600','updated_at'=>'1453305600']);
        $this->insert('{{%cms_article}}',['id'=>'824','column_id'=>'13','title'=>'风雪中的忙碌','image'=>NULL,'description'=>'','author'=>'汤爱珍','content'=>'<p class=\"MsoNormal\" style=\"text-indent:24pt;\">
	<span style=\"font-size:12pt;line-height:300%;\"><span><span style=\"font-size:18px;font-family:SimSun;line-height:1.5;\"></span><span style=\"font-size:18px;font-family:SimSun;line-height:2;\">元月</span><span sty','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1453651200','updated_at'=>'1453651200']);
        $this->insert('{{%cms_article}}',['id'=>'825','column_id'=>'13','title'=>'公司领导王森林到商贸及油气经营单位调研','image'=>NULL,'description'=>'','author'=>'办公室','content'=>'<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-family:SimSun;font-size:18px;\">1月25日下午，公司领导王森林以及相关部门负责人一行6人对商贸分公司、加油站、液化气分公司三个单位进行了集中调研，共同谋划2016年经营工作。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; ','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1453737600','updated_at'=>'1453737600']);
        $this->insert('{{%cms_article}}',['id'=>'826','column_id'=>'13','title'=>'加油站被评为十堰市诚信计量示范单位','image'=>NULL,'description'=>'','author'=>'程芳','content'=>'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:18px;font-family:SimSun;\">1</span><span style=\"font-size:18px;font-family:SimSun;\">月</span><span style=\"font-size:18px;font-family:SimSun;\">26</span><span style=\"font-size:18px;font-f','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1453996800','updated_at'=>'1453996800']);
        $this->insert('{{%cms_article}}',['id'=>'827','column_id'=>'13','title'=>'公司应急救援队连续两次行动出色完成紧急任务','image'=>NULL,'description'=>'','author'=>'','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp;&nbsp;1月30日、2月1日，公司应急救援队连续两次全体行动，有力协助了园林绿化工程分公司、离退服务部节前紧急任务的完成。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 根据天气预报，近日丹江口市将有雨雪天气，为了抢抓坝区绿化工程施工进','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1454342400','updated_at'=>'1454342400']);
        $this->insert('{{%cms_article}}',['id'=>'828','column_id'=>'13','title'=>'公司（中心）领导春节慰问一线职工','image'=>NULL,'description'=>'','author'=>'','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<span style=\"font-family:SimSun;font-size:18px;\">2月7日，在新春佳节到来之际，公司（中心）领导到在丹的11个基层单位进行春节慰问, 向一线职工致以新春的问候和祝福。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp; &nb','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1454774400','updated_at'=>'1454774400']);
        $this->insert('{{%cms_article}}',['id'=>'829','column_id'=>'13','title'=>'公司领导王森林到园林绿化工程分公司调研','image'=>NULL,'description'=>'','author'=>'','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 2月14日，春节过后上班第一天，公司领导王森林以及相关部门负责人一行4人到园林绿化工程分公司就2016年工作进行了调研， 园林绿化工程分公司全体员工参加了调研座谈会。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 在座谈会上，园林绿化工程','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1455379200','updated_at'=>'1455379200']);
        $this->insert('{{%cms_article}}',['id'=>'830','column_id'=>'13','title'=>'洁净从新年第一天开始……','image'=>NULL,'description'=>'','author'=>'王雪培','content'=>'<span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14pt;font-family:宋体;\">新年刚过，武汉分公司就开始了紧张有序的工作。</span><span style=\"font-size:14pt;\"></span> 
<p class=\"MsoNormal\" style=\"text-indent:28pt;\">
	<span style=\"font-size:14pt;\">2</spa','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1455465600','updated_at'=>'1455465600']);
        $this->insert('{{%cms_article}}',['id'=>'831','column_id'=>'13','title'=>'中心车队开展随车日志使用工作','image'=>NULL,'description'=>'','author'=>'聂国霞','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 从2016年元月起，中心车队开展随车日志使用工作，有效的促进了车队的规范管理，为车队安全运行打下了良好的基础。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 随车日志主要记录当天车辆的一切活动，包括：车辆行车公里数、每天车辆自检自查情况、','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1455552000','updated_at'=>'1455552000']);
        $this->insert('{{%cms_article}}',['id'=>'832','column_id'=>'13','title'=>'热闹的龙山春节','image'=>NULL,'description'=>'','author'=>'黄阁、王政','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 2016年2月7日至2月13日（大年除夕至正月初六），春节7天长假对大多数人来说，是团圆欢聚的时光，是出游观光的假期，但对龙山人来说是热闹而忙碌、坚持而努力、奉献而收获的季节。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 除夕中午开始，','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1455552000','updated_at'=>'1455552000']);
        $this->insert('{{%cms_article}}',['id'=>'833','column_id'=>'13','title'=>'龙山新年首活动','image'=>NULL,'description'=>'——龙山宾馆成功举办情人节海鲜自助餐活动','author'=>'张寅秋','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 2月14日是春节后上班的第一天，在一声声“新年好”、“新年快乐”问候中，龙山宾馆各部门还未从春节的忙碌中喘口气就又投入到了“情人节”西餐厅海鲜自助餐的活动中来。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 这次情人节海鲜自助大餐活动，从','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1455552000','updated_at'=>'1455552000']);
        $this->insert('{{%cms_article}}',['id'=>'834','column_id'=>'13','title'=>'公司组织开展鱼类增殖放流站建管调研','image'=>NULL,'description'=>'','author'=>'','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp;&nbsp; 2月19-21日，在丹江口库区鱼类增殖放流站即将在松涛山庄建设之际，','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1456070400','updated_at'=>'1456070400']);
        $this->insert('{{%cms_article}}',['id'=>'835','column_id'=>'13','title'=>'奋战金沙江畔  踏上九年征程','image'=>NULL,'description'=>'','author'=>'曾文杰','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span id=\"Label_lr\"><span id=\"Label_lr\"><span style=\"font-size:18px;font-family:SimSun;line-height:150%;\">2</span><span style=\"font-','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1457280000','updated_at'=>'1457280000']);
        $this->insert('{{%cms_article}}',['id'=>'836','column_id'=>'13','title'=>'公司（中心）各单位学习传达工作会精神','image'=>NULL,'description'=>'','author'=>'聂国霞、宛英、陈莉、艾海燕、李晓沛、彭翠兰、贾韵','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;<span style=\"font-family:宋体;font-size:12pt;\">&nbsp;&nbsp;&nbsp;&nbsp;','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1457452800','updated_at'=>'1457452800']);
        $this->insert('{{%cms_article}}',['id'=>'837','column_id'=>'13','title'=>'武汉分公司定措施抓服务规范化','image'=>NULL,'description'=>'','author'=>'李刚','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14pt;font-family:宋体;\">3</span><span style=\"font-size:14pt;font-family:宋体;\">月<span>10</span>号下午，武汉分公司组织员工召开会议，根据<span>2016</span>年的实际服务管理工作情况，分公司领导及各部','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1457884800','updated_at'=>'1457884800']);
        $this->insert('{{%cms_article}}',['id'=>'838','column_id'=>'13','title'=>'龙山宾馆开展美团网操作培训','image'=>NULL,'description'=>'','author'=>'王欣','content'=>'<span id=\"Label_lr\"> 
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 3月11日下午，龙山宾馆美团网相关业务操作流程培训在7号会议室开课。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 当前，外出旅游的客人越来越多，要了解旅游地当地的美食信息，大多游客都会选择美团','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1457884800','updated_at'=>'1457884800']);
        $this->insert('{{%cms_article}}',['id'=>'839','column_id'=>'13','title'=>'大坝景区齐心协力铺屋顶','image'=>NULL,'description'=>'','author'=>'王敏','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 3月17日，大坝景区全体男同志在值班经理的指挥下，齐心协力完成了安检中心玻璃屋顶的环保草坪铺装工作。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 一大早，全体男同志都来到现场开始工作。他们搬的搬，抬的抬，将一块块网购的环保人工草坪铺满了','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1458144000','updated_at'=>'1458144000']);
        $this->insert('{{%cms_article}}',['id'=>'840','column_id'=>'13','title'=>'松涛山庄春茶制作拉开序幕','image'=>NULL,'description'=>'','author'=>'夏术敏','content'=>'<span id=\"Label_lr\"> 
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 阳春三月，又到春茶飘香时。3月17日上午，松涛山庄管理处结合党日活动组织员工采茶，拉开了松涛山庄2016年春季制茶工作的序幕。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 8时许，大家都已来到','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1458230400','updated_at'=>'1458230400']);
        $this->insert('{{%cms_article}}',['id'=>'841','column_id'=>'13','title'=>'长江委中心站和公司领导赴白鹤滩项目部慰问指导','image'=>NULL,'description'=>'','author'=>'曾文杰','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 3月17日～18日，长江水利委员会长江流域水土保持监测中心站设计室主任姚赫、副主任项宇一行和公司领导王森林赴金沙江白鹤滩水电站，检查指导白鹤滩项目部水土保持监测工作，并对项目部成员进行慰问。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp;&','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1458489600','updated_at'=>'1458489600']);
        $this->insert('{{%cms_article}}',['id'=>'842','column_id'=>'13','title'=>'跟着大雁去迁徙','image'=>NULL,'description'=>'龙山宾馆接待“全国公益护鸟行动”团队','author'=>'贾韵','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; “做客丹江口，水润中国心。我宿雁飞疾，转眼过榆林。”3月21日，龙山宾馆接待了一批特殊的客人，这首诗便是其中一位客人即兴吟出的。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 这批特殊的客人是参加 “跟随大雁去迁徙，守护候鸟迁徙地” 全国','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1458576000','updated_at'=>'1458576000']);
        $this->insert('{{%cms_article}}',['id'=>'843','column_id'=>'13','title'=>'公司春季采茶劳动竞赛拉开帷幕','image'=>NULL,'description'=>'','author'=>'','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:18px;\">为最大限度激发员工的工作热情和活力，促进生产经营任务完成，3月29日，公司正式启动以“比素质、比干劲、比奉献、比创新、比作风”为主题的春季采茶劳动竞赛。</span>
</p>
<p>
	<span style=\"font-size:18px;\">&nbsp;&nbsp;&nbsp','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1459180800','updated_at'=>'1459180800']);
        $this->insert('{{%cms_article}}',['id'=>'844','column_id'=>'13','title'=>'松涛山庄赶制明前新茶','image'=>NULL,'description'=>'','author'=>'夏术敏','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp; 近日，为了满足客户需求，松涛山庄管理处全体员工加班加点赶制明前新茶。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp; 自3月17日春茶制作开始至今，松涛山庄管理处接到较多茶叶订单，茶叶销售呈现供不应求的局面，销售量较往年同期有较大幅度增长。这段时间为赶制新茶，连日','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1459440000','updated_at'=>'1459440000']);
        $this->insert('{{%cms_article}}',['id'=>'845','column_id'=>'13','title'=>'春满茶园采茶忙','image'=>NULL,'description'=>'','author'=>'王青','content'=>'<span id=\"Label_lr\"> 
<p>
	<span style=\"font-size:18px;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 春回大地，连日来，松涛山庄茶园一片繁忙的景象。 </span>
</p>
<p>
	<span style=\"font-size:18px;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 时下正值春茶产销“黄金季”，松涛山庄茶园进入采摘旺季。3月29日开展采茶劳动竞赛以来，平时，无论是上班前的清晨、下班后的傍晚，还','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1459440000','updated_at'=>'1459440000']);
        $this->insert('{{%cms_article}}',['id'=>'846','column_id'=>'13','title'=>'加油站召开油气回收改造现场会','image'=>NULL,'description'=>'','author'=>'陈丽','content'=>'<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-family:SimSun;font-size:18px;\">4月8日上午，张勇副经理在加油站组织召开了油气回收改造现场会，参加会议的有加油站油气回收改造工作的相关人员和工程施工方。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; </span><span styl','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1460390400','updated_at'=>'1460390400']);
        $this->insert('{{%cms_article}}',['id'=>'847','column_id'=>'13','title'=>'公司组织力量扮靓景区迎“五一”','image'=>NULL,'description'=>'','author'=>'盘家胜','content'=>'<div style=\"text-align:center;\">
	&nbsp;
</div>
<span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14pt;\">4</span><span style=\"font-size:14pt;font-family:宋体;\">月</span><span style=\"font-size:14pt;\">20</span><span style=\"f','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1461081600','updated_at'=>'1461081600']);
        $this->insert('{{%cms_article}}',['id'=>'848','column_id'=>'13','title'=>'加油站顺利完成油气回收改造恢复营业','image'=>NULL,'description'=>'','author'=>'李书林','content'=>'<span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-family:SimSun;font-size:18px;\">4</span><span style=\"font-family:仿宋_GB2312;font-size:15pt;\"><span style=\"font-family:SimSun;font-size:18px;\">月</span><span style=\"font-fa','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1461081600','updated_at'=>'1461081600']);
        $this->insert('{{%cms_article}}',['id'=>'849','column_id'=>'13','title'=>'西藏玉龙铜矿二期工程水土保持方案通过专家技术评审<br />','image'=>NULL,'description'=>'','author'=>'曾文杰','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp;&nbsp;4月22日，西藏玉龙铜矿二期工程水土保持方案报告书技术评审会在拉萨召开。会议由西藏自治区水土保持局主持，评审专家组由西藏自治区国土资源厅、工信厅、安监局、水土保持监测站及昌都市水利局等领导及专家组成。与会专家和代表通过观看项目区影像资料、听取建设单位关于项目前期工作进展情况及方案编制单位关于水土保持方案报告书内容的汇报，经认真评审、讨论，评审专家组认为','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1461513600','updated_at'=>'1461513600']);
        $this->insert('{{%cms_article}}',['id'=>'850','column_id'=>'13','title'=>'长江委水保监测中心站检查丹江口库区羊山监测点工作','image'=>NULL,'description'=>'','author'=>'盘家胜','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span style=\"font-size:14pt;\"><span style=\"font-size:small;\"><span style=\"font-size:18px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span s','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1461513600','updated_at'=>'1461513600']);
        $this->insert('{{%cms_article}}',['id'=>'870','column_id'=>'13','title'=>'博远公司推进标准化建设工作','image'=>NULL,'description'=>'','author'=>'王青','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;2015年是公司管理提升年，为全面提升并规范公司管理工作，实现工作的高标准、高质量、高效率。近日，公司完成《博远置业公司、服务管理中心、旅游发展公司工作手册》、《廉洁风险防控手册》、《物业管理服务规范》的编制和印发工作。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;《工作手册》由管理制度、党务工作、工会工作、团委工作四部分组成，内容既包含了公司内控制度、劳动纪律管理规定','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1430064000','updated_at'=>'1430064000']);
        $this->insert('{{%cms_article}}',['id'=>'871','column_id'=>'13','title'=>'财劳部开展物业分公司财务专项检查工作','image'=>NULL,'description'=>'','author'=>'刘锦玲','content'=>'<p style=\"text-indent:28pt;\" class=\"MsoNormal\">
	<span style=\"font-family:SimSun;font-size:16px;\">秋风送爽，丹桂飘香。为加强公司内部财务风险控制，确保生产经营资金安全，由财</span><span style=\"font-family:SimSun;font-size:16px;\">劳</span><span style=\"font-family:SimSun;font-size:16px;\">部牵头，对物业','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1440345600','updated_at'=>'1440345600']);
        $this->insert('{{%cms_article}}',['id'=>'872','column_id'=>'13','title'=>'践行工作会精神 精细管理提效能','image'=>NULL,'description'=>'','author'=>'梅 焕','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1518105600','updated_at'=>'1518105600']);
        $this->insert('{{%cms_article}}',['id'=>'873','column_id'=>'13','title'=>'财务劳资部召开九月业务学习会','image'=>NULL,'description'=>'','author'=>'刘锦玲','content'=>'<p style=\"text-align:justify;text-indent:21pt;margin-left:0pt;\" class=\"MsoNormal\">
	<span style=\"font-family:宋体;font-size:10.5pt;\"><span style=\"font-family:SimSun;font-size:16px;\">2015</span><span style=\"font-family:SimSun;font-size:16px;\">年</span><span s','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1441900800','updated_at'=>'1441900800']);
        $this->insert('{{%cms_article}}',['id'=>'874','column_id'=>'13','title'=>'工程分公司组织员工讨论《十三五规划》','image'=>NULL,'description'=>'','author'=>'','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span style=\"font-size:18px;\">&nbsp; &nbsp; &nbsp; 11月12日下午，园林绿化工程分公司组织全体员工在分公司会议室学习博远公司十三五规划（讨论稿）。</span><br />
<span style=\"font-size:18px;\">&nbsp; &nbsp; &nbsp; 会上，分公司张经理首先带领大家重点学习了十三五规划（讨论稿），','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1447603200','updated_at'=>'1447603200']);
        $this->insert('{{%cms_article}}',['id'=>'875','column_id'=>'13','title'=>'大坝景区学习先进经验  传达“十三五”精神','image'=>NULL,'description'=>'','author'=>'郭军辉','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span style=\"font-size:18px;\">&nbsp;&nbsp;&nbsp;&nbsp; 近期，大坝景区利用下班时间，在经理刘东的主持下召开了全体职工大会，会议的主要内容是分享其深圳之行所学习到的万科在管理、营销、服务上的先进经验，以及学习《博远置业','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1447603200','updated_at'=>'1447603200']);
        $this->insert('{{%cms_article}}',['id'=>'876','column_id'=>'13','title'=>'襄阳分公司传达2015年工作检查总结会精神','image'=>NULL,'description'=>'','author'=>'汤爱珍','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:18px;font-family:SimSun;\">1</span><span style=\"font-size:18px;font-family:SimSun;\">月</span><span style=\"font-size:18px;font-family:SimS','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1452700800','updated_at'=>'1452700800']);
        $this->insert('{{%cms_article}}',['id'=>'877','column_id'=>'13','title'=>'公司（中心）召开2016年工作会暨第二届职代会第七次会议<br />','image'=>NULL,'description'=>'','author'=>'','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3月4日，公司（中心）2016年工作会暨第二届职代会第七次会议在龙山宾馆大报告厅召开，集团公司总经理胡军、副总经理曾凡师、工会主席赵立群应邀出席了会议。
</p>
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 公司经理、党委书记，中心主任王森林作了题为《保持定力 &nbsp;固化管理 &nbsp;提高技能 &nbsp;谋求发展 &nbsp;加快推进公司（','link'=>NULL,'sort'=>'0','view'=>'1','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1457107200','updated_at'=>'1457107200']);
        $this->insert('{{%cms_article}}',['id'=>'878','column_id'=>'13','title'=>'公司召开建立聘用制员工成长渠道专题座谈会','image'=>NULL,'description'=>'','author'=>'汪玉红','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp;&nbsp;4月12日，公司（中心）在三楼会议室召开建立聘用制员工成长渠道专题座谈会，公司领导王森林出席并主持会议，机关各部门负责人和相关单位负责人参加了座谈会。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 会议首先由财务劳资部通报了服务','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1460476800','updated_at'=>'1460476800']);
        $this->insert('{{%cms_article}}',['id'=>'879','column_id'=>'13','title'=>'无形的习惯　有形的力量','image'=>NULL,'description'=>'公司节约观念深入人心','author'=>'沈丽娅','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:18px;font-family:SimSun;\">节约是一种美德、是一种智慧、更是一种文化。多年来，博远公司发扬勤俭节约风尚，在公司广大职工中牢固树立节约观念，节约理念深入人心。</span><br />
<span style=\"font-','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1460908800','updated_at'=>'1460908800']);
        $this->insert('{{%cms_article}}',['id'=>'885','column_id'=>'21','title'=>'用一颗感恩的心去对待工作（黄冠群）','image'=>NULL,'description'=>'读《工匠精神》有感','author'=>'黄冠群','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"vertical-align:top;text-indent:24pt;\">
	<span style=\"font-size:16px;font-family:SimSun;color:#333333;line-height:150%;\">“</sp','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1431360000','updated_at'=>'1431360000']);
        $this->insert('{{%cms_article}}',['id'=>'886','column_id'=>'21','title'=>'敬业精业乐业  绽放人生光彩（沈丽娅）','image'=>NULL,'description'=>'《工匠精神》读书心得','author'=>'沈丽娅','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"text-indent:30pt;\">
	<span style=\"font-size:16px;\">翻开深褐</span><span style=\"font-size:16px;\"></span><span style=\"font-size:16p','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1431187200','updated_at'=>'1431187200']);
        $this->insert('{{%cms_article}}',['id'=>'887','column_id'=>'21','title'=>'把工作做到最精、最细（李继红）','image'=>NULL,'description'=>'《工匠精神》读后感','author'=>'李继红','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"text-indent:21pt;\">
	<span style=\"font-size:14pt;font-family:仿宋_GB2312;\"><span style=\"font-size:16px;font-family:SimSun;\">读完《工匠精神》，我悟出的最深的观点就是在工作','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1430668800','updated_at'=>'1430668800']);
        $this->insert('{{%cms_article}}',['id'=>'888','column_id'=>'21','title'=>'用工匠精神做优服务业（盘家胜）','image'=>NULL,'description'=>'《工匠精神》读后感','author'=>'盘家胜','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"text-indent:28pt;\">
	<span style=\"font-size:16px;font-family:宋体;\">读了付守永的《工匠精神》，颇有感悟。作者在书中明确地告诉我们，工匠精神是对工作的执着，对所做的事情和产生的产品的精雕细琢，精益求精。这让我联想到我们博远公司从事的服务业，前几年实施看板管理（目视管理','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1431446400','updated_at'=>'1431446400']);
        $this->insert('{{%cms_article}}',['id'=>'889','column_id'=>'21','title'=>'职业之心与职业追求（张余）','image'=>NULL,'description'=>'工匠精神读后感','author'=>'张余','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"text-indent:30pt;\">
	<SPAN style=\"FONT-SIZE: 16px; FONT-FAMILY: SimSun; mso-ascii-font-family: \" times=\"\" roman?;=\"\" mso-hansi-font-family:=\"\" ?times=\"\" new=\"\" roman','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1431187200','updated_at'=>'1431187200']);
        $this->insert('{{%cms_article}}',['id'=>'890','column_id'=>'21','title'=>'《工匠精神》读后感（于星节）','image'=>NULL,'description'=>'','author'=>'于星节','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"vertical-align:top;text-align:left;text-indent:24pt;\" align=\"left\">
	<span style=\"font-size:12pt;font-family:宋体;color:black;line-height:200%;\"><span style=\"font-size','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1430582400','updated_at'=>'1430582400']);
        $this->insert('{{%cms_article}}',['id'=>'891','column_id'=>'21','title'=>'读《工匠精神》心得体会（彭翠兰）','image'=>NULL,'description'=>'','author'=>'彭翠兰','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"text-indent:45pt;\">
	<span style=\"font-size:18pt;font-family:华文仿宋;color:black;\"><span style=\"font-size:16px;font-family:SimSun;\">近期单位组织全体员工开展读书活动，推荐两本书，《海底捞你学不会》及《工匠','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1431100800','updated_at'=>'1431100800']);
        $this->insert('{{%cms_article}}',['id'=>'892','column_id'=>'21','title'=>'海底捞的服务精神（夏术敏）','image'=>NULL,'description'=>'《海底捞你学不会》读后感','author'=>'夏术敏','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"text-indent:28pt;\">
	<SPAN style=\"FONT-SIZE: 16px; FONT-FAMILY: 宋体; mso-ascii-font-family: \" times=\"\" roman?;=\"\" mso-hansi-font-family:=\"\" ?times=\"\" new=\"\" roman??=\"','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1431100800','updated_at'=>'1431100800']);
        $this->insert('{{%cms_article}}',['id'=>'893','column_id'=>'21','title'=>'品质工作 向价值型员工进化（李书林）','image'=>NULL,'description'=>'《工匠精神》读后感','author'=>'李书林','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"text-indent:28pt;\">
	<span style=\"font-size:14pt;font-family:仿宋_GB2312;\"><span style=\"font-size:16px;font-family:SimSun;\">“工作将占据你生命中相当大的一部分，从事你认为具有非凡意义的工作，方能给你带来真正的满','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1431014400','updated_at'=>'1431014400']);
        $this->insert('{{%cms_article}}',['id'=>'894','column_id'=>'21','title'=>'《海底捞你学不会》读后感（李刚）','image'=>NULL,'description'=>'','author'=>'李刚','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"text-indent:28pt;\">
	<span style=\"font-size:14pt;font-family:宋体;\"><span style=\"font-size:16px;\">看完了《海底捞你学不会》，第一感觉就是管理者的智慧决定企业的发展。以下是我的</span><span><a href=\"http://ww','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1430409600','updated_at'=>'1430409600']);
        $this->insert('{{%cms_article}}',['id'=>'895','column_id'=>'21','title'=>'《海底捞你学不会》读后感（王政）','image'=>NULL,'description'=>'','author'=>'王政','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"text-indent:24pt;\">
	<span style=\"font-size:12pt;font-family:仿宋;line-height:150%;\"><span style=\"font-size:16px;font-family:SimSun;\">海底捞，是四川简阳的一家全国连锁火锅店。</span><span ','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1431014400','updated_at'=>'1431014400']);
        $this->insert('{{%cms_article}}',['id'=>'896','column_id'=>'21','title'=>'用感恩的心对待工作（甘润）','image'=>NULL,'description'=>'读《工匠精神-向价值型员工进化》读后感','author'=>'甘润','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"text-indent:32pt;\">
	<span style=\"font-size:16px;font-family:宋体;\">当我拿起这本书，已经被封底的</span><span style=\"font-size:16px;\">5</span><span style=\"font-size:16px;font-family:','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1430928000','updated_at'=>'1430928000']);
        $this->insert('{{%cms_article}}',['id'=>'897','column_id'=>'21','title'=>'心态决定一切（王青）','image'=>NULL,'description'=>'《工匠精神》读后感','author'=>'王青','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"text-indent:32pt;\">
	<span style=\"font-size:16pt;font-family:仿宋_GB2312;\"><span style=\"font-size:16px;font-family:SimSun;\">“修正内心，改变行为，把每个当下做到极致“。沿着书中巨人的脚步我们一路走来</span','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1430841600','updated_at'=>'1430841600']);
        $this->insert('{{%cms_article}}',['id'=>'898','column_id'=>'21','title'=>'工匠精神读后感（万春久）','image'=>NULL,'description'=>'','author'=>'万春久','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"background:#fafafa;text-align:left;text-indent:30pt;\" align=\"left\">
	<span style=\"font-size:15pt;font-family:仿宋_GB2312;color:#333333;\"><span style=\"font-size:16px;fo','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1430496000','updated_at'=>'1430496000']);
        $this->insert('{{%cms_article}}',['id'=>'899','column_id'=>'21','title'=>'读《海底捞你学不会》心得（许磊）','image'=>NULL,'description'=>'','author'=>'许磊','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"text-indent:30pt;\">
	<span style=\"font-size:15pt;font-family:宋体;\"><span style=\"font-size:16px;\">《海底捞你学不会》一书主要讲述了海底捞火锅店，在董事长张勇确立的服务差异化战略指导下，始终秉承服务至上，顾客至上的理念，以创新为核心，改变','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1430409600','updated_at'=>'1430409600']);
        $this->insert('{{%cms_article}}',['id'=>'900','column_id'=>'21','title'=>'《工匠精神》读后感（郭军辉）','image'=>NULL,'description'=>'','author'=>'郭军辉','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"text-indent:24pt;\">
	<SPAN style=\"FONT-SIZE: 16px; FONT-FAMILY: SimSun; LINE-HEIGHT: 150%; mso-ascii-font-family: \" times=\"\" roman?;=\"\" mso-hansi-font-family:=\"\" ?ti','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1430841600','updated_at'=>'1430841600']);
        $this->insert('{{%cms_article}}',['id'=>'901','column_id'=>'21','title'=>'读《工匠精神》有感（王敏）','image'=>NULL,'description'=>'','author'=>'王敏','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"text-indent:21.75pt;\">
	<SPAN style=\"FONT-SIZE: 16px; FONT-FAMILY: 宋体; mso-ascii-font-family: \" times=\"\" roman?;=\"\" mso-hansi-font-family:=\"\" ?times=\"\" new=\"\" roman?','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1430755200','updated_at'=>'1430755200']);
        $this->insert('{{%cms_article}}',['id'=>'902','column_id'=>'21','title'=>'海底捞读后感（仲霞）','image'=>NULL,'description'=>'','author'=>'仲霞','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<div>
	<p style=\"text-align:justify;text-indent:21pt;\">
		<span style=\"font-size:16px;font-family:Tahoma;background:white;color:black;\"><span style=\"font-size:16px;\"></span></span><span style=\"','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1430409600','updated_at'=>'1430409600']);
        $this->insert('{{%cms_article}}',['id'=>'903','column_id'=>'21','title'=>'什么是职业精神？（王峰）','image'=>NULL,'description'=>'就是把自己不喜欢做的事情，依然做得比任何人都好。','author'=>'王峰','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p style=\"text-indent:24pt;\">
	<span style=\"font-size:14pt;color:#222222;\">我们是干什么的？就是在最合适的时间，做对企业最有利的事情。比如，在清明时节，用心而高效的采摘每一片茶叶的嫩芽；在丰收时节，小心仔细的把黄橙橙的柑橘封箱、装车；在烈日炎炎下，为干涸的树苗喷洒清水；在山庄发现火情时，用最短的时间赶赴现场，积极参与火灾扑救……</span><spa','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1431792000','updated_at'=>'1431792000']);
        $this->insert('{{%cms_article}}',['id'=>'904','column_id'=>'21','title'=>'物业管理分公司开展“员工学习培训季”活动','image'=>NULL,'description'=>'','author'=>'宛英','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;按照公司生产标准化建设的总体要求，全面提升物业管理服务规范，实现工作的高标准、高质量、高效率，进而提高员工的规范意识和工作执行力，推进分公司学习型团队建设。物业管理分公司把4-9月份确定为“员工学习培训季”，主要学习内容为公司最新编制和印发的《博远置业公司、服务管理中心、旅游发展公司工作手册》、《小区物业管理服务规范》、《办公楼物业管理服务规范》等。
</p>','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1431878400','updated_at'=>'1431878400']);
        $this->insert('{{%cms_article}}',['id'=>'905','column_id'=>'21','title'=>'集团公司开展第五届职业技能（茶叶加工工）竞赛','image'=>NULL,'description'=>'','author'=>'詹世军','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	<p>
		&nbsp; &nbsp; &nbsp; &nbsp;4月28日，集团公司组织的第五届职业技能（茶叶加工工）竞赛在松涛山庄举行，来自博远置业公司的10名选手参加了决赛。
	</p>
	<p>
		&nbsp; &nbsp; &nbsp; &nb','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1430323200','updated_at'=>'1430323200']);
        $this->insert('{{%cms_article}}',['id'=>'906','column_id'=>'21','title'=>'博远公司开展职工职业技能初赛','image'=>NULL,'description'=>'','author'=>'詹世军','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp;为引导和激励广大员工学习业务，提高员工职业素质与技能水平，结合集团公司第五届职业技能竞赛，4月23日，博远公司在松涛山庄开展了职业技能（茶业加工工）初赛活动， 18名参赛选手共同切磋制茶手艺，博远公司职业技能竞赛正式拉开序幕。
</p>
<p>
	&nbsp; &nbsp; &nbsp;整个竞赛','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1430064000','updated_at'=>'1430064000']);
        $this->insert('{{%cms_article}}',['id'=>'907','column_id'=>'21','title'=>'财务劳资部组织开展一季度业务学习会','image'=>NULL,'description'=>'','author'=>'邓玉玲','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; 3月19日下午，财务劳资部按照年度培训教育计划，在公司三楼会议室举行了2015年一季度业务学习会。各基层单位核算员、机关工作人员约20人次参加了此次业务学习。
</p>
<p>
	&nbsp; &nbsp; &nbsp; 本次学习内容一是学习发票管理办法及实施细则，二对近期集团公司及公司出台的进一步加强财务管理的有关规定和国家有关行政法规所涉及的财务事项等进行了解读，提高大家对这些政策的理解，方便今后实际工作。','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1427212800','updated_at'=>'1427212800']);
        $this->insert('{{%cms_article}}',['id'=>'908','column_id'=>'21','title'=>'龙山党支部举行员工技能比武大赛','image'=>NULL,'description'=>'','author'=>'贾韵','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;为了有效促进员工学习业务技能的积极性，达到“学技能、比服务、争先创优促发展”的目的，结合宾馆创建“示范基层党组织创建工作”的有关内容，1月30日，龙山宾馆党支部开展了员工业务技能比赛活动。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;此次竞赛设有中餐宴会摆台、传菜技能、中式铺床、卫生间清洁四个项目，比赛活动得到了各部门员工的积极响应和热情参与，他们利用自己的休息时间，刻','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1422806400','updated_at'=>'1422806400']);
        $this->insert('{{%cms_article}}',['id'=>'909','column_id'=>'21','title'=>'观《致命的有限空间》有感','image'=>NULL,'description'=>'','author'=>'李晓沛','content'=>'<p>
	&nbsp; &nbsp; &nbsp; 6月24日，在松涛山庄观看了水利安全生产事故警示教育片《致命的有限空间》。影片通过一个触目惊心的事故案例，详细介绍了水电站职工检修作业时因不当操作造成较大安全事故的过程，深刻剖析了造成事故发生的主要原因以及应吸取的经验教训。片中指出，在有限空间作业危险性高，有三大危害：一是作业环境情况复杂；二是危险性大，发生事故后果严重；三是容易因盲目施救造成伤亡更大。据权威统计，2001年—2009年8月，我国在有限空间作业中因窒息导致一次死亡3人以上的事故总数为66','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1436284800','updated_at'=>'1436284800']);
        $this->insert('{{%cms_article}}',['id'=>'910','column_id'=>'21','title'=>'2015年度导师带徒活动进入实施阶段','image'=>NULL,'description'=>'','author'=>'汪玉红','content'=>'<p>
	&nbsp; &nbsp; &nbsp; 7月10日，在公司（中心）半年工作检查会暨双月例会上，杨建丹与常螺、王峰，高飞与曾文杰三对师徒代表现场签订了师徒合同，标志着公司（中心）2015年度导师带徒活动进入实施阶段。
</p>
<p>
	&nbsp; &nbsp; &nbsp; 导师带徒活动是拓展青年职工岗位适应性培训的重要渠道，是服务企业改革发展、服务青年成长成才的一项重要举措。根据集团公司团委、人力资源部、财务部、技术部《关于开展汉江集团公司第九届导师带徒活动的通知》（汉司青﹝2015﹞4号','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1436716800','updated_at'=>'1436716800']);
        $this->insert('{{%cms_article}}',['id'=>'911','column_id'=>'21','title'=>'汽车加油别走进误区','image'=>NULL,'description'=>'','author'=>'','content'=>'<p>
	<span style=\"font-size:14pt;font-family:宋体;\"><span style=\"font-size:small;font-family:Tahoma;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>质监局计量所工作人员发现在给加油机检定的过程中</span><span style=\"font-size:14pt;\">,</span><span style=\"font-size:14pt;font-family:宋体;','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1437321600','updated_at'=>'1437321600']);
        $this->insert('{{%cms_article}}',['id'=>'912','column_id'=>'21','title'=>'铭记历史作品4篇（詹重德）','image'=>NULL,'description'=>'','author'=>'詹重德','content'=>'<span id=\"Label_lr\"> 
<p align=\"center\">
	<b><span style=\"font-size:12pt;font-family:宋体;\">承认史实去邪恶</span></b><b><span style=\"font-size:12pt;\"> </span></b><b><span style=\"font-size:12pt;font-family:宋体;\">理性爱国卫和平</span></b><b><span style=\"font-size:12pt;\"></s','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1438012800','updated_at'=>'1438012800']);
        $this->insert('{{%cms_article}}',['id'=>'913','column_id'=>'21','title'=>'劳财部开展整合后首次业务学习会','image'=>NULL,'description'=>'','author'=>'刘锦玲','content'=>'<span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"text-indent:28pt;\">
	<span style=\"font-size:14pt;font-family:宋体;\">2015</span><span style=\"font-size:14pt;font-family:宋体;\">年<span>7</span>月<span>28</span>日</span><span style=\"font-size:14pt;font-family:宋体;\"','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1438099200','updated_at'=>'1438099200']);
        $this->insert('{{%cms_article}}',['id'=>'914','column_id'=>'21','title'=>'我爱我家<br />  ——读公司致员工《十年耕耘 感恩有你》感谢信有感<br />','image'=>NULL,'description'=>'','author'=>'','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	&nbsp; &nbsp; &nbsp; “这么快10年过去了，看到感谢信上的照片就像放电影似的，历历在目，10年公司发展壮大，作为我们个人做的微不足道，公司专门给我们发感谢信，令我们感动”；
</p>
<p>
	&nbsp; &nbsp; &nbsp;“公司就象一个大家庭，公司的成长壮大使其中的每个成员也得到实惠，作为基层员工的我们十分感谢公司”；
</p>
<p>
	&nbsp; &nbsp; &nbsp;“','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1438617600','updated_at'=>'1438617600']);
        $this->insert('{{%cms_article}}',['id'=>'915','column_id'=>'21','title'=>'松涛山庄品茗轩员工参观“丹江口名鱼宴”餐饮技能竞赛','image'=>NULL,'description'=>'','author'=>'程桂华','content'=>'<p>
	&nbsp; &nbsp; &nbsp; &nbsp;8月10日晚上，松涛山庄管理处品茗轩员工在副经理陈钢带领下到沧浪海旅游港观摩了市商务局主办的2015年“丹江口名鱼宴”美食节暨餐饮技能竞赛。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;据介绍，本次大赛有丹江口市宾馆、汉江国际大酒店、丹江口市电力宾馆等十几个单位参加。我们来到现场时，已经是人山人海，桌席都已布置好，只见厨师们煎、炒、烹、炸，使出一个个绝活，精心准备着参赛作品。此时此刻，看着那惟妙惟肖的南瓜雕花、一','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1439222400','updated_at'=>'1439222400']);
        $this->insert('{{%cms_article}}',['id'=>'916','column_id'=>'21','title'=>'龙山宾馆举办普通话培训','image'=>NULL,'description'=>'','author'=>'王政','content'=>'<p>
	&nbsp; &nbsp; &nbsp; &nbsp;8月19日上午，由丹江口市劳动就业局牵头、龙山宾馆承办的“旅游业普通话培训班”在龙山宾馆报告厅举行。此次培训是系列培训中的一部分，系列培训包括“普通话培训”、 “丹江口周边景区讲解”、“礼貌礼仪”等内容。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;这次培训授课老师是丹江口市广电局播音主持明廷慧。龙山宾馆、物业分公司、松涛山庄、大坝景区管理处等约110名员工参加了本次培训。
</p>
<p>
	&nbsp; &n','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1439913600','updated_at'=>'1439913600']);
        $this->insert('{{%cms_article}}',['id'=>'917','column_id'=>'21','title'=>'真情更添夕阳红<br />一一记原汉江中学离退休教师','image'=>NULL,'description'=>'','author'=>'史久新','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14pt;font-family:宋体;\">在巍巍大坝处，悠悠汉水畔，曾经有一个风景宜人，校舍整洁，设备完备，师资雄厚的地方，那就是汉江集团所属汉江中学。汉江中学自</span><span style=\"font-size:14pt;\">1969</span><span style=\"font-s','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1440000000','updated_at'=>'1440000000']);
        $this->insert('{{%cms_article}}',['id'=>'918','column_id'=>'21','title'=>'甘洒汗水写春秋<br />——记退休党员教师袁芍华 <br />','image'=>NULL,'description'=>'','author'=>'史久新','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14pt;font-family:宋体;color:black;\">走进老联通路和美苑小区，常常会看见一位被同龄人叫她<span>“</span>老师<span>”</span>，青年人喊她<span>“</span>阿姨<span>”</span>，孩子们','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1440000000','updated_at'=>'1440000000']);
        $this->insert('{{%cms_article}}',['id'=>'919','column_id'=>'21','title'=>'如何抓好班组安全生产','image'=>NULL,'description'=>'','author'=>'陈丽','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"text-indent:32pt;\">
	<span style=\"font-size:16px;font-family:SimSun;\">对于一个企业来说，能否正常生产，一线职工的安全意识至关重要。而一个企业要想抓好安全生产，首先要以人为本，提高一线职工的安全意识，搞好班组安全生产。</span><span style=\"font-size:16pt;font-fa','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1440345600','updated_at'=>'1440345600']);
        $this->insert('{{%cms_article}}',['id'=>'920','column_id'=>'21','title'=>'加油站组织学习安全法规','image'=>NULL,'description'=>'','author'=>'陈丽','content'=>'<span id=\"Label_lr\"> 
<p>
	<span style=\"font-size:14pt;font-family:仿宋_GB2312;\"><span style=\"font-size:small;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style=\"font-size:18px;font-family:SimSun;\">为了提高职工安全意思，促进加油站安全生产工作，加油站于</span><span style=\"font-','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1440432000','updated_at'=>'1440432000']);
        $this->insert('{{%cms_article}}',['id'=>'921','column_id'=>'21','title'=>'物业管理分公司举办小区绿化养护知识培训','image'=>NULL,'description'=>'','author'=>'宛英','content'=>'<span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14pt;font-family:宋体;\">为提升物业服务水平、提高物业服务人员绿化养护知识，</span><span style=\"font-size:14pt;\">8</span><span style=\"font-size:14pt;font-family:宋体;\">月</span><span style=\"font-size:1','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1440950400','updated_at'=>'1440950400']);
        $this->insert('{{%cms_article}}',['id'=>'922','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（李刚）','image'=>NULL,'description'=>'','author'=>'李刚','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1512662400','updated_at'=>'1512662400']);
        $this->insert('{{%cms_article}}',['id'=>'923','column_id'=>'21','title'=>'学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（孙丹农）','image'=>NULL,'description'=>'','author'=>'孙丹农','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1512835200','updated_at'=>'1512835200']);
        $this->insert('{{%cms_article}}',['id'=>'924','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（唐丽娜）','image'=>NULL,'description'=>'','author'=>'唐丽娜','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1512835200','updated_at'=>'1512835200']);
        $this->insert('{{%cms_article}}',['id'=>'925','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（肖新年）','image'=>NULL,'description'=>'','author'=>'肖新年','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1512835200','updated_at'=>'1512835200']);
        $this->insert('{{%cms_article}}',['id'=>'926','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（叶丹毅）','image'=>NULL,'description'=>'','author'=>'叶丹毅','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1512835200','updated_at'=>'1512835200']);
        $this->insert('{{%cms_article}}',['id'=>'927','column_id'=>'21','title'=>'公司（中心）2017年度物业管理员<br />职业技能竞赛圆满落幕<br />','image'=>NULL,'description'=>'','author'=>'姚斯棋  宛英','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1513008000','updated_at'=>'1513008000']);
        $this->insert('{{%cms_article}}',['id'=>'928','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（胡明星）<br />','image'=>NULL,'description'=>'','author'=>'胡明星','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1513008000','updated_at'=>'1513008000']);
        $this->insert('{{%cms_article}}',['id'=>'929','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（胡明星）<br />','image'=>NULL,'description'=>'','author'=>'胡明星','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1513008000','updated_at'=>'1513008000']);
        $this->insert('{{%cms_article}}',['id'=>'930','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（黄伟）<br />','image'=>NULL,'description'=>'','author'=>'黄伟','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1513008000','updated_at'=>'1513008000']);
        $this->insert('{{%cms_article}}',['id'=>'931','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（陈自力）','image'=>NULL,'description'=>'','author'=>'陈自力','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1513180800','updated_at'=>'1513180800']);
        $this->insert('{{%cms_article}}',['id'=>'932','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（汤明群）<br />','image'=>NULL,'description'=>'','author'=>'汤明群','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1513180800','updated_at'=>'1513180800']);
        $this->insert('{{%cms_article}}',['id'=>'933','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（陆建丹）','image'=>NULL,'description'=>'','author'=>'陆建丹','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1513267200','updated_at'=>'1513267200']);
        $this->insert('{{%cms_article}}',['id'=>'934','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会(卢凯）','image'=>NULL,'description'=>'','author'=>'卢凯','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1513267200','updated_at'=>'1513267200']);
        $this->insert('{{%cms_article}}',['id'=>'935','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（王峰）','image'=>NULL,'description'=>'','author'=>'王峰','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1513440000','updated_at'=>'1513440000']);
        $this->insert('{{%cms_article}}',['id'=>'936','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（张靖）','image'=>NULL,'description'=>'','author'=>'张靖','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1513440000','updated_at'=>'1513440000']);
        $this->insert('{{%cms_article}}',['id'=>'937','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（李书林）','image'=>NULL,'description'=>'','author'=>'李书林','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1513440000','updated_at'=>'1513440000']);
        $this->insert('{{%cms_article}}',['id'=>'938','column_id'=>'21','title'=>'财务劳资部组织学习《增值税暂行条例》','image'=>NULL,'description'=>'','author'=>'王玮','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1513526400','updated_at'=>'1513526400']);
        $this->insert('{{%cms_article}}',['id'=>'939','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（华伟）','image'=>NULL,'description'=>'','author'=>'华伟','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1513526400','updated_at'=>'1513526400']);
        $this->insert('{{%cms_article}}',['id'=>'940','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（李世隆）','image'=>NULL,'description'=>'','author'=>'李世隆','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1513526400','updated_at'=>'1513526400']);
        $this->insert('{{%cms_article}}',['id'=>'941','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（唐宏文）','image'=>NULL,'description'=>'','author'=>'唐宏文','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1513526400','updated_at'=>'1513526400']);
        $this->insert('{{%cms_article}}',['id'=>'942','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（夏术敏）','image'=>NULL,'description'=>'','author'=>'夏术敏','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1513612800','updated_at'=>'1513612800']);
        $this->insert('{{%cms_article}}',['id'=>'943','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（夏术敏）','image'=>NULL,'description'=>'','author'=>'夏术敏','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1513612800','updated_at'=>'1513612800']);
        $this->insert('{{%cms_article}}',['id'=>'944','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（姚丹丹）','image'=>NULL,'description'=>'','author'=>'姚丹丹','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1513612800','updated_at'=>'1513612800']);
        $this->insert('{{%cms_article}}',['id'=>'945','column_id'=>'21','title'=>'导师带徒成效显著获表彰','image'=>NULL,'description'=>'','author'=>'汪玉红','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1513699200','updated_at'=>'1513699200']);
        $this->insert('{{%cms_article}}',['id'=>'946','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”红色教育实践活动心得体会（何思）','image'=>NULL,'description'=>'','author'=>'何思','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1513699200','updated_at'=>'1513699200']);
        $this->insert('{{%cms_article}}',['id'=>'947','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（马占海）','image'=>NULL,'description'=>'','author'=>'马占海','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1513699200','updated_at'=>'1513699200']);
        $this->insert('{{%cms_article}}',['id'=>'948','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（赵华松）','image'=>NULL,'description'=>'','author'=>'赵华松','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1513699200','updated_at'=>'1513699200']);
        $this->insert('{{%cms_article}}',['id'=>'949','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />教育实践活动心得体会（陈钢）','image'=>NULL,'description'=>'','author'=>'陈钢','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1513785600','updated_at'=>'1513785600']);
        $this->insert('{{%cms_article}}',['id'=>'950','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（郑江斌）','image'=>NULL,'description'=>'','author'=>'陈钢','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1513785600','updated_at'=>'1513785600']);
        $this->insert('{{%cms_article}}',['id'=>'951','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（郑江斌）','image'=>NULL,'description'=>'','author'=>'郑江斌','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1513785600','updated_at'=>'1513785600']);
        $this->insert('{{%cms_article}}',['id'=>'952','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（孙永民）','image'=>NULL,'description'=>'','author'=>'孙永民','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1513785600','updated_at'=>'1513785600']);
        $this->insert('{{%cms_article}}',['id'=>'953','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（程贵斌）','image'=>NULL,'description'=>'','author'=>'程贵斌','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1513872000','updated_at'=>'1513872000']);
        $this->insert('{{%cms_article}}',['id'=>'954','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（程家江）','image'=>NULL,'description'=>'','author'=>'程家江','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1513872000','updated_at'=>'1513872000']);
        $this->insert('{{%cms_article}}',['id'=>'955','column_id'=>'21','title'=>'公司(中心)2017年度职业技能竞赛完美收官','image'=>NULL,'description'=>'','author'=>'姚斯棋','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1513872000','updated_at'=>'1513872000']);
        $this->insert('{{%cms_article}}',['id'=>'956','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（余涛）','image'=>NULL,'description'=>'','author'=>'余涛','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1514044800','updated_at'=>'1514044800']);
        $this->insert('{{%cms_article}}',['id'=>'957','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（邹立强)','image'=>NULL,'description'=>'','author'=>'邹立强','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1514044800','updated_at'=>'1514044800']);
        $this->insert('{{%cms_article}}',['id'=>'958','column_id'=>'21','title'=>'学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（王剑）','image'=>NULL,'description'=>'','author'=>'王剑','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1514131200','updated_at'=>'1514131200']);
        $this->insert('{{%cms_article}}',['id'=>'959','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（高原）','image'=>NULL,'description'=>'','author'=>'高原','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1514131200','updated_at'=>'1514131200']);
        $this->insert('{{%cms_article}}',['id'=>'960','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（李江河）','image'=>NULL,'description'=>'','author'=>'李江河','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1514131200','updated_at'=>'1514131200']);
        $this->insert('{{%cms_article}}',['id'=>'961','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得（李豹）','image'=>NULL,'description'=>'','author'=>'李豹','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1514217600','updated_at'=>'1514217600']);
        $this->insert('{{%cms_article}}',['id'=>'962','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得（刘爽）','image'=>NULL,'description'=>'','author'=>'刘爽','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1514217600','updated_at'=>'1514217600']);
        $this->insert('{{%cms_article}}',['id'=>'963','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得（白荧刚）','image'=>NULL,'description'=>'','author'=>'白荧刚','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1514304000','updated_at'=>'1514304000']);
        $this->insert('{{%cms_article}}',['id'=>'964','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得（涂功军）','image'=>NULL,'description'=>'','author'=>'涂功军','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1514304000','updated_at'=>'1514304000']);
        $this->insert('{{%cms_article}}',['id'=>'965','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得（周江）','image'=>NULL,'description'=>'','author'=>'周江','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1514304000','updated_at'=>'1514304000']);
        $this->insert('{{%cms_article}}',['id'=>'966','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得（熊建程）','image'=>NULL,'description'=>'','author'=>'熊建程','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1514390400','updated_at'=>'1514390400']);
        $this->insert('{{%cms_article}}',['id'=>'967','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（门强）','image'=>NULL,'description'=>'','author'=>'门强','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1514476800','updated_at'=>'1514476800']);
        $this->insert('{{%cms_article}}',['id'=>'968','column_id'=>'21','title'=>'学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（邓华）','image'=>NULL,'description'=>'','author'=>'邓华','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1514476800','updated_at'=>'1514476800']);
        $this->insert('{{%cms_article}}',['id'=>'969','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（王俊彦）','image'=>NULL,'description'=>'','author'=>'王俊彦','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1514476800','updated_at'=>'1514476800']);
        $this->insert('{{%cms_article}}',['id'=>'970','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（杨瑞）','image'=>NULL,'description'=>'','author'=>'杨瑞','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1514476800','updated_at'=>'1514476800']);
        $this->insert('{{%cms_article}}',['id'=>'971','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”红色教育实践活动心得体会（许磊）','image'=>NULL,'description'=>'','author'=>'许磊','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1514563200','updated_at'=>'1514563200']);
        $this->insert('{{%cms_article}}',['id'=>'972','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（刘发明）','image'=>NULL,'description'=>'','author'=>'刘发明','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1514563200','updated_at'=>'1514563200']);
        $this->insert('{{%cms_article}}',['id'=>'973','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育心得体会（张鹏)','image'=>NULL,'description'=>'','author'=>'张鹏','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1514649600','updated_at'=>'1514649600']);
        $this->insert('{{%cms_article}}',['id'=>'974','column_id'=>'21','title'=>'“学习贯彻十九大精神，助力工程建设”<br />红色教育实践活动心得体会（张永明）','image'=>NULL,'description'=>'','author'=>'张永明','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1514649600','updated_at'=>'1514649600']);
        $this->insert('{{%cms_article}}',['id'=>'975','column_id'=>'21','title'=>'安全生产须要狼性管理','image'=>NULL,'description'=>'','author'=>'李书林','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1516204800','updated_at'=>'1516204800']);
        $this->insert('{{%cms_article}}',['id'=>'976','column_id'=>'21','title'=>'武汉分公司开展青年员工技能培训','image'=>NULL,'description'=>'','author'=>'梅 焕','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1517155200','updated_at'=>'1517155200']);
        $this->insert('{{%cms_article}}',['id'=>'977','column_id'=>'21','title'=>'学习践行十九大  立足岗位展风采','image'=>NULL,'description'=>'','author'=>'','content'=>'','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1517155200','updated_at'=>'1517155200']);
        $this->insert('{{%cms_article}}',['id'=>'978','column_id'=>'21','title'=>'古朴淳厚的晋商文化','image'=>NULL,'description'=>'——武汉园博园不容错过景点之晋中园印象','author'=>'沈丽娅','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;
<p class=\"MsoNormal\" style=\"text-indent:30pt;\">
	<span></span>
</p>
','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1444406400','updated_at'=>'1444406400']);
        $this->insert('{{%cms_article}}',['id'=>'979','column_id'=>'21','title'=>'詹重德作品选','image'=>NULL,'description'=>'','author'=>'詹重德','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;
<p class=\"MsoNormal\" style=\"text-align:center;\" align=\"center\">
	<b><span style=\"font-size:16pt;font-family:宋体;\"><span style=\"font-size:24px;\"></span>醒世共勉（三言）</span></b><b><span style=\"font-size:16pt;\"></span','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1443110400','updated_at'=>'1443110400']);
        $this->insert('{{%cms_article}}',['id'=>'980','column_id'=>'21','title'=>'詹重德作品《长乐思源（三言）》','image'=>NULL,'description'=>'','author'=>'詹重德','content'=>'&nbsp;
<p class=\"MsoNormal\" style=\"text-align:center;\" align=\"center\">
	<span style=\"font-size:15pt;font-family:宋体;\">&nbsp; ——<span style=\"font-size:15pt;font-family:宋体;\">赞服务管理中心</span></span>
</p>
<p class=\"MsoNormal\" style=\"text-align:center;\" align=\"ce','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1444320000','updated_at'=>'1444320000']);
        $this->insert('{{%cms_article}}',['id'=>'981','column_id'=>'21','title'=>'标杆学习  学以致用','image'=>NULL,'description'=>'公司派员参加集团公司地产开发管理培训班学习','author'=>'','content'=>'<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;为进一步提升汉江集团地产开发管理的理论水平和工作能力，集团公司于10月26日至30日在深圳举办了地产开发管理培训班。公司高度重视，积极组织员工参加了此次培训。
</p>
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 本次培训特邀在万科、中海、龙湖等国内标杆地产、物业企业有任职经历的知名专家就新常态下房地产营销之道、物业管理品牌建设与盈利模式、房地产整体经营与战略成本管理等内容进行了培训，组织参加培训','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1446393600','updated_at'=>'1446393600']);
        $this->insert('{{%cms_article}}',['id'=>'982','column_id'=>'21','title'=>'参加2015全国水利风景区建设与管理培训班的思考','image'=>NULL,'description'=>'','author'=>'陈自力','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"text-indent:21.0pt;\">
	<br />
</p>
<p>
	<span style=\"font-size:18px;\">&nbsp; &nbsp; &nbsp; &nbsp;近期，我参加了水利部组织的2015年全国水利风景区的建设与管理培训班的学习，通过学习，使我对水利风景区的建设与管理有了深入的认识。</s','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1447171200','updated_at'=>'1447171200']);
        $this->insert('{{%cms_article}}',['id'=>'983','column_id'=>'21','title'=>'园林绿化工程分公司开展导师带徒培训','image'=>NULL,'description'=>'','author'=>'曾文杰','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span style=\"font-size:18px;\"> 根据公司（中心）导师带徒活动要求及工作实际需要，2015年11月7日上午，园林绿化工程分公司开展广联达钢筋算量软件的培训活动。</span><br />
<span style=\"font-size:18px;\"></span><span style=\"font-size:18px;\"> 课程组织学员学习了广联达钢筋算量软件的','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1447171200','updated_at'=>'1447171200']);
        $this->insert('{{%cms_article}}',['id'=>'984','column_id'=>'21','title'=>'培训学习心得（朱德超）','image'=>NULL,'description'=>'','author'=>'朱德超','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"text-indent:30.0pt;\">
	<span style=\"font-size:18px;\">金秋十月，我有幸参加了集团公司举办的汉江集团地产开发管理培训班，在深圳、武汉进行了为期七天的培训学习和参观，通过对万科、中海、龙湖、绿城等国内标杆地产、物业企业的战略选择、发展思路、标杆物业服务历程以及产品定位与差异化营销、成本管控等方面的学习，使我对地产开发与物','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1447171200','updated_at'=>'1447171200']);
        $this->insert('{{%cms_article}}',['id'=>'985','column_id'=>'21','title'=>'物业从我做起（周少哲）','image'=>NULL,'description'=>'','author'=>'周少哲','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"text-indent:132.0pt;background:white;\">
	<br />
</p>
<p class=\"MsoNormal\" align=\"left\" style=\"text-indent:30pt;background-color:white;\">
	<span style=\"font-size:18px;\">物业管理是什么，对大家来说都知道，','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1447171200','updated_at'=>'1447171200']);
        $this->insert('{{%cms_article}}',['id'=>'986','column_id'=>'21','title'=>'“小”产业做出大文章（周江）','image'=>NULL,'description'=>'','author'=>'周江','content'=>'<p class=\"MsoNormal\" style=\"text-indent:30.0pt;\">
	<span style=\"font-size:18px;\">感谢公司给了我这次学习的机会。学习就是洗脑，一种观念的转变！</span><span></span>
</p>
<p class=\"MsoNormal\" style=\"text-indent:30.0pt;\">
	<span style=\"font-size:18px;\">物业是什么？我片面的认为是保安、保洁、房屋维修等。一般人提起物业，就是跟业','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1447171200','updated_at'=>'1447171200']);
        $this->insert('{{%cms_article}}',['id'=>'987','column_id'=>'21','title'=>'培训学习心得（袁世红）','image'=>NULL,'description'=>'','author'=>'袁世红','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\">
	<span style=\"font-size:18px;\">&nbsp; &nbsp; &nbsp; &nbsp;通过这段时间的培训学习，使我了解了万科营销与服务之道、物业管理盈利模式即案例研讨、地产整体经营与战略成本管理，让我感受最深的有五点：</span><span style=\"font-si','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1447171200','updated_at'=>'1447171200']);
        $this->insert('{{%cms_article}}',['id'=>'988','column_id'=>'21','title'=>'培训学习心得（余宏）','image'=>NULL,'description'=>'','author'=>'余宏','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" style=\"text-indent:22.5pt;\">
	<span style=\"font-size:18px;\"> 2015年</span><span style=\"font-size:18px;\">10</span><span style=\"font-size:18px;\">月底，我有幸参加了汉江集团在深圳中兴培训基地举行的“汉江集团','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1447171200','updated_at'=>'1447171200']);
        $this->insert('{{%cms_article}}',['id'=>'989','column_id'=>'21','title'=>'培训学习心得（杨玉林）','image'=>NULL,'description'=>'','author'=>'杨玉林','content'=>'<span id=\"Label_lr\">
<p class=\"MsoNormal\" style=\"text-indent:30.0pt;\">
	<span style=\"font-size:18px;\">为了转变管理人员思想观念，跟上时代步伐，提高管理人员的素质，提高管理人员的管理水平和能力，汉江集团公司在深圳举办了地产开发管理培训班，我有幸参加了这个培训班。感觉收获很多，学习了一些先进的管理和服务的理念、知识、方法，提高了思想认识。在培训中，公司学员严格遵守纪律、认真听讲、虚心请教、积极研讨，学员之间相','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1447171200','updated_at'=>'1447171200']);
        $this->insert('{{%cms_article}}',['id'=>'990','column_id'=>'21','title'=>'培训学习心得（杨宪斌）','image'=>NULL,'description'=>'','author'=>'杨宪斌','content'=>'<span id=\"Label_lr\">
<p class=\"MsoNormal\" style=\"text-indent:30.0pt;\">
	<span style=\"font-size:18px;\">集团公司于</span><span style=\"font-size:18px;\">10</span><span style=\"font-size:18px;\">月</span><span style=\"font-size:18px;\">26</span><span style=\"font-size:18','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1447171200','updated_at'=>'1447171200']);
        $this->insert('{{%cms_article}}',['id'=>'991','column_id'=>'21','title'=>'培训学习心得（汪玉红）','image'=>NULL,'description'=>'','author'=>'汪玉红','content'=>'<p class=\"MsoNormal\" style=\"text-indent:30.0pt;\">
	<span style=\"font-size:18px;\">根据集团公司《关于举办汉江集团地产开发管理培训班的通知》部人资﹝2015﹞187号文件精神，集团公司于</span><span style=\"font-size:18px;\">2015</span><span style=\"font-size:18px;\">年</span><span style=\"font-size:18px;\">10</spa','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1447171200','updated_at'=>'1447171200']);
        $this->insert('{{%cms_article}}',['id'=>'992','column_id'=>'21','title'=>'培训学习心得（唐宏文）','image'=>NULL,'description'=>'','author'=>'唐宏文','content'=>'<span id=\"Label_lr\">
<p class=\"MsoNormal\" align=\"left\" style=\"text-indent:30pt;background-color:#FFFEFD;\">
	<p class=\"MsoNormal\" align=\"left\" style=\"text-indent:30pt;background-color:#FFFEFD;\">
		<span style=\"font-size:18px;\">首先感谢公司给我这次宝贵的学习机会，让我有幸来到美丽的改革','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1447171200','updated_at'=>'1447171200']);
        $this->insert('{{%cms_article}}',['id'=>'993','column_id'=>'21','title'=>'树立客户忠诚度，打造企业服务品牌（孙丹农）','image'=>NULL,'description'=>'','author'=>'孙丹农','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\">
	<span style=\"font-size:18px;\">&nbsp; &nbsp; &nbsp; 此次在公司领导的精心组织安排下，参加了集团公司在深圳举办的“汉江集团地产开发管理培训班”。通过五天的学习，在战略、思路、服务三个方面感悟较为深刻，现就品牌发展历程与品牌发展模式、服务理念与服务实践、产品定位与差异化营销及成本管理这几个方面','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1447171200','updated_at'=>'1447171200']);
        $this->insert('{{%cms_article}}',['id'=>'994','column_id'=>'21','title'=>'培训学习心得（刘东）','image'=>NULL,'description'=>'','author'=>'刘东','content'=>'<p class=\"MsoNormal\" align=\"left\" style=\"text-indent:30pt;\">
	<span style=\"font-size:18px;\">10月</span><span lang=\"EN-US\" style=\"font-size:18px;\">26</span><span style=\"font-size:18px;\">日至</span><span lang=\"EN-US\" style=\"font-size:18px;\">30</span><span styl','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1447171200','updated_at'=>'1447171200']);
        $this->insert('{{%cms_article}}',['id'=>'995','column_id'=>'21','title'=>'培训学习心得（李刚）','image'=>NULL,'description'=>'','author'=>'李刚','content'=>'<p class=\"MsoNormal\" style=\"text-indent:30.0pt;\">
	<span style=\"font-size:18px;\">为不断提高物业管理水平，公司组织我们一行</span><span style=\"font-size:18px;\">20</span><span style=\"font-size:18px;\">人到深圳参加了集团公司开办的“地产开发管理培训班”的学习，学习主要是围绕了中国房地产行业的领跑者——万科的先进理念来进行的，通过一周紧张有序的参观和学习，让','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1447171200','updated_at'=>'1447171200']);
        $this->insert('{{%cms_article}}',['id'=>'996','column_id'=>'21','title'=>'培训学习心得（黄璞）','image'=>NULL,'description'=>'','author'=>'黄璞','content'=>'<p style=\"margin-left:0cm;text-indent:30.0pt;background:white;\">
	<span style=\"font-size:18px;\">汉江集团公司于</span><span style=\"font-size:18px;\">10</span><span style=\"font-size:18px;\">月</span><span style=\"font-size:18px;\">26</span><span style=\"font-size:18px;\"','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1447171200','updated_at'=>'1447171200']);
        $this->insert('{{%cms_article}}',['id'=>'997','column_id'=>'21','title'=>'培训学习心得（黄冠群）','image'=>NULL,'description'=>'','author'=>'黄冠群','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" align=\"left\" style=\"text-indent:24pt;\">
	<span style=\"font-size:18px;\"> </span> 
</p>
<p class=\"MsoNormal\" align=\"left\" style=\"text-indent:24pt;\">
	<spa','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1447171200','updated_at'=>'1447171200']);
        $this->insert('{{%cms_article}}',['id'=>'998','column_id'=>'21','title'=>'培训学习心得（胡雪松）','image'=>NULL,'description'=>'','author'=>'胡雪松','content'=>'<p class=\"MsoNormal\" style=\"text-indent:30.0pt;\">
	<span style=\"font-size:18px;\">本次培训班主要通过高剑、孙凡、王金升三位老师对现在房地产、物业的发展及相关管理的讲授、参观万科的科研基地和小区的学习，取得一定的收获。</span><span></span>
</p>
<p class=\"MsoNormal\" style=\"text-indent:30.0pt;\">
	<span style=\"font-size:18px;\">','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1447171200','updated_at'=>'1447171200']);
        $this->insert('{{%cms_article}}',['id'=>'999','column_id'=>'21','title'=>'物业服务就是营销（高原）','image'=>NULL,'description'=>'','author'=>'高原','content'=>'<p class=\"MsoNormal\" style=\"text-indent:30.0pt;\">
	<span style=\"font-size:18px;\">10月</span><span style=\"font-size:18px;\">25</span><span style=\"font-size:18px;\">至</span><span style=\"font-size:18px;\">31</span><span style=\"font-size:18px;\">日，我有幸参加了集团公司组织的地产开','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1447171200','updated_at'=>'1447171200']);
        $this->insert('{{%cms_article}}',['id'=>'1000','column_id'=>'21','title'=>'培训学习心得（高绶天）','image'=>NULL,'description'=>'','author'=>'高绶天','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p class=\"MsoNormal\" align=\"left\" style=\"text-indent:30pt;\">
	<span style=\"font-size:18px;\">经集团公司的精心策划与博远置业公司的关心爱护，我非常荣幸的参加了汉江集团地产开发管理培训班，于</span><span style=\"font-size:18px;\">2015</span><span style=\"font-size:18p','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1447171200','updated_at'=>'1447171200']);
        $this->insert('{{%cms_article}}',['id'=>'1001','column_id'=>'21','title'=>'培训学习心得（陈皓）','image'=>NULL,'description'=>'','author'=>'陈皓','content'=>'<span style=\"font-family:宋体;\"> </span>
<p style=\"margin:0cm 0cm 0pt;text-indent:30pt;mso-char-indent-count:2.0;\">
	<span style=\"font-family:仿宋_GB2312;font-size:15pt;\">随着集团公司房地产开发市场化日趋成熟，物业管理与服务专业化需求日益迫切，在这一形势之下，人力资源部择机开展地产开发管理培训班，组织集团公司与地产开发、物业管理业务相关部门人员<','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1447171200','updated_at'=>'1447171200']);
        $this->insert('{{%cms_article}}',['id'=>'1002','column_id'=>'21','title'=>'龙山宾馆开展服务礼仪基础培训工作','image'=>NULL,'description'=>'','author'=>'贾韵','content'=>'<p>
	<span style=\"font-size:18px;\">&nbsp;&nbsp;&nbsp;&nbsp; 为提升服务质量，增强员工服务意识，为宾客提供更温馨周到的服务，近日，龙山宾馆抓住日常工作间隙，在工作人员中开展仪容仪表、规范举止等基础服务礼仪强化培训。</span><br />
<span style=\"font-size:18px;\">&nbsp;&nbsp;&nbsp;&nbsp; 此次培训首先进行了服务礼仪的基础理论学习，使员工对服务礼仪有全面的了解，并结合当前实际工作要求，对员','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1447344000','updated_at'=>'1447344000']);
        $this->insert('{{%cms_article}}',['id'=>'1003','column_id'=>'21','title'=>'龙山宾馆技能竞赛参赛选手刻苦训练','image'=>NULL,'description'=>'','author'=>'贾韵','content'=>'<p>
	&nbsp; &nbsp; &nbsp; &nbsp;<span style=\"font-size:18px;\">2015年湖北省生活服务业技能竞赛即将开赛，宾馆高度重视，全力备赛，组织参赛人员每日加强训练。</span>
</p>
<p>
	<span style=\"font-size:18px;\">&nbsp; &nbsp; &nbsp; &nbsp;参赛选手</span><span style=\"font-size:18px;\">争分夺秒复习相关专业理论知识，利用上班空余时间和下班时间着重','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1447603200','updated_at'=>'1447603200']);
        $this->insert('{{%cms_article}}',['id'=>'1004','column_id'=>'21','title'=>'物业服务企业的定位思考','image'=>NULL,'description'=>'','author'=>'黄璞','content'=>'<p style=\"text-indent:30pt;background:white;\" class=\"reader-word-layerreader-word-s1-4\">
	<span style=\"line-height:150%;font-family:仿宋_GB2312;font-size:15pt;\">在当代市场经济时代，人们对生活品质和居住条件的追求日益提高，</span><span style=\"line-height:150%;font-family:仿宋_GB2312;backgro','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1448899200','updated_at'=>'1448899200']);
        $this->insert('{{%cms_article}}',['id'=>'1005','column_id'=>'21','title'=>'物业服务企业的品牌建设研讨','image'=>NULL,'description'=>'','author'=>'黄冠群','content'=>'<p style=\"text-align:left;text-indent:39pt;\" class=\"MsoNormal\" align=\"left\">
	<span style=\"line-height:150%;font-family:仿宋_GB2312;font-size:15pt;\">品牌是企业的无形资产，也是企业赢得市场的利刃。品牌效应已成为物业服务企业的奋斗目标和发展方向。物业服务品牌具有强大的市场效应，能使企业不断成长壮大，能为企业带来经济利益和社会影响力，能够在当今市场不确定因素不断增加的','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1448899200','updated_at'=>'1448899200']);
        $this->insert('{{%cms_article}}',['id'=>'1006','column_id'=>'21','title'=>'关于物业企业多元化发展格局的探讨','image'=>NULL,'description'=>'','author'=>'孙丹农','content'=>'<p class=\"MsoNormal\">
	<span style=\"font-family:仿宋_GB2312;color:black;font-size:15pt;\">&nbsp;&nbsp; 近年来，物业的工作内容</span><span style=\"font-family:仿宋_GB2312;color:black;font-size:15pt;\">大多数只是管理与服务，而对物业经营的问题考虑较少。随着行业的发展，精细服务和多元化经营必定是物业发展的趋势。</span><span style=','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1448899200','updated_at'=>'1448899200']);
        $this->insert('{{%cms_article}}',['id'=>'1007','column_id'=>'21','title'=>'物业服务企业创新和商业模式探讨','image'=>NULL,'description'=>'','author'=>'高绶天','content'=>'<p style=\"text-indent:28.5pt;\">
	<span style=\"font-family:仿宋_GB2312;font-size:15pt;\">当前，物业服务企业创新和物业商业模式转型这一发展课题已成为国内物业管理行业持续关注的一个热点和焦点，物业管理服务形式不断创新，商业模式也在不断地发生着改变，逐渐从单一走向多元，从传统走向现代，从满足业主的基本需要走向满足业主的深层需要。那么，博远物业如何创新和实现商业模式转型呢？面对这一课题，我们必须不断地拷问自己：谁是我们的客户？我们能','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1448899200','updated_at'=>'1448899200']);
        $this->insert('{{%cms_article}}',['id'=>'1008','column_id'=>'21','title'=>'物业企业如何介入社区养老服务','image'=>NULL,'description'=>'','author'=>'周江','content'=>'<p style=\"text-indent:33pt;background:white;\">
	<span style=\"font-family:仿宋_GB2312;font-size:15pt;\">“目前中国是世界上唯一一个老年人口过亿的国家，且正在以每年<span>3</span>％以上的速度快速增长，是同期人口增速的<span>5</span>倍多。”为了应对老龄化社会的挑战，我国各个城市都积极推进与探索社区养老服务，以至于社区养老服务事业发展态势迅猛。物业企业也开始介入社区养老服务，但由于开展时间','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1448899200','updated_at'=>'1448899200']);
        $this->insert('{{%cms_article}}',['id'=>'1009','column_id'=>'21','title'=>'物业服务企业与客户关系的探讨','image'=>NULL,'description'=>'','author'=>'高 原','content'=>'<p style=\"text-indent:30pt;\" class=\"MsoNormal\">
	<span style=\"font-family:仿宋_GB2312;font-size:15pt;\">2015</span><span style=\"font-family:仿宋_GB2312;font-size:15pt;\">年<span>10</span>月，汉江集团地产开发管理培训班在深圳开班，五天的学习紧张而又丰富。三位业界精英深入浅出的授课，让我们开阔了眼界，改变了观念。物业服务企业如何处理与客户','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1448899200','updated_at'=>'1448899200']);
        $this->insert('{{%cms_article}}',['id'=>'1010','column_id'=>'21','title'=>'中心车队举办导师带徒授课学习','image'=>NULL,'description'=>'','author'=>'聂国霞','content'=>'<p class=\"MsoNormal\">
	<span style=\"font-size:14pt;\"><span><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>12</span></span><span style=\"font-family:宋体;font-size:14pt;\">月</span><span style=\"font-size:14pt;\"><span>31</span></span><span style=\"font-family:宋体;fon','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1451491200','updated_at'=>'1451491200']);
        $this->insert('{{%cms_article}}',['id'=>'1011','column_id'=>'21','title'=>'龙山宾馆参加省生活服务业职业技能竞赛创佳绩','image'=>NULL,'description'=>'','author'=>'黄阁','content'=>'<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:18px;\">2015年12月27日-28日，湖北省生活服务业职业技能竞赛在武汉市九洲通衢大酒店举办,本次竞赛由省商务厅、省人力资源和社会保障厅、省总工会联合主办。 </span>
</p>
<p>
	<span style=\"font-size:18px;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style=\"font-siz','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1451491200','updated_at'=>'1451491200']);
        $this->insert('{{%cms_article}}',['id'=>'1012','column_id'=>'21','title'=>'武汉参赛见闻与收获','image'=>NULL,'description'=>'','author'=>'刘爽','content'=>'<p style=\"text-indent:21pt;\" class=\"MsoNormal\">
	<span style=\"font-family:SimSun;font-size:18px;\"><span style=\"font-family:SimSun;font-size:18px;\">2015</span></span><span style=\"font-family:SimSun;font-size:18px;\">年</span><span style=\"font-family:SimSun;f','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1451923200','updated_at'=>'1451923200']);
        $this->insert('{{%cms_article}}',['id'=>'1013','column_id'=>'21','title'=>'武汉参赛感想','image'=>NULL,'description'=>'','author'=>'陆海荣','content'=>'<p style=\"text-indent:28pt;\" class=\"MsoNormal\">
	<span><span style=\"font-family:SimSun;font-size:18px;\">2015</span><span style=\"font-family:\"微软雅黑\", \"sans-serif\";font-size:14pt;\"><span style=\"font-family:SimSun;font-size:18px;\">年</span><span style=\"font-fa','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1451923200','updated_at'=>'1451923200']);
        $this->insert('{{%cms_article}}',['id'=>'1014','column_id'=>'21','title'=>'赴武汉参加技能竞赛感想','image'=>NULL,'description'=>'','author'=>'余涛','content'=>'<p style=\"text-indent:28pt;\" class=\"MsoNormal\">
	<span style=\"font-family:SimSun;font-size:18px;\">2015</span><span style=\"font-family:仿宋_GB2312;font-size:14pt;\"><span style=\"font-family:SimSun;font-size:18px;\">年</span><span style=\"font-family:SimSun;font-','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1451923200','updated_at'=>'1451923200']);
        $this->insert('{{%cms_article}}',['id'=>'1015','column_id'=>'21','title'=>'武汉技能比赛参后感','image'=>NULL,'description'=>'','author'=>'刘莉','content'=>'<span id=\"Label_lr\"> 
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-family:SimSun;font-size:18px;\">2015年12月26日，我随宾馆领导及另外四名同事一行十人去武汉参加了第十九届湖北省生活服务业职业技能竞赛。经过了笔试、实操（面试）两个环节的比赛，我们取得了两个特金奖、两个金奖的好成绩。 </span>
</p>
<p>
	<span style=\"font-family:SimS','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1451923200','updated_at'=>'1451923200']);
        $this->insert('{{%cms_article}}',['id'=>'1016','column_id'=>'21','title'=>'大坝景区管理处到车队学习先进经验','image'=>NULL,'description'=>'','author'=>'王敏','content'=>'<span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-size:18px;font-family:SimSun;line-height:150%;\">1</span><span style=\"font-size:18px;font-family:SimSun;line-height:150%;\">月</span><span style=\"font-size:18px;font-family:SimSu','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1451923200','updated_at'=>'1451923200']);
        $this->insert('{{%cms_article}}',['id'=>'1017','column_id'=>'21','title'=>'论综合性企业如何建立长效培训机制','image'=>NULL,'description'=>'','author'=>'办公室','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:12pt;font-family:宋体;\"><strong>本篇论文获集团公司</strong><strong>2013-2014年度职工教育培训优秀论文一等奖，请大家学习借鉴。</strong></span> 
<p class=\"MsoNormal\" style=\"text-align:left;text','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1452441600','updated_at'=>'1452441600']);
        $this->insert('{{%cms_article}}',['id'=>'1018','column_id'=>'21','title'=>'汉江集团公司2016年职工教育培训工作成果研讨论文主题及要求','image'=>NULL,'description'=>'','author'=>'','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> 
<div style=\"text-align:center;\">
	<img class=\"pic_cont_img\" style=\"height:706px;width:481px;\" alt=\"\" src=\"/upload/image/20160111/20160111101809_9326.png\" width=\"349\" height=\"487\" /> 
</div>
<di','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1452441600','updated_at'=>'1452441600']);
        $this->insert('{{%cms_article}}',['id'=>'1019','column_id'=>'21','title'=>'液化气分公司创办“员工学习园地”','image'=>NULL,'description'=>'','author'=>'高绶天','content'=>'<p style=\"text-indent:28pt;\" class=\"MsoNormal\">
	<span style=\"font-family:SimSun;font-size:18px;\"><span style=\"font-family:SimSun;font-size:18px;\">1</span></span><span style=\"font-family:SimSun;font-size:18px;\">月</span><span style=\"font-family:SimSun;font','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1453132800','updated_at'=>'1453132800']);
        $this->insert('{{%cms_article}}',['id'=>'1020','column_id'=>'21','title'=>'龙山宾馆开展散客点菜技巧专项培训','image'=>NULL,'description'=>'','author'=>'贾韵','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-size:18px;\">&nbsp; 针对客源结构由政务、商务接待逐步向散客转变的新局面，龙山宾馆于1月19日下午开展散客点菜技巧专项培训，旨在通过培训切实提高餐饮服务人员的排菜、点菜技巧和服务水平，用更优质的服务争取更多的大众消费。</span>
</p>
<p>
	<span style=\"font-s','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1453219200','updated_at'=>'1453219200']);
        $this->insert('{{%cms_article}}',['id'=>'1021','column_id'=>'21','title'=>'“供给侧改革背景下全域旅游”专题讲座学习心得','image'=>NULL,'description'=>'','author'=>'高然','content'=>'<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-family:SimSun;font-size:18px;\">首先，感谢公司给予我去十堰市学习“供给侧改革背景下全域旅游”专题讲座的机会，这次学习使我受益匪浅，并有很多感触，现汇报如下： </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp;&nbsp;</span><span sty','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1453392000','updated_at'=>'1453392000']);
        $this->insert('{{%cms_article}}',['id'=>'1022','column_id'=>'21','title'=>'纪实片《不变的步伐》观后感','image'=>NULL,'description'=>'','author'=>'王敏','content'=>'<span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:18px;color:#2b2b2b;\">2016</span><span style=\"color:#2b2b2b;\"><span style=\"font-size:18px;\">年</span><span style=\"font-size:18px;\">1</span><span style=\"font-size:18px;\">月</span>','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1453824000','updated_at'=>'1453824000']);
        $this->insert('{{%cms_article}}',['id'=>'1023','column_id'=>'21','title'=>'学习提升新气象 班组展示显风采','image'=>NULL,'description'=>'','author'=>'李文涛','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	<span style=\"font-size:14pt;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2</span><span style=\"font-size:14pt;font-family:宋体;\">月</span><span style=\"font-size:14pt;\">4</span><span style=\"font-size:14pt;font-family:宋体','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1454601600','updated_at'=>'1454601600']);
        $this->insert('{{%cms_article}}',['id'=>'1024','column_id'=>'21','title'=>'武汉分公司开展“卫生消杀”培训','image'=>NULL,'description'=>'','author'=>'刘亚奇','content'=>'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14pt;font-family:宋体;line-height:150%;\">随着近日气温升高，蚊、蝇四害将逐渐增多，为保持物业管理区域清洁，确保为业主营造洁净、舒适的环境，</span><span style=\"font-size:14pt;line-height:150%;\">3</span><span style=\"font-size:14pt;','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1457366400','updated_at'=>'1457366400']);
        $this->insert('{{%cms_article}}',['id'=>'1025','column_id'=>'21','title'=>'共读文化故事 发扬优良传统','image'=>NULL,'description'=>'','author'=>'高然','content'=>'<span id=\"Label_lr\"> 
<p>
	<span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<span style=\"font-size:18px;font-family:SimSun;line-height:250%;\">3</span><span style=\"font-size:14pt;font-family:宋体;line-height:250%;\"><sp','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1457452800','updated_at'=>'1457452800']);
        $this->insert('{{%cms_article}}',['id'=>'1026','column_id'=>'21','title'=>'大坝景区讲解班开展春季岗位技能培训','image'=>NULL,'description'=>'','author'=>'陈正麟','content'=>'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:18px;font-family:SimSun;line-height:150%;\">3</span><span style=\"font-size:14pt;font-family:宋体;line-height:150%;\"><span style=\"font-size:18px;font-family:SimSun;\">月</span><span style=\"font-s','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1457539200','updated_at'=>'1457539200']);
        $this->insert('{{%cms_article}}',['id'=>'1027','column_id'=>'21','title'=>'“首席技师大讲堂”开课','image'=>NULL,'description'=>'','author'=>'甘润','content'=>'<span id=\"Label_lr\"> 
<p>
	<span style=\"font-size:18px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp;&nbsp;3月9日下午2:00，公司（中心）“首席技师大讲堂”在大坝景区会议室开课。 </span>
</p>
<p>
	<span style=\"font-size:18px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp; 此次讲堂由财务劳资部举办，首席技师杨建丹主讲，课程内容为驾驶技','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1457539200','updated_at'=>'1457539200']);
        $this->insert('{{%cms_article}}',['id'=>'1028','column_id'=>'21','title'=>'白鹤滩水电站水土保持监测项目部举行野外生存急救<br />及安全知识培训','image'=>NULL,'description'=>'','author'=>'曾文杰','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> <span style=\"font-size:18px;font-family:SimSun;color:black;line-height:150%;\">3</span><span style=\"font-size:18px;font-family:SimSun;color:black;line-height:150%;\">月</span><span style=\"font-size','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1457884800','updated_at'=>'1457884800']);
        $this->insert('{{%cms_article}}',['id'=>'1029','column_id'=>'21','title'=>'大坝景区开启春季岗位技能培训','image'=>NULL,'description'=>'','author'=>'郭军辉、王敏','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"> 
<p>
	<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><span><span><span><span style=\"font-size:14pt;font-family:宋体;\">围绕岗','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1457971200','updated_at'=>'1457971200']);
        $this->insert('{{%cms_article}}',['id'=>'1030','column_id'=>'21','title'=>'龙山宾馆开展总台员工岗位晋升技能考核','image'=>NULL,'description'=>'','author'=>'贾韵','content'=>'<span id=\"Label_lr\"> 
<p>
	<span style=\"font-size:18px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp; 近日，龙山宾馆进行了总台员工岗位晋升技能考核。 </span>
</p>
<p>
	<span style=\"font-size:18px;font-family:SimSun;\">&nbsp;&nbsp;&nbsp; 此次考核，宾馆总台有4名员工申请从初级工晋升为中级工。宾馆针对总台的岗位特点，把总台员工分为实习期、','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1458057600','updated_at'=>'1458057600']);
        $this->insert('{{%cms_article}}',['id'=>'1031','column_id'=>'21','title'=>'基层工会财务知识','image'=>NULL,'description'=>'','author'=>'','content'=>'<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbs','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1458316800','updated_at'=>'1458316800']);
        $this->insert('{{%cms_article}}',['id'=>'1032','column_id'=>'21','title'=>'物业管理分公司开展物业管理知识培训','image'=>NULL,'description'=>'','author'=>'宛英','content'=>'<span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14pt;font-family:宋体;\">为进一步强化服务意识，提高服务质量，物业管理分公司组织全体员工于</span><span style=\"font-size:14pt;\">3</span><span style=\"font-size:14pt;font-family:宋体;\">月</span><span style=\"font-size:','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1458489600','updated_at'=>'1458489600']);
        $this->insert('{{%cms_article}}',['id'=>'1033','column_id'=>'21','title'=>'襄阳分公司开展保洁岗位培训','image'=>NULL,'description'=>'','author'=>'汤爱珍','content'=>'<p>
	<span style=\"font-size:16pt;font-family:宋体;background:white;color:black;\">&nbsp;&nbsp;&nbsp; <span style=\"font-size:18px;font-family:SimSun;\">3</span></span><span style=\"font-size:16pt;font-family:宋体;background:white;color:black;\"><span style=\"font-s','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1458662400','updated_at'=>'1458662400']);
        $this->insert('{{%cms_article}}',['id'=>'1034','column_id'=>'21','title'=>'武汉分公司组织员工进行企业文化和礼仪培训','image'=>NULL,'description'=>'','author'=>'王雪培','content'=>'<span id=\"Label_lr\"><span class=\"apple-converted-space\"><SPAN style=\"FONT-SIZE: 13.5pt; FONT-FAMILY: \" 微软雅黑?,sans-serif;background:#fcfcfc;color:#333333;?><span style=\"font-size:small;font-family:Tahoma;color:#000000;background-color:#ffffff;\"><span style','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1458748800','updated_at'=>'1458748800']);
        $this->insert('{{%cms_article}}',['id'=>'1035','column_id'=>'21','title'=>'小车队开展车辆四季保养知识培训','image'=>NULL,'description'=>'','author'=>'李晓沛','content'=>'<span id=\"Label_lr\"> 
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; <span style=\"font-family:SimSun;font-size:18px;\">小车队按照2016年岗位技能培训计划，于3月24日、30日在丹江、武汉分别开展了车辆四季保养知识培训。 </span> 
	<p>
		<span style=\"font-family:SimSun;font-size:1','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1458835200','updated_at'=>'1458835200']);
        $this->insert('{{%cms_article}}',['id'=>'1036','column_id'=>'21','title'=>'中心车队进行随车吊实际操作培训','image'=>NULL,'description'=>'','author'=>'聂国霞','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 随车吊是博远公司绿化工程、树木吊运、花箱吊运的主要工具用车，中心车队为能更好的服务于博远公司的生产，使车队的每一位驾驶员都能够正确、熟练的掌握随车吊操作，于 3月29日下午举办了随车吊实际操作培训。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nb','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1459180800','updated_at'=>'1459180800']);
        $this->insert('{{%cms_article}}',['id'=>'1037','column_id'=>'21','title'=>'首席技师工作室召开工作例会','image'=>NULL,'description'=>'','author'=>'聂国霞','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 2016年3月30日下午，首席技师工作室召开工作例会，小车队、中心车队负责人和驾驶员参加了会议。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 会上，首席技师杨建丹同志带领大家学习了《首席技师工作室管理办法》、《首席技师工作室职责及任务》','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1459267200','updated_at'=>'1459267200']);
        $this->insert('{{%cms_article}}',['id'=>'1038','column_id'=>'21','title'=>'财务劳资部组织“营改增”税务政策培训','image'=>NULL,'description'=>'','author'=>'邓玉玲','content'=>'<span id=\"Label_lr\"> 
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 2016年5月1日起将全面推开营业税改征增值税试点，财务劳资部分别于3月26日、28日、30日通过大成方略网络视频课堂组织部门财务人员及相关单位核算人员进行“营改增”税务政策培训。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&n','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1459353600','updated_at'=>'1459353600']);
        $this->insert('{{%cms_article}}',['id'=>'1039','column_id'=>'21','title'=>'园林绿化工程公司开展水土保持技术规范培训考试','image'=>NULL,'description'=>'','author'=>'湛汉溪','content'=>'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:12pt;font-family:&quot;Times New Roman&quot;,serif;line-height:150%;\">3</span><span style=\"font-size:12pt;font-family:宋体;line-height:150%;\">月</span><span style=\"font-size:12pt;font-family:&quot;T','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1459785600','updated_at'=>'1459785600']);
        $this->insert('{{%cms_article}}',['id'=>'1040','column_id'=>'21','title'=>'又是一年清明时','image'=>NULL,'description'=>'一名龙山宾馆新员工清明节所感','author'=>'唐雪仪','content'=>'<span id=\"Label_lr\"> 
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 燕子传言莺送信，过了春风就是情牵意惹的清明了。花木芳香，草长莺飞，怎奈一句清明时节雨纷纷，路上行人欲断魂，使得“清明”二字在文字深处更增添了几分烟雨迷蒙的感觉。作为宾馆的新员工，第一次参与清明小长假工作，不禁产生很多感慨。 </span>
</p>
<p>
	<span style=\"font-family:SimSu','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1459958400','updated_at'=>'1459958400']);
        $this->insert('{{%cms_article}}',['id'=>'1041','column_id'=>'21','title'=>'公司组织参加遥感监测野外解译技术培训','image'=>NULL,'description'=>'','author'=>'','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp;&nbsp;4月6日，长江委水土保持监测中心站在龙山宾馆开展全国水土流失动态监测与公告项目野外解译技术集中办公研讨。得知这个</span><span style=\"font-family:SimSun;font-size:18px;\">信息后，公司主动联系了中心站，组织园林绿化工程分公司、松涛山庄管理处及相关人员20人参加了研讨培训。 </span>
</p>
<','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1459958400','updated_at'=>'1459958400']);
        $this->insert('{{%cms_article}}',['id'=>'1042','column_id'=>'21','title'=>'兄弟单位手拉手  业务技术传帮带','image'=>NULL,'description'=>'——小车队技师走进大坝景区运输部开展业务交流','author'=>'王敏','content'=>'<span id=\"Label_lr\"><span id=\"Label_lr\"><span id=\"Label_lr\"> <span style=\"font-size:18px;font-family:SimSun;line-height:150%;\">4</span><span style=\"font-size:18px;font-family:SimSun;line-height:150%;\">月</span><span style=\"font-size:18px;font-family:SimSun','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1460044800','updated_at'=>'1460044800']);
        $this->insert('{{%cms_article}}',['id'=>'1043','column_id'=>'21','title'=>'授之以鱼不如授之以渔','image'=>NULL,'description'=>'------小车队走进大坝景区运输部系列报道二','author'=>'高然','content'=>'<span id=\"Label_lr\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:14pt;\">4</span><span style=\"font-size:14pt;font-family:宋体;\">月</span><span style=\"font-size:14pt;\">11</span><span style=\"font-size:14pt;font-family:宋体;\">日</span><span style=\"fo','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1460390400','updated_at'=>'1460390400']);
        $this->insert('{{%cms_article}}',['id'=>'1044','column_id'=>'21','title'=>'中心车队开展技师讲课活动','image'=>NULL,'description'=>'','author'=>'聂国霞','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp;&nbsp;4月12日下午，中心车队按照年初培训计划，开展技师讲课活动。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp;&nbsp;此次培训由刘凯技师主讲，主要从四个方面进行了讲解：高速公路驾驶注意事项及行车技巧，汽车涡轮增压工作原理，汽车轮','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1460476800','updated_at'=>'1460476800']);
        $this->insert('{{%cms_article}}',['id'=>'1045','column_id'=>'21','title'=>'公司开展服务礼仪培训','image'=>NULL,'description'=>'','author'=>'','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp;&nbsp;4月13日晚7点，公司（中心）在龙山宾馆二楼报告厅开展了服务礼仪培训，来自各单位（部门）的119名员工参加了此次培训。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 此次培训由龙山宾馆贾韵主讲。龙山宾馆高度重视这次培训，在正式开','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1460563200','updated_at'=>'1460563200']);
        $this->insert('{{%cms_article}}',['id'=>'1046','column_id'=>'21','title'=>'松涛山庄与龙山宾馆开展技术交流活动','image'=>NULL,'description'=>'','author'=>'杨春','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 4月17日上午，龙山宾馆工程部工作人员一行5人在部长周江的带领下来到松涛山庄进行业务技术交流活动. </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 龙山宾馆工程部工作人员与松涛山庄维修人员一同对山庄2号、3号楼主要设备设施的运行状况进行例行','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1460908800','updated_at'=>'1460908800']);
        $this->insert('{{%cms_article}}',['id'=>'1047','column_id'=>'21','title'=>'首席技师工作室开展学习活动','image'=>NULL,'description'=>'','author'=>'常嫘','content'=>'<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 4月26日下午，车队首席技师工作室在小车队二楼组织开展了学习活动，小车队和中心车队在丹的16名员工参加了学习。 </span>
</p>
<p>
	<span style=\"font-family:SimSun;font-size:18px;\">&nbsp;&nbsp;&nbsp; 本次学习由首席技师杨建丹主持，学习内容为《关于办理醉酒驾驶机动车刑事案件适用法律','link'=>NULL,'sort'=>'0','view'=>'0','position'=>'0','seo_key'=>NULL,'seo_content'=>NULL,'status'=>'1','created_at'=>'1461600000','updated_at'=>'1461600000']);
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%cms_article}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

