-- phpMyAdmin SQL Dump
-- version 4.4.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas generowania: 14 Maj 2015, 12:19
-- Wersja serwera: 5.5.43-0+deb8u1
-- Wersja PHP: 5.6.7-1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `pivotx`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pivotx_categories`
--

CREATE TABLE IF NOT EXISTS `pivotx_categories` (
  `uid` int(11) NOT NULL,
  `contenttype` tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `category` tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `target_uid` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `pivotx_categories`
--

INSERT INTO `pivotx_categories` (`uid`, `contenttype`, `category`, `target_uid`) VALUES
(4, 'entry', 'szkice', 1),
(3, 'entry', 'lifestyle', 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pivotx_chapters`
--

CREATE TABLE IF NOT EXISTS `pivotx_chapters` (
  `uid` int(11) NOT NULL,
  `chaptername` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `description` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `sortorder` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `pivotx_chapters`
--

INSERT INTO `pivotx_chapters` (`uid`, `chaptername`, `description`, `sortorder`) VALUES
(1, 'Strony', 'Dodaj więcej stron lub zacznij nowy rozdział.', 10);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pivotx_comments`
--

CREATE TABLE IF NOT EXISTS `pivotx_comments` (
  `uid` int(11) NOT NULL,
  `contenttype` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `entry_uid` int(11) NOT NULL DEFAULT '0',
  `name` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `email` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `url` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `ip` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `useragent` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `registered` tinyint(4) NOT NULL DEFAULT '0',
  `notify` tinyint(4) NOT NULL DEFAULT '0',
  `discreet` tinyint(4) NOT NULL DEFAULT '0',
  `moderate` tinyint(4) NOT NULL DEFAULT '0',
  `spamscore` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pivotx_entries`
--

CREATE TABLE IF NOT EXISTS `pivotx_entries` (
  `uid` int(11) NOT NULL,
  `title` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `uri` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `subtitle` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `introduction` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `convert_lb` int(11) NOT NULL DEFAULT '0',
  `status` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `publish_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `edit_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `allow_comments` int(11) NOT NULL DEFAULT '0',
  `keywords` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `via_link` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `via_title` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `comment_count` int(11) NOT NULL,
  `comment_names` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `trackback_count` int(11) NOT NULL,
  `trackback_names` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `extrafields` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `pivotx_entries`
--

INSERT INTO `pivotx_entries` (`uid`, `title`, `uri`, `subtitle`, `introduction`, `body`, `convert_lb`, `status`, `date`, `publish_date`, `edit_date`, `user`, `allow_comments`, `keywords`, `via_link`, `via_title`, `comment_count`, `comment_names`, `trackback_count`, `trackback_names`, `extrafields`) VALUES
(1, 'Witaj w PivotX - 2.3.10', 'witaj-w-pivotx-2310', '', '<p>If you can read this, you have successfully installed [[tt tag="PivotX"]]. Yay!! To help you further on your way, the following links might be of use to you:</p>\r\n<ul>\r\n<li>PivotX.net - <a href="http://pivotx.net">The official PivotX website</a></li>\r\n<li>The online documentation at <a href="http://book.pivotx.net">PivotX Help</a> should be of help.</li>\r\n<li>Get help on <a href="http://forum.pivotx.net">the PivotX forum</a></li>\r\n<li>Browse for <a href="http://themes.pivotx.net">PivotX Themes</a></li>\r\n<li>Get more <a href="http://extensions.pivotx.net">PivotX Extensions</a></li>\r\n<li>Follow <a href="http://twitter.com/pivotx">@pivotx on Twitter</a></li>\r\n</ul>\r\n<p>And, of course: Have fun with PivotX!</p>', '<h3>More</h3>\r\n<p>All text that you write in the ''body'' part of the entry will only appear on the entry''s own page. To see how this works, edit this entry in the PivotX administration by going to ''Entries &amp; Pages'' &raquo; ''Entries'' &raquo; ''Edit''.</p>', 5, 'hold', '2015-05-07 12:59:00', '2015-05-07 12:59:00', '2015-05-07 13:08:33', 'mzoltko', 1, 'pivot pivotx', '', '', 0, '', 0, '', ''),
(2, 'Lorem ipsum', 'lorem-ipsum', '', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur quam augue, consequat in massa vitae, varius eleifend orci. Donec venenatis iaculis ante quis posuere. Suspendisse pulvinar lectus sit amet metus pharetra, quis tempor urna posuere.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur quam augue, consequat in massa vitae, varius eleifend orci. Donec venenatis iaculis ante quis posuere. Suspendisse pulvinar lectus sit amet metus pharetra, quis tempor urna posuere. Fusce dapibus porta mi at luctus. Aenean nec ipsum dictum, laoreet lectus eu, posuere ante. Nunc cursus justo a semper sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi id sem eleifend, convallis nunc eget, mattis lorem. Praesent lectus leo, hendrerit rutrum maximus in, pulvinar id eros. Praesent maximus sapien rutrum, posuere dui a, tempor velit. Curabitur mattis ultricies leo, sit amet fermentum ante vulputate sit amet. Nulla facilisi. Quisque accumsan dui sed est semper, luctus porttitor diam cursus. In et ipsum ultricies, dapibus ipsum sit amet, convallis arcu. Duis in imperdiet felis, at viverra augue. Nullam maximus, nisl sed porttitor aliquam, augue ante malesuada urna, a tempor nisi tellus vel nisi.</p>\r\n<p>In ultrices, nulla id suscipit ornare, nulla nunc interdum urna, id lacinia nisl libero nec neque. Nunc erat augue, viverra sit amet ornare in, pretium at ex. Donec tempus dolor ut urna venenatis euismod. Sed suscipit facilisis metus porttitor placerat. Donec orci elit, ullamcorper a lacinia et, pulvinar sed arcu. Quisque nisi augue, ullamcorper eu magna eget, luctus dapibus ex. Aenean non fringilla felis.</p>\r\n<p>Etiam facilisis, ligula in commodo dapibus, dolor erat fringilla arcu, eget facilisis leo turpis in nisl. Vestibulum egestas libero eu orci commodo aliquet. Praesent dapibus aliquet auctor. Nam posuere ac tellus sit amet semper. Curabitur pellentesque pellentesque orci eget laoreet. Fusce ut felis diam. Donec condimentum fermentum massa, id porttitor lacus aliquam a. Maecenas lobortis mi et tortor pulvinar, et pulvinar leo interdum. Sed venenatis eros nec arcu varius, nec porttitor justo sodales. Nunc eros tellus, accumsan vitae sodales nec, porta et ligula. Integer sed tempus arcu, sed interdum ante. Ut porttitor risus eget aliquam varius. Nam nec consequat nibh.</p>\r\n<p>Fusce finibus mauris a massa tincidunt, eget gravida tortor cursus. Mauris finibus tempus interdum. Duis non nulla accumsan, ornare ipsum sit amet, volutpat mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus molestie velit metus, ac gravida dolor accumsan eu. Sed consectetur mi nisl, eget convallis lacus consequat sit amet. Vestibulum dignissim, urna sed suscipit sodales, mi leo suscipit tortor, eget volutpat tortor elit vitae lorem. Ut mi justo, placerat sed consequat elementum, sollicitudin et neque. Nunc eu accumsan nulla. Donec aliquam id elit sed facilisis. Suspendisse sed ligula risus. Duis egestas nibh auctor metus lobortis mollis.</p>\r\n<p>Etiam in nisi eleifend, blandit eros eget, efficitur mi. Maecenas sed enim et neque tincidunt maximus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam finibus mollis erat, a feugiat risus. Praesent risus neque, bibendum et lobortis a, feugiat a lacus. Phasellus non lacus congue, maximus ligula ut, sodales libero. Donec commodo iaculis nisi scelerisque lobortis. Fusce venenatis maximus mi, in posuere ligula rhoncus sit amet.</p>', 5, 'publish', '2015-05-07 13:07:00', '2015-05-07 13:07:00', '2015-05-07 13:08:13', 'mzoltko', 1, 'ipsum lorem', '', '', 0, '', 0, '', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pivotx_extrafields`
--

CREATE TABLE IF NOT EXISTS `pivotx_extrafields` (
  `uid` int(11) NOT NULL,
  `contenttype` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `target_uid` int(11) NOT NULL DEFAULT '0',
  `fieldkey` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `pivotx_extrafields`
--

INSERT INTO `pivotx_extrafields` (`uid`, `contenttype`, `target_uid`, `fieldkey`, `value`) VALUES
(2, 'page', 5, 'galleryimagelist', '2015-05/taki.png######\r\n2015-05/11037_1160782268364_6299302_n.jpg######\r\n2015-05/030_milosc_o_zachodzie.jpg######\r\n');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pivotx_pages`
--

CREATE TABLE IF NOT EXISTS `pivotx_pages` (
  `uid` int(11) NOT NULL,
  `title` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `uri` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `subtitle` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `introduction` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `convert_lb` int(11) NOT NULL DEFAULT '0',
  `template` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `status` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `publish_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `edit_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `chapter` int(11) NOT NULL DEFAULT '0',
  `sortorder` int(11) NOT NULL DEFAULT '0',
  `user` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `allow_comments` int(11) NOT NULL DEFAULT '0',
  `keywords` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `extrafields` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `pivotx_pages`
--

INSERT INTO `pivotx_pages` (`uid`, `title`, `uri`, `subtitle`, `introduction`, `body`, `convert_lb`, `template`, `status`, `date`, `publish_date`, `edit_date`, `chapter`, `sortorder`, `user`, `allow_comments`, `keywords`, `extrafields`) VALUES
(3, 'O mnie', 'o-mnie', '', '', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id cursus ex. Phasellus suscipit at ipsum quis fringilla. Sed tempor urna at turpis mattis, ac iaculis justo vestibulum. Phasellus vitae tincidunt magna. Vivamus non molestie leo, quis consequat sem. Praesent eu nisl est. Suspendisse euismod pharetra sem, id molestie mi mattis at. Donec vestibulum magna ac diam ultricies, non accumsan lacus iaculis. Sed suscipit nibh purus, ac dapibus metus ornare at. Vestibulum pharetra elit eget felis pulvinar faucibus. Donec pharetra pulvinar sagittis.</p>\r\n<p>Duis ac ex quis arcu efficitur interdum eget ut metus. Integer fermentum purus ac nisl mollis luctus eu non quam. Suspendisse interdum dolor ut nulla venenatis, et gravida lectus volutpat. Cras et mi dapibus, sagittis eros id, ultrices odio. Suspendisse tincidunt consectetur ipsum, nec pretium orci porta vitae. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc cursus ex eu nibh sollicitudin, id rutrum magna congue. Donec dui ligula, luctus in dignissim at, blandit ac libero. Aliquam porta sed ex et pretium. Quisque nulla leo, imperdiet eu ultricies vel, pulvinar vel dolor. Quisque aliquet at felis a venenatis.</p>\r\n<p>Nam varius convallis pellentesque. Suspendisse porta ante eu ex tincidunt, et pulvinar tellus maximus. Phasellus vitae orci tortor. Nulla vehicula consequat congue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam porttitor tortor sed ligula tempor, in egestas nisi posuere. Pellentesque odio felis, rhoncus ac tempus in, eleifend eget urna. Fusce suscipit leo et ex tincidunt, aliquet varius est auctor. Quisque sit amet rutrum mi. Phasellus convallis mauris at mauris mollis ultrices.</p>\r\n<p>Aenean ac ante condimentum, sagittis ipsum nec, blandit purus. Maecenas gravida nulla eros, et imperdiet felis pretium tincidunt. In rutrum elit porttitor, gravida enim accumsan, condimentum ante. Suspendisse velit ante, mollis malesuada condimentum at, placerat vel nunc. Phasellus ullamcorper ipsum urna, nec tincidunt enim aliquet nec. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce suscipit sit amet lacus a tristique. Quisque auctor turpis eget bibendum dictum. Etiam aliquet arcu mollis posuere fermentum. Integer nec neque risus. Mauris metus tellus, sagittis et dapibus tempor, varius vitae enim. Nulla et sodales nisi, id finibus nunc. Nullam quis velit risus.</p>\r\n<p>Aliquam scelerisque nec urna nec maximus. Proin scelerisque dictum finibus. Donec euismod a erat sed condimentum. Maecenas ultrices ultricies erat eget pretium. Praesent eu tristique tortor. Duis et ante id urna convallis auctor. Phasellus quis ipsum et justo convallis dapibus. In condimentum molestie ultricies. Ut eget placerat mauris. Mauris porttitor diam in urna porta tincidunt.</p>', 5, '-', 'publish', '2015-05-07 13:04:00', '2015-05-07 13:04:00', '2015-05-14 12:05:21', 1, 10, 'mzoltko', 0, '', ''),
(4, 'Kontakt', 'kontakt', '', '', '', 5, '-', 'publish', '2015-05-07 13:04:00', '2015-05-07 13:04:00', '2015-05-07 13:05:34', 1, 30, 'mzoltko', 0, '', ''),
(5, 'Galeria', 'galeria', '', '', '<div class="gallery">[[gallery popup="thickbox"]] <a href="%imageurl%%filename%" title="%title%" rel="gallery-%uid%" class="thickbox"> <img src="%pivotxurl%includes/timthumb.php?src=%filename%&amp;w=106&amp;h=80" alt="%alttext%" /> </a> [[/gallery]]</div>', 5, '-', 'publish', '2015-05-07 13:05:00', '2015-05-07 13:05:00', '2015-05-14 12:04:45', 1, 20, 'mzoltko', 0, '', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pivotx_tags`
--

CREATE TABLE IF NOT EXISTS `pivotx_tags` (
  `uid` int(11) NOT NULL,
  `tag` tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `contenttype` tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `target_uid` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `pivotx_tags`
--

INSERT INTO `pivotx_tags` (`uid`, `tag`, `contenttype`, `target_uid`) VALUES
(1, 'ipsum', 'entry', 2),
(2, 'lorem', 'entry', 2),
(3, 'pivot', 'entry', 1),
(4, 'pivotx', 'entry', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pivotx_trackbacks`
--

CREATE TABLE IF NOT EXISTS `pivotx_trackbacks` (
  `uid` int(11) NOT NULL,
  `entry_uid` int(11) NOT NULL DEFAULT '0',
  `name` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `title` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `url` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `ip` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `excerpt` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `moderate` tinyint(4) NOT NULL DEFAULT '0',
  `spamscore` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `pivotx_categories`
--
ALTER TABLE `pivotx_categories`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `target_uid` (`target_uid`);

--
-- Indexes for table `pivotx_chapters`
--
ALTER TABLE `pivotx_chapters`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `pivotx_comments`
--
ALTER TABLE `pivotx_comments`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `entry_uid` (`entry_uid`),
  ADD KEY `date` (`date`);

--
-- Indexes for table `pivotx_entries`
--
ALTER TABLE `pivotx_entries`
  ADD PRIMARY KEY (`uid`),
  ADD FULLTEXT KEY `title` (`title`,`subtitle`,`introduction`,`body`,`keywords`);

--
-- Indexes for table `pivotx_extrafields`
--
ALTER TABLE `pivotx_extrafields`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `target_uid` (`target_uid`),
  ADD KEY `fieldkey` (`fieldkey`(16)),
  ADD FULLTEXT KEY `value` (`value`);

--
-- Indexes for table `pivotx_pages`
--
ALTER TABLE `pivotx_pages`
  ADD PRIMARY KEY (`uid`),
  ADD FULLTEXT KEY `title` (`title`,`subtitle`,`introduction`,`body`,`keywords`);

--
-- Indexes for table `pivotx_tags`
--
ALTER TABLE `pivotx_tags`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `target_uid` (`target_uid`),
  ADD KEY `tag` (`tag`(32));

--
-- Indexes for table `pivotx_trackbacks`
--
ALTER TABLE `pivotx_trackbacks`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `pivotx_categories`
--
ALTER TABLE `pivotx_categories`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT dla tabeli `pivotx_chapters`
--
ALTER TABLE `pivotx_chapters`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT dla tabeli `pivotx_comments`
--
ALTER TABLE `pivotx_comments`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT dla tabeli `pivotx_entries`
--
ALTER TABLE `pivotx_entries`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT dla tabeli `pivotx_extrafields`
--
ALTER TABLE `pivotx_extrafields`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT dla tabeli `pivotx_pages`
--
ALTER TABLE `pivotx_pages`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT dla tabeli `pivotx_tags`
--
ALTER TABLE `pivotx_tags`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT dla tabeli `pivotx_trackbacks`
--
ALTER TABLE `pivotx_trackbacks`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
