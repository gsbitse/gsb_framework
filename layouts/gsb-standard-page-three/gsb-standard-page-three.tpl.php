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

<div class="row span9 panel-display gsb-standard-page-three clearfix <?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
      
          

          <div id="content-below-wrapper" class="row-fluid">
            <div id="content-main" class="span12">
            <?php print $content['contentmain']; ?>
            </div>    
          </div>
        
  
</div><!-- /.gsb-standard-page-three -->
