<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/slick/slick.min.css">
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/slick/slick-theme.min.css">
<script type="text/javascript">
(function () {
    function checkTime(i) {
        return (i < 10) ? "0" + i : i;
    }

    function startTime() {
        var today = new Date(),
            h = checkTime(today.getHours()),
            m = checkTime(today.getMinutes()),
            s = checkTime(today.getSeconds());
        document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
        t = setTimeout(function () {
            startTime()
        }, 500);
    }
    startTime();
})();
</script> 
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<body onLoad="show_clock()">

<!-- Page Header -->
<div class="content bg-image overflow-hidden" style="background-image: url('<?php echo $one->assets_folder; ?>/img/various/dash.jpg');">
    <div class="push-50-t push-15">
        <h1 class="h2 text-white animated zoomIn">Dashboard</h1>
        <h2 class="h5 text-white-op animated zoomIn">Welkom Terug!</h2>
    </div>
</div>
<!-- END Page Header -->

<!-- Stats -->
<div class="content bg-white border-b">
    <div class="row items-push text-uppercase">
        <div class="col-xs-6 col-sm-3">
            <div class="font-w700 text-gray-darker animated fadeIn">Aanbiedingen geplaatst</div>
            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> Totaal</small></div>
            <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.php">-</a>
        </div>
        <div class="col-xs-6 col-sm-3">
            <div class="font-w700 text-gray-darker animated fadeIn">Aantal keer gestemt</div>
            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> Totaal</small></div>
            <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.php">-</a>
        </div>
        <div class="col-xs-6 col-sm-3">
            <div class="font-w700 text-gray-darker animated fadeIn">Reacties geplaatst</div>
            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> Totaal</small></div>
            <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.php">-</a>
        </div>
        <div class="col-xs-6 col-sm-3">
            <div class="font-w700 text-gray-darker animated fadeIn">Geld bespaard</div>
            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> Totaal</small></div>
            <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.php">-</a>
        </div>
    </div>
</div>
<!-- END Stats -->

<!-- Page Content -->
<div class="content">
    <div class="row">
        <div class="col-lg-8">
            <!-- Main Dashboard Chart -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Plaats een nieuwe aanbieding</h3>
                </div>
                <div class="block-content">
                    <form class="form-horizontal push-10-t push-10" action="base_forms_premade.php" method="post" onsubmit="return false;">
                        <div class="form-group">
                            <div class="col-xs-6">
                                <div class="form-material floating">
                                    <input class="form-control" type="text" id="contact3-firstname" name="contact3-firstname">
                                    <label for="contact3-firstname">Aanbieding URL</label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-material floating">
                                    <input class="form-control" type="text" id="contact3-lastname" name="contact3-lastname">
                                    <label for="contact3-lastname">Aanbieding Foto URL</label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-material floating">
                                    <input class="form-control" type="text" id="contact3-oudprijs" name="contact3-oudprijs">
                                    <label for="contact3-oudprijs">Oude prijs</label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-material floating">
                                    <input class="form-control" type="text" id="contact3-nieuwprijs" name="contact3-nieuwprijs">
                                    <label for="contact3-nieuwprijs">Nieuwe prijs</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material floating input-group">
                                    <input class="form-control" type="text" id="contact3-titel" name="contact3-titel">
                                    <label for="contact3-titel">Titel</label>
                                    <span class="input-group-addon">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material floating">
                                    <select class="form-control" id="contact3-subject" name="contact3-subject" size="1">
                                        <option value="1">Audio</option>
                                        <option value="2">Beauty</option>
                                        <option value="3">Diensten</option>
                                        <option value="4">Digitaal</option>
                                        <option value="5">Elektronica</option>
                                        <option value="6">Games</option>
                                        <option value="7">Huis</option>
                                        <option value="8">Mobiel en Tablets</option>
                                        <option value="9">Vakantie</option>
                                        <option value="10">Video</option>
                                        <option value="11">Vrije tijd en Ontspanning</option>
                                    </select>
                                    <label for="contact3-subject">Categorie</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material floating">
                                    <textarea class="form-control" id="contact3-msg" name="contact3-msg" rows="7"></textarea>
                                    <label for="contact3-msg">Beschrijving</label>
                                </div>
                                <div class="help-block text-right">Wees vrij om tags te gebruiken: &lt;blockquote&gt;, &lt;strong&gt;, &lt;em&gt;</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <button class="btn btn-sm btn-info" type="submit"><i class="fa fa-send push-5-r"></i> Plaats aanbieding</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Material (floating) Contact -->
        </div>
        <div class="col-lg-4">
            <!-- Latest Sales Widget -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Laatste activiteit op jouw aanbiedingen</h3>
                </div>
                <div class="block-content bg-gray-lighter">
                    <div class="row items-push">
                        <div class="col-xs-4">
                            <div class="text-muted"><small><i class="si si-calendar"></i> 24 uur</small></div>
                            <div class="font-w600">18 Stemmen</div>
                        </div>
                        <div class="col-xs-4">
                            <div class="text-muted"><small><i class="si si-calendar"></i> 24 uur</small></div>
                            <div class="font-w600">78 Reacties</div>
                        </div>
                        <div class="col-xs-4">
                            <div class="text-muted"><small><i class="si si-calendar"></i> 24 uur</small></div>
                            <div class="font-w600">78 Sales</div>
                        </div>
                    </div>
                </div>
                <div class="block-content">
                    <div class="pull-t pull-r-l">
                        <!-- Slick slider (.js-slider class is initialized in App() -> uiHelperSlick()) -->
                        <!-- For more info and examples you can check out http://kenwheeler.github.io/slick/ -->
                        <div class="js-slider remove-margin-b" data-slider-autoplay="true" data-slider-autoplay-speed="2500">
                            <div>
                                <table class="table remove-margin-b font-s13">
                                    <tbody>
                                        <tr>
                                            <td class="font-w600"><a href="javascript:void(0)">Admin Template</a></td>
                                            <td class="hidden-xs text-muted text-right" style="width: 70px;">23:01</td>
                                            <td class="font-w600 text-success text-right" style="width: 70px;">+ $21</td>
                                        </tr>
                                        <tr>
                                            <td class="font-w600"><a href="javascript:void(0)">WP Theme</a></td>
                                            <td class="hidden-xs text-muted text-right">22:15</td>
                                            <td class="font-w600 text-success text-right">+ $52</td>
                                        </tr>
                                        <tr>
                                            <td class="font-w600"><a href="javascript:void(0)">HTML Template</a></td>
                                            <td class="hidden-xs text-muted text-right">22:01</td>
                                            <td class="font-w600 text-success text-right">+ $16</td>
                                        </tr>
                                        <tr>
                                            <td class="font-w600"><a href="javascript:void(0)">Admin Template</a></td>
                                            <td class="hidden-xs text-muted text-right">21:45</td>
                                            <td class="font-w600 text-success text-right">+ $23</td>
                                        </tr>
                                        <tr>
                                            <td class="font-w600"><a href="javascript:void(0)">WP Theme</a></td>
                                            <td class="hidden-xs text-muted text-right">21:15</td>
                                            <td class="font-w600 text-success text-right">+ $48</td>
                                        </tr>
                                        <tr>
                                            <td class="font-w600"><a href="javascript:void(0)">Admin Template</a></td>
                                            <td class="hidden-xs text-muted text-right">20:11</td>
                                            <td class="font-w600 text-success text-right">+ $23</td>
                                        </tr>
                                        <tr>
                                            <td class="font-w600"><a href="javascript:void(0)">WP Theme</a></td>
                                            <td class="hidden-xs text-muted text-right">20:01</td>
                                            <td class="font-w600 text-success text-right">+ $50</td>
                                        </tr>
                                        <tr>
                                            <td class="font-w600"><a href="javascript:void(0)">HTML Template</a></td>
                                            <td class="hidden-xs text-muted text-right">19:35</td>
                                            <td class="font-w600 text-success text-right">+ $16</td>
                                        </tr>
                                        <tr>
                                            <td class="font-w600"><a href="javascript:void(0)">WP Theme</a></td>
                                            <td class="hidden-xs text-muted text-right">19:17</td>
                                            <td class="font-w600 text-success text-right">+ $60</td>
                                        </tr>
                                        <tr>
                                            <td class="font-w600"><a href="javascript:void(0)">WP Theme</a></td>
                                            <td class="hidden-xs text-muted text-right">17:49</td>
                                            <td class="font-w600 text-success text-right">+ $59</td>
                                        </tr>
                                        <tr>
                                            <td class="font-w600"><a href="javascript:void(0)">WP Theme</a></td>
                                            <td class="hidden-xs text-muted text-right">17:49</td>
                                            <td class="font-w600 text-success text-right">+ $59</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END Slick slider -->
                    </div>
                </div>
            </div>
            <!-- END Latest Sales Widget -->
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <!-- Block Tabs Justified Alternative Style -->
            <div class="block">
                <ul class="nav nav-tabs nav-tabs-alt nav-justified" data-toggle="tabs">
                    <li class="active">
                        <a href="#btabs-alt-static-justified-home"><i class="fa fa-thermometer-half"></i> Heet vandaag</a>
                    </li>
                    <li>
                        <a href="#btabs-alt-static-justified-profile"><i class="fa fa-thermometer-three-quarters"></i> Heet deze week</a>
                    </li>
                    <li>
                        <a href="#btabs-alt-static-justified-settings"><i class="fa fa-thermometer-full"></i> Heet deze maand</a>
                    </li>
                </ul>
                <div class="block-content tab-content">
                    <div class="tab-pane active" id="btabs-alt-static-justified-home">
                        <h4 class="font-w300 push-15">Heet vandaag</h4>
<script type="text/javascript" src="https://dev.deallynx.net/dashboard/liveclock.js"></script>
                    </div>
                    <div class="tab-pane" id="btabs-alt-static-justified-profile">
                        <h4 class="font-w300 push-15">Heet deze week</h4>
                        <p>...</p>
                    </div>
                    <div class="tab-pane" id="btabs-alt-static-justified-settings">
                        <h4 class="font-w300 push-15">Heet deze maand</h4>
                        <p>...</p>
                    </div>
                </div>
            </div>
            <!-- END Block Tabs Justified Default Style -->
        </div>
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page Plugins -->
<script src="<?php echo $one->assets_folder; ?>/js/plugins/slick/slick.min.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/chartjs/Chart.min.js"></script>

<!-- Page JS Code -->
<script src="<?php echo $one->assets_folder; ?>/js/pages/base_pages_dashboard.js"></script>
<script>
    jQuery(function(){
        // Init page helpers (Slick Slider plugin)
        App.initHelpers('slick');
    });
</script>

<?php require 'inc/views/template_footer_end.php'; ?>