<?php
/**
 * @file
 * The primary PHP file for this theme.
 */

 function bootstrap_subtheme_preprocess_page(&$vars) {
    // - page--example.tpl.php  

 if (isset($vars['node'])) {
$vars['theme_hook_suggestion'] = 'page__'.$vars['node']->type; //
}
}
