CREATE TABLE IF NOT EXISTS `users` (
  `idu` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(15) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'user',
  PRIMARY KEY (`idu`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;


INSERT INTO `users` (`idu`, `fname`, `lname`, `address`, `city`, `email`, `password`, `type`)
VALUES
('1', 'Nam', 'Dang', 'Ung Hoa', 'Ha Noi', 'phuongnam@phoenix.com', 'adminnam', 'admin');

INSERT INTO `users` (`idu`, `fname`, `lname`, `address`, `city`, `email`, `password`, `type`)
VALUES
(NULL, 'Cuong', 'Nguyen', 'Ha Dong', 'Ha Noi', 'nguyencuong@phoenix.com', 'admincuong', 'user'),
(NULL, 'Bao', 'Nguyen', 'Ha Dong', 'Ha Noi', 'nguyenbao@phoenix.com', 'adminbao', 'user');
