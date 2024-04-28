<?php
$CONFIG = array (
  'passwordsalt' => '',
  'secret' => '',
  'trusted_domains' => 
  array (
    0 => 'localhost',
    1 => '10.15.15.141',
    2 => '10.15.15.103',
    3 => 'nextcloud.jyylab.xyz',
    4 => '10.15.15.1',
    5 => '10.15.15.100',
    6 => 'nextcloud.jyylab.com',
  ),
  'trusted_proxies'=>
  array (
    0 => '10.15.15.1',
    1 => '10.15.15.141',
    2 => '10.15.15.100',
  ),
  'datadirectory' => '/var/www/nextcloud-data',
  'dbtype' => 'mysql',
  'version' => '27.1.1.0',
  'overwrite.cli.url' => 'http://localhost',
  'dbname' => 'nextcloud',
  'dbhost' => 'localhost',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => 'nextcloud',
  'dbpassword' => '',
  'installed' => true,
  'instanceid' => 'bfbfd2b0986fb',
  'memcache.local' => '\OC\Memcache\Redis',
  'redis' => array(
      'host' => '/var/run/redis/redis.sock',
      'port' => 0,
      'timeout' => 0.0
  ),
  'filelocking.enabled' => true,
  'memcache.locking' => '\OC\Memcache\Redis',
  'log_type' => 'file',
  'logfile' => '/var/www/nextcloud-data/nextcloud.log',
  'loglevel' => 3
);