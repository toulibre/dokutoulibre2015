<?php
/**
 * Template start page, included in the main
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();
require_once(DOKU_INC.'inc/FeedParser.php');
?>

<div class="start-page">
    <div class="row">
        <div class="col-md-4">
            <?php tpl_include_page('asso'); ?>
        </div>
        <div class="col-md-4">
            <?php tpl_include_page('actus'); ?>
        </div>
        <div class="col-md-4">
            <?php tpl_include_page('agenda'); ?>
            
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <?php tpl_include_page('rencontres'); ?>
        </div>
        <div class="col-md-4">
            <?php tpl_include_page('install_parties'); ?>
        </div>
        <div class="col-md-4">
            <?php tpl_include_page('ateliers'); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <?php tpl_include_page('contact'); ?>
        </div>
        <div class="col-md-4">
            <?php tpl_include_page('participer'); ?>
        </div>


</div>
