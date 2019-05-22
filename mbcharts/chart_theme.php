<?php
include('../settings.php');

$animationduration = '500';

# Set dark theme almanacs
$darkbackgroundcolor        = 'rgba(40, 45, 52,.4)';
$darktooltipbackgroundcolor = 'rgba(37, 41, 45, 0.95)';
$darkfontcolor              = '#ccc';
$darkgridcolor              = 'RGBA(64, 65, 66, 0.8)';
$darkline1color             = 'rgba(255, 148, 82, 0.95)';
$darkline1linecolor         = 'rgba(255, 131, 47, 1)';
$darkline2color             = 'rgba(0, 164, 180, 1)';
$darkline2markercolor       = '#007181';
$darkxcrosshaircolor        = '#009bab';
$darkycrosshaircolor        = '#ff832f';

if ($charttheme == 'light') {
  $backgroundcolor  = '#fff';
  $tooltipbackgroundcolor = '#fff';
  $fontcolor        = '#555';
  $gridcolor        = '#555';
  $line1color       = 'rgba(255, 124, 57, 0.8)';
  $line1linecolor   = 'rgba(255,131,47, 1)';
  $line2color       = '#1ABECE';
  $line2markercolor = '#33D7E7';
  $xcrosshaircolor  = '#009bab';
  $ycrosshaircolor  = '#ff832f';
} else {
  $backgroundcolor        = $darkbackgroundcolor;
  $tooltipbackgroundcolor = $darktooltipbackgroundcolor;
  $fontcolor              = $darkfontcolor;
  $gridcolor              = $darkgridcolor;
  $line1color             = $darkline1color;
  $line1linecolor         = $darkline1linecolor;
  $line2color             = $darkline2color;
  $line2markercolor       = $darkline2markercolor;
  $xcrosshaircolor        = $darkxcrosshaircolor;
  $ycrosshaircolor        = $darkycrosshaircolor;
}

?>