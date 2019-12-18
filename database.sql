
CREATE TABLE IF NOT EXISTS `Account` (
  `acc_id` 			int(30) 		NOT NULL AUTO_INCREMENT,
  `username` 		varchar(40) 	NOT NULL,
  `password` 		varchar(20) 	NOT NULL,
  `acc_type` 		tinyint(1) 		NOT NULL DEFAULT '1',
  PRIMARY KEY (acc_id)
)AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `Customer_info` (
	`acc_id`		int(30)		NOT NULL AUTO_INCREMENT,
	`cus_1st_name`	varchar(20)	NOT NULL,
	`cus_2nd_name`	varchar(20)	NOT NULL,
	`address`		varchar(50)	NOT NULL,	
	`telephone`	int(20)		NOT NULL,
	`email`		varchar(30)	NOT NULL,
	PRIMARY KEY (`acc_id`),
	CONSTRAINT `customer_info_fk` FOREIGN KEY (`acc_id`) REFERENCES `account` (`acc_id`)
	ON DELETE CASCADE
)AUTO_INCREMENT=1;


CREATE TABLE IF NOT EXISTS `Product` (
  `prod_id` 	int(20) 		NOT NULL,		#ID
  `prod_name` 	varchar(100) 	NOT NULL,		#��Ʒ��
  `price` 		float 		NOT NULL,		#�۸�
  `pic` 		varchar(100) 	NOT NULL,		#ͼƬ
  `description` text 			NOT NULL,		#����
  `state` 		tinyint(1) 		NOT NULL DEFAULT '1',	#״̬
  `inventory` 	int(20) 		NOT NULL DEFAULT '0',	#���
  PRIMARY KEY (`prod_id`)
);

CREATE TABLE IF NOT EXISTS `Prod_order` (
	`order_id`	int(20)		NOT NULL,
	`prod_id` 	int(20)		NOT NULL,
	`quantity`	int(5)		NOT NULL,		#����
	PRIMARY KEY (`prod_id`, `order_id`),
	CONSTRAINT `prod_fk` FOREIGN KEY (`prod_id`) REFERENCES `product` (`prod_id`),
	CONSTRAINT `order_fk` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`)
)


CREATE TABLE IF NOT EXISTS `order` (
	`order_id`		int(20)		NOT NULL AUTO_INCREMENT,	#�������
	`order_time`	date		NOT NULL,	#�µ�ʱ��
	`acc_id`		int(30) 		NOT NULL,	#�ʻ�ID
	`total_price`	int(15)		NOT NULL,	#�ܼ�
	`delivery`		varchar(20)	NOT NULL,	#���䷽ʽ
	`payment`		varchar(20)	NOT NULL,	#֧����ʽ
	PRIMARY KEY (`order_id`),
	CONSTRAINT `order_acc_fk` FOREIGN KEY (`acc_id`) REFERENCES `account` (`acc_id`)
);


DROP TABLE Account;
DROP TABLE Customer_info;
DROP TABLE product;
DROP TABLE `order`;
DROP TABLE `Prod_order`;
