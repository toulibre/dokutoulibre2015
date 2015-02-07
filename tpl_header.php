<?php
/**
 * Template header, included in the main and detail files
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();
?>

<!-- ********** HEADER ********** -->
<div id="dokuwiki__header">
    <div class="pad group">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                    <a class="navbar-brand" href="./"><?php echo $conf['title']; ?></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <?php tpl_includeFile('nav.html');?>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Options<b class="caret"></b></a>
                            <?php _tpl_output_page_tools($showTools, 'li'); ?>
                        </li>
                        <?php _tpl_userinfo(); ?>
                        <li>
                            <div class="navbar-form form-group" role="search">
                                <?php _tpl_output_search_bar(); ?>
                            </div>
                        </li>
                    </ul>
                </div>
            </div> <!-- container -->
        </nav> <!-- navbar -->

        <?php html_msgarea() /* occasional error and info messages on top of the page */ ?>
        <?php tpl_includeFile('header.html') ?>

    </div>
</div><!-- /header -->
