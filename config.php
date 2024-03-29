<?php

## Have a look in includes/defaults.inc.php for examples of settings you can set here. DO NOT EDIT defaults.inc.php!

// Database config
$config['db_host'] = 'localhost';

$config['db_user'] = 'root';     
$config['db_pass'] = 'N3tm@to';
$config['db_name'] = 'observium';

// Base directory
$config['install_dir'] = "/opt/netmato";

// Default community list to use when adding/discovering
$config['snmp']['community'] = array("public");

// Authentication Model
$config['auth_mechanism'] = "mysql";    // default, other options: ldap, http-auth, please see documentation for config help

// Enable alerter (not available in CE)
#$config['poller-wrapper']['alerter'] = TRUE;

// Set up a default alerter (email to a single address)
$config['alerts']['alerter']['default']['descr']   = "Default Email Alert";
$config['alerts']['alerter']['default']['type']    = "email";
$config['alerts']['alerter']['default']['contact'] = "you@yourdomain.org";
$config['alerts']['alerter']['default']['enable']  = TRUE;

// End config.php
