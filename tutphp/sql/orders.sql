CREATE TABLE IF NOT EXISTS `orders` (
  `ido` int(15) NOT NULL AUTO_INCREMENT,
  `product_name` nvarchar(255) NOT NULL,
  `newprice` int(10) NOT NULL,
  `units` int(5) NOT NULL,
  `total` int(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` nvarchar(255) NOT NULL,
  PRIMARY KEY (`ido`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;
