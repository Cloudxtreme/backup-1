<?php

/**
 * Observium
 *
 *   This file is part of Observium.
 *
 * @package    observium
 * @subpackage discovery
 * @copyright  (C) 2006-2014 Adam Armstrong
 *
 */

if ($config['discover_services'])
{
  echo("Services: ");

  // FIXME: use /etc/services?
  $known_services = array(22 => "ssh", 25 => "smtp", 53 => "dns", 80 => "http",
                          110 => "pop", 143 => "imap");

  # Services
  if ($device['type'] == "server")
  {
    $oids = trim(snmp_walk($device, ".1.3.6.1.2.1.6.13.1.1.0.0.0.0", "-Osqn"));
    foreach (explode("\n", $oids) as $data)
    {
      $data = trim($data);
      if ($data)
      {
        list($oid, $tcpstatus) = explode(" ", $data);
        if (trim($tcpstatus) == "listen")
        {
          $split_oid = explode('.',$oid);
          $tcp_port = $split_oid[count($split_oid)-6];
          if ($known_services[$tcp_port])
          {
            discover_service($device,$known_services[$tcp_port]);
          }
        }
      }
    }
  } # End Services

  echo("\n");
}

// EOF
