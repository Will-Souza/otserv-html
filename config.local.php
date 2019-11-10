<?php
// place for your configuration directives, so you can later easily update myaac
$config['installed'] = true;
$config['env'] = 'prod'; // dev or prod
$config['mail_enabled'] = true;
$config['server_path'] = '/var/www/otserv/';
$config['mail_admin'] = 'andrefscruz_32@hotmail.com';
$config['mail_address'] = 'andrefscruz_32@hotmail.com';
$config['date_timezone'] = 'America/Manaus';
$config['client'] = '1100';
$config['anonymous_usage_statistics'] = true;
$config['client_download'] = 'http://tibia-clients.com/clients/download/'. $config['client'] . '/exe/windows';
$config['client_download_linux'] = 'http://tibia-clients.com/clients/download/'. $config['client'] . '/tar/linux';
$config['session_prefix'] = 'myaac_j8hb9oec_';
$config['cache_prefix'] = 'myaac_b2djrbpr_';

$config['highscores_ids_hidden'] = array(3, 4, 5, 6, 7);
