<?
/**
 * @author      Flurin Dürst
 * @version     1.3
 * @since       WPSeed 0.1
 */
?>
<!DOCTYPE html>
<html <? language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1, initial-scale=1, user-scalable=no">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <style>
/* Navigation Menu */
.menu-nav2-container {
    margin-top: 24px;
    margin-top: 1.714285714rem;
    text-align: center;
}
.menu-nav2-container li {
    margin-top: 24px;
    margin-top: 1.714285714rem;
    font-size: 12px;
    font-size: 0.857142857rem;
    line-height: 1.42857143;
}
.menu-nav2-container a {
    color: #5e5e5e;
}
.menu-nav2-container a:hover,
.menu-nav2-container a:focus {
    color: #21759b;
}
.menu-nav2-container ul.sub-menu,
.menu-nav2-container div.sub-menu > ul {
  visibility: hidden;
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 598;
  width: 100%;
}

.menu-nav2-container ul li:hover > ul {
  visibility: visible;
}
 
.menu-nav2-container ul.sub-menu.toggled-on,
.menu-toggle {
    display: inline-block;
}
</style>
    <!--===== OPEN-GRAPH TAGS =====-->
    <meta property="og:title" content="<? bloginfo('name'); ?>">
    <meta property="og:description" content="<? bloginfo('description'); ?>">
    <meta property="og:url" content="<? bloginfo('url'); ?>">
    <meta property="og:image" content="<? bloginfo('template_url') ?>/dist/images/ogimg.jpg">
    <meta property="og:image:width" content="">
    <meta property="og:image:height" content="">
    <? wp_head(); ?>
  </head>

  <body>

      <div class="top">
        <a href="<?= get_bloginfo('url'); ?>">
          <div class="logo"></div>
        </a>
        <button class="hamburger--squeeze" id="hamburger" type="button">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
        <nav id="nav_main" class="hiddenmobile">
          <ul>
          <? $frontPageID = get_option('page_on_front') ?>
          <? 
            wp_nav_menu(
              array(
                'menu' => 'Nav2',
                // 'link_before' => '<span class="screen-reader-text">',
                // 'link_after' => '</span>',
              )
            );
          ?>
          </ul>
        </nav>
        <div class="phys-locator">
          <h3>Physician Locator</h3>
            <select name="phys-locator" form="state-select">
              <option value="AL">Alabama</option>
              <option value="AK">Alaska</option>
            </select>
        </div>
      </div>
