<?php

/**
 * Observium
 *
 *   This file is part of Observium.
 *
 * @package    observium
 * @subpackage graphs
 * @copyright  (C) 2006-2014 Adam Armstrong
 *
 */

$rrd_filename = get_rrd_path($device, "juniperive_connections.rrd");

$rrd_list[0]['filename'] = $rrd_filename;
$rrd_list[0]['descr'] = "Web";
$rrd_list[0]['ds'] = "webusers";

$rrd_list[1]['filename'] = $rrd_filename;
$rrd_list[1]['descr'] = "Mail";
$rrd_list[1]['ds'] = "mailusers";

if ($_GET['debug']) { print_vars($rrd_list); }

$colours = "juniperive";
$nototal = 1;
$unit_text = "Connections";
$scale_min = "0";

include("includes/graphs/generic_multi_line.inc.php");

?>
