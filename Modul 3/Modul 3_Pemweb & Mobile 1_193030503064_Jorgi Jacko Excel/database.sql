create database Karyawan;
 
use karyawan;
 
CREATE TABLE `info_karyawan` (
  `id` int(11) NOT NULL auto_increment,
  `nama` varchar(100),
  `TTL` varchar(100),
  `alamat` varchar(15),
  `jenis_kelamin` varchar(15),
  `no_telpon` varchar(15),
  PRIMARY KEY  (`id`)
);