CREATE TABLE `users` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `card_type` varchar(255)  NOT NULL,
  `card_number` varchar(255)  NOT NULL,
  `expire_date` varchar(255) DEFAULT NULL,
  `cvv` varchar(11) DEFAULT NULL,
  `fullname` varchar(20) NOT NULL,
  `addressdetails` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `zipcode` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `phonetype` varchar(20) NOT NULL,
  `phonumber` varchar(20) NOT NULL,
  `dob` varchar(20) DEFAULT NULL
);

