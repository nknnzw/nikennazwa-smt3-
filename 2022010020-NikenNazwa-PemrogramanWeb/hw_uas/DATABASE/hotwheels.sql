

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `admin` VALUES("1","admin","$2y$10$AIy0X1Ep6alaHDTofiChGeqq7k/d1Kc8vKQf1JZo0mKrzkkj6M626");



CREATE TABLE `bom_produk` (
  `kode_bom` varchar(100) NOT NULL,
  `kode_bk` varchar(100) NOT NULL,
  `kode_produk` varchar(100) NOT NULL,
  `nama_produk` varchar(200) NOT NULL,
  `kebutuhan` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `bom_produk` VALUES("B0001","M0002","P0001","Roti Sobek","2");
INSERT INTO `bom_produk` VALUES("B0001","M0001","P0001","Roti Sobek","4");
INSERT INTO `bom_produk` VALUES("B0001","M0004","P0001","Roti Sobek","3");
INSERT INTO `bom_produk` VALUES("B0002","M0001","P0002","Maryam","4");
INSERT INTO `bom_produk` VALUES("B0002","M0004","P0002","Maryam","3");
INSERT INTO `bom_produk` VALUES("B0002","M0003","P0002","Maryam","2");
INSERT INTO `bom_produk` VALUES("B0003","M0002","P0003","Kue tart coklat","2");
INSERT INTO `bom_produk` VALUES("B0003","M0003","P0003","Kue tart coklat","5");
INSERT INTO `bom_produk` VALUES("B0003","M0005","P0003","Kue tart coklat","5");



CREATE TABLE `customer` (
  `kode_customer` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `telp` varchar(200) NOT NULL,
  PRIMARY KEY (`kode_customer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `customer` VALUES("C0005","Niken","nikennn@gmail.com","nikennazwa","$2y$10$9Xf3I2xnNSjSO1i/z4khBOvHlw5D2pe1eD7afSD8pHBzG2gtJeIvu","081218792083");



CREATE TABLE `inventory` (
  `kode_bk` varchar(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `qty` varchar(200) NOT NULL,
  `satuan` varchar(200) NOT NULL,
  `harga` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`kode_bk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `inventory` VALUES("M0001","Tepung","76","Kg","1000","2020-07-26");
INSERT INTO `inventory` VALUES("M0002","Pengembang","0","Kg","1000","2020-07-27");
INSERT INTO `inventory` VALUES("M0003","Cream","17","Kg","3000","2020-07-26");
INSERT INTO `inventory` VALUES("M0004","Keju","82","Kg","4000","2020-07-26");
INSERT INTO `inventory` VALUES("M0005","Coklat","0","Kg","5000","2020-07-27");



CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL AUTO_INCREMENT,
  `kode_customer` varchar(100) NOT NULL,
  `kode_produk` varchar(100) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  PRIMARY KEY (`id_keranjang`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `keranjang` VALUES("25","C0005","P0007","Porsche 917 LH","1","45000");
INSERT INTO `keranjang` VALUES("26","C0005","P0008","89 Mercedes-Benz 560 SEC AMG","1","65000");



CREATE TABLE `produk` (
  `kode_produk` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  PRIMARY KEY (`kode_produk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `produk` VALUES("P0001","Nissan Skyline GTR R34","658aebec07a02.jpg","																											Fast and Furious Premium series 
																								","300000");
INSERT INTO `produk` VALUES("P0002","91 Mazda MX-5 Miata","658aecb96ec34.jpg","								Hotwheels Mazda MX-5 Miata 
									","55000");
INSERT INTO `produk` VALUES("P0003","Datsun 240z Custom","658af7513c343.jpg","												Fast and Furious series						","70000");
INSERT INTO `produk` VALUES("P0005","Bugatti Bolide","658af42b1122e.jpg","Hotwheels bugatti bolide 
Kondisi Card seperti di foto
			","65000");
INSERT INTO `produk` VALUES("P0006","Porsche Carrera RS 2.7 ","658af4955c036.jpg","Hotwheels Porsche Carrera RS 2.7 
Kondisi Card : Loose
Kondisi Unit : 99%
			","25000");
INSERT INTO `produk` VALUES("P0007","Porsche 917 LH","658b997266f16.jpg","Hotwheels Porsche 917 LH
Kondisi Card : Seperti di foto
			","45000");
INSERT INTO `produk` VALUES("P0008","89 Mercedes-Benz 560 SEC AMG","658b9c95c0ce4.jpg","Hotwheels 89 Mercedes-Benz 560 SEC AMG
Kondisi Card : 99% Spesial
			","65000");
INSERT INTO `produk` VALUES("P0009","Ultra Hots series, Chevy El Camino","658ba015c1902.jpg","Hotwheels ultra hots series Chevy El Camino
Kondisi Card : seperti di foto
			","40000");
INSERT INTO `produk` VALUES("P0010","MOPAR series , 71 Dodge Challenger","65a8df30d15e7.jpg","MOPAR series , 71 Dodge Challenger								
Kondisi Card : Seperti di foto
																		","45000");
INSERT INTO `produk` VALUES("P0011","Nissan Maxima","65a8e095d0662.jpg","Nissan Maxima
Kondisi Card : Seperti di foto
			","25000");
INSERT INTO `produk` VALUES("P0012","Ford Mustang","65a8e0db0c369.jpg","Ford Mustang
Kondisi Card : Seperti di foto
			","40000");
INSERT INTO `produk` VALUES("P0013","MCLaren F1","65a8e139086a8.jpg","MCLaren F1
Kondis Card : Seperti di foto
			","26000");
INSERT INTO `produk` VALUES("P0014"," Nissan 3000zx","65a8ea64c500f.jpg"," Nissan 3000zx
Kondisi Unit: seperti di foto
			","27000");
INSERT INTO `produk` VALUES("P0015","Nissan Silvia S15","65a8eab672dbe.jpg"," Nissan Silvia S15
Kondisi Unit : 99%
			","120000");
INSERT INTO `produk` VALUES("P0016","ATSVR","65a8eaed6dab3.jpg","ATS VR
Kondisi Unit : 97%
			","23000");
INSERT INTO `produk` VALUES("P0017","Civic Type R","65a8ec055f89a.jpg","Civic Type R
Kondisi Unit: 99%, sudah ban karet (unrivet)
			","70000");
INSERT INTO `produk` VALUES("P0018","Civic Custom","65a8ec351514e.jpg","Civic Custom
Kondisi Unit: 99%
			","50000");
INSERT INTO `produk` VALUES("P0019"," Mazda Rx-7 Savanna","65a8ec65dfc95.jpg"," Mazda Rx-7 Savanna
Kondisi Unit: seperti di foto
			","35000");
INSERT INTO `produk` VALUES("P0020","PREMIUM STARSKY AND HUTCH series, 76 Grand Torino","65a8ee3d42c12.jpg","PREMIUM STARSKY AND HUTCH series, 76 Grand Torino
 Kondisi Unit: 97%
						","60000");
INSERT INTO `produk` VALUES("P0021"," PREMIUM MODERN CLASSIC series, Volkswagen Jetta Mk3 ","65a8ed89dde06.jpg"," PREMIUM MODERN CLASSIC series, Volkswagen Jetta Mk3
Kondisi Unit: 99%
			","100000");
INSERT INTO `produk` VALUES("P0022"," FAST AND FURIOUS PREMIUM series, Skyline GTR R34","65a8edb98f0c3.jpg"," FAST AND FURIOUS PREMIUM series, Skyline GTR R34
Kondisi Unit: 99%
			","250000");
INSERT INTO `produk` VALUES("P0023","Nissan Silvia S13","65a8ef0749b7f.jpg","Nissan Silvia S13
Kondisi Unit: 99%
			","50000");
INSERT INTO `produk` VALUES("P0024","20 Toyota GR Supra","65a8ef340fd2c.jpg","20 Toyota GR Supra
Kondisi Unit: 99%

			","75000");
INSERT INTO `produk` VALUES("P0025","Subaru WRX STI","65a8ef5d7084b.jpg","Subaru WRX STI
Kondisi Unit: 99%
			","25000");



CREATE TABLE `produksi` (
  `id_order` int(11) NOT NULL AUTO_INCREMENT,
  `invoice` varchar(200) NOT NULL,
  `kode_customer` varchar(200) NOT NULL,
  `kode_produk` varchar(200) NOT NULL,
  `nama_produk` varchar(200) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `provinsi` varchar(200) NOT NULL,
  `kota` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kode_pos` varchar(200) NOT NULL,
  `terima` varchar(200) NOT NULL,
  `tolak` varchar(200) NOT NULL,
  `cek` int(11) NOT NULL,
  PRIMARY KEY (`id_order`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `produksi` VALUES("15","INV0006","C0005","P0007","Porsche 917 LH","1","45000","0","2323-12-27","jateng","jepara","jepara","123","1","0","0");
INSERT INTO `produksi` VALUES("16","INV0006","C0005","P0001","Nissan Skyline GTR R34","1","300000","0","2323-12-27","jateng","jepara","jepara","123","1","0","0");
INSERT INTO `produksi` VALUES("17","INV0007","C0005","P0002","91 Mazda MX-5 Miata","1","55000","Pesanan Baru","2424-01-18","jateng","jepara","jepara","123","0","0","1");



CREATE TABLE `report _penjualan` (
  `id_report_sell` int(11) NOT NULL AUTO_INCREMENT,
  `invoice` varchar(100) NOT NULL,
  `kode_produk` varchar(100) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `jumlah_terjual` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_report_sell`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




CREATE TABLE `report_cancel` (
  `id_report_cancel` int(11) NOT NULL AUTO_INCREMENT,
  `id_order` varchar(100) NOT NULL,
  `kode_produk` varchar(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_report_cancel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




CREATE TABLE `report_inventory` (
  `id_report_inv` int(11) NOT NULL AUTO_INCREMENT,
  `kode_bk` varchar(100) NOT NULL,
  `nama_bahanbaku` varchar(100) NOT NULL,
  `jml_stok_bk` int(11) NOT NULL,
  `tanggal` varchar(11) NOT NULL,
  PRIMARY KEY (`id_report_inv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




CREATE TABLE `report_omset` (
  `id_report_omset` int(11) NOT NULL AUTO_INCREMENT,
  `invoice` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total_omset` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_report_omset`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




CREATE TABLE `report_produksi` (
  `id_report_prd` int(11) NOT NULL AUTO_INCREMENT,
  `invoice` varchar(100) NOT NULL,
  `kode_produk` varchar(100) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_report_prd`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




CREATE TABLE `report_profit` (
  `id_report_profit` int(11) NOT NULL AUTO_INCREMENT,
  `kode_bom` varchar(100) NOT NULL,
  `invoice` varchar(100) NOT NULL,
  `kode_produk` varchar(100) NOT NULL,
  `jumlah` varchar(11) NOT NULL,
  `total_profit` varchar(11) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_report_profit`),
  UNIQUE KEY `kode_bom` (`kode_bom`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


