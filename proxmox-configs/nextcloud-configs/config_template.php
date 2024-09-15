<?php
$CONFIG = array (
  'passwordsalt' => '',
  'secret' => '',
  'trusted_domains' => 
  array (
    0 => 'localhost',
    // below is IP of nextcloud
    1 => '10.15.10.103',
    # replace below with own sub domains
    2 => 'nextcloud.mydomain.xyz',
    3 => 'nextcloud.mydomain.com',
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