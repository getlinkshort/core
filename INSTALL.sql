SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "-08:00";

DROP TABLE IF EXISTS `link`;
CREATE TABLE `link` (
  `id` int(11) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `url` text NOT NULL,
  `ip` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE `link`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;