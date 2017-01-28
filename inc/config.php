<?php
/**
 * config.php
 *
 *
 * Global configuration file
 *
 */

// Include Template class
require 'classes/Template.php';

// Create a new Template Object
$one                               = new Template('OneUI', '3.1', 'assets'); // Name, version and assets folder's name

// Global Meta Data
$one->author                       = 'DealLynx';
$one->robots                       = 'index, follow';
$one->title                        = 'DealLynx - De aanbiedingen & kortingscodes community van Nederland!';
$one->description                  = 'DealLynx is een Nederlandse aanbiedingen en kortingscodes website waarop de community de aanbiedingen zelf plaatst & beoordeeld!';

// Global Included Files (eg useful for adding different sidebars or headers per page)
$one->inc_side_overlay             = 'base_side_overlay.php';
$one->inc_sidebar                  = 'base_sidebar.php';
$one->inc_header                   = 'base_header.php';

// Global Color Theme
$one->theme                        = '';       // '' for default theme or 'amethyst', 'city', 'flat', 'modern', 'smooth'

// Global Cookies
$one->cookies                      = true;    // True: Remembers active color theme between pages (when set through color theme list), False: Disables cookies

// Global Body Background Image
$one->body_bg                      = 'assets/img/photos/bg.png';       // eg 'assets/img/photos/photo10@2x.jpg' Useful for login/lockscreen pages

// Global Header Options
$one->l_header_fixed               = true;     // True: Fixed Header, False: Static Header

// Global Sidebar Options
$one->l_sidebar_position           = 'left';   // 'left': Left Sidebar and right Side Overlay, 'right': Flipped position
$one->l_sidebar_mini               = false;    // True: Mini Sidebar Mode (> 991px), False: Disable mini mode
$one->l_sidebar_visible_desktop    = true;     // True: Visible Sidebar (> 991px), False: Hidden Sidebar (> 991px)
$one->l_sidebar_visible_mobile     = false;    // True: Visible Sidebar (< 992px), False: Hidden Sidebar (< 992px)

// Global Side Overlay Options
$one->l_side_overlay_hoverable     = false;    // True: Side Overlay hover mode (> 991px), False: Disable hover mode
$one->l_side_overlay_visible       = false;    // True: Visible Side Overlay, False: Hidden Side Overlay

// Global Sidebar and Side Overlay Custom Scrolling
$one->l_side_scroll                = true;     // True: Enable custom scrolling (> 991px), False: Disable it (native scrolling)

// Global Active Page (it will get compared with the url of each menu link to make the link active and set up main menu accordingly)
$one->main_nav_active              = basename($_SERVER['PHP_SELF']);

// Google Maps API Key (you will have to obtain a Google Maps API key to use Google Maps, for more info please have a look at https://developers.google.com/maps/documentation/javascript/get-api-key#key)
$one->google_maps_api_key          = '';

// Global Main Menu
$one->main_nav                     = array(
// Dashboard
    array(
        'name'  => '<span class="sidebar-mini-hide">Dashboard</span>',
        'icon'  => 'si si-speedometer',
        'url'   => 'base_pages_dashboard.php'
    ),
// Aanbiedingen
    array(
        'name'  => '<span class="sidebar-mini-hide">Aanbiedingen</span>',
        'type'  => 'heading'
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Aanbiedingen</span>',
        'icon'  => 'fa fa-tags ',
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Categorien</span>',
        'icon'  => 'fa fa-list',
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Winkels</span>',
        'icon'  => 'fa fa-shopping-basket',
    ),
// uitgelichte categorien
    array(
        'name'  => '<span class="sidebar-mini-hide">Uitgelicht</span>',
        'type'  => 'heading'
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Media Markt BTW Dagen</span>',
        'icon'  => 'si si-badge',
    ),
);