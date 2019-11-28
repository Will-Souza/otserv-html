<?php
if(!tableExist('z_featured_article')) {
	$db->query('CREATE TABLE `z_featured_article` (
		`id` int(11) NOT NULL AUTO_INCREMENT,
		`title` varchar(50) NOT NULL,
		`text` varchar(255) NOT NULL,
		`date` varchar(30) NOT NULL,
		`author` varchar(50) NOT NULL,
		`read_more` varchar(100) NOT NULL,
		PRIMARY KEY (`id`)
		) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;');
	success('Imported table z_featured_article.');
}

if(!tableExist('z_network_box')) {
	$db->query('CREATE TABLE `z_network_box` (
		`id` int(11) NOT NULL AUTO_INCREMENT,
		`network_name` varchar(10) NOT NULL,
		`network_link` varchar(50) NOT NULL,
		PRIMARY KEY (`id`)
		) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;');
	success('Imported table z_network_box.');
}

if(!tableExist('z_polls')) {
	$db->query('CREATE TABLE `z_polls` (
		`id` int(11) NOT NULL auto_increment,
		`question` varchar(255) NOT NULL,
		`description` varchar(255) NOT NULL,
		`end` int(11) NOT NULL,
		`start` int(11) NOT NULL,
		`answers` int(11) NOT NULL,
		`votes_all` int(11) NOT NULL,
		PRIMARY KEY  (`id`)
		) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;');
	success('Imported table z_polls.');
}

if(!tableExist('z_polls_answers')) {
	$db->query('CREATE TABLE `z_polls_answers` (
		`poll_id` int(11) NOT NULL,
		`answer_id` int(11) NOT NULL,
		`answer` varchar(255) NOT NULL,
		`votes` int(11) NOT NULL
		) ENGINE=MyISAM DEFAULT CHARSET=latin1;');
	success('Imported table z_polls_answers.');
}

if(!fieldExist('vote', 'accounts')) {
	$db->query('ALTER TABLE `accounts` ADD `vote` INT( 11 ) NOT NULL ;');
	success('Added field accounts.vote.');
}
?>