<?php
/**
 * frontend_header_navigation.php
 *
 * Author: pixelcave
 *
 * The header with main navigation example (Frontend)
 *
 */
?>

<!-- Header -->
<header id="header-navbar" class="content-mini content-mini-full">
    <div class="content-boxed">
        <!-- Header Navigation Right -->
        <ul class="nav-header pull-right">
            <li>
                <!-- Themes functionality initialized in App() -> uiHandleTheme() -->
                <div class="btn-group">
				    <a data-toggle="theme" data-theme="default" tabindex="-1" href="/home/lynxplus.php">
                    <button class="btn btn-link text-white dropdown-toggle" type="button">
                        <span class="font-w600"> Alle aanbiedingen </span><i class="fa fa-chevron-right"></i>
                    </button>
					</a>
                </div>
            </li>
            <li class="hidden-md hidden-lg">
                <!-- Toggle class helper (for main header navigation below in small screens), functionality initialized in App() -> uiToggleClass() -->
                <button class="btn btn-link text-white pull-right" data-toggle="class-toggle" data-target=".js-nav-main-header" data-class="nav-main-header-o" type="button">
                    <i class="fa fa-navicon"></i>
                </button>
            </li>
        </ul>
        <!-- END Header Navigation Right -->

        <!-- Main Header Navigation -->
        <ul class="js-nav-main-header nav-main-header pull-right">
            <li class="text-right hidden-md hidden-lg">
                <!-- Toggle class helper (for main header navigation in small screens), functionality initialized in App() -> uiToggleClass() -->
                <button class="btn btn-link text-white" data-toggle="class-toggle" data-target=".js-nav-main-header" data-class="nav-main-header-o" type="button">
                    <i class="fa fa-times"></i>
                </button>
            </li>
            <li>
                <a class="active" href="frontend_home_header_nav.php">Home</a>
            </li>
            <li>
                <a class="nav-submenu" href="javascript:void(0)">Over ons</a>
                <ul>
                    <li>
                        <a href="frontend_about.php">DealLynx</a>
                    </li>
                    <li>
                        <a href="lynxplus.php">LynxPlus</a>
                    </li>
                    <li>
                        <a href="frontend_team.php">Team</a>
                    </li>
                    <li>
                        <a href="frontend_support.php">Contact</a>
                    </li>
                    <li>
                        <a href="frontend_support.php">Media</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="login.php">Inloggen</a>
            </li>
            <li>
                <a href="signup.php">Aanmelden</a>
            </li>
            <li>
                <a href="frontend_contact.php">Contact</a>
            </li>
        </ul>
        <!-- END Main Header Navigation -->

        <!-- Header Navigation Left -->
        <ul class="nav-header pull-left">
            <li class="header-content">
                <a class="h5" href="index.php">
                    <img style="width:43px;height:35px;" src="<?php echo $one->assets_folder; ?>/img/various/logo.png" alt="">
                </a>
            </li>
        </ul>
        <!-- END Header Navigation Left -->
    </div>
</header>
<!-- END Header -->
