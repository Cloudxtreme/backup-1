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

$scale_min = 0;

$rrd_filename = get_rrd_path($device, "netscaler-stats-tcp.rrd");

$ds = "ErrFullRetrasmit";

$colour_area = "fcbba1";
$colour_line = "ef3b2c";

$colour_area_max = "dddddd";

$graph_max = 1;

$unit_text = "Retransmits/s";

include("includes/graphs/generic_simplex.inc.php");

// EOF
