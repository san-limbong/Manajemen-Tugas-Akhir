-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.6.4-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for mantadb
CREATE DATABASE IF NOT EXISTS `mantadb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `mantadb`;

-- Dumping structure for table mantadb.artefak
IF NOT EXISTS ;

-- Dumping data for table mantadb.artefak: ~0 rows (approximately)
/*!40000 ALTER TABLE `artefak` DISABLE KEYS */;

-- Dumping database structure for mantadb
CREATE DATABASE IF NOT EXISTS `mantadb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `mantadb`;

-- Dumping structure for table mantadb.baak
IF NOT EXISTS ;

-- Dumping data for table mantadb.baak: ~0 rows (approximately)
/*!40000 ALTER TABLE `baak` DISABLE KEYS */;

-- Dumping database structure for mantadb
CREATE DATABASE IF NOT EXISTS `mantadb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `mantadb`;

-- Dumping structure for table mantadb.berita_acara
IF NOT EXISTS ;

-- Dumping data for table mantadb.berita_acara: ~0 rows (approximately)
/*!40000 ALTER TABLE `berita_acara` DISABLE KEYS */;

-- Dumping database structure for mantadb
CREATE DATABASE IF NOT EXISTS `mantadb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `mantadb`;

-- Dumping structure for table mantadb.dosen_pembimbing
IF NOT EXISTS ;

-- Dumping data for table mantadb.dosen_pembimbing: ~0 rows (approximately)
/*!40000 ALTER TABLE `dosen_pembimbing` DISABLE KEYS */;

-- Dumping database structure for mantadb
CREATE DATABASE IF NOT EXISTS `mantadb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `mantadb`;

-- Dumping structure for table mantadb.dosen_penguji
IF NOT EXISTS ;

-- Dumping data for table mantadb.dosen_penguji: ~0 rows (approximately)
/*!40000 ALTER TABLE `dosen_penguji` DISABLE KEYS */;

-- Dumping database structure for mantadb
CREATE DATABASE IF NOT EXISTS `mantadb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `mantadb`;

-- Dumping structure for table mantadb.jadwal
IF NOT EXISTS ;

-- Dumping data for table mantadb.jadwal: ~0 rows (approximately)
/*!40000 ALTER TABLE `jadwal` DISABLE KEYS */;

-- Dumping database structure for mantadb
CREATE DATABASE IF NOT EXISTS `mantadb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `mantadb`;

-- Dumping structure for table mantadb.kelompok_ta
IF NOT EXISTS ;

-- Dumping data for table mantadb.kelompok_ta: ~0 rows (approximately)
/*!40000 ALTER TABLE `kelompok_ta` DISABLE KEYS */;

-- Dumping database structure for mantadb
CREATE DATABASE IF NOT EXISTS `mantadb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `mantadb`;

-- Dumping structure for table mantadb.koordinator_ta
IF NOT EXISTS ;

-- Dumping data for table mantadb.koordinator_ta: ~0 rows (approximately)
/*!40000 ALTER TABLE `koordinator_ta` DISABLE KEYS */;

-- Dumping database structure for mantadb
CREATE DATABASE IF NOT EXISTS `mantadb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `mantadb`;

-- Dumping structure for table mantadb.mahasiswa
IF NOT EXISTS ;

-- Dumping data for table mantadb.mahasiswa: ~0 rows (approximately)
/*!40000 ALTER TABLE `mahasiswa` DISABLE KEYS */;

-- Dumping database structure for mantadb
CREATE DATABASE IF NOT EXISTS `mantadb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `mantadb`;

-- Dumping structure for table mantadb.meeting_management
IF NOT EXISTS ;

-- Dumping data for table mantadb.meeting_management: ~0 rows (approximately)
/*!40000 ALTER TABLE `meeting_management` DISABLE KEYS */;

-- Dumping database structure for mantadb
CREATE DATABASE IF NOT EXISTS `mantadb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `mantadb`;

-- Dumping structure for table mantadb.nilai
IF NOT EXISTS ;

-- Dumping data for table mantadb.nilai: ~0 rows (approximately)
/*!40000 ALTER TABLE `nilai` DISABLE KEYS */;

-- Dumping database structure for mantadb
CREATE DATABASE IF NOT EXISTS `mantadb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `mantadb`;

-- Dumping structure for table mantadb.pendaftaran
IF NOT EXISTS ;

-- Dumping data for table mantadb.pendaftaran: ~0 rows (approximately)
/*!40000 ALTER TABLE `pendaftaran` DISABLE KEYS */;

-- Dumping database structure for mantadb
CREATE DATABASE IF NOT EXISTS `mantadb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `mantadb`;

-- Dumping structure for table mantadb.profile
IF NOT EXISTS ;

-- Dumping data for table mantadb.profile: ~0 rows (approximately)
/*!40000 ALTER TABLE `profile` DISABLE KEYS */;

-- Dumping database structure for mantadb
CREATE DATABASE IF NOT EXISTS `mantadb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `mantadb`;

-- Dumping structure for table mantadb.topik
IF NOT EXISTS ;

-- Dumping data for table mantadb.topik: ~3 rows (approximately)
/*!40000 ALTER TABLE `topik` DISABLE KEYS */;

-- Dumping database structure for mantadb
CREATE DATABASE IF NOT EXISTS `mantadb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `mantadb`;

-- Dumping structure for table mantadb.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table mantadb.users: ~6 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
