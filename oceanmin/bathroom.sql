

DROP TABLE IF EXISTS `ocean_admin`;

CREATE TABLE `ocean_admin` (
  `adminid` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `adminuser` varchar(32) NOT NULL DEFAULT '' COMMENT '管理员',
  `adminpass` char(32) NOT NULL DEFAULT '' COMMENT '管理员密码',
  `adminemail` char(50) NOT NULL DEFAULT '' COMMENT '管理员邮箱',
  `salt` varchar(100) DEFAULT '',
  `logintime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '登录时间',
  `loginip` bigint(20) NOT NULL DEFAULT '0' COMMENT '登录ip',
  `createtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  PRIMARY KEY (`adminid`),
  UNIQUE KEY `shop_admin_adminuser_adminpass` (`adminuser`,`adminpass`),
  UNIQUE KEY `shop_admin_adminuser_adminemail` (`adminuser`,`adminemail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `ocean_admin` WRITE;


INSERT INTO `ocean_admin` (`adminid`, `adminuser`, `adminpass`, `adminemail`, `salt`, `logintime`, `loginip`, `createtime`)
VALUES
	(1,'admin','470633300a2f777f65675a11afe38215','1033110136@qq.com','bdluwBNPSZ',1476086643,2062148912,1475051808),
	(2,'AmyZhang','6da778525aaaacb17de0fc9079b2bfba','2885697908@qq.com','340ansvAOQ',1476150565,2073467363,1475051958);


UNLOCK TABLES;



DROP TABLE IF EXISTS `ocean_article`;

CREATE TABLE `ocean_article` (
  `articleid` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `title` varchar(200) NOT NULL DEFAULT '' COMMENT '标题',
  `brief` text COMMENT '简介',
  `descr` text COMMENT '内容',
  `cover` varchar(200) NOT NULL DEFAULT '' COMMENT '图片',
  `isshow` enum('0','1') NOT NULL DEFAULT '0',
  `adminuser` varchar(50) DEFAULT NULL COMMENT '发表人',
  `createtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  PRIMARY KEY (`articleid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `ocean_carousel`;

CREATE TABLE `ocean_carousel` (
  `imageid` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `cover` varchar(200) NOT NULL DEFAULT '' COMMENT '图片',
  `orderid` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '图片排序',
  `createtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  PRIMARY KEY (`imageid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `ocean_category`;

CREATE TABLE `ocean_category` (
  `cateid` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `title` varchar(200) NOT NULL DEFAULT '' COMMENT '名称',
  `parentid` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '外键',
  `createtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  PRIMARY KEY (`cateid`),
  KEY `shop_category_parentid` (`parentid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `ocean_company`;

CREATE TABLE `ocean_company` (
  `companyid` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `companyname` varchar(200) DEFAULT '1' COMMENT '名称',
  `companyaddress` varchar(200) DEFAULT '1' COMMENT '地址',
  `companytel` varchar(200) DEFAULT '1' COMMENT '电话',
  `companyfax` varchar(200) DEFAULT '1' COMMENT '传真',
  `companymobile` varchar(200) DEFAULT '1' COMMENT '手机',
  `companyemail` varchar(200) DEFAULT '1' COMMENT '邮箱',
  `website` varchar(200) DEFAULT '1',
  `manufactureaddress` varchar(200) DEFAULT '1',
  `cover` varchar(255) NOT NULL DEFAULT '' COMMENT '图片',
  `createtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  PRIMARY KEY (`companyid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `ocean_message`;

CREATE TABLE `ocean_message` (
  `messageid` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `name` varchar(32) NOT NULL DEFAULT '' COMMENT '管理员',
  `phone` char(32) NOT NULL DEFAULT '' COMMENT '电话',
  `email` char(50) NOT NULL DEFAULT '' COMMENT '邮箱',
  `detail` text COMMENT '留言详细内容',
  `createtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  PRIMARY KEY (`messageid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `ocean_product`;

CREATE TABLE `ocean_product` (
  `productid` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `cateid` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '外键',
  `title` varchar(200) NOT NULL DEFAULT '' COMMENT '名称',
  `sku` int(11) NOT NULL DEFAULT '0' COMMENT 'sku号',
  `features` text COMMENT '商品特征',
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci COMMENT '商品描述',
  `descr` text COMMENT '商品的详情',
  `cover` varchar(200) NOT NULL DEFAULT '' COMMENT '图片',
  `pics` text,
  `is_tui` enum('0','1') DEFAULT '0' COMMENT '是否推荐 0不推荐 1推荐',
  `createtime` int(10) NOT NULL DEFAULT '0' COMMENT '创建时间',
  PRIMARY KEY (`productid`),
  KEY `shop_product_cateid` (`cateid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `ocean_social_account`;

CREATE TABLE `ocean_social_account` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `facebook` varchar(200) DEFAULT 'https://www.facebook.com/',
  `twitter` varchar(200) DEFAULT 'https://twitter.com/',
  `youtube` varchar(200) DEFAULT 'https://youtube.com/',
  `linkedin` varchar(200) DEFAULT 'https://linkedin.com/',
  `instagram` varchar(200) DEFAULT 'https://instagram.com/',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `ocean_social_account` WRITE;

INSERT INTO `ocean_social_account` (`id`, `facebook`, `twitter`, `youtube`, `linkedin`, `instagram`)
VALUES
	(1,'https://www.facebook.com/','https://twitter.com/','https://youtube.com/','https://linkedin.com/','https://instagram.com/');

UNLOCK TABLES;

