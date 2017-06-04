<?php
$AUTOCONFIG = array(
  "dbtype"        => "mysql",
  "dbname"        => "nextcloud",
  "dbuser"        => "oc_nextadmin",
  "dbpass"        => "nextpa55wd",
  "dbhost"        => "{{ mysql_host }}",
  "dbtableprefix" => "nc_",
  "adminlogin"    => "nextadmin",
  "adminpass"     => "nextcloud",
  "directory"     => "/var/www/html/nextcloud/data",
);
