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

<div class="row span12 clear-row panel-display gsb-business-insights clearfix <?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
          <div class="row-fluid gsb-bizin-wrapper">
              <div class="span9 row clear-row gsb-bizin-content">
                <div class="span12 row first-row gsb-bizin-header">
                  <?php print $content['contentoneone']; ?>
                </div>
                <div class="span12 row clear-row">
                  <div class="span4">
                    <?php print $content['contenttwoone']; ?>
                  </div>
                  <div class="span4">
                    <?php print $content['contenttwotwo']; ?>
                  </div>
                  <div class="span4">
                    <?php print $content['contenttwothree']; ?>
                  </div>
                </div>
                <div class="span12 row gsb-bizin-quote clear-row">
                  <?php print $content['contentthreeone']; ?>
                </div>
                <div class="span12 row clear-row">
                  <div class="span4">
                    <?php print $content['contentfourone']; ?>
                  </div>
                  <div class="span4">
                    <?php print $content['contentfourtwo']; ?>
                  </div>
                  <div class="span4">
                    <?php print $content['contentfourthree']; ?>
                  </div>
                </div>
                <div class="span12 row gsb-bizin-footer clear-row">
                  <?php print $content['contentfiveone']; ?>
                </div>
              </div>
              <div  class="span3 gsb-bizin-sidebar">
                <?php print $content['contentrightone']; ?>
              </div>              
          </div>
  
</div><!-- /.gsb-business-insights -->