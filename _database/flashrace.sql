-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.6.37-log - MySQL Community Server (GPL)
-- Операционная система:         Win64
-- HeidiSQL Версия:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры для таблица flashrace.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `admin_login` varchar(50) DEFAULT NULL,
  `admin_pass` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `admin_pass` (`admin_pass`),
  UNIQUE KEY `admin_login` (`admin_login`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы flashrace.admin: ~0 rows (приблизительно)
DELETE FROM `admin`;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`admin_id`, `admin_login`, `admin_pass`) VALUES
	(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Дамп структуры для таблица flashrace.checkpoints
CREATE TABLE IF NOT EXISTS `checkpoints` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `code` varchar(50) DEFAULT NULL,
  `text` varchar(1000) DEFAULT NULL,
  `help1` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы flashrace.checkpoints: ~30 rows (приблизительно)
DELETE FROM `checkpoints`;
/*!40000 ALTER TABLE `checkpoints` DISABLE KEYS */;
INSERT INTO `checkpoints` (`id`, `name`, `code`, `text`, `help1`) VALUES
	(1, 'Институт Журналистики БГУ', 'FR248888', 'Институт Журналистики', NULL),
	(2, 'Гипермаркет "Корона"', 'FR802461', 'Что объединяет сухари, тракт, кольцо и Ждановичи? Ищи колонну у байкеров.', NULL),
	(3, 'Сквер (ул. К. Цеткин)', 'FR263790', '53.903197, 27.534352', NULL),
	(4, 'Музыкальный Театр', 'FR231796', 'Вам нужно здание, где купаясь в нотном стане живут 8 муз Древней Греции. Ищите каменную реку', NULL),
	(5, 'Институт бизнеса и менеджмента технологий БГУ', 'FR217024', 'Институт бизнеса и менеджмента технологий', NULL),
	(6, 'Педуниверситет им. М. Танка', 'FR104124', 'Там, где лепят сеятелей разумного, доброго, вечного. Ищите ограду с правой стороны здания', NULL),
	(7, 'Физический факультет БГУ', 'FR958977', 'Физический факультет', NULL),
	(8, 'Юридический факультет БГУ', 'FR633609', 'Юридический факультет', NULL),
	(9, 'Железнодорожный вокзал', 'FR152117', 'Место, где дождавшегося меняет новый ждущий, мимо спящего. Ищите человека с нашим логотипом', NULL),
	(10, 'Механико-математический факультет БГУ', 'FR150182', 'Механико-математический факультет', NULL),
	(11, 'Факультет международных отношений БГУ', 'FR400433', 'Факультет международных отношений', NULL),
	(12, 'Географический факультет БГУ', 'FR770944', 'Географический факультет', NULL),
	(13, 'Трамвайный мост (ул. Октябрьская)', 'FR253909', 'Голубой вагон бежит, качается... Ну то есть бежал и качался. Там давно только студенты домой возвращаются. Ныряйте под', NULL),
	(14, 'Графити (ул. Октябрьская)', 'FR629465', 'Стена напротив граффити, которое посвящено человеку, что про Картофелеедов писал. А картофел можно есть так, что за ушами трещит, если они есть, конечно', NULL),
	(15, 'Студенческий городок БГУ', 'FR696213', 'Студенческий городок', NULL),
	(16, 'Стена Цоя', 'FR415125', 'Народный символ признания и благодарности погибшему поэту - музыканту', NULL),
	(17, 'Лицей БГУ', 'FR458617', 'Лицей БГУ', NULL),
	(18, 'Кинотеатр "Пионер"', 'FR928820', 'Питерский Имбицил Окна Нежно Ершиком Режет. Не стоит идти внутрь', NULL),
	(19, 'Исторический факультет БГУ', 'FR581498', 'Исторический факультет', NULL),
	(20, 'Мост с замками (парк Горького)', 'FR772095', 'Скрепив любовь навечно, увидеть справа можно звёзды, а слева посмотреть на город сверху', NULL),
	(21, 'Белорусский государственный цирк', 'FR692498', 'Место основной занятости человека, которого все ассоциируют с радио и называют солнечным. Юное кофе вас наПРАВИТ', NULL),
	(22, 'Танк-памятник у Дома Офицеров', 'FR397422', 'Редко церковь платила за оружие, но их она купила целую колонну', NULL),
	(23, 'Экономический факультет БГУ', 'FR321331', 'Экономический факультет', NULL),
	(24, 'Дворик (МакДональдс на Октябрьской)', 'FR237903', 'Обратная сторона первого последствия вторжения Американских вкусов, где молодёжь устроила питейный дом. Ищите лодочку', NULL),
	(25, 'Скамья "Рок за Бобров"', 'FR163981', 'Скамья одноименного ежегодного минского фестиваля.', NULL),
	(26, 'НВЦ "Белэкспо" (ВДНХ)', 'FR282331', 'Напротив одного из самых культурных зданий города есть переименованное место, которое все называют по-старому. В столице славянских соседей одноимённая станция метро. Ищите в районе подхода к зданию', NULL),
	(27, 'Остров Мужества и Скорби', 'FR811234', 'Это место мужества, но его знают по второй половине названия. Ищите перед входом.', NULL),
	(28, 'Дворец спорта', 'FR251900', 'Виват! Таймер, который давно остановился.', NULL),
	(29, 'Юридический колледж БГУ', 'FR532191', 'Юридический колледж', NULL),
	(30, 'Пожарная часть (ул. Городской вал)', 'FR233744', 'Улица с первыми огнеборцами Минска. Вам нужен железный человек.', NULL);
/*!40000 ALTER TABLE `checkpoints` ENABLE KEYS */;

-- Дамп структуры для таблица flashrace.race
CREATE TABLE IF NOT EXISTS `race` (
  `user_id` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL COMMENT 'Статус: -1 не начали, 0 в процессе, 1 завершил',
  `begin_id` int(11) NOT NULL DEFAULT '0' COMMENT 'Начальный пикет',
  `kol_left_id` int(11) NOT NULL DEFAULT '0',
  `actual_id` int(11) NOT NULL DEFAULT '0' COMMENT 'Текущий пикет',
  `help_used` int(11) NOT NULL DEFAULT '0',
  `actual_help` int(11) NOT NULL DEFAULT '0',
  `begin` timestamp NULL DEFAULT NULL COMMENT 'Начало гонки',
  `end` datetime DEFAULT NULL COMMENT 'Конец гонки',
  `pic1` datetime DEFAULT NULL,
  `pic2` datetime DEFAULT NULL,
  `pic3` datetime DEFAULT NULL,
  `pic4` datetime DEFAULT NULL,
  `pic5` datetime DEFAULT NULL,
  `pic6` datetime DEFAULT NULL,
  `pic7` datetime DEFAULT NULL,
  `pic8` datetime DEFAULT NULL,
  `pic9` datetime DEFAULT NULL,
  `pic10` datetime DEFAULT NULL,
  `pic11` datetime DEFAULT NULL,
  `pic12` datetime DEFAULT NULL,
  `pic13` datetime DEFAULT NULL,
  `pic14` datetime DEFAULT NULL,
  `pic15` datetime DEFAULT NULL,
  `pic16` datetime DEFAULT NULL,
  `pic17` datetime DEFAULT NULL,
  `pic18` datetime DEFAULT NULL,
  `pic19` datetime DEFAULT NULL,
  `pic20` datetime DEFAULT NULL,
  `pic21` datetime DEFAULT NULL,
  `pic22` datetime DEFAULT NULL,
  `pic23` datetime DEFAULT NULL,
  `pic24` datetime DEFAULT NULL,
  `pic25` datetime DEFAULT NULL,
  `pic26` datetime DEFAULT NULL,
  `pic27` datetime DEFAULT NULL,
  `pic28` datetime DEFAULT NULL,
  `pic29` datetime DEFAULT NULL,
  `pic30` datetime DEFAULT NULL,
  `fine1` time DEFAULT NULL,
  `fine2` time DEFAULT NULL,
  `fine3` time DEFAULT NULL,
  `fine4` time DEFAULT NULL,
  `fine5` time DEFAULT NULL,
  `fine6` time DEFAULT NULL,
  `fine7` time DEFAULT NULL,
  `fine8` time DEFAULT NULL,
  `fine9` time DEFAULT NULL,
  `fine10` time DEFAULT NULL,
  `fine11` time DEFAULT NULL,
  `fine12` time DEFAULT NULL,
  `fine13` time DEFAULT NULL,
  `fine14` time DEFAULT NULL,
  `fine15` time DEFAULT NULL,
  `fine16` time DEFAULT NULL,
  `fine17` time DEFAULT NULL,
  `fine18` time DEFAULT NULL,
  `fine19` time DEFAULT NULL,
  `fine20` time DEFAULT NULL,
  `fine21` time DEFAULT NULL,
  `fine22` time DEFAULT NULL,
  `fine23` time DEFAULT NULL,
  `fine24` time DEFAULT NULL,
  `fine25` time DEFAULT NULL,
  `fine26` time DEFAULT NULL,
  `fine27` time DEFAULT NULL,
  `fine28` time DEFAULT NULL,
  `fine29` time DEFAULT NULL,
  `fine30` time DEFAULT NULL,
  `bonus1` time DEFAULT NULL,
  `bonus2` time DEFAULT NULL,
  `bonus3` time DEFAULT NULL,
  `bonus4` time DEFAULT NULL,
  `bonus5` time DEFAULT NULL,
  `bonus6` time DEFAULT NULL,
  `bonus7` time DEFAULT NULL,
  `bonus8` time DEFAULT NULL,
  `bonus9` time DEFAULT NULL,
  `bonus10` time DEFAULT NULL,
  `bonus11` time DEFAULT NULL,
  `bonus12` time DEFAULT NULL,
  `bonus13` time DEFAULT NULL,
  `bonus14` time DEFAULT NULL,
  `bonus15` time DEFAULT NULL,
  `bonus16` time DEFAULT NULL,
  `bonus17` time DEFAULT NULL,
  `bonus18` time DEFAULT NULL,
  `bonus19` time DEFAULT NULL,
  `bonus20` time DEFAULT NULL,
  `bonus21` time DEFAULT NULL,
  `bonus22` time DEFAULT NULL,
  `bonus23` time DEFAULT NULL,
  `bonus24` time DEFAULT NULL,
  `bonus25` time DEFAULT NULL,
  `bonus26` time DEFAULT NULL,
  `bonus27` time DEFAULT NULL,
  `bonus28` time DEFAULT NULL,
  `bonus29` time DEFAULT NULL,
  `bonus30` time DEFAULT NULL,
  `bonus_fin` time NOT NULL DEFAULT '00:00:00',
  `fine_fin` time NOT NULL DEFAULT '00:00:00',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы flashrace.race: ~0 rows (приблизительно)
DELETE FROM `race`;
/*!40000 ALTER TABLE `race` DISABLE KEYS */;
INSERT INTO `race` (`user_id`, `status`, `begin_id`, `kol_left_id`, `actual_id`, `help_used`, `actual_help`, `begin`, `end`, `pic1`, `pic2`, `pic3`, `pic4`, `pic5`, `pic6`, `pic7`, `pic8`, `pic9`, `pic10`, `pic11`, `pic12`, `pic13`, `pic14`, `pic15`, `pic16`, `pic17`, `pic18`, `pic19`, `pic20`, `pic21`, `pic22`, `pic23`, `pic24`, `pic25`, `pic26`, `pic27`, `pic28`, `pic29`, `pic30`, `fine1`, `fine2`, `fine3`, `fine4`, `fine5`, `fine6`, `fine7`, `fine8`, `fine9`, `fine10`, `fine11`, `fine12`, `fine13`, `fine14`, `fine15`, `fine16`, `fine17`, `fine18`, `fine19`, `fine20`, `fine21`, `fine22`, `fine23`, `fine24`, `fine25`, `fine26`, `fine27`, `fine28`, `fine29`, `fine30`, `bonus1`, `bonus2`, `bonus3`, `bonus4`, `bonus5`, `bonus6`, `bonus7`, `bonus8`, `bonus9`, `bonus10`, `bonus11`, `bonus12`, `bonus13`, `bonus14`, `bonus15`, `bonus16`, `bonus17`, `bonus18`, `bonus19`, `bonus20`, `bonus21`, `bonus22`, `bonus23`, `bonus24`, `bonus25`, `bonus26`, `bonus27`, `bonus28`, `bonus29`, `bonus30`, `bonus_fin`, `fine_fin`) VALUES
	(30, NULL, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '00:00:00', '00:00:00');
/*!40000 ALTER TABLE `race` ENABLE KEYS */;

-- Дамп структуры для таблица flashrace.settings
CREATE TABLE IF NOT EXISTS `settings` (
  `status_all` int(11) DEFAULT NULL,
  UNIQUE KEY `status` (`status_all`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы flashrace.settings: ~0 rows (приблизительно)
DELETE FROM `settings`;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` (`status_all`) VALUES
	(NULL);
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;

-- Дамп структуры для таблица flashrace.users
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(35) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `name1` varchar(50) DEFAULT NULL,
  `name2` varchar(50) DEFAULT NULL,
  `name3` varchar(50) DEFAULT NULL,
  `name4` varchar(50) DEFAULT NULL,
  `name5` varchar(50) DEFAULT NULL,
  `fac1` varchar(64) DEFAULT NULL,
  `fac2` varchar(64) DEFAULT NULL,
  `fac3` varchar(64) DEFAULT NULL,
  `fac4` varchar(64) DEFAULT NULL,
  `fac5` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_email` (`user_email`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы flashrace.users: ~1 rows (приблизительно)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`, `name1`, `name2`, `name3`, `name4`, `name5`, `fac1`, `fac2`, `fac3`, `fac4`, `fac5`) VALUES
	(30, 'Test', 'user', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
