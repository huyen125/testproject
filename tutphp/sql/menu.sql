CREATE TABLE IF NOT EXISTS menu (
  `danhmuc` nvarchar(255) NOT NULL,
  `idg_1` INT(15),
  `idg_2` INT(15)
) ENGINE=InnoDB;

INSERT INTO `menu` (`danhmuc`, `idg_1`, `idg_2`)
VALUES ('Điện Thoại', '1', ''),
('Apple(iphone)', '1', '1'),
('Samsung', '1', '2'),
('Xiaomi', '1', '3'),
('Oppo', '1', '4'),
('LG', '1', '5'),
('Phụ Kiện', '2', ''),
('Phụ kiện Apple(iphone)', '2', '1'),
('Phụ kiện Samsung', '2', '2'),
('Phụ kiện Xiaomi', '2', '3'),
('Phụ kiện Oppo', '2', '4'),
('Phụ kiện LG', '2', '5');
