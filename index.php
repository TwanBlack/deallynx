<?php require 'inc/config.php'; require 'inc/frontend_config.php'; ?>
<?php
// Specific Page Options
$one->inc_sidebar               = false;
$one->inc_header                = 'frontend_header_navigation.php';
$one->l_sidebar_mini            = false;
$one->l_sidebar_position        = false;
$one->l_sidebar_visible_desktop = false;
$one->l_side_scroll             = true;
?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/frontend_head.php'; ?>

<!-- Hero Content -->
<div class="bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/img/various/hero1.jpg');">
    <div class="bg-primary-dark-op">
        <section class="content content-full content-boxed overflow-hidden">
            <!-- Section Content --><br><br><br><br><br>
            <div class="push-100-t push-50 text-center">
                <h1 class="h2 text-white push-10 visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">Weledawerdawkom bij DealLynx</h1>
                <h2 class="h5 text-white-op push-50 visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">De Nederlandse aanbiedingen en kortingscodes website waarop de community de aanbiedingen zelf plaatst & beoordeeld!</h2>
                <a class="btn btn-rounded btn-noborder btn-lg btn-primary visibility-hidden" data-toggle="appear" data-class="animated bounceIn" data-timeout="800" href="deals.php">Bekijk de Deals</a>
            </div><br><br><br><br><br>
            <!-- END Section Content -->
        </section>
    </div>
</div>
<!-- END Hero Content -->

<!-- Classic Features #2 -->
<div class="bg-white">
    <section class="content content-boxed">
        <!-- Section Content -->
        <div class="row items-push-3x push-50-t nice-copy">
            <div class="col-sm-4">
                <div class="text-center push-30">
                    <span class="item item-2x item-circle border">
                        <i class="fa fa-pencil-square-o" style="color:CornflowerBlue"></i>
                    </span>
                </div>
                <h3 class="h5 font-w600 text-uppercase text-center push-10">Plaats deals</h3>
                <p><center>Plaats net als de rest van de DealLynx community de beste deals die je op het internet, TV, radio of in een winkel kan vinden!</center></p>
            </div>
            <div class="col-sm-4">
                <div class="text-center push">
                    <span class="item item-2x item-circle border">
                        <i class="fa fa-thermometer-full" style="color:CornflowerBlue"></i>
                    </span>
                </div>
                <h3 class="h5 font-w600 text-uppercase text-center push-10">Beoordeel deals</h3>
                <p><center>Vind je een geplaatste deel 'Heet' of 'Koud'? Stem mee op deals van anderen om ze te beoordelen. Zo weten anderen ook direct of het een interessante aanbieding is of niet!</center></p>
            </div>
            <div class="col-sm-4">
                <div class="text-center push">
                    <span class="item item-2x item-circle border">
                        <i class="fa fa-trophy" style="color:CornflowerBlue"></i>
                    </span>
                </div>
                <h3 class="h5 font-w600 text-uppercase text-center push-10">Win tegekke prijzen</h3>
                <p><center>Wij worden gesponsord door GearBest, Lightinthebox, Miniinthebox en Banggood. Hierdoor kunnen we jou exclusieve kortingen, coupon codes en gratis producten geven!</center></p>
            </div>
        </div>
        <!-- END Section Content -->
    </section>
</div>
<!-- END Classic Features #2 -->

<!-- Mini Stats -->
<div class="bg-white">
    <section class="content content-boxed">
        <!-- Section Content -->
        <div class="row items-push push-20-t push-20 text-center">
            <div class="col-sm-4">
                <div class="h1 push-5" data-toggle="countTo" data-to="420" data-after="+"></div>
                <div class="font-w600 text-uppercase text-muted">Geregistreerde leden</div>
            </div>
            <div class="col-sm-4">
                <div class="h1 push-5" data-toggle="countTo" data-to="420" data-after="+"></div>
                <div class="font-w600 text-uppercase text-muted">Aanbiedingen geplaatst</div>
            </div>
            <div class="col-sm-4">
                <div class="h1 push-5" data-toggle="countTo" data-to="420" data-after="+"></div>
                <div class="font-w600 text-uppercase text-muted">Reacties geplaatst</div>
            </div>
        </div>
        <!-- END Section Content -->
    </section>
</div>

<!-- Get Started -->
<div class="bg-gray-lighter">
    <section class="content content-full content-boxed">
        <!-- Section Content -->
        <div class="push-20-t push-20 text-center">
            <h3 class="h4 push-20 visibility-hidden" data-toggle="appear">Ben je klaar om op koopjesjacht te gaan?</h3>
            <a class="btn btn-rounded btn-noborder btn-lg btn-primary visibility-hidden" data-toggle="appear" data-class="animated bounceIn" href="frontend_pricing.php">Meld je gratis aan!</a>
        </div>
        <!-- END Section Content -->
    </section>
</div>
<!-- END Get Started -->

<?php require 'inc/views/frontend_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page JS Code -->
<script>
    jQuery(function(){
        // Init page helpers (Appear + CountTo plugins)
        App.initHelpers(['appear', 'appear-countTo']);
    });
</script>

<?php require 'inc/views/template_footer_end.php'; ?>