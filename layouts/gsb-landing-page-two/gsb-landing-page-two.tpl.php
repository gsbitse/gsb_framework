<?php
/**
 * @file
 * Template for Panopoly Landing Page Two.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="row span12 clear-row panel-display gsb-landing-page-two clearfix <?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
      
          <div id="main-upper" class="row-fluid">
            <?php print $content['contentheader']; ?>
          </div>



          <div id="content-below-wrapper" class="row-fluid span12 clear-row">
              <div id="content-upper-wrapper" class="row-fluid span8">
                  <div id="content-upper-main" class="span12 clear-row">
                    <?php print $content['contentuppermain']; ?>
                  </div>
                  <div id="content-lower-main" class="span12 clear-row">
                    <?php print $content['contentlowermain']; ?>
                  </div>
                  <div id="content-upper-middle-column1" class="span6 clear-row">
                     <?php print $content['contentmiddlecolumn1']; ?>
                  </div>
                  <div id="content-upper-middle-column2" class="span6">
                    <?php print $content['contentmiddlecolumn2']; ?>
                  </div>
               </div>
                <div id="content-sidebar" class="float-right span4">
                    <div id="content-upper-middle-sidebar" class="span12 clear-row">
                      <?php print $content['contentuppersidebar']; ?>
                    </div>
                    <div id="content-lower-middle-sidebar" class="span12 clear-row">
                      <?php print $content['contentmiddlesidebar']; ?>
                    </div>
                </div>
              </div>

          </div>

          <div id="content-lower" class="row-fluid">
                
          </div>
  
</div><!-- /.gsb-landing-page-one -->
