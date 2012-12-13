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

<div class="row span12 clear-row panel-display gsb-landing-page-one clearfix <?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
      
          <div id="main-upper" class="row-fluid">
            <?php print $content['contentheader']; ?>
          </div>

          <div id="content-below-wrapper" class="row-fluid">
              <div id="content-upper-main" class="span8">
                <?php print $content['contentuppermain']; ?>
              </div>
              <div id="content-upper-sidebar" class="span4">
                <?php print $content['contentuppersidebar']; ?>
              </div>
              <div id="content-middle-left" class="">
                <div id="content-upper-middle-column1" class="span4">
                  <?php print $content['contentmiddlecolumn1']; ?>
                </div>
                <div id="content-upper-middle-column2" class="span4">
                  <?php print $content['contentmiddlecolumn2']; ?>
                </div>
              
                <div id="content-upper-middle-sidebar" class="span4">
                  <?php print $content['contentmiddlesidebar']; ?>
                </div>
              </div>
              
          </div>
          
          <div id="content-lower" class="row-fluid">
            <?php print $content['contentlowerfooter']; ?>

          </div>
  
</div><!-- /.gsb-landing-page-one -->
