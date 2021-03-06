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
        <div class="col-sm-6 col-md-4">
            <div class="well">
            <?php tpl_include_page('association:presentation'); ?>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <?php tpl_include_page('actus'); ?>
        </div>
        <div class="col-sm-6 col-md-4">
            <h2>&Eacute;v&eacute;nements du Libre</h2>
            <?php _tpl_agenda_short('http://www.agendadulibre.org/events.rss?region=16&daylimit=35'); ?>
        </div>
        <div class="clearfix hidden-xs hidden-sm"></div>
        <div class="col-sm-6 col-md-4">
            <?php tpl_include_page('rencontres:presentation'); ?>
        </div>
        <div class="col-sm-6 col-md-4">
            <?php tpl_include_page('installparty:presentation'); ?>
        </div>
        <div class="col-sm-6 col-md-4">
            <?php tpl_include_page('ateliers:presentation'); ?>
        </div>
    </div>
