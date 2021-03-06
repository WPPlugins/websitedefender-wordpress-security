<?php
/*
 * Displays the Available Tools
 * 
 * @package ACX
 * @since v0.1
 */
?>
<?php
    //@@ require a valid request
if (!defined('ACX_PLUGIN_NAME')) { exit; }
    //@@ Only load in the plug-in pages
if (!ACX_SHOULD_LOAD) { exit; }
?>

<div id="acx-wrapper" class="tools-page">
    
    <div id="acx-header">
        <h2><?php echo ACX_PLUGIN_NICE_NAME;?></h2>
    </div>
    
    <div id="acx-page-content">
        
        <div class="metabox-holder">
            <?php
            /*
             * PASSWORD STRENGTH TOOL
             * ================================================================
             */
            ?>
            <div id="pst" style="width:99.8%;" class="inner-sidebar1 postbox">
                <h3 class="hndle"><span><?php echo __('Password Strength');?></span></h3>
                <div class="inside" style="padding-bottom: 10px;">
                    <?php
                        echo acxUtil::loadTemplate('box-password-strength');
                    ?>
                </div>
            </div>

            <div style="clear:both"></div>
        </div>
    
    
    </div><?php /*[ End #acx-page-content ]*/ ?>
</div><?php /*[ End #acx-wraper ]*/ ?>    