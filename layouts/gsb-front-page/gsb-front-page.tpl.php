<?php
/**
 * @file
 * Template for Panopoly Selby Flipped.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="row span12 clear-row panel-display gsb-front-page clearfix <?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="span12 row clear-row front-panel-header-row">
    <div class="span9 front-slider-pane">
      <?php print $content['contentslider']; ?>
    </div>
    <div class="span3 front-sidebar-pane">
      <?php print $content['sidebarnavigation']; ?>
    </div>
  </div>
  <div class="span12 row clear-row front-panel-feature-row">
    <div class="span6  front-feature-one">
      <?php print $content['featuredcolone']; ?>
    </div>
    <div class="span3 front-panel-feature-two">
      <?php print $content['featuredcoltwo']; ?>
    </div>
    <div class="span3 front-panel-feature-three">
      <?php print $content['featuredcolthree']; ?>
    </div>
  </div>
  <div class="span12 row clear-row front-panel-footer-two">
    <div class="span6  front-panel-footer-one">
      <?php print $content['footercolone']; ?>
    </div>
    <div class="span3 front-panel-footer-two">
      <?php print $content['footercoltwo']; ?>
    </div>
    <div class="span3 front-panel-footer-three">
      <?php print $content['footercolthree']; ?>
    </div>
  </div>
</div><!-- /.gsb-front-page -->