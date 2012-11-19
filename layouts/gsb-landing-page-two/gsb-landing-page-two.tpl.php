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

<div class="row span9 panel-display gsb-landing-page-two clearfix <?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
      
          <div id="main-upper" class="row-fluid">
            <?php print $content['contentheader']; ?>
          </div>



          <div id="content-below-wrapper" class="row-fluid span12">
              <div id="content-upper-wrapper" class="row-fluid span8">
                  <div id="content-upper-main" class="span12">
                    <?php print $content['contentuppermain']; ?>
                  </div>
                  <div id="content-lower-main" class="span12">
                    <?php print $content['contentlowermain']; ?>
                  </div>
                  <div id="content-upper-middle-column1" class="span6">
                     <?php print $content['contentmiddlecolumn1']; ?>
                  </div>
                  <div id="content-upper-middle-column2" class="span5">
                    <?php print $content['contentmiddlecolumn2']; ?>
                  </div>
               </div>
                  <div id="content-sidebar" class="sidebar row-fluid span4">
                    <div id="content-upper-middle-sidebar" class="span12">
                      <?php print $content['contentuppersidebar']; ?>
                    </div>
                    <div id="content-upper-middle-sidebar" class="span12">
                      <?php print $content['contentmiddlesidebar']; ?>
                    </div>
                  </div>

          </div>

          <div id="content-lower" class="row-fluid">
                
          </div>
  
</div><!-- /.gsb-landing-page-one -->
